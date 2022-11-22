@extends('warehouse.warehouse_master')
@section('warehouse-section')
<!-- BEGIN: Import JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- END: Import JQuery -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

<!-- BEGIN: Content -->
        <div class="content">
            <div class="grid grid-cols-12 gap-6 mt-5 relative">
                <div class="intro-y col-span-12 lg:col-span-12">
                    <!-- BEGIN: Display Information -->
<style id="Delivery note template_28139_Styles">
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.xl6528139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6628139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	background:white;
	mso-pattern:black none;
	white-space:nowrap;}
.xl6728139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6828139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl6928139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7028139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7128139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl7228139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:0;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl7328139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl7428139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl7528139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7628139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"mmm\\-yy";
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7728139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"mmm\\-yy";
	text-align:center;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7828139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7928139
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8028139
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:right;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8128139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8228139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8328139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8428139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8528139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8628139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"mmm\\-yy";
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8728139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8828139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8928139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl9028139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl9128139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9228139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9328139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl9428139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl9528139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl9628139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl9728139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9828139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9928139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10028139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10128139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10228139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10328139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10428139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10528139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Date";
	text-align:center;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10628139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10728139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl10828139
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
-->
</style>
<div class="p-5" style="width: 67%">
    @if($errors->any())
        <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
            Errors detected ...
        </div>
        <ul class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
            @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                
            @endforeach
        </ul>
    @endif
</div> 

<form id="orderrequestform" method="POST">
    @csrf

<div id="Delivery note template_28139" align=center x:publishsource="Excel">

