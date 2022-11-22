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
                    Order/Request Note:
                </h2>
            </div>
            <div class="grid grid-cols-12 gap-6 mt-5 relative">
                <div class="intro-y col-span-12 lg:col-span-12">
                    <!-- BEGIN: Display Information -->
                    <style id="template_11054_Styles">
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.xl1511054
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
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6311054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
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
.xl6411054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
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
.xl6511054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
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
	white-space:normal;}
.xl6611054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
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
.xl6711054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
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
.xl6811054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl6911054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
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
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7011054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
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
.xl7111054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
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
.xl7211054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7311054
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
	text-align:center;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7411054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
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
.xl7511054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
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
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7611054
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
	background:white;
	mso-pattern:black none;
	white-space:normal;}
.xl7711054
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
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7811054
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
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
	white-space:normal;}
.xl7911054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8011054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
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
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8111054
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
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8211054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:Scientific;
	text-align:center;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8311054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8411054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
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
.xl8511054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
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
.xl8611054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
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
.xl8711054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
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
	white-space:nowrap;}
.xl8811054
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
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8911054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9011054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9111054
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
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9211054
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
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9311054
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
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9411054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
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
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9511054
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
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9611054
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
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9711054
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Date";
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9811054
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
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9911054
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
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10011054
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
.xl10111054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
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
.xl10211054
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
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10311054
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
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10411054
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
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10511054
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
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10611054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10711054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10811054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10911054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl11011054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl11111054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl11211054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl11311054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl11411054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl11511054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl11611054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:16.0pt;
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
.xl11711054
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
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl11811054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
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
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl11911054
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
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl12011054
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
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl12111054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl12211054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl12311054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl12411054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl12511054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl12611054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl12711054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl12811054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl12911054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl13011054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl13111054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl13211054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl13311054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl13411054
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
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl13511054
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
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl13611054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Date";
	text-align:center;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl13711054
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Date";
	text-align:center;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
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
<div id="template_11054" align=center x:publishsource="Excel">

