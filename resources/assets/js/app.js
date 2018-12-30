
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('app-title', require('./components/upload/app-title.vue').default);
Vue.component('app-main-image', require('./components/upload/app-main-image.vue').default);
Vue.component('app-form1', require('./components/upload/app-form1.vue').default);
Vue.component('app-form2', require('./components/upload/app-form2.vue').default);
Vue.component('app-form3', require('./components/upload/app-form3.vue').default);
Vue.component('app-form4', require('./components/upload/app-form4.vue').default);
Vue.component('app-form5', require('./components/upload/app-form5.vue').default);


const app = new Vue({
    el: '#app',
    data: {
        phone: '',
        comment: '',
        inputs: {
            form1Input1: '',
            form1Input2: '',
            form2Input1: '',
            form2Input2: '',
            form3Input1: '',
            form3Input2: '',
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
                mainImage: '/images/passport.jpg',
                mainButton: 'initial',
                form1display: 'initial',
                form2display: 'none',
                form3display: 'none',
                form4display: 'none',
                form5display: 'none'
            },
            page2: {
                mainTitle: 'Загрузите Свидетельство о регистрации ТС::',
                mainImage: '/images/sts.jpg',
                mainButton: 'initial',
                form1display: 'none',
                form2display: 'initial',
                form3display: 'none',
                form4display: 'none',
                form5display: 'none'
            },
            page3: {
                mainTitle: 'Загрузите Водительские удостоверения:',
                mainImage: '/images/prava.jpg',
                mainButton: 'none',
                form1display: 'none',
                form2display: 'none',
                form3display: 'initial',
                form4display: 'none',
                form5display: 'none'
            },
            page4: {
                mainTitle: 'Все документы загружены!!!',
                mainImage: '/images/osago.jpg',
                mainButton: 'none',
                form1display: 'none',
                form2display: 'none',
                form3display: 'none',
                form4display: 'initial',
                form5display: 'none'
            },
            page5: {
                mainTitle: 'Загрузите Паспорт ТС (ПТС) и договор купли-продажи:',
                mainImage: '/images/pts.jpg',
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
            alert('Отправляю форму');


            // создать объект для формы
            var formData = new FormData(document.forms.inputFormName);
            // добавить к пересылке ещё пару ключ - значение
            formData.append("ttt", "rrr");

            // отослать
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "http://vagan.loc:8080/upload");
            xhr.send(formData);


            // axios.post('http://vagan.loc/upload', {
            //     upload: this.inputs,
            //     phone: this.phone,
            //     comment: this.comment
            // })
            //     .then(function (response) {
            //         console.log(response);
            //     })
            //     .catch(function (error) {
            //         console.log(error);
            //     });

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
});
