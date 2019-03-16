<template>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Recent Customer</h4>
            <div class="card-toolbar">
                <ul>
                    <li>
                        <a class="text-gray" v-bind:href="events_route">
                            <h5>Show Detail</h5>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="table-overflow">
            <table class="table table-lg quick-events">
                <thead>
                <tr>
                    <td class="text-dark text-semibold" >Customer</td>
                    <td class="text-dark text-semibold" >Time in</td>
                    <td class="text-dark text-semibold" >Camera</td>
                    <td class="text-dark text-semibold" >Type</td>
                </tr>
                </thead>
                <tbody class="recent-event-body">
                <tr v-for="event in events" v-on:click="redirectCustomerProfile(event.customer_profile_url)">
                    <td>
                        <div class="list-media">
                            <div class="list-item">
                                <div class="media-img">
                                    <img v-bind:src="event.avatar" alt="">
                                </div>
                                <div class="info">
                                    <span class="title p-t-10 text-semibold">{{ event.name }}</span>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>{{ event.time_in }}</td>
                    <td>
                        <div class="">
                            <div class="media-img">
                                <img v-bind:src="event.image_camera_url_array" alt="">
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
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        name: "QuickEventComponent",
        props: {
            id_branch: '',
            events_route: '',
            header_route: ''
        },
        data() {
            return {
                events: [],
                timer: '',
                delayTime: 5000,
                quantity: 5,
            }
        },
        created() {
            this.fetchQuickEventFormat();
            this.timer = setInterval(this.fetchQuickEventFormat, this.delayTime);
        },
        methods: {
            fetchQuickEventFormat() {
                axios({
                    url: 'http://202.191.56.249/eyetech/api/v1/quick-events-format',
                    method: 'post',
                    data: {
                        branch_id: this.id_branch,
                        route_header: this.header_route,
                        number_field: this.quantity,
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
            redirectCustomerProfile: function (route) {
                window.location = route;
            }
        },
        beforeDestroy() {
            this.cancelAutoUpdate();
        }
    }
</script>

<style scoped>
</style>