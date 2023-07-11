<?php
    include "connection.php";

// _____________________________________________________________________________________________
    @$st = $_POST['station'];
// _____________________________________________________________________________________________

    @$region = $_POST['region'];
    @$stname = $_POST['stationname'];
    @$addr = $_POST['address'];
    @$ngname = $_POST['ngoname'];
    @$fname = $_POST['fullname'];
    @$uname = $_POST['username'];
    @$doob = $_POST['dob'];
    @$pass = $_POST['password'];
    @$org = $_POST['organization'];
    @$born = $_POST['bornarea'];
    @$ni = $_POST['nin'];
    @$pnumber = $_POST['phone'];
    @$utype = $_POST['usertype'];
    @$victype = $_POST['victimtype'];
    @$street = $_POST['street'];
    @$relname = $_POST['relname'];
    @$crinfo = $_POST['crinfo'];
    @$createdby = $_SESSION['fullname']; 
    @$creator_org= $_SESSION['creator_organization'];


    

switch ($st) {
        case 'stations':
    
        $sql = "INSERT INTO stations (stationname,region,address) VALUES('$stname','$region','$addr')";
        $exec = mysqli_query($db,$sql);
        if($exec)
        {
            header("location:../centralpolice/registerposts.php");
        }
        else{
            header("location:../centralpolice/registerposts.php");
    }
        break;
    
        case 'region':
        $sql = "INSERT INTO regions (region) VALUES('$region')";
        $exec = mysqli_query($db,$sql);
        if($exec){
        header("location:../centralpolice/assignregions.php");
    }
        else{
            print "wrong";
    }
        break;

        case 'ngos':
                $sql = "INSERT INTO ngos (ngoname, region, address,creator_name,creator_organization) VALUES('$ngname', '$region', '$addr','$createdby','$creator_org')";
                $query = mysqli_query($db,$sql);
            if($query)
            {
                print "good";
                header("location:../admins/adminasignnewuser.php");
            }
            else{
                print "fail";
                }
        break;

        case 'users':
            $sql = "SELECT * FROM users WHERE username='$uname' OR password='$pass'";
            $exec = mysqli_query($db,$sql);
            $count = mysqli_num_rows($exec);

            if($count<=1){
                $sql = "INSERT INTO users (fullname, username, region, dob,	password, organization,	bornarea, nin, phone, usertype,createdby,creator_organization) 
                VALUES('$fname', '$uname', '$region', '$doob', '$pass', '$org', '$born', '$ni', '$pnumber', '$utype','$createdby','$creator_org')";
                $exec = mysqli_query($db,$sql);
                if($exec)
                {
                    header("location:../centralpolice/registerpostman.php");

                }
                else
                {
                    print "basdo";
                }
            }
            else{
            header("location:../centralpolice/registerpostman.php?error=username or password exists");
        } 
        break;

        case 'userss':
            $sql = "SELECT * FROM users WHERE username='$uname' OR password='$pass'";
            $exec = mysqli_query($db,$sql);
            $count = mysqli_num_rows($exec);

            if($count<1){
                $sql = "INSERT INTO users (fullname, username, region, dob,	password, organization,	bornarea, nin, phone, usertype,createdby,creator_organization) 
                VALUES('$fname', '$uname', '$region', '$doob', '$pass', '$org', '$born', '$ni', '$pnumber', '$utype','$createdby','$creator_org')";
                $exec = mysqli_query($db,$sql);
                if($exec){
                header("location:../admins/registerngoman.php");
                }
            }
            else{
            header("location:../admins/registerngoman.php?error=username or password exists");
        } 
        break; 
        case 'indict':
            $sql = "INSERT INTO indictments (fullname, dob, victimtype, region,	street, relname,address, phone, crinfo,status,createdby,creator_organization) 
            VALUES('$fname', '$doob', '$victype', '$region', '$street', '$relname', '$addr', '$pnumber', '$crinfo','unconfirmed','$createdby','$creator_org')";
            $exec = mysqli_query($db,$sql);
            if($exec)
            {
                print "nimeenda";
                header("location: ../reports/reportcrime.php");
              
            }
            else
            {
                print "sijaenda";
            header("location: ../reports/reportcrime.php");
            }
            break;   
            
    default:
      print "Joe Moses";
    break;
}
   

?>
