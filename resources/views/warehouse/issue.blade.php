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
                    Create Issue:
                </h2>
            </div>
            <div class="grid grid-cols-12 gap-6 mt-5 relative">
                <div class="intro-y col-span-12 lg:col-span-7">
                    <!-- BEGIN: Display Information -->
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
                    <div class="intro-y box lg:mt-5">
                        <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                            <h2 class="font-medium text-base mr-auto">
                                Delivery Note
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
  width:692pt'>ISSUE/DELIVERY NOTE</td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td colspan=3 height=20 class=xl11811054 width=463 style='border-right:1.0pt solid black;height:15.0pt;width:348pt'>Deliver to:                                             
  <select id="requestlocation" name="requestlocation" style="background-color: #FFFFFF;" >
       <option disabled selected ></option>
       @foreach($recipients as $recipient)
           <option value="{{ $recipient->name }}">{{ $recipient->name}}</option>
       @endforeach
   </select>
   </td>
  <td colspan=3 class=xl12111054 width=29 style='border-left:none;width:248pt'>Site Reference</td>
  <td colspan=3 class=xl12311054 style='border-right:1.0pt solid black'><input style="background-color: #FFFFFF;" type="text" id="siterefnumber" name="siterefnumber" /></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td colspan=3 rowspan=4 height=80 class=xl12511054 width=463
  style='border-right:1.0pt solid black;border-bottom:1.0pt solid black;
  height:60.0pt;width:348pt'>&nbsp;</td>
  <td colspan=3 class=xl13411054 width=329 style='border-left:none;width:248pt'>CMS Reference Number:</td>
  <td colspan=3 class=xl12311054 style='border-right:1.0pt solid black'><input style="background-color: #FFFFFF;" type="text" id="cmsrefnumber" name="cmsrefnumber" /></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td colspan=3 height=20 class=xl10611054 style='height:15.0pt;border-left: none'>Date:</td>
  <td colspan=3 class=xl13611054 style='border-right:1.0pt solid black'><input style="background-color: #FFFFFF;" type="date" id="orderdate" name="orderdate" /></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td colspan=6 height=20 class=xl10611054 style='border-right:1.0pt solid black;
  height:15.0pt;border-left:none'>Name: <input name="locationcontactperson" id="locationcontactperson" type="text"  style="background-color: #FFFFFF" /></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td colspan=6 height=20 class=xl10911054 style='border-right:1.0pt solid black;
  height:15.0pt;border-left:none'>Phone Number:<span style='mso-spacerun:yes'> <input style="background-color: #FFFFFF" name="locationcontactphonenumber" id="locationcontactphonenumber" type="text" /></span></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td colspan=9 height=20 class=xl11211054 width=920 style='border-right:1.0pt solid black;
  height:15.0pt;width:692pt'>Product Type:   
			<select id="producttype" name="producttype" style="background-color: #FFFFFF" >
			<option disabled selected ></option>
			<option value="EQUIPMENT" >EQUIPMENT</option>
			<option value="CONSUMABLES" >CONSUMABLES</option>
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
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;<input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid0" class="w-full" readonly /></td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname0" name="brandname[]" class="w-full" style="background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="manufacturer[]" id="manufacturer0" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="packsize[]" id="packsize0" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="lotno[]" id="lotno0" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="wgtctn[]" id="wgtctn0" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;" name="weight[]" id="weight0" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number" style="background-color: #FFFFFF; font-weight: bold; font-size: 16px;" name="quantity" id="quantity0" class="w-full" /></td>
  <td class=xl7311054 style='border-left:none'><input type="text" style="background-color: #FFFFFF;" name="remarks[]" id="remarks0" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;<input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid1" class="w-full" readonly /></td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname1" name="brandname[]" class="w-full" style="background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="manufacturer[]" id="manufacturer1" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="packsize[]" id="packsize1" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="lotno[]" id="lotno1" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="wgtctn[]" id="wgtctn1" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;" name="weight[]" id="weight1" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #FFFFFF; font-weight: bold; font-size: 16px;" name="quantity" id="quantity1" class="w-full" /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="remarks[]" id="remarks1" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;<input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid2" class="w-full" readonly /></td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname2" name="brandname[]" class="w-full" style="background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="manufacturer[]" id="manufacturer2" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="packsize[]" id="packsize2" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="lotno[]" id="lotno2" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="wgtctn[]" id="wgtctn2" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;" name="weight[]" id="weight2" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #FFFFFF; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity2" class="w-full" /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="remarks[]" id="remarks2" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;<input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid3" class="w-full" readonly /></td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname3" name="brandname[]" class="w-full" style="background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="manufacturer[]" id="manufacturer3" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="packsize[]" id="packsize3" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="lotno[]" id="lotno3" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="wgtctn[]" id="wgtctn3" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;" name="weight[]" id="weight3" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #FFFFFF; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity3" class="w-full" /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="remarks[]" id="remarks3" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;<input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid4" class="w-full" readonly /></td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname4" name="brandname[]" class="w-full" style="background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="manufacturer[]" id="manufacturer4" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="packsize[]" id="packsize4" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="lotno[]" id="lotno4" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="wgtctn[]" id="wgtctn4" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;" name="weight[]" id="weight4" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #FFFFFF; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity4" class="w-full" /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="remarks[]" id="remarks4" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;<input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid5" class="w-full" readonly /></td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname5" name="brandname[]" class="w-full" style="background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="manufacturer[]" id="manufacturer5" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="packsize[]" id="packsize5" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="lotno[]" id="lotno5" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="wgtctn[]" id="wgtctn5" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;" name="weight[]" id="weight5" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #FFFFFF; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity5" class="w-full" /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="remarks[]" id="remarks5" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;<input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid6" class="w-full" readonly /></td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname6" name="brandname[]" class="w-full" style="background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="manufacturer[]" id="manufacturer6" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="packsize[]" id="packsize6" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="lotno[]" id="lotno6" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="wgtctn[]" id="wgtctn6" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;" name="weight[]" id="weight6" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #FFFFFF; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity6" class="w-full" /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="remarks[]" id="remarks6" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;<input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid7" class="w-full" readonly /></td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname7" name="brandname[]" class="w-full" style="background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="manufacturer[]" id="manufacturer7" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="packsize[]" id="packsize7" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="lotno[]" id="lotno7" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="wgtctn[]" id="wgtctn7" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;" name="weight[]" id="weight7" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #FFFFFF; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity7" class="w-full" /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="remarks[]" id="remarks7" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;<input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid8" class="w-full" readonly /></td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname8" name="brandname[]" class="w-full" style="background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="manufacturer[]" id="manufacturer8" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="packsize[]" id="packsize8" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="lotno[]" id="lotno8" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="wgtctn[]" id="wgtctn8" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;" name="weight[]" id="weight8" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #FFFFFF; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity8" class="w-full" /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="remarks[]" id="remarks8" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;<input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid9" class="w-full" readonly /></td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname9" name="brandname[]" class="w-full" style="background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="manufacturer[]" id="manufacturer9" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="packsize[]" id="packsize9" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="lotno[]" id="lotno9" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="wgtctn[]" id="wgtctn9" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;" name="weight[]" id="weight9" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #FFFFFF; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity9" class="w-full" /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="remarks[]" id="remarks9" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;<input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid10" class="w-full" readonly /></td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname10" name="brandname[]" class="w-full" style="background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="manufacturer[]" id="manufacturer10" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="packsize[]" id="packsize10" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="lotno[]" id="lotno10" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="wgtctn[]" id="wgtctn10" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;" name="weight[]" id="weight10" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #FFFFFF; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity10" class="w-full" /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="remarks[]" id="remarks10" class="w-full" /></td>
 </tr>

 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;<input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid11" class="w-full" readonly /></td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname11" name="brandname[]" class="w-full" style="background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="manufacturer[]" id="manufacturer11" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="packsize[]" id="packsize11" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="lotno[]" id="lotno11" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="wgtctn[]" id="wgtctn11" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;" name="weight[]" id="weight11" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #FFFFFF; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity11" class="w-full" /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="remarks[]" id="remarks11" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;<input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid12" class="w-full" readonly /></td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname12" name="brandname[]" class="w-full" style="background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="manufacturer[]" id="manufacturer12" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="packsize[]" id="packsize12" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="lotno[]" id="lotno12" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="wgtctn[]" id="wgtctn12" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;" name="weight[]" id="weight12" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #FFFFFF; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity12" class="w-full" /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="remarks[]" id="remarks12" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;<input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid13" class="w-full" readonly /></td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname13" name="brandname[]" class="w-full" style="background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="manufacturer[]" id="manufacturer13" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="packsize[]" id="packsize13" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="lotno[]" id="lotno13" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="wgtctn[]" id="wgtctn13" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;" name="weight[]" id="weight13" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #FFFFFF; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity13" class="w-full" /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="remarks[]" id="remarks13" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;<input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid14" class="w-full" readonly /></td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname14" name="brandname[]" class="w-full" style="background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="manufacturer[]" id="manufacturer14" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="packsize[]" id="packsize14" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="lotno[]" id="lotno14" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="wgtctn[]" id="wgtctn14" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;" name="weight[]" id="weight14" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #FFFFFF; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity14" class="w-full" /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="remarks[]" id="remarks14" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;<input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid15" class="w-full" readonly /></td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname15" name="brandname[]" class="w-full" style="background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="manufacturer[]" id="manufacturer15" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="packsize[]" id="packsize15" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="lotno[]" id="lotno15" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="wgtctn[]" id="wgtctn15" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;" name="weight[]" id="weight15" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #FFFFFF; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity15" class="w-full" /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="remarks[]" id="remarks15" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;<input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid16" class="w-full" readonly /></td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname16" name="brandname[]" class="w-full" style="background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="manufacturer[]" id="manufacturer16" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="packsize[]" id="packsize16" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="lotno[]" id="lotno16" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="wgtctn[]" id="wgtctn16" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;" name="weight[]" id="weight16" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #FFFFFF; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity16" class="w-full" /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="remarks[]" id="remarks16" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;<input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid17" class="w-full" readonly /></td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname17" name="brandname[]" class="w-full" style="background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="manufacturer[]" id="manufacturer17" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="packsize[]" id="packsize17" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="lotno[]" id="lotno17" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="wgtctn[]" id="wgtctn17" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;" name="weight[]" id="weight17" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #FFFFFF; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity17" class="w-full" /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="remarks[]" id="remarks17" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;<input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid18" class="w-full" readonly /></td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname18" name="brandname[]" class="w-full" style="background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="manufacturer[]" id="manufacturer18" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="packsize[]" id="packsize18" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="lotno[]" id="lotno18" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="wgtctn[]" id="wgtctn18" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;" name="weight[]" id="weight18" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #FFFFFF; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity18" class="w-full" /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="remarks[]" id="remarks18" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;<input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid19" class="w-full" readonly /></td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname19" name="brandname[]" class="w-full" style="background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="manufacturer[]" id="manufacturer19" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="packsize[]" id="packsize19" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="lotno[]" id="lotno19" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="wgtctn[]" id="wgtctn19" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;" name="weight[]" id="weight19" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #FFFFFF; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity19" class="w-full" /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="remarks[]" id="remarks19" class="w-full" /></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 <td class=xl7011054 style='height:15.0pt;border-top:none'>&nbsp;<input type="hidden"  style="background-color: #FFFFFF;" name="productorderid[]" id="productorderid20" class="w-full" readonly /></td>
 <td height=20 class=xl7011054 style='height:15.0pt;border-top:none'>
  <select class="brandnameclass" id="brandname20" name="brandname[]" class="w-full" style="background-color: #FFFFFF;" >
       <option disabled selected ></option>
   </select>
  </td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="manufacturer[]" id="manufacturer20" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="packsize[]" id="packsize20" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="lotno[]" id="lotno20" class="w-full" readonly /></td>
  <td class=xl7111054 style='border-top:none;border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="wgtctn[]" id="wgtctn20" class="w-full" disabled /></td>
  <td class=xl7211054 style='border-top:none;border-left:none'><input type="number"  style="background-color: #FFFFFF;" name="weight[]" id="weight20" class="w-full" disabled /></td>
  <td class=xl7311054><input type="number"  style="background-color: #FFFFFF; font-weight: bold; font-size: 16px;" name="quantity[]" id="quantity20" class="w-full" /></td>
  <td class=xl7311054 style='border-left:none'><input type="text"  style="background-color: #FFFFFF;" name="remarks[]" id="remarks20" class="w-full" /></td>
 </tr>

 <tr class=xl1511054 height=20 style='height:15.0pt'>
  <td height=20 class=xl7111054 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl8511054 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7111054 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7111054 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7111054 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl6311054 style='border-top:none;border-left:none'>TOTAL WGT</td>
  <td class=xl7511054 style='border-top:none;border-left:none'><input class="w-full font-bold" style="background-color: #FFFFFF; font-size: 16px; " id="totalweight" name="totalweight" type="number" readonly /></td>
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
  <td colspan="2" height=20 class=xl8911054 style='height:15.0pt'>&nbsp;Authorised By</td>
  <td colspan="3"  class=xl9011054 style='border-left:none'>&nbsp;Issued by</td>
  <td colspan=4 class=xl8911054>&nbsp;Received by </td>
  <td class=xl9011054 style='border-left:none'></td>
  <td colspan=2 class=xl9011054 style='border-left:none'></td>
  <td class=xl9111054>&nbsp;</td>
  <td class=xl9211054 style='border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl9311054 style='height:15.0pt;border-top:none; border-right: none;'>Name:</td>
  <td class=xl9211054 style='border-top:none; border-right: none;'>
  		@if(Auth::user()->role == 'Warehouse Manager' || Auth::user()->role == 'Supervisor')
		  <select id="authorisedby" name="authorisedby" style="background-color: #FFFFFF" >
			<option disabled selected ></option>
			<option value="{{ Auth::user()->name }}" >{{ Auth::user()->name }}</option>
			</select>
		@else
		<input type="text" name="authorisedby" id="authorisedby" class="w-50" style="background-color: #FFFFFF;" readonly />
		@endif
	</td>
  <td class=xl9411054 style='border-top:none'>Name: <input id='issuedby' name='issuedby' value='{{ Auth::User()->name }}' class='w-50' style='background-color: #FFFFFF' /></td>
  <td colspan=2 class=xl8111054 style='border-left:none'>&nbsp;</td>
  <td colspan=3 class=xl8111054 style='border-left:none'>Name:&nbsp;<input id='receivedby' name='receivedby' type="text" class='w-full' style='background-color: #FFFFFF' /></td>
  <td class=xl8111054 style='border-top:none'>&nbsp;</td>
  <td class=xl9511054 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl9311054 style='height:15.0pt;border-top:none; border-right: none;'>Signature:</td>
  <td class=xl8111054 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl9311054 style='border-top:none'>Signature:..……………………….</td>
  <td colspan=2 class=xl8111054 style='border-left:none'>&nbsp;</td>
  <td colspan=4 class=xl10211054 style='border-left:none'>Signature:………………….</td>
  <td class=xl8111054 style='border-top:none'>&nbsp;</td>
  <td class=xl9511054 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:13.5pt'>
  <td height=18 class=xl9611054 style='height:13.5pt;border-top:none'>Date:&nbsp;
  @if(Auth::user()->role == 'Warehouse Manager' || Auth::user()->role == 'Supervisor')
  <input type="date" name="dateauthorized" id="dateauthorized" class="w-50" style="background-color: #FFFFFF;" />
  @else
  <input type="date" name="dateauthorized" id="dateauthorized" class="w-50" style="background-color: #FFFFFF;" />
	@endif  
  </td>
  <td class=xl9711054 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl9611054 style='border-top:none'>Date: &nbsp;<input type="date" name="issuedate" id="issuedate" class="w-50" style="background-color: #FFFFFF;" /></td>
  <td colspan=2 class=xl9811054 style='border-left:none'>&nbsp;</td>
  <td colspan=2 class=xl10411054 style='border-left:none'>Date: &nbsp;<input type="date" name="receivedate" id="receivedate" class="w-50" style="background-color: #FFFFFF;" /></td>
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
<button type="submit" id="issueorderrequest" class="button w-20 bg-theme-1 text-white mt-3">Save</button>
<button type="submit" id="authorizeorderrequest" style="display: none;" class="button w-20 bg-theme-3 text-white mt-3">Authorise</button>
</div>

