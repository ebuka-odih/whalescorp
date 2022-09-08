@extends('pages.layout.app')
@section('content')

    <style>.refer_a_friend_row1{ padding:70px 0px;}
        .refer_a_friend_row1 h2{ margin-bottom:48px;}
        .refer_a_friend_row1_content{ background: url("../../assets/home/refer_a_friend_row1_content_bg.jpg") center top no-repeat; background-size: cover; padding:60px 0px 35px;}
        .refer_a_friend_row1_content img{ display:block; margin:0px auto; float:right;}
        .welcomebonus_content_row3 .accounts_proecn_step_content ul li .text_box{ padding-bottom:20px;}
        .welcomebonus_content_row3 .accounts_proecn_step_content ul li p{ font-size:18px;}
        .welcomebonus_content_row3 .accounts_proecn_step_content ul li .red_button{ font-size:13px; padding:8px 5px; width:132px; display:block; text-align:center; margin:10px auto 0px; border-radius:3px;}
        .welcomebonus_content_row3 .accounts_proecn_step_content ul li:nth-child(3) p{font-size:18px;}
        @media(max-width:768px){
            .refer_a_friend_row1{ padding:0px 0px 50px;}
        }
    </style>
    <div class="page_banner_content" style="background-image:url('../../assets/home/hybird_banner.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
        <div class="inner">
            <div class="tableBox">
                <div class="table_cellBox">
                    <div class="text_box">
                        <h2>Refer a friend</h2>
                        <h3>Refer and earn a $150 bonus for you, and $100 for your friend</h3>
                        <a href="register" class="red_arrow_button">open live account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page_content">
        <div class="inner">
            <div class="page_top_text">
                <h2><strong>Refer a friend today</strong> to earn a $150 bonus + $100 for your friend</h2>
                <p>Are you having a great time trading with https://traderscorp.io/index.php/app_name? Then why not refer your friends and earn a $150 bonus for you + $100 for your friend when your referrals open an account, fund it with a minimum $1000, and start trading live with us. </p>
                <p>The entire process is easy and straightforward. Just share the unique link we send you through Facebook, Twitter, email or even in a blog, and when your friend funds their account and starts trading, you will receive your cash bonus. It’s transparent and simple, so start earning your cash bonus today.</p>
                <div class="clear"></div>
            </div>
            <div class="pages_text_and_image_row text_and_image_position_right">
                <div class="text_and_image_inner">
                    <div class="text_box">
                        <h3>How does it work？</h3>
                        <p>To start earning your referral bonus, just get your friends to use your unique link to set up a live account, fund it, and then start trading.</p>
                        <p>As soon as your friends fund their account and start trading, you will receive your $150 bonus and your friend will receive $100, both of which can be withdrawn at any time.</p>
                        <div class="bottom_text">
                            <p>choose from</p>
                            <p><strong>300+</strong></p>
                            <p>Tradable assets</p>
                        </div>
                    </div>
                    <div class="img_box" style="background-image:url('../../assets/home/referafriend_content_img1.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
                        <img src="../../assets/home/referafriend_content_img1.jpg" alt="" />
                        <span>
               <strong>Trade with $0</strong><br />commission                                                <img src="../../assets/home/pages_text_and_image_on_text_r1.png" alt="" />
               </span>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="refer_a_friend_row1">
        <div class="inner">
            <h2 class="page_title_center"><strong>Share your 'Refer a Friend' link as</strong> many times as you like to earn generous bonuses!</h2>
        </div>
        <div class="refer_a_friend_row1_content">
            <div class="inner">
                <img src="../../assets/home/refer_a_friend_row1_img.png" />
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="accounts_proecn_step_wrapper welcomebonus_content_row3">
        <div class="inner">
            <div class="accounts_proecn_step_content">
                <h2 class="page_title_center"><strong>How to get</strong> started</h2>
                <ul>
                    <li>
                        <div class="text_box">
                            <div class="text_box_inner">
                                <h3>Open a live account<span>1</span></h3>
                                <p>Open a live account if you haven't already got one.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="text_box blue_text_box">
                            <div class="text_box_inner">
                                <h3>Get your referral link<span>2</span></h3>
                                <p>Opt in to the https://traderscorp.io/index.php/app_name Refer a Friend promotion</p>
                                <a href="register" class="red_button">Get Started</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="text_box">
                            <div class="text_box_inner">
                                <h3>Start referring and earning<span>3</span></h3>
                                <p>Share you link over social media or email and earn cash!</p>
                            </div>
                        </div>
                    </li>
                </ul>
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
