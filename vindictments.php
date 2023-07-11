<?php
error_reporting(0);
    include '../includes/usersheader.php';
    $db = mysqli_connect('localhost', 'root', '', 'macscidb');
    $sql = " SELECT id,fullname,createdby,creator_organization,region,status FROM indictments";
    $query = mysqli_query($db,$sql);
    // $fetch[] = mysqli_fetch_assoc($query);
    while($fetch= mysqli_fetch_assoc($query))
    {
       $array[] = $fetch;
    }

?>


       <div class="list-of-victims-body">
            <div class="list-of-victims-header">
                <div class="account-setting-select-setting">
                    <div class="info-setting-block-select" style="margin-top: 2rem;">
                        <h4 class="p-info-head"><a href="#">list of indictments</a></h4>
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

            <div class="list-of-victims-select-category">
                <div class="category-v-list">
                    <!-- <div class="indicts-no">
                        <p></p>
                    </div> -->
                    <div class="indicts-cat">
                        <p><a href="vucindictments.php">unconfirmed indicts</a></p>
                    </div>
                </div>
                <div class="category-v-list">
                    <!-- <div class="indicts-no">
                        <p></p>
                    </div> -->
                    <div class="indicts-cat">
                        <p><a href="vcindictments.php">confirmed indicts</a></p>
                    </div>
                </div>
                <div class="category-v-list">
                    <!-- <div class="indicts-no">
                        <p></p>
                    </div> -->
                    <div class="indicts-cat">
                        <p><a href="vindictments.php">all indictments</a></p>
                    </div>
                </div>
            </div>


            <div class="list-of-victims-table">
                <table class="my-victims-table">
                    <tr class="my-victims-table-scss">
                        <th class="numbers-vlist">s/n</th>
                        <th style="text-align: left;">victim name</th>
                        <th class="" style="text-align: left;">reporter name</th>
                        <th class="">NGO</th>
                        <th class="in-reg">region</th>
                        <th class="in-td">status</th>
                        <!-- <th class="in-td">action</th> -->
                    </tr>
                    <?php foreach($array as $data)
                    { ?>
                    
                    <tr class="my-victims-table-scss">
                        <td><?php echo $data['id']; ?></td>
                        <td class="" style="text-align: left;"><?php echo $data['fullname']; ?> </td>
                        <td class="" style="text-align: left;"><?php echo $data['createdby']; ?></td>
                        <td class="in-reg"><?php echo $data['creator_organization']; ?></td>
                        <td class="n-left" style="text-align: center;"><?php echo $data['region']; ?> </td>
                        <td class="n-left" style="text-align: center;"><?php echo $data['status']; ?> </td>
                        <!-- <td class="w-px">
                        <button><a href="../macscidbmain/overrite.php?name=update&id=<?php echo $data['id']?>">Export report</a></button>
                        </td> -->
                    </tr>
                 <?php 
                 } ?>
                </table>
            </div>

       </div>


    </main>

    


<?php
    include '../includes/footscript.php';
?>