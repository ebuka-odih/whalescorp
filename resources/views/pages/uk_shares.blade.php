@extends('pages.layout.app')
@section('content')

    <style>
        .shares_content .tab_title{ padding:0px 0px 38px; margin:0px -8px; text-align:center;}
        .shares_content .tab_title:after{ content:""; display:block; width:100%; clear:both;}
        .shares_content .tab_title li{ padding:0px 6px 12px; margin:0px; display:inline-block; vertical-align:top;}
        .shares_content .tab_title li span{ display:block; text-transform:uppercase; background:#fff;color:#1a2989; border:1px solid #dae4f1; border-radius:5px; cursor:pointer; font-size:17px; padding:17px 16px;}
        .shares_content .tab_title li.active span{ background:#e9eff7;}
        .shares_content .tab_list .tab_item{ display:none;}
        .shares_content .tab_list .tab_item.active{ display:block;}
    </style>
    <div class="euro-share-cfds">
        <div class="page_banner_content" style="background-image:url('../../assets/home/bg_euro.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
            <div class="inner">
                <div class="tableBox">
                    <div class="table_cellBox">
                        <div class="text_box">
                            <h2>UK &amp; EU SHARE CFDs</h2>
                            <h3>Trade UK and EU Giants on MT5</h3>
                            <a href="register" class="red_arrow_button">open live account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page_content">
            <div class="inner">
                <div class="page_top_text">
                    <h2><strong>Trade UK and European</strong> listed Blue Chips</h2>
                    <p>Vantage FX clients can now trade over 50 UK and European listed companies through our new range of Share CFDs, from just €10 per trade.</p>
                    <p>By offering our UK and European Share CFDs via MT5, both manual and automatic traders alike are able to capitalize on the price movement of some of the most liquid UK and European companies, whether you are a day trader or longer-term trader. And, all UK and European Share CFDs are available at up to 20:1 leverage, which means you can get started with just a small initial margin.</p>
                    <div class="clear"></div>
                </div>
                <div class="pages_text_and_image_row text_and_image_position_right">
                    <div class="text_and_image_inner">
                        <div class="text_box">
                            <h3>Buy and Sell 70+ UK and European Listed Companies.</h3>
                            <p>Start trading some of the biggest listed companies from the UK and Europe with our new Share CFDs.</p>
                            <p>All Vantage FX Share CFDs are offered at 20:1 leverage and are tradable in both long and short directions, which is ideal for scalpers, swing traders, and long-term traders alike.</p>
                            <div class="bottom_text">
                                <p>trade with</p>
                                <p><strong>20:1</strong></p>
                                <p>Leverage</p>
                            </div>
                        </div>
                        <div class="img_box" style="background-image:url('../../assets/home/img_euro1.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
                            <img src="../../assets/home/img_euro1.jpg" alt="" />
                            <span>
                  <strong>Trade long</strong><br>&amp; short                                                <img src="../../assets/home/pages_text_and_image_on_text_r1.png" alt="" />
                  </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="pages_text_and_image_row text_and_image_position_left">
                    <div class="text_and_image_inner">
                        <div class="text_box">
                            <h3>Start trading share CFDs with low commissions</h3>
                            <p>When you start trading UK and European Share CFDs with Vantage FX, you can enjoy some of the lowest trading costs in the industry.</p>
                            <p>With commissions as low as €10 per trade, traders can save on the cost of trading while enjoying unrivalled access to a huge range of Share CFDs through their MetaTrader 5 platform.</p>
                            <div class="bottom_text">
                                <p>From just</p>
                                <p><strong>€10</strong></p>
                                <p>per trade</p>
                            </div>
                        </div>
                        <div class="img_box" style="background-image:url('../../assets/home/img_euro2.jpg'); background-position:center top; background-repeat:no-repeat; background-size:cover;">
                            <img src="../../assets/home/img_euro2.jpg" alt="" />
                            <span>
                  <strong>70+ UK &amp; EURO </strong><br>Share CFDs
                  <img src="../../assets/home/pages_text_and_image_on_text_l2.png" alt="" />
                  </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="inner">
            </div>
        </div>
        <div class="shares_content">
            <div class="inner">
                <h2 class="page_title_center"><strong>UK and European</strong> SHARE CFDS SPECIFICATIONS</h2>
                <ul class="tab_title">
                    <li class="active"><span>EUropean SHARE CFDs</span></li>
                    <li><span>UK SHARE CFDs</span></li>
                </ul>
                <div class="tab_list">
                    <div class="tab_item active">
                        <div class="forex_tabel">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tbody>
                                <tr>
                                    <th>Contract</th>
                                    <th>Symbol</th>
                                    <th>Description</th>
                                    <th>Exchange</th>
                                    <th>Quote sample</th>
                                    <th>Digits</th>
                                    <th>Stop/<br />Level</th>
                                    <th>Contract<br />Size</th>
                                    <th>Currency</th>
                                    <th>Min<br />volume per<br />click</th>
                                    <th>Max<br />volume per<br />click</th>
                                    <th>Leverage</th>
                                    <th>Trading hours<br />(CEST/CET)</th>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share1.png"></td>
                                    <td><strong>BCP</strong></td>
                                    <td>Banco<br />Comercial</td>
                                    <td>Euronext<br />Lisbon</td>
                                    <td>0.1943 → 0.1944</td>
                                    <td>4</td>
                                    <td>0</td>
                                    <td>1000</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share3.png"></td>
                                    <td><strong>SON</strong></td>
                                    <td>Sonae</td>
                                    <td>Euronext<br />Lisbon</td>
                                    <td>0.9050 → 0.9051</td>
                                    <td>4</td>
                                    <td>0</td>
                                    <td>1000</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share5.png"></td>
                                    <td><strong>EDP</strong></td>
                                    <td>EDP</td>
                                    <td>Euronext<br />Lisbon</td>
                                    <td>3.521 → 3.522</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>100</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share6.png"></td>
                                    <td><strong>GALP</strong></td>
                                    <td>Galp Energia</td>
                                    <td>Euronext<br />Lisbon</td>
                                    <td>13.531 → 13.532</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share8.png"></td>
                                    <td><strong>MT</strong></td>
                                    <td>ArceloMittal SA</td>
                                    <td>Euronext<br />Amsterdam</td>
                                    <td>13.194 → 13.195</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share9.png"></td>
                                    <td><strong>AI</strong></td>
                                    <td>Air Liquide</td>
                                    <td>Euronext Paris</td>
                                    <td>117.51 → 117.52</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share10.png"></td>
                                    <td><strong>AIR</strong></td>
                                    <td>Airbus Group</td>
                                    <td>Euronext Paris</td>
                                    <td>120.41 → 120.42</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share11.png"></td>
                                    <td><strong>CS</strong></td>
                                    <td>AXA</td>
                                    <td>Euronext Paris</td>
                                    <td>23.931 → 23.932</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share12.png"></td>
                                    <td><strong>BNP</strong></td>
                                    <td>BNP Paribas</td>
                                    <td>Euronext Paris</td>
                                    <td>46.99 → 47.00</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share13.png"></td>
                                    <td><strong>ACA</strong></td>
                                    <td>Credit Agricole</td>
                                    <td>Euronext Paris</td>
                                    <td>11.545 → 11.546</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share14.png"></td>
                                    <td><strong>RNO</strong></td>
                                    <td>Renault</td>
                                    <td>Euronext Paris</td>
                                    <td>48.560 → 48.561</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share15.png"></td>
                                    <td><strong>GLE</strong></td>
                                    <td>Societe<br />Generale</td>
                                    <td>Euronext Paris</td>
                                    <td>26.031 → 26.032</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share16.png"></td>
                                    <td><strong>FP</strong></td>
                                    <td>Total</td>
                                    <td>Euronext Paris</td>
                                    <td>46.335 → 46.336</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share17.png"></td>
                                    <td><strong>VIE</strong></td>
                                    <td>Veolia Environ</td>
                                    <td>Euronext Paris</td>
                                    <td>23.08 → 23.09</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share18.png"></td>
                                    <td><strong>OR</strong></td>
                                    <td>L'oreal</td>
                                    <td>Euronext Paris</td>
                                    <td>240.71 → 240.72</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share19.png"></td>
                                    <td><strong>SANOFI</strong></td>
                                    <td>Sanofi</td>
                                    <td>Euronext Paris</td>
                                    <td>82.81 → 82.82</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share20.png"></td>
                                    <td><strong>LVMH</strong></td>
                                    <td>LVMH</td>
                                    <td>Euronext Paris</td>
                                    <td>374.51 → 374.52</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share21.png"></td>
                                    <td><strong>ABN</strong></td>
                                    <td>ABN AMRO<br />Group N.V.</td>
                                    <td>Euronext<br />Amsterdam</td>
                                    <td>16.561 → 16.562</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share22.png"></td>
                                    <td><strong>AGN</strong></td>
                                    <td>AEGON N.V.</td>
                                    <td>Euronext<br />Amsterdam</td>
                                    <td>3.894 → 3.895</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>100</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share23.png"></td>
                                    <td><strong>ASML</strong></td>
                                    <td>ASML N.V.</td>
                                    <td>Euronext<br />Amsterdam</td>
                                    <td>228.35 → 228.36</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share24.png"></td>
                                    <td><strong>HEIA</strong></td>
                                    <td>Heineken N.V.</td>
                                    <td>Euronext<br />Amsterdam</td>
                                    <td>97.66 → 97.67</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share25.png"></td>
                                    <td><strong>INGA</strong></td>
                                    <td>ING Groep N.V.</td>
                                    <td>Euronext<br />Amsterdam</td>
                                    <td>10.162 → 10.163</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>100</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share26.png"></td>
                                    <td><strong>PHIA</strong></td>
                                    <td>Koninklijke<br />Philips N.V.</td>
                                    <td>Euronext<br />Amsterdam</td>
                                    <td>39.073 → 39.074</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share27.png"></td>
                                    <td><strong>UNA</strong></td>
                                    <td>Unilever N.V.</td>
                                    <td>Euronext<br />Amsterdam</td>
                                    <td>54.070 → 54.071</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share28.png"></td>
                                    <td><strong>CBK</strong></td>
                                    <td>Commerzbank AG</td>
                                    <td>XETRA</td>
                                    <td>5.303 → 5.304</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>100</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share29.png"></td>
                                    <td><strong>CON</strong></td>
                                    <td>Continental AG</td>
                                    <td>XETRA</td>
                                    <td>117.56 → 117.57</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share30.png"></td>
                                    <td><strong>DBK</strong></td>
                                    <td>Deutsche<br />bank AG</td>
                                    <td>XETRA</td>
                                    <td>7.092 → 7.093</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share31.png"></td>
                                    <td><strong>EOAN</strong></td>
                                    <td>E.ON</td>
                                    <td>XETRA</td>
                                    <td>8.792 → 8.793</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share32.png"></td>
                                    <td><strong>SAP</strong></td>
                                    <td>SAP</td>
                                    <td>XETRA</td>
                                    <td>115.82 → 115.83</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share33.png"></td>
                                    <td><strong>ALV</strong></td>
                                    <td>Allianz</td>
                                    <td>XETRA</td>
                                    <td>218.11 → 218.12</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share34.png"></td>
                                    <td><strong>SIE</strong></td>
                                    <td>Siemens AG</td>
                                    <td>XETRA</td>
                                    <td>99.77 → 99.78</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share35.png"></td>
                                    <td><strong>IFX</strong></td>
                                    <td>Infineon<br />Tech AG</td>
                                    <td>XETRA</td>
                                    <td>16.292 → 16.293</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share36.png"></td>
                                    <td><strong>BAYN</strong></td>
                                    <td>Bayer AG</td>
                                    <td>XETRA</td>
                                    <td>64.99 → 65.00</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share37.png"></td>
                                    <td><strong>BAS</strong></td>
                                    <td>Basf SE</td>
                                    <td>XETRA</td>
                                    <td>66.21 → 66.22</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share48.png"></td>
                                    <td><strong>SANTANDER</strong></td>
                                    <td>Banco<br />Santander</td>
                                    <td>BME Spanish<br />Exchanges</td>
                                    <td>3.8705 → 3.8706</td>
                                    <td>4</td>
                                    <td>0</td>
                                    <td>100</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share49.png"></td>
                                    <td><strong>SAB</strong></td>
                                    <td>Banco de<br />Sabadell</td>
                                    <td>BME Spanish<br />Exchanges</td>
                                    <td>1.0222 → 1.0223</td>
                                    <td>4</td>
                                    <td>0</td>
                                    <td>1000</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share50.png"></td>
                                    <td><strong>BBVA</strong></td>
                                    <td>Banco Bilbao<br />Vizcaya</td>
                                    <td>BME Spanish<br />Exchanges</td>
                                    <td>4.7785 → 4.7786</td>
                                    <td>4</td>
                                    <td>0</td>
                                    <td>100</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share51.png"></td>
                                    <td><strong>BKIA</strong></td>
                                    <td>Bankia</td>
                                    <td>BME Spanish<br />Exchanges</td>
                                    <td>1.8080 → 1.8081</td>
                                    <td>4</td>
                                    <td>0</td>
                                    <td>100</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share52.png"></td>
                                    <td><strong>CABK</strong></td>
                                    <td>Caixabank</td>
                                    <td>BME Spanish<br />Exchanges</td>
                                    <td>2.564 → 2.565</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>100</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share53.png"></td>
                                    <td><strong>IBE</strong></td>
                                    <td>Iberdrola</td>
                                    <td>BME Spanish<br />Exchanges</td>
                                    <td>9.114 → 9.115</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>100</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share54.png"></td>
                                    <td><strong>REP</strong></td>
                                    <td>Repsol</td>
                                    <td>BME Spanish<br />Exchanges</td>
                                    <td>14.545 → 14.546</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share55.png"></td>
                                    <td><strong>TEF</strong></td>
                                    <td>Telefonica</td>
                                    <td>BME Spanish<br />Exchanges</td>
                                    <td>7.031 → 7.032</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>100</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share56.png"></td>
                                    <td><strong>MAP</strong></td>
                                    <td>Mapfre</td>
                                    <td>BME Spanish<br />Exchanges</td>
                                    <td>2.548 → 2.549</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>100</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share57.png"></td>
                                    <td><strong>ELE</strong></td>
                                    <td>Endesa</td>
                                    <td>BME Spanish<br />Exchanges</td>
                                    <td>23.688 → 23.689</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_uk_share58.png"></td>
                                    <td><strong>ITX</strong></td>
                                    <td>Ind. de diseno<br />textil (Inditex)</td>
                                    <td>BME Spanish<br />Exchanges</td>
                                    <td>28.45 → 28.46</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>EUR</td>
                                    <td>1</td>
                                    <td>10000</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />09:00-17:30</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab_item">
                        <div class="forex_tabel">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tbody>
                                <tr>
                                    <th>Contract</th>
                                    <th>Symbol</th>
                                    <th>Description</th>
                                    <th>Exchange</th>
                                    <th>Quote sample</th>
                                    <th>Digits</th>
                                    <th>Stop/<br />Level</th>
                                    <th>Contract<br />Size</th>
                                    <th>Currency</th>
                                    <th>Min<br />volume per<br />click</th>
                                    <th>Max<br />volume per<br />click</th>
                                    <th>Leverage</th>
                                    <th>Trading hours<br />(UK Time)</th>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_euro_share1.png"></td>
                                    <td><strong>RDSB</strong></td>
                                    <td>ROYAL<br />DUTCH SHELL<br />PLC-B SHS</td>
                                    <td>GBLSE</td>
                                    <td>2487.50 → 2487.51</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>GBX</td>
                                    <td>1</td>
                                    <td>1500</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />08:00-16:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_euro_share2.png"></td>
                                    <td><strong>HSBA</strong></td>
                                    <td>HSBC<br />HOLDINGS<br />PLC</td>
                                    <td>GBLSE</td>
                                    <td>645.70 → 645.71</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>GBX</td>
                                    <td>1</td>
                                    <td>1500</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />08:00-16:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_euro_share3.png"></td>
                                    <td><strong>ULVR</strong></td>
                                    <td>UNILEVER<br />PLC</td>
                                    <td>GBLSE</td>
                                    <td>4857.50 → 4857.51</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>GBX</td>
                                    <td>1</td>
                                    <td>1500</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />08:00-16:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_euro_share4.png"></td>
                                    <td><strong>BATS</strong></td>
                                    <td>BRITISH<br />AMERICAN</td>
                                    <td>GBLSE</td>
                                    <td>2771.50 → 2771.51</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>GBX</td>
                                    <td>1</td>
                                    <td>1500</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />08:00-16:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_euro_share5.png"></td>
                                    <td><strong>BHP</strong></td>
                                    <td>BHP BILLITON<br />PLC</td>
                                    <td>GBLSE</td>
                                    <td>1801.00 → 1801.01</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>GBX</td>
                                    <td>1</td>
                                    <td>1500</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />08:00-16:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_euro_share6.png"></td>
                                    <td><strong>RIO</strong></td>
                                    <td>RIO TINTO<br />PLC</td>
                                    <td>GBLSE</td>
                                    <td>4594.00 → 4594.01</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>GBX</td>
                                    <td>1</td>
                                    <td>1500</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />08:00-16:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_euro_share7.png"></td>
                                    <td><strong>GSK</strong></td>
                                    <td>GLAXOSMITHKLINE<br />PLC</td>
                                    <td>GBLSE</td>
                                    <td>1549.20 → 1549.21</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>GBX</td>
                                    <td>1</td>
                                    <td>1500</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />08:00-16:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_euro_share8.png"></td>
                                    <td><strong>AZN</strong></td>
                                    <td>ASTRAZENECA<br />PLC</td>
                                    <td>GBLSE</td>
                                    <td>5939.00 → 5939.01</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>GBX</td>
                                    <td>1</td>
                                    <td>1500</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />08:00-16:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_euro_share9.png"></td>
                                    <td><strong>DIAGEO</strong></td>
                                    <td>DIAGEO<br />PLC</td>
                                    <td>GBLSE</td>
                                    <td>3366.50 → 3366.51</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>GBX</td>
                                    <td>1</td>
                                    <td>1500</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />08:00-16:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_euro_share10.png"></td>
                                    <td><strong>VOD</strong></td>
                                    <td>VODAFONE<br />GROUP PLC</td>
                                    <td>GBLSE</td>
                                    <td>129.56 → 129.57</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>100</td>
                                    <td>GBX</td>
                                    <td>1</td>
                                    <td>1500</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />08:00-16:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_euro_share11.png"></td>
                                    <td><strong>GLEN</strong></td>
                                    <td>GLENCORE<br />PLC</td>
                                    <td>GBLSE</td>
                                    <td>257.30 → 257.31</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>100</td>
                                    <td>GBX</td>
                                    <td>1</td>
                                    <td>1500</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />08:00-16:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_euro_share12.png"></td>
                                    <td><strong>LLOY</strong></td>
                                    <td>LLOYDS<br />BANKING<br />GROUP PLC</td>
                                    <td>GBLSE</td>
                                    <td>57.19 → 57.20</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>100</td>
                                    <td>GBX</td>
                                    <td>1</td>
                                    <td>1500</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />08:00-16:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_euro_share13.png"></td>
                                    <td><strong>PRU</strong></td>
                                    <td>PRUDENTIAL<br />PLC</td>
                                    <td>GBLSE</td>
                                    <td>1553.50 → 1553.51</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>GBX</td>
                                    <td>1</td>
                                    <td>1500</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />08:00-16:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_euro_share14.png"></td>
                                    <td><strong>RB</strong></td>
                                    <td>RECKITT<br />BENCKISER</td>
                                    <td>GBLSE</td>
                                    <td>1553.50 → 1553.51</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>GBX</td>
                                    <td>1</td>
                                    <td>1500</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />08:00-16:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_euro_share15.png"></td>
                                    <td><strong>CCL</strong></td>
                                    <td>CARNIVAL<br />PLC</td>
                                    <td>GBLSE</td>
                                    <td>3896.00 → 3896.01</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>GBX</td>
                                    <td>1</td>
                                    <td>1500</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />08:00-16:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_euro_share16.png"></td>
                                    <td><strong>RBS</strong></td>
                                    <td>ROYAL BANK<br />OF<br />SCOTLAND</td>
                                    <td>GBLSE</td>
                                    <td>212.70 → 212.71</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>100</td>
                                    <td>GBX</td>
                                    <td>1</td>
                                    <td>1500</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />08:00-16:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_euro_share17.png"></td>
                                    <td><strong>BARC</strong></td>
                                    <td>BARCLAYS<br />PLC</td>
                                    <td>GBLSE</td>
                                    <td>150.24 → 150.25</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>100</td>
                                    <td>GBX</td>
                                    <td>1</td>
                                    <td>1500</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />08:00-16:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_euro_share18.png"></td>
                                    <td><strong>RELX</strong></td>
                                    <td>RELX PLC</td>
                                    <td>GBLSE</td>
                                    <td>1854.00 → 1854.01</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>GBX</td>
                                    <td>1</td>
                                    <td>1500</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />08:00-16:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_euro_share19.png"></td>
                                    <td><strong>IMB</strong></td>
                                    <td>IMPERIAL<br />BRANDS PLC</td>
                                    <td>GBLSE</td>
                                    <td>1870.20 → 1870.21</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>GBX</td>
                                    <td>1</td>
                                    <td>1500</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />08:00-16:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_euro_share20.png"></td>
                                    <td><strong>STAN</strong></td>
                                    <td>STANDARD<br />CHARTERED<br />PLC</td>
                                    <td>GBLSE</td>
                                    <td>675.00 → 675.01</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>100</td>
                                    <td>GBX</td>
                                    <td>1</td>
                                    <td>1500</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />08:00-16:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_euro_share21.png"></td>
                                    <td><strong>BT.A</strong></td>
                                    <td>BT GROUP<br />PLC</td>
                                    <td>GBLSE</td>
                                    <td>194.58 → 194.59</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>100</td>
                                    <td>GBX</td>
                                    <td>1</td>
                                    <td>1500</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />08:00-16:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_euro_share22.png"></td>
                                    <td><strong>AAL</strong></td>
                                    <td>ANGLO<br />AMERICAN<br />PLC</td>
                                    <td>GBLSE</td>
                                    <td>1918.40 → 1918.41</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>GBX</td>
                                    <td>1</td>
                                    <td>1500</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />08:00-16:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_euro_share23.png"></td>
                                    <td><strong>CPG</strong></td>
                                    <td>COMPASS<br />GROUP PLC</td>
                                    <td>GBLSE</td>
                                    <td>1808.50 → 1808.51</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>GBX</td>
                                    <td>1</td>
                                    <td>1500</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />08:00-16:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_euro_share24.png"></td>
                                    <td><strong>ABF</strong></td>
                                    <td>ASSOCIATED<br />BRITISH<br />FOODS</td>
                                    <td>GBLSE</td>
                                    <td>2489.00 → 2489.01</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>GBX</td>
                                    <td>1</td>
                                    <td>1500</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />08:00-16:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_euro_share25.png"></td>
                                    <td><strong>AVIVA</strong></td>
                                    <td>AVIVA PLC</td>
                                    <td>GBLSE</td>
                                    <td>404.00 → 404.01</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>100</td>
                                    <td>GBX</td>
                                    <td>1</td>
                                    <td>1500</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />08:00-16:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_euro_share26.png"></td>
                                    <td><strong>BAE</strong></td>
                                    <td>BAE SYSTEMS<br />PLC</td>
                                    <td>GBLSE</td>
                                    <td>463.30 → 463.31</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>100</td>
                                    <td>GBX</td>
                                    <td>1</td>
                                    <td>1500</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />08:00-16:30</td>
                                </tr>
                                <tr>
                                    <td><img src="../../assets/home/icon_euro_share27.png"></td>
                                    <td><strong>TESCO</strong></td>
                                    <td>TESCO PLC</td>
                                    <td>GBLSE</td>
                                    <td>225.00 → 225.01</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>100</td>
                                    <td>GBX</td>
                                    <td>1</td>
                                    <td>1500</td>
                                    <td>20:1</td>
                                    <td>Monday-Friday<br />08:00-16:30</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        jQuery(document).ready(function ($) {
            $(".shares_content .tab_title li").click(function () {
                var index=$(this).index();
                $(this).addClass("active").siblings("li").removeClass("active");
                $(".shares_content .tab_list .tab_item:eq("+index+")").addClass("active").siblings(".tab_item").removeClass("active");
            });
        })
    </script>
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
