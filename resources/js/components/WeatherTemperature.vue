<template>
  <div style="display:flex">
    <div class="cinco">
     <div class="temperature-weather">
        <temperature :state="state"/>
      </div>
     <div class="activity">
        <activity :state="state"/>
      </div>
    </div>
    <div class="content">
       <content-camera  v-if="state == 6" /> 
       <content-map v-if="state == 7"/>
    </div>
  </div>
</template>

<script>
    import Bus from '../EventBus';
    import Temperature from './Temperature'
    import Activity from './Activity'
    import ContentCamera from './ContentCamera'
    import ContentMap from './ContentMap'

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

.temperature-weather{
  position: relative;
  background-color: #5e6f7bb0;;
  /*padding: 2em;*/
  height: 100%;
  flex: 1;
  padding-bottom: 2em;
  padding-top: 2em;
  padding-left: 1em;
  padding-right: 2em;
}

.activity{
  position: relative;
  background-color: #5e6f7bb0;;
  padding: 2em;
  height: 100%;
  border-top: 1px solid #6e8290d9;
}

.cinco{
  display: flex;
  flex-direction: column;
  width: 20%;
  height: 100vh;
}
.content{
  display: flex;
  width: 80%;
  flex-grow: 1;
  height: 100vh;
  /*background-color: blue;*/
  position: relative;
}

</style>
