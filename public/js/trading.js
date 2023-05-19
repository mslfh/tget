function checkBuyVolume(availableVolume=200){
    let inputVolume = $("#buyVolume").val()
    if(!inputVolume){
        $("#error").html("Please enter the amount of volume to buy")
        return
    }

    // Update to do comparison between input Volume by user vs selectedEnergyVolumeAvailable
    // Temporarily put 200 as default value to tested the workflow of if else working, neeed to change once db is connected
    if(inputVolume > availableVolume){
        $("#error").html("Buy Volume exceed the Available volume. Please check again")
    } else {
        $("#buyCheckButton").css('display','none')
        $("#error").html("")
        $("#buySubmitButton").css('display','')
        // Display the summary price details
        // In the future change it with proper function to display the selected energy
        $("#summaryDetail").css('display','')
    }
}


function submitBuy(){
    $("#buySubmitButton").css('display','none')
    $("#buyCheckButton").css('display','')
    $("#summaryDetail").css('display','none')
    $("#buyerMarketList").css('display','')
    alert("Your buying request is received")
}

function submitSell(){
    // Do some validation before submitting
    let energyType = $("#inputEnergyType").val()
    let sellVolume = $("#inputSellVolume").val()
    let sellPrice = $("#inputSellPrice").val()

    if(energyType === "Choose..."){
        $("#sellError").html("Please select the energy type")
        return
    } else if (!sellVolume){
        $("#sellError").html("Please enter the volume to sell")
        return
    } else if (!sellPrice){
        $("#sellError").html("Please enter your sell price")
        return
    } else {
        $("#sellError").html("")
        $("#sellSubmitButton").attr("data-bs-dismiss","modal")
        alert("Your selling request is received")
    }
}

// $(document).ready(function() {
//     var pageItem = $(".pagination li").not(".previous,.next");
//     var previous = $(".pagination li.previous");
//     var next = $(".pagination li.next");
//
//     pageItem.click(function() {
//       pageItem.removeClass("active");
//       $(this).not(".previous,.next").addClass("active");
//     });
//
//     next.click(function() {
//       $('li.active').removeClass('active').next().addClass('active');
//     });
//
//     previous.click(function() {
//       $('li.active').removeClass('active').prev().addClass('active');
//     });
//
//
//   });

$(document).ready(function() {
    var pageItem = $(".pagination-list li").not(".previous, .next");
    var previous = $(".pagination-list li.previous");
    var next = $(".pagination-list li.next");

    pageItem.click(function() {
        pageItem.removeClass("active");
        $(this).not(".previous, .next").addClass("active");

        var page = $(this).text(); // 获取当前页码
        var pageSize = 10; // 每页显示的数量

        // 构建新的URL
        var url = "{{url}}/mtrading/getEnergyList?page=" + page + "&pageSize=" + pageSize;

        // 重新发送请求
        window.location.href = url;
    });

    next.click(function() {
        var activeItem = $('li.active');
        var nextPageItem = activeItem.next();

        if (!nextPageItem.hasClass('next')) {
            activeItem.removeClass('active');
            nextPageItem.addClass('active');

            var page = nextPageItem.text(); // 获取下一页的页码
            var pageSize = 10; // 每页显示的数量

            // 构建新的URL
            var url = "trading?page=" + page + "&pageSize=" + pageSize;

            // 重新发送请求
            window.location.href = url;
        }
    });

    previous.click(function() {
        var activeItem = $('li.active');
        var prevPageItem = activeItem.prev();

        if (!prevPageItem.hasClass('previous')) {
            activeItem.removeClass('active');
            prevPageItem.addClass('active');

            var page = prevPageItem.text(); // 获取上一页的页码
            var pageSize = 10; // 每页显示的数量

            // 构建新的URL
            var url = "{{url}}/mtrading/getEnergyList?page=" + page + "&pageSize=" + pageSize;

            // 重新发送请求
            window.location.href = url;
        }
    });
});
