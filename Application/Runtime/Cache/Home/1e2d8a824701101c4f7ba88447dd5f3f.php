<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="/single_love/Application/Home/View/Personal/Personal/mode/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
<div class="container">
	<div class="row">
		<table class="table">
		</table>
	</div>
	<div class="row">
		<div class="col-md-3"><img src="/single_love/Application/Home/View/Personal/Personal/mode/a.jpg" alt="..." class="img-rounded"  width="100%" height="100"></div>
		<div class="col-md-6"><img src="/single_love/Application/Home/View/Personal/Personal/mode/b.jpg" alt="..." class="img-rounded"  width="100%" height="100"></div>
		<div class="col-md-3"><img src="/single_love/Application/Home/View/Personal/Personal/mode/c.jpg" alt="..." class="img-rounded"  width="100%" height="100"></div>
	</div>

	<div class="row">
		<table class="table">
		</table>
	</div>
	<nav class="navbar navbar-inverse container-fluid">
		<div class="row">
		<div class="col-md-1"><a class="btn btn-default" href="#" role="button">个人主页</a></div>
		<div class="col-md-1"><a class="btn btn-default" href="#" role="button">缘分搜索</a></div>
		<div class="col-md-1"><a class="btn btn-default" href="#" role="button">线下活动</a></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1">欢迎您:</div>
		<div class="col-md-1">{}</div>
		<div class="col-md-1"><a class="btn btn-default" href="#" role="button">修改资料</a></div>
		<div class="col-md-1"><a class="btn btn-default" href="#" role="button">使用帮助</a></div>
		<div class="col-md-1"><a class="btn btn-default" href="#" role="button">退出</a></div>
		</div>
	</nav>
	
	<table class="table table-bordered">
		<tr>
			<td>
				<div class="row">
					<div class="col-md-3"><img src="<?php echo ($photo['head_ptoto']); ?>" alt="..." class="img-rounded"  width="100%" height="150"></div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-2">xxx</div>
							<div class="col-md-2">id:</div>
							<div class="col-md-2">在线</div>
							<div class="col-md-2"></div>
							<div class="col-md-4"><?php echo ($login_time); ?></div>
						</div>
						<div class="row">
							<div class="col-md-12">认证信息是会员自愿提供，目前暂无法确保100%真实，请理性对待</div>
						</div>
						<div class="row">
							<div class="col-md-12"><?php echo ($data['age']); ?>岁,<?php echo ($data['gender']); ?>,<?php echo ($data['schooling']); ?>学历,来自<?php echo ($data[home]); ?>,原籍<?php echo ($data['place']); ?></div>
						</div>
						<div class="row">
							<div class="col-md-3">身高：</div>
							<div class="col-md-3"><?php echo ($data['height']); ?>cm</div>
							<div class="col-md-3">出生年月：</div>
							<div class="col-md-3"><?php echo ($data['birth']); ?></div>
						</div>
						<div class="row">
							<div class="col-md-3">月薪：</div>
							<div class="col-md-3"><?php echo ($data['income']); ?></div>
							<div class="col-md-3">居住情况：</div>
							<div class="col-md-3"><?php echo ($data['live']); ?></div>
						</div>
						<div class="row">
							<div class="col-md-3">星座：</div>
							<div class="col-md-3"><?php echo ($data['constellation']); ?></div>
							<div class="col-md-3">购车情况：</div>
							<div class="col-md-3"><?php echo ($data['car']); ?></div>
						</div>
						<div class="row">
							<div class="col-md-3">血型：</div>
							<div class="col-md-3"><?php echo ($data['type']); ?></div>
							<div class="col-md-3">工作地域：</div>
							<div class="col-md-3"><?php echo ($data['work']); ?></div>
						</div>
					</div>
					<div class="col-md-3"><img src="<?php echo ($photo['head_ptoto']); ?>" alt="..." class="img-rounded"  width="100%" height="150"></div>
				</div>
				<div class="row">
					<div class="col-md-2"><a class="btn btn-default" href="#" role="button">相册</a></div>
					<div class="col-md-2"><a class="btn btn-default" href="#" role="button">发信</a></div>
					<div class="col-md-2"><a class="btn btn-default" href="#" role="button">加关注</a></div>
					<div class="col-md-2"><a class="btn btn-default" href="#" role="button">送礼物</a></div>
					<div class="col-md-2"><a class="btn btn-default" href="#" role="button">举报</a></div>
					<div class="col-md-2"><a class="btn btn-default" href="#" role="button">加黑名单</a></div>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-bordered">
		<tr>
			<td>
				<div class="row">
					<div class="col-md-8">
						<table class="table table-bordered">
							<tr>
								<td>
									<div class="row">
										<div class="col-md-12">&hearts;内心独白</div>
									</div>
									<div class="row">
										
										<div class="clearfix visible-xs-block"></div>
										<div class="col-md-12">
											<blockquote>
												<p><?php echo ($lnner['lnner']); ?></p>
											</blockquote>
										</div>
									</div>
								</td>
							</tr>
						</table>
						<table class="table table-bordered">
							<tr>
								<td>
									<div class="row">
										<div class="col-md-12">&hearts;择偶条件</div>
									</div>
									<div class="row">
										<div class="col-md-3">年龄：</div>
										<div class="col-md-3"><?php echo ($choose['agea']); ?>--<?php echo ($choose['ageb']); ?></div>
										<div class="col-md-3">婚姻状况：</div>
										<div class="col-md-3"><?php echo ($choose['hunyin']); ?></div>
									</div>
									<div class="row">
										<div class="col-md-3">身高：</div>
										<div class="col-md-3"><?php echo ($choose['heighta']); ?>--<?php echo ($choose['heightb']); ?>cm</div>
										<div class="col-md-3">有无照片：</div>
										<div class="col-md-3"><?php echo ($choose['photo']); ?></div>
									</div>
									<div class="row">
										<div class="col-md-3">学历：</div>
										<div class="col-md-3"><?php echo ($choose['school']); ?></div>
										<div class="col-md-3">工作处所：</div>
										<div class="col-md-3"><?php echo ($choose['work']); ?></div>
									</div>
								</td>
							</tr>
						</table>
						<table class="table table-bordered">
							<tr>
								<td>
									<div class="row">
										<div class="col-md-12">&hearts;外貌特征</div>
									</div>
									<div class="row">
										<div class="col-md-3">身高：</div>
										<div class="col-md-3"><?php echo ($data['height']); ?>cm</div>
										<div class="col-md-3">健康状况：</div>
										<div class="col-md-3"><?php echo ($appearance['health']); ?></div>
									</div>
									<div class="row">
										<div class="col-md-3">体重：</div>
										<div class="col-md-3"><?php echo ($appearance['weight']); ?>kg</div>
										<div class="col-md-3">外貌自评：</div>
										<div class="col-md-3"><?php echo ($appearance['evaluation']); ?></div>
									</div>
									<div class="row">
										<div class="col-md-3">体型：</div>
										<div class="col-md-3"><?php echo ($appearance['size']); ?></div>
										<div class="col-md-3">性格特征：</div>
										<div class="col-md-3"><?php echo ($appearance['disposition']); ?></div>
									</div>
									<div class="row">
										<div class="col-md-3">脾气：</div>
										<div class="col-md-3"><?php echo ($appearance['temper']); ?></div>
										<div class="col-md-3">穿衣风格：</div>
										<div class="col-md-3"><?php echo ($appearance['clothes']); ?></div>
									</div>

								</td>
							</tr>
						</table>
						<table class="table table-bordered">
							<tr>
								<td>
									<div class="row">
										<div class="col-md-12">&hearts;工作学习</div>
									</div>
									<div class="row">
										<div class="col-md-3">单位类型：</div>
										<div class="col-md-3"></div>
										<div class="col-md-3">职业职位：</div>
										<div class="col-md-3"></div>
									</div>
									<div class="row">
										<div class="col-md-3">工作状况：</div>
										<div class="col-md-3"></div>
										<div class="col-md-3">工作调动：</div>
										<div class="col-md-3"></div>
									</div>
									<div class="row">
										<div class="col-md-3">毕业学校：</div>
										<div class="col-md-3"></div>
										<div class="col-md-3">专业类型：</div>
										<div class="col-md-3"></div>
									</div>
									<div class="row">
										<div class="col-md-3">语言能力：</div>
										<div class="col-md-3"></div>
										<div class="col-md-3">事业家庭：</div>
										<div class="col-md-3"></div>
									</div>
								</td>
							</tr>
						</table>
						<table class="table table-bordered">
							<tr>
								<td>
									<div class="row">
										<div class="col-md-12">&hearts;生活方式</div>
									</div>
									<div class="row">
										<div class="col-md-3">吸烟：</div>
										<div class="col-md-3"></div>
										<div class="col-md-3">锻炼习惯：</div>
										<div class="col-md-3"></div>
									</div>
									<div class="row">
										<div class="col-md-3">饮酒：</div>
										<div class="col-md-3"></div>
										<div class="col-md-3">饮食习惯：</div>
										<div class="col-md-3"></div>
									</div>
									<div class="row">
										<div class="col-md-3">逛街购物：</div>
										<div class="col-md-3"></div>
										<div class="col-md-3">宗教信仰：</div>
										<div class="col-md-3"></div>
									</div>
									<div class="row">
										<div class="col-md-3">作息时间：</div>
										<div class="col-md-3"></div>
										<div class="col-md-3">交际圈子：</div>
										<div class="col-md-3"></div>
									</div>
									<div class="row">
										<div class="col-md-3">最大消费：</div>
										<div class="col-md-3"></div>
										<div class="col-md-3">家中排行：</div>
										<div class="col-md-3"></div>
									</div>
									<div class="row">
										<div class="col-md-3">父母情况：</div>
										<div class="col-md-3"></div>
										<div class="col-md-3">是否要孩子：</div>
										<div class="col-md-3"></div>
									</div>
									<div class="row">
										<div class="col-md-3">家务水平等级：</div>
										<div class="col-md-3"></div>
										<div class="col-md-3">家务分配情况：</div>
										<div class="col-md-3"></div>
									</div>
									<div class="row">
										<div class="col-md-3">考虑何时结婚：</div>
										<div class="col-md-3"></div>
										<div class="col-md-3">宠物喜欢程度：</div>
										<div class="col-md-3"></div>
									</div>
								</td>
							</tr>
						</table>

					</div>
					<div class="col-md-4">
						<table class="table table-bordered">
							<tr>
								<td>
								</td>
							</tr>
						</table>
					</div>	
				</div>
			</td>
		</tr>
	</table>
	
</div>
 </body>
</html>