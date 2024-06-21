<?php include "../connection.php"; ?>

<!-- SEMESTER -->

<div class="modal fade" id="addSemesterModal" tabindex="-1" role="dialog">
<form method="post">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="defaultModalLabel">Add Semester</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Semester:</label>
                            <div class="form-line">
                                <input name="txt_sem" type="text" class="form-control" placeholder="Semester">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect" name="btn_addsem" >ADD</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</form>
</div>

<!-- SEMESTER -->



<!-- SCHOOL YEAR -->

<div class="modal fade" id="addSYModal" tabindex="-1" role="dialog">
<form method="post">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="defaultModalLabel">Add School Year</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>School Year:</label>
                            <div class="form-line">
                                <input name="txt_sy" type="text" class="form-control" placeholder="School Year">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect" name="btn_addsy" >ADD</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</form>
</div>

<!-- SCHOOL YEAR -->



<!-- FACULTY -->

<div class="modal fade" id="addFacultyModal" tabindex="-1" role="dialog">
<form method="post">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="defaultModalLabel">Add Faculty</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Faculty Id:</label>
                            <div class="form-line">
                                <input name="txt_facid" type="text" class="form-control" placeholder="Faculty Id">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Lastname:</label>
                            <div class="form-line">
                                <input name="txt_lname" type="text" class="form-control" placeholder="Lastname">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Firstname:</label>
                            <div class="form-line">
                                <input name="txt_fname" type="text" class="form-control" placeholder="Firstname">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Middlename:</label>
                            <div class="form-line">
                                <input name="txt_mname" type="text" class="form-control" placeholder="Middlename">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Address:</label>
                            <div class="form-line">
                                <input name="txt_address" type="text" class="form-control" placeholder="Address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Contact #:</label>
                            <div class="form-line">
                                <input name="txt_contact" type="number" min="0" class="form-control" placeholder="Contact #">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <div class="form-line">
                                <input name="txt_uname" type="text" class="form-control" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Password:</label>
                            <div class="form-line">
                                <input name="txt_pass" type="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect" name="btn_addfac" >ADD</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</form>
</div>

<!-- FACULTY -->



<!-- FILE CATEGORY -->

<div class="modal fade" id="addFileCatModal" tabindex="-1" role="dialog">
<form method="post">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="defaultModalLabel">Add File Category</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Category Name:</label>
                            <div class="form-line">
                                <input name="txt_cname" type="text" class="form-control" placeholder="Category Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Description:</label>
                            <div class="form-line">
                                <input name="txt_desc" type="text" class="form-control" placeholder="Description">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Deadline:</label>
                            <div class="form-line">
                                <input name="txt_dline" type="date" class="form-control" placeholder="Deadline">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect" name="btn_addfilecat" >ADD</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</form>
</div>

<script>
$(document).ready(function(){
    document.getElementsByName("txt_dline")[0].setAttribute('min', new Date().toISOString().split('T')[0]); 
});
</script>

<!-- FILE CATEGORY -->


<!-- DOWNLOADABLE FILE -->

<div class="modal fade" id="addDownloadableModal" tabindex="-1" role="dialog">
<form method="post" enctype="multipart/form-data">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="defaultModalLabel">Add Downloadable File</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>File:</label>
                            <div class="form-line">
                                <input name="txt_file" type="file" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Description:</label>
                            <div class="form-line">
                                <input name="txt_desc" type="text" class="form-control" placeholder="Description">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect" name="btn_adddownload" >ADD</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</form>
</div>


<!-- DOWNLOADABLE FILE -->



<!-- ACTIVITY -->

<div class="modal fade" id="addActivityModal" tabindex="-1" role="dialog">
<form method="post">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="defaultModalLabel">Add Activity</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Activity Name:</label>
                            <div class="form-line">
                                <input name="txt_aname" type="text" class="form-control" placeholder="Activity Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Description:</label>
                            <div class="form-line">
                                <input name="txt_desc" type="text" class="form-control" placeholder="Description">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Date:</label>
                            <div class="form-line">
                                <input name="txt_actdate" type="date" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect" name="btn_addact" >ADD</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</form>
</div>

<script>
$(document).ready(function(){
    document.getElementsByName("txt_actdate")[0].setAttribute('min', new Date().toISOString().split('T')[0]); 
});
</script>

<!-- ACTIVITY -->


<!-- UPLOAD FILE -->

<div class="modal fade" id="uploadFileModal" tabindex="-1" role="dialog">
<form method="post" enctype="multipart/form-data">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="defaultModalLabel">Upload File</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>File:</label>
                            <div class="form-line">
                                <input name="txt_files" type="file" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Category:</label>
                            <div class="form-line">
                                <select name="ddl_cat" class="form-control">
                                    <?php
                                    $q = mysqli_query($con,"SELECT * from tblfilecategory");
                                    while($row = mysqli_fetch_array($q)){
                                        echo '
                                            <option value="'.$row['id'].'">'.$row['categoryname'].'</option>
                                        ';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Description:</label>
                            <div class="form-line">
                                <input name="txt_desc" type="text" class="form-control" required placeholder="Description">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Semester:</label>
                            <div class="form-line">
                                <select name="ddl_sem" class="form-control">
                                    <?php
                                    $q = mysqli_query($con,"SELECT * from tblsemester");
                                    while($row = mysqli_fetch_array($q)){
                                        echo '
                                            <option value="'.$row['id'].'">'.$row['semester'].'</option>
                                        ';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>School Year:</label>
                            <div class="form-line">
                                <select name="ddl_sy" class="form-control">
                                    <?php
                                    $q = mysqli_query($con,"SELECT * from tblschoolyear");
                                    while($row = mysqli_fetch_array($q)){
                                        echo '
                                            <option value="'.$row['id'].'">'.$row['schoolyear'].'</option>
                                        ';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect" name="btn_upload" >UPLOAD</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</form>
</div>


<!-- UPLOAD FILE -->