<template>
  <div class="params page">
    <Params/>
    
  </div>
</template>

<script>
import { mdbBtn, mdbBtnFixed, mdbBtnFixedItem, mdbBtnGroup, mdbIcon } from 'mdbvue';
// @ is an alias to /src
import Params from '@/components/Params.vue'

export default {
  name: 'ParamsPage',
  components: {
    Params,
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
</style>