<template>
<div>
  <div class="d-flex header">
    <button class="back" @click="back">
      <i aria-hidden="true" class="material-icons icon icon--left theme--dark">arrow_back</i>  
    </button>
    <h2>{{service.name}}</h2>
  </div>
  <div class="content">
    
    <p>{{service.street_number}} {{service.route}} {{service.locality}} </p>
    <p>{{service.phone}}</p>
    <p>{{service.introduction | striphtml}}</p>
    <p>{{service.details | striphtml}}</p>
  </div>
</div>
</template>

<script>
export default {
  name: 'DetailService',
  props: {
      service:Object
  },
  methods:{
    back: function () {
      this.$emit('backDetail');
    }
  }
}
</script>

<style>
.detail-service {
  height: 100vh;
  overflow:scroll;
}
.detail-service .content{
  padding: 13px;
}

.detail-service .header{
  background: #124360;
  color: white;
  padding: 13px;
}
.detail-service .header h2{
  margin: 0;
}

.detail-service .header {
  position: relative;
}

.detail-service .header .back{
    position: absolute;
    top: 0;
    left: 13px;
    height: 100%;
}
</style>
