<template>
    <div>
        <div class="row">
            <div class="col-md-12">
                <button @click="upload" class="btn btn-gradient-info btn-upload">Upload</button>
                <span class="text-success">{{ message_success }}</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <vue-dropzone
                    ref="uploadDropzone"
                    id="upload"
                    :options="config"
                    acceptedFileTypes='.jpg,.jpeg,.png'
                    @vdropzone-sending="sendingEvent"
                    @vdropzone-complete="afterComplete"
                >
                </vue-dropzone>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "GalleryUploadComponent",
        props: {
            id_customer: '',
        },
        data() {
            return {
                message_success: '',
                config: {
                    url: 'http://202.191.56.249/eyetech/api/v1/galleries/images/upload',
                    // url: 'http://localhost/eyetech/api/v1/galleries/images/upload',
                    // url: 'http://localhost/eyetech/api/v1/galleries/image/test',
                    autoProcessQueue: false,
                    addRemoveLinks: true,
                    maxFilesize: 10000000000000000000, // MB
                    maxFiles: 15,
                    thumbnailWidth: 200, // px
                    thumbnailHeight: 200,
                }
            }
        },
        methods: {
            afterComplete(file) {
                console.log(file);
                this.message_success = 'Upload images successfully!'
            },
            upload() {
                this.$refs.uploadDropzone.processQueue();
            },
            sendingEvent: function (file, xhr, formData) {
                formData.append('customer_id', this.id_customer);
                // for (var pair of formData.entries()) {
                //     console.log(pair[0]+ ', ' + pair[1]);
                // }
            }
        }
    }
</script>

<style scoped>

</style>
