<template>
  <div>
    <canvas id="planet-chart"></canvas>
  </div>
</template>
<script>
import Chart from 'chart.js/dist/chart'
import planetChartData from '../../../data/planets'
export default {
  name: 'PlanetChart',
  data() {
    return {
      planetChartData
    }
  },
  mounted() {
    const ctx = document.getElementById('planet-chart')
    new Chart(ctx, this.planetChartData)
  }

}
</script>
<style lang="">
  
</style>