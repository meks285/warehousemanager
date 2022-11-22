
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('logo/logo.png') }}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>AWM - Register - APIN Warehouse Manager</title>
<!-- BEGIN: Import JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- END: Import JQuery -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('backend/assets/css/app.cs') }}s" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="login">
        <div class="container sm:px-10">
            <div class="block xl:grid grid-cols-2 gap-4">
                <!-- BEGIN: Register Info -->
                <div class="hidden xl:flex flex-col min-h-screen">
                    <a href="" class="-intro-x flex items-center pt-5">
                        <img alt="APIN Warehouse Manager" class="w-6" src="{{ asset('logo/logo.png') }}">
                        <span class="text-white text-lg ml-3"> APIN Warehouse Manager</span> </span>
                    </a>
                    <div class="my-auto">
                        <img alt="APIN Warehouse Manager" class="-intro-x w-1/2 -mt-16" src="{{ asset('logo/logo-big.png') }}">
                        <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                            Sign up to your account.
                        </div>
                        <div class="-intro-x mt-5 text-lg text-white dark:text-gray-500">Increase profitability, streamline warehousing operations.</div>
                    </div>
                </div>
                <!-- END: Register Info -->
                <!-- BEGIN: Register Form -->
    <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
        <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
            <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                Sign Up
            </h2>
            <div class="pb-0">
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
            <form method="POST" action="{{ route('store.user') }}">
            @csrf                              
            <div class="intro-x mt-8">                         
                <input type="text" id="name" name="name" class="intro-x login__input input input--lg border border-gray-300 block" placeholder="Name">
                <input type="text" id="username" name="username" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Username">
                <input type="email" id="email" name="email" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="email">
                <input type="password" id="password" name="password" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="password">
                <input type="password" id="password_confirmation" name="password_confirmation" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Confirm password">
                       <select id="role" name="role" data-search="true" class="tail-select intro-x login__input input input--lg border border-gray-300 block mt-4">
                           <option selected disabled ></option>
                           <option value="Admin">Admin</option>
                           <option value="Supervisor">Supervisor</option>
                           <option value="Warehouse Manager">Warehouse Manager</option>
                           <option value="Warehouse Assistant">Warehouse Assistant</option>
                           <option value="Store Keeper">Store Keeper</option>
                           <option value="Recipient">Recipient</option>
                       </select>
                       <select id="recipientlocation" name="recipientlocation" class="w-full intro-x login__input input input--lg border border-gray-300 block mt-4">
                            <option selected ></option>
                        </select>

            </div>

            <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left flex items-center">
                <button type="submit" style="background-color: #A5CD39;" class="button button--lg w-full xl:w-32 text-white xl:mr-3 align-top">Register</button>
                <a href="{{ route('login') }}" class="button button--lg w-full xl:w-32 text-gray-700 border border-gray-300 dark:border-dark-5 dark:text-gray-300 mt-3 xl:mt-0 align-top">Sign in</a>
            </div>
        </form>
        </div>
    </div>
                <!-- END: Register Form -->
            </div>
        </div>
        <!-- BEGIN: JS Assets-->
        <script src="{{ asset('backend/assets/js/app.js') }}"></script>
        <!-- END: JS Assets-->
    </body>
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
</html>