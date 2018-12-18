<template>
    <div class="card">
        <div class="card-header border bottom">
            <h4 class="card-title">Feedbacks</h4>
        </div>
        <div class="card-body">
            <table class="table font-size-20">
                <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Branch</th>
                    <th scope="col">Camera</th>
                    <th scope="col">Event</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody v-for="(feedback, index) in feedbacks">
                <tr>
                    <th scope="row">{{ index + 1 }}</th>
                    <td>{{ feedback.branch_name }}</td>
                    <td>{{ feedback.camera_name }}</td>
                    <td>{{ feedback.event_id}}</td>
                    <td>{{ feedback.status }}</td>
                    <td class="feedback-delete">
                        <a @click="removeFeedback(feedback.id)" class="text-gray">
                            <i class="ti-trash"></i>
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        name: "FeedbackComponent",
        props: {
            id_branch: '',
        },
        data() {
            return {
                feedbacks: '',
            }
        },
        created() {
            this.fetchFeedbacks();
        },
        methods: {
            fetchFeedbacks() {
                axios({
                    url: 'http://202.191.56.249/eyetech/api/v1/feedbacks/format',
                    method: 'post',
                    data: {
                        branch_id: this.id_branch,
                    }
                })
                    .then(response => {
                        console.log(response);
                        this.feedbacks = response.data.data;
                    })
                    .catch(error => {
                        console.log(error);
                    })
            },
            removeFeedback: function(id) {
                axios({
                    method: 'delete',
                    url: 'http://202.191.56.249/eyetech/api/v1/feedbacks/' + id,
                })
                    .then(response => {
                        console.log(response);
                        this.fetchFeedbacks();
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
