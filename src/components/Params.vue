<template>
    <div class="container">
        <div class="paramsPage">
            <a @click="$router.go(-1)" title="Powrót"><mdb-icon  icon="chevron-left" /> powrót</a>
            <hr>
            <h3 class="header">{{ param.title }}</h3>
            <div>
                Aktualna wartość dla tego parametru wynosi: <span class="special ml-3">{{ param.value }} </span>{{ param.unit }}
            </div>
            <div v-if="param.regular">
                Norma dla tego parametru wynosi: <span class="special ml-3">{{ param.regular }} </span>{{ param.unit }}
            </div>
            <div class="mt-4">
                {{ param.short_desc }}
            </div>
            <hr>
            <div v-if="renderChart && id != 1">
                <ChartComp :lineColor="color" />
            </div>
        </div>
    </div>
</template>

<style>
.container {
  margin-top: 45px;
  padding-bottom: 45px;
}
div {
    font-size: 1.2rem;
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
     font-size: 1.5rem;
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

export default {
    name: 'Params',
    data() {
        return {
            id: this.$route.params.id,
            param: [],
            color: '',
            renderChart: Boolean
        }
    },
    async created() {
        this.renderChart = false;
        const apiParam = 'https://dawidplociennikdev.przedprojekt.com/admin/parametrs/apiOne/'+this.id;
        try {
            const res = await axios.get(apiParam);
            this.param = res.data;
            this.color = res.data.color;
            this.renderChart = true;
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
