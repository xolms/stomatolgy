@extends('layouts.admin')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Обновление {{$user->name}}</h3>
        </div>
        <form action="{{route('pass.post')}}" enctype="multipart/form-data" method="post">
            <div class="box-body">
                <div class="form-group">
                    <label for="name">Имя {{$user->name}}</label>

                </div>
                <div class="form-group">
                    <label for="email">E-mail {{$user->email}}</label>

                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" name="password" id="password">
                </div>



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