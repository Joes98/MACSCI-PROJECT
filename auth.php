<?php
    include 'connection.php';
    
        $uname = $_POST['username'];
        $pass = $_POST['password'];

        $sql = "SELECT * FROM users  WHERE username='$uname' && password='$pass'";  
        $exec = mysqli_query($db,$sql);
        $fetch = mysqli_fetch_assoc($exec);
        $count = mysqli_num_rows($exec);
    
        $auth = $fetch['usertype'];
    
        $_SESSION['uid'] = $fetch['id'];
        $_SESSION['fullname'] = $fetch['fullname'];
        $_SESSION['creator_organization'] = $fetch['organization'];
        $_SESSION['uname'] =  $fetch['username'];
        $_SESSION['address'] = $fetch['address'];
        $_SESSION['organization'] = $fetch['organization'];

        if($count==1){
        switch ($auth) {
            case "POLICE":
                header("location:../admins/admins.php");
                break;

                case "NGO":
                    header("location:../users/users.php");
                    break;
                    
                    case "admin":
                        header("location:../centralpolice/cpolice.php");
                    break;

                default:
                    print "no match";
                    header("location:../users/users.php");
                break;
        }
        }else{
            header("location:../index.php?error=incorrect password");
        }
?>