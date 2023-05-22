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

    // Getting the x axis and prepping for y axis data
    tradingData.forEach((data)=>{
        xAxis.push(data["date"])
        if("tradings" in data){
            let tradingsData = data["tradings"]
            let oneDayTrading = []
            tradingsData.forEach((trading)=>{
                let energyType = trading["energy"]["type"]
                energiesName.add(energyType)
                let oneData = {}
                oneData[energyType]=trading["volume"]
                oneDayTrading.push(oneData)
            })
            transactionHistory.push(oneDayTrading)
        } else {
            transactionHistory.push([])
        }
    })

    //Getting the y axis
    energiesName.forEach((name)=>{
        let tradingData = [];
        transactionHistory.forEach((transaction)=>{
            if(!transaction.length){
                tradingData.push(0)
            } else {
                var temp=0;
                transaction.forEach((data) =>{
                    if(name in data){
                        temp = temp + data[name]
                    }
                })
                if(temp){
                    tradingData.push(temp)
                }else{
                    tradingData.push(0)
                }
            }
        })
        let historyData = {
            "name":name,
            "data":tradingData
        }
        yAxis.push(historyData)
    })
    tradingHistoryChart(xAxis,yAxis)
}

function tradingHistoryChart(xAxis,yAxis){
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
            // categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            categories: xAxis,
        },
        fill: {
            opacity: 1
        }
    };
    var chart = new ApexCharts(document.querySelector("#trading-chart"), options);
    chart.render();
}

$(document).ready(function() {
    // var priceData;
    $.get("/index.php/dashboard/getPriceHistory?numDays=7",(result)=>{
        priceHistoryChartData(result["data"])
    })

    $.get("/index.php/dashboard/getTradingHistory?numDays=7", (result)=>{
        tradingHistoryChartData(result["data"])
    })
    // tradingPriceChart()
    // tradingHistoryChart()


//    Check the role of current user. If it is manager display the manager view
})
