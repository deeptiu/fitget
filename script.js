// Our labels along the x-axis
var Hours = [0, , , ,100, , , ,200, , , ,300, , , ,400, , , ,500, , , ,600, , , ,700, , , ,800, , , ,900, , , ,1000, , , ,1100, , , ,1200, , , ,1300, , , ,1400, , , ,1500, , , ,1600, , , ,1700, , , ,1800, , , ,1900, , , ,2000, , , ,2100, , , ,2200, , , ,2300];
// For drawing the lines
var HeartRate = [63,68,61,61,58,52,61,67,63,65,66,65,63,64,63,66,64,66,68,70,68,67,68,66,63,60,58,58,59,59,58,57,63,62,64,65,67,66,66,90,68,60,111,79,63,69,69,63,60,64,61,60,57,58,62,64,66,63,63,63,98,72,62,66,66,64,62,55,55,60,69,63,64,81,65,112,61,76,77,112,90,92,105,95,97,98,81,83,79,77,68,63,64,66,61,64];

var ctx = document.getElementById("myChart");
ctx.height= 150;
var myChart = new Chart(ctx, {

    type: 'line',
    data: {
        labels: Hours,
        datasets: [{
            data: HeartRate,
            borderWidth: 1,
            backgroundColor: "#ff6961",
            borderColor: "#ff6961",
            borderWidth: 2,
            //pointBackgroundColor: 'rgba(255,99,132,1)',
            pointHoverRadius: 3,
            pointRadius: 3,
			fill:false
        }],
    },
    options: {
        legend: {
            display: false
        },
        title: {
            display: true,
            //text: 'Biscuits in the tin...',
            fontStyle: 300
        },
        scales: {
            yAxes: [{
				gridLines: {
				//	color: "#ff6961"
				},
				scaleLabel: {
					display: true,
					labelString: 'Heart Rate'
				  }
            }],
            xAxes: [{
				gridLines: {
				//	color: "#ff6961"
				},
				scaleLabel: {
					display: true,
					labelString: 'Time'
				  }
                
            }]
        }
    }
});