<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="Drplus One page parallax responsive HTML Template ">

	<meta name="author" content="Muhammad Morshed">

	<title>Drplus</title>
	<!-- fontawosem cdn link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Mobile Specific Meta
		================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="images/logo1.png" />

	<!-- bootstrap icon  -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	
	<!-- javascrip -->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">

   <!-- jquary validation 
         ============================================================== -->
      <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
      <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
      <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
      <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.js"></script>
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.12.0/jquery.validate.js"></script>
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.12.0/additional-methods.js"></script>
	 
	<!-- CSS
		================================================== -->
	<!-- Fontawesome Icon font -->
	<link rel="stylesheet" href="plugins/themefisher-font/style.css">
	<!-- bootstrap.min css -->
	<link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
	<!-- Animate.css -->
	<link rel="stylesheet" href="plugins/animate-css/animate.css">
	<!-- Magnific popup css -->
	<link rel="stylesheet" href="plugins/magnific-popup/dist/magnific-popup.css">
	<!-- Slick Carousel -->
	<link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
	<link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="css/style.css">


</head>

<!-- DATE AND TIME PIKER STYEL -->
<style type="text/css">
	.xdsoft_datetimepicker {
	box-shadow: 0 5px 15px -5px rgba(0, 0, 0, 0.506);
	background: #fff;
	border-bottom: 1px solid #bbb;
	border-left: 1px solid #ccc;
	border-right: 1px solid #ccc;
	border-top: 1px solid #ccc;
	color: #333;
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	padding: 8px;
	padding-left: 0;
	padding-top: 2px;
	position: absolute;
	z-index: 9999;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	display: none;
}

.xdsoft_datetimepicker iframe {
	position: absolute;
	left: 0;
	top: 0;
	width: 75px;
	height: 210px;
	background: transparent;
	border: none;
}

/*For IE8 or lower*/
.xdsoft_datetimepicker button {
	border: none !important;
}

.xdsoft_noselect {
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	-o-user-select: none;
	user-select: none;
}

.xdsoft_noselect::selection { background: transparent }
.xdsoft_noselect::-moz-selection { background: transparent }

.xdsoft_datetimepicker.xdsoft_inline {
	display: inline-block;
	position: static;
	box-shadow: none;
}

.xdsoft_datetimepicker * {
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	padding: 0;
	margin: 0;
}

.xdsoft_datetimepicker .xdsoft_datepicker, .xdsoft_datetimepicker .xdsoft_timepicker {
	display: none;
}

.xdsoft_datetimepicker .xdsoft_datepicker.active, .xdsoft_datetimepicker .xdsoft_timepicker.active {
	display: block;
}

.xdsoft_datetimepicker .xdsoft_datepicker {
	width: 224px;
	float: left;
	margin-left: 8px;
}

.xdsoft_datetimepicker.xdsoft_showweeks .xdsoft_datepicker {
	width: 256px;
}

.xdsoft_datetimepicker .xdsoft_timepicker {
	width: 58px;
	float: left;
	text-align: center;
	margin-left: 8px;
	margin-top: 0;
}

.xdsoft_datetimepicker .xdsoft_datepicker.active+.xdsoft_timepicker {
	margin-top: 8px;
	margin-bottom: 3px
}

.xdsoft_datetimepicker .xdsoft_mounthpicker {
	position: relative;
	text-align: center;
}

.xdsoft_datetimepicker .xdsoft_label i,
.xdsoft_datetimepicker .xdsoft_prev,
.xdsoft_datetimepicker .xdsoft_next,
.xdsoft_datetimepicker .xdsoft_today_button {
	background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAAAeCAYAAADaW7vzAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6Q0NBRjI1NjM0M0UwMTFFNDk4NkFGMzJFQkQzQjEwRUIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6Q0NBRjI1NjQ0M0UwMTFFNDk4NkFGMzJFQkQzQjEwRUIiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpDQ0FGMjU2MTQzRTAxMUU0OTg2QUYzMkVCRDNCMTBFQiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpDQ0FGMjU2MjQzRTAxMUU0OTg2QUYzMkVCRDNCMTBFQiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PoNEP54AAAIOSURBVHja7Jq9TsMwEMcxrZD4WpBYeKUCe+kTMCACHZh4BFfHO/AAIHZGFhYkBBsSEqxsLCAgXKhbXYOTxh9pfJVP+qutnZ5s/5Lz2Y5I03QhWji2GIcgAokWgfCxNvcOCCGKqiSqhUp0laHOne05vdEyGMfkdxJDVjgwDlEQgYQBgx+ULJaWSXXS6r/ER5FBVR8VfGftTKcITNs+a1XpcFoExREIDF14AVIFxgQUS+h520cdud6wNkC0UBw6BCO/HoCYwBhD8QCkQ/x1mwDyD4plh4D6DDV0TAGyo4HcawLIBBSLDkHeH0Mg2yVP3l4TQMZQDDsEOl/MgHQqhMNuE0D+oBh0CIr8MAKyazBH9WyBuKxDWgbXfjNf32TZ1KWm/Ap1oSk/R53UtQ5xTh3LUlMmT8gt6g51Q9p+SobxgJQ/qmsfZhWywGFSl0yBjCLJCMgXail3b7+rumdVJ2YRss4cN+r6qAHDkPWjPjdJCF4n9RmAD/V9A/Wp4NQassDjwlB6XBiCxcJQWmZZb8THFilfy/lfrTvLghq2TqTHrRMTKNJ0sIhdo15RT+RpyWwFdY96UZ/LdQKBGjcXpcc1AlSFEfLmouD+1knuxBDUVrvOBmoOC/rEcN7OQxKVeJTCiAdUzUJhA2Oez9QTkp72OTVcxDcXY8iKNkxGAJXmJCOQwOa6dhyXsOa6XwEGAKdeb5ET3rQdAAAAAElFTkSuQmCC);
}

.xdsoft_datetimepicker .xdsoft_label i {
	opacity: 0.5;
	background-position: -92px -19px;
	display: inline-block;
	width: 9px;
	height: 20px;
	vertical-align: middle;
}

.xdsoft_datetimepicker .xdsoft_prev {
	float: left;
	background-position: -20px 0;
}
.xdsoft_datetimepicker .xdsoft_today_button {
	float: left;
	background-position: -70px 0;
	margin-left: 5px;
}

.xdsoft_datetimepicker .xdsoft_next {
	float: right;
	background-position: 0 0;
}

.xdsoft_datetimepicker .xdsoft_next,
.xdsoft_datetimepicker .xdsoft_prev ,
.xdsoft_datetimepicker .xdsoft_today_button {
	background-color: transparent;
	background-repeat: no-repeat;
	border: 0 none;
	cursor: pointer;
	display: block;
	height: 30px;
	opacity: 0.5;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
	outline: medium none;
	overflow: hidden;
	padding: 0;
	position: relative;
	text-indent: 100%;
	white-space: nowrap;
	width: 20px;
	min-width: 0;
}

.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_prev,
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_next {
	float: none;
	background-position: -40px -15px;
	height: 15px;
	width: 30px;
	display: block;
	margin-left: 14px;
	margin-top: 7px;
}

.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_prev {
	background-position: -40px 0;
	margin-bottom: 7px;
	margin-top: 0;
}

.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box {
	height: 151px;
	overflow: hidden;
	border-bottom: 1px solid #ddd;
}

.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box >div >div {
	background: #f5f5f5;
	border-top: 1px solid #ddd;
	color: #666;
	font-size: 12px;
	text-align: center;
	border-collapse: collapse;
	cursor: pointer;
	border-bottom-width: 0;
	height: 25px;
	line-height: 25px;
}

.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box >div > div:first-child {
	border-top-width: 0;
}

.xdsoft_datetimepicker .xdsoft_today_button:hover,
.xdsoft_datetimepicker .xdsoft_next:hover,
.xdsoft_datetimepicker .xdsoft_prev:hover {
	opacity: 1;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
}

.xdsoft_datetimepicker .xdsoft_label {
	display: inline;
	position: relative;
	z-index: 9999;
	margin: 0;
	padding: 5px 3px;
	font-size: 14px;
	line-height: 20px;
	font-weight: bold;
	background-color: #fff;
	float: left;
	width: 182px;
	text-align: center;
	cursor: pointer;
}

.xdsoft_datetimepicker .xdsoft_label:hover>span {
	text-decoration: underline;
}

.xdsoft_datetimepicker .xdsoft_label:hover i {
	opacity: 1.0;
}

.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select {
	border: 1px solid #ccc;
	position: absolute;
	right: 0;
	top: 30px;
	z-index: 101;
	display: none;
	background: #fff;
	max-height: 160px;
	overflow-y: hidden;
}

.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select.xdsoft_monthselect{ right: -7px }
.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select.xdsoft_yearselect{ right: 2px }
.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select > div > .xdsoft_option:hover {
	color: #fff;
	background: #ff8000;
}

.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select > div > .xdsoft_option {
	padding: 2px 10px 2px 5px;
	text-decoration: none !important;
}

.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select > div > .xdsoft_option.xdsoft_current {
	background: #33aaff;
	box-shadow: #178fe5 0 1px 3px 0 inset;
	color: #fff;
	font-weight: 700;
}

.xdsoft_datetimepicker .xdsoft_month {
	width: 100px;
	text-align: right;
}

.xdsoft_datetimepicker .xdsoft_calendar {
	clear: both;
}

.xdsoft_datetimepicker .xdsoft_year{
	width: 48px;
	margin-left: 5px;
}

.xdsoft_datetimepicker .xdsoft_calendar table {
	border-collapse: collapse;
	width: 100%;

}

.xdsoft_datetimepicker .xdsoft_calendar td > div {
	padding-right: 5px;
}

.xdsoft_datetimepicker .xdsoft_calendar th {
	height: 25px;
}

.xdsoft_datetimepicker .xdsoft_calendar td,.xdsoft_datetimepicker .xdsoft_calendar th {
	width: 14.2857142%;
	background: #f5f5f5;
	border: 1px solid #ddd;
	color: #666;
	font-size: 12px;
	text-align: right;
	vertical-align: middle;
	padding: 0;
	border-collapse: collapse;
	cursor: pointer;
	height: 25px;
}
.xdsoft_datetimepicker.xdsoft_showweeks .xdsoft_calendar td,.xdsoft_datetimepicker.xdsoft_showweeks .xdsoft_calendar th {
	width: 12.5%;
}

.xdsoft_datetimepicker .xdsoft_calendar th {
	background: #f1f1f1;
}

.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_today {
	color: #33aaff;
}

.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_highlighted_default {
	background: #ffe9d2;
	box-shadow: #ffb871 0 1px 4px 0 inset;
	color: #000;
}
.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_highlighted_mint {
	background: #c1ffc9;
	box-shadow: #00dd1c 0 1px 4px 0 inset;
	color: #000;
}

.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_default,
.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_current,
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box >div >div.xdsoft_current {
	background: #33aaff;
	box-shadow: #178fe5 0 1px 3px 0 inset;
	color: #fff;
	font-weight: 700;
}

.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_other_month,
.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_disabled,
.xdsoft_datetimepicker .xdsoft_time_box >div >div.xdsoft_disabled {
	opacity: 0.5;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
	cursor: default;
}

.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_other_month.xdsoft_disabled {
	opacity: 0.2;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=20)";
}

.xdsoft_datetimepicker .xdsoft_calendar td:hover,
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box >div >div:hover {
	color: #fff !important;
	background: #ff8000 !important;
	box-shadow: none !important;
}

.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_current.xdsoft_disabled:hover,
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box>div>div.xdsoft_current.xdsoft_disabled:hover {
	background: #33aaff !important;
	box-shadow: #178fe5 0 1px 3px 0 inset !important;
	color: #fff !important;
}

.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_disabled:hover,
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box >div >div.xdsoft_disabled:hover {
	color: inherit	!important;
	background: inherit !important;
	box-shadow: inherit !important;
}

.xdsoft_datetimepicker .xdsoft_calendar th {
	font-weight: 700;
	text-align: center;
	color: #999;
	cursor: default;
}

.xdsoft_datetimepicker .xdsoft_copyright {
	color: #ccc !important;
	font-size: 10px;
	clear: both;
	float: none;
	margin-left: 8px;
}

