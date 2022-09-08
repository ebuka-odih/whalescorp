@extends('pages.layout.app')
@section('content')


    <style type="text/css">
    .page_banner_content .inner h2 {
        letter-spacing: -1px;
    }
</style>
<div class="page_banner_content" style="background-image:url('../../assets/home/pro_ecn_banner.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
    <div class="inner">
        <div class="tableBox">
            <div class="table_cellBox">
                <div class="text_box">
                    <h2>OUR Most Advanced Trading Account,<br />
                        <em>PRO ECN</em>
                    </h2>
                    <h3>Deep liquidity and true ECN institutional spreads</h3>
                    <a href="register" class="red_arrow_button">open live account</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page_content">
    <div class="inner">
        <div class="page_top_text">
            <h2><strong>Whale Corp</strong> PRO ECN Account</h2>
            <p>Access institutional grade liquidity from the world’s leading providers and trade global markets at the lowest cost. The Whale Corp PRO ECN account is designed to give professional traders, money managers and algorithmic traders unparalleled execution speed and extra-tight spreads, all with just $2.00 commission per standard FX lot, per side.</p>
            <div class="clear"></div>
        </div>
        <div class="pages_text_and_image_row text_and_image_position_right">
            <div class="text_and_image_inner">
                <div class="text_box">
                    <h3>Trade with the lowest ECN commission to date</h3>
                    <p>We have partnered with the world’s leading liquidity providers to offer our professional clients the tightest spreads and lowest commissions available for ECN accounts.</p>
                    <p>All clients with a Whale Corp PRO ECN account can now experience ultra-tight spreads from 0.0 and just $2.00 commission per standard FX lot, per side.</p>
                    <p>We introduced our PRO ECN account for professional traders and fund managers because we believe that it’s crucial to keep trading costs as low as possible while offering exceptional speed and reliability.</p>
                    <div class="bottom_text">
                        <p>choose from</p>
                        <p><strong>300+</strong></p>
                        <p>Tradable assets</p>
                    </div>
                </div>
                <div class="img_box" style="background-image:url('../../assets/home/pro_ecn_list1.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
                    <img src="../../assets/home/pro_ecn_list1.jpg" alt="" />
                    <span>
               <strong>Trade with $2</strong> <br> commission on FX                                                <img src="../../assets/home/pages_text_and_image_on_text_r1.png" alt="" />
               </span>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="pages_text_and_image_row text_and_image_position_left">
            <div class="text_and_image_inner">
                <div class="text_box">
                    <h3>Gain an advantage with a Whale Corp PRO ECN Account</h3>
                    <p>Professional traders who use the Whale Corp PRO ECN Account are able to take advantage of the lowest costs while capitalising on the fastest execution speeds, making them ideal for both automatic and manual trading as well as high volume trades.</p>
                    <p>With institutional grade liquidity supplied from the world’s largest banks, our PRO ECN Account delivers unmatched speed and stability to professional forex traders.</p>
                    <p>Give your trading edge a boost with the most advanced MT4 and MT5 ECN account available and start trading with our true PRO ECN, designed by trading professionals, for trading professionals.</p>
                    <div class="bottom_text">
                        <p>Spreads from</p>
                        <p><strong>0.0</strong></p>
                        <p>pips on FX</p>
                    </div>
                </div>
                <div class="img_box" style="background-image:url('../../assets/home/pro_ecn_list2.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
                    <img src="../../assets/home/pro_ecn_list2.jpg" alt="" />
                    <span>
               up to <strong>500:1 </strong><br>leverage                                <img src="../../assets/home/pages_text_and_image_on_text_l2.png" alt="" />
               </span>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
<!--#content-->
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
                <img src="https://www.vantagefx.com/wp-content/themes/vfx_new/images/home_row5_content_left_img.png" alt="" />
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
                            accessToken = 'E93AED0F1B2AA44614D775689A69280B';

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

