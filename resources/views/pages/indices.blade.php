@extends('pages.layout.app')
@section('content')

    <div class="indices">
        <div class="page_banner_content" style="background-image:url('../../assets/home/Products_indices_AUSTEN.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
            <div class="inner">
                <div class="tableBox">
                    <div class="table_cellBox">
                        <div class="text_box">
                            <h2>Indices</h2>
                            <h3>Trade the World’s Most Liquid Stock Exchange
                                Indices CFDs with Whale Corp Today
                            </h3>
                            <a href="register" class="red_arrow_button">open live account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page_content">
            <div class="inner">
                <div class="page_top_text">
                    <h2><strong>Indices</strong> Trading</h2>
                    <p>Gain instant access to the world&#8217;s most liquid Stock Exchange indices through your MT4 and MT5 trading platforms. Linked to our oneZero™ MT4 Bridge, Whale Corp provides the fastest execution speed due to our unparalleled access to the deepest liquidity available. Offering traders truly transparent pricing, the prices of all Whale Corp Indices are based on the underlying price of the index’s corresponding stock market.</p>
                    <div class="clear"></div>
                </div>
                <div class="pages_text_and_image_row text_and_image_position_right">
                    <div class="text_and_image_inner">
                        <div class="text_box">
                            <h3>Trade the most liquid global Stock Indices CFDs</h3>
                            <p>Whale Corp provides forex traders access to the most liquid stock exchange Indices from across the globe, including the S&amp;P 500, DAX, FTSE, DJ30 and more.</p>
                            <p>Designed for institutional traders, Whale Corp index CFDs can be enjoyed by all clients with no commissions, transparent prices, and ultra-sharp spreads.</p>
                            <div class="bottom_text">
                                <p>access</p>
                                <p><strong>15</strong></p>
                                <p>Major Stock Markets</p>
                            </div>
                        </div>
                        <div class="img_box" style="background-image:url('../../assets/home/indices_list1.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
                            <img src="../../assets/home/indices_list1.jpg" alt="" />
                            <span>
                  <strong>LOWEST SPREADS</strong><br>ON INDEX CFDS                                                <img src="../../assets/home/pages_text_and_image_on_text_r1.png" alt="" />
                  </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="pages_text_and_image_row text_and_image_position_left">
                    <div class="text_and_image_inner">
                        <div class="text_box">
                            <h3>The Whale Corp Fibre Optic Network offers the fastest Index execution speed</h3>
                            <p>In order to gain an edge in the indices market, traders need access to the fastest execution speeds available. </p>
                            <p>The Whale Corp fibre optic network, with our oneZero™ MT4 Bridge does just that, providing all Whale Corp Indices traders with the quickest execution speeds available.</p>
                            <div class="bottom_text">
                                <p>up to</p>
                                <p><strong>200:1</strong></p>
                                <p>Leverage on Indices</p>
                            </div>
                        </div>
                        <div class="img_box" style="background-image:url('../../assets/home/indices_list2.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
                            <img src="../../assets/home/indices_list2.jpg" alt="" />
                            <span>
                  TRADE INDICES <br> VIA <strong>MT4 &amp; MT5</strong>                                <img src="../../assets/home/pages_text_and_image_on_text_l2.png" alt="" />
                  </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <style>
                .rotate {
                    width: 137px;
                    height: 137px;
                    animation: mymove 1s infinite linear;
                    margin:0 auto;
                    display: block;
                }
                .rawecn_content{position:relative;min-height:244px;}
                .rawecn_content .loading{padding-top: 55px;width:100%;height:244px;background:#fff;position:absolute;left:0;top:0;}
                @keyframes mymove {
                    from {
                        transform: rotate(0);
                    }
                    to {
                        transform: rotate(360deg);
                    }
                }
                @-webkit-keyframes mymove
                {
                    from {
                        transform: rotate(0);
                    }
                    to {
                        transform: rotate(360deg);
                    }
                }
            </style>
            <div class="experience_our_spreads_wrapper">
                <div class="inner">
                    <div class="experience_our_spreads_content">
                        <div class="img_box">
                            <img src="../../assets/home/home_row5_content_left_img.png" alt="" />
                        </div>
                        <div class="rawecn_box">
                            <div class="rawecn_box_title">
                                <span>Experience our<br />spreads today</span>
                            </div>
                            <div class="rawecn_list">
                                <div class="rawecn_nav">
                                    <span class="forex rawecn_active">FOREX</span>
                                    <span class="indices">INDICES</span>
                                    <span class="commodities">COMMODITIES</span>
                                    <div class="clear"></div>
                                </div>
                                <div class="rawecn_content">
                                    <div class="loading"><img class="rotate" src="../../assets/home/wp-content/themes/vfx_new/images/newdemo_londing.png" alt="" /></div>
                                    <div class="row_top">
                                        <div class="row_top_item">symbol</div>
                                        <div class="row_top_item">BID</div>
                                        <div class="row_top_item">ASK</div>
                                        <div class="row_top_item">SPREAD</div>
                                        <div class="clear"></div>
                                    </div>
                                    <script>
                                        refresh_rate= 15000;
                                        decoration_timeout = 2000;
                                        symbols = 'EURUSD,AUDUSD,GBPUSD,USDJPY,SPI200,DAX30,SP500,DJ30,CL-OIL,XAUUSD,XAGUSD,COPPER'.split(',');
                                        groups = 'forex,indices,commodities'.split(',');
                                        accessToken = 'C555D120C280F8702F6F187B2F4FE936';

                                    </script>
                                    <div class='vfx_exchange_rate'>
                                        <div class='header'>
                                            <h1></h1>
                                        </div>
                                        <div class='group'>
                                            <div class='row'>
                                                <span class='symbol'></span>
                                                <span class='bid'></span>
                                                <span class='ask'></span>
                                                <span class='spread-title'>Spread</span>
                                                <span class='spread'></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                jQuery(document).ready(function($){
                    $('.rawecn_content').on('DOMNodeInserted',function(){
                        var thisindex=0;
                        $(".rawecn_content .forex .row span").each(function(){
                            if($(this).html()!="")
                            {
                                thisindex++;
                            }
                        });
                        if(thisindex==20)
                        {
                            $(".rawecn_content .loading").fadeOut(500);
                            $('.rawecn_content').off();
                        };
                    })
                    $(".experience_our_spreads_wrapper .rawecn_box .rawecn_list .rawecn_nav span").click(function(){
                        var i=$(this).index();
                        $(this).addClass("rawecn_active").siblings().removeClass("rawecn_active");
                        $('.experience_our_spreads_wrapper .rawecn_box .rawecn_list .vfx_exchange_rate .group').eq(i).show().siblings().hide();
                    });

                });
            </script>
            <div class="inner">
                <div class="pages_text_and_image_row text_and_image_position_right">
                    <div class="text_and_image_inner">
                        <div class="text_box">
                            <h3>All Stock Indices are available through the powerful MetaTrader 4 and MetaTrader 5 Platforms</h3>
                            <p>Whale Corp allows you to trade stock market Indices on both MT4 and MT5, the world&#8217;s most popular FX trading platforms. At Whale Corp, all indices trading styles are welcome, including scalping, hedging, swing trading and the use of any Expert Advisor (EA) that suits your trading style.</p>
                            <div class="bottom_text">
                                <p>up to</p>
                                <p><strong>9</strong></p>
                                <p>Ways to access MT4</p>
                            </div>
                        </div>
                        <div class="img_box" style="background-image:url('../../assets/home/indices_list3.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
                            <img src="../../assets/home/indices_list3.jpg" alt="" />
                            <span>
                  TRADE INDICES<br><strong>WITH YOUR EA </strong>                                                <img src="../../assets/home/pages_text_and_image_on_text_r1.png" alt="" />
                  </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="pages_text_and_image_row text_and_image_position_left">
                    <div class="text_and_image_inner">
                        <div class="text_box">
                            <h3>Hedge your currency trading risk by taking an Indices position</h3>
                            <p>Whatever your market of choice, the correlation between FX markets and stock indices is powerful. Enhance your trading capabilities and improve your trading success rate by gaining exposure to these markets.</p>
                            <div class="bottom_text">
                                <p>up to</p>
                                <p><strong>200:1</strong></p>
                                <p>Leverage on Indices Trading</p>
                            </div>
                        </div>
                        <div class="img_box" style="background-image:url('../../assets/home/indices_list4.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
                            <img src="../../assets/home/indices_list4.jpg" alt="" />
                            <span>
                  TRADE INDICES<br><strong>LONG &amp; SHORT</strong>                                <img src="../../assets/home/pages_text_and_image_on_text_l2.png" alt="" />
                  </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="forex_tabel">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tbody>
                        <tr>
                            <th>Contract</th>
                            <th>Symbol</th>
                            <th>Description</th>
                            <th>Exchange</th>
                            <th style="width: 140px;">Quote sample</th>
                            <th>Min Spread (For reference only)</th>
                            <th>Average Spread (For reference only)</th>
                            <th>Contract Size</th>
                            <th>Currency</th>
                            <th>Leverage</th>
                            <th>Min volume per click</th>
                            <th>Max volume per click</th>
                            <th style="width: 150px;">Trading time</th>
                        </tr>
                        <tr>
                            <td>
                                <img src="../../assets/home/indices_table_list1.jpg">
                                <!-- <strong>ASX S&P 200</strong>(Cash) -->
                            </td>
                            <td><strong>SPI200</strong></td>
                            <td>ASX /SPI 200 <br>Australian Cash </td>
                            <td>ASX Trade24</td>
                            <td>6163.39 → 6163.40</td>
                            <td>35</td>
                            <td>239.97</td>
                            <td>1</td>
                            <td>AUD</td>
                            <td>200:1</td>
                            <td>0.1</td>
                            <td>500</td>
                            <td>Monday-Friday <br>00:50-07:30, 08:10-23:00</td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../../assets/home/indices_table_list720200527.jpg">
                                <!-- <strong>FTSE 100</strong>(Cash) -->
                            </td>
                            <td><strong>CHINA50</strong></td>
                            <td>China A50 Index Cash</td>
                            <td>Singapore Exchange</td>
                            <td>13768 → 13769</td>
                            <td>6</td>
                            <td>8.5</td>
                            <td>1</td>
                            <td>USD</td>
                            <td>200:1</td>
                            <td>0.1</td>
                            <td>500</td>
                            <td>Monday-Friday <br>03:00-10:30, 11:00-22:45</td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../../assets/home/indices_table_list4-1.jpg">
                                <!-- <strong>DAX30</strong>(Cash) -->
                            </td>
                            <td><strong>DAX30</strong></td>
                            <td>German Equity Index Cash </td>
                            <td>Eurex</td>
                            <td>12717.05 → 12717.06</td>
                            <td>0</td>
                            <td>282.64</td>
                            <td>1</td>
                            <td>EUR</td>
                            <td>200:1</td>
                            <td>0.1</td>
                            <td>500</td>
                            <td>Monday-Friday <br> 02:15-23:00</td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../../assets/home/indices_table_list.jpg">
                                <!-- <strong>ES35</strong>(Cash) -->
                            </td>
                            <td><strong>DJ30</strong></td>
                            <td>Dow Jones Cash</td>
                            <td>Chicago Board of Trade</td>
                            <td>27443.00 → 27443.01</td>
                            <td>200</td>
                            <td>338.51</td>
                            <td>1</td>
                            <td>USD</td>
                            <td>200:1</td>
                            <td>0.1</td>
                            <td>500</td>
                            <td>Monday-Friday <br>01:00-23:15, 23:30-24:00</td>
                        </tr>
                        <!-- <tr>
                           <td>
                               <img src="/wp-content/themes/vfx_new/images/indices_table_list5.jpg">
                               <strong>ITA40</strong>(Cash)
                           </td>
                           <td>ITA40</td>
                           <td>CFD</td>
                           <td>1</td>
                           <td>EUR1</td>
                           <td>19113 - > 19114</td>
                           <td>200:1</td>
                           <td>0.1</td>
                           <td>500</td>
                           </tr> -->
                        <tr>
                            <td>
                                <img src="../../assets/home/indices_table_list4.jpg">
                                <!-- <strong>Dow Jones 30</strong>(Cash) -->
                            </td>
                            <td><strong>ES35</strong></td>
                            <td>Spain 35 Index Cash</td>
                            <td>Meff Renta Variable (Madrid)</td>
                            <td>7759.14 → 7759.15</td>
                            <td>425</td>
                            <td>440.88</td>
                            <td>1</td>
                            <td>EUR</td>
                            <td>200:1</td>
                            <td>0.1</td>
                            <td>500</td>
                            <td>Monday-Friday <br>09:00-21:00</td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../../assets/home/indices_table_list9.jpg">
                                <!-- <strong>S&P</strong>(Cash) -->
                            </td>
                            <td><strong>EU50</strong></td>
                            <td>EUSTX50 Cash</td>
                            <td>Eurex</td>
                            <td>3341.88 → 3341.89</td>
                            <td>20</td>
                            <td>159.47</td>
                            <td>1</td>
                            <td>EUR</td>
                            <td>200:1</td>
                            <td>0.1</td>
                            <td>500</td>
                            <td>Monday-Friday <br>02:15-23:00</td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../../assets/home/indices_table_list10.jpg">
                                <!-- <strong>Nikkei 225</strong>(Cash) -->
                            </td>
                            <td><strong>FRA40</strong></td>
                            <td>France 40 Index Cash</td>
                            <td>Euronext Derivatives Paris</td>
                            <td>5097.18 → 5097.19</td>
                            <td>104</td>
                            <td>104.04</td>
                            <td>1</td>
                            <td>EUR</td>
                            <td>200:1</td>
                            <td>0.1</td>
                            <td>500</td>
                            <td>Monday-Friday <br>09:00-23:00</td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../../assets/home/indices_table_list2.jpg">
                                <!-- <strong>Hang Seng Index</strong>(Cash) -->
                            </td>
                            <td><strong>FTSE100</strong></td>
                            <td>FTSE100 Index Cash </td>
                            <td>ICE Futures Europe Financials</td>
                            <td>6358.90 → 6358.91</td>
                            <td>40</td>
                            <td>230.86</td>
                            <td>1</td>
                            <td>GBP</td>
                            <td>200:1</td>
                            <td>0.1</td>
                            <td>500</td>
                            <td>Monday-Friday <br>03:00-23:00</td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../../assets/home/indices_table_list8.jpg">
                                <!-- <strong>Euro Stoxx 50 Index</strong>(Cash) -->
                            </td>
                            <td><strong>HSI</strong></td>
                            <td>Hang Seng Index Cash</td>
                            <td>Hong Kong Futures Exchange</td>
                            <td>25059 → 25060</td>
                            <td>2</td>
                            <td>6.39</td>
                            <td>1</td>
                            <td>HKD</td>
                            <td>200:1</td>
                            <td>0.1</td>
                            <td>500</td>
                            <td>Monday-Friday <br>03:15-06:00, 07:00-10:30, 11:15-21:00</td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../../assets/home/indices_table_list.jpg">
                                <!-- <strong>Nasdaq 100 Index</strong>(Cash) -->
                            </td>
                            <td><strong>NAS100</strong></td>
                            <td>NAS100 Cash</td>
                            <td>Chicago Mercantile Exchange</td>
                            <td>10013.20 → 10013.21</td>
                            <td>0</td>
                            <td>164.9</td>
                            <td>1</td>
                            <td>USD</td>
                            <td>200:1</td>
                            <td>0.1</td>
                            <td>500</td>
                            <td>Monday-Friday <br>01:00-23:15, 23:30-24:00</td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../../assets/home/indices_table_list6.jpg">
                                <!-- <strong>USD Index</strong>(Futures) -->
                            </td>
                            <td><strong>Nikkei225</strong></td>
                            <td>Nikkei Index Cash </td>
                            <td>Chicago Mercantile Exchange</td>
                            <td>23108.98 → 23108.99</td>
                            <td>120</td>
                            <td>1010.01</td>
                            <td>1</td>
                            <td>JPY</td>
                            <td>200:1</td>
                            <td>50</td>
                            <td>20000</td>
                            <td>Monday-Friday <br>01:00-24:00</td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../../assets/home/indices_table_list.jpg">
                                <!-- <strong>France 40</strong>(Cash) -->
                            </td>
                            <td><strong>SP500</strong></td>
                            <td>S&P Index Cash </td>
                            <td>Chicago Mercantile Exchange</td>
                            <td>3225.39 → 3225.40</td>
                            <td>0</td>
                            <td>54.72</td>
                            <td>1</td>
                            <td>USD</td>
                            <td>200:1</td>
                            <td>0.1</td>
                            <td>500</td>
                            <td>Monday-Friday <br>01:00-23:15, 23:30-24:00</td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../../assets/home/indices_table_list.jpg">
                                <!-- <strong>VIX</strong>(Futures) -->
                            </td>
                            <td><strong>USDX</strong></td>
                            <td>US Dollar Index Future </td>
                            <td>ICE Futures US Currencies</td>
                            <td>96.305 → 96.306</td>
                            <td>28</td>
                            <td>28</td>
                            <td>100</td>
                            <td>USD</td>
                            <td>200:1</td>
                            <td>0.1</td>
                            <td>500</td>
                            <td>Monday <br>01:00-24:00<br>Tuesday-Thursday <br>03:00-24:00<br>Friday <br>03:00-23:00</td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../../assets/home/indices_table_list11.jpg">
                                <!-- <strong>VIX</strong>(Futures) -->
                            </td>
                            <td><strong>VIX</strong></td>
                            <td>Volatility Index Future</td>
                            <td>Cboe Futures Exchange</td>
                            <td>26.935 → 26.936</td>
                            <td>61</td>
                            <td>72.19</td>
                            <td>1000</td>
                            <td>USD</td>
                            <td>200:1</td>
                            <td>0.1</td>
                            <td>500</td>
                            <td>Monday-Tuesday, Thursday  <br>01:00-23:15, 23:30-24:00<br>Wed, Friday <br>01:00-23:15</td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../../assets/home/indices_table_list12.png">
                            </td>
                            <td><strong>US2000</strong></td>
                            <td>US SMALL CAP 2000 CASH</td>
                            <td>Chicago Mercantile Exchange</td>
                            <td>1783.83 → 1783.84</td>
                            <td>34.34</td>
                            <td>80</td>
                            <td>1</td>
                            <td>USD</td>
                            <td>200:1</td>
                            <td>0.1</td>
                            <td>500</td>
                            <td>Monday-Friday<br>01:00-23:15, 23:30-24:00</td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../../assets/home/indices_table_list13.png" style="width:33px;" >
                            </td>
                            <td><strong>TW50</strong></td>
                            <td>FTSE Taiwan CASH</td>
                            <td>Singapore Exchange</td>
                            <td>1200.12 → 1200.13</td>
                            <td>15</td>
                            <td>21</td>
                            <td>10</td>
                            <td>USD</td>
                            <td>200:1</td>
                            <td>0.1</td>
                            <td>500</td>
                            <td>Monday-Friday<br>02:45-07:45, 08:15-22:45</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
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



@endsection
