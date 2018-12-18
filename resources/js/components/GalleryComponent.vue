<template>
    <div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                                Number:
                                <span class="font-weight-bold">{{ quantily }}</span>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-gradient-info btn-upload">Upload</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div v-for="image in galleries" class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <div class="card gallery-image">
                    <img v-bind:src="image" class="card-img-top">
                    <div class="card-body">
                        <a @click="removeImage(image)" class="remove-image" data-toggle="tooltip" data-placement="bottom" title="Delete">
                            <i class="ti-trash"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });

    export default {
        name: "GalleryComponent",
        props: {
            id_customer: '',
        },
        data() {
            return {
                galleries: [],
                quantily: '',
            }
        },
        created() {
            this.fetchImageUrlArray();
        },
        methods: {
            fetchImageUrlArray() {
                axios({
                    url: 'http://202.191.56.249/eyetech/api/v1/galleries/' + this.id_customer,
                    method: 'get'
                })
                    .then(response => {
                        console.log(response);
                        this.galleries = response.data.galleries;
                        this.quantily = response.data.quantily;
                    })
                    .catch(error => {
                        console.log(error);
                    })
            },
            removeImage: function (imageUrl) {
                axios({
                    url: 'http://202.191.56.249/eyetech/api/v1/galleries/image/destroy',
                    method: 'delete',
                    data: {
                        customer_id: this.id_customer,
                        image_url: imageUrl,
                    }
                })
                    .then(response => {
                        console.log(response);
                        this.fetchImageUrlArray();
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
