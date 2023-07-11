<?php
    include '../includes/usersheader.php';
?>

       <div class="users-account-setting-head">
            <div class="h2-setting-head">
                <h3>
                    user account setting
                </h3>
            </div>
            <div class="account-setting-select-setting">
                <div class="info-setting-block-select">
                    <h4 class="p-info-head"><a href="usersetmain.php">add personal info</a></h4>
                </div>
                <div class="info-setting-block-select">
                    <h4 class="p-info-head"><a href="usersetmainw2.php">add working info</a></h4>
                </div>
            </div>
            <div class="info-setting-block">
                <form action="" method="post">
                    <div class="form-whole-setting">
                        <div class="setting-form-inputs">
                            <div class="form-input">
                                <select name="user-type" id="" style="background: none; border: none; border: 2px solid rgb(134, 125, 37); width: 16.3rem; padding: .5rem;">
                                    <option value="none" selected disabled hidden > Select NGO</option>
                                    <option value="">SAMPLE</option>
                                </select>
                            </div>
                        </div>
                        <!-- <div class="setting-form-inputs">
                            <div class="form-input">
                                <select name="user-type" id="" style="background: none; border: none; border: 2px solid rgb(134, 125, 37); width: 15rem; padding: .5rem;">
                                    <option value="none" selected disabled hidden > Select a Region</option>
                                    <option value="">SAMPLE</option>
                                </select>
                            </div>
                        </div> -->
                        <div class="setting-form-inputs">
                            <div class="setting-form-input">
                                <input type="text" required placeholder="post office address">
                            </div>
                        </div>
                    </div>
                    <div class="setting-form-button">
                        <input type="button" value="submit">
                    </div>
                </form>
            </div>
       </div>

    </main>

    <!-- region, name ngo -->


<?php
    include '../includes/footscript.php';
?>