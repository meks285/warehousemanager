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
                    Update Commodity:
                </h2>
            </div>
            <div class="grid grid-cols-12 gap-6 relative">
                <div class="intro-y col-span-12 lg:col-span-6">
                    <!-- BEGIN: Display Information -->
                    <div class="intro-y box lg:mt-5">
                        <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                            <h2 class="font-medium text-base mr-auto">
                                Commodity Information
                            </h2>
                        </div>
                        <div style="width: 67%">
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
                        <form>
                            @csrf
                        <div class="p-5">
                            <div class="grid grid-cols-12 gap-5">
                                @foreach ($lotnohistory as $lotnohistory)
                                <div class="col-span-12 xl:col-span-8">                                    
                                    <div>
                                        <label>Manufacturer</label>
                                        <div class="mt-2 border border-dark-3 rounded form-group">
                                            <input id="manufacturer" name="manufacturer" readonly value="{{ $lotnohistory->manufacturer }}" class="input form-control w-full rounded" style="height: 40px; display: inline-block;"/>
                                        </div>
                                    </div>                                    
                                    <div class="mt-4">
                                        <label>Brand Name</label>
                                        <input id="brandname" name="brandname" readonly value="{{ $lotnohistory->brandname }}" type="text" class="input w-full border border-dark-3 bg-gray-100 mt-2" placeholder="Input Brand Name">
                                    </div>
                                    <div class="mt-4">
                                        <label>Lot/Serial No</label>
                                        <input id="lotno" name="lotno" readonly value="{{ $lotnohistory->lotno }}" type="text" class="input w-full border border-dark-3 bg-gray-100 mt-2" placeholder="Input Pack Size">
                                    </div>
                                    <div class="mt-4">
                                        <label>AWB No</label>
                                        <input id="awb_number" name="awb_number" readonly value="{{ $lotnohistory->awb_number }}" type="text" class="input w-full border border-dark-3 bg-gray-100 mt-2" placeholder="Input Pack Size">
                                    </div>
                                    <div id="editable_section">
                                    @if($lotnohistory->cabinetno == '')
                                    <div class="mt-4">
                                        <label>Rack Number</label>
                                        <div class="mt-2 border border-dark-3 rounded">
                                            <select id="rack" name="rack" data-search="true" class="tail-select w-full">
                                                <option disabled selected ></option>
                                                @foreach($racklist as $racks)
                                                    <option value="{{ $racks->rack }}">{{ $racks->rack}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div> 
                                    <div class="mt-4">
                                        <label>Cabinet/Shelf Number</label>
                                        <div class="mt-2 border border-dark-3 rounded">
                                            <select id="shelf" name="shelf" class="input form-control w-full rounded">
                                                <option selected ></option>
                                            </select>
                                        </div>
                                    </div>                                     
                                    @else
                                    <div class="mt-4">
                                        <label>Rack Number</label>
                                        <input id="rack" name="rack" readonly value="{{ $lotnohistory->rackno }}" type="text" class="input w-full border border-dark-3 bg-gray-100 mt-2" placeholder="Input Pack Size">
                                    </div>
                                    <div class="mt-4">
                                        <label>Shelf</label>
                                        <input id="shelf" name="shelf" readonly value="{{ $lotnohistory->cabinetno }}" type="text" class="input w-full border border-dark-3 bg-gray-100 mt-2" placeholder="Input Pack Size">
                                    </div>
                                    @endif
                                    @if($lotnohistory->threshold == '')
                                    <div class="mt-4">
                                        <label>Set Commodity Threshold</label>
                                        <div class="mt-2 border border-dark-3 rounded">
                                            <select id="threshold" name="threshold" data-search="true" class="tail-select w-full">
                                                <option disabled selected ></option>
                                                    <option value="10">10%</option>
                                                    <option value="20">20%</option>
                                                    <option value="30">30%</option>
                                                    <option value="40">40%</option>
                                                    <option value="50">50%</option>
                                            </select>
                                        </div>
                                    </div> 
                                    @else
                                    <div class="mt-4">
                                        <label>Threshold</label>
                                        <input id="threshold" name="threshold" readonly value="{{ $lotnohistory->threshold }}" type="text" class="input w-full border border-dark-3 bg-gray-100 mt-2" placeholder="Input Pack Size">
                                    </div>
                                    @endif
                                    <div>

                                @if(Auth::User()->role == 'Warehouse Manager' || Auth::User()->role == 'Store Keeper' || Auth::User()->role == 'Supervisor')
                                    <button type="submit" class="button w-20 bg-theme-1 text-white mt-3" id="updatecommodity">Save</button>
                                    @else
                                    <button class="button w-20 bg-theme-2 text-white mt-3" disabled>Save</button>
                                @endif
                                </div>                                
                                @endforeach

                            </div>
                        </div>
                    </form>
                    </div>
                    <!-- END: Display Information -->
                </div>          
            </div>
        </div>
        <!-- END: Content -->
        <!-- JQUERY -->

<script type="text/javascript">
        $(document).ready(function(){

        document.getElementById("rack").addEventListener('change', function(ev){
            var rack = ev.target.value;
            var select = document.getElementById("shelf");
            var option = document.createElement("option");
            select.options.length = 0;
            option.text = 'Assign Shelf';
			option.value = '';				
			var shelf = select;
			shelf.appendChild(option);				
        
        $.ajax({
            url:"{{url('get-shelf-by-rack')}}",
            type: "POST",
            data: {
                     rack: rack,
            _token: '{{csrf_token()}}' 
            },
            dataType : 'json',
            success: function(result){
                $.each(result.shelves,function(key,value){  
						var option = document.createElement("option");
						option.text = value.shelf;
						option.value = value.shelf;				
						var shelf = select;
						shelf.appendChild(option);
				});					
            }
            });	
        },false);

        document.getElementById("updatecommodity").addEventListener('click', function(ev){
            ev.preventDefault();
            var lotno = document.getElementById("lotno").value;
            var rack = document.getElementById("rack").value;
            var shelf = document.getElementById("shelf").value;
            var threshold = document.getElementById("threshold").value;
            var brandname = document.getElementById("brandname").value;

            if(rack == '' || shelf == '' || threshold == '' || rack == 'Select an Option...' || threshold == 'Select an Option...'){
                toastr.warning('Missing Field Elements');
            }
            else{
            $.ajax({
            url:"{{url('commit-commodityupdate')}}",
            type: "POST",
            data: {
                lotno: lotno,
                rack: rack,
                shelf: shelf,
                threshold: threshold,
            _token: '{{csrf_token()}}' 
            },
            dataType : 'json',
            success: function(result){
                console.log(result)
                if(result.status == 1){
                    toastr.success('Product: '+brandname+' updated successfully.');
                    markRackUsed(shelf,rack,lotno);
                }
                else{
                    toastr.warning('Error: Product: '+brandname+' update failure.');
                }
				
            }
            });	            
        }

        }, false)
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

 function markRackUsed(shelf,rack,lotno){
    $.ajax({
            url:"{{url('mark-shelf-used')}}",
            type: "POST",
            data: {
                shelf: shelf,
                rack: rack,
            _token: '{{csrf_token()}}' 
            },
            dataType : 'json',
            success: function(result){
                if(result.status == 1){
                    toastr.success('Cabinet: '+shelf+' Locked.');
                    let url = "{{ route('warehouse.commodity-update', ':lotno') }}";
                    url = url.replace(':lotno', 'lotno='+lotno);
                    document.location.href=url;
                }
                else{
                    toastr.warning('Error: Cabinet: '+shelf+' lock failure.');
                }
				
            }
            });	 
 }
</script>
@endsection