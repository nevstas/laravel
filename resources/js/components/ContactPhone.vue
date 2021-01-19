<template>
    <div>
        <div class="contact_phones">

            <div v-for="(phone, index) in phones_arr" :key='index' class="contact__phone">
                <div class="contact__phone-input">
                    <input type="text" class="form-control" name="phone[]" v-bind:placeholder="messages[language].contacts.your_phone" v-model:value="phone.value" required>
                </div>
                <div class="contact__phone-icon" @click="remove(index)">
                    <i class="fa fa-minus-circle" aria-hidden="true"></i>
                </div>
            </div>

        </div>
        <button class="btn btn-primary btn-sm contact__phones-add" @click.prevent="addPhone">Добавить</button>
    </div>
</template>

<script>
    export default {
        props:[
            'phones',
        ],

        data() {
            return {
                phones_arr: this.phonesArrConvert(this.phones),
            };
        },

        mounted() {
            // console.log(this.phones_arr);
        },
        methods: {
            addPhone() {
                this.phones_arr.push({ value: "" });
            },
            phonesArrConvert(phones) {
                var new_phones_arr = [];
                phones.forEach(function(entry) {
                    new_phones_arr.push({ value: entry });
                });
                return new_phones_arr;
            },
            remove(index) {
                this.phones_arr.splice(index, 1);

                // this.$emit('deleted', this.id);
            }
        }
    }
</script>

<style>
    .contact__phones-add {
        margin-top: 10px;
    }
    .contact__phone {
        margin-bottom: 10px;
    }
    .contact__phone-input {
        display: inline-block;
        width: calc(100% - 25px);
    }
    .contact__phone-icon {
        display: inline-block;
        width: 20px;
    }
    .contact__phone-icon i {
        color: red;
    }
</style>
