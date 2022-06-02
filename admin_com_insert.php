<?php 
    session_start();
    require_once "connect_db.php";
    if(isset($_POST['submit'])){
        $com_sn = $_POST['com_sn'];
        $com_name = $_POST['com_name'];
        $com_owner = $_POST['com_owner'];
        $com_status  = $_POST['com_status'];

        if(!isset($_SESSION['error'])){
        try {
                $stmt = $conn->prepare("INSERT INTO computers(com_sn,com_name,com_owner,com_status)
                                        VALUES (:com_sn,:com_name,:com_owner,:com_status)");
                $stmt->bindParam(":com_sn",$com_sn);
                $stmt->bindParam(":com_name",$com_name);
                $stmt->bindParam(":com_owner",$com_owner);
                $stmt->bindParam(":com_status",$com_status);
                $stmt->execute();
                $_SESSION['success'] = " Successfully insert computer information ! <a href='admin_com_insert.php' class='alert alert-link' > Click here </a> " ;
                header("location:admin_com.php");
            }catch(PDOException $e){    
                echo $e->getMessage();
            }
        }
        
    }
?>