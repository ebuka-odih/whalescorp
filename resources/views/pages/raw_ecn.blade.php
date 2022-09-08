@extends('pages.layout.app')
@section('content')

    <div class="page_banner_content" style="background-image:url('../../assets/home/ecn_broker_banner.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
        <div class="inner">
            <div class="tableBox">
                <div class="table_cellBox">
                    <div class="text_box">
                        <h2><em>raw ecn </em> Account</h2>
                        <h3>Trade with razor-sharp spreads from 0.0
                            and institutional grade liquidity
                        </h3>
                        <a href="{{ route('register') }}" class="red_arrow_button">open live account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page_content">
        <div class="inner">
            <div class="page_top_text">
                <h2><strong>Whale Corp</strong> RAW ECN Account</h2>
                <p>Institutional grade liquidity from the world’s largest institutions, direct to you.  Whale Corp has introduced the next generation RAW ECN trading environment which gives you the most cost-effective Forex trading solution available across the Forex trading industry. You’ll have the opportunity to trade Forex on institutional grade liquidity direct from the world’s largest banks and institutions with no spread mark-up, just a small $3.00 commission.</p>
                <div class="clear"></div>
            </div>
            <div class="pages_text_and_image_row text_and_image_position_right">
                <div class="text_and_image_inner">
                    <div class="text_box">
                        <h3>Lowest ECN Based Account Commissions</h3>
                        <p>We have linked the highest grade, prime FX liquidity in the Whale Corp RAW ECN Account. This means thatWhale Corp is able to provide all clients with the lowest spreads and the lowest commissions in the Forex Trading industry.</p>
                        <p>All Whale Corp clients with a RAW ECN account will experience competitive spreads, and only $3.00 commissions per standard lot, per side.</p>
                        <p>At Whale Corp, we understand that for professional Forex traders, it’s crucial to keep FX trading costs as low as possible. This is why we’ve developed the Whale Corp RAW ECN account.</p>
                        <div class="bottom_text">
                            <p>choose from</p>
                            <p><strong>300+</strong></p>
                            <p>Tradable assets</p>
                        </div>
                    </div>
                    <div class="img_box" style="background-image:url('../../assets/home/ecn_broker_list1.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
                        <img src="../../assets/home/ecn_broker_list1.jpg" alt="" />
                        <span>
               <strong>Trade with $3 </strong> <br> commission                                                <img src="../../assets/home/pages_text_and_image_on_text_r1.png" alt="" />
               </span>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="pages_text_and_image_row text_and_image_position_left">
                <div class="text_and_image_inner">
                    <div class="text_box">
                        <h3>Take advantage of flexible leverage options</h3>
                        <p>Forex traders using the Whale Corp RAW ECN Account experience the lowest costs, fastest execution speeds and access to up to 500:1 leverage.</p>
                        <p>The oneZero™ MT4 Bridge powers the Whale Corp RAW ECN Account.  With premium grade ECN Forex liquidity, this makes our solution the fastest, and most stable available in the Forex trading market.</p>
                        <p>Gain your Forex trading edge with the most advanced MT4 ECN trading account available.  Start trading on a true ECN environment today.</p>
                        <div class="bottom_text">
                            <p>start trading with</p>
                            <p><strong>$5000</strong></p>
                            <p>Minimum deposit</p>
                        </div>
                    </div>
                    <div class="img_box" style="background-image:url('../../assets/home/ecn_broker_list2.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
                        <img src="../../assets/home/ecn_broker_list2.jpg" alt="" />
                        <span>
               up to <strong>500:1 </strong> <br> leverage                                <img src="../../assets/home/pages_text_and_image_on_text_l2.png" alt="" />
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
                                    accessToken = '4CD046237E8F537AC9F81EA9B9A24BE2';

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
                        <h3>Trade with complete transparency</h3>
                        <p>The Whale Corp RAW ECN account has been built to address one of the most important factors in successful Forex trading: Transparency.</p>
                        <p>While trading on the Whale Corp RAW ECN account, Forex traders are able to realise profits, no matter how big they are.</p>
                        <div class="bottom_text">
                            <p>Award-winning</p>
                            <p><strong>24/5</strong></p>
                            <p>Costumer support</p>
                        </div>
                    </div>
                    <div class="img_box" style="background-image:url('../../assets/home/ecn_broker_list3.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
                        <img src="../../assets/home/ecn_broker_list3.jpg" alt="" />
                        <span>
               spreads<br><strong>from 0.0 </strong>                                                <img src="../../pages_text_and_image_on_text_r1.html" alt="" />
               </span>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="pages_text_and_image_row text_and_image_position_left">
                <div class="text_and_image_inner">
                    <div class="text_box">
                        <h3>Access your account anywhere, anytime</h3>
                        <p>As with all Whale Corp trading accounts, the RAW ECN account is accessible across all devices.  </p>
                        <p>We understand the importance of Forex traders having fast and stable access to their Whale Corp RAW ECN<br />
                            trading account.
                        </p>
                        <p>Access your Whale Corp RAW ECN account anywhere, anytime.</p>
                        <div class="bottom_text">
                            <p>fund YOUR account</p>
                            <p><strong>9</strong></p>
                            <p>Different ways</p>
                        </div>
                    </div>
                    <div class="img_box" style="background-image:url('../../assets/home/ecn_broker_newlist4-1.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
                        <img src="../../assets/home/ecn_broker_newlist4-1.jpg" alt="" />
                        <span>
               <strong>13 platforms </strong> <br> &amp; devices                                <img src="../../assets/home/pages_text_and_image_on_text_l2.png" alt="" />
               </span>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="pages_text_and_image_row text_and_image_position_right">
                <div class="text_and_image_inner">
                    <div class="text_box">
                        <h3>Execute trades with unmatched precision</h3>
                        <p>All Whale Corp RAW ECN accounts are directly connected to our custom made fibre optic network which connects all Equinix servers.</p>
                        <p>This cutting edge solution enables the fastest Forex trading execution possible and delivers our FX traders the edge they need to be consistently profitable on<br />
                            the volatile Forex market.
                        </p>
                        <p>Professional traders make smart decisions. Equip yourself with seamless access to the interbank forex market using the Whale Corp RAW ECN account.</p>
                        <div class="bottom_text">
                            <p>up to</p>
                            <p><strong>100GB/s</strong></p>
                            <p>Bandwidth</p>
                        </div>
                    </div>
                    <div class="img_box" style="background-image:url('../../assets/home/ecn_broker_list5.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
                        <img src="../../assets/home/ecn_broker_list5.jpg" alt="" />
                        <span>
               <strong>Instant </strong> <br> execution                                                <img src="../../assets/home/pages_text_and_image_on_text_r1.png" alt="" />
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
            <a href="{{ route('register') }}">open live account</a>
            <div class="clear"></div>
        </div>
    </div>

@endsection
