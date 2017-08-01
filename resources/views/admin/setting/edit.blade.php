@extends('layouts.admin')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Обновление {{$setting->name_rus}}</h3>
        </div>
        <form action="{{route('setting.update',$setting->id)}}" enctype="multipart/form-data" method="post">
            <div class="box-body">
                <div class="form-group">
                    <label for="name">{{$setting->name_rus}}</label>
                    <input type="name" class="form-control" id="name" name="name" placeholder="Введите название" value="{{!empty($setting->value) ? $setting->value : ''}}">
                </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input name="_method" type="hidden" value="PATCH">
                <button type="submit" class="btn btn-primary">
                    Обновить
                </button>
            </div>
        </form>
    </div>
@endsection