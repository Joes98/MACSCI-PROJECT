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
                            <div class="setting-form-input">
                                <input type="text" required placeholder="your age">
                            </div>
                        </div>
                        <div class="setting-form-inputs">
                            <div class="setting-form-input">
                                <input type="text" required placeholder="your middle name">
                            </div>
                        </div>
                        <div class="setting-form-inputs">
                            <div class="setting-form-input">
                                <input type="text" required placeholder="place of birth">
                            </div>
                        </div>
                        <div class="setting-form-inputs">
                            <div class="setting-form-input">
                                <input type="text" required placeholder="nIN">
                            </div>
                        </div>
                        <div class="setting-form-inputs">
                            <div class="setting-form-input">
                                <input type="text" required placeholder="phone number">
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

    <!-- age, place of birth, nin -->



<?php
    include '../includes/footscript.php';
?>