<table border=0 cellpadding=0 cellspacing=0 width=866 class=xl6528139
 style='border-collapse:collapse;table-layout:fixed;width:651pt'>
 <col class=xl6528139 width=25 style='mso-width-source:userset;mso-width-alt:
 914;width:19pt'>
 <col class=xl6528139 width=252 style='mso-width-source:userset;mso-width-alt:
 9216;width:189pt'>
 <col class=xl6528139 width=116 style='mso-width-source:userset;mso-width-alt:
 4242;width:87pt'>
 <col class=xl6528139 width=44 style='mso-width-source:userset;mso-width-alt:
 1609;width:33pt'>
 <col class=xl6528139 width=48 style='mso-width-source:userset;mso-width-alt:
 1755;width:36pt'>
 <col class=xl6528139 width=47 style='mso-width-source:userset;mso-width-alt:
 1718;width:35pt'>
 <col class=xl6528139 width=45 style='mso-width-source:userset;mso-width-alt:
 1645;width:34pt'>
 <col class=xl7828139 width=92 style='mso-width-source:userset;mso-width-alt:
 3364;width:69pt'>
 <col class=xl6528139 width=58 style='mso-width-source:userset;mso-width-alt:
 2121;width:44pt'>
 <col class=xl6528139 width=69 style='mso-width-source:userset;mso-width-alt:
 2523;width:52pt'>
 <col class=xl6528139 width=70 style='mso-width-source:userset;mso-width-alt:
 2560;width:53pt'>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=11 rowspan=2 height=80 width=866 style='height:60.0pt;width:651pt'
  align=left valign=top><!--[if gte vml 1]><![endif]--><![if !vml]><span style='mso-ignore:vglayout;
  position:absolute;z-index:1;margin-left:782px;margin-top:7px;width:71px;
  height:75px'><img width=71 height=75
  src="{{ asset('logo/logo.png') }}"
  alt="APIN Logo,APIN Logo" v:shapes="Picture_x0020_1 _x0000_s20514"></span><![endif]><span
  style='mso-ignore:vglayout2'>
  <table cellpadding=0 cellspacing=0>
   <tr>
    <td colspan=11 rowspan=2 height=80 class=xl9128139 width=866
    style='height:60.0pt;width:651pt'><span style="font-size: 22px;">APIN RTKs/LAB. REAGENTS </span></td>
   </tr>
  </table>
  </span></td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=11 height=40 class=xl9228139 style='height:30.0pt'>ISSUE/DELIVERY
  NOTE</td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td colspan=3 height=20 class=xl9328139 width=393 style='height:15.0pt;
  width:295pt'>Deliver to: <input type="text" style="background-color: #F1F5F8;" id="recipientlocation" name="recipientlocation" value="{{ Auth::User()->recipientlocation }}" /></td>
  <td colspan=3 class=xl9528139 width=139 style='width:104pt'>Site Reference</td>
  <td colspan=5 class=xl6728139 style='border-left:none'><input class="w-full" style="background-color: #F1F5F8; height: 20px;" type="text" id="siterefnumber" name="siterefnumber" /></td>
 </tr>
 <tr height=28 style='mso-height-source:userset;height:21.0pt'>
  <td id="address" colspan=3 rowspan=3 height=84 class=xl9628139 width=393 style='border-right:
  .5pt solid black;border-bottom:.5pt solid black;height:63.0pt;width:295pt'> </td>
  <td colspan=3 class=xl9528139 width=139 style='border-left:none;width:104pt'>CMS
  Reference Number:</td>
  <td colspan=5 class=xl6728139 style='border-left:none'><input class="w-full" style="background-color: #F1F5F8; height: 28px" type="text" id="cmsrefnumber" name="cmsrefnumber" /></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td colspan=3 height=20 class=xl7028139 style='height:15.0pt;border-left:
  none'>Date:</td>
  <td colspan=5 class=xl10528139 style='border-left:none'>&nbsp;
  <input  style="background-color: #F1F5F8;" type="date" id="orderdate" name="orderdate" />
  <input  style="background-color: #F1F5F8;" type="hidden" id="requestedby" name="requestedby" value="{{ Auth::user()->name }}" />
  </td>
 </tr>
 <tr height=36 style='mso-height-source:userset;height:27.0pt'>
  <td colspan=3 height=36 class=xl10628139 style='height:27.0pt;border-left:
  none'>Contact Person:<span style='mso-spacerun:yes'> </span></td>
  <td colspan=5 class=xl6928139 style='border-left:none'>&nbsp;<input class="font-bold" name="locationcontactperson" id="locationcontactperson" type="text"  style="background-color: #F1F5F8" /></td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 width=50 class=xl6728139 style='height:30.0pt;border-top:none'>S/N</td>
  <td class=xl7028139 style='border-top:none;border-left:none'>Product</td>
  <td class=xl7028139 style='border-top:none;border-left:none'>Manufacturer</td>
  <td class=xl7128139 width=44 style='border-left:none;width:33pt'>Pack Size</td>
  <td class=xl7228139 width=48 style='border-left:none;width:36pt'>Qty /<br/>Carton</td>
  <td class=xl7328139 width=47 style='border-left:none;width:35pt'>Wgt/<br/>carton</td>
  <td class=xl7428139 width=45 style='border-top:none;border-left:none;
  width:34pt'>Total Weight(kg)</td>
  <td class=xl6728139 style='border-top:none;border-left:none'>Lot No</td>
  <td class=xl6728139 style='border-top:none;border-left:none'>Expiry</td>
  <td class=xl7428139 width=69 style='border-top:none;border-left:none;
  width:52pt'>Qty Issued</td>
  <td class=xl6728139 style='border-top:none;border-left:none'>Remarks</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl7528139 style='height:20.1pt;border-top:none'></td>
  <td height=26 class=xl8928139 width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname0" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;height:20.1pt" name="manufacturer[]" id="manufacturer0" class="w-full" readonly /</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7628139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;height:20.1pt" name="quantityrequested[]" id="quantityrequested0" min="1" class="font-bold w-full" /></td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl7528139 style='height:20.1pt;border-top:none'></td>
  <td height=26 class=xl8928139 width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname1" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;height:20.1pt" name="manufacturer[]" id="manufacturer1" class="w-full" readonly /</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7628139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;height:20.1pt" name="quantityrequested[]" id="quantityrequested1" min="1" class="font-bold w-full" /></td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl7528139 style='height:20.1pt;border-top:none'></td>
  <td height=26 class=xl8928139 width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname2" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;height:20.1pt" name="manufacturer[]" id="manufacturer2" class="w-full" readonly /</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7628139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;height:20.1pt" name="quantityrequested[]" id="quantityrequested2" min="1" class="font-bold w-full" /></td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl7528139 style='height:20.1pt;border-top:none'></td>
  <td height=26 class=xl8928139 width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname3" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;height:20.1pt" name="manufacturer[]" id="manufacturer3" class="w-full" readonly /</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7628139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;height:20.1pt" name="quantityrequested[]" id="quantityrequested3" min="1" class="font-bold w-full" /></td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl7528139 style='height:20.1pt;border-top:none'></td>
  <td height=26 class=xl8928139 width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname4" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;height:20.1pt" name="manufacturer[]" id="manufacturer4" class="w-full" readonly /</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7628139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;height:20.1pt" name="quantityrequested[]" id="quantityrequested4" min="1" class="font-bold w-full" /></td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl7528139 style='height:20.1pt;border-top:none'></td>
  <td height=26 class=xl8928139 width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname5" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;height:20.1pt" name="manufacturer[]" id="manufacturer5" class="w-full" readonly /</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7628139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;height:20.1pt" name="quantityrequested[]" id="quantityrequested5" min="1" class="font-bold w-full" /></td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl7528139 style='height:20.1pt;border-top:none'></td>
  <td height=26 class=xl8928139 width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname6" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;height:20.1pt" name="manufacturer[]" id="manufacturer6" class="w-full" readonly /</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7628139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;height:20.1pt" name="quantityrequested[]" id="quantityrequested6" min="1" class="font-bold w-full" /></td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl7528139 style='height:20.1pt;border-top:none'></td>
  <td height=26 class=xl8928139 width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname7" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;height:20.1pt" name="manufacturer[]" id="manufacturer7" class="w-full" readonly /</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7628139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;height:20.1pt" name="quantityrequested[]" id="quantityrequested7" min="1" class="font-bold w-full" /></td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl7528139 style='height:20.1pt;border-top:none'></td>
  <td height=26 class=xl8928139 width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname8" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;height:20.1pt" name="manufacturer[]" id="manufacturer8" class="w-full" readonly /</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7628139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;height:20.1pt" name="quantityrequested[]" id="quantityrequested8" min="1" class="font-bold w-full" /></td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl7528139 style='height:20.1pt;border-top:none'></td>
  <td height=26 class=xl8928139 width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname9" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;height:20.1pt" name="manufacturer[]" id="manufacturer9" class="w-full" readonly /</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7628139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;height:20.1pt" name="quantityrequested[]" id="quantityrequested9" min="1" class="font-bold w-full" /></td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl7528139 style='height:20.1pt;border-top:none'></td>
  <td height=26 class=xl8928139 width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname10" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;height:20.1pt" name="manufacturer[]" id="manufacturer10" class="w-full" readonly /</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7628139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;height:20.1pt" name="quantityrequested[]" id="quantityrequested10" min="1" class="font-bold w-full" /></td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl7528139 style='height:20.1pt;border-top:none'></td>
  <td height=26 class=xl8928139 width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname11" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;height:20.1pt" name="manufacturer[]" id="manufacturer11" class="w-full" readonly /</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7628139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;height:20.1pt" name="quantityrequested[]" id="quantityrequested11" min="1" class="font-bold w-full" /></td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl7528139 style='height:20.1pt;border-top:none'></td>
  <td height=26 class=xl8928139 width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname12" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;height:20.1pt" name="manufacturer[]" id="manufacturer12" class="w-full" readonly /</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7628139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;height:20.1pt" name="quantityrequested[]" id="quantityrequested12" min="1" class="font-bold w-full" /></td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl7528139 style='height:20.1pt;border-top:none'></td>
  <td height=26 class=xl8928139 width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname13" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;height:20.1pt" name="manufacturer[]" id="manufacturer13" class="w-full" readonly /</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7628139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;height:20.1pt" name="quantityrequested[]" id="quantityrequested13" min="1" class="font-bold w-full" /></td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl7528139 style='height:20.1pt;border-top:none'></td>
  <td height=26 class=xl8928139 width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname14" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;height:20.1pt" name="manufacturer[]" id="manufacturer14" class="w-full" readonly /</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7628139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;height:20.1pt" name="quantityrequested[]" id="quantityrequested14" min="1" class="font-bold w-full" /></td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl7528139 style='height:20.1pt;border-top:none'></td>
  <td height=26 class=xl8928139 width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname15" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;height:20.1pt" name="manufacturer[]" id="manufacturer15" class="w-full" readonly /</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7628139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;height:20.1pt" name="quantityrequested[]" id="quantityrequested15" min="1" class="font-bold w-full" /></td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl7528139 style='height:20.1pt;border-top:none'></td>
  <td height=26 class=xl8928139 width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname16" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;height:20.1pt" name="manufacturer[]" id="manufacturer16" class="w-full" readonly /</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7628139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;height:20.1pt" name="quantityrequested[]" id="quantityrequested16" min="1" class="font-bold w-full" /></td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl7528139 style='height:20.1pt;border-top:none'></td>
  <td height=26 class=xl8928139 width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname17" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;height:20.1pt" name="manufacturer[]" id="manufacturer17" class="w-full" readonly /</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7628139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;height:20.1pt" name="quantityrequested[]" id="quantityrequested17" min="1" class="font-bold w-full" /></td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl7528139 style='height:20.1pt;border-top:none'></td>
  <td height=26 class=xl8928139 width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname18" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;height:20.1pt" name="manufacturer[]" id="manufacturer18" class="w-full" readonly /</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7628139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;height:20.1pt" name="quantityrequested[]" id="quantityrequested18" min="1" class="font-bold w-full" /></td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl7528139 style='height:20.1pt;border-top:none'></td>
  <td height=26 class=xl8928139 width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname19" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;height:20.1pt" name="manufacturer[]" id="manufacturer19" class="w-full" readonly /</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7628139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;height:20.1pt" name="quantityrequested[]" id="quantityrequested19" min="1" class="font-bold w-full" /></td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl7528139 style='height:20.1pt;border-top:none'></td>
  <td height=26 class=xl8928139 width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname20" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;height:20.1pt" name="manufacturer[]" id="manufacturer20" class="w-full" readonly /></td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7628139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td height=26 class=xl7528139 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;height:20.1pt" name="quantityrequested[]" id="quantityrequested20" min="1" class="font-bold w-full" /></td>
  <td class=xl6928139 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>

 <tr height=17 style='mso-height-source:userset;height:12.75pt'>
  <td colspan="2" height=17 class=xl7028139 style='height:12.75pt'>Authorised by</td>
  <td class=xl7028139 style='border-left:none'>&nbsp;</td>
  <td colspan=4 class=xl10628139 style='border-left:none'>Issued by</td>
  <td colspan=5 class=xl10628139 style='border-left:none'>Received by</td>
 </tr>
 <tr height=44 style='mso-height-source:userset;height:33.0pt'>
  <td colspan=2 height=44 class=xl8828139 style='height:33.0pt'>Name:&nbsp;<input style="height: 22px; width: 80%; background-color: #F1F5F8;" id="authorizedby" name="authorizedby" type="text"/></td>
  <td colspan=4 class=xl9028139 width=255 style='border-left:none;width:191pt'>Name:
  <input style="height: 22px; width: 80%; background-color: #F1F5F8;" id="issuedby" name="issuedby" type="text"/></td>
  <td colspan=5 class=xl8828139 style='border-left:none'>Name:&nbsp;<input style="height: 22px; width: 80%; background-color: #F1F5F8;" id="receivedby" name="receivedby" type="text"/></td>
