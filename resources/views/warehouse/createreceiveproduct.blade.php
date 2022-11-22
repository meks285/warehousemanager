@extends('warehouse.warehouse_master')
@section('warehouse-section')
<!-- BEGIN: Import JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- END: Import JQuery -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
<style id="APIN SHIPMENT (002)_23388_Styles">
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.xl1523388
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6323388
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6423388
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6523388
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6623388
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6723388
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6823388
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6923388
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl7023388
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl7123388
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	background:white;
	mso-pattern:black none;
	white-space:nowrap;}
.xl7223388
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:right;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	background:red;
	mso-pattern:black none;
	white-space:nowrap;}
.xl7323388
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
-->
</style>

<!-- BEGIN: Content -->
        <div class="content">
            <div class="grid grid-cols-12 gap-6 mt-5 relative">
                <div class="intro-y col-span-12 lg:col-span-8">
                    <!-- BEGIN: Display Information -->
                    <div class="intro-y box lg:mt-5">
                        <div class="p-5" style="width: 67%">
                            @if($errors->any())
                                <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                                    Errors detected ...
                                </div>
                                <ul class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                                    @foreach($errors->all() as $error)
                                        <li>
                                            {{$error}}
                                        </li>

                                    @endforeach

                                </ul>
                            @endif
                        </div>                         
<form id="receiveproductform" method="POST">
    @csrf
<div id="APIN SHIPMENT (002)_23388" align=center x:publishsource="Excel">

<table border=0 cellpadding=0 cellspacing=0 width=1074 style='border-collapse:
 collapse;table-layout:fixed;width:807pt'>
 <col width=27 style='mso-width-source:userset;mso-width-alt:987;width:20pt'>
 <col class=xl7323388 width=263 style='mso-width-source:userset;mso-width-alt:
 9618;width:197pt'>
 <col class=xl7323388 width=124 style='mso-width-source:userset;mso-width-alt:
 4534;width:93pt'>
 <col width=62 style='mso-width-source:userset;mso-width-alt:2267;width:47pt'>
 <col width=65 style='mso-width-source:userset;mso-width-alt:2377;width:49pt'>
 <col width=141 style='mso-width-source:userset;mso-width-alt:5156;width:106pt'>
 <col width=133 style='mso-width-source:userset;mso-width-alt:4864;width:100pt'>
 <col width=66 style='mso-width-source:userset;mso-width-alt:2413;width:50pt'>
 <col width=69 style='mso-width-source:userset;mso-width-alt:2523;width:52pt'>
 <col width=60 style='mso-width-source:userset;mso-width-alt:2194;width:45pt'>
 <col width=64 style='mso-width-source:userset;mso-width-alt:2340;width:48pt'>
 <tr height=20 style='height:15.0pt'>
  <td colspan=11 rowspan=3 height=65 width=1074 style='height:48.75pt;
  width:807pt' align=left valign=top><!--[if gte vml 1]><![endif]--><![if !vml]><span style='mso-ignore:vglayout;
  position:absolute;z-index:1;margin-left:916px;margin-top:11px;width:55px;
  height:39px'><img width=55 height=39
  src="{{ asset('logo/logo.png') }}"
  alt="APIN Logo" v:shapes="Picture_x0020_2"></span><![endif]><span
  style='mso-ignore:vglayout2'>
  <table cellpadding=0 cellspacing=0>
   <tr>
    <td colspan=11 rowspan=3 height=65 class=xl6323388 width=1074
    style='height:48.75pt;width:807pt'>APIN SHIPMENT RECEIPT FORM<span
    style='mso-spacerun:yes'></span></td>
   </tr>
  </table>
  </span></td>
 </tr>
 <tr height=1 style='height:1.0pt'>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td colspan=11 height=21 class=xl6523388>&nbsp;</td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td colspan=11 height=21 class=xl6523388 style='border-right:.5pt solid black; height:15.75pt'>DATE: &nbsp; <input id="shipmentdate" name="shipmentdate" type="date" class="input" /></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td colspan=11 height=21 class=xl6523388 style='border-right:.5pt solid black;  height:15.75pt'>SOURCE:&nbsp; 
  <select id="source" name="source" data-search="true" class="tail-select">
        <option disabled selected ></option>
        @foreach($supplier as $supplier)
            <option value="{{ $supplier->name }}">{{ $supplier->name}}</option>
        @endforeach
    </select>  </td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td colspan=11 height=21 class=xl6523388 style='border-right:.5pt solid black;
  height:15.75pt'>AWB NUMBER: &nbsp; <input id="awb_number" name="awb_number" type="text" class="input" /></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td colspan=11 height=21 class=xl6423388 style='height:15.75pt'>TEMPERATURE
  FOR COLD-CHAIN:&nbsp; <input id="coldchaintemperature" name="coldchaintemperature" type="text" class="input" /></td>
 </tr>
 <tr height=42 style='height:31.5pt'>
  <td height=42 class=xl6823388 style='height:31.5pt;border-top:none'>S/N</td>
  <td class=xl6923388 width=263 style='border-top:none;border-left:none; width:197pt'>PRODUCT</td>
  <td class=xl6923388 width=124 style='border-top:none;border-left:none; width:93pt'>MANUFACTURER</td>
  <td class=xl6923388 width=62 style='border-top:none;border-left:none; width:47pt'>PACK SIZE</td>
  <td class=xl6923388 width=65 style='border-top:none;border-left:none; width:49pt'>QTY PER CARTON</td>
  <td class=xl6923388 width=141 style='border-top:none;border-left:none; width:106pt'>LOT NO</td>
  <td class=xl6923388 width=133 style='border-top:none;border-left:none; width:100pt'>EXPIRY</td>
  <td class=xl6923388 width=66 style='border-top:none;border-left:none; width:50pt'>QTY<span style='mso-spacerun:yes'> </span></td>
  <td class=xl6923388 width=69 style='border-top:none;border-left:none; width:52pt'>CARTONS</td>
  <td class=xl6923388 width=60 style='border-top:none;border-left:none; width:45pt'>WEIGHT</td>
  <td class=xl7023388 width=64 style='border-left:none;width:48pt'>REMARK</td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6823388 align=right style='height:15.75pt;border-top: none'>1</td>
  <td height=21 class=xl6923388 width=263 style='border-top:none;border-left:none; width:197pt'>
  <select id="brandname0" name="brandname[]" data-search="true" class="tail-select w-full">
  <option selected > </option>
        @foreach($brandname as $product)
            <option value="{{ $product->brandname }}">{{ $product->brandname}}</option>
        @endforeach
    </select>  
