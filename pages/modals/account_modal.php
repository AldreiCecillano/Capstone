<div class="modal fade" id="AccountModal" tabindex="-1" role="dialog">
<form method="post">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="defaultModalLabel">Account</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <?php
                        if($_SESSION['role'] == "Administrator")
                        {
                            $q1 = mysqli_query($con, "SELECT * from tbladmin where id = '".$_SESSION['userid']."' ");
                        }
                        else{
                            $q1 = mysqli_query($con, "SELECT * from tblfaculty where id = '".$_SESSION['userid']."' ");
                        }
                        while($row = mysqli_fetch_array($q1)){
                            echo '
                                <div class="form-group">
                                    <label>Username:</label>
                                    <div class="form-line">
                                        <input name="txt_uname" type="text" class="form-control" value="'.$row['username'].'" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Password:</label>
                                    <div class="form-line">
                                        <input name="txt_pass" type="password" class="form-control" value="'.$row['password'].'" placeholder="Password">
                                    </div>
                                </div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect" name="btn_acct" >SAVE</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</form>
</div>

<?php
            if(isset($_POST['btn_acct'])){
                $uname = $_POST['txt_uname'];
                $pass = $_POST['txt_pass'];

                if($_SESSION['role'] == "Administrator"){
                    $u = mysqli_query($con, "UPDATE tbladmin set username = '".$uname."', password = '".$pass."' ");
                }
                else{
                    $u = mysqli_query($con, "UPDATE tblfaculty set username = '".$uname."', password = '".$pass."' ");
                }

                if($u == true){
                    $_SESSION['account'] = 1;
                    header ("location: ".$_SERVER['REQUEST_URI']);
                    exit;
                }
            }

            ?>