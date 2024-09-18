<?php 
//คอนเน็คดาต้าเบส
    class Control{
        private $db;

        function __construct($con){
            
            $this->db = $con;
       
        }

        function getUsers($main_user){
            try{
                $sql = "SELECT * FROM `users` WHERE id != $main_user";
                $result=$this->db->query($sql);
                return $result;

            }
            
            catch(PDOException $e){

                echo $e->getMessage();
                return false;
            }

        }

        function getAllChat($userid){
           
            
            try{
                $sql = "SELECT * FROM `chatroom` WHERE userroom_id =? or userroom_id2 =? ";
                $stmt=$this->db->prepare($sql);
                $stmt->bindParam(1, $userid, PDO::PARAM_INT);
                $stmt->bindParam(2, $userid, PDO::PARAM_INT);
                $stmt->execute();
               
                return $stmt;

            }
            
            catch(PDOException $e){

                echo $e->getMessage();
                return false;
            }

        }


        function getChatroom($this_user,$this_user2){

            try{
                $sql = "SELECT * FROM `chatroom` WHERE (userroom_id = ?  AND userroom_id2 =? ) or (userroom_id = ?  AND userroom_id2 =? )";
                $stmt=$this->db->prepare($sql);
                $stmt->bindParam(1, $this_user, PDO::PARAM_INT);
                $stmt->bindParam(2, $this_user2, PDO::PARAM_INT);
                $stmt->bindParam(3, $this_user2, PDO::PARAM_INT);
                $stmt->bindParam(4, $this_user, PDO::PARAM_INT);
                $stmt->execute();
                $result=$stmt->fetch(PDO::FETCH_ASSOC);
                return $result;

            }
            
            catch(PDOException $e){

                echo $e->getMessage();
                return false;
            }
        }


        function addChatroom($this_user,$this_user2){
            try{
                $sql = "INSERT INTO `chatroom`(`userroom_id`, `userroom_id2`) VALUES (?,?)";
                $stmt=$this->db->prepare($sql);
                $stmt->bindParam(1, $this_user, PDO::PARAM_INT);
                $stmt->bindParam(2, $this_user2, PDO::PARAM_INT);
                $stmt->execute();
                return true;

            }
            
            catch(PDOException $e){

                
                return false;
            }


        }

        function Datauser($this_user){
            try{
                $sql = "SELECT * FROM `users` WHERE ( id= $this_user )";
                $stmt=$this->db->query($sql);
                $stmt->execute();
                $result=$stmt->fetch(PDO::FETCH_ASSOC);
                return $result;

            }
            
            catch(PDOException $e){

                echo $e->getMessage();
                return false;
            }
        }
        function addMessage($room_id,$user_id,$txtMessage,$time){
            try{
                $sql = "INSERT INTO `txtchat`(`room_id`, `user_txt`, `text_chat`, `time`) VALUES (?,?,?,?) ";
                $stmt=$this->db->prepare($sql);
                $stmt->bindParam(1, $room_id);
                $stmt->bindParam(2, $user_id);
                $stmt->bindParam(3, $txtMessage);
                $stmt->bindParam(4, $time);
                $stmt->execute();
                return true;

            }
            
            catch(PDOException $e){

                echo $e->getMessage();
                return false;
            }

        }
        function getMessage($room_id){
            try{
                $sql = "SELECT * FROM `txtchat` WHERE room_id =?";
                $stmt=$this->db->prepare($sql);
                $stmt->bindParam(1, $room_id);
                $stmt->execute();
                return $stmt;
            }
            
            catch(PDOException $e){

                echo $e->getMessage();
                return false;
            }

        }




     

    // function deleteEmp($id){    
    //     try{
    //         $sql = "DELETE FROM employees WHERE emp_id = ?";
    //         $stmt = $this->db->prepare($sql);
    //         $stmt->bindParam(1, $id, PDO::PARAM_INT);
    //         $stmt->execute();
    //         return true;
    //     }
    //     catch(PDOException $e){
    //         echo $e->getMessage();
    //         return false;
    //     }

    // }

    
    //     function editemp($id){
    //         try{
    //             $sql = "SELECT* FROM employees a INNER JOIN departments b ON a.depart_id = b.depart_id WHERE emp_id=?";
    //             $stmt = $this->db->prepare($sql);
    //             $stmt->bindParam(1, $id, PDO::PARAM_INT);
    //             $stmt->execute();
    //             $result = $stmt->fetch(PDO::FETCH_ASSOC);
    //             return $result;

                
    //         }
    //         catch(PDOException $e){
    //             echo $e->getMessage();
    //             return false;
    //         }
    // }

    // function updateEmp($emp_id,$fname,$lname,$salary,$depart_id){
    //     try{
    //         $sql = "UPDATE employees SET fname=?,lname=?,salary=?,depart_id=? WHERE emp_id=?";
    //         $stmt = $this->db->prepare($sql);
    //         $stmt->bindParam(1,$fname , PDO::PARAM_STR);
    //         $stmt->bindParam(2, $lname , PDO::PARAM_STR);
    //         $stmt->bindParam(3, $salary , PDO::PARAM_INT);
    //         $stmt->bindParam(4, $depart_id , PDO::PARAM_INT);
    //         $stmt->bindParam(5, $emp_id , PDO::PARAM_INT);
    //          $stmt->execute();
           
    //         return true;

            
    //     }
    //     catch(PDOException $e){
    //         echo $e->getMessage();
    //         return false;
    //     }







    // }

}
    
?>