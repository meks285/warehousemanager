<nav class="top-nav">
            <ul>
                <li>
                    <a href="top-menu-light-dashboard.html" class="top-menu top-menu--active">
                        <div class="top-menu__icon"> <i data-feather="home"></i> </div>
                        <div class="top-menu__title" style="text-transform: uppercase;"> 
                        @if (Request::segment(2))
                            {{ Request::segment(2) }}
                            @elseif(Request::segment(1) == 'warehouse')
                            {{__('Dashboard')}}
                        @else
                            {{ Request::segment(1) }}
                        @endif
                    
                    </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="top-menu">
                        <div class="top-menu__icon"> <i data-feather="box"></i> </div>
                        <div class="top-menu__title"> Inventories 
                            <i data-feather="chevron-down" class="top-menu__sub-icon"></i> 
                        </div>
@if(Auth::User()->role != 'Recipient')
<div id="buttonCountHolder" style="display: none;">
  <span class="sr-only">Notifications</span>
  <div id="totalCount" class="inline-flex absolute -top-2 -right-2 justify-center items-center w-6 h-6 text-xs font-bold text-white bg-red-500 rounded-full border-2 border-white dark:border-gray-900"></div>
</div>
@endif
</a>
                    <ul class="">
                    @if(Auth::User()->role != 'Recipient')
                    <li>
                            <a href="{{ route('warehouse.newproduct') }}" class="top-menu">
                                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="top-menu__title"> New Product</div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('warehouse.receive_general') }}" class="top-menu">
                                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="top-menu__title"> Receive </div>
                            </a>
                        </li>
                    @endif
@if(Auth::User()->role != 'Recipient')                    
                        <li>
                            <a href="javascript:;" class="top-menu">
                                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="top-menu__title"> Issue 

<div id="buttonCountHolderIssue" style="display: none;" >
  <span class="sr-only">Notifications</span>
  <div id="totalCountIssue" class="inline-flex absolute -top-2 -right-2 justify-center items-center w-6 h-6 text-xs font-bold text-white bg-red-500 rounded-full border-2 border-white dark:border-gray-900"></div>
</div><i data-feather="chevron-down" class="top-menu__sub-icon"></i>
</div>

                            </a>
                            <ul class="">
                                <li>
                                    <a href="{{ route('warehouse.issue') }}" class="top-menu">
                                        <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="top-menu__title">Equipment
<div id="buttonCountHolderEq" style="display: none;" >
  <span class="sr-only">Notifications</span>
  <div id="totalCountEq" class="inline-flex absolute -top-2 -right-2 justify-center items-center w-6 h-6 text-xs font-bold text-white bg-red-500 rounded-full border-2 border-white dark:border-gray-900"></div>
</div>
</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('issue.consumables') }}" class="top-menu">
                                        <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="top-menu__title">Consumables
<div id="buttonCountHolderCons" style="display: none;" >
  <span class="sr-only">Notifications</span>
  <div id="totalCountCons" class="inline-flex absolute -top-2 -right-2 justify-center items-center w-6 h-6 text-xs font-bold text-white bg-red-500 rounded-full border-2 border-white dark:border-gray-900"></div>
</div>
</div>
                                    </a>
                                </li>
                            </ul>                            
                        </li>
@else
<!-- BEGIN recipients Issue Section -->
						<li>
                            <a href="javascript:;" class="top-menu">
                                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="top-menu__title"> Issue 
									<i data-feather="chevron-down" class="top-menu__sub-icon"></i>
								</div>

                            </a>
                            @if(Auth::User()->role == 'Recipient')
                            <ul class="">
                                <li>
                                    <a href="{{ route('warehouse.issue-recipient') }}" class="top-menu">
                                        <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="top-menu__title">All Commodities
								</div>
                                    </a>
                                </li>
                            </ul>  
                            @else
                            <ul class="">
                                <li>
                                    <a href="{{ route('warehouse.issue') }}" class="top-menu">
                                        <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="top-menu__title">Equipment
								</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('issue.consumables') }}" class="top-menu">
                                        <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="top-menu__title">Consumables
									</div>
                                    </a>
                                </li>
                            </ul>  
                            @endif                          
                        </li>
 <!-- END recipients Issue Section -->
						                        
@endif     
@if(Auth::User()->role == 'Recipient')                    

                        <li>
                            <a href="{{ route('warehouse.inventorytable_recipient') }}" class="top-menu">
                                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="top-menu__title"> Inventory Status Table</div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('warehouse.commoditiestable_recipient') }}" class="top-menu">
                                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="top-menu__title"> Commodities Table</div>
                            </a>
                        </li>

@else
<li>
                            <a href="{{ route('warehouse.inventorytable') }}" class="top-menu">
                                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="top-menu__title"> Inventory Status Table </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('warehouse.commoditiestable') }}" class="top-menu">
                                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="top-menu__title"> Commodities Table </div>
                            </a>
                        </li>

