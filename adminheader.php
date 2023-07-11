<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="path/to/favicon.ico">
    <title>MACSCI | Police Module</title>

    <link rel="stylesheet" href="../css/styles.css">
</head>
<body id="home">

    
    <header id="header">

        <div class="users-pannel-side-navigation">
            <div class="users-pannel-top">
                <a href="../admins/admins.php"><img src="../images/home (1).png" alt=""></a>
                <div class="users-pannel-top-shortcuts">
                    <img src="../images/list-symbol-of-three-items-with-dots.png" alt="" id="now-hide">
                    <div class="users-pannel-top-hides" id="now">
                        <div class="top-hides-tools">
                            <h3>tools</h3>
                            <h3>shortcuts</h3>
                            <ul>
                                <li><a href="adminconfirmaction.php" class="thenter"><img src="../images/button.png" alt="">confirm indicts</a></li>
                                <li><a href="adminnewreports.php" class="thenter"><img src="../images/apply.png" alt="">new reports</a></li>
                                <li><a href="registerngoman.php" class="thenter"><img src="../images/apply.png" alt="">assign NGO user</a></li>
                            </ul>
                        </div>
                        <div class="top-hides-tools-manage">
                            <h3>manage accounts</h3>
                            <ul>
                                <li><a href="adminasignnewuser.php" class="thentery"><img src="../images/customer.png" alt="">register NGO</a></li>
                                <li><a href="adminconfirmedindicts.php" class="thentery"><img src="../images/approval-symbol-in-badge.png" alt="">confirmed indictments</a></li>
                                <li><a href="adminunconfirmedindicts.php" class="thentery"><img src="../images/button.png" alt="">unconfirmed indictments</a></li>
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
            <div class="logout-btn-forged">
                <a href="../index.php" 
                style="background-color: bisque; margin: 0 .5rem; padding: .5rem 1rem; border-radius: .5rem; color: blue; text-decoration: none; text-transform: capitalize; font-size: 16px;">logout</a>
            </div>
            <div class="users-nav-username">
                <h3 class="h2-nav-users"><?php 
                $nm =  $_SESSION['fullname'];
                print ($nm);
                  ?></h3>
            </div>
       </div>