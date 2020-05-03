<template>
    <div class="container">
        <div class="paramsPage">
            <h1 class="header">PM 2.5</h1>
            <h4>
                Aktualny stan powietrza w okolicy wynosi: <span class="special ml-3">0 </span>μg/m3
            </h4>
            <h4>
                Norma dla tego parametru wynosi: <span class="special ml-3">20 </span>μg/m3
            </h4>
            <h4 class="mt-4">
                Jakość powietrza jest dobra. Zanieczyszczenia powietrza nie stanowią zagrożenia. Warunki idealne na aktywności na zewnątrz.
            </h4>
            <hr>
            <ChartComp />
        </div>
    </div>
</template>

<style>
.container {
  margin-top: 45px;
  padding-bottom: 45px;
}

.paramsPage {
    background: rgba(255,255,255, .7);
    padding: 30px;
    position: relative;
    opacity: 1;
    text-align: left;
    border-radius: 3px;
 }

 .header {
     text-align: center;
     color: #42b983;
     padding-bottom: 30px;
     font-weight: 700;
 }

 .special {
     font-weight: 700; 
     color: #42b983;
     font-size: 150%;
 }

.small {
    max-width: 600px;
    margin:  150px auto;
  }
</style>

<script>
import { mdbContainer, mdbRow, mdbCol, mdbCard, mdbCardImage, mdbCardHeader, mdbCardBody, mdbCardTitle, mdbCardText, mdbCardFooter, mdbCardUp, mdbCardAvatar, mdbCardGroup, mdbBtn, mdbView, mdbMask, mdbIcon } from 'mdbvue';

import ChartComp from '@/components/ChartComp.vue'

import axios from 'axios';

const api = 'https://api.looko2.com/?method=GetLOOKO&id=5CCF7F0C2E8B&token=1570445090';

export default {
  name: 'Params',
  data() {
      return {
          params: []
      }
  },
  async created() {
    try {
        const res = await axios.get(api);
        this.params = res.data;
        console.log(this.params);
    } catch(err) {
        console.log(err);
    }
  },
  props: {
    msg: String
  },
	components: {
        ChartComp,
		mdbContainer,
		mdbRow,
		mdbCol,
		mdbCard,
		mdbCardImage,
		mdbCardHeader,
		mdbCardBody,
		mdbCardTitle,
		mdbCardText,
		mdbCardFooter,
		mdbCardUp,
		mdbCardAvatar,
		mdbCardGroup,
		mdbBtn,
		mdbView,
		mdbMask,
		mdbIcon
    }
}
</script>
