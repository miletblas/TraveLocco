
<?php 
	include "header.php";
	include "navbar.php"; 
?>

<main id="view-panel" >
	<?php 
		$page = isset($_GET['page']) ? $_GET['page'] :'dash_home';
		include $page.'.php';
	?>

</main>
