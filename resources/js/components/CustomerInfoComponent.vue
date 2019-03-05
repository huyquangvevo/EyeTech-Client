<template>
    <div class="tab-pane active" id="profile">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-1">
                        <div class="line-vertical"></div>
                    </div>
                    <div class="col-md-11">
                        <h6 class="profile-title">
                            <i class="fas fa-envelope"></i>
                            <span>Email Address</span>
                        </h6>
                        <p class="profile-content">
                            {{ email }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                        <div class="line-vertical"></div>
                    </div>
                    <div class="col-md-11">
                        <h6 class="profile-title">
                            <i class="fas fa-phone-square"></i>
                            <span>Phone Number</span>
                        </h6>
                        <p class="profile-content">
                            {{ telephone }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                        <div class="line-vertical"></div>
                    </div>
                    <div class="col-md-11">
                        <h6 class="profile-title">
                            <i class="fas fa-user-alt"></i>
                            <span>Age</span>
                        </h6>
                        <p class="profile-content">
                            {{ age }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                        <div class="line-vertical"></div>
                    </div>
                    <div class="col-md-11">
                        <h6 class="profile-title">
                            <i class="fas fa-transgender"></i>
                            <span>Gender</span>
                        </h6>
                        <p class="profile-content">
                            {{ gender }}
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-1">
                        <div class="line-vertical"></div>
                    </div>
                    <div class="col-md-11">
                        <h6 class="profile-title">
                            <i class="fab fa-gratipay"></i>
                            <span>Favorites</span>
                        </h6>
                        <p class="profile-content">
                            {{ favorites }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                        <div class="line-vertical"></div>
                    </div>
                    <div class="col-md-11">
                        <h6 class="profile-title">
                            <i class="fas fa-comment-alt"></i>
                            <span>Note</span>
                        </h6>
                        <p class="profile-content">
                            {{ note }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h6 class="profile-title">Favorites</h6>
                <a href="#" class="badge badge-dark badge-pill">Cafe</a>
                <a href="#" class="badge badge-dark badge-pill">Milk</a>
                <a href="#" class="badge badge-dark badge-pill">Matcha</a>
                <a href="#" class="badge badge-dark badge-pill">Chocolate</a>
                <a href="#" class="badge badge-dark badge-pill">Tea</a>
                <a href="#" class="badge badge-dark badge-pill">Cacao</a>
                <hr>
                <span class="badge badge-primary"><i class="fa fa-user"></i>
                    10 visted
                </span>
                <span class="badge badge-success"><i class="fa fa-cog"></i> 100 hour</span>
            </div>
            <div class="col-md-12" style="margin-top: 50px">
                <h5 class="mt-2">
                    <div class="row">
                        <div class="col-md-11">
                            <h6 class="profile-title">Recent Activity</h6>
                        </div>
                        <div class="col-md-1">
                            <i class="far fa-clock"></i>
                        </div>
                    </div>
                </h5>
                <table class="table table-sm table-hover table-striped">
                    <tbody>
                    <tr>
                        <td>
                            <strong>Abby</strong> joined ACME Project Team in <strong>`Collaboration`</strong>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Gary</strong> deleted My Board1 in <strong>`Discussions`</strong>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Kensington</strong> deleted MyBoard3 in <strong>`Discussions`</strong>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>John</strong> deleted My Board1 in <strong>`Discussions`</strong>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Skell</strong> deleted his post Look at Why this is.. in <strong>`Discussions`</strong>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "CustomerInfoComponent",
        props: {
            id_customer: '',
        },
        data() {
            return {
                email: '',
                age: '',
                gender: '',
                telephone: '',
                favorites: '',
                note: '',
            }
        },
        created() {
            this.fetchCustomerInfo();
            this.fetchNumberVisted();
        },
        methods: {
            fetchCustomerInfo() {
                axios({
                    method: 'get',
                    url: 'http://202.191.56.249/eyetech/api/v1/customers/' + this.id_customer,
                })
                    .then(response => {
                        console.log(response);
                        this.email = response.data.data.email;
                        this.age = response.data.data.age;
                        this.gender = response.data.data.gender;
                        this.telephone = response.data.data.telephone;
                        this.favorites = response.data.data.favorites;
                        this.note = response.data.data.note;
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
