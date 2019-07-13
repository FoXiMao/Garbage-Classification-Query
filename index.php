<?php
include("./include/common.php");
?>
<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <title><?php echo $sitename;?>-Citrons博客</title>
	<meta name="keywords" content="<?php echo $keywords;?>"/>
	<meta name="description" content="<?php echo $description;?>"/>
    <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	body{
		margin: 0 auto;
		text-align: center;
	}
	.container {
	  max-width: 580px;
	  padding: 15px;
	  margin: 0 auto;
	}
	</style>
</head>
<!--随机背景图方法：在文件夹 /images/bj/分别放入名为bj-1.....c.png的图片，再将下方注释删除将原来的body也删除-->
<!--<?php
$str = "123456789abc";
$bj .= $str[mt_rand(0, strlen($str)-1)];
?>
<body background="./images/bj/bj-<?php echo $bj;?>.jpg">-->
<body background="./images/bj/1.png">
<div class="container">    <div class="header">
        <ul class="nav nav-pills pull-right" role="tablist">
          <li role="presentation" class="active"><a href="./">查询</a></li>
          <li role="presentation"><a href="https://jq.qq.com/?_wv=1027&k=5hZ0bUH" target="_blank">联系站长</a></li>
        </ul>
      <a href="http://<?php echo $_SERVER['SERVER_NAME'];?>" style="text-decoration:none">  <h3 class="text-muted" align="left"><font color="#8968CD"><?php echo $sitename?></font></h3></a>
     </div><hr>
	 <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title">公告栏</h3></div>
		<ul class="list-group">
		<li class="list-group-item">本站免费提供垃圾分类查询服务</li>
		<li class="list-group-item">由于资料为站长一人临时收集，不能保证资料的完整性、地区准确性</li>
        <li class="list-group-item">欢迎大家给予补充及更正 </li>
        <li class="list-group-item">本站暂时未开启提交功能（我白天要搬砖QAQ）,发现有错误/遗漏请点击联系站长，鞠躬QWQ！</li>
<p></p><b><a class="btn btn-block btn-danger" data-toggle="collapse" data-parent="#accordion2" href="#faq1" aria-expanded="false">垃圾该如何分类？(戳我一下QAQ~~)</a></b><div id="faq1" class="accordion-body collapse" style="height: 0px;" aria-expanded="false">
<p class="bg-primary" style="background-color:#099dda;padding: 3px;"><img border="0" width="32" src="1.gif" />可回收物：是指适宜回收和资源化利用的生活垃圾，包括纸类、塑料、金属、玻璃、木料、织物和电子废弃物</p>
<p class="bg-primary" style="background-color:#ff0000;padding: 3px;"><img border="0" width="32" src="1.gif" />有害垃圾：是指对人体健康或者自然环境造成直接或潜在危害的生活垃圾，包括废电池、废弃药品、废杀虫剂、废水银产品等</p>
<p class="bg-primary" style="background-color:#58ff83;padding: 3px;"><img border="0" width="32" src="1.gif" />湿垃圾：即厨余垃圾、易腐垃圾、餐厨垃圾，指食材废料、剩菜剩饭、过期食品、瓜皮果核、花卉绿植、中药药渣等易腐的生物质生活废弃物</p>
<p class="bg-primary" style="background-color:#000000;padding: 3px;"><img border="0" width="32" src="1.gif" />干垃圾：即其他垃圾，是指除可回收物、有害垃圾、厨余垃圾（湿垃圾）以外的其它生活废弃物</p></div>
</marquee></a>
<p class="bg-primary" style="background-color:#FF9900;padding: 3px;"><img border="0" width="32" src="1.gif" />服务器性能有限，请大佬们轻点，毕竟咱们穷</p>
<ul class="list-group">
  <li class="list-group-item"><span class="glyphicon glyphicon-time"></span> <b>现在时间：</b> <?=$date?></li>
		</ul>
      </div>
	 <h3 class="form-signin-heading">输入需查询的垃圾名字</h3>
	 <form action="" class="form-sign" method="get">
	 <input type="text" class="form-control" name="name" placeholder="请输入垃圾名字" value=""><br>
	 <input type="submit" class="btn btn-primary btn-block" value="点击查询"><br/>
	 </form>
	 <p style="text-align:left">
<?php
if($name=$_GET['name']) {
	$name=$_GET['name'];
	$row=$DB->get_row("SELECT * FROM sort_list WHERE name='$name' limit 1");
	echo '<label>查询垃圾名称：'.$name.'</label><br>';
	if($row) {
		echo '
		<label>分&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;类：</label>
		<font color="blue">'.$row['category'].'</font><br>
		<label>添&nbsp;&nbsp;加&nbsp;&nbsp;时&nbsp;&nbsp;间&nbsp;：</label>
		<font color="blue">'.$row['date'].'</font><br>

		<label><font color="red">如果发现错误，我们希望您可以帮助我们完善垃圾分类库！QAQ~~谢谢，鞠躬！</font></label>';
		
?>
<!--没有任何想法，暂缓
<br><label>分享结果：</label>
<input type="text" style="width:350px;" class="shareUrl" onclick="this.select()" value="http://<?php echo $_SERVER['SERVER_NAME'];?>/qq-<?php echo $name;?>.html">-->
<?php
	}else{
		echo '<label><font color="green">抱歉！名称为:<font color="red">'.$name.'</font>尚未被录入！如果您知道<font color="red">'.$name.'</font>是什么垃圾，我们希望您可以联系我们，帮助我们完善垃圾分类库！QAQ~~谢谢，鞠躬！</font></label>';
	}
}
$DB->close();
?>
	 </p><hr><div class="container-fluid">
  <a href="https://jq.qq.com/?_wv=1027&k=5hZ0bUH" target="_blank" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-erase"></span> 联系站长</a>
  <!--<a href="./siteadmin/" target="_blank" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-user"></span> 管理</a>-->
  <a href="./siteadmin/"  class="btn btn-default btn-sm"><span class="glyphicon glyphicon-user"></span> 管理</a>
</div>
<p style="text-align:center">
<br><label>友情链接：</label><a href="https://www.citrons.cn" target="_blank">Citrons博客 </a>
</p></div>
</body>
</html>