@endif                        
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="top-menu">
                        <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="top-menu__title"> Orders <i data-feather="chevron-down" class="top-menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="javascript:;" class="top-menu">
                                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="top-menu__title"> New Order Request  <i data-feather="chevron-down" class="top-menu__sub-icon"></i></div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="{{ route('warehouse.order-request') }}" class="top-menu">
                                        <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="top-menu__title">Equipment</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('warehouse.order-consumables') }}" class="top-menu">
                                        <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="top-menu__title">Consumables</div>
                                    </a>
                                </li>
                            </ul>                            
                        </li>
                    </ul>
                </li>
                @if(Auth::User()->role != 'Recipient')
                <li>
                    <a href="javascript:;" class="top-menu">
                        <div class="top-menu__icon"> <i data-feather="sidebar"></i> </div>
                        <div class="top-menu__title"> Suppliers <i data-feather="chevron-down" class="top-menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{ route('warehouse.supplier') }}" class="top-menu">
                                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="top-menu__title"> New Supplier </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-datepicker.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="top-menu__title"> Edit Supplier Information </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('warehouse.supplierstable') }}" class="top-menu">
                                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="top-menu__title"> Suppliers Table </div>
                            </a>
                        </li>
                    </ul>
                </li>     
                <li>
                    <a href="javascript:;" class="top-menu">
                        <div class="top-menu__icon"> <i data-feather="sidebar"></i> </div>
                        <div class="top-menu__title"> Recipients <i data-feather="chevron-down" class="top-menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{ route('warehouse.recipient') }}" class="top-menu">
                                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="top-menu__title"> New Recipient </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-datepicker.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="top-menu__title"> Edit Recipient </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('warehouse.recipientstable') }}" class="top-menu">
                                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="top-menu__title"> Recipients Table </div>
                            </a>
                        </li>
                    </ul>
                </li>                
                <li>
                    <a href="javascript:;" class="top-menu">
                        <div class="top-menu__icon"> <i data-feather="inbox"></i> </div>
                        <div class="top-menu__title"> SMS Center <i data-feather="chevron-down" class="top-menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="top-menu-light-accordion.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="top-menu__title"> Send Notification Request </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="top-menu">
                        <div class="top-menu__icon"> <i data-feather="hard-drive"></i> </div>
                        <div class="top-menu__title"> Settings <i data-feather="chevron-down" class="top-menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{ route('warehouse.supplier') }}" class="top-menu">
                                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="top-menu__title"> Register Supplier </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-slider.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="top-menu__title"> Create Cabinet  </div>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif



                <li>
                    <a href="javascript:;" class="top-menu">
                        <div class="top-menu__icon"> <i data-feather="hard-drive"></i> </div>
                        <div class="top-menu__title"> Reports <i data-feather="chevron-down" class="top-menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="top-menu-light-chart.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="top-menu__title"> Inflow </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-slider.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="top-menu__title"> Outflow </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-image-zoom.html" class="top-menu">
                                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="top-menu__title"> Stock Table </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- JQUERY -->
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', init, false)

function init(){
    $.ajax({
            url:"{{url('get-pending-order-request-for-notification')}}",
            type: "POST",
            data: {
                status: "request_count",
            _token: '{{csrf_token()}}' 
            },            
            dataType : 'json',
            success: function(result){
                orderCount = result.count.length;

                if(orderCount >= 1 && document.getElementById("buttonCountHolder") && document.getElementById("totalCount") && document.getElementById("buttonCountHolderIssue") && document.getElementById("totalCountIssue")){
                    document.getElementById("buttonCountHolder").style.display = 'block';
                    document.getElementById("totalCount").innerText = orderCount;
                    document.getElementById("buttonCountHolderIssue").style.display = 'block';
                    document.getElementById("totalCountIssue").innerText = orderCount;
                }
            }
            });  

            getPendingEquipmentOrderCount();
            getPendingConsumablesOrderCount();
}

function getPendingEquipmentOrderCount(){
    $.ajax({
            url:"{{url('get-pending-equipment-order-request-for-notification')}}",
            type: "POST",
            data: {
                status: "request_count",
            _token: '{{csrf_token()}}' 
            },            
            dataType : 'json',
            success: function(result){
                orderCountEq = result.count.length;

                if(orderCountEq >= 1 && document.getElementById("buttonCountHolderEq") && document.getElementById("totalCountEq")){
                    document.getElementById("buttonCountHolderEq").style.display = 'block';
                    document.getElementById("totalCountEq").innerText = orderCountEq;
                }
            }
            });  
        }
        function getPendingConsumablesOrderCount(){
    $.ajax({
            url:"{{url('get-pending-consumables-order-request-for-notification')}}",
            type: "POST",
            data: {
                status: "request_count",
            _token: '{{csrf_token()}}' 
            },            
            dataType : 'json',
            success: function(result){
                orderCountCons = result.count.length;
                
                if(orderCountCons >= 1){
                    document.getElementById("buttonCountHolderCons").style.display = 'block';
                    document.getElementById("totalCountCons").innerText = orderCountCons;
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