<template>
    <div class="container">
        <div class="row" id="title-table">
            <div class="col-sm-4 col-title">
                <span>
                    Khách hàng
                </span>
                <i class="mdi mdi-arrow-down" aria-hidden="true"></i>
            </div>
            <div class="col-sm-2 col-title">
                <span>Kiểu</span>
                <i class="mdi mdi-arrow-down" aria-hidden="true"></i>
            </div>
            <div class="col-sm-2 col-title">
                <span>Camera</span>
            </div>
            <div class="col-sm-3 col-title">
                <span> Thời gian</span>
                
            </div>
            <div class="col-sm-1 col-title">
                <i class="mdi mdi-filter-variant" id="btn-filter" aria-hidden="true" style="float:right;"></i>
            </div>

        </div>
        <form v-on:submit="filter" action="events" method="POST">
            <div class="row" id="form-filter" style="display:hidden;">
                    <div class="col-sm-4 col-title">
                            <input type="text" v-model="name_filter" class="input-filter form-control">
                    </div>
                    <div class="col-sm-2 col-title">
                        <select class="custom-select custom-select-sm" v-model="type_filter">
                            <option selected>Mới</option>
                            <option value="2">VIP</option>
                            <option value="3">Thường</option>
                        </select>
                    </div>
                    <div class="col-sm-2 col-title">

                    </div>
                    <div class="col-sm-3 " style="margin:0px;">
                            <input type="datetime-local" name="from-time" class="time-filter">
                            <input type="datetime-local" name="to-time" class="time-filter">
                    </div>

                    <div class="col-sm-1 col-title">
                            <input type="submit" value="Tìm" class="btn btn-primary btn-sm">
                    </div>
            </div>
        </form>

        <div class="row-list row" v-for="event in events">
            <div class="col-sm-4">
                <div class="col-info" style="width:100%;">
                    <div class="img-cus">
                        <img class="card-img-top-1"  v-bind:src="event.avatar" alt="Card image cap" height="50pt" width="50pt">
                    </div>
                    <div class="detail-col">

                        <div class="info-detail">{{event.name}}</div>
                        <div class="location-cus">21 tuổi</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="type-cus">
                     <i class="mdi mdi-star" aria-hidden="true"></i>
                </div>
            </div>
             <div class="col-sm-2">
                <!-- <div class="col-info fav-detail">
                    Socola đá xay, Mocha, Caramen, Cappucinno
                </div> -->
                <div class="col-info">
                    <div class="img-cus">
                        <img class="card-img-top-1"  v-bind:src="event.image_camera_url_array" alt="Card image cap" height="50pt" width="50pt">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="col-info time-in">{{event.time_in}}</div>
                
            </div>
        </div>
        <div class="row row-pagination">
            <nav>
                <ul class="pagination pg-blue">
                    <li class="page-item">
                    <a class="page-link" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                    </li>
                    <li class="page-item active"><a class="page-link">1</a></li>
                    <li class="page-item"><a class="page-link">2</a></li>
                    <li class="page-item"><a class="page-link">3</a></li>
                    <li class="page-item"><a class="page-link">4</a></li>
                    <li class="page-item"><a class="page-link">5</a></li>
                    <li class="page-item">
                    <a class="page-link" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
</template>


<script>
    export default {
        name: "ListComponent",
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
            },
            filter(){
                alert("Huy");
            },
        },
        beforeDestroy() {
            this.cancelAutoUpdate();
        }
    }
</script>

<style scoped>

.row-pagination {
    margin-top: 10px;
    padding:0% 35%;
}

.row-list {
    height: 50pt;
    border-top: 1px solid gainsboro;
}

.container {
    background-color: white;
}

.card-img-top-1 {
    border-radius: 50%;
}

.card {
    border: none;
}

.col-title{
    color: #ff4411;
    font-size: 14pt;
    padding-top: 8pt;
    padding-bottom: 10px;
    height: 35pt;
}

.col-info {
    height: 100%;
    padding: 2% 0%;
}

.detail-col {
    float: left;
    padding: 1% 0%;
    font-size: 10pt;
    width: 80%;
    height: 100%;
}

.img-cus {
    float: left;
    width: 20%;
    height: 100%;
}

.info-detail{
    font-weight: bolder;
    font-size: 10pt;

}

.fav-detail {
    font-weight: bolder;
    font-size: 10pt;
    padding: 5% 0%;
}

.type-cus {
    color:#FFD700;
    font-size: 25pt;
    padding: 8px 6px;
    height: 35pt;
}
.time-in {
    font-weight: bolder;
    font-size: 12pt;
    padding: 10% 0%;
}

/* Input filter */
.input-filter {
    height: 20pt;
    width: 120pt;
}

.custom-select {
    width: 60pt;
}

.time-filter {
    border: 1px solid #f2f2f2;
    border-radius: 7px;
    width: 165pt;
    margin: 3pt 0px;
}

#title-table {
    
}

</style>

