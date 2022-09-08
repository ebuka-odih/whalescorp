@extends('pages.layout.app')
@section('content')

    <div class="page_banner_content" style="background-image:url('../../assets/home/trading-hours_banner_img.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
        <div class="inner">
            <div class="tableBox">
                <div class="table_cellBox">
                    <div class="text_box">
                        <h2>tRading hours</h2>
                        <h3>Whether Forex, Indices, Share CFDs or Commodities, there is always a market for you to trade</h3>
                        <a href="register" class="red_arrow_button">open live account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page_content">
        <div class="inner">
            <div class="page_top_text">
                <h2>trading <strong>hours</strong></h2>
                <p>Please refer to the table below to view the open and close times of a particular market or instrument. You can also view the trading hours from your MetaTrader platform by right clicking on an instrument in the ‘Market Watch’ section, then clicking ‘Specification’. A window will open that displays the Trading Hours for the selected instrument.</p>
                <p>Please note that Whale Corp’s server time and charts are GMT +2 or GMT +3 (during daylight savings time).</p>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="trading_hours_content">
        <div class="inner">
            <ul>
                <li>
                    <div class="btn_box">
                        <strong>Forex</strong>
                        <img src="../../assets/home/trading_hours_icon_down.png" alt="" class="btn">
                    </div>
                    <div class="table_box">
                        <table>
                            <thead>
                            <tr>
                                <th>Symbol</th>
                                <th>Quotation Hours (GMT+2)</th>
                                <th>Trading Hours (GMT+2)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>FX</td>
                                <td>00:00-24:00</td>
                                <td>00:01-23:58</td>
                            </tr>
                            <tr>
                                <td>AUDCNH</td>
                                <td>05:00-20:00</td>
                                <td>05:00-20:00</td>
                            </tr>
                            <tr>
                                <td>USDCNH</td>
                                <td>00:00-24:00</td>
                                <td>00:01-23:58</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </li>
                <li>
                    <div class="btn_box">
                        <strong>Commodities</strong>
                        <img src="../../assets/home/trading_hours_icon_down.png" alt="" class="btn">
                    </div>
                    <div class="table_box">
                        <table>
                            <thead>
                            <tr>
                                <th>Symbol</th>
                                <th>Quotation Hours (GMT+2)</th>
                                <th>Trading Hours (GMT+2)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Gold</td>
                                <td>01:00-23:59</td>
                                <td>01:00-23:59</td>
                            </tr>
                            <tr>
                                <td>Silver</td>
                                <td>01:00-23:59</td>
                                <td>01:00-23:59</td>
                            </tr>
                            <tr>
                                <td>XPTUSD, XPDUSD</td>
                                <td>M: 01:00-24:00 T-F: 00:00-00:15 01:00-24:00</td>
                                <td>M: 01:00-24:00 T-F: 00:00-00:15 01:00-24:00</td>
                            </tr>
                            <tr>
                                <td>USOUSD</td>
                                <td>M-T: 01:00-24:00 F: 01:00-23:45</td>
                                <td>M-T: 01:00-24:00 F: 01:00-23:45</td>
                            </tr>
                            <tr>
                                <td>UKOUSD</td>
                                <td>M: 01:00-24:00 T-F: 00:00-01:00 03:00-24:00</td>
                                <td>M: 01:00-24:00 T-F: 00:00-01:00 03:00-24:00</td>
                            </tr>
                            <tr>
                                <td>CL-OIL</td>
                                <td>01:00-24:00</td>
                                <td>M-T: 01:00-23:59 F: 01:00-23:45</td>
                            </tr>
                            <tr>
                                <td>Copper-C</td>
                                <td>01:00-24:00</td>
                                <td>01:00-24:00</td>
                            </tr>
                            <tr>
                                <td>Cocoa-C</td>
                                <td>12:45-20:30</td>
                                <td>12:45-20:30</td>
                            </tr>
                            <tr>
                                <td>Coffee-C</td>
                                <td>12:15-20:30</td>
                                <td>12:15-20:30</td>
                            </tr>
                            <tr>
                                <td>Cotton-C</td>
                                <td>04:00-21:20</td>
                                <td>04:00-21:20</td>
                            </tr>
                            <tr>
                                <td>Gas-C</td>
                                <td>01:00-24:00</td>
                                <td>01:00-24:00</td>
                            </tr>
                            <tr>
                                <td>Gasoil-C</td>
                                <td>M: 09:00-24:00 T-F: 00:00-01:00 03:00-24:00</td>
                                <td>M: 09:00-24:00 T-F: 00:00-01:00 03:00-24:00</td>
                            </tr>
                            <tr>
                                <td>HO-C</td>
                                <td>01:00-24:00</td>
                                <td>01:00-24:00</td>
                            </tr>
                            <tr>
                                <td>NG-C</td>
                                <td>01:00-24:00</td>
                                <td>01:00-24:00</td>
                            </tr>
                            <tr>
                                <td>OJ-C</td>
                                <td>15:00-21:00</td>
                                <td>15:00-21:00</td>
                            </tr>
                            <tr>
                                <td>Sugar-C</td>
                                <td>11:30-20:00</td>
                                <td>11:30-20:00</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </li>
                <li>
                    <div class="btn_box">
                        <strong>Indices</strong>
                        <img src="../../assets/home/trading_hours_icon_down.png" alt="" class="btn">
                    </div>
                    <div class="table_box">
                        <table>
                            <thead>
                            <tr>
                                <th>Symbol</th>
                                <th>Quotation Hours (GMT+2)</th>
                                <th>Trading Hours (GMT+2)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>China 50</td>
                                <td>04:00-11:30 12:00-22:00</td>
                                <td>04:00-11:30 12:00-22:00</td>
                            </tr>
                            <tr>
                                <td>HSI</td>
                                <td>04:15-07:00 08:00-11:30 12:15-20:00</td>
                                <td>04:15-07:00 08:00-11:30 12:15-20:00</td>
                            </tr>
                            <tr>
                                <td>NIKKEI 225</td>
                                <td>01:00-23:15</td>
                                <td>01:00-23:15</td>
                            </tr>
                            <tr>
                                <td>SPI 200</td>
                                <td>01:50-08:30 09:10-23:00</td>
                                <td>01:50-08:30 09:10-23:00</td>
                            </tr>
                            <tr>
                                <td>DJ 30</td>
                                <td>M-T: 01:00-23:15 23:30-24:00 F: 01:00-23:15</td>
                                <td>M-T: 01:00-23:15 23:30-24:00 F: 01:00-23:15</td>
                            </tr>
                            <tr>
                                <td>SP 500</td>
                                <td>M-T: 01:00-23:15 23:30-24:00 F: 01:00-23:15</td>
                                <td>M-T: 01:00-23:15 23:30-24:00 F: 01:00-23:15</td>
                            </tr>
                            <tr>
                                <td>NAS 100</td>
                                <td>01:00-23:15 23:30-24:00</td>
                                <td>01:00-23:15 23:30-24:00</td>
                            </tr>
                            <tr>
                                <td>FTSE 100</td>
                                <td>09:00-24:00</td>
                                <td>09:00-24:00</td>
                            </tr>
                            <tr>
                                <td>DAX 30</td>
                                <td>09:00-24:00</td>
                                <td>09:00-24:00</td>
                            </tr>
                            <tr>
                                <td>EU 50</td>
                                <td>09:00-24:00</td>
                                <td>09:00-24:00</td>
                            </tr>
                            <tr>
                                <td>FRA 40</td>
                                <td>10:00-24:00</td>
                                <td>10:00-24:00</td>
                            </tr>
                            <tr>
                                <td>ES 35</td>
                                <td>10:00-22:00</td>
                                <td>10:00-22:00</td>
                            </tr>
                            <tr>
                                <td>ITA 40</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>USDX</td>
                                <td>M: 01:00-24:00 T-T: 03:00-24:00 F: 03:00-23:00</td>
                                <td>M: 01:00-24:00 T-T: 03:00-24:00 F: 03:00-23:00</td>
                            </tr>
                            <tr>
                                <td>VIX</td>
                                <td>M, W, F: 01:00-23:15 T, T: 01:00-23:15 23:30-24:00</td>
                                <td>M, W, F: 01:00-23:15 T, T: 01:00-23:15 23:30-24:00</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </li>
                <li>
                    <div class="btn_box">
                        <strong>Share CFDs</strong>
                        <img src="../../assets/home/trading_hours_icon_down.png" alt="" class="btn">
                    </div>
                    <div class="table_box">
                        <table>
                            <thead>
                            <tr>
                                <th>Symbol</th>
                                <th>Quotation Hours (GMT+2)</th>
                                <th>Trading Hours (GMT+2)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>US Shares</td>
                                <td>16:30-23:00</td>
                                <td>16:30-23:00</td>
                            </tr>
                            <tr>
                                <td>HK Shares</td>
                                <td>04:30-07:00 08:00-11:00</td>
                                <td>04:30-07:00 08:00-11:00</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </li>
                <!-- <li>
                   <div class="btn_box">
                       <strong>CryptoCurrency</strong>
                       <img src="/wp-content/themes/vfx_new/images/trading_hours_icon_down.png" alt="" class="btn">
                   </div>
                   <div class="table_box">
                       <table>
                           <thead>
                               <tr>
                                   <th>Symbol</th>
                                   <th>Quotation Hours (GMT+2)</th>
                                   <th>Trading Hours (GMT+2)</th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <td>BCHUSD</td>
                                   <td>00:00-24:00</td>
                                   <td>00:00-24:00</td>
                               </tr>
                               <tr>
                                   <td>BTCUSD</td>
                                   <td>00:00-24:00</td>
                                   <td>00:00-24:00</td>
                               </tr>
                               <tr>
                                   <td>DSHUSD</td>
                                   <td>00:00-24:00</td>
                                   <td>00:00-24:00</td>
                               </tr>
                               <tr>
                                   <td>ETHUSD</td>
                                   <td>00:00-24:00</td>
                                   <td>00:00-24:00</td>
                               </tr>
                               <tr>
                                   <td>LTCUSD</td>
                                   <td>00:00-24:00</td>
                                   <td>00:00-24:00</td>
                               </tr>
                               <tr>
                                   <td>XRPUSD</td>
                                   <td>00:00-24:00</td>
                                   <td>00:00-24:00</td>
                               </tr>
                           </tbody>
                       </table>
                   </div>
                   </li> -->
            </ul>
        </div>
    </div>
    <script>
        jQuery(document).ready(function($) {
            $(".btn_box").click(function() {
                if ($(this).parent().find(".table_box").css("display") == "block") {
                    $(this).find(".btn").removeClass("active");
                    $(this).parent().find(".table_box").slideUp();
                    $(this).parent().removeClass("add_bg");
                } else {
                    $(this).find(".btn").addClass("active");
                    $(this).parent().find(".table_box").slideDown();
                    $(this).parent().addClass("add_bg");
                }

            })
        })
    </script>
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
