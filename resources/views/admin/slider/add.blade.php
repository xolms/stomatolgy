@extends('layouts.admin')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Добавление</h3>
        </div>
        <form role="form" method="post" action="{{route('slider.store')}}" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                    <label for="alt">Alt</label>
                    <input type="text" class="form-control" id="alt" name="alt" placeholder="">
                </div>
                <div class="form-group">
                    <label for="img">Выберите изображение</label>
                    <input type="file" id="img" name="img">

                </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" value="{{URL::previous()}}" name="url">
                <button type="submit" class="btn btn-primary">Добавить</button>
            </div>
        </form>
    </div>
@endsection