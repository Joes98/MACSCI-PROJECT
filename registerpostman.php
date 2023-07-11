<?php

    include "../macscidbmain/connection.php";

    
    $sql = "SELECT * FROM regions";
    $exec = mysqli_query($db,$sql);
    while( $fetch = mysqli_fetch_assoc($exec)){
    $regions[] = $fetch['region'];
    }

    $sql = "SELECT stationname FROM stations";
    $exec = mysqli_query($db,$sql);
    while( $fetch = mysqli_fetch_assoc($exec)){
    $stname[] = $fetch['stationname'];
    }

    @$error = $_REQUEST['error'];
    

    include '../includes/cpoliceheader.php';
?>

        <h1 
            style="position: absolute; font-size: 12px;
            padding: .5rem 1rem; color: red; top: 7.5rem; text-align: center; 
            right: 2rem;">

            <?php 
                print $error; 
            ?>
        </h1>

        <div class="users-account-setting-head">
            <!-- <div class="h2-setting-head">
                <h3>
                    register postman
                </h3>
            </div> -->
            <div class="account-setting-select-setting">
                <div class="info-setting-block-select" style="margin-top: 2rem;">
                    <h4 class="p-info-head"><a href="#">register postman</a></h4>
                </div>
                <!-- <div class="info-setting-block-select">
                    <h4 class="p-info-head"><a href="adminsetmainw2.php">add working info</a></h4>
                </div> -->
            </div>
            <div class="info-setting-block">
                <form action="../macscidbmain/insertdata.php" method="post">
                    <input type="hidden" value="users" name="station" >
                    <div class="form-whole-setting">
                        <div class="setting-form-inputs">
                            <div class="setting-form-input">
                                <input type="text" required name="fullname" placeholder="fullname">
                            </div>
                        </div>
                        <div class="setting-form-inputs">
                            <div class="setting-form-input">
                                <input type="text" required name="username" placeholder="username">
                            </div>
                        </div>
                        <div class="setting-form-inputs">
                            <div class="form-input">
                                <select name="region" id="" style="background: none; border: none; border: 2px solid rgb(134, 125, 37); width: 16rem; padding: .5rem;">
                                    <option value="none" selected disabled hidden > Select a Region</option>
                                    <?php
                                    foreach($regions as $reg)
                                    { ?>
                                        <option value="<?php print $reg?>"> 
                                            <h5 style="display:flex; flex-direction:column;"><?php print $reg?></h5>
                                        </option>
                                    <?php
                                    }?>
                                </select>
                            </div>
                        </div>
                        <div class="setting-form-inputs" style="display: flex; align-items: center; gap: 1rem;">
                            <div class="setting-form-input" id="input-date">
                                <label for="date">D.O.B</label>
                            </div>
                            <div class="setting-form-input">
                                <input type="date" name="dob" id="input-date">
                            </div>
                        </div>
                        <div class="setting-form-inputs">
                            <div class="setting-form-input">
                                <input type="text" required name="password" placeholder="credit strong password">
                            </div>
                        </div>
                        <div class="setting-form-inputs">
                            <div class="form-input">
                                <select name="organization" id="" style="background: none; border: none; border: 2px solid rgb(134, 125, 37); width: 16rem; padding: .5rem;">
                                    <option value="none" selected disabled hidden > Select Post</option>
                                    <?php
                                    foreach($stname as $stat)
                                    { ?>
                                        <option value="<?php print $stat?>"> 
                                            <h5 style="display:flex; flex-direction:column;"><?php print $stat?></h5>
                                        </option>
                                    <?php
                                    }?>
                                </select>
                            </div>
                        </div>
                        <div class="setting-form-inputs">
                            <div class="setting-form-input">
                                <input type="text" required name="bornarea" placeholder="place of birth">
                            </div>
                        </div>
                        <div class="setting-form-inputs">
                            <div class="setting-form-input">
                                <input type="text" required name="nin" placeholder="nIN">
                            </div>
                        </div>
                        <div class="setting-form-inputs">
                            <div class="setting-form-input">
                                <input type="text" required name="phone" placeholder="phone number">
                            </div>
                        </div>
                        <div class="setting-form-inputs">
                            <div class="setting-form-input">
                                <select name="usertype" id="" style="background: none; border: none; border: 2px solid rgb(134, 125, 37); width: 16rem; padding: .5rem;">
                                    <option value="none" selected disabled hidden>Select user type</option>
                                    <option value="POLICE">POLICE</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="setting-form-button">
                        <input type="submit" name="" value="submit">
                    </div>
                </form>
            </div>
        </div>

    </main>



<?php
    include '../includes/footscript.php';
?>