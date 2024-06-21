<?php 
if(isset($_SESSION['added'])){
    echo '<script>$(document).ready(function (){
        showNotification("alert-success","Successfully Added","top","right","animated fadeInRight","animated fadeOutRight");
    });
    </script>';
    unset($_SESSION['added']);
} 

if(isset($_SESSION['edit'])){
    echo '<script>$(document).ready(function (){
        showNotification("alert-success","Edited Successfully","top","right","animated fadeInRight","animated fadeOutRight");
    });
    </script>';
    unset($_SESSION['edit']);
} 

if(isset($_SESSION['delete'])){
    echo '<script>$(document).ready(function (){
        showNotification("alert-danger","Deleted Successfully","top","right","animated fadeInRight","animated fadeOutRight");
    });
    </script>';
    unset($_SESSION['delete']);
} 

if(isset($_SESSION['duplicate'])){
    echo '<script>$(document).ready(function (){
        showNotification("alert-warning","Duplicate Record","top","right","animated fadeInRight","animated fadeOutRight");
    });
    </script>';
    unset($_SESSION['duplicate']);
}

if(isset($_SESSION['invalid'])){
    echo '<script>$(document).ready(function (){
        showNotification("alert-warning","Invalid File","top","right","animated fadeInRight","animated fadeOutRight");
    });
    </script>';
    unset($_SESSION['invalid']);
}


if(isset($_SESSION['approve'])){
    echo '<script>$(document).ready(function (){
        showNotification("alert-success","Submitted File Approved","top","right","animated fadeInRight","animated fadeOutRight");
    });
    </script>';
    unset($_SESSION['approve']);
}


if(isset($_SESSION['reject'])){
    echo '<script>$(document).ready(function (){
        showNotification("alert-danger","Submitted File Rejected","top","right","animated fadeInRight","animated fadeOutRight");
    });
    </script>';
    unset($_SESSION['reject']);
}

if(isset($_SESSION['account'])){
    echo '<script>$(document).ready(function (){
        showNotification("alert-success","Account Updated","top","right","animated fadeInRight","animated fadeOutRight");
    });
    </script>';
    unset($_SESSION['account']);
}

if(isset($_SESSION['sent'])){
    echo '<script>$(document).ready(function (){
        showNotification("alert-success","Message Successfully Send","top","right","animated fadeInRight","animated fadeOutRight");
    });
    </script>';
    unset($_SESSION['sent']);
}
  
?>

<script type="text/javascript">
    
function showNotification(colorName, text, placementFrom, placementAlign, animateEnter, animateExit) {
    if (colorName === null || colorName === '') { colorName = 'bg-black'; }
    if (text === null || text === '') { text = 'Turning standard Bootstrap alerts'; }
    if (animateEnter === null || animateEnter === '') { animateEnter = 'animated fadeInDown'; }
    if (animateExit === null || animateExit === '') { animateExit = 'animated fadeOutUp'; }
    var allowDismiss = true;

    $.notify({
        message: text
    },
        {
            type: colorName,
            allow_dismiss: allowDismiss,
            newest_on_top: true,
            timer: 500,
            placement: {
                from: placementFrom,
                align: placementAlign
            },
            animate: {
                enter: animateEnter,
                exit: animateExit
            },
            template: '<div data-notify="container" class="bootstrap-notify-container alert alert-dismissible {0} ' + (allowDismiss ? "p-r-35" : "") + '" role="alert">' +
            '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
            '<span data-notify="icon"></span> ' +
            '<span data-notify="title">{1}</span> ' +
            '<span data-notify="message">{2}</span>' +
            '<div class="progress" data-notify="progressbar">' +
            '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
            '</div>' +
            '<a href="{3}" target="{4}" data-notify="url"></a>' +
            '</div>'
        });
}
</script>

