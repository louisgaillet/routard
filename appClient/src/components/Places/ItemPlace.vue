<template>
<li class="flex item-place list__tile list__tile--link list__tile--avatar" >
    <router-link :to="{ name: 'place', params: { slug: place.slug }}">
        {{place.name}}
    </router-link>
</li>
</template>

<script>
export default {
  name: 'ItemPlace',
  props: {
      place:Object
  }
}
</script>