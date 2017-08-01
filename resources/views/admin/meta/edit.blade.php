@extends('layouts.admin')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Обновление {{$meta->title}}</h3>
        </div>
		<form method="post" action="{{route('meta.update', $meta->id)}}" enctype="multipart/form-data">
			<div class="box-body">
				<div class="form-group">
					<label for="name_rus">Заголовок</label>
					<input type="text" class="form-control" id="name_rus" name="title" placeholder="" value="{{$meta->title}}">
				</div>
				<div class="form-group">
					<label for="name">Ключевые слова</label>
					<input type="text" class="form-control" id="name" name="keywords" placeholder="" value="{{$meta->keywords}}">
				</div>
				<div class="form-group">
					<label for="text">Описание</label>
					<textarea class="form-control" id="text" name="description">{{$meta->description}}</textarea>
				</div>


			</div>
			<!-- /.box-body -->

			<div class="box-footer">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="url" value="{{URL::previous()}}">
				<input name="_method" type="hidden" value="PATCH">
				<button type="submit" class="btn btn-primary">Добавить</button>
			</div>
		</form>

    </div>
@endsection