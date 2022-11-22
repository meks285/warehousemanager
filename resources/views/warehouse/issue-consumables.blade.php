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
                <div class="intro-y col-span-12 lg:col-span-7">
                    <!-- BEGIN: Display Information -->
<style id="Deliverynotetemplate_28139_Styles">
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
</style>
<div id="orderformdiv" class="intro-y box lg:mt-5">
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

<form id="issuerequestform" method="POST">
    @csrf

<div id="Deliverynotetemplate_28139" align=center x:publishsource="Excel">

<table border=0 cellpadding=0 cellspacing=0 width=866 class="xl6528139"
 style='border-collapse:collapse;table-layout:fixed;width:651pt'>
 <col class="xl6528139" width=25 style='mso-width-source:userset;mso-width-alt:
 914;width:19pt'>
 <col class="xl6528139" width=252 style='mso-width-source:userset;mso-width-alt:
 9216;width:189pt'>
 <col class="xl6528139" width=116 style='mso-width-source:userset;mso-width-alt:
 4242;width:87pt'>
 <col class="xl6528139" width=44 style='mso-width-source:userset;mso-width-alt:
 1609;width:33pt'>
 <col class="xl6528139" width=48 style='mso-width-source:userset;mso-width-alt:
 1755;width:36pt'>
 <col class="xl6528139" width=47 style='mso-width-source:userset;mso-width-alt:
 1718;width:35pt'>
 <col class="xl6528139" width=45 style='mso-width-source:userset;mso-width-alt:
 1645;width:34pt'>
 <col class="xl7828139" width=92 style='mso-width-source:userset;mso-width-alt:
 3364;width:69pt'>
 <col class="xl6528139" width=58 style='mso-width-source:userset;mso-width-alt:
 2121;width:44pt'>
 <col class="xl6528139" width=69 style='mso-width-source:userset;mso-width-alt:
 2523;width:52pt'>
 <col class="xl6528139" width=70 style='mso-width-source:userset;mso-width-alt:
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
    <td colspan=11 rowspan=2 height=80 class="xl9128139" width=866
    style='height:60.0pt;width:651pt'><span style="font-size: 22px;">APIN RTKs/LAB. REAGENTS </span></td>
   </tr>
  </table>
  </span></td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=11 height=40 class='xl9228139' style='height:30.0pt'>ISSUE/DELIVERY
  NOTE</td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td colspan=3 height=20 class='xl9328139' width=393 style='height:15.0pt;
  width:295pt'>Deliver to: <input type="text" style="background-color: #FFFFFF;" id="recipientlocation" name="recipientlocation" value="{{ Auth::User()->recipientlocation }}" /></td>
  <td colspan=3 class='xl9528139' width=139 style='width:104pt'>Site Reference</td>
  <td colspan=5 class='xl6728139' style='border-left:none'><input class="w-full" style="background-color: #FFFFFF; height: 20px;" type="text" id="siterefnumber" name="siterefnumber" /></td>
 </tr>
 <tr height=28 style='mso-height-source:userset;height:21.0pt'>
  <td id="address" colspan=3 rowspan=3 height=84 class='xl9628139' width=393 style='border-right:
  .5pt solid black;border-bottom:.5pt solid black;height:63.0pt;width:295pt'> </td>
  <td colspan=3 class='xl9528139' width=139 style='border-left:none;width:104pt'>CMS
  Reference Number:</td>
  <td colspan=5 class='xl6728139' style='border-left:none'><input class="w-full" style="background-color: #FFFFFF; height: 28px" type="text" id="cmsrefnumber" name="cmsrefnumber" /></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td colspan=3 height=20 class='xl7028139' style='height:15.0pt;border-left:
  none'>Date:</td>
  <td colspan=5 class='xl10528139' style='border-left:none'>&nbsp;
  <input  style="background-color: #FFFFFF;" type="date" id="orderdate" name="orderdate" />
  <input  style="background-color: #FFFFFF;" type="hidden" id="requestedby" name="requestedby" value="{{ Auth::user()->name }}" />
  </td>
 </tr>
 <tr height=36 style='mso-height-source:userset;height:27.0pt'>
  <td colspan=3 height=36 class='xl10628139' style='height:27.0pt;border-left:
  none'>Contact Person:<span style='mso-spacerun:yes'> </span></td>
  <td colspan=5 class='xl6928139' style='border-left:none'>&nbsp;<input class="font-bold" name="locationcontactperson" id="locationcontactperson" type="text"  style="background-color: #FFFFFF" /></td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 width=50 class=xl6728139 style='height:30.0pt;border-top:none'>S/N</td>
  <td class='xl7028139' style='border-top:none;border-left:none'>Product</td>
  <td class='xl7028139' style='border-top:none;border-left:none'>Manufacturer</td>
  <td class='xl7128139' width=44 style='border-left:none;width:33pt'>Pack Size</td>
  <td class='xl7228139' width=48 style='border-left:none;width:36pt'>Qty /<br/>Carton</td>
  <td class='xl7328139' width=47 style='border-left:none;width:35pt'>Wgt/<br/>carton</td>
  <td class='xl7428139' width=45 style='border-top:none;border-left:none; width:34pt'>Total Weight</td>
  <td class='xl6728139' style='border-top:none;border-left:none'>Lot No</td>
  <td class='xl6728139' style='border-top:none;border-left:none'>Expiry</td>
  <td class='xl7428139' width=69 style='border-top:none;border-left:none; width:52pt'>Qty Issued</td>
  <td class='xl6728139' style='border-top:none;border-left:none'>Remarks</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class='xl7528139' style='height:20.1pt;border-top:none'><input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid0" class="w-full" readonly /></td>
  <td height=26 class='xl8928139' width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname0" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="manufacturer[]" id="manufacturer0" class="w-full" readonly /</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="packsize[]" id="packsize0" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="qtypercarton[]" id="qtypercarton0" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'>&nbsp;</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="weight[]" id="weight0" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="lotno[]" id="lotno0" class="w-full" readonly /></td>
  <td class='xl7628139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="expirydate[]" id="expirydate0" class="w-full" readonly /></td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;height:20.1pt" name="quantity[]" id="quantity0" min="1" class="font-bold w-full" /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="remark[]" id="remark0" class="font-bold w-full" /></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
 <td height=26 class='xl7528139' style='height:20.1pt;border-top:none'><input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid1" class="w-full" readonly /></td>
  <td height=26 class='xl8928139' width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname1" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="manufacturer[]" id="manufacturer1" class="w-full" readonly /</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="packsize[]" id="packsize1" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="qtypercarton[]" id="qtypercarton1" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'>&nbsp;</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="weight[]" id="weight1" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="lotno[]" id="lotno1" class="w-full" readonly /></td>
  <td class='xl7628139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="expirydate[]" id="expirydate1" class="w-full" readonly /></td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;height:20.1pt" name="quantity[]" id="quantity1" min="1" class="font-bold w-full" /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="remark[]" id="remark1" class="font-bold w-full" /></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
 <td height=26 class='xl7528139' style='height:20.1pt;border-top:none'><input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid2" class="w-full" readonly /></td>
  <td height=26 class='xl8928139' width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname2" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="manufacturer[]" id="manufacturer2" class="w-full" readonly /</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="packsize[]" id="packsize2" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="qtypercarton[]" id="qtypercarton2" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'>&nbsp;</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="weight[]" id="weight2" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="lotno[]" id="lotno2" class="w-full" readonly /></td>
  <td class='xl7628139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="expirydate[]" id="expirydate2" class="w-full" readonly /></td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;height:20.1pt" name="quantity[]" id="quantity2" min="1" class="font-bold w-full" /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="remark[]" id="remark2" class="font-bold w-full" /></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
 <td height=26 class='xl7528139' style='height:20.1pt;border-top:none'><input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid3" class="w-full" readonly /></td>
  <td height=26 class='xl8928139' width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname3" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="manufacturer[]" id="manufacturer3" class="w-full" readonly /</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="packsize[]" id="packsize3" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="qtypercarton[]" id="qtypercarton3" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'>&nbsp;</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="weight[]" id="weight3" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="lotno[]" id="lotno3" class="w-full" readonly /></td>
  <td class='xl7628139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="expirydate[]" id="expirydate3" class="w-full" readonly /></td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;height:20.1pt" name="quantity[]" id="quantity3" min="1" class="font-bold w-full" /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="remark[]" id="remark3" class="font-bold w-full" /></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
 <td height=26 class='xl7528139' style='height:20.1pt;border-top:none'><input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid4" class="w-full" readonly /></td>
  <td height=26 class='xl8928139' width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname4" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="manufacturer[]" id="manufacturer4" class="w-full" readonly /</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="packsize[]" id="packsize4" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="qtypercarton[]" id="qtypercarton4" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'>&nbsp;</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="weight[]" id="weight4" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="lotno[]" id="lotno4" class="w-full" readonly /></td>
  <td class='xl7628139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="expirydate[]" id="expirydate4" class="w-full" readonly /></td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;height:20.1pt" name="quantity[]" id="quantity4" min="1" class="font-bold w-full" /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="remark[]" id="remark4" class="font-bold w-full" /></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
 <td height=26 class='xl7528139' style='height:20.1pt;border-top:none'><input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid5" class="w-full" readonly /></td>
  <td height=26 class='xl8928139' width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname5" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="manufacturer[]" id="manufacturer5" class="w-full" readonly /</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="packsize[]" id="packsize5" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="qtypercarton[]" id="qtypercarton5" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'>&nbsp;</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="weight[]" id="weight5" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="lotno[]" id="lotno5" class="w-full" readonly /></td>
  <td class='xl7628139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="expirydate[]" id="expirydate5" class="w-full" readonly /></td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;height:20.1pt" name="quantity[]" id="quantity5" min="1" class="font-bold w-full" /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="remark[]" id="remark5" class="font-bold w-full" /></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
 <td height=26 class='xl7528139' style='height:20.1pt;border-top:none'><input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid6" class="w-full" readonly /></td>
  <td height=26 class='xl8928139' width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname6" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="manufacturer[]" id="manufacturer6" class="w-full" readonly /</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="packsize[]" id="packsize6" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="qtypercarton[]" id="qtypercarton6" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'>&nbsp;</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="weight[]" id="weight6" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="lotno[]" id="lotno6" class="w-full" readonly /></td>
  <td class='xl7628139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="expirydate[]" id="expirydate6" class="w-full" readonly /></td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;height:20.1pt" name="quantity[]" id="quantity6" min="1" class="font-bold w-full" /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="remark[]" id="remark6" class="font-bold w-full" /></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
 <td height=26 class=xl7528139 style='height:20.1pt;border-top:none'><input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid7" class="w-full" readonly /></td>
  <td height=26 class=xl8928139 width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname7" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="manufacturer[]" id="manufacturer7" class="w-full" readonly /</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="packsize[]" id="packsize7" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="qtypercarton[]" id="qtypercarton7" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'>&nbsp;</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="weight[]" id="weight7" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="lotno[]" id="lotno7" class="w-full" readonly /></td>
  <td class='xl7628139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="expirydate[]" id="expirydate7" class="w-full" readonly /></td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;height:20.1pt" name="quantity[]" id="quantity7" min="1" class="font-bold w-full" /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="remark[]" id="remark7" class="font-bold w-full" /></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
 <td height=26 class='xl7528139' style='height:20.1pt;border-top:none'><input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid8" class="w-full" readonly /></td>
  <td height=26 class='xl8928139' width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname8" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="manufacturer[]" id="manufacturer8" class="w-full" readonly /</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="packsize[]" id="packsize8" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="qtypercarton[]" id="qtypercarton8" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'>&nbsp;</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="weight[]" id="weight8" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="lotno[]" id="lotno8" class="w-full" readonly /></td>
  <td class='xl7628139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="expirydate[]" id="expirydate8" class="w-full" readonly /></td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;height:20.1pt" name="quantity[]" id="quantity8" min="1" class="font-bold w-full" /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="remark[]" id="remark8" class="font-bold w-full" /></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
 <td height=26 class='xl7528139' style='height:20.1pt;border-top:none'><input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid9" class="w-full" readonly /></td>
  <td height=26 class='xl8928139' width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname9" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="manufacturer[]" id="manufacturer9" class="w-full" readonly /</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="packsize[]" id="packsize9" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="qtypercarton[]" id="qtypercarton9" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'>&nbsp;</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="weight[]" id="weight9" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="lotno[]" id="lotno9" class="w-full" readonly /></td>
  <td class='xl7628139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="expirydate[]" id="expirydate9" class="w-full" readonly /></td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;height:20.1pt" name="quantity[]" id="quantity9" min="1" class="font-bold w-full" /></td>
  <td class=xl6928139 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="remark[]" id="remark9" class="font-bold w-full" /></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
 <td height=26 class='xl7528139' style='height:20.1pt;border-top:none'><input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid10" class="w-full" readonly /></td>
  <td height=26 class='xl8928139' width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname10" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="manufacturer[]" id="manufacturer10" class="w-full" readonly /</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="packsize[]" id="packsize10" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="qtypercarton[]" id="qtypercarton10" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'>&nbsp;</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="weight[]" id="weight10" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="lotno[]" id="lotno10" class="w-full" readonly /></td>
  <td class='xl7628139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="expirydate[]" id="expirydate10" class="w-full" readonly /></td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;height:20.1pt" name="quantity[]" id="quantity10" min="1" class="font-bold w-full" /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="remark[]" id="remark10" class="font-bold w-full" /></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
 <td height=26 class='xl7528139' style='height:20.1pt;border-top:none'><input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid11" class="w-full" readonly /></td>
  <td height=26 class='xl8928139' width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname11" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="manufacturer[]" id="manufacturer11" class="w-full" readonly /</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="packsize[]" id="packsize11" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="qtypercarton[]" id="qtypercarton11" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'>&nbsp;</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="weight[]" id="weight11" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="lotno[]" id="lotno11" class="w-full" readonly /></td>
  <td class='xl7628139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="expirydate[]" id="expirydate11" class="w-full" readonly /></td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;height:20.1pt" name="quantity[]" id="quantity11" min="1" class="font-bold w-full" /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="remark[]" id="remark11" class="font-bold w-full" /></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
 <td height=26 class='xl7528139' style='height:20.1pt;border-top:none'><input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid12" class="w-full" readonly /></td>
  <td height=26 class='xl8928139' width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname12" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="manufacturer[]" id="manufacturer12" class="w-full" readonly /</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="packsize[]" id="packsize12" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="qtypercarton[]" id="qtypercarton12" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'>&nbsp;</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="weight[]" id="weight12" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="lotno[]" id="lotno12" class="w-full" readonly /></td>
  <td class='xl7628139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="expirydate[]" id="expirydate12" class="w-full" readonly /></td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;height:20.1pt" name="quantity[]" id="quantity12" min="1" class="font-bold w-full" /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="remark[]" id="remark12" class="font-bold w-full" /></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
 <td height=26 class='xl7528139' style='height:20.1pt;border-top:none'><input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid13" class="w-full" readonly /></td>
  <td height=26 class='xl8928139' width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname13" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="manufacturer[]" id="manufacturer13" class="w-full" readonly /</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="packsize[]" id="packsize13" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="qtypercarton[]" id="qtypercarton13" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'>&nbsp;</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="weight[]" id="weight13" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="lotno[]" id="lotno13" class="w-full" readonly /></td>
  <td class='xl7628139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="expirydate[]" id="expirydate13" class="w-full" readonly /></td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;height:20.1pt" name="quantity[]" id="quantity13" min="1" class="font-bold w-full" /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="remark[]" id="remark13" class="font-bold w-full" /></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
 <td height=26 class='xl7528139' style='height:20.1pt;border-top:none'><input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid14" class="w-full" readonly /></td>
  <td height=26 class='xl8928139' width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname14" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="manufacturer[]" id="manufacturer14" class="w-full" readonly /</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="packsize[]" id="packsize14" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="qtypercarton[]" id="qtypercarton14" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'>&nbsp;</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="weight[]" id="weight14" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="lotno[]" id="lotno14" class="w-full" readonly /></td>
  <td class='xl7628139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="expirydate[]" id="expirydate14" class="w-full" readonly /></td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;height:20.1pt" name="quantity[]" id="quantity14" min="1" class="font-bold w-full" /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="remark[]" id="remark14" class="font-bold w-full" /></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
 <td height=26 class='xl7528139' style='height:20.1pt;border-top:none'><input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid15" class="w-full" readonly /></td>
  <td height=26 class='xl8928139' width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname15" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="manufacturer[]" id="manufacturer15" class="w-full" readonly /</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="packsize[]" id="packsize15" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="qtypercarton[]" id="qtypercarton15" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'>&nbsp;</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="weight[]" id="weight15" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="lotno[]" id="lotno15" class="w-full" readonly /></td>
  <td class='xl7628139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="expirydate[]" id="expirydate15" class="w-full" readonly /></td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;height:20.1pt" name="quantity[]" id="quantity15" min="1" class="font-bold w-full" /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="remark[]" id="remark15" class="font-bold w-full" /></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
 <td height=26 class='xl7528139' style='height:20.1pt;border-top:none'><input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid16" class="w-full" readonly /></td>
  <td height=26 class='xl8928139' width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname16" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="manufacturer[]" id="manufacturer16" class="w-full" readonly /</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="packsize[]" id="packsize16" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="qtypercarton[]" id="qtypercarton16" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'>&nbsp;</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="weight[]" id="weight16" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="lotno[]" id="lotno16" class="w-full" readonly /></td>
  <td class='xl7628139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="expirydate[]" id="expirydate16" class="w-full" readonly /></td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;height:20.1pt" name="quantity[]" id="quantity16" min="1" class="font-bold w-full" /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="remark[]" id="remark16" class="font-bold w-full" /></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
 <td height=26 class='xl7528139' style='height:20.1pt;border-top:none'><input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid17" class="w-full" readonly /></td>
  <td height=26 class='xl8928139' width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname17" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="manufacturer[]" id="manufacturer17" class="w-full" readonly /</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="packsize[]" id="packsize17" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="qtypercarton[]" id="qtypercarton17" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'>&nbsp;</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="weight[]" id="weight17" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="lotno[]" id="lotno17" class="w-full" readonly /></td>
  <td class='xl7628139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="expirydate[]" id="expirydate17" class="w-full" readonly /></td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;height:20.1pt" name="quantity[]" id="quantity17" min="1" class="font-bold w-full" /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="remark[]" id="remark17" class="font-bold w-full" /></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
 <td height=26 class='xl7528139' style='height:20.1pt;border-top:none'><input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid18" class="w-full" readonly /></td>
  <td height=26 class='xl8928139' width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname18" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="manufacturer[]" id="manufacturer18" class="w-full" readonly /</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="packsize[]" id="packsize18" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="qtypercarton[]" id="qtypercarton18" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'>&nbsp;</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="weight[]" id="weight18" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="lotno[]" id="lotno18" class="w-full" readonly /></td>
  <td class='xl7628139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="expirydate[]" id="expirydate18" class="w-full" readonly /></td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;height:20.1pt" name="quantity[]" id="quantity18" min="1" class="font-bold w-full" /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="remark[]" id="remark18" class="font-bold w-full" /></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
 <td height=26 class='xl7528139' style='height:20.1pt;border-top:none'><input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid19" class="w-full" readonly /></td>
  <td height=26 class='xl8928139' width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname19" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="manufacturer[]" id="manufacturer19" class="w-full" readonly /</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="packsize[]" id="packsize19" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="qtypercarton[]" id="qtypercarton19" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'>&nbsp;</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="weight[]" id="weight19" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="lotno[]" id="lotno19" class="w-full" readonly /></td>
  <td class='xl7628139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="expirydate[]" id="expirydate19" class="w-full" readonly /></td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;height:20.1pt" name="quantity[]" id="quantity19" min="1" class="font-bold w-full" /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="remark[]" id="remark19" class="font-bold w-full" /></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
 <td height=26 class='xl7528139' style='height:20.1pt;border-top:none'><input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid20" class="w-full" readonly /></td>
  <td height=26 class='xl8928139' width=252 style='border-top:none;border-left:none;height:20.1pt;width:189pt'>  
  <select height=26 class="brandnameclass" id="brandname20" name="brandname[]" class="w-full" style="height:20.1pt;background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
