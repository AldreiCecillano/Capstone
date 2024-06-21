<?php 
session_start();
ob_start();
    include "../header.php"; 
?>
<style>
    .form-control { padding: 0px !important;}
    .dropdown-toggle { display: none !important;}
</style>
<?php include "../sidebar.php"; ?>
<?php include "../connection.php"; ?>
             
            <!-- START CONTENT -->
            <section class="content">
            <?php include "../modals/account_modal.php"; ?>
                <div class="container-fluid">
                    <div class="block-header">
                    <?php
                    $q = mysqli_query($con,"SELECT * FROM tblfilecategory where id not in (select categoryid from tblfilessubmitted where facultyid = '".$_SESSION['userid']."')");
                    $ct = mysqli_num_rows($q);
                    if($ct > 0){
                       echo '<button data-target="#uploadFileModal" data-toggle="modal" class="btn btn-primary btn-sm  waves-effect"> <i class="small material-icons">file_upload</i> Upload Files</button>';
                    }
                    
                    ?>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="body">
                                <form method="post">
                                    <table id="dttbl" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <th>File Category</th>
                                            <th>Description</th>
                                            <th>Deadline</th>
                                        </thead> 
                                        <tbody>
                                            <?php
                                            $q = mysqli_query($con,"SELECT * FROM tblfilecategory where id not in (select categoryid from tblfilessubmitted where facultyid = '".$_SESSION['userid']."') and deadline >= DATE(NOW())") or die(mysqli_error($con)) ;
                                            while($row = mysqli_fetch_array($q)){
                                                echo '
                                                <tr>
                                                    <td>'.$row['categoryname'].'</td>
                                                    <td>'.$row['description'].'</td>
                                                    <td>'.$row['deadline'].'</td>
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
         