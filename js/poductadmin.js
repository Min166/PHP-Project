const ctx = document.getElementById('view');

new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['718', '911', 'Panamera', 'taycan_1'],
        datasets: [{
                label: 'view',
                data: [80,159, 142, 10],
                borderWidth: 3
            }]
    },
        options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

const ctx2 = document.getElementById('quantity');

new Chart(ctx2, {
    type: 'line',
    data: {
        labels: ['718', '911', 'Panamera', 'taycan_1'],
        datasets: [{
                label: 'quantity',
                data: [8, 19, 25, 11],
                borderWidth: 3
            }]
    },
        options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});