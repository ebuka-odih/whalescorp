@extends('pages.layout.app')
@section('content')

    <div class="deposit">
        <div class="page_banner_content" style="background-image:url('https://www.vantagefx.com/wp-content/uploads/2019/09/deposit_banner.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
            <div class="inner">
                <div class="tableBox">
                    <div class="table_cellBox">
                        <div class="text_box">
                            <h2>Deposit Funds</h2>
                            <h3>Deposit Funds into Your Whales Corp<br>
                                Trading Account
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
                    <h2><strong>Deposit Funds to your</strong> Trading Account</h2>
                    <p><strong>Flexible funding options to get you trading faster</strong></p>
                    <p>Whales Corp enables clients to open accounts and deposit funds in the following base currencies:<br />
                        AUD &#8211; Dollars, USD &#8211; United States Dollar, EUR &#8211; Euro, GBP &#8211; British Pound Sterling, NZD &#8211; New Zealand Dollar, SGD &#8211; Singapore Dollar, JPY &#8211; Japanese Yen, CAD &#8211; Canadian Dollar
                    </p>
                    <div class="clear"></div>
                </div>
                <div class="deposit_content_list">
                    <div class="deposit_content_table">
                        <table cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <th class="th_width_1" scope="col">Method</th>
                                <th scope="col">Processing Time</th>
                                <th scope="col">Fees</th>
                                <th scope="col">Available Currencies</th>
                                <th class="th_width_5" scope="col">Fund Now</th>
                            </tr>
                            <tr>
                                <td class="td_1"><span class="img_box"><img width="45px" height="45px" src="../../assets/home/btc3.png" alt="" /></span><span>Bitcoin</span></td>
                                <td>1 - 30 Minutes</td>
                                <td>$0</td>
                                <td>Crypto</td>
                                <td><a class="deposit_now_link" href="../auth.html">deposit now</a></td>
                            </tr>
                            <tr>
                                <td class="td_1"><span class="img_box"><img src="../../assets/home/deposit_content_table_icon1.png" alt="" /></span><span>Domestic Fast Transfer (Australia Only)</span></td>
                                <td>Up to a few hours, during AEST Business hours</td>
                                <td>$0</td>
                                <td>AUD</td>
                                <td><a class="deposit_now_link" href="../auth.html">deposit now</a></td>
                            </tr>
                            <tr>
                                <td class="td_1"><span class="img_box"><img src="../../assets/home/deposit_content_table_icon2.png" alt="" /></span><span>International EFT</span></td>
                                <td>2-5 business days</td>
                                <td>$0*</td>
                                <td>AUD, USD, GBP, EUR,SGD, JPY, NZD, CAD</td>
                                <td><a class="deposit_now_link" href="../auth.html">deposit now</a></td>
                            </tr>
                            <tr>
                                <td class="td_1"><span class="img_box"><img src="../../assets/home/deposit_content_table_icon3.png" alt="" /></span><span>BPAY<br />(Australia Only)</span></td>
                                <td>1-2 business days</td>
                                <td>$0</td>
                                <td>AUD</td>
                                <td><a class="deposit_now_link" href="../auth.html">deposit now</a></td>
                            </tr>
                            <tr>
                                <td class="td_1"><span class="img_box"><img src="../../assets/home/deposit_content_table_icon4.png" alt="" /></span><span>POLi Payments<br />(Australia Only)</span></td>
                                <td>Within 24 business hours</td>
                                <td>$0</td>
                                <td>AUD</td>
                                <td><a class="deposit_now_link" href="../auth.html">deposit now</a></td>
                            </tr>
                            <tr>
                                <td class="td_1"><span class="img_box"><img src="../../assets/home/deposit_content_table_icon5.png" alt="" /></span><span>Credit/Debit Card<br />(Visa and MasterCard)</span></td>
                                <td>Instant ¹</td>
                                <td>$0*</td>
                                <td>AUD, USD, GBP, EUR,SGD, JPY, NZD, CAD</td>
                                <td><a class="deposit_now_link" href="../auth.html">deposit now</a></td>
                            </tr>
                            <tr>
                                <td class="td_1"><span class="img_box"><img src="../../assets/home/deposit_content_table_icon20.png" alt="" /></span><span>JCB</span></td>
                                <td>Instant ¹</td>
                                <td>$0*</td>
                                <td>JPY</td>
                                <td><a class="deposit_now_link" href="../auth.html">deposit now</a></td>
                            </tr>
                            <tr>
                                <td class="td_1"><span class="img_box"><img src="../../assets/home/deposit_content_table_icon6.png" alt="" /></span><span>China Union Pay</span></td>
                                <td>Instant ²</td>
                                <td>1.30% - 2.50%</td>
                                <td>USD</td>
                                <td><a class="deposit_now_link" href="../auth.html">deposit now</a></td>
                            </tr>
                            <tr>
                                <td class="td_1"><span class="img_box"><img src="../../assets/home/deposit_content_table_icon7.png" alt="" /></span><span>Neteller</span></td>
                                <td>Instant</td>
                                <td>Subject to Neteller's fees</td>
                                <td>AUD, USD, GBP, EUR,SGD</td>
                                <td><a class="deposit_now_link" href="../auth.html">deposit now</a></td>
                            </tr>
                            <tr>
                                <td class="td_1"><span class="img_box"><img src="../../assets/home/deposit_content_table_icon8.png" alt="" /></span><span>Skrill<br />(Moneybookers)</span></td>
                                <td>Within 24 business hours.</td>
                                <td>Subject to <br />Skrill's fees *</td>
                                <td>USD, EUR, GBP, CAD</td>
                                <td><a class="deposit_now_link" href="../auth.html">deposit now</a></td>
                            </tr>
                            <tr>
                                <td class="td_1"><span class="img_box"><img src="../../assets/home/deposit_content_table_icon9.png" alt="" /></span><span>Broker-to-Broker<br />Transfer</span></td>
                                <td>2-5 business days</td>
                                <td>Subject to bank transfer fees</td>
                                <td>AUD, USD, GBP, EUR,SGD, JPY, NZD, CAD</td>
                                <td><a class="deposit_now_link" href="../auth.html">deposit now</a></td>
                            </tr>
                            <tr>
                                <td class="td_1"><span class="img_box"><img src="../../assets/home/deposit_content_table_icon10.png" alt="" /></span><span>FasaPay</span></td>
                                <td>Instant</td>
                                <td>$0</td>
                                <td>USD</td>
                                <td><a class="deposit_now_link" href="../auth.html">deposit now</a></td>
                            </tr>
                            <tr>
                                <td class="td_1"><span class="img_box"><img src="../../assets/home/deposit_content_table_icon1.png" alt="" /></span><span>Thailand Instant Bank<br />Wire Transfer</span></td>
                                <td>Instant</td>
                                <td>$0</td>
                                <td>USD</td>
                                <td><a class="deposit_now_link" href="../auth.html">deposit now</a></td>
                            </tr>
                        </table>
                    </div>
                    <ul>
                        <li>* International bank wire transfers may incur fees charged by your financial institution as well as handling fees charged by our financial institution (NAB). Please check with your bank for more information.</li>
                        <li>¹ and ² Subject to risk management and daily limit measures.</li>
                        <li>^ and ^^ Whales Corp may as a gesture of goodwill or as part of a promotion, cover fees charged by the merchant services provider by reimbursing them to your trading account. Contact your account manager for details.</li>
                        <li>³ A country surcharge may be applied depending on your local jurisdiction. Please contact Skrill for more details.</li>
                    </ul>
                </div>
                <div class="page_top_text">
                    <h2><strong>IMPORTANT INFORMATION</strong> & FEES</h2>
                    <ul class="dotted_ul">
                        <li>Please note, Skrill/NETELLER is no longer available for clients residing in the following countries:</br>
                            Åland Islands, Guinea, Saint Pierre and Miquelon, Anguilla, Kiribati, Saint Vincent and the Grenadines, Bhutan, Liberia, Solomon Islands, Burundi, Mali, South Georgia and the South Sandwich Islands, Cook Islands, Marshall Islands, St. Kitts and Nevis, Equatorial Guinea, Mauritania, Svalbard and Jan Mayen, Fiji, Montserrat, Timor-Leste, French Guyana, Niue, Vanuatu, Gabon, Papua New Guinea.</br></br>
                        </li>
                        <li>Whales Corp strictly does not accept third-party payments. All funds deposited into your trading account must be under the same name as your Whales Corp trading account. Payment from joint bank accounts or credit cards are accepted if the trading account holder is one of the beneficiaries.</li>
                        <li>We can only cover fees that we see. Other fees charged by your bank, intermediary bank and/or our financial institution (NAB) remain your responsibility.</li>
                        <li>In the unforseen circumstance where funds are not instantly uploaded to MetaTrader 4, it still remains the responsibility of the client to ensure that they have placed the required funds in their account for trading via other payment methods.</li>
                        <li>There is a restriction on first time funding of an account by card at $1,000 AUD or equivalent. If your initial deposit to your account by card is more than $1,000 AUD or equivalent, your initial deposit will be refunded back to your credit card.</li>
                        <li>There is a restricted maximum deposit of $10,000 AUD or equivalent per transaction, per card, per account a day.</li>
                        <li>If your account was funded by credit card and a withdrawal is requested within 12 weeks, this withdrawal will be refunded back to the original credit card. The method by which we return client funds is at the sole discretion of Whales Corp.</li>
                        <li>In the circumstance of a chargeback as the client you are responsible to cover any reversed payments and/or chargeback fees. If there are insufficient funds in the trading account to cover, you agree to make deposit to your trading account to cover via bank wire transfer.</li>
                        <li>Payment options available to you may vary depending on your account base currency and your jurisdiction. Available payment options can be viewed in your client portal.</li>
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
            <a href="register">open live account</a>
            <div class="clear"></div>
        </div>
    </div>

@endsection
