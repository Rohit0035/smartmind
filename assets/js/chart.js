const dataLabels = [
  "May'24", "Jun'24", "Jul'24", "Aug'24", "Sep'24", "Oct'24", "Nov'24", "Dec'24", "Jan'25", "Feb'25", "Mar'25", "Apr'25"
];

const suyugPrices = [8700, 9700, 9800, 11500, 11100, 10800, 10000, 10200, 10600, 10800, 11500, 11600];
const localityPrices = [10500, 10500, 10500, 10500, 10500, 10500, 10500, 10500, 10500, 10500, 10500, 10500];

const ctx = document.getElementById('priceChart').getContext('2d');

const chart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: dataLabels,
    datasets: [
      {
        label: 'Suyug The 1',
        data: suyugPrices,
        borderColor: 'rgba(255, 99, 132, 1)',
        backgroundColor: 'rgba(255, 99, 132, 0.1)',
        fill: true,
        tension: 0.4
      },
      {
        label: 'Sarjapur Road',
        data: localityPrices,
        borderColor: 'rgba(255, 206, 86, 1)',
        backgroundColor: 'rgba(255, 206, 86, 0.1)',
        fill: true,
        tension: 0.4
      }
    ]
  },
  options: {
    responsive: true,
    plugins: {
      legend: { display: false },
      tooltip: { mode: 'index', intersect: false }
    },
    scales: {
      y: {
        title: { display: true, text: 'Rs per sqft' },
        beginAtZero: false
      },
      x: {
        title: { display: true, text: 'Time' }
      }
    }
  }
});

// Fill table data
const tableBody = document.getElementById('priceTableBody');
dataLabels.forEach((month, index) => {
  const row = `<tr>
    <td>${month}</td>
    <td>${suyugPrices[index]}</td>
    <td>${localityPrices[index]}</td>
  </tr>`;
  tableBody.innerHTML += row;
});

function toggleChartTable(view) {
  document.getElementById('chartView').classList.toggle('d-none', view === 'table');
  document.getElementById('tableView').classList.toggle('d-none', view === 'chart');
}
