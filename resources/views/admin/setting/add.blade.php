@extends('layouts.admin')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Добавить</h3>
        </div>
        <form role="form" method="post" action="{{route('setting.store')}}" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                    <label for="name_rus">Название</label>
                    <input type="text" class="form-control" id="name_rus" name="name_rus" placeholder="">
                </div>
				<div class="form-group">
					<label for="name">Название на англ</label>
					<input type="text" class="form-control" id="name" name="name" placeholder="">
				</div>
				<div class="form-group">
					<label>Тип</label>
					<select class="form-control" name="type">
						<option value="text">Текст</option>
						<option value="image">Изображение</option>
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