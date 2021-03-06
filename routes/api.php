<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test',function(){
	return "ok";
});

// init api
Route::get('/getInitInformation', 'UsersController@getInitInformation');

// user api
Route::post('/user', 'UsersController@doUser');
Route::get('/duplicateUser', 'UsersController@duplicateUser');
Route::get('/getUserList', 'UsersController@getUserList');
Route::get('/getAlarmDisableUserList', 'UsersController@getAlarmDisableUserList');
Route::post('/sendPresent', 'UsersController@sendPresent');
Route::post('/declareUser', 'UsersController@declareUser');
Route::post('/updateUserLocation', 'UsersController@updateLocation');
Route::post('/setAlarmFlag', 'UsersController@setAlarmFlag');
Route::post('/sendAlarm', 'UsersController@sendAlarm');
Route::post('/checkRoll', 'UsersController@checkRoll');
Route::post('/logForVoiceChat', 'UsersController@logForVoiceChat');
Route::post('/buyInAppItem', 'UsersController@buyPoint');
Route::post('/requestExit', 'UsersController@requestExitUser');
Route::post('/registerDevice', 'UsersController@registerDevice');
Route::post('/requestPresent', 'UsersController@requestPresent');
Route::post('/writeReviewConsulting', 'UsersController@writeReviewConsulting');
Route::get('/hasReview', 'UsersController@isAlreadyReviewed');

// user relation api
Route::post('/addFriend', 'UserRelationController@addFriend');
Route::post('/deleteFriend', 'UserRelationController@deleteFriend');
Route::post('/deleteAllFriend', 'UserRelationController@deleteAllFriend');
Route::post('/setUserRelation', 'UserRelationController@setUserRelation');
Route::get('/friendList', 'UserRelationController@getFriendList');
Route::get('/isBlockingUser', 'UserRelationController@isAlarmBlockingUser');
Route::get('/getUserRelation', 'UserRelationController@getUserRelation');

// auth api
Route::post('/requestAuthNum', 'UsersController@requestAuthNumber');
Route::post('/checkAuthNum', 'UsersController@checkAuthNumber');
Route::post('/autoRemoveAuth', 'UsersController@autoRemoveAuth');

// talk api
Route::post('/talk', 'TalkController@doTalk');
Route::get('/talk', 'TalkController@talk');
Route::get('/talkList', 'TalkController@talkList');
Route::get('/checkDuplicateTalk', 'TalkController@duplicateTalk');


// notification api
Route::post('/notification', 'NotificationsController@doNotification');
Route::get('/notificationList', 'NotificationsController@chatRoomList');
Route::post('/sendEnvelop', 'NotificationsController@sendEnvelop');
Route::post('/sendGroupEnvelop', 'NotificationsController@sendGroupEnvelop');
Route::post('/readEnvelop', 'NotificationsController@readEnvelop');
Route::post('/deleteEnvelop', 'NotificationsController@deleteEnvelop');
Route::get('/notificationListInChatRoom', 'NotificationsController@notificationListInChatRoom');
Route::get('/getUserUnreadCnt', 'NotificationsController@getUnReadCnt');

// withdraw api
Route::post('/withdraw', 'WithdrawController@doWithdraw');
Route::get('/withdrawList', 'WithdrawController@withdrawList');
Route::get('/getUserWithdrawRequestTotalPoint', 'WithdrawController@getWithdrawRequestTotalPoint');
Route::get('/getVerifiedWithdraw', 'WithdrawController@getVerifiedWithdraw');

// pointhistory api
Route::post('/pointHistory', 'PointHistoryController@doPointHistory');
Route::get('/pointHistoryList', 'PointHistoryController@pointHistoryList');

// cash question api
Route::post('/cashQuestion', 'CashQuestionController@doCashQuestion');
Route::get('/cashQuestionList', 'CashQuestionController@cashQuestionList');

// mamage notice api
Route::get('/manageNoticeList', 'AdminNoticeController@manageNoticeList');
Route::get('/adminSetting', 'AdminNoticeController@adminSetting');

// free charge api
Route::post('/adsync_delivery_point', 'FreeChargeController@adsync_delivery_point');
Route::get('/nas_delivery_point', 'FreeChargeController@nas_delivery_point');
Route::post('/igaworks_delivery_point', 'FreeChargeController@igaworks_delivery_point');

// gift icon
Route::get('/giftBrandList', 'GifticonController@getGiftBrandList');
Route::get('/giftList', 'GifticonController@getGiftList');
Route::get('/giftListByCategory', 'GifticonController@getGiftListByCategory');
Route::post('/request_gift_icon', 'GifticonController@requestGiftIcon');


//ansim
Route::post('/requestAuthRealUser', 'AnsimController@requestAuthRealUser');
Route::post('/verifyRealUser', 'AnsimController@verifyRealUser');
