<?php 
    require_once 'config/db.php';
    require_once 'library/check.php'; 
    require_once 'action/user-info.php'; 
    global $admin
?>
<?php if($admin):?>



    





<?php else:?>
    echo '<script>location='index.php';</script>';
<?php endif;?>