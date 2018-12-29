@extends('layout.layout')
@section('content')
    <main class="main page">
        <div class="page_wrapper">
            <p id="breadcrumbs">
                <span typeof="v:Breadcrumb"><a href="/" rel="v:url" property="v:title">Главная страница</a> / <span class="breadcrumb_last">Загрузка СТС</span></span>
            </p>

            <div class="content_page_flex">
                <div class="content_page services">
                    <div class="article_full">
                        <div class="ya-share2 services" data-services="vkontakte,facebook,gplus,odnoklassniki,twitter"></div>

                        <h1>Загрузите Паспорт ТС (ПТС) и договор купли-продажи:</h1>
                        <img   style="max-height: 430px; max-width: 100%; align-items: center; border-radius: 5px; "  src="{{asset('images')}}/pts.jpg">
                        <?php
                        if(count($errors)>0){
                            $icon = 'err.png';
                        }else{
                            $icon = 'wait.png';
                        }
                        ?>
                        <div id="loadImg" class="cssload-thecube" style="z-index: 999999;display: block; position:fixed; left:50%;top:50%; margin-left:-37px; margin-top:-37px; display: none">
                            <div class="cssload-cube cssload-c1"></div>
                            <div class="cssload-cube cssload-c2"></div>
                            <div class="cssload-cube cssload-c4"></div>
                            <div class="cssload-cube cssload-c3"></div>
                        </div>


                        <form class="tools osago" method="post" action="/upload5" enctype="multipart/form-data" id="my-form">

                            @csrf

                            <input type="file" name="upload1" id="upload_hidden1" style="position: absolute; display: block; overflow: hidden; width: 0; height: 0; border: 0; padding: 0;" onchange="document.getElementById('upload_visible11').style.display = 'initial'; document.getElementById('upload_visible1').style.display = 'none';" />
                            <input type="file" name="upload2" id="upload_hidden2" style="position: absolute; display: block; overflow: hidden; width: 0; height: 0; border: 0; padding: 0;" onchange="document.getElementById('upload_visible22').style.display = 'initial'; document.getElementById('upload_visible2').style.display = 'none';" />
                            <input type="file" name="upload3" id="upload_hidden3" style="position: absolute; display: block; overflow: hidden; width: 0; height: 0; border: 0; padding: 0;" onchange="document.getElementById('upload_visible33').style.display = 'initial'; document.getElementById('upload_visible3').style.display = 'none';" />
                            <input type="text" hidden name="number" value="{{$number}}">
                            <input type="text" hidden name="comment" value="{{$comment}}">

                            <button class="g-recaptcha b_osago" onclick="document.getElementById('upload_hidden1').click(); return false" style="max-width: 250px; margin-bottom: 0px; margin-right: 10px">ПТС 1 сторона</button>
                            <img src="{{asset('images')}}/{{$icon}}" id="upload_visible1" style="display: initial; height: 30px; width: 30px; margin-right: 5px">
                            <img src="{{asset('images')}}/done.png" id="upload_visible11" style="display: none; height: 30px; width: 30px; margin-right: 5px">

                            <button class="g-recaptcha b_osago" onclick="document.getElementById('upload_hidden2').click(); return false" style="max-width: 250px; margin-top: 10px; margin-right: 10px">ПТС 2 сторона</button>
                            <img src="{{asset('images')}}/{{$icon}}" id="upload_visible2" style="display: initial; height: 30px; width: 30px">
                            <img src="{{asset('images')}}/done.png" id="upload_visible22" style="display: none; height: 30px; width: 30px">

                            <button class="g-recaptcha b_osago" onclick="document.getElementById('upload_hidden3').click(); return false" style="background: #5b7eb8; max-width: 557px; margin-top: 10px; margin-right: 10px">Договор КП</button>
                            <img src="{{asset('images')}}/{{$icon}}" id="upload_visible3" style="display: initial; height: 30px; width: 30px">
                            <img src="{{asset('images')}}/done.png" id="upload_visible33" style="display: none; height: 30px; width: 30px">

                            <button type="submit" class="g-recaptcha b_osago" style="max-width: 613px; background: #d22f2f">Отправить</button>

                        </form>

                    </div>
                </div>


                <aside class="sidebar">
                    <div class='sidebar_wrapper'>
                        <div class='sidebar_services'><a href='https://dkbm-web.autoins.ru/dkbm-web-1.0/bsostate.htm'>
                                <svg version="1.1" id="Слой_1" x="0px" y="0px"viewBox="0 0 90 90" style="enable-background:new 0 0 90 90;" xml:space="preserve">
                                <style type="text/css">
                                    .st0 {
                                        fill-rule: evenodd;
                                        clip-rule: evenodd;
                                        fill: #FFFFFF;
                                    }
                                </style>
                                    <path class="st0" d="M55,54c0-2.4,1.9-4.3,4.3-4.3c2.4,0,4.3,1.9,4.3,4.3c0,2.4-1.9,4.3-4.3,4.3C57,58.3,55,56.4,55,54L55,54z
                                     M31.4,61.2h27.1c-3.1-0.4-5.6-2.7-6.3-5.7h-3.1c-1.7,0-3.2-0.7-4.2-1.9c-1,1.2-2.5,1.9-4.2,1.9h-3.1C37,58.5,34.5,60.8,31.4,61.2
                                    L31.4,61.2z M26.2,54c0-2.4,1.9-4.3,4.3-4.3c2.4,0,4.3,1.9,4.3,4.3c0,2.4-1.9,4.3-4.3,4.3C28.1,58.3,26.2,56.4,26.2,54L26.2,54z
                                     M73.4,61.2H60.2c3.1-0.4,5.6-2.7,6.3-5.7h6.8c0.8,0,1.5-0.7,1.5-1.5c0-0.8-0.7-1.5-1.5-1.5h-6.8c-0.7-3.3-3.6-5.8-7.1-5.8
                                    c-3.5,0-6.4,2.5-7.1,5.8h-3.1c-1.5,0-2.7-1.2-2.7-2.7c0-3.2,2.1-6,5.2-6.9l8.6-2.5c0.7-0.2,1.3-0.7,1.6-1.4l3.3-7
                                    c0.9-2,3-3.3,5.2-3.3h2.9c0.8,0,1.5-0.7,1.5-1.5c0-0.8-0.7-1.5-1.5-1.5h-2.9c-3.3,0-6.4,1.9-7.9,4.9l-3.3,6.8L50.8,40
                                    c-2.5,0.7-4.6,2.4-5.9,4.5c-1.3-2.1-3.3-3.8-5.9-4.5l-5.9-1.7l9.2-7.6c0.6-0.5,0.7-1.5,0.2-2.1c-0.5-0.6-1.5-0.7-2.1-0.2l-10.2,8.4
                                    l-2.9-6.1c-1.4-3-4.5-4.9-7.9-4.9h-2.9c-0.8,0-1.5,0.7-1.5,1.5c0,0.8,0.7,1.5,1.5,1.5h2.9c2.2,0,4.2,1.3,5.2,3.3l3.3,7
                                    c0.3,0.6,0.7,0.9,1.3,1.2c0.1,0.1,0.2,0.1,0.3,0.1c0,0,0.1,0,0.1,0.1l8.6,2.5c3.1,0.9,5.2,3.7,5.2,6.9c0,1.5-1.2,2.7-2.7,2.7h-3.1
                                    c-0.7-3.3-3.6-5.8-7.1-5.8c-3.5,0-6.4,2.5-7.1,5.8h-6.8c-0.8,0-1.5,0.7-1.5,1.5c0,0.8,0.7,1.5,1.5,1.5h6.8c0.6,3,3.1,5.3,6.3,5.7
                                    H17.4c-0.8,0-1.5,0.7-1.5,1.5c0,0.8,0.7,1.5,1.5,1.5h56.1c0.8,0,1.5-0.7,1.5-1.5C74.9,61.9,74.3,61.2,73.4,61.2z"/>
                                    <path class="st0" d="M45,0c12.4,0,23.7,5,31.8,13.2C85,21.3,90,32.6,90,45s-5,23.7-13.2,31.8C68.7,85,57.4,90,45,90
                                    s-23.7-5-31.8-13.2C5,68.7,0,57.4,0,45s5-23.7,13.2-31.8C21.3,5,32.6,0,45,0L45,0z M74.7,15.3C67.1,7.7,56.6,3,45,3
                                    S22.9,7.7,15.3,15.3C7.7,22.9,3,33.4,3,45s4.7,22.1,12.3,29.7C22.9,82.3,33.4,87,45,87s22.1-4.7,29.7-12.3C82.3,67.1,87,56.6,87,45
                                    S82.3,22.9,74.7,15.3z"/>
                            </svg>
                                Проверка полиса ОСАГО</a><a href='https://autoins.ru/tekhosmotr/'>
                                <svg version="1.1" id="Слой_1" x="0px" y="0px"
                                     viewBox="0 0 90 90" style="enable-background:new 0 0 90 90;" xml:space="preserve">
