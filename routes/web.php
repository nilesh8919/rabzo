<?php

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
Route::get('/','IndexController@index');
Route::get('/restaurant','IndexController@restaurant');
Route::get('/restaurant_details/{name}','IndexController@restaurant_details');
Route::post('/get_item_data','IndexController@get_item_data');
Route::post('/get_merchant_data','IndexController@get_merchant_data');
Route::get('/get_merchant_available_location','IndexController@get_merchant_available_location');
Route::get('/get_item_price','IndexController@get_item_price');
Route::get('/get_merchant_available_restaurant','IndexController@get_merchant_available_restaurant');
Route::get('/checkout','CheckoutController@index');
/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/admin', function () {
    return view('admin.login');
});
Route::get('/merchant', function () {
    return view('merchant.login');
});
// admin routes
//Route::post('submit_login','AuthenticateController@submit_login');

Route::post('authenticate','Auth\LoginController@authenticate');
Route::post('merchant_authenticate','Merchant\LoginController@attemptLogin');
 
Auth::routes();
Route::group(['middleware' => 'auth'], function(){
        Route::get('/home', 'Admin\HomeController@index')->name('home');
        Route::get('logout','Admin\HomeController@logout');
		Route::get('manage_banner','Admin\CmsController@manage_banner');
		Route::post('storebanner','Admin\CmsController@storebanner');
		Route::get('add_banner_succeess','Admin\CmsController@add_banner_succeess');
		Route::get('delete_banner','Admin\CmsController@delete_banner');
		Route::get('delete_banner_succeess','Admin\CmsController@delete_banner_succeess');
		Route::post('active_banner','Admin\CmsController@active_banner');
		Route::get('manage_faq','Admin\CmsController@manage_faq');
		Route::post('storefaqs','Admin\CmsController@storefaqs');
		Route::get('store_faq_succeess','Admin\CmsController@store_faq_succeess');
		Route::get('delete_faq','Admin\CmsController@delete_faq');
		Route::get('delete_faq_succeess','Admin\CmsController@delete_faq_succeess');
		Route::get('manage_packages','Admin\PackageController@manage_packages');
		Route::post('store_packages','Admin\PackageController@store_packages');
		Route::get('store_package_succeess','Admin\PackageController@store_package_succeess');
		Route::get('delete_package','Admin\PackageController@delete_package');
		Route::get('delete_package_succeess','Admin\PackageController@delete_package_succeess');
		Route::get('get_package_data_by_id','Admin\PackageController@get_package_data_by_id');
		Route::get('manage_merchant','Admin\MerchantController@manage_merchant');
		Route::get('cuisine','Admin\MerchantController@cuisine');
		Route::post('store_cuisine','Admin\MerchantController@store_cuisine');
		Route::get('store_cuisine_succeess','Admin\MerchantController@store_cuisine_succeess');
		Route::get('delete_cuisine','Admin\MerchantController@delete_cuisine');
		Route::get('delete_cuisine_succeess','Admin\MerchantController@delete_cuisine_succeess');
		Route::get('get_cuisine_data_by_id','Admin\MerchantController@get_cuisine_data_by_id');
		Route::get('manage_reviews','Admin\ReviewController@manage_reviews');
		Route::get('manage_cms','Admin\CmsController@manage_cms');
		
		Route::get('add_new_merchant','Admin\MerchantController@add_new_merchant');
		Route::get('get_price_by_package_id','Admin\MerchantController@get_price_by_package_id');
		Route::post('store_merchant','Admin\MerchantController@store_merchant');
		Route::get('store_merchant_success','Admin\MerchantController@store_merchant_success');
		Route::get('manage_merchant','Admin\MerchantController@manage_merchant');
		Route::get('delete_merchant','Admin\MerchantController@delete_merchant');
		Route::get('delete_merchant_success','Admin\MerchantController@delete_merchant_success');
		
		// merchant categories
		Route::post('store_categories','Admin\MerchantController@store_categories');
		Route::get('store_categories_success','Admin\MerchantController@store_categories_success');
		Route::get('manage_categories','Admin\MerchantController@manage_categories');
		Route::get('delete_categories','Admin\MerchantController@delete_categories');
		Route::get('delete_categories_success','Admin\MerchantController@delete_categories');
		Route::get('get_merchant_by_id','Admin\MerchantController@get_merchant_by_id');
		Route::get('delete_merchant_image','Admin\MerchantController@delete_merchant_image');
		
		// advertisement
		
			Route::get('manage_advertisement','Admin\AdvertisementController@manage_advertisement');
			Route::post('store_advertisement','Admin\AdvertisementController@store');
			Route::get('store_advertisement_succeess','Admin\AdvertisementController@store_advertisement_succeess');
			Route::get('get_advertisement_data_by_id','Admin\AdvertisementController@get_advertisement_data_by_id');
			Route::get('delete_advertisement','Admin\AdvertisementController@delete');
			Route::get('delete_advertisement_succeess','Admin\AdvertisementController@delete_advertisement_succeess');

			// payment gateway
		
			Route::get('manage_payumoney','Admin\PaymentGatewayController@manage_payumoney');
			Route::post('store_payumoney','Admin\PaymentGatewayController@store_payumoney');
		
			Route::get('manage_paytm','Admin\PaymentGatewayController@manage_paytm');
			Route::post('store_paytm','Admin\PaymentGatewayController@store_paytm');
			Route::post('store_cms','Admin\CmsController@store_cms');
			Route::get('store_cms_success','Admin\CmsController@store_cms_success');
			
		
			//Merchant routes
	
     
});
///Route::group(['middleware' => 'merchant'], function(){
   Route::get('/merchant_home', 'Merchant\HomeController@index')->name('merchant_home');
 
   Route::post('/store_item', 'Merchant\ItemController@store_item');
   Route::get('/store_item_succeess', 'Merchant\ItemController@store_item_succeess');
   Route::get('/merchant_logout', 'Merchant\HomeController@logout');
   
   Route::get('manage_voucher','Merchant\VoucherController@manage_voucher');
		Route::post('store_voucher','Merchant\VoucherController@store_voucher');
		Route::get('store_voucher_succeess','Merchant\VoucherController@store_voucher_succeess');
		Route::get('get_voucher_data_by_id','Merchant\VoucherController@get_voucher_data_by_id');
		Route::get('delete_voucher','Merchant\VoucherController@delete_voucher');
		Route::get('delete_voucher_succeess','Merchant\VoucherController@delete_voucher_succeess');
		// items
		Route::get('item_listing','Merchant\ItemController@index');
		Route::get('add_item','Merchant\ItemController@add_item');
		Route::get('delete_item/{id}','Merchant\ItemController@delete_item');
		Route::get('edit_item','Merchant\ItemController@edit_item');
		Route::get('delete_item_success','Merchant\ItemController@delete_item_success');
		Route::get('store_item_success','Merchant\ItemController@store_item_success');
		Route::get('delete_item_image','Merchant\ItemController@delete_item_image');
		Route::get('cooking_reference','Merchant\CookingReferenceController@cooking_reference');
		Route::post('create_cooking_reference','Merchant\CookingReferenceController@create');
		Route::get('delete_cooking_reference','Merchant\CookingReferenceController@delete_cooking_reference');
		Route::get('merchant_info','Merchant\ProfileController@merchant_info');
		Route::post('update_merchant_profile','Merchant\ProfileController@update_merchant_profile');
		Route::get('manage_sizes','Merchant\SizeController@manage_sizes');
		Route::post('create_sizes','Merchant\SizeController@create');
		Route::get('delete_sizes','Merchant\SizeController@delete_sizes');
		Route::get('manage_ingredients','Merchant\IngredientsController@manage_ingredients');
		Route::post('create_ingredients','Merchant\IngredientsController@create');
		Route::get('delete_ingredients','Merchant\IngredientsController@delete_ingredients');
		Route::get('manage_offers','Merchant\OffersController@index');
		Route::post('create_offers','Merchant\OffersController@create');
		Route::get('delete_offers','Merchant\OffersController@delete_offers');
			Route::get('manage_shipping','Merchant\shippingController@index');
		Route::post('create_shipping','Merchant\shippingController@create');
//});
 
 	