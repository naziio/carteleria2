<template>
      <div class="title">
          <h4 v-if="state== 1 || state == 2">Daily Program</h4>
          <h4 v-if="state== 3 || state == 4 ">Weather</h4>
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
    margin-top: 2em;
    margin-left: 4em;
    font-family: FuturaStdBook;
    font-size: 25px;

  }


</style>