</td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.75pt'>
  <td height=33 class=xl7528139 style='height:24.75pt;border-top:none'>Sign<span
  style='display:none'>ature:……………………….</span></td>
  <td class=xl7528139 style='border-top:none;border-left:none'>&nbsp;</td>
  <td colspan=4 class=xl8828139 style='border-left:none'>Signature:……………………….</td>
  <td colspan=5 class=xl8828139 style='border-left:none'>Signature:……………………….</td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:13.5pt'>
  <td height=18 class=xl7528139 style='height:13.5pt;border-top:none'>Date: </td>
  <td class=xl7528139 style='border-top:none;border-left:none'>&nbsp;<input style="height: 22px; width: 80%; background-color: #F1F5F8;" id="dateauthorized" name="dateauthorized" type="date"/></td>
  <td colspan=4 class=xl8828139 style='border-left:none'>Date:&nbsp;<input style="height: 22px; width: 80%; background-color: #F1F5F8;" id="dateissued" name="dateissued" type="date"/></td>
  <td colspan=5 class=xl8828139 style='border-left:none'>Date:&nbsp;<input style="height: 22px; width: 80%; background-color: #F1F5F8;" id="datereceived" name="datereceived" type="date"/></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=25 style='width:19pt'></td>
  <td width=252 style='width:189pt'></td>
  <td width=116 style='width:87pt'></td>
  <td width=44 style='width:33pt'></td>
  <td width=48 style='width:36pt'></td>
  <td width=47 style='width:35pt'></td>
  <td width=45 style='width:34pt'></td>
  <td width=92 style='width:69pt'></td>
  <td width=58 style='width:44pt'></td>
  <td width=69 style='width:52pt'></td>
  <td width=70 style='width:53pt'></td>
 </tr>
 <![endif]>
