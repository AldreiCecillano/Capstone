<?php 
session_start();
ob_start();
    include "../header.php"; 
?>
<?php include "../sidebar.php"; ?>
<?php include "../connection.php"; 
$notifq = mysqli_query($con,"UPDATE tblnotification set status = 1 where facultyid = '".$_SESSION['userid']."' ");
?>
<script type="text/javascript">
    $('#countnotif').text("0");
</script>
             
            <!-- START CONTENT -->
            <section class="content">
            <?php include "../modals/account_modal.php"; ?>
                <div class="container-fluid">
                    <div class="block-header">
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="body">
                                <form method="post">
                                    <table id="dttbl" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <th>Date</th>
                                            <th>Notification</th>
                                        </thead> 
                                        <tbody>
                                            <?php
                                            $q = mysqli_query($con,"SELECT * from tblnotification where facultyid = '".$_SESSION['userid']."'  ");
                                            while($row = mysqli_fetch_array($q)){
                                                echo '
                                                <tr>
                                                    <td>'.$row['datetimenotif'].'</td>
                                                    <td>'.$row['notification'].'</td>
                                                </tr>';

                                                include "../modals/edit_modals.php";
                                            }
                                            ?>
                                            
                                        </tbody>
                                    </table> 

                                <?php include "../modals/delete_modals.php"; ?> 

                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end container-->
    
            <?php include "../modals/add_modals.php"; ?> 
            <?php include "../notification/notification.php"; ?>         
            <?php include "../functions/add.php"; ?>          
            <?php include "../functions/edit.php"; ?>   
            <?php include "../functions/delete.php"; ?> 
            

            </section>
            <!-- END CONTENT -->

            
        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->



    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <?php include "../footer.php"; ?>

    <script>
        $(document).ready(function() {
            $('#dttbl').DataTable( {
                "aoColumnDefs": [ { "bSortable": false, "aTargets": [  ] } ],"aaSorting": []
            } );
        } ); 
    </script>
         