<template>
    <li class="notifications dropdown dropdown-animated scale-left">
        <span class="counter">2</span>
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="mdi mdi-bell-ring-outline"></i>
        </a>
        <ul class="dropdown-menu dropdown-lg p-v-0">
            <li class="p-v-15 p-h-20 border bottom text-dark">
                <h5 class="m-b-0">
                    <i class="mdi mdi-bell-ring-outline p-r-10"></i>
                    <span>Notifications</span>
                </h5>
            </li>
            <li>
                <ul class="list-media overflow-y-auto relative scrollable" style="max-height: 300px">
                    <li class="list-item border bottom">
                        <a href="javascript:void(0);" class="media-hover p-15">
                            <div class="media-img">
                                <div class="icon-avatar bg-primary">
                                    <i class="ti-settings"></i>
                                </div>
                            </div>
                            <div class="info">
                                <span class="title">
                                    System shutdown
                                </span>
                                <span class="sub-title">8 min ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="list-item border bottom">
                        <a href="javascript:void(0);" class="media-hover p-15">
                            <div class="media-img">
                                <div class="icon-avatar bg-success">
                                    <i class="ti-user"></i>
                                </div>
                            </div>
                            <div class="info">
                                <span class="title">
                                    New User Registered
                                </span>
                                <span class="sub-title">12 min ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="list-item border bottom">
                        <a href="javascript:void(0);" class="media-hover p-15">
                            <div class="media-img">
                                <div class="icon-avatar bg-warning">
                                    <i class="ti-file"></i>
                                </div>
                            </div>
                            <div class="info">
                                <span class="title">
                                    New Attacthemnet
                                </span>
                                <span class="sub-title">12 min ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="list-item border bottom">
                        <a href="javascript:void(0);" class="media-hover p-15">
                            <div class="media-img">
                                <div class="icon-avatar bg-info">
                                    <i class="ti-shopping-cart"></i>
                                </div>
                            </div>
                            <div class="info">
                                <span class="title">
                                    New Order Received
                                </span>
                                <span class="sub-title">12 min ago</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="p-v-15 p-h-20 text-center">
                <span>
                    <a href="#" class="text-gray">Check all notifications <i class="ei-right-chevron p-l-5 font-size-10"></i></a>
                </span>
            </li>
        </ul>
    </li>
</template>

<script>
    export default {
        name: "NavRightNotiComponent"
    }
</script>

<style scoped>

</style>
