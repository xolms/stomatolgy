@extends('layouts.home')

@section('content')

	<div class="menu"><a href="#" class="menu__buttonwrap">
			<div class="menu__button"><span></span></div></a>
		<div class="menu__wrapper">
			<div class="modal-open dark click-modal">Написать нам</div>
			<div class="modal__content">
				<div class="secmenu">
					@foreach($menu as $item)
						@if($item->alias == 'index')
						@elseif($item->alias == 'oformlenie-dokumentov' || $item->alias == 'partneram')
							<div class="secmenu__item">
								<div class="secmenu__itemwrap">
									<a href="{{'/'.$item->alias}}">
										<div class="secmenu__imgwrap"><img src="{{$item->img_path}}" alt="{{$item->alt_img}}"/><img src="{{$item->img_active_path}}" alt="{{$item->alt_img_active}}" class="hover"/></div>
										<div class="secmenu__text big">{{$item->name}}</div>
									</a>
								</div>
							</div>
						@else
							<div class="secmenu__item">
								<div class="secmenu__itemwrap">
									<a href="{{'/'.$item->alias}}">
										<div class="secmenu__imgwrap"><img src="{{$item->img_path}}" alt="{{$item->alt_img}}"/><img src="{{$item->img_active_path}}" alt="{{$item->alt_img_active}}" class="hover"/></div>
										<div class="secmenu__text small">{{$item->name}}</div>
									</a>
								</div>
							</div>
						@endif

					@endforeach
				</div>
			</div>
			<div class="menu__down">
				<div class="menu__down_item"><a href="mailto:{{$setting['email']}}"><span class="menu__down_icon menu__down_icon_plane">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" viewBox="0 0 30 27.4" style="enable-background:new 0 0 30 27.4;" xml:space="preserve">
<g>
	<g>
		<path d="M15.5,25c-0.2,0-0.4-0.1-0.5-0.3l-2.4-7.3L5.3,15C5.2,14.9,5,14.7,5,14.6c0-0.2,0.1-0.4,0.2-0.5l24-14
			c0.2-0.1,0.4-0.1,0.5,0C29.9,0.2,30,0.4,30,0.6l-4,21c0,0.1-0.1,0.3-0.2,0.3c-0.1,0.1-0.3,0.1-0.4,0l-8.4-3.3L16,24.6
			C16,24.8,15.8,25,15.5,25C15.5,25,15.5,25,15.5,25z M6.7,14.4l6.5,2.2c0.1,0,0.3,0.2,0.3,0.3l1.8,5.5l0.7-4.5
			c0-0.1,0.1-0.3,0.2-0.4c0.1-0.1,0.3-0.1,0.4,0l8.4,3.3l3.7-19.3L6.7,14.4z"/>
	</g>
	<g>
		<path d="M16.5,18.5c-0.1,0-0.2,0-0.3-0.1c-0.2-0.2-0.3-0.5-0.1-0.7l8.9-12L13.4,17.4c-0.2,0.2-0.5,0.2-0.7,0
			c-0.2-0.2-0.2-0.5,0-0.7L29.1,0.1c0.2-0.2,0.5-0.2,0.7,0c0.2,0.2,0.2,0.5,0.1,0.7l-13,17.5C16.8,18.4,16.7,18.5,16.5,18.5z"/>
	</g>
	<g>
		<path d="M15.5,25c-0.1,0-0.2,0-0.3-0.1c-0.2-0.2-0.3-0.5-0.1-0.7l4-5c0.2-0.2,0.5-0.2,0.7-0.1c0.2,0.2,0.3,0.5,0.1,0.7l-4,5
			C15.8,24.9,15.6,25,15.5,25z"/>
	</g>
	<g>
		<g>
			<g>
				<path d="M1.4,23.4c-0.1,0-0.2,0-0.3-0.1c-0.3-0.3-0.6-0.6-0.9-0.9c-0.2-0.2-0.2-0.5,0-0.7c0.2-0.2,0.5-0.2,0.7,0
					c0.3,0.3,0.6,0.6,0.9,0.9c0.2,0.2,0.2,0.5,0,0.7C1.7,23.3,1.5,23.4,1.4,23.4z"/>
			</g>
			<g>
				<path d="M8.8,27.4C8.8,27.4,8.8,27.4,8.8,27.4c-0.6-0.1-1.2-0.2-1.7-0.4c-0.3-0.1-0.4-0.4-0.3-0.6c0.1-0.3,0.4-0.4,0.6-0.3
					c0.5,0.2,1,0.3,1.5,0.3c0.3,0,0.5,0.3,0.4,0.6C9.3,27.2,9.1,27.4,8.8,27.4z M11.2,27.4c-0.2,0-0.5-0.2-0.5-0.4
					c0-0.3,0.1-0.5,0.4-0.6c0.2,0,0.3-0.1,0.5-0.1c0.3-0.1,0.5,0.1,0.6,0.4c0.1,0.3-0.1,0.5-0.4,0.6C11.7,27.3,11.5,27.3,11.2,27.4
					C11.3,27.4,11.3,27.4,11.2,27.4z M5.1,26.1c-0.1,0-0.2,0-0.2-0.1c-0.5-0.3-0.9-0.6-1.4-0.9c-0.2-0.2-0.3-0.5-0.1-0.7
					c0.2-0.2,0.5-0.3,0.7-0.1c0.4,0.3,0.9,0.6,1.3,0.8c0.2,0.1,0.3,0.4,0.2,0.7C5.4,26,5.3,26.1,5.1,26.1z"/>
			</g>
			<g>
				<path d="M13.1,26.8c-0.2,0-0.4-0.1-0.5-0.3c-0.1-0.3,0-0.5,0.3-0.7c0.4-0.2,0.7-0.3,1.1-0.5c0.2-0.1,0.5-0.1,0.7,0.2
					c0.1,0.2,0.1,0.5-0.2,0.7c-0.4,0.2-0.8,0.4-1.2,0.6C13.3,26.8,13.2,26.8,13.1,26.8z"/>
			</g>
		</g>
	</g>
