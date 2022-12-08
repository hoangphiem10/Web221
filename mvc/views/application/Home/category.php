<?php
    $id = $data['id'];
    $_SESSION['category_id'] = $id;
    echo '<script type = "text/javascript">
        window.location.href = "http://localhost/web221/home/catalog"</script>';

?>