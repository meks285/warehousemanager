<?php

namespace App\Http\Controllers;

use App\Models\RecipientStock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Models\Suppliers;
use App\Models\ReceiveGeneral;
use Carbon\Carbon;
use App\Models\Recipient;
use App\Models\Order;
use TheSeer\Tokenizer\Exception;
use Illuminate\Database\QueryException;

class WarehouseController extends Controller
{
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function ChangePassword(Request $request){
        return view('auth.reset-password', ['request' => $request]);
    }
// GET ROUTES HANDLERS 
public function UserProfile(){
    $id = Auth::user()->id;
    $userData = User::find($id);

    return view('warehouse.user_profile',compact('userData'));
}

public function GetInventoryTable(){
    $id = Auth::user()->id;
    $userData = User::find($id);

    //get all registered suppliers
    $inventory = Order::all()->sortDesc();

    return view('warehouse.table-inventory',compact('userData','inventory'));
    
}
public function GetInventoryTableRecipient(){
    $id = Auth::user()->id;
    $userData = User::find($id);
    $recipientlocation = Auth::user()->recipientlocation;

    //get all registered suppliers
    $inventory = DB::table('orders')->where('requestlocation','=',$recipientlocation)->orderByDesc('id')->get();

    return view('warehouse.table-inventory',compact('userData','inventory'));
    
}
public function GetCommoditiesTable(){
    $id = Auth::user()->id;
    $userData = User::find($id);

    //get all registered suppliers
    $commodities = ReceiveGeneral::all()->sortDesc();

    return view('warehouse.table-commodities',compact('userData','commodities'));
    
}
public function GetCommoditiesTableRecipient(){
    $id = Auth::user()->id;
    $userData = User::find($id);
    $recipientlocation = Auth::user()->recipientlocation;

    //get all registered suppliers
    $commodities = DB::table('receive_recipientstock')->where('requestlocation','=',$recipientlocation)->orderByDesc('id')->get();

    return view('warehouse.table-commodities-recipient',compact('userData','commodities'));
    
}
public function GetSuppliersTable(){
    $id = Auth::user()->id;
    $userData = User::find($id);

    //get all registered suppliers
    $suppliers = Suppliers::all()->sortDesc();

    return view('warehouse.table-suppliers',compact('userData','suppliers'));
    
}
public function GetRecipientsTable(){
    $id = Auth::user()->id;
    $userData = User::find($id);

    //get all registered suppliers
    $recipients = Recipient::all()->sortDesc();

    return view('warehouse.table-recipients',compact('userData','recipients'));
    
}
public function GetInventoryTableSearch(Request $request){
    $inventory = DB::table('orders')
    ->where('cmsrefnumber', 'LIKE', "%{$request->search_value}%")
    ->orWhere('orderstatus', 'LIKE', "%{$request->search_value}%")
    ->get();
    return response()->json($inventory);

}
public function GetCommodityTableSearch(Request $request){
    $commodities = DB::table('receive_general')
    ->where('lotno', 'LIKE', "%{$request->search_value}%")
    ->orWhere('awb_number', 'LIKE', "%{$request->search_value}%")
    ->get();
    return response()->json($commodities);

}
public function GetCommodityTableSearchUsingSelect(Request $request){

    $value = $request->select_value;
    if($value == 'new'){
        $commodities = DB::table('receive_general')->where('quantityremaining','>=',1)->orderBy('datereceived', 'desc')->get();
        }
        elseif($value == 'expired'){
            $commodities = DB::table('receive_general')->where('quantityremaining','>=',1)->whereDate('expirydate','<', date('Y-m-d'))->orderBy('datereceived', 'desc')->get();
        }
        elseif($value == 'usedup'){
            $commodities = DB::table('receive_general')->where('quantityremaining','<',1)->orderBy('datereceived', 'desc')->get();
        }
        elseif($value == 'nothreshold'){
            $commodities = DB::table('receive_general')->where('quantityremaining','>=',1)->whereNull('threshold')->orderBy('datereceived', 'desc')->get();
        }
        elseif($value == 'unshelved'){
            $commodities = DB::table('receive_general')->where('quantityremaining','>=',1)->whereNull('rackno')->orderBy('datereceived', 'desc')->get();
        }
            else{
        $commodities = DB::table('receive_general')->get();
    }

    return response()->json($commodities);

}
public function GetSupplier(){
    $id = Auth::user()->id;
    $userData = User::find($id);

    //get all registered suppliers
    $suppliers = Suppliers::all()->sortDesc();

    return view('warehouse.createsupplier',compact('userData','suppliers'));
}
public function GetIssue(){
    $id = Auth::user()->id;
    $userData = User::find($id);
    //get all recipients
    $recipients = Recipient::all()->sortDesc();  
    //get all products
    //$productInStock = ReceiveGeneral::select('brandname')->where('quantityremaining','>','0')->get();
    $productInStock = DB::table('receive_general')->select('brandname','lotno')->where('quantityremaining','>',0)->get(["brandname","lotno"]);
    $activeOrders = DB::table('orders')->selectRaw('cmsrefnumber,requestlocation,count(id) as totalproducts,requestedby,orderstatus')->groupBy('cmsrefnumber','requestlocation','requestedby','orderstatus')
    ->where('orderstatus','!=','ISSUED')
    ->where('producttype','=','EQUIPMENT')
    ->orderBy('orderstatus')
    ->get(["cmsrefnumber","requestlocation","totalproducts","requestedby"]);
    return view('warehouse.issue',compact('userData','recipients','productInStock','activeOrders'));
}
public function GetIssueRecipient(){
    $id = Auth::user()->id;
    $userData = User::find($id);
    //get all recipients
    $recipients = Recipient::all()->sortDesc();  
    //get all products
    //$productInStock = ReceiveGeneral::select('brandname')->where('quantityremaining','>','0')->get();
    $productInStock = DB::table('receive_recipientstock')->select('brandname','lotno')->where('quantityremaining','>',0)->get(["brandname","lotno"]);
    $activeOrders = DB::table('orders_recipient')->selectRaw('cmsrefnumber,requestlocation,count(id) as totalproducts,requestedby,orderstatus')->groupBy('cmsrefnumber','requestlocation','requestedby','orderstatus')
    ->where('orderstatus','!=','ISSUED')
    ->where('producttype','=','EQUIPMENT')
    ->orderBy('orderstatus')
    ->get(["cmsrefnumber","requestlocation","totalproducts","requestedby"]);
    return view('warehouse.issue-recipient',compact('userData','recipients','productInStock','activeOrders'));
}

public function CreateOrderRequest(){
    $id = Auth::user()->id;
    $userData = User::find($id);
    //get all recipients
    $recipients = Recipient::all()->sortDesc();  
    //get all products
    //$productInStock = ReceiveGeneral::select('brandname')->where('quantityremaining','>','0')->get();
   $productInStock = DB::table('receive_general')->select('brandname','lotno')->where('quantityremaining','>',0)->get(["brandname","lotno"]);
    return view('warehouse.order-request',compact('userData','recipients','productInStock'));
}
public function CreateConsumableOrderRequest(){
    $id = Auth::user()->id;
    $userData = User::find($id);
    $recipients = Recipient::all()->sortDesc();  

    $productInStock = DB::table('receive_general')->select('brandname','lotno')->where('quantityremaining','>',0)->get(["brandname","lotno"]);
    return view('warehouse.order-consumables',compact('userData','recipients','productInStock'));
}
public function GetIssueConsumables(){
    $id = Auth::user()->id;
    $userData = User::find($id);
    $recipients = Recipient::all()->sortDesc();  

    $productInStock = DB::table('receive_general')->select('brandname','lotno')->where('quantityremaining','>',0)->get(["brandname","lotno"]);
    $activeOrders = DB::table('orders')->selectRaw('cmsrefnumber,requestlocation,count(id) as totalproducts,requestedby,orderstatus')->groupBy('cmsrefnumber','requestlocation','requestedby','orderstatus')
    ->where('orderstatus','!=','ISSUED')
    ->where('producttype','!=','EQUIPMENT')
    ->orderBy('orderstatus')
    ->get(["cmsrefnumber","requestlocation","totalproducts","requestedby"]);

    return view('warehouse.issue-consumables',compact('userData','recipients','productInStock','activeOrders'));
}

public function GetRecipient(){
    $id = Auth::user()->id;
    $userData = User::find($id);

    //get all recipients
    $recipients = Recipient::all()->sortDesc();  
    //get all states
    $states =DB::table('states')->select('name')->get()->sort();

    return view('warehouse.createrecipient',compact('userData','recipients','states'));
}
public function GetReceiveGeneral(){
    $id = Auth::user()->id;
    $userData = User::find($id);
    $brandname =DB::table('products')->select('brandname')->get();
    $supplier =DB::table('suppliers')->select('name')->get();

    //get all in-flow suppliers
    $productinflow = ReceiveGeneral::all()->sortDesc();    

    return view('warehouse.createreceiveproduct',compact('userData','brandname','supplier','productinflow'));
}
public function CreateProduct(){
    $id = Auth::user()->id;
    $userData = User::find($id);
    $productmapping_data =DB::table('product_mapping')->select('producttype','manufacturer')->get();
    //get all registered suppliers
    $producttable = Product::all()->sortDesc();

    return view('warehouse.createproduct',compact('userData','productmapping_data','producttable'));
} // END GET ROUTE HANDLERS

// DB POST HANDLERS
public function SaveUserProfile(Request $request){

        $request->validate([
            'role' => ['required', 'string', 'max:124']
        ]);

        $id = Auth::user()->id;
        $saveData = User::find($id);

        $saveData->name = $request->name;
        $saveData->email = $request->email;
        $saveData->role = $request->role;
        $saveData->recipientlocation = $request->recipientlocation;

        //Commits the Data to the DB
        $saveData->save();

        return redirect()->route('warehouse.user_profile');
    }

public function SaveProduct(Request $request){

    $request->validate([
        'producttype' => ['required', 'string', 'max:255'],
        'manufacturer' => ['required', 'string', 'max:255'],
        'brandname' => ['required', 'string', 'max:255', 'unique:products'],
        'packsize' => ['required', 'string', 'max:255'],
        'dataentryby' => ['required', 'string', 'max:255'],
    ]);

    $product = new Product();

    $product->producttype = $request->producttype;
    $product->manufacturer = $request->manufacturer;
    $product->brandname = $request->brandname;
    $product->packsize = $request->packsize;
    $product->dataentryby = $request->dataentryby;

    $product->save();

    $notification = array(
        'message' => 'Product: '.$request->brandname.' created successfully',
        'alert-type' =>'success',
        'duration' => 10000
    );

    return redirect()->route('warehouse.newproduct')->with($notification);

}  
    public function SaveSupplier(Request $request){

        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:suppliers'],
            'email' => ['required','email', 'string', 'max:255', 'unique:suppliers'],
            'phonenumber' => ['required', 'digits:11', 'unique:suppliers'],
            'dataentryby' => ['required', 'string', 'max:255'],
        ]);

        $supplier = new Suppliers();

        $supplier->name = $request->name;
        $supplier->email = $request->email;
        $supplier->phonenumber = $request->phonenumber;
        $supplier->dataentryby = $request->dataentryby;

        $supplier->save();

        $notification = array(
            'message' => 'Supplier: '.$request->name.' registered successfully',
            'alert-type' =>'success',
            'duration' => 10000
        );

        return redirect()->route('warehouse.supplier')->with($notification);

    }  
    
    public function GetProductHistoryByLotNo(Request $request){
        $id = Auth::user()->id;
        $userData = User::find($id);
    
        $lotnohistory = DB::table('orders')->selectRaw('cmsrefnumber,lotno,requestlocation,quantityissued,requestedby,issuedate,orderstatus')
        ->where('lotno','=',$request->lotno)
        ->where('orderstatus','=','ISSUED')
        ->orderBy('orderstatus')
        ->get();

        $productdetails=DB::table('products_view')->where('lotno',$request->lotno)->get();

    
        return view('warehouse.table-product-history-lotno',compact('userData','lotnohistory','productdetails'));
    }
    public function GetCommodityDetailsForUpdate(Request $request){
        $id = Auth::user()->id;
        $userData = User::find($id);
    
        $lotnohistory = DB::table('receive_general')->where('lotno','=',$request->lotno)->get();
        $racklist=DB::table('racks')->where('status','=','Free')->get();

   
        return view('warehouse.commodity-update',compact('userData','lotnohistory','racklist'));
    }
    
    public function GetDispenseHistoryByLotNo(Request $request){
        $id = Auth::user()->id;
        $userData = User::find($id);
    
        $lotnohistory = DB::table('orders_recipient')->selectRaw('cmsrefnumber,lotno,requestlocation,quantity,requestedby,issuedate,orderstatus,issuerlocation')
        ->where('lotno','=',$request->lotno)
        ->where('orderstatus','=','ISSUED')
        ->orderBy('orderstatus')
        ->get();

        $productdetails=DB::table('products_recipient_view')->where('lotno',$request->lotno)->get();

    
        return view('warehouse.table-recipient-product-history',compact('userData','lotnohistory','productdetails'));
    }
    
    public function SaveReceiveGeneral(Request $request){

        $request->validate([
            'brandname' => ['required', 'string', 'max:255'],
            'lotno' => ['required', 'string', 'max:255','unique:receive_general'],
            'expirydate' => ['required', 'date'],
            'quantity' => ['required', 'string', 'max:20'],
            'suppliedby' => ['required', 'string', 'max:255'],
            'datereceived' => ['required', 'date', 'max:255'],
            'dataentryby' => ['required', 'string', 'max:255'],
        ]);

        $RegisterProduct = new ReceiveGeneral();
        
        $RegisterProduct->brandname = $request->brandname;
        $RegisterProduct->lotno = strtoupper($request->lotno);
        $RegisterProduct->expirydate = $request->expirydate;
        $RegisterProduct->cabinetno = strtoupper($request->cabinetno);
        $RegisterProduct->quantity = $request->quantity;
        $RegisterProduct->quantityremaining = $request->quantity;
        $RegisterProduct->suppliedby = $request->suppliedby;
        $RegisterProduct->datereceived = $request->datereceived;
        $RegisterProduct->dataentryby = $request->dataentryby;

            $RegisterProduct->save();

        $notification = array(
            'message' => 'Product: '.$request->brandname.' Received',
            'alert-type' =>'success',
            'duration' => 10000
        );

        return redirect()->route('warehouse.receive_general')->with($notification);

    } 

    public function SaveRecipient(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255','unique:recipients'],
            'category' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'contactperson' => ['required', 'string', 'max:255','unique:recipients'],
            'contactpersonemail' => ['required', 'string', 'max:255'],
            'contactpersonphonenumber' => ['required', 'string','digits:11'],
            'dataentryby' => ['required', 'string', 'max:255'],
        ]);

        $recipient = new Recipient();
        
        $recipient->name = $request->name;
        $recipient->category = $request->category;
        $recipient->location = $request->location;
        $recipient->contactperson = $request->contactperson;
        $recipient->contactpersonemail = $request->contactpersonemail;
        $recipient->contactpersonphonenumber = $request->contactpersonphonenumber;
        $recipient->address = $request->address;
        $recipient->dataentryby = $request->dataentryby;

        $recipient->save();

        $notification = array(
            'message' => 'Recipient: '.$request->name.' Created',
            'alert-type' =>'success',
            'duration' => 10000
        );

        return redirect()->route('warehouse.recipient')->with($notification);

    }
    public function getManufacturer(Request $request)
    {
        $data['manufacturer'] = DB::table('product_mapping')->select('manufacturer')->where('producttype',$request->producttype)->distinct()->get(["manufacturer"]);
        return response()->json($data);
    }

    public function getProductByType(Request $request)
    {
        if($request->producttype == 'EQUIPMENT'){
            $data['productdetails']=DB::table('receive_general')
            ->whereIn('brandname',function ($query) {
                            $query->select('brandname')->from('products')
                            ->Where('producttype','=','EQUIPMENT')
                            ->Where('quantityremaining','>=',1);
                        })->get();        
        }
        else{
            $data['productdetails']=DB::table('receive_general')
            ->whereIn('brandname',function ($query) {
                            $query->select('brandname')->from('products')
                            ->Where('producttype','!=','EQUIPMENT')
                            ->Where('quantityremaining','>=',1);
                        })->get();        
        }
        return response()->json($data);
    }
    public function getProductRecipientByType(Request $request)
    {
        if($request->producttype == 'EQUIPMENT'){
            $data['productdetails']=DB::table('receive_recipientstock')
            ->whereIn('brandname',function ($query) {
                            $query->select('brandname')->from('products')
                            ->Where('producttype','=','EQUIPMENT')
                            ->Where('quantityremaining','>=',1);
                        })->where('requestlocation',$request->issuerlocation)->get();        
        }
        else{
            $data['productdetails']=DB::table('receive_recipientstock')
            ->whereIn('brandname',function ($query) {
                            $query->select('brandname')->from('products')
                            ->Where('quantityremaining','>=',1)
                            ->Where('producttype','!=','EQUIPMENT');
                        })->where('requestlocation',$request->issuerlocation)->get();        
        }
        return response()->json($data);
    }
    public function getLotnoByBrandname(Request $request)
    {
            $data['productdetails']=DB::table('receive_general')
            ->where('brandname',$request->productname)
            ->where('quantityremaining','>=',1)
            ->get();     

        return response()->json($data);
    }
    public function getDistinctProductByType(Request $request)
    {
        $data['productdetails'] = DB::table('receive_general')->select('brandname')
        ->where('quantityremaining','>',0)
        ->whereIn('brandname',function ($query) {
            $query->select('brandname')->from('products')
            ->Where('producttype','!=','EQUIPMENT');
        })        ->distinct()->get(["brandname"]);
        return response()->json($data);
    }
    public function getProductByLotNo(Request $request)
    {

        $data['productdetailsbylotno']=DB::table('products_view')->where('lotno',$request->productlotno)->get();

        return response()->json($data);
    }
    public function getProductRecipientByLotNo(Request $request)
    {

        $data['productdetailsbylotno']=DB::table('products_recipient_view')
        ->where('productid',$request->productlotno)
        ->where('requestlocation',$request->issuerlocation)
        ->get();

        return response()->json($data);
    }
    public function getProductDetailsByBrandname(Request $request)
    {

        $data['productdetails']=DB::table('products')->where('brandname',$request->brandname)->get();

        return response()->json($data);
    }
    public function CompareQuantityByLotNo(Request $request)
    {

        $data['quantityinstockbylotno']=DB::table('products_view')->where('lotno',$request->productlotno)->get(["quantityremaining"]);

        return response()->json($data);
    }
    public function CompareRecipientQuantityByLotNo(Request $request)
    {

        $data['quantityinstockbylotno']=DB::table('products_recipient_view')
        ->where('productid',$request->productorderid)
        ->where('requestlocation',$request->issuerlocation)
        ->get(["quantityremaining"]);

        return response()->json($data);
    }
    public function getRecipientDetails(Request $request)
    {
        $data['recipientdetails'] = DB::table('recipients')->select('contactperson','contactpersonphonenumber','address')->where('name',$request->recipient)->get(["contactperson","contactpersonphonenumber","address"]);
        return response()->json($data);
    }
    public function getPendingOrdersCount(Request $request)
    {
        $pendingorders['count'] = DB::table('orders')
        ->select(DB::raw('cmsrefnumber as count'))
        ->where('orderstatus', '!=', 'ISSUED')
        ->groupBy('cmsrefnumber')
        ->get();   

        $pendingequipmentorders['counteq'] = DB::table('orders')
        ->select(DB::raw('cmsrefnumber as count'))
        ->where('orderstatus', '!=', 'ISSUED')
        ->where('producttype', '=', 'EQUIPMENT')
        ->groupBy('cmsrefnumber')
        ->get();

        $pendingconsumableorders['countcons'] = DB::table('orders')
        ->select(DB::raw('cmsrefnumber as count'))
        ->where('orderstatus', '!=', 'ISSUED')
        ->where('producttype', '=', 'CONSUMABLES')
        ->groupBy('cmsrefnumber')
        ->get();
                
        return response()->json($pendingorders);
    }
    public function getPendingOrdersCountEq(Request $request)
    {
        $pendingequipmentorders['count'] = DB::table('orders')
        ->select(DB::raw('cmsrefnumber as count'))
        ->where('orderstatus', '!=', 'ISSUED')
        ->where('producttype', '=', 'EQUIPMENT')
        ->groupBy('cmsrefnumber')
        ->get();

               
        return response()->json($pendingequipmentorders);
    }
    public function getPendingOrdersCountCons(Request $request)
    {
       $pendingconsumableorders['count'] = DB::table('orders')
        ->select(DB::raw('cmsrefnumber as count'))
        ->where('orderstatus', '!=', 'ISSUED')
        ->where('producttype', '=', 'CONSUMABLES')
        ->groupBy('cmsrefnumber')
        ->get();
                
        return response()->json($pendingconsumableorders);
    }

    public function GetRecipientLocation(Request $request)
    {
        $data['recipientlocation'] = DB::table('recipients')->select('name')->get(["name"]);
        return response()->json($data);
    }
    public function GetShelfByRack(Request $request)
    {
        $data['shelves'] = DB::table('racks')->select('shelf')
        ->where('status','=','Free')
        ->where('rack','=',$request->rack)
        ->get();
        return response()->json($data);
    }
    public function GetOrderDetails(Request $request){

        $data['orderdetails'] = DB::table('orders')->where('cmsrefnumber',$request->cmsrefnumber)->get();
        return response()->json($data);

    }
    
    public function IssueOrderRequest(Request $request){

        $affectedOrders['status'] = DB::table('orders')
              ->where('id', $request->productorderid)
              ->update([
                'orderstatus' => $request->orderstatus,
                'authorisedby' => $request->authorisedby,
                'dateauthorized' => $request->dateauthorized,
                'receivedby' => $request->receivedby,
                'receivedate' => $request->receivedate,
                'lotno' => $request->lotno,
                'manufacturer' => $request->manufacturer,
                'packsize' => $request->packsize,
                'weight' => $request->weight,
                'remarks' => $request->remarks,
                'quantityissued' => $request->quantity,
                'issuedby' => $request->issuedby,
                'issuedate' => $request->issuedate
            ]);

            return response()->json($affectedOrders);

    }
    public function IssueRecipientOrderRequest(Request $request){

        $affectedOrders['status'] = DB::table('orders_recipient')->insert([
            'issuerlocation' => $request->issuerlocation,
            'orderdate' => $request->orderdate,
            'siterefnumber' => $request->siterefnumber,
            'brandname' => $request->brandname,
            'requestlocation' => $request->requestlocation,
            'cmsrefnumber' => $request->cmsrefnumber,
            'orderstatus' => $request->orderstatus,
            'authorisedby' => $request->authorisedby,
            'dateauthorized' => $request->dateauthorized,
            'remarks' => $request->remarks,
            'quantity' => $request->quantity,
            'issuedby' => $request->issuedby,
            'issuedate' => $request->issuedate,
            'lotno' => $request->lotno,
            'locationcontactperson' => $request->locationcontactperson,
            'locationcontactphonenumber' => $request->locationcontactphonenumber,
            'manufacturer' => $request->manufacturer,
            'producttype' => $request->producttype
             ]);

            return response()->json($affectedOrders);

    }

    public function UpdateStockRemainingQuantity(Request $request){
        $lotno = $request->lotno;
        $quantity = $request->quantity;
        
        $quantityRemaining['status'] =  DB::statement('UPDATE receive_general SET quantityremaining = quantityremaining - ? WHERE lotno=?',[$quantity,$lotno]);

        return response()->json($quantityRemaining);
    }
    public function UpdateRecipientStockRemainingQuantity(Request $request){
        // $lotno = $request->lotno;
        $quantity = $request->quantity;
        $issuerlocation = $request->issuerlocation;
        $productorderid = $request->productorderid;
        
        $quantityRemaining =  DB::statement('UPDATE receive_recipientstock SET quantityremaining = quantityremaining - ? WHERE id=? and requestlocation=?',[$quantity,$productorderid,$issuerlocation]);

        return response()->json($quantityRemaining);
    }
    public function AuthorizeOrderRequest(Request $request){
        $authorisedby = $request->authorisedby;
        $dateauthorized = $request->dateauthorized;
        $orderstatus = $request->orderstatus;
        $quantity = $request->quantity;
        $productorderid = $request->productorderid;
        
        $authorizeorder =  DB::statement('UPDATE orders SET 
                                authorisedby = ?, 
                                dateauthorized = ?, 
                                orderstatus = ?, 
                                quantityauthorized = ?
                                WHERE id=?',[$authorisedby,$dateauthorized,$orderstatus,$quantity,$productorderid]);

        return response()->json($authorizeorder);
    }
    public function SaveOrderRequest(Request $request){

        try{
            DB::table('orders')->insert([
                'requestlocation' => $request->requestlocation,
                'siterefnumber' => $request->siterefnumber,
                'cmsrefnumber' => $request->cmsrefnumber,
                'orderdate' => $request->orderdate,
                'locationcontactperson' => $request->locationcontactperson,
                'locationcontactphonenumber' => $request->locationcontactphonenumber,
                'producttype' => $request->producttype,
                'brandname' => $request->brandname,
                'manufacturer' => $request->manufacturer,
                'packsize' => $request->packsize,
                'lotno' => $request->lotno,
                'wgtctn' => $request->wgtctn,
                'weight' => $request->weight,
                'quantity' => $request->quantity,
                'remarks' => $request->remarks,
                'orderstatus' => $request->orderstatus,
                'requestedby' => $request->requestedby,
                'requestdate' => $request->requestdate
            ]);
           
            }
        catch(QueryException $ev){
            return response()->json($ev);
        }
   
    }
    public function SaveOrderRequestConsumables(Request $request){
        $data['ordersubmitoutcome'] =  DB::table('orders')->insert([
            'requestlocation' => $request->requestlocation,
            'siterefnumber' => $request->siterefnumber,
            'cmsrefnumber' => $request->cmsrefnumber,
            'orderdate' => $request->orderdate,
            'locationcontactperson' => $request->locationcontactperson,
            'producttype' => $request->producttype,
            'brandname' => $request->brandname,
            'quantity' => $request->quantity,
            'orderstatus' => $request->orderstatus,
            'requestedby' => $request->requestedby,
            'requestdate' => $request->requestdate
        ]);

        return response()->json($data);
}
public function ReceiveProductRequest(Request $request){
    $data['createproductoutcome'] = DB::table('receive_general')->insert([
        'brandname' => $request->brandname,
        'awb_number' => $request->awb_number,
        'shipmentdate' => $request->shipmentdate,
        'source' => $request->source,
        'coldchaintemperature' => $request->coldchaintemperature,
        'receivedby' => $request->receivedby,
        'dataentryby' => $request->receivedby,
        'datereceived' => $request->datereceived,
        'deliveredby' => $request->deliveredby,
        'suppliedby' => $request->source,
        'deliverydate' => $request->deliverydate,
        'manufacturer' => $request->manufacturer,
        'packsize' => $request->packsize,
        'qtypercarton' => $request->qtypercarton,
        'lotno' => $request->lotno,
        'expirydate' => $request->expirydate,
        'quantity' => $request->quantity,
        'quantityremaining' => $request->quantityremaining,
        'cartons' => $request->cartons,
        'weight' => $request->weight,
        'remark' => $request->remark,
    ]);

    return response()->json($data);
}

public function DeleteSupplier(Request $request){

    $email = $request->email;

    $deleteresponse = DB::table('suppliers')->where('email', '=', $email)->delete();

    return response()->json($deleteresponse);

}

public function CheckCmsrefnumberExists(Request $request){
    $cmsrefnumber = $request->cmsrefnumber;
    $data["cmsrefnumberexists"] = DB::table('orders')->select('cmsrefnumber')->where('cmsrefnumber', $cmsrefnumber)->get();
    return response()->json($data);

}
public function DeleteRecipient(Request $request){

    $email = $request->email;

    $deleteresponse = DB::table('recipients')->where('contactpersonemail', '=', $email)->delete();

    return response()->json($deleteresponse);

}


public function GetDashboardNumbers(Request $request){

    $email = $request->email;

    $data['totalcommodity'] = DB::table('receive_general')->sum('quantity');
    $data['totalcommodityremaining'] = DB::table('receive_general')->sum('quantityremaining');
    $data['neworders'] = DB::table('orders')->where('orderstatus','=','ORDERED')->sum('quantity');
    $data['supplies'] = DB::table('receive_general')->limit(5)->orderBy('id', 'desc')->get();
    $data['suppliesinflow'] = DB::table('receive_general')->select(DB::raw('SUM(CASE WHEN MONTH(datereceived)=1 AND YEAR(datereceived) = YEAR(CURDATE()) THEN quantity ELSE 0 END) AS jan_inflow,
    SUM(CASE WHEN MONTH(datereceived)=2 AND YEAR(datereceived) = YEAR(CURDATE()) THEN quantity ELSE 0 END) AS feb_inflow,
    SUM(CASE WHEN MONTH(datereceived)=3 AND YEAR(datereceived) = YEAR(CURDATE()) THEN quantity ELSE 0 END) AS mar_inflow,
    SUM(CASE WHEN MONTH(datereceived)=4 AND YEAR(datereceived) = YEAR(CURDATE()) THEN quantity ELSE 0 END) AS apr_inflow,
    SUM(CASE WHEN MONTH(datereceived)=5 AND YEAR(datereceived) = YEAR(CURDATE()) THEN quantity ELSE 0 END) AS may_inflow,
    SUM(CASE WHEN MONTH(datereceived)=6 AND YEAR(datereceived) = YEAR(CURDATE()) THEN quantity ELSE 0 END) AS jun_inflow,
    SUM(CASE WHEN MONTH(datereceived)=7 AND YEAR(datereceived) = YEAR(CURDATE()) THEN quantity ELSE 0 END) AS jul_inflow,
    SUM(CASE WHEN MONTH(datereceived)=8 AND YEAR(datereceived) = YEAR(CURDATE()) THEN quantity ELSE 0 END) AS aug_inflow,
    SUM(CASE WHEN MONTH(datereceived)=9 AND YEAR(datereceived) = YEAR(CURDATE()) THEN quantity ELSE 0 END) AS sep_inflow,
    SUM(CASE WHEN MONTH(datereceived)=10 AND YEAR(datereceived) = YEAR(CURDATE()) THEN quantity ELSE 0 END) AS oct_inflow,
    SUM(CASE WHEN MONTH(datereceived)=11 AND YEAR(datereceived) = YEAR(CURDATE()) THEN quantity ELSE 0 END) AS nov_inflow,
    SUM(CASE WHEN MONTH(datereceived)=12 AND YEAR(datereceived) = YEAR(CURDATE()) THEN quantity ELSE 0 END) AS dec_inflow'))->get();
    $data['suppliesoutflow'] = DB::table('orders')->select(DB::raw('SUM(CASE WHEN MONTH(issuedate)=1 AND YEAR(issuedate) = YEAR(CURDATE()) THEN quantityissued ELSE 0 END) AS jan_outflow,
    SUM(CASE WHEN MONTH(issuedate)=2 AND YEAR(issuedate) = YEAR(CURDATE()) THEN quantityissued ELSE 0 END) AS feb_outflow,
    SUM(CASE WHEN MONTH(issuedate)=3 AND YEAR(issuedate) = YEAR(CURDATE()) THEN quantityissued ELSE 0 END) AS mar_outflow,
    SUM(CASE WHEN MONTH(issuedate)=4 AND YEAR(issuedate) = YEAR(CURDATE()) THEN quantityissued ELSE 0 END) AS apr_outflow,
    SUM(CASE WHEN MONTH(issuedate)=5 AND YEAR(issuedate) = YEAR(CURDATE()) THEN quantityissued ELSE 0 END) AS may_outflow,
    SUM(CASE WHEN MONTH(issuedate)=6 AND YEAR(issuedate) = YEAR(CURDATE()) THEN quantityissued ELSE 0 END) AS jun_outflow,
    SUM(CASE WHEN MONTH(issuedate)=7 AND YEAR(issuedate) = YEAR(CURDATE()) THEN quantityissued ELSE 0 END) AS jul_outflow,
    SUM(CASE WHEN MONTH(issuedate)=8 AND YEAR(issuedate) = YEAR(CURDATE()) THEN quantityissued ELSE 0 END) AS aug_outflow,
    SUM(CASE WHEN MONTH(issuedate)=9 AND YEAR(issuedate) = YEAR(CURDATE()) THEN quantityissued ELSE 0 END) AS sep_outflow,
    SUM(CASE WHEN MONTH(issuedate)=10 AND YEAR(issuedate) = YEAR(CURDATE()) THEN quantityissued ELSE 0 END) AS oct_outflow,
    SUM(CASE WHEN MONTH(issuedate)=11 AND YEAR(issuedate) = YEAR(CURDATE()) THEN quantityissued ELSE 0 END) AS nov_outflow,
    SUM(CASE WHEN MONTH(issuedate)=12 AND YEAR(issuedate) = YEAR(CURDATE()) THEN quantityissued ELSE 0 END) AS dec_outflow
    '))->get();

    $data['topsuppliers'] = DB::table('receive_general')->select(DB::raw('suppliedby, count(id) as supplies'))->groupBy('suppliedby')->limit(5)->orderBy('supplies', 'desc')->get();
    $data['total_supplier_count'] = DB::table('receive_general')->select(DB::raw('count(id) as total_supplier_count'))->get();
    $data['toprecipient'] = DB::table('orders')->select(DB::raw('requestlocation, count(id) as recipients'))->where('orderstatus','=','ISSUED')->groupBy('requestlocation')->limit(5)->orderBy('recipients', 'desc')->get();
    $data['total_recipient_count'] = DB::table('orders')->select(DB::raw('count(id) as total_recipient_count'))->where('orderstatus','=','ISSUED')->get();
    $pendingorders = DB::table('orders')
                                ->select(DB::raw('cmsrefnumber,count(id) as pendingorders'))
                                ->where('orderstatus','=','ORDERED')
                                ->where('requestlocation','=',$request->location)
                                ->groupBy('cmsrefnumber')
                                ->get();
    $issuedorders = DB::table('orders')
                                ->select(DB::raw('cmsrefnumber,count(id) as pendingorders'))
                                ->where('orderstatus','=','ISSUED')
                                ->where('requestlocation','=',$request->location)
                                ->groupBy('cmsrefnumber')
                                ->get();
    $data['pendingorderscount'] = $pendingorders->count();
    $data['order_requests_issued'] = $issuedorders->count();
                                return response()->json($data);

}
public function CreateRecipientStock(Request $request){

    $RecipientStock = new RecipientStock();
    $RecipientStock->cmsrefnumber = $request->cmsrefnumber;
    $RecipientStock->brandname = $request->brandname;
    $RecipientStock->requestlocation = $request->requestlocation;
    $RecipientStock->quantityreceived = $request->quantity;
    $RecipientStock->quantityremaining = $request->quantity;
    $RecipientStock->lotno = $request->lotno;
    $RecipientStock->receivedate = $request->issuedate;
    $RecipientStock->expirydate = $request->expirydate;

    $data['createrecipientstockoutcome'] = $RecipientStock->save();

    return response()->json($data);
    }
    public function CreateFinalRecipientStock(Request $request){
        $data['createrecipientstockoutcome'] = DB::table('final_recipientstock')->insert([
            'issuerlocation' => $request->issuerlocation,
            'quantityreceived' => $request->quantity,
            'brandname' => $request->brandname,
            'requestlocation' => $request->requestlocation,
            'cmsrefnumber' => $request->cmsrefnumber,
            'issuedate' => $request->issuedate,
            'lotno' => $request->lotno
             ]);    
   
        return response()->json($data);
        }
    public function CommitCommodityUpdate(Request $request){
        $updateStat['status'] = DB::table('receive_general')
              ->where('lotno', $request->lotno)
              ->update([
                'rackno' => $request->rack,
                'cabinetno' => $request->shelf,
                'threshold' => $request->threshold         
            ]);   
   
        return response()->json($updateStat);
        }
        public function UpdateShelf(Request $request){
            $updateRack['status'] = DB::table('racks')
            ->where('shelf', $request->shelf)
            ->where('rack', $request->rack)
            ->update([
                    'status' => 'In-Use'  
                ]);   
       
            return response()->json($updateRack);
            }     
    public function CheckRemainingQuantityZero(Request $request){
        $data = DB::table('receive_general')->where('lotno',$request->lotno)->get();

        return response()->json($data);

    }
    public function UnlockShelfCabinet(Request $request){
        $data['status'] = DB::table('racks')
              ->where('shelf', $request->shelfnumber)
              ->update([
                'status' => 'Free'
            ]);
        return response()->json($data);

    }
}