</g>
</svg>
</span><span class="menu__down_text">{{$setting['email']}}</span></a></div>
				<div class="menu__down_item"><a href="tel:{{str_replace([' ', '(',')'], '', $setting['phone'])}}"><span class="menu__down_icon menu__down_icon_phone">
						<!-- Generator: Adobe Illustrator 19.2.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
								 y="0px" viewBox="0 0 30 30.1" style="enable-background:new 0 0 30 30.1;" xml:space="preserve">
<g>
	<g>
		<g >
			<path d="M5.5,30H4.3C2,30,0,27.9,0,25.5V4.3C0,1.9,1.9,0,4.3,0H13c2.4,0,4,1.6,4,4v6.5c0,0.3-0.2,0.5-0.5,0.5
				c-0.3,0-0.5-0.2-0.5-0.5V4c0-1.8-1.2-3-3-3H4.3C2.5,1,1,2.5,1,4.3v21.3C1,27.4,2.5,29,4.3,29h1.3C5.8,29,6,29.2,6,29.5
				S5.8,30,5.5,30z"/>
		</g>
		<g >
			<path d="M16.5,5h-16C0.2,5,0,4.8,0,4.5S0.2,4,0.5,4h16C16.8,4,17,4.2,17,4.5S16.8,5,16.5,5z"/>
		</g>
		<g>
			<path d="M10.5,24h-10C0.2,24,0,23.8,0,23.5S0.2,23,0.5,23h10c0.3,0,0.5,0.2,0.5,0.5S10.8,24,10.5,24z"/>
		</g>
		<g>
			<path d="M10.5,3h-4C6.2,3,6,2.8,6,2.5S6.2,2,6.5,2h4C10.8,2,11,2.2,11,2.5S10.8,3,10.5,3z"/>
		</g>
	</g>
	<g>
		<path d="M21.3,30.1H9.7c-1,0-1.8-0.8-1.8-1.8c0-1.3,1-2.4,2.3-2.6l5.1-0.8l-8.7-8.7c-0.4-0.4-0.7-1-0.7-1.6C6,14,6.2,13.4,6.6,13
			c0.9-0.9,2.3-0.9,3.2,0l2.4,2.4c0.1-0.4,0.3-0.8,0.6-1.2c0.8-0.8,2.3-0.9,3.1-0.1c0.1-0.4,0.3-0.8,0.6-1.2
			c0.9-0.9,2.2-0.9,3.1-0.1c0.1-0.4,0.3-0.8,0.6-1.2c0.9-0.9,2.3-0.9,3.2,0l4.7,5.2c1.1,1.2,1.8,2.9,1.8,4.5c0,1.8-0.7,3.5-2,4.8
			l-2,2C24.8,29.4,23.1,30.1,21.3,30.1z M8.3,13.3c-0.3,0-0.6,0.1-0.9,0.4C7.1,13.9,7,14.2,7,14.6c0,0.3,0.1,0.7,0.4,0.9l9.4,9.4
			c0.1,0.1,0.2,0.3,0.1,0.5c-0.1,0.2-0.2,0.3-0.4,0.3l-6,1C9.6,26.8,9,27.5,9,28.3c0,0.4,0.3,0.8,0.8,0.8h11.6c1.5,0,3-0.6,4.1-1.7
			l2-2c1.1-1.1,1.7-2.5,1.7-4.1c0-1.4-0.5-2.8-1.5-3.9l-4.7-5.1c-0.4-0.4-1.3-0.5-1.8,0c-0.2,0.2-0.4,0.6-0.4,0.9
			c0,0.3,0.1,0.6,0.3,0.9l0.1,0.1c0.2,0.2,0.2,0.5,0,0.7c-0.2,0.2-0.5,0.2-0.7,0l0,0l0,0c0,0,0,0,0,0l0,0c0,0,0,0,0,0l-1.3-1.3
			c-0.5-0.5-1.3-0.5-1.8,0c-0.2,0.2-0.4,0.6-0.4,0.9c0,0.3,0.1,0.6,0.3,0.9l1.3,1.3c0.2,0.2,0.2,0.5,0,0.7c-0.2,0.2-0.5,0.2-0.7,0
			l-1.3-1.3c0,0,0,0,0,0l-1.2-1.2c-0.5-0.5-1.3-0.5-1.8,0c-0.2,0.2-0.4,0.6-0.4,0.9c0,0.3,0.1,0.6,0.3,0.9l2.6,2.6
			c0.2,0.2,0.2,0.5,0,0.7c-0.2,0.2-0.5,0.2-0.7,0l-2.6-2.6c0,0,0,0,0,0l-3.7-3.7C8.9,13.4,8.6,13.3,8.3,13.3z"/>
	</g>
	<g>
		<circle cx="12.5" cy="2.5" r="0.5"/>
	</g>
</g>
</svg>
</span><span class="menu__down_text">{{$setting['phone']}}</span></a></div>
				<div class="menu__down_item"><a href="tel:{{str_replace([' ', '(',')'], '', $setting['second_phone'])}}"><span class="menu__down_icon menu__down_icon_phone">
						<!-- Generator: Adobe Illustrator 19.2.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
								 y="0px" viewBox="0 0 30 30.1" style="enable-background:new 0 0 30 30.1;" xml:space="preserve">
