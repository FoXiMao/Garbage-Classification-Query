<?php
/**
 * 添加黑名单
**/
$mod='blank';
include("../include/common.php");
$title='添加新垃圾名称';
include './head.php';
if($islogin==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
?>
  <nav class="navbar navbar-fixed-top navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">导航按钮</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./">垃圾分类查询系统后台</a>
      </div><!-- /.navbar-header -->
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active">
            <a href="./"><span class="glyphicon glyphicon-user"></span> 后台首页</a>
          </li>
          <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-pushpin"></span> 垃圾管理<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="./add.php">添加新垃圾名称</a><li>
			  <li><a href="./list.php">垃圾分类列表</a></li>
			  <li><a href="./search.php">搜索垃圾名称</a><li>
            </ul>
          </li>
		  <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span> 系统管理<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="./siteset.php">site设置</a><li>
			  <li><a href="./passwd.php">修改密码</a></li>
            </ul>
          </li>
          <li><a href="./login.php?logout"><span class="glyphicon glyphicon-off"></span> 退出管理</a></li>
		   <li> <a href="/"><span class="glyphicon glyphicon-home"></span> 首页</a> </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
  </nav><!-- /.navbar -->
  <div class="container" style="padding-top:70px;">
    <div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
<?php
if(isset($_POST['name']) && isset($_POST['category'])){
$name=daddslashes($_POST['name']);
$category=daddslashes($_POST['category']);
$row=$DB->get_row("SELECT * FROM sort_list WHERE name='{$name}' limit 1");
if($row!='')exit("<script language='javascript'>alert('后台已存在该黑名单用户！');history.go(-1);</script>");
	$sql="insert into `sort_list` (`name`,`date`,`category`) values ('".$name."','".$date."','".$category."')";
	$DB->query($sql);
exit("<script language='javascript'>alert('添加成功');window.location.href='list.php';</script>");
} ?>
      <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title">添加新垃圾</h3></div>
        <div class="panel-body">
          <form action="./add.php" method="post" class="form-horizontal" role="form">
            <div class="input-group">
              <span class="input-group-addon">名称</span>
              <input type="text" name="name" value="<?=@$_POST['name']?>" class="form-control" placeholder="艾叶" autocomplete="off" required/>
            </div><br/>
			<!--<div class="input-group">
			<span class="input-group-addon">黑名单等级</span>
			<select name="level" class="form-control">
			<option value="1">1级-低</option>
			<option value="2">2级-中</option>
			<option value="3">3级-高</option>
			</select></div>--><br>
            <div class="input-group">
              <span class="input-group-addon">垃圾所属类别</span>
              <input type="text" name="category" value="<?=@$_POST['category']?>" class="form-control" placeholder="湿垃圾" autocomplete="off" required/>
            </div><br/>
            <div class="form-group">
              <div class="col-sm-12"><input type="submit" value="添加" class="btn btn-primary form-control"/></div>
            </div>
          </form>
        </div>
        <div class="panel-footer">
          <span class="glyphicon glyphicon-info-sign"></span> 加入数据库!
        </div>
      </div>
    </div>
  </div>