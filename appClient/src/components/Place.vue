<template>
<div class="layout row wrap">
    <div class="places flex xs12 md4 left-section">

      <transition name="slide-fade">
        <div class="detail-service" v-if="actualService">
          <DetailService
            v-bind:service="actualService"
            v-on:backDetail="backDetail"
          > </DetailService>
        </div>
      </transition>

      <transition name="slide-fade">
        <div class="list-services" v-if="!actualService">
          <div class="left-header">
          <Search v-on:searchChild="searchParent"> </Search>
          </div>
          <ul class="list--two-line left-list">
            <div class="filter">
              <ul class="flex">
                <filters 
                  ref="filters"
                  v-for="(category, index) in categories"
                  :key="index"
                  v-bind:category="category"
                  v-on:filter="filter">
                </filters>
              </ul>
            </div>
            <ItemService 
              v-for="service in filteredList"
              :key="service.id"
              v-bind:class="categories[service.category_id].slug"
              :service="service"
              v-on:show="show"
              >
            </ItemService>
          </ul>
        </div>
      </transition>

    </div>
     <div class="maps flex xs12 md8">
       <gmap-map
          ref="gmap"
          :center="{lat:parseFloat(filteredList[0].lat), lng:parseFloat(filteredList[0].lng)}"
          :zoom="13"
          map-type-id="terrain"
          @dragend="getBounds"
          @dblclick="getBounds"
          style="width: 100%; height: 100vh"
      >
      
      <gmap-marker 
        v-for="m in filteredList"
        :key="m.id"
        :position="{lat:parseFloat(m.lat), lng:parseFloat(m.lng)}"
        :clickable="true"
        :animation = 2
        :draggable="false"
        :icon="apiUrl+categories[m.category_id].picture"
        @click="show(m)"
      ></gmap-marker>
      </gmap-map>
      
    </div>
</div>
</template>

<script>
import axios from 'axios';
import ItemService from '@/components/Services/ItemService';
import DetailService from '@/components/Services/DetailService';
import Search from '@/components/Search/Search';
import Filters from '@/components/Search/Filters';


export default {
  name: 'Place',
  components: {ItemService, Search, DetailService, Filters},
  data () {
    return {
      services: [],
      filteredList: [],
      actualService : '',
      categories:'',
      apiUrl: 'http://127.0.0.1:8000/images/',
      bounds:{},
      errors: [],
      isActive : false
    }
  },

  methods: {
    searchParent (value) {
      var services = this.services;
      let newServices =  services.filter(function (el) {
        return el.name.toLowerCase().indexOf(value.toLowerCase()) > -1;
      })
      this.filteredList = newServices;
    },
    show (item) {
      this.actualService = item;
    },
    getBounds () {
      this.bounds = this.$refs.gmap.$mapObject.getBounds();
      this.updateData();
    },
    backDetail(){
      this.actualService = '';
    },
    filter(id, bool){
      var self = this;
      var items = this.services;
     if(bool === true){
				var result = Object.keys(items).map(function(key) {
          if(items[key].category_id === id){
            if(!self.filteredList.includes(items[key])){
              self.filteredList.push(items[key]);  
            }
          }
        })
      }else{
        var result = self.filteredList.filter(function (item, index) {
          return item.category_id != id;
      });

      self.filteredList = result;
      }
    },
    updateData(){
      let lng1 = this.bounds.b.b;
      let lng2 = this.bounds.b.f;
      let lat1 = this.bounds.f.b;
      let lat2 = this.bounds.f.f;
      axios.get('http://localhost:8000/api/services?lng1='+lng1+`&lng2=`+lng2+`&lat1=`+lat1+`&lat2=`+lat2)
      .then(response => {
        this.services = response.data;
        this.filteredList = response.data;
        this.$refs.filters.forEach(function (value) {
          if(value.$props.category)
            value.preserve(value.$props.category.id);
      });
      })
      .catch(e => {
        this.errors.push(e)
      })
    }
  },

  mounted () {
    
    axios.get(`http://127.0.0.1:8000/api/place/`+this.$route.params.slug)
      .then(response => {
        this.services = response.data;
        this.filteredList = response.data;
      })
      .catch(e => {
        this.errors.push(e)
      })
    axios.get(`http://localhost:8000/api/categories`)
      .then(response => {
        var categories = [];
        var doubles = response.data.map(function(item) {
        categories[item.id] =  item;
      });
      
        this.categories = categories;
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

.slide-fade-enter-active {
  transition: all .9s ease;
}
.slide-fade-leave-active {
  transition: all .8s cubic-bezier(1.0, 0.5, 0.8, 1.0);
}
.slide-fade-enter, .slide-fade-leave-to
/* .slide-fade-leave-active below version 2.1.8 */ {
  transform: translateX(10px);
  opacity: 0;
}


.filter{
  margin: 13px auto;
}
.filter .flex{
  display: flex;
}

.list-services{
    background: #fbf7f7;
}
.item-service{
  width: 95%;
  margin: 6px auto;
  background: white;
}
.item-service.ou-dormir{
  border-left: 3px solid #134563;
}

.item-service.ou-manger{
  border-left: 3px solid #3fa044;
}

.item-service.a-voir{
  border-left: 3px solid #f55932;
}


</style>