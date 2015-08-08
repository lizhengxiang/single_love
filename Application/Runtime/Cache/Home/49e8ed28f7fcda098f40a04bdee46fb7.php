<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html><html>
<head>
<meta charset=utf-8"/>
<title>登陆</title>
<style>
body {
	background-color: #eaeaea;
     }

h1 {
  text-align:center;
  font-size:20px;
  padding:20px;
  }

#box {
     height:600px;
     width:1340px;
     background-image: url(/single_love/index.php/Home/Login/Login./banner2.jpg);
     border:1px solid:#eaeaea;
     margin-top:2px;
     margin-bottom:10px;
     margin-left:auto;
     margin-right:5px;
     background-repeat:no-repeat
     background-size:100% 100%;
     }

#left-1 {
        width:240px;
        height:10px;
        font-size: 22px;
        font-weight: bold;
        color:#f06;
        margin-left:140px;
}

#left-2 {
     width:280px;
     height:300px;
     background:#ccc;
     filter:alpha(Opacity=60);-moz-opacity:0.6;opacity: 0.6;
     margin-left:130px;
     border:1px solid #ff1171;
     border-bottom-left-radius: 20px;
     border-bottom-right-radius: 20px;
     border-top-left-radius: 20px;
     border-top-right-radius: 20px; 
}

#right-1{
       background-image: url(/single_love/Application/Home/View/Login/Login/right1.png);
       filter:alpha(Opacity=60);-moz-opacity:0.6;opacity: 0.6;
       width:240px;
       height:240px;
       margin-left:250px;
       margin-top:10px;
      }

#right-2{
       background-image: url(/single_love/Application/Home/View/Login/Login/right2.png);
       filter:alpha(Opacity=60);-moz-opacity:0.6;opacity: 0.6;
       width:340px;
       height:340px;
       margin-left:230px;
      }

#right-3{
       background-image: url(/single_love/Application/Home/View/Login/Login/right3.png);
       filter:alpha(Opacity=60);-moz-opacity:0.6;opacity: 0.6;
       width:260px;
       height:260px;
       margin-left:950px;
      }

#footer {
     width:1340px;
     height:20px;
     border:1px solid #ffffff ;
     text-align:center;
     margin-top:5px;
     margin-bottom:10px;
     margin-left:auto;
     margin-right:auto; 
     color:#666;   
}
#checkcode {
     width:180px;
}
</style>
<script>
var t=["/single_love/Application/Home/View/Login/Login/banner2.jpg","/single_love/Application/Home/View/Login/Login/banner4.jpg" ,"/single_love/Application/Home/View/Login/Login/banner3.jpg"];
var i=0;
function run(){
        setInterval(cycle,2000);
     }
function  cycle(){
if(i==t.length) i=0;
  document.getElementById("box").style.backgroundImage="url("+t[i]+")";
   i++;
}
window.onload=run;
</script>
</head>

<body>
 
  <div id="box"><br />
    <div id="left-1" style="float:left;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp单身情缘<br />single love.com
     <div id="right-1"></div>
     
     <div id="right-3" style="float:left;"></div>

   </div><br /><br /><br /><br /><br /><br /><br />
    <div id="left-2" style="float:left;">
      <h1>欢迎使用重庆单身情缘网</h1>
      <form action="login" method="post"><center>
        账&nbsp号：
        <input type:="text" name="username"><br><br>
        密&nbsp码：
        <input type:="text" name="password"><br><br>
		<input type="submit" value="登陆">
      </center></form>
    </div>
    <br /><br /><br /><br />
    <div id="right-2" style="float:left;"></div>
     
  </div>
  <div id="footer">版权所有：西南民族大学Coding开发团队</div>
</body>
</html>