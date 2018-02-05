<template>
  <div id="app" class="application theme--light">
    <div class="application--wrap">
      <nav class="toolbar toolbar--fixed theme--dark ">
        <div class="nav toolbar__content ">
          <div class="btn__content" @click="goBack"><i aria-hidden="true" class="material-icons icon icon--left theme--dark">arrow_back</i>
        </div>
        </div>
      </nav>
      <transition name="fade">
        <router-view/>
      </transition>
    </div>
  </div>
</template>

<script>
export default {
  name: 'App',
  methods: {
    goBack () {
      window.history.length > 1
        ? this.$router.go(-1)
        : this.$router.push('/')
    }
  }
}
</script>

<style>

a, a:hover{
  text-decoration: none;
}
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  padding-top: 65px; 
}

.application .theme--dark.toolbar, .theme--dark .toolbar{
  box-shadow: none;
}
.toolbar, .toolbar__content{
  height: 65px;
}

.fade-enter-active, .fade-leave-active {
  transition: opacity .5s
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0
}

.left-section{
  background-color: white;
  height: 100vh;
  overflow: scroll;
  border-right: 1px solid rgba(0,0,0,.12);
}

.left-list li {
  border-bottom: 1px solid rgba(0,0,0,.12);
}

.left-list li a {
  color:#212121;
}





</style>
