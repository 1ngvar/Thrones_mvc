<?php   if ( isset( $data ) ) {
	// Sending raw data for further processing in the model
	$arrays = parse_arrays($data);
	// Left as is for historical reasons
} ?>

<section class="description">
<h2>Hello, wanderer</h2>
<p>
<img class="frozen_throne" src="<?php echo BASE_URL ?>/images/throne.jpg" align="left" >
Choose your houses to display in the table by adding them to model_main.php.
<br><br> To display different array of houses just replace the existing one in the model file.
<br><br> Current houses located in the model are displayed here.
</p>
</section>


<!--  Outputting the Houses table  -->
<section class="table">
	<?php
        // This should have been exported as a public static function, but I am too tired to care
        createTable($GLOBALS['sortedArray']);
	?>
</section>
















