<?php    

    class User{

        private $db;
         // เชื่อมดาต้าเบส
        function __construct($con){
            $this->db = $con;
        }
      
        // ^เช็คการเชื่อมต่อว่า username กับ passwword ถูกหรือไม่
        function check_user($username, $password)
        {
            try{   
                    $sql = "SELECT * FROM users WHERE username=? AND password=? ";
                    $stmt=$this->db->prepare($sql);
                    $stmt->bindParam(1, $username, PDO::PARAM_STR);
                    $stmt->bindParam(2, $password, PDO::PARAM_STR);
                    $stmt->execute();
                    $result = $stmt->fetch(PDO::FETCH_ASSOC);    
                    return $result;
            
                         } 
                        
                        catch( PDOException $e ){ 
                          echo  $e ->getMessage();
                          return false;
                        }

        }

        function register($username,$password,$Nickname){
            try{   
                $sql = "INSERT INTO `users`( `username`, `password`, `Nickname`) VALUES (?,?,?)";
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(1, $username, PDO::PARAM_STR);
                $stmt->bindParam(2, $password, PDO::PARAM_STR);
                $stmt->bindParam(3, $Nickname, PDO::PARAM_STR);
                $stmt->execute();
                return true;
                     } 
                    
                    catch( PDOException $e ){ 
                      echo  $e ->getMessage();
                      return false;
                    }


        }

    }

?>