</td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="manufacturer[]" id="manufacturer20" class="w-full" readonly /</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="packsize[]" id="packsize20" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="qtypercarton[]" id="qtypercarton20" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'>&nbsp;</td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="weight[]" id="weight20" class="w-full" readonly /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="lotno[]" id="lotno20" class="w-full" readonly /></td>
  <td class='xl7628139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="expirydate[]" id="expirydate20" class="w-full" readonly /></td>
  <td height=26 class='xl7528139' style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;height:20.1pt" name="quantity[]" id="quantity20" min="1" class="font-bold w-full" /></td>
  <td class='xl6928139' style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;height:20.1pt" name="remark[]" id="remark20" class="font-bold w-full" /></td>
 </tr>
 <tr height=17 style='mso-height-source:userset;height:12.75pt'>
  <td colspan="2" height=17 class='xl7028139' style='height:12.75pt'>Authorised by</td>
  <td class='xl7028139' style='border-left:none'>&nbsp;</td>
  <td colspan=4 class='xl10628139' style='border-left:none'>Issued by</td>
  <td colspan=5 class='xl10628139' style='border-left:none'>Received by</td>
 </tr>
 <tr height=44 style='mso-height-source:userset;height:33.0pt'>
  <td colspan=2 height=44 class=xl8828139 style='height:33.0pt'>
  @if(Auth::user()->role == 'Warehouse Manager' || Auth::user()->role == 'Supervisor')
		  <select id="authorizedby" name="authorizedby" style="background-color: #FFFFFF;" class="w-full">
			<option disabled selected ></option>
			<option value="{{ Auth::user()->name }}" >{{ Auth::user()->name }}</option>
			</select>
		@else
		<input type="text" name="authorizedby" id="authorizedby" class="w-50" style="background-color: #FFFFFF;" readonly />
		@endif  </td>
  <td colspan=4 class=xl9028139 width=255 style='border-left:none;width:191pt'>Name:
  <input style="height: 22px; width: 80%; background-color: #FFFFFF;" id="issuedby" name="issuedby" value="{{ Auth::User()->name }}" type="text" class="w-full"/></td>
  <td colspan=5 class=xl8828139 style='border-left:none'>Name:&nbsp;<input style="height: 22px; width: 80%; background-color: #FFFFFF;" id="receivedby" name="receivedby" type="text"/></td>
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
  <td class=xl7528139 style='border-top:none;border-left:none'>&nbsp;<input style="height: 22px; width: 80%; background-color: #FFFFFF;" id="dateauthorized" name="dateauthorized" type="date"/></td>
  <td colspan=4 class=xl8828139 style='border-left:none'>Date:&nbsp;<input style="height: 22px; width: 80%; background-color: #FFFFFF;" id="dateissued" name="dateissued" type="date"/></td>
  <td colspan=5 class=xl8828139 style='border-left:none'>Date:&nbsp;<input style="height: 22px; width: 80%; background-color: #FFFFFF;" id="datereceived" name="datereceived" type="date"/></td>
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
<button type="submit" id="issueconsumableorderrequest" class="button w-20 bg-theme-1 text-white mt-3">Save</button>
<button type="submit" id="authorizeconsumableorderrequest" style="display: none;" class="button w-20 bg-theme-3 text-white mt-3">Authorise</button>

