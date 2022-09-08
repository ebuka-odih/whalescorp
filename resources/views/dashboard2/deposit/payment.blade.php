@extends('dashboard.layout.app')
@section('content')

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
                                                        <h5 class="card-title">Make Payment</h5>
                                                        <div class="row wallet-address">
                                                            <div class="col-md-8">
                                                                @if(session()->has('success'))
                                                                    <div class="alert alert-success">
                                                                        {{ session()->get('success') }}
                                                                    </div>
                                                                @endif
                                                                @if(session()->has('declined'))
                                                                    <div class="alert alert-danger">
                                                                        {{ session()->get('declined') }}
                                                                    </div>
                                                                @endif
                                                                    @if ($errors->any())
                                                                        <div class="alert alert-danger">
                                                                            <ul>
                                                                                @foreach ($errors->all() as $error)
                                                                                    <li>{{ $error }}</li>
                                                                                @endforeach
                                                                            </ul>
                                                                        </div>
                                                                    @endif
                                                                <p class="text-white">Make Payment to the wallet below</p>
                                                                <h4 class="text-white">Payment Method: {{ $deposit->payment_method->name }}</h4>
                                                                <div class="input-group">
                                                                    <input readonly id="foo" class="form-control" value="{{ $deposit->payment_method->value }}">
                                                                    <div class="input-group-prepend">
                                                                        <button data-clipboard-target="#foo" class="btn btn-primary">COPY</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="visible-print text-center">
                                                                    {!! QrCode::size(150)->generate($deposit->payment_method->value); !!}
                                                                    <p class="mt-2">Scan me to copy wallet address.</p>
                                                                </div>
                                                            </div>

                                                            <button class="btn green ml-4" data-toggle="modal" data-target="#exampleModal">Confirm Payment</button>


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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Upload Payment Screenshot</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('user.processPayment') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <input type="hidden" name="deposit_id" value="{{ $deposit->id }}">
                                <input name="reference" type="file" class="form-control-file">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Confirm</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.10/clipboard.min.js"></script>

    <script>
        new ClipboardJS('.btn');
    </script>
@endsection
