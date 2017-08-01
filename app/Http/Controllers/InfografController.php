<?php

namespace App\Http\Controllers;

use App\Infograf;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class InfografController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info = Infograf::all();
        return view('admin.info.index', ['info' => $info]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $info = Infograf::findOrFail($id);
        return view('admin.info.edit', ['info' => $info]);
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
        $info = Infograf::findOrFail($id);
        $validator = $this->validate($request, [
            'text' => 'required',
            'alt' => 'required',
            'number' => 'required'
        ]);
        $input['text']= $request->text;
        $input['number'] = $request->number;
        if($file = $request->file('img')) {
            File::delete(public_path().$info->img);
            $namefile = time(). $file->getClientOriginalName();
            $file->move('img/info', $namefile);
            $input['img'] = '/img/info/'.$namefile;
        }
        $input['alt'] = $request->alt;
        $status = $info->fill($input)->save();
        if($status) {
            Session::flash('flash_message', 'успешно обновленно');
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
        //
    }
}
