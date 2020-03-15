
<template>
  <div class="container">
    <h4 class="text-center mb-3">Zmiany jakości powietrza w roku <span class="chart_title">2019</span></h4>
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

export default {
  components: {
    GChart
  },
  data () {
    return {
      // Array will be automatically processed with visualization.arrayToDataTable function
      chartData: [
        ['Miesiąc', 'PM 1'],
        ['Styczeń', 6],
        ['Luty', 4],
        ['Marzec', 5],
        ['Kwiecień', 2],
        ['Maj', 2],
        ['Czerwiec', 1],
        ['Lipiec', 0],
        ['Sierpień', 0],
        ['Wrzesień', 1],
        ['Październik', 1],
        ['Listopad', 3],
        ['Grudzień', 7],
      ],
      chartOptions: {
        chart: {
          title: 'Jakość powietrza',
          subtitle: 'Jakość powietrza w roku: 2019',
        }
      }
    }
  }
}
</script>