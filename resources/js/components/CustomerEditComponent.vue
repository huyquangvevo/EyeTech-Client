<template>
    <div class="card">
        <div class="card-header border bottom">
            <h4 class="card-title">Form Row</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="control-label">Customer Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="mdi mdi-account-outline"></i></span>
                                </div>
                                <input type="text" class="form-control" v-model="name" v-bind:placeholder="name">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input type="email" class="form-control" v-model="email" v-bind:placeholder="email">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="control-label">Age</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">A</span>
                                </div>
                                <input type="text" class="form-control" v-model="age" v-bind:placeholder="age">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label">Gender</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">G</span>
                                </div>
                                <input type="text" class="form-control" v-model="gender" v-bind:placeholder="gender">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="control-label">Type</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">T</span>
                                </div>
                                <v-select :options="types" v-bind:placeholder="type" v-model="type" class="form-control">
                                </v-select>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label">Phone</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">P</span>
                                </div>
                                <input type="text" class="form-control" v-model="telephone" v-bind:placeholder="telephone">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="control-label">Country</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">C</span>
                                </div>
                                <v-select :options="countries" v-bind:placeholder="country" v-model="country" class="form-control">
                                </v-select>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label">City</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">C</span>
                                </div>
                                <v-select :options="cities" v-bind:placeholder="city" v-model="city" class="form-control">
                                </v-select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Location</label>
                        <textarea v-model="location" v-bind:placeholder="location" class="form-control" id="formControlLocation" rows="2"></textarea>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Favorites</label>
                        <textarea v-model="favorites" v-bind:placeholder="favorites" class="form-control" id="formControlFavorites" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Note</label>
                        <textarea v-model="note" v-bind:placeholder="note" class="form-control" id="formControlNote" rows="5"></textarea>
                    </div>

                    <div class="form-row">
                        <div class="col-sm-6">
                            <div class="text-sm-right">
                                <button v-on:click="update" class="btn btn-gradient-success">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "CustomerEditComponent",
        props: {
            id_customer: '',
        },
        data() {
            return {
                genderSelected: '',
                typeSelected: '',
                countrySelected: '',
                citySelected: '',

                store_id: '',
                image_url_array: '',
                vector: '',
                name: '',
                email: '',
                age: '',
                gender: '',
                type: '',
                telephone: '',
                country: '',
                city: '',
                location: '',
                favorites: '',
                note: '',
                types: [
                    "VIP",
                    "BlackList",
                    "Visted",
                    "New",
                    "Staff",
                ],
                cities: [
                    "Ha Noi",
                    "Sai Gon",
                    "Da Nang",
                ],
                countries: [
                    "Viet Nam",
                ],
                genders: [
                    "Male",
                    "Famale",
                    "Another",
                ]
            }
        },
        created() {
            this.fetchCustomerInfo();
        },
        methods: {
            fetchCustomerInfo() {
                axios({
                    method: 'get',
                    url: 'http://202.191.56.249/eyetech/api/v1/customers/' + this.id_customer,
                })
                    .then(response => {
                        console.log(response);
                        this.store_id = response.data.data.store_id;
                        this.image_url_array = response.data.data.image_url_array;
                        this.vector = response.data.data.vector;
                        this.name = response.data.data.name;
                        this.email = response.data.data.email;
                        this.age = response.data.data.age;
                        this.gender = response.data.data.gender;
                        this.type = response.data.data.type;
                        this.telephone = response.data.data.telephone;
                        this.country = response.data.data.address.country;
                        this.city = response.data.data.address.city;
                        this.location = response.data.data.address.location;
                        this.favorites = response.data.data.favorites;
                        this.note = response.data.data.note;
                    })
                    .catch(error => {
                        console.log(error);
                    })
            },
            update() {
                axios({
                    method: 'patch',
                    url: 'http://202.191.56.249/eyetech/api/v1/customers/' + this.id_customer,
                    data: {
                        image_url_array: this.image_url_array,
                        vector: this.vector,
                        name: this.name,
                        email: this.email,
                        age: this.age,
                        gender: this.gender,
                        type: this.type,
                        telephone: this.telephone,
                        country: this.country,
                        city: this.city,
                        location: this.location,
                        favorites: this.favorites,
                        note: this.note,
                    }
                })
                    .then(response => {
                        console.log(response);
                        // window.location = response.data.redirect;
                    })
                    .catch(error => {
                        console.log(error);
                    })
            },
            test() {
                console.log(this.name);
                console.log(this.email);
                console.log(this.age);
                console.log(this.gender);
                console.log(this.type);
                console.log(this.telephone);
                console.log(this.country);
                console.log(this.city);
                console.log(this.location);
                console.log(this.favorites);
                console.log(this.note);
            }
        }
    }
</script>

<style scoped>

</style>
