<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    var ctx = document.getElementById('lineChart').getContext('2d');
    var data = {
        labels: ["January", "February", "March", "April", "May", "June"],
        datasets: [{
            label: 'Sales',
            data: [50, 100, 150, 200, 250, 300],
            borderColor: 'rgb(75, 192, 192)',
            tension: 0.1
        }]
    };

    var lineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: data.labels,
            datasets: data.datasets,
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Amount'
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: 'Month'
                    }
                }
            }
        }
    });
</script>
<script>
    var pieCtx = document.getElementById('piechart').getContext('2d');
    const pieData = {
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

    var pieChart = new Chart(pieCtx, {
        type: 'doughnut',
        data: pieData
    });
</script>