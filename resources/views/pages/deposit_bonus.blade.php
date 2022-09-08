@extends('pages.layout.app')
@section('content')

    <style>.welcomebonus_content{}
        .welcomebonus_content .row1{height:395px;position:relative;}
        .welcomebonus_content .row1 .img_box{text-align:center;max-width:856px;position:absolute;left:50%;margin-left:-428px;bottom:-72px;}
        .welcomebonus_content .row1 .img_box img{ display:block; width:856px; max-width:856px; height:auto;}
        .welcomebonus_content .row2{padding-top:83px;background:url("https://www.vantagefx.com/wp-content/themes/vfx_new/images/welcomebonus_content_row2_bg.jpg") no-repeat;background-size:cover;background-position:center 0;padding-bottom:65px;}
        .welcomebonus_content .row2 h2{font-size:38px;font-weight:bold;text-align:center;color:#f6ff00; padding:0px; margin:0px 0px 56px; line-height:1.2;}
        .welcomebonus_content .row2 .list_box{ width:495px; margin:0px auto; max-width:100%; padding:0px;}
        .welcomebonus_content .row2 .list_box .list_item{width:33%;display:inline-block;text-align:center;}
        .welcomebonus_content .row2 .list_box .list_item .img_box{min-height:96px;margin-bottom:20px;}
        .welcomebonus_content .row2 .list_box .list_item .text_box{font-size:20px;color:#fff;}
        .welcomebonus_content .list_box table{text-align:center; border:none; width:100%; border-collapse: collapse; width:100%; padding:0px; margin:0px auto;}
        .welcomebonus_content .list_box table tr th{ border:none; text-align:center; background:rgba(255,255,255,0.1); padding:18px 3px; font-size:25px; text-transform:uppercase; line-height: 1.2; color:#FFF; font-weight:bold;}
        .welcomebonus_content .list_box table tr td{ border:none; border-top:1px solid #4d7fff; padding:8px 3px; color:#f6ff00; font-size:28px; line-height: 1.2; background:none; font-weight:bold; width:50%;}

        .welcomebonus_content_row3{ padding-top:80px}
        .welcomebonus_content_row3 .accounts_proecn_step_content ul li:nth-child(1) h3{ padding-bottom:35px;}
        .welcomebonus_content_row3 .accounts_proecn_step_content ul li .text_box{ padding-bottom:20px;}
        .welcomebonus_content_row3 .accounts_proecn_step_content ul li p{ font-size:18px;}
        .welcomebonus_content_row3 .accounts_proecn_step_content ul li .red_button{ font-size:13px; padding:8px 5px; width:132px; display:block; text-align:center; margin:10px auto 0px; border-radius:3px;}
        .welcomebonus_content_row3 .accounts_proecn_step_content ul li:nth-child(3) p{font-size:18px;}

        @media (max-width:900px){
            .welcomebonus_content .row1{ height:300px;}
            .welcomebonus_content .row1 .img_box{ max-width:680px; margin-left:-340px; bottom:-58px;}
            .welcomebonus_content .row1 .img_box img{ width:680px; max-width:680px; height:auto;}
        }
        @media (max-width:768px){
            .welcomebonus_content .row1{ height:200px;}
            .welcomebonus_content .row1 .img_box{ max-width:500px; margin-left:-250px; bottom:-42px;}
            .welcomebonus_content .row1 .img_box img{ width:500px; max-width:500px; height:auto;}
            .welcomebonus_content .row2{ padding-top:50px; padding-bottom:40px;}
            .welcomebonus_content .row2 h2{ font-size:30px; margin-bottom:25px;}
            .welcomebonus_content .list_box table tr th{ font-size:20px;}
            .welcomebonus_content .list_box table tr td{ font-size:20px;}
            .welcomebonus_content_row3{ padding-top:50px;}
        }
        @media (max-width:420px){
            .welcomebonus_content .row2 .list_box{ width:100%; overflow-x:auto;}
            .welcomebonus_content .list_box table{ width:370px;}
            .welcomebonus_content .row2 h2{ font-size:24px;}
            .welcomebonus_content .list_box table tr th{ font-size:18px;}
            .welcomebonus_content .list_box table tr td{ font-size:18px;}
        }
    </style>
    <div class="page_banner_content" style="background-image:url('../../assets/home/Promotion_welcomeBonus_image.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
        <div class="inner">
            <div class="tableBox">
                <div class="table_cellBox">
                    <div class="text_box">
                        <h2>WELCOME BONUS</h2>
                        <h3>Claim Your Welcome Bonus on<br />your First Deposit
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
                <h2><strong>CLAIM UP TO 50%</strong> WELCOME BONUS!</h2>
                <p>Want 50% more trading power? Then opt-in to the Whale Corp 50% bonus. Tailored exclusively for Whale Corp accounts, all have to do is make a deposit of up to $500, and we will give you an extra 50% bonus equity to trade with. Plus, for every standard lot that you trade, we will convert 2 units of your bonus into real cash that you can withdraw at any time!</p>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <!--#content-->
    <div class="welcomebonus_content">
        <div class="row1">
            <div class="inner">
                <div class="img_box">
                    <img src="../../assets/home/welcomebonus_img13860.png?v=1"/>
                </div>
            </div>
        </div>
        <div class="row2">
            <div class="inner">
                <h2>Open a Live Account and Claim <br />your Welcome Bonus Today!</h2>
                <div class="list_box">
                    <table>
                        <tr>
                            <th scope="col">Your Deposit</th>
                            <th scope="col">Bonus Applied</th>
                        </tr>
                        <tr>
                            <td>$5000</td>
                            <td>$500</td>
                        </tr>
                        <tr>
                            <td>$10,000</td>
                            <td>$1,200</td>
                        </tr>
                        <tr>
                            <td>1 BTC</td>
                            <td>0.2 BTC</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="accounts_proecn_step_wrapper welcomebonus_content_row3">
        <div class="inner">
            <div class="accounts_proecn_step_content">
                <h2 class="page_title_center"><strong>How to claim your</strong> Welcome Bonus？</h2>
                <ul>
                    <li>
                        <div class="text_box">
                            <div class="text_box_inner">
                                <h3>Open and Fund your Account<span>1</span></h3>
                                <p>Open an account and make a deposit</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="text_box blue_text_box">
                            <div class="text_box_inner">
                                <h3>Claim your Bonus<span>2</span></h3>
                                <p>Opt in to the Whale Corp Welcome Bonus Promotion</p>
                                <a href="register" class="red_button">Get Started</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="text_box">
                            <div class="text_box_inner">
                                <h3>Start<br />Trading<span>3</span></h3>
                                <p>Trade using your bonus to convert it in to real cash</p>
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
