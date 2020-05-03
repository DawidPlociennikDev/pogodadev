<template>
  <mdb-container>
    <mdb-row>
      <mdb-col sm="4" class="mx-auto mt-4">
        <mdb-card class="card-image h-100" :style="'background-color:' + qualityair.color">
          <div class="text-white h-100 text-center d-flex align-items-center py-5 px-4 h-100">
            <div>
              <div class="card_header">
                <h5 class="light-green-text">
                  <mdb-icon icon="cloud" /> {{ qualityair.title }}</h5>
                <mdb-card-title tag="h3" class="pt-2">
                  <strong style="font-weight: 700;"> {{ params.IJPString }} </strong>
                </mdb-card-title>
              </div>
              <p class="content">
                {{ params.IJPDescription }}
              </p>
              <a :href="qualityair.url" class="link_button">
                <mdb-btn color="light-green">
                  <mdb-icon icon="clone left" />  Czytaj więcej
                </mdb-btn>
              </a>
            </div>
          </div>
        </mdb-card>
      </mdb-col>
      <mdb-col sm="4" class="mx-auto mt-4">
        <mdb-card class="card-image h-100" :style="'background-color:' + temperature.color">
          <div class="text-white h-100 text-center d-flex align-items-center py-5 px-4">
            <div>
              <div class="card_header">
                <h5 class="deep-orange-text">
                  <mdb-icon icon="thermometer-three-quarters" /> {{ temperature.title }}</h5>
                  <mdb-card-title tag="h3" class="pt-2">
                    <strong style="font-weight: 700;">{{ params.Temperature }}&deg;C</strong>
                  </mdb-card-title>
              </div>
              <p class="content">
                {{ temperature.short_desc }}
              </p>
              <a :href="temperature.url" class="link_button">
                <mdb-btn color="deep-orange">
                  <mdb-icon icon="clone left" />  Czytaj więcej
                </mdb-btn>
              </a>
            </div>
          </div>
        </mdb-card>
      </mdb-col>
      <mdb-col sm="4" class="mx-auto mt-4">
        <mdb-card class="card-image h-100" :style="'background-color:' + humidity.color">
          <div class="text-white h-100 text-center d-flex align-items-center py-5 px-4">
            <div>
              <div class="card_header">
                <h5 class="light-blue-text">
                  <mdb-icon icon="tint" /> {{ humidity.title }}</h5>
                <mdb-card-title tag="h3" class="pt-2">
                  <strong style="font-weight: 700;">{{ params.Humidity }}%</strong>
                </mdb-card-title>
              </div>
              <p class="content">
                {{ humidity.short_desc }}
              </p>
              <a :href="humidity.url" class="link_button">
                <mdb-btn color="light-blue">
                  <mdb-icon icon="clone left" />  Czytaj więcej
                </mdb-btn>
              </a>
            </div>
          </div>
        </mdb-card>
      </mdb-col>
    </mdb-row>
  </mdb-container>
</template>

<style>
  .links {
    color: white;
    z-index: 99999999999999;
  }
  .card_header {
    height: 100px;
  }
  .content {
    height: 100px;
  }
  .rgba-black-strong, .rgba-black-strong:after {
      background-color: rgba(0,0,0,0.8);
  }
  .air_bg, .temp_bg, .wet_bg {
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>

<script>
import { mdbContainer, mdbRow, mdbCol, mdbCard, mdbCardImage, mdbCardHeader, mdbCardBody, mdbCardTitle, mdbCardText, mdbCardFooter, mdbCardUp, mdbCardAvatar, mdbCardGroup, mdbBtn, mdbView, mdbMask, mdbIcon } from 'mdbvue';
import axios from 'axios';
const api = 'http://api.looko2.com/?method=GetLOOKO&id=5CCF7F0C2E8B&token=1570445090';
const apiQualityAir = 'http://dawidplociennikdev.przedprojekt.com/admin/parametrs/api_startpage/1';
const apiTemperature = 'http://dawidplociennikdev.przedprojekt.com/admin/parametrs/api_startpage/2';
const apiHumidity = 'http://dawidplociennikdev.przedprojekt.com/admin/parametrs/api_startpage/3';

export default {
  name: 'HelloWorld',
  data() {
      return {
          params: [],
          qualityair: [],
          temperature: [],
          humidity: []
      }
  },
  async created() {
    try {
        const res = await axios.get(api);
        this.params = res.data;
        
        const resQualityAir = await axios.get(apiQualityAir);
        this.qualityair = resQualityAir.data;
        const resTemperature = await axios.get(apiTemperature);
        this.temperature = resTemperature.data;
        const resHumidity = await axios.get(apiHumidity);
        this.humidity = resHumidity.data;
    } catch(err) {
        console.log(err);
    }
  },
  props: {
    msg: String
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
