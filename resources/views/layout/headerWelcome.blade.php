@extends('layout.header')
@section('main')
    <div class="moto-widget moto-widget-row row-fixed moto-justify-content_center moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto"
         data-widget="row" data-spacing="mala">
        <div class="container-fluid">
            <div class="row">
                <div class="moto-cell col-sm-7" data-container="container">
                    <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
                         data-widget="text" data-preset="default" data-draggable-disabled="">
                        <div class="moto-widget-text-content moto-widget-text-editable"><p
                                    class="moto-text_system_3">Технический&nbsp;<br>осмотр</p></div>
                    </div>
                    <div class="moto-widget moto-widget-row row-gutter-0 moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto"
                         data-widget="row" data-spacing="sasa" data-grid-type="xs">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="moto-cell col-xs-6" data-container="container">
                                    <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
                                         data-widget="text" data-preset="default">
                                        <div class="moto-widget-text-content moto-widget-text-editable"><p
                                                    class="moto-text_system_13">всего за&nbsp;</p></div>
                                    </div>
                                </div>
                                <div class="moto-cell col-xs-6" data-container="container">
                                    <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
                                         data-widget="text" data-preset="default">
                                        <div class="moto-widget-text-content moto-widget-text-editable"><p
                                                    class="moto-text_system_4">500Р</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto"
                         data-widget="text" data-preset="default" data-spacing="aama">
                        <div class="moto-widget-text-content moto-widget-text-editable"><p
                                    class="moto-text_system_10">Страховка по 3м копиям документов! Отсылаете нам фото, оплачиваете через Сбербанк Онлайн, мы привозим полис Вам домой! &nbsp;<a href="/more/"
                                                                                           data-action="page"
                                                                                           data-id="14"
                                                                                           class="moto-link"></a>​​​​​​​<br>
                            </p></div>
                    </div>
                    <div class="moto-widget moto-widget-row moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
                         data-widget="row" data-spacing="maaa" data-grid-type="sm">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="moto-cell col-sm-5" data-container="container">
                                    <div data-widget-id="wid__button__5b7283da51b85" class="moto-widget moto-widget-button moto-preset-default moto-align-left moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto " data-widget="button">
                                        <a href="/upload" data-action="url" class="moto-widget-button-link moto-size-small moto-link">
                                            <span class="fa moto-widget-theme-icon"></span>
                                            <span class="moto-widget-button-label">Отправить документы</span>
                                        </a>
                                    </div>
                                </div>
                                <!--<div class="moto-cell col-sm-7" data-container="container">
                                    <div data-widget-id="wid__button__5b7283da51ddc"
                                         class="moto-widget moto-widget-button moto-preset-2 moto-align-left moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto "
                                         data-widget="button">
                                        <a href="http://demolink.motocms.com/" data-action="url"
                                           class="moto-widget-button-link moto-size-small moto-link"><span
                                                    class="fa moto-widget-theme-icon"></span> <span
                                                    class="moto-widget-button-label">Отправить документы</span></a>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="moto-cell col-sm-5" data-container="container">
                    <div data-widget-id="wid__image__5b7283da51ff0"
                         class="moto-widget moto-widget-image moto-preset-default moto-align-right moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto  "
                         data-widget="image">
                    <span class="moto-widget-image-link">
            <img data-src="{{asset('images')}}/mt-0756_header_img01.png" class="moto-widget-image-picture lazyload"
                 data-id="146" title="" alt="">
        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
