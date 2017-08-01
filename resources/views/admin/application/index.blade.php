@extends('layouts.admin')
@section('content')
    @if(isset($application))
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
                                    <th>Телефон</th>
                                    <th>Имя</th>
									<th>Дата</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($application as $item)
                                    <tr>
                                        <td style="vertical-align: middle;">{{$item->phone}}</td>
                                        <td style="vertical-align: middle;">{{$item->name}}</td>
										<td style="vertical-align: middle;">{{$item->updated_at}}</td>

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