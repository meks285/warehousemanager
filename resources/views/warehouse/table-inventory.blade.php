@extends('warehouse.warehouse_master')
@section('warehouse-section')
<!-- BEGIN: Import JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- END: Import JQuery -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
<div class="content">
            <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                <h2 class="text-lg font-medium mr-auto">
                    Inventory Status Table
                </h2>
            </div>
            <!-- BEGIN: HTML Table Data -->
            <div class="intro-y box p-5 mt-5">
                <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
                    <form class="xl:flex sm:mr-auto" id="tabulator-html-filter-form">
                                        <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                                            <input type="text" class="input w-full sm:w-full xxl:w-full mt-2 sm:mt-0 border" id="table_search" placeholder="Search by cmsrefnumber...">
                                        </div>
                                    </form>
                                    <div class="flex mt-5 sm:mt-0">
                                        <button class="button w-1/2 sm:w-auto flex items-center border text-gray-700 mr-2 dark:bg-dark-5 dark:text-gray-300" id="tabulator-print"> <i data-feather="printer" class="w-4 h-4 mr-2"></i> Print </button>
                                        <div class="dropdown w-1/2 sm:w-auto">
                                            <button class="dropdown-toggle button w-full sm:w-auto flex items-center border text-gray-700 dark:bg-dark-5 dark:text-gray-300"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export <i data-feather="chevron-down" class="w-4 h-4 ml-auto sm:ml-2"></i> </button>
                                            <div class="dropdown-box w-40">
                                                <div class="dropdown-box__content box dark:bg-dark-1 p-2">
                                                    <a href="javascript:;" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md" id="tabulator-export-csv"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export CSV </a>
                                                    <a href="javascript:;" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md" id="tabulator-export-json"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export JSON </a>
                                                    <a href="javascript:;" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md" id="tabulator-export-xlsx"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export XLSX </a>
                                                    <a href="javascript:;" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md" id="tabulator-export-html"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export HTML </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br />
        <div id="inventorytablediv" class="overflow-x-auto scrollbar-hidden">
        <table class="table" id="inventorytable">
                        <thead>
                            <tr class="bg-red-700 dark:bg-dark-1 text-white">
                                <th class="whitespace-no-wrap">CMS #</th>
                                <th class="whitespace-no-wrap">Location</th>
                                <th class="whitespace-no-wrap">Date Ordered</th>
                                <th class="whitespace-no-wrap">Product</th>
                                <th class="whitespace-no-wrap">Status</th>
                                <th class="whitespace-no-wrap">Qty Requested</th>
                                <th class="whitespace-no-wrap">Qty Authorized</th>
                                <th class="whitespace-no-wrap">Qty Issued</th>
                                <th class="whitespace-no-wrap">Lot #</th>
                            </tr>
                        </thead>
                        <tbody>
						@foreach($inventory as $activeOrders)
                            <tr>
							@if($activeOrders->orderstatus == 'AUTHORIZED')
                                <td class="border-b dark:border-dark-5"><a class="font-bold button" style="text-transform: uppercase; color: blue" onclick="getOrderDetails('{{ $activeOrders->cmsrefnumber }}')">{{ $activeOrders->cmsrefnumber }}</a></td>
                            @elseif($activeOrders->orderstatus == 'ISSUED')
							<td class="border-b dark:border-dark-5"><a class="font-bold button" style="text-transform: uppercase; color: green" onclick="getOrderDetails('{{ $activeOrders->cmsrefnumber }}')">{{ $activeOrders->cmsrefnumber }}</a></td>
                            @else 
							<td class="border-b dark:border-dark-5"><a class="font-bold button" style="text-transform: uppercase; color: #FEA213" onclick="getOrderDetails('{{ $activeOrders->cmsrefnumber }}')">{{ $activeOrders->cmsrefnumber }}</a></td>
							@endif
								<td class="border-b dark:border-dark-5">{{ $activeOrders->requestlocation }}</td>
                                <td class="border-b dark:border-dark-5 font-bold">{{ $activeOrders->orderdate }}</td>
                                <td style="font-weight: bold; font-size: 15px" class="border-b dark:border-dark-5">{{ $activeOrders->brandname }}</td>
                            @if($activeOrders->orderstatus == 'AUTHORIZED')
                            <td style="font-weight: bold;color: blue;" class="border-b dark:border-dark-5">{{ $activeOrders->orderstatus }}</td>                            
                            @elseif($activeOrders->orderstatus == 'ISSUED')
                            <td style="font-weight: bold;color: green;" class="border-b dark:border-dark-5">{{ $activeOrders->orderstatus }}</td>                            
                            @else 
                            <td style="font-weight: bold;color: #FEA213;" class="border-b dark:border-dark-5">{{ $activeOrders->orderstatus }}</td>							
                            @endif
                                <td class="border-b dark:border-dark-5">{{ $activeOrders->quantity }}</td>
                                <td class="border-b dark:border-dark-5">{{ $activeOrders->quantityauthorized }}</td>
                                <td class="border-b dark:border-dark-5">{{ $activeOrders->quantityissued }}</td>
                                <td class="border-b dark:border-dark-5 font-bold">{{ $activeOrders->lotno }}</td>
                            </tr>
                            @endforeach                            
                        </tbody>
                    </table>                                
                </div>
            </div>
                            <!-- END: HTML Table Data -->
                        </div>
<script type="text/javascript">

document.getElementById("table_search").addEventListener('input',function(ev){
    var search_value = ev.target.value;
    console.log(search_value.length)
if(search_value.length == 0){
    $("#inventorytablediv").load(location.href + " #inventorytablediv");
}
else if(search_value.length >= 4){
    $("#inventorytable tbody tr").remove(); 

$.ajax({
        url:"{{url('search-table-inventory')}}",
        type: "POST",
        data: {
            search_value: search_value,
        _token: '{{csrf_token()}}' 
        },
        dataType : 'json',
        success: function(result){
            var trHTML = '';
            $.each(result, function (i, item) {
                trHTML += '<tr><td>' + item.cmsrefnumber + '</td><td>' + item.requestlocation + '</td><td>' + item.orderdate + '</td><td>' + item.brandname + '</td><td>' + item.orderstatus + '</td><td>' + item.quantity + '</td><td>' + item.quantityauthorized + '</td><td>' + item.quantityissued + '</td><td>' + item.lotno + '</td></tr>';
            });
            $('#inventorytable').append(trHTML);
        },
        error: function(result) {
        }
        });  
}
}, false)

</script>
@endsection