<g>
	<g >
		<g >
			<path d="M5.5,30H4.3C2,30,0,27.9,0,25.5V4.3C0,1.9,1.9,0,4.3,0H13c2.4,0,4,1.6,4,4v6.5c0,0.3-0.2,0.5-0.5,0.5
				c-0.3,0-0.5-0.2-0.5-0.5V4c0-1.8-1.2-3-3-3H4.3C2.5,1,1,2.5,1,4.3v21.3C1,27.4,2.5,29,4.3,29h1.3C5.8,29,6,29.2,6,29.5
				S5.8,30,5.5,30z"/>
		</g>
		<g >
			<path d="M16.5,5h-16C0.2,5,0,4.8,0,4.5S0.2,4,0.5,4h16C16.8,4,17,4.2,17,4.5S16.8,5,16.5,5z"/>
		</g>
		<g >
			<path d="M10.5,24h-10C0.2,24,0,23.8,0,23.5S0.2,23,0.5,23h10c0.3,0,0.5,0.2,0.5,0.5S10.8,24,10.5,24z"/>
		</g>
		<g>
			<path d="M10.5,3h-4C6.2,3,6,2.8,6,2.5S6.2,2,6.5,2h4C10.8,2,11,2.2,11,2.5S10.8,3,10.5,3z"/>
		</g>
	</g>
	<g>
		<path d="M21.3,30.1H9.7c-1,0-1.8-0.8-1.8-1.8c0-1.3,1-2.4,2.3-2.6l5.1-0.8l-8.7-8.7c-0.4-0.4-0.7-1-0.7-1.6C6,14,6.2,13.4,6.6,13
			c0.9-0.9,2.3-0.9,3.2,0l2.4,2.4c0.1-0.4,0.3-0.8,0.6-1.2c0.8-0.8,2.3-0.9,3.1-0.1c0.1-0.4,0.3-0.8,0.6-1.2
			c0.9-0.9,2.2-0.9,3.1-0.1c0.1-0.4,0.3-0.8,0.6-1.2c0.9-0.9,2.3-0.9,3.2,0l4.7,5.2c1.1,1.2,1.8,2.9,1.8,4.5c0,1.8-0.7,3.5-2,4.8
			l-2,2C24.8,29.4,23.1,30.1,21.3,30.1z M8.3,13.3c-0.3,0-0.6,0.1-0.9,0.4C7.1,13.9,7,14.2,7,14.6c0,0.3,0.1,0.7,0.4,0.9l9.4,9.4
			c0.1,0.1,0.2,0.3,0.1,0.5c-0.1,0.2-0.2,0.3-0.4,0.3l-6,1C9.6,26.8,9,27.5,9,28.3c0,0.4,0.3,0.8,0.8,0.8h11.6c1.5,0,3-0.6,4.1-1.7
			l2-2c1.1-1.1,1.7-2.5,1.7-4.1c0-1.4-0.5-2.8-1.5-3.9l-4.7-5.1c-0.4-0.4-1.3-0.5-1.8,0c-0.2,0.2-0.4,0.6-0.4,0.9
			c0,0.3,0.1,0.6,0.3,0.9l0.1,0.1c0.2,0.2,0.2,0.5,0,0.7c-0.2,0.2-0.5,0.2-0.7,0l0,0l0,0c0,0,0,0,0,0l0,0c0,0,0,0,0,0l-1.3-1.3
			c-0.5-0.5-1.3-0.5-1.8,0c-0.2,0.2-0.4,0.6-0.4,0.9c0,0.3,0.1,0.6,0.3,0.9l1.3,1.3c0.2,0.2,0.2,0.5,0,0.7c-0.2,0.2-0.5,0.2-0.7,0
			l-1.3-1.3c0,0,0,0,0,0l-1.2-1.2c-0.5-0.5-1.3-0.5-1.8,0c-0.2,0.2-0.4,0.6-0.4,0.9c0,0.3,0.1,0.6,0.3,0.9l2.6,2.6
			c0.2,0.2,0.2,0.5,0,0.7c-0.2,0.2-0.5,0.2-0.7,0l-2.6-2.6c0,0,0,0,0,0l-3.7-3.7C8.9,13.4,8.6,13.3,8.3,13.3z"/>
	</g>
	<g>
		<circle cx="12.5" cy="2.5" r="0.5"/>
	</g>
