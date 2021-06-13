var xmlhttp = new XMLHttpRequest();
var url = "http://127.0.0.1:5500/games.json";

xmlhttp.open("GET",url, true);
xmlhttp.send();

xmlhttp.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
        var nome = JSON.parse(this.responseText);
        var name = nome.games.splice(0,20).map(function(elem) {
            return elem.Name;
        });
        var Global_Sales = nome.games.map(function(elem) {
            return elem.Global_Sales;
        });
        var NA_Sales = nome.games.map(function(elem) {
            return elem.NA_Sales;
        });
        var EU_Sales = nome.games.map(function(elem) {
            return elem.EU_Sales;
        });
        var Other_Sales = nome.games.map(function(elem) {
            return elem.Other_Sales;
        });
        
var ctx = document.getElementById('canvas').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: name,
        datasets: [{
            label: 'Top 20 jogos mais vendidos no Mundo!',
            data: Global_Sales,
            backgroundColor: 'blue',
            borderColor: 'blue',
            borderWidth: 4
        }]
    },
    options: { plugins: {
        legend: {
            labels: {
                fontColor: '#f3b49f',
                font: {
                    size: 14,
                }
            }
        }},
        elements:{
            line:{
                tension:0          
            }
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});      

var ctx = document.getElementById('canvas-two').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: name,
        datasets: [{
            label: 'Top 20 jogos mais vendidos no America do Norte!',
            data: NA_Sales,
            fontColor: 'red',
            backgroundColor: 'green',
            borderColor: 'green',
            borderWidth: 4
        }]
    },
    options: { plugins: {
        legend: {
            labels: {
                font: {
                    size: 14
                }
            }
        }},
        elements:{
            line:{
                tension:0          
            }
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

var ctx = document.getElementById('canvas-three').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: name,
        datasets: [{
            label: 'Top 20 jogos mais vendidos no America do Norte!',
            data: NA_Sales,
            fontColor: 'black',
            backgroundColor: 'red',
            borderColor: 'red',
            borderWidth: 4
        },
        {
            label: 'Top 20 jogos mais vendidos na Europa!',
            data: EU_Sales,
            fontColor: 'black',
            backgroundColor: 'blue',
            borderColor: 'blue',
            borderWidth: 4
        }]
    },
    options: { plugins: {
        legend: {         
            labels: {
                font: {
                    size: 14
                }
            }
        }},
        elements:{
            line:{
                tension:0          
            }
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
    }
}