.xdsoft_datetimepicker .xdsoft_copyright a { color: #eee !important }
.xdsoft_datetimepicker .xdsoft_copyright a:hover { color: #aaa !important }

.xdsoft_time_box {
	position: relative;
	border: 1px solid #ccc;
}
.xdsoft_scrollbar >.xdsoft_scroller {
	background: #ccc !important;
	height: 20px;
	border-radius: 3px;
}
.xdsoft_scrollbar {
	position: absolute;
	width: 7px;
	right: 0;
	top: 0;
	bottom: 0;
	cursor: pointer;
}
.xdsoft_scroller_box {
	position: relative;
}

.xdsoft_datetimepicker.xdsoft_dark {
	box-shadow: 0 5px 15px -5px rgba(255, 255, 255, 0.506);
	background: #000;
	border-bottom: 1px solid #444;
	border-left: 1px solid #333;
	border-right: 1px solid #333;
	border-top: 1px solid #333;
	color: #ccc;
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_timepicker .xdsoft_time_box {
	border-bottom: 1px solid #222;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_timepicker .xdsoft_time_box >div >div {
	background: #0a0a0a;
	border-top: 1px solid #222;
	color: #999;
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_label {
	background-color: #000;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_label > .xdsoft_select {
	border: 1px solid #333;
	background: #000;
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_label > .xdsoft_select > div > .xdsoft_option:hover {
	color: #000;
	background: #007fff;
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_label > .xdsoft_select > div > .xdsoft_option.xdsoft_current {
	background: #cc5500;
	box-shadow: #b03e00 0 1px 3px 0 inset;
	color: #000;
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_label i,
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_prev,
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_next,
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_today_button {
	background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAAAeCAYAAADaW7vzAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QUExQUUzOTA0M0UyMTFFNDlBM0FFQTJENTExRDVBODYiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QUExQUUzOTE0M0UyMTFFNDlBM0FFQTJENTExRDVBODYiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpBQTFBRTM4RTQzRTIxMUU0OUEzQUVBMkQ1MTFENUE4NiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpBQTFBRTM4RjQzRTIxMUU0OUEzQUVBMkQ1MTFENUE4NiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pp0VxGEAAAIASURBVHja7JrNSgMxEMebtgh+3MSLr1T1Xn2CHoSKB08+QmR8Bx9A8e7RixdB9CKCoNdexIugxFlJa7rNZneTbLIpM/CnNLsdMvNjM8l0mRCiQ9Ye61IKCAgZAUnH+mU3MMZaHYChBnJUDzWOFZdVfc5+ZFLbrWDeXPwbxIqrLLfaeS0hEBVGIRQCEiZoHQwtlGSByCCdYBl8g8egTTAWoKQMRBRBcZxYlhzhKegqMOageErsCHVkk3hXIFooDgHB1KkHIHVgzKB4ADJQ/A1jAFmAYhkQqA5TOBtocrKrgXwQA8gcFIuAIO8sQSA7hidvPwaQGZSaAYHOUWJABhWWw2EMIH9QagQERU4SArJXo0ZZL18uvaxejXt/Em8xjVBXmvFr1KVm/AJ10tRe2XnraNqaJvKE3KHuUbfK1E+VHB0q40/y3sdQSxY4FHWeKJCunP8UyDdqJZenT3ntVV5jIYCAh20vT7ioP8tpf6E2lfEMwERe+whV1MHjwZB7PBiCxcGQWwKZKD62lfGNnP/1poFAA60T7rF1UgcKd2id3KDeUS+oLWV8DfWAepOfq00CgQabi9zjcgJVYVD7PVzQUAUGAQkbNJTBICDhgwYTjDYD6XeW08ZKh+A4pYkzenOxXUbvZcWz7E8ykRMnIHGX1XPl+1m2vPYpL+2qdb8CDAARlKFEz/ZVkAAAAABJRU5ErkJggg==);
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td,
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar th {
	background: #0a0a0a;
	border: 1px solid #222;
	color: #999;
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar th {
	background: #0e0e0e;
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_today {
	color: #cc5500;
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_highlighted_default {
	background: #ffe9d2;
	box-shadow: #ffb871 0 1px 4px 0 inset;
	color:#000;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_highlighted_mint {
	background: #c1ffc9;
	box-shadow: #00dd1c 0 1px 4px 0 inset;
	color:#000;
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_default,
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_current,
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_timepicker .xdsoft_time_box >div >div.xdsoft_current {
	background: #cc5500;
	box-shadow: #b03e00 0 1px 3px 0 inset;
	color: #000;
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td:hover,
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_timepicker .xdsoft_time_box >div >div:hover {
	color: #000 !important;
	background: #007fff !important;
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar th {
	color: #666;
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_copyright { color: #333 !important }
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_copyright a { color: #111 !important }
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_copyright a:hover { color: #555 !important }

.xdsoft_dark .xdsoft_time_box {
	border: 1px solid #333;
}

.xdsoft_dark .xdsoft_scrollbar >.xdsoft_scroller {
	background: #333 !important;
}
.xdsoft_datetimepicker .xdsoft_save_selected {
    display: block;
    border: 1px solid #dddddd !important;
    margin-top: 5px;
    width: 100%;
    color: #454551;
    font-size: 13px;
}
.xdsoft_datetimepicker .blue-gradient-button {
	font-family: "museo-sans", "Book Antiqua", sans-serif;
	font-size: 12px;
	font-weight: 300;
	color: #82878c;
	height: 28px;
	position: relative;
	padding: 4px 17px 4px 33px;
	border: 1px solid #d7d8da;
	background: -moz-linear-gradient(top, #fff 0%, #f4f8fa 73%);
	/* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fff), color-stop(73%, #f4f8fa));
	/* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, #fff 0%, #f4f8fa 73%);
	/* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, #fff 0%, #f4f8fa 73%);
	/* Opera 11.10+ */
	background: -ms-linear-gradient(top, #fff 0%, #f4f8fa 73%);
	/* IE10+ */
	background: linear-gradient(to bottom, #fff 0%, #f4f8fa 73%);
	/* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fff', endColorstr='#f4f8fa',GradientType=0 );
/* IE6-9 */
}
.xdsoft_datetimepicker .blue-gradient-button:hover, .xdsoft_datetimepicker .blue-gradient-button:focus, .xdsoft_datetimepicker .blue-gradient-button:hover span, .xdsoft_datetimepicker .blue-gradient-button:focus span {
  color: #454551;
  background: -moz-linear-gradient(top, #f4f8fa 0%, #FFF 73%);
  /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f4f8fa), color-stop(73%, #FFF));
  /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top, #f4f8fa 0%, #FFF 73%);
  /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top, #f4f8fa 0%, #FFF 73%);
  /* Opera 11.10+ */
  background: -ms-linear-gradient(top, #f4f8fa 0%, #FFF 73%);
  /* IE10+ */
  background: linear-gradient(to bottom, #f4f8fa 0%, #FFF 73%);
  /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f4f8fa', endColorstr='#FFF',GradientType=0 );
  /* IE6-9 */
}
</style>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">
	<!--
	    Start Preloader
	    ==================================== -->
	<div class="preloader">
		<div class="sk-cube-grid">
			<div class="sk-cube sk-cube1"></div>
			<div class="sk-cube sk-cube2"></div>
			<div class="sk-cube sk-cube3"></div>
			<div class="sk-cube sk-cube4"></div>
			<div class="sk-cube sk-cube5"></div>
			<div class="sk-cube sk-cube6"></div>
			<div class="sk-cube sk-cube7"></div>
			<div class="sk-cube sk-cube8"></div>
			<div class="sk-cube sk-cube9"></div>
		</div>
	</div>
	<!-- End Preloader
        ==================================== -->

 <!--
Welcome Slider
==================================== -->

<section class="hero-area overlay" style="background-image: url('images/banner/hero-area1.jpg');">
	<!-- <video autoplay muted loop class="hero-video">
		<source src="images/banner/hero-video.mp4" type="video/mp4">
	</video> -->
	<div class="block">
		<div class="video-button">
			<a class="popup-video" href="https://www.youtube.com/watch?v=bwx2Z69S0YA">
				<i class="tf-ion-play"></i>
		</a>
		</div>
		<h1>Experience the new reality</h1>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.  Fugit, excepturi. At recusandae sit perferendis autem,iste tempora nostrum numquam sapiente!</p>
		<a data-scroll href="#navigation" class="btn btn-transparent">Explore Us</a><br><br>
<!-- 		<button type="button" class="btn btn-main" data-toggle="modal" data-target="#myModal" >Book Appoiment</button>
 -->	</div>
</section>

 <!-- 
  Fixed Navigation
  ==================================== -->
    <header id="navigation" class="navbar navigation">
        <div class="container">
            <div class="navbar-header">
              <!-- responsive nav button -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- /responsive nav button -->
    
                <!-- logo -->
                <a class="navbar-brand logo" href="#body">
                    <img src="images/full_logo.png"  alt="Website Logo"  >
                   <!--  <svg width="40px" height="40px" viewBox="0 0 45 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Group" transform="translate(2.000000, 2.000000)" stroke="#57CBCC" stroke-width="3">
                                <ellipse id="Oval" cx="20.5" cy="20" rx="20.5" ry="20"></ellipse>
                                <path d="M6,7 L33.5,34.5" id="Line-2" stroke-linecap="square"></path>
                                <path d="M21,20 L34,7" id="Line-3" stroke-linecap="square"></path>
                            </g>
                        </g>
                    </svg> -->
                </a>
            <!-- /logo -->
        </div>

        <!-- main nav -->
        <nav class="collapse navbar-collapse navbar-right" role="Navigation">
            <ul id="nav" class="nav navbar-nav navigation-menu">
               <!--  <li><a data-scroll href="#body">Home</a></li> -->
                <li><a data-scroll href="#body">About Us</a></li>
                <li><a data-scroll href="#services">Services</a></li>
                <li><a data-scroll href="#portfolio">Our work</a></li>
                <li><a data-scroll href="#our-team">Team</a></li>
                <li><a data-scroll href="#pricing">Our spaciyality</a></li>
                <li><a data-scroll href="#blog">Blog</a></li>
                <li><a data-scroll href="#contact-us">Contact</a></li>
                <li><a data-scroll href="index.php">Login/Register</a></li>
                <!-- <li><a data-scroll href="#about"><button type="button"  class="btn btn-main"  style="border-radius: 5px;margin-top: 3px;">Book Appoiment</button></a></li> -->
                
            </ul>
        </nav>
        <!-- /main nav -->
  
      </div>
  </header>
  <!--
  End Fixed Navigation
  ==================================== -->

<!--
		Start About Section
		==================================== -->
		<section class="bg-one about section">
			<div class="container">
				<div class="row">
				
					<!-- section title -->
					<div class="title text-center wow fadeIn" data-wow-duration="1500ms" >
						<h2>About <span class="color">Us</span> </h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
					<!-- About item -->
					<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" >
						<div class="block">							
							<div class="icon-box">
								<i class="tf-tools"></i>
							</div>					
							<!-- Express About Yourself -->
							<div class="content text-center">
								<h3 class="ddd">Our Vision</h3>								
								<p>Enable healthcare businesses to provide superior healthcare delivery and patient care with technology – globally</p>
							</div>
						</div>
					</div> 
					<!-- End About item -->
					
					<!-- About item -->
					<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="250ms">
						<div class="block">
							<div class="icon-box">
								<i class="tf-strategy"></i>
							</div>
							<!-- Express About Yourself -->
							<div class="content text-center">
								<h3>Customer service</h3>
								<p>Our focus on customer service makes our customers not only happy but also enthusiastically refer to other customers.</p>
							</div>
						</div>
					</div> 
					<!-- End About item -->
					
					<!-- About item -->					
					<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
						<div class="block kill-margin-bottom">
							<div class="icon-box">
								<i class="tf-anchor2"></i>
							</div>
							<!-- Express About Yourself -->
							<div class="content text-center">
								<h3>Our Mission</h3>
								<p>Provide a scalable, secure platform to clinics and hospitals that provide great value at reasonable cost</p>
							</div>
						</div>
					</div> 
					<!-- End About item -->
					
				</div> 		<!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->


<!-- Appoinmnetbooking 
====================================-->



<!-- <section class="section about-2 padding-0 bg-dark" id="about">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 padding-0 ">
				<img class="img-responsive" src="images/about/about-business-man.jpg" alt="">
			</div>
			<div class="col-md-6">
				<div class="content-block">
					<h2>We’re A Digital Design Agency.</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam tempora itaque, autem dolores culpa cum mollitia voluptate nesciunt voluptatibus quasi.</p>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis eveniet vel et mollitia nemo corporis sed ut, exercitationem incidunt, rerum nam doloremque quos ratione doloribus, officiis adipisci error quasi soluta?</p>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore, magnam.</p>
					<div class="row">
						<div class="col-md-6">
							<div class="media">
								<div class="pull-left">
									<i class="tf-circle-compass"></i>	
								</div>
								<div class="media-body">
									<h4 class="media-heading">SEO Optimized</h4>
									<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus consectetur dolores repellendus eos saepe</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="media">
								<div class="pull-left">
									<i class="tf-hotairballoon"></i>	
								</div>
								<div class="media-body">
									<h4 class="media-heading">Easy Customization</h4>
									<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus consectetur dolores repellendus </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
 -->
<!--
Start Call To Action
==================================== -->
<section class="call-to-action section-sm bg-1 overly">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Online Software For Your Clinic/Hospital</h2>
				<p>Drplus Clinic/Hospital Management (HIMS) software helps
						deliver superior healthcare delivery for doctors, clinics and hospitals.</p>
				<!-- <button type="button" class="btn btn-main " data-toggle="Appoinment" data-target="#exampleModal">Start a project with us</button> -->

				<a data-scroll href="#about"> <button type="button" class="btn btn-main" >Book Appoinment</button></a>
					

				
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->

<!-- Start Services Section
==================================== -->

<section id="services" class="bg-one section">
	<div class="container">
		<div class="row">
			
			<!-- section title -->
			<div class="title text-center wow fadeIn" data-wow-duration="500ms">
				<h2>Our <span class="color">Services</span></h2>
				<div class="border"></div>
			</div>
			<!-- /section title -->
			
            <!-- Single Service Item -->
			<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms">
				<div class="service-block text-center">
					<div class="service-icon text-center">
						<img src="images/icon4.png">
						<!-- <i class="fas fa-pills"></i> -->
					</div>
					<h3>Critical Care</h3>
<!-- 					<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p> -->
				</div>
			</article>
            <!-- End Single Service Item -->
            
            <!-- Single Service Item -->
			<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
				<div class="service-block text-center">
					<div class="service-icon text-center">
						<img src="images/icon2.png">
						<!-- <i class="tf-ion-laptop"></i> -->
					</div>
					<h3>Internal medicine</h3>
<!-- 					<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p> -->
				</div>
			</article>
            <!-- End Single Service Item -->
            
            <!-- Single Service Item -->
			<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
				<div class="service-block text-center">
					<div class="service-icon text-center">
						<img src="images/icon3.png">
						<!--<i class="tf-genius"></i> -->
					</div>
					<h3>Emergency</h3>
<!-- 					<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p> -->
				</div>
			</article>
			<!-- End Single Service Item -->
			
			<!-- Single Service Item -->
			<!-- <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
				<div class="service-block text-center">
					<div class="service-icon text-center">
						<i class="tf-dial"></i>
					</div>
					<h3>Graphic Design</h3>
					<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
				</div>
			</article> -->
			<!-- End Single Service Item -->
			
			<!-- Single Service Item -->
			<!-- <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
				<div class="service-block text-center">
					<div class="service-icon text-center">
						<i class="tf-target3"></i>
					</div>
					<h3>Apps Development</h3>
					<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
				</div>
			</article> -->
			<!-- End Single Service Item -->
			
			<!-- Single Service Item -->
<!-- 			<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
				<div class="service-block text-center kill-margin-bottom">
					<div class="service-icon text-center">
						<i class="tf-lifesaver"></i>
					</div>
					<h3>Networking</h3>
					<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
				</div>
			</article> -->
			<!-- End Single Service Item -->
				
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->
	

<!-- Start Team Skills
		=========================================== -->
		
		<section id="team-skills" class="parallax-section section section-bg overly">
			<div class="container">
				<div class="row" >
					<!-- section title -->
					<div class="col-md-12">
						<div class="title text-center">
							<h2>Our <span class="color">Skills</span></h2>
							<div class="border"></div>
						</div>
					</div>
					<!-- /section title -->
				</div>  		<!-- End row -->
				<div class="row">
					<div class="col-md-6">
						<h2>We’ve skilled in wide range of Doctory<br> 
							and Other medical field.</h2>
							<p>Caring For The Health And Well Being Of You And Your Family.We provide all aspects of medical practice for your whole family, including general check-ups or assisting you with specific injuries.</p>
							<img class="img-responsive" src="images/about/company-growth.png" alt="">
					</div>
					<div class="col-md-6">
						<ul class="skill-bar">
							<li>
								<p><span>01-</span> Anesthesiologists</p>
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="70"
									aria-valuemin="0" aria-valuemax="100" style="width:90%">
									</div>
								</div>
							</li>
							<li>
								<p><span>02-</span> Cardiologists</p>
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="70"
									aria-valuemin="0" aria-valuemax="100" style="width:70%">
									</div>
								</div>
							</li>
							<li>
								<p><span>03-</span> Endocrinologists</p>
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="70"
									aria-valuemin="0" aria-valuemax="100" style="width:85%">
									</div>
								</div>
							</li>
							<li>
								<p><span>04-</span> Endocrinologists</p>
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="70"
									aria-valuemin="0" aria-valuemax="100" style="width:60%">
									</div>
								</div>
							</li>
							<li>
									<p><span>05-</span> Family Physicians</p>
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="70"
										aria-valuemin="0" aria-valuemax="100" style="width:94%">
										</div>
									</div>
								</li>
						</ul>
					</div>
				</div>
			</div>   	<!-- End container -->
		</section>   <!-- End section -->

<!-- Start Portfolio Section
		=========================================== -->

<section class="portfolio section" id="portfolio">
	<div class="container">
		<div class="row ">
			<div class="col-lg-12">
				<!-- section title -->
				<div class="title text-center">
					<h2>Our <span class="color">Works</span></h2>
					<div class="border"></div>
				</div>
				<!-- /section title -->
			</div> <!-- /end col-lg-12 -->
		</div> <!-- end row -->
		<div class="row">
			<div class="col-md-12">
				<div class="portfolio-filter">
					<button class="active" type="button" data-filter="all">All</button>
					<button type="button" data-filter="body">Body</button>
					<button type="button" data-filter="skin">Skin</button>
					<button type="button" data-filter="dental">Dental</button>
				</div>
			</div>
		</div>
		<div class="row filtr-container">
			<div class="col-lg-4 filtr-item" data-category="body">
				<div class="portfolio-block">
					<img class="img-responsive" src="images/portfolio/p11.jpg" alt="">
					<div class="caption">
						<a class="search-icon image-popup" data-effect="mfp-with-zoom" href="images/portfolio/p1.jpg"
							data-lightbox="image-1">
							<i class="tf-ion-android-search"></i>
						</a>
						<h4><a href="">Eye treatment</a></h4>
						<p>Your eyes are an important part of your health. Most people rely on their eyes to see and make sense of the world around them</p>
					</div>
				</div>
			</div>
			<div class="filtr-item col-md-4" data-category="body">
				<div class="portfolio-block">
					<img class="img-responsive" src="images/portfolio/p22.jpg" alt="">
					<div class="caption">
						<a class="search-icon image-popup" data-effect="mfp-with-zoom" href="images/portfolio/p2.jpg"
							data-lightbox="image-1">
							<i class="tf-ion-android-search"></i>
						</a>
						<h4><a href="">knee injury.</a></h4>
						<p>The most common knee injuries include sprains and tears of soft tissues (e.g., ligaments, meniscus), fractures, and dislocation. </p>
					</div>
				</div>
			</div>
			<div class="filtr-item col-md-4" data-category="body">
				<div class="portfolio-block">
					<img class="img-responsive" src="images/portfolio/p33.jpg" alt="">
					<div class="caption">
						<a class="search-icon image-popup" data-effect="mfp-with-zoom" href="images/portfolio/p3.jpg"
							data-lightbox="image-1">
							<i class="tf-ion-android-search"></i>
						</a>
						<h4><a href="">Foot injury</a></h4>
						<p>What to Know About Foot (and Ankle) Injuries. Inside your foot lies machinery that would impress any engineer.</p>
					</div>
				</div>
			</div>
			<div class="filtr-item col-md-4" data-category="body">
				<div class="portfolio-block">
					<img class="img-responsive" src="images/portfolio/p44.jpg" alt="">
					<div class="caption">
						<a class="search-icon image-popup" data-effect="mfp-with-zoom" href="images/portfolio/p4.jpg"
							data-lightbox="image-1">
							<i class="tf-ion-android-search"></i>
						</a>
						<h4><a href="">Hand injury</a></h4>
						<p>Carpal tunnel syndrome - compression of a nerve as it goes through the wrist, often making your fingers feel numb.</p>
					</div>
				</div>
			</div>
			<div class="filtr-item col-md-4" data-category="skin">
				<div class="portfolio-block">
					<img class="img-responsive" src="images/portfolio/p55.jpg" alt="">
					<div class="caption">
						<a class="search-icon image-popup" data-effect="mfp-with-zoom" href="images/portfolio/p5.jpg"
							data-lightbox="image-1">
							<i class="tf-ion-android-search"></i>
						</a>
						<h4><a href="">Sketchs mark</a></h4>
						<p>Stretch marks fade with time; however, treatment may make them less noticeable more quickly. A stretch mark is a type of scar that develops when our skin.</p>
					</div>
				</div>
			</div>
			<div class="filtr-item col-md-4" data-category="skin">
				<div class="portfolio-block">
					<img class="img-responsive" src="images/portfolio/p66.jpg" alt="">
					<div class="caption">
						<a class="search-icon image-popup" data-effect="mfp-with-zoom" href="images/portfolio/p6.jpg"
							data-lightbox="image-1">
							<i class="tf-ion-android-search"></i>
						</a>
						<h4><a href="">Skin fungus</a></h4>
						<p>Fungal skin infections can be itchy and annoying, but they're rarely serious. Common infections such as athlete's foot, jock itch, and ringworm are caused.</p>
					</div>
				</div>
			</div>
			<div class="filtr-item col-md-4" data-category="dental">
				<div class="portfolio-block">
					<img class="img-responsive" src="images/portfolio/p77.jpg" alt="">
					<div class="caption">
						<a class="search-icon image-popup" data-effect="mfp-with-zoom" href="images/portfolio/p7.jifi"
							data-lightbox="image-1">
							<i class="tf-ion-android-search"></i>
						</a>
						<h4><a href="">Teeth break</a></h4>
						<p>Although the enamel that covers your teeth is the hardest, most mineralized tissue in the body, its strength has limits.</p>
					</div>
				</div>
			</div>
			<div class="filtr-item col-md-4" data-category="skin">
				<div class="portfolio-block">
					<img class="img-responsive" src="images/portfolio/p88.jpg" alt="">
					<div class="caption">
						<a class="search-icon image-popup" data-effect="mfp-with-zoom" href="images/portfolio/p8.jpg"
							data-lightbox="image-1">
							<i class="tf-ion-android-search"></i>
						</a>
						<h4><a href="">Acny tratment</a></h4>
						<p>Acne is a skin disease involving the oil glands at the base of hair follicles. It affects 3 in every 4 people aged 11 to 30 years.</p>
					</div>
				</div>
			</div>
			<div class="filtr-item col-md-4" data-category="dental">
				<div class="portfolio-block">
					<img class="img-responsive" src="images/portfolio/p99.jpg" alt="">
					<div class="caption">
						<a class="search-icon image-popup" data-effect="mfp-with-zoom" href="images/portfolio/p9.jpg"
							data-lightbox="image-1">
							<i class="tf-ion-android-search"></i>
						</a>
						<h4><a href="">Mouth broke</a></h4>
						<p>Breathe in air; Start digestion, with your teeth chewing the food you eat and your salivary glands releasing saliva to help break down the food.</p>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- end container -->
</section> <!-- End section -->

<!--
Start Counter Section
==================================== -->
		
<section id="counter" class="parallax-section bg-1 section overly">
	<div class="container">
		<div class="row">
		
			<!-- first count item -->
			<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms">
				<div class="counters-item">
					<i class="tf-ion-android-happy"></i>
					<span data-speed="3000" data-to="3200">3200</span>
					<h3>Happy Patients</h3>
				</div>
			</div>
			<!-- end first count item -->
		
			<!-- second count item -->
			<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
				<div class="counters-item">
					<i class="tf-ion-archive"></i>
					<span data-speed="3000" data-to="543">543</span>
					<h3>Regular Clients</h3>
				</div>
			</div>
			<!-- end second count item -->
		
			<!-- third count item -->
			<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
				<div class="counters-item">
					<i class="tf-ion-thumbsup"></i>
					<span data-speed="3000" data-to="621">621</span>
					<h3>Positive Feedback</h3>
					
				</div>
			</div>
			<!-- end third count item -->
			
			<!-- fourth count item -->
			<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
				<div class="counters-item kill-margin-bottom">
					<i class="tf-ion-coffee"></i>
					<span data-speed="3000" data-to="181">181</span>
					<h3>Total Branches</h3>
				</div>
			</div>
			<!-- end fourth count item -->
			
		</div> 		<!-- end row -->
	</div>   	<!-- end container -->
</section>   <!-- end section -->

<!-- 
Start Our Team
=========================================== -->

<section id="our-team" class="section">
	<div class="container">
		<div class="row">
		
			<!-- section title -->
			<div class="title text-center wow fadeInUp" data-wow-duration="500ms">
				<h2>Our <span class="color">Team</span></h2>
				<div class="border"></div>
			</div>
			<!-- /section title -->
			
			<!-- team member -->
			<div class="col-md-3 col-sm-6 col-xs-12  wow fadeInDown" data-wow-duration="500ms">
               <div class="team-member">
					<div class="member-photo">
						<!-- member photo -->
						<img class="img-responsive" src="images/team/t1.jpg" alt="Meghna">
						<!-- /member photo -->
						
						<!-- member social profile -->
						<div class="mask">
							<ul class="list-inline">
								<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-linkedin"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-dribbble-outline"></i></a></li>
							</ul>
						</div>
						<!-- /member social profile -->
					</div>
					
					<!-- member name & designation -->
					<div class="member-meta">
						<h4>Abul Mal Muhit</h4>
						<span>CEO/Founder</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
					</div>
					<!-- /member name & designation -->
					<!-- /about member -->
				   
               </div>
            </div>
			<!-- end team member -->
			
			<!-- team member -->
			<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
               <div class="team-member">
					<div class="member-photo">
						<!-- member photo -->
						<img class="img-responsive" src="images/team/t2.jpg" alt="Meghna">
						<!-- /member photo -->
						
						<!-- member social profile -->
						<div class="mask">
							<ul class="list-inline">
								<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-linkedin"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-dribbble-outline"></i></a></li>
							</ul>
						</div>
						<!-- /member social profile -->
					</div>
					
					<!-- member name & designation -->
					<div class="member-meta">
						<h4>Frank Miller</h4>
						<span>Cardiologists</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
					</div>
					<!-- /member name & designation -->
					<!-- /about member -->
				</div>
            </div>
			<!-- end team member -->
			
			<!-- team member -->
			<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
               <div class="team-member">
					<div class="member-photo">
						<!-- member photo -->
						<img class="img-responsive" src="images/team/t3.jpg" alt="Meghna">
						<!-- /member photo -->
						
						<!-- member social profile -->
						<div class="mask">
							<ul class="list-inline">
								<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-linkedin"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-dribbble-outline"></i></a></li>
							</ul>
						</div>
						<!-- /member social profile -->
					</div>
					
					<!-- member name & designation -->
					<div class="member-meta">
						<h4>Michael Jonson</h4>
						<span>Endocrinologists</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
					</div>
					<!-- /member name & designation -->
					<!-- /about member -->
               </div>
            </div>
			<!-- end team member -->
			
			<!-- team member -->
			<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
               <div class="team-member">
					<div class="member-photo">
						<!-- member photo -->
						<img class="img-responsive" src="images/team/t4.jpg" alt="Meghna">
						<!-- /member photo -->
						
						<!-- member social profile -->
						<div class="mask">
							<ul class="list-inline">
								<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-linkedin"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-dribbble-outline"></i></a></li>
							</ul>
						</div>
						<!-- /member social profile -->
					</div>
					
					<!-- member name & designation -->
					<div class="member-meta">
						<h4>Mo. Kha. Alamgir</h4>
						<span> Family Physicians</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
					</div>
					<!-- /member name & designation -->
					<!-- /about member -->
               </div>
            </div>
			<!-- end team member -->
			
		</div>  	<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->


<!-- coursel
=================================================		 -->


<!-- Start Pricing section
		=========================================== -->
		
		<section id="pricing" class="pricing section">
			<div class="container">
				<div class="row">
					
					<!-- section title -->
				    <div class="title text-center wow fadeInDown" data-wow-duration="500ms">
			        	<h2>Our <span class="color">Specialities</span></h2>
				        <div class="border"></div>
				    </div>
				    <!-- /section title -->
					
					<!-- single pricing table -->
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp"  data-wow-duration="200ms">
						
							<img src="images\dricon\11.png" style="border-radius: 10px;">	
					</div>
					<!-- end single pricing table -->
					
					<!-- single pricing table -->
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
						
						<img src="images\dricon\22.png" style="border-radius: 10px;">

					</div>
					<!-- end single pricing table -->
					
					<!-- single pricing table -->
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp " data-wow-duration="500ms" data-wow-delay="600ms">
						<img src="images\dricon\33.png" style="border-radius: 10px;">
					</div>
					<!-- end single pricing table -->
					
					<!-- single pricing table -->
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="750ms">
						<img src="images\dricon\44.png" style="border-radius: 10px;">
					</div>
					<!-- end single pricing table -->

					
				    
					
				</div>       <!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->

<!-- Start Testimonial
		=========================================== -->

<section id="testimonial" class="testimonial overly section bg-2">
	<div class="container">
		<div class="row">				
			<div class="col-lg-12">
				<!-- testimonial wrapper -->
				<div id="testimonials" class="wow fadeInUp" data-wow-duration="500ms" data-wow-delay="100ms">
				
					<!-- testimonial single -->
					<div class="item text-center">
						
						<!-- client photo -->
						<div class="client-thumb">
							<img src="images/team/client-1.jpg" class="img-responsive" alt="Meghna">
						</div>
						<!-- /client photo -->
						
						<!-- client info -->
						<div class="client-info">
							<div class="client-meta">
								<h3>Jonathon Andrew</h3>
								<span>Dec 26, 2018</span>
							</div>
							<div class="client-comment">
								<p>The services that I receive from Michael Jonson is excellent. Dr.Michael Jonson and the staff are friendly and ensure that I am properly informed about my health and care. I would have no qualms in recommending them to friendly and friends.</p>
							</div>
						</div>
						<!-- /client info -->
					</div>
					<!-- /testimonial single -->
				
					<!-- testimonial single -->
					<div class="item text-center">
						
						<!-- client photo -->
						<div class="client-thumb">
							<img src="images/team/client-2.jpg" class="img-responsive" alt="Meghna">
						</div>
						<!-- /client photo -->
						
						<!-- client info -->
						<div class="client-info">
							<div class="client-meta">
								<h3>Jonathon Andrew</h3>
								<span>Dec 26, 2018</span>
							</div>
							<div class="client-comment">
								<p>The services that I receive from Frank Miller is excellent. Dr.Frank Miller and the staff are friendly and ensure that I am properly informed about my health and care. I would have no qualms in recommending them to friendly and friends.</p>
							</div>
						</div>
						<!-- /client info -->
					</div>
					<!-- /testimonial single -->
				
					<!-- testimonial single -->
					<div class="item text-center">
						
						<!-- client photo -->
						<div class="client-thumb">
							<img src="images/team/client-1.jpg" class="img-responsive" alt="Meghna">
						</div>
						<!-- /client photo -->
						
						<!-- client info -->
						<div class="client-info">
							<div class="client-meta">
								<h3>Jonathon Andrew</h3>
								<span>Dec 26, 2018</span>
							</div>
							<div class="client-comment">
								<p>Dr.Mo. Kha. Alamgir) is incredible. Not only has she taken great care of my health, but also she is lovely to speak with at every appointment. It’s rare to find a doctor that combines such personal touches and care for a patient as a person with outstanding quality of medical care. I highly recommend becoming her patient!</p>
							</div>
						</div>
						<!-- /client info -->
					</div>
					<!-- /testimonial single -->
					
				</div>		<!-- end testimonial wrapper -->
			</div> 		<!-- end col lg 12 -->
		</div>	    <!-- End row -->
	</div>       <!-- End container -->
</section>    <!-- End Section -->

<section class="section about-2 padding-0 bg-dark" id="about">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 padding-0 ">
				<img class="img-responsive" src="images\appoinmnet\dr.png" alt="">
			</div>
			<div class="col-md-6">
				<div class="content-block">
									<div class="title text-center">
										<h2>Book <span class="color">Appoinment</span></h2>
										<div class="border"></div>
									</div>

					            <?php include "appoinment_insert.php";?>      
									<p>
							         <?php if (isset($_SESSION['error'])) 
							            {?>
									      <div class="alert  m-4" role="alert">
									         <h3 class="alert-heading"><b><i class="bi bi-emoji-frown-fill"></i> Error!</b></h3>
									         <hr>
									         <?php 
									            foreach ($_SESSION['error'] as $value)
									            {
									              echo "<ul><li> > ".$value."</li></ul>";
									            } unset($_SESSION['error']);
									            }
									            ?>
							         </p><br>
									
					               <form id="book-form" name="book-form" method="POST" action="home.php">
					                  <div class="form-group">
					                     <input type="text" placeholder="Your Full Name" class="form-control" name="name" id="name"
					                      value="<?php if(isset($_SESSION['book']['name'])){
						                           echo $_SESSION['book']['name'];
						                           } ?>">
						                           <span id="Errorname"></span>
					                  </div>
					                  <div class="form-group">
					                     <input type="email" placeholder="Your Email" class="form-control" name="email" id="email"
					                      value="<?php if(isset($_SESSION['book']['email'])){
						                           echo $_SESSION['book']['email'];
						                           } ?>">
						                           <span id="Erroremail"></span>
					                  </div>
					                  <div class="form-group">
					                     <input type="text" placeholder="Contect" class="form-control" name="contect" id="contect"
					                     	value="<?php if(isset($_SESSION['book']['contect'])){
						                           echo $_SESSION['book']['contect'];
						                           } ?>">
						                           <span id="Errorcontect"></span>
					                  </div>
					                  <div class="form-group">
					                  	 <input placeholder="Date & Time"  id="fdate" name="fdate" type="text" style="background-color:#2f383d;padding: 5px 10px;border: 0 none;color:#ddd;width: 100%;" />
					                  	 <span id="Errorfdate"></span>
					                  </div>
					                 
					                  <div class="form-group">
					                  	<select class="form-control" name="select_id" id="select_id">
					                  		<option disabled selected>-- Select Specialities--</option>
					                  		<?php
					                           include "config.php"; 
					                           $records = mysqli_query($conn, "SELECT id,cate_name From categories");  
					                           $_SESSION['select_id']=$select_id;
					                           while($data = mysqli_fetch_array($records))
					                           {
					                               if (isset($_SESSION['select_id']))
					                               {
					                                 if ($_SESSION['user']['select_id']==$data['id']) {
					                                     $select="selected";
					                                 }
					                               }
					                               echo "<option ".$select." value=' ". $data['id'] ."  ' >".$data['cate_name']."</option>"; 
					                                 $select='';
					                           }  
					                           ?>
					                  	</select>
					                  	<span id="Errorselect_id"></span>
					                    
					                  </div>

					                  <div class="form-group">
					                     <textarea rows="6" placeholder="Symptoms" class="form-control" name="symptoms" id="symptoms"></textarea>
					                     <span id="Errorsymptoms"></span>	
					                  </div>

					                  <div id="cf-submit">
											<input type="submit" id="book" class="btn btn-transparent" value="Book Appoinment" name="book">
										</div>
					               </form>
					           
	
					</div>
				</div>
			</div>
		</div>
	</div>
</section>	

<!-- Start Blog Section =========================================== -->
		
<section id="blog" class="section">
	<div class="container">
		<div class="row">
			<!-- section title -->
			<div class="title text-center wow fadeInDown">
				<h2> Latest <span class="color">Posts</span></h2>
				<div class="border"></div>
			</div>
			<!-- /section title -->
			<div class="clearfix">
				<!-- single blog post -->
				<article class="col-md-4 col-sm-6 col-xs-12 clearfix wow fadeInUp" data-wow-duration="500ms">
					<div class="post-block">
						<div class="media-wrapper">
							<img src="images/blog/blog-post-1.jpg" alt="amazing caves coverimage" class="img-responsive">
						</div>
						<div class="content">
							<h3><a href="">Simple Image Post</a></h3>
							<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
							<a class="btn btn-transparent" href="blog-single.html">Read more</a>
						</div>
					</div>						
				</article>
				<!-- /single blog post -->
				
				<!-- single blog post -->
				<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
					<div class="post-block">
						<div id="gallery-post" class="media-wrapper">
							<div class="item">
								<img src="images/blog/blog-post-1.jpg" alt="blog post" class="img-responsive">
							</div>
							<div class="item">
								<img src="images/blog/blog-post-3.jpg" alt="blog post" class="img-responsive">
							</div>
							<div class="item">
								<img src="images/blog/blog-post-2.jpg" alt="blog post | Meghna" class="img-responsive">
							</div>
						</div>
						
						<div class="content">
							<h3><a href="">Simple Slider Post</a></h3>
							<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
							<a class="btn btn-transparent" href="blog-single.html">Read more</a>
						</div>
					</div>						
				</article>
				<!-- end single blog post -->
				
				<!-- single blog post -->
				<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
					<div class="post-block">
						<div class="media-wrapper">
							<img src="images/blog/blog-post-6.jpg" alt="amazing caves coverimage" class="img-responsive">
						</div>
						
						<div class="content">
							<h3><a href="">Simple Image Post</a></h3>
							<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
							<a class="btn btn-transparent" href="blog-single.html">Read more</a>
						</div>
					</div>						
				</article>
				<!-- end single blog post -->
			</div>
			<div class="all-post text-center">
				<a class="btn btn-main" href="blog.html">View All Post</a>
			</div>
		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- end section -->

<!-- Srart Contact Us
=========================================== -->		
<section id="contact-us" class="contact-us section-bg">
	<div class="container">
		<div class="row">
			
			<!-- section title -->
			<div class="title text-center wow fadeIn" data-wow-duration="500ms">
				<h2>Get In <span class="color">Touch</span></h2>
				<div class="border"></div>
			</div>
			<!-- /section title -->
			
			<!-- Contact Details -->
			<div class="contact-info col-md-6 wow fadeInUp" data-wow-duration="500ms">
				<h3>Contact Details</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, vero, provident, eum eligendi blanditiis ex explicabo vitae nostrum facilis asperiores dolorem illo officiis ratione vel fugiat dicta laboriosam labore adipisci.</p>
				<div class="contact-details">
					<div class="con-info clearfix">
						<i class="tf-map-pin"></i>
						<span>Khaja Road, Bayzid, Chittagong, Bangladesh</span>
					</div>
					
					<div class="con-info clearfix">
						<i class="tf-ion-ios-telephone-outline"></i>
						<span>Phone: +880-31-000-000</span>
					</div>
					
					<div class="con-info clearfix">
						<i class="tf-ion-iphone"></i>
						<span>Fax: +880-31-000-000</span>
					</div>
					
					<div class="con-info clearfix">
						<i class="tf-ion-ios-email-outline"></i>
						<span>Email: hello@meghna.com</span>
					</div>
				</div>
			</div>
			<!-- / End Contact Details -->
				
			<!-- Contact Form -->
			<div class="col-md-6">
				<div class="content-block">
									

					            <?php  include "contect_insert.php"; ?>
									
					              <form id="contactform" method="post" action="home.php" role="form">
					                  <div class="form-group">
					                     <input type="text" placeholder="Your Name" class="form-control" name="con_name" id="name">
					                    
					                  </div>
					                  <div class="form-group">
					                     <input type="email" placeholder="Your Email" class="form-control" name="con_email" id="email">
					                      
					                  </div>
					                  <div class="form-group">
										<input type="text" placeholder="Subject" class="form-control" name="con_subject" id="subject">
					                     	
					                  </div>
					                  <div class="form-group">
											<textarea rows="6" placeholder="Message" class="form-control" name="con_message" id="message"></textarea>	
										</div>
					                 
					                  

					                 
					                  <div id="cf-submit">
										<input type="submit" id="contactsubmit" class="btn btn-transparent" value="Send" name="con_submit">
										</div>
					               </form><br><br>
					           
	
					</div>
				</div>
			<!-- <div class="contact-form col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
				
				<form id="contact-form" method="post" action=" index.php" role="form">
				
					<div class="form-group">
						<input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
					</div>
					
					<div class="form-group">
						<input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
					</div>
					
					<div class="form-group">
						<input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
					</div>
					
					<div class="form-group">
						<textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>	
					</div>
					
					
					<div id="cf-submit">
						<input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit" name="submit">
					</div>						
					
				</form>
			</div> -->
			<!-- ./End Contact Form -->
		
		</div> <!-- end row -->
	</div> <!-- end container -->
	
	<!-- Google Map -->
	<div class="google-map">
		<div ><iframe class="mapp" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.2405124321535!2d70.76534794975106!3d22.30674194822775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959c983ae49a5d9%3A0x6ec42199c0552471!2sSterling%20Hospital%20Rajkot!5e0!3m2!1sen!2sin!4v1640514993245!5m2!1sen!2sin"  allowfullscreen="" loading="lazy"></iframe></div>
	</div>	
	<!-- /Google Map -->
	
</section> <!-- end section -->
	

<!-- end Contact Area
		========================================== -->

<footer id="footer" class="bg-one">
	<div class="container">
		<div class="row wow fadeInUp" data-wow-duration="500ms">
			<div class="col-lg-12">

				<!-- Footer Social Links -->
				<div class="social-icon">
					<ul class="list-inline">
						<li><a href="https://www.facebook.com/sahil.markana.52/"><i class="tf-ion-social-facebook"></i></a></li>
						<li><a href="https://in.linkedin.com/in/sahil-markana-01b7b71b5"><i class="tf-ion-social-twitter"></i></a></li>
						<li><a href="https://www.youtube.com/channel/UCEevzXfRjyDQhchPi0nxzpw"><i class="tf-ion-social-youtube"></i></a></li>
						<li><a href="https://api.whatsapp.com/send/?phone=%2B917069961481&text=hello%2Ci+need+some+help&app_absent=0"><i class="tf-ion-social-whatsapp-outline"></i></a></li>
						<li><a href="https://www.instagram.com/sahiiil.___/"><i class="tf-ion-social-instagram-outline"></i></a></li>
					</ul>
				</div>
				<!--/. End Footer Social Links -->

				<!-- copyright -->
				<div class="copyright text-center">
					<a href="index.html">
						<img src="images/full_logo.png" alt="Meghna" /> 
						<!-- <svg width="40px" height="40px" viewBox="0 0 45 44" version="1.1"
							xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<g id="Group" transform="translate(2.000000, 2.000000)" stroke="#57CBCC"
									stroke-width="3">
									<ellipse id="Oval" cx="20.5" cy="20" rx="20.5" ry="20"></ellipse>
									<path d="M6,7 L33.5,34.5" id="Line-2" stroke-linecap="square"></path>
									<path d="M21,20 L34,7" id="Line-3" stroke-linecap="square"></path>
								</g>
							</g>
						</svg> -->
					</a>
					<br />

					<p>Design And Developed by <a href="https://in.linkedin.com/in/sahil-markana-01b7b71b5">Sahil Markana</a>. Copyright
						&copy; <script>
							document.write(new Date().getFullYear())
						</script>. All Rights Reserved.</p>
				</div>
				<!-- /copyright -->

			</div> <!-- end col lg 12 -->
		</div> <!-- end row -->
	</div> <!-- end container -->
</footer> <!-- end footer -->
	    
		
<!-- jqury validation
		 -->
		
		
		
		
		


		<!-- 
		Essential Scripts
		=====================================-->
		
		<!-- Main jQuery -->
		<script type="text/javascript" src="plugins/jquery/dist/jquery.min.js"></script>
		<!-- Bootstrap 3.1 -->
		<script type="text/javascript" src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
		<!-- Slick Carousel -->
		<script type="text/javascript" src="plugins/slick-carousel/slick/slick.min.js"></script>
		<!-- Portfolio Filtering -->
		<script type="text/javascript" src="plugins/filterzr/jquery.filterizr.min.js"></script>
		<!-- Smooth Scroll -->
		<script type="text/javascript" src="plugins/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
		<!-- Magnific popup -->
		<script type="text/javascript" src="plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
		<!-- Google Map API -->
		<script type="text/javascript"  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
		<!-- Sticky Nav -->
		<script type="text/javascript" src="plugins/Sticky/jquery.sticky.js"></script>
		<!-- Number Counter Script -->
		<script type="text/javascript" src="plugins/count-to/jquery.countTo.js"></script>
		<!-- wow.min Script -->
		<script type="text/javascript" src="plugins/wow/dist/wow.min.js"></script>
		<!-- Custom js -->
		<script type="text/javascript" src="js/script.js"></script>
		

 <!-- jquary validation 
         ============================================================== -->
      <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
      <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
      <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>


<!-- javascript validation -->

      <script>

         jQuery.validator.addMethod("dateunique", function(value, element) {
                        let dateInput = $('#fdate').val();
                        var result = false;
                            $.ajax({
                               type:"POST",
                                url: "date_unique.php",
                                async:false,
                                data:{fdate:dateInput},
                                method:"POST",
                                success:function(resp)
                                {
                                    result = (resp == true) ? true: false;
                                }
                            });     
                            return result;
                    }, "This date has been already taken.");

        // jQuery.validator.addMethod("timeunique", function(value, element) {
        //                 let timeInput = $('#time').val();
        //                 var result = false;
        //                     $.ajax({
        //                        type:"POST",
        //                         url: "time_unique.php",
        //                         async:false,
        //                         data:{time:timeInput},
        //                         method:"POST",
        //                         success:function(resp)
        //                         {
        //                             result = (resp == true) ? true: false;
        //                         }
        //                     });     
        //                     return result;
        //             }, "This time has been already taken.");
		
		

     </script>


 <script type="text/javascript">
         $( "#book-form" ).validate({
           rules: {
             name: {
               required: true,
               lettersonly: true 
             },
             email: {
             	required: true
             },
             contect: {
               required: true,
               number:true
             },
             fdate: {
               required: true,
               // dateunique: true
             },
             select_id: {
             	required: true
             },
             symptoms: {
             	required: true
             }

           }
   
         });
         
         
         
         
      


 
    </script> -->
  
    <script type="text/javascript">
         $( "#contactform" ).validate({
           rules: {
             con_name: {
               required: true,
               lettersonly: true 
             },
             con_email: {
             	required: true
             },
             con_subject: {
               required: true
             },
             con_message: {
               required: true
             }
           }
           
         });
         
         
         
         
      </script>

    <script type="text/javascript">
    	function HighlightedDate(e,t,a){"use strict";this.date=e,this.desc=t,this.style=a}!function(e){"use strict";var t={i18n:{ar:{months:["كانون الثاني","شباط","آذار","نيسان","مايو","حزيران","تموز","آب","أيلول","تشرين الأول","تشرين الثاني","كانون الأول"],dayOfWeek:["ن","ث","ع","خ","ج","س","ح"]},ro:{months:["ianuarie","februarie","martie","aprilie","mai","iunie","iulie","august","septembrie","octombrie","noiembrie","decembrie"],dayOfWeek:["l","ma","mi","j","v","s","d"]},id:{months:["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"],dayOfWeek:["Min","Sen","Sel","Rab","Kam","Jum","Sab"]},bg:{months:["Януари","Февруари","Март","Април","Май","Юни","Юли","Август","Септември","Октомври","Ноември","Декември"],dayOfWeek:["Нд","Пн","Вт","Ср","Чт","Пт","Сб"]},fa:{months:["فروردین","اردیبهشت","خرداد","تیر","مرداد","شهریور","مهر","آبان","آذر","دی","بهمن","اسفند"],dayOfWeek:["یکشنبه","دوشنبه","سه شنبه","چهارشنبه","پنجشنبه","جمعه","شنبه"]},ru:{months:["Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь"],dayOfWeek:["Вск","Пн","Вт","Ср","Чт","Пт","Сб"]},uk:{months:["Січень","Лютий","Березень","Квітень","Травень","Червень","Липень","Серпень","Вересень","Жовтень","Листопад","Грудень"],dayOfWeek:["Ндл","Пнд","Втр","Срд","Чтв","Птн","Сбт"]},en:{months:["January","February","March","April","May","June","July","August","September","October","November","December"],dayOfWeek:["Sun","Mon","Tue","Wed","Thu","Fri","Sat"]},el:{months:["Ιανουάριος","Φεβρουάριος","Μάρτιος","Απρίλιος","Μάιος","Ιούνιος","Ιούλιος","Αύγουστος","Σεπτέμβριος","Οκτώβριος","Νοέμβριος","Δεκέμβριος"],dayOfWeek:["Κυρ","Δευ","Τρι","Τετ","Πεμ","Παρ","Σαβ"]},de:{months:["Januar","Februar","März","April","Mai","Juni","Juli","August","September","Oktober","November","Dezember"],dayOfWeek:["So","Mo","Di","Mi","Do","Fr","Sa"]},nl:{months:["januari","februari","maart","april","mei","juni","juli","augustus","september","oktober","november","december"],dayOfWeek:["zo","ma","di","wo","do","vr","za"]},tr:{months:["Ocak","Şubat","Mart","Nisan","Mayıs","Haziran","Temmuz","Ağustos","Eylül","Ekim","Kasım","Aralık"],dayOfWeek:["Paz","Pts","Sal","Çar","Per","Cum","Cts"]},fr:{months:["Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre"],dayOfWeek:["Dim","Lun","Mar","Mer","Jeu","Ven","Sam"]},es:{months:["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"],dayOfWeek:["Dom","Lun","Mar","Mié","Jue","Vie","Sáb"]},th:{months:["มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม"],dayOfWeek:["อา.","จ.","อ.","พ.","พฤ.","ศ.","ส."]},pl:{months:["styczeń","luty","marzec","kwiecień","maj","czerwiec","lipiec","sierpień","wrzesień","październik","listopad","grudzień"],dayOfWeek:["nd","pn","wt","śr","cz","pt","sb"]},pt:{months:["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"],dayOfWeek:["Dom","Seg","Ter","Qua","Qui","Sex","Sab"]},ch:{months:["一月","二月","三月","四月","五月","六月","七月","八月","九月","十月","十一月","十二月"],dayOfWeek:["日","一","二","三","四","五","六"]},se:{months:["Januari","Februari","Mars","April","Maj","Juni","Juli","Augusti","September","Oktober","November","December"],dayOfWeek:["Sön","Mån","Tis","Ons","Tor","Fre","Lör"]},kr:{months:["1월","2월","3월","4월","5월","6월","7월","8월","9월","10월","11월","12월"],dayOfWeek:["일","월","화","수","목","금","토"]},it:{months:["Gennaio","Febbraio","Marzo","Aprile","Maggio","Giugno","Luglio","Agosto","Settembre","Ottobre","Novembre","Dicembre"],dayOfWeek:["Dom","Lun","Mar","Mer","Gio","Ven","Sab"]},da:{months:["January","Februar","Marts","April","Maj","Juni","July","August","September","Oktober","November","December"],dayOfWeek:["Søn","Man","Tir","Ons","Tor","Fre","Lør"]},no:{months:["Januar","Februar","Mars","April","Mai","Juni","Juli","August","September","Oktober","November","Desember"],dayOfWeek:["Søn","Man","Tir","Ons","Tor","Fre","Lør"]},ja:{months:["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"],dayOfWeek:["日","月","火","水","木","金","土"]},vi:{months:["Tháng 1","Tháng 2","Tháng 3","Tháng 4","Tháng 5","Tháng 6","Tháng 7","Tháng 8","Tháng 9","Tháng 10","Tháng 11","Tháng 12"],dayOfWeek:["CN","T2","T3","T4","T5","T6","T7"]},sl:{months:["Januar","Februar","Marec","April","Maj","Junij","Julij","Avgust","September","Oktober","November","December"],dayOfWeek:["Ned","Pon","Tor","Sre","Čet","Pet","Sob"]},cs:{months:["Leden","Únor","Březen","Duben","Květen","Červen","Červenec","Srpen","Září","Říjen","Listopad","Prosinec"],dayOfWeek:["Ne","Po","Út","St","Čt","Pá","So"]},hu:{months:["Január","Február","Március","Április","Május","Június","Július","Augusztus","Szeptember","Október","November","December"],dayOfWeek:["Va","Hé","Ke","Sze","Cs","Pé","Szo"]},az:{months:["Yanvar","Fevral","Mart","Aprel","May","Iyun","Iyul","Avqust","Sentyabr","Oktyabr","Noyabr","Dekabr"],dayOfWeek:["B","Be","Ça","Ç","Ca","C","Ş"]},bs:{months:["Januar","Februar","Mart","April","Maj","Jun","Jul","Avgust","Septembar","Oktobar","Novembar","Decembar"],dayOfWeek:["Ned","Pon","Uto","Sri","Čet","Pet","Sub"]},ca:{months:["Gener","Febrer","Març","Abril","Maig","Juny","Juliol","Agost","Setembre","Octubre","Novembre","Desembre"],dayOfWeek:["Dg","Dl","Dt","Dc","Dj","Dv","Ds"]},"en-GB":{months:["January","February","March","April","May","June","July","August","September","October","November","December"],dayOfWeek:["Sun","Mon","Tue","Wed","Thu","Fri","Sat"]},et:{months:["Jaanuar","Veebruar","Märts","Aprill","Mai","Juuni","Juuli","August","September","Oktoober","November","Detsember"],dayOfWeek:["P","E","T","K","N","R","L"]},eu:{months:["Urtarrila","Otsaila","Martxoa","Apirila","Maiatza","Ekaina","Uztaila","Abuztua","Iraila","Urria","Azaroa","Abendua"],dayOfWeek:["Ig.","Al.","Ar.","Az.","Og.","Or.","La."]},fi:{months:["Tammikuu","Helmikuu","Maaliskuu","Huhtikuu","Toukokuu","Kesäkuu","Heinäkuu","Elokuu","Syyskuu","Lokakuu","Marraskuu","Joulukuu"],dayOfWeek:["Su","Ma","Ti","Ke","To","Pe","La"]},gl:{months:["Xan","Feb","Maz","Abr","Mai","Xun","Xul","Ago","Set","Out","Nov","Dec"],dayOfWeek:["Dom","Lun","Mar","Mer","Xov","Ven","Sab"]},hr:{months:["Siječanj","Veljača","Ožujak","Travanj","Svibanj","Lipanj","Srpanj","Kolovoz","Rujan","Listopad","Studeni","Prosinac"],dayOfWeek:["Ned","Pon","Uto","Sri","Čet","Pet","Sub"]},ko:{months:["1월","2월","3월","4월","5월","6월","7월","8월","9월","10월","11월","12월"],dayOfWeek:["일","월","화","수","목","금","토"]},lt:{months:["Sausio","Vasario","Kovo","Balandžio","Gegužės","Birželio","Liepos","Rugpjūčio","Rugsėjo","Spalio","Lapkričio","Gruodžio"],dayOfWeek:["Sek","Pir","Ant","Tre","Ket","Pen","Šeš"]},lv:{months:["Janvāris","Februāris","Marts","Aprīlis ","Maijs","Jūnijs","Jūlijs","Augusts","Septembris","Oktobris","Novembris","Decembris"],dayOfWeek:["Sv","Pr","Ot","Tr","Ct","Pk","St"]},mk:{months:["јануари","февруари","март","април","мај","јуни","јули","август","септември","октомври","ноември","декември"],dayOfWeek:["нед","пон","вто","сре","чет","пет","саб"]},mn:{months:["1-р сар","2-р сар","3-р сар","4-р сар","5-р сар","6-р сар","7-р сар","8-р сар","9-р сар","10-р сар","11-р сар","12-р сар"],dayOfWeek:["Дав","Мяг","Лха","Пүр","Бсн","Бям","Ням"]},"pt-BR":{months:["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"],dayOfWeek:["Dom","Seg","Ter","Qua","Qui","Sex","Sáb"]},sk:{months:["Január","Február","Marec","Apríl","Máj","Jún","Júl","August","September","Október","November","December"],dayOfWeek:["Ne","Po","Ut","St","Št","Pi","So"]},sq:{months:["January","February","March","April","May","June","July","August","September","October","November","December"],dayOfWeek:["Sun","Mon","Tue","Wed","Thu","Fri","Sat"]},"sr-YU":{months:["Januar","Februar","Mart","April","Maj","Jun","Jul","Avgust","Septembar","Oktobar","Novembar","Decembar"],dayOfWeek:["Ned","Pon","Uto","Sre","čet","Pet","Sub"]},sr:{months:["јануар","фебруар","март","април","мај","јун","јул","август","септембар","октобар","новембар","децембар"],dayOfWeek:["нед","пон","уто","сре","чет","пет","суб"]},sv:{months:["Januari","Februari","Mars","April","Maj","Juni","Juli","Augusti","September","Oktober","November","December"],dayOfWeek:["Sön","Mån","Tis","Ons","Tor","Fre","Lör"]},"zh-TW":{months:["一月","二月","三月","四月","五月","六月","七月","八月","九月","十月","十一月","十二月"],dayOfWeek:["日","一","二","三","四","五","六"]},zh:{months:["一月","二月","三月","四月","五月","六月","七月","八月","九月","十月","十一月","十二月"],dayOfWeek:["日","一","二","三","四","五","六"]},he:{months:["ינואר","פברואר","מרץ","אפריל","מאי","יוני","יולי","אוגוסט","ספטמבר","אוקטובר","נובמבר","דצמבר"],dayOfWeek:["א'","ב'","ג'","ד'","ה'","ו'","שבת"]},hy:{months:["Հունվար","Փետրվար","Մարտ","Ապրիլ","Մայիս","Հունիս","Հուլիս","Օգոստոս","Սեպտեմբեր","Հոկտեմբեր","Նոյեմբեր","Դեկտեմբեր"],dayOfWeek:["Կի","Երկ","Երք","Չոր","Հնգ","Ուրբ","Շբթ"]},kg:{months:["Үчтүн айы","Бирдин айы","Жалган Куран","Чын Куран","Бугу","Кулжа","Теке","Баш Оона","Аяк Оона","Тогуздун айы","Жетинин айы","Бештин айы"],dayOfWeek:["Жек","Дүй","Шей","Шар","Бей","Жум","Ише"]}},value:"",lang:"en",format:"Y/m/d H:i",formatTime:"H:i",formatDate:"Y/m/d",startDate:!1,step:60,monthChangeSpinner:!0,closeOnDateSelect:!1,closeOnTimeSelect:!0,closeOnWithoutClick:!0,closeOnInputClick:!0,timepicker:!0,datepicker:!0,weeks:!1,defaultTime:!1,defaultDate:!1,minDate:!1,maxDate:!1,minTime:!1,maxTime:!1,allowTimes:[],opened:!1,initTime:!0,inline:!1,theme:"",onSelectDate:function(){},onSelectTime:function(){},onChangeMonth:function(){},onChangeYear:function(){},onChangeDateTime:function(){},onShow:function(){},onClose:function(){},onGenerate:function(){},withoutCopyright:!0,inverseButton:!1,hours12:!1,next:"xdsoft_next",prev:"xdsoft_prev",dayOfWeekStart:0,parentID:"body",timeHeightInTimePicker:25,timepickerScrollbar:!0,todayButton:!0,prevButton:!0,nextButton:!0,defaultSelect:!0,scrollMonth:!0,scrollTime:!0,scrollInput:!0,lazyInit:!1,mask:!1,validateOnBlur:!0,allowBlank:!0,yearStart:1950,yearEnd:2050,monthStart:0,monthEnd:11,style:"",id:"",fixed:!1,roundTime:"round",className:"",weekends:[],highlightedDates:[],highlightedPeriods:[],disabledDates:[],yearOffset:0,beforeShowDay:null,enterLikeTab:!0,showApplyButton:!1};Array.prototype.indexOf||(Array.prototype.indexOf=function(e,t){var a,n;for(a=t||0,n=this.length;n>a;a+=1)if(this[a]===e)return a;return-1}),Date.prototype.countDaysInMonth=function(){return new Date(this.getFullYear(),this.getMonth()+1,0).getDate()},e.fn.xdsoftScroller=function(t){return this.each(function(){var a,n,r,o,s,i=e(this),u=function(e){var t,a={x:0,y:0};return"touchstart"===e.type||"touchmove"===e.type||"touchend"===e.type||"touchcancel"===e.type?(t=e.originalEvent.touches[0]||e.originalEvent.changedTouches[0],a.x=t.clientX,a.y=t.clientY):("mousedown"===e.type||"mouseup"===e.type||"mousemove"===e.type||"mouseover"===e.type||"mouseout"===e.type||"mouseenter"===e.type||"mouseleave"===e.type)&&(a.x=e.clientX,a.y=e.clientY),a},d=100,l=!1,c=0,f=0,m=0,h=!1,g=0,p=function(){};return"hide"===t?void i.find(".xdsoft_scrollbar").hide():(e(this).hasClass("xdsoft_scroller_box")||(a=i.children().eq(0),n=i[0].clientHeight,r=a[0].offsetHeight,o=e('<div class="xdsoft_scrollbar"></div>'),s=e('<div class="xdsoft_scroller"></div>'),o.append(s),i.addClass("xdsoft_scroller_box").append(o),p=function(e){var t=u(e).y-c+g;0>t&&(t=0),t+s[0].offsetHeight>m&&(t=m-s[0].offsetHeight),i.trigger("scroll_element.xdsoft_scroller",[d?t/d:0])},s.on("touchstart.xdsoft_scroller mousedown.xdsoft_scroller",function(a){n||i.trigger("resize_scroll.xdsoft_scroller",[t]),c=u(a).y,g=parseInt(s.css("margin-top"),10),m=o[0].offsetHeight,"mousedown"===a.type?(document&&e(document.body).addClass("xdsoft_noselect"),e([document.body,window]).on("mouseup.xdsoft_scroller",function r(){e([document.body,window]).off("mouseup.xdsoft_scroller",r).off("mousemove.xdsoft_scroller",p).removeClass("xdsoft_noselect")}),e(document.body).on("mousemove.xdsoft_scroller",p)):(h=!0,a.stopPropagation(),a.preventDefault())}).on("touchmove",function(e){h&&(e.preventDefault(),p(e))}).on("touchend touchcancel",function(){h=!1,g=0}),i.on("scroll_element.xdsoft_scroller",function(e,t){n||i.trigger("resize_scroll.xdsoft_scroller",[t,!0]),t=t>1?1:0>t||isNaN(t)?0:t,s.css("margin-top",d*t),setTimeout(function(){a.css("marginTop",-parseInt((a[0].offsetHeight-n)*t,10))},10)}).on("resize_scroll.xdsoft_scroller",function(e,t,u){var l,c;n=i[0].clientHeight,r=a[0].offsetHeight,l=n/r,c=l*o[0].offsetHeight,l>1?s.hide():(s.show(),s.css("height",parseInt(c>10?c:10,10)),d=o[0].offsetHeight-s[0].offsetHeight,u!==!0&&i.trigger("scroll_element.xdsoft_scroller",[t||Math.abs(parseInt(a.css("marginTop"),10))/(r-n)]))}),i.on("mousewheel",function(e){var t=Math.abs(parseInt(a.css("marginTop"),10));return t-=20*e.deltaY,0>t&&(t=0),i.trigger("scroll_element.xdsoft_scroller",[t/(r-n)]),e.stopPropagation(),!1}),i.on("touchstart",function(e){l=u(e),f=Math.abs(parseInt(a.css("marginTop"),10))}),i.on("touchmove",function(e){if(l){e.preventDefault();var t=u(e);i.trigger("scroll_element.xdsoft_scroller",[(f-(t.y-l.y))/(r-n)])}}),i.on("touchend touchcancel",function(){l=!1,f=0})),void i.trigger("resize_scroll.xdsoft_scroller",[t]))})},e.fn.datetimepicker=function(a){var n,r,o=48,s=57,i=96,u=105,d=17,l=46,c=13,f=27,m=8,h=37,g=38,p=39,D=40,x=9,v=116,y=65,b=67,T=86,k=90,w=89,M=!1,S=e.isPlainObject(a)||!a?e.extend(!0,{},t,a):e.extend(!0,{},t),O=0,_=function(e){e.on("open.xdsoft focusin.xdsoft mousedown.xdsoft",function t(){e.is(":disabled")||e.data("xdsoft_datetimepicker")||(clearTimeout(O),O=setTimeout(function(){e.data("xdsoft_datetimepicker")||n(e),e.off("open.xdsoft focusin.xdsoft mousedown.xdsoft",t).trigger("open.xdsoft")},100))})};return n=function(t){function n(){var e,a=!1;return S.startDate?a=Y.strToDate(S.startDate):(a=S.value||(t&&t.val&&t.val()?t.val():""),a?a=Y.strToDateTime(a):S.defaultDate&&(a=Y.strToDateTime(S.defaultDate),S.defaultTime&&(e=Y.strtotime(S.defaultTime),a.setHours(e.getHours()),a.setMinutes(e.getMinutes())))),a&&Y.isValidDate(a)?P.data("changed",!0):a="",a||0}var r,O,_,F,A,Y,P=e('<div class="xdsoft_datetimepicker xdsoft_noselect"></div>'),W=e('<div class="xdsoft_copyright"><a target="_blank" href="http://xdsoft.net/jqplugins/datetimepicker/">xdsoft.net</a></div>'),C=e('<div class="xdsoft_datepicker active"></div>'),J=e('<div class="xdsoft_mounthpicker"><button type="button" class="xdsoft_prev"></button><button type="button" class="xdsoft_today_button"></button><div class="xdsoft_label xdsoft_month"><span></span><i></i></div><div class="xdsoft_label xdsoft_year"><span></span><i></i></div><button type="button" class="xdsoft_next"></button></div>'),H=e('<div class="xdsoft_calendar"></div>'),I=e('<div class="xdsoft_timepicker active"><button type="button" class="xdsoft_prev"></button><div class="xdsoft_time_box"></div><button type="button" class="xdsoft_next"></button></div>'),N=I.find(".xdsoft_time_box").eq(0),z=e('<div class="xdsoft_time_variant"></div>'),j=e('<button class="xdsoft_save_selected blue-gradient-button">Save Selected</button>'),L=e('<div class="xdsoft_select xdsoft_monthselect"><div></div></div>'),B=e('<div class="xdsoft_select xdsoft_yearselect"><div></div></div>'),R=!1,E=0,V=0;S.id&&P.attr("id",S.id),S.style&&P.attr("style",S.style),S.weeks&&P.addClass("xdsoft_showweeks"),P.addClass("xdsoft_"+S.theme),P.addClass(S.className),J.find(".xdsoft_month span").after(L),J.find(".xdsoft_year span").after(B),J.find(".xdsoft_month,.xdsoft_year").on("mousedown.xdsoft",function(t){var a,n,r=e(this).find(".xdsoft_select").eq(0),o=0,s=0,i=r.is(":visible");for(J.find(".xdsoft_select").hide(),Y.currentTime&&(o=Y.currentTime[e(this).hasClass("xdsoft_month")?"getMonth":"getFullYear"]()),r[i?"hide":"show"](),a=r.find("div.xdsoft_option"),n=0;n<a.length&&a.eq(n).data("value")!==o;n+=1)s+=a[0].offsetHeight;return r.xdsoftScroller(s/(r.children()[0].offsetHeight-r[0].clientHeight)),t.stopPropagation(),!1}),J.find(".xdsoft_select").xdsoftScroller().on("mousedown.xdsoft",function(e){e.stopPropagation(),e.preventDefault()}).on("mousedown.xdsoft",".xdsoft_option",function(){(void 0===Y.currentTime||null===Y.currentTime)&&(Y.currentTime=Y.now());var t=Y.currentTime.getFullYear();Y&&Y.currentTime&&Y.currentTime[e(this).parent().parent().hasClass("xdsoft_monthselect")?"setMonth":"setFullYear"](e(this).data("value")),e(this).parent().parent().hide(),P.trigger("xchange.xdsoft"),S.onChangeMonth&&e.isFunction(S.onChangeMonth)&&S.onChangeMonth.call(P,Y.currentTime,P.data("input")),t!==Y.currentTime.getFullYear()&&e.isFunction(S.onChangeYear)&&S.onChangeYear.call(P,Y.currentTime,P.data("input"))}),P.setOptions=function(a){var n={},r=function(e){try{if(document.selection&&document.selection.createRange){var t=document.selection.createRange();return t.getBookmark().charCodeAt(2)-2}if(e.setSelectionRange)return e.selectionStart}catch(a){return 0}},O=function(e,t){if(e="string"==typeof e||e instanceof String?document.getElementById(e):e,!e)return!1;if(e.createTextRange){var a=e.createTextRange();return a.collapse(!0),a.moveEnd("character",t),a.moveStart("character",t),a.select(),!0}return e.setSelectionRange?(e.setSelectionRange(t,t),!0):!1},_=function(e,t){var a=e.replace(/([\[\]\/\{\}\(\)\-\.\+]{1})/g,"\\$1").replace(/_/g,"{digit+}").replace(/([0-9]{1})/g,"{digit$1}").replace(/\{digit([0-9]{1})\}/g,"[0-$1_]{1}").replace(/\{digit[\+]\}/g,"[0-9_]{1}");return new RegExp(a).test(t)};S=e.extend(!0,{},S,a),a.allowTimes&&e.isArray(a.allowTimes)&&a.allowTimes.length&&(S.allowTimes=e.extend(!0,[],a.allowTimes)),a.weekends&&e.isArray(a.weekends)&&a.weekends.length&&(S.weekends=e.extend(!0,[],a.weekends)),a.highlightedDates&&e.isArray(a.highlightedDates)&&a.highlightedDates.length&&(e.each(a.highlightedDates,function(t,a){var r,o=e.map(a.split(","),e.trim),s=new HighlightedDate(Date.parseDate(o[0],S.formatDate),o[1],o[2]),i=s.date.dateFormat(S.formatDate);void 0!==n[i]?(r=n[i].desc,r&&r.length&&s.desc&&s.desc.length&&(n[i].desc=r+"\n"+s.desc)):n[i]=s}),S.highlightedDates=e.extend(!0,[],n)),a.highlightedPeriods&&e.isArray(a.highlightedPeriods)&&a.highlightedPeriods.length&&(n=e.extend(!0,[],S.highlightedDates),e.each(a.highlightedPeriods,function(t,a){for(var r,o,s,i=e.map(a.split(","),e.trim),u=Date.parseDate(i[0],S.formatDate),d=Date.parseDate(i[1],S.formatDate),l=i[2],c=i[3];d>=u;)r=new HighlightedDate(u,l,c),o=u.dateFormat(S.formatDate),u.setDate(u.getDate()+1),void 0!==n[o]?(s=n[o].desc,s&&s.length&&r.desc&&r.desc.length&&(n[o].desc=s+"\n"+r.desc)):n[o]=r}),S.highlightedDates=e.extend(!0,[],n)),a.disabledDates&&e.isArray(a.disabledDates)&&a.disabledDates.length&&(S.disabledDates=e.extend(!0,[],a.disabledDates)),!S.open&&!S.opened||S.inline||t.trigger("open.xdsoft"),S.inline&&(R=!0,P.addClass("xdsoft_inline"),t.after(P).hide()),S.inverseButton&&(S.next="xdsoft_prev",S.prev="xdsoft_next"),S.datepicker?C.addClass("active"):C.removeClass("active"),S.timepicker?I.addClass("active"):I.removeClass("active"),S.value&&(Y.setCurrentTime(S.value),t&&t.val&&t.val(Y.str)),S.dayOfWeekStart=isNaN(S.dayOfWeekStart)?0:parseInt(S.dayOfWeekStart,10)%7,S.timepickerScrollbar||N.xdsoftScroller("hide"),S.minDate&&/^-(.*)$/.test(S.minDate)&&(S.minDate=Y.strToDateTime(S.minDate).dateFormat(S.formatDate)),S.maxDate&&/^\+(.*)$/.test(S.maxDate)&&(S.maxDate=Y.strToDateTime(S.maxDate).dateFormat(S.formatDate)),j.toggle(S.showApplyButton),J.find(".xdsoft_today_button").css("visibility",S.todayButton?"visible":"hidden"),J.find("."+S.prev).css("visibility",S.prevButton?"visible":"hidden"),J.find("."+S.next).css("visibility",S.nextButton?"visible":"hidden"),S.mask&&(t.off("keydown.xdsoft"),S.mask===!0&&(S.mask=S.format.replace(/Y/g,"9999").replace(/F/g,"9999").replace(/m/g,"19").replace(/d/g,"39").replace(/H/g,"29").replace(/i/g,"59").replace(/s/g,"59")),"string"===e.type(S.mask)&&(_(S.mask,t.val())||t.val(S.mask.replace(/[0-9]/g,"_")),t.on("keydown.xdsoft",function(a){var n,F,A=this.value,Y=a.which;if(Y>=o&&s>=Y||Y>=i&&u>=Y||Y===m||Y===l){for(n=r(this),F=Y!==m&&Y!==l?String.fromCharCode(Y>=i&&u>=Y?Y-o:Y):"_",Y!==m&&Y!==l||!n||(n-=1,F="_");/[^0-9_]/.test(S.mask.substr(n,1))&&n<S.mask.length&&n>0;)n+=Y===m||Y===l?-1:1;if(A=A.substr(0,n)+F+A.substr(n+1),""===e.trim(A))A=S.mask.replace(/[0-9]/g,"_");else if(n===S.mask.length)return a.preventDefault(),!1;for(n+=Y===m||Y===l?0:1;/[^0-9_]/.test(S.mask.substr(n,1))&&n<S.mask.length&&n>0;)n+=Y===m||Y===l?-1:1;_(S.mask,A)?(this.value=A,O(this,n)):""===e.trim(A)?this.value=S.mask.replace(/[0-9]/g,"_"):t.trigger("error_input.xdsoft")}else if(-1!==[y,b,T,k,w].indexOf(Y)&&M||-1!==[f,g,D,h,p,v,d,x,c].indexOf(Y))return!0;return a.preventDefault(),!1}))),S.validateOnBlur&&t.off("blur.xdsoft").on("blur.xdsoft",function(){if(S.allowBlank&&!e.trim(e(this).val()).length)e(this).val(null),P.data("xdsoft_datetime").empty();else if(Date.parseDate(e(this).val(),S.format))P.data("xdsoft_datetime").setCurrentTime(e(this).val());else{var t=+[e(this).val()[0],e(this).val()[1]].join(""),a=+[e(this).val()[2],e(this).val()[3]].join("");e(this).val(!S.datepicker&&S.timepicker&&t>=0&&24>t&&a>=0&&60>a?[t,a].map(function(e){return e>9?e:"0"+e}).join(":"):Y.now().dateFormat(S.format)),P.data("xdsoft_datetime").setCurrentTime(e(this).val())}P.trigger("changedatetime.xdsoft")}),S.dayOfWeekStartPrev=0===S.dayOfWeekStart?6:S.dayOfWeekStart-1,P.trigger("xchange.xdsoft").trigger("afterOpen.xdsoft")},P.data("options",S).on("mousedown.xdsoft",function(e){return e.stopPropagation(),e.preventDefault(),B.hide(),L.hide(),!1}),N.append(z),N.xdsoftScroller(),P.on("afterOpen.xdsoft",function(){N.xdsoftScroller()}),P.append(C).append(I),S.withoutCopyright!==!0&&P.append(W),C.append(J).append(H).append(j),e(S.parentID).append(P),r=function(){var t=this;t.now=function(e){var a,n,r=new Date;return!e&&S.defaultDate&&(a=t.strToDateTime(S.defaultDate),r.setFullYear(a.getFullYear()),r.setMonth(a.getMonth()),r.setDate(a.getDate())),S.yearOffset&&r.setFullYear(r.getFullYear()+S.yearOffset),!e&&S.defaultTime&&(n=t.strtotime(S.defaultTime),r.setHours(n.getHours()),r.setMinutes(n.getMinutes())),r},t.isValidDate=function(e){return"[object Date]"!==Object.prototype.toString.call(e)?!1:!isNaN(e.getTime())},t.setCurrentTime=function(e){t.currentTime="string"==typeof e?t.strToDateTime(e):t.isValidDate(e)?e:t.now(),P.trigger("xchange.xdsoft")},t.empty=function(){t.currentTime=null},t.getCurrentTime=function(){return t.currentTime},t.nextMonth=function(){(void 0===t.currentTime||null===t.currentTime)&&(t.currentTime=t.now());var a,n=t.currentTime.getMonth()+1;return 12===n&&(t.currentTime.setFullYear(t.currentTime.getFullYear()+1),n=0),a=t.currentTime.getFullYear(),t.currentTime.setDate(Math.min(new Date(t.currentTime.getFullYear(),n+1,0).getDate(),t.currentTime.getDate())),t.currentTime.setMonth(n),S.onChangeMonth&&e.isFunction(S.onChangeMonth)&&S.onChangeMonth.call(P,Y.currentTime,P.data("input")),a!==t.currentTime.getFullYear()&&e.isFunction(S.onChangeYear)&&S.onChangeYear.call(P,Y.currentTime,P.data("input")),P.trigger("xchange.xdsoft"),n},t.prevMonth=function(){(void 0===t.currentTime||null===t.currentTime)&&(t.currentTime=t.now());var a=t.currentTime.getMonth()-1;return-1===a&&(t.currentTime.setFullYear(t.currentTime.getFullYear()-1),a=11),t.currentTime.setDate(Math.min(new Date(t.currentTime.getFullYear(),a+1,0).getDate(),t.currentTime.getDate())),t.currentTime.setMonth(a),S.onChangeMonth&&e.isFunction(S.onChangeMonth)&&S.onChangeMonth.call(P,Y.currentTime,P.data("input")),P.trigger("xchange.xdsoft"),a},t.getWeekOfYear=function(e){var t=new Date(e.getFullYear(),0,1);return Math.ceil(((e-t)/864e5+t.getDay()+1)/7)},t.strToDateTime=function(e){var a,n,r=[];return e&&e instanceof Date&&t.isValidDate(e)?e:(r=/^(\+|\-)(.*)$/.exec(e),r&&(r[2]=Date.parseDate(r[2],S.formatDate)),r&&r[2]?(a=r[2].getTime()-6e4*r[2].getTimezoneOffset(),n=new Date(t.now(!0).getTime()+parseInt(r[1]+"1",10)*a)):n=e?Date.parseDate(e,S.format):t.now(),t.isValidDate(n)||(n=t.now()),n)},t.strToDate=function(e){if(e&&e instanceof Date&&t.isValidDate(e))return e;var a=e?Date.parseDate(e,S.formatDate):t.now(!0);return t.isValidDate(a)||(a=t.now(!0)),a},t.strtotime=function(e){if(e&&e instanceof Date&&t.isValidDate(e))return e;var a=e?Date.parseDate(e,S.formatTime):t.now(!0);return t.isValidDate(a)||(a=t.now(!0)),a},t.str=function(){return t.currentTime.dateFormat(S.format)},t.currentTime=this.now()},Y=new r,j.on("click",function(e){e.preventDefault(),P.data("changed",!0),Y.setCurrentTime(n()),t.val(Y.str()),P.trigger("close.xdsoft")}),J.find(".xdsoft_today_button").on("mousedown.xdsoft",function(){P.data("changed",!0),Y.setCurrentTime(0),P.trigger("afterOpen.xdsoft")}).on("dblclick.xdsoft",function(){var e=Y.getCurrentTime();e=new Date(e.getFullYear(),e.getMonth(),e.getDate());var a=Y.strToDate(S.minDate);if(a=new Date(a.getFullYear(),a.getMonth(),a.getDate()),!(a>e)){var n=Y.strToDate(S.maxDate);n=new Date(n.getFullYear(),n.getMonth(),n.getDate()),e>n||(t.val(Y.str()),P.trigger("close.xdsoft"))}}),J.find(".xdsoft_prev,.xdsoft_next").on("mousedown.xdsoft",function(){var t=e(this),a=0,n=!1;!function r(e){t.hasClass(S.next)?Y.nextMonth():t.hasClass(S.prev)&&Y.prevMonth(),S.monthChangeSpinner&&(n||(a=setTimeout(r,e||100)))}(500),e([document.body,window]).on("mouseup.xdsoft",function o(){clearTimeout(a),n=!0,e([document.body,window]).off("mouseup.xdsoft",o)})}),I.find(".xdsoft_prev,.xdsoft_next").on("mousedown.xdsoft",function(){var t=e(this),a=0,n=!1,r=110;!function o(e){var s=N[0].clientHeight,i=z[0].offsetHeight,u=Math.abs(parseInt(z.css("marginTop"),10));t.hasClass(S.next)&&i-s-S.timeHeightInTimePicker>=u?z.css("marginTop","-"+(u+S.timeHeightInTimePicker)+"px"):t.hasClass(S.prev)&&u-S.timeHeightInTimePicker>=0&&z.css("marginTop","-"+(u-S.timeHeightInTimePicker)+"px"),N.trigger("scroll_element.xdsoft_scroller",[Math.abs(parseInt(z.css("marginTop"),10)/(i-s))]),r=r>10?10:r-10,n||(a=setTimeout(o,e||r))}(500),e([document.body,window]).on("mouseup.xdsoft",function s(){clearTimeout(a),n=!0,e([document.body,window]).off("mouseup.xdsoft",s)})}),O=0,P.on("xchange.xdsoft",function(t){clearTimeout(O),O=setTimeout(function(){(void 0===Y.currentTime||null===Y.currentTime)&&(Y.currentTime=Y.now());for(var t,n,r,o,s,i,u,d,l,c="",f=new Date(Y.currentTime.getFullYear(),Y.currentTime.getMonth(),1,12,0,0),m=0,h=Y.now(),g=!1,p=!1,D=[],x=!0,v="",y="";f.getDay()!==S.dayOfWeekStart;)f.setDate(f.getDate()-1);for(c+="<table><thead><tr>",S.weeks&&(c+="<th></th>"),t=0;7>t;t+=1)c+="<th>"+S.i18n[S.lang].dayOfWeek[(t+S.dayOfWeekStart)%7]+"</th>";for(c+="</tr></thead>",c+="<tbody>",S.maxDate!==!1&&(g=Y.strToDate(S.maxDate),g=new Date(g.getFullYear(),g.getMonth(),g.getDate(),23,59,59,999)),S.minDate!==!1&&(p=Y.strToDate(S.minDate),p=new Date(p.getFullYear(),p.getMonth(),p.getDate()));m<Y.currentTime.countDaysInMonth()||f.getDay()!==S.dayOfWeekStart||Y.currentTime.getMonth()===f.getMonth();)D=[],m+=1,r=f.getDate(),o=f.getFullYear(),s=f.getMonth(),i=Y.getWeekOfYear(f),l="",D.push("xdsoft_date"),u=S.beforeShowDay&&e.isFunction(S.beforeShowDay.call)?S.beforeShowDay.call(P,f):null,g!==!1&&f>g||p!==!1&&p>f||u&&u[0]===!1?D.push("xdsoft_disabled"):-1!==S.disabledDates.indexOf(f.dateFormat(S.formatDate))&&D.push("xdsoft_disabled"),u&&""!==u[1]&&D.push(u[1]),Y.currentTime.getMonth()!==s&&D.push("xdsoft_other_month"),(S.defaultSelect||P.data("changed"))&&Y.currentTime.dateFormat(S.formatDate)===f.dateFormat(S.formatDate)&&D.push("xdsoft_current"),h.dateFormat(S.formatDate)===f.dateFormat(S.formatDate)&&D.push("xdsoft_today"),(0===f.getDay()||6===f.getDay()||-1!==S.weekends.indexOf(f.dateFormat(S.formatDate)))&&D.push("xdsoft_weekend"),void 0!==S.highlightedDates[f.dateFormat(S.formatDate)]&&(n=S.highlightedDates[f.dateFormat(S.formatDate)],D.push(void 0===n.style?"xdsoft_highlighted_default":n.style),l=void 0===n.desc?"":n.desc),S.beforeShowDay&&e.isFunction(S.beforeShowDay)&&D.push(S.beforeShowDay(f)),x&&(c+="<tr>",x=!1,S.weeks&&(c+="<th>"+i+"</th>")),c+='<td data-date="'+r+'" data-month="'+s+'" data-year="'+o+'" class="xdsoft_date xdsoft_day_of_week'+f.getDay()+" "+D.join(" ")+'" title="'+l+'"><div>'+r+"</div></td>",f.getDay()===S.dayOfWeekStartPrev&&(c+="</tr>",x=!0),f.setDate(r+1);if(c+="</tbody></table>",H.html(c),J.find(".xdsoft_label span").eq(0).text(S.i18n[S.lang].months[Y.currentTime.getMonth()]),J.find(".xdsoft_label span").eq(1).text(Y.currentTime.getFullYear()),v="",y="",s="",d=function(e,t){var a,n,r=Y.now();r.setHours(e),e=parseInt(r.getHours(),10),r.setMinutes(t),t=parseInt(r.getMinutes(),10),a=new Date(Y.currentTime),a.setHours(e),a.setMinutes(t),D=[],(S.minDateTime!==!1&&S.minDateTime>a||S.maxTime!==!1&&Y.strtotime(S.maxTime).getTime()<r.getTime()||S.minTime!==!1&&Y.strtotime(S.minTime).getTime()>r.getTime())&&D.push("xdsoft_disabled"),n=new Date(Y.currentTime),n.setHours(parseInt(Y.currentTime.getHours(),10)),n.setMinutes(Math[S.roundTime](Y.currentTime.getMinutes()/S.step)*S.step),(S.initTime||S.defaultSelect||P.data("changed"))&&n.getHours()===parseInt(e,10)&&(S.step>59||n.getMinutes()===parseInt(t,10))&&(S.defaultSelect||P.data("changed")?D.push("xdsoft_current"):S.initTime&&D.push("xdsoft_init_time")),parseInt(h.getHours(),10)===parseInt(e,10)&&parseInt(h.getMinutes(),10)===parseInt(t,10)&&D.push("xdsoft_today"),v+='<div class="xdsoft_time '+D.join(" ")+'" data-hour="'+e+'" data-minute="'+t+'">'+r.dateFormat(S.formatTime)+"</div>"},S.allowTimes&&e.isArray(S.allowTimes)&&S.allowTimes.length)for(m=0;m<S.allowTimes.length;m+=1)y=Y.strtotime(S.allowTimes[m]).getHours(),s=Y.strtotime(S.allowTimes[m]).getMinutes(),d(y,s);else for(m=0,t=0;m<(S.hours12?12:24);m+=1)for(t=0;60>t;t+=S.step)y=(10>m?"0":"")+m,s=(10>t?"0":"")+t,d(y,s);for(z.html(v),a="",m=0,m=parseInt(S.yearStart,10)+S.yearOffset;m<=parseInt(S.yearEnd,10)+S.yearOffset;m+=1)a+='<div class="xdsoft_option '+(Y.currentTime.getFullYear()===m?"xdsoft_current":"")+'" data-value="'+m+'">'+m+"</div>";for(B.children().eq(0).html(a),m=parseInt(S.monthStart,10),a="";m<=parseInt(S.monthEnd,10);m+=1)a+='<div class="xdsoft_option '+(Y.currentTime.getMonth()===m?"xdsoft_current":"")+'" data-value="'+m+'">'+S.i18n[S.lang].months[m]+"</div>";L.children().eq(0).html(a),e(P).trigger("generate.xdsoft")},10),t.stopPropagation()}).on("afterOpen.xdsoft",function(){if(S.timepicker){var e,t,a,n;z.find(".xdsoft_current").length?e=".xdsoft_current":z.find(".xdsoft_init_time").length&&(e=".xdsoft_init_time"),e?(t=N[0].clientHeight,a=z[0].offsetHeight,n=z.find(e).index()*S.timeHeightInTimePicker+1,n>a-t&&(n=a-t),N.trigger("scroll_element.xdsoft_scroller",[parseInt(n,10)/(a-t)])):N.trigger("scroll_element.xdsoft_scroller",[0])}}),_=0,H.on("click.xdsoft","td",function(a){a.stopPropagation(),_+=1;var n=e(this),r=Y.currentTime;return(void 0===r||null===r)&&(Y.currentTime=Y.now(),r=Y.currentTime),n.hasClass("xdsoft_disabled")?!1:(r.setDate(1),r.setFullYear(n.data("year")),r.setMonth(n.data("month")),r.setDate(n.data("date")),P.trigger("select.xdsoft",[r]),t.val(Y.str()),(_>1||S.closeOnDateSelect===!0||0===S.closeOnDateSelect&&!S.timepicker)&&!S.inline&&P.trigger("close.xdsoft"),S.onSelectDate&&e.isFunction(S.onSelectDate)&&S.onSelectDate.call(P,Y.currentTime,P.data("input"),a),P.data("changed",!0),P.trigger("xchange.xdsoft"),P.trigger("changedatetime.xdsoft"),void setTimeout(function(){_=0},200))}),z.on("click.xdsoft","div",function(t){t.stopPropagation();var a=e(this),n=Y.currentTime;return(void 0===n||null===n)&&(Y.currentTime=Y.now(),n=Y.currentTime),a.hasClass("xdsoft_disabled")?!1:(n.setHours(a.data("hour")),n.setMinutes(a.data("minute")),P.trigger("select.xdsoft",[n]),P.data("input").val(Y.str()),S.inline!==!0&&S.closeOnTimeSelect===!0&&P.trigger("close.xdsoft"),S.onSelectTime&&e.isFunction(S.onSelectTime)&&S.onSelectTime.call(P,Y.currentTime,P.data("input"),t),P.data("changed",!0),P.trigger("xchange.xdsoft"),void P.trigger("changedatetime.xdsoft"))
}),C.on("mousewheel.xdsoft",function(e){return S.scrollMonth?(e.deltaY<0?Y.nextMonth():Y.prevMonth(),!1):!0}),t.on("mousewheel.xdsoft",function(e){return S.scrollInput?!S.datepicker&&S.timepicker?(F=z.find(".xdsoft_current").length?z.find(".xdsoft_current").eq(0).index():0,F+e.deltaY>=0&&F+e.deltaY<z.children().length&&(F+=e.deltaY),z.children().eq(F).length&&z.children().eq(F).trigger("mousedown"),!1):S.datepicker&&!S.timepicker?(C.trigger(e,[e.deltaY,e.deltaX,e.deltaY]),t.val&&t.val(Y.str()),P.trigger("changedatetime.xdsoft"),!1):void 0:!0}),P.on("changedatetime.xdsoft",function(t){if(S.onChangeDateTime&&e.isFunction(S.onChangeDateTime)){var a=P.data("input");S.onChangeDateTime.call(P,Y.currentTime,a,t),delete S.value,a.trigger("change")}}).on("generate.xdsoft",function(){S.onGenerate&&e.isFunction(S.onGenerate)&&S.onGenerate.call(P,Y.currentTime,P.data("input")),R&&(P.trigger("afterOpen.xdsoft"),R=!1)}).on("click.xdsoft",function(e){e.stopPropagation()}),F=0,A=function(){var t=P.data("input").offset(),a=t.top+P.data("input")[0].offsetHeight-1,n=t.left,r="absolute";S.fixed?(a-=e(window).scrollTop(),n-=e(window).scrollLeft(),r="fixed"):(a+P[0].offsetHeight>e(window).height()+e(window).scrollTop()&&(a=t.top-P[0].offsetHeight+1),0>a&&(a=0),n+P[0].offsetWidth>e(window).width()&&(n=e(window).width()-P[0].offsetWidth)),P.css({left:n,top:a,position:r})},P.on("open.xdsoft",function(t){var a=!0;S.onShow&&e.isFunction(S.onShow)&&(a=S.onShow.call(P,Y.currentTime,P.data("input"),t)),a!==!1&&(P.show(),A(),e(window).off("resize.xdsoft",A).on("resize.xdsoft",A),S.closeOnWithoutClick&&e([document.body,window]).on("mousedown.xdsoft",function n(){P.trigger("close.xdsoft"),e([document.body,window]).off("mousedown.xdsoft",n)}))}).on("close.xdsoft",function(t){var a=!0;J.find(".xdsoft_month,.xdsoft_year").find(".xdsoft_select").hide(),S.onClose&&e.isFunction(S.onClose)&&(a=S.onClose.call(P,Y.currentTime,P.data("input"),t)),a===!1||S.opened||S.inline||P.hide(),t.stopPropagation()}).on("toggle.xdsoft",function(){P.trigger(P.is(":visible")?"close.xdsoft":"open.xdsoft")}).data("input",t),E=0,V=0,P.data("xdsoft_datetime",Y),P.setOptions(S),Y.setCurrentTime(n()),t.data("xdsoft_datetimepicker",P).on("open.xdsoft focusin.xdsoft mousedown.xdsoft",function(){t.is(":disabled")||t.data("xdsoft_datetimepicker").is(":visible")&&S.closeOnInputClick||(clearTimeout(E),E=setTimeout(function(){t.is(":disabled")||(R=!0,Y.setCurrentTime(n()),P.trigger("open.xdsoft"))},100))}).on("keydown.xdsoft",function(t){var a,n=(this.value,t.which);return-1!==[c].indexOf(n)&&S.enterLikeTab?(a=e("input:visible,textarea:visible"),P.trigger("close.xdsoft"),a.eq(a.index(this)+1).focus(),!1):-1!==[x].indexOf(n)?(P.trigger("close.xdsoft"),!0):void 0})},r=function(t){var a=t.data("xdsoft_datetimepicker");a&&(a.data("xdsoft_datetime",null),a.remove(),t.data("xdsoft_datetimepicker",null).off(".xdsoft"),e(window).off("resize.xdsoft"),e([window,document.body]).off("mousedown.xdsoft"),t.unmousewheel&&t.unmousewheel())},e(document).off("keydown.xdsoftctrl keyup.xdsoftctrl").on("keydown.xdsoftctrl",function(e){e.keyCode===d&&(M=!0)}).on("keyup.xdsoftctrl",function(e){e.keyCode===d&&(M=!1)}),this.each(function(){var t,o=e(this).data("xdsoft_datetimepicker");if(o){if("string"===e.type(a))switch(a){case"show":e(this).select().focus(),o.trigger("open.xdsoft");break;case"hide":o.trigger("close.xdsoft");break;case"toggle":o.trigger("toggle.xdsoft");break;case"destroy":r(e(this));break;case"reset":this.value=this.defaultValue,this.value&&o.data("xdsoft_datetime").isValidDate(Date.parseDate(this.value,S.format))||o.data("changed",!1),o.data("xdsoft_datetime").setCurrentTime(this.value);break;case"validate":t=o.data("input"),t.trigger("blur.xdsoft")}else o.setOptions(a);return 0}"string"!==e.type(a)&&(!S.lazyInit||S.open||S.inline?n(e(this)):_(e(this)))})},e.fn.datetimepicker.defaults=t}(jQuery),function(){!function(e){"function"==typeof define&&define.amd?define(["jquery"],e):"object"==typeof exports?module.exports=e:e(jQuery)}(function(e){function t(t){var s=t||window.event,i=u.call(arguments,1),d=0,c=0,f=0,m=0,h=0,g=0;if(t=e.event.fix(s),t.type="mousewheel","detail"in s&&(f=-1*s.detail),"wheelDelta"in s&&(f=s.wheelDelta),"wheelDeltaY"in s&&(f=s.wheelDeltaY),"wheelDeltaX"in s&&(c=-1*s.wheelDeltaX),"axis"in s&&s.axis===s.HORIZONTAL_AXIS&&(c=-1*f,f=0),d=0===f?c:f,"deltaY"in s&&(f=-1*s.deltaY,d=f),"deltaX"in s&&(c=s.deltaX,0===f&&(d=-1*c)),0!==f||0!==c){if(1===s.deltaMode){var p=e.data(this,"mousewheel-line-height");d*=p,f*=p,c*=p}else if(2===s.deltaMode){var D=e.data(this,"mousewheel-page-height");d*=D,f*=D,c*=D}if(m=Math.max(Math.abs(f),Math.abs(c)),(!o||o>m)&&(o=m,n(s,m)&&(o/=40)),n(s,m)&&(d/=40,c/=40,f/=40),d=Math[d>=1?"floor":"ceil"](d/o),c=Math[c>=1?"floor":"ceil"](c/o),f=Math[f>=1?"floor":"ceil"](f/o),l.settings.normalizeOffset&&this.getBoundingClientRect){var x=this.getBoundingClientRect();h=t.clientX-x.left,g=t.clientY-x.top}return t.deltaX=c,t.deltaY=f,t.deltaFactor=o,t.offsetX=h,t.offsetY=g,t.deltaMode=0,i.unshift(t,d,c,f),r&&clearTimeout(r),r=setTimeout(a,200),(e.event.dispatch||e.event.handle).apply(this,i)}}function a(){o=null}function n(e,t){return l.settings.adjustOldDeltas&&"mousewheel"===e.type&&t%120===0}var r,o,s=["wheel","mousewheel","DOMMouseScroll","MozMousePixelScroll"],i="onwheel"in document||document.documentMode>=9?["wheel"]:["mousewheel","DomMouseScroll","MozMousePixelScroll"],u=Array.prototype.slice;if(e.event.fixHooks)for(var d=s.length;d;)e.event.fixHooks[s[--d]]=e.event.mouseHooks;var l=e.event.special.mousewheel={version:"3.1.12",setup:function(){if(this.addEventListener)for(var a=i.length;a;)this.addEventListener(i[--a],t,!1);else this.onmousewheel=t;e.data(this,"mousewheel-line-height",l.getLineHeight(this)),e.data(this,"mousewheel-page-height",l.getPageHeight(this))},teardown:function(){if(this.removeEventListener)for(var a=i.length;a;)this.removeEventListener(i[--a],t,!1);else this.onmousewheel=null;e.removeData(this,"mousewheel-line-height"),e.removeData(this,"mousewheel-page-height")},getLineHeight:function(t){var a=e(t),n=a["offsetParent"in e.fn?"offsetParent":"parent"]();return n.length||(n=e("body")),parseInt(n.css("fontSize"),10)||parseInt(a.css("fontSize"),10)||16},getPageHeight:function(t){return e(t).height()},settings:{adjustOldDeltas:!0,normalizeOffset:!0}};e.fn.extend({mousewheel:function(e){return e?this.bind("mousewheel",e):this.trigger("mousewheel")},unmousewheel:function(e){return this.unbind("mousewheel",e)}})}),Date.parseFunctions={count:0},Date.parseRegexes=[],Date.formatFunctions={count:0},Date.prototype.dateFormat=function(e){if("unixtime"==e)return parseInt(this.getTime()/1e3);null==Date.formatFunctions[e]&&Date.createNewFormat(e);var t=Date.formatFunctions[e];return this[t]()},Date.createNewFormat=function(format){var funcName="format"+Date.formatFunctions.count++;Date.formatFunctions[format]=funcName;for(var codePrefix="Date.prototype."+funcName+" = function() {return ",code="",special=!1,ch="",i=0;i<format.length;++i)ch=format.charAt(i),special||"\\"!=ch?special?(special=!1,code+="'"+String.escape(ch)+"' + "):code+=Date.getFormatCode(ch):special=!0;code=0==code.length?'""':code.substring(0,code.length-3),eval(codePrefix+code+";}")},Date.getFormatCode=function(e){switch(e){case"d":return"String.leftPad(this.getDate(), 2, '0') + ";case"D":return"Date.dayNames[this.getDay()].substring(0, 3) + ";case"j":return"this.getDate() + ";case"l":return"Date.dayNames[this.getDay()] + ";case"S":return"this.getSuffix() + ";case"w":return"this.getDay() + ";case"z":return"this.getDayOfYear() + ";case"W":return"this.getWeekOfYear() + ";case"F":return"Date.monthNames[this.getMonth()] + ";case"m":return"String.leftPad(this.getMonth() + 1, 2, '0') + ";case"M":return"Date.monthNames[this.getMonth()].substring(0, 3) + ";case"n":return"(this.getMonth() + 1) + ";case"t":return"this.getDaysInMonth() + ";case"L":return"(this.isLeapYear() ? 1 : 0) + ";case"Y":return"this.getFullYear() + ";case"y":return"('' + this.getFullYear()).substring(2, 4) + ";case"a":return"(this.getHours() < 12 ? 'am' : 'pm') + ";case"A":return"(this.getHours() < 12 ? 'AM' : 'PM') + ";case"g":return"((this.getHours() %12) ? this.getHours() % 12 : 12) + ";case"G":return"this.getHours() + ";case"h":return"String.leftPad((this.getHours() %12) ? this.getHours() % 12 : 12, 2, '0') + ";case"H":return"String.leftPad(this.getHours(), 2, '0') + ";case"i":return"String.leftPad(this.getMinutes(), 2, '0') + ";case"s":return"String.leftPad(this.getSeconds(), 2, '0') + ";case"O":return"this.getGMTOffset() + ";case"T":return"this.getTimezone() + ";case"Z":return"(this.getTimezoneOffset() * -60) + ";default:return"'"+String.escape(e)+"' + "}},Date.parseDate=function(e,t){if("unixtime"==t)return new Date(isNaN(parseInt(e))?0:1e3*parseInt(e));null==Date.parseFunctions[t]&&Date.createParser(t);var a=Date.parseFunctions[t];return Date[a](e)},Date.createParser=function(format){var funcName="parse"+Date.parseFunctions.count++,regexNum=Date.parseRegexes.length,currentGroup=1;Date.parseFunctions[format]=funcName;for(var code="Date."+funcName+" = function(input) {\nvar y = -1, m = -1, d = -1, h = -1, i = -1, s = -1, z = -1;\nvar d = new Date();\ny = d.getFullYear();\nm = d.getMonth();\nd = d.getDate();\nvar results = input.match(Date.parseRegexes["+regexNum+"]);\nif (results && results.length > 0) {",regex="",special=!1,ch="",i=0;i<format.length;++i)ch=format.charAt(i),special||"\\"!=ch?special?(special=!1,regex+=String.escape(ch)):(obj=Date.formatCodeToRegex(ch,currentGroup),currentGroup+=obj.g,regex+=obj.s,obj.g&&obj.c&&(code+=obj.c)):special=!0;code+="if (y > 0 && z > 0){\nvar doyDate = new Date(y,0);\ndoyDate.setDate(z);\nm = doyDate.getMonth();\nd = doyDate.getDate();\n}",code+="if (y > 0 && m >= 0 && d > 0 && h >= 0 && i >= 0 && s >= 0)\n{return new Date(y, m, d, h, i, s);}\nelse if (y > 0 && m >= 0 && d > 0 && h >= 0 && i >= 0)\n{return new Date(y, m, d, h, i);}\nelse if (y > 0 && m >= 0 && d > 0 && h >= 0)\n{return new Date(y, m, d, h);}\nelse if (y > 0 && m >= 0 && d > 0)\n{return new Date(y, m, d);}\nelse if (y > 0 && m >= 0)\n{return new Date(y, m);}\nelse if (y > 0)\n{return new Date(y);}\n}return null;}",Date.parseRegexes[regexNum]=new RegExp("^"+regex+"$","i"),eval(code)},Date.formatCodeToRegex=function(e,t){switch(e){case"D":return{g:0,c:null,s:"(?:Sun|Mon|Tue|Wed|Thu|Fri|Sat)"};case"j":case"d":return{g:1,c:"d = parseInt(results["+t+"], 10);\n",s:"(\\d{1,2})"};case"l":return{g:0,c:null,s:"(?:"+Date.dayNames.join("|")+")"};case"S":return{g:0,c:null,s:"(?:st|nd|rd|th)"};case"w":return{g:0,c:null,s:"\\d"};case"z":return{g:1,c:"z = parseInt(results["+t+"], 10);\n",s:"(\\d{1,3})"};case"W":return{g:0,c:null,s:"(?:\\d{2})"};case"F":return{g:1,c:"m = parseInt(Date.monthNumbers[results["+t+"].substring(0, 3)], 10);\n",s:"("+Date.monthNames.join("|")+")"};case"M":return{g:1,c:"m = parseInt(Date.monthNumbers[results["+t+"]], 10);\n",s:"(Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec)"};case"n":case"m":return{g:1,c:"m = parseInt(results["+t+"], 10) - 1;\n",s:"(\\d{1,2})"};case"t":return{g:0,c:null,s:"\\d{1,2}"};case"L":return{g:0,c:null,s:"(?:1|0)"};case"Y":return{g:1,c:"y = parseInt(results["+t+"], 10);\n",s:"(\\d{4})"};case"y":return{g:1,c:"var ty = parseInt(results["+t+"], 10);\ny = ty > Date.y2kYear ? 1900 + ty : 2000 + ty;\n",s:"(\\d{1,2})"};case"a":return{g:1,c:"if (results["+t+"] == 'am') {\nif (h == 12) { h = 0; }\n} else { if (h < 12) { h += 12; }}",s:"(am|pm)"};case"A":return{g:1,c:"if (results["+t+"] == 'AM') {\nif (h == 12) { h = 0; }\n} else { if (h < 12) { h += 12; }}",s:"(AM|PM)"};case"g":case"G":case"h":case"H":return{g:1,c:"h = parseInt(results["+t+"], 10);\n",s:"(\\d{1,2})"};case"i":return{g:1,c:"i = parseInt(results["+t+"], 10);\n",s:"(\\d{2})"};case"s":return{g:1,c:"s = parseInt(results["+t+"], 10);\n",s:"(\\d{2})"};case"O":return{g:0,c:null,s:"[+-]\\d{4}"};case"T":return{g:0,c:null,s:"[A-Z]{3}"};case"Z":return{g:0,c:null,s:"[+-]\\d{1,5}"};default:return{g:0,c:null,s:String.escape(e)}}},Date.prototype.getTimezone=function(){return this.toString().replace(/^.*? ([A-Z]{3}) [0-9]{4}.*$/,"$1").replace(/^.*?\(([A-Z])[a-z]+ ([A-Z])[a-z]+ ([A-Z])[a-z]+\)$/,"$1$2$3")},Date.prototype.getGMTOffset=function(){return(this.getTimezoneOffset()>0?"-":"+")+String.leftPad(Math.floor(Math.abs(this.getTimezoneOffset())/60),2,"0")+String.leftPad(Math.abs(this.getTimezoneOffset())%60,2,"0")},Date.prototype.getDayOfYear=function(){var e=0;Date.daysInMonth[1]=this.isLeapYear()?29:28;for(var t=0;t<this.getMonth();++t)e+=Date.daysInMonth[t];return e+this.getDate()},Date.prototype.getWeekOfYear=function(){var e=this.getDayOfYear()+(4-this.getDay()),t=new Date(this.getFullYear(),0,1),a=7-t.getDay()+4;return String.leftPad(Math.ceil((e-a)/7)+1,2,"0")},Date.prototype.isLeapYear=function(){var e=this.getFullYear();return 0==(3&e)&&(e%100||e%400==0&&e)},Date.prototype.getFirstDayOfMonth=function(){var e=(this.getDay()-(this.getDate()-1))%7;return 0>e?e+7:e},Date.prototype.getLastDayOfMonth=function(){var e=(this.getDay()+(Date.daysInMonth[this.getMonth()]-this.getDate()))%7;return 0>e?e+7:e},Date.prototype.getDaysInMonth=function(){return Date.daysInMonth[1]=this.isLeapYear()?29:28,Date.daysInMonth[this.getMonth()]},Date.prototype.getSuffix=function(){switch(this.getDate()){case 1:case 21:case 31:return"st";case 2:case 22:return"nd";case 3:case 23:return"rd";default:return"th"}},String.escape=function(e){return e.replace(/('|\\)/g,"\\$1")},String.leftPad=function(e,t,a){var n=new String(e);for(null==a&&(a=" ");n.length<t;)n=a+n;return n},Date.daysInMonth=[31,28,31,30,31,30,31,31,30,31,30,31],Date.monthNames=["January","February","March","April","May","June","July","August","September","October","November","December"],Date.dayNames=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],Date.y2kYear=50,Date.monthNumbers={Jan:0,Feb:1,Mar:2,Apr:3,May:4,Jun:5,Jul:6,Aug:7,Sep:8,Oct:9,Nov:10,Dec:11},Date.patterns={ISO8601LongPattern:"Y-m-d H:i:s",ISO8601ShortPattern:"Y-m-d",ShortDatePattern:"n/j/Y",LongDatePattern:"l, F d, Y",FullDateTimePattern:"l, F d, Y g:i:s A",MonthDayPattern:"F d",ShortTimePattern:"g:i A",LongTimePattern:"g:i:s A",SortableDateTimePattern:"Y-m-d\\TH:i:s",UniversalSortableDateTimePattern:"Y-m-d H:i:sO",YearMonthPattern:"F, Y"}}();

$(document).ready(function(){
    $("#fdate" ).datetimepicker({
        dateFormat: 'yy-mm-dd',
        timeFormat: 'HH:mm:ss',
        onShow: function () {
            this.setOptions({
                maxDate:$('#tdate').val()?$('#tdate').val():false,
                maxTime:$('#tdate').val()?$('#tdate').val():false
            });
        }
  }).attr('readonly', 'readonly');
  $( "#tdate" ).datetimepicker({
      dateFormat: 'yy-mm-dd',
      timeFormat: 'HH:mm:ss',
        onShow: function () {
            this.setOptions({
                minDate:$('#fdate').val()?$('#fdate').val():false,
                minTime:$('#fdate').val()?$('#fdate').val():false
            });
        }                    
  }).attr('readonly', 'readonly');     
    
   
});
    </script>
    </body>
</html>