<style type="text/css">
    .st0 {
        fill-rule: evenodd;
        clip-rule: evenodd;
        fill: #FFFFFF;
    }
</style>
                                    <path class="st0" d="M68.7,39.2c-0.1,0.6-0.4,1.2-0.6,1.7L41,36.4c-0.3-0.6-0.7-1.2-1-1.7c-0.4-0.9-0.9-1.6-1.4-2.2l30.1,5.1
	C68.8,38,68.8,38.7,68.7,39.2L68.7,39.2z M43.3,39.6c1.2,1.4,2.3,2.6,3.2,3.4v-2.8L43.3,39.6L43.3,39.6z M59.7,66.2V42.4l-10.4-1.8
	v5.2c0,0.5-0.3,1-0.7,1.2c-0.4,0.2-1,0.2-1.4,0c-0.2-0.1-5.9-3.7-9.6-11.1c-1.8-3.5-4.6-3.9-7.1-3.6c1.1,1.9,2.4,5,3.3,10
	c1.5,8.8,8.8,20.4,8.9,20.5c0.2,0.3,0.3,0.7,0.2,1v2.5H59.7L59.7,66.2z M33,52.7c0,0.5-0.3,0.7-0.6,0.8c-0.2,0.1-0.7,0.2-1.1-0.4
	l-4.1-6.2l1.1-9.7l0.1,0l1.2,0.4c0.5,1.4,0.9,3.1,1.3,5.2c0.3,1.9,0.9,4,1.6,6L33,52.7l1.1-0.2c0,0,0,0,0,0L33,52.7L33,52.7z
	 M19.5,32.8l-3.8-2.4l4.4-1.1l7.2,1.2c0,0,0,0.1,0,0.1c-0.3,0.7-0.2,1.6,0.3,2.2c0.2,0.3,0.5,0.8,0.8,1.4L19.5,32.8L19.5,32.8z
	 M40,23.6l-16,3.5l33.8,5.7l-12.6-8.2C43.7,23.6,41.8,23.2,40,23.6L40,23.6z M71.2,35.9c-0.2-0.5-0.6-0.9-1.1-1L62,33.5
	c-0.5-1.1-1.2-2.1-2.3-2.8l-13-8.5c-2.1-1.4-4.8-1.9-7.3-1.3l-16.2,3.5c-0.9,0.2-1.7,0.8-2,1.7c-0.1,0.1-0.1,0.3-0.1,0.5l-0.8-0.1
	c-0.2,0-0.4,0-0.6,0l-6.4,1.6c-0.8,0.2-1.4,0.8-1.5,1.7c-0.1,0.8,0.2,1.6,0.9,2.1l5.6,3.5c0.2,0.1,0.3,0.2,0.5,0.2l6.9,1.2
	l-1.2,10.9l4.6,7.1c0.7,1.1,1.9,1.7,3.1,1.7c0.4,0,0.8-0.1,1.2-0.2c0.8-0.2,1.4-0.7,1.8-1.3c2,4.3,4.2,7.9,4.9,9.1v2.4l0,2.8h22.5
	l-0.1-2.8V42.8l6.1,1c0.1,0,0.2,0,0.2,0c0.5,0,0.9-0.2,1.2-0.6c0.1-0.2,1.2-1.9,1.5-3.6C71.8,38,71.2,36.1,71.2,35.9z"/>
                                    <path class="st0" d="M45.2,0C57.6,0,68.9,5,77,13.2c8.1,8.1,13.2,19.4,13.2,31.8s-5,23.7-13.2,31.8C68.9,85,57.6,90,45.2,90
	s-23.7-5-31.8-13.2C5.3,68.7,0.2,57.4,0.2,45s5-23.7,13.2-31.8C21.5,5,32.8,0,45.2,0L45.2,0z M74.9,15.3C67.3,7.7,56.8,3,45.2,3
	S23.1,7.7,15.5,15.3C7.9,22.9,3.2,33.4,3.2,45s4.7,22.1,12.3,29.7C23.1,82.3,33.6,87,45.2,87s22.1-4.7,29.7-12.3
	c7.6-7.6,12.3-18.1,12.3-29.7S82.5,22.9,74.9,15.3z"/>