</form>
                    </div>
                    <!-- END: Display Information -->
                </div>
                <div class="intro-y col-span-12 lg:col-span-5 relative inset-0 w-full min-h-screen lg:fixed lg:w-full/12" style="height: 1037.56px;">
                    <!-- BEGIN: Table Section Information -->
                    <div id="pendingordersdiv" class="intro-y box lg:mt-5" style="overflow: auto; height: 1037.56px">
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
                                <td class="border-b dark:border-dark-5"><a class="font-bold button" style="text-transform: uppercase; color: blue" onclick="getOrderDetails('{{ $activeOrders->cmsrefnumber }}','{{ $activeOrders->totalproducts }}')">{{ $activeOrders->cmsrefnumber }}</a></td>
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
        <!-- END: Content -->
        <!-- JQUERY -->
document.addEventListener('DOMContentLoaded', init, false);
function init(){
/* <!-- add submit button addEventListener --> */
document.getElementById("issueorderrequest").addEventListener('click', function(ev){
    ev.preventDefault();

/* <!-- Check for constant elements that are empty --> */
    var requestlocation = document.getElementById("requestlocation").value;
    var siterefnumber = document.getElementById("siterefnumber").value;
    var cmsrefnumber = document.getElementById("cmsrefnumber").value;
    var orderdate = document.getElementById("orderdate").value;
    var locationcontactperson = document.getElementById("locationcontactperson").value;
    var locationcontactphonenumber = document.getElementById("locationcontactphonenumber").value;
    var producttype = document.getElementById("producttype").value;
    var orderstatus = "ISSUED";
    var issuedby = document.getElementById("issuedby").value;
    var issuedate = document.getElementById("issuedate").value;
    var receivedby = document.getElementById("receivedby").value;
    var receivedate = document.getElementById("receivedate").value;
    var authorisedby = document.getElementById("authorisedby").value;
    var dateauthorized = document.getElementById("dateauthorized").value;

/* <!-- Validation checks and toastr notifications for constant elements that are empty --> */ 
if(requestlocation == ""){toastr.error('input for requestlocation is missing');requestlocation_chk=0;}else{requestlocation_chk=1;}   
if(siterefnumber == ""){toastr.error('input for siterefnumber is missing');siterefnumber_chk=0;}else{siterefnumber_chk=1;}   
if(cmsrefnumber == ""){toastr.error('input for cmsrefnumber is missing');cmsrefnumber_chk=0;}else{cmsrefnumber_chk=1;}   
if(orderdate == ""){toastr.error('input for orderdate is missing');orderdate_chk=0;}else{orderdate_chk=1;}   
if(locationcontactperson == ""){toastr.error('input for locationcontactperson is missing');locationcontactperson_chk=0;}else{locationcontactperson_chk=1;}   
if(locationcontactphonenumber == ""){toastr.error('input for locationcontactphonenumber is missing');locationcontactphonenumber_chk=0;}else{locationcontactphonenumber_chk=1;}   
if(producttype == ""){toastr.error('input for producttype is missing');producttype_chk=0;}else{producttype_chk=1;}   
if(orderstatus == ""){toastr.error('input for orderstatus is missing');orderstatus_chk=0;}else{orderstatus_chk=1;}   
if(issuedby == ""){toastr.error('input for issuedby is missing');issuedby_chk=0;}else{issuedby_chk=1;} 
if(issuedate == ""){toastr.error('input for issuedate is missing');issuedate_chk=0;}else{issuedate_chk=1;} 
/* if(receivedby == ""){toastr.error('input for receivedby is missing');receivedby_chk=0;}else{receivedby_chk=1;}   
if(receivedate == ""){toastr.error('input for receivedate is missing');receivedate_chk=0;}else{receivedate_chk=1;}    */
if(authorisedby == ""){toastr.error('input for authorisedby is missing');authorisedby_chk=0;}else{authorisedby_chk=1;}   
if(dateauthorized == ""){toastr.error('input for dateauthorized is missing');dateauthorized_chk=0;}else{dateauthorized_chk=1;}   

if( dateauthorized_chk == 0 ||authorisedby_chk == 0 ||requestlocation_chk == 0 ||siterefnumber_chk == 0 ||cmsrefnumber_chk == 0 ||orderdate_chk == 0 ||locationcontactperson_chk == 0 ||locationcontactphonenumber_chk == 0 ||producttype_chk == 0 ||orderstatus_chk == 0||issuedby_chk == 0||issuedate_chk == 0){
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
                manufacturer = document.getElementById("manufacturer"+i).value;
                packsize = document.getElementById("packsize"+i).value;
                lotno = document.getElementById("lotno"+i).value;
                wgtctn = document.getElementById("wgtctn"+i).value;
                weight = document.getElementById("weight"+i).value;
                quantity = document.getElementById("quantity"+i).value;
                remarks = document.getElementById("remarks"+i).value;
                productorderid = document.getElementById("productorderid"+i).value;

                if(brandname && brandname != ''){
                    updateOrdersTable(authorisedby,dateauthorized,remarks,quantity,orderstatus,productorderid,lotno,issuedby,issuedate,brandname,requestlocation,cmsrefnumber);
                }
            }
 /* <!-- Clear the Form after  all rows are inserted --> */ 
                document.getElementById("orderrequestform").reset();
				$("#pendingordersdiv").load(location.href + " #pendingordersdiv");
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
						option.text = value.brandname+', '+value.lotno;
						option.value = value.lotno;				
						var brandname_number = select[i];
						brandname_number.appendChild(option);
				});					
			}
            }
            });			
			/* if(producttype=="Equipment"){
				document.getElementById('serial_no').innerText = 'Serial No';
			}
			else{
				document.getElementById('serial_no').innerText = 'Lot No';
			} */
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

 /* <!-- Authorize Order Request --> */ 