</g>
</svg>
</span><span class="menu__down_text">{{$setting['second_phone']}}</span></a></div>
			</div>
		</div>
	</div>
	<div class="phone">
		<div class="phone__item"><a href="tel:{{str_replace([' ', '(',')'], '', $setting['phone'])}}">{{$setting['phone']}}</a></div>
		<div class="phone__item"><a href="tel:{{str_replace([' ', '(',')'], '', $setting['second_phone'])}}">{{$setting['second_phone']}}</a></div>
	</div>
	<div class="modal-open click-modal">Написать нам</div>
	<div class="logo"><a href="/" class="logo__link">
			<svg version="1.1" class="logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 193.7 148.2" style="enable-background:new 0 0 193.7 148.2;" xml:space="preserve">
        <g>
			<path class="logo__path" d="M67.8,121.2c0.9,0.3,1.9,0.5,3.1,0.6c0,0,5.8,0.7,8.4-9.4l11.3-42.8H110l-11.7,45.1c0,0-2.1,6.7,6.8,6.4c0,0,7.2-0.1,9.5-8.2l4.1-17.6H170c0,0,7.2,0.6,6.8-6.7c0,0,1.4-6.4-6.3-6.4h-49.2l2.7-13.1h20.7c0,0,9-0.5,8.6-7.2c0,0,1.4-5-5.9-5.9h-11.3l14.6-15.1L174,16.8L70.8,46.1l23.5,4.5l13.5,15.8l12.2-7.7l9.6,3.8l26.2-26.7"/>
			<path class="logo__path" d="M98.7,56H56.3c0,0-7.7,1.4-7.2,7.7c0,0-0.9,5.4,7.2,5.9h18.9L64,113.7c0,0-2.1,5.5,3.8,7.4"/>
			<polyline class="logo__path" points="94.2,50.6 174,16.8 106.6,52.2 129.5,62.5 	"/>
			<path class="logo__path" d="M63.4,117.2c0,0-36,9.1-32.6-3.7c0,0-1.3-11,43.6-40.9"/>
			<path class="logo__path" d="M67.9,121.4c0,0-52.6,23-52.6,2.5c0,0-4.5-25.5,56.6-54.3"/>
			<path class="logo__path" d="M46.7,83.5c-0.5-3.1-0.7-6.3-0.7-9.5c0-34.4,27.9-62.3,62.3-62.3c14.4,0,27.6,4.9,38.1,13"/>
			<path class="logo__path" d="M63.9,117.7c-7.1-7.2-12.4-16.1-15.4-26"/>
			<path class="logo__path" d="M166.9,95.2c-8.7,23.9-31.7,41-58.6,41c-15.8,0-29.7-5.5-40.7-15.1"/>
			<path class="logo__path" d="M170.1,82.1c0.4-2.7,0.5-5.4,0.5-8.2c0-14.4-4.9-27.6-13-38.2l-0.9-1"/>
			<path class="logo__path" d="M46.9,111.4"/>
			<path class="logo__path" d="M52.7,119.6"/>
			<path class="logo__path" d="M174,104.4c-11.4,24.7-36.4,41.8-65.5,41.8c-15.9,0-30.6-5.2-42.6-13.9l-0.2-0.1c-43.2,18.9-57.8,4.1-57.8,4.1c-23.5-22.5,28.5-58,28.5-58l0-0.3c-0.1-1.3-0.1-2.6-0.1-3.8C36.5,34.3,68.8,2,108.6,2c15.5,0,29.8,4.9,41.5,13.1l0.2,0.1c0,0,36.8-15.9,38.8-11.1c0,0,5.6,5.4,0,11.3L168.4,34l0.4,0.4c6.9,10.4,11.1,22.7,11.8,35.9"/>
			<path class="logo__path" d="M179.9,69.1c0,0,13.9,8.2,9,22.6c0,0-3.4,11.9-15.9,13.2"/>
			<path class="logo__path" d="M46.9,111.6c-4.1,3.2-6.1,1.7-6.1,1.7c-3.8-2.2,2.5-8.5,2.5-8.5l0.1,0.1c1.1,2.2,2.2,4.4,3.5,6.5L46.9,111.6z"/>
		</g>
        </svg></a></div>
	<div class="modal-form">
		<div style="background-image: url(img/sb.png)" class="modal-form__wrapper">
			<h3 class="title title_dark title_small">отправить<span class="title title_white title_block">заявку</span></h3>
			<form class="contact-form">
				<div class="contact-form__item input">
					<input type="email" name="email"  placeholder="Введите E-mail" class="contact-form__input"/>
				</div>
				<div class="contact-form__item input">
					<input type="tel" name="phone"  placeholder="Введите телефон" class="input__phone contact-form__input"/>
				</div>
				<div class="contact-form__item">
					<button type="submit" class="contact-form__button">Отправить</button>
				</div>
				<div class="contact-form__item">
					<label class="contact-form__label contact-form__checklabel contact-form__check checked">Нажимая на кнопку, я даю свое согласие на <a href="{{$setting['link_conf']}}" class="contact-form__link"> обработку персональных данных</a> и соглашаюсь с условиями <a href="{{$setting['link_pers']}}" class="contact-form__link">политики конфиденциальности</a>
						<input type="checkbox" checked="checked" class="contact-form__checkbox"/>
					</label>
				</div>
				<div class="contact-form__item">
					<label class="contact-form__label contact-form__checklabel contact-form__check checked">Я согласен на получение <span class="contact-form__link contact-form__drop">информации от <br/>{{$_SERVER['SERVER_NAME']}}</span>
						<input type="checkbox" checked="checked" class="contact-form__checkbox contact-form__checkboxfull"/>
					</label>
				</div>
				<div class="contact-form__dropdown">
					<div class="contact-form__item">
						<label class="contact-form__label contact-form__checklabel contact-form__check checked">Я согласен на получение <span class="contact-form__link ">информации от <br/>{{$_SERVER['SERVER_NAME']}}</span>
							<input type="checkbox" checked="checked" class="contact-form__checkbox contact-form__checkboxdrop"/>
						</label>
					</div>
					<div class="contact-form__item">
						<label class="contact-form__label contact-form__checklabel contact-form__check checked">Я согласен на получение <span class="contact-form__link ">информации от <br/>{{$_SERVER['SERVER_NAME']}}</span>
							<input type="checkbox" checked="checked" class="contact-form__checkbox contact-form__checkboxdrop"/>
						</label>
					</div>
					<div class="contact-form__item">
						<label class="contact-form__label contact-form__checklabel contact-form__check checked">Я согласен на получение <span class="contact-form__link">информации от <br/>{{$_SERVER['SERVER_NAME']}}</span>
							<input type="checkbox" checked="checked" class="contact-form__checkbox contact-form__checkboxdrop"/>
						</label>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div style="background-image: url({{$bg['osnovnoy']}})" class="background"></div>
	<div class="body">
		<div id="fullpage" class="fullpage-wrapper">
			<!--Шапка-->
			<div class="section fp-section fp-table">
				<div class="fp-tableCell">
					<header class="header">
						<div style="background-image: url(img/head_top.png)" class="header__top bg"></div>
						<div class="header__center borders">
							<div class="header__centerwrap">
								<h2 class="title title_small title_white title_head">{{$title['belyy-zagolovok-shapki']}}<span class="title title_green title_pad">{{$title['zelenyy-zagolovok-shapki']}}</span></h2>
								<h1 class="title title_big title_white title_head title_topbd">{{$title['osnovnoy-zagolovok-shapki']}}</h1>
							</div>
						</div>
					</header>
				</div>
			</div>
			<!--конец шапки-->
			@if($page == "kontakty" || $page == "partneram" )

			@else
				<!--секция меню-->
					<div class="section fp-section fp-table section__two">
						<div class="fp-tableCell">
							<h2 class="title title_small title_white title_two">{{$title['belyy-zagolovok-menyu']}}<span class="title title_green title_pad">{{$title['zelenyy-zagolovok-enyu']}}</span></h2>
							<div class="secmenu">
								@foreach($menu as $item)
									@if($item->alias == 'index')
									@else
										<div class="secmenu__item">
											<div class="secmenu__itemwrap">
												<a href="{{'/'.$item->alias}}">
													<div class="secmenu__imgwrap"><img src="{{$item->img_path}}" alt="{{$item->alt_img}}"/><img src="{{$item->img_active_path}}" alt="{{$item->alt_img_active}}" class="hover"/></div>
													<div class="secmenu__text small">{{$item->name}}</div>
												</a>
											</div>
										</div>
									@endif

								@endforeach
							</div>
						</div>
					</div>
				<!--конец секции меню
			@endif
			@if($page == 'kontakty')
			@else
				<!--секция серфикатов-->
				<div class="section fp-section fp-table section__white">
					<div class="fp-tableCell">
						<div class="certificates borders">
							<div style="background-image: url(img/bg_serf.jpg)" class="certificates__content">
								<div class="certificates__wrapper">
									<div class="certificates__item slider__small">
										<div class="certificates__left_slider active first certificates_slider owl-carousel owl-theme">
											<div class="item"><img src="img/bg_serf.jpg"/></div>
											<div class="item"><img src="img/bg_serf.jpg"/></div>
											<div class="item"><img src="img/bg_serf.jpg"/></div>
											<div class="item"><img src="img/bg_serf.jpg"/></div>
										</div>
										<div class="certificates__left_slider certificates_slider owl-carousel owl-theme">
											<div class="item"><img src="img/normal2.png"/></div>
											<div class="item"><img src="img/bg_serf.jpg"/></div>
											<div class="item"><img src="img/bg_serf.jpg"/></div>
											<div class="item"><img src="img/bg_serf.jpg"/></div>
										</div>
										<div class="certificates__left_slider certificates_slider owl-carousel owl-theme">
											<div class="item"><img src="img/bg_serf.jpg"/></div>
											<div class="item"><img src="img/bg_serf.jpg"/></div>
											<div class="item"><img src="img/bg_serf.jpg"/></div>
											<div class="item"><img src="img/bg_serf.jpg"/></div>
										</div>
									</div>
									<div class="certificates__item certificates__top">
										<div class="certificates__right_slider certificates_slider owl-carousel owl-theme">
											<div class="item">
												<h2 class="title title_small title_dark title_sert">Наши<span class="title title_red title_pad title_block">Сертификаты качества</span></h2>
												<div class="certificates__text">
													<p>Это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов</p>
												</div>
											</div>
											<div class="item">
												<h4 class="title title_small title_dark title_sert">Наши<span class="title title_red title_pad title_block">Сертификаты качества</span></h4>
												<div class="certificates__text">
													<p>Это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="arrow__wrapper">
								<div class="arrow__left">
								<!-- Generator: Adobe Illustrator 19.2.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
									<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										 viewBox="0 0 19 33" style="enable-background:new 0 0 19 33;" xml:space="preserve">
	<style type="text/css">
		.st0{fill:#231F20;stroke:#000000;stroke-width:4;stroke-miterlimit:10;}
	</style>
										<g>
											<path class="st0" d="M16.5,31c-0.1,0-0.3,0-0.4-0.1l-14-14c-0.2-0.2-0.2-0.5,0-0.7l14-14c0.2-0.2,0.5-0.2,0.7,0
			c0.2,0.2,0.2,0.5,0,0.7L3.2,16.5l13.6,13.6c0.2,0.2,0.2,0.5,0,0.7C16.8,31,16.6,31,16.5,31z"/>
										</g>
	</svg>

								</div>
								<div class="arrow__right">
								<!-- Generator: Adobe Illustrator 19.2.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
									<svg version="1.1" id="Left_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										 viewBox="0 0 19 33" style="enable-background:new 0 0 19 33;" xml:space="preserve">
	<style type="text/css">
		.st0{fill:#231F20;stroke:#000000;stroke-width:4;stroke-miterlimit:10;}
	</style>
										<g>
											<path class="st0" d="M16.5,31c-0.1,0-0.3,0-0.4-0.1l-14-14c-0.2-0.2-0.2-0.5,0-0.7l14-14c0.2-0.2,0.5-0.2,0.7,0
			c0.2,0.2,0.2,0.5,0,0.7L3.2,16.5l13.6,13.6c0.2,0.2,0.2,0.5,0,0.7C16.8,31,16.6,31,16.5,31z"/>
										</g>
	</svg>

								</div>
							</div>
						</div>
					</div>
				</div>
			@endif
			<!--конец сексии сертифитов-->
			@if($page == 'kontakty' || $page == 'partneram' || $page == 'oformlenie-dokumentov')
			@else
				<!--секция наши преимущетва-->
				<div class="section fp-section fp-table">
					<div class="fp-tableCell">
						<h2 class="title title_white title_small title_secpreim">Наши<span class="title title_green title_block">Преимущества</span></h2>
						<div class="preim borders">
							<div style="background-image: url(img/bg_perf.jpg)" class="certificates__content preim__content">
								<div class="certificates__wrapper">
									<div class="preim__item slider__small">
										<div class="preim__left_slider active first certificates_slider owl-carousel owl-theme">
											<div class="item"><img src="img/IMG.png" alt="123"/></div>
											<div class="item"><img src="img/IMG.png" alt="123"/></div>
											<div class="item"><img src="img/IMG.png" alt="123"/></div>
											<div class="item"><img src="img/IMG.png" alt="123"/></div>
										</div>
										<div class="preim__left_slider certificates_slider owl-carousel owl-theme">
											<div class="item"><img src="img/IMG2.png" alt="123"/></div>
											<div class="item"><img src="img/IMG2.png" alt="123"/></div>
											<div class="item"><img src="img/IMG2.png" alt="123"/></div>
											<div class="item"><img src="img/IMG2.png" alt="123"/></div>
										</div>
									</div>
									<div class="preim__item certificates__top">
										<div class="preim__right_slider certificates_slider owl-carousel owl-theme">
											<div class="item">
												<h2 class="title title_small title_dark title_sert">{{$title['belyy-zagolovok-vtorogo-slaydera']}}<span class="title title_red title_pad title_block">{{$title['zelenyy-zagolovok-vtorogo-slaydera']}}</span></h2>
												<div class="certificates__text">
													<p>Это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов</p>
												</div>
											</div>
											<div class="item">
												<h2 class="title title_small title_dark title_sert">СПЕЦИАЛЬНЫЕ ПРЕДЛОЖЕНИЯ<span class="title title_red title_pad title_block">ОТДЫХА С ДЕТЬМИ</span></h2>
												<div class="certificates__text">
													<p>Это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="arrow__wrapper preim_arrow">
								<div class="arrow__left">
								<!-- Generator: Adobe Illustrator 19.2.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
									<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										 viewBox="0 0 19 33" style="enable-background:new 0 0 19 33;" xml:space="preserve">
	<style type="text/css">
		.st0{fill:#231F20;stroke:#000000;stroke-width:4;stroke-miterlimit:10;}
	</style>
										<g>
											<path class="st0" d="M16.5,31c-0.1,0-0.3,0-0.4-0.1l-14-14c-0.2-0.2-0.2-0.5,0-0.7l14-14c0.2-0.2,0.5-0.2,0.7,0
			c0.2,0.2,0.2,0.5,0,0.7L3.2,16.5l13.6,13.6c0.2,0.2,0.2,0.5,0,0.7C16.8,31,16.6,31,16.5,31z"/>
										</g>
	</svg>

								</div>
								<div class="arrow__right">
								<!-- Generator: Adobe Illustrator 19.2.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
									<svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										 viewBox="0 0 19 33" style="enable-background:new 0 0 19 33;" xml:space="preserve">
	<style type="text/css">
		.st0{fill:#231F20;stroke:#000000;stroke-width:4;stroke-miterlimit:10;}
	</style>
										<g>
											<path class="st0" d="M16.5,31c-0.1,0-0.3,0-0.4-0.1l-14-14c-0.2-0.2-0.2-0.5,0-0.7l14-14c0.2-0.2,0.5-0.2,0.7,0
			c0.2,0.2,0.2,0.5,0,0.7L3.2,16.5l13.6,13.6c0.2,0.2,0.2,0.5,0,0.7C16.8,31,16.6,31,16.5,31z"/>
										</g>
	</svg>

								</div>
							</div>
						</div>
					</div>
				</div>
				<!--конец секции наши преимущетва-->
			@endif
			@if($page == 'kontakty' || $page == 'partneram' || $page == 'oformlenie-dokumentov')
			@else
				<!--секция с чего начать путеществия-->
				<div class="section fp-section fp-table">
					<div class="fp-tableCell">
						<h2 class="title title_white title_small title_secpreim">{{$title['belyy-zagolovok-tret-ego-slaydera']}}<span class="title title_green title_block">{{$title['zelenyy-zagolovok-tret-ego-slaydera']}}</span></h2>
						<div class="certificates borders start">
							<div style="background-image: url(img/bg_start.jpg)" class="certificates__content start__content">
								<div class="certificates__wrapper">
									<div class="certificates__item start__left">
										<div class="item"><img src="img/IMG2.png"/></div>
									</div>
									<div class="certificates__item certificates__top">
										<div class="certificates__right_slider certificates_slider owl-carousel owl-theme">
											<div class="item">
												<h2 class="title title_small title_dark title_sert">вы<span class="title title_red title_pad title_block">звоните нам</span></h2>
												<div class="certificates__text">
													<p>Это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов</p>
												</div>
											</div>
											<div class="item">
												<h4 class="title title_small title_dark title_sert">Наши<span class="title title_red title_pad title_block">Сертификаты качества</span></h4>
												<div class="certificates__text">
													<p>Это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="arrow__wrapper">
								<div class="arrow__left">
								<!-- Generator: Adobe Illustrator 19.2.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
									<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										 viewBox="0 0 19 33" style="enable-background:new 0 0 19 33;" xml:space="preserve">
	<style type="text/css">
		.st0{fill:#231F20;stroke:#000000;stroke-width:4;stroke-miterlimit:10;}
	</style>
										<g>
											<path class="st0" d="M16.5,31c-0.1,0-0.3,0-0.4-0.1l-14-14c-0.2-0.2-0.2-0.5,0-0.7l14-14c0.2-0.2,0.5-0.2,0.7,0
			c0.2,0.2,0.2,0.5,0,0.7L3.2,16.5l13.6,13.6c0.2,0.2,0.2,0.5,0,0.7C16.8,31,16.6,31,16.5,31z"/>
										</g>
	</svg>

								</div>
								<div class="arrow__right">
								<!-- Generator: Adobe Illustrator 19.2.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
									<svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										 viewBox="0 0 19 33" style="enable-background:new 0 0 19 33;" xml:space="preserve">
	<style type="text/css">
		.st0{fill:#231F20;stroke:#000000;stroke-width:4;stroke-miterlimit:10;}
	</style>
										<g>
											<path class="st0" d="M16.5,31c-0.1,0-0.3,0-0.4-0.1l-14-14c-0.2-0.2-0.2-0.5,0-0.7l14-14c0.2-0.2,0.5-0.2,0.7,0
			c0.2,0.2,0.2,0.5,0,0.7L3.2,16.5l13.6,13.6c0.2,0.2,0.2,0.5,0,0.7C16.8,31,16.6,31,16.5,31z"/>
										</g>
	</svg>

								</div>
							</div>
						</div>
					</div>
				</div>
				<!--конец секции с чего начать путеществие-->
			@endif
			@if($page == 'kontakty' || $page == 'partneram' || $page == 'oformlenie-dokumentov')
			@else
				<!--секция коментарии-->
				<div class="section fp-section fp-table section__comments">
					<div class="fp-tableCell">
						<h2 class="title title_white title_small title_secpreim">{{$title['belyy-zagolovok-soc-setey']}}<span class="title title_green title_block">{{$title['zelenyy-zagolovok-soc-setey']}}</span></h2>
						<div class="certificates borders">
							<!--<div style="background-color: #fff" class="certificates__content start__content">
								<div class="certificates__wrapper comments__wrapper">
									<div class="certificates__item certificates__top comments__right comments__item">
										<div id="vk_comments"></div>
										<script type="text/javascript">VK.Widgets.Comments("vk_comments", {limit: 10, attach: "*"});</script>
									</div>
									<div class="certificates__item certificates__top comments__right comments__item">
										<div id="vk_comments2"></div>
										<script type="text/javascript">VK.Widgets.Comments("vk_comments2", {limit: 10, attach: "*"});
										</script>
									</div>
								</div>
							</div>-->
						</div>
					</div>
				</div>
				<!--конец секции коментарии-->
			@endif
			@if($page == 'kontakty' || $page == 'partneram' || $page == 'oformlenie-dokumentov')
			@else
				<!--секция звоните или пишите нам-->
				<div class="section fp-section fp-table section__my">
					<div class="fp-tableCell">
						<h2 class="title title_white title_small title_secpreim">{{$title['belyy-zagolovok-kas']}}<span class="title title_green title_block">{{$title['zelenyy-zagolovok-kas']}}</span></h2>
						<div class="certificates borders my__sec">
							<div style="background-color: transparent" class="certificates__content my__content">
								<div class="certificates__wrapper my__wrapper">
									<div class="my__phone">
										<div class="my__phonetext">
											<p>Меня зовут менеджер Илона, позвоните <a href="tel:{{str_replace([' ', '(',')'], '', $setting['phone'])}}">{{$setting['phone']}}</a> и уже сейчас, я подберу от 3 до 10 вариантов отдыха под ваши желания и критерии</p>
										</div>
									</div>
									<div class="my__photo"><img src="img/IMG3.png" alt="{{$setting['ip']}}"/></div>
									<div class="my__passport">
										<h3 class="title title_white title_small my__title">Ж/Д и Авиа<span class="title title_dark title_block">кассы</span></h3>
										<div class="my__passcontent"><img src="img/passport.png" alt="123"/>
											<div class="drop-modal my__button click-modal">Жми сюда</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--конец секции звоните или пишите нам-->
			@endif
			<!--секция формы-->
			<div class="section fp-section fp-table">
				<div class="fp-tableCell">
					<h2 class="title title_white title_small title_seccontact">{{$title['belyy-zagolovok-obratnoy-svyazi']}}<span class="title title_green title_block">{{$title['zelenyy-zagolovok-obratnoy-svyazi']}}</span></h2>
					<div class="certificates borders">
						<div style="background-color: transparent" class="certificates__content my__content">
							<div class="certificates__wrapper my__wrapper contact__wrapper">
								<div class="contact__left contact__wrap">
									<h4 class="title title_white title_verysmall title_leftcontact">отправьте заявку<span class="title title_dark title_pad">на быстрый подбор тура или круиза</span></h4>
									<div class="contact__hand"><img src="img/hand.png" alt="123"/>
										<div class="contact__preim">
											<div class="contact__content">
												<h5 class="title title_verysmall title_or">Получите</h5>
												<div class="contact__item"><img src="img/icon_question.png" alt="123"/>
													<div class="contact__text">
														<p>ОТВЕТЫ НА все вопросы</p>
													</div>
												</div>
												<div class="contact__item"><img src="img/icon_pasport.png" alt="123"/>
													<div class="contact__text">
														<p>БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ ПО ДОКУМЕНТАМ РОССИЙСКИМ И УКРАИНСКИМ</p>
													</div>
												</div>
												<div class="contact__item"><img src="img/icon_travel.png" alt="123"/>
													<div class="contact__text">
														<p>ПОДБЕРЕМ 3-10 ВАРИАНТОВ ОТДЫХА, ПОДХОДЯЩЕГО ВАМ</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="contact__right contact__wrap">
									<h3 class="title title_dark title_small">отправить<span class="title title_white title_block">заявку</span></h3>
									<form class="contact-form">
										<div class="contact-form__item input">
											<input type="email" name="email" placeholder="Введите E-mail" class="contact-form__input"/>
										</div>
										<div class="contact-form__item input">
											<input type="tel" name="phone" placeholder="Введите телефон" class="input__phone contact-form__input"/>
										</div>
										<div class="contact-form__item">
											<button type="submit" class="contact-form__button">Отправить</button>
										</div>
										<div class="contact-form__item">
											<label class="contact-form__label contact-form__checklabel contact-form__check checked">Нажимая на кнопку, я даю свое согласие на <a href="{{$setting['link_pers']}}" class="contact-form__link"> обработку персональных данных</a> и соглашаюсь с условиями <a href="{{$setting['link_conf']}}" class="contact-form__link">политики конфиденциальности</a>
												<input type="checkbox" checked="checked" class="contact-form__checkbox"/>
											</label>
										</div>
										<div class="contact-form__item">
											<label class="contact-form__label contact-form__checklabel contact-form__check checked">Я согласен на получение <span class="contact-form__link contact-form__drop">информации от <br/>{{$_SERVER['SERVER_NAME']}}</span>
												<input type="checkbox" checked="checked" class="contact-form__checkbox contact-form__checkboxfull"/>
											</label>
										</div>
										<div class="contact-form__dropdown">
											<div class="contact-form__item">
												<label class="contact-form__label contact-form__checklabel contact-form__check checked">Я согласен на получение <span class="contact-form__link ">информации от <br/>{{$_SERVER['SERVER_NAME']}}</span>
													<input type="checkbox" checked="checked" class="contact-form__checkbox contact-form__checkboxdrop"/>
												</label>
											</div>
											<div class="contact-form__item">
												<label class="contact-form__label contact-form__checklabel contact-form__check checked">Я согласен на получение <span class="contact-form__link ">информации от <br/>{{$_SERVER['SERVER_NAME']}}</span>
													<input type="checkbox" checked="checked" class="contact-form__checkbox contact-form__checkboxdrop"/>
												</label>
											</div>
											<div class="contact-form__item">
												<label class="contact-form__label contact-form__checklabel contact-form__check checked">Я согласен на получение <span class="contact-form__link">информации от <br/>{{$_SERVER['SERVER_NAME']}}</span>
													<input type="checkbox" checked="checked" class="contact-form__checkbox contact-form__checkboxdrop"/>
												</label>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--коне секции формы-->
			<!--секция адреса-->
			<div class="section fp-section fp-table">
				<div class="fp-tableCell">
					<h2 class="title title_white title_small title_seccontact">{{$title['belyy-zagolovok-karty']}}<span class="title title_green title_block">{{$title['zelenyy-zagolovok-karty']}}</span></h2>
					<div class="certificates borders">
						<div style="background-color: transparent" class="certificates__content my__content">
							<div class="certificates__wrapper map__wrapper">
								<div class="map__left map__wrap">
									<div class="map__item">
										<p>Россия</p>
										<p>АР Крым, г. Севастополь,</p>
										<p>{{$setting['adress']}}</p>
										<p><a href="tel:{{str_replace([' ', '(',')'], '', $setting['phone'])}}">{{$setting['phone']}}</a></p>
										<p><a href="tel:{{str_replace([' ', '(',')'], '', $setting['second_phone'])}}">{{$setting['second_phone']}}</a></p>
									</div>
									<div class="map__item">
										<p>ИП {{$setting['ip']}}</p>
										<p>ИНН {{$setting['inn']}}</p>
										<p>АО {{$setting['ao']}}</p>
										<p>БИК {{$setting['bik']}}</p>
										<p>Р/с {{$setting['rs']}}</p>
										<p>к/c {{$setting['cs']}}</p>
									</div>
									<div class="map__item">
										<p>Гарантированая система оплаты</p><img src="img/visa_logo.png" alt="visa"/>
									</div>
								</div>
								<div class="map__right map__wrap"><iframe src="https://api-maps.yandex.ru/frame/v1/-/C6eqUT09" class="map__map"></iframe></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="arrow-down js-scroll-down-arrow">
			<svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 35 21" style="enable-background:new 0 0 35 21;" xml:space="preserve">
        <style type="text/css">.st0{fill:#231F20;stroke:#000000;stroke-width:6;stroke-miterlimit:10;}
		</style>
				<g>
					<path class="st0" d="M32,3.5c0,0.1,0,0.3-0.1,0.4l-14,14c-0.2,0.2-0.5,0.2-0.7,0l-14-14C3,3.7,3,3.3,3.1,3.1C3.3,3,3.7,3,3.9,3.1l13.6,13.6L31.1,3.1c0.2-0.2,0.5-0.2,0.7,0C32,3.2,32,3.4,32,3.5z"/>
				</g>
        </svg></div>
	</div>
@if(Auth::user())
	@if(\Illuminate\Support\Facades\Auth::user()->hasRole('admin'))
		<div class="adminpanel" style="position: fixed; top: 20px; right: 30px; z-index: 100; background-color: transparent;	">
			<a href="{{route('admin.index')}}" style="color: #ff7700">Войти в админ панель</a>
		</div>
	@endif
@endif
    @endsection