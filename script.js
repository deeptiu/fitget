// Our labels along the x-axis
var Hours = [00,01,02,03,04,05,06,07,08,09,10,11,12,13,14,15,16,17,18,19,20,21,22,23];
// For drawing the lines
var HeartRate = [62,82,73,75,92,67,62,82,73,75,92,67,62,82,73,75,92,67,62,82,73,75,92,67];

var ctx = document.getElementById("myChart");
ctx.height= 125;
var myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: Hours,
    datasets: [
      { 
        data: HeartRate,
        label: "Heart Rate",
        borderColor: "white",
        fill: false
      }
    ]
  }
});