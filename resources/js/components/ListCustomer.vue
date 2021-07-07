<template>
    <div class="container" id="list_cus" >
        <div style="width:100%;" id="form-filter">
            <table style="width:100%;">
                <tr class="tr-filter">
                    <td>Tên khách hàng</td>
                    <td><input type="text" v-model="name_filter" name="name_filter" class="input-filter form-control" ></td>
                </tr>
                <tr class="tr-filter">
                    <td>Loại khách hàng</td>
                    <td>
                        <label class="type-filter"><input type="radio"  v-model="type_filter" class="radio-style" name="type_filter" value="All">Tất cả</label>
                        <label class="type-filter"><input type="radio"  v-model="type_filter" class="radio-style" name="type_filter" value="VIP">VIP</label>
                        <label class="type-filter"><input type="radio"  v-model="type_filter" class="radio-style" name="type_filter" value="New">Mới</label>
                        <label class="type-filter"><input type="radio"  v-model="type_filter" class="radio-style" name="type_filter" value="Default">Thường</label>
                    </td>
                </tr>

                <tr class="tr-filter">
                    <td>From</td>
                    <td><input type="datetime-local" v-model="from_time" pattern="([01]?[0-9]|2[0-3]):[0-5][0-9]" name="from_time" class="time-filter" ></td>
                </tr>

                 <tr class="tr-filter">
                    <td>To</td>
                    <input type="datetime-local" v-model="to_time" name="to_time" class="time-filter">
                </tr>
                
                 <tr class="tr-filter">
                    <td>Giới Tính</td>
                    <td>
                        <label class="type-filter"><input type="radio"  v-model="sex_filter" class="radio-style" name="type_filter" value="All">Nam</label>
                        <label class="type-filter"><input type="radio"  v-model="sex_filter" class="radio-style" name="type_filter" value="VIP">Nữ</label>
                    </td>
                </tr>

                <tr class="tr-filter">
                    <td><input type="button" value="Tìm" class="btn btn-primary" id="apply-button" v-on:click="filter"></td>
                </tr>

                
            </table>

        </div>
        <!-- <div class="row" id="form-filter" style="display:hidden;">
                    <div class="col-sm-4 col-title">
                            <input type="text" v-model="name_filter" name="name_filter" class="input-filter form-control" >
                    </div>
                    <div class="col-sm-2 col-title">
                        <select class="custom-select custom-select-sm"  v-model="type_filter" name="type_filter">
                            <option value="1">Tất cả</option>
                            <option value="New">Mới</option>
                            <option value="VIP">VIP</option>
                            <option value="Default">Thường</option>
                        </select>
                    </div>
                    <div class="col-sm-2 col-title">

                    </div>
                    <div class="col-sm-3 " style="margin:0px;">
                            <input type="datetime-local" v-model="from_time" pattern="([01]?[0-9]|2[0-3]):[0-5][0-9]" name="from_time" class="time-filter" >
                            <input type="datetime-local" v-model="to_time" name="to_time" class="time-filter" >
                    </div>

                    <div class="col-sm-1 col-title">
                            <input type="button" value="Tìm" class="btn btn-primary btn-sm" v-on:click="filter">
                    </div>
            </div> -->
        <div class="row" id="title-table" >
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
        <!-- <form @submit="filter" action="#" method="get"> -->
            
        <!-- </form> -->

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
                     <i v-if="event.type == 'VIP'" class="mdi mdi-star" style="color:yellow;" aria-hidden="true"></i>
                     <i v-if="event.type == 'New'" class="mdi mdi-new-box" aria-hidden="true"></i>
                     <i v-if="event.type == 'Default'" class="mdi mdi-apple" aria-hidden="true"></i>
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
                    <li class="page-item active"><a class="page-link" v-on:click="fetchQuickEventFormat(1)">1</a></li>
                    <li class="page-item"><a class="page-link" href="#list_cus" v-on:click="fetchQuickEventFormat(2)">2</a></li>
                    <li class="page-item"><a class="page-link" href="#list_cus" v-on:click="fetchQuickEventFormat(3)">3</a></li>
                    <li class="page-item"><a class="page-link" href="#list_cus" v-on:click="fetchQuickEventFormat(4)">4</a></li>
                    <li class="page-item"><a class="page-link" href="#list_cus" v-on:click="fetchQuickEventFormat(5)">5</a></li>
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
                quantity: 20,
                page_num:0,
                type_filter:'',
                name_filter:'',
                from_time:'',
                to_time:'',
                isUpdated:false,
            }
        },
        created() {
                this.fetchQuickEventFormat(1);
        },
        methods: {
            fetchQuickEventFormat(pn) {
                // alert($("#list_cus").html());
                this.page_num = (pn-1)*this.quantity;
                axios({
                    url: 'http://eyeserver.com/api/v1/quick-events-format',
                    method: 'post',
                    data: {
                        branch_id: this.id_branch,
                        route_header: this.header_route,
                        number_field: this.quantity,
                        page_num: this.page_num,
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
                this.setFormatTime();
                // alert(this.type_filter+"\n"+this.name_filter+this.from_time+"\n"+this.to_time);
                axios({
                    url: 'http://eyeserver.com/api/v1/filter-events',
                    method: 'post',
                    data: {
                        branch_id: this.id_branch,
                        route_header: this.header_route,
                        number_field: 500,
                        type_filter : this.type_filter,
                        name_filter : this.name_filter,
                        from_time : this.from_time,
                        to_time : this.to_time,
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
            setFormatTime(){
                var s_time = this.from_time;
                if(s_time!="")
                    this.from_time = s_time.substring(0,10)+" "+s_time.substring(11,16)+":00";
                s_time = this.to_time;
                if(s_time!="")
                    this.to_time = s_time.substring(0,10)+" "+s_time.substring(11,16)+":00";
            }
        },
        beforeDestroy() {
            this.cancelAutoUpdate();
        }
    }
</script>

<style scoped>

#apply-button {
    padding: 4px 20px;
    font-size: 14px;
    border-radius: 2px;
}

.tr-filter{
    height: 40px;
    color: #a9a9a9;
}

tr > td {
    font-size: 15px;
}

.radio-style {
    margin-right: 4px;
}

.row-pagination {
    margin-top: 10px;
    padding:0% 35%;
}
.row-list {
    height: 50pt;
    /* border-top: 1px solid rgba(255,255,255,0.3); */
    border-top: 1px solid #f5f5f5;
}
.container {
    /* background-color: none; */
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
    /* color: #fff; */
    color:#333333;
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
    /* color:#FFD700; */
    color: #333333;
    font-size: 20pt;
    padding: 8px 6px;
    height: 35pt;
}

.type-filter{
    font-size: 14px;
    margin-right: 40px;
    /* padding: 8px 18px; */
}

.time-in {
    font-size: 11pt;
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
    padding: 6pt 0pt;
    background: rgba(255,255,255,0.3);
}
</style>
