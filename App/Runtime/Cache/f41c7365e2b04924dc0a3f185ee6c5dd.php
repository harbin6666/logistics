<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html lang="zh"><head><meta charset="utf-8"><title>卷烟绿色物流评价分析系统</title><meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="description" content=""><meta name="author" content=""><link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'><link rel="stylesheet" type="text/css" href="__PUBLIC__/lib/bootstrap/css/bootstrap.css"><link rel="stylesheet" href="__PUBLIC__/lib/font-awesome/css/font-awesome.css"><script src="__PUBLIC__/lib/jquery-1.11.1.min.js" type="text/javascript"></script><script src="__PUBLIC__/lib/jQuery-Knob/js/jquery.knob.js" type="text/javascript"></script><script type="text/javascript">        $(function() {            $(".knob").knob();        });    </script><link rel="stylesheet" type="text/css" href="__PUBLIC__/stylesheets/theme.css"><link rel="stylesheet" type="text/css" href="__PUBLIC__/stylesheets/premium.css"></head><body class="theme-blue"><script type="text/javascript">        $(function() {            var match = document.cookie.match(new RegExp('color=([^;]+)'));            if(match) var color = match[1];            if(color) {                $('body').removeClass(function (index, css) {                    return (css.match (/\btheme-\S+/g) || []).join(' ')                })                $('body').addClass('theme-' + color);            }           // $('[data-popover="true"]').popover({html: true});                    });    </script><style type="text/css">        #line-chart {            height:300px;            width:800px;            margin: 0px auto;            margin-top: 1em;        }        .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover {             color: #fff;        }    </style><script type="text/javascript">        $(function() {            var uls = $('.sidebar-nav > ul > *').clone();            uls.addClass('visible-xs');            $('#main-menu').append(uls.clone());        });    </script><!-- Le HTML5 shim, for IE6-8 support of HTML5 elements --><!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]--><!-- Le fav and touch icons --><link rel="shortcut icon" href="../assets/ico/favicon.ico"><link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png"><link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png"><link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png"><link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png"><!--[if lt IE 7 ]><body class="ie ie6"><![endif]--><!--[if IE 7 ]><body class="ie ie7 "><![endif]--><!--[if IE 8 ]><body class="ie ie8 "><![endif]--><!--[if IE 9 ]><body class="ie ie9 "><![endif]--><!--[if (gt IE 9)|!(IE)]><!--><!--<![endif]--><div class="navbar navbar-default" role="navigation"><div class="navbar-header"><button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="" href="index.html"><img src="__PUBLIC__/images/tobacco.jpg"  height="50px" width="70px" class="tobacco"/><font face="Helvetica Neue" color=white size=6>		卷烟绿色物流评价分析系统 Green Logistics of Cigarette</font><!--  <span class="navbar-brand"><span class="fa fa-paper-plane"></span> --><!-- </span> --></a></div><div class="navbar-collapse collapse" style="height: 1px;"><div class ="navbar-right"><ul class="nav navbar-nav navbar-right"><li><a href="#" ><span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 4px;"></span><?php echo $_COOKIE['username'];?></a><li><li><a href="__ROOT__/index.php/login/logout" ><img src ="__PUBLIC__/images/logout.png"  height="23px" width ="23px"/> Logout                  </a><li></ul></div></div><div class="nav_bg ma_auto"><ul><li  ><a href="__ROOT__/index.php" >首 页</a></Li><li ><a href="__ROOT__/index.php/input" >数据录入与管理</a></li><li  class="on"><a href="__ROOT__/index.php/comment" style="color:rgb(255, 255, 255) ">评价分析</a></li><li><a href="__ROOT__/index.php/login/logout" >退出系统</a></li></ul></div></div><div class="sidebar-nav"><ul><li><a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse">权重设置<i class="fa fa-collapse"></i></a></li><li><ul class="dashboard-menu nav nav-list collapse in"><li><a href="__URL__/default.html" ><span class="fa fa-caret-right"></span>默认权重</a></li><li ><a href="__URL__/setting.html"><span class="fa fa-caret-right"></span>自定义权重</a></li></ul></li><li><a href="#" data-target=".premium-menu" class="nav-header collapsed" data-toggle="collapse">评价<i class="fa fa-collapse"></i></a></li><li><ul class="premium-menu nav nav-list collapse in"><li ><a href="__URL__/result_main"><span class="fa fa-caret-right"></span>总体评价</a></li><!-- 			<form action="__URL__/m"> --><li ><a href="__URL__/result_angle"><span class="fa fa-caret-right"></span>角度评价</a></li><li ><a href="__URL__/result_point"><span class="fa fa-caret-right"></span>具体指标评价</a></li></ul></li><li><a href="#" data-target=".accounts-menu" class="nav-header collapsed" data-toggle="collapse">分析<i class="fa fa-collapse"></i></a></li><li><ul class="accounts-menu nav nav-list collapse in"><li ><a href="__URL__/analysis_main"><span class="fa fa-caret-right"></span>总体分析</a></li><li ><a href="__URL__/analysis_angle"><span class="fa fa-caret-right"></span>角度分析</a></li><li ><a href="__URL__/analysis_point"><span class="fa fa-caret-right"></span>具体指标分析</a></li></ul></li></ul></div><!--  --><script type="text/javascript">//x限制只能输入数字
 function clearNoNum(obj)
    {
        //先把非数字的都替换掉，除了数字和.
        obj.value = obj.value.replace(/[^\d.]/g,"");
        //必须保证第一个为数字而不是.
        obj.value = obj.value.replace(/^\./g,"");
        //保证只有出现一个.而没有多个.
        obj.value = obj.value.replace(/\.{2,}/g,".");
        //保证.只出现一次，而不能出现两次以上
        obj.value = obj.value.replace(".","$#$").replace(/\./g,"").replace("$#$",".");
    }

