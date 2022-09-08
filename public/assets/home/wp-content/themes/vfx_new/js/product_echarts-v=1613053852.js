
jQuery(document).ready(function($){

    // 获取图表数据
    var data =  JSON.parse(echartsJson).result;
    // console.log(data);
    $(".rotate_data").css({
        "display":"none",
        "animation":"none",
        "-webkit-animation":"none"
    });
    var symbolArr = $(".home_row1 .symbol");
    var changeArr = $(".home_row1 .change");
    for (var i = 0; i < symbolArr.length; i++) {

        for (var j = 0; j < data.length; j++) {

            if (symbolArr[i].getAttribute("data-symbol") == data[j].symbol) {

                // 百分比
                var obj=data[j].items[data[j].items.length-1];
                var num1=math.format(math.chain(math.bignumber(obj.close)).subtract(math.bignumber(obj.open)).done());
                var num2=math.format(math.chain(math.bignumber(num1)).divide(math.bignumber(obj.open)).done());
                var num3=toPercent(num2*100);
                changeArr[i].innerHTML =num3;

                var volume = [];
                var high = [];
                var sum = "";
                sum = data[j].items;
                var volumeA = [];
                var highA = [];
                sum.map(function (item) {
                    volumeA.push(item.close);

                });

                sum.map(function (item) {

                    highA.push(item.startTime.slice(11, 18));
                });

                
                // echarts 图表渲染
                var line_color="#00be00";
                var shadow_color="#e0f3dd";

                if(num3.indexOf("-") > -1){
                    line_color="#ea1917";
                    shadow_color="#ffece8";
                }

                volume = volumeA;
                high = highA;
                Chart('echarts' + i, high, volume, line_color, shadow_color);

            }
        }

    }
    ColorHref();

    function Chart(id, high,  volume, color, shadow) {
        var foreign = document.getElementById(id);
        var myChart = echarts.init(foreign);
        var option = {
            tooltip: {
                formatter:"<span style='color:#ACACAC'>time</span> <br/>{b} <br/><span style='color:#ACACAC'>price</span> <br/>{c}",
                trigger: 'axis',
                backgroundColor: '#fff',
                borderColor: '#F4F4F9',
                borderRadius: 4,
                borderWidth: 1,
                padding: 15,
                textStyle: {
                    color: '#000'
                }
            },
            grid:{
                left: 0, //grid 组件离容器左侧的距离。
                top:0,
                right: 0,
                bottom: 0

            },
            xAxis: {
                show: false,
                type: 'category',
                data: high,
                min:'dataMin',
                max:'dataMax',
                axisTick:{   //去掉刻度线
                        show:false
                    },
                splitLine: {
                    show: true,
                        lineStyle: {
                        color: '#F4F4F9' // 修改网格线颜色
                        }
                },
                axisLine:{
                    lineStyle:{
                        color:'#4A4A4A', // x坐标轴的轴线颜色
                        width:0 //这里是坐标轴的宽度,为0就是不显示
                        }

                },
                boundaryGap: false //坐标轴两边留白策略
            },
            yAxis: {
                show: false,
                type: 'value',
                position:'right',
                min:'dataMin',
                max:'dataMax',
                    axisTick:{   //去掉刻度线
                        show:false
                    },
                splitLine: {
                    show: true,
                        lineStyle: {
                        color: '#F4F4F9' // 修改网格线颜色
                        }
                },
                axisLine:{
                    lineStyle:{
                        color:'#4A4A4A', // x坐标轴的轴线颜色
                        width:0 //这里是坐标轴的宽度,为0就是不显示
                        }

                    },
                    splitNumber:3
            },
            series: [{
                data:volume,
                type: 'line',
                smooth: true,
                symbol: 'none',
                lineStyle: { //线条样式。
                    color: color,

                    width:1

                },
                areaStyle: { //区域填充样式。
                    normal: {
                        color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                            offset: 0,
                            color: shadow
                        }, {
                            offset: 1,
                            color: '#fff'
                        }])
                    }

                }
            }]

        };
        myChart.clear();
        myChart.setOption(option,true);
        $(window).resize(function () {
            myChart.resize();
        })

    }


    //涨跌幅文字
    function toPercent(point){

        var str=Number(point).toFixed(2);
            if(point>0){
            str="+"+str;
        }
        str+="%";
        return str;
    }
    // 涨跌幅颜色
    function ColorHref(){
        $(".change").each(function() {
            var text_color = $(this).html();
            if(text_color.indexOf("+") > -1) {
                $(this).addClass("green_text")
            }else if(text_color.indexOf("-") > -1){
                $(this).addClass("red_text")
            }else{
                $(this).addClass("black_text")
            }

        })
    }
})