@extends('layouts.admin')
@section('content')
    <a href="{{route('header.create')}}" class="btn btn-lg btn-success  btn-sm">Добавить новый слайд</a>
	<a href="{{route('title.edit', $title->id)}}" class="btn btn-lg btn-success  btn-sm">Изменить основной заголовок</a>
	<a href="{{route('title.edit', $sec_title->id)}}" class="btn btn-lg btn-success  btn-sm">Изменить доп заголовок</a>
	<a href="{{route('title.edit', $third_title->id)}}" class="btn btn-lg btn-success  btn-sm">Изменить третий заголовок</a>
	<a href="{{route('title.edit', $price_title->id)}}" class="btn btn-lg btn-success  btn-sm">Изменить цену</a>
    @if(isset($header))
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Список слайдов</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="table-personal" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Фото</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($header as $item)
                                    <tr>
                                        <td style="vertical-align: middle;">{{$item->id}}</td>
                                        <td style="vertical-align: middle;"><img src="{{$item->slide_path}}" alt="{{$item->id}}" style="max-width: 200px; height: auto; width: 100%;"></td>
                                        <td style="vertical-align: middle; text-align: center;">
                                            <a href="{{route('header.edit',$item->id)}}" class="btn btn-warning btn-sm">Редактировать</a>
                                            <form action="{{route('header.destroy', $item->id)}}" method="post" style="display: inline-block;">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        <h2>У вас на данный момент нет сотрудников</h2>
    @endif



@endsection