<?php
include_once 'assets/includes/header.php';
 ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Estatística Admin</h2>
                    </div>
                </div>
                <!-- /. ROW  -->
                <?php
                    include_once '../php_action/connect.php';
                  ?>
                <hr />



                <canvas id="myChart"></canvas>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

<?php
include_once 'assets/includes/footer.php';
 ?>
