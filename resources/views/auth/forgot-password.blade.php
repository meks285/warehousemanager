<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('logo/logo.png') }}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>AWM - Recover Password - APIN Warehouse Manager</title>
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
                            Password Recovery
                        </div>
                    </div>
                </div>
                <!-- END: Register Info -->
                <!-- BEGIN: Register Form -->
    <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
        <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
            <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                Recover Password
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
            <form method="POST" action="{{ route('password.email') }}">
            @csrf    
            <div class="intro-x flex text-gray-700 dark:text-gray-600 text-2xl xl:text-2xl mt-4">
            Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
            </div>                          
            <div class="intro-x mt-8 ">                         
                <input type="email" id="email" name="email" class="intro-x login__input input input--lg border border border-dark-3 block mt-4" placeholder="email">
            </div>
            <div class="flex items-center mt-4">
                <button type="submit" style="background-color: #A5CD39; width: 52%" class="button button--lg w-full xl:w-32 text-white xl:mr-3 align-top">Email Password Reset Link</button>
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
</html>