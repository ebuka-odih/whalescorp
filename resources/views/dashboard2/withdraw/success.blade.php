@extends('dashboard.layout.app')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <div class="settings mtb15">
        <div class="container-fluid">
            <div class="row">
                <div  class="col-md-12 col-lg-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade" id="settings-profile" role="tabpanel" aria-labelledby="settings-profile-tab">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">General Information</h5>
                                    <div class="settings-profile">
                                        <form>
                                            <img src="assets/img/avatar.svg" alt="avatar">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="fileUpload">
                                                <label class="custom-file-label" for="fileUpload">Choose avatar</label>
                                            </div>
                                            <div class="form-row mt-4">
                                                <div class="col-md-6">
                                                    <label for="formFirst">First name</label>
                                                    <input id="formFirst" type="text" class="form-control" placeholder="First name">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="formLast">Last name</label>
                                                    <input id="formLast" type="text" class="form-control" placeholder="Last name">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="emailAddress">Email</label>
                                                    <input id="emailAddress" type="text" class="form-control" placeholder="Enter your email">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="phoneNumber">Phone</label>
                                                    <input id="phoneNumber" type="text" class="form-control" placeholder="Enter phone number">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="selectLanguage">Language</label>
                                                    <select id="selectLanguage" class="custom-select">
                                                        <option selected="">English</option>
                                                        <option>Mandarin Chinese</option>
                                                        <option>Spanish</option>
                                                        <option>Arabic</option>
                                                        <option>Russian</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="selectCurrency">Currency</label>
                                                    <select id="selectCurrency" class="custom-select">
                                                        <option selected="">USD</option>
                                                        <option>EUR</option>
                                                        <option>GBP</option>
                                                        <option>CHF</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="submit" value="Update">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Security Information</h5>
                                    <div class="settings-profile">
                                        <form>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <label for="currentPass">Current password</label>
                                                    <input id="currentPass" type="text" class="form-control" placeholder="Enter your password">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="newPass">New password</label>
                                                    <input id="newPass" type="text" class="form-control" placeholder="Enter new password">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="securityOne">Security questions #1</label>
                                                    <select id="securityOne" class="custom-select">
                                                        <option selected="">What was the name of your first pet?</option>
                                                        <option>What's your Mother's middle name?</option>
                                                        <option>What was the name of your first school?</option>
                                                        <option>Where did you travel for the first time?</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="securityAnsOne">Answer</label>
                                                    <input id="securityAnsOne" type="text" class="form-control" placeholder="Enter your answer">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="securityTwo">Security questions #2</label>
                                                    <select id="securityTwo" class="custom-select">
                                                        <option selected="">Choose...</option>
                                                        <option>What was the name of your first pet?</option>
                                                        <option>What's your Mother's middle name?</option>
                                                        <option>What was the name of your first school?</option>
                                                        <option>Where did you travel for the first time?</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="securityAnsTwo">Answer</label>
                                                    <input id="securityAnsTwo" type="text" class="form-control" placeholder="Enter your answer">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="securityThree">Security questions #3</label>
                                                    <select id="securityThree" class="custom-select">
                                                        <option selected="">Choose...</option>
                                                        <option>What was the name of your first pet?</option>
                                                        <option>What's your Mother's middle name?</option>
                                                        <option>What was the name of your first school?</option>
                                                        <option>Where did you travel for the first time?</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="securityFore">Answer</label>
                                                    <input id="securityFore" type="text" class="form-control" placeholder="Enter your answer">
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="submit" value="Update">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="settings-wallet" role="tabpanel" aria-labelledby="settings-wallet-tab">
                            <div class="wallet">
                                <div class="row">
                                    <div style="visibility: hidden" class="col-md-12 col-lg-4">
                                        <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link d-flex justify-content-between align-items-center active" data-toggle="pill" href="#coinBTC" role="tab" aria-selected="true">
                                                <div class="d-flex">
                                                    <img src="assets/img/icon/18.png" alt="btc">
                                                    <div>
                                                        <h2>BTC</h2>
                                                        <p>Bitcoin</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h3>4.5484254</h3>
                                                    <p class="text-right"><i class="icon ion-md-lock"></i> 0.0000000</p>
                                                </div>
                                            </a>
                                            <a class="nav-link d-flex justify-content-between align-items-center" data-toggle="pill" href="#coinETH" role="tab" aria-selected="true">
                                                <div class="d-flex">
                                                    <img src="assets/img/icon/1.png" alt="btc">
                                                    <div>
                                                        <h2>ETH</h2>
                                                        <p>Ethereum</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h3>13.454845</h3>
                                                    <p class="text-right"><i class="icon ion-md-lock"></i> 0.0000000</p>
                                                </div>
                                            </a>
                                            <a class="nav-link d-flex justify-content-between align-items-center" data-toggle="pill" href="#coinBNB" role="tab" aria-selected="true">
                                                <div class="d-flex">
                                                    <img src="assets/img/icon/9.png" alt="btc">
                                                    <div>
                                                        <h2>BNB</h2>
                                                        <p>Binance</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h3>35.4842458</h3>
                                                    <p class="text-right"><i class="icon ion-md-lock"></i> 0.0000000</p>
                                                </div>
                                            </a>
                                            <a class="nav-link d-flex justify-content-between align-items-center" data-toggle="pill" href="#coinTRX" role="tab" aria-selected="true">
                                                <div class="d-flex">
                                                    <img src="assets/img/icon/6.png" alt="btc">
                                                    <div>
                                                        <h2>TRX</h2>
                                                        <p>Tron</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h3>4.458941</h3>
                                                    <p class="text-right"><i class="icon ion-md-lock"></i> 0.0000000</p>
                                                </div>
                                            </a>
                                            <a class="nav-link d-flex justify-content-between align-items-center" data-toggle="pill" href="#coinEOS" role="tab" aria-selected="true">
                                                <div class="d-flex">
                                                    <img src="assets/img/icon/2.png" alt="btc">
                                                    <div>
                                                        <h2>EOS</h2>
                                                        <p>Eosio</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h3>33.478951</h3>
                                                    <p class="text-right"><i class="icon ion-md-lock"></i> 0.0000000</p>
                                                </div>
                                            </a>
                                            <a class="nav-link d-flex justify-content-between align-items-center" data-toggle="pill" href="#coinXMR" role="tab" aria-selected="true">
                                                <div class="d-flex">
                                                    <img src="assets/img/icon/7.png" alt="btc">
                                                    <div>
                                                        <h2>XMR</h2>
                                                        <p>Monero</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h3>99.465975</h3>
                                                    <p class="text-right"><i class="icon ion-md-lock"></i> 0.0000000</p>
                                                </div>
                                            </a>
                                            <a class="nav-link d-flex justify-content-between align-items-center" data-toggle="pill" href="#coinKCS" role="tab" aria-selected="true">
                                                <div class="d-flex">
                                                    <img src="assets/img/icon/4.png" alt="btc">
                                                    <div>
                                                        <h2>KCS</h2>
                                                        <p>Kstarcoin</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h3>114.57564</h3>
                                                    <p class="text-right"><i class="icon ion-md-lock"></i> 0.0000000</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-8">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="coinBTC" role="tabpanel">
                                                <div class="card">
                                                    <div class="card-body">
{{--                                                        <h5 class="card-title">Make Withdrawal</h5>--}}
                                                        <div class="row wallet-address">
                                                            <div class="col-md-12">
                                                                <p style="font-size: 18px" class="text-success text-center">Withdrawal Request Sent Successfully
                                                                </p>
                                                                <br>
                                                                <hr>
                                                                <div class="col-lg-12">
                                                                    <i class="fa-solid fa-badge-check text-success"></i>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
