const xValues = ["informatika", "sistem informasi", "teknologi informasi"];
const yValues = [334, 333, 333];
const barColors = [
  "#00FFFF",
  "#191970",
  "#FFD500",
];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Data Mahasiswa Institut Teknologi Tangerang Selatan"
    }
  }
});

// READER
var ctx = document.getElementById('readingChart').getContext('2d');
var readingChart = new Chart(ctx, {
    type: 'line', // Jenis grafik line chart
    data: {
        labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30'], 
        datasets: [{
            label: 'Avg Time Read (hours)',
            data: [1.5, 2, 1.8, 2.3, 2.1, 1.9, 2.4, 2, 2.5, 2.1, 2.6, 1.7, 2, 1.8, 2.3, 2, 2.5, 1.6, 2.2, 2.4, 2.1, 2.5, 2.2, 2.1, 2, 1.8, 2.4, 2.1, 2.3, 2.5], 
            borderColor: 'rgba(75, 192, 192, 1)',
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderWidth: 2,
            fill: true,
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true, 
                ticks: {
                    stepSize: 0.5 
                }
            }
        },
        plugins: {
            legend: {
                display: false 
            },
            tooltip: {
                mode: 'index',
                intersect: false
            }
        }
    }
});
