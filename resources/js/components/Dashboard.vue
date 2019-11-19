<template>
  <div class="img-fondo">
    <div id="video-container">
          <video playsinline autoplay muted loop :src="videoState">
          </video>
    </div>
      <title-project :state="state" v-if="state == 1 || state == 2 || state == 3 || state == 4"/>
      <daily-program :state="state" v-if="state == 1 || state == 2"/>
      <live-module :state="state"  v-if="state == 3 || state == 4"/>
      <weather-temperature :state="state"  v-if="state == 5 || state == 6 || state == 7"/>
    </div>
</template>

<script>
    import Bus from '../EventBus';
    import DailyProgram from './DailyProgram'
    import LiveModule from './LiveModule'

    export default {
      components: { DailyProgram, LiveModule},
      data(){
        return{
          state: 1,
          videoState: "videos/daily.mp4",
        }
      },

      created() {
        setTimeout(() => { 
    
         this.visualizeContentTransition()
        },5000);

      },
      mounted() {
  
      },
      methods:{
        visualizeContentTransition() {
            
            if(this.state === 1){
                this.state = 2;

               setTimeout(() => { this.visualizeContentTransition() }, '5000');
            }
             else if(this.state === 2){
                this.state = 3;

               setTimeout(() => { this.visualizeContentTransition() }, '5000');
            }
            else if(this.state === 3){

              this.state = 4;
            
              setTimeout(() => { this.visualizeContentTransition() }, '5000');
            }            
            else if(this.state === 4){

              this.state = 5;
            
              setTimeout(() => { this.visualizeContentTransition() }, '5000');
            }
            else if(this.state === 5){

              this.state = 6;
            
              setTimeout(() => { this.visualizeContentTransition() }, '5000');
            }            
            else if(this.state === 6){

              this.state = 7;
            
              setTimeout(() => { this.visualizeContentTransition() }, '5000');
            }            
            else if(this.state === 7){

              this.state = 1;
            
              setTimeout(() => { this.visualizeContentTransition() }, '5000');
            }

          },

      },
      watch: {
        state: function (newQuestion, oldQuestion) {
          if ( newQuestion == 3){
            this.videoState = "videos/weather.mp4";
          }             
           if ( newQuestion == 4){
            this.videoState = "videos/weather.mp4";
          }          
          if ( newQuestion == 1){
            this.videoState = "videos/daily.mp4";
          }          
          if ( newQuestion == 2){
            this.videoState = "videos/daily.mp4";
          }
        }
      }

    }
</script>

<style scoped>

  #video-container {
      top:0%;
      left:0%;
      height:100%;
      width:100%;
      overflow: hidden;
      position: absolute;
  }
  video {
      position:absolute;
      z-index:0;
      width: 100%;
  }


</style>