</div>
</form>
</div>
<button id="printorderformbutton" onclick="printOrderForm()" style="display: none;" class="button w-20 bg-theme-6 text-white mt-3">Print</button>
                   <!-- END: Display Information -->
                </div>
                <div id="activeorderrequest" class="intro-y col-span-12 lg:col-span-5 relative inset-0 w-full min-h-screen lg:fixed lg:w-full/12" style="height: 1050.39px;">
                    <!-- BEGIN: Table Section Information -->
                    <div id="pendingordersdiv" class="intro-y box lg:mt-5" style="overflow: auto; height: 1050.39px">
                        <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                            <h2 class="font-medium text-base mr-auto">
                                Active Order Requests
                            </h2>
                        </div>
                        <div class="p-5" style="width: 67%">

                        </div>                         
                        <table class="table">
                        <thead>
                            <tr class="bg-red-700 dark:bg-dark-1 text-white">
                                <th class="whitespace-no-wrap">CMS #</th>
                                <th class="whitespace-no-wrap">From</th>
                                <th class="whitespace-no-wrap">Total Products</th>
                                <th class="whitespace-no-wrap">Requested By</th>
                            </tr>
                        </thead>
                        <tbody>
						@foreach($activeOrders as $activeOrders)
                            <tr>
							@if($activeOrders->orderstatus == 'AUTHORIZED')
                                <td class="border-b dark:border-dark-5"><a class="font-bold button" style="text-transform: uppercase; color: blue" onclick="getOrderDetails('{{ $activeOrders->cmsrefnumber }}','{{ $activeOrders->totalproducts }}','{{ $activeOrders->requestlocation }}')">{{ $activeOrders->cmsrefnumber }}</a></td>
                            @else 
							<td class="border-b dark:border-dark-5"><a class="font-bold button" style="text-transform: uppercase; color: #FEA213" onclick="getOrderDetails('{{ $activeOrders->cmsrefnumber }}','{{ $activeOrders->totalproducts }}')">{{ $activeOrders->cmsrefnumber }}</a></td>
							@endif
								<td class="border-b dark:border-dark-5">{{ $activeOrders->requestlocation }}</td>
                                <td class="border-b dark:border-dark-5 font-bold">{{ $activeOrders->totalproducts }}</td>
                                <td class="border-b dark:border-dark-5">{{ $activeOrders->requestedby }}</td>
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
document.addEventListener('DOMContentLoaded', init, false)

