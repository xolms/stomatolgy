<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Meta;
use App\Page;
use App\Text;

use App\Title;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Page::all();
        return view('admin.menu.index', ['menu' => $menu]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu.add');
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
				'alias' => 'required',
                'text' => 'required',
                'alt' => 'required',
                'img' => 'required'
			]);
			$input['name']= $request->name;
			if($file = $request->file('img')) {
				$namefile = time(). $file->getClientOriginalName();
				$file->move('img/menu', $namefile);
				$input['img'] = '/img/menu/'.$namefile;
			}
			$input['alt'] = $request->alt;
			$input['alias'] = $request->alias;
            $input['text'] = $request->text;
            Page::create($input);
            $meta['title'] = 'Заполните';
            $meta['description'] = 'Заполните';
            $meta['keywords'] = 'Заполните';
            $meta['page'] = $input['alias'];
            $status = Meta::create($meta);
            $title_alias = [
                'head_top',
                'head_center',
                'head_price',
                'forstom_top',
                'forstom_bottom',
                'doc_top',
                'doc_bottom',
                'rew_top',
                'rew_bottom',
                'map_top',
                'map_bottom'
            ];
            $title_title = [
                'Верхний заголовок шапки',
                'Центральный заголовок шапки',
                'Цена в шапке',
                'О стоматологии, верхний заголовок',
                'О стоматологии, нижний заголовок',
                'Врачи, верхний заголовок',
                'Врачи, нижний заголовок',
                'Отзывы, верхний заголовок',
                'Отзывы, нижний заголовок',
                'Карта, верхний заголовок',
                'Карта, нижний заголовок'
            ];
            $title_text = [
                'Стоматология Апекс',
                'Напишите услугу',
                'от цена рублей',
                'О стоматологии',
                'За 1.5 минуты',
                'Наш',
                'Врач',
                'Отзывы',
                'О нашей стоматологии',
                'Как',
                'Нас найти?'
            ];
            for($i = 0; $i<count($title_alias); $i++) {
                $title['page'] = $request->alias;
                $title['alias'] = $title_alias[$i];
                $title['title'] = $title_title[$i];
                $title['text'] = $title_text[$i];
                Title::create($title);
            }
            $text['title'] = $request->name;
            $text['page'] = $request->alias;
            $text['text'] = 'Заполни меня';
            Text::create($text);
			if($status) {
				Session::flash('flash_message', 'Меню успешно добавлено');
				return redirect('admincp/menu');
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
        $page = Page::findOrFail($id);
        return view('admin.menu.edit', ['page' => $page]);
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
        $page = Page::findOrFail($id);
        $validator = $this->validate($request, [
            'name' => 'required',
            'text' => 'required',
            'alt' => 'required',
        ]);
        $input['name']= $request->name;
        if($file = $request->file('img')) {
            $namefile = time(). $file->getClientOriginalName();
            $file->move('img/menu', $namefile);
            $input['img'] = '/img/menu/'.$namefile;
        }
        $input['alt'] = $request->alt;
        $input['text'] = $request->text;
        $input['action'] = $request->action;
        $status = $page->fill($input)->save();
        if($status) {
            Session::flash('flash_message', 'Меню успешно обновленно');
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
