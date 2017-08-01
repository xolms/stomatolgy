@extends('layouts.home')
@section('content')
    <header class="head">
        <div style="background-image: url(img/head_bg.jpg)" class="head__video">
            <video autoplay="autoplay" loop="loop" muted="muted">
                <source src="video/videohead.mp4" type="video/mp4"/>
            </video>
        </div>
        <div class="head__topline">
            <div class="head__logo"><a href="/"><img src="img/logo.png" alt="123"/></a></div>
            <a href="#" id="sv_on" class="btn btn-default" style="text-align: center; position: absolute; top: 70px;left: 0;right: 0;width: 320px;margin: 0 auto; text-decoration: none; color: #fff;font-size: 1.7em;"><strong>Версия для слабовидящих</strong></a>
            <div class="head__phone">
                <div class="phone__top"><a href="tel:{{str_replace([' ', '(',')'], '', $setting['phone'])}}"><span class="white">+7 978</span><span class="green">{{str_replace('+7 978 ', '', $setting['phone'])}}</span></a></div>
                <div class="phone__center">{{$setting['time_work']}}</div>
                <div class="phone__bottom">
                    <div class="buttons modal-open">Записаться </div>
                </div>
            </div>
        </div>
        <div class="head__title"><strong>{!! $title['head_top'] !!}</strong>
            <h1>{!! $title['head_center'] !!}<br/>от <span class="green">{!! $title['head_price'] !!}</span> рублей</h1>
            <h2>в Севастополe</h2>
        </div>
    </header>
    <section style="background-image: url(img/bg1.jpg)" class="section section_image section_forstom" id="forstom">
        <div class="usluga section_wrapper">
            <div class="usluga__wrapper">
                <div class="usluga__left">
                    <div class="usluga__img"><img src="{{$page->img}}" alt="{{$page->alt}}"/></div>
                </div>
                <div class="usluga__right">
                    <div class="usluga__bottom" style="text-align: center; font-weight: 400;">
                                <div class="eTimer"></div>
                    </div>
                    <h4 class="usluga__title">{{$usluga->title}}</h4>
                    <div class="usluga__text scroll">
                        {!! $usluga->text !!}
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="title">
            <h2 class="title title_up title_forstom"><span class="title_orange title_top">{!! $title['forstom_top'] !!}</span><span class="title_green title_bottom">{!! $title['forstom_bottom'] !!}</span></h2>
        </div>
        <div class="section_wrapper">
            <div class="forstom__bottom section_flex">
                <div class="forstom__left"><iframe src="https://www.youtube.com/embed/uBOmFo5fiMU" allowfullscreen></iframe></div>
                <div class="forstom__right">
                    <div class="forstom__wrap">
                        <h4 class="forstom__title">{{$o_nas->title}}</h4>
                        <div class="forstom__text scroll">
                            {!! $o_nas->text !!}
                        </div>
                        
                    </div>
                    <div class="buttons modal-open">Записаться</div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section_map section_grey section_personal second-personal" id="doctor">
        <div class="title">
            <h2 class="title title_up title_reviews title_map"><span class="title_orange title_top">{!! $title['doc_top'] !!}</span><span class="title_green title_bottom">{!! $title['doc_bottom'] !!}</span></h2>
        </div>
        <div class="section_wrapper section_personal">
            @if(count($doctor) > 1)
            <div class="personal__sliderwrap">
                <div class="personal__slider">
                    @foreach($doctor as $k => $item)
                        @if($k == 0)
                            <div data-item="0" class="item personal_button"><img src="{{$item->small_img}}" alt="{{$item->alt}}"/></div>
                        @else
                            <div data-item="{{$k}}" class="item"><img src="{{$item->small_img}}" alt="{{$item->alt}}"/></div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="personal">
                @foreach($doctor as $k => $item)
                    @if($k == 0)
                        <div class="personal__img active"><a href="{{$item->big_img}}" class="popup"><img src="{{$item->big_img}}" alt="{{$item->alt}}"/></a></div>
                    @else
                        <div class="personal__img"><a href="{{$item->big_img}}" class="popup"><img src="{{$item->big_img}}" alt="{{$item->alt}}"/></a></div>
                    @endif
                @endforeach
                <div class="personal__textwrap">
                    @foreach($doctor as $k => $item)
                        @if($k == 0)
                            <div class="personal__textitem active">
                                <div class="personal__title">{{$item->work}}<br/>{{$item->name}}</div>
                                <div class="personal__text">
                                    {!! $item->text !!}
                                </div>
                            </div>
                        @else
                            <div class="personal__textitem">
                                <div class="personal__title">{{$item->work}}<br/>{{$item->name}}</div>
                                <div class="personal__text">
                                    {!! $item->text !!}
                                </div>
                            </div>
                        @endif
                    @endforeach
                @else
        <div class="section_wrapper section_personal">
            <div class="personal">
                    @foreach($doctor as $item)
                    <div class="personal__img active"><a href="{{$item->big_img}}" class="popup"><img src="{{$item->big_img}}" alt="{{$item->alt}}"/></a></div>
                    <div class="personal__textwrap">
                        <div class="personal__textitem active">
                            <div class="personal__title">{{$item->work}}<br/>{{$item->name}}</div>
                            <div class="personal__text">
                                {!! $item->text !!}
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>

    </section>
@endsection
