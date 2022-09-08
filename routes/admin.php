<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth', 'verified', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'], function(){

    Route::get('dashboard', "Admin\AdminController@dashboard")->name('dashboard');
    Route::get('security', "Admin\AdminController@security")->name('security');
    Route::post('security', "Admin\AdminController@storePassword")->name('storePassword');
    Route::post('edit/date', "Admin\AdminController@editDate")->name('editDate');
    Route::post('edit/profit', "Admin\AdminController@defundProfit")->name('defundProfit');
    Route::post('edit/balance', "Admin\AdminController@defundBal")->name('defundBal');

    Route::get('user/details/{id}', "Admin\UserController@userDetails")->name('userDetails');
    Route::get('users', 'Admin\UserController@users')->name('users');
    Route::delete('delete/user', 'Admin\UserController@deleteUser')->name('deleteUser');
    Route::get('add-wallet', "Admin\UserController@wallet")->name('wallet');
    Route::post('add-wallet', "Admin\UserController@storeWallet")->name('storeWallet');

    Route::get('user/withdrawal/method/{id}', "Admin\UserController@userWithdrawMethod")->name('userWithdrawMethod');
    Route::delete('delete/user/{id}', "Admin\UserController@deleteUser")->name('deleteUser');


    Route::get('deposits', "Admin\AdminDeposit@deposits")->name('deposit');
    Route::get('view/deposits/{id}', "Admin\AdminDeposit@view_deposit")->name('view_deposit');
    Route::get('approve/deposit/{id}', "Admin\AdminDeposit@approve_deposit")->name('approve_deposit');
    Route::delete('delete/deposit/{id}', "Admin\AdminDeposit@deleteDeposit")->name('deleteDeposit');

    // Withdrawal Route
    Route::get('withdrawals', "Admin\AdminWithdraw@withdrawal")->name('withdrawal');
    Route::post('withdrawal/percent/{id}', "Admin\AdminWithdraw@withdrawPercent")->name('withdrawPercent');
    Route::get('approve/withdrawal/{id}', "Admin\AdminWithdraw@approve_withdrawal")->name('approve_withdrawal');
    Route::delete('delete/withdrawal/{id}', "Admin\AdminWithdraw@delete_withdrawal")->name('delete_withdrawal');

    Route::resource('subscription', "Admin\SubscriptionController");
    Route::resource('collectable', "Admin\AdminCollectable");
    Route::resource('nftlisting', "Admin\AdminNFTListing");

    // Funding Route
    Route::get('fund/user', "Admin\FundingController@fund")->name('fund');
    Route::post('fund/user', "Admin\FundingController@sendFund")->name('sendFund');

    Route::resource('wallet', "Admin\PaymentMethodController");

    //Trades Routes
    Route::get('open/trades/history', "Admin\AdminTradesController@openTrades")->name('trades.open');
    Route::get('close/trades/history', "Admin\AdminTradesController@closeTrades")->name('trades.close');
    Route::post('set/trade/{id}', "Admin\AdminTradesController@setTrade")->name('setTrade');
    Route::get('close/trade/{id}', "Admin\AdminTradesController@closeTrade")->name('closeTrade');

    Route::get('suspend/trade/{id}', "Admin\UserController@suspend")->name('suspend');
    Route::get('unsuspend/trade/{id}', "Admin\UserController@unsuspend")->name('unsuspend');

    Route::get('send/message', "Admin\AdminMessageController@messages")->name('message');
    Route::post('send/message', "Admin\AdminMessageController@sendMessage")->name('sendMessage');
    Route::get('edit/message/{id}', "Admin\AdminMessageController@editMessage")->name('editMessage');
    Route::patch('update/message/{id}', "Admin\AdminMessageController@updateMessage")->name('updateMessage');

});
