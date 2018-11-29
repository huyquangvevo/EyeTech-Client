<template>
    <div class="form-group row">
        <label class="col-md-4 col-form-label text-md-right">Store</label>
        <div class="col-md-6">
            <select id="store" v-model="storeSelected" class="form-control">
                <option v-for="store in storeArr" v-bind:value="store.id">
                    {{ store.id }}
                </option>
            </select>
            <span>Selected: {{ storeSelected }}</span>
        </div>

        <label class="col-md-4 col-form-label text-md-right">Branch</label>
        <div class="col-md-6">
            <select id="branch" v-model="branchSelected" class="form-control">
                <option v-for="branch in branchArr" v-bind:value="branch.id">
                    {{ branch.id }}
                </option>
            </select>
            <span>Selected: {{ branchSelected }}</span>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                storeSelected: '',
                branchSelected: '',
                storeArr: null,
                branchArr: null,
            }
        },
        mounted() {
            axios.get('http://localhost/eyetech/api/v1/list-stores-id', {
                headers: {
                    'Access-Control-Allow-Origin' : '*',
                    'Access-Control-Allow-Methods' : 'GET, POST, PATCH, PUT, DELETE, OPTIONS',
                    'Access-Control-Allow-Headers' : 'Content-Type, Accept, Authorization, X-Requested-With, Application',
                }
            })
                .then(response => (this.storeArr = response.data.stores_id))
                .catch(function (error) {
                    console.log(error);
                });
        },
        beforeUpdate() {
            axios({
                method: 'post',
                url: 'http://localhost/eyetech/api/v1/list-branches-id',
                headers: {
                    'Access-Control-Allow-Origin' : '*',
                    'Access-Control-Allow-Methods' : 'GET, POST, PATCH, PUT, DELETE, OPTIONS',
                    'Access-Control-Allow-Headers' : 'Content-Type, Accept, Authorization, X-Requested-With, Application',
                    'Content-Type': 'application/json',
                },
                data: {
                    store_id: this.storeSelected,
                }
            })
                .then(response => (this.branchArr = response.data.data))
                .catch(function (error) {
                    console.log(error);
                });
        },
        updated() {


        }
    }
</script>

<style scoped>

</style>
