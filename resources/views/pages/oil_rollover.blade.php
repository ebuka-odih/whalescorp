@extends('pages.layout.app')
@section('content')

    <div class="page_banner_content" style="background-image:url('../../assets/home/oil_rollover_banner.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
        <div class="inner">
            <div class="tableBox">
                <div class="table_cellBox">
                    <div class="text_box">
                        <h2>OIL ROLLOVER</h2>
                        <h3>Oil Rollover Explained</h3>
                        <a href="../auth/signup.html" class="red_arrow_button">OPEN LIVE ACCOUNT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page_content">
        <div class="inner">
            <div class="page_top_text">
                <h2>HOW <strong>OIL ROLLOVER WORKS</strong></h2>
                <p>When you’re trading an instrument, such as Oil on the MT4/MT5 platform, if you hold that position over the monthly expiration date of the futures contract that its price is based on, you will encounter what’s called a rollover. This is because Oil is a futures contract which has a set expiration date.</p>
                <p>If you do not wish for your position to be rolled over, then you should close your position prior to the rollover date.</p>
                <div class="clear"></div>
            </div>
            <div class="pages_text_and_image_row text_and_image_position_right">
                <div class="text_and_image_inner">
                    <div class="text_box">
                        <h3>Do I Incur Any Losses During the Oil Rollover Process？</h3>
                        <p>The monetary impact is largely nullified, as the changes in values of the open positions, are offset by a debit or credit adjustment made to the account. It appears on your statement as ‘Cash Adjustment-Rollover’</p>
                        <p><b>Example:</b><br />
                            CL-OIL futures (May contract) expires with the ask at $20.050 and bid at $20.000.
                        </p>
                        <p>New CL-OIL futures (June contract) opens trading at ask $26.050 and bid $26.000.</p>
                        <p>One Standard contract size for CL-OIL is 1,000 barrels.</p>
                        <p>If you hold one lot of long CL-OIL, you will be charged (26.050-20.000) *1000 = -$6050.<br />
                            The ‘Cash Adjustment- Rollover’ is Dr -$6050
                        </p>
                        <p>If you hold one lot of short CL-OIL, you will be credited (26.000-20.050) *1000 = +$5950.<br />
                            The ‘Cash Adjustment- Rollover’ is Cr +$5950
                        </p>
                        <div class="bottom_text">
                            <p>TRADE OIL WITH</p>
                            <p><strong>100:1</strong></p>
                            <p>leverage</p>
                        </div>
                    </div>
                    <div class="img_box" style="background-image:url('../../assets/home/oil_rollover_img1.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
                        <img src="../../assets/home/oil_rollover_img1.jpg" alt="" />
                        <span>
               TRADE WITH <strong>$0</strong><br><strong>COMMISSION</strong>
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

        <div class="inner">
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
