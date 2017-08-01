@extends('layouts.admin')
@section('content')
    <a href="{{route('doctor.create')}}" class="btn btn-lg btn-success  btn-lg">Добавить новую</a>
    @if(isset($doctor))
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Список</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="table-personal" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Имя</th>
                                    <th>Должность</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($doctor as $item)
                                    <tr>
                                        <td style="vertical-align: middle;">{{$item->name}}</td>
                                        <td style="vertical-align: middle;">{{$item->work}}</td>
                                        <td style="vertical-align: middle; text-align: center;">
                                            <a href="{{route('doctor.edit',$item->id)}}" class="btn btn-warning btn-sm">Редактировать</a>
                                            <form action="{{route('doctor.destroy', $item->id)}}" method="post" style="display: inline-block;">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        <h2>У вас на данный момент нет фоновых изображений</h2>
    @endif



@endsection