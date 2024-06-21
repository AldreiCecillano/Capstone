<div class="modal fade" id="replyModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog">
<form method="post" novalidate>
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="defaultModalLabel">Reply Message</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <input type="hidden" name="hidden_id" value="<?php echo $row['senderid']; ?>"/>
                        <input type="hidden" name="hidden_subj" value="<?php echo $row['subject']; ?>"/>
                        <div class="form-group">
                            <label>Subject:</label>
                            <div class="form-line">
                                <input disabled type="text" class="form-control" value="<?php echo $row['subject']; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Message:</label>
                            <div class="form-line">
                                <textarea name="txt_repmsg" cols="30" rows="5" class="form-control no-resize" ></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect" name="btn_reply" >SEND</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</form>
</div>