function init(){

    getLocationSpecifics();
    /* setProductType(); */

	document.getElementById("issueconsumableorderrequest").addEventListener('click', submitconsumableorderrequest,false);

    //Listen for change on any product line list selected
		document.getElementById("brandname0").addEventListener('change', function(ev){
			lotno = ev.target.value;
			elementid = 0;
			getProductDetailsBylotno(lotno,elementid);
		}, false);
		document.getElementById("brandname1").addEventListener('change', function(ev){
			lotno = ev.target.value;
			elementid = 1;
			getProductDetailsBylotno(lotno,elementid);
		}, false);
		document.getElementById("brandname2").addEventListener('change', function(ev){
			lotno = ev.target.value;
			elementid = 2;
			getProductDetailsBylotno(lotno,elementid);
		}, false);
		document.getElementById("brandname3").addEventListener('change', function(ev){
			lotno = ev.target.value;
			elementid = 3;
			getProductDetailsBylotno(lotno,elementid);

		}, false);
		document.getElementById("brandname4").addEventListener('change', function(ev){
			lotno = ev.target.value;
			elementid = 4;
			getProductDetailsBylotno(lotno,elementid);

		}, false);
		document.getElementById("brandname5").addEventListener('change', function(ev){
			lotno = ev.target.value;
			elementid = 5;
			getProductDetailsBylotno(lotno,elementid);

		}, false);
		document.getElementById("brandname6").addEventListener('change', function(ev){
			lotno = ev.target.value;
			elementid = 6;
			getProductDetailsBylotno(lotno,elementid);

		}, false);
		document.getElementById("brandname7").addEventListener('change', function(ev){
			lotno = ev.target.value;
			elementid = 7;
			getProductDetailsBylotno(lotno,elementid);

		}, false);
		document.getElementById("brandname8").addEventListener('change', function(ev){
			lotno = ev.target.value;
			elementid = 8;
			getProductDetailsBylotno(lotno,elementid);

		}, false);
		document.getElementById("brandname9").addEventListener('change', function(ev){
			lotno = ev.target.value;
			elementid = 9;
			getProductDetailsBylotno(lotno,elementid);

		}, false);
		document.getElementById("brandname10").addEventListener('change', function(ev){
			lotno = ev.target.value;
			elementid = 10;
			getProductDetailsBylotno(lotno,elementid);

		}, false);
		document.getElementById("brandname11").addEventListener('change', function(ev){
			lotno = ev.target.value;
			elementid = 11;
			getProductDetailsBylotno(lotno,elementid);

		}, false);
		document.getElementById("brandname12").addEventListener('change', function(ev){
			lotno = ev.target.value;
			elementid = 12;
			getProductDetailsBylotno(lotno,elementid);

		}, false);
		document.getElementById("brandname13").addEventListener('change', function(ev){
			lotno = ev.target.value;
			elementid = 13;
			getProductDetailsBylotno(lotno,elementid);

		}, false);
		document.getElementById("brandname14").addEventListener('change', function(ev){
			lotno = ev.target.value;
			elementid = 14;
			getProductDetailsBylotno(lotno,elementid);

		}, false);
		document.getElementById("brandname15").addEventListener('change', function(ev){
			lotno = ev.target.value;
			elementid = 15;
			getProductDetailsBylotno(lotno,elementid);

		}, false);
		document.getElementById("brandname16").addEventListener('change', function(ev){
			lotno = ev.target.value;
			elementid = 16;
			getProductDetailsBylotno(lotno,elementid);

		}, false);
		document.getElementById("brandname17").addEventListener('change', function(ev){
			lotno = ev.target.value;
			elementid = 17;
			getProductDetailsBylotno(lotno,elementid);

		}, false);
		document.getElementById("brandname18").addEventListener('change', function(ev){
			lotno = ev.target.value;
			elementid = 18;
			getProductDetailsBylotno(lotno,elementid);

		}, false);
		document.getElementById("brandname19").addEventListener('change', function(ev){
			lotno = ev.target.value;
			elementid = 19;
			getProductDetailsBylotno(lotno,elementid);

		}, false);
		document.getElementById("brandname20").addEventListener('change', function(ev){
			lotno = ev.target.value;
			elementid = 20;
			getProductDetailsBylotno(lotno,elementid);

		}, false);
//Listen for change on any quantityIssued, check if it exceed quantity In Stock
document.getElementById("quantity0").addEventListener('input', function(ev){
			quantityIssued = ev.target.value;
			elementid = 0;
			lotno = 'lotno'+elementid;
			productlotno = document.getElementById(lotno).value;
			getQuantityAvailableBylotno(productlotno,quantityIssued,elementid);

		}, false);
		document.getElementById("quantity1").addEventListener('input', function(ev){
			quantityIssued = ev.target.value;
			elementid = 1;
			lotno = 'lotno'+elementid;
			productlotno = document.getElementById(lotno).value;
			getQuantityAvailableBylotno(productlotno,quantityIssued,elementid);

		}, false);
		document.getElementById("quantity2").addEventListener('input', function(ev){
			quantityIssued = ev.target.value;
			elementid = 2;
			lotno = 'lotno'+elementid;
			productlotno = document.getElementById(lotno).value;
			getQuantityAvailableBylotno(productlotno,quantityIssued,elementid);

		}, false);
		document.getElementById("quantity3").addEventListener('input', function(ev){
			quantityIssued = ev.target.value;
			elementid = 3;
			lotno = 'lotno'+elementid;
			productlotno = document.getElementById(lotno).value;
			getQuantityAvailableBylotno(productlotno,quantityIssued,elementid);

		}, false);
		document.getElementById("quantity4").addEventListener('input', function(ev){
			quantityIssued = ev.target.value;
			elementid = 4;
			lotno = 'lotno'+elementid;
			productlotno = document.getElementById(lotno).value;
			getQuantityAvailableBylotno(productlotno,quantityIssued,elementid);

		}, false);
		document.getElementById("quantity5").addEventListener('input', function(ev){
			quantityIssued = ev.target.value;
			elementid = 5;
			lotno = 'lotno'+elementid;
			productlotno = document.getElementById(lotno).value;
			getQuantityAvailableBylotno(productlotno,quantityIssued,elementid);

		}, false);
		document.getElementById("quantity6").addEventListener('input', function(ev){
			quantityIssued = ev.target.value;
			elementid = 6;
			lotno = 'lotno'+elementid;
			productlotno = document.getElementById(lotno).value;
			getQuantityAvailableBylotno(productlotno,quantityIssued,elementid);

		}, false);
		document.getElementById("quantity7").addEventListener('input', function(ev){
			quantityIssued = ev.target.value;
			elementid = 7;
			lotno = 'lotno'+elementid;
			productlotno = document.getElementById(lotno).value;
			getQuantityAvailableBylotno(productlotno,quantityIssued,elementid);

		}, false);
		document.getElementById("quantity8").addEventListener('input', function(ev){
			quantityIssued = ev.target.value;
			elementid = 8;
			lotno = 'lotno'+elementid;
			productlotno = document.getElementById(lotno).value;
			getQuantityAvailableBylotno(productlotno,quantityIssued,elementid);

		}, false);
		document.getElementById("quantity9").addEventListener('input', function(ev){
			quantityIssued = ev.target.value;
			elementid = 9;
			lotno = 'lotno'+elementid;
			productlotno = document.getElementById(lotno).value;
			getQuantityAvailableBylotno(productlotno,quantityIssued,elementid);

		}, false);
		document.getElementById("quantity10").addEventListener('input', function(ev){
			quantityIssued = ev.target.value;
			elementid = 10;
			lotno = 'lotno'+elementid;
			productlotno = document.getElementById(lotno).value;
			getQuantityAvailableBylotno(productlotno,quantityIssued,elementid);

		}, false);
		document.getElementById("quantity11").addEventListener('input', function(ev){
			quantityIssued = ev.target.value;
			elementid = 11;
			lotno = 'lotno'+elementid;
			productlotno = document.getElementById(lotno).value;
			getQuantityAvailableBylotno(productlotno,quantityIssued,elementid);

		}, false);
		document.getElementById("quantity12").addEventListener('input', function(ev){
			quantityIssued = ev.target.value;
			elementid = 12;
			lotno = 'lotno'+elementid;
			productlotno = document.getElementById(lotno).value;
			getQuantityAvailableBylotno(productlotno,quantityIssued,elementid);

		}, false);
		document.getElementById("quantity13").addEventListener('input', function(ev){
			quantityIssued = ev.target.value;
			elementid = 13;
			lotno = 'lotno'+elementid;
			productlotno = document.getElementById(lotno).value;
			getQuantityAvailableBylotno(productlotno,quantityIssued,elementid);

		}, false);
		document.getElementById("quantity14").addEventListener('input', function(ev){
			quantityIssued = ev.target.value;
			elementid = 14;
			lotno = 'lotno'+elementid;
			productlotno = document.getElementById(lotno).value;
			getQuantityAvailableBylotno(productlotno,quantityIssued,elementid);

		}, false);
		document.getElementById("quantity15").addEventListener('input', function(ev){
			quantityIssued = ev.target.value;
			elementid = 15;
			lotno = 'lotno'+elementid;
			productlotno = document.getElementById(lotno).value;
			getQuantityAvailableBylotno(productlotno,quantityIssued,elementid);

		}, false);
		document.getElementById("quantity16").addEventListener('input', function(ev){
			quantityIssued = ev.target.value;
			elementid = 16;
			lotno = 'lotno'+elementid;
			productlotno = document.getElementById(lotno).value;
			getQuantityAvailableBylotno(productlotno,quantityIssued,elementid);

		}, false);
		document.getElementById("quantity17").addEventListener('input', function(ev){
			quantityIssued = ev.target.value;
			elementid = 17;
			lotno = 'lotno'+elementid;
			productlotno = document.getElementById(lotno).value;
			getQuantityAvailableBylotno(productlotno,quantityIssued,elementid);

		}, false);
		document.getElementById("quantity18").addEventListener('input', function(ev){
			quantityIssued = ev.target.value;
			elementid = 18;
			lotno = 'lotno'+elementid;
			productlotno = document.getElementById(lotno).value;
			getQuantityAvailableBylotno(productlotno,quantityIssued,elementid);

		}, false);
		document.getElementById("quantity19").addEventListener('input', function(ev){
			quantityIssued = ev.target.value;
			elementid = 19;
			lotno = 'lotno'+elementid;
			productlotno = document.getElementById(lotno).value;
			getQuantityAvailableBylotno(productlotno,quantityIssued,elementid);

		}, false);
		document.getElementById("quantity20").addEventListener('input', function(ev){
			quantityIssued = ev.target.value;
			elementid = 20;
			lotno = 'lotno'+elementid;authorisedby
			productlotno = document.getElementById(lotno).value;
			getQuantityAvailableBylotno(productlotno,quantityIssued,elementid);

		}, false);

 /* <!-- Authorize Order Request --> */ 
 document.getElementById("authorizeconsumableorderrequest").addEventListener('click', authorizeorder, false);

}

