<template>
  <div class="params page">
    <!-- <Params/> -->
    <mdb-container>
      <mdb-row>
        <mdb-col sm="4" lg="6" class="mx-auto mt-4" v-for="item in paramsMenu" :key="item.id">
          <mdb-card class="card-image h-100 air_bg" :style="'background-color:' + item.color">
            <div class="text-white h-100 text-center d-flex align-items-center rgba-black-strong py-5 px-4 h-100">
              <div class="w-100">
                <div class="card_header">
                  <mdb-card-title tag="h3" class="pt-2">
                      <router-link :to="`/params/` + item.id" class="link_button">
                          <strong> {{ item.title }} </strong>
                      </router-link>
                  </mdb-card-title>
                </div>
                <p class="content" v-if="item.short_desc != ''">
                  {{ item.short_desc }}
                </p>
                <router-link :to="`/params/` + item.id" class="link_button">
                  <mdb-btn color="light-blue" :style="'background-color:' + item.color + '!important'">
                    <mdb-icon icon="clone left" />  Czytaj więcej
                  </mdb-btn>
                </router-link>
              </div>
            </div>
          </mdb-card>
        </mdb-col>
      </mdb-row>
    </mdb-container>
  </div>
</template>

<script>
import { mdbContainer, mdbRow, mdbCol, mdbCard, mdbCardImage, mdbCardHeader, mdbCardBody, mdbCardTitle, mdbCardText, mdbCardFooter, mdbCardUp, mdbCardAvatar, mdbCardGroup, mdbBtn, mdbView, mdbMask, mdbIcon } from 'mdbvue';

// @ is an alias to /src
import Params from '@/components/Params.vue'
import axios from 'axios';
const apiParams = 'https://dawidplociennikdev.przedprojekt.com/admin/parametrs/api';

export default {
  name: 'ParamsPage',
  data() {
      return {
          paramsMenu: []
      }
  },
  async created() {
    try {
        const res = await axios.get(apiParams);
        this.paramsMenu = res.data;
    } catch(err) {
        console.log(err);
    }
  },
  components: {
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

<style>
  .links {
    color: white;
    z-index: 99999999999999;
  }
  .card_header {
    height: 100px;
  }
  .content {
    min-height: 100px;
    height: 100% !important;
  }
  .rgba-black-strong, .rgba-black-strong:after {
      background-color: rgba(0,0,0,0.8);
  }
  .air_bg, .temp_bg, .wet_bg {
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  .air_bg {
    background-color: #00f;
  }
  .temp_bg {
    background-color: #f00;
  }
  .wet_bg {
    background-color: #00f;
  }
</style>