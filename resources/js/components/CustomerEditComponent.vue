<template>
    <div class="tab-pane" id="edit">
        <form role="form">
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Name</label>
                <div class="col-lg-9">
                    <input class="form-control" type="text" v-model="name" v-bind:placeholder="name">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Email</label>
                <div class="col-lg-9">
                    <input class="form-control" type="email" v-model="email" v-bind:placeholder="email">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Age</label>
                <div class="col-lg-9">
                    <input class="form-control" type="number" v-model="age" v-bind:placeholder="age">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Gender</label>
                <div class="col-lg-9">
                    <v-select id="selectGender" :options="genders" v-bind:placeholder="gender" v-model="gender"></v-select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Type</label>
                <div class="col-lg-9">
                    <v-select id="selectType" :options="types" v-bind:placeholder="type" v-model="type"></v-select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Phone Number</label>
                <div class="col-lg-9">
                    <input class="form-control" type="text" v-model="telephone" v-bind:placeholder="telephone">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Location</label>
                <div class="col-lg-9">
                    <input class="form-control" type="text" v-model="location" v-bind:placeholder="location" placeholder="stress">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <div class="col-lg-5">
                    <v-select id="selectCountry" :options="countries" v-bind:placeholder="country" v-model="country"></v-select>
                </div>
                <div class="col-lg-4">
                    <v-select id="selectCity" :options="cities" v-bind:placeholder="city" v-model="city"></v-select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Favorites</label>
                <div class="col-lg-9">
                    <textarea v-model="favorites" v-bind:placeholder="favorites" class="form-control" id="formControlFavorites" rows="5"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Note</label>
                <div class="col-lg-9">
                    <textarea v-model="note" v-bind:placeholder="note" class="form-control" id="formControlNote" rows="5"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <div class="col-lg-9">
                    <button v-on:click="update" class="btn btn-success custom-btn-update">Update</button>
                </div>
            </div>
        </form>
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
                    "New",
                    "Visted",
                    "Vip",
                    "Blacklist",
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
        },
    }
</script>

<style scoped>

</style>