function authorizeorder(){
			event.preventDefault();

			var cmsrefnumber_order = document.getElementById("cmsrefnumber").value;
			var authorisedby = document.getElementById("authorizedby").value;
			var dateauthorized = document.getElementById("dateauthorized").value;
			var orderstatus = 'AUTHORIZED';
            console.log(cmsrefnumber_order +', '+authorisedby+', '+dateauthorized);
			if(cmsrefnumber_order == '' || authorisedby == '' || dateauthorized == ''){
				toastr.warning('Missing elements -- Provide Authorizer Information and CMS #');
			}
			else{
					var select = document.getElementsByName("brandname[]");	
		const errorEncountered = [];
	/* <!-- Validation checks for repeated elements that are empty like Quantity --> */ 
				for(i=0; i<select.length;i++){
					brandname = document.getElementById("brandname"+i).value;
					quantity = document.getElementById("quantity"+i).value;
					productorderid = document.getElementById("productorderid"+i).value;

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
					quantity = document.getElementById("quantity"+i).value;
					productorderid = document.getElementById("productorderid"+i).value;

					if(brandname && brandname != ''){
						authorizeIntoOrdersTable(cmsrefnumber_order,orderstatus,authorisedby,dateauthorized,quantity,productorderid);
					}
				}
	/* <!-- Clear the Form after  all rows are inserted --> */ 
					document.getElementById("issuerequestform").reset();
					toastr.success('Order request Authorized')
	/* <!-- Refresh active orders table --> */ 
					$("#pendingordersdiv").load(location.href + " #pendingordersdiv");
				}
			else{
				toastr.warning('Validation Errors Found');
			}		
		}

		}

        function authorizeIntoOrdersTable(cmsrefnumber,orderstatus,authorisedby,dateauthorized,quantity,productorderid){
	$.ajax({
            url:"{{url('authorize-order-request')}}",
            type: "POST",
            data: {
                cmsrefnumber: cmsrefnumber,
                authorisedby: authorisedby,
                dateauthorized: dateauthorized,
                orderstatus: orderstatus,
                quantity: quantity,
                productorderid: productorderid,
            _token: '{{csrf_token()}}' 
            },
            dataType : 'json',
            success: function(result){
				console.log(result)
            },
            error: function(result) {
				console.log(result)
            }
            });	
		}        

