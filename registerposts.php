<?php

    include "../macscidbmain/connection.php";
    
    $sql = "SELECT * FROM regions";
    $exec = mysqli_query($db,$sql);
    while( $fetch = mysqli_fetch_assoc($exec)){
        $regions[] = $fetch['region'];
    }


    include '../includes/cpoliceheader.php';
?>

    <div class="list-of-victims-body">
        <div class="list-of-victims-header">
        <div class="account-setting-select-setting">
                <div class="info-setting-block-select" style="margin-top: 2rem;">
                    <h4 class="p-info-head"><a href="#">police post registration</a></h4>
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
                    <input type="search" name="" id="" required name="" placeholder="Search victims...">
                </div>
            </div> -->
        </div>

            <div class="info-setting-block">
                <form action="../macscidbmain/insertdata.php" method="post">
                    <input type="hidden" value="stations" name="station" >
                    <div class="form-whole-setting">
                        <div class="setting-form-inputs">
                            <div class="setting-form-input">
                                <input type="text" required name="stationname" placeholder="police post name">
                            </div>
                        </div>
                        <div class="setting-form-inputs">
                            <div class="form-input">
                                <select  name="region"  style="background: none; border: none; border: 2px solid rgb(134, 125, 37); width: 16.2rem; padding: .5rem;">
                                    <option value="none"    selected disabled hidden > Select a Region</option>
                                    <?php
                                    foreach($regions as $reg)
                                    { ?>
                                        <option value="<?php print $reg?>"  name="region" > 
                                            <h5 style="display:flex; flex-direction:column;"><?php print $reg?></h5>
                                        </option>
                                    <?php
                                    }?>
                                </select>
                            </div>
                        </div>
                        <div class="setting-form-inputs">
                            <div class="setting-form-input">
                                <input type="text" required name="address" placeholder="post office address">
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