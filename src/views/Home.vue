<template>
  <div class="home">
    <HelloWorld/>
  </div>
</template>

<script>
import { mdbBtn, mdbBtnFixed, mdbBtnFixedItem, mdbBtnGroup, mdbIcon } from 'mdbvue';
// @ is an alias to /src
import HelloWorld from '@/components/HelloWorld.vue'

export default {
  name: 'Home',
  components: {
    HelloWorld,
    mdbBtn,
    mdbBtnFixed,
    mdbBtnFixedItem,
    mdbBtnGroup,
    mdbIcon
  }
}
</script>

<style>
  .home {
    padding: 20px 0;
  }
  ::-webkit-scrollbar {
    width: 0px;
  }

  ::-webkit-scrollbar-track {
    background: #f1f1f1; 
  }

  ::-webkit-scrollbar-thumb {
    background: #888; 
  }

  ::-webkit-scrollbar-thumb:hover {
    background: #555; 
  }
</style>