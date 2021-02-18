<template>
    <main class="register">
        <div class="register-wrapper">
            <h3>iMessenger</h3>
            <h2>Please sign up</h2>
            <p>Already have account?<router-link to='/login'>Login</router-link></p>
            <form>
                <div class="form-group">
                    <div class="group-holder">
                        <input name="name" type="text" placeholder="Name" v-model="form.name">
                        <span class="symbol-input"><i class="far fa-user"></i></span>
                    </div>
                    <span class="invalid-feedback" v-if="errors && errors.name">{{ errors.name[0] }}</span>
                </div>
                <div class="form-group">
                    <div class="group-holder">
                        <input name="email" type="email" placeholder="Email" v-model="form.email">
                        <span class="symbol-input"><i class="far fa-envelope"></i></span>
                    </div>
                    <span class="invalid-feedback" v-if="errors && errors.email">{{ errors.email[0] }}</span>
                </div>
                <div class="form-group">
                    <div class="group-holder">
                        <input name="password" type="password" placeholder="Password" v-model="form.password">
                        <span class="symbol-input"><i class="fas fa-unlock-alt"></i></span>
                    </div>
                    <span class="invalid-feedback" v-if="errors && errors.password">{{ errors.password[0] }}</span>
                </div>
                <div class="form-group">
                <div class="group-holder">
                    <input type="password" name="password_confirmation" placeholder="Confirm password" v-model="form.password_confirmation">
                    <span class="symbol-input"><i class="fas fa-unlock-alt"></i></span>
                </div>
                </div>
                <div class="form-group">
                    <button class="btn" type="submit" @click.prevent="register">sign up</button>
                </div>
            </form>
        </div>
    </main>
</template>

<script>
    export default {
        data() {
            return {
                form: {
                    name: '',
                    email: '',
                    password: '',
                    password_confirmation: ''
                },
                errors: {}
            }
        },
        methods: {
            register() {
                axios.get('/sanctum/csrf-cookie').then(response => {
                    axios.post('/api/register', this.form).then(response => {
                        this.$router.push({ name: 'Messenger' });
                    }).catch(error => {
                        if (error.response.status === 422) {
                            this.errors = error.response.data.errors;
                        }
                    });
                });
            } 
        }
    }
</script>

<style lang='scss' scoped>
main.register {
    width: 100%;
    .register-wrapper {
        width: 90%;
        margin: auto;
        text-align: center;
        h2 {
            padding: 3rem 0 1.5rem;
            font-weight: normal;
        }
        h3 {
            color: #197593;
            padding: 7rem 0 0 0;
        }
        p {
            a {
                margin-left: 1rem;
                color: #197593;
            }
        }
        form {
            background-color: #fff;
            width: 40%;
            margin: auto;
            @media screen and (max-width: 1200px) {
                width: 80%;
            }
            @media screen and(max-width: 800px) {
                width: 90%;
            }
            @media screen and (max-width: 600px) {
                width: 100%;
            }
            .form-group {
                margin: 3rem 0;
                text-align: left;
                .group-holder {
                    position: relative;
                    input {
                        font-size: 1.6rem;
                        border: 2px solid #ebebeb;
                        border-radius: .5rem;
                        padding: 1.4rem 0 1.4rem 5rem;
                        width: 100%;
                        display: block;
                        &::placeholder {
                            font-size: 1.6rem;
                            color: #4e4e4e;
                            opacity: 1;
                        }
                        &:focus {
                            outline: none;
                            border: 2px solid #fff;
                            transition: all .2s ease-in-out;
                            box-shadow:0 0 0 0.45rem rgb(25 117 147 / 35%);
                        }
                    }
                    span.symbol-input {
                        color: #ebebeb;
                        font-size: 2rem;
                        position: absolute;
                        left: 1.5rem;
                        top: 30%;
                    }
                }
                span.invalid-feedback {
                    color: #ff9678;
                    font-size: 1.2rem;
                    font-weight: 600;
                    display: inline-block;
                    padding-top: .5rem;
                }
                button.btn {
                    padding: 1.5rem 3.7rem 1.2rem;
                    cursor: pointer;
                    font-size: 1.2rem;
                    text-transform: uppercase;
                    outline: none;
                    letter-spacing: 1.5px;
                    border: 1px solid transparent;
                    background-color: #197593;
                    color: #fff;
                    font-weight: 600;
                    &:hover {
                        box-shadow: 0 1px 15px 0 rgba(25, 117, 147, 0.75);
                        transition: all 0.2s ease-in-out;
                    }
                    &:not(:hover) {
                    box-shadow: none;
                    transition: all 0.2s ease-in-out;
                    }
                }
            }
        }
    }
}
</style>
