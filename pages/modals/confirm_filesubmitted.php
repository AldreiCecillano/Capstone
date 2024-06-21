<!-- UPLOAD FILE -->

<div class="modal fade" id="ApproveModal<?php echo $row['fsid'];?>" tabindex="-1" role="dialog">
<form method="post" >
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="defaultModalLabel">Approve Submitted File</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <input type="hidden" name="approve_id" value="<?php echo $row['fsid']; ?>"/>
                        <div class="form-group">
                            <label>Remarks:</label>
                            <div class="form-line">
                                <input name="txt_remarks" type="text" class="form-control" required placeholder="Remarks">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect" name="btn_approve" >APPROVE</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</form>
</div>


<div class="modal fade" id="RejectModal<?php echo $row['fsid'];?>" tabindex="-1" role="dialog">
<form method="post" >
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="defaultModalLabel">Reject Submitted File</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <input type="hidden" name="reject_id" value="<?php echo $row['fsid']; ?>"/>
                    <div class="col-sm-12">
                        Are you sure you want to reject submitted file? 
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect" name="btn_reject" >REJECT</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</form>
</div>


<!-- UPLOAD FILE -->