</table>
<button type="submit" id="submitconsumableorderrequest" class="button w-20 bg-theme-1 text-white mt-3">Save</button>

</div>
</form>
                    <!-- END: Display Information -->
                </div>
         
            </div>
        </div>
        <!-- END: Content -->
        <!-- JQUERY -->
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', init, false)

function init(){

    getLocationSpecifics();
    setProductType();

	document.getElementById("submitconsumableorderrequest").addEventListener('click', submitconsumableorderrequest,false)
}

function getLocationSpecifics(){
    recipient = document.getElementById("recipientlocation").value;
    $.ajax({
            url:"{{url('get-recipient-details')}}",
            type: "POST",
            data: {
                recipient: recipient,
            _token: '{{csrf_token()}}' 
            },
            dataType : 'json',
            success: function(result){
                $.each(result.recipientdetails,function(key,value){
                    $("#locationcontactperson").val(value.contactperson);
                    $("#address").text(value.address);
                });
            }
            });     
}

function setProductType(){
    var producttype = 'CONSUMABLES';
			var select = document.getElementsByName("brandname[]");	

			for(i=0; i<select.length;i++){
//Get Element ID				
				var brandnameidname = 'brandname'+i;
				var manufacturer = 'manufacturer'+i;
//Reset Element Values
				document.getElementById(manufacturer).value = "";

				document.getElementById(brandnameidname).options.length = 0;
				var option = document.createElement("option");
						option.text = '';
						option.value = '';				
						var brandname_number = select[i];
						brandname_number.appendChild(option);				
			}
			$.ajax({
            url:"{{url('get-distinct-product-by-type')}}",
            type: "POST",
            data: {
                producttype: producttype,
            _token: '{{csrf_token()}}' 
            },
            dataType : 'json',
            success: function(result){
			for(i=0; i<select.length;i++){
                $.each(result.productdetails,function(key,value){  
						var option = document.createElement("option");
						option.text = value.brandname;
						option.value = value.brandname;				
						var brandname_number = select[i];
						brandname_number.appendChild(option);
				});					
			}
            }
            });			
}

