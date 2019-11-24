<template>
  <div class="temperature">
    <title-project :state="state"/>
    <div class="content">

      <span class="icon-lm" style="display:inline;">
         <img src="iconos/png/signage_iconos-07.png"  class="icon cloudy" alt="" width="125px;" height="125px;">
         <img src="iconos/png/signage_iconos-07.png"  class="cloud" alt="">
      </span>

      <div class="title-lm" style="display:flex;align-items: center;align-self: center; flex-direction:row">
          <h4 class="text-center title-temperature"> {{data.temperature}}°<span class="type-medide">c</span></h4>
      </div>
          <h6 class="subtitle" style="display:flex; justify-content:center;color:white">Temperature</h6>
    </div>
  </div>
</template>

<script>
    import Bus from '../EventBus';

    export default {
      props:['state'],
      data(){
        return{
            data: {},
        }
      },

      created() {

      },
      mounted() {
          this.loadWeather();

      },

      methods:{
          loadWeather(){
              axios.get('/getWeatherStation').then((response) => {
                  this.data = response.data.data
              });
          }
      }

    }
</script>

<style scoped>
 .title{
    color:white;
    position: relative;
  }
  .title-sty{
    font-family: FuturaStdBook;
    font-size: 25px;
  }

 .temperature{
    display: flex;
    flex-direction: column;
    /*margin-left: 1em;*/
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
    margin-top: -1rem;
  }

  .title-temperature{
    font-family: FuturaStdBook;
    font-size: 103px;
    color:white;
  }

  .subtitle{
    font-size: 33.16px;
    font-family: FuturaStdBook;

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
    top: 38%;
    left: 55%;
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

  .content {
    display: flex;
    flex-direction: column;
    padding-left: 2em;
    padding-bottom: 2em;
  }
</style>
