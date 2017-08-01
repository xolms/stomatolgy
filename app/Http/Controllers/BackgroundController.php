<?php

namespace App\Http\Controllers;

use App\Background;
use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BackgroundController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$bg = Background::all();
		return view('admin.bg.index', ['bg' => $bg]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$menu = Menu::all();
		return view('admin.bg.add', ['menu' => $menu]);
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
			'name' => 'required|max:100|unique:backgrounds,name',
			'bg' => 'required',
			'page' => 'required'
		]);
		$name = $this->tourl($this->translite($request->name));
		$input['name']= $name;
		if($file = $request->file('bg')) {
			$namefile = time(). $file->getClientOriginalName();
			$file->move('img/bg', $namefile);
			$input['bg_path'] = '/img/bg/'.$namefile;
		}
		$input['name_rus'] = $request->name;
		$input['page'] = $request->page;
		$status = Background::create($input);
		if($status) {
			Session::flash('flash_message', 'Фон успешно добавлен');
			return redirect('admincp/bg');
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
		redirect('admincp/bg');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$bg = Background::findOrFail($id);
		return view('admin.bg.edit',['bg' => $bg]);
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
		$bg = Background::findOrFail($id);
		$validator = $this->validate($request, [
			'bg' => 'required'
		]);
		if($file = $request->file('bg')) {
			$namefile = time(). $file->getClientOriginalName();
			$file->move('img/bg', $namefile);
			$input['photo_path'] = '/img/bg/'.$namefile;
		}
		$status = $bg->fill($input)->save();
		if($status) {
			Session::flash('flash_message', 'Сотрудник успешно обновлен');
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
		redirect('admincp/bg');
	}
}
