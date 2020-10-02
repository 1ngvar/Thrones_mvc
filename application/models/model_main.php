<?php

class Model_Main extends Model
{
	
	public function get_data()
	{
		return array(
			array(
				'House' => 'Baratheon',
				'Sigil' => 'A crowned stag',
				'Motto' => 'Ours is the Fury',
			),
			array(
				'Leader' => 'Eddard Stark',
				'House' => 'Stark',
				'Motto' => 'Winter is Coming',
				'Sigil' => 'A grey direwolf'
			),
			array(
				'House' => 'Lannister',
				'Leader' => 'Tywin Lannister',
				'Sigil' => 'A golden lion'
			),
			array(
				'Q' => 'Z'
			)
		);
	}

}

// Getting the data we need to build a table from arrays
function parse_arrays($data) {
	// Forming one array out of a multidimensional by merging values with repetitive keys
	$merged_arrays = merge_arrays( $data );

	// Sorting keys alphabetically
	$sorted_array = call_user_func(function(array $a){ksort($a);return $a;}, $merged_arrays);

	// Passing the resulting array to view for rendering
	createTable( $sorted_array );
}


function merge_arrays($arrays) {
	$merged_arrays = array();

	// Getting a count of indexes inside a multidimensional
	$i = count($arrays) - 1;

	while ($i >= 0)  {
		$merged_arrays = array_merge_recursive($merged_arrays, $arrays[$i]);
		$i--;
	}
	return $merged_arrays;
}