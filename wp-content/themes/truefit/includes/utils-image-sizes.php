<?php

if ( function_exists( 'pwad_add_image_size' ) ):

pwad_add_image_size( array(
	'name' => 'Wide',
	'key' => 'wide',
	'width' => 1600,
	'height' => 900,
	'crop' => true,
	'thumbnails' => array(
		array(
			'name' => 'X-Large',
			'key' => 'xlarge',
			'width' => 1440,
			'height' => 810,
		),
		array(
			'name' => 'Large',
			'key' => 'large',
			'width' => 1220,
			'height' => 686,
		),
		array(
			'name' => 'Medium',
			'key' => 'medium',
			'width' => 980,
			'height' => 551,
		),
		array(
			'name' => 'Small',
			'key' => 'small',
			'width' => 740,
			'height' => 416,
		),
		array(
			'name' => 'X-Small',
			'key' => 'xsmall',
			'width' => 500,
			'height' => 281,
		),
		array(
			'name' => 'XX-Small',
			'key' => 'xxsmall',
			'width' => 300,
			'height' => 169,
		),
	),
) );

pwad_add_image_size( array(
	'name' => 'Standard',
	'key' => 'standard',
	'width' => 1600,
	'height' => 1200,
	'crop' => true,
	'thumbnails' => array(
		array(
			'name' => 'X-Large',
			'key' => 'xlarge',
			'width' => 1440,
			'height' => 1080,
		),
		array(
			'name' => 'Large',
			'key' => 'large',
			'width' => 1220,
			'height' => 915,
		),
		array(
			'name' => 'Medium',
			'key' => 'medium',
			'width' => 980,
			'height' => 735,
		),
		array(
			'name' => 'Small',
			'key' => 'small',
			'width' => 740,
			'height' => 555,
		),
		array(
			'name' => 'X-Small',
			'key' => 'xsmall',
			'width' => 500,
			'height' => 375,
		),
		array(
			'name' => 'XX-Small',
			'key' => 'xxsmall',
			'width' => 300,
			'height' => 225,
		),
	),
) );

pwad_add_image_size( array(
	'name' => 'Square',
	'key' => 'square',
	'width' => 980,
	'height' => 980,
	'crop' => true,
	'thumbnails' => array(
		array(
			'name' => 'X-Large',
			'key' => 'xlarge',
			'width' => 740,
			'height' => 740,
		),
		array(
			'name' => 'Large',
			'key' => 'large',
			'width' => 500,
			'height' => 500,
		),
		array(
			'name' => 'Medium',
			'key' => 'medium',
			'width' => 300,
			'height' => 300,
		),
		array(
			'name' => 'Small',
			'key' => 'small',
			'width' => 150,
			'height' => 150,
		),
		array(
			'name' => 'X-Small',
			'key' => 'xsmall',
			'width' => 100,
			'height' => 100,
		),
		array(
			'name' => 'XX-Small',
			'key' => 'xxsmall',
			'width' => 50,
			'height' => 50,
		),
	),
) );

pwad_add_image_size( array(
	'name' => 'Tall',
	'key' => 'tall',
	'width' => 1200,
	'height' => 1600,
	'crop' => true,
	'thumbnails' => array(
		array(
			'name' => 'X-Large',
			'key' => 'xlarge',
			'width' => 1080,
			'height' => 1440,
		),
		array(
			'name' => 'Large',
			'key' => 'large',
			'width' => 915,
			'height' => 1220,
		),
		array(
			'name' => 'Medium',
			'key' => 'medium',
			'width' => 735,
			'height' => 980,
		),
		array(
			'name' => 'Small',
			'key' => 'small',
			'width' => 555,
			'height' => 740,
		),
		array(
			'name' => 'X-Small',
			'key' => 'xsmall',
			'width' => 375,
			'height' => 500,
		),
		array(
			'name' => 'XX-Small',
			'key' => 'xxsmall',
			'width' => 225,
			'height' => 300,
		),
	),
) );

pwad_add_image_size( array(
	'name' => 'Scaled',
	'key' => 'scaled',
	'width' => 1600,
	'height' => 0,
	'crop' => false,
	'thumbnails' => array(
		array(
			'name' => 'X-Large',
			'key' => 'xlarge',
			'width' => 1440,
			'height' => 0,
		),
		array(
			'name' => 'Large',
			'key' => 'large',
			'width' => 1220,
			'height' => 0,
		),
		array(
			'name' => 'Medium',
			'key' => 'medium',
			'width' => 980,
			'height' => 0,
		),
		array(
			'name' => 'Small',
			'key' => 'small',
			'width' => 740,
			'height' => 0,
		),
		array(
			'name' => 'X-Small',
			'key' => 'xsmall',
			'width' => 500,
			'height' => 0,
		),
		array(
			'name' => 'Small',
			'key' => 'small',
			'width' => 300,
			'height' => 0,
		),
	),
) );

else :

// Images Sizes
// Wide (16x9)
tf_add_image_size( 'wide-xxsmall', 300, 169, true );
tf_add_image_size( 'wide-xsmall',  500, 280, true );
tf_add_image_size( 'wide-small',   740, 416, true );
tf_add_image_size( 'wide-medium',  980, 551, true );
tf_add_image_size( 'wide-large',   1220, 686, true );
tf_add_image_size( 'wide-xlarge',  1440, 810, true );
tf_add_image_size( 'wide-xxlarge', 1600, 900, true );

// Full (3x2)
tf_add_image_size( 'standard-xxsmall', 300, 225, true );
tf_add_image_size( 'standard-xsmall',  500, 375, true );
tf_add_image_size( 'standard-small',   740, 555, true );
tf_add_image_size( 'standard-medium',  980, 735, true );
tf_add_image_size( 'standard-large',   1220, 915, true );
tf_add_image_size( 'standard-xlarge',  1440, 1080, true );
tf_add_image_size( 'standard-xxlarge', 1600, 1200, true );

// Square
tf_add_image_size( 'square-xxsmall', 50, 50, true );
tf_add_image_size( 'square-xsmall',  100, 100, true );
tf_add_image_size( 'square-small',   150, 150, true );
tf_add_image_size( 'square-medium',  300, 300, true );
tf_add_image_size( 'square-large',   500, 500, true );
tf_add_image_size( 'square-xlarge',  740, 740, true );
tf_add_image_size( 'square-xxlarge', 980, 980, true );

// Tall
tf_add_image_size( 'tall-xxsmall', 225, 280, true );
tf_add_image_size( 'tall-xsmall',  375, 470, true );
tf_add_image_size( 'tall-small',   555, 695, true );
tf_add_image_size( 'tall-medium',  735, 820, true );
tf_add_image_size( 'tall-large',   915, 1145, true );
tf_add_image_size( 'tall-xlarge',  1080, 1350, true );
tf_add_image_size( 'tall-xxlarge', 1200, 1500, true );

// Scaled / Original
tf_add_image_size( 'scaled-xxsmall', 300, 1000, false ); // Don't crop
tf_add_image_size( 'scaled-xsmall',  500, 1000, false ); // Don't crop
tf_add_image_size( 'scaled-small',   740, 1000, false ); // Don't crop
tf_add_image_size( 'scaled-medium',  980, 2000, false ); // Don't crop
tf_add_image_size( 'scaled-large',   1220, 2000, false ); // Don't crop
tf_add_image_size( 'scaled-xlarge',  1440, 2000, false ); // Don't crop
tf_add_image_size( 'scaled-xxlarge', 1600, 3000, false ); // Don't crop

endif;
