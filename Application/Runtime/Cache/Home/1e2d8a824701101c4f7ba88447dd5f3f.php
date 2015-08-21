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
	<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
	<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

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
		<div class="col-md-1"><a class="btn btn-sucess" href="https://localhost/single_love/index.php/Home/Home/Home/index" role="button">个人主页</a></div>
		<div class="col-md-1"><a class="btn btn-sucess" href="#" role="button">缘分搜索</a></div>
		<div class="col-md-1"><a class="btn btn-sucess" href="#" role="button">线下活动</a></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"></div>
		<div class="col-md-1"><a class="btn btn-sucess" href="#" role="button">修改资料</a></div>
		<div class="col-md-1"><a class="btn btn-sucess" href="#" role="button">使用帮助</a></div>
		<div class="col-md-1"><a class="btn btn-sucess" href="https://localhost/single_love/index.php/Home/Login/Login/index" role="button">退出</a></div>
		</div>
	</nav>
	
	<table class="table table-bordered">
		<tr class = "warning">
			<td>
				<div class="row">
					<div class="col-md-3"><img src="<?php echo ($photo['head_ptoto']); ?>" alt="..." class="img-rounded"  width="100%" height="150"></div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-3">xxx</div>
							<div class="col-md-3">Id:<?php echo ($photo['members_id']); ?></div>
							<div class="col-md-2">在线</div>
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
					<div class="col-md-3"><img src="/single_love/Application/Home/View/Personal/Personal/mode/d.png" alt="..." class="img-rounded"  width="100%" height="150"></div>
				</div>
				<div class="row">
					<div class="col-md-2"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal2" data-    whatever="@mdo">相册</button></div>
					<div class="col-md-2"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">发信</button></div>
					<div class="col-md-2"><a class="btn btn-info" href="https://localhost/single_love/index.php/Home/Look/Followers/index/user_id/<?php echo ($photo['members_id']); ?>">加关注</a></div>
					<div class="col-md-2"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo">送礼物</button></div>
					<div class="col-md-2"><a class="btn btn-info" href="#" role="button">举报</a></div>
					<div class="col-md-2"><a class="btn btn-info" href="#" role="button">加黑名单</a></div>
				</div>
			</td>
		</tr>

	</table>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">发送邮件</h4>
      </div>
      <div class="modal-body">

        <form action="/single_love/index.php/Home/Email/Email/email" method="post">
		<input type = "hidden" name = "user_id" value = <?php echo ($photo['members_id']); ?>>
          <div class="form-group">
            <label for="recipient-name" class="control-label"><?php echo ($photo['members_id']); ?></label>
          </div>
			<div class="form-group">
             <label for="recipient-name" class="control-label"><?php echo ($data['age']); ?>岁,<?php echo ($data['gender']); ?>,<?php echo ($data['schooling']); ?>学历,来自<?php echo ($data[home]); ?>,原籍<?php echo ($data['place']); ?></label>
		   </div>

          <div class="form-group">
            <label for="message-text" class="control-label">正文:</label>
            <textarea class="form-control" name="email" id="message-text" rows = "8"></textarea>
          </div>
     
      </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
		<input type="submit" value="发送邮件" class="btn btn-primary">
      </div>
		</form>
    </div>
  </div>
</div>




