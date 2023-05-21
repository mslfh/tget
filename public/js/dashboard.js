function priceHistoryChartData(priceData){
    let xAxis = []
    let yAxis = []
    let energiesName = new Set()
    let pricesHistory = []

    // Getting the x axis and prepping for y axis data
    priceData.forEach((data)=>{
        xAxis.push(data["date"])
        if("energies" in data){
            let energiesData = data["energies"]
            let oneDayPrice = []
            energiesData.forEach((energy)=>{
                let energyType = energy["energy"]["type"]
                energiesName.add(energyType)
                let oneData = {}
                oneData[energyType]=energy["selling_price"]
                oneDayPrice.push(oneData)
            })
            pricesHistory.push(oneDayPrice)
        } else {
            pricesHistory.push([])
        }
    })

    //Getting the y axis

    energiesName.forEach((name)=>{
        let priceData = [];
        pricesHistory.forEach((price)=>{
            if(!price.length){
                priceData.push(0)
            } else {
                price.forEach((data) =>{
                    if(name in data){
                        priceData.push(data[name])
                    } else {
                        priceData.push(0)
                    }
                })
            }


        })
        let energyData = {
            "name":name,
            "data":priceData
        }
        yAxis.push(energyData)
    })
    tradingPriceChart(xAxis,yAxis)
}

function tradingPriceChart(xAxis,yAxis){
    // chart 1
    var options = {
        series :yAxis,
        chart: {
            type: 'line',
            height: 250,
            toolbar: {
                show: false
            },
            zoom: {
                enabled: false
            },
            dropShadow: {
                enabled: true,
                top: 3,
                left: 14,
                blur: 4,
                opacity: 0.10,
            }
        },
        legend: {
            position: 'top',
            horizontalAlign: 'left',
            offsetX: -25
        },
        markers: {
            size: 4,
            // colors: ["#007bff"],
            strokeColors: "#fff",
            strokeWidth: 2,
            hover: {
                size: 7,
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 3,
            curve: 'smooth'
        },
        colors: ["#265ed7", "#fe6555"],
        xaxis: {
            categories: xAxis,
        },
        fill: {
            opacity: 1
        }
    };
    var chart = new ApexCharts(document.querySelector("#price-chart"), options);
    chart.render();

}

function tradingHistoryChartData(tradingData){
    let xAxis = []
    let yAxis = []
    let energiesName = new Set()
    let transactionHistory = []
    // let xAxis = []
    // let yAxis = []
    // let energiesName = new Set()
    // let pricesHistory = []
    //
    // // Getting the x axis and prepping for y axis data
    // priceData.forEach((data)=>{
    //     xAxis.push(data["date"])
    //     if("energies" in data){
    //         let energiesData = data["energies"]
    //         let oneDayPrice = []
    //         energiesData.forEach((energy)=>{
    //             let energyType = energy["energy"]["type"]
    //             energiesName.add(energyType)
    //             let oneData = {}
    //             oneData[energyType]=energy["selling_price"]
    //             oneDayPrice.push(oneData)
    //         })
    //         pricesHistory.push(oneDayPrice)
    //     } else {
    //         pricesHistory.push([])
    //     }
    // })
    //
    // //Getting the y axis
    //
    // energiesName.forEach((name)=>{
    //     let priceData = [];
    //     pricesHistory.forEach((price)=>{
    //         if(!price.length){
    //             priceData.push(0)
    //         } else {
    //             price.forEach((data) =>{
    //                 if(name in data){
    //                     priceData.push(data[name])
    //                 } else {
    //                     priceData.push(0)
    //                 }
    //             })
    //         }
    //
    //
    //     })
    //     let energyData = {
    //         "name":name,
    //         "data":priceData
    //     }
    //     yAxis.push(energyData)
    // })
    // tradingPriceChart(xAxis,yAxis)
}

function tradingHistoryChart(){
    //Getting the xAxis and yAxis
    let axisData = tradingHistoryChartData()

    // chart 1
    var options = {
        // series: [{
        //     name: 'Consultations',
        //     data: [440, 505, 414, 671, 227, 613, 901, 352, 752, 320, 257, 160]
        // }, {
        //     name: 'Patients',
        //     data: [230, 420, 350, 270, 430, 320, 570, 310, 220, 220, 120, 100]
        // }],
        series :axisData[1],
        chart: {
            type: 'line',
            height: 250,
            toolbar: {
                show: false
            },
            zoom: {
                enabled: false
            },
            dropShadow: {
                enabled: true,
                top: 3,
                left: 14,
                blur: 4,
                opacity: 0.10,
            }
        },
        legend: {
            position: 'top',
            horizontalAlign: 'left',
            offsetX: -25
        },
        markers: {
            size: 4,
            // colors: ["#007bff"],
            strokeColors: "#fff",
            strokeWidth: 2,
            hover: {
                size: 7,
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 3,
            curve: 'smooth'
        },
        colors: ["#265ed7", "#fe6555"],
        xaxis: {
            // categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            categories: axisData[0],
        },
        fill: {
            opacity: 1
        }
    };
    var chart = new ApexCharts(document.querySelector("#price-chart"), options);
    chart.render();
}

$(document).ready(function() {
    // var priceData;
    $.get("/index.php/dashboard/getPriceHistory?numDays=7",(result)=>{
        priceHistoryChartData(result["data"])
    })

    $.get("/index.php/dashboard/getTradingHistory", (result)=>{
        tradingHistoryChartData(result["data"])
    })
    // tradingPriceChart()
    // tradingHistoryChart()


//    Check the role of current user. If it is manager display the manager view
})
