<template>
<div>
    <h1>Mes guides</h1>
    <div class="layout row wrap">
      <ItemGuide v-for="guide in guides"
      v-bind:key="guide.id"
      v-bind:name="guide.name"
      v-bind:picture="guide.picture"
      v-bind:slug="guide.slug"
      >
      </ItemGuide>
    </div>
</div>
</template>

<script>
import axios from 'axios';
import ItemGuide from '@/components/Guide/itemguide';

export default {
  name: 'Guide',
  components: {ItemGuide},
  data () {
    return {
      guides: [],
      errors: []
    }
  },
  created () {
    axios.get(`http://127.0.0.1:8000/api/guide`)
      .then(response => {
      // JSON responses are automatically parsed.
        this.guides = response.data
      })
      .catch(e => {
        this.errors.push(e)
      })
  }
}
</script>
