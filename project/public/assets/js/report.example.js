// jshint esversion: 6
$(document).ready(function() {
    let topFive = Highcharts.chart('topFive', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Top 5 List'
        },
        subtitle: {
            text: 'Top 5 Analysts'
        },
        xAxis: {
            categories: ['Don Hunt', 'Charlene Bosell', 'Lee Bridges', 'Scott Harstine', 'Brian Hanes'],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Workorders',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' workorders'
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Total',
            data: [106, 99, 98, 94, 93]
        }, {
            name: 'Closed',
            data: [92, 90, 80, 88, 62]
        }]
    });

    var pieChartTest = Highcharts.chart('pieChartTest', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: '12,345 Workorders YTD'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: [{
                name: 'Closed',
                y: 56.33
            }, {
                name: 'In Progress',
                y: 24.03
            }, {
                name: 'Unassigned',
                y: 10.38,
                sliced: true,
                selected: true
            }, {
                name: 'Overdue',
                y: 4.97,
                sliced: true,
                selected: true
            }, {
                name: 'On-Hold',
                y: 0.91
            }]
        }]
    });

    var barChartTest = Highcharts.chart('barChartTest', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Weekly Workorders by Group'
        },
        xAxis: {
            categories: ['Apps', 'Helpdesk', 'Server', 'Telecom', 'Webteam']
        },
        yAxis: {
            title: {
                text: 'Workorders'
            }
        },
        series: [{
            name: 'Open',
            data: [9, 19, 12, 19, 8]
        }, {
            name: 'Closed',
            data: [22, 12, 30, 22, 8]
        }]
    });

    Highcharts.chart('areaChartTest', {
        chart: {
            zoomType: 'x'
        },
        title: {
            text: 'Total Workorder over Time'
        },
        subtitle: {
            text: document.ontouchstart === undefined ?
                    'Click and drag in the plot area to zoom in' : 'Pinch the chart to zoom in'
        },
        xAxis: {
            type: 'datetime'
        },
        yAxis: {
            title: {
                text: 'Workorders'
            }
        },
        legend: {
            enabled: false
        },
        plotOptions: {
            area: {
                fillColor: {
                    linearGradient: {
                        x1: 0,
                        y1: 0,
                        x2: 0,
                        y2: 1
                    },
                    stops: [
                        [0, Highcharts.getOptions().colors[0]],
                        [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                    ]
                },
                marker: {
                    radius: 2
                },
                lineWidth: 1,
                states: {
                    hover: {
                        lineWidth: 1
                    }
                },
                threshold: null
            }
        },

        series: [{
            type: 'area',
            name: 'Workorders',
            data: [
                [Date.UTC(2016,0,1),22],
                [Date.UTC(2016,0,2),31],
                [Date.UTC(2016,0,4),31],
                [Date.UTC(2016,0,5),20],
                [Date.UTC(2016,0,6),11],
                [Date.UTC(2016,0,7),27],
                [Date.UTC(2016,0,8),20],
                [Date.UTC(2016,0,9),25],
                [Date.UTC(2016,0,11),25],
                [Date.UTC(2016,0,12),21],
                [Date.UTC(2016,0,13),25],
                [Date.UTC(2016,0,14),22],
                [Date.UTC(2016,0,15),28],
                [Date.UTC(2016,0,16),23],
                [Date.UTC(2016,0,18),28],
                [Date.UTC(2016,0,19),17],
                [Date.UTC(2016,0,20),28],
                [Date.UTC(2016,0,21),13],
                [Date.UTC(2016,0,22),28],
                [Date.UTC(2016,0,23),22],
                [Date.UTC(2016,0,25),20],
                [Date.UTC(2016,0,26),28],
                [Date.UTC(2016,0,27),27],
                [Date.UTC(2016,0,28),29],
                [Date.UTC(2016,0,29),34],
                [Date.UTC(2016,0,30),29],
                [Date.UTC(2016,1,1),23],
                [Date.UTC(2016,1,2),17],
                [Date.UTC(2016,1,3),10],
                [Date.UTC(2016,1,4),13],
                [Date.UTC(2016,1,5),13],
                [Date.UTC(2016,1,6),37],
                [Date.UTC(2016,1,8),39],
                [Date.UTC(2016,1,9),31],
                [Date.UTC(2016,1,10),33],
                [Date.UTC(2016,1,11),23],
                [Date.UTC(2016,1,12),30],
                [Date.UTC(2016,1,13),23],
                [Date.UTC(2016,1,15),34],
                [Date.UTC(2016,1,16),17],
                [Date.UTC(2016,1,17),22],
                [Date.UTC(2016,1,18),34],
                [Date.UTC(2016,1,19),28],
                [Date.UTC(2016,1,20),27],
                [Date.UTC(2016,1,22),27],
                [Date.UTC(2016,1,23),24],
                [Date.UTC(2016,1,24),18],
                [Date.UTC(2016,1,25),11],
                [Date.UTC(2016,1,26),31],
                [Date.UTC(2016,1,27),32],
                [Date.UTC(2016,2,1),20],
                [Date.UTC(2016,2,2),21],
                [Date.UTC(2016,2,3),28],
                [Date.UTC(2016,2,4),26],
                [Date.UTC(2016,2,5),26],
                [Date.UTC(2016,2,6),22],
                [Date.UTC(2016,2,8),21],
                [Date.UTC(2016,2,9),14],
                [Date.UTC(2016,2,10),27],
                [Date.UTC(2016,2,11),22],
                [Date.UTC(2016,2,12),13],
                [Date.UTC(2016,2,13),28],
                [Date.UTC(2016,2,15),21],
                [Date.UTC(2016,2,16),22],
                [Date.UTC(2016,2,17),35],
                [Date.UTC(2016,2,18),13],
                [Date.UTC(2016,2,19),21],
                [Date.UTC(2016,2,20),21],
                [Date.UTC(2016,2,22),37],
                [Date.UTC(2016,2,23),35],
                [Date.UTC(2016,2,24),22],
                [Date.UTC(2016,2,25),14],
                [Date.UTC(2016,2,26),28],
                [Date.UTC(2016,2,27),24],
                [Date.UTC(2016,2,29),28],
                [Date.UTC(2016,2,30),31],
                [Date.UTC(2016,2,31),19],
                [Date.UTC(2016,3,1),21],
                [Date.UTC(2016,3,2),28],
                [Date.UTC(2016,3,3),19],
                [Date.UTC(2016,3,5),21],
                [Date.UTC(2016,3,6),24],
                [Date.UTC(2016,3,7),26],
                [Date.UTC(2016,3,8),36],
                [Date.UTC(2016,3,9),22],
                [Date.UTC(2016,3,10),31],
                [Date.UTC(2016,3,12),26],
                [Date.UTC(2016,3,13),23],
                [Date.UTC(2016,3,14),26],
                [Date.UTC(2016,3,15),27],
                [Date.UTC(2016,3,16),23],
                [Date.UTC(2016,3,17),24],
                [Date.UTC(2016,3,19),21],
                [Date.UTC(2016,3,20),12],
                [Date.UTC(2016,3,21),15],
                [Date.UTC(2016,3,22),23],
                [Date.UTC(2016,3,23),36],
                [Date.UTC(2016,3,24),26],
                [Date.UTC(2016,3,26),11],
                [Date.UTC(2016,3,27),24],
                [Date.UTC(2016,3,28),16],
                [Date.UTC(2016,3,29),23],
                [Date.UTC(2016,3,30),19],
                [Date.UTC(2016,4,1),28],
                [Date.UTC(2016,4,3),21],
                [Date.UTC(2016,4,4),32],
                [Date.UTC(2016,4,5),20],
                [Date.UTC(2016,4,6),18],
                [Date.UTC(2016,4,7),36],
                [Date.UTC(2016,4,8),25],
                [Date.UTC(2016,4,10),34],
                [Date.UTC(2016,4,11),24],
                [Date.UTC(2016,4,12),17],
                [Date.UTC(2016,4,13),15],
                [Date.UTC(2016,4,14),24],
                [Date.UTC(2016,4,15),32],
                [Date.UTC(2016,4,17),37],
                [Date.UTC(2016,4,18),38],
                [Date.UTC(2016,4,19),29],
                [Date.UTC(2016,4,20),14],
                [Date.UTC(2016,4,21),29],
                [Date.UTC(2016,4,22),36],
                [Date.UTC(2016,4,24),28],
                [Date.UTC(2016,4,25),10],
                [Date.UTC(2016,4,26),26],
                [Date.UTC(2016,4,27),30],
                [Date.UTC(2016,4,28),33],
                [Date.UTC(2016,4,29),11],
                [Date.UTC(2016,4,31),26],
                [Date.UTC(2016,5,1),21],
                [Date.UTC(2016,5,2),25],
                [Date.UTC(2016,5,3),31],
                [Date.UTC(2016,5,4),28],
                [Date.UTC(2016,5,5),29],
                [Date.UTC(2016,5,7),14],
                [Date.UTC(2016,5,8),27],
                [Date.UTC(2016,5,9),22],
                [Date.UTC(2016,5,10),29],
                [Date.UTC(2016,5,11),22],
                [Date.UTC(2016,5,12),33],
                [Date.UTC(2016,5,14),13],
                [Date.UTC(2016,5,15),22],
                [Date.UTC(2016,5,16),21],
                [Date.UTC(2016,5,17),21],
                [Date.UTC(2016,5,18),12],
                [Date.UTC(2016,5,19),18],
                [Date.UTC(2016,5,21),24],
                [Date.UTC(2016,5,22),18],
                [Date.UTC(2016,5,23),22],
                [Date.UTC(2016,5,24),24],
                [Date.UTC(2016,5,25),25],
                [Date.UTC(2016,5,26),25],
                [Date.UTC(2016,5,28),13],
                [Date.UTC(2016,5,29),10],
                [Date.UTC(2016,5,30),20]
            ]
        }]
    });

    Highcharts.chart('outageChartTest', {
        title: {
            text: 'Unplanned Outages',
            x: -20 //center
        },
        subtitle: {
            text: 'Informational Technology Systems',
            x: -20
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Count'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: 'unplanned outages'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Website',
            data: [0,0,0,0,0,3,4,5,7,0,2,0]
        }, {
            name: 'Email',
            data: [0,0,0,1,0,0,0,1,0,0,0,0]
        }, {
            name: 'Network',
            data: [0,0,0,0,0,0,2,0,2,0,0,0]
        }, {
            name: 'WISARD',
            data: [0,0,0,0,0,0,0,0,0,0,1,3]
        }]
    });
});
