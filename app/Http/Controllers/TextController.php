<?php

namespace App\Http\Controllers;

use App\Text;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class TextController extends Controller
{
    public function get($page) {
        $page = Text::where('page', $page)->first();
        return view('admin.text.edit', ['text' => $page]);
    }
    public function post($page, Request $request) {
        $text = Text::where('page', $page)->first();
        $validator = $this->validate($request, [
            'title' => 'required',
            'text' => 'required'
        ]);
        $input['text'] = $request->text;
        $input['title'] = $request->title;
        $status = $text->fill($input)->save();
        if($status) {
            Session::flash('flash_message', 'успешно обновлена');
            return redirect($request->url);
        }
    }
}