function getProductDetailsBylotno(productlotno,elementid){
//create element values
	var brandname = 'brandname'+elementid;
	var manufacturer = 'manufacturer'+elementid;
	var packsize = 'packsize'+elementid;
	var lotno = 'lotno'+elementid;
	var expirydate = 'expirydate'+elementid;
	/* var wgtctn = 'wgtctn'+elementid; */
	var weight = 'weight'+elementid;
	var quantity = 'quantity'+elementid;
	var brandnamebyid = document.getElementById(brandname);

//reset all field elements
	document.getElementById(manufacturer).value = "";
	document.getElementById(packsize).value = "";
	document.getElementById(lotno).value = "";
	document.getElementById(expirydate).value = "";
	/* document.getElementById(wgtctn).value = ""; */
	document.getElementById(weight).value = "";
	/* document.getElementById(quantity).value = ""; */

	$.ajax({
            url:"{{url('get-product-by-lotno')}}",
            type: "POST",
            data: {
                productlotno: productlotno,
            _token: '{{csrf_token()}}' 
            },
            dataType : 'json',
            success: function(result){
                $.each(result.productdetailsbylotno,function(key,value){  
//Assign values to elements
						var option = document.createElement("option");
						option.text = value.brandname;
						option.value = value.brandname;				
						var brandname_value = brandnamebyid;
//Create a new select option and add to top of the list via prepend				
						brandname_value.prepend(option);
//Display the newly created option as selected Option						
						brandname_value.selectedIndex = 0;
//Set element values with Database data
						document.getElementById(manufacturer).value=value.manufacturer;
						document.getElementById(packsize).value=value.packsize;
						document.getElementById(lotno).value=value.lotno;
						document.getElementById(expirydate).value=value.expirydate;
						document.getElementById(weight).value=value.weight;

//enable disabled elements for freetext entry		
						document.getElementById(weight).disabled = false;
						/* document.getElementById(wgtctn).disabled = false; */
						document.getElementById(quantity).disabled = false;
//Call notification function to alert on Quantity remaining for stock
						toastr.info('Availble quantity for Lot Number: '+value.lotno+' is: '+value.quantityremaining);

				});		
            }
            });	
		}