<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">发送礼物</h4>
      </div>
      <div class="modal-body">

        <form action="/single_love/index.php/Home/Gift/Gift/gift/userid/<?php echo ($photo['members_id']); ?>" method="post">
		<input type = "hidden" name = "user_id" value = <?php echo ($photo['members_id']); ?>>
          <div class="form-group">
            <label for="recipient-name" class="control-label"><?php echo ($photo['members_id']); ?></label>
          </div>
			<div class="form-group">
             <label for="recipient-name" class="control-label"><?php echo ($data['age']); ?>岁,<?php echo ($data['gender']); ?>,<?php echo ($data['schooling']); ?>学历,来自<?php echo ($data[home]); ?>,原籍<?php echo ($data['place']); ?></label>
		   </div>

          <div class="form-group">
            <label for="message-text" class="control-label">礼物:</label>
          </div>
			<div class="col-md-12">
						<table class="table table-bordered">
							<tr>
								<td>
										<?php $__FOR_START_828294229__=0;$__FOR_END_828294229__=$countGift;for($i=$__FOR_START_828294229__;$i < $__FOR_END_828294229__;$i+=1){ ?><div class="row">
												<div class="col-md-1"></div>
 				                   				<div class="col-md-5"><img src="<?php echo ($gift[$i]['road']); ?>" alt="..." class="img-rounded"  width="100%" height="150"></a></div>
												<div class="col-md-5"><img src="<?php echo ($gift[$i += 1]['road']); ?>" alt="..." class="img-rounded"  width="100%" height="150"></a></div>
											</div>
											<div class = "row">
												<div class="col-md-2"></div>
												<div class="col-md-6">礼物<?php echo ($gift[$i-1]['gift_id']); ?> <input type = "radio", name = "gift", value = <?php echo ($gift[$i-1]['gift_id']); ?>></div>
												<div class="col-md-4">礼物<?php echo ($gift[$i]['gift_id']); ?> <input type = "radio", name = "gift", value = <?php echo ($gift[$i]['gift_id']); ?>></div>
											</div><?php } ?>
									
								</td>
							</tr>
						</table>
						</div>
				<div class="form-group">
	             <label for="message-text" class="control-label">留言:</label>
	  	         <textarea class="form-control" name="message" id="message-text" rows = "4"></textarea>
               </div>
      </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
		<input type="submit" value="发送礼物" class="btn btn-primary">
      </div>
	</form>
    </div>
  </div>
</div>



<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">相册</h4>
		<div class="modal-footer">

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo ($photo['life_photo_1']); ?>" alt="...">
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item">
      <img src="<?php echo ($photo['life_photo_2']); ?>" alt="...">
      <div class="carousel-caption">
        
      </div>
    </div>
	<div class="item">
      	<img src="<?php echo ($photo['life_photo_3']); ?>" alt="...">
		<div class="carousel-caption">
		</div>
	</div>
	<div class="item">
		<img src="<?php echo ($photo['life_photo_4']); ?>" alt="...">
		<div class="carousel-caption">
		</div>
	</div>
	<div class="item">
    	<img src="<?php echo ($photo['life_photo_6']); ?>" alt="...">
		 <div class="carousel-caption">
		</div>
	</div>
	<div class="item">
		<img src="<?php echo ($photo['life_photo_6']); ?>" alt="...">
		<div class="carousel-caption">
       	</div>
	</div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
			<button type="button" class="btn btn-primary" data-dismiss="modal">关闭</button>
		</div>
      </div>
    </div>
  </div>