function InputCheck(InputForm)
{
//检查下拉框是否选择
/*if(document.getElementById("parameter").value == "null"){
  alert("请选择评价参数！");
  return false;
}*/
//检查输入框是否全部输入
  if (InputForm.space1.value == "")
  {
    alert("请输入卷烟绿色仓储权重系数!");
    InputForm.space1.focus();
    return (false);
  }
  if (InputForm.space.value == "")
  {
    alert("请输入卷烟绿色分拣权重系数!");
    InputForm.space.focus();
    return (false);
  }
    if (InputForm.spa.value == "")
  {
    alert("请输入卷烟绿色配送运输权重系数!");
    InputForm.spa.focus();
    return (false);
  }
   if (InputForm.sp.value == "")
  {
    alert("请输入综合指标权重系数!");
    InputForm.sp.focus();
    return (false);
  }
  if(parseFloat(InputForm.space1.value)+parseFloat(InputForm.spa.value)+parseFloat(InputForm.space.value)+parseFloat(InputForm.sp.value) !==1){
  alert("卷烟绿色仓储权重系数+卷烟绿色分拣权重系数+卷烟绿色配送运输权重系数+综合指标权重系数 ! = 1 ,请检查输入");
   InputForm.space1.focus();
   return (false);
  }
  
  
  
  
  
   if (InputForm.a1.value == "")
  {
    alert("请输入仓储环节卷烟破损率的权重系数!");
    InputForm.a1.focus();
    return (false);
  }
   if (InputForm.a2.value == "")
  {
    alert("请输入仓储环节卷烟破损率的标杆值!");
    InputForm.a2.focus();
    return (false);
  }
  
   if (InputForm.a3.value == "")
  {
    alert("请输入仓储环节卷烟破损率的最低值!");
    InputForm.a3.focus();
    return (false);
  }
   if (InputForm.a4.value == "")
  {
    alert("请输入仓库利用率的权重系数!");
    InputForm.a4.focus();
    return (false);
  }
   if (InputForm.a5.value == "")
  {
    alert("请输入仓库利用率的标杆值!");
    InputForm.a5.focus();
    return (false);
  }
  
   if (InputForm.a6.value == "")
  {
    alert("请输入仓库利用率的最低值!");
    InputForm.a6.focus();
    return (false);
  }
     if (InputForm.a7.value == "")
  {
    alert("请输入仓储环节单位电能消耗的权重系数!");
    InputForm.a7.focus();
    return (false);
  }   if (InputForm.a8.value == "")
  {
    alert("请输入仓储环节单位电能消耗的标杆值!");
    InputForm.a8.focus();
    return (false);
  }   if (InputForm.a9.value == "")
  {
    alert("请输入仓储环节单位电能消耗的最低值!");
    InputForm.a9.focus();
    return (false);
  }
  if(parseFloat(InputForm.a1.value)+parseFloat(InputForm.a4.value)+parseFloat(InputForm.a7.value)!==1){
    alert("仓储环节卷烟破损率+仓库利用率+仓储环节单位电能消耗的权重系数！=1，请检查输入！");
    InputForm.a1.focus();
    return (false);
  }
   if (InputForm.b1.value == "")
  {
    alert("请输入分拣差错率的权重系数!");
    InputForm.b1.focus();
    return (false);
  }
   if (InputForm.b2.value == "")
  {
    alert("请输入分拣差错率的标杆值!");
    InputForm.b2.focus();
    return (false);
  }
   if (InputForm.b3.value == "")
  {
    alert("请输入分拣差错率的最低值!");
    InputForm.b3.focus();
    return (false);
  }
   if (InputForm.b4.value == "")
  {
    alert("请输入平均作业效率的权重系数!");
    InputForm.b4.focus();
    return (false);
  }
   if (InputForm.b5.value == "")
  {
    alert("请输入平均作业效率的标杆值!");
    InputForm.b5.focus();
    return (false);
  }
   if (InputForm.b6.value == "")
  {
    alert("请输入平均作业效率的最小值!");
    InputForm.b6.focus();
    return (false);
  }
   if (InputForm.b7.value == "")
  {
    alert("请输入人均分拣效率的权重系数!");
    InputForm.b7.focus();
    return (false);
  }
   if (InputForm.b8.value == "")
  {
    alert("请输入人均分拣效率的标杆值!");
    InputForm.b8.focus();
    return (false);
  }
   if (InputForm.b9.value == "")
  {
    alert("请输入人均分拣效率的最小值!");
    InputForm.b9.focus();
    return (false);
  }
   if (InputForm.b10.value == "")
  {
    alert("请输入分拣设备有效作业率的权重系数!");
    InputForm.b10.focus();
    return (false);
  }
   if (InputForm.b11.value == "")
  {
    alert("请输入分拣设备有效作业率的标杆值!");
    InputForm.b11.focus();
    return (false);
  }
   if (InputForm.b12.value == "")
  {
    alert("请输入分拣设备有效作业率的最小值!");
    InputForm.b12.focus();
    return (false);
  }
   if (InputForm.b13.value == "")
  {
    alert("请输入分拣车间噪声水平的权重系数!");
    InputForm.b13.focus();
    return (false);
  }
   if (InputForm.b14.value == "")
  {
    alert("请输入分拣车间噪声水平的标杆值!");
    InputForm.b14.focus();
    return (false);
  }
   if (InputForm.b15.value == "")
  {
    alert("请输入分拣车间噪声水平的最小值!");
    InputForm.b15.focus();
    return (false);
  }
   if (InputForm.b16.value == "")
  {
    alert("请输入PE膜回收率的权重系数!");
    InputForm.b16.focus();
    return (false);
  }
   if (InputForm.b17.value == "")
  {
    alert("请输入PE膜回收率的标杆值!");
    InputForm.b17.focus();
    return (false);
  } if (InputForm.b18.value == "")
  {
    alert("请输入PE膜回收率的最小值!");
    InputForm.b18.focus();
    return (false);
  } if (InputForm.b19.value == "")
  {
    alert("请输入纸箱回收率的权重系数!");
    InputForm.b19.focus();
    return (false);
  }
   if (InputForm.b20.value == "")
  {
    alert("请输入纸箱回收率的标杆值!");
    InputForm.b20.focus();
    return (false);
  }
     if (InputForm.b21.value == "")
  {
    alert("请输入纸箱回收率的最小值!");
    InputForm.b21.focus();
    return (false);
  }
  
  
   if (InputForm.b51.value == "")
  {
    alert("请输入分拣环节卷烟破损率的权重系数!");
    InputForm.b51.focus();
    return (false);
  }
   if (InputForm.b52.value == "")
  {
    alert("请输入分拣环节卷烟破损率的最小值!");
    InputForm.b52.focus();
    return (false);
  }
     if (InputForm.b53.value == "")
  {
    alert("请输入分拣环节卷烟破损率的标杆值!");
    InputForm.b53.focus();
    return (false);
  }
  
  
  
    if (InputForm.b54.value == "")
  {
    alert("请输入分拣环节单位电能消耗的权重系数!");
    InputForm.b54.focus();
    return (false);
  }
   if (InputForm.b55.value == "")
  {
    alert("请输入分拣环节单位电能消耗的最小值!");
    InputForm.b55.focus();
    return (false);
  }
     if (InputForm.b56.value == "")
  {
    alert("请输入分拣环节单位电能消耗的标杆值!");
    InputForm.b56.focus();
    return (false);
  }
  
     if (InputForm.b57.value == "")
  {
    alert("请输入纸箱合格率的权重系数!");
    InputForm.b57.focus();
    return (false);
  }
   if (InputForm.b58.value == "")
  {
    alert("请输入纸箱合格率的最小值!");
    InputForm.b58.focus();
    return (false);
  }
     if (InputForm.b59.value == "")
  {
    alert("请输入纸箱合格率的标杆值!");
    InputForm.b59.focus();
    return (false);
  }
  
   if(parseFloat(InputForm.b51.value)+parseFloat(InputForm.b54.value)+parseFloat(InputForm.b1.value)+parseFloat(InputForm.b4.value)+parseFloat(InputForm.b7.value)+parseFloat(InputForm.b10.value)
   +parseFloat(InputForm.b57.value)+parseFloat(InputForm.b13.value)+parseFloat(InputForm.b16.value)+parseFloat(InputForm.b19.value)!==1){
    alert("分拣环节卷烟破损率+分拣环节单位电能消耗+分拣差错率+平均作业效率+人均分拣效率+分拣设备有效作业率+纸箱合格率+分拣车间噪声水平+PE膜回收率+纸箱回收率 的权重系数和！=1，请检查输入！");
    InputForm.b1.focus();
    return (false);
  } 
  
  
  
     if (InputForm.c1.value == "")
  {
    alert("请输入单箱油耗量的权重系数!");
    InputForm.c1.focus();
    return (false);
  }
      if (InputForm.c2.value == "")
  {
    alert("请输入单箱油耗量的标杆值!");
    InputForm.c2.focus();
    return (false);
  }
      if (InputForm.c3.value == "")
  {
    alert("请输入单箱油耗量的最小值!");
    InputForm.c3.focus();
    return (false);
  }
  
  
  
      if (InputForm.c51.value == "")
  {
    alert("请输入配送环节卷烟破损率的权重系数!");
    InputForm.c51.focus();
    return (false);
  }
      if (InputForm.c52.value == "")
  {
    alert("请输入配送环节卷烟破损率的标杆值!");
    InputForm.c52.focus();
    return (false);
  }
      if (InputForm.c53.value == "")
  {
    alert("请输入配送环节卷烟破损率的最小值!");
    InputForm.c53.focus();
    return (false);
  }
  
  
      if (InputForm.c4.value == "")
  {
    alert("请输入送货准确率的权重系数!");
    InputForm.c4.focus();
    return (false);
  }
      if (InputForm.c5.value == "")
  {
    alert("请输入送货准确率的标杆值!");
    InputForm.c5.focus();
    return (false);
  }
      if (InputForm.c6.value == "")
  {
    alert("请输入送货准确率的最小值!");
    InputForm.c6.focus();
    return (false);
  }
      if (InputForm.c7.value == "")
  {
    alert("请输入车辆装载率的权重系数!");
    InputForm.c7.focus();
    return (false);
  }
      if (InputForm.c8.value == "")
  {
    alert("请输入车辆装载率的标杆值!");
    InputForm.c8.focus();
    return (false);
  }
      if (InputForm.c9.value == "")
  {
    alert("请输入车辆装载率的最小值!");
    InputForm.c9.focus();
    return (false);
  }
      if (InputForm.c10.value == "")
  {
    alert("请输入配送车辆GPS使用率的权重系数!");
    InputForm.c10.focus();
    return (false);
  }
      if (InputForm.c11.value == "")
  {
    alert("请输入配送车辆GPS使用率的标杆值!");
    InputForm.c11.focus();
    return (false);
  }
      if (InputForm.c12.value == "")
  {
    alert("请输入配送车辆GPS使用率的最小值!");
    InputForm.c12.focus();
    return (false);
  }
      if (InputForm.c13.value == "")
  {
    alert("请输入运输车辆百公里油耗的权重系数!");
    InputForm.c13.focus();
    return (false);
  }
      if (InputForm.c14.value == "")
  {
    alert("请输入运输车辆百公里油耗的标杆值!");
    InputForm.c14.focus();
    return (false);
  }
      if (InputForm.c15.value == "")
  {
    alert("请输入运输车辆百公里油耗的最小值!");
    InputForm.c15.focus();
    return (false);
  }
  
   if(parseFloat(InputForm.c1.value)+parseFloat(InputForm.c51.value)+parseFloat(InputForm.c4.value)+parseFloat(InputForm.c7.value)+parseFloat(InputForm.c10.value)+parseFloat(InputForm.c13.value)!==1){
    alert("单箱油耗量+配送环节卷烟破损率+送货准确率+车辆装载率+配送车辆GPS使用率+运输车辆百公里油耗 的权重系数和！=1，请检查输入！");
    InputForm.c1.focus();
    return (false);
  } 
  
  
      if (InputForm.d1.value == "")
  {
    alert("请输入环境管理体系认证情况的权重系数!");
    InputForm.d1.focus();
    return (false);
  }
      if (InputForm.d2.value == "")
  {
    alert("请输入环境管理体系认证情况的最小值!");
    InputForm.d2.focus();
    return (false);
  }
      if (InputForm.d3.value == "")
  {
    alert("请输入环境管理体系认证情况的标杆值!");
    InputForm.d3.focus();
    return (false);
  }
  
    
      if (InputForm.d7.value == "")
  {
    alert("请输入物流费用率的权重系数!");
    InputForm.d7.focus();
    return (false);
  }
      if (InputForm.d8.value == "")
  {
    alert("请输入物流费用率的标杆值!");
    InputForm.d8.focus();
    return (false);
  }
      if (InputForm.d9.value == "")
  {
    alert("请输入物流费用率的最小值!");
    InputForm.d9.focus();
    return (false);
  }
  if (InputForm.d13.value == "")
  {
    alert("请输入人才保障的权重系数!");
    InputForm.d13.focus();
    return (false);
  }
     if (InputForm.d16.value == "")
  {
    alert("请输入客户绿色物流认同率的权重系数!");
    InputForm.d16.focus();
    return (false);
  }
          if (InputForm.d17.value == "")
  {
    alert("请输入客户绿色物流认同率的标杆值!");
    InputForm.d17.focus();
    return (false);
  }
     if (InputForm.d18.value == "")
  {
    alert("请输入客户绿色物流认同率的最小值!");
    InputForm.d18.focus();
    return (false);
  }
  
   if(parseFloat(InputForm.d1.value)+parseFloat(InputForm.d7.value)+parseFloat(InputForm.d13.value)+parseFloat(InputForm.d16.value)!==1){
    alert("环境管理体系认证情况+物流费用率+人才保障+客户绿色物流认同率 的权重系数和！=1，请检查输入！");
    InputForm.d1.focus();
    return (false);
  } 
  
  
  
  
  
  
  
  
  
  
   if (InputForm.last_storage.value == "")
  {
    alert("请输入期末仓储量!");
    InputForm.last_storage.focus();
    return (false);
  }
  
   if (InputForm.loss.value == "")
  {
    alert("请输入计算期变坏、丢失的卷烟!");
    InputForm.loss.focus();
    return (false);
  }
  
 
}

