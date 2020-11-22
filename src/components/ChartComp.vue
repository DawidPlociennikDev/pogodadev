
<template>
  <div>
    <GChart
      type="LineChart"
      :data="chartData"
      :options="chartOptions"
    />
  </div>
</template>

<style>
  .chart_title {
     text-align: center;
     color: #42b983;
     padding-bottom: 30px;
     font-weight: 700;
  }
</style>

<script>
import { GChart } from 'vue-google-charts'
import axios from 'axios';

export default {
  components: {
    GChart
  },
  props: {
    lineColor: String
  },
  data () {
    return {
      id: this.$route.params.id,
      param: [],
      chartData: [
        ["Miesiąc", "Parametr"],
      ],
      chartOptions: {
        legend: 'none',
        colors: [this.lineColor],
        pointSize: 10,
        height: 400
      },
      // chartData: [
      //   ['Miesiąc', 'PM 1'],
      //   ['Styczeń', 6],
      //   ['Luty', 4],
      //   ['Marzec', 5],
      //   ['Kwiecień', 2],
      //   ['Maj', 2],
      //   ['Czerwiec', 1],
      //   ['Lipiec', 0],
      //   ['Sierpień', 0],
      //   ['Wrzesień', 1],
      //   ['Październik', 1],
      //   ['Listopad', 3],
      //   ['Grudzień', 7],
      // ],
    }
  },
  async created() {
    const apiParam = 'https://dawidplociennikdev.przedprojekt.com/admin/parametrs/apiHistoryParam/'+this.id;
    try {
        const res = await axios.get(apiParam);
        this.param = res.data.reverse();
        this.param.forEach(element => {
          var array = [element.date, parseFloat(element.value)];
          this.chartData.push(array);
        });
    } catch(err) {
        console.log(err);
    }
  }
}
</script>