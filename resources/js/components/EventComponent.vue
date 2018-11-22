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
                <!--<tr>-->
                <!--<td>-->
                <!--<span class="label label-primary">Paid</span>-->
                <!--<span class="label label-success">Active</span>-->
                <!--</td>-->
                <!--<td>John Doe</td>-->
                <!--<td align="center">3435362</td>-->
                <!--<td class="color-blue-grey" nowrap align="center"><span class="semibold">Today</span> 8:30</td>-->
                <!--</tr>-->
                <tr v-for="event in events">
                    <td>{{ event.name}}</td>
                    <td>{{ event.type}}</td>
                    <td>{{ event.time_in}}</td>
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
            }
        },
        mounted() {
            axios.post('http://202.191.56.249/eyetech/api/v1/event-format', {
                store_id: 1
            })
                .then(response => (this.events = response.data.data))
                .catch(function (error) {
                    console.log(error)
                });
        },
        computed: {

        }
    }
</script>

<style scoped>

</style>
