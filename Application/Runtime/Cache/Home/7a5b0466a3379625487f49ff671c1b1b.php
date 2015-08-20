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
		<div class="col-md-1"><a class="btn btn-sucess" href="https://localhost/single_love/index.php/Home/Information/Information/index" role="button">修改资料</a></div>
		<div class="col-md-1"><a class="btn btn-sucess" href="#" role="button">使用帮助</a></div>
		<div class="col-md-1"><a class="btn btn-sucess" href="https://localhost/single_love/index.php/Home/Login/Login/index" role="button">退出</a></div>
		</div>
	</nav>
<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered">
			<tr class = "warning">
				<td>
					<div class="row">
  					<div class="col-md-3">
							<table class="table table-bordered">
								<tr class = "success">
									<td>
										<div class = "row">
											<div class="col-md-11">
												<img src="<?php echo ($head['head_ptoto']); ?>" alt="没有上传头像" class="img-rounded"  width="100%" height="150">
											</div>
											<div class="col-md-1"></div>
										</div>
										<div class = "roe">
												<div class="col-md-1"><h3>ID:</h3></div>
												<div class="col-md-10"><h3><?php echo ($id); ?></h3></div>
										</div>
										<div class = "row">
											<div class="col-md-0.5"></div>
											<div class="col-md-11">
												<a href="#"><button type="button" class="btn btn-default btn-lg btn-block">更改头像</button></a>
											</div>
										</div>
										<div class = "row">
											<div class="col-md-0.5"></div>
											<div class="col-md-11">
												<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($id); ?>"><button type="button" class="btn btn-default btn-lg btn-block">我的资料</button></a>
											</div>
										</div>

										<div class = "row">
 										 	<div class="col-md-0.5"></div>
										 	<div class="col-md-11">
 												<a href="https://localhost/single_love/index.php/Home/Email/Lookemail/index">
													<button class="btn btn-default btn-lg btn-block" type="button">收件箱 <span class="badge"><?php echo ($count); ?></span></button>
												</a>
      	              </div>
 		                </div>
										<div class = "row">
 											<div class="col-md-0.5"></div>
 												<div class="col-md-11">
 													<a href="https://localhost/single_love/index.php/Home/Look/Look/index">
 														<button class="btn btn-default btn-lg btn-block" type="button">谁看过我<span class="badge"><?php echo ($look_count); ?></span></button>
 												</a>
 											</div>
										</div>
										<div class = "row">
											<div class="col-md-0.5"></div>
											<div class="col-md-11">
												<a href="#"><button type="button" class="btn btn-default btn-lg btn-block">修改密码</button></a>
											</div>
										</div>

										<div class = "row">
											<div class="col-md-0.5"></div>
												<div class="col-md-11">
													<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  													<div class="panel panel-default">
    													<div class="panel-heading" role="tab" id="headingOne">
      													<h4 class="panel-title">
        													<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         														<button type="button" class="btn btn-default btn-lg btn-block">信件收发</button>
        													</a>
      													</h4>
    											</div>
    										<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      										<div class="panel-body">
														<div class = "row">
 						                  <div class="col-md-0.5"></div>
 								              <div class="col-md-11">
 									            	<a href="https://localhost/single_love/index.php/Home/Email/Lookemail/index">
 										            	<button class="btn btn-default btn-lg btn-block" type="button">我的收件箱 <span class="badge"><?php echo ($count); ?></span></button>
 														 	</a>
        	                	</div>
	     		                 </div>

													<div class = "row">
											     <div class="col-md-0.5"></div>
									            <div class="col-md-11">
							                <a href="https://localhost/single_love/index.php/Home/Email/Lookemail/index">
																<button class="btn btn-default btn-lg btn-block" type="button">我的发件箱</button>
															</a>
														</div>
													</div>
													<div class = "row">
											     <div class="col-md-0.5"></div>
									            <div class="col-md-11">
							                <a href="https://localhost/single_love/index.php/Home/Email/Lookemail/index">
																<button class="btn btn-default btn-lg btn-block" type="button">系统邮件</button>
															</a>
														</div>
													</div>

      										</div>
    										</div>
  										</div>
  										<div class="panel panel-default">
    										<div class="panel-heading" role="tab" id="headingTwo">
      										<h4 class="panel-title">
        										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          									<button type="button" class="btn btn-default btn-lg btn-block">交往记录</button>
        										</a>
      									</h4>
    									</div>
    									<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      								<div class="panel-body">
												<div class = "row">
											     <div class="col-md-0.5"></div>
									            <div class="col-md-11">
							                <a href="https://localhost/single_love/index.php/Home/Look/Look/index">
																<button class="btn btn-default btn-lg btn-block" type="button">谁看过我<span class="badge"><?php echo ($look_count); ?></span></button>
															</a>
														</div>
													</div>
													<div class = "row">
											     <div class="col-md-0.5"></div>
									            <div class="col-md-11">
							                <a href="https://localhost/single_love/index.php/Home/Look/Look/index">
																<button class="btn btn-default btn-lg btn-block" type="button">我看过的人</button>
															</a>
														</div>
													</div>
													<div class = "row">
											     <div class="col-md-0.5"></div>
									            <div class="col-md-11">
							                <a href="https://localhost/single_love/index.php/Home/Look/Look/index">
																<button class="btn btn-default btn-lg btn-block" type="button">谁关注我<span class="badge"><?php echo ($followers); ?></span></button>
															</a>
														</div>
													</div>
													<div class = "row">
											     <div class="col-md-0.5"></div>
									            <div class="col-md-11">
							                <a href="https://localhost/single_love/index.php/Home/Look/Look/index">
																<button class="btn btn-default btn-lg btn-block" type="button">我关注的人</button>
															</a>
														</div>
													</div>
													<div class = "row">
											     <div class="col-md-0.5"></div>
									            <div class="col-md-11">
							                <a href="https://localhost/single_love/index.php/Home/Look/Look/index">
																<button class="btn btn-default btn-lg btn-block" type="button">我的黑名单</button>
															</a>
														</div>
													</div>												
      								</div>
    							</div>
  							</div>
  							<div class="panel panel-default">
    							<div class="panel-heading" role="tab" id="headingThree">
      							<h4 class="panel-title">
        							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          						<button type="button" class="btn btn-default btn-lg btn-block">礼物增收</button>
        							</a>
      						</h4>
    						</div>
    						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      						<div class="panel-body">
									<div class = "row">
											<div class="col-md-0.5"></div>
											<div class="col-md-11">
												<a href="https://localhost/single_love/index.php/Home/Gift/GetGift/index"><button type="button" class="btn btn-default btn-lg btn-block">我收到的礼物<span class="badge"><?php echo ($giftcount); ?></span></button></a>
											</div>
										</div>

										<div class = "row">
											<div class="col-md-0.5"></div>
											<div class="col-md-11">
												<a href="https://localhost/single_love/index.php/Home/Gift/GetGift/index"><button type="button" class="btn btn-default btn-lg btn-block">我送出的礼物</button></a>
											</div>
										</div>

      					</div>
    					</div>
  					</div>
				<!--</div>-->
		<!--	</div>
		</div>-->

							<div class="panel panel-default">
    										<div class="panel-heading" role="tab" id="headingFour">
      										<h4 class="panel-title">
        										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          								<button type="button" class="btn btn-default btn-lg btn-block">完善资料</button>
        										</a>
      									</h4>
    									</div>
    									<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      								<div class="panel-body">
												<div class = "row">
											     <div class="col-md-0.5"></div>
									            <div class="col-md-11">
							                <a href="https://localhost/single_love/index.php/Home/Information/Information/index">
																<button class="btn btn-default btn-lg btn-block" type="button">基本资料</button>
															</a>
														</div>
													</div>
													<div class = "row">
											     <div class="col-md-0.5"></div>
									            <div class="col-md-11">
							                <a href="https://localhost/single_love/index.php/Home/Information/Information/index">
																<button class="btn btn-default btn-lg btn-block" type="button">我的相册</button>
															</a>
														</div>
													</div>
													<div class = "row">
											     <div class="col-md-0.5"></div>
									            <div class="col-md-11">
							                <a href="https://localhost/single_love/index.php/Home/Information/Information/index">
																<button class="btn btn-default btn-lg btn-block" type="button">内心独白</button>
															</a>
														</div>
													</div>
													<div class = "row">
											     <div class="col-md-0.5"></div>
									            <div class="col-md-11">
							                <a href="https://localhost/single_love/index.php/Home/Information/Information/index">
																<button class="btn btn-default btn-lg btn-block" type="button">联系方式</button>
															</a>
														</div>
													</div>
													<div class = "row">
											     <div class="col-md-0.5"></div>
									            <div class="col-md-11">
							                <a href="https://localhost/single_love/index.php/Home/Information/Information/index">
																<button class="btn btn-default btn-lg btn-block" type="button">外貌性格</button>
															</a>
														</div>
													</div>												
		
													<div class = "row">
											     <div class="col-md-0.5"></div>
									            <div class="col-md-11">
							                <a href="https://localhost/single_love/index.php/Home/Information/Information/index">
																<button class="btn btn-default btn-lg btn-block" type="button">工作学习</button>
															</a>
														</div>
													</div>
													<div class = "row">
											     <div class="col-md-0.5"></div>
									            <div class="col-md-11">
							                <a href="https://localhost/single_love/index.php/Home/Information/Information/index">
																<button class="btn btn-default btn-lg btn-block" type="button">生活方式</button>
															</a>
														</div>
													</div>
													<div class = "row">
											     <div class="col-md-0.5"></div>
									            <div class="col-md-11">
							                <a href="https://localhost/single_love/index.php/Home/Information/Information/index">
																<button class="btn btn-default btn-lg btn-block" type="button">兴趣爱好</button>
															</a>
														</div>
													</div>

      								</div>
    							</div>
  							</div>


							</div>
							</div>
							</div>

									</td>
								</tr>
							</table>
						</div>

  					<div class="col-md-9">
							
							<form action="/single_love/index.php/Home/About/About/index" enctype = "multipart/form-data" method="POST">
							<div class="row">
						   <div class="col-md-12">
 								<table class="table table-bordered">
 									<tr class = "success">
 									<td>
											<div class="row">
												<div class="col-md-12">
												<div class="col-md-7"><textarea class ="form-control" rows = "3" id = "name" name = "name"></textarea></div>
												<div class="col-md-3">
													<div class = "row">
														<div class="col-md-12">
															公开:<input type = "radio", name = "public" value = "1" checked = "checked">
															对关注我的可见<input type = "radio", name = "public" value = "2">
														</div>
													</div>
												
													<div class="panel-group" id="accordion6" role="tablist" aria-multiselectable="true">
  													<div class="panel panel-default">
    												<div class="panel-heading" role="tab" id="headingOne6">
      												<h4 class="panel-title">
        											<a role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapseOne6" aria-expanded="true" aria-controls="collapseOne"><button type="button" class="btn btn-default btn-lg btn-block">上传照片</button></a>
      												</h4>
    												</div>
    												<div id="collapseOne6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      												<div class="panel-body">
													<div id="content">

													<fieldset>
 	 												<label for="user_pic">照片一:</label>
 	 												<input type="file" name="user_pic[]" size="30" /><br />
 													</fieldset>
 													<br />

													<fieldset>
        											<label for="user_pic">照片二:</label> 
        											<input type="file" name="user_pic[]" size="30" /><br />
      												</fieldset>
      												<br />
													<fieldset>
        											<label for="user_pic">照片三:</label> 
        											<input type="file" name="user_pic[]" size="30" /><br />
      												</fieldset>

													</div>
      												</div>
    												</div>
  													</div>
													</div>
													</div>
													<div class="col-md-2">
													<div class="col-md-12">
													<div class = "row">
													<div class="col-md-12">&nbsp;</div>
													<div class="col-md-12">&nbsp;</div>
													<div class="col-md-12">
													<button type = "submit" class = "btn btn-info">发贴</button>
													<div>

													</div>
													
													</div>
													</div>
													
												</div>
												</div>
											</div>
									</td>
									</tr>
								</table>
								</div>
								</div>
								</form>
