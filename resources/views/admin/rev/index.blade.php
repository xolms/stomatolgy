@extends('layouts.admin')
@section('content')
    @if(isset($rev))
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
									<th>Дата</th>
                                    <th>Отзыв</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($rev as $item)
                                    <tr>
                                        <td style="vertical-align: middle;">{{$item->name}}</td>
                                        <td style="vertical-align: middle;">{{$item->time}}</td>
										<td style="vertical-align: middle;">{!! $item->message !!}</td>
                                        <td>
                                            <form action="{{route('rev.edit', $item->id)}}" method="post" style="display: inline-block;">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input name="_method" type="hidden" value="patch">
                                                <input type="hidden" name="url" value="{{url()->current()}}">
                                                @if($item->visible == 1)
                                                    <button type="submit" class="btn btn-danger btn-sm">Скрыть</button>
                                                @else
                                                    <button type="submit" class="btn btn-success btn-sm">Показать</button>
                                                @endif
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