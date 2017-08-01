@extends('layouts.admin')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Измения врача для {{$page->name}}</h3>
        </div>
        <form role="form" method="post" action="{{route('doctor.page.post', $page->alias)}}" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                    <label for="page">Врач зажмите ctrl и выберите нужных врачей</label>
                    <select name="doctor[]" multiple id="page">

                        @foreach($doctor as $item)
                            @if(in_array($item->id, $doctor_active))
                                <option value="{{$item->id}}" selected>{{$item->name}}</option>
                            @else
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" value="{{URL::previous()}}" name="url">
                <input name="_method" type="hidden" value="PATCH">
                <button type="submit" class="btn btn-primary">Добавить</button>
            </div>
        </form>
    </div>
@endsection