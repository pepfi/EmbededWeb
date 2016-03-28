<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>傲天动联</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
	<meta content="yes" name="apple-mobile-web-app-capable" />
	<meta content="black" name="apple-mobile-web-app-status-bar-style" />
	<meta name="format-detection" content="telephone=no" />
	<link href="<?php echo base_url(); ?>style/css/main.css" rel="stylesheet" type="text/css" />
	<script src="<?php echo base_url(); ?>style/js/jquery-1.10.2.min.js "></script>
	<script src="<?php echo base_url(); ?>style/js/jquery-1.7.2.min.js"></script>
	<script src="<?php echo base_url(); ?>style/js/zepto.js"></script>
	<script src="<?php echo base_url(); ?>style/js/tempo.min.js"></script>
</head>
<body>
<div class="zjhn-hd">
	<div class="zjhn-logo-wrap" style=" text-align:center;color:#fff;font-size:18px; height:50px; line-height:50px;">中威电子</div>
	<div style="clear:both"></div>
	<ul class="zjhn-nav">
    	<li class="active"><a href="#" onClick="convertURL('index.html')">影视</a></li>
        <li><a href="#" onClick="convertURL('game.html')">游戏</a></li>
        <li><a href="#" onClick="convertURL('app.html')">应用</a></li>
        <li><a href="#" onClick="convertURL('bendi.html')">附近</a></li>
        
	</ul>
	<div style="clear:both"></div>
    <div class="tips">
    	<span class="tipsa">【温馨提示】</span>
        <span class="fl" id="tips"></span>
       <!-- <span><a href="#" onClick="convertURL('help.html')" class="tiphlp">帮助</a></span>-->
    </div>
    <div style="clear:both"></div>
</div>

<div class="flexslider">
	<ul class="slides">
    <li><img src="<?php echo base_url(); ?>resource/ad/1.jpg" /></li>
    </ul>
</div>
<script defer src="<?php echo base_url(); ?>style/js/flash.js"></script> 
<script type="text/javascript">
    $(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
</script>
<!--轮番end-->