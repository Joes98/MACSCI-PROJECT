<?php

    $db = mysqli_connect('localhost', 'root', '', 'macscidb');

    $sql = "SELECT * FROM regions";
    $exec = mysqli_query($db,$sql);
    while( $fetch = mysqli_fetch_assoc($exec)){
    $regions[] = $fetch['region'];
    }

    include '../includes/adminheader.php';
?>

    <div class="list-of-victims-body">
        <div class="list-of-victims-header">
            <div class="account-setting-select-setting">
                <div class="info-setting-block-select" style="margin-top: 2rem;">
                    <h4 class="p-info-head"><a href="#">register NGO</a></h4>
                </div>
                <!-- <div class="info-setting-block-select">
                    <h4 class="p-info-head"><a href="adminsetmainw2.php">add working info</a></h4>
                </div> -->
            </div>
            <!-- <div class="v-header-search">
                <div class="v-header-s-img">
                    <img src="../images/magnifying-glass.png" alt="">
                </div>
                <div class="v-header-s-input">
                    <input type="search" name="" id="" required placeholder="Search victims...">
                </div>
            </div> -->
        </div>

            <div class="info-setting-block">
                <form action="../macscidbmain/insertdata.php" method="post">
                    <input type="hidden" value="ngos" name="station" >
                    <div class="form-whole-setting">
                        <div class="setting-form-inputs">
                            <div class="setting-form-input">
                                <input type="text" required name="ngoname" placeholder="NGO name">
                            </div>
                        </div>
                        <div class="setting-form-inputs">
                            <div class="form-input">
                                <select name="region" id="" style="background: none; border: none; border: 2px solid rgb(134, 125, 37); width: 16rem; padding: .5rem;">
                                    <option value="none" selected disabled hidden > Select a Region</option>
                                    <?php
                                    foreach($regions as $reg)
                                    { ?>
                                        <option value="<?php print $reg?>" > 
                                            <h5 style="text-transform: uppercase;"><?php print $reg?></h5>
                                        </option>
                                    <?php
                                    }?>
                                </select>
                            </div>
                        </div>
                        <div class="setting-form-inputs">
                            <div class="setting-form-input">
                                <input type="text" required name="address" placeholder="office address">
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