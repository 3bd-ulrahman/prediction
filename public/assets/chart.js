let cholesterol = [];
let heartRate = [];

predictions.forEach(prediction => {
  cholesterol.push(prediction.serum_cholestoral);
  heartRate.push(prediction.max_heart_rate);
});
// rgb(54, 162, 235)

const data1 = {
  labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
  datasets: [{
    label: 'cholesterol',
    data: cholesterol,
    backgroundColor: [
      'rgba(255, 99, 132, 0.2)',
    ],
    borderColor: [
      'rgb(255, 99, 132)',
    ],
    borderWidth: 1
  }]
};

const config1 = {
  type: 'bar',
  data: data1,
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  },
};

const data2 = {

  labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
  datasets: [{
    label: 'Heart Rate',
    data: heartRate,
    backgroundColor: [
      'rgb(54, 162, 235)',
    ],
    borderColor: [
      'rgb(54, 162, 235)',
    ],
    borderWidth: 1
  }]
};

const config2 = {
  type: 'bar',
  data: data2,
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  },
};

const myChart1 = new Chart(document.getElementById("myChart1"), config1);
const myChart2 = new Chart(document.getElementById("myChart2"), config2);
