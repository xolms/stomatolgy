<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Ixudra\Curl\Facades\Curl;

class ReviewsController extends Controller
{
    public function index()
    {
        $rev = Review::orderBy('time', 'desc')->get();
        return view('admin.rev.index', ['rev' => $rev]);
    }

    public function visible()
    {
        $rev = Review::where('visible', '1')->get();
        return view('admin.rev.index', ['rev' => $rev]);
    }

    public function novisible()
    {
        $rev = Review::where('visible', '0')->get();
        return view('admin.rev.index', ['rev' => $rev]);
    }
    public function edit($id, Request $request){
        $rev = Review::findOrFail($id);
        if($rev->visible == 1) {
            $input['visible'] = 0;
        }
        else {
            $input['visible'] = 1;
        }
        $status = $rev->fill($input)->save();
        if($status) {
            Session::flash('flash_message','Успешно обновлен');
            return redirect($request->url);
        }
    }

    public function get()
    {
        $count = 0;
        $vk = Curl::to('https://api.vk.com/method/board.getComments')
            ->withData(array(
                'group_id' => '101537686',
                'topic_id' => '35259642',
                'count' => '10000',
                'extended' => '1',
                'sort' => 'desc'
            ))
            ->asJson()
            ->get();
        foreach ($vk->response->profiles as $profil) {
            $profil_arr[$profil->uid] = $profil;
        }
        foreach ($vk->response->comments as $k =>  $comment) {
            if($k != 0) {
                $rev_item = Review::where('rev_id', $comment->id)->first();

                if (empty($rev_item)) {
                    $profil = $profil_arr[$comment->from_id];
                    $input['message'] = $comment->text;
                    $input['time'] = date('d.m.Y H:i', $comment->date);
                    $input['user_id'] = $profil->uid;
                    $input['name'] = $profil->first_name;
                    $input['rev_id'] = $comment->id;
                    $input['user_photo'] = $profil->photo;
                    $status = Review::create($input);
                    $count++;
                }
            }
        }
        Session::flash('flash_message', 'Успешно добавлено '.$count.' отзывов');
        return redirect('admincp/reviews');
    }
}
