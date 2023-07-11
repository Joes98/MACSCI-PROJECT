<?php

    $db = mysqli_connect('localhost', 'root', '', 'macscidb');
    $sql = "SELECT * FROM regions";
    $exec = mysqli_query($db,$sql);
    while( $fetch = mysqli_fetch_assoc($exec)){
    $regions[] = $fetch['region'];
    }



    include '../includes/usersheader.php';
?>



       <div class="reports-main-body">
            <div class="reports-navigation-heading">
                <div class="report-heading-left">
                    <h3 class="report-form-heading">
                        indict victim
                    </h3>
                </div>
    
                <div class="report-heading-select-type">
                    <!-- <div class="report-child">
                        <button><a href="reportchild.php">child crime</a></button>
                    </div> -->
                    <div class="report-child">
                        <!-- <button><a href="reportcrime.php">perform indictment</a></button> -->
                        <h4>user indictment pannel</h4>
                    </div>
                </div>
            </div>


            <div class="report-form-all">
                <div class="report-form-type">
                    <h3 class="form-type">
                        victim form report
                    </h3>
                </div>  
            </div>
            <div class="report-form-itself">
                <form action="../macscidbmain/insertdata.php" method="post">
                    <div class="report-form-how-it-display">
                        <input type="hidden" value="indict" name="station">
                        <div class="form-basic-details">
                            <!-- <h4 class="fbd">basic details</h4> -->
                            <div class="report-form">
                                <div class="input-data">
                                    <input type="text" required name="fullname" placeholder="full name">
                                    <div class="underline"></div>
                                    <label for="">victim name</label>
                                </div>
                            </div>
                            <div class="report-form">
                                <div class="input-data">
                                    <input type="text" required name="dob" placeholder="approximate age">
                                    <div class="underline"></div>
                                    <label for="">age</label>
                                </div>
                            </div>
                            <div class="report-form">
                                <div class="form-input">
                                    <select name="victimtype" id="" style="background: none; border: none; border: 2px solid rgb(134, 125, 37); width: 16.2rem; padding: .5rem; margin-left: 1rem;">
                                        <option value="none" selected disabled hidden > Select Type</option>
                                        <option value="WOMEN">Woman</option>
                                        <option value="CHILD">Child</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-standard-details">
                            <!-- <h4 class="fbd">basic details</h4> -->
                            <div class="form-input">
                                <select name="region" id="" style="background: none; border: none; border: 2px solid rgb(134, 125, 37); width: 16rem; padding: .5rem; margin: 1rem;">
                                    <option value="none" selected disabled hidden > Select a Region</option>
                                    <?php
                                        foreach($regions as $reg)
                                    { ?>
                                    <option value="<?php print $reg?>"> 
                                       <h5 style="display:flex; flex-direction:column;"><?php print $reg?></h5>
                                    </option>
                                    <?php
                                    } ?>
                                </select>
                            </div>
                            <div class="report-form">
                                <div class="input-data">
                                    <input type="text" required name="street" placeholder="street">
                                    <div class="underline"></div>
                                    <label for="">street</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-parental-details">
                            <!-- <h4 class="fbd">basic details</h4> -->
                            <div class="report-form">
                                <div class="input-data">
                                    <input type="text" required name="relname" placeholder="relative name">
                                    <div class="underline"></div>
                                    <label for="">relative name</label>
                                </div>
                            </div>
                            <div class="report-form">
                                <div class="input-data">
                                    <input type="text" required name="address" placeholder="home address">
                                    <div class="underline"></div>
                                    <label for="">home address</label>
                                </div>
                            </div>
                            <div class="report-form">
                                <div class="input-data">
                                    <input type="text" required name="phone" placeholder="phone number">
                                    <div class="underline"></div>
                                    <label for="">phone number</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="of-report-form-bottom">
                        <div class="victim-details-input">
                            <input type="text" required name="crinfo" placeholder="brief info of the situation">
                        </div>
                        <div class="setting-form-button">
                            <input type="submit" name="" value="submit">
                        </div>
                    </div>
                </form>
            </div>
            

       </div>
       <div class="some-reports">
            <h4 class="somerpts">
                reports you may indict to
            </h4>

        <div class="some-reports-mentioned">
            <div class="reports-i-i">
                <div class="dot-as-pic"><p>.</p></div>
                <div class="victims">
                    <div class="victim-name">
                        <h5>joe moses</h5>
                    </div>
                    <div class="victim-age">
                        <p>22</p>
                    </div>
                </div>
                <div class="location-1">
                    <div class="region">
                        <div class="location-1a">
                            <h5>mbeya, </h5>
                        </div>
                        <div class="location-1b">
                            <p>ikuti</p>
                        </div>
                    </div>
                </div>
                <div class="buttons">
                    <button><a href="../victims/vinfo.php">more info</a></button>
                    <!-- <input type="button" value="Indict"> -->
                    <!-- <button><a href="indict.php">indict</a></button> -->
                </div>
            </div>
    
        </div>
       </div>

    </main>

    



<?php
    include '../includes/footscript.php';
?>