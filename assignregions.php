<?php



    include '../includes/cpoliceheader.php';
?>

       <div class="users-account-setting-head">
            <div class="h2-setting-head">
                <h3>
                    add workplace region
                </h3>
            </div>
            <!--  -->
            <div class="info-setting-block">
                <form action="../macscidbmain/insertdata.php" method="post">
                <input type="hidden" name="station" value="region">
                    <div class="form-whole-setting">
                        <div class="setting-form-inputs">
                            <div class="setting-form-input">
                                <input type="text" name="region" required placeholder="region name">
                            </div>
                        </div>
                        <div class="setting-form-button">
                            <input type="submit" name="" value="submit">
                        </div>
                    </div>
                </form>
            </div>
       </div>

    </main>

    <!-- region, name ngo -->


<?php
    include '../includes/footscript.php';
?>