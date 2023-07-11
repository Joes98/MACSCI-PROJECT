<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="path/to/favicon.ico">
    <title>MACSCI | Admin</title>

    <link rel="stylesheet" href="../css/styles.css">
</head>
<body id="home">

    
    <header id="header">

        <div class="users-pannel-side-navigation">
            <div class="users-pannel-top">
                <a href="../centralpolice/cpolice.php"><img src="../images/home (1).png" alt=""></a>
                <div class="users-pannel-top-shortcuts">
                    <img src="../images/list-symbol-of-three-items-with-dots.png" alt="" id="now-hide">
                    <div class="users-pannel-top-hides" id="now">
                        <div class="top-hides-tools">
                            <h3>tools</h3>
                            <h3>shortcuts</h3>
                            <ul>
                                <li><a href="registerposts.php" class="thenter"><img src="../images/button.png" alt="">register posts</a></li>
                                <li><a href="adminconfirmedindicts.php" class="thenter"><img src="../images/customer.png" alt="">indictments</a></li>
                                <li><a href="assignregions.php" class="thenter"><img src="../images/customer.png" alt="">register regions</a></li>
                                <li><a href="registerpostman.php" class="thenter"><img src="../images/button.png" alt="">register postman</a></li>
                            </ul>
                        </div>
                        <div class="top-hides-tools-manage">
                            <h3>manage accounts</h3>
                            <ul>
                                <li><a href="" class="thentery"><img src="../images/policeman.png" alt="">active police posts</a></li>
                                <li><a href="" class="thentery"><img src="../images/user.png" alt="">active NGOs posts</a></li>
                                <li><a href="adminfaqs.php" class="thentery"><img src="../images/help-web-button.png" alt="">FAQs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="users-pannel-bottom">
                <div class="users-pannel-bottom-profile">
                    ......
                </div>
                <div class="users-pannel-bottom-setting">
                    <a href="acctsettingadmins.php"><img src="../images/setting.png" alt=""></a>
                </div>
            </div>
        </div>

        

    </header>

    <main id="main">

        <div class="users-main-navigation">
            <div class="users-nav-head" style="flex-grow: 1;">
                <h2 class="h2-nav-users">dashboard</h2>
            </div>
            <!-- <button><a href=""></a></button> -->
            <div class="logout-btn-forged">
                <a href="../index.php" 
                style="background-color: bisque; margin: 0 .5rem; padding: .5rem 1rem; border-radius: .5rem; color: blue; text-decoration: none; text-transform: capitalize; font-size: 16px;">logout</a>
            </div>
            <div class="users-nav-username">
                <h3 class="h2-nav-users"><?php echo @$_SESSION['uname']; ?>
</h3>
            </div>
       </div>