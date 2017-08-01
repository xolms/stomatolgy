@extends('layouts.admin')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Обновление Страницы {{$page->name}}</h3>
        </div>
        <form action="{{route('menu.update',$page->id)}}" enctype="multipart/form-data" method="post">
            <div class="box-body">
                <div class="form-group">
                    <label for="name">Название</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$page->name}}">
                </div>
                <div class="form-group">
                    <label for="text">Текст</label>
                    <input type="text" class="form-control" id="text" name="text" value="{{$page->text}}">
                </div>
                <div class="form-group">
                    <label for="alt">Alt</label>
                    <input type="text" class="form-control" id="alt" name="alt" value="{{$page->alt}}">
                </div>
                <div class="form-group">
                    <label for="action">Акция</label>
                    <input type="text" class="form-control" id="action" name="action" value="{{$page->action}}">
                </div>
                <div class="form-group">
                    <label for="img">Выберите изображение</label>
                    <input type="file" id="img" name="img">

                </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
				<input type="hidden" value="{{URL::previous()}}" name="url">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input name="_method" type="hidden" value="PATCH">
                <button type="submit" class="btn btn-primary">
                    Обновить
                </button>
            </div>
        </form>
    </div>
@endsection