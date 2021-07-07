<template>
        <div class="card"><!-- Face 2 -->
            <div class="card-face face-2"><!-- Back trigger -->
                <button class="card-face__back-button" data-card-back="data-card-back"><img src="http://imgh.us/arrow_1.svg" width="19" height="19" draggable="false"/></button><img class="card-face__stats" src="http://imgh.us/Likes.png" width="100" height="100" draggable="false"/><img class="card-face__stats" src="http://imgh.us/Followers.png" width="100" height="100" draggable="false"/><img class="card-face__stats" src="http://imgh.us/Views.png" width="100" height="100" draggable="false"/><!-- Settings Button --><img class="card-face__settings-button" src="http://imgh.us/cog.svg" width="17" height="17" draggable="false"/>
            </div><!-- Face 1 -->
            <div class="card-face face-1"><!-- Menu trigger -->
                <button class="card-face__menu-button" data-card-menu="data-card-menu"><img src="http://imgh.us/dots_1.svg" width="5" height="23" draggable="false"/></button><!-- Avatar -->
                <div class="card-face__avatar"><!-- Bullet notification --><span class="card-face__bullet">21</span><!-- User avatar --><img src="https://s3.amazonaws.com/uifaces/faces/twitter/csswizardry/128.jpg" width="110" height="110" draggable="false"/></div><!-- Name -->
                <h2 class="card-face__name">Nguyễn Quang Huy</h2><!-- Title --><span class="card-face__title">Bách Khoa, Hà Nội, Việt Nam</span><!-- Cart Footer -->
                <div class="card-face-footer">
                    <div><i class="mdi mdi-new-box card-face__social" aria-hidden="true" style="font-size:24pt"></i></div>
                    <span class="card-face__social">8.00pm</span>                                 
                </div>
            </div>
        </div>
</template>

