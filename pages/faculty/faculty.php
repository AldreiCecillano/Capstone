<?php 
session_start();
ob_start();
    include "../header.php"; 
?>
<?php include "../sidebar.php"; ?>
<?php include "../connection.php"; ?>
             
            <!-- START CONTENT -->
            <section class="content">
            <?php include "../modals/account_modal.php"; ?>
                <div class="container-fluid">
                    <div class="block-header">
                        <button data-target="#addFacultyModal" data-toggle="modal" class="btn btn-primary btn-sm  waves-effect"> <i class="small material-icons">add</i> Add Faculty</button>
                        <button data-target="#deleteFacultyModal" data-toggle="modal" class="btn btn-danger btn-sm  waves-effect"> <i class="small material-icons">delete_forever</i> Delete</button>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="body">
                                <form method="post">
                                    <table id="dttbl" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <th style="width: 10px !important;"><input type="checkbox" name="chk_delete[]" class="cbxMain" onchange="checkMain(this)"/></th>
                                            <th>Faculty Name</th>
                                            <th>Address</th>
                                            <th>Contact</th>
                                            <th>Username</th>
                                            <th style="width:40px;">Option</th>
                                        </thead> 
                                        <tbody>
                                            <?php
                                            $q = mysqli_query($con,"SELECT *,CONCAT(lname, ', ', fname, ' ',mname ) as name from tblfaculty");
                                            while($row = mysqli_fetch_array($q)){
                                                echo '
                                                <tr>
                                                    <td><input type="checkbox" name="chk_delete[]" class="chk_delete" value="'.$row['id'].'" /></td>
                                                    <td>'.$row['name'].'</td>
                                                    <td>'.$row['address'].'</td>
                                                    <td>'.$row['contact'].'</td>
                                                    <td>'.$row['username'].'</td>
                                                    <td><button type="button" data-target="#editFacultyModal'.$row['id'].'" data-toggle="modal" class="btn btn-primary btn-sm  waves-effect"><i class="small material-icons">create</i> Edit</button></td>
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
                "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0,2 ] } ],"aaSorting": []
            } );
        } ); 
    </script>
         