<table border=0 cellpadding=0 cellspacing=0 width=920 style='border-collapse:
 collapse;table-layout:fixed;width:692pt'>
 <col width=42 style='mso-width-source:userset;mso-width-alt:1536;width:32pt'>
 <col width=255 style='mso-width-source:userset;mso-width-alt:9325;width:191pt'>
 <col class=xl10011054 width=166 style='mso-width-source:userset;mso-width-alt:
 6070;width:125pt'>
 <col width=58 style='mso-width-source:userset;mso-width-alt:2121;width:44pt'>
 <col class=xl10111054 width=126 style='mso-width-source:userset;mso-width-alt:
 4608;width:95pt'>
 <col width=93 style='mso-width-source:userset;mso-width-alt:3401;width:70pt'>
 <col width=52 style='mso-width-source:userset;mso-width-alt:1901;width:39pt'>
 <col width=64 span=2 style='width:48pt'>
 <tr height=28 style='height:21.0pt'>
  <td colspan=9 height=28 class=xl11611054 width=920 style='height:21.0pt;
  width:692pt'>ORDER/REQUEST NOTE</td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td colspan=3 height=20 class=xl11811054 width=463 style='border-right:1.0pt solid black;height:15.0pt;width:348pt'>Request From:
  <select id="requestlocation" name="requestlocation" style="background-color: #F1F5F8;" >
       <option disabled selected ></option>
       <option value="{{ Auth::User()->recipientlocation }}">{{ Auth::User()->recipientlocation }}</option>
   </select> 
   </td>
  <td colspan=3 class=xl12111054 width=29 style='border-left:none;width:248pt'>Site Reference</td>
  <td colspan=3 class=xl12311054 style='border-right:1.0pt solid black'><input style="background-color: #F1F5F8;" type="text" id="siterefnumber" name="siterefnumber" /></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td id="address" colspan=3 rowspan=4 height=80 class=xl12511054 width=463
  style='border-right:1.0pt solid black;border-bottom:1.0pt solid black;
  height:60.0pt;width:348pt'>&nbsp;</td>
  <td colspan=3 class=xl13411054 width=329 style='border-left:none;width:248pt'>CMS Reference Number:</td>
  <td colspan=3 class=xl12311054 style='border-right:1.0pt solid black'><input style="background-color: #F1F5F8;" type="text" id="cmsrefnumber" name="cmsrefnumber" /></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td colspan=3 height=20 class=xl10611054 style='height:15.0pt;border-left: none'>Date:</td>
  <td colspan=3 class=xl13611054 style='border-right:1.0pt solid black'><input style="background-color: #F1F5F8;" type="date" id="orderdate" name="orderdate" /></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td colspan=6 height=20 class=xl10611054 style='border-right:1.0pt solid black;
  height:15.0pt;border-left:none'>Name: <input name="locationcontactperson" id="locationcontactperson" type="text"  style="background-color: #F1F5F8" /></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td colspan=6 height=20 class=xl10911054 style='border-right:1.0pt solid black;
  height:15.0pt;border-left:none'>Phone Number:<span style='mso-spacerun:yes'> <input style="background-color: #F1F5F8" name="locationcontactphonenumber" id="locationcontactphonenumber" type="text" /></span></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td colspan=9 height=20 class=xl11211054 width=920 style='border-right:1.0pt solid black;
  height:15.0pt;width:692pt'>Product Type:   
			<select id="producttype" name="producttype" style="background-color: #F1F5F8" >
			<option disabled selected ></option>
			<option value="EQUIPMENT">EQUIPMENT</option>
			</select>
   </td>
 </tr>
 <tr height=52 style='height:39.0pt'>
  <td height=52 class=xl6311054 style='height:39.0pt'>Code</td>
  <td class=xl6411054 style='border-left:none'>Product</td>
  <td class=xl6411054 style='border-left:none'>Manufacturer / Model</td>
  <td class=xl6511054 width=58 style='border-left:none;width:44pt'>Pack Size</td>
  <td class=xl6611054 style='border-left:none'><span id="serial_no">Serial No</span></td>
  <td class=xl6711054 width=93 style='border-left:none;width:70pt'>Wgt/CTN</td>
  <td class=xl6711054 width=52 style='border-left:none;width:39pt'>Total
  Wht(kg)</td>
  <td class=xl6811054 width=64 style='border-left:none;width:48pt'>Qty Req</td>
  <td class=xl6911054 style='border-left:none'>Remarks</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;</td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname0" name="brandname[]" class="w-full" style="background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="manufacturer[]" id="manufacturer0" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="packsize[]" id="packsize0" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="lotno[]" id="lotno0" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="wgtctn[]" id="wgtctn0" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;" name="weight[]" id="weight0" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number" style="background-color: #F1F5F8; font-weight: bold; font-size: 16px;" name="quantity" id="quantity0" class="w-full" disabled /></td>
  <td class=xl7311054 style='border-left:none'><input type="text" style="background-color: #F1F5F8;" name="remarks[]" id="remarks0" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;</td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname1" name="brandname[]" class="w-full" style="background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="manufacturer[]" id="manufacturer1" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="packsize[]" id="packsize1" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="lotno[]" id="lotno1" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="wgtctn[]" id="wgtctn1" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;" name="weight[]" id="weight1" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #F1F5F8; font-weight: bold; font-size: 16px;" name="quantity" id="quantity1" class="w-full" disabled /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="remarks[]" id="remarks1" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;</td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname2" name="brandname[]" class="w-full" style="background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="manufacturer[]" id="manufacturer2" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="packsize[]" id="packsize2" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="lotno[]" id="lotno2" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="wgtctn[]" id="wgtctn2" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;" name="weight[]" id="weight2" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #F1F5F8; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity2" class="w-full" disabled /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="remarks[]" id="remarks2" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;</td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname3" name="brandname[]" class="w-full" style="background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="manufacturer[]" id="manufacturer3" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="packsize[]" id="packsize3" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="lotno[]" id="lotno3" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="wgtctn[]" id="wgtctn3" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;" name="weight[]" id="weight3" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #F1F5F8; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity3" class="w-full" disabled /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="remarks[]" id="remarks3" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;</td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname4" name="brandname[]" class="w-full" style="background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="manufacturer[]" id="manufacturer4" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="packsize[]" id="packsize4" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="lotno[]" id="lotno4" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="wgtctn[]" id="wgtctn4" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;" name="weight[]" id="weight4" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #F1F5F8; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity4" class="w-full" disabled /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="remarks[]" id="remarks4" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;</td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname5" name="brandname[]" class="w-full" style="background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="manufacturer[]" id="manufacturer5" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="packsize[]" id="packsize5" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="lotno[]" id="lotno5" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="wgtctn[]" id="wgtctn5" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;" name="weight[]" id="weight5" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #F1F5F8; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity5" class="w-full" disabled /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="remarks[]" id="remarks5" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;</td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname6" name="brandname[]" class="w-full" style="background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="manufacturer[]" id="manufacturer6" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="packsize[]" id="packsize6" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="lotno[]" id="lotno6" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="wgtctn[]" id="wgtctn6" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;" name="weight[]" id="weight6" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #F1F5F8; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity6" class="w-full" disabled /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="remarks[]" id="remarks6" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;</td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname7" name="brandname[]" class="w-full" style="background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="manufacturer[]" id="manufacturer7" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="packsize[]" id="packsize7" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="lotno[]" id="lotno7" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="wgtctn[]" id="wgtctn7" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;" name="weight[]" id="weight7" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #F1F5F8; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity7" class="w-full" disabled /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="remarks[]" id="remarks7" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;</td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname8" name="brandname[]" class="w-full" style="background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="manufacturer[]" id="manufacturer8" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="packsize[]" id="packsize8" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="lotno[]" id="lotno8" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="wgtctn[]" id="wgtctn8" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;" name="weight[]" id="weight8" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #F1F5F8; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity8" class="w-full"  disabled /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="remarks[]" id="remarks8" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;</td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname9" name="brandname[]" class="w-full" style="background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="manufacturer[]" id="manufacturer9" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="packsize[]" id="packsize9" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="lotno[]" id="lotno9" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="wgtctn[]" id="wgtctn9" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;" name="weight[]" id="weight9" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #F1F5F8; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity9" class="w-full" disabled /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="remarks[]" id="remarks9" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;</td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname10" name="brandname[]" class="w-full" style="background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="manufacturer[]" id="manufacturer10" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="packsize[]" id="packsize10" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="lotno[]" id="lotno10" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="wgtctn[]" id="wgtctn10" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;" name="weight[]" id="weight10" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #F1F5F8; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity10" class="w-full" disabled /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="remarks[]" id="remarks10" class="w-full" /></td>
 </tr>

 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;</td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname11" name="brandname[]" class="w-full" style="background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="manufacturer[]" id="manufacturer11" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="packsize[]" id="packsize11" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="lotno[]" id="lotno11" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="wgtctn[]" id="wgtctn11" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;" name="weight[]" id="weight11" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #F1F5F8; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity11" class="w-full" disabled /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="remarks[]" id="remarks11" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;</td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname12" name="brandname[]" class="w-full" style="background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="manufacturer[]" id="manufacturer12" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="packsize[]" id="packsize12" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="lotno[]" id="lotno12" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="wgtctn[]" id="wgtctn12" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;" name="weight[]" id="weight12" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #F1F5F8; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity12" class="w-full" disabled /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="remarks[]" id="remarks12" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;</td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname13" name="brandname[]" class="w-full" style="background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="manufacturer[]" id="manufacturer13" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="packsize[]" id="packsize13" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="lotno[]" id="lotno13" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="wgtctn[]" id="wgtctn13" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;" name="weight[]" id="weight13" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #F1F5F8; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity13" class="w-full" disabled /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="remarks[]" id="remarks13" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;</td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname14" name="brandname[]" class="w-full" style="background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="manufacturer[]" id="manufacturer14" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="packsize[]" id="packsize14" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="lotno[]" id="lotno14" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="wgtctn[]" id="wgtctn14" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;" name="weight[]" id="weight14" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #F1F5F8; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity14" class="w-full" disabled /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="remarks[]" id="remarks14" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;</td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname15" name="brandname[]" class="w-full" style="background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="manufacturer[]" id="manufacturer15" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="packsize[]" id="packsize15" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="lotno[]" id="lotno15" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="wgtctn[]" id="wgtctn15" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;" name="weight[]" id="weight15" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #F1F5F8; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity15" class="w-full" disabled /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="remarks[]" id="remarks15" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;</td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname16" name="brandname[]" class="w-full" style="background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="manufacturer[]" id="manufacturer16" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="packsize[]" id="packsize16" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="lotno[]" id="lotno16" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="wgtctn[]" id="wgtctn16" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;" name="weight[]" id="weight16" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #F1F5F8; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity16" class="w-full" disabled /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="remarks[]" id="remarks16" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;</td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname17" name="brandname[]" class="w-full" style="background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="manufacturer[]" id="manufacturer17" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="packsize[]" id="packsize17" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="lotno[]" id="lotno17" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="wgtctn[]" id="wgtctn17" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;" name="weight[]" id="weight17" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #F1F5F8; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity17" class="w-full" disabled /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="remarks[]" id="remarks17" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;</td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname18" name="brandname[]" class="w-full" style="background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="manufacturer[]" id="manufacturer18" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="packsize[]" id="packsize18" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="lotno[]" id="lotno18" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="wgtctn[]" id="wgtctn18" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;" name="weight[]" id="weight18" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #F1F5F8; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity18" class="w-full" disabled /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="remarks[]" id="remarks18" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;</td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname19" name="brandname[]" class="w-full" style="background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="manufacturer[]" id="manufacturer19" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="packsize[]" id="packsize19" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="lotno[]" id="lotno19" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="wgtctn[]" id="wgtctn19" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;" name="weight[]" id="weight19" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #F1F5F8; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity19" class="w-full" disabled /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="remarks[]" id="remarks19" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;</td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname20" name="brandname[]" class="w-full" style="background-color: #F1F5F8;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="manufacturer[]" id="manufacturer20" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="packsize[]" id="packsize20" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="lotno[]" id="lotno20" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="wgtctn[]" id="wgtctn20" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #F1F5F8;" name="weight[]" id="weight20" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #F1F5F8; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity20" class="w-full" disabled /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #F1F5F8;" name="remarks[]" id="remarks20" class="w-full" /></td>
 </tr>

 <tr class=xl1511054 height=20 style='height:15.0pt'>
  <td height=20 class=xl7111054 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl8511054 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7111054 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7111054 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7111054 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6311054 style='border-top:none;border-left:none'>TOTAL WGT</td>
  <td class=xl7511054 style='border-top:none;border-left:none'><input class="w-full font-bold" style="background-color: #F1F5F8; font-size: 16px; " id="totalweight" name="totalweight" type="number" readonly /></td>
  <td class=xl8111054 style='border-top:none'>&nbsp;</td>
  <td class=xl8111054 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl8611054 style='height:15.75pt;border-top:none'>&nbsp;</td>
  <td class=xl8611054 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8611054 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8611054 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8611054 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8611054 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8711054 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8811054 style='border-top:none'>&nbsp;</td>
  <td class=xl8811054 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan="2" height=20 class=xl8911054 style='height:15.0pt'>Authorised By<span
  style='display:none'>rised by</span></td>
  <td class=xl9011054 style='border-left:none'>&nbsp;</td>
  <td colspan="2" class=xl8911054>Requested by</td>
  <td colspan=2 class=xl9011054 style='border-left:none'>&nbsp;</td>
  <td colspan=2 class=xl9011054 style='border-left:none'>Received by</td>
  <td class=xl9111054>&nbsp;</td>
  <td class=xl9211054 style='border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl9311054 style='height:15.0pt;border-top:none; border-right: none;'>Name:</td>
  <td class=xl9211054 style='border-top:none; border-right: none;'>
  		@if(Auth::user()->role == 'Warehouse Manager' || Auth::user()->role == 'Supervisor')
		  <select id="authorisedby" name="authorisedby" style="background-color: #F1F5F8" >
			<option disabled selected ></option>
			<option value="{{ Auth::user()->name }}" >{{ Auth::user()->name }}</option>
			</select>
		@endif
	</td>
  <td class=xl9411054 style='border-top:none'>Name: <input id='requestedby' name='requestedby' value='{{ Auth::User()->name }}' class='w-50' style='background-color: #F1F5F8' /></td>
  <td colspan=2 class=xl8111054 style='border-left:none'>&nbsp;</td>
  <td colspan=2 class=xl8111054 style='border-left:none'>Name:&nbsp;<input id='receivedby' name='receivedby' class='w-full' style='background-color: #F1F5F8' /></td>
  <td class=xl8111054 style='border-top:none'>&nbsp;</td>
  <td class=xl9511054 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl9311054 style='height:15.0pt;border-top:none; border-right: none;'>Signature:</td>
  <td class=xl8111054 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl9311054 style='border-top:none'>Signature:..……………………….</td>
  <td colspan=2 class=xl8111054 style='border-left:none'>&nbsp;</td>
  <td colspan=2 class=xl10211054 style='border-left:none'>Signature:………………….</td>
  <td class=xl8111054 style='border-top:none'>&nbsp;</td>
  <td class=xl9511054 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:13.5pt'>
  <td height=18 class=xl9611054 style='height:13.5pt;border-top:none'>Date:&nbsp;
  @if(Auth::user()->role == 'Warehouse Manager' || Auth::user()->role == 'Supervisor')
  <input type="date" name="dateauthorized" id="dateauthorized" class="w-50" style="background-color: #F1F5F8;" />
	@endif  
  </td>
  <td class=xl9711054 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl9611054 style='border-top:none'>Date: &nbsp;<input type="date" name="requestdate" id="requestdate" class="w-50" style="background-color: #F1F5F8;" /></td>
  <td colspan=2 class=xl9811054 style='border-left:none'>&nbsp;</td>
  <td colspan=2 class=xl10411054 style='border-left:none'>Date: &nbsp;</td>
  <td class=xl9811054 style='border-top:none'>&nbsp;</td>
  <td class=xl9911054 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=42 style='width:32pt'></td>
  <td width=255 style='width:191pt'></td>
  <td width=166 style='width:125pt'></td>
  <td width=58 style='width:44pt'></td>
  <td width=126 style='width:95pt'></td>
  <td width=93 style='width:70pt'></td>
  <td width=52 style='width:39pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=64 style='width:48pt'></td>
 </tr>
 <![endif]>
