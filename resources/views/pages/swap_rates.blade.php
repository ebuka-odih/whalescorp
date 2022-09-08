@extends('pages.layout.app')
@section('content')

    <div class="page_banner_content" style="background-image:url('../../assets/home/swap_rates_banner.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
        <div class="inner">
            <div class="tableBox">
                <div class="table_cellBox">
                    <div class="text_box">
                        <h2>FOREX SWAP RATES</h2>
                        <h3>Forex Swap Rates Explained</h3>
                        <a href="register" class="red_arrow_button">OPEN LIVE ACCOUNT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page_content">
        <div class="inner">
            <div class="page_top_text">
                <h2>WHAT IS A <strong>FOREX SWAP RATE？</strong></h2>
                <p>When trading spot Foreign Exchange (Forex trading), all Forex trades will settle two business days from date of entry, as per market convention.</p>
                <p>Cash Indices and Commodities will settle at the end each business day (server time 00:00).<br />
                    Whales Corp is not involved in the physical delivery of trades, thus all positions left open at the end of the trading day will be rolled over to a new value date and will therefore have exposure to a swap charge or credit.
                </p>
                <p>Please note: For Forex trades held open from Wednesday to Thursday as per server time, the new value date becomes Monday, rather than the weekend. This means the rollover charge on a Wednesday evening will be three times the usual value indicated on the table.</p>
                <p>As cash indices and commodities are same day settlement, holding trades over the weekend from Friday to Monday will carry three times the usual value as it accrues the three days of swap.</p>
                <p>Also please note there is no overnight swap on Crude oil as they are directly derived from the Futures contract.</p>
                <div class="clear"></div>
            </div>
            <div class="pages_text_and_image_row text_and_image_position_right">
                <div class="text_and_image_inner">
                    <div class="text_box">
                        <h3>How are Forex Swap Rates Determined？</h3>
                        <p>Forex Swap rates are affected by market conditions and the interest rate of the affiliated countries of the chosen Forex currency pair. </p>
                        <p>The daily released rates are calculated by our financial institutional partners using risk-management analysis. </p>
                        <p>Each Forex currency pair has its own Forex swap charge. Interest is paid on currency sold and received on currency bought.</p>
                        <div class="bottom_text">
                            <p>SPREADS FROM</p>
                            <p><strong>0.0</strong></p>
                            <p>pips on FX</p>
                        </div>
                    </div>
                    <div class="img_box" style="background-image:url('../../assets/home/swap_rates_img1.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
                        <img src="../../assets/home/swap_rates_img1.jpg" alt="" />
                        <span>
               <strong>TRADE WITH $0</strong><br>COMMISSION
               <img src="../../assets/home/pages_text_and_image_on_text_r1.png" alt="" />
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
            <div class="pages_text_and_image_row text_and_image_position_left">
                <div class="text_and_image_inner">
                    <div class="text_box">
                        <h3>How do I get the Most Up-to-Date Forex Swap Rates？</h3>
                        <p>For the most up-to-date Forex swap rates, please refer to the Market Watch panel in our MetaTrader 4 (MT4) platform.<br />
                            Simply follow the steps outlined below:
                        </p>
                        <ol class="number_ol">
                            <li><strong>1.</strong> Locate your product in the ‘Market Watch’ window. Right click, and select ‘Symbols’.</li>
                            <li><strong>2.</strong> Select the product you wish to view from the list. Select ‘Specifications’.</li>
                            <li><strong>3.</strong> Here you can view the Forex swap rates for both long and short positions.</li>
                        </ol>
                        <p>For more information, please feel free to <a href="contact.html" class="text_box_url">contact us</a>.</p>
                        <div class="bottom_text">
                            <p>START TRADING WITH</p>
                            <p><strong>$5000</strong></p>
                            <p>Minimum deposit</p>
                        </div>
                    </div>
                    <div class="img_box" style="background-image:url('../../assets/home/swap_rates_img2.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
                        <img src="../../assets/home/swap_rates_img2.jpg" alt="" />
                        <span>
               UP TO <strong>500:1</strong><br>LEVERAGE
               <img src="../../assets/home/pages_text_and_image_on_text_l2.png" alt="" />
               </span>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
    <!--#content-->
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
