<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctor = Doctor::all();
        return view('admin.doctor.index', ['doctor'=>$doctor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.doctor.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->validate($request, [
            'name' => 'required',
            'work' => 'required',
            'alt' => 'required',
            'small_img' => 'required',
            'big_img' => 'required',
            'text' => 'required'
        ]);
        $input['name'] = $request->name;
        $input['work'] = $request->work;
        $input['alt'] = $request->alt;
        $input['text'] = $request->text;
        if($file = $request->file('big_img')) {
            $namefile = time(). $file->getClientOriginalName();
            $file->move('img/personal', $namefile);
            $input['big_img'] = '/img/personal/'.$namefile;
        }
        if($file = $request->file('small_img')) {
            $namefile = time(). $file->getClientOriginalName();
            $file->move('img/personal', $namefile);
            $input['small_img'] = '/img/personal/'.$namefile;
        }
        $status = Doctor::create($input);
        if($status) {
            Session::flash('flash_message','Успешно добавлен');
            return redirect('admincp/doctor');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('admin.doctor.edit', ['doctor' => $doctor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $doctor = Doctor::findOrFail($id);
        $validator = $this->validate($request, [
            'name' => 'required',
            'work' => 'required',
            'alt' => 'required',
            'text' => 'required'
        ]);
        $input['name'] = $request->name;
        $input['work'] = $request->work;
        $input['alt'] = $request->alt;
        $input['text'] = $request->text;
        if($file = $request->file('big_img')) {
            File::delete(public_path().$doctor->big_img);
            $namefile = time(). $file->getClientOriginalName();
            $file->move('img/personal', $namefile);
            $input['big_img'] = '/img/personal/'.$namefile;
        }
        if($file = $request->file('small_img')) {
            File::delete(public_path().$doctor->small_img);
            $namefile = time(). $file->getClientOriginalName();
            $file->move('img/personal', $namefile);
            $input['small_img'] = '/img/personal/'.$namefile;
        }
        $status = $doctor->fill($input)->save();
        if($status) {
            Session::flash('flash_message','Успешно добавлен');
            return redirect('admincp/doctor');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::findOrFail($id);
        File::delete(public_path().$doctor->small_img);
        File::delete(public_path().$doctor->big_img);
        $status = $doctor->delete();
        if($status) {
            Session::flash('flash_message', 'успешно удален');
            return redirect('admincp/doctor');
        }
    }

    public function get_doctor($page) {
        $doctor = Doctor::all();
        $page = Page::where('alias', $page)->first();
        $key = array_map('intval', explode(',', $page->doctor_id));
        $doctor_active = Doctor::whereIn('id', $key)->select('id')->get();
        $active = array();
        foreach($doctor_active as $item) {
            array_push($active, $item->id);
        }

        return view('admin.doctor.page', ['doctor' => $doctor, 'doctor_active' => $active, 'page' => $page]);
    }

    public function post_doctor($page, Request $request) {
        $string = implode(',', $request->doctor);
        $pages = Page::where('alias', $page)->first();
        $input['doctor_id'] = $string;
        $status = $pages->fill($input)->save();
        if($status) {
            Session::flash('flash_message','Успешно обновлен');
            return redirect($request->url);
        }

    }
}
