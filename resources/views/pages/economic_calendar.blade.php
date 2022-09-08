@extends('pages.layout.app')
@section('content')

    <div class="economic_calendar_wrapper">
        <div class="page_banner_content" style="background-image:url('../../assets/home/economic_calendar_banner.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
            <div class="inner">
                <div class="tableBox">
                    <div class="table_cellBox">
                        <div class="text_box">
                            <h2>FOREX ECONOMIC CALENDAR</h2>
                            <h3>Track Market Moving Events on our<br>Economic Calendar</h3>
                            <a href="register" class="red_arrow_button">OPEN LIVE ACCOUNT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page_content">
            <div class="inner">
                <div class="page_top_text">
                    <h2><strong>FOREX ECONOMIC</strong> CALENDAR</h2>
                    <p><strong>What is an Economic Calendar？</strong></p>
                    <p>A Forex Economic Calendar is a useful tool for Forex traders to track important, potentially market-moving events.</p>
                    <p>Many Forex traders use the economic calendar as a release schedule to assist them in anticipating when major movements will happen in the market.</p>
                    <div class="clear"></div>
                </div>
                <div class="calendar_box">
                    <script id="economicCalendarWidget" type="text/javascript" src="https://c.mql5.com/js/widgets/calendar/widget.v1.js"></script>
                    <script type="text/javascript">
                        new economicCalendar({ width: "100%", height: "600", mode: 2 });
                    </script>
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
