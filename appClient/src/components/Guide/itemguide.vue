<template>
<div class=" flex xs12 sm6 md3 item-guide" >
    <router-link :to="{ name: 'GuideItem', params: { slug: slug }}">
        <img v-bind:src=newpicture>
        <div class="wrapper-title">
            <h2>{{name}}</h2>
        </div>
    </router-link>
</div>
</template>

<script>
export default {
  name: 'ItemGuide',
  props: {
      name : {type:String},
      picture : {type:String},
      slug : {type:String},
      newpicture : {type:String}
  },
  beforeMount(){
      let picture = 'http://127.0.0.1:8000/images/'+this.picture;
      this.newpicture = picture;
  }
}
</script>

<style>
.item-guide{
    position: relative;
    margin: 26px auto;
}

.item-guide img{
    width: 100%;
    height: 100%;
}
.item-guide .wrapper-title {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 98%;
    background-color: rgba(0,0,0,0.3);
}

.item-guide h2{
    position: absolute;
    top: calc(50% - 2rem);
    width: 100%;
    text-align: center;
    color: white;
    font-size: 4rem;
}

</style>
