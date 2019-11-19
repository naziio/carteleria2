<template>
  <div class="content">
      <div class="title">
          <span class="title-sty">Map</span>
     </div>
      <div id="map" ref="leaflet"></div>
  </div>
</template>

<script>
    import Bus from '../EventBus';
    import * as Vue2Leaflet from 'vue2-leaflet' // VALID
    import {LMap, LTileLayer, LMarker} from 'vue2-leaflet'

    export default {
      props:['state'],
      data(){
        return{
          map: null,
          tileLayer: null,
          layers: [],
          lat: '',
          lng: '',
        }
      },

      created() {

      },
      mounted() {
        this.initMap();
        this.loadCoord();
      },

      methods:{    
        initMap() {

            this.map = L.map('map').fitWorld();
            // var map = L.map('map').setView([-65.466863,-62.6201877], 4);

            L.tileLayer('http://tile.osm.org/{z}/{x}/{y}.png').addTo(this.map);

            this.map.touchZoom.disable();
            this.map.doubleClickZoom.disable();
            this.map.scrollWheelZoom.disable();
            this.map.boxZoom.disable();
            this.map.keyboard.disable();
            this.map.dragging.disable();

            // this.map.locate().
            //     on('locationfound', (e)=> {
            // var marker = L.marker([e.latitude, e.longitude]).bindPopup('Your are here :)').addTo(this.map);
            // var marker = L.marker([this.weather.latitude, this.weather.longitude]).bindPopup('Your are here :)').addTo(this.map);
            this.map.setView([this.lat, this.lng], 5);
                  // var marker = L.marker([-65.466863,-62.6201877]).bindPopup('Your are here :)').addTo(this.map);
                  var marker = L.marker([this.lat, this.lng]).bindPopup('Your are here :)').addTo(this.map);
                // });

            $(".leaflet-control-zoom").css("visibility", "hidden");
        },

        loadCoord(){
            axios.get('/getWeatherStation').then((response) => {
              this.lat = response.data.data.latitude
              this.lng = response.data.data.longitude
            });
        },
      },        

    }
</script>

<style scoped>

 .title{
    color:white;
    position: absolute;  
    padding:2em;
    z-index: 10000;
  }
  .title-sty{
    font-family: FuturaStdBook;
    font-size: 25px;
  }
  #map {
    height: 100%;
    width: 100%;

  }

  .content{
    background-color: #9E9E9E;

  }
</style>
