<template>
  <div class="row">
      <div class="col-md-2">

      </div>
      <div class="col-md-6">
        
      <!-- <ul class="list-daily">
          <li>
            <span class="daily-hour">15:00 </span>
            <span class="daily-description">Probando Title New</span>
          </li>        
          <li>
            <span class="daily-hour">15:00 </span>
            <span class="daily-description">Probando Title New</span>
          </li>
          <li>
            <span class="daily-hour">15:00 </span>
            <span class="daily-description">Probando Title New</span>
          </li>
          <li>
            <span class="daily-hour">15:00 </span>
            <span class="daily-description">Probando Title New</span>
          </li>
          <li class="active">
            <span class="daily-hour">15:00 </span>
            <span class="daily-description">Probando Title New</span>
          </li>
          <li>
            <span class="daily-hour">15:00 </span>
            <span class="daily-description">Probando Title New</span>
          </li>
          <li>
            <span class="daily-hour">15:00 </span>
            <span class="daily-description">Probando Title New</span>
          </li>
          <li>
            <span class="daily-hour">15:00 </span>
            <span class="daily-description">Probando Title New</span>
          </li>
          <li>
            <span class="daily-hour">15:00 </span>
            <span class="daily-description">Probando Title New</span>
          </li>
          <li>
            <span class="daily-hour">15:00 </span>
            <span class="daily-description">Probando Title New</span>
          </li>
        </ul> -->
        <Slider
              ref="Slider"
              direction="vertical"
              :mousewheel-control="false"
              :performance-mode="true"
              :loop="true"
              :speed="1000"
              :interval="4000"
              :auto="true"
              :curPage= "1"
              @slide-change-start="onSlideChangeStart"
              @slide-change-end="onSlideChangeEnd"
              class="slider-carou">
              <!-- <div v-for="(item, index) in data" style="color:white;"> -->
              <div  v-for="index in 10" style="color:#97939a;">
                  <div class="row" :class="'sty-'+ index" style="height:100%;">
                    <!-- <div class="col-md-6" style="height:100%"> -->
                      <span  class="daily-hour" style="display:flex;align-items:center;justify-content: start;height: 100%; font-size:32px;margin-left: 0.4em;">
                        <!-- {{ item.realization_date | hourformat}} -->
                        15:00
                      </span>
                    <!-- </div> -->
                    <!-- <div class="col-md-6" style="height:100%; display:flex;flex-direction: column;margin-left:-4em;padding:1em;"> -->
                      <template>
                        <span  class="daily-description" style="display:flex;align-items:center;justify-content: start; font-size:24px;margin-left: 1em;">
                        <!-- {{item.title_en}} -->
                        Probando New {{index}}
                        </span>

                      </template>
                    <!-- </div> -->
                  </div>
              </div>
      </Slider>
      </div>
      <div class="col-md-3">
        <div class="title-left" v-if="state == 1">
          <h3>INFORMATION</h3>
          <span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque ad laborum a amet ipsam autem beatae, ut corporis voluptates, eos tenetur minima dignissimos! Sunt vero id deserunt perferendis repellendus. Libero.</span>
        </div>        
        <div class="title-left" v-if="state == 2">
          <h3>ALERT</h3>
          <span>Go with caution, winds of more the 200 km/h.</span>
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
      methods:{
       onSlideChangeStart (currentPage, el) {

          $('.sty-'+ currentPage).addClass('active');

          $('.sty-'+ (currentPage - 1)).removeClass('active');
          
        },
        onSlideChangeEnd (currentPage, el) {

        },       
      }
    }
</script>

<style scoped>

  .title-left{
    color:white;
    position: relative;
    margin-top: 2em;
  }

  .list-daily{
    position: relative;
    margin-top: 4em;
    margin-left: 2em;
    list-style-type: none;
    font-size: 30px;
    color:#97939a;
  }

  .list-daily li{
    padding: 2px;
  }

  .daily-description{
    font-size: 24px;
    padding-left:10px;
  }

  .active{
    color:white;
  }

  .active .daily-description{
    font-size: 28px !important ;
  }  
  .active .daily-hour{
    font-size: 36px !important ;
  }

  .row {
    margin-right: 0px;
  }
  .slider-carou{
    margin-top :4em;
    margin-left: 4em; 
  }

</style>
