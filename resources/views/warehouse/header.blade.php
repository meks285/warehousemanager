<div id="topbar" class="border-b border-theme-24 -mt-10 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 pt-3 md:pt-0 mb-10">
            <div class="top-bar-boxed flex items-center">
                <!-- BEGIN: Logo -->
                <a href="" class="-intro-x hidden md:flex">
                    <img alt="APIN Warehouse Manager" class="w-6" src="{{ asset('logo/logo.png') }}">
                    <span class="text-white text-lg ml-3"> AWM </span>
                </a>
                <!-- END: Logo -->
                <!-- BEGIN: Breadcrumb -->
                <div class="-intro-x breadcrumb breadcrumb--light mr-auto"> <a href="" class="">{{ __('APIN') }}</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="{{ route('dashboard') }}" class="breadcrumb--active">{{ __('Warehouse Manager') }}</a>
                @if(Auth::User()->role == 'Recipient')
                <i data-feather="chevron-right" class="breadcrumb__icon"></i><a href="{{ route('dashboard') }}" class="breadcrumb--active">{{ Auth::User()->recipientlocation }}</a>
                @endif
            </div>
                <!-- END: Breadcrumb -->

                <!-- BEGIN: Account Menu -->
                <div class="intro-x dropdown w-8 h-8">
                    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110">
                        <img alt="" src="{{ asset('backend/assets/images/profile-13.jpg') }}">
                    </div>
                    <div class="dropdown-box w-56">
                        <div class="dropdown-box__content box bg-theme-38 dark:bg-dark-6 text-white">
                            <div class="p-4 border-b border-theme-40 dark:border-dark-3">
                                <div class="font-medium">{{ Auth::user()->name }}</div>
                                <div class="text-xs text-theme-41 dark:text-gray-600">
                                    @if(Auth::user()->role && Auth::user()->role=='Recipient')
                                    {{ Auth::user()->role }} | {{ Auth::User()->recipientlocation }}
                                    @elseif(Auth::user()->role && Auth::user()->role!='Recipient')
                                    {{ Auth::user()->role }}
                                    @else
                                    {{ __('Role not set') }}
                                    @endif
                                </div>
                            </div>
                            <div class="p-2">
                                <a href="{{ route('warehouse.user_profile') }}" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                                @if(Auth::user()->role == 'Warehouse Manager')
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                                <a href="{{ route('register.user') }}" target="_blank" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Create User </a>
                                @endif
                                <a href="{{ route('change.password') }}" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                            </div>
                    <div class="p-2 border-t border-theme-40 dark:border-dark-3">
                            <a href="{{ route('warehouse.logout') }}" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- END: Account Menu -->
            </div>
        </div>