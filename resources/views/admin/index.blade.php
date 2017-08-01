@extends('layouts.admin')
@section('content')
    Добро пожаловать, {{Auth::user()->name}}
@endsection