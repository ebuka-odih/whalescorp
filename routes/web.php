<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'pages.index')->name('index');
Route::view('/raw-ecn', 'pages.raw_ecn')->name('raw_ecn');
Route::view('/standard-stp', 'pages.standard_stp')->name('standard_stp');
Route::view('/pro-stp', 'pages.pro_ecn')->name('pro_ecn');
Route::view('/indices', 'pages.indices')->name('indices');
Route::view('/energy', 'pages.energy')->name('energy');
Route::view('/soft_commodities', 'pages.soft_commodities');
Route::view('/precious_metals', 'pages.precious_metals');
Route::view('/us_shares', 'pages.us_shares');
Route::view('/uk_shares', 'pages.uk_shares');
Route::view('/trading_hours', 'pages.trading_hours');
Route::view('/spread_commisions', 'pages.spread_commisions');
Route::view('/leverage', 'pages.leverage');
Route::view('/trading_hours', 'pages.trading_hours');
Route::view('/spread_commisions', 'pages.spread_commisions');
Route::view('/swap_rates', 'pages.swap_rates');
Route::view('/oil_rollover', 'pages.oil_rollover');
Route::view('/deposit', 'pages.deposit');
Route::view('/withdrawal', 'pages.withdrawal');
Route::view('/dispute_resolution', 'pages.dispute_resolution');
Route::view('/referrals', 'pages.referrals');
Route::view('/deposit_bonus', 'pages.deposit_bonus');
Route::view('/economic_calendar', 'pages.economic_calendar');
Route::view('/about_us', 'pages.about_us');
Route::view('/awards', 'pages.awards');
Route::view('/contact', 'pages.contact');
Route::view('/regulation', 'pages.regulation');
Route::view('/cpa_affiliate', 'pages.cpa_affiliate');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth'], 'prefix' => 'user', 'as' => 'user.'], function(){
    Route::get('dashboard', "UserController@dashboard")->name('dashboard');
    Route::get('account/details', "UserController@wallet")->name('wallet');
    Route::get('referrals', "UserController@all_referrals")->name('all_referrals');
    Route::get('profile', 'UserController@profile')->name('profile');
    Route::patch('update/profile', 'UserController@updateProfile')->name('updateProfile');
    Route::get('edit/profile', 'UserController@editProfile')->name('editProfile');

    Route::get('security', 'UserController@security')->name('security');
    Route::post('update/security', "UserController@updateSecurity")->name('updateSecurity');
    Route::get('account', 'WithdrawMethodController@create')->name('account');
    Route::post('account', 'WithdrawMethodController@store')->name('account.store');
    Route::delete('delete/account/{id}', 'WithdrawMethodController@deleteWallet')->name('deleteWallet');

    Route::get('transactions', 'UserController@transactions')->name('transactions');
    Route::get('collections', 'CollectableController@collections')->name('collections');

    Route::get('account', 'WithdrawMethodController@create')->name('account');
    Route::post('account', 'WithdrawMethodController@store')->name('account.store');

    //  Deposits Routes
    Route::get('deposit/transactions', "DepositController@transactions")->name('deposit.transactions');
    Route::get('pending/transactions', "DepositController@pendingTransactions")->name('pendingTransactions');
    Route::get('deposit', "DepositController@deposit")->name('deposit');
    Route::post('process/deposit', "DepositController@processDeposit")->name('processDeposit');
    Route::get('deposit/payment/QH5H3Q64{id}2GER', "DepositController@payment")->name('payment');
    Route::patch('process/payment/QH5H3Q642GER', "DepositController@processPayment")->name('processPayment');
    Route::get('cancelled/deposit/XCRTRD{id}ERTX8F&', "DepositController@cancelDeposit")->name('cancelDeposit');

    //Withdrawal Routes
    Route::get('withdraw/transactions', "WithdrawController@transactions")->name('withdraw.transactions');
    Route::get('withdraw', "WithdrawController@withdraw")->name('withdraw');
    Route::post('withdraw', "WithdrawController@processWithdraw")->name('processWithdraw');
    Route::get('withdraw/success/RETWYR432{id}3TYW5T', "WithdrawController@success")->name('success');
    Route::get('cancelled/withdrawal/XCRTRD{id}ERTX8F&', "WithdrawController@cancelWithdraw")->name('cancelWithdraw');


    Route::get('trade-room', "TradeController@trade")->name('trade');
    Route::post('place/trade-room', "TradeController@placeTrade")->name('placeTrade');
    Route::get('trade/history', "TradeController@history")->name('trade.history');
    Route::get('close/trade/history', "TradeController@closeTrades")->name('closeTrades');

    Route::get('subscription/plans', "SubscribeController@plans")->name('sub.plans');
    Route::get('subscription/history', "SubscribeController@history")->name('sub.history');
    Route::get('subscription/details/{id}', "SubscribeController@details")->name('sub.details');
    Route::post('process/subscription/plans', "SubscribeController@subscribe")->name('subscribe');
    Route::get('subscription/success/{id}', "SubscribeController@Subsuccess")->name('Subsuccess');

    Route::resource('message', "MessageController");
});

include 'admin.php';
