<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {
    'packages': ['corechart']
});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Anos', 'imoveis ativos', 'ocorrencias', 'usuarios online', 'pedidos de anuncios'],
        ['2023', <?=count($imoveis);?>, 7, 50, <?=count($anuncios)?>],
        ['2024', 0, 0, 0, 0],
        ['2025', 0, 0, 0, 0],
        ['2026', 0, 0, 0, 0]
    ]);

    var options = {
        title: 'Performace do site',
        curveType: 'function',
        legend: {
            position: 'bottom'
        }
    };

    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
    chart.draw(data, options);
}
</script>