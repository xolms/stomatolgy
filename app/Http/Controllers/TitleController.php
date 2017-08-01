<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Title;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = Title::orderBy('id','asc')->get();
        return view('admin.title.index', ['title' => $title]);
    }
    public function get_for_page($page) {
    	$title = Title::where('page', $page)->get();


    	return view('admin.title.index', ['title' => $title, 'page' => $page]);
		}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.title.add');
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
            'name_rus' => 'required|max:100',
        ]);
        $page = Menu::all();
        foreach ($page as $item) {
					if (empty($request->name)) {
						$name = $this->tourl($this->translite($request->name_rus));
						$input['key'] = $name;
					}
					else {
						$input['key'] = $request->name;
					}
					$input['name'] = $request->name_rus;
					$input['page'] = $item->alias;
					$input['text'] = ' ';
					$status = Title::create($input);
				}

        if($status) {
            Session::flash('flash_message', 'успешно добавлена');
            return redirect('admincp/title/create');
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
        $title = Title::findOrFail($id);
        return view('admin.title.edit', ['title' => $title]);
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
        $title = Title::findOrFail($id);
        $validator = $this->validate($request, [
            'value' => 'required'
        ]);
        $input['text'] = trim($request->value);
        $status = $title->fill($input)->save();
        if($status) {
            Session::flash('flash_message', 'успешно обновлена');
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
