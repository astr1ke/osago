@extends('layout.layout')
@section('content')
    <main class="main page">
        <div class="page_wrapper">
            <p id="breadcrumbs">
                <span typeof="v:Breadcrumb"><a href="/" rel="v:url" property="v:title">Главная страница</a> / <span class="breadcrumb_last">Загрузка Документов</span></span>
            </p>

            <div class="content_page_flex">
                <div class="content_page services">
                    <div class="article_full">
                        <div class="ya-share2 services" data-services="vkontakte,facebook,gplus,odnoklassniki,twitter"></div>
                        <div id = "app">
                            <app-title :text="mainTitle"></app-title>
                            <app-main-image  :src = "mainImage" ></app-main-image>

                            <form name=inputFormName class="tools osago" @submit.prevent="onSubmit" method="post" action="/upload" enctype="multipart/form-data" id="my-form">
                                @csrf

                                <app-form1 @change1="checker.form1.check1=$event" @change2="checker.form1.check2=$event" @input1="inputs.form1Input1=$event" @input2="inputs.form1Input2=$event" :style="{display: form1display}" icon="images/wait.png" done="images/done.png"></app-form1>
                                <app-form2 @change1="checker.form2.check1=$event" @change2="checker.form2.check2=$event" @input1="inputs.form2Input1=$event" @input2="inputs.form2Input2=$event" :style="{display: form2display}" icon="images/wait.png" done="images/done.png"></app-form2>
                                <app-form3 :style="{display: form3display}"></app-form3>
                                <app-form4 @submit-button="submitMethod" @input1="phone=$event" @input2="comment=$event" :style="{display: form4display}" icon="images/wait.png" done="images/done.png"></app-form4>
                                <app-form5 @to4step="toFourStep" @change1="checker.form5.check1=$event" @change2="checker.form5.check2=$event" @change3="checker.form5.check3=$event" @input1="inputs.form5Input1=$event" @input2="inputs.form5Input2=$event" @input3="inputs.form5Input3=$event" :style="{display: form5display}" icon="images/wait.png" done="images/done.png"></app-form5>

                                <button class="doneButton" :style="{display: mainButton}" @click="nextPage">Следующий шаг</button><br>
                            </form>
                        </div>

                    </div>
                </div>
                @include('layout.rightColumn')
            </div>
        </div>
    </main>
@endsection
