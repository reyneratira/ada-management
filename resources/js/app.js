import './bootstrap';
import 'alpinejs';
import '@fortawesome/fontawesome-free/css/all.css';

import Chart from 'chart.js/auto';

document.addEventListener("DOMContentLoaded", () => {
  const ctx = document.getElementById('absensiChart');
  if (ctx) {
    new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['Masuk', 'Izin', 'Sakit'],
        datasets: [{
          data: [70, 5, 5],
          backgroundColor: ['#9DD8FF', '#FFE47D', '#FF9359'],
          borderWidth: 0
        }]
      },
      options: {
        plugins: {
          legend: { display: false },
        },
        maintainAspectRatio: false
      }
    });
  }
});