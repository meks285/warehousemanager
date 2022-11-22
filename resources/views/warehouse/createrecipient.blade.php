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
                    Create Recipient:
                </h2>
            </div>
            <div class="grid grid-cols-12 gap-6 mt-5 relative">
                <div class="intro-y col-span-12 lg:col-span-6">
                    <!-- BEGIN: Display Information -->
                    <div class="intro-y box lg:mt-5">
                        <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                            <h2 class="font-medium text-base mr-auto">
                                Recipient Information
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
                        <form action="{{ route('store.recipient') }}" method="POST">
                            @csrf
                        <div class="p-5">
                            <div class="grid grid-cols-12 gap-5">
                                <div class="col-span-12 xl:col-span-8">                               
                                    <div class="mt-4">
                                        <label>Name</label>
                                        <input id="name" name="name" type="text" class="input w-full border border-dark-3 bg-gray-100 mt-2" placeholder="Recipient Name">
                                    </div>
                                    <div class="mt-4">
                                        <label>Recipient Category</label>
                                        <div class="mt-2 border border-dark-3 rounded">
                                            <select id="category" name="category" data-search="true" class="tail-select w-full">
                                                <option selected disabled></option>
                                                <option value="Office">Office</option>
                                                <option value="Facility">Facility</option>
                                                <option value="Laboratory">Laboratory</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <label>Location</label>
                                        <div class="mt-2 border border-dark-3 rounded">
                                            <select id="location" name="location" data-search="true" class="tail-select w-full">
                                                <option disabled selected ></option>
                                                @foreach($states as $state)
                                                    <option value="{{ $state->name }}">{{ $state->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>  
                                    <div class="mt-4">
                                        <label>Contact Person</label>
                                        <input id="contactperson" name="contactperson" type="text" class="input w-full border border-dark-3 bg-gray-100 mt-2" placeholder="Contact Person">
                                    </div>
                                    <div class="mt-4">
                                        <label>Contact Person Email</label>
                                        <input id="contactpersonemail" name="contactpersonemail" type="text"  class="w-full input w-56 border border-dark-3 bg-gray-100 mt-2"  placeholder="Contact Person Email">
                                    </div>
                                    <div class="mt-4">
                                        <label>Contact Person Phonenumber</label>
                                        <input id="contactpersonphonenumber" name="contactpersonphonenumber" type="text"  class="w-full input w-56 border border-dark-3 bg-gray-100 mt-2"  placeholder="Contact Person Phone">
                                    </div>

                                    <div class="mt-4">
                                        <label>Address</label>
                                        <textarea id="address" name="address" type="text"  class="w-full input w-56 border border-dark-3 bg-gray-100 mt-2"></textarea>
                                    </div>

                                    <div class="mt-4">
                                        <input id="dataentryby" name="dataentryby" type="hidden" class="input w-full border border-dark-3 bg-gray-100 cursor-not-allowed mt-2" placeholder="" value="{{ Auth::User()->name }}">
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
                <div class="intro-y col-span-12 lg:col-span-6 relative inset-0 w-full min-h-screen lg:fixed lg:w-full/12" style="height: 829px;">
                    <!-- BEGIN: Table Section Information -->
                    <div class="intro-y box lg:mt-5" style="overflow: auto; height: 829px">
                        <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                            <h2 class="font-medium text-base mr-auto">
                                Recipients
                            </h2>
                        </div>
                        <div class="p-5" style="width: 67%">

                        </div>                         
                        <table class="table">
                        <thead>
                            <tr class="bg-gray-700 dark:bg-dark-1 text-white">
                                <th class="whitespace-no-wrap">Name</th>
                                <th class="whitespace-no-wrap">Category</th>
                                <th class="whitespace-no-wrap">Location</th>
                                <th class="whitespace-no-wrap">Contact Person</th>
                                <th class="whitespace-no-wrap">Contact Phonenumber</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recipients as $recipient)
                            <tr>
                                <td class="border-b dark:border-dark-5 font-bold">{{ $recipient->name }}</td>
                                <td class="border-b dark:border-dark-5">{{ $recipient->category }}</td>
                                <td class="border-b dark:border-dark-5">{{ $recipient->location }}</td>
                                <td class="border-b dark:border-dark-5">{{ $recipient->contactperson }}</td>
                                <td class="border-b dark:border-dark-5">{{ $recipient->contactpersonphonenumber }}</td>
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