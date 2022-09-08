@extends('pages.layout.app')
@section('content')

<script type="text/javascript">
    jQuery(document).ready(function($){
        $('ul.home_slider_list').bxSlider({
            auto:true
        });


        function render(){
            var home_slider_banner_top= parseInt($(".header_menu_wrapper").height());
            $(".home_slider_content ul li .home_slider_box .inner").css("padding-top",home_slider_banner_top + 60);
        }
        render();
        $(window).resize(function(){
            render();
        });

    });
</script>
<style>

    .home_slider_wrapper{ position:relative;}
    .home_slider_content .bx-pager{ width:100%; padding:0px; margin:0px; position:absolute; left:0px; top:calc(100% - 112px); text-align:center;}
    .home_slider_content .bx-pager .bx-pager-item{ padding:4px; display:inline-block;}
    .home_slider_content .bx-pager .bx-pager-item a{ display:inline-block; width:48px; height:4px; text-indent:-9999em; background:rgba(29,40,54,0.3);}
    .home_slider_content .bx-pager .bx-pager-item a.active{ background:#FFF;}
    .home_slider_content .bx-controls-direction{ display:none;}
    .home_slider_content{ position:relative;}
    .home_slider_content ul{ padding:0px; margin:0px;}
    .home_slider_content ul li{ padding:0px; margin:0px;}
    .home_slider_content ul li .home_slider_box{ height:770px;}
    .home_slider_content ul li .home_slider_box .inner{ height:100%;}
    .home_slider_content ul li .home_slider_box h2{ padding:0px; margin:0px 0px 100px; line-height:1.3; color:#FFF; font-weight:bold; font-size:38px; text-align:center;}
    .home_slider_content ul li .home_slider_box h2:after{ content:""; display:none; margin:27px auto 0px; width:90px; height:4px; background:#fff;}
    .home_slider_content ul li .home_slider_box .text_box{ width:880px; margin:0px auto; max-width:100%; text-align:center;}
    .home_slider_content ul li .home_slider_box .red_arrow_button{ width:207px; text-align:center;}
    @media (max-width:990px){
        .home_slider_content ul li .home_slider_box{ height:600px;}
        .home_slider_content ul li .home_slider_box h2{ font-size:32px; margin-bottom:50px;}
        .home_slider_content .bx-pager{ top:calc(100% - 52px);}
    }
    @media (max-width:768px){
        .home_slider_content ul li .home_slider_box .inner{ padding-bottom:52px;}
        .home_slider_content ul li .home_slider_box{ height:480px;}
        .home_slider_content ul li .home_slider_box h2{ font-size:24px; margin-bottom:20px;}
        .home_slider_content ul li .home_slider_box .red_arrow_button{ padding-top:8px; padding-bottom:8px; padding-right:30px; font-size:14px; width:140px;}
        .red_arrow_button:after{ top:8px; right:15px;}
    }
</style>
<div class="home_slider_wrapper">
    <div class="home_slider_content">
        <ul class="home_slider_list">
            <li>
                <div class="home_slider_box" style="background-image:url('assets/home/wp-content/themes/vfx_new/images/home_banner_mt4_0121.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
                    <div class="inner">
                        <div class="tableBox">
                            <div class="table_cellBox">
                                <div class="text_box">
                                    <h2>Access to an automated trading system, Commodities from Whales Corp</h2>
                                    <a class="red_arrow_button" href="register">start now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="home_slider_box" style="background-image:url('assets/home/wp-content/themes/vfx_new/images/home_banner_bitcoin_0121.jpg'); background-position:center bottom; background-repeat:no-repeat; background-size:cover;">
                    <div class="inner">
                        <div class="tableBox">
                            <div class="table_cellBox">
                                <div class="text_box">
                                    <h2>Join the Crypto Revolution and Start Trading Bitcoin CFDs</h2>
                                    <a class="red_arrow_button" href="register">start now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="home_slider_box" style="background-image:url('assets/home/wp-content/themes/vfx_new/images/home_banner_img3.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
                    <div class="inner">
                        <div class="tableBox">
                            <div class="table_cellBox">
                                <div class="text_box">
                                    <h2>Navigate Global Market volatility with Daily Email Signals</h2>
                                    <a class="red_arrow_button" href="register">start now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="home_slider_box" style="background-image:url('assets/home/wp-content/themes/vfx_new/images/home_banner_img4.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
                    <div class="inner">
                        <div class="tableBox">
                            <div class="table_cellBox">
                                <div class="text_box">
                                    <h2>Celebrating 10 Years of Excellence as an Award Winning CFD Broker</h2>
                                    <a class="red_arrow_button" href="register">start now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <style>
        .banner_bottom{ -moz-box-shadow:0px 3px 3px #e9e9e9; -webkit-box-shadow:0px 3px 3px #e9e9e9;box-shadow:0px 3px 3px #e9e9e9; position:absolute; padding:8px 0px 0px; left:0px; bottom:0px; width:100%; background:#fefdfe; border-top:1px solid #e9e9e9;}
        .banner_bottom_fixed{ display:none; position:fixed; z-index:99; width:100%; left:0px; bottom:0px;}
        .banner_bottom_fixed .banner_bottom{ display:block;}
        .footer_banner_bottom_fixed{position:fixed; z-index:99; width:100%; left:0px; bottom:0px;}
        .footer_banner_bottom_fixed .banner_bottom{ display:block;}
        .banner_bottom .banner_bottom_list{box-sizing:border-box;-moz-box-sizing:border-box; -webkit-box-sizing:border-box;font-size: 0; float:left;}
        .banner_bottom .banner_bottom_list .banner_bottom_list_item{display: inline-block; box-sizing:border-box; -moz-box-sizing:border-box; -webkit-box-sizing:border-box; padding:10px 20px;min-height:56px; position:relative;}
        .banner_bottom .banner_bottom_list .banner_bottom_list_item:before{ content:""; display:block; width:1px; height:35px; position:absolute; left:0px; top:7px; background:#e7e7e7;}
        .banner_bottom .banner_bottom_list .banner_bottom_list_item:first-child{padding-left: 0;}
        .banner_bottom .banner_bottom_list .banner_bottom_list_item:first-child:before{ display:none;}
        .banner_bottom h2{font-size:30px;color: #2544a2;font-weight: normal;margin:0px; padding:0px;}
        .banner_bottom h2 .text{font-size:12px;display: inline-block;font-weight: normal;text-align: left;line-height: 1;vertical-align: middle;}
        .banner_bottom .text_box{ float:left; font-size:17px; color:#2544a2; padding:6px 0px 0px 30px;}
        .banner_bottom .text_box strong{ display:block;}
        .banner_bottom .get_started_link{ float:right; text-transform:uppercase; background:#d72b2f; border-radius:5px; text-shadow:0px 0px 1px #FFF; padding:10px 23px 10px 6px; height:38px; line-height:18px; width:152px; color:#FFF; font-size:15px; text-align:center; margin-top:5px; position:relative;}
        .banner_bottom .get_started_link:hover{ color:#FFF; text-decoration:none;background:#fd0202;}
        .banner_bottom .get_started_link:after{ content: "\f105";font-family: 'FontAwesome'; position:absolute; right:12px; top:10px;}

        @media (max-width:990px){
            .banner_bottom{ display:none !important;}
        }
    </style>
    <div class="banner_bottom">
        <div class="inner">
            <div class="banner_bottom_list">
                <div class="banner_bottom_list_item">
                    <h2>0.0<span class="text">&nbsp;spreads <br />&nbsp;from</span></h2>
                </div>
                <div class="banner_bottom_list_item">
                    <h2>500:1<span class="text">&nbsp;leverage <br /> &nbsp;up to</span></h2>
                </div>
                <div class="banner_bottom_list_item">
                    <h2>$5000<span class="text">&nbsp;minimum <br />&nbsp;deposit</span></h2>
                </div>
                <div class="banner_bottom_list_item">
                    <h2>$0<span class="text">&nbsp;Deposit <br />&nbsp;fees</span></h2>
                </div>
            </div>
            <div class="text_box">
                <strong>Fast & Easy</strong>
                <span>Account Opening</span>
            </div>
            <a class="get_started_link" href="register">get started</a>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div class="home_content">
    <!--Home Row1 开始-->
    <style>
        .home_row1{ padding:62px 0px;}
        .home_row1 .tab_title{ padding:0px; margin:0px -2px;}
        .home_row1 .tab_title:after{ content:""; display:block; width:100%; clear:both;}
        .home_row1 .tab_title li{ padding:0px 2px 4px; margin:0px; float:left;}
        .home_row1 .tab_title li.tab_title_forex{ width:23.5%;}
        .home_row1 .tab_title li.tab_title_commodities{ width:26.5%;}
        .home_row1 .tab_title li.tab_title_indices{ width:21.5%;}
        .home_row1 .tab_title li.tab_title_share_cfds{ width:28.5%;}
        .home_row1 .tab_title li span{ display:block; height:50px; background:#e3e7e9; text-transform:uppercase; color:#8e9090; cursor:pointer; border-radius:5px 5px 0px 0px; text-align:center; font-size:19px; padding:15px 3px; line-height:20px;}
        .home_row1 .tab_title li.active span{ background:#2544a2; color:#FFF;}
        .home_row1 .tab_list .tab_item{position:absolute;left:-9999px;}
        .home_row1 .tab_list .tab_item.active{position:relative;left:0;}
        .home_row1 .tab_list{}
        .home_row1 .tab_list .tab_item{ border:1px solid #e8e8e8; border-radius:5px; padding:40px 40px 48px; background:#FFF;}
        .home_row1 .tab_list .text_box{ width:285px; float:left;}
        .home_row1 .tab_list .text_box h2{ margin:0px 0px 18px; font-weight:bold; font-size:28px; color:#17307d; line-height:1.5; text-align:left; text-transform:none;}
        .home_row1 .tab_list .text_box h2:after{ display:none;}
        .home_row1 .tab_list .text_box p{ padding:0px; margin:0px 0px 52px; font-size:15px; color:#17307d; line-height:1.6;}
        .home_row1 .tab_list .text_box a{ display:block; text-transform:uppercase; background:#d72b2f; border-radius:5px; text-shadow:0px 0px 1px #FFF; padding:10px 27px 10px 2px; height:45px; line-height:25px; width:207px; color:#FFF; font-size:16px; text-align:center; position:relative;}
        .home_row1 .tab_list .text_box a:hover{ color:#FFF; text-decoration:none;background:#fd0202;}
        .home_row1 .tab_list .text_box a:after{ content: "\f105";font-family: 'FontAwesome'; position:absolute; right:20px; top:10px;}
        .home_row1 .tab_list .right_table{ width:476px; float:right; margin-top:6px; margin-left:auto; margin-right:auto;}
        .home_row1 .tab_list .right_table table{ width:100%;}
        .home_row1 .tab_list .right_table table tr td{ border-top:1px solid #f1f1f1; padding:14px 5px; color:#2544a2; font-size:16px; width:25%;}
        .home_row1 .tab_list .right_table table tr:first-child td{ border-top:0px;}
        .home_row1 .tab_list .right_table table tr td.green_text{ color:#00be00;}
        .home_row1 .tab_list .right_table table tr td.red_text{ color:#ea1917;}
        .home_row1 .tab_list .right_table table tr td.black_text{ color:#8e9090;}
        .home_row1 .tab_list .right_table table tr td:nth-child(2){ text-align:center;}
        .home_row1 .echarts_wrapper{padding: 0 !important;}
        .home_row1 .echarts_wrapper > div{height:40px;}
        .home_row1 .rotate_data{margin: 50px auto;display: block;animation:rotate_data 1s infinite linear;-webkit-animation:rotate_data 1s infinite linear;}
        .home_row1 .no_data{display: none;text-align: center;margin: 100px auto;color: #8e9090;}
        @keyframes rotate_data {
            from {
                transform: rotate(0);
            }
            to {
                transform: rotate(360deg);
            }
        }
        @-moz-keyframes rotate_data
        {
            from {
                transform: rotate(0);
            }
            to {
                transform: rotate(360deg);
            }
        }

        @-webkit-keyframes rotate_data
        {
            from {
                transform: rotate(0);
            }
            to {
                transform: rotate(360deg);
            }
        }

        @-o-keyframes rotate_data
        {
            from {
                transform: rotate(0);
            }
            to {
                transform: rotate(360deg);
            }
        }
        @media (max-width:900px){
            .home_row1 .tab_list .text_box{ width:100%; float:none; padding-bottom:30px;}
            .home_row1 .tab_list .text_box p{ margin-bottom:25px;}
            .home_row1 .tab_list .right_table{ float:none; max-width:100%;}
        }
        @media (max-width:768px){
            .home_row1 .tab_list .text_box h2{ font-size:24px;}
            .home_row1 .tab_title li.tab_title_forex,
            .home_row1 .tab_title li.tab_title_commodities,
            .home_row1 .tab_title li.tab_title_indices,
            .home_row1 .tab_title li.tab_title_share_cfds{ width:50%;}
            .home_row1 .tab_title li span{ font-size:16px;}
        }
        @media (max-width:600px){
            .home_row1 .tab_list .right_table{ overflow-x:scroll;}
            .home_row1 .tab_list .right_table table{ width:476px;}
        }
        @media (max-width:420px){
            .home_row1 .tab_list .tab_item{ padding-left:20px; padding-right:20px;}
        }
    </style>
    <div class="home_row1">
        <div class="inner">
            <ul class="tab_title">
                <li class="tab_title_forex active"><span>Market</span></li>
                <li class="tab_title_commodities"><span>Commodities</span></li>
                <li class="tab_title_indices"><span>indices</span></li>
                <li class="tab_title_share_cfds"><span>Share CFDs</span></li>
            </ul>
            <div class="tab_list">
                <div class="tab_item tab_item1 active">
                    <div class="text_box">
                        <h2>Trade Market</h2>
                        <p>Start trading the most liquid financial market in the world and capitalize on global economic volatility.</p>
                        <a href="login">trade now</a>
                    </div>
                    <div class="right_table">
                        <h3 class="no_data">Coming Soon</h3>
                        <img class="rotate_data" src="assets/home/wp-content/themes/vfx_new/images/newdemo_londing.png" alt="">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style=" padding:0px; margin:0px;">
                            <tbody id="tbody1">
                            <tr>
                                <td class="symbol" data-symbol="GBPUSD">BTC / SHIB</td>
                                <td class="product_img"><img src="assets/home/eth.jpg" alt="" width="50px" height="30px"></td>
                                <td class="change"></td>
                                <td class="echarts_wrapper"><div id="echarts0" class="echarts"></div></td>
                            </tr>
                            <tr>
                                <td class="symbol" data-symbol="USDJPY">DOGE / ETH</td>
                                <td class="product_img"><img src="assets/home/eth.jpg" alt="" width="50px" height="30px"></td>
                                <td class="change"></td>
                                <td class="echarts_wrapper"><div id="echarts1" class="echarts"></div></td>
                            </tr>
                            <tr>
                                <td class="symbol" data-symbol="EURUSD">VET / FTM</td>
                                <td class="product_img"><img src="assets/home/eth.jpg" alt="" width="50px" height="30px"></td>
                                <td class="change"></td>
                                <td class="echarts_wrapper"><div id="echarts2" class="echarts"></div></td>
                            </tr>
                            <tr>
                                <td class="symbol" data-symbol="AUDUSD">BTC / SOL</td>
                                <td class="product_img"><img src="assets/home/eth.jpg" alt="" width="50px" height="30px"></td>
                                <td class="change"></td>
                                <td class="echarts_wrapper"><div id="echarts3" class="echarts"></div></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="tab_item tab_item2">
                    <div class="text_box">
                        <h2>Trade Commodities</h2>
                        <p>Choose from precious metals, oil and soft commodities to take advantage of major market cycles.</p>
                        <a href="login">trade now</a>
                    </div>
                    <div class="right_table">
                        <h3 class="no_data">Coming Soon</h3>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style=" padding:0px; margin:0px;">
                            <tbody id="tbody2">
                            <tr>
                                <td class="symbol" data-symbol="COPPER-C">COPPER-C</td>
                                <td class="product_img"><img src="assets/home/wp-content/themes/vfx_new/images/home_row1_tab_commodities_img4.png" alt=""></td>
                                <td class="change"></td>
                                <td class="echarts_wrapper"><div id="echarts4" class="echarts"></div></td>
                            </tr>
                            <tr>
                                <td class="symbol" data-symbol="XAGUSD">XAGUSD</td>
                                <td class="product_img"><img src="assets/home/wp-content/themes/vfx_new/images/home_row1_tab_commodities_img3.png" alt=""></td>
                                <td class="change"></td>
                                <td class="echarts_wrapper"><div id="echarts5" class="echarts"></div></td>
                            </tr>
                            <tr>
                                <td class="symbol" data-symbol="XAUUSD">XAUUSD</td>
                                <td class="product_img"><img src="assets/home/wp-content/themes/vfx_new/images/home_row1_tab_commodities_img2.png" alt=""></td>
                                <td class="change"></td>
                                <td class="echarts_wrapper"><div id="echarts6" class="echarts"></div></td>
                            </tr>
                            <tr>
                                <td class="symbol" data-symbol="CL-OIL">CL-OIL</td>
                                <td class="product_img"><img src="assets/home/wp-content/themes/vfx_new/images/home_row1_tab_commodities_img1.png" alt=""></td>
                                <td class="change"></td>
                                <td class="echarts_wrapper"><div id="echarts7" class="echarts"></div></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="tab_item tab_item3">
                    <div class="text_box">
                        <h2>Trade Indices</h2>
                        <p>Leverage the volatility of the largest stock market indexes in the world such as the SP500, DAX, FTSE and DJ30.</p>
                        <a href="login">trade now</a>
                    </div>
                    <div class="right_table">
                        <h3 class="no_data">Coming Soon</h3>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style=" padding:0px; margin:0px;">
                            <tbody id="tbody3">
                            <tr>
                                <td class="symbol" data-symbol="SP500">SP500</td>
                                <td class="product_img"><img src="assets/home/wp-content/themes/vfx_new/images/home_row1_tab_indices_img3.png" alt=""></td>
                                <td class="change"></td>
                                <td class="echarts_wrapper"><div id="echarts8" class="echarts"></div></td>
                            </tr>
                            <tr>
                                <td class="symbol" data-symbol="DJ30">DJ30</td>
                                <td class="product_img"><img src="assets/home/wp-content/themes/vfx_new/images/home_row1_tab_indices_img3.png" alt=""></td>
                                <td class="change"></td>
                                <td class="echarts_wrapper"><div id="echarts9" class="echarts"></div></td>
                            </tr>
                            <tr>
                                <td class="symbol" data-symbol="DAX30">DAX30</td>
                                <td class="product_img"><img src="assets/home/wp-content/themes/vfx_new/images/home_row1_tab_indices_img2.png" alt=""></td>
                                <td class="change"></td>
                                <td class="echarts_wrapper"><div id="echarts11" class="echarts"></div></td>
                            </tr>
                            <tr>
                                <td class="symbol" data-symbol="SPI200">SPI200</td>
                                <td class="product_img"><img src="assets/home/wp-content/themes/vfx_new/images/home_row1_tab_indices_img1.png" alt=""></td>
                                <td class="change"></td>
                                <td class="echarts_wrapper"><div id="echarts10" class="echarts"></div></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="tab_item tab_item4">
                    <div class="text_box">
                        <h2>Trade Share CFDs</h2>
                        <p>Capitalise on the moves of some of the biggest companies in the world and trade our US and Hong Kong Share CFDs</p>
                        <a href="login">trade now</a>
                    </div>
                    <div class="right_table">
                        <h3 class="no_data">Coming Soon</h3>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style=" padding:0px; margin:0px;">
                            <tbody id="tbody4">
                            <tr>
                                <td class="symbol" data-symbol="AAPL">Apple</td>
                                <td class="product_img"><img src="assets/home/wp-content/themes/vfx_new/images/home_row1_tab_share_cfds_img1.png" alt=""></td>
                                <td class="change"></td>
                                <td class="echarts_wrapper"><div id="echarts12" class="echarts"></div></td>
                            </tr>
                            <tr>
                                <td class="symbol" data-symbol="GOOG">Google</td>
                                <td class="product_img"><img src="assets/home/wp-content/themes/vfx_new/images/home_row1_tab_share_cfds_img2.png" alt=""></td>
                                <td class="change"></td>
                                <td class="echarts_wrapper"><div id="echarts13" class="echarts"></div></td>
                            </tr>
                            <tr>
                                <td class="symbol" data-symbol="FB">Facebook</td>
                                <td class="product_img"><img src="assets/home/wp-content/themes/vfx_new/images/home_row1_tab_share_cfds_img3.png" alt=""></td>
                                <td class="change"></td>
                                <td class="echarts_wrapper"><div id="echarts14" class="echarts"></div></td>
                            </tr>
                            <tr>
                                <td class="symbol" data-symbol="NFLX">Netflix</td>
                                <td class="product_img"><img src="assets/home/wp-content/themes/vfx_new/images/home_row1_tab_share_cfds_img4.png" alt=""></td>
                                <td class="change"></td>
                                <td class="echarts_wrapper"><div id="echarts15" class="echarts"></div></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        jQuery(document).ready(function($){
            //产品切换
            $(".home_row1 .tab_title li").click(function () {
                var index = $(this).index();
                $(this).addClass("active").siblings("li").removeClass("active");
                $(".home_row1 .tab_list .tab_item:eq(" + index + ")").addClass("active").siblings(".tab_item").removeClass("active");
            });

        });
        var echartsJson='{"message": "GET Request successful.","result":[{"symbol":"AUDUSD","items":[{"startTime":"2021-02-10T20:00:00","open":0.77284,"close":0.7726,"low":0.7723,"high":0.77313,"volume":1796,"period":"H1"},{"startTime":"2021-02-10T21:00:00","open":0.7726,"close":0.77276,"low":0.77213,"high":0.77305,"volume":4387,"period":"H1"},{"startTime":"2021-02-10T22:00:00","open":0.77275,"close":0.77195,"low":0.77167,"high":0.77294,"volume":4111,"period":"H1"},{"startTime":"2021-02-10T23:00:00","open":0.77194,"close":0.77215,"low":0.77185,"high":0.77228,"volume":1179,"period":"H1"},{"startTime":"2021-02-11T00:00:00","open":0.77202,"close":0.77208,"low":0.77189,"high":0.77226,"volume":1247,"period":"H1"},{"startTime":"2021-02-11T01:00:00","open":0.77209,"close":0.77232,"low":0.77198,"high":0.77237,"volume":1015,"period":"H1"},{"startTime":"2021-02-11T02:00:00","open":0.77232,"close":0.77124,"low":0.77121,"high":0.77239,"volume":1892,"period":"H1"},{"startTime":"2021-02-11T03:00:00","open":0.77125,"close":0.77164,"low":0.77122,"high":0.77183,"volume":1808,"period":"H1"},{"startTime":"2021-02-11T04:00:00","open":0.77164,"close":0.77242,"low":0.77162,"high":0.77242,"volume":2139,"period":"H1"},{"startTime":"2021-02-11T05:00:00","open":0.77243,"close":0.77318,"low":0.77196,"high":0.77323,"volume":2304,"period":"H1"},{"startTime":"2021-02-11T06:00:00","open":0.77319,"close":0.77338,"low":0.77319,"high":0.77377,"volume":1795,"period":"H1"},{"startTime":"2021-02-11T07:00:00","open":0.77339,"close":0.77404,"low":0.77328,"high":0.77408,"volume":1766,"period":"H1"},{"startTime":"2021-02-11T08:00:00","open":0.77405,"close":0.77496,"low":0.77404,"high":0.77501,"volume":1792,"period":"H1"},{"startTime":"2021-02-11T09:00:00","open":0.77497,"close":0.77461,"low":0.77443,"high":0.7752,"volume":3186,"period":"H1"},{"startTime":"2021-02-11T10:00:00","open":0.77459,"close":0.77355,"low":0.77334,"high":0.7749,"volume":5089,"period":"H1"},{"startTime":"2021-02-11T11:00:00","open":0.77355,"close":0.77442,"low":0.7733,"high":0.77457,"volume":3195,"period":"H1"},{"startTime":"2021-02-11T12:00:00","open":0.77444,"close":0.77381,"low":0.77364,"high":0.77455,"volume":2991,"period":"H1"},{"startTime":"2021-02-11T13:00:00","open":0.77381,"close":0.77442,"low":0.77358,"high":0.77471,"volume":2543,"period":"H1"},{"startTime":"2021-02-11T14:00:00","open":0.77441,"close":0.77534,"low":0.77434,"high":0.77534,"volume":2285,"period":"H1"},{"startTime":"2021-02-11T15:00:00","open":0.77534,"close":0.77665,"low":0.77534,"high":0.77697,"volume":3458,"period":"H1"},{"startTime":"2021-02-11T16:00:00","open":0.77664,"close":0.77626,"low":0.77583,"high":0.7768,"volume":1769,"period":"H1"}]},{"symbol":"EURUSD","items":[{"startTime":"2021-02-10T20:00:00","open":1.2131,"close":1.21293,"low":1.21276,"high":1.21336,"volume":908,"period":"H1"},{"startTime":"2021-02-10T21:00:00","open":1.21291,"close":1.21286,"low":1.21239,"high":1.21314,"volume":2085,"period":"H1"},{"startTime":"2021-02-10T22:00:00","open":1.21283,"close":1.21192,"low":1.21182,"high":1.21284,"volume":2045,"period":"H1"},{"startTime":"2021-02-10T23:00:00","open":1.21193,"close":1.21176,"low":1.2116,"high":1.21214,"volume":1263,"period":"H1"},{"startTime":"2021-02-11T00:00:00","open":1.21165,"close":1.21176,"low":1.21128,"high":1.21182,"volume":406,"period":"H1"},{"startTime":"2021-02-11T01:00:00","open":1.21176,"close":1.21183,"low":1.21158,"high":1.21191,"volume":1041,"period":"H1"},{"startTime":"2021-02-11T02:00:00","open":1.21183,"close":1.21135,"low":1.21129,"high":1.21193,"volume":1295,"period":"H1"},{"startTime":"2021-02-11T03:00:00","open":1.21136,"close":1.21166,"low":1.21134,"high":1.21172,"volume":956,"period":"H1"},{"startTime":"2021-02-11T04:00:00","open":1.21168,"close":1.21195,"low":1.21163,"high":1.21201,"volume":879,"period":"H1"},{"startTime":"2021-02-11T05:00:00","open":1.21196,"close":1.21202,"low":1.21173,"high":1.21214,"volume":1074,"period":"H1"},{"startTime":"2021-02-11T06:00:00","open":1.21204,"close":1.2121,"low":1.21204,"high":1.21246,"volume":803,"period":"H1"},{"startTime":"2021-02-11T07:00:00","open":1.21212,"close":1.21258,"low":1.21211,"high":1.2127,"volume":928,"period":"H1"},{"startTime":"2021-02-11T08:00:00","open":1.21259,"close":1.2129,"low":1.21255,"high":1.21294,"volume":912,"period":"H1"},{"startTime":"2021-02-11T09:00:00","open":1.21291,"close":1.21227,"low":1.2121,"high":1.2132,"volume":2630,"period":"H1"},{"startTime":"2021-02-11T10:00:00","open":1.21227,"close":1.21228,"low":1.21174,"high":1.21256,"volume":4828,"period":"H1"},{"startTime":"2021-02-11T11:00:00","open":1.21227,"close":1.21297,"low":1.21214,"high":1.21354,"volume":3297,"period":"H1"},{"startTime":"2021-02-11T12:00:00","open":1.21298,"close":1.21231,"low":1.21227,"high":1.213,"volume":2238,"period":"H1"},{"startTime":"2021-02-11T13:00:00","open":1.21233,"close":1.21267,"low":1.21203,"high":1.21306,"volume":2483,"period":"H1"},{"startTime":"2021-02-11T14:00:00","open":1.21266,"close":1.21346,"low":1.21265,"high":1.21346,"volume":2948,"period":"H1"},{"startTime":"2021-02-11T15:00:00","open":1.21345,"close":1.21431,"low":1.21333,"high":1.21489,"volume":4679,"period":"H1"},{"startTime":"2021-02-11T16:00:00","open":1.2143,"close":1.21341,"low":1.2131,"high":1.21437,"volume":2001,"period":"H1"}]},{"symbol":"GBPUSD","items":[{"startTime":"2021-02-10T20:00:00","open":1.38485,"close":1.38452,"low":1.38424,"high":1.38509,"volume":1012,"period":"H1"},{"startTime":"2021-02-10T21:00:00","open":1.38452,"close":1.38401,"low":1.3838,"high":1.38512,"volume":3139,"period":"H1"},{"startTime":"2021-02-10T22:00:00","open":1.38399,"close":1.38329,"low":1.38271,"high":1.38405,"volume":3926,"period":"H1"},{"startTime":"2021-02-10T23:00:00","open":1.38329,"close":1.3834,"low":1.38298,"high":1.38356,"volume":1426,"period":"H1"},{"startTime":"2021-02-11T00:00:00","open":1.38281,"close":1.3829,"low":1.38214,"high":1.3834,"volume":1548,"period":"H1"},{"startTime":"2021-02-11T01:00:00","open":1.38291,"close":1.38297,"low":1.38279,"high":1.38329,"volume":1368,"period":"H1"},{"startTime":"2021-02-11T02:00:00","open":1.38292,"close":1.38219,"low":1.38199,"high":1.38301,"volume":1301,"period":"H1"},{"startTime":"2021-02-11T03:00:00","open":1.38218,"close":1.38282,"low":1.38212,"high":1.38287,"volume":1109,"period":"H1"},{"startTime":"2021-02-11T04:00:00","open":1.38282,"close":1.38332,"low":1.38265,"high":1.38342,"volume":1803,"period":"H1"},{"startTime":"2021-02-11T05:00:00","open":1.38335,"close":1.38443,"low":1.3832,"high":1.38446,"volume":1760,"period":"H1"},{"startTime":"2021-02-11T06:00:00","open":1.38444,"close":1.38472,"low":1.38441,"high":1.38495,"volume":1478,"period":"H1"},{"startTime":"2021-02-11T07:00:00","open":1.38473,"close":1.38461,"low":1.38451,"high":1.38513,"volume":1854,"period":"H1"},{"startTime":"2021-02-11T08:00:00","open":1.38462,"close":1.38527,"low":1.38409,"high":1.38537,"volume":1720,"period":"H1"},{"startTime":"2021-02-11T09:00:00","open":1.38526,"close":1.38393,"low":1.38384,"high":1.38585,"volume":3480,"period":"H1"},{"startTime":"2021-02-11T10:00:00","open":1.38392,"close":1.38169,"low":1.3813,"high":1.38419,"volume":6601,"period":"H1"},{"startTime":"2021-02-11T11:00:00","open":1.38173,"close":1.38343,"low":1.38132,"high":1.38367,"volume":5171,"period":"H1"},{"startTime":"2021-02-11T12:00:00","open":1.38348,"close":1.38205,"low":1.38187,"high":1.38351,"volume":3746,"period":"H1"},{"startTime":"2021-02-11T13:00:00","open":1.38206,"close":1.38255,"low":1.38187,"high":1.38289,"volume":3681,"period":"H1"},{"startTime":"2021-02-11T14:00:00","open":1.38254,"close":1.38307,"low":1.38225,"high":1.38341,"volume":4081,"period":"H1"},{"startTime":"2021-02-11T15:00:00","open":1.38305,"close":1.38357,"low":1.38292,"high":1.38444,"volume":5267,"period":"H1"},{"startTime":"2021-02-11T16:00:00","open":1.38357,"close":1.38217,"low":1.38151,"high":1.38364,"volume":2949,"period":"H1"}]},{"symbol":"USDJPY","items":[{"startTime":"2021-02-10T20:00:00","open":104.652,"close":104.648,"low":104.638,"high":104.669,"volume":504,"period":"H1"},{"startTime":"2021-02-10T21:00:00","open":104.649,"close":104.636,"low":104.628,"high":104.663,"volume":1206,"period":"H1"},{"startTime":"2021-02-10T22:00:00","open":104.637,"close":104.629,"low":104.623,"high":104.655,"volume":1399,"period":"H1"},{"startTime":"2021-02-10T23:00:00","open":104.629,"close":104.588,"low":104.586,"high":104.634,"volume":654,"period":"H1"},{"startTime":"2021-02-11T00:00:00","open":104.571,"close":104.603,"low":104.549,"high":104.605,"volume":1421,"period":"H1"},{"startTime":"2021-02-11T01:00:00","open":104.603,"close":104.613,"low":104.596,"high":104.639,"volume":807,"period":"H1"},{"startTime":"2021-02-11T02:00:00","open":104.614,"close":104.603,"low":104.587,"high":104.638,"volume":685,"period":"H1"},{"startTime":"2021-02-11T03:00:00","open":104.603,"close":104.561,"low":104.561,"high":104.603,"volume":873,"period":"H1"},{"startTime":"2021-02-11T04:00:00","open":104.561,"close":104.599,"low":104.56,"high":104.614,"volume":1353,"period":"H1"},{"startTime":"2021-02-11T05:00:00","open":104.598,"close":104.595,"low":104.574,"high":104.621,"volume":995,"period":"H1"},{"startTime":"2021-02-11T06:00:00","open":104.594,"close":104.592,"low":104.572,"high":104.598,"volume":1150,"period":"H1"},{"startTime":"2021-02-11T07:00:00","open":104.591,"close":104.586,"low":104.578,"high":104.606,"volume":815,"period":"H1"},{"startTime":"2021-02-11T08:00:00","open":104.585,"close":104.546,"low":104.545,"high":104.592,"volume":787,"period":"H1"},{"startTime":"2021-02-11T09:00:00","open":104.544,"close":104.581,"low":104.543,"high":104.59,"volume":1532,"period":"H1"},{"startTime":"2021-02-11T10:00:00","open":104.58,"close":104.745,"low":104.555,"high":104.757,"volume":3558,"period":"H1"},{"startTime":"2021-02-11T11:00:00","open":104.744,"close":104.658,"low":104.657,"high":104.747,"volume":2768,"period":"H1"},{"startTime":"2021-02-11T12:00:00","open":104.656,"close":104.714,"low":104.654,"high":104.714,"volume":2434,"period":"H1"},{"startTime":"2021-02-11T13:00:00","open":104.713,"close":104.717,"low":104.701,"high":104.746,"volume":1772,"period":"H1"},{"startTime":"2021-02-11T14:00:00","open":104.712,"close":104.701,"low":104.677,"high":104.728,"volume":1077,"period":"H1"},{"startTime":"2021-02-11T15:00:00","open":104.701,"close":104.68,"low":104.632,"high":104.701,"volume":2331,"period":"H1"},{"startTime":"2021-02-11T16:00:00","open":104.679,"close":104.759,"low":104.679,"high":104.782,"volume":1284,"period":"H1"}]},{"symbol":"CL-OIL","items":[{"startTime":"2021-02-10T20:00:00","open":58.674,"close":58.6,"low":58.54,"high":58.69,"volume":575,"period":"H1"},{"startTime":"2021-02-10T21:00:00","open":58.59,"close":58.71,"low":58.57,"high":58.76,"volume":1261,"period":"H1"},{"startTime":"2021-02-10T22:00:00","open":58.704,"close":58.52,"low":58.46,"high":58.72,"volume":714,"period":"H1"},{"startTime":"2021-02-10T23:00:00","open":58.51,"close":58.35,"low":58.31,"high":58.53,"volume":689,"period":"H1"},{"startTime":"2021-02-11T01:00:00","open":58.37,"close":58.32,"low":58.3,"high":58.45,"volume":430,"period":"H1"},{"startTime":"2021-02-11T02:00:00","open":58.31,"close":58.19,"low":58.174,"high":58.34,"volume":377,"period":"H1"},{"startTime":"2021-02-11T03:00:00","open":58.2,"close":58.19,"low":58.16,"high":58.29,"volume":676,"period":"H1"},{"startTime":"2021-02-11T04:00:00","open":58.19,"close":58.34,"low":58.16,"high":58.35,"volume":343,"period":"H1"},{"startTime":"2021-02-11T05:00:00","open":58.334,"close":58.3,"low":58.26,"high":58.35,"volume":299,"period":"H1"},{"startTime":"2021-02-11T06:00:00","open":58.31,"close":58.36,"low":58.3,"high":58.45,"volume":658,"period":"H1"},{"startTime":"2021-02-11T07:00:00","open":58.354,"close":58.35,"low":58.32,"high":58.4,"volume":271,"period":"H1"},{"startTime":"2021-02-11T08:00:00","open":58.36,"close":58.4,"low":58.3,"high":58.41,"volume":315,"period":"H1"},{"startTime":"2021-02-11T09:00:00","open":58.41,"close":58.35,"low":58.284,"high":58.44,"volume":760,"period":"H1"},{"startTime":"2021-02-11T10:00:00","open":58.36,"close":58.29,"low":58.22,"high":58.42,"volume":1443,"period":"H1"},{"startTime":"2021-02-11T11:00:00","open":58.29,"close":58.29,"low":58.2,"high":58.43,"volume":774,"period":"H1"},{"startTime":"2021-02-11T12:00:00","open":58.29,"close":58.35,"low":58.19,"high":58.37,"volume":738,"period":"H1"},{"startTime":"2021-02-11T13:00:00","open":58.34,"close":58.27,"low":58.1,"high":58.36,"volume":837,"period":"H1"},{"startTime":"2021-02-11T14:00:00","open":58.28,"close":58.21,"low":58.16,"high":58.33,"volume":671,"period":"H1"},{"startTime":"2021-02-11T15:00:00","open":58.21,"close":58.55,"low":58.21,"high":58.56,"volume":1275,"period":"H1"},{"startTime":"2021-02-11T16:00:00","open":58.55,"close":58.58,"low":58.47,"high":58.59,"volume":606,"period":"H1"}]},{"symbol":"XAUUSD","items":[{"startTime":"2021-02-10T20:00:00","open":1841.49,"close":1842.9,"low":1841.27,"high":1843.63,"volume":5192,"period":"H1"},{"startTime":"2021-02-10T21:00:00","open":1842.9,"close":1843,"low":1842.19,"high":1846.22,"volume":11101,"period":"H1"},{"startTime":"2021-02-10T22:00:00","open":1843.01,"close":1842.43,"low":1840.75,"high":1843.28,"volume":10554,"period":"H1"},{"startTime":"2021-02-10T23:00:00","open":1842.44,"close":1843.16,"low":1841.96,"high":1843.16,"volume":3106,"period":"H1"},{"startTime":"2021-02-11T01:00:00","open":1843.01,"close":1842.01,"low":1841.6,"high":1844.2,"volume":3030,"period":"H1"},{"startTime":"2021-02-11T02:00:00","open":1842,"close":1839.71,"low":1839.62,"high":1842.1,"volume":3806,"period":"H1"},{"startTime":"2021-02-11T03:00:00","open":1839.67,"close":1838.75,"low":1837.3,"high":1841.16,"volume":4919,"period":"H1"},{"startTime":"2021-02-11T04:00:00","open":1838.75,"close":1837.86,"low":1835.05,"high":1838.77,"volume":5871,"period":"H1"},{"startTime":"2021-02-11T05:00:00","open":1837.86,"close":1837.45,"low":1834.1,"high":1838.43,"volume":5229,"period":"H1"},{"startTime":"2021-02-11T06:00:00","open":1837.47,"close":1835.87,"low":1835.51,"high":1838.27,"volume":4476,"period":"H1"},{"startTime":"2021-02-11T07:00:00","open":1835.94,"close":1836.9,"low":1835.11,"high":1837.44,"volume":4532,"period":"H1"},{"startTime":"2021-02-11T08:00:00","open":1836.9,"close":1842.5,"low":1836.37,"high":1843.89,"volume":5874,"period":"H1"},{"startTime":"2021-02-11T09:00:00","open":1842.54,"close":1843.06,"low":1841.26,"high":1843.96,"volume":9682,"period":"H1"},{"startTime":"2021-02-11T10:00:00","open":1843.05,"close":1842.23,"low":1841.01,"high":1845.83,"volume":13305,"period":"H1"},{"startTime":"2021-02-11T11:00:00","open":1842.22,"close":1842.52,"low":1841.45,"high":1844.66,"volume":8734,"period":"H1"},{"startTime":"2021-02-11T12:00:00","open":1842.56,"close":1840.5,"low":1840.35,"high":1843.02,"volume":7001,"period":"H1"},{"startTime":"2021-02-11T13:00:00","open":1840.5,"close":1841.77,"low":1839.51,"high":1842.77,"volume":7563,"period":"H1"},{"startTime":"2021-02-11T14:00:00","open":1841.75,"close":1843.28,"low":1840.78,"high":1843.74,"volume":8537,"period":"H1"},{"startTime":"2021-02-11T15:00:00","open":1843.34,"close":1843.36,"low":1842.85,"high":1847.47,"volume":14374,"period":"H1"},{"startTime":"2021-02-11T16:00:00","open":1843.36,"close":1842.03,"low":1840.53,"high":1843.6,"volume":6747,"period":"H1"}]},{"symbol":"XAGUSD","items":[{"startTime":"2021-02-10T20:00:00","open":27.026,"close":27.066,"low":27.014,"high":27.085,"volume":2392,"period":"H1"},{"startTime":"2021-02-10T21:00:00","open":27.068,"close":27.043,"low":27.033,"high":27.157,"volume":5085,"period":"H1"},{"startTime":"2021-02-10T22:00:00","open":27.041,"close":26.999,"low":26.944,"high":27.057,"volume":4961,"period":"H1"},{"startTime":"2021-02-10T23:00:00","open":26.997,"close":27.011,"low":26.992,"high":27.034,"volume":1031,"period":"H1"},{"startTime":"2021-02-11T01:00:00","open":27.007,"close":26.997,"low":26.991,"high":27.057,"volume":1543,"period":"H1"},{"startTime":"2021-02-11T02:00:00","open":26.996,"close":26.884,"low":26.884,"high":27,"volume":2115,"period":"H1"},{"startTime":"2021-02-11T03:00:00","open":26.883,"close":26.828,"low":26.691,"high":26.947,"volume":2842,"period":"H1"},{"startTime":"2021-02-11T04:00:00","open":26.828,"close":26.83,"low":26.694,"high":26.84,"volume":2854,"period":"H1"},{"startTime":"2021-02-11T05:00:00","open":26.829,"close":26.85,"low":26.733,"high":26.869,"volume":3003,"period":"H1"},{"startTime":"2021-02-11T06:00:00","open":26.85,"close":26.818,"low":26.792,"high":26.863,"volume":2175,"period":"H1"},{"startTime":"2021-02-11T07:00:00","open":26.82,"close":26.846,"low":26.793,"high":26.862,"volume":2387,"period":"H1"},{"startTime":"2021-02-11T08:00:00","open":26.85,"close":27.075,"low":26.837,"high":27.111,"volume":3291,"period":"H1"},{"startTime":"2021-02-11T09:00:00","open":27.075,"close":27.161,"low":27.043,"high":27.216,"volume":5076,"period":"H1"},{"startTime":"2021-02-11T10:00:00","open":27.164,"close":27.124,"low":27.08,"high":27.283,"volume":6357,"period":"H1"},{"startTime":"2021-02-11T11:00:00","open":27.123,"close":27.133,"low":27.083,"high":27.174,"volume":3286,"period":"H1"},{"startTime":"2021-02-11T12:00:00","open":27.134,"close":27.097,"low":27.095,"high":27.159,"volume":3901,"period":"H1"},{"startTime":"2021-02-11T13:00:00","open":27.096,"close":27.111,"low":27.058,"high":27.158,"volume":3326,"period":"H1"},{"startTime":"2021-02-11T14:00:00","open":27.111,"close":27.112,"low":27.062,"high":27.156,"volume":3510,"period":"H1"},{"startTime":"2021-02-11T15:00:00","open":27.111,"close":27.121,"low":27.078,"high":27.211,"volume":5903,"period":"H1"},{"startTime":"2021-02-11T16:00:00","open":27.119,"close":27.132,"low":27.023,"high":27.139,"volume":3341,"period":"H1"}]},{"symbol":"COPPER-C","items":[{"startTime":"2021-02-10T20:00:00","open":3.7588,"close":3.7596,"low":3.7571,"high":3.7626,"volume":292,"period":"H1"},{"startTime":"2021-02-10T21:00:00","open":3.7601,"close":3.7636,"low":3.7586,"high":3.7651,"volume":497,"period":"H1"},{"startTime":"2021-02-10T22:00:00","open":3.7633,"close":3.7571,"low":3.7526,"high":3.7641,"volume":556,"period":"H1"},{"startTime":"2021-02-10T23:00:00","open":3.7566,"close":3.7631,"low":3.7566,"high":3.7646,"volume":250,"period":"H1"},{"startTime":"2021-02-11T01:00:00","open":3.764,"close":3.7567,"low":3.7557,"high":3.764,"volume":189,"period":"H1"},{"startTime":"2021-02-11T02:00:00","open":3.7562,"close":3.7443,"low":3.7428,"high":3.7565,"volume":312,"period":"H1"},{"startTime":"2021-02-11T03:00:00","open":3.7448,"close":3.7428,"low":3.7398,"high":3.7463,"volume":468,"period":"H1"},{"startTime":"2021-02-11T04:00:00","open":3.743,"close":3.7473,"low":3.741,"high":3.7493,"volume":343,"period":"H1"},{"startTime":"2021-02-11T05:00:00","open":3.7468,"close":3.7508,"low":3.7448,"high":3.7508,"volume":268,"period":"H1"},{"startTime":"2021-02-11T06:00:00","open":3.7505,"close":3.7518,"low":3.7488,"high":3.7528,"volume":156,"period":"H1"},{"startTime":"2021-02-11T07:00:00","open":3.752,"close":3.7543,"low":3.7503,"high":3.7543,"volume":199,"period":"H1"},{"startTime":"2021-02-11T08:00:00","open":3.754,"close":3.7675,"low":3.754,"high":3.7682,"volume":414,"period":"H1"},{"startTime":"2021-02-11T09:00:00","open":3.7677,"close":3.76,"low":3.76,"high":3.7707,"volume":593,"period":"H1"},{"startTime":"2021-02-11T10:00:00","open":3.7602,"close":3.7627,"low":3.7597,"high":3.7687,"volume":954,"period":"H1"},{"startTime":"2021-02-11T11:00:00","open":3.763,"close":3.7597,"low":3.7582,"high":3.7675,"volume":493,"period":"H1"},{"startTime":"2021-02-11T12:00:00","open":3.7602,"close":3.7645,"low":3.7577,"high":3.7652,"volume":394,"period":"H1"},{"startTime":"2021-02-11T13:00:00","open":3.7642,"close":3.7712,"low":3.7632,"high":3.7747,"volume":472,"period":"H1"},{"startTime":"2021-02-11T14:00:00","open":3.771,"close":3.772,"low":3.7662,"high":3.772,"volume":548,"period":"H1"},{"startTime":"2021-02-11T15:00:00","open":3.7727,"close":3.762,"low":3.7615,"high":3.7814,"volume":875,"period":"H1"},{"startTime":"2021-02-11T16:00:00","open":3.7622,"close":3.7538,"low":3.7485,"high":3.764,"volume":488,"period":"H1"}]},{"symbol":"SPI200","items":[{"startTime":"2021-02-10T20:00:00","open":6837.27,"close":6840.27,"low":6833.27,"high":6840.27,"volume":249,"period":"H1"},{"startTime":"2021-02-10T21:00:00","open":6840.27,"close":6844.27,"low":6831.27,"high":6846.27,"volume":689,"period":"H1"},{"startTime":"2021-02-10T22:00:00","open":6845.27,"close":6833.17,"low":6831.27,"high":6847.27,"volume":692,"period":"H1"},{"startTime":"2021-02-11T00:00:00","open":6823.17,"close":6842.17,"low":6812.17,"high":6844.17,"volume":230,"period":"H1"},{"startTime":"2021-02-11T01:00:00","open":6841.17,"close":6867.17,"low":6832.17,"high":6873.17,"volume":1047,"period":"H1"},{"startTime":"2021-02-11T02:00:00","open":6866.17,"close":6841.17,"low":6837.17,"high":6869.17,"volume":796,"period":"H1"},{"startTime":"2021-02-11T03:00:00","open":6840.17,"close":6846.17,"low":6840.17,"high":6855.77,"volume":568,"period":"H1"},{"startTime":"2021-02-11T04:00:00","open":6846.17,"close":6857.17,"low":6844.17,"high":6859.17,"volume":422,"period":"H1"},{"startTime":"2021-02-11T05:00:00","open":6856.17,"close":6859.17,"low":6853.17,"high":6863.17,"volume":317,"period":"H1"},{"startTime":"2021-02-11T06:00:00","open":6859.17,"close":6848.17,"low":6847.17,"high":6859.17,"volume":397,"period":"H1"},{"startTime":"2021-02-11T07:00:00","open":6848.17,"close":6846.17,"low":6842.17,"high":6852.17,"volume":366,"period":"H1"},{"startTime":"2021-02-11T08:00:00","open":6844.77,"close":6845.17,"low":6842.17,"high":6848.17,"volume":133,"period":"H1"},{"startTime":"2021-02-11T09:00:00","open":6846.17,"close":6848.17,"low":6842.17,"high":6851.17,"volume":392,"period":"H1"},{"startTime":"2021-02-11T10:00:00","open":6849.17,"close":6861.17,"low":6843.17,"high":6865.17,"volume":1037,"period":"H1"},{"startTime":"2021-02-11T11:00:00","open":6860.17,"close":6859.17,"low":6855.17,"high":6861.17,"volume":461,"period":"H1"},{"startTime":"2021-02-11T12:00:00","open":6858.17,"close":6858.17,"low":6853.17,"high":6863.17,"volume":400,"period":"H1"},{"startTime":"2021-02-11T13:00:00","open":6858.27,"close":6857.17,"low":6857.17,"high":6863.17,"volume":400,"period":"H1"},{"startTime":"2021-02-11T14:00:00","open":6857.77,"close":6854.17,"low":6852.17,"high":6858.17,"volume":292,"period":"H1"},{"startTime":"2021-02-11T15:00:00","open":6854.17,"close":6853.17,"low":6851.17,"high":6856.17,"volume":323,"period":"H1"},{"startTime":"2021-02-11T16:00:00","open":6853.17,"close":6856.17,"low":6851.17,"high":6856.17,"volume":75,"period":"H1"}]},{"symbol":"DAX30","items":[{"startTime":"2021-02-10T20:00:00","open":13929.5,"close":13923,"low":13917.5,"high":13935.5,"volume":576,"period":"H1"},{"startTime":"2021-02-10T21:00:00","open":13924,"close":13950,"low":13917,"high":13954,"volume":1321,"period":"H1"},{"startTime":"2021-02-10T22:00:00","open":13951,"close":13921,"low":13916,"high":13957,"volume":1206,"period":"H1"},{"startTime":"2021-02-11T02:00:00","open":13915.5,"close":13902.1,"low":13900.1,"high":13929.5,"volume":315,"period":"H1"},{"startTime":"2021-02-11T03:00:00","open":13901.1,"close":13909.1,"low":13900.1,"high":13916.1,"volume":477,"period":"H1"},{"startTime":"2021-02-11T04:00:00","open":13906.1,"close":13920.1,"low":13901.1,"high":13924.1,"volume":395,"period":"H1"},{"startTime":"2021-02-11T05:00:00","open":13921.1,"close":13925.1,"low":13914.1,"high":13927.1,"volume":283,"period":"H1"},{"startTime":"2021-02-11T06:00:00","open":13926.1,"close":13926.1,"low":13920.6,"high":13932.1,"volume":241,"period":"H1"},{"startTime":"2021-02-11T07:00:00","open":13927.1,"close":13929.1,"low":13918.1,"high":13929.6,"volume":185,"period":"H1"},{"startTime":"2021-02-11T08:00:00","open":13929.6,"close":13937.1,"low":13929.1,"high":13943.1,"volume":233,"period":"H1"},{"startTime":"2021-02-11T09:00:00","open":13939.1,"close":13948.4,"low":13925.6,"high":13953.4,"volume":1132,"period":"H1"},{"startTime":"2021-02-11T10:00:00","open":13946.4,"close":13980.3,"low":13911.5,"high":13997.3,"volume":5878,"period":"H1"},{"startTime":"2021-02-11T11:00:00","open":13979.3,"close":13994.3,"low":13964.3,"high":14000.3,"volume":2367,"period":"H1"},{"startTime":"2021-02-11T12:00:00","open":13993.3,"close":13996.1,"low":13970.1,"high":14014.2,"volume":1643,"period":"H1"},{"startTime":"2021-02-11T13:00:00","open":13997.1,"close":14003.4,"low":13992.1,"high":14024.9,"volume":1506,"period":"H1"},{"startTime":"2021-02-11T14:00:00","open":14004.4,"close":14011.9,"low":13989.4,"high":14014.9,"volume":1303,"period":"H1"},{"startTime":"2021-02-11T15:00:00","open":14012.9,"close":14017.8,"low":14011.9,"high":14037.8,"volume":1227,"period":"H1"},{"startTime":"2021-02-11T16:00:00","open":14018.8,"close":14027.8,"low":14015.8,"high":14032.8,"volume":531,"period":"H1"}]},{"symbol":"SP500","items":[{"startTime":"2021-02-10T20:00:00","open":3906.2,"close":3904.45,"low":3902.2,"high":3908.95,"volume":952,"period":"H1"},{"startTime":"2021-02-10T21:00:00","open":3904.7,"close":3915.95,"low":3902.7,"high":3916.7,"volume":3599,"period":"H1"},{"startTime":"2021-02-10T22:00:00","open":3916.2,"close":3909.2,"low":3902.2,"high":3918.95,"volume":4225,"period":"H1"},{"startTime":"2021-02-10T23:00:00","open":3909.12,"close":3912.2,"low":3909.12,"high":3914.2,"volume":1011,"period":"H1"},{"startTime":"2021-02-11T01:00:00","open":3910.15,"close":3910,"low":3908.5,"high":3912.5,"volume":923,"period":"H1"},{"startTime":"2021-02-11T02:00:00","open":3910,"close":3900,"low":3899,"high":3910.25,"volume":1083,"period":"H1"},{"startTime":"2021-02-11T03:00:00","open":3899.75,"close":3900.5,"low":3899,"high":3903,"volume":900,"period":"H1"},{"startTime":"2021-02-11T04:00:00","open":3900.44,"close":3909,"low":3900,"high":3910,"volume":675,"period":"H1"},{"startTime":"2021-02-11T05:00:00","open":3909.25,"close":3908.75,"low":3906.75,"high":3910.5,"volume":665,"period":"H1"},{"startTime":"2021-02-11T06:00:00","open":3909,"close":3911,"low":3907,"high":3912,"volume":424,"period":"H1"},{"startTime":"2021-02-11T07:00:00","open":3911,"close":3909.25,"low":3908.25,"high":3911.75,"volume":368,"period":"H1"},{"startTime":"2021-02-11T08:00:00","open":3909,"close":3912.25,"low":3909,"high":3912.5,"volume":429,"period":"H1"},{"startTime":"2021-02-11T09:00:00","open":3912.75,"close":3913.25,"low":3910.75,"high":3914.5,"volume":761,"period":"H1"},{"startTime":"2021-02-11T10:00:00","open":3913.5,"close":3918.5,"low":3910.25,"high":3920.25,"volume":2532,"period":"H1"},{"startTime":"2021-02-11T11:00:00","open":3918.25,"close":3919.25,"low":3916.25,"high":3920.75,"volume":951,"period":"H1"},{"startTime":"2021-02-11T12:00:00","open":3919.5,"close":3919,"low":3917.25,"high":3921,"volume":703,"period":"H1"},{"startTime":"2021-02-11T13:00:00","open":3919.25,"close":3918,"low":3917.5,"high":3922.25,"volume":617,"period":"H1"},{"startTime":"2021-02-11T14:00:00","open":3918,"close":3917.75,"low":3916,"high":3919.75,"volume":602,"period":"H1"},{"startTime":"2021-02-11T15:00:00","open":3918,"close":3919,"low":3917.5,"high":3922.25,"volume":719,"period":"H1"},{"startTime":"2021-02-11T16:00:00","open":3919.17,"close":3919.75,"low":3918,"high":3921,"volume":205,"period":"H1"}]},{"symbol":"DJ30","items":[{"startTime":"2021-02-10T20:00:00","open":31405.45,"close":31403.45,"low":31391.45,"high":31430.45,"volume":3350,"period":"H1"},{"startTime":"2021-02-10T21:00:00","open":31404.45,"close":31479.65,"low":31384.25,"high":31480.65,"volume":9664,"period":"H1"},{"startTime":"2021-02-10T22:00:00","open":31480.65,"close":31443.45,"low":31393.25,"high":31510.65,"volume":11371,"period":"H1"},{"startTime":"2021-02-10T23:00:00","open":31444.45,"close":31468.3,"low":31441.45,"high":31486.45,"volume":1927,"period":"H1"},{"startTime":"2021-02-11T01:00:00","open":31443.65,"close":31441.3,"low":31427.3,"high":31455.65,"volume":1230,"period":"H1"},{"startTime":"2021-02-11T02:00:00","open":31440.3,"close":31373.95,"low":31363.95,"high":31447.3,"volume":2038,"period":"H1"},{"startTime":"2021-02-11T03:00:00","open":31371.95,"close":31369.3,"low":31352.3,"high":31391.3,"volume":1744,"period":"H1"},{"startTime":"2021-02-11T04:00:00","open":31368.3,"close":31431.3,"low":31365.3,"high":31444.3,"volume":1279,"period":"H1"},{"startTime":"2021-02-11T05:00:00","open":31430.3,"close":31431.3,"low":31413.95,"high":31439.3,"volume":1168,"period":"H1"},{"startTime":"2021-02-11T06:00:00","open":31432.3,"close":31449.3,"low":31423.3,"high":31453.3,"volume":790,"period":"H1"},{"startTime":"2021-02-11T07:00:00","open":31450.3,"close":31440.3,"low":31433.3,"high":31457.3,"volume":609,"period":"H1"},{"startTime":"2021-02-11T08:00:00","open":31441.3,"close":31468.3,"low":31438.3,"high":31469.3,"volume":768,"period":"H1"},{"startTime":"2021-02-11T09:00:00","open":31473.3,"close":31474.3,"low":31454.3,"high":31487.3,"volume":1462,"period":"H1"},{"startTime":"2021-02-11T10:00:00","open":31475.3,"close":31491.3,"low":31440.3,"high":31505.3,"volume":4343,"period":"H1"},{"startTime":"2021-02-11T11:00:00","open":31490.3,"close":31486.3,"low":31472.95,"high":31503.65,"volume":2196,"period":"H1"},{"startTime":"2021-02-11T12:00:00","open":31487.3,"close":31480.3,"low":31467.95,"high":31501.3,"volume":1515,"period":"H1"},{"startTime":"2021-02-11T13:00:00","open":31481.3,"close":31479.3,"low":31468.95,"high":31508.3,"volume":1496,"period":"H1"},{"startTime":"2021-02-11T14:00:00","open":31480.3,"close":31463.3,"low":31457.95,"high":31493.3,"volume":1457,"period":"H1"},{"startTime":"2021-02-11T15:00:00","open":31464.3,"close":31469.3,"low":31464.3,"high":31495.3,"volume":1708,"period":"H1"},{"startTime":"2021-02-11T16:00:00","open":31470.3,"close":31474.3,"low":31458.95,"high":31483.65,"volume":682,"period":"H1"}]},{"symbol":"AAPL","items":[{"startTime":"2021-02-10T20:00:00","open":135.15,"close":135.06,"low":134.96,"high":135.23,"volume":3050,"period":"H1"},{"startTime":"2021-02-10T21:00:00","open":135.07,"close":135.6,"low":135.03,"high":135.83,"volume":10971,"period":"H1"},{"startTime":"2021-02-10T22:00:00","open":135.61,"close":135.35,"low":134.94,"high":135.79,"volume":13762,"period":"H1"}]},{"symbol":"GOOG","items":[{"startTime":"2021-02-10T20:00:00","open":2088.51,"close":2092.87,"low":2088.32,"high":2095.22,"volume":1280,"period":"H1"},{"startTime":"2021-02-10T21:00:00","open":2093.32,"close":2095.7,"low":2088.12,"high":2099,"volume":3690,"period":"H1"},{"startTime":"2021-02-10T22:00:00","open":2095.7,"close":2095.28,"low":2085.72,"high":2099.66,"volume":5041,"period":"H1"}]},{"symbol":"FB","items":[{"startTime":"2021-02-10T20:00:00","open":269.4,"close":270.13,"low":269.24,"high":270.48,"volume":3860,"period":"H1"},{"startTime":"2021-02-10T21:00:00","open":270.13,"close":271.65,"low":269.95,"high":272.29,"volume":8624,"period":"H1"},{"startTime":"2021-02-10T22:00:00","open":271.68,"close":271.83,"low":271,"high":272.67,"volume":12458,"period":"H1"}]},{"symbol":"NFLX","items":[{"startTime":"2021-02-10T20:00:00","open":556.25,"close":555.59,"low":555.08,"high":556.78,"volume":1124,"period":"H1"},{"startTime":"2021-02-10T21:00:00","open":555.44,"close":562.56,"low":555.19,"high":565.29,"volume":3485,"period":"H1"},{"startTime":"2021-02-10T22:00:00","open":562.58,"close":563.65,"low":560.52,"high":566.5,"volume":4600,"period":"H1"}]}]}';
    </script>
    <script src="assets/home/wp-content/themes/vfx_new/js/math.min.js"></script>
    <script src="assets/home/wp-content/themes/vfx_new/js/product_echarts-v%3d1613053852.js"></script>    <!--Home Row1 结束-->

    <!--Home Row2 开始-->
    <div class="home_row2">
        <div class="inner">
            <div class="home_row2_content">
                <div class="text_box">
                    <h2>Start Trading with a<br /><strong>leading regulated broker</strong></h2>
                    <p>Whales Corp is a <strong><a href="index.php/home/regulation.html">regulated</a></strong>  broker, providing traders with access to the global market through top tier FX liquidity providers.</p>
                    <p>With Whales Corp, you will experience super-fast trade execution, as well as interbank grade, RAW ECN spreads.  When combined, these elements offer clients a true institutional trading experience, across a wide range of trading instruments.</p>
                    <h3>Gain YOUR trading advantage with Whales Corp.</h3>
                </div>
                <div class="img_box video_home">
                    <img src="assets/home/btc3.png" alt="" width="150px" height="150px"/>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <!--Home Row2 结束-->

    <!--Home Row3 开始-->
    <style>.home_row3{ background:url("assets/home/wp-content/themes/vfx_new/images/home_row3_bg.jpg") center top no-repeat; background-size:cover;}
        .home_row3 .inner{ padding-top:70px; padding-bottom:45px;}
        .home_row3 .text_box{width:48%; float:right;}
        .home_row3 .text_box h2{ margin:0px 0px 36px; color:#FFF; font-size:30px; font-weight:bold; text-align:left; text-transform:none;}
        .home_row3 .text_box h2:after{ display:none;}
        .home_row3 .text_box p{ padding:0px; margin:0px 0px 22px; font-size:15px; color:#FFF; line-height:1.7;}
        .home_row3 .img_box{width:49.5%; float:left; margin-left:-35px; padding:38px 0px 0px 0px;}
        .home_row3 .img_box img{ display:block; width:100%; height:auto;}
        .home_row3 .text_box a{ display: inline-block; text-transform:uppercase; background:#d72b2f; border-radius:5px; text-shadow:0px 0px 1px #FFF; text-align:center; padding:10px 26px 10px 0px; height:45px; line-height:25px; width:230px; color:#FFF; font-size:16px;  position:relative;}
        .home_row3 .text_box a:hover{background:#fd0202;color:#FFF; text-decoration:none;}
        .home_row3 .text_box a:after{ content: "\f105";font-family: 'FontAwesome'; position:absolute; right:20px; top:10px;}
        .home_row3 .text_box_inner{ padding:28px 0px 0px;}
        .home_row3 .text_box_inner a{ float:left;}
        .home_row3 .text_box_inner img{ float:right;}

        @media (max-width:768px){
            .home_row3 .text_box{ float:none; width:100%;}
            .home_row3 .text_box h2{ font-size:24px; margin-bottom:30px;}
            .home_row3 .img_box{ width:474px; max-width:100%; float: none; margin:0px auto; padding-top:0px;}
        }
        @media (max-width:420px){
            .home_row3 .inner{ padding-top:40px; padding-bottom:20px;}
            .home_row3 .text_box_inner{ text-align:center; padding-top:0px;}
            .home_row3 .text_box_inner a{ float:none; display:inline-block; margin-bottom:5px; vertical-align:middle;}
            .home_row3 .text_box_inner img{ float:none; display: inline-block; margin:5px; vertical-align:middle;}
        }
    </style>
    <div class="home_row3">
        <div class="inner">
            <div class="img_box">
                <img src="assets/home/wp-content/themes/vfx_new/images/home_row3_content_left_img.png" alt="" />
            </div>
            <div class="text_box">
                <h2>Trade with Even Lower Costs</h2>
                <p>With our RAW ECN account, traders can experience some of the lowest trading costs in the industry. We fully understand the importance of keeping trading costs to a minimum, so you can realise greater profit.</p>
                <p>Experience the difference with Whales Corp today.</p>
                <div class="text_box_inner">
                    <a href="login">open A live account</a>
                    <img src="assets/home/wp-content/themes/vfx_new/images/home_row3_content_right_img.png" alt="" />
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>    <!--Home Row3 结束-->

    <!--Home Row4 开始-->
    <div class="home_row4">
        <div class="inner">
            <div class="home_row4_content">
                <h2><strong>Next Generation</strong> Broker</h2>
                <div class="home_forex_broker_list">
                    <div class="home_forex_broker_item">
                        <div class="home_forex_broker_item_box">
                            <div class="home_forex_broker_item_img">
                                <span class="home_forex_broker_icon1"></span>
                            </div>
                        </div>
                        <h4>The Lowest<br />Trading Costs</h4>
                    </div>
                    <div class="home_forex_broker_item">
                        <div class="home_forex_broker_item_box">
                            <div class="home_forex_broker_item_img">
                                <span class="home_forex_broker_icon2"></span>
                            </div>
                        </div>
                        <h4>50% Welcome<br />Bonus</h4>
                    </div>
                    <div class="home_forex_broker_item">
                        <div class="home_forex_broker_item_box">
                            <div class="home_forex_broker_item_img">
                                <span class="home_forex_broker_icon3"></span>
                            </div>
                        </div>
                        <h4>Lightning<br />Fast Execution</h4>
                    </div>
                    <div class="home_forex_broker_item">
                        <div class="home_forex_broker_item_box">
                            <div class="home_forex_broker_item_img">
                                <span class="home_forex_broker_icon4"></span>
                            </div>
                        </div>
                        <h4>Award-winning<br />24 Hour Support</h4>
                    </div>
                    <div class="home_forex_broker_item">
                        <div class="home_forex_broker_item_box">
                            <div class="home_forex_broker_item_img">
                                <span class="home_forex_broker_icon5"></span>
                            </div>
                        </div>
                        <h4>Free<br />Signals</h4>
                    </div>
                    <div class="home_forex_broker_item">
                        <div class="home_forex_broker_item_box">
                            <div class="home_forex_broker_item_img">
                                <span class="home_forex_broker_icon6"></span>
                            </div>
                        </div>
                        <h4>Negative<br />Balance Protection</h4>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>

    <!--Home Row4 结束-->

    <!--Home Row5 开始-->
    <div class="home_row5">
        <div class="inner">
            <h2>Money never sleeps.<strong> Follow the latest news!</strong></h2>
            <div class="home_row5_left">
                <div class="home_row5_top">
                    <ul class="tab_title">
                        <li class="active"><span>Market</span></li>
                        <li><span>Indices</span></li>
                        <li><span>Commodities</span></li>
                        <li><span>SHARE CFDs</span></li>
                    </ul>
                    <div class="tab_list">
                        <div class="loading"><img class="rotate" src="assets/home/wp-content/themes/vfx_new/images/newdemo_londing.png" alt="" /></div>
                        <div class="tab_item tab_item1 active">
                            <div class="tab_item_con">
                                <table align="center" border="0" cellpadding="0" cellspacing="0" style=" padding:0px; margin:0px;">
                                    <tbody id="row5_tbody1">
                                    <tr class="row5_tbody_top white_back">
                                        <td> </td>
                                        <td>SYMBOL</td>
                                        <td>BID</td>
                                        <td>ASK</td>
                                        <td>SPREAD</td>
                                    </tr>
                                    <tr class="products gray_back">
                                        <td><img src="assets/home/wp-content/themes/vfx_new/images/home_row1_tab_forex_img2.png" alt=""></td>
                                        <td class="symbol">EURUSD</td>
                                        <td class="bid_text"></td>
                                        <td class="ask_text"></td>
                                        <td class="spr_text"><span></span></td>
                                    </tr>
                                    <tr class="products white_back">
                                        <td><img src="assets/home/wp-content/themes/vfx_new/images/home_row1_tab_forex_img1.png" alt=""></td>
                                        <td class="symbol">AUDUSD</td>
                                        <td class="bid_text"></td>
                                        <td class="ask_text"></td>
                                        <td class="spr_text"><span></span></td>
                                    </tr>
                                    <tr class="products gray_back">
                                        <td><img src="assets/home/wp-content/themes/vfx_new/images/home_row1_tab_forex_img3.png" alt=""></td>
                                        <td class="symbol">GBPUSD</td>
                                        <td class="bid_text"></td>
                                        <td class="ask_text"></td>
                                        <td class="spr_text"><span></span></td>
                                    </tr>
                                    <tr class="products white_back">
                                        <td><img src="assets/home/wp-content/themes/vfx_new/images/home_row1_tab_forex_img4.png" alt=""></td>
                                        <td class="symbol">USDJPY</td>
                                        <td class="bid_text"></td>
                                        <td class="ask_text"></td>
                                        <td class="spr_text"><span></span></td>
                                    </tr>
                                    <tr class="row5_tbody_buttom gray_back">
                                        <td colspan="5"><img src="assets/home/wp-content/themes/vfx_new/images/home_row5_tbody_buttom.png" alt=""></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="tab_item tab_item2">
                            <div class="tab_item_con">
                                <table align="center" border="0" cellpadding="0" cellspacing="0" style=" padding:0px; margin:0px;">
                                    <tbody id="row5_tbody3">
                                    <tr class="row5_tbody_top white_back">
                                        <td> </td>
                                        <td>SYMBOL</td>
                                        <td>BID</td>
                                        <td>ASK</td>
                                        <td>SPREAD</td>
                                    </tr>
                                    <tr class="products gray_back">
                                        <td><img src="assets/home/wp-content/themes/vfx_new/images/home_row1_tab_indices_img1.png" alt=""></td>
                                        <td class="symbol">SPI200</td>
                                        <td class="bid_text"></td>
                                        <td class="ask_text"></td>
                                        <td class="spr_text"><span></span></td>
                                    </tr>
                                    <tr class="products white_back">
                                        <td><img src="assets/home/wp-content/themes/vfx_new/images/home_row1_tab_indices_img2.png" alt=""></td>
                                        <td class="symbol">DAX30</td>
                                        <td class="bid_text"></td>
                                        <td class="ask_text"></td>
                                        <td class="spr_text"><span></span></td>
                                    </tr>
                                    <tr class="products gray_back">
                                        <td><img src="assets/home/wp-content/themes/vfx_new/images/home_row1_tab_indices_img3.png" alt=""></td>
                                        <td class="symbol">SP500</td>
                                        <td class="bid_text"></td>
                                        <td class="ask_text"></td>
                                        <td class="spr_text"><span></span></td>
                                    </tr>
                                    <tr class="products white_back">
                                        <td><img src="assets/home/wp-content/themes/vfx_new/images/home_row1_tab_indices_img3.png" alt=""></td>
                                        <td class="symbol">DJ30</td>
                                        <td class="bid_text"></td>
                                        <td class="ask_text"></td>
                                        <td class="spr_text"><span></span></td>
                                    </tr>
                                    <tr class="row5_tbody_buttom gray_back">
                                        <td colspan="5"><img src="assets/home/wp-content/themes/vfx_new/images/home_row5_tbody_buttom.png" alt=""></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="tab_item tab_item3">
                            <div class="tab_item_con">
                                <table align="center" border="0" cellpadding="0" cellspacing="0" style=" padding:0px; margin:0px;">
                                    <tbody id="row5_tbody2">
                                    <tr class="row5_tbody_top white_back">
                                        <td> </td>
                                        <td>SYMBOL</td>
                                        <td>BID</td>
                                        <td>ASK</td>
                                        <td>SPREAD</td>
                                    </tr>
                                    <tr class="products gray_back">
                                        <td><img src="assets/home/wp-content/themes/vfx_new/images/home_row1_tab_commodities_img1.png" alt=""></td>
                                        <td class="symbol">CL-OIL</td>
                                        <td class="bid_text"></td>
                                        <td class="ask_text"></td>
                                        <td class="spr_text"><span></span></td>
                                    </tr>
                                    <tr class="products white_back">
                                        <td><img src="assets/home/wp-content/themes/vfx_new/images/home_row1_tab_commodities_img3.png" alt=""></td>
                                        <td class="symbol">XAGUSD</td>
                                        <td class="bid_text"></td>
                                        <td class="ask_text"></td>
                                        <td class="spr_text"><span></span></td>
                                    </tr>
                                    <tr class="products gray_back">
                                        <td><img src="assets/home/wp-content/themes/vfx_new/images/home_row1_tab_commodities_img2.png" alt=""></td>
                                        <td class="symbol">XAUUSD</td>
                                        <td class="bid_text"></td>
                                        <td class="ask_text"></td>
                                        <td class="spr_text"><span></span></td>
                                    </tr>
                                    <tr class="white_back" style="height: 56px;">

                                    </tr>
                                    <tr class="row5_tbody_buttom gray_back">
                                        <td colspan="5"><img src="assets/home/wp-content/themes/vfx_new/images/home_row5_tbody_buttom.png" alt=""></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="tab_item tab_item4">
                            <div class="tab_item_con">
                                <table align="center" border="0" cellpadding="0" cellspacing="0" style=" padding:0px; margin:0px;">
                                    <tbody id="row5_tbody4">
                                    <tr class="row5_tbody_top white_back">
                                        <td> </td>
                                        <td>SYMBOL</td>
                                        <td>BID</td>
                                        <td>ASK</td>
                                        <td>SPREAD</td>
                                    </tr>
                                    <tr class="products gray_back">
                                        <td><img src="assets/home/wp-content/themes/vfx_new/images/home_row1_tab_share_cfds_img1.png" alt=""></td>
                                        <td class="symbol">Apple</td>
                                        <td class="bid_text"></td>
                                        <td class="ask_text"></td>
                                        <td class="spr_text"><span></span></td>
                                    </tr>
                                    <tr class="products white_back">
                                        <td><img src="assets/home/wp-content/themes/vfx_new/images/home_row1_tab_share_cfds_img3.png" alt=""></td>
                                        <td class="symbol">Facebook</td>
                                        <td class="bid_text"></td>
                                        <td class="ask_text"></td>
                                        <td class="spr_text"><span></span></td>
                                    </tr>
                                    <tr class="products gray_back">
                                        <td><img src="assets/home/wp-content/themes/vfx_new/images/home_row1_tab_share_cfds_img4.png" alt=""></td>
                                        <td class="symbol">Netflix</td>
                                        <td class="bid_text"></td>
                                        <td class="ask_text"></td>
                                        <td class="spr_text"><span></span></td>
                                    </tr>
                                    <tr class="products white_back">
                                        <td><img src="assets/home/wp-content/themes/vfx_new/images/home_row1_tab_share_cfds_img2.png" alt=""></td>
                                        <td class="symbol">Google</td>
                                        <td class="bid_text"></td>
                                        <td class="ask_text"></td>
                                        <td class="spr_text"><span></span></td>
                                    </tr>
                                    <tr class="row5_tbody_buttom gray_back">
                                        <td colspan="5"><img src="assets/home/wp-content/themes/vfx_new/images/home_row5_tbody_buttom.png" alt=""></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="home_row5_video">
                    <div class="home_row5_video_box video_left">
                        <div class="video_content">
                        <div class="loading"><img class="rotate" src="https://traderscorp.io/assets/home/wp-content/themes/vfx_new/images/newdemo_londing.png" alt="" /></div>
                            <img class="video_img" src="https://traderscorp.io/assets/home/wp-content/themes/vfx_new/images/home_row5_video_img1.jpg" alt="" />
                            <div class="home_live">
                                <span class="home_live_light"></span>
                            </div>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PL9EvBTY2FZXF3Aw0cHgx0seEbDrAX1N_Z" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        </div>
                        <p>
                          <img class="video_play" src="https://traderscorp.io/assets/home/wp-content/themes/vfx_new/images/home_row5_video_youtube.png" alt=""> LIVE ON Whales Corp TV
                        </p>
                        <h6>Whales Corp News</h6>
                    </div>
                    <div class="home_row5_video_box video_right">

                        <div class="video_content">
                        <div class="loading"><img class="rotate" src="https://traderscorp.io/assets/home/wp-content/themes/vfx_new/images/newdemo_londing.png" alt="" /></div>
                            <div class="home_live">
                                <span class="home_live_light"></span>
                            </div>
                            <img class="video_img" src="https://traderscorp.io/assets/home/wp-content/themes/vfx_new/images/home_row5_video_img2.jpg" alt="" />
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/t8wWCsIdodk?controls=0" frameborder="0" allow="accelerometer; autoplay="autoplay"; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <p><img class="video_play" src="https://traderscorp.io/assets/home/wp-content/themes/vfx_new/images/home_row5_video_youtube.png" alt=""> LIVE FROM THE NYSE FLOOR</p>
                        <h6>Breaking Market Update</h6>
                    </div>
                </div> -->
            </div>
            <div class="home_row5_right">
                <ul>
                    <li><div class='home_row5_rihght_left'><img src="assets/home/wp-content/themes/vfx_new/images/home_row5_icon3.png" alt=''></div><div class='home_row5_right_right'><h6>'Rite-Aid expands free COVID-19 testing to all drive-thru locations'</h6><p>'11/02/21 | 14:20'</p></div><div class='clear'></div></li><li><div class='home_row5_rihght_left'><img src="assets/home/wp-content/themes/vfx_new/images/home_row5_icon3.png" alt=''></div><div class='home_row5_right_right'><h6>'Rite Aid to receive 100 COVID-19 vaccine doses a week in participating stores in 5 states'</h6><p>'11/02/21 | 14:19'</p></div><div class='clear'></div></li><li><div class='home_row5_rihght_left'><img src="assets/home/wp-content/themes/vfx_new/images/home_row5_icon2.png" alt=''></div><div class='home_row5_right_right'><h6>'BNY Mellon to offer bitcoin services, a validation of crypto from a key bank in the financial system'</h6><p>'11/02/21 | 14:09'</p></div><div class='clear'></div></li><li><div class='home_row5_rihght_left'><img src="assets/home/wp-content/themes/vfx_new/images/home_row5_icon2.png" alt=''></div><div class='home_row5_right_right'><h6>'Jobless claims worse than expected as pandemic-related filings surge'</h6><p>'11/02/21 | 14:08'</p></div><div class='clear'></div></li><li><div class='home_row5_rihght_left'><img src="assets/home/wp-content/themes/vfx_new/images/home_row5_icon3.png" alt=''></div><div class='home_row5_right_right'><h6>'Poshmark launches pets business, including new and secondhand accessories'</h6><p>'11/02/21 | 14:07'</p></div><div class='clear'></div></li><li><div class='home_row5_rihght_left'><img src="assets/home/wp-content/themes/vfx_new/images/home_row5_icon3.png" alt=''></div><div class='home_row5_right_right'><h6>'Spirit Airlines downgraded to neutral from buy at Seaport Global'</h6><p>'11/02/21 | 13:37'</p></div><div class='clear'></div></li><li><div class='home_row5_rihght_left'><img src="assets/home/wp-content/themes/vfx_new/images/home_row5_icon3.png" alt=''></div><div class='home_row5_right_right'><h6>'Dialog Semiconductor downgraded to market perform from outperform at BMO Capital'</h6><p>'11/02/21 | 13:36'</p></div><div class='clear'></div></li><li><div class='home_row5_rihght_left'><img src="assets/home/wp-content/themes/vfx_new/images/home_row5_icon3.png" alt=''></div><div class='home_row5_right_right'><h6>'U.S. dollar up 0.1% at 104.65 Japanese yen'</h6><p>'11/02/21 | 13:33'</p></div><div class='clear'></div></li><li><div class='home_row5_rihght_left'><img src="assets/home/wp-content/themes/vfx_new/images/home_row5_icon3.png" alt=''></div><div class='home_row5_right_right'><h6>'Nasdaq-100 futures rise 0.6% after data '</h6><p>'11/02/21 | 13:32'</p></div><div class='clear'></div></li>                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!--Home Row5 结束-->

    <!--Home Row6 开始-->
    <div class="home_row6">
        <div class="inner">
            <h2>trade your way <strong>with Whales Corp</strong></h2>
            <ul class="home_three_rows">
                <li>
                    <div class="home_three_rows_box">
                        <div class="img_box"><img src="assets/home/wp-content/themes/vfx_new/images/home_row6_img1.jpg" alt="" /></div>
                        <div class="text_box">
                            <div class="text_box_inner">
                                <p>trade with lower costS</p>
                            </div>
                        </div>
                        <!-- <a href="https://traderscorp.io/index.php/home/trading_account">Find out more</a> -->
                    </div>
                </li>
                <li>
                    <div class="home_three_rows_box">
                        <div class="img_box"><img src="assets/home/wp-content/themes/vfx_new/images/home_row6_img2.jpg" alt="" /></div>
                        <div class="text_box">
                            <div class="text_box_inner">
                                <p>regulated broker</p>
                            </div>
                        </div>
                        <!-- <a href="https://traderscorp.io/index.php/home/regulation">Find out more</a> -->
                    </div>
                </li>
                <li>
                    <div class="home_three_rows_box">
                        <div class="img_box"><img src="assets/home/wp-content/themes/vfx_new/images/home_row6_img3.jpg" alt="" /><span class="new_icon"></span></div>
                        <div class="text_box">
                            <div class="text_box_inner">
                                <p>experience AUTOMATED TRADING</p>
                            </div>
                        </div>
                        <!-- <a href="platforms/trading-platforms/metatrader5/index.html">Find out more</a> -->
                    </div>
                </li>
            </ul>
            <div class="clear"></div>
        </div>
    </div>
    <!--Home Row6 结束-->

    <!--Home Row7 开始-->
    <!--<div class="home_row7">-->
    <!--    <div class="inner">-->
    <!--      <div class="home_row7_left">-->
    <!--            <div class="home_row7_slider_content">-->
    <!--                  <ul class="home_row7_slider">-->
    <!--                      <li>-->
    <!--                          <div class="home_row7_slider_box">-->
    <!--                              <img src="https://traderscorp.io/assets/home/wp-content/themes/vfx_new/images/home_row7_slider_img1_new.jpg" alt="" />-->
    <!--                          </div>-->
    <!--                      </li>-->
    <!--                      <li>-->
    <!--                          <div class="home_row7_slider_box">-->
    <!--                              <img src="https://traderscorp.io/assets/home/wp-content/themes/vfx_new/images/home_row7_slider_img2_new.jpg" alt="" />-->
    <!--                          </div>-->
    <!--                      </li>-->

    <!--                  </ul>-->
    <!--              </div>-->
    <!--              <img src="https://traderscorp.io/assets/home/wp-content/themes/vfx_new/images/home_row7_slider_shadow_img.png" alt="" />-->
    <!--          </div>-->
    <!--          <div class="text_box">-->
    <!--              <h2>TRADE ANYWHERE, ANYTIME</h2>-->
    <!--              <p>Perfect for both new and experienced traders who want to access the markets while on the go, the convenient MT4 and MT5 apps by MetaQuotes are fast, reliable and compatible with both Android and iOS devices.<br />All Whales Corp clients can experience the same trading functionality on their mobile device as MetaTrader for PC and Mac - such as one touch trading, a variety of order types, instant access to over 300+ tradable assets, and more.</p>-->
    <!--              <p>Download MT4 or MT5 for mobile today.</p>-->
    <!--          </div>-->
    <!--    <div class="clear"></div>-->
    <!--      </div>-->
    <!--  </div>-->
    <!--Home Row7 结束-->

    <!--Home Row8 开始-->
    <style>.home_row8 .inner{ padding-top:1px; padding-bottom:50px;}
        .home_row8 h2{ font-size:28px; text-align:center; margin-bottom:48px;}
        .home_row8 ul.home_three_rows{ padding:0px; margin:0px -12px;}
        .home_row8 ul:after{ content:""; display:block; clear:both;}

        .home_row8 .home_three_rows li{ padding:0px; margin:0px; width:33.3333%; float:left; padding:0px 12px 20px;}
        .home_row8 .home_three_rows li .home_three_rows_box{ width:100%; border:1px solid #e8e8e8; background:#FFF; padding-bottom:20px; text-align:center;}
        .home_row8 .home_three_rows li .home_three_rows_box .img_box{ position:relative;}
        .home_row8 .home_three_rows li .home_three_rows_box .img_box img{ display:block; width:100%; height:auto;}
        .home_row8 .home_three_rows li .home_three_rows_box .img_box span.new_icon{ display:block; width:112px; height:82px; background:url("wp-content/themes/vfx_new/images/home_sprite_img.html") -608px 0px no-repeat; position:absolute; left:-3px; top:-1px;}
        .home_row8 .home_three_rows li .home_three_rows_box p{ line-height:1.2; padding:21px 15px 12px; margin:0px; font-size:17px; color:#2544a2; text-transform:uppercase;}
        .home_row8 .home_three_rows li .home_three_rows_box a{ padding:7px 5px 7px; background:#2450d7; border-radius:3px; display:inline-block; width:132px; font-size:14px; color:#FFF; text-transform:uppercase;}
        .home_row8 .home_three_rows li .home_three_rows_box a:hover{background: #2a5cf5;}
        @media (max-width:900px){
            .home_row8 .inner{ padding-top:100px;}
        }
        @media (max-width:768px){
            .home_row8 .inner{ padding-top:50px;}
            .home_row8 .home_three_rows{ margin-left:0px; margin-right:0px;}
            .home_row8 .home_three_rows li{ width:320px; max-width:100%; float:none; margin:0px auto; padding:0px 0px 30px;}
        }
    </style>
    <div class="home_row8">
        <div class="inner">
            <h2 class="page_title_center">Switch to Whales Corp Today and <strong>Experience the Difference</strong></h2>
            <ul class="home_three_rows">
                <li>
                    <div class="home_three_rows_box">
                        <div class="img_box"><img src="assets/home/wp-content/themes/vfx_new/images/home_row8_img1-v%3d2020120101.jpg" alt="" /></div>
                        <div class="text_box">
                            <div class="text_box_inner">
                                <p>50% welcome bonus</p>
                            </div>
                        </div>
                        <!-- <a href="clients/promotions/50percent-deposit-bonus/index.html">Find out more</a> -->
                    </div>
                </li>
                <li>
                    <div class="home_three_rows_box">
                        <div class="img_box"><img src="assets/home/wp-content/themes/vfx_new/images/home_row8_img2-v%3d2020120101.jpg" alt="" /></div>
                        <div class="text_box">
                            <div class="text_box_inner">
                                <p>FEATURED IDEAS SIGNALS</p>
                            </div>
                        </div>
                        <!-- <a href="featured-trade-ideas/index.html">Find out more</a> -->
                    </div>
                </li>
                <li>
                    <div class="home_three_rows_box">
                        <div class="img_box"><img src="assets/home/wp-content/themes/vfx_new/images/home_row8_img3-v%3d2020120101.jpg" alt="" /></div>
                        <div class="text_box">
                            <div class="text_box_inner">
                                <p>PROFESSIONAL CALENDAR</p>
                            </div>
                        </div>
                        <!-- <a href="pro-economic-calendar/index.html">Find out more</a> -->
                    </div>
                </li>
            </ul>
            <div class="clear"></div>
        </div>
    </div>    <!--Home Row8 结束-->



    <div class="fast_easy_wrapper">
        <div class="inner">
            <h2 class="page_title_center"><strong>Fast & Easy</strong> Account Opening</h2>
            <ul>
                <li>
                    <div class="text_box">
                        <h4>Register</h4>
                        <p>Choose an account type and submit your application</p>
                    </div>
                </li>
                <li>
                    <div class="text_box">
                        <h4>Fund</h4>
                        <p>Fund your account using a wide range of funding methods.</p>
                    </div>
                </li>
                <li>
                    <div class="text_box">
                        <h4>Trade</h4>
                        <p>The ATS will go live immediately fund reflects</p>
                    </div>
                </li>
            </ul>
            <a href="register">open live account</a>
            <div class="clear"></div>
        </div>
    </div>
</div>

@endsection