</table>
<button type="submit" id="submitorderrequest" class="button w-20 bg-theme-1 text-white mt-3">Save</button>
</div>

</form>
                    <!-- END: Display Information -->
                </div>
         
            </div>
        </div>
        <!-- END: Content -->
        <!-- JQUERY -->
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', init, false);
function init(){
/* <!-- add submit button addEventListener --> */
document.getElementById("submitorderrequest").addEventListener('click', function(ev){
    ev.preventDefault();

/* <!-- Check for constant elements that are empty --> */
    var requestlocation = document.getElementById("requestlocation").value;
    var siterefnumber = document.getElementById("siterefnumber").value;
    var cmsrefnumber = document.getElementById("cmsrefnumber").value;
    var orderdate = document.getElementById("orderdate").value;
    var locationcontactperson = document.getElementById("locationcontactperson").value;
    var locationcontactphonenumber = document.getElementById("locationcontactphonenumber").value;
    var producttype = document.getElementById("producttype").value;
    var orderstatus = "ORDERED";
    var requestedby = document.getElementById("requestedby").value;
    var requestdate = document.getElementById("requestdate").value;

/* <!-- Validation checks and toastr notifications for constant elements that are empty --> */ 
if(requestlocation == ""){toastr.error('input for requestlocation is missing');requestlocation_chk=0;}else{requestlocation_chk=1;}   
if(siterefnumber == ""){toastr.error('input for siterefnumber is missing');siterefnumber_chk=0;}else{siterefnumber_chk=1;}   
if(cmsrefnumber == ""){toastr.error('input for cmsrefnumber is missing');cmsrefnumber_chk=0;}else{cmsrefnumber_chk=1;}   
if(orderdate == ""){toastr.error('input for orderdate is missing');orderdate_chk=0;}else{orderdate_chk=1;}   
if(locationcontactperson == ""){toastr.error('input for locationcontactperson is missing');locationcontactperson_chk=0;}else{locationcontactperson_chk=1;}   
if(locationcontactphonenumber == ""){toastr.error('input for locationcontactphonenumber is missing');locationcontactphonenumber_chk=0;}else{locationcontactphonenumber_chk=1;}   
if(producttype == ""){toastr.error('input for producttype is missing');producttype_chk=0;}else{producttype_chk=1;}   
if(orderstatus == ""){toastr.error('input for orderstatus is missing');orderstatus_chk=0;}else{orderstatus_chk=1;}   
if(requestedby == ""){toastr.error('input for requestedby is missing');requestedby_chk=0;}else{requestedby_chk=1;}   
if(requestdate == ""){toastr.error('input for requestdate is missing');requestdate_chk=0;}else{requestdate_chk=1;}   

if( requestlocation_chk == 0 ||siterefnumber_chk == 0 ||cmsrefnumber_chk == 0 ||orderdate_chk == 0 ||locationcontactperson_chk == 0 ||locationcontactphonenumber_chk == 0 ||producttype_chk == 0 ||orderstatus_chk == 0 ||requestedby_chk == 0 ||requestdate_chk == 0){
    toastr.warning('Failed Validation');
}
else{
    var select = document.getElementsByName("brandname[]");	
    const errorEncountered = [];
/* <!-- Validation checks for repeated elements that are empty like Quantity --> */ 
			for(i=0; i<select.length;i++){
                brandname = document.getElementById("brandname"+i).value;
                manufacturer = document.getElementById("manufacturer"+i).value;
                packsize = document.getElementById("packsize"+i).value;
                lotno = document.getElementById("lotno"+i).value;
                wgtctn = document.getElementById("wgtctn"+i).value;
                weight = document.getElementById("weight"+i).value;
                quantity = document.getElementById("quantity"+i).value;
                remarks = document.getElementById("remarks"+i).value;

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
                manufacturer = document.getElementById("manufacturer"+i).value;
                packsize = document.getElementById("packsize"+i).value;
                lotno = document.getElementById("lotno"+i).value;
                wgtctn = document.getElementById("wgtctn"+i).value;
                weight = document.getElementById("weight"+i).value;
                quantity = document.getElementById("quantity"+i).value;
                remarks = document.getElementById("remarks"+i).value;

                if(brandname && brandname != ''){
                    insertIntoOrdersTable(requestlocation,siterefnumber,cmsrefnumber,orderdate,locationcontactperson,locationcontactphonenumber,producttype,orderstatus,requestedby,requestdate,brandname,manufacturer,packsize,lotno,wgtctn,weight,quantity,remarks);
                }
            }
 /* <!-- Clear the Form after  all rows are inserted --> */ 
                document.getElementById("orderrequestform").reset();
            }
           else{
            toastr.warning('Validation Errors Found');
           }
}

}, false);
/* <!-- get name & phonenumber information when requestlocation changes  --> */ 
        $('#requestlocation').change(function(){
            var recipient = this.value;
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
                    $("#locationcontactphonenumber").val(value.contactpersonphonenumber);
                    $("#address").text(value.address);
                });
            }
            });        
        });

		document.getElementById('producttype').addEventListener('change', function(ev){
			var producttype = ev.target.value;
			var select = document.getElementsByName("brandname[]");	

			for(i=0; i<select.length;i++){
//Get Element ID				
				var brandnameidname = 'brandname'+i;
				var manufacturer = 'manufacturer'+i;
				var lotno = 'lotno'+i;
				var packsize = 'packsize'+i;
				var quantity = 'quantity'+i;
				var weight = 'weight'+i;
//Reset Element Values
				document.getElementById(lotno).value = "";
				document.getElementById(manufacturer).value = "";
				document.getElementById(packsize).value = "";
				document.getElementById(quantity).value = "";
				document.getElementById(weight).value = 0;
//Set Total Weight to int value 0 to enable calculations 
				document.getElementById("totalweight").value = 0;

				document.getElementById(brandnameidname).options.length = 0;
				var option = document.createElement("option");
						option.text = '';
						option.value = '';				
						var brandname_number = select[i];
						brandname_number.appendChild(option);				
			}
			$.ajax({
            url:"{{url('get-product-by-type')}}",
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
						option.value = value.lotno;				
						var brandname_number = select[i];
						brandname_number.appendChild(option);
				});					
			}
            }
            });			
			if(producttype=="EQUIPMENT"){
				document.getElementById('serial_no').innerText = 'Serial No';
			}
			else{
				document.getElementById('serial_no').innerText = 'Lot No';
			} 
		}, false);

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

