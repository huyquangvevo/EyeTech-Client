<template>
    <div class="col-md-3 row">
            <div class="col-md-6">
                <button class="btn btn-default btn-rounded custom-btn-message">Message</button>
            </div>
            <div class="col-md-6">
                <button v-on:click="showModalDestroy" class="btn btn-default btn-rounded custom-btn-delete">Destroy</button>
            </div>
        <b-modal ref="modalDestroyRef" hide-footer title="Are you absolutely sure?">
            <div class="d-block text-center">
                <h3>
                    Delete all infomation of
                    <span style="font-weight: bold;">{{ name }}</span>
                </h3>
            </div>
            <div class="row">
                <div class="col-sm">
                    <b-btn class="mt-3" variant="outline-secondary" block @click="hideModalDestroy">Close</b-btn>
                </div>
                <div class="col-sm">
                    <b-btn class="mt-3" variant="outline-danger" block @click="destroyCustomer">Destroy</b-btn>
                </div>
            </div>
        </b-modal>
    </div>
</template>

<script>
    export default {
        name: "CustomerProfileHeaderComponent",
        props: {
            id_customer: '',
            route_home: '',
        },
        data() {
            return {
                name: ''
            }
        },
        created() {
            this.fetchCustomerName();
        },
        methods: {
            fetchCustomerName() {
                axios({
                    method: 'get',
                    url: 'http://202.191.56.249/eyetech/api/v1/customers/' + this.id_customer,
                })
                    .then(response => {
                        console.log(response);
                        this.name = response.data.data.name;
                    })
                    .catch(error => {
                        console.log(error);
                    })
            },
            destroyCustomer() {
                axios({
                    method: 'delete',
                    url: 'http://202.191.56.249/eyetech/api/v1/customers/' + this.id_customer
                })
                    .then(response => {
                        console.log(response);
                        window.location = this.route_home;
                    })
                    .catch(error => {
                        console.log(error);
                    })
            },
            showModalDestroy () {
                this.$refs.modalDestroyRef.show()
            },
            hideModalDestroy () {
                this.$refs.modalDestroyRef.hide()
            }
        }
    }
</script>

<style scoped>

</style>
