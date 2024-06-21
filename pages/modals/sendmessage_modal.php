<div class="modal fade" id="sendMessageModal" tabindex="-1" role="dialog">
<form method="post">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="defaultModalLabel">Send Message</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>To:</label>
                            <div class="form-line">
                                <select name="ddl_to" class="form-control" required>
                                    <?php
                                    $q = mysqli_query($con,"SELECT * from tblfaculty");
                                    while($row = mysqli_fetch_array($q)){
                                        echo '
                                            <option value="'.$row['id'].'">'.$row['lname'].', '.$row['fname'].' </option>
                                        ';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Message:</label>
                            <div class="form-line">
                                <textarea name="txt_msg" cols="30" rows="5" class="form-control no-resize" required="" aria-required="true"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect" name="btn_send" >SEND</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</form>
</div>

<div class="modal fade" id="sendMessageSMSModal" tabindex="-1" role="dialog">
<form method="post">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="defaultModalLabel">Send SMS Message</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Number:</label>
                            <div class="form-line">
                                <input name="txt_num" type="number" min="0" class="form-control" placeholder="Number" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Message: (Max No. of Characters: 100)</label>
                            <div class="form-line">
                                <textarea name="txt_msg" cols="30" rows="5" class="form-control no-resize" required="" aria-required="true"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect" name="btn_sendsms" >SEND</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</form>
</div>

<div class="modal fade" id="sendMessageSMSFacultyModal" tabindex="-1" role="dialog">
<form method="post">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="defaultModalLabel">Send SMS Message</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Number:</label>
                            <div class="form-line">
                                <input name="txt_num" type="number" min="0" class="form-control" placeholder="Number" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Message: (Max No. of Characters: 100)</label>
                            <div class="form-line">
                                <textarea name="txt_msg" cols="30" rows="5" class="form-control no-resize" required="" aria-required="true"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect" name="btn_sendsmsfac" >SEND</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</form>
</div>










