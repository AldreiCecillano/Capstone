<!-- SEMESTER -->

<div class="modal fade" id="editSemesterModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog">
<form method="post">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="defaultModalLabel">Edit Semester</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <input type="hidden" name="hidden_idsem" value="<?php echo $row['id']; ?>"/>
                        <div class="form-group">
                            <label>Semester:</label>
                            <div class="form-line">
                                <input name="txt_edit_sem" type="text" class="form-control" placeholder="Semester" value="<?php echo $row['semester']; ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect" name="btn_savesem" >SAVE</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</form>     
</div>

<!-- SEMESTER -->

<!-- SCHOOL YEAR -->

<div class="modal fade" id="editSYModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog">
<form method="post">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="defaultModalLabel">Edit School Year</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <input type="hidden" name="hidden_idsy" value="<?php echo $row['id']; ?>"/>
                        <div class="form-group">
                            <label>School Year:</label>
                            <div class="form-line">
                                <input name="txt_edit_sy" type="text" class="form-control" value="<?php echo $row['schoolyear']; ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect" name="btn_savesy" >SAVE</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</form>     
</div>

<!-- SCHOOL YEAR -->


<!-- FACULTY -->

<div class="modal fade" id="editFacultyModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog">
<form method="post">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="defaultModalLabel">Edit Faculty</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <input type="hidden" name="hidden_idfac" value="<?php echo $row['id']; ?>"/>
                        <div class="form-group">
                            <label>Faculty Id:</label>
                            <div class="form-line">
                                <input name="txt_edit_facid" type="text" class="form-control" value="<?php echo $row['facultyid']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Lastname:</label>
                            <div class="form-line">
                                <input name="txt_edit_lname" type="text" class="form-control" value="<?php echo $row['lname']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Firstname:</label>
                            <div class="form-line">
                                <input name="txt_edit_fname" type="text" class="form-control" value="<?php echo $row['fname']; ?>">
                            </div>
                        </div><div class="form-group">
                            <label>Middlename:</label>
                            <div class="form-line">
                                <input name="txt_edit_mname" type="text" class="form-control" value="<?php echo $row['mname']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Address:</label>
                            <div class="form-line">
                                <input name="txt_edit_address" type="text" class="form-control" value="<?php echo $row['address']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Contact #:</label>
                            <div class="form-line">
                                <input name="txt_edit_contact" type="number" min="0" class="form-control" value="<?php echo $row['contact']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Username:</label>
                            <div class="form-line">
                                <input name="txt_edit_uname" type="text" class="form-control" value="<?php echo $row['username']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Password:</label>
                            <div class="form-line">
                                <input name="txt_edit_pass" type="password" class="form-control" value="<?php echo $row['password']; ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect" name="btn_savefac" >SAVE</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</form>     
</div>

<!-- FACULTY -->


<!-- FILE CATEGORY -->

<div class="modal fade" id="editFileCatModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog">
<form method="post">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="defaultModalLabel">Edit File Category</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <input type="hidden" name="hidden_idfilecat" value="<?php echo $row['id']; ?>"/>
                        <div class="form-group">
                            <label>File Category:</label>
                            <div class="form-line">
                                <input name="txt_edit_cname" type="text" class="form-control" value="<?php echo $row['categoryname']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Description:</label>
                            <div class="form-line">
                                <input name="txt_edit_desc" type="text" class="form-control" value="<?php echo $row['description']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Deadline:</label>
                            <div class="form-line">
                                <input name="txt_edit_dline" type="date" class="form-control" value="<?php echo $row['deadline']; ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect" name="btn_savefilecat" >SAVE</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</form>     
</div>

<script>
$(document).ready(function(){
    document.getElementsByName("txt_edit_dline")[0].setAttribute('min', new Date().toISOString().split('T')[0]); 
});
</script>

<!-- FILE CATEGORY -->


<!-- DOWNLOADABLE FILE -->

