
<?php 
if(isset($_COOKIE['main_userid'])||$_COOKIE['main_userid']!=null){
    header("location:index.php");
  }
$title = "สมัครสมาชิก";
require_once "connect/connect.php";
require_once './public/header.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
   if(strlen($_POST['user'])>=6&&strlen($_POST['Nickname'])>=6&&strlen($_POST['pass'])>=6){
     $userCon->register($_POST['user'],$_POST['pass'],$_POST['Nickname']);

     header("location:login.php");
   }else{
    echo "<br><br><br>";
        echo '<div class="alert alert-danger"> <center><h1> ***Username ไม่ต่ำกว่า 6 ตัวอักษร  Nickname ไม่ต่ำกว่า 6 ตัวอักษร Password ไม่ต่ำกว่า 6 ตัวอักษร***</h1></center></div>';   
   }


}
   ?>

<form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>">
<center>
        <div class="card" style="width: 35rem;margin-top : 120px;" >
        <h5 class="card-title">ลงทะเบียน</h5>
            <div class="card-body">
            <input type="text" class="form-control" placeholder="Username ไม่ต่ำกว่า 6 ตัวอักษร" name="user" aria-label="Username" style="width: 20rem; margin : 15px ">
            <input type="text" class="form-control" placeholder="Nickname ไม่ต่ำกว่า 6 ตัวอักษร" name="Nickname" aria-label="Nickname" style="width: 20rem; margin : 15px ">
            <input type="password" class="form-control" placeholder="Password ไม่ต่ำกว่า 6 ตัวอักษร" name="pass" aria-label="Password" style="width: 20rem; margin : 15px;">

            <input type="submit" class="btn btn-success" value="Submit">
            </div>
          </div>
        
</center>

</form>

    </body>
</html>