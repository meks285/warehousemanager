@extends('warehouse.warehouse_master')
@section('warehouse-section')
<!-- BEGIN: Import JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- END: Import JQuery -->                     

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
<div class="content">
            <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
                    <!-- BEGIN: General Report -->
                    <div class="col-span-12 mt-8">
                        <div class="intro-y flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">
                                General Report
                            </h2>
                            <a href="" class="ml-auto flex text-theme-1 dark:text-theme-10"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
                        </div>
                        @if(Auth::User()->role != 'Recipient')
                        <div class="grid grid-cols-12 gap-6 mt-5">
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">
                                            <i data-feather="shopping-cart" class="report-box__icon text-theme-10"></i> 
                                            <div class="ml-auto">
                                                <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="33% Higher than last month"> 100% <i data-feather="chevron-up" class="w-4 h-4"></i> </div>
                                            </div>
                                        </div>
                                        <div class="text-3xl font-bold leading-8 mt-6" id="total_commodity"></div>
                                        <div class="text-base text-gray-600 mt-1">Total Commodity</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">
                                            <i data-feather="monitor" class="report-box__icon text-theme-12"></i> 
                                            <div class="ml-auto">
                                                <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" id="commodities_issuedpercentage"> <i data-feather="chevron-up" class="w-4 h-4"></i> </div>
                                            </div>
                                        </div>
                                        <div class="text-3xl font-bold leading-8 mt-6" id="commodities_issued"></div>
                                        <div class="text-base text-gray-600 mt-1">Commodities Issued</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">
                                            <i data-feather="user" class="report-box__icon text-theme-9"></i> 
                                            <div class="ml-auto">
                                                <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" id="totalcommodity_instockpercentage"><i data-feather="chevron-up" class="w-4 h-4"></i> </div>
                                            </div>
                                        </div>
                                        <div class="text-3xl font-bold leading-8 mt-6" id="totalcommodity_instock"></div>
                                        <div class="text-base text-gray-600 mt-1">Total Commodity In-Stock</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">
                                            <i data-feather="credit-card" class="report-box__icon text-theme-11"></i> 
                                            <div class="ml-auto">
                                                <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" id="neworderpercentage"><i data-feather="chevron-down" class="w-4 h-4"></i> </div>
                                            </div>
                                        </div>
                                        <div class="text-3xl font-bold leading-8 mt-6" id="new_orders"></div>
                                        <div class="text-base text-gray-600 mt-1">New Orders</div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- END: General Report -->
                    <!-- BEGIN: Sales Report -->
                    <div class="col-span-12 lg:col-span-6 mt-8">
                        <div class="intro-y block sm:flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">
                                Inflow/OutFlow Report
                            </h2>
                        </div>
                        <div class="intro-y box p-5 mt-12 sm:mt-5">
                            <div class="flex flex-col xl:flex-row xl:items-center">
                                <div class="flex">
                                    <div>
                                        <div class="text-theme-20 dark:text-gray-300 text-lg xl:text-xl font-bold">Inflow</div>
                                        <div class="text-gray-600 dark:text-gray-600"></div>
                                    </div>
                                    <div class="w-px h-12 border border-r border-dashed border-gray-300 dark:border-dark-5 mx-4 xl:mx-6"></div>
                                    <div>
                                        <div class="text-gray-600 dark:text-gray-600 text-lg xl:text-xl font-medium">Outflow</div>
                                        <div class="text-gray-600 dark:text-gray-600"></div>
                                    </div>
                                </div>
                                <div class="dropdown xl:ml-auto mt-5 xl:mt-0">
                                    <button class="dropdown-toggle button font-normal border dark:border-dark-5 text-white dark:text-gray-300 relative flex items-center text-gray-700"> Filter <i data-feather="chevron-down" class="w-4 h-4 ml-2"></i> </button>
                                    <div class="dropdown-box w-40">
                                    </div>
                                </div>
                            </div>
                            <div class="report-chart">
                                <canvas id="report-line-chartweb" height="160" class="mt-6"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- END: Sales Report -->
                    <!-- BEGIN: Weekly Top Seller -->
                    <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
                        <div class="intro-y flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">
                                Top Suppliers
                            </h2>
                            <a href="" class="ml-auto text-theme-1 dark:text-theme-10 truncate">See all</a> 
                        </div>
                        <div class="intro-y box p-5 mt-5">
                            <canvas class="mt-3" id="report-pie-chartmeks" height="280"></canvas>
                            <div class="mt-8">
                            <div class="flex items-center mt-4">
                                    <div class="w-2 h-2 bg-theme-1 rounded-full mr-3"></div>
                                    <span class="truncate" id="firstsuppliername"></span> 
                                    <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                    <span class="font-medium xl:ml-auto" id="firstsupplierpercentage"></span> 
                                </div>
                                <div class="flex items-center mt-4">
                                    <div class="w-2 h-2 bg-theme-12 rounded-full mr-3"></div>
                                    <span class="truncate" id="secondsuppliername"></span> 
                                    <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                    <span class="font-medium xl:ml-auto" id="secondsupplierpercentage"></span> 
                                </div>                                
                                <div class="flex items-center mt-4">
                                    <div class="w-2 h-2 bg-theme-11 rounded-full mr-3"></div>
                                    <span class="truncate" id="thirdsuppliername"></span> 
                                    <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                    <span class="font-medium xl:ml-auto" id="thirdsupplierpercentage"></span> 
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- END: Weekly Top Seller -->
                    <!-- BEGIN: Top Recipients -->
                    <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
                        <div class="intro-y flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">
                                Top Recipients
                            </h2>
                            <a href="" class="ml-auto text-theme-1 dark:text-theme-10 truncate">See all</a> 
                        </div>
                        <div class="intro-y box p-5 mt-5">
                            <canvas class="mt-3" id="report-donut-chartmeks" height="280"></canvas>
                            <div class="mt-8">
                            <div class="flex items-center">
                                    <div class="w-2 h-2 bg-theme-1 rounded-full mr-3"></div>
                                    <span class="truncate" id="firstrecipientname"></span> 
                                    <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                    <span class="font-medium xl:ml-auto" id="first_recipient_percentage"></span> 
                                </div>
                                <div class="flex items-center mt-4">
                                    <div class="w-2 h-2 bg-theme-12 rounded-full mr-3"></div>
                                    <span class="truncate" id="secondrecipientname"></span> 
                                    <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                    <span class="font-medium xl:ml-auto" id="second_recipient_percentage"></span> 
                                </div>
                                <div class="flex items-center mt-4">
                                    <div class="w-2 h-2 bg-theme-11 rounded-full mr-3"></div>
                                    <span class="truncate" id="thirdrecipientname"></span> 
                                    <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                    <span class="font-medium xl:ml-auto" id="third_recipient_percentage"></span> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Sales Report -->
                </div>
                <div class="col-span-12 xxl:col-span-3 xxl:border-l border-theme-5 -mb-10 pb-10">
                    <div class="xxl:pl-6 grid grid-cols-12 gap-6">
                        <!-- BEGIN: Transactions -->
                        <div class="col-span-12 md:col-span-6 xl:col-span-4 xxl:col-span-12 mt-3 xxl:mt-8">
                            <div class="intro-x flex items-center h-10">
                                <h2 class="text-lg font-medium truncate mr-5">
                                    Latest Supplies
                                </h2>
                            </div>
                            <div class="mt-5">
                            @foreach($supplies as $latestsupplies)
                                <div class="intro-x">
                                    <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                            <img alt="Midone Tailwind HTML Admin Template" src="{{ asset('backend/assets/images/profile-15.jpg') }}">
                                        </div>
                                        <div class="ml-4 mr-auto">
                                            <div class="font-medium">{{ $latestsupplies->suppliedby }}</div>
                                            <div class="text-gray-600 text-xs">{{ $latestsupplies->brandname }} | {{ $latestsupplies->datereceived }}</div>
                                        </div>
                                        <div class="text-theme-9">{{ $latestsupplies->quantity }}</div>
                                    </div>
                                </div>
                            @endforeach
                                <a href="" class="intro-x w-full block text-center rounded-md py-3 border border-dotted border-theme-15 dark:border-dark-5 text-theme-16 dark:text-gray-600">View More</a> 
                            </div>
                        </div>
                        <!-- END: Transactions -->
                    </div>
                </div>

            </div>
        </div>
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

                if(orderCount >= 1){
                    toastr.info('You have '+orderCount+' pending Orders');
                }
            }
            });  

    dashboard_numbers();
}

