<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>会员信息</title>
    <link rel="/single_love/Stylesheet" href="StyleSheet1.css"/>
    <script src="./jquery.js"></script>
    
    <script src="./JScript1.js" type="text/javascript"></script>

</head>
<body>
    <div class="container">
         <div class="thead">
                <div class="u1"><img src="a.jpg" alt="小飞机"  width="250px" height="110px"/></div>                 
                <div class="u2"><img src="b.jpg" alt="小飞机"  width="440px" height="70px" /></div>
                <div class="u3"><img src="c.jpg" alt="小飞机"  width="250px" height="110px" /></div>
         </div>
        <div class="header">
             <ul class="u4">
                 <li class="u5"><a href="#">个人主页></a></li>
                 <li class="u5"><a href="#">缘分搜索</a></li>
                 <li class="u5"><a href="#">线下活动</a></li>
                 <li class="u6"><a href="#">退出</a></li>             
                 <li class="u6"><a href="#">使用帮助</a></li>
                 <li class="u6"><a href="#">修改资料</a></li>
                 <li class="u6">欢迎你：<span>{name}</span></li>
              </ul>
        </div>
        <div class="content">
            <div class="img1">
                <img src="#" width="160" height="160 " alt="小飞机"/>
            </div>
            <div class="u7">  
                <p><span>{name}</span>ID:<span>{statu}</span></p>
                <p>诚信等级：<span>{img}</span>nbsp;资料完整度：<span>{percent}</span></p>
                <p>认证信息是会员自愿提供，目前暂无法确保100%真实，请理性对待。</p>
                <p>{profile}</p>
                <table>
                    <tr>
                        <td >身&nbsp;&nbsp;高:</td>
                        <td class="style2"></td>
                        <td>出生年月:</td>
                        <td class="style3" ></td>
                    </tr>
                    <tr>
                        <td >月&nbsp;&nbsp;薪:</td>
                        <td class="style2"></td>
                        <td>星&nbsp;&nbsp;座:</td>
                        <td class="style3" ></td>
                    </tr>
                    <tr>
                        <td  >居住情况：</td>
                        <td class="style2"></td>
                        <td >血&nbsp;&nbsp;型：</td>
                        <td class="style3" ></td>
                    </tr>
                    <tr>
                        <td  >购车情况：</td>
                        <td class="style2"></td>
                        <td >工作地域：</td>
                        <td class="style3" ></td>
                    </tr>
                </table>
            </div>
            <div class="img2">
                <img src="#" width="160" height="160 " alt="小飞机"/>
            </div>
             <div class="bmp ">
                 
                      <img src="1.bmp" alt="小飞机" onclick="change(1)"width="40px" height="50px" />                            
                     <img src="#" alt="小飞机"  width="40px" height="50px" />                     
                      <img src="#" alt="小飞机"  width="40px" height="50px" />                      
                      <img src="#" alt="小飞机"  width="40px" height="50px" />
                      <img src="2.bmp" alt="小飞机"  width="50px" height="50px" />
                        <button type="button" id="Button1" class="btn1">发信</button>
                       <button type="button" id="Button2" class="btn1">加关注</button>
                         <button type="button" id="Button3" class="btn3">送礼物</button>
                           <button type="button" id="Button4" class="btn4">邀请参加活动</button>                                    
                            <span class="right1"><input type="button" value="举报" style="border:0;cursor:pointer"/></span>
                            <span class="right2"><input type="button" value="加入黑名单" style="border:0;cursor:pointer"/></span>
            </div>
       </div>
      <div class="left">
        <div class="word">
            <p>&nbsp;&hearts;<strong>内心独白</strong></p> 
             <p>&nbsp;&nbsp;{wood}</p>
        </div>
       <div >
            <p>&nbsp;&hearts;<strong>择偶条件</strong></p> 
             <table class="tab">
                <tr >
                    <td>&nbsp;&nbsp;年&nbsp;&nbsp;龄：</td>
                    <td class="style2"></td>
                    <td>身&nbsp;&nbsp;高：</td>
                    <td class="sytle2"></td>
                 </tr>
                 <tr >
                    <td>&nbsp;&nbsp;学&nbsp;&nbsp;历：</td>
                    <td class="style2"></td>
                    <td>婚姻状况：</td>
                    <td class="style2"></td>
                 </tr>
                 <tr >
                    <td>&nbsp;&nbsp;有无照片：</td>
                    <td class="sytle2"></td>
                    <td>工作处所：</td>
                    <td class="style2"></td>
                 </tr>    
             </table>
        </div>
        <div id="character">
            <p>&nbsp;&hearts;<strong>外貌性格</strong></p> 
             <table class="tab">
                <tr>
                    <td>&nbsp;&nbsp;身&nbsp;&nbsp;高：</td>
                    <td class="style2"></td>
                    <td>体&nbsp;&nbsp;重：</td>
                    <td class="sytle2"></td>
                 </tr>
                 <tr >
                    <td>&nbsp;&nbsp;体&nbsp;&nbsp;型：</td>
                    <td class="style2"></td>
                    <td>健康状况：</td>
                    <td class="style2"></td>
                 </tr>
                 <tr >
                    <td>&nbsp;&nbsp;外貌自评：</td>
                    <td class="sytle2"></td>
                    <td>穿衣风格：</td>
                    <td class="style2"></td>
                 </tr>    
                 <tr >
                    <td>&nbsp;&nbsp;性格特征：</td>
                    <td class="sytle2"></td>
                    <td>脾&nbsp;&nbsp;气：</td>
                    <td class="style2"></td>
                 </tr>    
             </table>
        </div>
        <div id="work">
            <p>&nbsp;&hearts;<strong>工作学习</strong></p> 
             <table class="tab">
                <tr >
                    <td>&nbsp;&nbsp;单位类型：</td>
                    <td class="style2"></td>
                    <td>职业职位：</td>
                    <td class="sytle2"></td>
                 </tr>
                 <tr >
                    <td>&nbsp;&nbsp;工作状况：</td>
                    <td class="style2"></td>
                    <td>工作调动：</td>
                    <td class="style2"></td>
                 </tr>
                 <tr >
                    <td>&nbsp;&nbsp;毕业学校：</td>
                    <td class="sytle2"></td>
                    <td>专业类型：</td>
                    <td class="style2"></td>
                 </tr>    
                 <tr >
                    <td>&nbsp;&nbsp;语言能力：</td>
                    <td class="sytle2"></td>
                    <td>事业家庭：</td>
                    <td class="style2"></td>
                 </tr>    
             </table>
          </div>
        <div id="life_Style">
            <p>&nbsp;&hearts;<strong>生活方式</strong></p> 
             <table class="tab">
                <tr >
                    <td>&nbsp;&nbsp;吸&nbsp;&nbsp;烟：</td>
                    <td class="style2"></td>
                    <td>饮&nbsp;&nbsp;酒：</td>
                    <td class="sytle2"></td>
                 </tr>
                 <tr >
                    <td>&nbsp;&nbsp;锻炼方式：</td>
                    <td class="style2"></td>
                    <td>饮食习惯：</td>
                    <td class="style2"></td>
                 </tr>
                 <tr >
                    <td>&nbsp;&nbsp;逛街购物：</td>
                    <td class="sytle2"></td>
                    <td>宗教信仰：</td>
                    <td class="style2"></td>
                 </tr>    
                 <tr >
                    <td>&nbsp;&nbsp;作息时间：</td>
                    <td class="sytle2"></td>
                    <td>交际圈子：</td>
                    <td class="style2"></td>
                 </tr>
                 <tr>
                    <td>&nbsp;&nbsp;最大消费：</td>
                    <td class="style2"></td>
                 </tr>  
                 <tr>
                    <td>家务水平等级：</td>
                    <td class="style2"></td>
                    <td>家务分配情况：</td>
                    <td class="style2"></td>
                 </tr>  
                 <tr>
                    <td>家中排行：</td>
                    <td class="style2"></td>
                    <td>父母情况：</td>
                    <td class="style2"></td>
                 </tr>
                 <tr>
                    <td>是否要孩子：</td>
                    <td class="style2"></td>
                    <td>考虑何时结婚：</td>
                    <td class="style2"></td>
                 </tr>
                <tr>
                    <td>宠物喜欢程度：</td>
                    <td class="style2"></td>
                    <td>关于宠物：</td>
                    <td class="style2"></td>
                 </tr>
             </table>
          </div>  
            <div class="hobby">
                 <p>&nbsp;&hearts;<strong>兴趣爱好</strong></p>
                 <ul>
                            <li style="height:20px;padding:6px">喜欢的运动：<button onclick="this.innerHTML='亲，你的邀请已发送至该会员'" style="border:0;cursor:pointer; font-size:14px;color:red;text-decoration:underline">邀请这位好友补充</button></li> 
                            <li style="height:20px;padding:6px">喜欢的食物：<button onclick="this.innerHTML='亲，你的邀请已发送至该会员'" style="border:0;cursor:pointer; font-size:14px;color:red; text-decoration:underline">邀请这位好友补充</button></li> 
                            <li style="height:20px;padding:6px">喜欢的书籍：<button onclick="this.innerHTML='亲，你的邀请已发送至该会员'" style="border:0;cursor:pointer; font-size:14px ;color:red;text-decoration:underline">邀请这位好友补充</button></li> 
                            <li style="height:20px;padding:6px">喜欢的电影：<button onclick="this.innerHTML='亲，你的邀请已发送至该会员'" style="border:0;cursor:pointer; font-size:14px;color:red;text-decoration:underline">邀请这位好友补充</button></li> 
                            <li style="height:20px;padding:6px">喜欢的节目：<button onclick="this.innerHTML='亲，你的邀请已发送至该会员'" style="border:0;cursor:pointer; font-size:14px;color:red;text-decoration:underline">邀请这位好友补充</button></li> 
                            <li style="height:20px;padding:6px">娱乐&nbsp;休闲：<button onclick="this.innerHTML='亲，你的邀请已发送至该会员'" style="border:0;cursor:pointer; font-size:14px;color:red;text-decoration:underline">邀请这位好友补充</button></li> 
                            <li style="height:20px;padding:6px">业余&nbsp;爱好：<button onclick="this.innerHTML='亲，你的邀请已发送至该会员'" style="border:0;cursor:pointer; font-size:14px;color:red;text-decoration:underline">邀请这位好友补充</button></li>                            
                            <li style="height:20px;padding:6px">喜欢的旅游去处：<button onclick="this.innerHTML='亲，你的邀请已发送至该会员'" style="border:0;cursor:pointer; font-size:14px;color:red;text-decoration:underline">邀请这位好友补充</button></li> 
                 </ul>
          </div>   
           <div>
                <p>&nbsp;&hearts;<strong>收到的礼物</strong></p>
                    
                  <div style ="float:left">                                    
                    <img alt:" 小飞机" width="90px" height="90" src="#" />                                    
                    <img alt:" 小飞机" width="90px" height="90" src="#" />
                   </div>
                   <div style ="float:left">
                   <button  class="button" id="button" onclick="send()">赠送礼物</button>
                   </div>
           </div>
      </div>
          
          <div class="new">
               <h3>最新加入会员</h3>
               <div class="u10">                  
                    <img src="#" width="80" height="80" alt="小飞机" class="style5" />
                    <img src="#" width="80" height="80"  class="style4" alt="小飞机"/>
               </div>
               <div class="u10">
                    <img src="#" width="80" height="80" alt="小飞机" class="style5"/>
                    <img src="#" width="80" height="80"  class="style4" alt="小飞机"/>
               </div><div class="u10">
                    <img src="#" width="80" height="80" alt="小飞机" class="style5"/>
                    <img src="#" width="80" height="80"  class="style4" alt="小飞机"/>
               </div><div class="u10">
                    <img src="#" width="80" height="80" alt="小飞机" class="style5"/>
                    <img src="#" width="80" height="80"  class="style4" alt="小飞机"/>
                    </div>
                <div class="u10">
                    <img src="#" width="80" height="80" alt="小飞机" class="style5"/>
                    <img src="#" width="80" height="80"  class="style4" alt="小飞机"/>
               </div>
               <div class="u10">
                    <img src="#" width="80" height="80" alt="小飞机" class="style5"/>
                    <img src="#" width="80" height="80"  class="style4" alt="小飞机"/>
               </div>
               <div class="u10"  style="margin-top:30px">
                    <img src="#" width="160" height="160" alt="小飞机" class="u11"/> 
                </div>
                <h3  style="margin-top:50px">推荐会员&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="换一批" style="border:0;cursor:pointer;text-decoration:underline; color:red"/></h3> 
                <div class="u10">
                    <img src="#" width="80" height="80" alt="小飞机" class="style5"/>
                    <img src="#" width="80" height="80"  class="style4" alt="小飞机"/>
               </div>
               <div class="u10">
                    <img src="#" width="80" height="80" alt="小飞机" class="style5"/>
                    <img src="#" width="80" height="80"  class="style4" alt="小飞机"/>
               </div>
               <div class="u10">
                    <img src="#" width="80" height="80" alt="小飞机" class="style5"/>
                    <img src="#" width="80" height="80"  class="style4" alt="小飞机"/>
               </div>
               <div class="u10">
                    <img src="#" width="80" height="80" alt="小飞机" class="style5"/>
                    <img src="#" width="80" height="80"  class="style4" alt="小飞机"/>
               </div>
               <div class="u10">
                    <img src="#" width="80" height="80" alt="小飞机" class="style5"/>
                    <img src="#" width="80" height="80"  class="style4" alt="小飞机"/>
               </div>

          </div>  
          <div id="footer">
            <p>关于我们&nbsp;法律声明&nbsp;隐私保护&nbsp;在线留言&nbsp;自律公约</p>
            <p>客服QQ：12345</p>
            <p>版权所有：西南民族大学</p>
          </div>
      <div class="dialog" id="dialog">
        <div><span style="float:left">&nbsp;&hearts;赠送礼物</span> <img  src="3.bmp" style="float:right" alt="x" id="img3"/></div>
        <span style="float:left;clear:both">分类：</span>
        <ul class="tabsecond">
             
            <li class="tabc">普通礼物</li>
            <li >尊贵礼物</li>
        </ul>
        <div class="contentsecond">
            dfDAFADSGS
        </div>
        赠送给：<span></span>
        <form method="post" class="form" id="form" action="#">
            祝福留言：<br />
            <input type="text" class="input" value="祝福留言"/><br/>
            赠送方式：
            <input type="radio" name="pub" id="pub"value="yes"/>公开赠送
            <input type="radio" name="pub" id="pri"value="no"/>秘密怎送(只有你和收礼人知道是谁送的）<br />
            &nbsp;<input type="submit" value="提交" class="submit" id="submit"/></form>  

         
    </div>
   </div>
    
</body>

</html>