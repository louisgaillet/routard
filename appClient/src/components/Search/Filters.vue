<template>
<div v-if="category.id" 
@click="action(category.id)"
v-bind:class="[category.slug, { active: isActive }]" class="item-filter">
  {{category.name}}
</div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'Filters',
  data () {
    return {
      isActive: true
    }
  },
  methods:{
    action  (id) {
      this.isActive = !this.isActive;
      if(this.isActive){
        this.$emit('filter', id, true);        
      }
      else{
        this.$emit('filter', id, false)
      }   
    },
    preserve (id){
       if(this.isActive){
        this.$emit('filter', id, true);        
      }
      else{
        this.$emit('filter', id, false)
      }  
    }
  },
  props: {
      category:Object
  }
}
</script>

<style>

.item-filter{
  color: white;
  font-weight: bold;
  padding: 3px 10px;
  border-radius: 13px;
  margin: 11px;
  opacity: 0.65;
  transition: all .5s ease;
  cursor: pointer;
}

.item-filter.active{
  opacity: 1;
}

.item-filter.ou-dormir{
 background-color: #134563;
}

.item-filter.ou-manger{
background-color: #3fa044;
}

.item-filter.a-voir{
  background-color: #f55932;
}
</style>

