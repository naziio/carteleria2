<template>
  <div class="row">
      <div class="col-md-2">

      </div>
      <div class="col-md-6">
        <Slider
              ref="Slider"
              direction="vertical"
              :mousewheel-control="false"
              :performance-mode="true"
              :loop="true"
              :speed="1000"
              :interval="4000"
              :auto="true"
              :curPage= "0"
              :async-data="false"
              @slide-change-start="onSlideChangeStart"
              @slide-change-end="onSlideChangeEnd"
              class="slider-carou">
              <div v-for="(item, index) in data" style="color:#97939a;" >
                  <div class="row"  :class="'sty-'+ index" style="height:100%;" >
                      <span  class="daily-hour" style="display:flex;align-items:center;justify-content: start;height: 100%;margin-left: 0.4em;">
                        {{ item.realization_date | hourformat}}
                      </span>
                      <template>
                        <span  class="daily-description" style="display:flex;align-items:center;justify-content: start;margin-left: 1em;">
                        {{item.title_en}}
                        </span>
                      </template>
                  </div>
              </div>
        </Slider>
      </div>
      <div class="col-md-3">
        <div class="title-left">
          <h3 class="title-information">{{ information.title_en}}</h3>
          <span class="information">{{information.description_en}}</span>
        </div>        
       <!--  <div class="title-left" v-if="state == 2">
          <h3 >ALERT</h3>
          <span class="information">Go with caution, winds of more the 200 km/h.</span>
        </div>    -->
      </div>
  </div>
</template>

<script>
    import Bus from '../EventBus';
    import Slider from 'vue-plain-slider'
    import moment from 'moment'
    
    export default {
      props:['state'],
      components: { Slider  },
      data(){
        return{
          data: {},
          information: {},
        }
      },
      mounted() {
        this.loadDaily();
        this.loadInformation();
      
       setTimeout(() => { $('.sty-0').addClass('active'); }, '2000');

      },
      methods:{
       onSlideChangeStart (currentPage, el) {

          $('.sty-'+ currentPage).addClass('active');

          $('.sty-'+ (currentPage - 1)).removeClass('active');
          // console.log(currentPage)
          
        },
        onSlideChangeEnd (currentPage, el) {

        },     

        loadDaily(){
          axios.get('/getDailyProgram').then((response) => {
            this.data = response.data.data
          });
        },        
        loadInformation(){
          axios.get('/getInformation').then((response) => {
            // console.log(response.data.data)
            this.information = response.data.data
          });
        },          
        loadSighting(){
          axios.get('/getSighting').then((response) => {
            console.log(response)
            // this.data = response.data.data
          });
        },  
      },
      filters: {
        hourformat: function (value) {
          if (value)
           return moment(value , 'HH:mm:ss').format('HH:mm');

        }
      },
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
    color:#97939a;

  }

  .list-daily li{
    padding: 2px;
  }

  .daily-hour{
    font-size: 37.6px;
    padding-left:10px;
    font-family: FuturaStdBook;
  }

  .daily-description{
    font-size: 25px;
    padding-left:10px;
    font-family: FuturaStdBook;
  }

  .active{
    color:white;
  }

  .active .daily-description{
    font-size: 31.14px !important ;
  }  
  .active .daily-hour{
    font-size: 46.7px !important ;
  }

  .row {
    margin-right: 0px;
  }
  .slider-carou{
    margin-top :4em;
    margin-left: 4em; 
    font-family: FuturaStdBook;
 
  }
  .information {
    font-family: FuturaStdBook;
    font-size: 30px;
  }  

  .title-information {
    font-family: FuturaStdBook;
    font-size: 31.5px;
  }
</style>
