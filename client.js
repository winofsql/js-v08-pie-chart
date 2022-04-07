google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

    var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['仕事', 11],
        ['食事', 2],
        ['通勤', 2],
        ['テレビ', 2],
        ['睡眠', 7]
    ]);

    var options = {
        title: '生活円グラフ'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);

}
