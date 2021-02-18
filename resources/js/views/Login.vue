<template>
    <header>
        <div class="menu-wrapper">
            <div class="register-link">
                <router-link to='/register'>Sign up</router-link>
            </div>
        </div>
    </header>
    <main class="login">
        <div class="login-wrapper">
            <h3>iMessenger</h3>
            <h2>Hello guys!</h2>
            <p>Please login into your account to get started</p>
            <form>
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
                    <label class="checkbox-container" for="remember">
                        Remember me
                        <input type="checkbox" name="remember" id="remember" class="checkbox" value="1" v-model="form.remember">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="form-group">
                    <button class="btn" type="submit" @click.prevent="login">Login</button>
                    <router-link to="" class="reset-link">Forgot password</router-link>
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
                    email: '',
                    password: '',
                    remember: ''
                },
                errors: {}
            }
        },
        methods: {
            login() {
                axios.get('/sanctum/csrf-cookie').then(response => {
                    axios.post('/api/login', this.form).then(response => {
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
header {
    width: 100%;
    height: 75px;
    .menu-wrapper {
        width: 90%;
        margin: auto;
        .register-link {            
            height: 75px;
            line-height: 75px;
            font-size: 1.6rem;
            float: right;
            a {
                color: #000;
                &:hover {
                    color: #197593;
                    transition: all 0.2s ease-in-out;
                }
            }
        }
    }
}
main.login {
    width: 100%;
    .login-wrapper {
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
                .checkbox-container {
                    display: inline-block;
                    position: relative;
                    padding-left: 30px;
                    font-size: 1.4rem;
                    cursor: pointer;
                    user-select: none;
                    input {
                        position: absolute;
                        opacity: 0;
                        cursor: pointer;
                        height: 0;
                        width: 0;
                        &:checked ~ .checkmark {
                            background-color: #197593;
                            &:after {
                                display: block;
                            }
                        }
                    }
                    .checkmark {
                        position: absolute;
                        top: 0;
                        left: 0;
                        height: 1.8rem;
                        width: 1.8rem;
                        background-color: #ebebeb;
                        &:after {
                            content: "";
                            position: absolute;
                            display: none;
                        }
                    }
                }
                .checkbox-container .checkmark:after {
                    width: 5px;
                    height: 10px;
                    left: 5px;
                    top: 1px;
                    border: solid white;
                    border-width: 0 3px 3px 0;
                    transform: rotate(45deg);
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
                a.reset-link {
                    font-size: 1.6rem;
                    color: #197593;
                    margin-left: 2rem;
                }
            }
        }
    }
}
</style>
