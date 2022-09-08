@extends('pages.layout.app')
@section('content')

    <div class="standard_stp_account">
        <div class="page_banner_content" style="background-image:url('../../assets/home/standard_stp_account_banner.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
            <div class="inner">
                <div class="tableBox">
                    <div class="table_cellBox">
                        <div class="text_box">
                            <h2><em>standard STP</em> Account</h2>
                            <h3>Evolve your Forex Trading with a Traders Corp<br> Standard STP Account</h3>
                            <a href="../auth/signup.html" class="red_arrow_button">open live account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page_content">
            <div class="inner">
                <div class="page_top_text">
                    <h2><strong>Standard STP </strong> Account</h2>
                    <p>The Traders Corp Standard STP Account is the ideal trading account for traders ready to move into the live trading environment. With the Traders Corp Standard STP Account you will gain direct access to institutional grade spreads and dark liquidity pools for increased liquidity. Our live Standard STP Account provides greater market depth, consistent pricing transparency, faster execution, low spreads and no commissions. Trades executed through the Traders Corp Standard STP Account run via the Equinix Fibre Optic Network which delivers lightning fast execution on every trade.</p>
                    <div class="clear"></div>
                </div>
                <div class="pages_text_and_image_row text_and_image_position_right">
                    <div class="text_and_image_inner">
                        <div class="text_box">
                            <h3>No Commissions on a Traders Corp Standard STP Account, just tight spreads</h3>
                            <p>The Traders Corp Standard STP Account boasts some of the tightest spreads across the Forex Trading industry.</p>
                            <p>We have carefully chosen the best liquidity providers with the deepest levels of liquidity in order to provide Traders Corp clients with the lowest spreads across our true Standard STP Accounts.</p>
                            <div class="bottom_text">
                                <p>choose from</p>
                                <p><strong>300+</strong></p>
                                <p>Tradable assets</p>
                            </div>
                        </div>
                        <div class="img_box" style="background-image:url('../../assets/home/standard_stp_account_list1.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
                            <img src="../../assets/home/standard_stp_account_list1.jpg" alt="" />
                            <span>
                  Trade with NO<br><strong> commission</strong>                                                <img src="../../assets/home/pages_text_and_image_on_text_r1.png" alt="" />
                  </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="pages_text_and_image_row text_and_image_position_left">
                    <div class="text_and_image_inner">
                        <div class="text_box">
                            <h3>Trade with no dealing desk on the Traders Corp Standard STP Account</h3>
                            <p>With the Traders Corp Standard STP Account, the counter-party to your trades are always the biggest liquidity providers linked to the Traders Corp oneZero MT4 Bridge.</p>
                            <p>Transparency is the top reason that traders of all levels choose Traders Corp as their preferred forex trading broker.</p>
                            <div class="bottom_text">
                                <p>start trading with</p>
                                <p><strong>$5000</strong></p>
                                <p>Minimum deposit</p>
                            </div>
                        </div>
                        <div class="img_box" style="background-image:url('../../assets/home/standard_stp_account_list2.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
                            <img src="../../assets/home/standard_stp_account_list2.jpg" alt="" />
                            <span>
                  up to <strong>500:1</strong><br> leverage
                  <img src="../../assets/home/pages_text_and_image_on_text_l2.png" alt="" />
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
                                        accessToken = '9AED191C6E01C51B2EFA0E4B815ED189';

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
                            <h3>Lightning-fast execution through the Equinix Fibre Optic Network</h3>
                            <p>All Traders Corp Standard STP Account are linked to our cutting edge Equinix fibre optic network. This guarantees our traders the fastest execution speeds on each trade.</p>
                            <p>Whether you are swing trader, scalper or running an Expert Advisor, you will be amazed at the trade execution speed on all Traders Corp Standard STP Accounts.</p>
                            <div class="bottom_text">
                                <p>ENJOY an</p>
                                <p><strong>ULTRA-LOW</strong></p>
                                <p>latency trading environment</p>
                            </div>
                        </div>
                        <div class="img_box" style="background-image:url('../../assets/home/standard_stp_account_list3.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
                            <img src="../../assets/home/standard_stp_account_list3.jpg" alt="" />
                            <span>
                  spreads<br> <strong>from 0.0 </strong>                                                <img src="../../assets/home/pages_text_and_image_on_text_r1.png" alt="" />
                  </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="pages_text_and_image_row text_and_image_position_left">
                    <div class="text_and_image_inner">
                        <div class="text_box">
                            <h3>Access up to  500:1 leverage on your Standard STP Account</h3>
                            <p>Experienced Forex Traders understand the importance of using leverage to their advantage. We have equipped all the Traders Corp Standard STP Accounts with the ability to access leverage of up to 500:1. This allows traders to trade more size and manage their risk more efficiently.</p>
                            <p>Leverage is the final tool which in the right hands, allows smart traders to generate substantial returns on their forex trading accounts.</p>
                            <div class="bottom_text">
                                <p>TRADE WITH</p>
                                <p><strong>500:1</strong></p>
                                <p>Leverage on FX</p>
                            </div>
                        </div>
                        <div class="img_box" style="background-image:url('../../assets/home/standard_stp_account_list4.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
                            <img src="../../assets/home/standard_stp_account_list4.jpg" alt="" />
                            <span>
                  <strong>9 FUNDING </strong><br>METHODS
                  <img src="../../assets/home/pages_text_and_image_on_text_l2.png" alt="" />
                  </span>
                        </div>
                        <div class="clear"></div>
                    </div>
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
            <a href="{{ route('register') }}">open live account</a>
            <div class="clear"></div>
        </div>
    </div>

@endsection
