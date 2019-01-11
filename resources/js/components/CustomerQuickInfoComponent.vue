<template>
    <div class="col-md-3">
        <div class="card">
            <img class="card-img-top" v-bind:src="avatar" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title quick-info-name">{{ name }}</h5>
                <p class="card-text quick-info-address">{{ address}}</p>
                <span v-if="type === 'New'" class="badge badge-pill badge-gradient-success">
                    {{ type }}
                </span>
                <span v-else-if="type === 'Visted'" class="badge badge-pill badge-warning">
                    {{ type }}
                </span>
                <span v-else-if="type === 'Vip'" class="badge badge-pill badge-gradient-danger">
                    {{ type }}
                </span>
                <span v-else-if="type === 'Blacklist'" class="badge badge-pill badge-secondary">
                    {{ type }}
                </span>
                <span v-else-if="type === 'Staff'" class="badge badge-pill badge-light">
                    {{ type }}
                </span>
                <span v-else class="badge badge-pill badge-primary">
                    {{ type }}
                </span>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a v-bind:href="route_gallery">Library Image</a></li>
                <li class="list-group-item"><a href="#">Statistical Visted</a></li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        name: "CustomerQuickInfoComponent",
        props: {
            id_customer: '',
            route_gallery: '',
        },
        data() {
            return {
                avatar: '',
                name: '',
                type: '',
                address: '',
                country: '',
                city: '',
                location: '',
            }
        },
        created() {
            this.fetchCustomerQuickInfo();
            this.formatGallaryRoute();
        },
        methods: {
            formatGallaryRoute() {
                this.route_gallery = this.route_gallery + '/' + this.id_customer;
            },
            fetchCustomerQuickInfo() {
                axios({
                    method: 'get',
                    url: 'http://202.191.56.249/eyetech/api/v1/customers/' + this.id_customer,
                })
                    .then(response => {
                        console.log(response);
                        this.avatar = response.data.avatar_url;
                        this.name = response.data.data.name;
                        this.type = response.data.data.type;
                        this.country = response.data.data.address.country;
                        this.city = response.data.data.address.city;
                        this.location = response.data.data.address.location;
                        this.address = this.location + ', ' + this.city + ', ' + this.country;
                    })
                    .catch(error => {
                        console.log(error);
                    })
            },
        }
    }
</script>

<style scoped>

</style>
