<h2>Hello, wanderer</h2>
<p>
<img class="frozen_throne" src="<?php echo BASE_URL ?>/images/throne.jpg" align="left" >
Choose your houses to display in the table by adding them to model_main.php.
<br><br> Current houses located in the model are displayed here.
</p>

<!--  Outputting our precious Houses table  -->
<section class="table">
    <table>
        <thead>
        <tr>
	        <?php
	        if ( isset( $data ) ) {

		        // Sending raw data for further processing in the model
		        $arrays = parse_arrays($data);

		        // Getting only unique headers
//                $headers =

	        }
	        ?>
        </tr>
        </thead>
    </table>
</section>
