// 所有子站公用
window.zESettings = {
    webWidget: {
        chat: {
            tags: ['VFSC'],
            departments: {
                enabled: ['Vantage FX'],
                select: 'Vantage FX'
            }
        }
    }
};


jQuery(document).ready(function ($) {
    //home row5 js
    $(".home_row5 .home_row5_top .tab_title li").click(function () {
        var index = $(this).index();
        $(this).addClass("active").siblings("li").removeClass("active");
        $(".home_row5 .home_row5_top .tab_list .tab_item:eq(" + index + ")").addClass("active").siblings(".tab_item").removeClass("active");
    });

    $(".video_right .video_content").click(function () {
        $(this).addClass("flash_red_box");
        $(".home_live .home_live_light").addClass("flash_red_box");
        return false;
    })

    if ($("body").hasClass("home")) {
        var load_tag = 0;
        // 首页实时数据
        if (window.WebSocket) {
            var ws = new WebSocket('wss://feed.vqfx.com/api/v1/tick');
            // 发送消息到服务器
            // console.log(ws)
            ws.onopen = function(e) {
                // console.log('成功');
                ws.send('{ "Server": "VAU", "Symbols": ["EURUSD+", "AUDUSD+","GBPUSD+","USDJPY+","SPI200","DAX30","SP500","DJ30","CL-OIL","XAGUSD+","XAUUSD+","AAPL","GOOG","FB","NFLX"] }');
            }
            // 接收服务器的消息
            ws.onmessage = function (e) {
                var data = JSON.parse(e.data);
                // console.log(data);

                // 获取品种
                var symbol = $(".home_row5 .tab_list .symbol");

                //卖出
                var bidArr = $(".home_row5 .tab_list .bid_text");

                //中间值
                var spreadArr = $(".home_row5 .tab_list .spr_text span");

                //买进
                var askArr = $(".home_row5 .tab_list .ask_text");

                // 品种做比较(双重for循环)

                for (var i = 0; i < symbol.length; i++) {

                    var newSymbol = symbol[i].innerHTML;
                    // 产品转换
                    if (newSymbol == "Apple") {
                        newSymbol = "AAPL";
                    }
                    if (newSymbol == "Google") {
                        newSymbol = "GOOG";
                    }
                    if (newSymbol == "Facebook") {
                        newSymbol = "FB";
                    }
                    if (newSymbol == "Netflix") {
                        newSymbol = "NFLX";
                    }

                    for (var j = 0; j < data.length; j++) {
                        // 删除加号
                        var dataSymbol = data[j].Symbol;
                        if( dataSymbol.charAt(dataSymbol.length-1) =='+'){
                            dataSymbol = dataSymbol.substring(0,dataSymbol.length-1);
                        }
                        // console.log(dataSymbol);

                        if (newSymbol == dataSymbol) {

                            // 计算中间值内容
                            var spread = (parseFloat(data[j].Ask - data[j].Bid)).toFixed(1);
                            if(newSymbol == "EURUSD"||newSymbol == "AUDUSD"||newSymbol == "GBPUSD"){
                                spread = (parseFloat(data[j].Ask - data[j].Bid)*10000).toFixed(1);
                            }else if(newSymbol == "USDJPY"){
                                spread = (parseFloat(data[j].Ask - data[j].Bid)*100).toFixed(1);
                            }
                            if(newSymbol =="CL-OIL"||newSymbol =="XAGUSD"||newSymbol =="XAUUSD"){
                                spread = (parseFloat(data[j].Ask - data[j].Bid)*10).toFixed(1);
                            }

                            // console.log(spread);

                            // number类型转化为string
                            if (typeof data[j].Ask == 'number') {
                                data[j].Ask = String(data[j].Ask);
                            }

                            if (typeof data[j].Bid == 'number') {
                                data[j].Bid = String(data[j].Bid);
                            }


                            //卖出内容填充
                            bidArr[i].innerHTML = data[j].Bid;

                            //中间值内容填充
                            var old_data = parseFloat($(".tab_list .spr_text span").eq(i).attr("data"));

                            if (old_data > spread ) {
                                $(".tab_list .spr_text span").eq(i).addClass("red");
                            } else {
                                $(".tab_list .spr_text span").eq(i).removeClass("red");
                            }
                            0.0001

                            // spreadArr[i].innerHTML = (parseFloat(forex[j].spread) / 10).toFixed(1);
                            spreadArr[i].innerHTML = spread;
                            $(".tab_list .spr_text span").eq(i).attr("data", spread);

                            //买进内容填充
                            askArr[i].innerHTML = data[j].Ask;
                        }

                    }
                }
                if (load_tag == 0) {
                    $(".tab_list .loading").fadeOut(500, function () {
                        $(".tab_item").fadeIn(500);
                    });
                    load_tag = 1;
                }

            }
        }
    }
});