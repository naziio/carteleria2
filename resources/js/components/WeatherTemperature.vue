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
  height: 100%;
  flex: 1;
  padding-right: 2em;
  background: rgba(0,0,0,0.12);

}

.activity{
  position: relative;
  background: rgba(0,0,0,0.22);
  height: 100%;
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
  position: relative;
  overflow:hidden;
}

</style>