</div>


	<table class="table table-bordered">
		<tr class = "warning">
			<td>
				<div class="row">
					<div class="col-md-8">
						<table class="table table-bordered">
							<tr class = "success">
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
							<tr class = "success">
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
							<tr class = "success">
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
							<tr class = "success">
								<td>
									<div class="row">
										<div class="col-md-12">&hearts;工作学习</div>
									</div>
									<div class="row">
										<div class="col-md-3">单位类型：</div>
										<div class="col-md-3"><?php echo ($unit['unit']); ?></div>
										<div class="col-md-3">职业职位：</div>
										<div class="col-md-3"><?php echo ($unit['professional']); ?></div>
									</div>
									<div class="row">
										<div class="col-md-3">工作状况：</div>
										<div class="col-md-3"><?php echo ($unit['work']); ?></div>
										<div class="col-md-3">工作调动：</div>
										<div class="col-md-3"><?php echo ($unit['move']); ?></div>
									</div>
									<div class="row">
										<div class="col-md-3">毕业学校：</div>
										<div class="col-md-3"><?php echo ($unit['school']); ?></div>
										<div class="col-md-3">专业类型：</div>
										<div class="col-md-3"><?php echo ($unit['major']); ?></div>
									</div>
									<div class="row">
										<div class="col-md-3">语言能力：</div>
										<div class="col-md-3"><?php echo ($unit['language']); ?></div>
										<div class="col-md-3">事业家庭：</div>
										<div class="col-md-3"><?php echo ($unit['family']); ?></div>
									</div>
								</td>
							</tr>
						</table>
						<table class="table table-bordered">
							<tr class = "success">
								<td>
									<div class="row">
										<div class="col-md-12">&hearts;生活方式</div>
									</div>
									<div class="row">
										<div class="col-md-3">吸烟：</div>
										<div class="col-md-3"><?php echo ($life['smoking']); ?></div>
										<div class="col-md-3">锻炼习惯：</div>
										<div class="col-md-3"><?php echo ($life['exercise']); ?></div>
									</div>
									<div class="row">
										<div class="col-md-3">饮酒：</div>
										<div class="col-md-3"><?php echo ($life['drinking']); ?></div>
										<div class="col-md-3">饮食习惯：</div>
										<div class="col-md-3"><?php echo ($life['diet']); ?></div>
									</div>
									<div class="row">
										<div class="col-md-3">逛街购物：</div>
										<div class="col-md-3"><?php echo ($life['shopping']); ?></div>
										<div class="col-md-3">宗教信仰：</div>
										<div class="col-md-3"><?php echo ($life['religious']); ?></div>
									</div>
									<div class="row">
										<div class="col-md-3">作息时间：</div>
										<div class="col-md-3"><?php echo ($life['worktime']); ?></div>
										<div class="col-md-3">交际圈子：</div>
										<div class="col-md-3"><?php echo ($life['social']); ?></div>
									</div>
									<div class="row">
										<div class="col-md-3">最大消费：</div>
										<div class="col-md-3"><?php echo ($life['consumption']); ?></div>
										<div class="col-md-3">家中排行：</div>
										<div class="col-md-3"><?php echo ($life['ranking']); ?></div>
									</div>
									<div class="row">
										<div class="col-md-3">父母情况：</div>
										<div class="col-md-3"><?php echo ($life['parents']); ?></div>
										<div class="col-md-3">是否要孩子：</div>
										<div class="col-md-3"><?php echo ($life['child']); ?></div>
									</div>
									<div class="row">
										<div class="col-md-3">家务水平等级：</div>
										<div class="col-md-3"><?php echo ($life['home']); ?></div>
										<div class="col-md-3">家务分配情况：</div>
										<div class="col-md-3"><?php echo ($life['distribution']); ?></div>
									</div>
									<div class="row">
										<div class="col-md-3">考虑何时结婚：</div>
										<div class="col-md-3"><?php echo ($life['married']); ?></div>
										<div class="col-md-3">宠物喜欢程度：</div>
										<div class="col-md-3"><?php echo ($life['pet']); ?></div>
									</div>
								</td>
							</tr>
						</table>

					</div>
					<div class="col-md-4">
						<table class="table table-bordered">
							<tr class = "success">
								<td>
									<div class="row">
										<div class="col-md-2"></div>
										<div class="col-md-8"><h4>最新加入的会员</h4></div>
										<div class="col-md-2"></div>
									</div>
										<?php $__FOR_START_855672313__=0;$__FOR_END_855672313__=$usercount;for($i=$__FOR_START_855672313__;$i < $__FOR_END_855672313__;$i+=1){ ?><div class="row">
												<div class="col-md-1"></div>
 				                   				<div class="col-md-7"><a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user1[$i]['id']); ?>"><img src="<?php echo ($user1[$i]['head_photo']); ?>" alt="..." class="img-rounded"  width="100%" height="150"></a></div>
												<div class="col-md-4">
													<div class="row">
														<div class="col-md-12"><?php echo ($user1[$i]['nickname']); ?></div>
													</div>
													<div class="row">
														<div class="col-md-12"><?php echo ($user1[$i]['age']); ?>岁,<?php echo ($user1[$i]['height']); ?>cm</div>
													</div>
													<div class="row">
														<div class="col-md-12"><?php echo ($user1[$i]['professional']); ?></div>
													</div>
													<div class="row">
														<div class="col-md-12"><?php echo ($user1[$i]['home']); ?></div>
													</div>
													<div class="row">
														<div class="col-md-12"></div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-4">&nbsp;</div>
											</div><?php } ?>
									</div>
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