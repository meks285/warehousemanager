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
                    Product Supply History
                </h2>
            </div>
            <!-- BEGIN: HTML Table Data -->
            <div class="intro-y box p-5 mt-5">
                <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
                    <form class="xl:flex sm:mr-auto" id="tabulator-html-filter-form">
                                        <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                                        @foreach($productdetails as $productdetails)
                                        <span class="font-bold text-gray-700 text-xl">PRODUCT: &nbsp; </span><span class="font-bold text-green-700 border border-slate-400 text-lg">{{ $productdetails->brandname }}</span> &nbsp; | &nbsp;
                                        <span class="font-bold text-gray-700 text-xl">QTY RECEIVED: &nbsp; </span><span class="font-bold text-green-700 border border-slate-400 text-lg">{{ $productdetails->quantity }}</span> &nbsp; | &nbsp;
                                        <span class="font-bold text-gray-700 text-xl">QTY REMAINING: &nbsp; </span><span class="font-bold text-green-700 border border-slate-400 text-lg">{{ $productdetails->quantityremaining }}</span> &nbsp; | &nbsp;
                                        <span class="font-bold text-gray-700 text-xl">EXP DATE: &nbsp; </span><span class="font-bold text-green-700 border border-slate-400 text-lg">{{ $productdetails->expirydate }}</span> &nbsp; | &nbsp;
                                        <span class="font-bold text-gray-700 text-xl">LOTNO: &nbsp; </span><span class="font-bold text-green-700 border border-slate-400 text-lg">{{ $productdetails->lotno }}</span>
                                        @endforeach
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
                                <th class="whitespace-no-wrap">CMS Reference #</th>
                                <th class="whitespace-no-wrap">Location</th>
                                <th class="whitespace-no-wrap">Lot#</th>
                                <th class="whitespace-no-wrap">Quantity Supplied</th>
                                <th class="whitespace-no-wrap">Requested By</th>
                                <th class="whitespace-no-wrap">Supply Date</th>
                                <th class="whitespace-no-wrap">Status</th>
                            </tr>
                        </thead>
                        <tbody>
						@foreach($lotnohistory as $lotnohistory)
                            <tr>
                            <td class="border-b dark:border-dark-5 font-bold">{{ $lotnohistory->cmsrefnumber }}</td>
                                <td class="border-b dark:border-dark-5 font-bold">{{ $lotnohistory->requestlocation }}</td>
                                <td class="border-b dark:border-dark-5"><a class="font-bold" style="color: red" onclick="getLotHistory()" href="javascript:;">{{ $lotnohistory->lotno }}</a></td>
                                <td class="border-b dark:border-dark-5 font-bold">{{ $lotnohistory->quantityissued }}</td>
                                <td class="border-b dark:border-dark-5">{{ $lotnohistory->requestedby }}</td>
                                <td class="border-b dark:border-dark-5">{{ $lotnohistory->issuedate }}</td>
                                <td class="border-b dark:border-dark-5 font-bold text-green-700">{{ $lotnohistory->orderstatus }}</td>
                            </tr>
                            @endforeach                            
                        </tbody>
                    </table>                                
                </div>
            </div>
                            <!-- END: HTML Table Data -->
                        </div>
<script type="text/javascript">
function getLotHistory(){
    var lotno = event.target.innerHTML;

    let url = "{{ route('warehouse.table-recipient-product-history', ':lotno') }}";
    url = url.replace(':lotno', 'lotno='+lotno);
    document.location.href=url;

}

</script>
@endsection