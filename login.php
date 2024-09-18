
<?php 

$title = "หน้าหลัก";
require_once "connect/connect.php";
require_once './public/header.php';
if(isset($_COOKIE['main_userid'])||$_COOKIE['main_userid']!=null){
    header("location:index.php");
  }


if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST["user"];
    $password = $_POST["pass"];
    // $newpass =md5($password.$username);
   
    $result=$userCon->check_user($username,$password);
  
    if(!$result){
        echo "<br><br><br>";
        echo '<div class="alert alert-danger"> ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง  </div>';           
    }
    else{
        setcookie("username",$result['username'],  time()+10000, '/');
        setcookie("password",$result['password'], time()+10000, '/');
        setcookie("Nickname",$result['Nickname'], time()+10000, '/');
        setcookie("main_userid",$result['id'], time()+10000, '/');
        
        
        


        header("location:index.php");

    }

}



require_once "connect/connect.php";
   ?>

<form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>">
<center>
        <div class="card" style="width: 35rem;margin-top : 120px;" >
        <h5 class="card-title">Login</h5>
            <div class="card-body">
            <input type="text" class="form-control" placeholder="Username" name="user" aria-label="Username" style="width: 20rem; margin : 15px ">
            <input type="password" class="form-control" placeholder="Password" name="pass" aria-label="Password" style="width: 20rem; margin : 15px;">
            <input type="submit" class="btn btn-success" value="Login">
            <input type="button" class="btn btn-secondary" onclick='location.replace("./register.php")' value="register">
            </div>
          </div>
        
</center>

</form>

    </body>
</html>