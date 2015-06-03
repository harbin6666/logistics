<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html lang="zh"><head><meta charset="utf-8"><title>卷烟绿色物流评价分析系统</title><meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="description" content=""><meta name="author" content=""><link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'><link rel="stylesheet" type="text/css" href="__PUBLIC__/lib/bootstrap/css/bootstrap.css"><link rel="stylesheet" href="__PUBLIC__/lib/font-awesome/css/font-awesome.css"><script src="__PUBLIC__/lib/jquery-1.11.1.min.js" type="text/javascript"></script><script src="__PUBLIC__/lib/jQuery-Knob/js/jquery.knob.js" type="text/javascript"></script><script type="text/javascript">        $(function() {            $(".knob").knob();        });    </script><link rel="stylesheet" type="text/css" href="__PUBLIC__/stylesheets/theme.css"><link rel="stylesheet" type="text/css" href="__PUBLIC__/stylesheets/premium.css"></head><body class="theme-blue"><script type="text/javascript">        $(function() {            var match = document.cookie.match(new RegExp('color=([^;]+)'));            if(match) var color = match[1];            if(color) {                $('body').removeClass(function (index, css) {                    return (css.match (/\btheme-\S+/g) || []).join(' ')                })                $('body').addClass('theme-' + color);            }           // $('[data-popover="true"]').popover({html: true});                    });    </script><style type="text/css">        #line-chart {            height:300px;            width:800px;            margin: 0px auto;            margin-top: 1em;        }        .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover {             color: #fff;        }    </style><script type="text/javascript">        $(function() {            var uls = $('.sidebar-nav > ul > *').clone();            uls.addClass('visible-xs');            $('#main-menu').append(uls.clone());        });    </script><!-- Le HTML5 shim, for IE6-8 support of HTML5 elements --><!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]--><!-- Le fav and touch icons --><link rel="shortcut icon" href="../assets/ico/favicon.ico"><link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png"><link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png"><link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png"><link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png"><!--[if lt IE 7 ]><body class="ie ie6"><![endif]--><!--[if IE 7 ]><body class="ie ie7 "><![endif]--><!--[if IE 8 ]><body class="ie ie8 "><![endif]--><!--[if IE 9 ]><body class="ie ie9 "><![endif]--><!--[if (gt IE 9)|!(IE)]><!--><!--<![endif]--><div class="navbar navbar-default" role="navigation"><div class="navbar-header"><button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="" href="index.html"><img src="__PUBLIC__/images/tobacco.jpg"  height="50px" width="70px" class="tobacco"/><font face="Helvetica Neue" color=white size=6>		卷烟绿色物流评价分析系统 Green Logistics of Cigarette</font><!--  <span class="navbar-brand"><span class="fa fa-paper-plane"></span> --><!-- </span> --></a></div><div class="navbar-collapse collapse" style="height: 1px;"><div class ="navbar-right"><ul class="nav navbar-nav navbar-right"><li><a href="#" ><span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 4px;"></span><?php echo $_COOKIE['username'];?></a><li><li><a href="__ROOT__/index.php/login/logout" ><img src ="__PUBLIC__/images/logout.png"  height="23px" width ="23px"/> Logout                  </a><li></ul></div></div><div class="nav_bg ma_auto"><ul><li  ><a href="__ROOT__/index.php" >首 页</a></Li><li ><a href="__ROOT__/index.php/input" >数据录入与管理</a></li><li  class="on"><a href="__ROOT__/index.php/comment" style="color:rgb(255, 255, 255) ">评价分析</a></li><li><a href="__ROOT__/index.php/login/logout" >退出系统</a></li></ul></div></div><div class="sidebar-nav"><ul><li><a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse">权重设置<i class="fa fa-collapse"></i></a></li><li><ul class="dashboard-menu nav nav-list collapse in"><li><a href="__URL__/default.html" ><span class="fa fa-caret-right"></span>默认权重</a></li><li ><a href="__URL__/setting.html"><span class="fa fa-caret-right"></span>自定义权重</a></li></ul></li><li><a href="#" data-target=".premium-menu" class="nav-header collapsed" data-toggle="collapse">评价<i class="fa fa-collapse"></i></a></li><li><ul class="premium-menu nav nav-list collapse in"><li ><a href="__URL__/result_main"><span class="fa fa-caret-right"></span>总体评价</a></li><!-- 			<form action="__URL__/m"> --><li ><a href="__URL__/result_angle"><span class="fa fa-caret-right"></span>角度评价</a></li><li ><a href="__URL__/result_point"><span class="fa fa-caret-right"></span>具体指标评价</a></li></ul></li><li><a href="#" data-target=".accounts-menu" class="nav-header collapsed" data-toggle="collapse">分析<i class="fa fa-collapse"></i></a></li><li><ul class="accounts-menu nav nav-list collapse in"><li ><a href="__URL__/analysis_main"><span class="fa fa-caret-right"></span>总体分析</a></li><li ><a href="__URL__/analysis_angle"><span class="fa fa-caret-right"></span>角度分析</a></li><li ><a href="__URL__/analysis_point"><span class="fa fa-caret-right"></span>具体指标分析</a></li></ul></li></ul></div><div class="content"><div class="header"><div class="stats"><!--   <p class="stat"><span class="label label-info">5</span> Tickets</p><p class="stat"><span class="label label-success">27</span> Tasks</p><p class="stat"><span class="label label-danger">15</span> Overdue</p> --></div><h1 class="page-title">总体分析</h1><!--    <ul class="breadcrumb"><li><a href="index.html">卷烟绿色物流评价</a></li><li class="active"><a href="index.html">卷烟绿色仓储</a></li><li class="active">仓储利用率</li></ul> --></div><div class="main-content"><center><table border="1" width="800px" height="100px"><caption><b><h3>卷烟绿色物流绩效总体分析</h3></b></caption><tr width="40px"><th></th><th>v1</th><th>v2</th><th>v3</th><th>v4</th><th>v5</th><th>总分</th></tr><tr width="40px"><th>卷烟绿色物流</th><td  align="center"><?php echo (substr($sum1,0,5)); ?></td><td  align="center"><?php echo (substr($sum2,0,5)); ?></td><td  align="center"><?php echo (substr($sum3,0,5)); ?></td><td  align="center"><?php echo (substr($sum4,0,5)); ?></td><td  align="center"><?php echo (substr($sum5,0,5)); ?></td><td  align="center"></td></tr><tr width="40px"><th>分值</th><td align="center">100</td><td align="center">80</td><td align="center">60</td><td align="center">40</td><td align="center">20</td><td  align="center"><?php echo (substr($S,0,5)); ?></td></tr></table><br/></center><br/><font size ="5">本系统将v1，v2，v3，v4，v5 分别表示“优秀”，“良好”，“中等”，“一般”，“差”五个等级，它们的分值分别为100，80，60，40，20。<br/> 根据上表可以得出卷烟绿色物流的最终得分:   <b>S= 100*<?php echo (substr($sum1,0,5)); ?>+80*<?php echo (substr($sum2,0,5)); ?>+60*<?php echo (substr($sum3,0,5)); ?>+40*<?php echo (substr($sum4,0,5)); ?>+20*<?php echo (substr($sum5,0,5)); ?>= <?php echo (substr($S,0,5)); ?></b> ,
 可见公司的卷烟绿色物流绩效基本处于
 
 <?php if(($S > 40) and ($S < 60) ): ?><b>中等水平</b><?php elseif(($S > 60) and ($S < 80) ): ?><b>良好水平</b><?php elseif(($S > 80) and ($S < 100) ): ?><b>优秀水平</b><?php elseif(($S > 20) and ($S < 40) ): ?><b>一般水平</b><?php elseif(($S < 20) ): ?><b>差水平</b><!--  <?php else: ?>  --><?php endif; ?><!-- 中等水平。 -->。<br/> (其中，<?php echo (substr($sum1,0,5)); ?>，<?php echo (substr($sum2,0,5)); ?>，<?php echo (substr($sum3,0,5)); ?>，<?php echo (substr($sum4,0,5)); ?>，<?php echo (substr($sum5,0,5)); ?> 它们是通过基于标杆管理思想的三角模糊数层次分析法模型计算出来的，分别表示卷烟绿色物流在v1，v2，v3，v4，v5上的隶属度)。</font></div></body></html>