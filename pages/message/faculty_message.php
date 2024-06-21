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
                        <button data-target="#sendMessageSMSFacultyModal" data-toggle="modal" class="btn btn-primary btn-sm  waves-effect"> <i class="small material-icons">near_me</i> Send SMS</button>
                        <button data-target="#deleteMessageModal" data-toggle="modal" class="btn btn-danger btn-sm  waves-effect"> <i class="small material-icons">delete_forever</i> Delete</button>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="body">
                                <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#inbox" data-toggle="tab"><i class="material-icons">mail</i> INBOX 
                                            <span class="badge bg-pink">
                                            <?php

                                            $inbox = mysqli_query($con,"SELECT * FROM tblinbox where sendto = '".$_SESSION['userid']."' and sender_name = 'Administrator'  ");
                                            $ct = mysqli_num_rows($inbox);
                                            echo $ct;
                                            ?>
                                            </span>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#sent" data-toggle="tab"><i class="material-icons">send</i> SENT 
                                            <span class="badge bg-pink">
                                            <?php

                                            $sent = mysqli_query($con,"SELECT * FROM tblsent where senderid = '".$_SESSION['userid']."' and sender_name != 'Administrator'  ");
                                            $ct1 = mysqli_num_rows($sent);
                                            echo $ct1;
                                            ?>
                                            </span>
                                        </a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <form method="post" >
                                <div class="tab-content">

                                    <div role="tabpanel" class="tab-pane fade in active" id="inbox">
                                 
                                            <table id="dttbl" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                <thead>
                                                    <th style="width: 10px !important;"><input type="checkbox" name="chk_delete[]" class="cbxMain" onchange="checkMain(this)"/></th>
                                                    <th>Sender</th>
                                                    <th>Subject</th>
                                                    <th>Message</th>
                                                    <th>Date</th>
                                                    <th style="width:40px;">Option</th>
                                                </thead> 
                                                <tbody>
                                                    <?php
                                                    $q = mysqli_query($con,"SELECT * from tblinbox where sendto = '".$_SESSION['userid']."' and sender_name = 'Administrator' order by message_date desc ");
                                                    while($row = mysqli_fetch_array($q)){
                                                        echo '
                                                        <tr>
                                                            <td><input type="checkbox" name="chk_delete[]" class="chk_delete" value="'.$row['id'].'" /></td>
                                                            <td>'.$row['sender_name'].'</td>
                                                            <td>'.$row['subject'].'</td>
                                                            <td>'.$row['message'].'</td>
                                                            <td>'.$row['message_date'].'</td>
                                                            <td><button type="button" data-target="#replyModal'.$row['id'].'" data-toggle="modal" class="btn btn-primary btn-sm  waves-effect"><i class="small material-icons">reply</i> Reply</button></td>
                                                        </tr>';

                                                        include "../modals/reply_modal.php";
                                                    }
                                                    ?>
                                                    
                                                </tbody>
                                            </table> 

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in" id="sent">
                                   
                                            <table id="dttbl1" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                <thead>
                                                    <th style="width: 10px !important;"><input type="checkbox" name="chk_deletesent[]" class="cbxMainsent" onchange="checkMainsent(this)"/></th>
                                                    <th>Send To</th>
                                                    <th>Subject</th>
                                                    <th>Message</th>
                                                    <th>Date</th>
                                                </thead> 
                                                <tbody>
                                                    <?php
                                                    $q = mysqli_query($con,"SELECT * from tblsent where senderid = '".$_SESSION['userid']."' and sender_name != 'Administrator' order by message_date desc ");
                                                    while($row = mysqli_fetch_array($q)){
                                                        echo '
                                                        <tr>
                                                            <td><input type="checkbox" name="chk_deletesent[]" class="chk_deletesent" value="'.$row['id'].'" /></td>
                                                            <td>Administrator</td>
                                                            <td>'.$row['subject'].'</td>
                                                            <td>'.$row['message'].'</td>
                                                            <td>'.$row['message_date'].'</td>
                                                        </tr>';

                                                        include "../modals/edit_modals.php";
                                                    }
                                                    ?>
                                                    
                                                </tbody>
                                            </table> 

                                        
                                    </div>
                                    
                                </div>
                                    <?php include "../modals/delete_modals.php"; ?> 

                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end container-->
    
            <?php include "../modals/sendmessage_modal.php"; ?> 
            <?php include "../notification/notification.php"; ?>         
            <?php include "../functions/send.php"; ?>          
            <?php include "../functions/reply.php"; ?>   
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
                "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0,4 ] } ],"aaSorting": []
            } );
            $('#dttbl1').DataTable( {
                "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0 ] } ],"aaSorting": []
            } );
        } ); 
    </script>
         