document.getElementById("authorizeorderrequest").addEventListener('click', authorizeorder, false);
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

//enable disabled elements for freetext entry		
						document.getElementById(weight).disabled = false;
						document.getElementById(wgtctn).disabled = false;
						document.getElementById(quantity).disabled = false;
//Call notification function to alert on Quantity remaining for stock
						toastr.info('Available quantity for Lot Number: '+value.lotno+' is: '+value.quantityremaining);

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
						toastr.warning('Quantity exceeds available stock of: '+quantityInStock);
						document.getElementById(quantity).value = "";
						}
				});		
            }
            });	
		}		
 /* <!-- Insert Function to commit data into orders table. All dynamic order variables are passed --> */ 

   function updateOrdersTable(authorisedby,dateauthorized,remarks,quantity,orderstatus,productorderid,lotno,issuedby,issuedate,brandname,requestlocation,cmsrefnumber){
            $.ajax({
            url:"{{url('issue-order-request')}}",
            type: "POST",
            data: {
                orderstatus: orderstatus,
                authorisedby: authorisedby,
                dateauthorized: dateauthorized,
                remarks: remarks,
                quantity: quantity,
                productorderid: productorderid,
                issuedby: issuedby,
                issuedate: issuedate,
                lotno: lotno,
            _token: '{{csrf_token()}}' 
            },
            dataType : 'json',
            success: function(result){
				if(result.status == 1){
					toastr.success('Success: '+lotno);
					updateStockQuantity(quantity,lotno);
					insertIntoRecipientsTable(brandname,requestlocation,quantity,lotno,issuedate,cmsrefnumber);
				}
				else{
					toastr.warning('Error: '+lotno+' Issue Failure');
				}
            }
            });	
        }

	function insertIntoRecipientsTable(brandname,requestlocation,quantity,lotno,issuedate,cmsrefnumber){
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
				if(result.status == 1){
					checkRemainingQuantityZero(lotno);
				}
            },
            error: function(result) {
            }
            });		
		}

