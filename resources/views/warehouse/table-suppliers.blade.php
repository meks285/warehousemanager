@extends('warehouse.warehouse_master')
@section('warehouse-section')
<!-- BEGIN: Import JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
<!-- END: Import JQuery -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
<div class="content">
            <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                <h2 class="text-lg font-medium mr-auto">
                    Suppliers Table
                </h2>
            </div>
            <!-- BEGIN: HTML Table Data -->
            <div class="intro-y box p-5 mt-5">
                <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
                    <form class="xl:flex sm:mr-auto" id="tabulator-html-filter-form">
                                        <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                                            <input type="text" class="input w-full sm:w-full xxl:w-full mt-2 sm:mt-0 border" id="table_search" placeholder="Search by supplier...">
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
        <div id="supplierstablediv" class="overflow-x-auto scrollbar-hidden">
        <table class="table border-separate border border-slate-400" id="supplierstable">
                        <thead>
                            <tr class="bg-red-700 dark:bg-dark-1 text-white">
                                <th class="whitespace-no-wrap">Name</th>
                                <th class="whitespace-no-wrap">Phone Number</th>
                                <th class="whitespace-no-wrap">Email</th>
                                <th class="whitespace-no-wrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
						@foreach($suppliers as $suppliers)
                            <tr>
                            <td class="border-b dark:border-dark-5 font-bold">{{ $suppliers->name }}</td>
                            <td class="border-b dark:border-dark-5 font-bold">{{ $suppliers->phonenumber }}</td>
                            <td class="border-b dark:border-dark-5 font-bold">{{ $suppliers->email }}</td>
                            <td class="border-b dark:border-dark-5 font-bold"><a class="button"  onclick="deleteSupplier('{{ $suppliers->email }}')"><i class="fa fa-trash" style="font-size:18px; color: red;"></i></a></td>
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
    $("#supplierstablediv").load(location.href + " #supplierstablediv");
}
else if(search_value.length >= 4){
    $("#supplierstable tbody tr").remove(); 

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
                trHTML += '<tr><td>' + commodity.brandname + '</td><td>' + commodity.awb_number + '</td><td>' + commodity.lotno + '</td><td>' + commodity.manufacturer + '</td><td>' + commodity.expirydate + '</td><td>' + commodity.quantity + '</td><td>' + commodity.quantityremaining + '</td><td>' + commodity.suppliedby + '</td><td>' + commodity.datereceived + '</td></tr>';
            });
            $('#supplierstable').append(trHTML);
        },
        error: function(result) {
        }
        });  
}
}, false)

function deleteSupplier(email){
    $.ajax({
        url:"{{url('delete-supplier')}}",
        type: "POST",
        data: {
            email: email,
        _token: '{{csrf_token()}}' 
        },
        dataType : 'json',
        success: function(result){
            if(result == 1){
                toastr.success('Supplier: Deleted');
                $("#supplierstablediv").load(location.href + " #supplierstablediv");
            }
            else{
                toastr.warning('Error Deleting Supplier');
            }
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