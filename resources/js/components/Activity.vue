<template>
  <div class="activity-component">
    <div class="title">
          <h5>Next Activity</h5>
    </div>
    
    <div class="description">
      
      <span class="hour"> 15:00</span>
      <p class="text-description"> Lecture Seabirds by Miguel in..</p>
    </div>

  </div>
</template>

<script>
    import Bus from '../EventBus';

    export default {
      props:['state'],
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
    position: relative;
    /*margin-left: 10px;*/
  
  }

  .description{
    margin-top: 6em;
  }  

  .hour{
    color:white;
    font-size: 32px;
    margin-left: 10px;
  }
  .text-description{
     margin-left: 10px;
     color:white;
     font-size: 22px;
  }
</style>
