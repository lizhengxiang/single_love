<?php if (!defined('THINK_PATH')) exit();?><html>
 <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 </head>

 <body>
  <div id="header"><h1>我的相册</h1></div>

  <div id="content">
    <form action="./upload" enctype = "multipart/form-data" method="POST"
          enctype="multipart/form-data">
	<fieldset>
		會員帳號<input type = "text" name = id>
	</fieldset>
	<br/>
	<fieldset>
 	 <label for="user_pic">我的头像:</label>
 	 <input type="file" name="user_pic[]" size="30" /><br />
 	</fieldset>
 	<br />

	<fieldset>
        <label for="user_pic">生活照一:</label> 
        <input type="file" name="user_pic[]" size="30" /><br />
      </fieldset>
      <br />
	<fieldset>
        <label for="user_pic">生活照二:</label> 
        <input type="file" name="user_pic[]" size="30" /><br />
      </fieldset>
      <br />
     <fieldset>
        <label for="user_pic">生活照三:</label> 
        <input type="file" name="user_pic[]" size="30" /><br />
      </fieldset>
      <br />
	<fieldset>
        <label for="user_pic">生活照四:</label> 
        <input type="file" name="user_pic[]" size="30" /><br />
      </fieldset>
      <br />
      <fieldset>
        <label for="user_pic">生活照五:</label> 
        <input type="file" name="user_pic[]" size="30" /><br />
      </fieldset>
      <br />
      <fieldset>
        <label for="user_pic">生活照六:</label> 
        <input type="file" name="user_pic[]" size="30" /><br />
      </fieldset>
      <br />
      <fieldset class="center">
        <input type="submit" value="上傳" />
        <input type="reset" value="清除" />
      </fieldset>
    </form>
  </div>

  <div id="footer"></div>
 </body>
</html>