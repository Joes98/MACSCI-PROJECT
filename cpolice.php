<?php
session_start();
    include '../includes/cpoliceheader.php';
?>


    <div class="dasboard-contents">
        <div class="dashboard-contents-left">
            <div class="contents-left-image">
                <img src="../images/hi macsci logo small.png" alt="">
            </div>
            <div class="contents-left-contents">
                <div class="left-contents-blw-img-header">
                    <h3 class="lf-blw-img">
                        Central police' module
                    </h3>
                </div>
                <div class="left-contents-blw-img-contents">
                    <p class="blw-header">welcome 
                        <?php echo @$_SESSION['uname']; ?>
                    </p>
                    <p class="blw-header">
                    <?php
                        @$add =  $_SESSION['address'];
                        @$org =  $_SESSION['organization'];
                        print $org." ".$add;
                    ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="dashboard-contents-right">
            <div class="contents-right">
                <div class="con-right-header">
                    <h5 class="rt-header">
                        some NGOs collaborators
                    </h5>
                </div>
                <div class="con-right-contents">
                    <div class="con-right">
                        <h3 class="right-num">
                            2 , total
                        </h3>
                        <p class="right-num-link">
                            <a href="">View all</a>
                        </p>
                    </div>
                    <div class="con-left">
                        <p class="left-list">
                            <a href="">TSUAD</a>
                        </p>
                        <p class="left-list">
                            <a href="">SILKY</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="contents-right">
                <div class="con-right-header">
                    <h5 class="rt-header">
                        some indictments
                    </h5>
                </div>
                <div class="con-right-contents">
                    <div class="con-right">
                        <h3 class="right-num">
                            2 , total
                        </h3>
                        <p class="right-num-link">
                            <a href="">View all</a>
                        </p>
                    </div>
                    <div class="con-left">
                        <p class="left-list">
                            <a href="">TSUAD</a>
                        </p>
                        <p class="left-list">
                            <a href="">SILKY</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="contents-right">
                <div class="con-right-header">
                    <h5 class="rt-header">
                        some victims
                    </h5>
                </div>
                <div class="con-right-contents">
                    <div class="con-right">
                        <h3 class="right-num">
                            2 , total
                        </h3>
                        <p class="right-num-link">
                            <a href="">View all</a>
                        </p>
                    </div>
                    <div class="con-left">
                        <p class="left-list">
                            <a href="">TSUAD</a>
                        </p>
                        <p class="left-list">
                            <a href="">SILKY</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="contents-right">
                <div class="con-right-header">
                    <h5 class="rt-header">
                        some central posts
                    </h5>
                </div>
                <div class="con-right-contents">
                    <div class="con-right">
                        <h3 class="right-num">
                            2 , total
                        </h3>
                        <p class="right-num-link">
                            <a href="">View all</a>
                        </p>
                    </div>
                    <div class="con-left">
                        <p class="left-list">
                            <a href="">Mbeya</a>
                        </p>
                        <p class="left-list">
                            <a href="">Mwanza</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    


    </main>

<?php
    include '../includes/footscript.php';
?>