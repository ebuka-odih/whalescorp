@extends('pages.layout.app')
@section('content')

    <style>
        .dispute_handling_v2_content{ padding:78px 0px 78px;}
        .dispute_handling_v2_content h1{font-size: 35px; padding:0px; margin:0px 0px 30px;line-height:1.5;color: #141414;}
        .dispute_handling_v2_content h1 img{ display:block;}
        .dispute_handling_v2_content p{ font-size:16px; line-height:1.5; color:#282828; padding:0px; margin:0px 0px 22px;}
        .dispute_handling_v2_content p a{ color:#c91820;}
        .dispute_handling_v2_content p a:hover{ color:#c91820;}
        .dispute_handling_v2_content ol{padding:0px 0px 26px 36px; margin:0px; list-style:none;}
        .dispute_handling_v2_content ol li{ list-style:none; color: #282828;line-height: 1.5; padding:0px; margin:0px;font-size: 16px;}
        .dispute_handling_v2_content ol li span{ display:inline-block; width:36px;}
        .dispute_handling_v2_content .img_box{ padding:52px 0px;}
        .dispute_handling_v2_content .img_box img{ display:block;}
        @media (max-width: 1000px) {
            .banner{ height:230px !important;}
        }
        @media (max-width: 768px) {
            .banner{ height:200px !important;}
            .dispute_handling_v2_content{ padding:50px 0px 50px;}
            .dispute_handling_v2_content h1{ font-size:30px;}
            .dispute_handling_v2_content ol{ padding-left:0px;}
            .dispute_handling_v2_content ol li span{ width:25px;}
        }
        @media (max-width: 365px) {
            .banner{ height:220px !important;}
        }
    </style>
    <div id="content">
        <div class="inner">
            <div class="dispute_handling_v2_content">
                <h1>Dispute Resolution</h1>
                <p>Whale Corp is committed to providing excellent service to our clients. We view our client’s comments, suggestions and concerns of the utmost importance.</p>
                <p>In the unlikely event that you are dissatisfied with the service provided by Whale Corp, please contact our Customer Support as soon as possible at   or via email at <a href="mailto:info@whalescorp.co"><span class="__cf_email__" data-cfemail="196a6c6969766b6d596f78776d787e7c7f61377a7674">[info@whalescorp.co]</span></a>.</p>
                <p>If you have a trading dispute, you can contact us. In an effort to promptly resolve trade inquiries, all trading disputes must be logged as quickly as possible after the trading issue has occurred.</p>
                <p>Once the trade has been thoroughly reviewed, you will be contacted with a full explanation of what occurred on the trade(s) that were reported for investigation.</p>
                <p>To help us investigate and resolve your complaint as quickly as possible and with minimum inconvenience to you, please make sure you give us as much information as possible, including:</p>
                <ol>
                    <li><span>1</span>Your name, date of birth and address</li>
                    <li><span>2</span>Your trading account number and order number(s)</li>
                    <li><span>3</span>A clear description of your complaint</li>
                    <li><span>4</span>Details of what you would like us to do to put it right</li>
                    <li><span>5</span>Copies of any relevant documents, such as letters, screenshot, trading statements, etc.</li>
                    <li><span>6</span>A daytime telephone number where we can contact you</li>
                </ol>
            </div>
            <div class="clear"></div>
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
