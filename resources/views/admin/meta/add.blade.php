@extends('layouts.admin')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Добавить</h3>
        </div>
        <form role="form" method="post" action="{{route('meta.store')}}" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                    <label for="name_rus">Заголовок</label>
                    <input type="text" class="form-control" id="name_rus" name="title" placeholder="">
                </div>
				<div class="form-group">
					<label for="name">Ключевые слова</label>
					<input type="text" class="form-control" id="name" name="keywords" placeholder="">
				</div>
				<div class="form-group">
					<label for="text">Описание</label>
					<textarea class="form-control" id="text" name="description"></textarea>
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