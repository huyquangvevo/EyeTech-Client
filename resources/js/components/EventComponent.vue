<template>
    <section id="c1-test" class="box-typical box-typical-dashboard panel panel-default scrollable">
        <header class="box-typical-header panel-heading">
            <h3 class="panel-title">Recent events</h3>
        </header>
        <div class="recent-eventTable box-typical-body panel-body">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Type</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Camera</th>
                    <th>Library</th>
                    <th width="150">Time In</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="event in events">
                    <td align="center">{{ event.type }}</td>
                    <td>{{ event.name }}</td>
                    <td>{{ event.favorites}}</td>
                    <td align="center">
                        <img class="recent-eventImage" v-for="imageCam in event.image_camera_url_array" v-bind:src="imageCam">
                    </td>
                    <td align="center">
                        <img class="recent-eventImage" v-for="imageDet in event.image_detection_url_array" v-bind:src="imageDet">
                    </td>
                    <td align="center">{{ event.time_in }}</td>
                    <td>
                        <a v-bind:href="'http://localhost/eyetech-client/customers/' + event.customer_id + '/edit'">View</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
</template>

<script>
    export default {
        name: "EventComponent",
        data() {
            return {
                events: null,
                customerUrl: '',
                timer: '',
                delayTime: 5000, //5s
            }
        },
        created() {
            this.fetchEventsList();
            this.fetchCustomerUrl();
            this.timer = setInterval(this.fetchEventsList, this.delayTime);
        },
        methods: {
            fetchEventsList() {
                axios.post('http://202.191.56.249/eyetech/api/v1/events-format', {
                    branch_id: 4
                })
                    .then(response => {
                        this.events = response.data.data;
                        console.log(response);
                    })
                    .catch(function (error) {
                        console.log(error)
                    });
            },
            cancelAutoUpdate() {
                clearInterval(this.timer);
            },
            fetchCustomerUrl() {
                this.customerUrl = 'http://localhost/eyetech-client/customers/';
            },
        },
        beforeDestroy() {
            this.cancelAutoUpdate();
        }
    }
</script>

<style scoped>
</style>
