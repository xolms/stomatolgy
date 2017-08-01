<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="description" content="{{$meta->description}}">
        <meta name="keywords" content="{{$meta->keywords}}">
        <meta name="yandex-verification" content="a81c1939310393c4" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jScrollPane/2.0.23/style/jquery.jscrollpane.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.1/css/hover-min.css"/>
        <link rel="shortcut icon" href="{{asset('img/favicon.ico ')}}" type="image/x-icon">
        <link rel="stylesheet" href="{{asset('style/styles.css')}}"/>
        <title>{{$meta->title}}</title>

    </head>
    <body>
    <nav class="nav">

        <a href="#" class="toggle-mnu"><span></span></a>
        <ul class="main-mnu">
            <li>
                <a href="#forstom">
                    @if(!isset($check))
                        О стоматологии
                    @else
                        Об услуге
                    @endif
                </a>
            </li>
            <li>
                <a href="#doctor">Врачи</a>
            </li>
            @if(!isset($check))
                <li>
                    <a href="#uslugi">Услуги</a>
                </li>
                <li>
                    <a href="#dostisheniya">Достижения</a>
                </li>
            @endif
            <li>
                <a href="#rev">Отзывы</a>
            </li>
            <li>
                <a href="#map">Обратная связь</a>
            </li>
        </ul>
    </nav>
    <div class="sv_settings text-center" id="sv_settings">
        <span>Размер шрифта
            <span class="fs-outer">
                <button class="btn btn-default fs-n" id="fs-n">А</button>
                <button class="btn btn-default fs-m" id="fs-m">А</button>
                <button class="btn btn-default fs-l" id="fs-l">А</button>
            </span>
        </span>

        <span class="mgl20">Цветовая схема
            <span class="cs-outer">
                <button class="btn btn-default cs-bw" id="cs-bw">А</button>
                <button class="btn btn-default cs-wb" id="cs-wb">А</button>
                <button class="btn btn-default cs-bb" id="cs-bb">А</button>
                <button class="btn btn-default cs-gb" id="cs-gb">А</button>
                <button class="btn btn-default cs-yg" id="cs-yg">А</button>
            </span>
        </span>

        <span class="mgl20">Изображения
            <span class="img-outer">
                <button class="btn btn-default" id="img-onoff"><span class="glyphicon glyphicon-picture"></span><span id="img-onoff-text"> Отключить</span></button>
            </span>
        </span>
    </div>

        @yield('content')
    <section style="background-image: url(img/bg2.jpg)" class="section section_image section_reviews" id="rev">
        <div class="title">
            <h2 class="title title_up title_reviews"><span class="title_orange title_top">{!! $title['rew_top'] !!}</span><span class="title_green title_bottom">{!! $title['rew_bottom'] !!}</span></h2>
        </div>
        <div class="section_wrapper">
            <div class="reviews">
                <div class="reviews__wrapper">
                    <div class="reviews__item" style="width: 100%">
                        <h5 class="reviews__title">
                            <a href="https://vk.com/apeksstoma" style=" color: #ff8c00; text-decoration: none;">vk.com/apeksstoma</a>
                        </h5>
                        <div class="reviews__wrap" style="margin-top: 30px;">
                            <div id="vk_comments"></div>
                            @foreach($vk as $item)
                                <div class="comment__item">
                                    <a href="https://vk.com/id{{$item->user_id}}">
                                        <img src="{{$item->user_photo}}" alt="{{$item->name}}">
                                    </a>

                                    <div class="comment__text">{!! $item->message !!}</div>
                                    <div class="comment__date">
                                        {{$item->time}}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="section section_map section_grey" id="map">
        <div class="title">
            <h2 class="title title_up title_reviews title_map"><span class="title_orange title_top">{!! $title['map_top'] !!}</span><span class="title_green title_bottom">{!! $title['map_bottom'] !!}</span></h2>
        </div>
        <div class="section_clearfix section_full section_table">
            <div class="map__left">
                <!--<iframe src="https://api-maps.yandex.ru/frame/v1/-/CBQMyRGcgD"></iframe>-->
                <iframe src="https://yandex.ru/map-widget/v1/-/CBQnZ2B2sC"></iframe>
            </div>
            <div class="map__right">
                <h3 class="map__title">Желаете получить консультацию?</h3>
                <form class="form" action="{{route('index.post')}}" method="post">
                    <div class="form__item">
                        <span class="error"></span>
                        <input type="text" name="name" placeholder="Имя" class="input_name" required/>
                    </div>
                    <div class="form__item">
                        <span class="error"></span>
                        <input type="tel" name="phone" placeholder="Телефон" class="input_phone" required/>
                    </div>
                    <div class="form__item">
                        <input type="hidden" name="page" value="{{$meta->title}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="buttons map__button">Отправить</button>
                        <div class="success"></div>
                    </div>
                    <div class="form__item">
                        <p>Отправляя свои данные, вы даете разрешение на обработку своих <a href="{{route('pdf.pers')}}" style="color: rgba(255, 140, 0, 1);">персональных данных</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <footer class="section section_orange section_footer">
        <div class="section_wrapper section_flex">
            <div class="footer__left footer__item">
                <p>ООО {{$setting['ooo']}} </p>
                <p>ИНН {{$setting['inn']}}</p>
                <p>Лицензия {{$setting['lisense']}}</p>
                <!--<p>Фактический адрес: {{$setting['fiz_adress']}}</p>-->
                <p>Адрес регистрации предприятия: {{$setting['adress']}}</p>
                <p>
                    <a href="{{route('index', 'ofitsialnaya-informatsiya')}}" style="color: #000; font-size: 20px;">Официальая информция</a>
                </p>
            </div>
            <div class="footer__right footer__item"><a href="tel:{{str_replace([' ', '(',')'], '', $setting['phone'])}}">Тел. {{$setting['phone']}}</a>
                <p>Время работы</p>
                <p>{{$setting['time_work']}}</p>
                <p>Выходной - воскресение</p>
                
            </div>
        </div>
    </footer>
    <div class="modal-form">
        <div class="modal-form__wrapper">
            <h3 class="map__title">Записаться <br/>на прием</h3>
            <form class="form"  action="{{route('index.post')}}" method="post">
                <div class="form__item">
                    <span class="error"></span>
                    <input type="text" name="name" placeholder="Имя" class="input_name" required />
                </div>
                <div class="form__item">
                    <span class="error"></span>
                    <input type="tel" name="phone" placeholder="Телефон" class="input_phone" required/>
                </div>
                <div class="form__item">
                    <input type="hidden" name="page" value="{{$meta->title}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="buttons map__button">Отправить</button>
                    <div class="success"></div>
                </div>
                <div class="form__item">
                    <p>Отправляя свои данные, вы даете разрешение на обработку своих <a href="{{route('pdf.pers')}}" style="color: rgba(255, 140, 0, 1);">персональных данных</a></p>
                </div>
            </form>
        </div>
    </div>
    @if(Auth::user())
        @if(\Illuminate\Support\Facades\Auth::user()->hasRole('admin'))
            <div class="adminpanel" style="position: fixed; top: 20px; right: 30px; z-index: 100; background-color: transparent;	">
                <a href="{{route('admin.index')}}" style="color: #000; z-index: 100;">Войти в админ панель</a>
            </div>
        @endif
    @endif
    <!-- callmeup widget --><a href="javascript:;" onclick="callmeup(13138);" id="callbut-mini" class="js-callme-modal-1"><div class="callbut-mini-phone"></div></a><!-- /callmeup widget -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jScrollPane/2.0.23/script/jquery.jscrollpane.min.js"></script>
    <script type="text/javascript" src="{{asset('js/libs.js')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    <script src="http://e-timer.ru/js/etimer.js"></script>
    @if(isset($check))
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery(".eTimer").eTimer({
                    etType: 2, etDate: "13.06.2017.9.0", etTitleText: "<span>АКЦИЯ!</span> Скидка <span>25%</span> на {{$page->action}}.<br/> До окончания осталось:", etTitleSize: 30, etShowSign: 1, etSep: " ", etFontFamily: "Arial Black", etTextColor: "#fff", etPaddingTB: 15, etPaddingLR: 15, etBackground: "transparent", etBorderSize: 0, etBorderRadius: 2, etBorderColor: "white", etShadow: " 0px 0px 0px 0px #333333", etLastUnit: 4, etNumberFontFamily: "Arial Black", etNumberSize: 60, etNumberColor: "white", etNumberPaddingTB: 0, etNumberPaddingLR: 8, etNumberBackground: "rgba(255, 140, 0, 0.6)", etNumberBorderSize: 0, etNumberBorderRadius: 5, etNumberBorderColor: "white", etNumberShadow: "inset 0px 0px 10px 0px rgba(0, 0, 0, 0.5)"
                });
            });
        </script>
        <style>
            .eTimer span {color: rgba(246, 163, 49, 0.7);}
        </style>
        <script type="text/javascript">
            var width = $('.usluga__text p').width();

        </script>
    @endif
    <script type="text/javascript">
        $('span.error').hide();
        $('.form').submit(function (e) {
            e.preventDefault();
            var form = $(this);
            var data = form.serialize();
            $.ajax({
                type: 'POST',
                url: form.attr('action'),
                data: data,
                success: function (response) {

                    console.log(response.status);
                    if(response.status == 'good') {
                        var item = form.find('.success');
                        $('.input_phone').val('');
                        $('.input_name').val('');
                        $('.success').show();
                        setTimeout(function () {
                            $('.modal-form').hide();
                        }, 3000);

                        item.text('Ваше сообщение успешно отправлено.');
                        item.css({
                            'color':'green',
                            'font-size':'20px',
                            'text-align':'center',
                            'font-weight':'bold'
                        })
                    }

                },
                error: function (response) {
                    if(response.status === 422) {
                        $('span.error').hide();
                        var errors = response.responseJSON;
                        console.log(errors);
                        for (error in errors) {
                            var item = form.find('.input__'+error);
                            console.log(error);
                            item.addClass('error');
                            var text = item.parent('.contact-form__item').find('span.error');
                            text.show();
                            text.css({
                                'display': 'block',
                                'text-align': 'center',
                                'color': 'red',
                                'position': 'absolute',
                                'left': '0',
                                'right': '0',
                                'top': '-20px'
                            });
                            text.text('Поле обязательно для заполнения');
                        }
                    }
                }
            });
            return false;
        });
    </script>
    <!-- callmeup core --><script src="https://sr.callmeup.ru/button/callback.min.js" type="text/javascript"></script><!-- /callmeup core -->


<!— Yandex.Metrika counter —>
<script type="text/javascript">
(function (d, w, c) {
(w[c] = w[c] || []).push(function() {
try {
w.yaCounter32532545 = new Ya.Metrika({
id:32532545,
clickmap:true,
trackLinks:true,
accurateTrackBounce:true,
webvisor:true
});
} catch(e) { }
});

var n = d.getElementsByTagName("script")[0],
s = d.createElement("script"),
f = function () { n.parentNode.insertBefore(s, n); };
s.type = "text/javascript";
s.async = true;
s.src = "https://mc.yandex.ru/metrika/watch.js";

if (w.opera == "[object Opera]") {
d.addEventListener("DOMContentLoaded", f, false);
} else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/32532545" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!— /Yandex.Metrika counter —>

    </body>
</html>