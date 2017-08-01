@extends('layouts.admin')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Обновление {{$doctor->name}}</h3>
        </div>
        <form action="{{route('doctor.update',$doctor->id)}}" enctype="multipart/form-data" method="post">
            <div class="box-body">
                <div class="form-group">
                    <label for="name">Имя</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="" value="{{$doctor->name}}">
                </div>
                <div class="form-group">
                    <label for="work">Должность</label>
                    <input type="text" class="form-control" id="work" name="work" placeholder="" value="{{$doctor->work}}">
                </div>
                <div class="form-group">
                    <label for="alt">Alt</label>
                    <input type="text" class="form-control" id="alt" name="alt" placeholder="" value="{{$doctor->alt}}">
                </div>
                <div class="form-group">
                    <label for="small_img">Выберите маленькое изображение</label>
                    <input type="file" id="small_img" name="small_img">
                </div>
                <div class="form-group">
                    <label for="big_img">Выберите большое изображение</label>
                    <input type="file" id="big_img" name="big_img">
                </div>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Текст
                        </h3>
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>

                        </div>
                        <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body pad">
                        <textarea class="textarea" id="textarea"  name="text" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" placeholder="{{$doctor->text}}">{{$doctor->text}}</textarea>
                    </div>
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