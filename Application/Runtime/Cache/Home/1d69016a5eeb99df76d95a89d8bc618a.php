<?php if (!defined('THINK_PATH')) exit();?><html>
<body>
<form action="choose" method="post">
年龄下限: <input type="text" name="agea"><br>
年龄上线: <input type="text" name="ageb"><br>
身高下限: <input type="date" name="heighta"><br>
身高上线: <input type="text" name="heightb"><br>
学历:<input type="text" name="school"><br>
婚姻状况: <input type="text" name="hunyin"><br>
工作所在地: <input type="text" name="work"><br>
有无照片: <input type="text" name="photo"><br>
<input type="submit", value = "保存">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user_id['id']); ?>" ><button type="button">跳过并预览!</button></a>
</form>
</body>
</html>