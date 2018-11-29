<template>
    <section class="box-typical box-typical-dashboard panel panel-default scrollable">
        <header class="box-typical-header panel-heading">
            <h3 class="panel-title">Recent events</h3>
        </header>
        <div class="box-typical-body panel-body">
            <table class="tbl-typical">
                <tr>
                    <th><div>Name</div></th>
                    <th><div>Type</div></th>
                    <th><div>Time In</div></th>
                    <th align="center"><div>Image Camera</div></th>
                    <th align="center"><div>Image Detection</div></th>
                    <th align="center"><div>Detail</div></th>
                </tr>
                <tr v-for="event in events">
                    <td>{{ event.name}}</td>
                    <td>{{ event.type}}</td>
                    <td>{{ event.time_in}}</td>
                    <!--<td>-->
                        <!--<img v-for="image in images" v-bind:src="image.url"/>-->
                    <!--</td>-->
                    <td>{{ event.image_camera_url_array}}</td>
                    <td>{{ event.image_detection_url_array}}</td>
                    <td>Action</td>
                </tr>
            </table>
        </div><!--.box-typical-body-->
    </section><!--.box-typical-dashboard-->
</template>

<script>
    export default {
        name: "EventComponent",
        data() {
            return {
                events: null,
                images: [
                    {url: 'public/img/photo-220-1.jpg', alt: ''},
                    {url: 'public/img/photo-220-1.jpg', alt: ''},
                ],
            }
        },
        mounted() {
            axios.post('http://localhost/eyetech/api/v1/event-format', {
                camera_id: 4
            })
                .then(response => (this.events = response.data.data))
                .catch(function (error) {
                    console.log(error)
                });
        },
    }
</script>

<style scoped>

</style>