<div class="accounts_proecn_step_wrapper">
    <div class="inner">
        <div class="pages_text_and_image_row text_and_image_position_right">
            <div class="text_and_image_inner">
                <div class="text_box">
                    <h3>Experience PRO ECN Transparency</h3>
                    <p>Today’s professional forex trader not only requires tighter spreads and deeper liquidity, they require pure transparency when it comes to pricing.</p>
                    <p>By offering access to our Interbank price feeds from the largest major banks and liquidity providers, we are able to offer clients the best bid, ask and execution possible.</p>
                    <p>Open PRO ECN account and experience lower costs and fast trade execution today.</p>
                    <div class="bottom_text">
                        <p>Award-winning</p>
                        <p><strong>24/5</strong></p>
                        <p>Customer support</p>
                    </div>
                </div>
                <div class="img_box" style="background-image:url('../../assets/home/pro_ecn_list3.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
                    <img src="../../assets/home/pro_ecn_list3.jpg" alt="" />
                    <span>
               <strong>MT4 &amp; MT5 </strong><br>compatible                                                <img src="../../assets/home/pages_text_and_image_on_text_r1.png" alt="" />
               </span>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="pages_text_and_image_row text_and_image_position_left">
            <div class="text_and_image_inner">
                <div class="text_box">
                    <h3>Trade your PRO ECN Account anywhere, anytime</h3>
                    <p>Because markets move 24 hours a day, 5 days a week we understand how important it is for Forex traders to be able to access the market anywhere, anytime. That’s why the PRO ECN Account is accessible across all devices.</p>
                    <p>By offering the PRO ECN Account across the robust MT4 and MT5 platforms and mobile trading applications, professional traders can rest-assured that they will have fast and stable access to their account whenever they need it.</p>
                    <div class="bottom_text">
                        <p>fund YOUR account</p>
                        <p><strong>9</strong></p>
                        <p>Different ways</p>
                    </div>
                </div>
                <div class="img_box" style="background-image:url('../../assets/home/pro_ecn_list4.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
                    <img src="../../assets/home/pro_ecn_list4.jpg" alt="" />
                    <span>
               <strong>13 platforms</strong> <br>&amp; devices
               <img src="../../assets/home/pages_text_and_image_on_text_l2.png" alt="" />
               </span>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="pages_text_and_image_row text_and_image_position_right">
            <div class="text_and_image_inner">
                <div class="text_box">
                    <h3>Execute your trades with unmatched precision and speed</h3>
                    <p>The Whale Corp PRO ECN Account connects directly to our fibre optic network direct to our Equinix servers, world-wide.</p>
                    <p>This means that clients’ orders, whether 1 lot or 40 lots, are filled instantaneously. Our PRO ECN ranks prices to allow the real-time execution of large trades across multiple liquidity providers, so you get the best price and no requotes regardless of how large you trade.</p>
                    <p>Professional traders require a professional product, so equip yourself with unparalleled market access through the Whale Corp PRO ECN Account.</p>
                    <div class="bottom_text">
                        <p>up to</p>
                        <p><strong>100GB/s<br />
                            </strong>
                        </p>
                        <p>Bandwidth</p>
                    </div>
                </div>
                <div class="img_box" style="background-image:url('../../assets/home/pro_ecn_list5.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
                    <img src="../../assets/home/pro_ecn_list5.jpg" alt="" />
                    <span>
               <strong>Instant </strong><br>execution
               <img src="../../assets/home/pages_text_and_image_on_text_r1.png" alt="" />
               </span>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="accounts_proecn_step_content">
            <h2 class="page_title_center">How to switch to PRO ECN</h2>
            <ul>
                <li>
                    <div class="text_box">
                        <div class="text_box_inner">
                            <h3>Fund your Account<span>1</span></h3>
                            <p>Fund your account with $20,000+</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="text_box blue_text_box">
                        <div class="text_box_inner">
                            <h3>Close your Trades<span>2</span></h3>
                            <p>Close all open trades (if applicable)</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="text_box">
                        <div class="text_box_inner">
                            <h3>Get Pro ECN Account<span>3</span></h3>
                            <p>Email <a href="mailto: info@traderscorp.io"><span class="__cf_email__" data-cfemail="3e4d4b4e4e514c4a7e485f504a5f595b5846105d5153">[info@traderscorp.io]</span></a> and request a Pro ECN account</p>
                        </div>
                    </div>
                </li>
            </ul>
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
