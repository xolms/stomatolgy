<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Meta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
				redirect('admincp');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
				$menu = Page::all();
        return view('admin.meta.add', ['menu' => $menu]);
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
				'title' => 'required|unique:metas,title',
				'keywords' => 'required',
				'description' => 'required'
			]);
			$input['title'] = $request->title;
			$input['keywords'] = $request->keywords;
			$input['description'] = $request->description;
			$input['page'] = $request->page;
			$status = Meta::create($input);
			if($status) {
				Session::flash('flash_message', 'Меню успешно добавлено');
				return redirect('admincp/meta/create');
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
        redirect('admincp');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($page)
    {		$meta = Meta::where('page',$page)->first();
				return view('admin.meta.edit', ['meta' => $meta]);
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
			$meta = Meta::findOrFail($id);
			$validator = $this->validate($request, [
				'title' => 'required|unique:metas,title',
				'keywords' => 'required',
				'description' => 'required'
			]);
			$input['title'] = $request->title;
			$input['keywords'] = $request->keywords;
			$input['description'] = $request->description;
			$status = $meta->fill($input)->save();
			if($status) {
				Session::flash('flash_message', 'успешно обновлено');
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
			redirect('admincp');
    }
}
