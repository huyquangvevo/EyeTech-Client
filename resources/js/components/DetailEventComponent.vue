<template>
    <div class="card">
        <div class="card-body">
            <div class="table-overflow">
                <table id="dt-opt-1" class="table table-hover table-xl">
                    <thead>
                    <tr>
                        <th>Customer</th>
                        <th>Type</th>
                        <th>Window</th>
                        <th>Library</th>
                        <th>Camera</th>
                        <th>Time In</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody class="recent-event-body">
                    <tr v-for="event in events">
                        <td>
                            <div class="list-media">
                                <div class="list-item">
                                    <div class="media-img">
                                        <img v-bind:src="event.avatar" alt="">
                                    </div>
                                    <div class="info">
                                        <span class="title">{{ event.name }}</span>
                                        <span class="sub-title">{{ event.customer_id }}</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge badge-pill badge-gradient-success">
                                {{ event.type }}
                            </span>
                        </td>
                        <td>{{ event.camera }}</td>
                        <td>
                            <div class="list-item">
                                <div class="media-img">
                                    <img v-for="library in event.image_detection_url_array" v-bind:src="library" alt="">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="list-item">
                                <div class="media-img">
                                    <img v-for="camera in event.image_camera_url_array" v-bind:src="camera" alt="">
                                </div>
                            </div>
                        </td>
                        <td>{{ event.time_in }}</td>
                        <td class="text-center font-size-18">
                            <a v-bind:href="event.customer_edit_url" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                            <a href="#" class="text-gray"><i class="ti-bookmark"></i></a>
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
        name: "DetailEventComponent",
        props: {
            id_branch: '',
            header_route: '',
        },
        data() {
            return {
                events: [],
                timer: '',
                delayTime: 10000,
            }
        },
        created() {
            this.fetchEventFormat();
            this.timer = setInterval(this.fetchEventFormat, this.delayTime);
        },
        methods: {
            fetchEventFormat() {
                axios({
                    url: 'http://202.191.56.249/eyetech/api/v1/events-format',
                    method: 'post',
                    data: {
                        branch_id: this.id_branch,
                        route_header: this.header_route,
                    }
                })
                    .then(response => {
                        console.log(response);
                        this.events = response.data.data;
                    })
                    .catch(error => {
                        console.log(error);
                    });
            },
            cancelAutoUpdate() {
                clearInterval(this.timer);
            }
        },
        beforeDestroy() {
            this.cancelAutoUpdate();
        }
    }
</script>

<style scoped>

</style>
