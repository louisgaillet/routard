<template>
<div v-bind:class="{ active: isActive }" class="search">
  <button type="button" class="btn btn--icon btn--large" data-ripple="true" style="" @click="isActive = !isActive"><div class="btn__content"><i aria-hidden="true" class="material-icons icon">search</i></div></button>
  <div class="wrapper-input">
  <input type="search" class="search_bar" placeholder="Rechercher" v-model="value" v-on:keyup="searchChild">
  </div>
</div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'Search',
  data () {
    return {
      value: '',
      isActive : false
    }
  },
   methods: {
    searchChild: function () {
      this.$emit('searchChild', this.value)
    }
  },
}
</script>

<style>
.wrapper-input{
     width: 80%;
     display: inline-block;
}
.search_bar{
    border: 2px solid rgba(0,0,0,.12);
    border-radius: 11px;
    width: 0;
    padding: 3px 13px;
    opacity: 0;
    visibility: hidden;
    transition : all .5s ease;
}

.active .search_bar{
  transform: scale(1);
  opacity: 1;
  visibility: visible;
  width: 100%;
}

.search_bar:focus,.search_bar:active{
  outline: none !important;
}
</style>

