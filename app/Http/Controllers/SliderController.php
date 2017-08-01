<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::all();
        return view('admin.slider.index', ['slider' => $slider]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.add');
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
            'alt' => 'required',
            'img' => 'required'
        ]);
        $input['alt'] = $request->alt;
        if($file = $request->file('img')) {
            $namefile = time(). $file->getClientOriginalName();
            $file->move('img/slider', $namefile);
            $input['img'] = '/img/slider/'.$namefile;
        }
        $status = Slider::create($input);
        if($status) {
            Session::flash('flash_message','Успешно добавлен');
            return redirect($request->url);
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
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit', ['slider' => $slider]);
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
        $slider = Slider::findOrFail($id);
        $validator = $this->validate($request, [
            'alt' => 'required'
        ]);
        $input['alt'] = $request->alt;
        if($file = $request->file('img')) {
            File::delete(public_path().$slider->img);
            $namefile = time(). $file->getClientOriginalName();
            $file->move('img/slider', $namefile);
            $input['img'] = '/img/slider/'.$namefile;
        }
        $status = $slider->fill($input)->save();
        if($status) {
            Session::flash('flash_message','Успешно добавлен');
            return redirect($request->url);
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
        $slider = Slider::findOrFail($id);
        File::delete(public_path().$slider->img);
        $status = $slider->delete();
        if($status) {
            Session::flash('flash_message', 'успешно удален');
            return redirect('admincp/slider');
        }
    }
}
