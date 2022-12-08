<?php
    $id = $data['id'];
    $_SESSION['category_id'] = $id;
    echo '<script type = "text/javascript">
        window.location.href = "http://localhost:8080/web212/home/catalog"</script>';

?>