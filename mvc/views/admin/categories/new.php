<h1>New Category</h1>
<?php
if (isset($_SESSION["email"]) && $_SESSION["role"] == "customer") {
  echo '<script type = "text/javascript">
  window.location.href = "http://localhost/web221/"</script>';
}
?>

<?php 
    require_once "../web221/mvc/views/admin/categories/form_category.php";
?>

<a href="http://localhost/web221/Category/index">Back</a>