</td>
  <td height=21 class=xl6923388 width=124 style='border-top:none;border-left:none; width:93pt'><input id="manufacturer0" name="manufacturer[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="packsize0" name="packsize[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="qtypercarton0" name="qtypercarton[]" type="text" class="input w-full "></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="lotno0" name="lotno[]" type="text" class="input w-full uppercase"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="expirydate0" name="expirydate[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="quantity0" name="quantity[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="cartons0" name="cartons[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="weight0" name="weight[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-left:none'><input id="remark0" name="remark[]" type="text" class="input w-full "></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6823388 align=right style='height:15.75pt;border-top: none'>2</td>
  <td height=21 class=xl6923388 width=263 style='border-top:none;border-left:none; width:197pt'>
  <select id="brandname1" name="brandname[]" data-search="true" class="tail-select w-full">
  <option selected > </option>
        @foreach($brandname as $product)
            <option value="{{ $product->brandname }}">{{ $product->brandname}}</option>
        @endforeach
    </select>  
</td>
  <td height=21 class=xl6923388 width=124 style='border-top:none;border-left:none; width:93pt'><input id="manufacturer1" name="manufacturer[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="packsize1" name="packsize[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="qtypercarton1" name="qtypercarton[]" type="text" class="input w-full "></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="lotno1" name="lotno[]" type="text" class="input w-full uppercase"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="expirydate1" name="expirydate[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="quantity1" name="quantity[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="cartons1" name="cartons[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="weight1" name="weight[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-left:none'><input id="remark1" name="remark[]" type="text" class="input w-full "></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6823388 align=right style='height:15.75pt;border-top: none'>3</td>
  <td height=21 class=xl6923388 width=263 style='border-top:none;border-left:none; width:197pt'>
  <select id="brandname2" name="brandname[]" data-search="true" class="tail-select w-full">
  <option selected > </option>
        @foreach($brandname as $product)
            <option value="{{ $product->brandname }}">{{ $product->brandname}}</option>
        @endforeach
    </select>  
</td>
  <td height=21 class=xl6923388 width=124 style='border-top:none;border-left:none; width:93pt'><input id="manufacturer2" name="manufacturer[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="packsize2" name="packsize[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="qtypercarton2" name="qtypercarton[]" type="text" class="input w-full "></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="lotno2" name="lotno[]" type="text" class="input w-full uppercase"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="expirydate2" name="expirydate[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="quantity2" name="quantity[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="cartons2" name="cartons[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="weight2" name="weight[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-left:none'><input id="remark2" name="remark[]" type="text" class="input w-full "></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6823388 align=right style='height:15.75pt;border-top: none'>4</td>
  <td height=21 class=xl6923388 width=263 style='border-top:none;border-left:none; width:197pt'>
  <select id="brandname3" name="brandname[]" data-search="true" class="tail-select w-full">
  <option selected > </option>
        @foreach($brandname as $product)
            <option value="{{ $product->brandname }}">{{ $product->brandname}}</option>
        @endforeach
    </select>  
</td>
  <td height=21 class=xl6923388 width=124 style='border-top:none;border-left:none; width:93pt'><input id="manufacturer3" name="manufacturer[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="packsize3" name="packsize[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="qtypercarton3" name="qtypercarton[]" type="text" class="input w-full "></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="lotno3" name="lotno[]" type="text" class="input w-full uppercase"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="expirydate3" name="expirydate[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="quantity3" name="quantity[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="cartons3" name="cartons[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="weight3" name="weight[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-left:none'><input id="remark3" name="remark[]" type="text" class="input w-full "></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6823388 align=right style='height:15.75pt;border-top: none'>5</td>
  <td height=21 class=xl6923388 width=263 style='border-top:none;border-left:none; width:197pt'>
  <select id="brandname4" name="brandname[]" data-search="true" class="tail-select w-full">
  <option selected > </option>
        @foreach($brandname as $product)
            <option value="{{ $product->brandname }}">{{ $product->brandname}}</option>
        @endforeach
    </select>  
</td>
  <td height=21 class=xl6923388 width=124 style='border-top:none;border-left:none; width:93pt'><input id="manufacturer4" name="manufacturer[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="packsize4" name="packsize[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="qtypercarton4" name="qtypercarton[]" type="text" class="input w-full "></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="lotno4" name="lotno[]" type="text" class="input w-full uppercase"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="expirydate4" name="expirydate[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="quantity4" name="quantity[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="cartons4" name="cartons[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="weight4" name="weight[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-left:none'><input id="remark4" name="remark[]" type="text" class="input w-full "></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6823388 align=right style='height:15.75pt;border-top: none'>6</td>
  <td height=21 class=xl6923388 width=263 style='border-top:none;border-left:none; width:197pt'>
  <select id="brandname5" name="brandname[]" data-search="true" class="tail-select w-full">
  <option selected > </option>
        @foreach($brandname as $product)
            <option value="{{ $product->brandname }}">{{ $product->brandname}}</option>
        @endforeach
    </select>  
</td>
  <td height=21 class=xl6923388 width=124 style='border-top:none;border-left:none; width:93pt'><input id="manufacturer5" name="manufacturer[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="packsize5" name="packsize[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="qtypercarton5" name="qtypercarton[]" type="text" class="input w-full "></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="lotno5" name="lotno[]" type="text" class="input w-full uppercase"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="expirydate5" name="expirydate[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="quantity5" name="quantity[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="cartons5" name="cartons[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="weight5" name="weight[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-left:none'><input id="remark5" name="remark[]" type="text" class="input w-full "></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6823388 align=right style='height:15.75pt;border-top: none'>7</td>
  <td height=21 class=xl6923388 width=263 style='border-top:none;border-left:none; width:197pt'>
  <select id="brandname6" name="brandname[]" data-search="true" class="tail-select w-full">
  <option selected > </option>
        @foreach($brandname as $product)
            <option value="{{ $product->brandname }}">{{ $product->brandname}}</option>
        @endforeach
    </select>  
</td>
  <td height=21 class=xl6923388 width=124 style='border-top:none;border-left:none; width:93pt'><input id="manufacturer6" name="manufacturer[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="packsize6" name="packsize[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="qtypercarton6" name="qtypercarton[]" type="text" class="input w-full "></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="lotno6" name="lotno[]" type="text" class="input w-full uppercase"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="expirydate6" name="expirydate[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="quantity6" name="quantity[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="cartons6" name="cartons[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="weight6" name="weight[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-left:none'><input id="remark6" name="remark[]" type="text" class="input w-full "></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6823388 align=right style='height:15.75pt;border-top: none'>8</td>
  <td height=21 class=xl6923388 width=263 style='border-top:none;border-left:none; width:197pt'>
  <select id="brandname7" name="brandname[]" data-search="true" class="tail-select w-full">
  <option selected > </option>
        @foreach($brandname as $product)
            <option value="{{ $product->brandname }}">{{ $product->brandname}}</option>
        @endforeach
    </select>  
</td>
  <td height=21 class=xl6923388 width=124 style='border-top:none;border-left:none; width:93pt'><input id="manufacturer7" name="manufacturer[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="packsize7" name="packsize[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="qtypercarton7" name="qtypercarton[]" type="text" class="input w-full "></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="lotno7" name="lotno[]" type="text" class="input w-full uppercase"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="expirydate7" name="expirydate[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="quantity7" name="quantity[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="cartons7" name="cartons[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="weight7" name="weight[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-left:none'><input id="remark7" name="remark[]" type="text" class="input w-full "></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6823388 align=right style='height:15.75pt;border-top: none'>9</td>
  <td height=21 class=xl6923388 width=263 style='border-top:none;border-left:none; width:197pt'>
  <select id="brandname8" name="brandname[]" data-search="true" class="tail-select w-full">
  <option selected > </option>
        @foreach($brandname as $product)
            <option value="{{ $product->brandname }}">{{ $product->brandname}}</option>
        @endforeach
    </select>  
</td>
  <td height=21 class=xl6923388 width=124 style='border-top:none;border-left:none; width:93pt'><input id="manufacturer8" name="manufacturer[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="packsize8" name="packsize[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="qtypercarton8" name="qtypercarton[]" type="text" class="input w-full "></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="lotno8" name="lotno[]" type="text" class="input w-full uppercase"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="expirydate8" name="expirydate[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="quantity8" name="quantity[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="cartons8" name="cartons[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="weight8" name="weight[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-left:none'><input id="remark8" name="remark[]" type="text" class="input w-full "></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6823388 align=right style='height:15.75pt;border-top: none'>10</td>
  <td height=21 class=xl6923388 width=263 style='border-top:none;border-left:none; width:197pt'>
  <select id="brandname9" name="brandname[]" data-search="true" class="tail-select w-full">
  <option selected > </option>
        @foreach($brandname as $product)
            <option value="{{ $product->brandname }}">{{ $product->brandname}}</option>
        @endforeach
    </select>  
</td>
  <td height=21 class=xl6923388 width=124 style='border-top:none;border-left:none; width:93pt'><input id="manufacturer9" name="manufacturer[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="packsize9" name="packsize[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="qtypercarton9" name="qtypercarton[]" type="text" class="input w-full "></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="lotno9" name="lotno[]" type="text" class="input w-full uppercase"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="expirydate9" name="expirydate[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="quantity9" name="quantity[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="cartons9" name="cartons[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="weight9" name="weight[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-left:none'><input id="remark9" name="remark[]" type="text" class="input w-full "></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6823388 align=right style='height:15.75pt;border-top: none'>11</td>
  <td height=21 class=xl6923388 width=263 style='border-top:none;border-left:none; width:197pt'>
  <select id="brandname10" name="brandname[]" data-search="true" class="tail-select w-full">
  <option selected > </option>
        @foreach($brandname as $product)
            <option value="{{ $product->brandname }}">{{ $product->brandname}}</option>
        @endforeach
    </select>  
</td>
  <td height=21 class=xl6923388 width=124 style='border-top:none;border-left:none; width:93pt'><input id="manufacturer10" name="manufacturer[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="packsize10" name="packsize[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="qtypercarton10" name="qtypercarton[]" type="text" class="input w-full "></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="lotno10" name="lotno[]" type="text" class="input w-full uppercase"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="expirydate10" name="expirydate[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="quantity10" name="quantity[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="cartons10" name="cartons[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="weight10" name="weight[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-left:none'><input id="remark10" name="remark[]" type="text" class="input w-full "></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6823388 align=right style='height:15.75pt;border-top: none'>12</td>
  <td height=21 class=xl6923388 width=263 style='border-top:none;border-left:none; width:197pt'>
  <select id="brandname11" name="brandname[]" data-search="true" class="tail-select w-full">
  <option selected > </option>
        @foreach($brandname as $product)
            <option value="{{ $product->brandname }}">{{ $product->brandname}}</option>
        @endforeach
    </select>  
</td>
  <td height=21 class=xl6923388 width=124 style='border-top:none;border-left:none; width:93pt'><input id="manufacturer11" name="manufacturer[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="packsize11" name="packsize[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="qtypercarton11" name="qtypercarton[]" type="text" class="input w-full "></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="lotno11" name="lotno[]" type="text" class="input w-full uppercase"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="expirydate11" name="expirydate[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="quantity11" name="quantity[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="cartons11" name="cartons[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="weight11" name="weight[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-left:none'><input id="remark11" name="remark[]" type="text" class="input w-full "></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6823388 align=right style='height:15.75pt;border-top: none'>13</td>
  <td height=21 class=xl6923388 width=263 style='border-top:none;border-left:none; width:197pt'>
  <select id="brandname12" name="brandname[]" data-search="true" class="tail-select w-full">
  <option selected > </option>
        @foreach($brandname as $product)
            <option value="{{ $product->brandname }}">{{ $product->brandname}}</option>
        @endforeach
    </select>  
</td>
  <td height=21 class=xl6923388 width=124 style='border-top:none;border-left:none; width:93pt'><input id="manufacturer12" name="manufacturer[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="packsize12" name="packsize[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="qtypercarton12" name="qtypercarton[]" type="text" class="input w-full "></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="lotno12" name="lotno[]" type="text" class="input w-full uppercase"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="expirydate12" name="expirydate[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="quantity12" name="quantity[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="cartons12" name="cartons[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="weight12" name="weight[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-left:none'><input id="remark12" name="remark[]" type="text" class="input w-full "></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6823388 align=right style='height:15.75pt;border-top: none'>14</td>
  <td height=21 class=xl6923388 width=263 style='border-top:none;border-left:none; width:197pt'>
  <select id="brandname13" name="brandname[]" data-search="true" class="tail-select w-full">
  <option selected > </option>
        @foreach($brandname as $product)
            <option value="{{ $product->brandname }}">{{ $product->brandname}}</option>
        @endforeach
    </select>  
</td>
  <td height=21 class=xl6923388 width=124 style='border-top:none;border-left:none; width:93pt'><input id="manufacturer13" name="manufacturer[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="packsize13" name="packsize[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="qtypercarton13" name="qtypercarton[]" type="text" class="input w-full "></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="lotno13" name="lotno[]" type="text" class="input w-full uppercase"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="expirydate13" name="expirydate[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="quantity13" name="quantity[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="cartons13" name="cartons[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="weight13" name="weight[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-left:none'><input id="remark13" name="remark[]" type="text" class="input w-full "></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6823388 align=right style='height:15.75pt;border-top: none'>15</td>
  <td height=21 class=xl6923388 width=263 style='border-top:none;border-left:none; width:197pt'>
  <select id="brandname14" name="brandname[]" data-search="true" class="tail-select w-full">
  <option selected > </option>
        @foreach($brandname as $product)
            <option value="{{ $product->brandname }}">{{ $product->brandname}}</option>
        @endforeach
    </select>  
</td>
  <td height=21 class=xl6923388 width=124 style='border-top:none;border-left:none; width:93pt'><input id="manufacturer14" name="manufacturer[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="packsize14" name="packsize[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="qtypercarton14" name="qtypercarton[]" type="text" class="input w-full "></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="lotno14" name="lotno[]" type="text" class="input w-full uppercase"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="expirydate14" name="expirydate[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="quantity14" name="quantity[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="cartons14" name="cartons[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="weight14" name="weight[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-left:none'><input id="remark14" name="remark[]" type="text" class="input w-full "></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6823388 align=right style='height:15.75pt;border-top: none'>16</td>
  <td height=21 class=xl6923388 width=263 style='border-top:none;border-left:none; width:197pt'>
  <select id="brandname15" name="brandname[]" data-search="true" class="tail-select w-full">
  <option selected > </option>
        @foreach($brandname as $product)
            <option value="{{ $product->brandname }}">{{ $product->brandname}}</option>
        @endforeach
    </select>  
</td>
  <td height=21 class=xl6923388 width=124 style='border-top:none;border-left:none; width:93pt'><input id="manufacturer15" name="manufacturer[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="packsize15" name="packsize[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="qtypercarton15" name="qtypercarton[]" type="text" class="input w-full "></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="lotno15" name="lotno[]" type="text" class="input w-full uppercase"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="expirydate15" name="expirydate[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="quantity15" name="quantity[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="cartons15" name="cartons[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="weight15" name="weight[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-left:none'><input id="remark15" name="remark[]" type="text" class="input w-full "></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6823388 align=right style='height:15.75pt;border-top: none'>17</td>
  <td height=21 class=xl6923388 width=263 style='border-top:none;border-left:none; width:197pt'>
  <select id="brandname16" name="brandname[]" data-search="true" class="tail-select w-full">
  <option selected > </option>
        @foreach($brandname as $product)
            <option value="{{ $product->brandname }}">{{ $product->brandname}}</option>
        @endforeach
    </select>  
</td>
  <td height=21 class=xl6923388 width=124 style='border-top:none;border-left:none; width:93pt'><input id="manufacturer16" name="manufacturer[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="packsize16" name="packsize[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="qtypercarton16" name="qtypercarton[]" type="text" class="input w-full "></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="lotno16" name="lotno[]" type="text" class="input w-full uppercase"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="expirydate16" name="expirydate[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="quantity16" name="quantity[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="cartons16" name="cartons[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="weight16" name="weight[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-left:none'><input id="remark16" name="remark[]" type="text" class="input w-full "></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6823388 align=right style='height:15.75pt;border-top: none'>18</td>
  <td height=21 class=xl6923388 width=263 style='border-top:none;border-left:none; width:197pt'>
  <select id="brandname17" name="brandname[]" data-search="true" class="tail-select w-full">
  <option selected > </option>
        @foreach($brandname as $product)
            <option value="{{ $product->brandname }}">{{ $product->brandname}}</option>
        @endforeach
    </select>  
</td>
  <td height=21 class=xl6923388 width=124 style='border-top:none;border-left:none; width:93pt'><input id="manufacturer17" name="manufacturer[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="packsize17" name="packsize[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="qtypercarton17" name="qtypercarton[]" type="text" class="input w-full "></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="lotno17" name="lotno[]" type="text" class="input w-full uppercase"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="expirydate17" name="expirydate[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="quantity17" name="quantity[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="cartons17" name="cartons[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="weight17" name="weight[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-left:none'><input id="remark17" name="remark[]" type="text" class="input w-full "></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6823388 align=right style='height:15.75pt;border-top: none'>19</td>
  <td height=21 class=xl6923388 width=263 style='border-top:none;border-left:none; width:197pt'>
  <select id="brandname18" name="brandname[]" data-search="true" class="tail-select w-full">
  <option selected > </option>
        @foreach($brandname as $product)
            <option value="{{ $product->brandname }}">{{ $product->brandname}}</option>
        @endforeach
    </select>  
</td>
  <td height=21 class=xl6923388 width=124 style='border-top:none;border-left:none; width:93pt'><input id="manufacturer18" name="manufacturer[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="packsize18" name="packsize[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="qtypercarton18" name="qtypercarton[]" type="text" class="input w-full "></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="lotno18" name="lotno[]" type="text" class="input w-full uppercase"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="expirydate18" name="expirydate[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="quantity18" name="quantity[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="cartons18" name="cartons[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="weight18" name="weight[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-left:none'><input id="remark18" name="remark[]" type="text" class="input w-full "></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6823388 align=right style='height:15.75pt;border-top: none'>20</td>
  <td height=21 class=xl6923388 width=263 style='border-top:none;border-left:none; width:197pt'>
  <select id="brandname19" name="brandname[]" data-search="true" class="tail-select w-full">
  <option selected > </option>
        @foreach($brandname as $product)
            <option value="{{ $product->brandname }}">{{ $product->brandname}}</option>
        @endforeach
    </select>  
</td>
  <td height=21 class=xl6923388 width=124 style='border-top:none;border-left:none; width:93pt'><input id="manufacturer19" name="manufacturer[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="packsize19" name="packsize[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="qtypercarton19" name="qtypercarton[]" type="text" class="input w-full "></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="lotno19" name="lotno[]" type="text" class="input w-full uppercase"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="expirydate19" name="expirydate[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="quantity19" name="quantity[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="cartons19" name="cartons[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-top:none;border-left:none'><input id="weight19" name="weight[]" type="text" class="input w-full"></td>
  <td height=21 class=xl6823388 style='border-left:none'><input id="remark19" name="remark[]" type="text" class="input w-full "></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td colspan=8 height=21 class=xl7223388 style='height:15.75pt'>TOTAL NO. OF CARTONS RECEIVED</td>
  <td class=xl6823388 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6823388 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6823388 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td colspan=3 height=21 class=xl6423388 style='height:15.75pt'>RECEIVED BY:</td>
  <td colspan=8 class=xl6423388 style='border-left:none'>DELIVERED BY:</td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td colspan=3 height=21 class=xl6423388 style='height:15.75pt'>NAME: <input id="receivedby" name="receivedby" value="{{ Auth::User()->name }}" type="text" readonly /></td>
  <td colspan=8 class=xl6423388 style='border-left:none'>NAME: <input id="deliveredby" name="deliveredby" type="text" /></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td colspan=3 height=21 class=xl6423388 style='height:15.75pt'>SIGNATURE:</td>
  <td colspan=8 class=xl6423388 style='border-left:none'>SIGNATURE:</td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td colspan=3 height=21 class=xl6423388 style='height:15.75pt'>DATE: <input id="datereceived" name="datereceived" type="date" /></td>
  <td colspan=8 class=xl6423388 style='border-left:none'>DATE: <input id="deliverydate" name="deliverydate" type="date" /></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=27 style='width:20pt'></td>
  <td width=263 style='width:197pt'></td>
  <td width=124 style='width:93pt'></td>
  <td width=62 style='width:47pt'></td>
  <td width=65 style='width:49pt'></td>
  <td width=141 style='width:106pt'></td>
  <td width=133 style='width:100pt'></td>
  <td width=66 style='width:50pt'></td>
  <td width=69 style='width:52pt'></td>
  <td width=60 style='width:45pt'></td>
  <td width=64 style='width:48pt'></td>
 </tr>
 <![endif]>
</table>
<button type="submit" id="receiveproduct" class="button w-20 bg-theme-1 text-white mt-3">Save</button>
</div>
</form>
</div>
                    <!-- END: Display Information -->
                </div>
                <div class="intro-y col-span-12 lg:col-span-4 relative inset-0 w-full min-h-screen lg:fixed lg:w-full/12" style="height: 1320px;">
                    <!-- BEGIN: Table Section Information -->
                    <div id="productlistdiv" class="intro-y box lg:mt-5" style="overflow: auto; height: 1320px">
                        <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                            <h2 class="font-medium text-base mr-auto">
                                Received Products | In-Flow
                            </h2>
                        </div>
                        <div class="p-5" style="width: 67%">

                        </div>                         
                        <table class="table">
                        <thead>
                            <tr class="bg-gray-700 dark:bg-dark-1 text-white">
                                <th class="whitespace-no-wrap">Brand Name</th>
                                <th class="whitespace-no-wrap">Expiry Date</th>
                                <th class="whitespace-no-wrap">Quantity</th>
                                <th class="whitespace-no-wrap">Date Received</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($productinflow as $inflow)
                            <tr>
                                <td class="border-b dark:border-dark-5 font-bold">{{ $inflow->brandname }}</td>
                                <td class="border-b dark:border-dark-5">{{ $inflow->expirydate }}</td>
                                <td class="border-b dark:border-dark-5">{{ $inflow->quantity }}</td>
                                <td class="border-b dark:border-dark-5">{{ $inflow->datereceived }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                    <!-- END: Table Section Information -->
                </div>                
            </div>
        </div>
        <!-- END: Content -->
        <!-- JQUERY -->

<script type="text/javascript">
        $(document).ready(function(){
            $('#producttype').change(function(){
                var producttype = this.value;
            $("#manufacturer").html('');
            $.ajax({
                url:"{{url('get-manufacturer-by-producttype')}}",
                type: "POST",
                data: {
                producttype: producttype,
                _token: '{{csrf_token()}}' 
                },
                dataType : 'json',
                success: function(result){ 
                    $('#manufacturer').html('<option  style="height: 40px" value="">Select Manufacturer</option>'); 
                    $.each(result.manufacturer,function(key,value){
                    $("#manufacturer").append('<option value="'+value.manufacturer+'">'+value.manufacturer+'</option>');
                    });
                }
            });        
        });
 
        /* <!-- Call function for submission of form --> */ 

        document.getElementById("receiveproduct").addEventListener('click', receiveproduct, false);



});

//Listen for change on any product line list selected
document.getElementById("brandname0").addEventListener('change', function(ev){
			brandname = ev.target.value;
            elementid = 0;
			getProductDetailsByBrandname(brandname,elementid);
		}, false);
        document.getElementById("brandname1").addEventListener('change', function(ev){
	brandname = ev.target.value;
    elementid = 1;
	getProductDetailsByBrandname(brandname,elementid);
}, false);
document.getElementById("brandname2").addEventListener('change', function(ev){
	brandname = ev.target.value;
    elementid = 2;
	getProductDetailsByBrandname(brandname,elementid);
}, false);
document.getElementById("brandname3").addEventListener('change', function(ev){
	brandname = ev.target.value;
    elementid = 3;
	getProductDetailsByBrandname(brandname,elementid);
}, false);
document.getElementById("brandname4").addEventListener('change', function(ev){
	brandname = ev.target.value;
    elementid = 4;
	getProductDetailsByBrandname(brandname,elementid);
}, false);
document.getElementById("brandname5").addEventListener('change', function(ev){
	brandname = ev.target.value;
    elementid = 5;
	getProductDetailsByBrandname(brandname,elementid);
}, false);
document.getElementById("brandname6").addEventListener('change', function(ev){
	brandname = ev.target.value;
    elementid = 6;
	getProductDetailsByBrandname(brandname,elementid);
}, false);
document.getElementById("brandname7").addEventListener('change', function(ev){
	brandname = ev.target.value;
    elementid = 7;
	getProductDetailsByBrandname(brandname,elementid);
}, false);
document.getElementById("brandname8").addEventListener('change', function(ev){
	brandname = ev.target.value;
    elementid = 8;
	getProductDetailsByBrandname(brandname,elementid);
}, false);
document.getElementById("brandname9").addEventListener('change', function(ev){
	brandname = ev.target.value;
    elementid = 9;
	getProductDetailsByBrandname(brandname,elementid);
}, false);
document.getElementById("brandname10").addEventListener('change', function(ev){
	brandname = ev.target.value;
    elementid = 10;
	getProductDetailsByBrandname(brandname,elementid);
}, false);
document.getElementById("brandname11").addEventListener('change', function(ev){
	brandname = ev.target.value;
    elementid = 11;
	getProductDetailsByBrandname(brandname,elementid);
}, false);
document.getElementById("brandname12").addEventListener('change', function(ev){
	brandname = ev.target.value;
    elementid = 12;
	getProductDetailsByBrandname(brandname,elementid);
}, false);
document.getElementById("brandname13").addEventListener('change', function(ev){
	brandname = ev.target.value;
    elementid = 13;
	getProductDetailsByBrandname(brandname,elementid);
}, false);
document.getElementById("brandname14").addEventListener('change', function(ev){
	brandname = ev.target.value;
    elementid = 14;
	getProductDetailsByBrandname(brandname,elementid);
}, false);
document.getElementById("brandname15").addEventListener('change', function(ev){
	brandname = ev.target.value;
    elementid = 15;
	getProductDetailsByBrandname(brandname,elementid);
}, false);
document.getElementById("brandname16").addEventListener('change', function(ev){
	brandname = ev.target.value;
    elementid = 16;
	getProductDetailsByBrandname(brandname,elementid);
}, false);
document.getElementById("brandname17").addEventListener('change', function(ev){
	brandname = ev.target.value;
    elementid = 17;
	getProductDetailsByBrandname(brandname,elementid);
}, false);
document.getElementById("brandname18").addEventListener('change', function(ev){
	brandname = ev.target.value;
    elementid = 18;
	getProductDetailsByBrandname(brandname,elementid);
}, false);
document.getElementById("brandname19").addEventListener('change', function(ev){
	brandname = ev.target.value;
    elementid = 19;
	getProductDetailsByBrandname(brandname,elementid);
}, false);


 /* <!-- SECTION::FUNCTIONS --> */ 

 function getProductDetailsByBrandname(brandname, elementid){
	$.ajax({
            url:"{{url('get-productdetails-by-brandname')}}",
            type: "POST",
            data: {
                brandname: brandname,
            _token: '{{csrf_token()}}' 
            },
            dataType : 'json',
            success: function(result){
                $.each(result.productdetails,function(key,value){ 
					document.getElementById("manufacturer"+elementid).value = value.manufacturer;
					document.getElementById("packsize"+elementid).value = value.packsize;
                    var expirydate = '#'+'expirydate'+elementid;
                    console.log(expirydate)
                    $(expirydate).attr('type','date');

				});		
            }
            });	 
        }
function receiveproduct(){
    event.preventDefault();
/* <!-- Check for constant elements that are empty --> */
    var awb_number = document.getElementById("awb_number").value;
    var shipmentdate = document.getElementById("shipmentdate").value;
    var source = document.getElementById("source").value;
    var coldchaintemperature = document.getElementById("coldchaintemperature").value;
    var receivedby = document.getElementById("receivedby").value;
    var datereceived = document.getElementById("datereceived").value;
    var deliveredby = document.getElementById("deliveredby").value;
    var deliverydate = document.getElementById("deliverydate").value;

/* <!-- Validation checks and toastr notifications for constant elements that are empty --> */ 
if(awb_number == ""){toastr.error('input for awb_number is missing');awb_number_chk=0;}else{awb_number_chk=1;}   
if(shipmentdate == ""){toastr.error('input for shipmentdate is missing');shipmentdate_chk=0;}else{shipmentdate_chk=1;}   
if(source == ""){toastr.error('input for source is missing');source_chk=0;}else{source_chk=1;}   
if(coldchaintemperature == ""){toastr.error('input for coldchaintemperature is missing');coldchaintemperature_chk=0;}else{coldchaintemperature_chk=1;}   
if(receivedby == ""){toastr.error('input for receivedby is missing');receivedby_chk=0;}else{receivedby_chk=1;}   
if(datereceived == ""){toastr.error('input for datereceived is missing');datereceived_chk=0;}else{datereceived_chk=1;}   
if(deliveredby == ""){toastr.error('input for deliveredby is missing');deliveredby_chk=0;}else{deliveredby_chk=1;}   
if(deliverydate == ""){toastr.error('input for deliverydate is missing');deliverydate_chk=0;}else{deliverydate_chk=1;}   

if(awb_number_chk == 0 ||shipmentdate_chk == 0 ||source_chk == 0 ||coldchaintemperature_chk == 0 ||receivedby_chk == 0 ||datereceived_chk == 0 ||deliveredby_chk == 0 ||deliverydate_chk == 0){
    toastr.warning('Failed Validation');
}
else{
    var select = document.getElementsByName("brandname[]");	
    const errorEncountered = [];

/* <!-- Validation checks for repeated elements that are empty like Quantity --> */ 
for(i=0; i<select.length;i++){
                brandname = document.getElementById("brandname"+i).value;
                manufacturer = document.getElementById("manufacturer"+i).value;
                packsize = document.getElementById("packsize"+i).value;
                qtypercarton = document.getElementById("qtypercarton"+i).value;
                lotno = document.getElementById("lotno"+i).value;
                expirydate = document.getElementById("expirydate"+i).value;
                quantity = document.getElementById("quantity"+i).value;
                quantityremaining = document.getElementById("quantity"+i).value;
                cartons = document.getElementById("cartons"+i).value;
                weight = document.getElementById("weight"+i).value;
                remark = document.getElementById("remark"+i).value;
                
                if(brandname != '' && (!quantity || quantity == 0 || quantity== "" || quantity === undefined)){
                    errorEncountered.push(1);
                    toastr.error(brandname+': is missing quantity');
                }
				if(brandname != '' && lotno == ''){
                    errorEncountered.push(1);
                    toastr.error(brandname+': is missing lotno, Select from list');
				}
            }
 /* <!-- Proceed to submit the form if there are no errors --> */ 
 if(errorEncountered.length == 0){
 /* <!-- Insert if brandname is set --> */ 
            for(i=0; i<select.length;i++){
                brandname = document.getElementById("brandname"+i).value;
                manufacturer = document.getElementById("manufacturer"+i).value;
                packsize = document.getElementById("packsize"+i).value;
                qtypercarton = document.getElementById("qtypercarton"+i).value;
                lotno = document.getElementById("lotno"+i).value;
                expirydate = document.getElementById("expirydate"+i).value;
                quantity = document.getElementById("quantity"+i).value;
                cartons = document.getElementById("cartons"+i).value;
                weight = document.getElementById("weight"+i).value;
                remark = document.getElementById("remark"+i).value;

                if(brandname && brandname != ''){
                    insertreceiveproduct(brandname,awb_number,shipmentdate,source,coldchaintemperature,receivedby,datereceived,deliveredby,deliverydate,manufacturer,packsize,qtypercarton,lotno,expirydate,quantity,cartons,weight,remark);
                }
            }
 /* <!-- Clear the Form after  all rows are inserted --> */ 
                document.getElementById("receiveproductform").reset();
				$("#productlistdiv").load(location.href + " #productlistdiv");
            }
           else{
            toastr.warning('Validation Errors Found');
           }            
}
}

function insertreceiveproduct(brandname,awb_number,shipmentdate,source,coldchaintemperature,receivedby,datereceived,deliveredby,deliverydate,manufacturer,packsize,qtypercarton,
lotno,expirydate,quantity,cartons,weight,remark){
    $.ajax({
            url:"{{url('receive-product-request')}}",
            type: "POST",
            data: {
                brandname: brandname,
                awb_number: awb_number,
                shipmentdate: shipmentdate,
                source: source,
                coldchaintemperature: coldchaintemperature,
                receivedby: receivedby,
                datereceived: datereceived,
                deliveredby: deliveredby,
                deliverydate: deliverydate,
                manufacturer: manufacturer,
                packsize: packsize,
                qtypercarton: qtypercarton,
                lotno: lotno,
                expirydate: expirydate,
                quantity: quantity,
                quantityremaining: quantity,
                cartons: cartons,
                weight: weight,
                remark: remark,
            _token: '{{csrf_token()}}' 
            },
            dataType : 'json',
            success: function(result){
				if(result.createproductoutcome){
                    toastr.success('Product: '+brandname+' received');
				}else{
                    toastr.error('Error receiving product: '+brandname);
				}            
            },
            error: function(result) {
				console.log('Error: '+result)            
            }
            });
}

@if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;
    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;
    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;
    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>
@endsection