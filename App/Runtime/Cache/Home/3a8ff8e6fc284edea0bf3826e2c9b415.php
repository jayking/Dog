<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<title>萌犬百科</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Play-Offs Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!meta charset utf="8">
		<!--bootstrap-->
		<link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<!--coustom css-->
		<link href="__PUBLIC__/css/style.css" rel="stylesheet" type="text/css"/>
		<!--script-->
		<script src="__PUBLIC__/js/jquery-2.1.4.min.js"></script>
		<script src="__PUBLIC__/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/move-top.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/easing.js"></script>
		<!--script-->
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
		</script>
	</head>
	<body>
		<!--header-part-->
		<!--header-part-->
		<div class="banner-background" id="to-top">
			<div class="container">
				<div class="nav-back">
					<div class="navigation">
						<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
							  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li><a class="active" href="__APP__/Home/Index/index">萌犬资讯<span class="sr-only">(current)</span></a></li>
									<li><a href="__APP__/Home/Doc/index">萌犬医生</a></li>
									<li >
									  <a href="__APP__/Home/Baike/index" >萌犬百科</a>
									</li>
									<li><a href="__APP__/Home/Zhidao/index">萌犬知道</a></li>
									<li><a href="__APP__/Home/Renling/index">萌犬认领</a></li>
									
								</ul>
							</div><!-- /.navbar-collapse -->
								<div class="clearfix"></div>	
							<div class="clearfix"></div>
						</nav>
						<div class="clearfix"></div>
					</div>
					<div class="logo">
						<h1><a href="index.html">萌犬<span class="hlf"> 之家</span></a></h1>
					</div>
					<div class="banner-slider">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
						  </ol>
						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
							<div class="item active">
							  <img src="__PUBLIC__/images/1.jpg" alt="dog" class="img-responsive">
							  <div class="carousel-caption ch">
								<a href="__APP__/Home/Index/index"><h3>冠能飞盘犬中国挑战大赛 </h3>
								<p>召集令-2016年中国赛区飞盘犬大赛即将在上海举行</p></a>
							  </div>
							</div>
							<div class="item">
							  <img src="__PUBLIC__/images/4.jpg" alt="cat" class="img-responsive">
							  <div class="carousel-caption ch">
								<a href="__APP__/Home/Index/index"><h3>中国流浪狗关爱计划</h3>
								<p>皇家宠物食品启动“中国流浪猫犬关爱计划”</p></a>
							  </div>
							</div>
							<div class="item">
							  <img src="__PUBLIC__/images/2.jpg" alt="wolfdog" class="img-responsive">
							  <div class="carousel-caption ch">
								<a href="__APP__/Home/Index/index"><h3>好有爱，宝宝与狗神同步 </h3>
								<p>有个摄影师妈妈是个什么样的体验呢？快来看，萌哭了</p></a>
							  </div>
							</div>
						  </div>
						  <!-- Controls -->
						  <a class="carousel-control left" href="#myCarousel" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control right" href="#myCarousel" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						  </a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--header-->
		<!--services-->
			<div class="services">
				<div class="container">
					<div class="service-list">
						<h3>萌犬百科</h3>
						
						<div class="col-md-8">
							<link rel="stylesheet" href="css/swipebox.css">
							<script src="js/jquery.swipebox.min.js"></script> 
							<script type="text/javascript">
								jQuery(function($) {
									$(".swipebox").swipebox();
								});
							</script>
				
						<div class="gallery-grids" >
							<?php if(is_array($baikeArr)): foreach($baikeArr as $key=>$v): ?><a href="__APP__/Home/Baike/detail/b/<?php echo ($v["baikeId"]); ?>">
								<div class="col-md-4 gal-settings">
								<img src="__PUBLIC__/upload/<?php echo ($v["image"]); ?>" class="img-responsive" alt="/">
								<p><?php echo ($v["type"]); ?></p>
								</div>
								
								</a><?php endforeach; endif; ?>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		<!--services-->
		<!--footer-->
			<div class="footer">
				<div class="container">
				<div class="col-md-6 mrg1">
					<div class="col-md-4 brk4">
						<div class="about">
							<h4>关于我们</h4>
							<ul>
								<li><a href="about.html">公司信息</a></li>
								<li><a href="#">服务</a></li>
								<li><a href="services.html">团队</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-md-4 brk4">
						<div class="advice">
							<h4>问题建议</h4>
							<ul>
								<li><a href="#">常见问题解答</a></li>
								<li><a href="#">论坛</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-md-4 brk4">
						<div class="join-in">
							<h4>加入我们</h4>
							<ul>
								<li><a href="#">我们的信息</a></li>
								
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-3 brk5">
					<div class="follow-us">
						<h4>关注我们</h4>
						<ul>
							<li><a href="#" class="fb"></a></li>
							<li><a href="#" class="twt"></a></li>
							<li><a href="#" class="gpls"></a></li>
							<li><a href="#" class="pint"></a></li>
							<li><a href="#" class="lnkdin"></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 brk5">
					<div class="copy-rt">
						<h4>版权所有</h4>
						<p>没有最好，只有更好，为您的萌犬找个家 <a href="http://www.cssmoban.com/" target="_blank" title="萌犬之家">萌犬之家</a>  </p>
					</div>
				</div>
				<div class="clearfix"></div>
				</div>
			</div>
		<!--footer-->
		<!---->
		<script type="text/javascript">
				$(document).ready(function() {
						/*
						var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
						};
						*/
				$().UItoTop({ easingType: 'easeOutQuart' });
		});
		</script>
		<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		<!----> 
	</body>
</html>