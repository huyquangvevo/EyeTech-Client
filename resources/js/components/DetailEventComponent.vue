<template>
    <div class="card">
        <div class="card-body">
            <div class="table-overflow">
                <table id="dt-opt-1" class="table table-hover table-xl detail-events">
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
                            <span v-if="event.type === 'New'" class="badge badge-pill badge-gradient-success">
                                {{ event.type }}
                            </span>
                            <span v-else-if="event.type === 'Visted'" class="badge badge-pill badge-warning">
                                {{ event.type }}
                            </span>
                            <span v-else-if="event.type === 'Vip'" class="badge badge-pill badge-gradient-danger">
                                {{ event.type }}
                            </span>
                            <span v-else-if="event.type === 'Blacklist'" class="badge badge-pill badge-secondary">
                                {{ event.type }}
                            </span>
                            <span v-else-if="event.type === 'Staff'" class="badge badge-pill badge-light">
                                {{ event.type }}
                            </span>
                            <span v-else class="badge badge-pill badge-primary">
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
                            <a v-bind:href="event.customer_profile_url" class="text-gray m-r-15" data-toggle="tooltip" title="Profile">
                                <i class="ti-pencil"></i>
                            </a>
                            <a @click="showModalFeedback(event.event_id, event.branch_id, event.camera)" class="text-gray" data-toggle="tooltip" title="Feedback">
                                <i class="ti-bookmark"></i>
                            </a>
                        </td>
                        <b-modal v-model="modalFeedbackShow" hide-footer title="Are you absolutely sure?">
                            <div class="d-block text-center">
                                <h3>
                                    Detection of
                                    <span class="text-primary"> {{ event.name }} </span>
                                    has problem!
                                </h3>
                                <h3 class="text-danger">{{ modalFeedbackMessage }}</h3>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <b-btn class="mt-3" variant="outline-secondary" block @click="hideModalFeedback">Close</b-btn>
                                </div>
                                <div class="col-sm">
                                    <b-btn class="mt-3" variant="outline-success" block @click="createFeedback">Create Feedback</b-btn>
                                </div>
                            </div>
                        </b-modal>
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
                modalFeedbackShow: false,
                modalFeedbackMessage: '',
                event_id: '',
                branch_id: '',
                camera_name: '',
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
            },
            showModalFeedback: function(event_id, branch_id, camera_name) {
                this.modalFeedbackShow = true;
                this.modalFeedbackMessage = '';
                this.event_id = event_id;
                this.branch_id = branch_id;
                this.camera_name = camera_name;
            },
            hideModalFeedback() {
                this.modalFeedbackShow = false;
            },
            createFeedback() {
                axios({
                    url: 'http://202.191.56.249/eyetech/api/v1/feedbacks',
                    method: 'post',
                    data: {
                        branch_id: this.branch_id,
                        camera_name: this.camera_name,
                        event_id: this.event_id,
                        status: 'Created',
                    }
                })
                    .then(response => {
                        console.log(response);
                        this.modalFeedbackShow = false;
                    })
                    .catch(error => {
                        console.log(error);
                        if (error.response.status === 400) {
                            this.modalFeedbackMessage = 'This event already exist in feedback!'
                        }
                    })
            }
        },
        beforeDestroy() {
            this.cancelAutoUpdate();
        }
    }
</script>
<style scoped>

</style>
