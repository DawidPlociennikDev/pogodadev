<template>
  <mdb-container>
    <mdb-row>
      <mdb-col sm="4" class="mx-auto mt-4" v-for="item in links" :key="item.id">
        <mdb-card class="card-image h-100 air_bg">
          <div class="text-white h-100 text-center d-flex align-items-center rgba-black-strong py-5 px-4 h-100">
            <div>
              <div class="card_header">
                <mdb-card-title tag="h3" class="pt-2">
                    <a :href="item.url" class="link_button">
                        <strong> {{ item.title }} </strong>
                    </a>
                </mdb-card-title>
              </div>
              <br>
              <p class="content">
                {{ item.short_desc }}
              </p>
              <a :href="item.url" class="link_button">
                <mdb-btn color="light-blue">
                  <mdb-icon icon="clone left" />  Przejdź do strony
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

<script>
import { mdbContainer, mdbRow, mdbCol, mdbCard, mdbCardImage, mdbCardHeader, mdbCardBody, mdbCardTitle, mdbCardText, mdbCardFooter, mdbCardUp, mdbCardAvatar, mdbCardGroup, mdbBtn, mdbView, mdbMask, mdbIcon } from 'mdbvue';
import axios from 'axios';

const api = 'http://dawidplociennikdev.przedprojekt.com/admin/links/api';

export default {
    name: 'Links',
    data() {
        return {
            id: this.$route.params.id,
            links: []
        }
    },
    async created() {
      try {
          const res = await axios.get(api);
          this.links = res.data.reverse();
          console.log(this.links);
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