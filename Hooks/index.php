<?php 


// Filter hooks type:- 

// Add_filter()
// apply_filter()
// remove_filter()
// current_filter()
// has_filter()
// remove_all_filter()
// doing_filter()

// Action hooks:- 

// Add_action()
// do_action()
// has_action()
// Doing_action()
// remove_action()
// remove_all_filters()

?>


<?php
// action hooks
add_action( 'footer_scripts', 'custom_footer_scripts' );
function footer_scripts(){

$score = 100;
echo "Current score is : ". apply_filters( 'change_score', $score );
}


?>

<?php 
// filter hooks
// WordPress offers filter hooks to allow plugins to modify various types of internal data at runtime.

add_filter( 'change_score', 'function_change_score' );
function function_change_score( $score ){
 $score+=100;
 return $score;
}
?>

<?php
function example_callback( $example ) {
    // Maybe modify $example in some way.
    return $example;
}
add_filter( 'example_filter', 'example_callback' );

?>