/* <!-- 

	checkRemainingQuantityZero Checks if the remaining Quantity is Zero
	and if true, unlocks the shelf number that stores the commodity/item
	
	--> */ 

function checkRemainingQuantityZero(lotno){
	$.ajax({
            url:"{{url('check-remainingquantity-zero')}}",
            type: "POST",
            data: {
                lotno: lotno,
            _token: '{{csrf_token()}}' 
            },
            dataType : 'json',
            success: function(result){
				var shelfnumber = result[0].cabinetno;
				var quantityrem = result[0].quantityremaining;
				if(quantityrem == 0){
				unlockShelfcabinet(shelfnumber);
				}
            },
            error: function(result) {
            }
            });	
		}

/* <!-- 

	function unlockShelfcabinet resets the cabinet status to Free. This function is only called when quantityremaining is Zero
	
	--> */ 
	function unlockShelfcabinet(shelfnumber){
		$.ajax({
            url:"{{url('unlock-shelf-cabinet')}}",
            type: "POST",
            data: {
                shelfnumber: shelfnumber,
            _token: '{{csrf_token()}}' 
            },
            dataType : 'json',
            success: function(result){
					if(result.status == 1){
						toastr.success('Cabinet: '+shelfnumber+' unlocked...');
					}	
					else{
						toastr.error('Cabinet: '+shelfnumber+' unlock failure');
					}			
				}
            });	
	}
