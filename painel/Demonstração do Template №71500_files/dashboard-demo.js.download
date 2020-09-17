'use strict';

// Dashboard Demo
// =============================================================

var dashboardDemo = {
    init: function init() {

        this.bindUIActions();
    },
    bindUIActions: function bindUIActions() {
        // turn off aspect ratio to get better mobile view
        Chart.defaults.global.maintainAspectRatio = false;

        // event handlers
        this.handleTasksChart();
        //this.handlePieChart();
    },
    colors: function colors() {
        return {
            red: '#B76BA3',
            orange: '#EC935E',
            yellow: '#F7C46C',
            green: '#A7C796',
            teal: '#00A28A',
            blue: '#346CB0',
            purple: '#5F4B8B',
            gray: '#BEC1C4'
        };
    },
    getColor: function getColor(color) {
        return this.colors()[color];
    },
    colorNames: function colorNames(color) {
        return Object.keys(this.colors());
    },
    randomScalingFactor: function randomScalingFactor() {
        return 5 * Math.round(Math.random() * 100);
    },
    handleTasksChart: function handleTasksChart() {
        var self = this;
        var data = {
            labels: ['21 Mar', '22 Mar', '23 Mar', '24 Mar', '25 Mar', '26 Mar', '27 Mar'],
            datasets: [{
                backgroundColor: self.getColor('blue'),
                borderColor: self.getColor('blue'),
                borderWidth: 1,
                data: [self.randomScalingFactor(), self.randomScalingFactor(), self.randomScalingFactor(), self.randomScalingFactor(), self.randomScalingFactor(), self.randomScalingFactor(), self.randomScalingFactor()]
            }]
            // init chart bar
        };
        var canvas = $('#completion-tasks')[0].getContext('2d');
        var chart = new Chart(canvas, {
            type: 'bar',
            data: data,
            options: {
                responsive: true,
                legend: { display: false },
                title: { display: false },
                scales: {
                    xAxes: [{
                        gridLines: {
                            display: true,
                            drawBorder: false,
                            drawOnChartArea: false
                        },
                        ticks: {
                            maxRotation: 0,
                            maxTicksLimit: 3
                        }
                    }],
                    yAxes: [{
                        gridLines: {
                            display: true,
                            drawBorder: false
                        },
                        ticks: {
                            beginAtZero: true,
                            stepSize: 100
                        }
                    }]
                }
            }
        });
    }
};

dashboardDemo.init();

window.chartColors = {
    red: 'rgb(255, 99, 132)',
    orange: 'rgb(255, 159, 64)',
    yellow: 'rgb(255, 205, 86)',
    green: 'rgb(75, 192, 192)',
    blue: 'rgb(54, 162, 235)',
    purple: 'rgb(153, 102, 255)',
    grey: 'rgb(201, 203, 207)'
};

var randomScalingFactor = function () {
    return Math.round(Math.random() * 100);
};

var config = {
    type: 'pie',
    data: {
        datasets: [{
            data: [
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
            ],
            backgroundColor: [
                window.chartColors.red,
                window.chartColors.orange,
                window.chartColors.yellow,
                window.chartColors.green,
                window.chartColors.blue,
            ],
            label: 'Dataset 1'
        }],
        labels: [
            'Red',
            'Orange',
            'Yellow',
            'Green',
            'Blue'
        ]
    },
    options: {
        responsive: true
    }
};

window.onload = function () {
    var ctx = document.getElementById('chart-area').getContext('2d');
    window.myPie = new Chart(ctx, config);
};
