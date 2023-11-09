const ctx = document.getElementById('car');

new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['718', '911', 'Panamera', 'taycan_1'],
        datasets: [{
                label: 'Car',
                data: [7, 9, 7, 2],
                borderWidth: 1
            }]
    }
});
const ctx2 = document.getElementById('money');

new Chart(ctx2, {
    type: 'doughnut',
    data: {
        labels: ['718', '911', 'Panamera', 'taycan_1'],
        datasets: [{
                label: '$',
                data: [183515, 352525, 194525, 222352],
                borderWidth: 1
            }]
    }
//    options: {
//        scales: {
//            y: {
//                beginAtZero: true
//            }
//        }
//    }
});