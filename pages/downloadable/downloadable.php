<?php 
session_start();
if(!isset($_SESSION['role']))
{
    header("Location: ../login.php"); 
}
else
{
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
                        <?php
                        if($_SESSION['role'] == "Administrator")
                        {
                        ?>
                        <button data-target="#addDownloadableModal" data-toggle="modal" class="btn btn-primary btn-sm  waves-effect"> <i class="small material-icons">add</i> Add Downloadable</button>
                        <button data-target="#deleteDownloadableModal" data-toggle="modal" class="btn btn-danger btn-sm  waves-effect"> <i class="small material-icons">delete_forever</i> Delete</button>
                        <?php
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
                                            <?php
                                            if($_SESSION['role'] == "Administrator"){
                                            ?>
                                            <th style="width: 10px !important;"><input type="checkbox" name="chk_delete[]" class="cbxMain" onchange="checkMain(this)"/></th>
                                            <?php
                                            }
                                            ?>
                                            <th>Downloadable File</th>
                                            <th>Description</th>
                                            <?php
                                            if($_SESSION['role'] == "Administrator"){
                                            ?>
                                            <th style="width:40px;">Option</th>
                                            <?php
                                            }
                                            else
                                            {
                                            ?>
                                            <th style="width:80px;">Option</th>
                                            <?php
                                            }
                                            ?>
                                        </thead> 
                                        <tbody>
                                            <?php

                                            if($_SESSION['role'] == "Administrator"){
                                                $q = mysqli_query($con,"SELECT * from tbldownloadable");
                                                while($row = mysqli_fetch_array($q)){
                                                    echo '
                                                    <tr>
                                                        <td><input type="checkbox" name="chk_delete[]" class="chk_delete" value="'.$row['id'].'" /></td>
                                                        <td>'.$row['downloadablefile'].'</td>
                                                        <td>'.$row['description'].'</td>
                                                        <td><button type="button" data-target="#editDownloadableModal'.$row['id'].'" data-toggle="modal" class="btn btn-primary btn-sm  waves-effect"><i class="small material-icons">create</i> Edit</button></td>
                                                    </tr>';

                                                    include "../modals/edit_modals.php";
                                                }
                                            }
                                            else{
                                                $q = mysqli_query($con,"SELECT * from tbldownloadable");
                                                while($row = mysqli_fetch_array($q)){
                                                    $file = $row['downloadablefile'];
                                                    $ext = pathinfo($row['downloadablefile'], PATHINFO_EXTENSION);

                                                    echo '
                                                    <tr>
                                                        <td>'.$row['downloadablefile'].'</td>
                                                        <td>'.$row['description'].'</td>
                                                        <td>';
                                                        if($ext == 'pdf'){
                                                            echo'
                                                            <a href="downloadable.php?preview_file='.$file.'" target="_blank" class="btn btn-primary btn-sm  waves-effect" title="View"><i class="small material-icons">search</i> </a>
                                                             ';
                                                        }  
                                                    echo '<a href="downloadable.php?download_file='.$file.'" class="btn btn-primary btn-sm  waves-effect" title="Download"><i class="small material-icons">file_download</i> </a>
                                                         </td>
                                                    </tr>';

                                                }
                                            }
                                            ?>
                                            
                                        </tbody>
                                    </table> 

                                <?php 
                                    include "../modals/delete_modals.php"; 

                                    if(isset($_GET['preview_file']))
                                    {
                                    $downloadfile = $_GET['preview_file'];
                                    header('Content-type: application/pdf');
                                    header('Content-Transfer-Encoding: binary');
                                    header('Accept-Ranges: bytes');
                                    ob_clean();
                                    flush();
                                    readfile('files/'.$downloadfile);
                                    }

                                    if(isset($_GET['download_file']))
                                    {
                                    $downloadfile = $_GET['download_file'];
                                    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
                                    header('Content-Type: application/octet-stream'); 
                                    header('Content-transfer-encoding: binary'); 
                                    header('Content-length: ' .filesize('files/'.$downloadfile)); 
                                    header('Content-Disposition: attachment; filename="' .basename($downloadfile).'" '); 
                                    ob_clean();
                                    flush();
                                    readfile('files/'.$downloadfile);
                                    }
                                ?> 

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
        <?php
        if($_SESSION['role'] == "Administrator")
        {
        ?>

        $(document).ready(function() {
            $('#dttbl').DataTable( {
                "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0,3 ] } ],"aaSorting": []
            } );
        } ); 

        <?php
        }
        else
        {
        ?>

        $(document).ready(function() {
            $('#dttbl').DataTable( {
                "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 2 ] } ],"aaSorting": []
            } );
        } ); 

        <?php
        }
        ?>
    </script>
         
<?php
}
?>