function submitconsumableorderrequest(){
	event.preventDefault();

/* <!-- Check for constant elements that are empty --> */
	var recipientlocation = document.getElementById("recipientlocation").value;
    var siterefnumber = document.getElementById("siterefnumber").value;
    var cmsrefnumber = document.getElementById("cmsrefnumber").value;
    var orderdate = document.getElementById("orderdate").value;
    var locationcontactperson = document.getElementById("locationcontactperson").value;
    var orderstatus = "ORDERED";
    var requestedby = document.getElementById("requestedby").value;
    var requestdate = document.getElementById("orderdate").value;

	/* <!-- Validation checks and toastr notifications for constant elements that are empty --> */ 
if(recipientlocation == ""){toastr.error('input for recipientlocation is missing');recipientlocation_chk=0;}else{recipientlocation_chk=1;}   
if(siterefnumber == ""){toastr.error('input for siterefnumber is missing');siterefnumber_chk=0;}else{siterefnumber_chk=1;}   
if(cmsrefnumber == ""){toastr.error('input for cmsrefnumber is missing');cmsrefnumber_chk=0;}else{cmsrefnumber_chk=1;}   
if(orderdate == ""){toastr.error('input for orderdate is missing');orderdate_chk=0;}else{orderdate_chk=1;}   
if(locationcontactperson == ""){toastr.error('input for locationcontactperson is missing');locationcontactperson_chk=0;}else{locationcontactperson_chk=1;}   
if(orderstatus == ""){toastr.error('input for orderstatus is missing');orderstatus_chk=0;}else{orderstatus_chk=1;}   
if(requestedby == ""){toastr.error('input for requestedby is missing');requestedby_chk=0;}else{requestedby_chk=1;}   
if(requestdate == ""){toastr.error('input for requestdate is missing');requestdate_chk=0;}else{requestdate_chk=1;}   

if( recipientlocation_chk == 0 ||siterefnumber_chk == 0 ||cmsrefnumber_chk == 0 ||orderdate_chk == 0 ||locationcontactperson_chk == 0 ||orderstatus_chk == 0 ||requestedby_chk == 0 ||requestdate_chk == 0){
    toastr.warning('Failed Validation');
}
else{
    var select = document.getElementsByName("brandname[]");	
    const errorEncountered = [];
/* <!-- Validation checks for repeated elements that are empty like Quantity --> */ 
			for(i=0; i<select.length;i++){
                brandname = document.getElementById("brandname"+i).value;
                quantity = document.getElementById("quantityrequested"+i).value;

                if(brandname != '' && (!quantity || quantity == 0 || quantity== "" || quantity === undefined)){
                    errorEncountered.push(1);
                    toastr.error(brandname+': is missing quantity');
                }
            }
 /* <!-- Proceed to submit the form if there are no errors --> */ 
 if(errorEncountered.length == 0){
 /* <!-- Insert if brandname is set --> */ 
            for(i=0; i<select.length;i++){
                brandname = document.getElementById("brandname"+i).value;
                quantity = document.getElementById("quantityrequested"+i).value;
				producttype = 'CONSUMABLES';

                if(brandname && brandname != ''){
					insertIntoOrdersTable(recipientlocation,siterefnumber,cmsrefnumber,orderdate,locationcontactperson,orderstatus,requestedby,requestdate,brandname,quantity,producttype);
                }
            }
 /* <!-- Clear the Form after  all rows are inserted --> */ 
                document.getElementById("orderrequestform").reset();
            }
           else{
            toastr.warning('Validation Errors Found');
           }			
		}
}
function insertIntoOrdersTable(recipientlocation,siterefnumber,cmsrefnumber,orderdate,locationcontactperson,orderstatus,requestedby,requestdate,brandname,quantity,producttype){
            $.ajax({
            url:"{{url('save-order-request-consumables')}}",
            type: "POST",
            data: {
                requestlocation: recipientlocation,
                siterefnumber: siterefnumber,
                cmsrefnumber: cmsrefnumber,
                orderdate: orderdate,
                locationcontactperson: locationcontactperson,
                orderstatus: orderstatus,
                requestedby: requestedby,
                requestdate: requestdate,
                brandname: brandname,
                quantity: quantity,
                producttype: producttype,
            _token: '{{csrf_token()}}' 
            },
            dataType : 'json',
            success: function(result){
				if(result.ordersubmitoutcome){
                    toastr.success('Order: '+brandname+' created');
				}else{
                    toastr.error('Error creating order: '+brandname);
				}
            },
            error: function(result) {
				console.log('Error: '+result)
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
<!-- END JQUERY -->

@endsection		
