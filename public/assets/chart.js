let cholesterol = [];
let heartRate = [];

predictions.forEach(prediction => {
  cholesterol.push(prediction.serum_cholestoral);
  heartRate.push(prediction.max_heart_rate);
});

let labels = [];
for (let i = 0; i <= 24; i++) {
  labels.push(i);
}
console.log(labels);

const data1 = {
  labels: labels,
  datasets: [{
    label: 'Oxygen',
    data: cholesterol,
    backgroundColor: [
      'rgba(54, 162, 235)',
    ],
    borderColor: [
      'rgb(54, 162, 235)',
    ],
    borderWidth: 1
  }]
};

const config1 = {
  type: 'line',
  data: data1,
  options: {
    responsive: true,
    interaction: {
      intersect: false,
    },
    scales: {
      x: {
        display: true,
        title: {
          display: true
        }
      },
      y: {
        display: true,
        title: {
          display: true,
          text: 'Value'
        },
        suggestedMin: 0,
        suggestedMax: 100
      }
    }
  },
};

const data2 = {

  labels: labels,
  datasets: [{
    label: 'Heart Rate',
    data: heartRate,
    backgroundColor: [
      'rgba(255, 99, 132)',
    ],
    borderColor: [
      'rgba(255, 99, 132)',
    ],
    borderWidth: 1
  }]
};

const config2 = {
  type: 'line',
  data: data2,
  options: {
    responsive: true,
    interaction: {
      intersect: false,
    },
    scales: {
      x: {
        display: true,
        title: {
          display: true
        }
      },
      y: {
        display: true,
        title: {
          display: true,
          text: 'Value'
        },
        suggestedMin: 0,
        suggestedMax: 500
      }
    }
  },
};

const myChart1 = new Chart(document.getElementById("myChart1"), config1);
const myChart2 = new Chart(document.getElementById("myChart2"), config2);
