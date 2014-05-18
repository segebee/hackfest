<?php
$title = 'Member Registration';
require_once('.././mem_new/inc/lib.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<!--<base href="http://www.members.carboncreditnetwork.org/">-->
<link rel="shortcut icon" href="/mem_new/images/favicon.png">
<link rel="stylesheet" href="/mem_new/css/layout.css">
<link rel="stylesheet" href="/mem_new/css/style.css">
<link rel="stylesheet" href="/mem_new/css/login.css">
<link rel="stylesheet" href="/mem_new/js/facebox/facebox.css">
<link rel="stylesheet" href="/mem_new/js/JSCal2-1.9/css/jscal2.css" />
<link rel="stylesheet" href="/mem_new/js/JSCal2-1.9/css/border-radius.css" />
<link rel="stylesheet" href="/mem_new/js/JSCal2-1.9/css/steel/steel.css" />
<link rel="stylesheet" href="/mem_new/js/JSCal2-1.9/css/reduce-spacing.css" />
<script src="/mem_new/js/fn.js"></script>

<script src="/mem_new/js/jquery-1.9.1.min.js"></script>
<script src="/mem_new/js/jquery.form.js"></script>
<script src="/mem_new/js/script.js"></script>
<script src="/mem_new/js/jquery.innerfade.js"></script>
<script src="/mem_new/js/login.js"></script>
<script src="/mem_new/js/JSCal2-1.9/js/jscal2.js"></script>
<script src="/mem_new/js/JSCal2-1.9/js/lang/en.js"></script>
<script>

$(function() {
  $('#news').innerfade({
    animationtype: 'slide',
    speed: 750,
    timeout: 5000,
    type: 'random',
    containerheight: '1em'
  });
})

$(function() {
	$('.shTblData').click(function(e) {
		tblData = $(this).parent('div').find('.tblData');
		tblData.slideToggle();
  });
})
function calender(field, btn) {
  Calendar.setup({
    inputField : field,
    trigger    : btn,
    onSelect   : function() { this.hide() },
    dateFormat : "%Y-%m-%d",
		weekNumbers: true
  });
}
</script>
<title>Member Registration :: Carbon Credit Network</title>
</head>

<body>
<div id="header">
	<div class="logo"></div>
  <div class="line"></div>
</div>
<style>
.tblData td {padding:5px; font-size:12px; vertical-align:middle;}
.tblData td input, .tblData td textarea, .tblData td select {width:150px;}
.tblData .tdT {font-weight:bold; font-size:12px;}
.tblData textarea {width:180px !important; max-width:180px !important; height:60px !important; max-height:60px !important;}
.infoT {text-align:center; margin:10px 0; background-color:#3C6; _background-color:#B9E3B7; color:#fff; padding:5px;}
input[type=text], input[type=password] {width:180px !important;}
.shTblData{cursor:pointer; background-image:url(images/orderslide.png); background-repeat:no-repeat; background-position:98% -12px;}
.ostate, .olga {display:none;}
</style>