</svg>
                                Проверка полиса Техосмотра</a><a href='http://www.autoins.ru/'>
                                <svg version="1.1" id="Слой_1" x="0px" y="0px"
                                     viewBox="0 0 90 90" style="enable-background:new 0 0 90 90;" xml:space="preserve">
<style type="text/css">
    .st0 {
        fill-rule: evenodd;
        clip-rule: evenodd;
        fill: #FFFFFF;
    }
</style>
                                    <path class="st0" d="M60,65.1C59.8,65,59.6,65,59.4,65c0,0-0.1,0-0.1,0c-0.1,0-13.9,1-15.9,1c-1.8-0.2-15.4-7-24.7-11.9
	c0.9-0.6,2.7-1.3,5.1-0.3c2.8,1.1,9,3.4,11.9,4.5c-0.3,0.6-0.5,1.2-0.6,1.8c-0.1,0.8,0.2,1.6,0.8,2.1c0.6,0.6,1.4,0.8,2.2,0.6
	c1-0.2,14.1-2.4,14-3.2c0-0.8-11.5-0.2-14,0.3c0.4-1,1.4-2.5,3.1-3.5c4.3-2.5,11.5-4.7,15.4-4.7c0,0,0,0,0.1,0
	c2.4,0,5.4,2.2,7.1,3.7L62.3,66L60,65.1L60,65.1z M29.3,50.9c-1.3-0.3-2.5,0-3.5,0.5C29,52.7,35,55,37.3,55.9
	c0.4-0.4,0.8-0.8,1.2-1.1C36,53.4,31.7,51.4,29.3,50.9L29.3,50.9z M37.2,49.4c-0.9,0-1.7,0.2-2.3,0.5c2.7,1.2,5.4,2.5,6.6,3.1
	c0.6-0.3,1.1-0.5,1.8-0.8C41.7,51,39.2,49.4,37.2,49.4L37.2,49.4z M73.7,72.8l-9-2.7L67,53.3l6.1,0.9c0.8,0.1,1.5-0.4,1.6-1.2
	c0.1-0.8-0.4-1.5-1.2-1.6L66,50.2c-0.4-0.1-0.8,0-1.1,0.3c-0.3,0.2-0.5,0.6-0.6,1l-0.1,0.6c-2-1.6-4.9-3.3-7.7-3.3
	c-2.8,0-6.7,1-10.3,2.3c-0.4-0.4-4.8-4.5-9.1-4.5c-2.9,0-5,1.5-5.1,1.6c-0.2,0.1-0.3,0.3-0.4,0.5c-0.7-0.2-1.3-0.4-1.8-0.5
	c-3.7-0.8-6.7,1.3-7.9,2.3c-3.4-0.2-5.8,1.6-6.5,3.1c-0.5,1.2,0,2.1,0.7,2.5c5.7,3,24.7,12.8,27.2,12.8c0,0,0,0,0,0
	c2,0,13.6-0.9,15.8-1l2.7,1.1l-0.3,2c-0.1,0.7,0.3,1.4,1,1.6l10.2,3c0.1,0,0.3,0.1,0.4,0.1c0.6,0,1.2-0.4,1.4-1
	C74.9,73.8,74.4,73,73.7,72.8z"/>
                                    <path class="st0" d="M70.9,35.1c0,1.4-1.2,2.6-2.6,2.6h-2.1c-0.7-3.2-3.5-5.5-6.8-5.5c-3.4,0-6.2,2.4-6.8,5.5H38.3
	c-0.7-3.2-3.5-5.5-6.8-5.5c-3.4,0-6.2,2.4-6.8,5.5h-2.9c-1.4,0-2.6-1.2-2.6-2.6c0-3,2-5.8,5-6.6l8.2-2.4c0.7-0.2,1.3-0.7,1.6-1.3
	l3.2-6.6C38,16.2,39.9,15,42,15h13.5c2.2,0,4.2,1.3,5.1,3.4l2.8,6.8c0.4,1,1.3,1.6,2.3,1.6H67c2.1,0,3.9,1.7,3.9,3.9V35.1L70.9,35.1
	z M59.4,43.2c2.3,0,4.1-1.8,4.1-4.1c0-2.3-1.8-4.1-4.1-4.1c-2.3,0-4.1,1.8-4.1,4.1C55.3,41.4,57.1,43.2,59.4,43.2L59.4,43.2z
	 M31.5,43.2c2.3,0,4.1-1.8,4.1-4.1c0-2.3-1.8-4.1-4.1-4.1c-2.3,0-4.1,1.8-4.1,4.1C27.4,41.4,29.2,43.2,31.5,43.2L31.5,43.2z
	 M67,23.9h-1.1l-2.7-6.6c-1.3-3.1-4.3-5.2-7.7-5.2H42c-3.2,0-6.1,1.9-7.5,4.7l-3.1,6.5l-8.1,2.3c-4.1,1.2-7,5-7,9.4
	c0,3,2.5,5.5,5.5,5.5h2.9c0.7,3.2,3.5,5.5,6.8,5.5s6.2-2.4,6.8-5.5h14.2c0.7,3.2,3.5,5.5,6.8,5.5c3.4,0,6.2-2.4,6.8-5.5h2.1
	c3,0,5.5-2.5,5.5-5.5v-4.4C73.7,27,70.7,23.9,67,23.9z"/>
                                    <path class="st0" d="M45,0c12.4,0,23.7,5,31.8,13.2C85,21.3,90,32.6,90,45s-5,23.7-13.2,31.8C68.7,85,57.4,90,45,90
	s-23.7-5-31.8-13.2C5,68.7,0,57.4,0,45s5-23.7,13.2-31.8C21.3,5,32.6,0,45,0L45,0z M74.7,15.3C67.1,7.7,56.6,3,45,3
	S22.9,7.7,15.3,15.3C7.7,22.9,3,33.4,3,45s4.7,22.1,12.3,29.7C22.9,82.3,33.4,87,45,87s22.1-4.7,29.7-12.3C82.3,67.1,87,56.6,87,45
	S82.3,22.9,74.7,15.3z"/>
