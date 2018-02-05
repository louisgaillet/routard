<template>
<li class="flex item-service list__tile list__tile--link list__tile--avatar" 
 v-on:click="show" >
        {{service.name}}
</li>
</template>

<script>
export default {
  name: 'ItemService',
  props: {
      service:Object
  },
  methods:{
    show(){
      this.$emit('show', this.service);
    },
  }
}
</script>


