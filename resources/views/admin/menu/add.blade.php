@extends('layouts.admin')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Добавление нового пункта меню</h3>
        </div>
        <form role="form" method="post" action="{{route('menu.store')}}" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                    <label for="name">Название</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
				<div class="form-group">
					<label for="alias">Алиас</label>
					<input type="text" class="form-control" id="alias" name="alias">
				</div>
                <div class="form-group">
                    <label for="text">Текст</label>
                    <input type="text" class="form-control" id="text" name="text">
                </div>
                <div class="form-group">
                    <label for="alt">Alt</label>
                    <input type="text" class="form-control" id="alt" name="alt">
                </div>
                <div class="form-group">
                    <label for="img">Выберите изображение</label>
                    <input type="file" id="img" name="img">

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