</svg>
                                Сайт РСА</a><a href='https://autoins.ru/e-osago/'>
                                <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 90 90" style="enable-background:new 0 0 90 90;" xml:space="preserve">
<style type="text/css">
    .st0 {
        fill-rule: evenodd;
        clip-rule: evenodd;
        fill: #28ada3;
    }
</style>
                                    <g>
                                        <path class="st0" d="M45,73.7c-22.9-7.7-26.4-35.4-27-42.4c16,0.9,24.1-7.8,27-12c2.9,4.2,11,12.9,27,12
		C71.4,38.3,67.9,66.1,45,73.7L45,73.7z M74.5,28.8c-0.3-0.3-0.7-0.4-1.1-0.4C53.3,30.2,46.6,16.6,46.3,16c-0.5-1-2.1-1-2.6,0
		c-0.1,0.1-6.8,14.3-27.1,12.4c-0.4,0-0.8,0.1-1.1,0.4c-0.3,0.3-0.5,0.7-0.5,1.1c0,0.4,0.9,37.7,29.5,46.8c0.1,0,0.3,0.1,0.4,0.1
		c0.1,0,0.3,0,0.4-0.1C74,67.5,74.9,30.2,74.9,29.8C74.9,29.4,74.8,29,74.5,28.8z"/>
                                        <path class="st0" d="M58.1,55.6h-3.4v-2c0-0.8-0.6-1.4-1.4-1.4H36.7c-0.8,0-1.4,0.6-1.4,1.4v2h-3.4V43.4c0-1,0.8-2.4,1.6-3.9
		c0.4-0.8,0.9-1.6,1.3-2.5c0.4-0.9,1.4-1.5,2.4-1.5h15.8c1,0,2,0.6,2.4,1.5c0,0,0,0,0,0c0.4,0.9,0.8,1.7,1.3,2.5
		c0.8,1.5,1.6,2.9,1.6,3.9V55.6L58.1,55.6z M62.4,41.6h-1.8c-0.3-1.1-0.9-2.3-1.6-3.5c-0.4-0.7-0.8-1.5-1.2-2.3
		c-0.9-2-2.9-3.2-5-3.2H37.1c-2.2,0-4.1,1.3-5,3.2c-0.4,0.8-0.8,1.6-1.2,2.3c-0.6,1.2-1.2,2.4-1.6,3.5h-1.8c-0.8,0-1.4,0.6-1.4,1.4
		c0,0.8,0.6,1.4,1.4,1.4H29v12.6c0,0.8,0.6,1.4,1.4,1.4h6.2c0.8,0,1.4-0.6,1.4-1.4v-2h13.7v2c0,0.8,0.6,1.4,1.4,1.4h6.2
		c0.8,0,1.4-0.6,1.4-1.4V44.5h1.5c0.8,0,1.4-0.6,1.4-1.4C63.9,42.2,63.2,41.6,62.4,41.6z"/>
                                        <circle class="st0" cx="36.7" cy="46.8" r="2.1"/>
                                        <circle class="st0" cx="53.3" cy="46.8" r="2.1"/>
                                    </g>
                                    <path class="st0" d="M45,0c12.4,0,23.7,5,31.8,13.2C85,21.3,90,32.6,90,45s-5,23.7-13.2,31.8C68.7,85,57.4,90,45,90
	s-23.7-5-31.8-13.2C5,68.7,0,57.4,0,45s5-23.7,13.2-31.8C21.3,5,32.6,0,45,0L45,0z M74.7,15.3C67.1,7.7,56.6,3,45,3
	S22.9,7.7,15.3,15.3C7.7,22.9,3,33.4,3,45s4.7,22.1,12.3,29.7C22.9,82.3,33.4,87,45,87s22.1-4.7,29.7-12.3C82.3,67.1,87,56.6,87,45
	S82.3,22.9,74.7,15.3z"/>
