@extends('pages.layout.app')
@section('content')

    <div class="withdraw">
        <div class="page_banner_content" style="background-image:url('https://www.vantagefx.com/wp-content/uploads/2019/09/withdraw_banner.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
            <div class="inner">
                <div class="tableBox">
                    <div class="table_cellBox">
                        <div class="text_box">
                            <h2>WIthdrawing Funds</h2>
                            <h3>Make a Withdrawal From your Traders Corp Trading Account</h3>
                            <a href="../auth/signup.html" class="red_arrow_button">open live account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page_content">
            <div class="inner">
                <div class="page_top_text">
                    <h2>HOW TO MAKE A <strong>Withdrawal</strong></h2>
                    <p>Clients can withdraw funds online by simply logging into the secure Traders Corp client portal and selecting the withdraw tab from the menu.</p>
                    <p><a href="../auth.html" class="blue_button">client portal login</a></p>
                    <p>Please note: It is the client&#8217;s responsibility to ensure there are sufficient funds available for the withdrawal request to be processed. Failing to maintain sufficient balance in the account may result in the rejection of the withdrawal request.</p>
                    <div class="clear"></div>
                </div>
                <div class="page_top_text">
                    <h2><strong>Notes to consider</strong> before making a withdrawal</h2>
                    <ul class="dotted_ul">
                        <li>Traders Corp does not charge any internal fees for deposits or withdrawals. However, please note payments to and from overseas banking institutions may attract intermediary transfer fees from either party which are independent of Traders Corp. Any such fees will be the responsibility of the client.</li>
                        <li>Due to AML / CTF laws, Traders Corp cannot deposit funds to third parties. All money withdrawn from your account must go to a bank account in the same name as your Traders Corp trading account.</li>
                        <li>All withdrawal requests are processed Monday to Friday 9am-7pm (AEST). Requests received after 7pm will be processed on the next business day. Please note that our bank cut off time is 4pm (AEST) and withdrawals processed after this time will not leave our bank account until the next business day. *Please note that we are currently experiencing delays due to excessive demand, and we apologise for any inconvenience.</li>
                        <li>All withdrawal requests are processed according to the funding source of origination. For example a deposit is made via Debit/Credit Card; then a subsequent withdrawal request is received. The amount of funds sent back to the relevant Debit/Credit Card, when a withdrawal request is received, may not exceed the original amount deposited from same. Any profits made in excess of the deposited amount will be transferred to the nominated bank account; which must be held in the same name as your trading account. </li>
                        <li>If you deposited funds through the Traders Corp App or reside in Canada, you may be unable to withdraw via credit card due to NAB gateway restrictions. Instead, your funds will be withdrawn to your designated bank account.</li>
                        <li>Debit/Credit Card withdrawal can only be used for the deposit amount made using a Debit/Credit Card.</li>
                        <li>Debit/Credit Card refunds can take between 3-5 business after successfully approved by Traders Corp to appear on your statement.</li>
                        <li>All initial withdrawal requests must be verified for safety and security by provision of a bank statement; which includes account holder information and bank details. We will not accept deposits or withdrawals made under a different name to the registered trading account.</li>
                        <li>International  Telegraphic Transfers attract a minimum bank processing fee of 20 units of your account base currency i.e. 20 AUD. Vantage will deduct this fee from the withdrawal amount prior to depositing to the to the nominated bank account. Please contact your bank regarding any fees they may charge you for the services they provide.</li>
                        <li>Clients acknowledge that Traders Corp does not guarantee a recall of a financial transaction under any circumstances and that Traders Corp is not liable for any losses suffered as a result of providing incorrect instructions or bank details.</li>
                        <li>Clients acknowledge that they may be required to provide information on the source(s) of the deposit(s) and/or the Clients’ wealth in general when processing a withdrawal request and agree to provide all information required Traders Corp. Traders Corp reserves the right to refuse to process a withdrawal request where a Client does not provide all required information, and/or where Traders Corp has reasonable concerns that doing so may result in breaches of the anti-money laundering and counter-terrorism financing laws and regulations (AML/CTF Laws).</li>
                        <li>Traders Corp reserves the rights to refuse to process a withdrawal request if it has reasonable grounds to believe that the trading account may turn into a negative balance after the withdrawal request is processed.</li>
                        <li>Traders Corp reserves the right to refuse a withdrawal request if the trading account is subject to a charge-back investigation.</li>
                        <li>Traders Corp cannot guarantee a recall of a financial transaction due to incorrect information provided by clients and any losses suffered as results will be the liability of the client.</li>
                    </ul>
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
            <a href="../auth/signup.html">open live account</a>
            <div class="clear"></div>
        </div>
    </div>


@endsection
