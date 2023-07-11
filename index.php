<?php
    include './includes/homeheader.php';
    @$error = $_GET['error'];
?>

    <main>

        
        <div class="home-registration-forms">
            <div class="home-registration-forms-left">
                <div class="registration-form-image">
                    <img src="images/policeman.png" alt="">
                </div>
                <div class="registration-form-desc">
                    <div class="registration-form-desc-1">
                        <h1 class="h1-reg-desc" style="color: blue;">
                            login to MACSCI
                        </h1>
                    </div>
                    <div class="registration-form-desc-2">
                        <!-- <div class="reg-form-p">
                            <p class="r-pr">
                                don't have account?
                            </p>
                        </div>
                        <div class="reg-form-p">
                            <p class="r-pr">
                                <a href="signup.php">register</a>
                            </p>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="home-registration-forms-right">
                <h3 class="reg-head">
                    fill in correct infos' 
                </h3>
                <div class="home-registration-form-itself">
                    <form action="../crimewebsite/macscidbmain/auth.php" method="post">
                        <div class="registration-form">
                            <div class="reg-form-input">
                                <div class="form-lable">
                                    <label for="user-name">user name</label>
                                </div>
                                <div class="form-input">
                                    <input type="text" name="username" id="" required>
                                </div>
                            </div>
                            <div class="reg-form-input">
                                <div class="form-lable">
                                    <label for="name">password</label>
                                </div>
                                <div class="form-input">
                                    <input type="password" name="password" id="" required placeholder="strong password">
                                </div>
                            </div>
                            <div>
                                <?php
                            if(!empty($error)){
                                print $error;
                            }
                                ?>
                            </div>
                            <div class="reg-form-input">
                            <div class="setting-form-button">
                                <input type="submit" name="" value="submit">
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        

    </main>


    <footer>

        <img src="" alt="">

    </footer>



<?php
    include './includes/homescript.php';
?>