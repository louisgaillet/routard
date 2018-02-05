<template>
<div>
    <div class="service flex xs12 md4">
        <p>{{service.name}}</p>
        <p>{{service.street_number}} {{service.route}} {{service.locality}} </p>
        <p>{{service.phone}}</p>
        <p>{{service.introduction | striphtml}}</p>
        <p>{{service.details | striphtml}}</p>
    </div>
     <div class="maps flex xs12 md8">
    </div>
</div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'Service',
  data () {
    return {
      service: {},
      errors: []
    }
  },
  created () {
    axios.get(`http://127.0.0.1:8000/api/service/`+this.$route.params.slug)
      .then(response => {
      // JSON responses are automatically parsed.
        this.service = response.data
      })
      .catch(e => {
        this.errors.push(e)
      })
  }
}
</script>
