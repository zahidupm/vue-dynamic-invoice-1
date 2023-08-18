<script setup>
import { ref, onMounted} from "vue";
const newItem = ref(16)

let chart = null

const dataset = [
    300, 50, 100
]

const data = {
  labels: [
    'Red',
    'Blue',
    'Yellow'
  ],
  datasets: [{
    label: 'My First Dataset',
    data: [300, 50, 100],
    backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(54, 162, 235)',
      'rgb(255, 205, 86)'
    ],
    hoverOffset: 4
  }]
};

const config = {
  type: 'pie',
  data: data,
};

onMounted(() => {
  const ctx = document.getElementById('chart');
  chart = new Chart(ctx, config);
})

function updateCharts(){
  dataset.push(newItem.value)
  chart.data.datasets[0].data = dataset
  chart.update()
}

</script>

<template>
 <div class="max-auto w-[400px] bg-gray-400">
   <canvas id="chart">
   </canvas>
 </div>
  <div class="mt-20">
    <input type="text" name="" id="" v-model="newItem" class="py-4">
    <button @click="updateCharts()" class="ml-2 bg-blue-500 text-white font-bold py-2 px-4 rounded">
      Button
    </button>
  </div>
</template>

<style scoped>

</style>
