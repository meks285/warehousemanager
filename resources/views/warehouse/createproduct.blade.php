@extends('warehouse.warehouse_master')
@section('warehouse-section')
<!-- BEGIN: Import JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- END: Import JQuery -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

<!-- BEGIN: Content -->
        <div class="content">
            <div class="intro-y flex items-center mt-8">
                <h2 class="text-lg font-medium mr-auto">
                    Create Product:
                </h2>
            </div>
            <div class="grid grid-cols-12 gap-6 mt-5 relative">
                <div class="intro-y col-span-12 lg:col-span-6">
                    <!-- BEGIN: Display Information -->
                    <div class="intro-y box lg:mt-5">
                        <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                            <h2 class="font-medium text-base mr-auto">
                                Product Information
                            </h2>
                        </div>
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
                        <form action="{{ route('store.saveproduct') }}" method="POST">
                            @csrf
                        <div class="p-5">
                            <div class="grid grid-cols-12 gap-5">
                                <div class="col-span-12 xl:col-span-8">
                                    <div>
                                        <label>Product</label>
                                        <div class="mt-2 border border-dark-3 rounded">
                                            <select id="producttype" name="producttype" data-search="true" class="tail-select w-full">
                                                <option disabled selected ></option>
                                                @foreach($productmapping_data as $product)
                                                    <option value="{{ $product->producttype }}">{{ $product->producttype}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>                                    
                                    <div class="mt-4">
                                        <label>Manufacturer</label>
                                        <div class="mt-2 border border-dark-3 rounded form-group">
                                            <select id="manufacturer" name="manufacturer" class="form-control w-full rounded" style="height: 40px; display: inline-block;">
                                            </select>
                                        </div>
                                    </div>                                    
                                    <div class="mt-4">
                                        <label>Brand Name</label>
                                        <input id="brandname" name="brandname" type="text" class="input w-full border border-dark-3 bg-gray-100 mt-2" placeholder="Input Brand Name">
                                    </div>
                                    <div class="mt-4">
                                        <label>Pack Size</label>
                                        <input id="packsize" name="packsize" type="text" class="input w-full border border-dark-3 bg-gray-100 mt-2" placeholder="Input Pack Size">
                                    </div>
                                    <div class="mt-4">
                                        <input id="dataentryby" name="dataentryby" type="hidden" class="input w-full border border-dark-3 bg-gray-100 cursor-not-allowed mt-2" placeholder="Product Group" value="{{ Auth::User()->name }}">
                                    </div>
                                @if(Auth::User()->role == 'Warehouse Manager')
                                    <button type="submit" class="button w-20 bg-theme-1 text-white mt-3">Save</button>
                                    @else
                                    <button class="button w-20 bg-theme-2 text-white mt-3" disabled>Save</button>
                                @endif
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                    <!-- END: Display Information -->
                </div>
                <div class="intro-y col-span-12 lg:col-span-6 relative inset-0 w-full min-h-screen lg:fixed lg:w-full/12" style="height: 532px;">
                    <!-- BEGIN: Table Section Information -->
                    <div class="intro-y box lg:mt-5" style="overflow: auto; height: 532px">
                        <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                            <h2 class="font-medium text-base mr-auto">
                                Products
                            </h2>
                        </div>
                        <div class="p-5" style="width: 67%">

                        </div>                         
                        <table class="table">
                        <thead>
                            <tr class="bg-gray-700 dark:bg-dark-1 text-white">
                                <th class="whitespace-no-wrap">Product Type</th>
                                <th class="whitespace-no-wrap">Manufacturer</th>
                                <th class="whitespace-no-wrap">Brand Name</th>
                                <th class="whitespace-no-wrap">Pack-Size</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($producttable as $productinfo)
                            <tr>
                                <td class="border-b dark:border-dark-5">{{ $productinfo->producttype }}</td>
                                <td class="border-b dark:border-dark-5">{{ $productinfo->manufacturer }}</td>
                                <td class="border-b dark:border-dark-5 font-bold">{{ $productinfo->brandname }}</td>
                                <td class="border-b dark:border-dark-5">{{ $productinfo->packsize }}</td>
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
});

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