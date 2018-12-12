<template>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Recent Customer</h4>
            <div class="card-toolbar">
                <ul>
                    <li>
                        <a class="text-gray" href="#">
                            <h5>Show Detail</h5>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="table-overflow">
            <table class="table table-lg">
                <thead>
                <tr>
                    <td class="text-dark text-semibold" >Customer</td>
                    <td class="text-dark text-semibold" >Time in</td>
                    <td class="text-dark text-semibold" >Camera</td>
                    <td class="text-dark text-semibold" >Type</td>
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
                        <span class="status success"></span>
                        <span class="text-success text-semibold m-l-5">{{ event.type }}</span>
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
        props: ['id'],
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
                        branch_id: this.id,
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
        },
        beforeDestroy() {
            this.cancelAutoUpdate();
        }
    }
</script>

<style scoped>

</style>
