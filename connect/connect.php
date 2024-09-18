<?PHP



//เชื่อมต่อฐานข้อมูล
$host ="localhost";
$username=	"root";
$password= ""; //รหัสผ่านของฐานข้อมูล
$db = "chatdata" ;
$dsn = "mysql:host=$host;dbname=$db;charset=utf8";
try {
    $pdo=new PDO($dsn, $username, $password);
   
}
catch (PDOException $e) {
    echo "". $e->getMessage() ."";
}
//นำไฟล์ control มาconnect กับ pdo
require_once "control.php";
$controller = new Control($pdo);

//นำไฟล์ user มาconnect กับ pdo
require_once "connect/user.php";
$userCon = new User($pdo);

// $userCon->insert_user('admin','123456');

?>