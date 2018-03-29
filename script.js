// Our labels along the x-axis
var Hours = [000,015,030,045,100,115,130,145,200,215,230,245,300,315,330,345,400,415,430,445,500,515,530,545,600,615,630,645,700,715,730,745,800,815,830,845,900,915,930,945,1000,1015,1030,1045,1100,1115,1130,1145,1200,1215,1230,1245,1300,1315,1330,1345,1400,1415,1430,1445,1500,1515,1530,1545,1600,1615,1630,1645,1700,1715,1730,1745,1800,1815,1830,1845,1900,1915,1930,1945,2000,2015,2030,2045,2100,2115,2130,2145,2200,2215,2230,2245,2300,2315,2330,2345];
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
                
            }],
            xAxes: [{
				gridLines: {
				//	color: "#ff6961"
				},
                
            }]
        }
    }
});