@extends('pages.layout.app')
@section('content')

    <div class="regulation_wrapper">
        <div class="page_banner_content" style="background-image:url('../../assets/home/regulation_banner.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
            <div class="inner">
                <div class="tableBox">
                    <div class="table_cellBox">
                        <div class="text_box">
                            <h2>Whales Corp</h2>
                            <h3>Regulated Trading System</h3>
                            <a href="register" class="red_arrow_button">OPEN LIVE ACCOUNT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page_content">
            <div class="inner">
                <div class="page_top_text">
                    <h2><strong>THE Whales Corp</strong> DIFFERENCE</h2>
                    <p>Since 2009, we have been committed to not only delivering an exceptional trading environment for our clients but also adhering to, and surpassing the expectations held by global financial regulators.</p>
                    <p>With our renowned reputation for transparency, we have amassed in excess of 50,000 actively trading clients from around the world, who depend on us for the safety and security of their funds on a daily basis. All our clients’ funds are held in a segregated custodial account held with National Australia Bank, and we undertake regular audits and hold indemnity insurance to offer clients the peace of mind that they are trading with a global leader that holds a reputation for superior service, security and transparency.</p>
                    <div class="clear"></div>
                </div>
                <h2 class="page_title_center"><strong>CORPORATE</strong> GOVERNANCE</h2>
                <div class="corporate_box">
                    <!-- <div class="corporate_list">
                       <img src="https://traderscorp.io/assets/home/regulation_img1.png" alt="" />

                       <div class="title_box">
                          <p class="title"><strong>Bank</strong></p>
                       </div>
                       <div class="text_box">
                          <p>Clients&#8217; funds are held in a segregated account with Australia&#8217;s AA rated National Australia Bank (NAB). NAB are one of the 4 largest financial institutions in Australia with a market capitalisation of $93 billion and over 12 million customers, they constantly rank in the top 20 list of safest banks in the world.</p>
                       </div>
                    </div> -->
                    <div class="corporate_list">
                        <!--full 限制图片大小-->
                        <img src="../../assets/home/regulation_icon_img4.png" alt="" />    <!-- 图片字段的调用 -->
                        <div class="title_box">
                            <p class="title"><strong>Regulated</strong></p>
                        </div>
                        <div class="text_box">
                            <p>Whales Corp fully complies with the strict financial regulations set out by the jurisdictions in which we are regulated. Whales Corp strives to provide transparent and fair access to global Forex markets.</p>
                        </div>
                    </div>
                    <div class="corporate_list">
                        <!--full 限制图片大小-->
                        <img src="../../assets/home/regulation_img3.png" alt="" />    <!-- 图片字段的调用 -->
                        <div class="title_box">
                            <p class="title">Indemnity <strong>Insurance</strong></p>
                        </div>
                        <div class="text_box">
                            <p>Whales Corp has Professional Indemnity Insurance in place which covers the work done by our representatives, employees and other authorised representatives.</p>
                        </div>
                    </div>
                </div>
                <div class="page_top_text">
                    <h2><strong>LICENSING</strong></h2>
                    <p>Whales Corp is a trademark of T-C Limited.</p>
                    <p>Regulators require licensed financial services providers to meet strict capital requirements, as well as to follow and employ internal procedures including risk management, regular staff training, financial compliance and strict auditing procedures.</p>
                </div>
                <div class="page_top_text">
                    <h2><strong>LIQUIDITY</strong> PARTNERS</h2>
                    <img src="../../assets/home/regulation_logo_img.png" alt="">
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
