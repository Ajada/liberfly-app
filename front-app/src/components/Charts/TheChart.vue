<template>
  <div>
    <div class="flex justify-end mb-4">
      <ButtonChart @click="toggleChartType">
        <svg v-if="chartType === 'bar'" width="25" height="30" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z"></path>
          <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z"></path>
        </svg>
        <svg v-else fill="none" width="25" height="30" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"></path>
        </svg>
      </ButtonChart>
    </div>
    <div class="chart">
      <template v-if="chartType === 'bar'">
        <Bar
          class="w-50"
          id="chart"
          :data="chartData"
          :options="chartOptions"
          :width="400"
          :height="450"
          ref="chart"
        />
      </template>
      <template v-else>
        <Doughnut
          class="w-50"
          id="chart"
          :data="chartData"
          :options="chartOptions"
          :width="400"
          :height="450"
          ref="chart"
        />
      </template>
    </div>
  </div>
</template>

<script>
import { Bar, Doughnut } from 'vue-chartjs'
import { Chart as ChartJS, Title, Tooltip, Legend, BarController, CategoryScale, LinearScale, ArcElement, BarElement } from 'chart.js'
import ButtonChart from '@/components/BaseButtons/ButtonChart.vue'

ChartJS.register(Title, Tooltip, Legend, BarController, CategoryScale, LinearScale, ArcElement, BarElement)

const colors = ['#66CC99', '#FF6666', '#3399FF', '#FFCC66', '#FF99CC', '#CC99FF', '#99FFCC', '#CCCCFF', '#804eb2']

export default {
  name: 'ChartComponent',
  components: {
    Bar,
    Doughnut,
    ButtonChart
    //   CardStatusVue,
    //   Filter
  },
  props: {
    labelsChart: [Array, Object],
    dataChart: [Array, Object]
  },
  data () {
    return {
      chartData: {
        labels: ['FICHA', 'CHEQUE', 'C. DEBITO', 'C. CREDITO', 'BOLETO', 'PIX', 'DEPOSITO', 'TRANSFERENCIA'],
        datasets: [
          {
            label: 'Movimentação',
            backgroundColor: colors,
            borderColor: colors,
            borderWidth: 1,
            data: [12, 11, 10, 19, 9, 12, 9, 20]
          }
        ]
      },
      chartOptions: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          tooltip: {
            callbacks: {
              label: function (context) {
                return context.formattedValue.toLocaleString('pt-BR', {
                  style: 'currency',
                  currency: 'BRL',
                  minimumFractionDigits: 2
                  // maximumSignificantDigits: 2
                })
              }
            },
            bodyFont: {
              size: 12
            }
          }
        },
        scales: {
          y: {
            beginAtZero: true,
            ticks: {
              callback: (val) => {
                return val.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' })
              }
            }
          }
        }
      },
      chartType: 'bar',
      labelColors: colors,
      filter: false
    }
  },
  watch: {
    chartType (newType) {
      if (newType === 'doughnut') {
        this.chartData.datasets[0].backgroundColor = colors
        this.chartData.datasets[0].borderColor = '#0000007c'
      } else {
        this.chartData.datasets[0].backgroundColor = colors
        this.chartData.datasets[0].borderColor = colors
      }
      this.refreshChart()
    },
    labelsChart (newLabels) {
      this.updateChartData()
    },
    dataChart (newData) {
      this.updateChartData()
    }
  },
  methods: {
    toggleChartType () {
      this.chartType = this.chartType === 'bar' ? 'doughnut' : 'bar'
    },
    updateChartData () {
      this.chartData = {
        labels: this.labelsChart,
        datasets: [
          {
            label: 'Total',
            backgroundColor: colors,
            borderColor: colors,
            borderWidth: 1,
            data: this.dataChart
          }
        ]
      }
      this.refreshChart()
    },
    refreshChart () {
      this.$nextTick(() => {
        const chart = this.$refs.chart
        if (chart && chart.chart) { chart.chart.update() }
      })
    }
  }
}
</script>

<style scoped>
.chart {
  margin: 1rem auto 1rem;
  width: min(50vw, 700px);
  overflow: hidden;
}

@media (max-width: 1000px) {
  .chart {
    width: 70vw;
  }
}

@media (max-width: 650px) {
  .chart {
    width: 95vw;
  }
}
</style>
