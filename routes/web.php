<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Symfony\Component\HttpKernel\Fragment\RoutableFragmentRenderer;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/warehouse', function () {
    $supplies = DB::table('receive_general')->limit(10)->orderBy('id', 'desc')->get();
    return view('warehouse.index',compact('supplies'));
})->middleware(['auth','verified'])->name('dashboard');


Route::get('/', function(){
    return view('auth.login');
});


Route::controller(WarehouseController::class)->group(function(){
    Route::get('/logout', 'destroy')->name('warehouse.logout');
    Route::get('/warehouse/supplier', 'GetSupplier')->name('warehouse.supplier');
    Route::get('/warehouse/user_profile', 'UserProfile')->name('warehouse.user_profile');
    Route::get('/warehouse/create-product', 'CreateProduct')->name('warehouse.newproduct');
    Route::get('/warehouse/receive-general', 'GetReceiveGeneral')->name('warehouse.receive_general');
    Route::get('/warehouse/create-recipient', 'GetRecipient')->name('warehouse.recipient');
    Route::get('/warehouse/issue', 'GetIssue')->name('warehouse.issue');
    Route::get('/warehouse/issue-recipient', 'GetIssueRecipient')->name('warehouse.issue-recipient');
    Route::get('/warehouse/order-request', 'CreateOrderRequest')->name('warehouse.order-request');
    Route::get('/warehouse/order-consumables', 'CreateConsumableOrderRequest')->name('warehouse.order-consumables');
    Route::get('/change/password', 'ChangePassword')->name('change.password');
    Route::get('/register/user', [RegisteredUserController::class, 'create'])->name('register.user');
    Route::post('/store/user', [RegisteredUserController::class, 'store'])->name('store.user');
    Route::get('/issue-consumables', 'GetIssueConsumables')->name('issue.consumables');
    Route::get('/inventory-table', 'GetInventoryTable')->name('warehouse.inventorytable');
    Route::get('/commodities-table', 'GetCommoditiesTable')->name('warehouse.commoditiestable');
    Route::get('/suppliers-table', 'GetSuppliersTable')->name('warehouse.supplierstable');
    Route::get('/recipients-table', 'GetRecipientsTable')->name('warehouse.recipientstable');
    Route::get('/lotnumber-history','GetProductHistoryByLotNo')->name('warehouse.table-product-history-lotno');
    Route::get('/dispense-history','GetDispenseHistoryByLotNo')->name('warehouse.table-recipient-product-history');
    Route::get('/inventory-table-recipient', 'GetInventoryTableRecipient')->name('warehouse.inventorytable_recipient');
    Route::get('/commodities-table-recipient', 'GetCommoditiesTableRecipient')->name('warehouse.commoditiestable_recipient');
    Route::get('/update-commodity','GetCommodityDetailsForUpdate')->name('warehouse.commodity-update');

    Route::post('/warehouse/store_profile', 'SaveUserProfile')->name('store.userprofile');
    Route::post('/warehouse/store-product', 'SaveProduct')->name('store.saveproduct');
    Route::post('/warehouse/store-supplier', 'SaveSupplier')->name('store.supplier');
    Route::post('/warehouse/store-recipient', 'SaveRecipient')->name('store.recipient');
    Route::post('/warehouse/store-receiveproduct', 'SaveReceiveGeneral')->name('store.receive_general');
    Route::post('save-order-request', 'SaveOrderRequest');
    Route::post('save-order-request-consumables', 'SaveOrderRequestConsumables');
    Route::post('get-manufacturer-by-producttype','getManufacturer');
    Route::post('get-product-by-type','getProductByType');
    Route::post('get-product-recipient-by-type','getProductRecipientByType');
    Route::post('get-lotno-by-productname','getLotnoByBrandname');
    Route::post('get-distinct-product-by-type','getDistinctProductByType');
    Route::post('get-product-by-lotno','getProductByLotNo');
    Route::post('get-product-recipient-by-lotno','getProductRecipientByLotNo');
    Route::post('get-productdetails-by-brandname','getProductDetailsByBrandname');
    Route::post('compare-quantity-available','CompareQuantityByLotNo');
    Route::post('compare-recipient-quantity-available','CompareRecipientQuantityByLotNo');
    Route::post('get-recipient-details','getRecipientDetails');
    Route::post('get-pending-order-request-for-notification','getPendingOrdersCount');
    Route::post('get-pending-equipment-order-request-for-notification','getPendingOrdersCountEq');
    Route::post('get-pending-consumables-order-request-for-notification','getPendingOrdersCountCons');
    Route::post('get-recipientlocation-by-role','GetRecipientLocation');
    Route::post('get-shelf-by-rack','GetShelfByRack');
    Route::post('get-order-details-by-cmsrefnumber','GetOrderDetails');
    Route::post('issue-order-request','IssueOrderRequest');
    Route::post('issue-recipient-order-request','IssueRecipientOrderRequest');
    Route::post('update-stock-remainingquantity','UpdateStockRemainingQuantity');
    Route::post('update-recipient-stock-remainingquantity','UpdateRecipientStockRemainingQuantity');
    Route::post('authorize-order-request','AuthorizeOrderRequest');
    Route::post('receive-product-request','ReceiveProductRequest');
    Route::post('search-table-inventory','GetInventoryTableSearch');
    Route::post('search-table-commodity','GetCommodityTableSearch');
    Route::post('search-table-commodity-using-select','GetCommodityTableSearchUsingSelect');
    Route::post('delete-supplier','DeleteSupplier');
    Route::post('delete-recipient','DeleteRecipient');
    Route::post('get-dashboard-numbers','GetDashboardNumbers');
    Route::post('insert-into-recipients-stock-table','CreateRecipientStock');
    Route::post('insert-into-final-recipients-stock-table','CreateFinalRecipientStock');
    Route::post('check-cmsrefnumber-exists','CheckCmsrefnumberExists');
    Route::post('commit-commodityupdate','CommitCommodityUpdate');
    Route::post('mark-shelf-used','UpdateShelf');
    Route::post('check-remainingquantity-zero','CheckRemainingQuantityZero');
    Route::post('unlock-shelf-cabinet','UnlockShelfCabinet');
});


require __DIR__.'/auth.php';
