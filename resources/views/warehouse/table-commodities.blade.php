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
                    Commodities Table
                </h2>
            </div>
            <!-- BEGIN: HTML Table Data -->
            <div class="intro-y box p-5 mt-5">
                <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
                    <form class="xl:flex sm:mr-auto" id="tabulator-html-filter-form">
                    <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                                            <input type="text" class="input w-full sm:w-full xxl:w-full mt-2 sm:mt-0 border" id="table_search" placeholder="Search by awbnumber/lotno...">
                                        </div>
                                        <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                                            <select class="input w-full sm:w-32 xxl:w-full mt-2 sm:mt-0 sm:w-auto border" id="selectfilter">
                                                <option value="" selected>Filter</option>
                                                <option value="new">Newest Commodities</option>
                                                <option value="expired">Expired Commodities</option>
                                                <option value="nothreshold">No Threshold</option>
                                                <option value="unshelved">Unshelved</option>
                                                <option value="usedup">Used Up Commodities</option>
                                            </select>                                        
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
        <div id="commoditytablediv" class="overflow-x-auto scrollbar-hidden">
        <table class="table border-separate border border-slate-400" id="commoditytable">
                        <thead>
                            <tr class="bg-red-700 dark:bg-dark-1 text-white">
                                <th class="whitespace-no-wrap">Commodity</th>
                                <th class="whitespace-no-wrap">AWB #</th>
                                <th class="whitespace-no-wrap">Lot#</th>
                                <th class="whitespace-no-wrap">Manufacturer</th>
                                <th class="whitespace-no-wrap">Expiry Date</th>
                                <th class="whitespace-no-wrap">Qty Received</th>
                                <th class="whitespace-no-wrap">Qty Remaining</th>
                                <th class="whitespace-no-wrap">Supplier</th>
                                <th class="whitespace-no-wrap">Receive Date</th>
                                <th class="whitespace-no-wrap bg-blue-900">UPDATE</th>
                            </tr>
                        </thead>
                        <tbody>
						@foreach($commodities as $commodities)
                            <tr>
                            <td class="border-b dark:border-dark-5 font-bold">{{ $commodities->brandname }}</td>
                                <td class="border-b dark:border-dark-5 font-bold">{{ $commodities->awb_number }}</td>
                                <td class="border-b dark:border-dark-5 font-bold" style="color: red"><a  onclick="getLotHistory()" href="javascript:;">{{ $commodities->lotno }}</a></td>
                                <td class="border-b dark:border-dark-5 font-bold">{{ $commodities->manufacturer }}</td>
                                <td class="border-b dark:border-dark-5">{{ $commodities->expirydate }}</td>
                                <td class="border-b dark:border-dark-5">{{ $commodities->quantity }}</td>
                                <td class="border-b dark:border-dark-5 font-bold text-green-700">{{ $commodities->quantityremaining }}</td>
                                <td class="border-b dark:border-dark-5 font-bold">{{ $commodities->suppliedby }}</td>
                                <td class="border-b dark:border-dark-5">{{ $commodities->datereceived }}</td>
                                <td class="border-b dark:border-dark-5" style="color: green"><a class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"  onclick="updateCommodity()" href="javascript:;">{{ $commodities->lotno }}</a></td>
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
if(search_value.length == 0){
    $("#commoditytablediv").load(location.href + " #commoditytablediv");
}
else if(search_value.length >= 4){
    $("#commoditytable tbody tr").remove(); 

$.ajax({
        url:"{{url('search-table-commodity')}}",
        type: "POST",
        data: {
            search_value: search_value,
        _token: '{{csrf_token()}}' 
        },
        dataType : 'json',
        success: function(result){
            var trHTML = '';
            $.each(result, function (i, commodity) {
                trHTML += '<tr><td class="border-b dark:border-dark-5">' + commodity.brandname + '</td><td class="border-b dark:border-dark-5">' + commodity.awb_number + '</td><td class="border-b dark:border-dark-5" style="color: red" class="font-bold"><a onclick="getLotHistory()" href="javascript:;">' + commodity.lotno + '</a></td><td class="border-b dark:border-dark-5">' + commodity.manufacturer + '</td><td class="border-b dark:border-dark-5">' + commodity.expirydate + '</td><td class="border-b dark:border-dark-5">' + commodity.quantity + '</td><td class="border-b dark:border-dark-5">' + commodity.quantityremaining + '</td><td class="border-b dark:border-dark-5">' + commodity.suppliedby + '</td><td class="border-b dark:border-dark-5">' + commodity.datereceived + '</td><td class="border-b dark:border-dark-5" style="color: green" class="font-bold"><a class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" onclick="updateCommodity()" href="javascript:;">'+commodity.lotno+'</a></td></tr>';
            });
            $('#commoditytable').append(trHTML);
        },
        error: function(result) {
        }
        });  
}
}, false);

document.getElementById("selectfilter").addEventListener('change',function(ev){
    var select_value = ev.target.value;
if(select_value == ''){
    $("#commoditytablediv").load(location.href + " #commoditytablediv");
}
else{
    $("#commoditytable tbody tr").remove(); 

$.ajax({
        url:"{{url('search-table-commodity-using-select')}}",
        type: "POST",
        data: {
            select_value: select_value,
        _token: '{{csrf_token()}}' 
        },
        dataType : 'json',
        success: function(result){
            var trHTML = '';
            $.each(result, function (i, commodity) {
                trHTML += '<tr><td class="border-b dark:border-dark-5">' + commodity.brandname + '</td><td class="border-b dark:border-dark-5">' + commodity.awb_number + '</td><td class="border-b dark:border-dark-5" style="color: red" class="font-bold"><a onclick="getLotHistory()" href="javascript:;">' + commodity.lotno + '</a></td><td class="border-b dark:border-dark-5">' + commodity.manufacturer + '</td><td class="border-b dark:border-dark-5">' + commodity.expirydate + '</td><td class="border-b dark:border-dark-5">' + commodity.quantity + '</td><td class="border-b dark:border-dark-5">' + commodity.quantityremaining + '</td><td class="border-b dark:border-dark-5">' + commodity.suppliedby + '</td><td class="border-b dark:border-dark-5">' + commodity.datereceived + '</td><td class="border-b dark:border-dark-5" style="color: green" class="font-bold"><a class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" onclick="updateCommodity()" href="javascript:;">'+commodity.lotno+'</a></td></tr>';
            });
            $('#commoditytable').append(trHTML);
        },
        error: function(result) {
        }
        });  
}
}, false);

function getLotHistory(){
    var lotno = event.target.innerHTML;

    let url = "{{ route('warehouse.table-product-history-lotno', ':lotno') }}";
    url = url.replace(':lotno', 'lotno='+lotno);
    document.location.href=url;

}

function updateCommodity(){
    var lotno = event.target.innerHTML;

    let url = "{{ route('warehouse.commodity-update', ':lotno') }}";
    url = url.replace(':lotno', 'lotno='+lotno);
    document.location.href=url;

}
</script>
@endsection