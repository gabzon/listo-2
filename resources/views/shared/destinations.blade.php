// let countries = <?= //json_encode(compact($users->visitedCountries())); ?>;
// google.charts.load('current', {
// 'packages': ['geochart'],
// // Note: you will need to get a mapsApiKey for your project.
// // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
// 'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
// });

// google.charts.setOnLoadCallback(drawRegionsMap);

// function drawRegionsMap() {
// var data = google.visualization.arrayToDataTable([
// ['Country'],
// ]);
// //data.addColumn('string', 'Country');
// //data.addColumn('string', 'Want to go');
// countries.forEach(element => {
// data.addRow([element]);
// });
// //data.addRow(['CO', 100]);


// // var options = {};
// var options = {
// //region: '002', // Africa
// colorAxis: {colors: ['orange', 'blue']},
// defaultColor: 'red',
// legend: 'none'
// };

// var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

// chart.draw(data, options);