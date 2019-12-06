<template xmlns="http://www.w3.org/1999/html">
  <div class="row">
      <div class="col-md-2">
         <span class="daily-date">
             {{currentDate | DayFormat}}

         </span>
          <span class="daily-date2">
            {{currentDate | MonthFormat}}
         </span>
      </div>
      <div class="col-md-6 slider-carou">
              <div v-for="(item, index) in data" style="color:#97939a;" >
                  <div class="row"  :class="currentDaily(item, index)" style="height:100%;" >
                      <span  class="daily-hour" style="display:flex;align-items:center;justify-content: start;height: 100%;margin-left: 0.4em;">
                        {{ item.hour | hourformat}}
                      </span>
                      <template>
                        <span  class="daily-description" style="display:flex;align-items:center;justify-content: start;margin-left: 1em;">
                        {{item.title_en}}
                        </span>
                      </template>
                  </div>
              </div>
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
          currentDate : {},
          active : 'active'
        }
      },
      mounted() {
        this.loadDaily();
        this.loadInformation();

      // setTimeout(() => { $('.sty-0').addClass('active'); }, '2000');

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
          axios.get('/getDailyProgram2').then((response) => {
            this.data = response.data.data
              this.currentDate = new Date();
          });
        },
          currentDaily(item, index){
               if (moment(this.currentDate).format('HH:mm:ss') > item.hour ) {
                   return '';
               } else {
                   return 'active';
               }

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

        },
          DayFormat: function (value) {
            if (value)
              return moment(value).format('DD')
          },
          MonthFormat: function (value) {
              if (value)
                  return moment(value).format('MMM').toUpperCase();
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

  .daily-date{
      padding-top: 20px;
      font-size: 50px;
      font-family: Didot;
      margin-left: 1.5em;
      color:white;
  }
  .daily-date2{
      font-size: 50px;
      font-family: Didot;
      margin-left: 1.5em;
      color:white;
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
