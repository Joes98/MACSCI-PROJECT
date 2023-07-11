<?php
error_reporting(0);
    include '../includes/adminheader.php';
    $db = mysqli_connect('localhost', 'root', '', 'macscidb');
    $sql = " SELECT id,fullname,createdby,creator_organization,region,status FROM indictments WHERE status='Unconfirmed'";
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
                        <h4 class="p-info-head"><a href="#">confirm indictments</a></h4>
                    </div>
                    <!-- <div class="info-setting-block-select">
                        <h4 class="p-info-head"><a href="adminsetmainw2.php">add working info</a></h4>
                    </div> -->
                </div>
                <!-- <div class="v-header-search">
                    <div class="v-header-s-img">
                        <img src="images/magnifying-glass.png" alt="">
                    </div>
                    <div class="v-header-s-input">
                        <input type="search" name="" id="" required placeholder="Search victims...">
                    </div>
                </div> -->
            </div>
            <div class="list-of-victims-table">
                <table class="my-victims-table">
                    <tr class="my-victims-table-scss">
                        <th class="numbers-vlist">s/n</th>
                        <th>victim name</th>
                        <th class="">reporter name</th>
                        <th class="">NGO</th>
                        <th class="in-reg">region</th>
                        <th class="in-td">status</th>
                        <th class="in-td">action</th>
                    </tr>
                    <?php foreach($array as $data)
                    { ?>
                    
                    <tr class="my-victims-table-scss">
                        <td><?php echo $data['id']; ?></td>
                        <td class=""><?php echo $data['fullname']; ?> </td>
                        <td class=""><?php echo $data['createdby']; ?></td>
                        <td class="in-reg"><?php echo $data['creator_organization']; ?></td>
                        <td class="n-left" style="text-align: center;"><?php echo $data['region']; ?> </td>
                        <td class="n-left" style="text-align: center;"><?php echo $data['status']; ?> </td>
                        <td class="w-px">
                            <a href="../macscidbmain/overrite.php?name=update&id=<?php echo $data['id']?>">confirm now</a>
                        </td>
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