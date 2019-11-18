<template>
  <div class="content">
      <div class="title">
          <h5>Ship Camera</h5>
      </div>
      
     <video playsinline autoplay muted loop>
          <source src="videos/daily.mov"  type="video/mp4"/>
      </video>
  </div>
</template>

<script>
    import Bus from '../EventBus';
    import Temperature from './Temperature'
    import Activity from './Activity'
    import ContentCamera from './ContentCamera'

    export default {
      props:['state'],
      components: { Temperature, Activity},
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

 .title{
    color:white;
    position: absolute;  
    padding:2em;
  }
  
  video{
    width: 100%;
    height: 100%;
  }

  .content{
    background-color: #9E9E9E;
    
  }
</style>