<script>
export default {
    name:'EventInComponent',
    props:{
      id_branch:'',
      events_route:'',
      header_route:'' 
    },
    data(){
      return {
        events:[],
        timer:'',
        delayTime:5000,
        quantity:5,
      }
    }, 
    create(){
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
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 300;
  src: local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmSU5fBBc9.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu4mxP.ttf) format('truetype');
}
body {
  height: 100vh;
  background-color: #f44336;
  transition: background-color 300ms;
  font-family: 'Roboto', sans-serif;
}
@media screen and (min-width: 30em) {
  body {
    display: flex;
    align-items: center;
    justify-content: center;
  }
}
body.show-menu {
  background-color: #00ACC1;
}
.card {
  display: inline-block;
  /* background-color: #FFF; */
  background: linear-gradient(to right bottom, #9e66c6 , #6027e1);
  position: relative;
  overflow: hidden;
  width: 100%;
  height: 100%;
  min-height: 405px;
  margin: 10pt;
  
  transition: all 300ms;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  box-shadow: 0px 5px 43px rgba(0, 0, 0, 0.18);
  -webkit-animation-timing-function: cubic-bezier(0.23, 1, 0.32, 1);
          animation-timing-function: cubic-bezier(0.23, 1, 0.32, 1);
}
@media screen and (min-width: 30em) {
  .card {
    width: 280px;
    height: 405px;
    border-radius: 3px;
  }
  .card:hover {
    cursor: pointer;
  }
}
.card-face {
  width: 100%;
  height: 100%;
  position: absolute;
  border-radius: 3px;
  display: flex;
  align-items: center;
  justify-content: flex-start;
  transition: all 400ms cubic-bezier(0.215, 0.61, 0.355, 1);
  flex-direction: column;
}
.card-face__bullet {
  background-color: #f44336;
  color: #FFF;
  display: block;
  padding: 4px 0;
  border-radius: 50%;
  width: 23px;
  height: 23px;
  box-sizing: border-box;
  line-height: 1.2;
  text-align: center;
  font-size: 12px;
  position: absolute;
  top: 10px;
  right: 0;
  box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.27);
  -webkit-animation: bullet 500ms;
          animation: bullet 500ms;
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
  -webkit-animation-delay: 1.5s;
          animation-delay: 1.5s;
  -webkit-animation-timing-function: cubic-bezier(0.23, 1, 0.32, 1);
          animation-timing-function: cubic-bezier(0.23, 1, 0.32, 1);
  font-weight: bold;
}
.card-face.face-1 {
  -webkit-transform: translateX(0);
          transform: translateX(0);
}
.show-menu .card-face.face-1 {
  -webkit-transform: translateX(-100%);
          transform: translateX(-100%);
}
.card-face.face-2 {
  justify-content: center;
  -webkit-transform: translateX(100%);
          transform: translateX(100%);
}
.show-menu .card-face.face-2 {
  -webkit-transform: translateX(0);
          transform: translateX(0);
}
.card-face__menu-button {
  position: absolute;
  top: 10px;
  right: 5px;
  background: transparent;
  border: none;
  outline: none;
  padding: 5px 15px;
  -webkit-transform: translateX(150%);
          transform: translateX(150%);
  -webkit-animation: menu 2s;
          animation: menu 2s;
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
  -webkit-animation-timing-function: cubic-bezier(0.23, 1, 0.32, 1);
          animation-timing-function: cubic-bezier(0.23, 1, 0.32, 1);
}
.card-face__menu-button img {
  pointer-events: none;
}
.card-face__back-button {
  position: absolute;
  top: 10px;
  left: 0px;
  background: transparent;
  border: none;
  outline: none;
  padding: 5px 15px;
}
.card-face__back-button img {
  pointer-events: none;
}
.card-face__settings-button {
  position: absolute;
  bottom: 0px;
  right: 0px;
  background: transparent;
  border: none;
  outline: none;
  padding: 10px;
}
.card-face__avatar {
  display: block;
  width: 110px;
  height: 110px;
  position: relative;
  margin-top: 40px;
  margin-bottom: 40px;
  -webkit-transform: scale(1.2, 1.2);
          transform: scale(1.2, 1.2);
  opacity: 0;
  -webkit-animation: avatar 1.5s;
          animation: avatar 1.5s;
  -webkit-animation-delay: 200ms;
          animation-delay: 200ms;
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
  -webkit-animation-timing-function: cubic-bezier(0.23, 1, 0.32, 1);
          animation-timing-function: cubic-bezier(0.23, 1, 0.32, 1);
}
.card-face__avatar img {
  border-radius: 50%;
}
.card-face__name {
  font-size: 24px;
  font-weight: 400;
  margin-top: 0;
  margin-bottom: 0;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  box-sizing: border-box;
  padding: 0 20px;
  text-align: center;
  width: 100%;
  /* color: #263238; */
  color:white;
  -webkit-animation: fadedown 1s;
          animation: fadedown 1s;
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
  -webkit-animation-timing-function: cubic-bezier(0.23, 1, 0.32, 1);
          animation-timing-function: cubic-bezier(0.23, 1, 0.32, 1);
}
.card-face__title {
  font-size: 18px;
  /* color: #90a4ae; */
        color: rgba(white, 0.8);
  white-space: nowrap;
  display: block;
  overflow: hidden;
  text-overflow: ellipsis;
  width: 100%;
  padding: 0 20px;
  text-align: center;
  box-sizing: border-box;
  font-weight: 300;
  -webkit-animation: fadedown 1s;
          animation: fadedown 1s;
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
  -webkit-animation-delay: 100ms;
          animation-delay: 100ms;
  -webkit-animation-timing-function: cubic-bezier(0.23, 1, 0.32, 1);
          animation-timing-function: cubic-bezier(0.23, 1, 0.32, 1);
}
.card-face__title:after {
  content: "";
  background-color: #E3EBEE;
  width: 70px;
  height: 1px;
  margin: 20px auto 0 auto;
  display: block;
}
.card-face-footer {
  left: 0;
  right: 0;
  position: absolute;
  text-align: center;
  bottom: 20px;
}
.card-face__social {
  display: inline-block;
  margin: 7px 7px;
  width: 100px;
  height: 36px;
  -webkit-animation: socials 1.5s;
          animation: socials 1.5s;
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
  -webkit-animation-timing-function: cubic-bezier(0.23, 1, 0.32, 1);
          animation-timing-function: cubic-bezier(0.23, 1, 0.32, 1);
}
.card-face__social:nth-child(1) {
  -webkit-animation-delay: 200ms;
          animation-delay: 200ms;
}
.card-face__social:nth-child(2) {
  -webkit-animation-delay: 400ms;
          animation-delay: 400ms;
}
.card-face__social:nth-child(3) {
  -webkit-animation-delay: 600ms;
          animation-delay: 600ms;
}
.card-face__stats {
  display: block;
  margin: 10px 0;
}
.show-menu .card-face__stats {
  -webkit-animation: stats 1s;
          animation: stats 1s;
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
  -webkit-animation-timing-function: cubic-bezier(0.23, 1, 0.32, 1);
          animation-timing-function: cubic-bezier(0.23, 1, 0.32, 1);
}
.card-face__stats:nth-of-type(1) {
  -webkit-animation-delay: 0;
          animation-delay: 0;
}
.card-face__stats:nth-of-type(2) {
  -webkit-animation-delay: 100ms;
          animation-delay: 100ms;
}
.card-face__stats:nth-of-type(3) {
  -webkit-animation-delay: 200ms;
          animation-delay: 200ms;
}
@-webkit-keyframes avatar {
  from {
    -webkit-transform: scale(1.2, 1.2);
            transform: scale(1.2, 1.2);
    opacity: 0;
  }
  to {
    -webkit-transform: scale(1, 1);
            transform: scale(1, 1);
    opacity: 1;
  }
}
@keyframes avatar {
  from {
    -webkit-transform: scale(1.2, 1.2);
            transform: scale(1.2, 1.2);
    opacity: 0;
  }
  to {
    -webkit-transform: scale(1, 1);
            transform: scale(1, 1);
    opacity: 1;
  }
}
@-webkit-keyframes menu {
  from {
    -webkit-transform: translateX(150%);
            transform: translateX(150%);
  }
  to {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
}
@keyframes menu {
  from {
    -webkit-transform: translateX(150%);
            transform: translateX(150%);
  }
  to {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
}
@-webkit-keyframes fadedown {
  from {
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
    opacity: 0;
  }
  to {
    -webkit-transform: translateY(0);
            transform: translateY(0);
    opacity: 1;
  }
}
@keyframes fadedown {
  from {
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
    opacity: 0;
  }
  to {
    -webkit-transform: translateY(0);
            transform: translateY(0);
    opacity: 1;
  }
}
@-webkit-keyframes socials {
  from {
    -webkit-transform: translateY(300%);
            transform: translateY(300%);
  }
  to {
    -webkit-transform: translateY(0%);
            transform: translateY(0%);
  }
}
@keyframes socials {
  from {
    -webkit-transform: translateY(300%);
            transform: translateY(300%);
  }
  to {
    -webkit-transform: translateY(0%);
            transform: translateY(0%);
  }
}
@-webkit-keyframes stats {
  from {
    -webkit-transform: translateX(300%);
            transform: translateX(300%);
  }
  to {
    -webkit-transform: translateX(0%);
            transform: translateX(0%);
  }
}
@keyframes stats {
  from {
    -webkit-transform: translateX(300%);
            transform: translateX(300%);
  }
  to {
    -webkit-transform: translateX(0%);
            transform: translateX(0%);
  }
}
@-webkit-keyframes bullet {
  0%,
  20%,
  40%,
  60%,
  80%,
  100% {
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
  }
  0% {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
            transform: scale3d(0.3, 0.3, 0.3);
  }
  20% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
            transform: scale3d(1.1, 1.1, 1.1);
  }
  40% {
    -webkit-transform: scale3d(0.9, 0.9, 0.9);
            transform: scale3d(0.9, 0.9, 0.9);
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(1.03, 1.03, 1.03);
            transform: scale3d(1.03, 1.03, 1.03);
  }
  80% {
    -webkit-transform: scale3d(0.97, 0.97, 0.97);
            transform: scale3d(0.97, 0.97, 0.97);
  }
  100% {
    opacity: 1;
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }
}
@keyframes bullet {
  0%,
  20%,
  40%,
  60%,
  80%,
  100% {
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
  }
  0% {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
            transform: scale3d(0.3, 0.3, 0.3);
  }
  20% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
            transform: scale3d(1.1, 1.1, 1.1);
  }
  40% {
    -webkit-transform: scale3d(0.9, 0.9, 0.9);
            transform: scale3d(0.9, 0.9, 0.9);
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(1.03, 1.03, 1.03);
            transform: scale3d(1.03, 1.03, 1.03);
  }
  80% {
    -webkit-transform: scale3d(0.97, 0.97, 0.97);
            transform: scale3d(0.97, 0.97, 0.97);
  }
  100% {
    opacity: 1;
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }
}
</style>