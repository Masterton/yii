<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<style type="text/css">
		.menu{
			width: 150px;
			height: 70px;
			border: 1px solid #999;
			float: left;
			text-align: center;
			line-height: 70px;
			list-style-type: none;
			color: #666;
			font-size: 24px;
		}
		#top{
			width: 1000px;
			height: 70px;
			margin: 0 auto;
		}
		#content{
			width: 1000px;
			height: 70px;
			margin: 0 auto;
		}
	</style>
</head>
<body>
	<div id="top">
		<ul>
			<li class="menu"><a href="<?php echo Yii::app()->createUrl('login/index'); ?>">首页</a></li>
			<li class="menu"><a href="<?php echo Yii::app()->createUrl('site/index'); ?>">简介</a></li>
			<li class="menu"><a href="<?php echo Yii::app()->createUrl('site/error'); ?>">描述</a></li>
			<li class="menu"><a href="<?php echo Yii::app()->createUrl('site/login'); ?>">登录</a></li>
			<li class="menu"><a href="<?php echo Yii::app()->createUrl('site/contact'); ?>">下载</a></li>
			<li class="menu"><a href="<?php echo Yii::app()->createUrl('site/index'); ?>">关于</a></li>
		</ul>
	</div>
	<div id="content">
		<?php echo $content;?>
	</div>	
</body>
</html>