function getOrderDetails(cmsrefnumber,totalproducts,address){
/* <!-- Clear the form --> */ 
document.getElementById("issuerequestform").reset();

/* <!-- Empty Select tag for brandname --> */ 
    for(i=0; i<20; i++){
    brandname4clear = 'brandname'+i;
    var x, L = document.getElementById(brandname4clear).options.length - 1;
   for(x = L; x >= 0; x--) {
    document.getElementById(brandname4clear).remove(x);
   }
}


   $.ajax({
           url:"{{url('get-order-details-by-cmsrefnumber')}}",
           type: "POST",
           data: {
               cmsrefnumber: cmsrefnumber,
           _token: '{{csrf_token()}}' 
           },
           dataType : 'json',
           success: function(result){
                   $.each(result.orderdetails,function(key,value){ 
                   document.getElementById('recipientlocation').value = value.requestlocation;
                   document.getElementById('siterefnumber').value = value.siterefnumber;
                   document.getElementById('cmsrefnumber').value = value.cmsrefnumber;
                   /* document.getElementById('producttype').value = value.producttype; */
                   /* document.getElementById('issuedby').value = value.issuedby;
                   document.getElementById('issuedate').value = value.issuedate; */
                   document.getElementById('authorizedby').value = value.authorisedby;
                   document.getElementById('dateauthorized').value = value.dateauthorized;
                   document.getElementById('locationcontactperson').value = value.locationcontactperson;
                   /* document.getElementById('locationcontactphonenumber').value = value.locationcontactphonenumber; */
                   document.getElementById('orderdate').value = value.orderdate;

                   getLocationSpecifics();
               });		
               for(i=0; i<totalproducts; i++){
                   var orderdetailsreturn = result.orderdetails;
                       var brandname = document.getElementById("brandname"+i);
                       
                       var option = document.createElement("option");
                       option.text = orderdetailsreturn[i].brandname;
                       option.value = orderdetailsreturn[i].brandname;		
                       var brandname_value = brandname;
                       var productname = orderdetailsreturn[i].brandname;
//Create a new select option and add to top of the list via prepend				
                       brandname_value.prepend(option);
//Display the newly created option as selected Option						
                       brandname_value.selectedIndex = 0;	
                       
   /* <!-- Generate all existing lots of this product and append to the select list options --> */ 
   getAllProductLotno(productname,brandname);
   
                   document.getElementById("brandname"+i).value = orderdetailsreturn[i].brandname;
                   document.getElementById("manufacturer"+i).value = orderdetailsreturn[i].manufacturer;
                   document.getElementById("packsize"+i).value = orderdetailsreturn[i].packsize;
                   document.getElementById("lotno"+i).value = orderdetailsreturn[i].lotno;
                   /* document.getElementById("wgtctn"+i).value = orderdetailsreturn[i].wgtctn; */
                   document.getElementById("weight"+i).value = orderdetailsreturn[i].weight;
                   /* document.getElementById("expirydate"+i).value = orderdetailsreturn[i].expirydate; */
                   if(orderdetailsreturn[i].orderstatus == 'AUTHORIZED'){
                    document.getElementById("quantity"+i).value = orderdetailsreturn[i].quantityauthorized;
                   }
                   else{
                    document.getElementById("quantity"+i).value = orderdetailsreturn[i].quantity;
                   }
                   document.getElementById("remark"+i).value = orderdetailsreturn[i].remarks;
                   document.getElementById("productorderid"+i).value = orderdetailsreturn[i].id;



               }	
               if(document.getElementById("authorizedby").value == ''){
                   document.getElementById("issueconsumableorderrequest").style.display = 'none';
                   document.getElementById("authorizeconsumableorderrequest").style.display = 'block';
                   document.getElementById("printorderformbutton").style.display = 'none';
                   
               }		
               else{
                document.getElementById("issueconsumableorderrequest").style.display = 'block';
                   document.getElementById("authorizeconsumableorderrequest").style.display = 'none';
                   document.getElementById("printorderformbutton").style.display = 'block';

               }
           }
           });
       }	

     
       function getAllProductLotno(productname,columnname){
	$.ajax({
            url:"{{url('get-lotno-by-productname')}}",
            type: "POST",
            data: {
                productname: productname,
            _token: '{{csrf_token()}}' 
            },
            dataType : 'json',
            success: function(result){
                $.each(result.productdetails,function(key,value){  
						var option = document.createElement("option");
						option.text = value.brandname+', '+value.lotno;
						option.value = value.lotno;				
						var brandname_number = columnname;
						brandname_number.appendChild(option);
				});					
            }
            });

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

/* function setProductType(){
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
} */

function submitconsumableorderrequest(){
	event.preventDefault();

/* <!-- Check for constant elements that are empty --> */
	var recipientlocation = document.getElementById("recipientlocation").value;
    var siterefnumber = document.getElementById("siterefnumber").value;
    var cmsrefnumber = document.getElementById("cmsrefnumber").value;
    var orderdate = document.getElementById("orderdate").value;
    var locationcontactperson = document.getElementById("locationcontactperson").value;
    var orderstatus = "ISSUED";
    // var requestedby = document.getElementById("requestedby").value;
    // var requestdate = document.getElementById("orderdate").value;

    var issuedby = document.getElementById("issuedby").value;
    var issuedate = document.getElementById("dateissued").value;
    var authorisedby = document.getElementById("authorizedby").value;
    var dateauthorized = document.getElementById("dateauthorized").value;

	/* <!-- Validation checks and toastr notifications for constant elements that are empty --> */ 
if(recipientlocation == ""){toastr.error('input for recipientlocation is missing');recipientlocation_chk=0;}else{recipientlocation_chk=1;}   
if(siterefnumber == ""){toastr.error('input for siterefnumber is missing');siterefnumber_chk=0;}else{siterefnumber_chk=1;}   
if(cmsrefnumber == ""){toastr.error('input for cmsrefnumber is missing');cmsrefnumber_chk=0;}else{cmsrefnumber_chk=1;}   
if(orderdate == ""){toastr.error('input for orderdate is missing');orderdate_chk=0;}else{orderdate_chk=1;}   
if(locationcontactperson == ""){toastr.error('input for locationcontactperson is missing');locationcontactperson_chk=0;}else{locationcontactperson_chk=1;}   
if(orderstatus == ""){toastr.error('input for orderstatus is missing');orderstatus_chk=0;}else{orderstatus_chk=1;}   
// if(requestedby == ""){toastr.error('input for requestedby is missing');requestedby_chk=0;}else{requestedby_chk=1;}   
// if(requestdate == ""){toastr.error('input for requestdate is missing');requestdate_chk=0;}else{requestdate_chk=1;}   
if(issuedby == ""){toastr.error('input for issuedby is missing');issuedby_chk=0;}else{issuedby_chk=1;}   
if(issuedate == ""){toastr.error('input for issuedate is missing');issuedate_chk=0;}else{issuedate_chk=1;}   
if(authorisedby == ""){toastr.error('input for authorisedby is missing');authorisedby_chk=0;}else{authorisedby_chk=1;}   
if(dateauthorized == ""){toastr.error('input for dateauthorized is missing');dateauthorized_chk=0;}else{dateauthorized_chk=1;}   

if( issuedby_chk == 0 ||issuedate_chk == 0 ||recipientlocation_chk == 0 ||siterefnumber_chk == 0 ||cmsrefnumber_chk == 0 ||orderdate_chk == 0 ||locationcontactperson_chk == 0 ||orderstatus_chk == 0){
    toastr.warning('Failed Validation');
}
else{
    var select = document.getElementsByName("brandname[]");	
    const errorEncountered = [];
/* <!-- Validation checks for repeated elements that are empty like Quantity --> */ 
			for(i=0; i<select.length;i++){
                brandname = document.getElementById("brandname"+i).value;
                quantity = document.getElementById("quantity"+i).value;
                lotno = document.getElementById("lotno"+i).value;
				
                if(brandname != '' && (!quantity || quantity == 0 || quantity== "" || quantity === undefined)){
                    errorEncountered.push(1);
                    toastr.error(brandname+': is missing quantity');
                }
				if(brandname != '' && lotno == ''){
                    errorEncountered.push(1);
                    toastr.error(brandname+': is missing lotno, Select from list');
				}
            }
 /* <!-- Proceed to submit the form if there are no errors --> */ 
 if(errorEncountered.length == 0){
 /* <!-- Insert if brandname is set --> */ 
            for(i=0; i<select.length;i++){
                brandname = document.getElementById("brandname"+i).value;
                quantity = document.getElementById("quantity"+i).value;
                lotno = document.getElementById("lotno"+i).value;
                manufacturer = document.getElementById("manufacturer"+i).value;
                packsize = document.getElementById("packsize"+i).value;
                qtypercarton = document.getElementById("qtypercarton"+i).value;
                weight = document.getElementById("weight"+i).value;
                expirydate = document.getElementById("expirydate"+i).value;
                productorderid = document.getElementById("productorderid"+i).value;
                remarks = document.getElementById("remark"+i).value;
                if(brandname && brandname != ''){
					insertIntoOrdersTable(manufacturer,packsize,weight,authorisedby,dateauthorized,remarks,quantity,orderstatus,productorderid,lotno,issuedby,issuedate,brandname,recipientlocation,cmsrefnumber,expirydate);
                }
            }
 /* <!-- Clear the Form after  all rows are inserted --> */ 
                document.getElementById("issuerequestform").reset();
				toastr.success('Order Issued Succesfully');
            }
           else{
            toastr.warning('Validation Errors Found');
           }			
		}
}
function insertIntoOrdersTable(manufacturer,packsize,weight,authorisedby,dateauthorized,remarks,quantity,orderstatus,productorderid,lotno,issuedby,issuedate,brandname,recipientlocation,cmsrefnumber,expirydate){
            $.ajax({
            url:"{{url('issue-order-request')}}",
            type: "POST",
            data: {
                manufacturer: manufacturer,
                packsize: packsize,
                weight: weight,
                orderstatus: orderstatus,
                authorisedby: authorisedby,
                dateauthorized: dateauthorized,
                remarks: remarks,
                lotno: lotno,
                quantity: quantity,
                productorderid: productorderid,
                issuedby: issuedby,
                issuedate: issuedate,
            _token: '{{csrf_token()}}' 
            },
            dataType : 'json',
            success: function(result){
				if(result.status == 1){
				updateStockQuantity(quantity,lotno);
				insertIntoRecipientsTable(brandname,recipientlocation,quantity,lotno,issuedate,cmsrefnumber,expirydate);
				}
            }
            });	
        }
		function insertIntoRecipientsTable(brandname,requestlocation,quantity,lotno,issuedate,cmsrefnumber,expirydate){
		$.ajax({
            url:"{{url('insert-into-recipients-stock-table')}}",
            type: "POST",
            data: {
                cmsrefnumber: cmsrefnumber,
                brandname: brandname,
                requestlocation: requestlocation,
                quantity: quantity,
                lotno: lotno,
                issuedate: issuedate,
                expirydate: expirydate,
            _token: '{{csrf_token()}}' 
            },
            dataType : 'json',
            success: function(result){
				console.log(result)
				if(result.createrecipientstockoutcome == 1){
					toastr.success('Recipient Stock Created');
				}
				else{
					toastr.error('Error: Recipient Stock not created');
				}
            }
            });			
		}
		function updateStockQuantity(quantity,lotno){
		$.ajax({
            url:"{{url('update-stock-remainingquantity')}}",
            type: "POST",
            data: {
                quantity: quantity,
                lotno: lotno,
            _token: '{{csrf_token()}}' 
            },
            dataType : 'json',
            success: function(result){
            },
            error: function(result) {
            }
            });		
		}
function printOrderForm() {
    event.preventDefault();
     /* <!-- Hide activeorderrequest table --> */ 
    document.getElementById("activeorderrequest").style.display = 'none';
     /* <!-- Hide topbar -> the header div element --> */ 
     document.getElementById("topbar").style.display = 'none';
     document.getElementById("printorderformbutton").style.display = 'none';
     document.getElementById("issueconsumableorderrequest").style.display = 'none';
        
    window.print();
    /* <!-- Show activeorderrequest table --> */ 
         document.getElementById("activeorderrequest").style.display = 'block';
     /* <!-- Show topbar -> the header div element --> */ 
     document.getElementById("topbar").style.display = 'block';
     document.getElementById("printorderformbutton").style.display = 'block';
     document.getElementById("issueconsumableorderrequest").style.display = 'block';
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
