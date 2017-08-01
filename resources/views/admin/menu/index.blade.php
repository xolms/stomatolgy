@extends('layouts.admin')
@section('content')
    <a href="{{route('menu.create')}}" class="btn btn-lg btn-success  btn-sm">Добавить новую страницу</a>
    @if(isset($menu))
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Список страниц</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="table-personal" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Название</th>
                                    <th>Алиас</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($menu as $item)
                                    <tr>
                                        <td style="vertical-align: middle;">{{$item->name}}</td>
                                        <td style="vertical-align: middle;">{{$item->alias}}</td>
                                        <td style="vertical-align: middle; text-align: center;">
                                            <a href="{{route('menu.edit',$item->id)}}" class="btn btn-warning btn-sm">Редактировать</a>
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