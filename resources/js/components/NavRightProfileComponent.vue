<template>
    <!--<li class="user-profile dropdown dropdown-animated scale-left">-->
        <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">-->
            <!--<img class="profile-img img-fluid" src="#" alt="">-->
        <!--</a>-->
        <!--<ul class="dropdown-menu dropdown-md p-v-0">-->
            <!--<li>-->
                <!--<ul class="list-media">-->
                    <!--<li class="list-item p-15">-->
                        <!--<div class="media-img">-->
                            <!--<img src="#" alt="">-->
                        <!--</div>-->
                        <!--<div class="info">-->
                            <!--<span class="title text-semibold">Marshall Nichols</span>-->
                            <!--<span class="sub-title">UI/UX Desinger</span>-->
                        <!--</div>-->
                    <!--</li>-->
                <!--</ul>-->
            <!--</li>-->
            <!--<li role="separator" class="divider"></li>-->
            <!--<li>-->
                <!--<a href="#">-->
                    <!--<i class="ti-settings p-r-10"></i>-->
                    <!--<span>Setting</span>-->
                <!--</a>-->
            <!--</li>-->
            <!--<li>-->
                <!--<a href="#">-->
                    <!--<i class="ti-user p-r-10"></i>-->
                    <!--<span>Profile</span>-->
                <!--</a>-->
            <!--</li>-->
            <!--<li>-->
                <!--<a href="#">-->
                    <!--<i class="ti-power-off p-r-10"></i>-->
                    <!--<span>Logout</span>-->
                <!--</a>-->
            <!--</li>-->
        <!--</ul>-->
    <!--</li>-->
    <li class="user-profile">
        <!--<a href="#">-->
            <!--&lt;!&ndash;<img class="profile-img img-fluid" src="{{ url('public/css/dashboard/avatars/thumb-13.jpg') }}" alt="">&ndash;&gt;-->
        <!--</a>-->
        <div class="nav-right-profile">
            <b-dropdown variant="link" size="lg" no-caret>
                <template slot="button-content">
                    <i class="far fa-user"></i>
                </template>
                <b-dropdown-item href="#">Profile</b-dropdown-item>
                <b-dropdown-item href="#">Setting</b-dropdown-item>
                <b-dropdown-divider></b-dropdown-divider>
                <b-dropdown-item v-bind:href="route_logout">Logout</b-dropdown-item>
            </b-dropdown>
        </div>
    </li>
</template>

<script>
    export default {
        name: "NavRightProfileComponent",
        props: {
            route_logout: '',
        }
    }
</script>

<style scoped>

</style>
