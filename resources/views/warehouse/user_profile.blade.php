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
                    Update User Profile: {{ $userData->name }}
                </h2>
            </div>
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 lg:col-span-8 xxl:col-span-9">
                    <!-- BEGIN: Display Information -->
                    <div class="intro-y box lg:mt-5">
                        <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                            <h2 class="font-medium text-base mr-auto">
                                Display Information
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
                        <form action="{{ route('store.userprofile') }}" method="POST">
                            @csrf
                        <div class="p-5">
                            <div class="grid grid-cols-12 gap-5">
                                <div class="col-span-12 xl:col-span-8">
                                <div>
                                        <label>Username</label>
                                        <input id="username" name="username" type="text" class="input w-full border border-dark-3 bg-gray-100 cursor-not-allowed mt-2" placeholder="Input text" value="{{ Auth::User()->username }}" disabled>
                                    </div>
                                    <div class="mt-4">
                                        <label>Display Name</label>
                                        <input id="name" name="name" type="text" class="input w-full border border-dark-3 bg-gray-100 mt-2" placeholder="Input text" value="{{ Auth::User()->name }}">
                                    </div>
                                    <div class="mt-4">
                                        <label>email</label>
                                        <input id="email" name="email" type="email" class="input w-full border border-dark-3 bg-gray-100 mt-2" placeholder="Input text" value="{{ Auth::User()->email }}">
                                    </div>
                                    <div class="mt-4">
                                        <label>Set User Role</label>
                                        <div class="mt-2 border border-dark-3 rounded">
                                            <select id="role" name="role" data-search="true" class="tail-select w-full">
                                                <option selected >{{ Auth::User()->role }}</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Supervisor">Supervisor</option>
                                                <option value="Warehouse Manager">Warehouse Manager</option>
                                                <option value="Store Keeper">Store Keeper</option>
                                                <option value="Recipient">Recipient</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <label>Recipient Location</label>
                                        <div class="mt-2 border border-dark-3 rounded">
                                            <select id="recipientlocation" name="recipientlocation" class="w-full">
                                                <option selected ></option>
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" class="button w-20 bg-theme-1 text-white mt-3">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                    <!-- END: Display Information -->
                </div>
            </div>
        </div>
        <!-- END: Content -->

<script>
document.addEventListener('DOMContentLoaded', init, false);

function init(){
    document.getElementById("role").addEventListener('change', function(ev){
        var role = ev.target.value;
        var select = document.getElementById("recipientlocation");	

        if(role == 'Recipient'){
			$.ajax({
            url:"{{url('get-recipientlocation-by-role')}}",
            type: "POST",
            data: {
                role: role,
            _token: '{{csrf_token()}}' 
            },
            dataType : 'json',
            success: function(result){
                $.each(result.recipientlocation,function(key,value){  
						var option = document.createElement("option");
						option.text = value.name;
						option.value = value.name;				
						var recipientlocation = select;
						recipientlocation.appendChild(option);
				});					
            }
            });		        
        }
        else{
            document.getElementById("recipientlocation").options.length = 0; 
            var option = document.createElement("option");
						option.text = '';
						option.value = '';				
						var recipientlocation = select;
						recipientlocation.appendChild(option);				
       
        }

    }, false);
}
</script>

@endsection