</script><div class="content"><div class="header"><div class="stats"><!--   <p class="stat"><span class="label label-info">5</span> Tickets</p><p class="stat"><span class="label label-success">27</span> Tasks</p><p class="stat"><span class="label label-danger">15</span> Overdue</p> --></div><h1 class="page-title">自定义权重</h1><!--    <ul class="breadcrumb"><li><a href="index.html">卷烟绿色物流评价</a></li><li class="active"><a href="index.html">卷烟绿色仓储</a></li><li class="active">仓储利用率</li></ul> --></div><div class="main-content"><form id="InputForm"  onSubmit="return InputCheck(this)" name="InputForm" action="result" method="post" class= "shadow"><fieldset><center><br/><table border="1" width="800px" height="50px" ><tr><th align="middle">时间:</th><th><select name="time" id="time"  class="choice" ><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option></select></th><th align="middle">季度:</th><th><select name="quarter" id="quarter"  class="" ><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option></select></th><th align="middle">地点:</th><th><select name="place" id ="place"  class="choice" ><!-- <option  value="null">请选择</opton> --><option value="长沙市">长沙市</option><option value="株洲市">株洲市</option><option value="湘潭市">湘潭市</option><option value="衡阳市">衡阳市</option><option value="邵阳市">邵阳市</option><option value="岳阳市">岳阳市</option><option value="常德市">常德市</option><option value="张家界市">张家界市</option><option value="益阳市">益阳市</option><option value="郴州市">郴州市</option><option value="永州市">永州市</option><option value="怀化市">怀化市</option><option value="娄底市">娄底市</option></select></th></tr></table><br/><br/><table border="1" width="800px" height="100px"><caption><h4>评价角度权重集</h4></caption><tr width="80px"><th>评价角度</th><th>卷烟绿色仓储</th><th>卷烟绿色分拣</th><th>卷烟绿色配送运输</th><th>综合指标</th></tr><tr><td align="center">权重系数</td><td align="center"><input  name="space1" type="text"  onkeyup="clearNoNum(this)" size=15/></td><td align="center"><input  name="space" type="text"  onkeyup="clearNoNum(this)" size=15/></td><td align="center"><input  name="spa" type="text"  onkeyup="clearNoNum(this)" size=15/></td><td align="center"><input  name="sp" type="text"  onkeyup="clearNoNum(this)" size=15/></td></tr></table><br/><br/><table border="1" width="800px" height="800px" ><caption><h4>各指标的具体权重与标杆值</h4></caption><tr><th>评价角度</th><th>指标名称</th><th>权重系数</th><th>标杆值（最高值）</th><th>最低值</th></tr><tr><th rowspan="3">卷烟绿色仓储</th><td align="center">仓储环节卷烟破损率</td><td align="center"><input  name="a1" type="text"  onkeyup="clearNoNum(this)" size=10/></td><td align="center"><input  name="a2" type="text"  onkeyup="clearNoNum(this)" size=10 />%</td><td align="center"><input  name="a3" type="text"  onkeyup="clearNoNum(this)" size=10 />‰</td></tr><tr><td align="center">仓库利用率</td><td align="center"><input  name="a4" type="text"  onkeyup="clearNoNum(this)" size=10 /></td><td align="center" ><input  name="a5" type="text"  onkeyup="clearNoNum(this)" size=10 />%</td><td align="center"><input  name="a6" type="text"  onkeyup="clearNoNum(this)" size=10 />%</td></tr><tr><td align="center">仓储环节电能消耗(kw.h)</td><td align="center"><input  name="a7" type="text"  onkeyup="clearNoNum(this)" size=10 /></td><td align="center" ><input  name="a8" type="text"  onkeyup="clearNoNum(this)" size=10 /></td><td align="center"><input  name="a9" type="text"  onkeyup="clearNoNum(this)" size=10 /></td></tr><tr><th rowspan="10">卷烟绿色分拣</th><td align="center">分拣环节卷烟破损率</td><td align="center"><input  name="b51" type="text"  onkeyup="clearNoNum(this)" size=10/></td><td align="center"><input  name="b52" type="text"  onkeyup="clearNoNum(this)" size=10 />%</td><td align="center"><input  name="b53" type="text"  onkeyup="clearNoNum(this)" size=10 />‰</td></tr><tr><td align="center">分拣环节单位电能消耗(kw.h)</td><td align="center"><input  name="b54" type="text"  onkeyup="clearNoNum(this)" size=10 /></td><td align="center"><input  name="b55" type="text"  onkeyup="clearNoNum(this)" size=10 /></td><td align="center"><input  name="b56" type="text"  onkeyup="clearNoNum(this)" size=10 /></td></tr><tr><td align="center">分拣差错率</td><td align="center"><input  name="b1" type="text"  onkeyup="clearNoNum(this)" size=10/></td><td align="center"><input  name="b2" type="text"  onkeyup="clearNoNum(this)" size=10 />%</td><td align="center"><input  name="b3" type="text"  onkeyup="clearNoNum(this)" size=10 />‰</td></tr><tr><td align="center">平均作业效率(箱/每小时)</td><td align="center"><input  name="b4" type="text"  onkeyup="clearNoNum(this)" size=10 /></td><td align="center"><input  name="b5" type="text"  onkeyup="clearNoNum(this)" size=10 /></td><td align="center"><input  name="b6" type="text"  onkeyup="clearNoNum(this)" size=10 /></td></tr><tr><td align="center">人均分拣效率（箱每小时每人）</td><td align="center"><input  name="b7" type="text"  onkeyup="clearNoNum(this)" size=10 /></td><td align="center"><input  name="b8" type="text"  onkeyup="clearNoNum(this)" size=10 /></td><td align="center"><input  name="b9" type="text"  onkeyup="clearNoNum(this)" size=10 /></td></tr><tr><td align="center">分拣设备有效作业率</td><td align="center"><input  name="b10" type="text"  onkeyup="clearNoNum(this)" size=10 /></td><td align="center"><input  name="b11" type="text"  onkeyup="clearNoNum(this)" size=10 />%</td><td align="center"><input  name="b12" type="text"  onkeyup="clearNoNum(this)" size=10 />%</td></tr><tr><td align="center">纸箱合格率</td><td align="center"><input  name="b57" type="text"  onkeyup="clearNoNum(this)" size=10 /></td><td align="center"><input  name="b58" type="text"  onkeyup="clearNoNum(this)" size=10 />%</td><td align="center"><input  name="b59" type="text"  onkeyup="clearNoNum(this)" size=10 />%</td></tr><tr><td align="center">分拣车间噪声水平（DB）</td><td align="center"><input  name="b13" type="text"  onkeyup="clearNoNum(this)" size=10 /></td><td align="center"><input  name="b14" type="text"  onkeyup="clearNoNum(this)" size=10 />DB</td><td align="center"><input  name="b15" type="text"  onkeyup="clearNoNum(this)" size=10 />DB</td></tr><tr><td align="center">PE膜回收率</td><td align="center"><input  name="b16" type="text"  onkeyup="clearNoNum(this)" size=10 /></td><td align="center"><input  name="b17" type="text"  onkeyup="clearNoNum(this)" size=10 />%</td><td align="center"><input  name="b18" type="text"  onkeyup="clearNoNum(this)" size=10 />%</td></tr><tr><td align="center">纸箱回收率</td><td align="center"><input  name="b19" type="text"  onkeyup="clearNoNum(this)" size=10 /></td><td align="center"><input  name="b20" type="text"  onkeyup="clearNoNum(this)" size=10 />%</td><td align="center"><input  name="b21" type="text"  onkeyup="clearNoNum(this)" size=10 />%</td></tr><tr><th rowspan="6">卷烟绿色配送运输</th><td align="center">单箱油耗量</td><td align="center"><input  name="c1" type="text"  onkeyup="clearNoNum(this)" size=10 /></td><td align="center"><input  name="c2" type="text"  onkeyup="clearNoNum(this)" size=10 /></td><td align="center"><input  name="c3" type="text"  onkeyup="clearNoNum(this)" size=10 /></td></tr><tr><td align="center">配送环节卷烟破损率</td><td align="center"><input  name="c51" type="text"  onkeyup="clearNoNum(this)" size=10 /></td><td align="center"><input  name="c52" type="text"  onkeyup="clearNoNum(this)" size=10/>‰</td><td align="center"><input  name="c53" type="text"  onkeyup="clearNoNum(this)" size=10 />‰</td></tr><tr><td align="center">送货准确率</td><td align="center"><input  name="c4" type="text"  onkeyup="clearNoNum(this)" size=10 /></td><td align="center"><input  name="c5" type="text"  onkeyup="clearNoNum(this)" size=10/>%</td><td align="center"><input  name="c6" type="text"  onkeyup="clearNoNum(this)" size=10 />%</td></tr><tr><td align="center">车辆装载率</td><td align="center"><input  name="c7" type="text"  onkeyup="clearNoNum(this)" size=10 /></td><td align="center"><input  name="c8" type="text"  onkeyup="clearNoNum(this)" size=10 />%</td><td align="center"><input  name="c9" type="text"  onkeyup="clearNoNum(this)" size=10 />%</td></tr><tr><td align="center">配送车辆GPS使用率</td><td align="center"><input  name="c10" type="text"  onkeyup="clearNoNum(this)" size=10 /></td><td align="center"><input  name="c11" type="text"  onkeyup="clearNoNum(this)" size=10 />%</td><td align="center"><input  name="c12" type="text"  onkeyup="clearNoNum(this)" size=10 />%</td></tr><tr><td align="center">运输车辆百公里油耗（升）</td><td align="center"><input  name="c13" type="text"  onkeyup="clearNoNum(this)" size=10 /></td><td align="center"><input  name="c14" type="text"  onkeyup="clearNoNum(this)" size=10 /></td><td align="center"><input  name="c15" type="text"  onkeyup="clearNoNum(this)" size=10 /></td></tr><tr><th rowspan="4">综合指标</th><td align="center">环境管理体系认证情况</td><td align="center"><input  name="d1" type="text"  onkeyup="clearNoNum(this)" size=10 /></td><td align="center"><!-- <input  name="d2" type="text"  onkeyup="clearNoNum(this)" size=10 /> -->1</td><td align="center"><!-- <input  name="d3" type="text"  onkeyup="clearNoNum(this)" size=10 /> -->0</td></tr><tr><td align="center">物流费用率</td><td align="center"><input  name="d7" type="text"  onkeyup="clearNoNum(this)" size=10 /></td><td align="center"><input  name="d8" type="text"  onkeyup="clearNoNum(this)" size=10 />%</td><td align="center"><input  name="d9" type="text"  onkeyup="clearNoNum(this)" size=10/>%</td></tr><tr><td align="center">人才保障</td><td align="center"><input  name="d13" type="text"  onkeyup="clearNoNum(this)" size=10 /></td><td align="center">1
<!-- <select name="min"><option value="0">0</option><option value="1">1</option></select> --><!-- <input  name="d14" type="text"  onkeyup="clearNoNum(this)" size=10 /> --></td><td align="center">0<!-- <input  name="d15" type="text"  onkeyup="clearNoNum(this)" size=10 /> --><!-- <select name="max"><option value="1">1</option><option value="2">2</option></select> --></td></tr><tr><td align="center">客户绿色物流认同率</td><td align="center"><input  name="d16" type="text"  onkeyup="clearNoNum(this)" size=10 /></td><td align="center"><input  name="d17" type="text"  onkeyup="clearNoNum(this)" size=10 />%</td><td align="center"><input  name="d18" type="text"  onkeyup="clearNoNum(this)" size=10/>%</td></tr></table></fieldset><br/></center><input type="submit" value="重   置" class="btn btn-primary btn-me-reset"/><input type="submit" value="确   定" class="btn btn-primary btn-me-ok3"/><br/><form/><br/></div></div></body></html>