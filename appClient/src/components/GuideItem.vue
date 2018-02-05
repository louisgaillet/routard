<template>
<div class="layout row wrap">
  <div class="places flex xs12 md4 left-section">
    <Search v-on:searchChild="searchParent"> </Search>
    <ul class="list--two-line left-list">
       <transition-group name="list" tag="p">
        <ItemPlace 
          :key="index"
          v-for="(place,index) in filteredList"
          :place="place"
          class ="list-item" 
          >
        </ItemPlace>
        </transition-group>
    </ul>
  </div>
  <div class="maps flex xs12 md8">
    <gmap-map
      :center="{lat:parseInt(filteredList[0].lat), lng:parseInt(filteredList[0].lng)}"
      :zoom="7"
      map-type-id="terrain"
      style="width: 100%; height: 100vh"
  >
    <gmap-marker 
        :key="index"
        v-for="(m, index) in filteredList"
        :position="{lat:parseFloat(m.lat), lng:parseFloat(m.lng)}"
        :clickable="true"
        :draggable="false"
        @click="center=m.position"
      ></gmap-marker>
  </gmap-map>
  </div>
</div>
</template>

<script>
import axios from 'axios';
import ItemPlace from '@/components/Places/ItemPlace';
import Search from '@/components/Search/Search';

export default {
  name: 'GuideItem',
  components: {ItemPlace,Search },
  data () {
    return {
      places:[],
      errors: [],
      filteredList: [],
      search: '',
    }
  },
  methods: {
    searchParent (value) {
      var places = this.places;
      let newPlaces =  places.filter(function (el) {
        return el.name.toLowerCase().indexOf(value.toLowerCase()) > -1;
      })
      this.filteredList = newPlaces;
    },
  },
  mounted () {
    axios.get(`http://127.0.0.1:8000/api/guide/`+this.$route.params.slug)
      .then(response => {
      // JSON responses are automatically parsed.
        this.places = response.data;
        this.filteredList = response.data;
      })
      .catch(e => {
        this.errors.push(e)
      })
  }
}
</script>

<style>
.list-item {
  margin-right: 10px;
}
.list-enter-active, .list-leave-active {
  transition: all 1s;
}
.list-enter, .list-leave-to /* .list-leave-active below version 2.1.8 */ {
  opacity: 0;
  transform: translateY(30px);
}
</style>