<div class="row">
<div class="col-md-7">
<table class="table table-bordered">
<tr class = "success">
<td>
<?php $__FOR_START_1755373553__=0;$__FOR_END_1755373553__=$about['num'];for($i=$__FOR_START_1755373553__;$i < $__FOR_END_1755373553__;$i+=1){ ?><div class = "row">	
	<div class="col-md-12">
		<div class = "row">
			<div class="col-md-3">
				<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($about['about'][$i]['members_id']); ?>"><img src="<?php echo ($about['head'][$i]['head_ptoto']); ?>" height="50" width="100%"/></a>	
			</div>
			<div class="col-md-9">
				<div class = "row">
					<?php echo ($about['about'][$i]['members_id']); ?>()
				</div>
				<div class = "row">
					<?php echo ($about['about'][$i]['time']); ?>
				<div>
			</div>
		</div>
		</div>	
		<div class = "row">
			<div class="col-md-12">
			<div class="col-md-1"></div>
			<div class="col-md-11">
				<?php echo ($about['about'][$i]['content']); ?>
			</div>
			</div>
		</div>
	</div><?php } ?>

</td>
</tr>
</table>
</div>
<div class="col-md-8">
<!---->

</div>
</div>








	
						</div>
					</div>
				</td>
			</tr>
		</table>
	</div>
</div>

	
	
</div>
 </body>
</html>