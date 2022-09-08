@extends('pages.layout.app')
@section('content')

    <style type="text/css">
        .who_is .who_stand{
            background: url("../../assets/home/who_stand.png") center top no-repeat;
            background-size: cover;
            padding:50px 0px 35px;
            margin-bottom:62px;
        }
        .who_is .who_stand .inner{text-align:right;}
        .who_is .who_stand h3{font-size:39px;font-weight:bold;color:#fff;}
        .who_is .who_stand h3:after{content: "";display:inline-block;margin-top: 22px;width: 90px;height: 4px;background: #fff;}
        .who_is .who_stand p{font-size:35px;color:#fff;font-weight:bold;line-height:1.5;}
        .who_is .text_box_list_img{font-size:0;margin-top:100px;}
        .who_is .text_box_list_img li{width:33.33%;text-align:center;color:#2544a2;font-size:13px;display:inline-block;}
        .who_is .text_box_list_img li img{margin-bottom:33px;}
        @media (max-width: 768px){
            .who_is .text_box_list_img{margin-top:20px;}
        }
        @media (max-width:510px){
            .who_is .text_box_list_img li{width:100%;text-align:center;color:#2544a2;font-size:13px;display:block;margin:0 auto;margin-bottom:30px;}
            .who_is .text_box_list_img li:last-child{margin-bottom:0px;}
        }
    </style>
    <div class="who_is">
        <div class="page_banner_content" style="background-image:url('../../assets/home/who_is_banner.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
            <div class="inner">
                <div class="tableBox">
                    <div class="table_cellBox">
                        <div class="text_box">
                            <h2>WHO IS WHALES CORP</h2>
                            <h3>Transparent Forex Broker</h3>
                            <a href="register" class="red_arrow_button">open live account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page_content">
            <div class="inner">
                <div class="page_top_text">
                    <h2><strong>ABOUT US</strong></h2>
                    <p>Whales Corp was founded in 2009 by a highly-specialised team with backgrounds in Finance, FOREX and Technology. Created to help clients pursue their financial goals, we proudly offer transparent access to the FOREX market, powerful trading platforms (MT4 and MT5), exceptional execution speed, and award-winning customer service.</p>
                    <p>Given our strong background, we have always been able to offer superior access to global FOREX markets, which is why professional and retail traders are able to notice the remarkable difference between Whales Corp and other brokers.</p>
                    <p>We continually strive to evolve our offering to ensure that we deliver a service that is far superior to anything else on the market.<br />
                        Smart traders make smart decisions, so become a Whales Corp client today and experience the difference.
                    </p>
                    <div class="clear"></div>
                </div>
                <div class="pages_text_and_image_row text_and_image_position_right">
                    <div class="text_and_image_inner">
                        <div class="text_box">
                            <h3>Whales Corp Values</h3>
                            <p>At Whales Corp, it is important for us to provide complete transparency in an often cloudy industry. That is why we go over and above to make ourselves available to fulfil the needs of our clients and continue to deliver an exceptionally reliable service.</p>
                            <p>Understanding that our clients’ trust must be earned is what sets us apart from other brokers. As such, we stand to offer our clients the best service possible, actively promoting integrity and ethical practices throughout the FOREX industry.</p>
                            <p>Strong from our reputation of integrity, we proudly align our interests with that of our clients and hold ourselves completely accountable for our offering, ensuring our high standards are never compromised.</p>
                        </div>
                        <div class="img_box" style="background-image:url('../../assets/home/who_is_list2.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
                            <img src="../../assets/home/who_is_list2.jpg" alt="" />
                            <span>
                  <strong>Regulated </strong><br>FX broker
                  <img src="../../assets/home/pages_text_and_image_on_text_r1.png" alt="" />
                  </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="who_stand text-align:right;">
                <div class="inner">
                    <h3>What We Stand For<br></h3>
                    <p>Accountability<br> Transparency<br> Reliability<br>Integrity<br>Trust</p>
                </div>
            </div>
            <div class="inner">
                <div class="pages_text_and_image_row text_and_image_position_left">
                    <div class="text_and_image_inner">
                        <div class="text_box">
                            <h3>Standards and Safety</h3>
                            <p>As a leading Forex broker, we uphold the highest standards of regulation and compliance.</p>
                            <p>We are also strictly audited and keep all client funds in a segregated trust account, to ensure your money is protected.</p>
                            <ul class="text_box_list_img">

                                <li>
                                    <img src="../../assets/home/who_is_list2_img2_23860.png?v=1" alt="" /><br />
                                    <strong>Regulated</strong>
                                </li>
                                <li>
                                    <img src="../../assets/home/who_is_list2_img33860.png?v=1" alt="" /><br />
                                    Indemnity <strong>Insurance</strong>
                                </li>
                            </ul>
                        </div>
                        <div class="img_box" style="background-image:url('../../assets/home/who_is_list2.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
                            <img src="../../assets/home/who_is_list2.jpg" alt="" />
                            <span>
                  <strong>SEGREGATED </strong><br>CLIENT FUNDS
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
            <a href="register">open live account</a>
            <div class="clear"></div>
        </div>
    </div>

@endsection
