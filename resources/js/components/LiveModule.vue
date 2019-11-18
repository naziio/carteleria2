<template>
  <div>
    <div class="weather" >
      <div class="row" style="display:flex; justify-content:center">
        <div class="col-md-3">
          <div class="temperature">
            <span class="icon-lm" style="display:inline;">
               <img src="iconos/png/signage_iconos-07.png"  class="icon cloudy" alt="">
               <img src="iconos/png/signage_iconos-07.png"  class="cloud" alt="">
            </span>
            
            <div class="title-lm" style="display:flex;align-items: center;align-self: center; flex-direction:row">
                <h4 class="text-center title-temperature" v-if="state == 3">  -4° <span class="type-medide">c</span></h4>
                <h4 class="text-center title-temperature" v-if="state == 4">  -10° <span class="type-medide">c</span></h4>
            </div>
            <h3 style="display:flex; justify-content:center" v-if="state == 3">Temperature</h3>
            <h3 style="display:flex; justify-content:center" v-if="state == 4">Wind Chill</h3>
          </div>
        </div>   
        <div class="col-md-3">
          <div class="temperature">

              <svg class="windy-cloud" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512">
                <g class="cloud-wrap">
                <path class="cloud2" d="M417,166.1c-24-24.5-57.1-38.8-91.7-38.8c-34.6,0-67.7,14.2-91.7,38.8c-52.8,2.5-95,46.2-95,99.6
                c0,55,44.7,99.7,99.7,99.7c5.8,0,11.6-0.5,17.3-1.5c20.7,13.5,44.9,20.9,69.7,20.9c24.9,0,49.1-7.3,69.8-20.9
                c5.7,1,11.5,1.5,17.3,1.5c54.9,0,99.6-44.7,99.6-99.7C512,212.3,469.8,168.5,417,166.1z M412.4,333.3c-8.3,0-16.4-1.5-24-4.4
                c-17.5,15.2-39.8,23.8-63.1,23.8c-23.2,0-45.5-8.5-63-23.8c-7.6,2.9-15.8,4.4-24,4.4c-37.3,0-67.7-30.4-67.7-67.7
                c0-37.3,30.4-67.7,67.7-67.7c3.2,0,6.4,0.2,9.5,0.7c18.1-24.6,46.5-39.4,77.5-39.4c30.9,0,59.4,14.8,77.5,39.4
                c3.1-0.5,6.3-0.7,9.6-0.7c37.3,0,67.6,30.4,67.6,67.7C480,303,449.7,333.3,412.4,333.3z" />
                </g>
                <path class="wind-three" d="M144,352H16c-8.8,0-16,7.2-16,16s7.2,16,16,16h128c8.8,0,16-7.2,16-16S152.8,352,144,352z" />
                <path class="wind-two" d="M16,320h94c8.8,0,16-7.2,16-16s-7.2-16-16-16H16c-8.8,0-16,7.2-16,16S7.2,320,16,320z" />
                <path class="wind-one" d="M16,256h64c8.8,0,16-7.2,16-16s-7.2-16-16-16H16c-8.8,0-16,7.2-16,16S7.2,256,16,256z" />
              </svg>
            
            <div class="title-lm" style="display:flex;align-items: center;align-self: center; flex-direction:row">
                <h4 class="text-center title-wind">  20 <span class="type-medide-wind">km/h</span>
                </h4>
                <div class="svg-viento winds">
                </div> 
            </div>
            <h3 style="display:flex; justify-content:center">Wind</h3>
          </div>
        </div>   
        <div class="col-md-3">
          <div class="temperature">

             <h6 class="text-center" style="margin-top:2em;">
                    <span>
                       <img src="iconos/png/flechas.png" alt="" width="220px">
                    </span>
              </h6>

              <div class="text-center mt-2" style="display: flex;justify-content: space-evenly;">
                <div class="sun-one">
                  <svg class="sunshine" style="width:168px; height:50px"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512">
                  <path class="sun-full" d="M256,144c-61.8,0-112,50.2-112,112s50.2,112,112,112s112-50.2,112-112S317.8,144,256,144z M256,336
                          c-44.2,0-80-35.8-80-80s35.8-80,80-80s80,35.8,80,80S300.2,336,256,336z"></path>
                  <path class="sun-ray-eight" d="M131.6,357.8l-22.6,22.6c-6.2,6.2-6.2,16.4,0,22.6s16.4,6.2,22.6,0l22.6-22.6c6.2-6.3,6.2-16.4,0-22.6
                          C147.9,351.6,137.8,351.6,131.6,357.8z"></path>
                  <path class="sun-ray-seven" d="M256,400c-8.8,0-16,7.2-16,16v32c0,8.8,7.2,16,16,16s16-7.2,16-16v-32C272,407.2,264.8,400,256,400z"></path>
                  <path class="sun-ray-six" d="M380.5,357.8c-6.3-6.2-16.4-6.2-22.6,0c-6.3,6.2-6.3,16.4,0,22.6l22.6,22.6c6.2,6.2,16.4,6.2,22.6,0
                          s6.2-16.4,0-22.6L380.5,357.8z"></path>
                  <path class="sun-ray-five" d="M448,240h-32c-8.8,0-16,7.2-16,16s7.2,16,16,16h32c8.8,0,16-7.2,16-16S456.8,240,448,240z"></path>
                  <path class="sun-ray-four" d="M380.4,154.2l22.6-22.6c6.2-6.2,6.2-16.4,0-22.6s-16.4-6.2-22.6,0l-22.6,22.6c-6.2,6.2-6.2,16.4,0,22.6
                          C364.1,160.4,374.2,160.4,380.4,154.2z"></path>
                  <path class="sun-ray-three" d="M256,112c8.8,0,16-7.2,16-16V64c0-8.8-7.2-16-16-16s-16,7.2-16,16v32C240,104.8,247.2,112,256,112z"></path>
                  <path class="sun-ray-two" d="M131.5,154.2c6.3,6.2,16.4,6.2,22.6,0c6.3-6.2,6.3-16.4,0-22.6l-22.6-22.6c-6.2-6.2-16.4-6.2-22.6,0
                          c-6.2,6.2-6.2,16.4,0,22.6L131.5,154.2z"></path>
                  <path class="sun-ray-one" d="M112,256c0-8.8-7.2-16-16-16H64c-8.8,0-16,7.2-16,16s7.2,16,16,16h32C104.8,272,112,264.8,112,256z"></path>
                  </svg>
                  <span class="hour-time" style="display:flex;font-size:44px;justify-content:center">
                    08:00
                  </span>
                </div>
                <div class="sun-two">
                  <svg class="sunshine" style="width:168px; height:50px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512">
                      <path class="sun-full" d="M256,144c-61.8,0-112,50.2-112,112s50.2,112,112,112s112-50.2,112-112S317.8,144,256,144z M256,336
                              c-44.2,0-80-35.8-80-80s35.8-80,80-80s80,35.8,80,80S300.2,336,256,336z"></path>
                      <path class="sun-ray-eight" d="M131.6,357.8l-22.6,22.6c-6.2,6.2-6.2,16.4,0,22.6s16.4,6.2,22.6,0l22.6-22.6c6.2-6.3,6.2-16.4,0-22.6
                              C147.9,351.6,137.8,351.6,131.6,357.8z"></path>
                      <path class="sun-ray-seven" d="M256,400c-8.8,0-16,7.2-16,16v32c0,8.8,7.2,16,16,16s16-7.2,16-16v-32C272,407.2,264.8,400,256,400z"></path>
                      <path class="sun-ray-six" d="M380.5,357.8c-6.3-6.2-16.4-6.2-22.6,0c-6.3,6.2-6.3,16.4,0,22.6l22.6,22.6c6.2,6.2,16.4,6.2,22.6,0
                              s6.2-16.4,0-22.6L380.5,357.8z"></path>
                      <path class="sun-ray-five" d="M448,240h-32c-8.8,0-16,7.2-16,16s7.2,16,16,16h32c8.8,0,16-7.2,16-16S456.8,240,448,240z"></path>
                      <path class="sun-ray-four" d="M380.4,154.2l22.6-22.6c6.2-6.2,6.2-16.4,0-22.6s-16.4-6.2-22.6,0l-22.6,22.6c-6.2,6.2-6.2,16.4,0,22.6
                              C364.1,160.4,374.2,160.4,380.4,154.2z"></path>
                      <path class="sun-ray-three" d="M256,112c8.8,0,16-7.2,16-16V64c0-8.8-7.2-16-16-16s-16,7.2-16,16v32C240,104.8,247.2,112,256,112z"></path>
                      <path class="sun-ray-two" d="M131.5,154.2c6.3,6.2,16.4,6.2,22.6,0c6.3-6.2,6.3-16.4,0-22.6l-22.6-22.6c-6.2-6.2-16.4-6.2-22.6,0
                              c-6.2,6.2-6.2,16.4,0,22.6L131.5,154.2z"></path>
                      <path class="sun-ray-one" d="M112,256c0-8.8-7.2-16-16-16H64c-8.8,0-16,7.2-16,16s7.2,16,16,16h32C104.8,272,112,264.8,112,256z"></path>
                  </svg>
                  <span class="hour-time" style="display:flex;font-size:44px;justify-content:center">
                    17:00
                  </span>
                </div>
              </div>
            
              <h3 style="display:flex; justify-content:center;margin-top:5px;">Sunrise / Sunset</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
    import Bus from '../EventBus';
    import Slider from 'vue-plain-slider'

    export default {
      props:['state'],
      components: { Slider  },
      data(){
        return{
        }
      },

      created() {

      },
      mounted() {

      
      },

      methods:{
  

      }

    }
