<template>
    <div>
        <a href="#" class="modal-trigger" data-modal="modal-name">Modal open!</a> <!-- Trigger Modal. -->

        <!-- Modal -->
        <div class="modal" id="modal-name">
          <div class="modal-sandbox"></div>
          <div class="modal-box">
            <!-- <div class="modal-header">
              <div class="close-modal">&#10006;</div> 
              <h1>Khách mới</h1>
            </div> -->
            <div class="modal-body">
              <div class="close-modal">&#10006;</div> 
              <event-in-component></event-in-component>
              <button class="close-modal">Close!</button>
            </div>
          </div>
        </div>

<!-- Aditional Styles -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">

        
    </div>
</template>
<script>

import EvenInComponent from './EventInComponent';

export default {
    name:'EventComponent',
}

</script>

<script>
   // Huy
   $(document).ready(function(){
    setTimeout(function(){
      $(".btn").click();
    },10000);
   });
    
</script>


<style scoped>

.modal,
.modal-box {
  z-index: 2000;

}

.modal-sandbox {
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: transparent;
  border-radius: 15pt;

}

.modal {
  display: none; 
  position: fixed;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  background: rgb(0,0,0);
  background: rgba(0,0,0,.8);
  overflow: auto;
}

.modal-box {
  position: relative;
  width: 80%;
  max-width: 1120px;
  margin: 50px auto;
  animation-name: modalbox;
  animation-duration: .4s;
  animation-timing-function: cubic-bezier(0,0,.3,1.6);
}

.modal-header {
  padding: 20px 40px;
  background: #546E7A;
  color: #ffffff;

}

.modal-body {
  /* background: #ECEFF1; */
  background: linear-gradient(150deg, #e6d3f9 0%, #e6d3f9 50%, #cea0f1 50%, #cea0f1 100%);
  padding: 60px 40px;
  text-align: center;
  border-radius: 10px;
  max-height: 600px;

}

/* Close Button */
.close-modal {
  text-align: right;
  cursor: pointer;
}

/* Animation */
@-webkit-keyframes modalbox {
  0% {
    top: -250px; 
    opacity: 0;
  }
  100% {
    top: 0; 
    opacity: 1;
  }
}

@keyframes modalbox {
  0% {
    top: -250px; 
    opacity: 0;
  }
  100% {
    top: 0; 
    opacity: 1;
  }
}

/* Aditional Styles */
* {
  font-family: "Roboto", sans-serif;
  font-weight: normal;
}

p {
  line-height: 1.4em;
}

body {
  background: #B0BEC5;
}

.modal-trigger, button {
  top: 50%;
  left: 50%;
  padding: 20px 40px;
  background: transparent;
  color: #ffffff;
  border: 1px solid #ffffff;
  text-decoration: none;
}

.modal-trigger {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  transition: ease .2s;
}

button {
  border: 1px solid #333333;
  outline: none;
  color: #333333;
}

.modal-trigger:hover {
  padding: 20px 60px;
}

</style>
