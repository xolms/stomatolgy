@extends('layouts.admin')
@section('content')
	<a href="{{route('bg.create')}}">Создать</a>
    @if(isset($bg))
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Список фоновых изображений</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="table-personal" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Название</th>
                                    <th>Изображение</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($bg as $item)
                                    <tr>
                                        <td style="vertical-align: middle;">{{$item->name_rus}}</td>
                                        <td style="vertical-align: middle;"><img src="{{$item->bg_path}}" alt="{{$item->name_rus}}" style="max-width: 200px; width: 100%; height: auto;"></td>
                                        <td style="vertical-align: middle; text-align: center;">
                                            <a href="{{route('bg.edit',$item->id)}}" class="btn btn-warning btn-sm">Редактировать</a>

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