</script>

<style scoped>

  .title-left{
    color:white;
    position: relative;
    margin-top: 2em;
  }
  
  .weather{
    position: relative;
  }

  .row {
    margin-right: 0px;
  }
  .weather{
    display: flex;
    flex-grow: 1;
    flex-direction: column;
    color: white;
    justify-content: center;
    margin-top: 9em;
   }

  .temperature{
    display: flex;
    flex-direction: column;
  }

  .info-lm{
    padding-left: 2em;
    margin-top: 2em;
    font-family: FuturaStdBook;
    font-size: 30px;
  }

  .pa-lm{
     margin-top: -17px;
     font-size: 45px;
  }
  .pb-lm{
    margin-top: -17px;
  }

  .icon-lm{
    text-align: center;
    display: inline-block;
    /*width: 100%;*/
    margin-top: -2rem;
  }

  .title-temperature{
    font-family: FuturaStdBook;
    font-size: 7rem;
  }  

  .title-wind{
    font-family: FuturaStdBook;
    font-size: 7rem;
  }

  .type-medide{
    margin-left: -25px;
  }  

  .type-medide-wind{
    margin-left: 0px;
    font-size: 70px;
  }

  .icon {
    position: relative;
    display: inline-block;
    font-size: 1em; /* control icon size here */
  }

  .cloud {
    position: absolute;
    z-index: 1;
    top: 22%;
    left: 50%;
    width: 3.6875em;
    height: 3.6875em;
    margin: -1.84375em;
    background: currentColor;
    border-radius: 50%;
    box-shadow:
      -2.1875em 0.6875em 0 -0.6875em,
      2.0625em 0.9375em 0 -0.9375em,
      0 0 0 0.375em #fff,
      -2.1875em 0.6875em 0 -0.3125em #fff,
      2.0625em 0.9375em 0 -0.5625em #fff;
  }
  .cloud:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: -0.5em;
    display: block;
    width: 4.5625em;
    height: 1em;
    background: currentColor;
    box-shadow: 0 0.4375em 0 -0.0625em #fff;
  }
  .cloud:nth-child(2) {
    z-index: 0;
    background: #fff;
    box-shadow:
      -2.1875em 0.6875em 0 -0.6875em #fff,
      2.0625em 0.9375em 0 -0.9375em #fff,
      0 0 0 0.375em #fff,
      -2.1875em 0.6875em 0 -0.3125em #fff,
      2.0625em 0.9375em 0 -0.5625em #fff;
    opacity: 0.3;
    transform: scale(0.5) translate(6em, -3em);
    animation: cloud 4s linear infinite;
  }
  .cloud:nth-child(2):after { background: #fff; }


  @keyframes cloud {
    0% { opacity: 0; }
    50% { opacity: 0.3; }
    100% {
      opacity: 0;
      transform: scale(0.5) translate(-200%, -3em);
    }
  }

  svg {
    width: 150px;
    height: 120px;
    fill: #fff;
    display: flex;
    justify-content: center;
    align-self: center;
  }

  .svg-viento {
      margin-bottom: 23px;
  }


  /* Windy Cloud Animation */
  .windy-cloud .cloud-wrap {
    animation: bob 2s infinite cubic-bezier(0,0,.5,1.5);
  }
  .windy-cloud .cloud2 {
    animation: cloud-push 4s infinite;
    transform-origin: left center;
  }
  .windy-cloud .wind-one {
    animation: wind-slide-one 4s infinite;
  }
  .windy-cloud .wind-two {
    animation: wind-slide-two 4s infinite;
  }
  .windy-cloud .wind-three {
    animation: wind-slide-three 4s infinite;
  }

  @keyframes bob {
    0%, 100% {
      transform: translateY(10px);
    }
    50% {
      transform: translateY(-10px);
    }
  }

  @keyframes cloud-push {
    0%, 80%, 100% {
      transform: translateX(-120px) scale(1.2);
    }
    10%, 60% {
      transform: translateX(0) scale(1);
    }
  }

  @keyframes wind-slide-one {
    0%, 70%, 100% {
      transform: scaleX(0);
      opacity: 0;
    }
    10%, 60% {
      transform: scaleX(1);
      opacity: 1;
    }
  }

  @keyframes wind-slide-two {
    0%, 70%, 100% {
      transform: scaleX(0);
      opacity: 0;
    }
    10%, 60% {
      transform: scaleX(1);
      opacity: 1;
    }
  }

  @keyframes wind-slide-three {
    0%, 70%, 100% {
      transform: scaleX(0);
      opacity: 0;
    }
    10%, 60% {
      transform: scaleX(1);
      opacity: 1;
    }
  }

  /* Sunshine Animation */
/* If only using this animation be sure to grab the sun-grow and ray-show-x keyframes set above */
.sunshine .sun-full {
  animation: sun-grow 4s infinite cubic-bezier(0.2, 0.85, 0.4, 1.5);
  transform-origin: center center;
}

.sunshine .sun-ray-one {
  animation: ray-show-one 4s infinite ease-in;
  transform-origin: center right;
}

.sunshine .sun-ray-two {
  animation: ray-show-two 4s infinite ease-in;
  transform-origin: bottom right;
}

.sunshine .sun-ray-three {
  animation: ray-show-three 4s infinite ease-in;
  transform-origin: bottom center;
}

.sunshine .sun-ray-four {
  animation: ray-show-four 4s infinite ease-in;
  transform-origin: bottom left;
}

.sunshine .sun-ray-five {
  animation: ray-show-five 4s infinite ease-in;
  transform-origin: center left;
}

.sunshine .sun-ray-six {
  animation: ray-show-six 4s infinite ease-in;
  transform-origin: top left;
}

.sunshine .sun-ray-seven {
  animation: ray-show-seven 4s infinite ease-in;
  transform-origin: top center;
}

.sunshine .sun-ray-eight {
  animation: ray-show-eight 4s infinite ease-in;
  transform-origin: top right;
}

@keyframes sun-grow {
  0%, 90%, 100% {
    transform: scale(0.5);
    opacity: 0;
  }
  15%, 80% {
    transform: scale(1);
    opacity: 1;
  }
}


@keyframes ray-show-one {
  0%, 15%, 80%, 100% {
    transform: scale(0.5);
    opacity: 0;
  }
  20%, 70% {
    transform: scale(1);
    opacity: 1;
  }
}

@keyframes ray-show-two {
  0%, 20%, 80%, 100% {
    transform: scale(0.5);
    opacity: 0;
  }
  25%, 70% {
    transform: scale(1);
    opacity: 1;
  }
}

@keyframes ray-show-three {
  0%, 25%, 80%, 100% {
    transform: scale(0.5);
    opacity: 0;
  }
  30%, 70% {
    transform: scale(1);
    opacity: 1;
  }
}

@keyframes ray-show-four {
  0%, 30%, 80%, 100% {
    transform: scale(0.5);
    opacity: 0;
  }
  35%, 70% {
    transform: scale(1);
    opacity: 1;
  }
}

@keyframes ray-show-five {
  0%, 35%, 80%, 100% {
    transform: scale(0.5);
    opacity: 0;
  }
  40%, 70% {
    transform: scale(1);
    opacity: 1;
  }
}

@keyframes ray-show-six {
  0%, 40%, 80%, 100% {
    transform: scale(0.5);
    opacity: 0;
  }
  45%, 70% {
    transform: scale(1);
    opacity: 1;
  }
}

@keyframes ray-show-seven {
  0%, 45%, 80%, 100% {
    transform: scale(0.5);
    opacity: 0;
  }
  50%, 70% {
    transform: scale(1);
    opacity: 1;
  }
}

@keyframes ray-show-eight {
  0%, 50%, 80%, 100% {
    transform: scale(0.5);
    opacity: 0;
  }
  55%, 70% {
    transform: scale(1);
    opacity: 1;
  }
}


</style>