//Add Weights to derive total weight
//Set initial total weight value to Zero
var totalweight = 0;

		document.getElementById("weight0").addEventListener('change', function(){
			totalweight = 0;
			var select = document.getElementsByName("brandname[]");	
			for(i=0; i<select.length;i++){
				totalweight += parseInt(document.getElementById('weight'+i).value);
			}
			document.getElementById("totalweight").value = totalweight;
		});
		document.getElementById("weight1").addEventListener('change', function(){
			totalweight = 0;
			var select = document.getElementsByName("brandname[]");	
			for(i=0; i<select.length;i++){
				totalweight += parseInt(document.getElementById('weight'+i).value);
			}
			document.getElementById("totalweight").value = totalweight;

		});
		document.getElementById("weight2").addEventListener('change', function(){
			totalweight = 0;
			var select = document.getElementsByName("brandname[]");	
			for(i=0; i<select.length;i++){
				totalweight += parseInt(document.getElementById('weight'+i).value);
			}
			document.getElementById("totalweight").value = totalweight;

		});
		document.getElementById("weight3").addEventListener('change', function(){
			totalweight = 0;
			var select = document.getElementsByName("brandname[]");	
			for(i=0; i<select.length;i++){
				totalweight += parseInt(document.getElementById('weight'+i).value);
			}
			document.getElementById("totalweight").value = totalweight;

		});
		document.getElementById("weight4").addEventListener('change', function(){
			totalweight = 0;
			var select = document.getElementsByName("brandname[]");	
			for(i=0; i<select.length;i++){
				totalweight += parseInt(document.getElementById('weight'+i).value);
			}
			document.getElementById("totalweight").value = totalweight;

		});
		document.getElementById("weight5").addEventListener('change', function(){
			totalweight = 0;
			var select = document.getElementsByName("brandname[]");	
			for(i=0; i<select.length;i++){
				totalweight += parseInt(document.getElementById('weight'+i).value);
			}
			document.getElementById("totalweight").value = totalweight;

		});
		document.getElementById("weight6").addEventListener('change', function(){
			totalweight = 0;
			var select = document.getElementsByName("brandname[]");	
			for(i=0; i<select.length;i++){
				totalweight += parseInt(document.getElementById('weight'+i).value);
			}
			document.getElementById("totalweight").value = totalweight;

		});
		document.getElementById("weight7").addEventListener('change', function(){
			totalweight = 0;
			var select = document.getElementsByName("brandname[]");	
			for(i=0; i<select.length;i++){
				totalweight += parseInt(document.getElementById('weight'+i).value);
			}
			document.getElementById("totalweight").value = totalweight;

		});
		document.getElementById("weight8").addEventListener('change', function(){
			totalweight = 0;
			var select = document.getElementsByName("brandname[]");	
			for(i=0; i<select.length;i++){
				totalweight += parseInt(document.getElementById('weight'+i).value);
			}
			document.getElementById("totalweight").value = totalweight;

		});
		document.getElementById("weight9").addEventListener('change', function(){
			totalweight = 0;
			var select = document.getElementsByName("brandname[]");	
			for(i=0; i<select.length;i++){
				totalweight += parseInt(document.getElementById('weight'+i).value);
			}
			document.getElementById("totalweight").value = totalweight;

		});
		document.getElementById("weight10").addEventListener('change', function(){
			totalweight = 0;
			var select = document.getElementsByName("brandname[]");	
			for(i=0; i<select.length;i++){
				totalweight += parseInt(document.getElementById('weight'+i).value);
			}
			document.getElementById("totalweight").value = totalweight;

		});
		document.getElementById("weight11").addEventListener('change', function(){
			totalweight = 0;
			var select = document.getElementsByName("brandname[]");	
			for(i=0; i<select.length;i++){
				totalweight += parseInt(document.getElementById('weight'+i).value);
			}
			document.getElementById("totalweight").value = totalweight;

		});
		document.getElementById("weight12").addEventListener('change', function(){
			totalweight = 0;
			var select = document.getElementsByName("brandname[]");	
			for(i=0; i<select.length;i++){
				totalweight += parseInt(document.getElementById('weight'+i).value);
			}
			document.getElementById("totalweight").value = totalweight;

		});
		document.getElementById("weight13").addEventListener('change', function(){
			totalweight = 0;
			var select = document.getElementsByName("brandname[]");	
			for(i=0; i<select.length;i++){
				totalweight += parseInt(document.getElementById('weight'+i).value);
			}
			document.getElementById("totalweight").value = totalweight;

		});
		document.getElementById("weight14").addEventListener('change', function(){
			totalweight = 0;
			var select = document.getElementsByName("brandname[]");	
			for(i=0; i<select.length;i++){
				totalweight += parseInt(document.getElementById('weight'+i).value);
			}
			document.getElementById("totalweight").value = totalweight;

		});
		document.getElementById("weight15").addEventListener('change', function(){
			totalweight = 0;
			var select = document.getElementsByName("brandname[]");	
			for(i=0; i<select.length;i++){
				totalweight += parseInt(document.getElementById('weight'+i).value);
			}
			document.getElementById("totalweight").value = totalweight;

		});
		document.getElementById("weight16").addEventListener('change', function(){
			totalweight = 0;
			var select = document.getElementsByName("brandname[]");	
			for(i=0; i<select.length;i++){
				totalweight += parseInt(document.getElementById('weight'+i).value);
			}
			document.getElementById("totalweight").value = totalweight;

		});
		document.getElementById("weight17").addEventListener('change', function(){
			totalweight = 0;
			var select = document.getElementsByName("brandname[]");	
			for(i=0; i<select.length;i++){
				totalweight += parseInt(document.getElementById('weight'+i).value);
			}
			document.getElementById("totalweight").value = totalweight;

		});
		document.getElementById("weight18").addEventListener('change', function(){
			totalweight = 0;
			var select = document.getElementsByName("brandname[]");	
			for(i=0; i<select.length;i++){
				totalweight += parseInt(document.getElementById('weight'+i).value);
			}
			document.getElementById("totalweight").value = totalweight;

		});
		document.getElementById("weight19").addEventListener('change', function(){
			totalweight = 0;
			var select = document.getElementsByName("brandname[]");	
			for(i=0; i<select.length;i++){
				totalweight += parseInt(document.getElementById('weight'+i).value);
			}
			document.getElementById("totalweight").value = totalweight;

		});
		document.getElementById("weight20").addEventListener('change', function(){
			totalweight = 0;
			var select = document.getElementsByName("brandname[]");	
			for(i=0; i<select.length;i++){
				totalweight += parseInt(document.getElementById('weight'+i).value);
			}
			document.getElementById("totalweight").value = totalweight;

		});

