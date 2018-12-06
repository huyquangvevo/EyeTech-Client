<template>
    <div class="wrapper wrapper--w960">
        <div class="card card-2">
            <div class="card-heading"></div>
            <div class="card-body">
                <h2 class="title">Register</h2>
                <form @submit.prevent="register" method="POST" v-if="!success">
                    <div class="row row-space">
                        <div class="col-2" v-bind:class="{ 'has-error': error && errors.storeSelected}">
                            <h3>Store</h3>
                            <v-select :options="stores" v-model="storeSelected" label="id">
                            </v-select>
                        </div>
                        <div class="col-2" v-bind:class="{ 'has-error': error && errors.branchSelected}">
                            <h3>Branch</h3>
                            <v-select :options="branches" v-model="branchSelected" label="id">
                            </v-select>
                        </div>
                    </div>

                    <div class="input-group" v-bind:class="{ 'has-error': error && errors.name}">
                        <input class="input--style-2" type="text" placeholder="Name" name="name" v-model="name" required>
                        <span class="help-block" v-if="error && errors.name">{{ errors.name }}</span>
                    </div>
                    <div class="input-group" v-bind:class="{ 'has-error': error && errors.email}">
                        <input class="input--style-2" type="email" placeholder="Email" name="email" v-model="email" required>
                        <span class="help-block" v-if="error && errors.email">{{ errors.email }}</span>
                    </div>
                    <div class="input-group" v-bind:class="{ 'has-error': error && errors.password}">
                        <input class="input--style-2" type="password" placeholder="Password" name="password" v-model="password" required>
                        <span class="help-block" v-if="error && errors.password">{{ errors.password }}</span>
                    </div>
                    <div class="p-t-30">
                        <button class="btn btn--radius btn--green" type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "registerComponent",
        data() {
            return {
                stores: [],
                storeSelected: '',
                branchSelected: '',
                name: '',
                email: '',
                password: '',
                error: false,
                errors: '',
                success: false,
            }
        },
        created() {
            this.fetchStoresList();
        },
        asyncComputed: {
            branches: async function () {
                const response = await this.fetchBranchesList();
                return response.data.data;
            }
        },
        methods: {
            fetchStoresList() {
                axios({
                    method: 'get',
                    url: 'http://localhost/eyetech/api/v1/list-stores-id',
                })
                    .then(response => {
                        this.stores = response.data.stores_id;
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
                        url: 'http://localhost/eyetech/api/v1/list-branches-id',
                        data: {
                            store_id: this.storeSelected.id,
                        }
                    });
                } catch (e) {
                    console.error(e);
                }
            },
            async getBranches() {
                try {
                    return await axios.get('http://localhost/eyetech/api/v1/list-stores-id');
                } catch (e) {
                    console.error(e);
                }
            },
            register() {
                axios({
                    method: 'post',
                    url: 'http://localhost/eyetech-client/api/v1/register',
                    data: {
                        branch_id: this.branchSelected.id,
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
