<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting =  Setting::orderBy('id')->get();
        return view('admin.setting.index', ['setting' => $setting]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.setting.add');
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
            'name_rus' => 'required|max:100|unique:settings,name_rus',
            'name' => 'required|unique:settings,name'
        ]);
        $input['name_rus'] = $request->name_rus;
        $input['name'] = $request->name;
        $input['type'] = $request->type;

        $status = Setting::create($input);
        if($status) {
            Session::flash('flash_message', 'успешно добавлена');
            return redirect('admincp/setting');
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
        $setting = Setting::findOrFail($id);
        return view('admin.setting.edit', ['setting' => $setting]);
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
        $setting = Setting::findOrFail($id);
        $validator = $this->validate($request, [
            'name' => 'required'
        ]);
        $input['value'] = $request->name;
        $status = $setting->fill($input)->save();
        if($status) {
            Session::flash('flash_message', 'успешно обновлена');
            return redirect('admincp/setting');
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
