function priceHistoryChartData(){
    let priceData = $.get("/dashboard/getPriceHistory?numDays=7")
    let xAxis = []
    let yAxis = []
    let energiesName = new Set()
    let pricesHistory = []

    //Getting the x axis and data prep to get y axis information
    priceData["data"].forEach((data)=>{
            xAxis.push(data["date"])
            let energiesData = data["energies"]
            energiesData.forEach((energy)=>{
                let energyType = energy["energy"]["type"]
                energiesName.add(energyType)
                pricesHistory.push({energiesName:energy["selling_price"]})
            })
        })

    //Preparing data for y axis
    energiesName.forEach(energy=>{
        let energyPrice = []
        pricesHistory.forEach(priceData =>{
            if(Object.keys(priceData)[0] === energy){
                energyPrice.push(priceData[energy])
            }
        })
        let yData = {name:energy,data:energyPrice}
        yAxis.push(yData)
    })
    return [xAxis, yAxis]
}

function tradingPriceChart(){
    //Getting the xAxis and yAxis
    let axisData = priceHistoryChartData()

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

function tradingHistoryChartData(){
    let historyData = $.get("/dashboard/getTradingHistory")
    let xAxis = []
    let yAxis = []
    let energiesName = new Set()
    let transactionHistory = []

    //Getting the x axis and data prep to get y axis information
    historyData["data"].forEach((data)=>{
        xAxis.push(data["date"])
        let tradingsData = data["tradings"]
        tradingsData.forEach((trade)=>{
            let energyType = trade["energy"]["type"]
            energiesName.add(energyType)
            transactionHistory.push({energiesName:trade["price"]})
        })
    })

    //Preparing data for y axis
    energiesName.forEach(energy=>{
        let transactionPrice = []
        transactionHistory.forEach(transaction =>{
            if(Object.keys(transaction)[0] === energy){
            transactionPrice.push(transaction[energy])
        }
    })
    let yData = {name:energy,data:transactionPrice}
    yAxis.push(yData)
})
    return [xAxis, yAxis]
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
    tradingPriceChart()
    tradingHistoryChart()
})
