@extends('layouts.admin')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Обновление {{$text->title}}</h3>
        </div>
        <form action="{{route('text.post',$text->page)}}" enctype="multipart/form-data" method="post">
            <div class="box-body">
                <div class="form-group">
                    <label for="title">Заголовок</label>
                    <input type="text" class="form-control" id="tile" name="title" value="{{$text->title}}">
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
						<textarea class="textarea" id="textarea"  name="text" placeholder="" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$text->text}}</textarea>
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