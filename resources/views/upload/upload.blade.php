@extends('layout.layout')
@section('content')

    <!-- подключение vue.js -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.21/dist/vue.js"></script>

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

                            <form class="tools osago" @submit.prevent="onSubmit" method="post" action="/upload" enctype="multipart/form-data" id="my-form">
                                @csrf

                                <app-form1 @change1="checker.form1.check1=$event" @change2="checker.form1.check2=$event" @input1="inputs.form1Input1=$event" @input2="inputs.form1Input2=$event" :style="{display: form1display}" icon="images/wait.png" done="images/done.png"></app-form1>
                                <app-form2 @change1="checker.form2.check1=$event" @change2="checker.form2.check2=$event" @input1="inputs.form2Input1=$event" @input2="inputs.form2Input2=$event" :style="{display: form2display}" icon="images/wait.png" done="images/done.png"></app-form2>
                                <app-form3 @change1="checker.form3.check1=$event" @change2="checker.form3.check2=$event" @input1="inputs.form3Input1=$event" @input2="inputs.form3Input2=$event" :style="{display: form3display}" icon="images/wait.png" done="images/done.png"></app-form3>
                                <app-form4 @submit-button="submitMethod" @input1="inputs.form4Input1=$event" @input2="inputs.form4Input2=$event" :style="{display: form4display}" icon="images/wait.png" done="images/done.png"></app-form4>
                                <app-form5 @change1="checker.form5.check1=$event" @change2="checker.form5.check2=$event" @change3="checker.form5.check3=$event" @input1="inputs.form5Input1=$event" @input2="inputs.form5Input2=$event" @input3="inputs.form5Input3=$event" :style="{display: form5display}" icon="images/wait.png" done="images/done.png"></app-form5>

                                <button class="doneButton" :style="{display: mainButton}" @click="nextPage">Отправить</button><br>
                            </form>
                        </div>
                    </div>
                </div>
                @include('layout.rightColumn')
            </div>
        </div>
    </main>

    <script>

        Vue.component('app-title', {
            props: ['text'],
            template: '<h1>@{{ text }}</h1>\n'
        });

        Vue.component('app-main-image', {
            props: ['src'],
            template: '<img class="mainPage" :src="src" >'
        });

        Vue.component('app-form1', {
            props: ['icon', 'done'],
            template:
            '<div>' +
            '<input @change="$emit(\'change1\', true)" @input="$emit(\'input1\', $event.target.value)" class="formInput" ref="form1Input1" type="file" name="form1upload1" id="form1UploadHiddenLeft" onchange="document.getElementById(\'Form1UploadVisibleDoneLeft\').style.display = \'initial\'; document.getElementById(\'Form1UploadVisibleIconLeft\').style.display = \'none\';" />' +
            '<input @change="$emit(\'change2\', true)" @input="$emit(\'input2\', $event.target.value)" class="formInput" ref="form1Input2" type="file" name="form1upload2" id="form1UploadHiddenRight" onchange="document.getElementById(\'Form1UploadVisibleDoneRight\').style.display = \'initial\'; document.getElementById(\'Form1UploadVisibleIconRight\').style.display = \'none\';" />' +

            '<button class="formButtonLeft" onclick="document.getElementById(\'form1UploadHiddenLeft\').click()">Главная страница</button>' +
            '<img class="formIconLeft" :src="icon" id="Form1UploadVisibleIconLeft">' +
            '<img class="formDoneLeft" :src="done" id="Form1UploadVisibleDoneLeft">' +

            '<button class="formButtonRight" onclick="document.getElementById(\'form1UploadHiddenRight\').click()">Прописка</button>' +
            '<img class="formIconRight" :src="icon" id="Form1UploadVisibleIconRight" >' +
            '<img class="formDoneRight" :src="done" id="Form1UploadVisibleDoneRight" >' +

            '</div>'
        })

        Vue.component('app-form2', {
            props: ['icon', 'done'],
            template:
            '<div>' +
            '<input @change="$emit(\'change1\', true)" @input="$emit(\'input1\', $event.target.value)" class="formInput" type="file" name="form2upload1" id="form2UploadHiddenLeft" onchange="document.getElementById(\'Form2UploadVisibleDoneLeft\').style.display = \'initial\'; document.getElementById(\'Form2UploadVisibleIconLeft\').style.display = \'none\';" />' +
            '<input @change="$emit(\'change2\', true)" @input="$emit(\'input2\', $event.target.value)" class="formInput" type="file" name="form2upload2" id="form2UploadHiddenRight" onchange="document.getElementById(\'Form2UploadVisibleDoneRight\').style.display = \'initial\'; document.getElementById(\'Form2UploadVisibleIconRight\').style.display = \'none\';" />\n' +

            '<button class="formButtonLeft" onclick="document.getElementById(\'form2UploadHiddenLeft\').click()">Главная страница</button>' +
            '<img class="formIconLeft" :src="icon" id="Form2UploadVisibleIconLeft">' +
            '<img class="formDoneLeft" :src="done" id="Form2UploadVisibleDoneLeft">' +

            '<button class="formButtonRight" onclick="document.getElementById(\'form2UploadHiddenRight\').click()">Обратная сторона</button>' +
            '<img class="formIconRight" :src="icon" id="Form2UploadVisibleIconRight">' +
            '<img class="formDoneRight" :src="done" id="Form2UploadVisibleDoneRight">' +
            '</div>'
        })

        Vue.component('app-form3', {
            props: ['icon', 'done'],
            template:
            '<div>' +
            '<input @change="$emit(\'change1\', true)" @input="$emit(\'input1\', $event.target.value)" class="formInput" type="file" name="form3upload1" id="form3UploadHiddenLeft" onchange="document.getElementById(\'Form3UploadVisibleDoneLeft\').style.display = \'initial\'; document.getElementById(\'Form3UploadVisibleIconLeft\').style.display = \'none\';" />' +
            '<input @change="$emit(\'change2\', true)" @input="$emit(\'input2\', $event.target.value)" class="formInput" type="file" name="form3upload2" id="form3UploadHiddenRight" onchange="document.getElementById(\'Form3UploadVisibleDoneRight\').style.display = \'initial\'; document.getElementById(\'Form3UploadVisibleIconRight\').style.display = \'none\';" />' +

            '<button class="formButtonLeft" onclick="document.getElementById(\'form3UploadHiddenLeft\').click()">Главная страница</button>' +
            '<img class="formIconLeft" :src="icon" id="Form3UploadVisibleIconLeft">' +
            '<img class="formDoneLeft" :src="done" id="Form3UploadVisibleDoneLeft">' +

            '<button class="formButtonRight" onclick="document.getElementById(\'form3UploadHiddenRight\').click()">Обратная сторона</button>' +
            '<img class="formIconRight" :src="icon" id="Form3UploadVisibleIconRight">' +
            '<img class="formDoneRight" :src="done" id="Form3UploadVisibleDoneRight">' +

            '<input type="text" name="form3more" id="more" hidden>' +
            '<button class="addDriver" type="submit" onclick="document.getElementById(\'form3more\').value = \'1\'">Добавить еще водителя</button>' +
            '<button class="doneButton" @click="this.$parent.nextPage" type="submit">Закончить отправку</button>'+
            '</div>'
        })

        Vue.component('app-form4', {
            props: ['icon', 'done'],
            template:
            '<div>' +

            '<input @input="$emit(\'input1\', $event.target.value)" class="inputNumber" type="text" name="number" placeholder="Номер телефона для связи..."/>' +
            '<input @input="$emit(\'input2\', $event.target.value)" class="inputComment" type="text" name="comment" placeholder="Так же можете оставить коментарий"/>' +

            '<br>' +
            '<input type="text" name="form4more" id="more" hidden>' +
            '<label>Для вновь купленных автомобилей необходимы дополнительные документы:</label>' +

            '<button class="addInfo" @click="this.$parent.nextPage" type="submit" onclick="document.getElementById(\'more\').value = \'1\'">Доп. документы</button>' +
            '<button @click="$emit(\'submit-button\')" class="doneButton" type="submit">Сохранить и вернуться</button>'+
            '</div>'
        })

        Vue.component('app-form5', {
            props: ['icon', 'done'],
            template:
            '<div>' +
            '<input @change="$emit(\'change1\', true)" @input="$emit(\'input1\', $event.target.value)" class="formInput" type="file" name="form5upload1" id="form5UploadHiddenLeft" onchange="document.getElementById(\'Form5UploadVisibleDoneLeft\').style.display = \'initial\'; document.getElementById(\'Form5UploadVisibleIconLeft\').style.display = \'none\';" />' +
            '<input @change="$emit(\'change2\', true)" @input="$emit(\'input2\', $event.target.value)" class="formInput" type="file" name="form5upload2" id="form5UploadHiddenRight" onchange="document.getElementById(\'Form5UploadVisibleDoneRight\').style.display = \'initial\'; document.getElementById(\'Form5UploadVisibleIconRight\').style.display = \'none\';" />' +
            '<input @change="$emit(\'change3\', true)" @input="$emit(\'input3\', $event.target.value)" class="formInput" type="file" name="form5upload3" id="form5UploadHiddenCenter" onchange="document.getElementById(\'Form5UploadVisibleDoneCenter\').style.display = \'initial\'; document.getElementById(\'Form5UploadVisibleIconCenter\').style.display = \'none\';" />' +

            '<button class="formButtonRight" onclick="document.getElementById(\'form5UploadHiddenLeft\').click()">ПТС 1 сторона</button>' +
            '<img class="formIconLeft" :src="icon" id="Form5UploadVisibleIconLeft">' +
            '<img class="formDoneLeft" :src="done" id="Form5UploadVisibleDoneLeft">' +

            '<button class="formButtonRight" onclick="document.getElementById(\'form5UploadHiddenRight\').click()">ПТС 2 сторона</button>' +
            '<img class="formIconRight" :src="icon" id="Form5UploadVisibleIconRight">' +
            '<img class="formDoneRight" :src="done" id="Form5UploadVisibleDoneRight">' +

            '<button class="addDKP" onclick="document.getElementById(\'form5UploadHiddenCenter\').click()">Договор КП</button>' +
            '<img class="formIconCenter" :src="icon" id="Form5UploadVisibleIconCenter">' +
            '<img class="formDoneCenter" :src="done" id="Form5UploadVisibleDoneCenter">'+
            '</div>'
        })

        new Vue({
            el: '#app',
            data: {
                inputs: {
                    form1Input1: '',
                    form1Input2: '',
                    form2Input1: '',
                    form2Input2: '',
                    form3Input1: '',
                    form3Input2: '',
                    form4Input1: '',
                    form4Input2: '',
                    form5Input1: '',
                    form5Input2: '',
                    form5Input3: ''
                },
                checker: {
                    form1: {
                        check1: false,
                        check2: false
                    },
                    form2: {
                        check1: false,
                        check2: false
                    },
                    form3: {
                        check1: false,
                        check2: false
                    },
                    form5: {
                        check1: false,
                        check2: false,
                        check3: false
                    }
                },
                currentSetting: 1,
                pageSetting: {
                    page1: {
                        mainTitle: 'Загрузите фото паспорта собственника:',
                        mainImage: 'http://vagan.loc/images/passport.jpg',
                        mainButton: 'initial',
                        form1display: 'initial',
                        form2display: 'none',
                        form3display: 'none',
                        form4display: 'none',
                        form5display: 'none'
                    },
                    page2: {
                        mainTitle: 'Загрузите Свидетельство о регистрации ТС::',
                        mainImage: 'http://vagan.loc/images/sts.jpg',
                        mainButton: 'initial',
                        form1display: 'none',
                        form2display: 'initial',
                        form3display: 'none',
                        form4display: 'none',
                        form5display: 'none'
                    },
                    page3: {
                        mainTitle: 'Загрузите Водительские удостоверения:',
                        mainImage: 'http://vagan.loc/images/prava.jpg',
                        mainButton: 'none',
                        form1display: 'none',
                        form2display: 'none',
                        form3display: 'initial',
                        form4display: 'none',
                        form5display: 'none'
                    },
                    page4: {
                        mainTitle: 'Все документы загружены!!!',
                        mainImage: 'http://vagan.loc/images/osago.jpg',
                        mainButton: 'none',
                        form1display: 'none',
                        form2display: 'none',
                        form3display: 'none',
                        form4display: 'initial',
                        form5display: 'none'
                    },
                    page5: {
                        mainTitle: 'Загрузите Паспорт ТС (ПТС) и договор купли-продажи:',
                        mainImage: 'http://vagan.loc/images/pts.jpg',
                        mainButton: 'initial',
                        form1display: 'none',
                        form2display: 'none',
                        form3display: 'none',
                        form4display: 'none',
                        form5display: 'initial'
                    }
                }
            },

            computed: {
                mainTitle: function () {
                    return this.pageSetting['page' + this.currentSetting]['mainTitle']
                },
                mainImage: function () {
                    return this.pageSetting['page' + this.currentSetting]['mainImage']
                },
                mainButton: function () {
                    return this.pageSetting['page' + this.currentSetting]['mainButton']
                },
                form1display: function () {
                    return this.pageSetting['page' + this.currentSetting]['form1display']
                },
                form2display: function () {
                    return this.pageSetting['page' + this.currentSetting]['form2display']
                },
                form3display: function () {
                    return this.pageSetting['page' + this.currentSetting]['form3display']
                },
                form4display: function () {
                    return this.pageSetting['page' + this.currentSetting]['form4display']
                },
                form5display: function () {
                    return this.pageSetting['page' + this.currentSetting]['form5display']
                }
            },

            methods: {
                submitMethod: function () {
                  axios.post('http://vagan.loc/upload', {
                      body: {dfd: 'fdff'}
                  })
                },
                nextPage: function () {
                    this.currentSetting++;
                    return false;

                    var currentForm = 'form' + this.currentSetting;
                    var m = this.checker[currentForm];
                    var result = true;

                    for (var i in m ){
                        if (m[i] === false) {
                            alert('Заполните все документы');
                            return false
                        }else{
                            result = true;
                        }
                    }

                    if (result === true) {
                        if (this.currentSetting < 5) {
                            this.currentSetting++
                        }
                    }
                }
            }
        })
    </script>

@endsection
