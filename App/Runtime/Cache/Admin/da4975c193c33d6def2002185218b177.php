<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>用户中心</title>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/main.css"/>
    <script type="text/javascript" src="__PUBLIC__/js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="container clearfix">
    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="#">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">百科列表</span></div>
        </div>
        <div class="result-wrap">
	          <div class="result-content">
	             <table class="result-tab" width="100%">
	                 <tr>
	                     <td width="8%">萌犬类别</td>
	                     <td><?php echo ($arr["type"]); ?></td>
	                 </tr>
	                 <tr>
	                     <td>图片</td>
	                     <td><img width="180" src="__PUBLIC__/upload/<?php echo ($arr["image"]); ?>" /></td>
	                 </tr>
	                 <tr>
	                     <td>描述</td>
	                     <td><?php echo ($arr['description']); ?></td>
	                 </tr>
	                 <tr>
	                     <td>添加时间</td>
	                     <td><?php echo ($arr["addTime"]); ?></td>
	                 </tr>					
	             </table>
	         </div>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>