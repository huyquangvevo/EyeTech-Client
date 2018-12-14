<template>
    <form id="update-form" name="update-form" class="nobottommargin" @submit.prevent="update" method="post">
        <div class="col_half">
            <label for="update-form-name">Name:</label>
            <input v-model="name" v-bind:placeholder="name" type="text" id="update-form-name" name="update-form-name" value="" class="form-control"/>
        </div>
        <div class="col_half col_last">
            <label for="update-form-email">Email Address:</label>
            <input v-model="email" v-bind:placeholder="email" type="email" id="update-form-email" name="update-form-email" value="" class="form-control" />
        </div>
        <div class="clear"></div>
        <div class="col_half">
            <label for="update-form-age">Age</label>
            <input v-model="age" v-bind:placeholder="age" type="number" id="update-form-age" name="update-form-age" value="" class="form-control" />
        </div>
        <div class="col_half col_last">
            <label for="update-form-gender">Gender</label>
            <v-select :options="genders" v-bind:placeholder="gender" v-model="gender" id="update-form-gender">
            </v-select>
        </div>
        <div class="col_half">
            <label for="update-form-type">Type</label>
            <v-select :options="types" v-bind:placeholder="type" v-model="type"  id="update-form-type">
            </v-select>
        </div>
        <div class="col_half col_last">
            <label for="update-form-phone">Telephone</label>
            <input v-model="telephone" v-bind:placeholder="telephone" type="text" id="update-form-phone" name="update-form-phone" value="" class="form-control" />
        </div>
        <div class="clear"></div>
        <div class="col_half">
            <label for="update-form-country">Country</label>
            <v-select :options="countries" v-bind:placeholder="country" v-model="country" id="update-form-country">
            </v-select>
        </div>
        <div class="col_half col_last">
            <label for="update-form-city">City</label>
            <v-select :options="cities" v-bind:placeholder="city" v-model="city" id="update-form-city">
            </v-select>
        </div>
        <div class="form-group">
            <label for="formControlLocation">Detail Location</label>
            <textarea v-model="location" v-bind:placeholder="location" class="form-control" id="formControlLocation" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="formControlFavorites">Favorites</label>
            <textarea v-model="favorites" v-bind:placeholder="favorites" class="form-control" id="formControlFavorites" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="formControlNote">Note</label>
            <textarea v-model="note" v-bind:placeholder="note" class="form-control" id="formControlNote" rows="3"></textarea>
        </div>
        <div class="clear"></div>
        <div class="col_full nobottommargin">
            <button class="button button-3d button-black nomargin" id="update-form-submit" name="update-form-submit" value="update" type="submit">Update</button>
        </div>
    </form>
</template>

<script>
    export default {
        name: "CustomerUpdateComponent",
        props: {
            id: '',
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
                    url: 'http://202.191.56.249/eyetech/api/v1/customers/' + this.id,
                })
                    .then(response => {
                        console.log(response);
                        this.store_id = response.data.data.store_id;
                        this.image_url_array = response.data.data.image_url_array;
                        this.vector = response.data.data.vector;
                        this.name = response.data.data.name;
                        this.email = response.data.data.email;
                        this.age = response.data.data.age;
                        this.gender= response.data.data.gender;
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
                    url: 'http://202.191.56.249/eyetech/api/v1/customers/' + this.id,
                    data: {
                        store_id: this.store_id,
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
            }
        }
    }
</script>

<style scoped>

</style>
