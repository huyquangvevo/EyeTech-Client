<template>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-title">
                <span>
                    Khách hàng
                </span>
                <i class="mdi mdi-arrow-down" aria-hidden="true"></i>
            </div>
            <div class="col-sm-3 col-title">
                Sở thích
            </div>
            <div class="col-sm-2 col-title">
                <span>Kiểu</span>
                <i class="mdi mdi-arrow-down" aria-hidden="true"></i>
            </div>
            <div class="col-sm-2 col-title">
                Thời gian
            </div>
        </div>
    
        <div class="row-list row" v-for="i in 10">
            <div class="col-sm-4">
                <div class="col-info" style="width:100%;">
                    <div class="img-cus">
                        <img class="card-img-top-1"  src="/public/images/dtmh.jpg" alt="Card image cap" height="50pt" width="50pt">
                    </div>
                    <div class="detail-col">

                        <div class="info-detail">Dam Thi Minh Hang, 21</div>
                        <div class="location-cus">Bách Khoa, Hà Nội, Việt Nam</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="col-info fav-detail">
                    Socola đá xay, Mocha, Caramen, Cappucinno
                </div>
            </div>
            <div class="col-sm-2">
                <div class="type-cus">
                    V.I.P
                </div>
            </div>
            <div class="col-sm-2">
                <div class="col-info time-in">8:00 p.m</div>
                
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
    name:'ListComponent',
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
    color: darkorange;
    font-size: 13pt;
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
    font-weight: bolder;
    font-size: 14pt;
    color:goldenrod;
    padding: 10% 0%;
}
.time-in {
    font-weight: bolder;
    font-size: 12pt;
    padding: 10% 0%;
}

</style>

