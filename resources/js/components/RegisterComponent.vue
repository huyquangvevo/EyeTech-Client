<template>
    <div class="layout bg-white full-height">
        <div class="row no-gutters">
            <div class="col-md-8 d-none d-md-block align-self-end auth-background">
                <div class="row full-height">
                    <div class="col-md-10 align-self-center">
                        <div class="m-b-50 m-l-70">
                            <img class="img-fluid" src="#" alt="">
                            <div class="m-t-15 m-l-20">
                                <h1 class="font-weight-light font-size-35 text-white">Exploring The World</h1>
                                <p class="text-white width-60 text-opacity m-t-25 font-size-16">Why we should never stop exploring the world</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 align-self-center">
                <div class="row">
                    <div class="col-10 offset-1 col-sm-8 offset-sm-2">
                        <div class="p-v-25">
                            <h1 class="m-b-30">Create Your account</h1>
                            <form>
                                <div class="form-group">
                                    <label class="control-label">Full Name</label>
                                    <input type="text" class="form-control" v-model="name">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Email Address</label>
                                    <input type="email" class="form-control" v-model="email">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Store</label>
                                    <b-form-select v-model="storeSelected" :options="stores" style="height: 50px;"/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Branch</label>
                                    <b-form-select v-model="branchSelected" :options="branches" style="height: 50px;"/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Password</label>
                                    <input type="password" class="form-control" placeholder="Password" v-model="password">
                                </div>
                                <div class="checkbox font-size-13">
                                    <input id="agreement" name="agreement" type="checkbox" checked="">
                                    <label for="agreement">Remember Me</label>
                                </div>
                                <div class="form-group m-t-20">
                                    <button  v-on:click="register" type="button" class="btn btn-gradient-success btn-block btn-lg">Create New Account</button>
                                </div>
                            </form>
                            <p>Already have an account? <a v-bind:href="login_form_route">Sign In</a></p>
                            <hr>
                            <small>By signing up you agree to out <a href="#">Terms &amp; Policy</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "RegisterComponent",
        data() {
           return {
               stores: [],
               storeSelected: '',
               branchSelected: '',
               name: '',
               email: '',
               password: '',
           }
        },
        props: {
            register_api_route: '',
            login_form_route: '',
        },
        created() {
            this.fetchStoresList();
            this.branches = '';
        },
        asyncComputed: {
            branches: async function () {
                const response = await this.fetchBranchesList();
                return response.data.branches;
            }
        },
        methods: {
            fetchStoresList() {
                axios({
                    method: 'get',
                    url: 'http://202.191.56.249/eyetech/api/v1/list-stores-client',
                })
                    .then(response => {
                        this.stores = response.data.stores;
                        console.log(response);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
            async fetchBranchesList() {
                try {
                    return await axios({
                        method: 'post',
                        url: 'http://202.191.56.249/eyetech/api/v1/list-branches-client',
                        data: {
                            store_id: this.storeSelected,
                        }
                    });
                } catch (e) {
                    console.error(e);
                }
            },
            register() {
                axios({
                    method: 'post',
                    url: this.register_api_route,
                    data: {
                        branch_id: this.branchSelected,
                        name: this.name,
                        email: this.email,
                        password: this.password,
                    }
                })
                    .then(respose => {
                        console.log(respose)
                        window.location = respose.data.redirect;
                    })
                    .catch(error => {
                        console.log(error)
                    });
            },
        }
    }
</script>

<style scoped>

</style>
