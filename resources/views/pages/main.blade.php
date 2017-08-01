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
            <h1>{!! $title['head_center'] !!}</h1>
            <h2>{!! $title['head_bottom'] !!}<span class="green">в Севастополe</span></h2>
        </div>
    </header>
    <section class="section section_image section_forstom" id="forstom">
        <div class="section_wrapper section_small">
            <div class="forstom__top">
                <div class="formstom__slider owl-carousel owl-theme">
                    @foreach($slider as $item)
                        <div class="item"><a href="{{$item->img}}" class="popup"><img src="{{$item->img}}" alt="{{$item->alt}}"/></a></div>
                    @endforeach
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
    <section class="section section_map section_grey section_personal" style="margin-top: 0;" id="doctor">
        <div class="title">
            <h2 class="title title_up title_reviews title_map"><span class="title_orange title_top">{!! $title['doc_top'] !!}</span><span class="title_green title_bottom">{!! $title['doc_bottom'] !!}</span></h2>
        </div>
        <div class="section_wrapper section_personal">
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
                </div>
            </div>
        </div>
    </section>
    <section class="section section_grey section_uslugi" id="uslugi">
        <h2 class="title title_up title_reviews"><span class="title_orange title_top">{!! $title['uslugi_top'] !!}</span><span class="title_green title_bottom">{!! $title['uslugi_bottom'] !!}</span></h2>
        <nav class="section_wrapper section__uslugi">
            @foreach($page as $item)
                <div class="uslugi">
                    <div class="uslugi__link">
                        <div class="ih-item circle effect1"><a href="{{$item->alias}}">
                                <div class="spinner"></div>
                                <div class="img"><img src="{{$item->img}}" alt="{{$item->alt}}"/></div>
                                <div class="info">
                                    <div class="info-back"></div>
                                </div></a></div>
                        <div class="uslugi__text"><a href="{{$item->alias}}" style="color: #285500; text-decoration: none">{!! $item->text !!}</a></div>
                    </div>
                </div>
            @endforeach
        </nav>
        <div class="buttons modal-open">Записаться </div>
    </section>
    <section class="section section_grey section_infograf" id="dostisheniya">
        <h2 class="title title_up title_reviews"><span class="title_orange title_top">{!! $title['info_top'] !!}</span><span class="title_green title_bottom">{!! $title['info_bottom'] !!}</span></h2>
        <div class="section_wrapper info__wrapper">
            @foreach($info as $k => $item)
                @if($k == 0)
                    <div class="info__item info__item_left info__item_top">
                        <div class="info__text info__text_right">{!! $item->text !!}</div>
                        <div class="info__imgwrap">
                            <div class="info__img info__img_light"><img src="{{$item->img}}" alt="{{$item->alt}}"/>
                                <div class="info__number info__number_white info__number_big">{{$item->number}}</div>
                            </div>
                        </div>
                    </div>
                @elseif($k == 1)
                    <div class="info__item info__item_right info__item_top">
                        <div class="info__imgwrap">
                            <div class="info__img info__img_dark"><img src="{{$item->img}}" alt="{{$item->alt}}"/>
                                <div class="info__number info__number_light info__number_big">{{$item->number}}</div>
                            </div>
                        </div>
                        <div class="info__text info__text_left">{!! $item->text !!}</div>
                    </div>
                @elseif($k == 2)
                    <div class="info__item info__item_left info__item_center">
                        <div class="info__text info__text_right">{!! $item->text !!}</div>
                        <div class="info__imgwrap">
                            <div class="info__img info__img_dark"><img src="{{$item->img}}" alt="{{$item->alt}}"/>
                                <div class="info__number info__number_light info__number_small">{{$item->number}}</div>
                            </div>
                        </div>
                    </div>
                @elseif($k == 3)
                    <div class="info__item info__item_right info__item_center">
                        <div class="info__imgwrap">
                            <div class="info__img info__img_light"><img src="{{$item->img}}" alt="{{$item->alt}}"/>
                                <div class="info__number info__number_dark info__number_big">{{$item->number}}</div>
                            </div>
                        </div>
                        <div class="info__text info__text_left">{!! $item->text !!}</div>
                    </div>
                @elseif($k == 4)
                    <div class="info__item info__item_left info__item_bottom">
                        <div class="info__text info__text_right">{!! $item->text !!}</div>
                        <div class="info__imgwrap">
                            <div class="info__img info__img_light"><img src="{{$item->img}}" alt="{{$item->alt}}"/>
                                <div class="info__number info__number_dark info__number_big">{{$item->number}}</div>
                            </div>
                        </div>
                    </div>
                @elseif($k == 5)
                    <div class="info__item info__item_right info__item_bottom">
                        <div class="info__imgwrap">
                            <div class="info__img info__img_dark"><img src="{{$item->img}}" alt="{{$item->alt}}"/>
                                <div class="info__number info__number_light info__number_big">{{$item->number}}</div>
                            </div>
                        </div>
                        <div class="info__text info__text_left">{!! $item->text !!}</div>
                    </div>
                @endif
            @endforeach
        </div>
    </section>
@endsection