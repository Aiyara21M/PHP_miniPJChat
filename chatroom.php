
<?php
require_once './public/header.php';
require_once "./connect/connect.php";
require_once './getdata.php';
require_once "./checklogin.php";
if(!isset($_COOKIE['main_userid'])||$_COOKIE['main_userid']==null){
  header("location:login.php");
}

// --------------------------------------------------------------------------------------------------------------
if ($result['room_id'] != null) {
    echo '<center><br><br><br>Name ' . $dataUser1['Nickname'] . ' </center>';
    echo '<center>room id ' . $result['room_id'] . ' </center>';
  } else {
    $addroom = $controller->addChatroom($dataUser1['id'], $_COOKIE['main_userid']);
    if (!$addroom) {
      echo "<center><br><br><br><br><br><br>" . "<h1> Error </h1>" . '</center>';
      header("location:index.php");
    } 
  }
if ($_SERVER["REQUEST_METHOD"]=="POST"&&$_POST['messagetxt']!="") {
  $sage = $controller->addMessage($result['room_id'], $_COOKIE['main_userid'], $_POST['messagetxt'], $time->format("d-m-Y H:i"));
 }

?>

<script>
     setInterval(() => {
        $.get( "gettxt.php", function( data ) { 
          $( "#message" ).html( data );
        });        
    }, 100);
</script>

<div id="message"  style=" overflow: auto ;min-width:470px; min-height:500px; max-height :500px; margin-left: 10%; margin-top: 2%; margin-right: 10%; 
display: flex;
flex-direction: column-reverse;
overflow-anchor: auto !important;" >

</div>





<form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="POST" style="width:80%;   margin-left: 10%;  margin-right: 10%; min-width:470px;"  >
<div class="input-group" style="width:100%; display: flex;align-items: center; ">
  <textarea class="border border-primary p-3 mb-2" name="messagetxt" aria-label="With textarea" style="width:80%; height:200px;  resize: none; border-radius: 25px;"></textarea>
  <button type="submit" class="btn btn-outline-secondary" style="margin-left:1%; height:190px;width:19%; border-radius: 25px;">SEND</button>
</div>
</form>