/* <!-- Check if cmsrefnumber exists on the platform, throw a notification error if exists --> */ 
document.getElementById("cmsrefnumber").addEventListener('change', function(ev){
	var cmsrefnumber_check = ev.target.value;
	$.ajax({
            url:"{{url('check-cmsrefnumber-exists')}}",
            type: "POST",
            data: {
                cmsrefnumber: cmsrefnumber_check,
            _token: '{{csrf_token()}}' 
            },
            dataType : 'json',
            success: function(result){
					var refnumberexists = result.cmsrefnumberexists.length;
					if(refnumberexists >= 1){
						toastr.warning('Error: Enter unused CMS Reference Number');
						document.getElementById("cmsrefnumber").value = "";
					}
            }
            });   	
}, false)
}


function getProductDetailsBylotno(productlotno,elementid){
//create element values
	var brandname = 'brandname'+elementid;
	var manufacturer = 'manufacturer'+elementid;
	var packsize = 'packsize'+elementid;
	var lotno = 'lotno'+elementid;
	var wgtctn = 'wgtctn'+elementid;
	var weight = 'weight'+elementid;
	var quantity = 'quantity'+elementid;
	var brandnamebyid = document.getElementById(brandname);

//reset all field elements
	document.getElementById(manufacturer).value = "";
	document.getElementById(packsize).value = "";
	document.getElementById(lotno).value = "";
	document.getElementById(wgtctn).value = "";
	document.getElementById(weight).value = "";
	document.getElementById(quantity).value = "";

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
						/* document.getElementById(manufacturer).value=value.manufacturer;
						document.getElementById(packsize).value=value.packsize;
						document.getElementById(lotno).value=value.lotno; */

//enable disabled elements for freetext entry		
						/* document.getElementById(weight).disabled = false;
						document.getElementById(wgtctn).disabled = false;*/
						document.getElementById(quantity).disabled = false; 
//Call notification function to alert on Quantity remaining for stock
						/* toastr.info('Availble quantity for Lot Number: '+value.lotno+' is: '+value.quantityremaining); */

				});		
            }
            });	
		}