<div class="modal fade" id="editDownloadableModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog">
<form method="post"  enctype="multipart/form-data">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="defaultModalLabel">Edit Downloadable File</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <input type="hidden" name="hidden_iddownload" value="<?php echo $row['id']; ?>"/>
                        <div class="form-group">
                            <label>File:</label>
                            <div class="form-line">
                                <input name="txt_edit_file" type="file" class="form-control" value="<?php echo $row['downloadablefile']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Description:</label>
                            <div class="form-line">
                                <input name="txt_edit_desc" type="text" class="form-control" value="<?php echo $row['description']; ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect" name="btn_savedownload" >SAVE</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</form>     
</div>

<!-- DOWNLOADABLE FILE -->


<!-- ACTIVITY -->

<div class="modal fade" id="editActivityModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog">
<form method="post">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="defaultModalLabel">Edit Activity</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <input type="hidden" name="hidden_idact" value="<?php echo $row['id']; ?>"/>
                        <div class="form-group">
                            <label>Activity Name:</label>
                            <div class="form-line">
                                <input name="txt_edit_aname" type="text" class="form-control" value="<?php echo $row['activityname']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Description:</label>
                            <div class="form-line">
                                <input name="txt_edit_desc" type="text" class="form-control" value="<?php echo $row['description']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Date:</label>
                            <div class="form-line">
                                <input name="txt_edit_actdate" type="date" class="form-control" value="<?php echo $row['activity_date']; ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect" name="btn_saveact" >SAVE</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</form>     
</div>

<script>
$(document).ready(function(){
    document.getElementsByName("txt_edit_actdate")[0].setAttribute('min', new Date().toISOString().split('T')[0]); 
});
</script>

<!-- ACTIVITY -->


<!-- UPLOAD FILE -->

<div class="modal fade" id="editSubmitFileModal<?php echo $row['fsid'];?>" tabindex="-1" role="dialog">
<form method="post" enctype="multipart/form-data">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="defaultModalLabel">Edit Submitted File</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <input type="hidden" name="hidden_iddownload" value="<?php echo $row['fsid']; ?>"/>
                        <div class="form-group">
                            <label>File:</label>
                            <div class="form-line">
                                <input name="txt_edit_file" type="file" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Category:</label>
                            <div class="form-line">
                                <select name="edit_ddl_cat" class="form-control">
                                    <?php
                                    echo '<option value="'.$row['categoryid'].'">'.$row['categoryname'].'</option>';
                                    $q1 = mysqli_query($con,"SELECT * from tblfilecategory where id != '".$row['categoryid']."' ");
                                    while($row1 = mysqli_fetch_array($q1)){
                                        echo '
                                            <option value="'.$row1['id'].'">'.$row1['categoryname'].'</option>
                                        ';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Description:</label>
                            <div class="form-line">
                                <input name="txt_edit_desc" type="text" class="form-control" required placeholder="Description" value="<?php echo $row['fsdescription'];?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Semester:</label>
                            <div class="form-line">
                                <select name="edit_ddl_sem" class="form-control">
                                    <?php
                                    echo '<option value="'.$row['semesterid'].'">'.$row['semester'].'</option>';
                                    $q2 = mysqli_query($con,"SELECT * from tblsemester where id != '".$row['semesterid']."' ");
                                    while($row1 = mysqli_fetch_array($q2)){
                                        echo '
                                            <option value="'.$row1['id'].'">'.$row1['semester'].'</option>
                                        ';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>School Year:</label>
                            <div class="form-line">
                                <select name="edit_ddl_sy" class="form-control">
                                    <?php
                                    echo '<option value="'.$row['schoolyearid'].'">'.$row['schoolyear'].'</option>';
                                    $q3 = mysqli_query($con,"SELECT * from tblschoolyear where id != '".$row['schoolyearid']."' ");
                                    while($row1 = mysqli_fetch_array($q3)){
                                        echo '
                                            <option value="'.$row1['id'].'">'.$row1['schoolyear'].'</option>
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
                <button type="submit" class="btn btn-link waves-effect" name="btn_edit_upload" >SAVE</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</form>
</div>


<!-- UPLOAD FILE -->