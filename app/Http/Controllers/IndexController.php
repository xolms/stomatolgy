<?php

namespace App\Http\Controllers;

use App\Application;
use App\Background;
use App\Doctor;
use App\Infograf;
use App\Mail\SendMail;
use App\Mail\SendPhone;
use App\Meta;
use App\Page;
use App\Review;
use App\Setting;
use App\Slider;
use App\Text;
use App\Title;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Ixudra\Curl\Facades\Curl;
use Kozz\Laravel\Facades\Guzzle;

class IndexController extends Controller
{
    public function index($page = 'index') {
        $vk = Review::where('visible', '1')->orderBy('time' , 'desc')->limit(20)->get();
        $setting = Setting::orderBy('name')->get();
        $arrset = array();
        foreach ($setting as $item) {
            $arrset[$item['name']] = $item['value'];
        }

        if($page == 'index') {
            $title = Title::where('page','index')->get();
            $o_nas = Text::where('page', 'index')->first();
            $slider = Slider::all();
            $info = Infograf::orderBy('position', 'asc')->get();
            $arrtitle = array();
            foreach ($title as $item){
                $arrtitle[$item['alias']] = $item['text'];
            }
            $doctor = Doctor::orderBy('id', 'asc')->get();
            $pages = Page::all();
            $meta = Meta::where('page', 'index')->first();
            return view('pages.main', ['page' => $pages, 'vk' => $vk, 'info' => $info, 'slider' => $slider, 'meta' => $meta, 'setting' => $arrset, 'title' => $arrtitle, 'o_nas' => $o_nas, 'doctor' => $doctor]);
        }
        elseif ($page == 'ofitsialnaya-informatsiya') {
            $title = Title::where('page','index')->get();
            $arrtitle = array();

            foreach ($title as $item){
                $arrtitle[$item['alias']] = $item['text'];
            }
            return view('pages.info', [  'setting' => $arrset, 'title' => $arrtitle]);
        }
        else {
            $pages = Page::where('alias', $page)->first();
            if(empty($pages)) {
                return redirect('/');
            }
            else {
                $o_nas = Text::where('page', 'index')->first();
                $usluga = Text::where('page', $page)->first();
                $pages = Page::where('alias', $page)->first();
                $title = Title::where('page',$page)->get();
                $arrtitle = array();
                $check = 1;
                foreach ($title as $item){
                    $arrtitle[$item['alias']] = $item['text'];
                }
                $key = array_map('intval', explode(',', $pages->doctor_id));
                $doctor = Doctor::whereIn('id', $key)->get();
                $meta = Meta::where('page', $page)->first();
                return view('pages.second', ['check' => $check , 'vk' => $vk, 'page' => $pages, 'doctor' => $doctor, 'meta' => $meta, 'setting' => $arrset, 'title' => $arrtitle, 'o_nas' => $o_nas, 'usluga' => $usluga]);
            }

        }
    }



    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function post(Request $request) {
        $validator = $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',

        ]);

        $input['name'] = $request->name;
        $input['phone'] = $request->phone;
        $input['page'] = $request->page;
        $status = Application::create($input);
        if ($status) {
            $setting = Setting::where('name', 'email')->first();
            Mail::to($setting->value)->send(new SendMail($status));
            Mail::to('dbcb67cd3699e@stomatology.mainsms.ru')->send(new SendPhone($status));
        }
        if($status) {
            return response()->json(['status' => 'good']);
        }
        else {
            return response()->json(['status' => 'error']);
        }



    }
}
