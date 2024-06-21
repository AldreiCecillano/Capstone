<section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info" style="height: 85px;">
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php
                        include "connection.php";

                            if($_SESSION['role'] == "Administrator")
                            {
                                $p = mysqli_query($con,"SELECT * from tbladmin where id = '".$_SESSION['userid']."' ");
                                $row = mysqli_fetch_array($p);
                                echo 'Administrator';
                            }
                            else{
                                $p = mysqli_query($con,"SELECT * from tblfaculty where id = '".$_SESSION['userid']."' ");
                                $row = mysqli_fetch_array($p);
                                echo $row['lname'].', '.$row['fname'];
                            }

                        ?>
                    </div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#AccountModal" data-target="#AccountModal" data-toggle="modal"><i class="material-icons">settings</i>Account</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="../logout.php"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <?php
                    if($_SESSION['role'] == "Administrator")
                    {
                    ?>
                        <li>
                            <a href="../../pages/message/message.php">
                                <i class="material-icons">mail</i>
                                <span>Message</span>
                            </a>
                        </li>
                        <li>
                            <a href="../../pages/semester/semester.php">
                                <i class="material-icons">school</i>
                                <span>Semester</span>
                            </a>
                        </li>
                        <li >
                            <a href="../../pages/schoolyear/schoolyear.php">
                                <i class="material-icons">event_available</i>
                                <span>School Year</span>
                            </a>
                        </li>
                        <li >
                            <a href="../../pages/faculty/faculty.php">
                                <i class="material-icons">person</i>
                                <span>Faculty</span>
                            </a>
                        </li>
                        <li >
                            <a href="../../pages/filecategory/filecategory.php">
                                <i class="material-icons">bookmark</i>
                                <span>File Category</span>
                            </a>
                        </li>
                        <li >
                            <a href="../../pages/filesubmitted/filesubmitted.php">
                                <i class="material-icons">near_me</i>
                                <span>Submitted File</span>
                                <span class="pull-right badge bg-pink">
                                    <?php
                                    include "connection.php";

                                    $notif = mysqli_query($con,"SELECT * FROM tblfilessubmitted");
                                    $ct = mysqli_num_rows($notif);
                                    echo $ct;
                                    ?>
                                </span>
                            </a>
                        </li>
                        <li >
                            <a href="../../pages/approve/approve.php">
                                <i class="material-icons">check</i>
                                <span>Approved File</span>
                            </a>
                        </li>
                        <li >
                            <a href="../../pages/downloadable/downloadable.php">
                                <i class="material-icons">file_download</i>
                                <span>Downloadable File</span>
                            </a>
                        </li>
                        <li >
                            <a href="../../pages/activity/activity.php">
                                <i class="material-icons">assignment</i>
                                <span>Activity</span>
                            </a>
                        </li>
                        <li >
                            <a href="../../pages/report/report.php">
                                <i class="material-icons">equalizer</i>
                                <span>Report</span>
                            </a>
                        </li>
                    <?php
                    }
                    else
                    {
                    ?>
                        <li>
                            <a href="../../pages/message/faculty_message.php">
                                <i class="material-icons">mail</i>
                                <span>Message</span>
                            </a>
                        <li >
                            <a href="../../pages/downloadable/downloadable.php">
                                <i class="material-icons">file_download</i>
                                <span>Downloadable File</span>
                            </a>
                        </li>
                        <li >
                            <a href="../../pages/notification/facultynotif.php" id="notifid">
                                <i class="material-icons">notifications_active</i>
                                <span>Notification </span>
                                <span class="pull-right badge bg-pink" id="countnotif">
                                    <?php
                                    include "connection.php";

                                    $notif = mysqli_query($con,"SELECT * from tblnotification where facultyid = '".$_SESSION['userid']."' and status = 0 ");
                                    $ct = mysqli_num_rows($notif);
                                    echo $ct;
                                    ?>
                                </span>
                            </a>
                        </li>
                        <li >
                            <a href="../../pages/activity/activity.php">
                                <i class="material-icons">assignment</i>
                                <span>Activity</span>
                            </a>
                        </li>
                        <li >
                            <a href="../../pages/files/files.php">
                                <i class="material-icons">send</i>
                                <span>Files to Submit</span>
                                <span class="pull-right badge bg-pink">
                                    <?php
                                    include "connection.php";

                                    $notif = mysqli_query($con,"SELECT * FROM tblfilecategory where id not in (select categoryid from tblfilessubmitted where facultyid = '".$_SESSION['userid']."') and deadline >= DATE(NOW())");
                                    $ct = mysqli_num_rows($notif);
                                    echo $ct;
                                    ?>
                                </span>
                            </a>
                        </li>
                        <li >
                            <a href="../../pages/filesubmitted/filesubmitted.php">
                                <i class="material-icons">near_me</i>
                                <span>Files Submitted</span>
                            </a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <!-- #Menu -->
            
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2024 <a href="javascript:void(0);">EfficienSee</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1 and only
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->