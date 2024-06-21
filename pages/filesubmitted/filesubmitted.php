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
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="body" style="overflow-y:scroll; width: 100%;">
                                <form method="post">
                                    <table id="dttbl" class="table table-bordered table-striped table-hover js-basic-example dataTable" >
                                        <thead style="font-size:12px;">
                                            <?php
                                            if($_SESSION['role'] == "Administrator")
                                            {
                                            ?>
                                            <th>Faculty</th>
                                            <th>Filename</th>
                                            <th>Category</th>
                                            <th>Description</th>
                                            <th>Semester</th>
                                            <th>Schoolyear</th>
                                            <th>Date Uploaded</th>
                                            <th>Date Updated</th>
                                            <th>Status</th>
                                            <th>Remarks</th>
                                            <th style="width:5%;">Option</th>
                                            <?php
                                            }
                                            else
                                            {
                                            ?>
                                            <th>Filename</th>
                                            <th>Category</th>
                                            <th>Description</th>
                                            <th>Semester</th>
                                            <th>Schoolyear</th>
                                            <th>Date Uploaded</th>
                                            <th>Date Updated</th>
                                            <th>Status</th>
                                            <th>Remarks</th>
                                            <th style="width:5%;">Option</th>
                                            <?php
                                            }
                                            ?>
                                        </thead> 
                                        <tbody  style="font-size:12px;">
                                            <?php

                                            if($_SESSION['role'] == "Administrator")
                                            {
                                                $q = mysqli_query($con,"SELECT *,fs.id as fsid,fs.description as fsdescription 
                                                                        from tblfilessubmitted fs
                                                                        left join tblfaculty f on fs.facultyid = f.id 
                                                                        left join tblfilecategory fc on fs.categoryid = fc.id 
                                                                        left join tblsemester s on fs.semesterid = s.id 
                                                                        left join tblschoolyear sy on fs.schoolyearid = sy.id
                                                                        where fs.status = 'Not Yet Approve' ");
                                                while($row = mysqli_fetch_array($q)){
                                                    echo '
                                                    <tr>
                                                        <td>'.$row['lname'].', '.$row['mname'].'</td>
                                                        <td>'.$row['filename'].'</td>
                                                        <td>'.$row['categoryname'].'</td>
                                                        <td>'.$row['fsdescription'].'</td>
                                                        <td>'.$row['semester'].'</td>
                                                        <td>'.$row['schoolyear'].'</td>
                                                        <td>'.$row['dateuploaded'].'</td>
                                                        <td>'.$row['dateupdated'].'</td>
                                                        <td>'.$row['status'].'</td>
                                                        <td>'.$row['remarks'].'</td>
                                                        <td style="width:10%;">
                                                            <button type="button" data-target="#ApproveModal'.$row['fsid'].'" data-toggle="modal" class="btn btn-success btn-sm  waves-effect"><i class="small material-icons">done</i></button>
                                                            <button type="button" data-target="#RejectModal'.$row['fsid'].'" data-toggle="modal" class="btn btn-danger btn-sm  waves-effect"><i class="small material-icons">clear</i></button>
                                                        </td>
                                                    </tr>';

                                                    include "../modals/confirm_filesubmitted.php";
                                                }
                                            }
                                            else
                                            {
                                                $q = mysqli_query($con,"SELECT *,fs.id as fsid,fs.description as fsdescription 
                                                                        from tblfilessubmitted fs 
                                                                        left join tblfilecategory fc on fs.categoryid = fc.id 
                                                                        left join tblsemester s on fs.semesterid = s.id 
                                                                        left join tblschoolyear sy on fs.schoolyearid = sy.id 
                                                                        where fs.facultyid = '".$_SESSION['userid']."' ");
                                                while($row = mysqli_fetch_array($q)){
                                                    echo '
                                                    <tr>
                                                        <td>'.$row['filename'].'</td>
                                                        <td>'.$row['categoryname'].'</td>
                                                        <td>'.$row['fsdescription'].'</td>
                                                        <td>'.$row['semester'].'</td>
                                                        <td>'.$row['schoolyear'].'</td>
                                                        <td>'.$row['dateuploaded'].'</td>
                                                        <td>'.$row['dateupdated'].'</td>
                                                        <td>'.$row['status'].'</td>
                                                        <td>'.$row['remarks'].'</td>
                                                        <td style="width:5%;"><button type="button" data-target="#editSubmitFileModal'.$row['fsid'].'" data-toggle="modal" class="btn btn-primary btn-sm  waves-effect"><i class="small material-icons">create</i></button></td>
                                                    </tr>';

                                                    include "../modals/edit_modals.php";
                                                }
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
            <?php include "../functions/confirm.php"; ?>          
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
        <?php
        if($_SESSION['role'] == "Administrator"){
        ?>
        $(document).ready(function() {
            $('#dttbl').DataTable( {
                "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 10 ] } ],"aaSorting": []
            } );
        } ); 
        <?php
        }
        else
        {
        ?>
        $(document).ready(function() {
            $('#dttbl').DataTable( {
                "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 9 ] } ],"aaSorting": []
            } );
        } ); 
        <?php
        }
        ?>
    </script>
         