</svg>
                                Все об электронном осаго</a>

                            <a href='/'>
                                <svg version="1.1" id="Слой_1" x="0px" y="0px"
                                     viewBox="0 0 90 90" style="enable-background:new 0 0 90 90;" xml:space="preserve">
<style type="text/css">
    .st0 {
        fill-rule: evenodd;
        clip-rule: evenodd;
        fill: #FFFFFF;
    }
</style>
                                    <path class="st0" d="M59.1,57c-2.5,0-4.5-2-4.5-4.5c0-2.5,2-4.5,4.5-4.5c2.5,0,4.5,2,4.5,4.5C63.6,55,61.6,57,59.1,57L59.1,57z
	 M32.5,59.2h24.1c-2.3-0.9-4-2.9-4.5-5.3H37C36.5,56.3,34.8,58.3,32.5,59.2L32.5,59.2z M25.5,52.5c0-2.5,2-4.5,4.5-4.5
	c2.5,0,4.5,2,4.5,4.5c0,2.5-2,4.5-4.5,4.5C27.5,57,25.5,55,25.5,52.5L25.5,52.5z M22.9,51.2c0.6-3.3,3.5-5.8,7-5.8
	c3.5,0,6.4,2.5,7,5.8h15.2c0.6-3.3,3.5-5.8,7-5.8c3.5,0,6.4,2.5,7,5.8h3.2c1.6,0,2.9-1.3,2.9-2.9c0-3.3-2.2-6.2-5.3-7.1l-8.6-2.5
	c0,0-0.1,0-0.1,0c0,0,0,0-0.1,0c-0.6-0.2-1.1-0.7-1.4-1.2l-3.3-7c-1-2-3.1-3.3-5.3-3.3H34c-2.4,0-4.5,1.4-5.4,3.7L25.6,38
	c-0.4,0.9-1.3,1.6-2.3,1.6H22c-2.3,0-4.2,1.9-4.2,4.2v4.6c0,1.6,1.3,2.9,2.9,2.9H22.9L22.9,51.2z M66.2,53.9h3.2
	c3.1,0,5.6-2.5,5.6-5.6c0-4.4-3-8.4-7.2-9.6l-6.4-1.8l10.5-10.1c0.5-0.5,0.6-1.4,0-1.9c-0.5-0.5-1.4-0.6-1.9,0l-11,10.7l-3-6.2
	c-1.4-3-4.5-4.9-7.7-4.9H34c-3.5,0-6.6,2.1-7.9,5.3l-2.9,7H22c-3.8,0-6.9,3.1-6.9,6.9v4.6c0,3.1,2.5,5.6,5.6,5.6h2.3
	c0.5,2.4,2.2,4.4,4.5,5.3h-6.1c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3h50.6c0.7,0,1.3-0.6,1.3-1.3c0-0.7-0.6-1.3-1.3-1.3
	H61.7C64,58.3,65.7,56.3,66.2,53.9z"/>
                                    <path class="st0" d="M45,0c12.4,0,23.7,5,31.8,13.2C85,21.3,90,32.6,90,45s-5,23.7-13.2,31.8C68.7,85,57.4,90,45,90
	s-23.7-5-31.8-13.2C5,68.7,0,57.4,0,45s5-23.7,13.2-31.8C21.3,5,32.6,0,45,0L45,0z M74.7,15.3C67.1,7.7,56.6,3,45,3
	S22.9,7.7,15.3,15.3C7.7,22.9,3,33.4,3,45s4.7,22.1,12.3,29.7C22.9,82.3,33.4,87,45,87s22.1-4.7,29.7-12.3C82.3,67.1,87,56.6,87,45
	S82.3,22.9,74.7,15.3z"/>
</svg>
                                Главная</a></div>


                        <iframe src="//widget.instagramm.ru/?imageW=2&imageH=2&thumbnail_size=117&type=0&typetext=osago_aleksandr&head_show=1&profile_show=1&shadow_show=1&bg=255,255,255,1&opacity=true&head_bg=46729b&subscribe_bg=ad4141&border_color=c3c3c3&head_title=" allowtransparency="true" frameborder="0" scrolling="no" style="border:none;overflow:hidden;width:260px;height:399px;"></iframe>
                    </div>
                </aside>


            </div>
        </div>
    </main>
@endsection

@section('js')

    <script>
        jQuery('#my-form').submit(function(e){


            var imgObj = $("#loadImg");
            imgObj.show();

            var docHeight = $(document).height();
            $("body").append("<div id='overlay'></div>");
            $("#overlay")
                .height(docHeight)
                .css({
                    'opacity' : 0.4,
                    'position': 'absolute',
                    'top': 0,
                    'left': 0,
                    'background-color': 'black',
                    'width': '100%',
                    'z-index': 5000
                });
        });
    </script>
@endsection