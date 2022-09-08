@extends('pages.layout.app')
@section('content')

    <div class="page_banner_content" style="background-image:url('../../assets/home/forex_leverage_banner.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
        <div class="inner">
            <div class="tableBox">
                <div class="table_cellBox">
                    <div class="text_box">
                        <h2>Forex leverage</h2>
                        <h3>Forex Trading Leverage Explained</h3>
                        <a href="../auth/signup.html" class="red_arrow_button">open live account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page_content">
        <div class="inner">
            <div class="page_top_text">
                <h2>what is <strong>Forex Leverage?</strong></h2>
                <p>Forex Leverage is defined as the use of borrowed capital, such as “margin” allowing the Forex trader to gain access to larger sums of capital. This can heighten profits and losses and should be used wisely.</p>
                <div class="clear"></div>
            </div>
            <div class="pages_text_and_image_row text_and_image_position_right">
                <div class="text_and_image_inner">
                    <div class="text_box">
                        <h3>Examples of Forex Leverage</h3>
                        <p><strong>Forex Trader A has $5000 USD:</strong><br />
                            If Forex Trader A has an account leverage of 10:1and they wish to use $1000 on one Forex trade as margin, they will have exposure of $10,000 in base currency ($1000) = 10 x $1000 = $10,000 (trade value).
                        </p>
                        <p><strong>Forex Trader B has $5000 USD:</strong><br />
                            If Forex Trader B has an account leverage of 100:1and they wish to use $1000 on one Forex trade as margin, they will have exposure of $100,000 in base currency ($1000) = 100 x $1000 = $100,000 (trade value).
                        </p>
                        <div class="bottom_text">
                            <p>ACCESS UP TO</p>
                            <p><strong>500:1</strong></p>
                            <p>leverage on fx</p>
                        </div>
                    </div>
                    <div class="img_box" style="background-image:url('../../assets/home/forex_leverage_list1.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
                        <img src="../../assets/home/forex_leverage_list1.jpg" alt="" />
                        <span>
               <strong>Trade with $0 </strong><br> commission
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
                        <h3>What Leverage Does Traders Corp Offer?</h3>
                        <p>Traders Corp&#8217;s standard Forex leverage starts at 100:1. The maximum Forex leverage Traders Corp may offer is up to 500:1. This is only for approved accounts and funds approved for leverage greater than 100:1 will be limited.</p>
                        <p>If you wish to get access to higher Forex leverage, please note this on the application or contact us. By submitting an increase in trade leverage request, you accept that this can result in high risk and severe or total account loss. Traders Corp is a non-advisory Forex broker and will not provide you with investment or personal trading advice. For such advice, please consult a registered financial advisor. </p>
                        <p>Margin Forex is very high risk and leverage should be used wisely.</p>
                        <div class="bottom_text">
                            <p>start trading with</p>
                            <p><strong>$5000</strong></p>
                            <p>Minimum deposit</p>
                        </div>
                    </div>
                    <div class="img_box" style="background-image:url('../../assets/home/forex_leverage_list2.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
                        <img src="../../assets/home/forex_leverage_list2.jpg" alt="" />
                        <span>
               up to <strong>500:1 </strong><br>leverage
               <img src="../../assets/home/pages_text_and_image_on_text_l2.png" alt="" />
               </span>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="pages_text_and_image_row text_and_image_position_right">
                <div class="text_and_image_inner">
                    <div class="text_box">
                        <h3>How to Submit a Forex Leverage Change Request</h3>
                        <p>Use the below button to request a Forex leverage change to your Traders Corp MetaTrader 4 or MetaTrader 4 for Mac account.</p>
                        <p><a href="../auth.html" class="text_box_button">Client Portal Login</a></p>
                        <div class="bottom_text">
                            <p>Award-winning</p>
                            <p><strong>24/5</strong></p>
                            <p>Custumer support</p>
                        </div>
                    </div>
                    <div class="img_box" style="background-image:url('../../assets/home/forex_leverage_list3.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
                        <img src="../../assets/home/forex_leverage_list3.jpg" alt="" />
                        <span>
               acces mt4 on<br><strong> pc or mac</strong>
               <img src="../../assets/home/pages_text_and_image_on_text_r1.png" alt="" />
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
            <a href="../auth/signup.html">open live account</a>
            <div class="clear"></div>
        </div>
    </div>

@endsection