function dashboard_numbers(){

    $.ajax({
            url:"{{url('get-dashboard-numbers')}}",
            type: "POST",
            data: {
            _token: '{{csrf_token()}}' 
            },            
            dataType : 'json',
            success: function(result){
                var total_supplier_count = parseInt(result.total_supplier_count[0].total_supplier_count);
                var first_supplier = result.topsuppliers[0].suppliedby;
                var first_supplier_total = parseInt(result.topsuppliers[0].supplies);
                var first_supplier_percentage = parseInt(first_supplier_total/total_supplier_count*100);
                //
                if(result.topsuppliers[1] !== undefined){
                var second_supplier = result.topsuppliers[1].suppliedby;
                var second_supplier_total = result.topsuppliers[1].supplies;
                var second_supplier_percentage = parseInt(second_supplier_total/total_supplier_count*100);
                }
                //
                if(result.topsuppliers[2] !== undefined){
                var third_supplier = result.topsuppliers[2].suppliedby;
                var third_supplier_total = result.topsuppliers[2].supplies;
                var third_supplier_percentage = parseInt(third_supplier_total/total_supplier_count*100);
                }

                var totalcommodity = parseInt(result.totalcommodity);
                var totalcommodityissued = parseInt(result.totalcommodityissued);
                var neworders = parseInt(result.neworders);
                var totalcommodityremaining = parseInt(result.totalcommodityremaining);
                var commodities_issued = totalcommodity - totalcommodityremaining;
                document.getElementById("total_commodity").innerHTML = totalcommodity.toLocaleString();
                document.getElementById("new_orders").innerHTML = neworders.toLocaleString();
                document.getElementById("commodities_issued").innerHTML = commodities_issued.toLocaleString();
                document.getElementById("totalcommodity_instock").innerHTML = totalcommodityremaining.toLocaleString();
                
                var neworderpercentage = parseFloat((neworders/totalcommodity)*100);
                document.getElementById("neworderpercentage").innerHTML = neworderpercentage.toFixed(2)+'%';

                var commodities_issuedpercentage = parseFloat((commodities_issued/totalcommodity)*100);
                document.getElementById("commodities_issuedpercentage").innerHTML = commodities_issuedpercentage.toFixed(2)+'%';

                var totalcommodity_instockpercentage = parseFloat((totalcommodityremaining/totalcommodity)*100);
                document.getElementById("totalcommodity_instockpercentage").innerHTML = totalcommodity_instockpercentage.toFixed(2)+'%';

      var ctx = cash('#report-line-chartweb')[0].getContext('2d');
      var myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [{
          label: '# of Supplies Inflow',
          data: [result.suppliesinflow[0].jan_inflow, result.suppliesinflow[0].feb_inflow, result.suppliesinflow[0].mar_inflow, result.suppliesinflow[0].apr_inflow, result.suppliesinflow[0].may_inflow, result.suppliesinflow[0].jun_inflow, result.suppliesinflow[0].jul_inflow, result.suppliesinflow[0].aug_inflow, result.suppliesinflow[0].sep_inflow, result.suppliesinflow[0].oct_inflow, result.suppliesinflow[0].nov_inflow, result.suppliesinflow[0].dec_inflow],
          borderWidth: 2,
          borderColor: '#3160D8',
          backgroundColor: 'transparent',
          pointBorderColor: 'transparent'
        }, {
          label: '# of Supplies Outflow',
          data: [result.suppliesoutflow[0].jan_outflow, result.suppliesoutflow[0].feb_outflow, result.suppliesoutflow[0].mar_outflow, result.suppliesoutflow[0].apr_outflow, result.suppliesoutflow[0].may_outflow, result.suppliesoutflow[0].jun_outflow, result.suppliesoutflow[0].jul_outflow, result.suppliesoutflow[0].aug_outflow, result.suppliesoutflow[0].sep_outflow, result.suppliesoutflow[0].oct_outflow, result.suppliesoutflow[0].nov_outflow, result.suppliesoutflow[0].dec_outflow],          borderWidth: 2,
          borderDash: [2, 2],
          borderColor: '#BCBABA',
          backgroundColor: 'transparent',
          pointBorderColor: 'transparent'
        }]
      },
      options: {
        legend: {
          display: false
        },
        scales: {
          xAxes: [{
            ticks: {
              fontSize: '12',
              fontColor: cash('html').hasClass('dark') ? '#718096' : '#777777'
            },
            gridLines: {
              display: false
            }
          }],
          yAxes: [{
            ticks: {
              fontSize: '12',
              fontColor: cash('html').hasClass('dark') ? '#718096' : '#777777',
              callback: function callback(value, index, values) {
                return value;
              }
            },
            gridLines: {
              color: cash('html').hasClass('dark') ? '#718096' : '#D8D8D8',
              zeroLineColor: cash('html').hasClass('dark') ? '#718096' : '#D8D8D8',
              borderDash: [2, 2],
              zeroLineBorderDash: [2, 2],
              drawBorder: false
            }
          }]
        }
      }
    });

var _ctx = cash('#report-pie-chartmeks')[0].getContext('2d');
var myPieChart = new Chart(_ctx, {
  type: 'pie',
  data: {
    labels: [third_supplier, second_supplier,first_supplier],
    datasets: [{
      data: [third_supplier_percentage, second_supplier_percentage, first_supplier_percentage],
      backgroundColor: ["#FF8B26", "#FFC533", "#285FD3"],
      hoverBackgroundColor: ["#FF8B26", "#FFC533", "#285FD3"],
      borderWidth: 5,
      borderColor: cash('html').hasClass('dark') ? '#303953' : '#fff'
    }]
  },
  options: {
    legend: {
      display: false
    }
  }
});   
document.getElementById("firstsuppliername").innerHTML = first_supplier;
document.getElementById("firstsupplierpercentage").innerHTML = first_supplier_percentage+'%';
document.getElementById("secondsuppliername").innerHTML = second_supplier;
document.getElementById("secondsupplierpercentage").innerHTML = second_supplier_percentage+'%';
document.getElementById("thirdsuppliername").innerHTML = third_supplier;
document.getElementById("thirdsupplierpercentage").innerHTML = third_supplier_percentage+'%';

                var total_recipient_count = parseInt(result.total_recipient_count[0].total_recipient_count);
                var first_recipient = result.toprecipient[0].requestlocation;
                var first_recipient_total = parseInt(result.toprecipient[0].recipients);
                var first_recipient_percentage = parseInt(first_recipient_total/total_recipient_count*100);

                var second_recipient = result.toprecipient[1].requestlocation;
                var second_recipient_total = parseInt(result.toprecipient[1].recipients);
                var second_recipient_percentage = parseInt(second_recipient_total/total_recipient_count*100);
                if (result.toprecipient[2] !== undefined) {
                    var third_recipient = result.toprecipient[2].requestlocation;
                    var third_recipient_total = parseInt(result.toprecipient[2].recipients);
                    var third_recipient_percentage = parseInt(third_recipient_total/total_recipient_count*100);
                 }
                 else{
                    var third_recipient = '';
                    var third_recipient_total = 0;
                    var third_recipient_percentage = 0;
                 }

                
var _ctx2 = cash('#report-donut-chartmeks')[0].getContext('2d');
var myDoughnutChart = new Chart(_ctx2, {
  type: 'doughnut',
  data: {
    labels: [third_recipient, second_recipient,first_recipient],
    datasets: [{
      data: [third_recipient, second_recipient_percentage, first_recipient_percentage],
      backgroundColor: ["#FF8B26", "#FFC533", "#285FD3"],
      hoverBackgroundColor: ["#FF8B26", "#FFC533", "#285FD3"],
      borderWidth: 5,
      borderColor: cash('html').hasClass('dark') ? '#303953' : '#fff'
    }]
  },
  options: {
    legend: {
      display: false
    },
    cutoutPercentage: 80
  }
});                
document.getElementById("firstrecipientname").innerHTML = first_recipient;
document.getElementById("first_recipient_percentage").innerHTML = first_recipient_percentage+'%';
document.getElementById("secondrecipientname").innerHTML = second_recipient;
document.getElementById("second_recipient_percentage").innerHTML = second_recipient_percentage+'%';
document.getElementById("thirdrecipientname").innerHTML = third_recipient;
document.getElementById("third_recipient_percentage").innerHTML = third_recipient_percentage+'%';
console.log(result.total_recipient_count[0].total_recipient_count)
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
@else
<input type="hidden" name="requestlocation" id="requestlocation" value="{{ Auth::User()->recipientlocation }}"/>
<div class="grid grid-cols-12 gap-6 mt-5">
<div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">
                                            <i data-feather="user" class="report-box__icon text-theme-9"></i> 
                                            <div class="ml-auto">
                                                <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer"><i data-feather="chevron-up" class="w-4 h-4"></i> </div>
                                            </div>
                                        </div>
                                        <div class="text-3xl font-bold leading-8 mt-6" id="total_requests"></div>
                                        <div class="text-base text-gray-600 mt-1">Total Requests</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">
                                            <i data-feather="monitor" class="report-box__icon text-theme-12"></i> 
                                            <div class="ml-auto">
                                                <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer"> <i data-feather="chevron-up" class="w-4 h-4"></i> </div>
                                            </div>
                                        </div>
                                        <div class="text-3xl font-bold leading-8 mt-6" id="order_requests_issued"></div>
                                        <div class="text-base text-gray-600 mt-1">Order Requests Treated</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">
                                            <i data-feather="shopping-cart" class="report-box__icon text-theme-10"></i> 
                                            <div class="ml-auto">
                                                <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="33% Higher than last month"> <i data-feather="chevron-up" class="w-4 h-4"></i> </div>
                                            </div>
                                        </div>
                                        <div class="text-3xl font-bold leading-8 mt-6" id="pending_orders_count"></div>
                                        <div class="text-base text-gray-600 mt-1">Pending Order Requests</div>
                                    </div>
                                </div>
                            </div>
                        </div>
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', init_recipients, false)

function init_recipients(){
    dashboard_numbers_recipient();
}
function dashboard_numbers_recipient(){
var recipientlocation = document.getElementById("requestlocation").value;
    $.ajax({
            url:"{{url('get-dashboard-numbers')}}",
            type: "POST",
            data: {
                location: recipientlocation,
                _token: '{{csrf_token()}}' 
            },            
            dataType : 'json',
            success: function(result){
                pendingorders = parseInt(result.pendingorderscount);
                treatedorders = parseInt(result.order_requests_issued);
                document.getElementById("pending_orders_count").innerHTML = result.pendingorderscount;
                document.getElementById("order_requests_issued").innerHTML = result.order_requests_issued;
                document.getElementById("total_requests").innerHTML = pendingorders+treatedorders;
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
@endif

@endsection        
