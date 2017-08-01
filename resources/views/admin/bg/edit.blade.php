@extends('layouts.admin')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Обновление Фонового изображения {{$bg->name_rus}}</h3>
        </div>
        <form action="{{route('bg.update',$bg->id)}}" enctype="multipart/form-data" method="post">
            <div class="box-body">
                <div class="form-group">
                    <label for="photo_path">Выберите фотографию</label>
                    <input type="file" id="photo_path" name="bg">

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