function getQuantityAvailableBylotno(productlotno,quantityIssued,elementid){
	
	var quantity = 'quantity'+elementid;


	$.ajax({
            url:"{{url('compare-quantity-available')}}",
            type: "POST",
            data: {
                productlotno: productlotno,
            _token: '{{csrf_token()}}' 
            },
            dataType : 'json',
            success: function(result){
                $.each(result.quantityinstockbylotno,function(key,value){ 
//Get Quantity in Stock					
					var quantityInStock = value.quantityremaining;
//Check if Stock is enough
						if(parseInt(quantityIssued) > parseInt(quantityInStock)){
//Call notification function to alert on Quantity remaining for stock
						//toastr.warning('Quantity exceeds available stock of: '+quantityInStock);
						document.getElementById(quantity).value = "";
						}
				});		
            }
            });	
		}		
 /* <!-- Insert Function to commit data into orders table. All dynamic order variables are passed --> */ 

   function insertIntoOrdersTable(requestlocation,siterefnumber,cmsrefnumber,orderdate,locationcontactperson,locationcontactphonenumber,producttype,orderstatus,requestedby,requestdate,brandname,manufacturer,packsize,lotno,wgtctn,weight,quantity,remarks){
            $.ajax({
            url:"{{url('save-order-request')}}",
            type: "POST",
            data: {
                requestlocation: requestlocation,
                siterefnumber: siterefnumber,
                cmsrefnumber: cmsrefnumber,
                orderdate: orderdate,
                locationcontactperson: locationcontactperson,
                locationcontactphonenumber: locationcontactphonenumber,
                producttype: producttype,
                orderstatus: orderstatus,
                requestedby: requestedby,
                requestdate: requestdate,
                brandname: brandname,
                manufacturer: manufacturer,
                packsize: packsize,
                lotno: lotno,
                wgtctn: wgtctn,
                weight: weight,
                quantity: quantity,
                remarks: remarks,
            _token: '{{csrf_token()}}' 
            },
            dataType : 'json',
            success: function(result){
                if(result.status == 200){
                    toastr.success('Order: '+lotno+' created');
                }
                else{
                    toastr.error('Order: '+lotno+' NOT created'+result.ev)
                }            
            },
            error: function(result) {
                if(result.status == 200){
                    toastr.success('Order: '+lotno+' created')
                }
                else{
                    toastr.error('Order: '+lotno+' NOT created'+result.ev)
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
@endsection
