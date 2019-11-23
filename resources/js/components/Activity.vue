<template>
  <div class="activity-component">
    <div class="title">
          <span class="title-sty">Next Activity</span>
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
/*    color:white;
    position: relative;*/
    /*margin-left: 10px;*/
    color:white;
    position: relative;
    margin-top: 2em;
    margin-left: 3em;
    font-family: FuturaStdBook;
    font-size: 25px;

  
  }
  .title-sty{
    font-family: FuturaStdBook;
    font-size: 25px;
  }
  .description{
    margin-top: 6em;
    padding:2em;
    margin-left: 1em;
  }  

  .hour{
    color:white;
    font-size: 46px;
    font-family: FuturaStdBook;

    margin-left: 10px;
  }
  .text-description{
     margin-left: 10px;
     color:white;
     font-size: 31.14px;
    font-family: FuturaStdBook;
  }
</style>
