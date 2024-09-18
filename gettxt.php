<?php 
   require_once "./connect/connect.php";
   require_once './getdata.php';
?>

<div style="min-width:470px;">
<?php
$messageShow = $controller->getMessage($result['room_id']);
while ($showDBMS = $messageShow->fetch(PDO::FETCH_ASSOC)) {
  if ($showDBMS['user_txt'] != $_COOKIE['main_userid']) {
?>

    <figure style=" margin-right:auto">
      <blockquote class="blockquote" style="margin-right:50%; ">

        <p style=" height:auto; padding :5px 5px 5px 5px; word-wrap: break-word;">  <?php echo $showDBMS['text_chat'] . "<br>"; ?></p>

      </blockquote>
      <figcaption class="blockquote-footer">
        <cite title="Source Title"><?php echo $showDBMS['time'] . "<br>"; ?></cite>
      </figcaption>
    </figure>

  <?php } else { ?>

    <figure class="text-end" style="margin-left: auto; margin-right:2%; ">
    <blockquote class="blockquote" style="margin-left:50%; " >
        <p  style=" height:auto;  padding :5px 5px 5px 5px; word-wrap: break-word;"><?php echo $showDBMS['text_chat'] . "<br>"; ?></p>

      </blockquote>
      <figcaption class="blockquote-footer">
          <cite title="Source Title"  ><?php echo $showDBMS['time'] . "<br>"; ?> </cite>
      </figcaption>
    </figure>
  
  <?php }} ?>

  </div>

