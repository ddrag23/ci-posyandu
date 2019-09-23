<!-- Begin Page Content -->
<?php
include "header.php";
include "navbar.php";
?>
<div class="container-fluid">
    <?php if (!empty($pageContent)) {
        include "application/views/" . $pageContent . ".php";
    } ?>
</div>
<?php
include "footer.php"
?>