function getOrderDetails(cmsrefnumber,totalproducts){

 /* <!-- Clear the form --> */ 
 document.getElementById("orderrequestform").reset();

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
					document.getElementById('requestlocation').value = value.requestlocation;
					document.getElementById('siterefnumber').value = value.siterefnumber;
					document.getElementById('cmsrefnumber').value = value.cmsrefnumber;
					document.getElementById('producttype').value = value.producttype;
					/* document.getElementById('issuedby').value = value.issuedby;
					document.getElementById('issuedate').value = value.issuedate; */
					document.getElementById('authorisedby').value = value.authorisedby;
					document.getElementById('dateauthorized').value = value.dateauthorized;
					document.getElementById('locationcontactperson').value = value.locationcontactperson;
					document.getElementById('locationcontactphonenumber').value = value.locationcontactphonenumber;
					document.getElementById('orderdate').value = value.orderdate;
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
					document.getElementById("wgtctn"+i).value = orderdetailsreturn[i].wgtctn;
					document.getElementById("weight"+i).value = orderdetailsreturn[i].weight;
					if(orderdetailsreturn[i].orderstatus == 'AUTHORIZED'){
                    document.getElementById("quantity"+i).value = orderdetailsreturn[i].quantityauthorized;
                   }
                   else{
                    document.getElementById("quantity"+i).value = orderdetailsreturn[i].quantity;
                   }					
				    /* document.getElementById("quantity"+i).value = orderdetailsreturn[i].quantity; */
					document.getElementById("remarks"+i).value = orderdetailsreturn[i].remarks;
					document.getElementById("productorderid"+i).value = orderdetailsreturn[i].id;
				}	
				if(document.getElementById("authorisedby").value == ''){
					document.getElementById("issueorderrequest").style.display = 'none';
					document.getElementById("authorizeorderrequest").style.display = 'block';
				}		
				else{
					document.getElementById("issueorderrequest").style.display = 'block';
					document.getElementById("authorizeorderrequest").style.display = 'none';
				}
            }
            });
		}		

		function authorizeorder(){
			event.preventDefault();

			var cmsrefnumber_order = document.getElementById("cmsrefnumber").value;
			var authorisedby = document.getElementById("authorisedby").value;
			var dateauthorized = document.getElementById("dateauthorized").value;
			var orderstatus = 'AUTHORIZED';
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
					document.getElementById("orderrequestform").reset();
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