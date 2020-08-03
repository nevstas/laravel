/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
// require('jquery');
// require('sweetalert2');

//window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app',
// });

//Swal.fire('Any fool can use a computer');

$('.contact__btn-remove').click(function(){
    event.preventDefault();
    Swal.fire({
        title: translations.contacts.are_you_sure,
        text: translations.contacts.you_wont_be_able_to_revert_this,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: translations.contacts.yes_delete_it,
        cancelButtonText: translations.contacts.no_cancel,
    }).then((result) => {
        if (result.value) {
            document.querySelector('.contact__form-remove').submit();
        }
    })

});
