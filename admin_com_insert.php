<?php 
    session_start();
    require_once "connect_db.php";
    if(isset($_POST['submit'])){
        $com_sn = $_POST['com_sn'];
        $com_name = $_POST['com_name'];
        $com_owner = $_POST['com_owner'];
        $com_status  = $_POST['com_status'];

      
        if(!isset($_SESSION['error'])){
            $insert_com = $conn->prepare("INSERT INTO computers(com_sn,com_name,com_owner,com_status)
                                        VALUES (:com_sn,:com_name,:com_owner,:com_status)");
            $insert_com->bindParam(":com_sn",$com_sn);
            $insert_com->bindParam(":com_name",$com_name);
            $insert_com->bindParam(":com_owner",$com_owner);
            $insert_com->bindParam(":com_status",$com_status);
            $insert_com->execute();

            if($insert_com){
                $_SESSION['success'] = " successfully insert computer <a href='admin_com_insert.php' class='alert alert-link' > Click here </a> " ;
                header("location: admin_com_insert.php");
            }else {
                $_SESSION['error']= 'something went wrong';
                header("location :admin_com_insert.php");
            }   
        }catch(PDOException $e){    
            echo $e->getMessage();
        }  
    }
?>