<!-- inclusion du head -->
<?php
    include_once "./pages/controller.inc.php";
    include_once "./pages/head.inc.php";
?>
<body>

	<header>
		<h1><?= title ?></h1>
	</header>
   
    <!--  inclusion du main -->
	
	<?php
        include_once "./pages/main.inc.php";
    ?>
    <!-- inclusion du footer -->
	<?php
        include_once "./pages/footer.inc.php";
    ?>
	<pre>
    <?php print_r($_SERVER) ?>
    </pre>
</html>
