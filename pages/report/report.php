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
                        <button data-target="#addSemesterModal" data-toggle="modal" class="btn btn-primary btn-sm  waves-effect"> <i class="small material-icons">add</i> Add Semester</button>
                        <button data-target="#deleteSemesterModal" data-toggle="modal" class="btn btn-danger btn-sm  waves-effect"> <i class="small material-icons">delete_forever</i> Delete</button>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="header">
                                    <h2>NO. OF FILES SUBMITTED PER FACULTY</h2>
                                </div>
                                <div class="body">
                                  <div id="bargraph" class="graph"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="header">
                                    <h2>NO. OF FILES SUBMITTED PER SCHOOLYEAR</h2>
                                </div>
                                <div class="body">
                                  <div id="bargraphsy" class="graph"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end container-->
    
            

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
         
<script>
  Morris.Bar({
    element: 'bargraph',
    data: [
      <?php

          $qry = mysqli_query($con,"SELECT *,count(*) as cnt,CONCAT(lname, ', ', fname) as name FROM tblfilessubmitted fs left join tblfaculty f on fs.facultyid = f.id group by fs.facultyid ");
          while($row=mysqli_fetch_array($qry)){
          echo "{y:'".$row['name']."',a:'".$row['cnt']."'},";
          }
      ?>
    ],
    xkey: 'y',
    ykeys: ['a'],
    labels: ['Files per Faculty'],
    hideHover: 'auto'
  });

  Morris.Bar({
    element: 'bargraphsy',
    data: [
      <?php

          $qry = mysqli_query($con,"SELECT *,count(*) as cnt FROM tblfilessubmitted fs left join tblschoolyear sy on fs.schoolyearid = sy.id group by fs.schoolyearid ");
          while($row=mysqli_fetch_array($qry)){
          echo "{y:'".$row['schoolyear']."',a:'".$row['cnt']."'},";
          }
      ?>
    ],
    xkey: 'y',
    ykeys: ['a'],
    labels: ['Files per School Year'],
    hideHover: 'auto'
  });

  
</script>