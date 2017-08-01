@extends('layouts.admin')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Добавление нового фонового изображения</h3>
        </div>
        <form role="form" method="post" action="{{route('bg.store')}}" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                    <label for="name">Название</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Введите имя">
                </div>
                <div class="form-group">
                    <label for="photo_path">Выберите изображение</label>
                    <input type="file" id="photo_path" name="bg">

                </div>
				<div class="form-group">
					<label for="page">Страница</label>
					<select name="page" id="page">
						@foreach($menu as $item)
							<option value="{{$item->alias}}">{{$item->name}}</option>
						@endforeach
					</select>
				</div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-primary">Добавить</button>
            </div>
        </form>
    </div>
@endsection