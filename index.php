
<?php 

    require_once "./checklogin.php";
    require_once "./connect/connect.php";
    require_once './public/header.php';
    $title = "Index";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
          setcookie("Show_id",$_POST["user_id"], time()+20000, '/');
          header("location:chatroom.php");
  }
       
    ?>
  <center>



<div class="card-group"style="width: 60%; max-width: 500px; text-align: center; margin: 120px; ">

  <div class="card text-white bg-dark mb-3" style="margin: 10px 10px 10px 10px;  border-radius: 25px; ">
 
    <div class="card-body" >
      <h5 class="card-title">ผู้คน</h5>
      <!-- แสดงผู้คนทั้งหมด -->
      <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>">
      <tbody>
      <select class="form-select" name="user_id" multiple aria-label="multiple select example" style="height :500px; max-height: 500px;">
        <?php $result=($controller->getUsers($_COOKIE["main_userid"])); while($showuser =$result->fetch(PDO::FETCH_ASSOC)){?>
            <option value=<?php echo $showuser["id"]; ?>>  <?php echo $showuser["Nickname"]; ?></option>
         <?php } ?>
        </select>
        <input type="submit" class="btn btn-secondary btn-sm" style="margin: 10px;" value="Chat">

  </tbody>
  </form>
  <!--  -->
    </div>
  </div>

 
   
  </div>
</div>
          
        




      </center>
    </body>
</html>