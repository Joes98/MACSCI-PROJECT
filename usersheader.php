<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="path/to/favicon.ico">
    <title>MACSCI | Partners Module</title>

    <link rel="stylesheet" href="../css/styles.css">
</head>
<body id="home">

    
    
    <header id="header">

        <div class="users-pannel-side-navigation">
            <div class="users-pannel-top">
                <a href="../users/users.php"><img src="../images/home (1).png" alt=""></a>
                <div class="users-pannel-top-shortcuts">
                    <img src="../images/list-symbol-of-three-items-with-dots.png" alt="" id="now-hide">
                    <div class="users-pannel-top-hides" id="now">
                        <div class="top-hides-tools">
                            <h3>tools</h3>
                            <h3>shortcuts</h3>
                            <ul>
                                <!-- <li><a href="../users/indict.php" class="thenter"><img src="../images/button.png" alt="">indict</a></li> -->
                                <li><a href="../reports/reports.php" class="thenter"><img src="../images/apply.png" alt="">indict victim</a></li>
                                <li><a href="../users/vindictments.php" class="thenter"><img src="../images/list-search.png" alt=""> view indictments</a></li>
                                <li><a href="../victims/victims.php" class="thenter"><img src="../images/customer.png" alt="">victims</a></li>
                            </ul>
                        </div>
                        <div class="top-hides-tools-manage">
                            <h3>manage account</h3>
                            <ul>
                                <li><a href="../users/ucollaborators.php" class="thentery"><img src="../images/customer.png" alt="">collaborators</a></li>
                                <li><a href="../users/vcindictments.php" class="thentery"><img src="../images/approval-symbol-in-badge.png" alt="">confirmed indictments</a></li>
                                <li><a href="../users/vucindictments.php" class="thentery"><img src="../images/button.png" alt="">unconfirmed indictments</a></li>
                                <li><a href="../users/ufaqs.php" class="thentery"><img src="../images/help-web-button.png" alt="">FAQs</a></li>
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
                    <a href="acctsettingusers.php"><img src="../images/setting.png" alt=""></a>
                </div>
            </div>
        </div>

        

    </header>

    <main id="main">

        <div class="users-main-navigation" id="users-main-navigation">
            <div class="users-nav-head" style="flex-grow: 1;">
                <h2 class="h2-nav-users">dashboard</h2>
            </div>
            <div class="logout-btn-forged">
                <a href="../index.php" 
                style="background-color: bisque; margin: 0 .5rem; padding: .5rem 1rem; border-radius: .5rem; color: blue; text-decoration: none; text-transform: capitalize; font-size: 16px;">logout</a>
            </div>
            <div class="users-nav-username">
                <h3 class="h2-nav-users" style="color: blue;">   
                <?php print $_SESSION['fullname'] 
                ?></h3>
            </div>
       </div>