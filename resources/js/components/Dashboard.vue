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
          time1: '',
          time2: '',
          time3: '',
          time4: '',
          time5: '',
          time6: '',
          time7: '',
          time8: '',
        }
      },

      mounted() {
        this.loadTimePage();
      },
      methods:{
        visualizeContentTransition() {
            
            if(this.state === 1){
                this.state = 2;
                this.$router.push('state-two')
               setTimeout(() => { this.visualizeContentTransition() }, this.time2);
            }
             else if(this.state === 2){
                this.state = 3;

               this.$router.push('state-three')
               setTimeout(() => { this.visualizeContentTransition() }, this.time3);
            }
            else if(this.state === 3){

              this.state = 4;
            
              this.$router.push('state-four')
              setTimeout(() => { this.visualizeContentTransition() }, this.time4);
            }            
            else if(this.state === 4){

              this.state = 5;
            
            
              this.$router.push('state-five')
              setTimeout(() => { this.visualizeContentTransition() }, this.time5);
            }
            else if(this.state === 5){

              this.state = 6;
            
              this.$router.push('state-six')
              setTimeout(() => { this.visualizeContentTransition() }, this.time6);
            }            
            else if(this.state === 6){

              this.state = 7;
            
            
              this.$router.push('state-seven')
              setTimeout(() => { this.visualizeContentTransition() }, this.time7);
            }            
            else if(this.state === 7){

              this.state = 1;
            
              this.$router.push('/')
              setTimeout(() => { this.visualizeContentTransition() }, this.time8);
            }

          },
          loadTimePage(){
            axios.get('/getTimePage').then((response) => {
              console.log(response)
              this.time1 = response.data.data.state1
              this.time2 = response.data.data.state2
              this.time3 = response.data.data.state3
              this.time4 = response.data.data.state4
              this.time5 = response.data.data.state5
              this.time6 = response.data.data.state6
              this.time7 = response.data.data.state7
              this.time8 = response.data.data.state8

              setTimeout(() => { 
                 this.visualizeContentTransition()
              }, this.time1);

            });
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
