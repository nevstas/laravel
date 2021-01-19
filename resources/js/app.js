/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
// require('sweetalert2');

window.Vue = require('vue');

Vue.prototype.messages = window.messages;
Vue.prototype.language = window.language;

Vue.mixin({
    data: function() {
        return {
            messages: window.messages,
            language: window.language,
        }
    }
})

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('contact-phone', require('./components/ContactPhone.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

$('.contact__btn-remove').click(function(){
    event.preventDefault();
    Swal.fire({
        title: messages[language].contacts.are_you_sure,
        text: messages[language].contacts.you_wont_be_able_to_revert_this,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: messages[language].contacts.yes_delete_it,
        cancelButtonText: messages[language].contacts.no_cancel,
    }).then((result) => {
        if (result.value) {
            $(this).parent().find('.contact__form-remove').submit();
        }
    })

});
