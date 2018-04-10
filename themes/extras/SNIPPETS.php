// https://codex.wordpress.org/Function_Reference/get_children
function getCateringOptionField(){
    $args = array(
        // 'post_parent' => 0,
        'post_type'   => 'jetpack-portfolio', 
        'numberposts' => -1,
        'post_status' => 'any' 
    );
    $children = get_children( $args );

    $text = '<div><label for="arende" class="grunion-field-label select">Jag är intresserad av</label><select name="arende" id="arende" class="select">';

    if ( empty($children) ) {
        // no attachments here
    } else {
        foreach ( $children as $child_id => $child ) {
            $value = 'Catering: ' . $child->post_title;
            $text = $text . '<option value="' . $value . '">' . $value . '</option>';
        }
    }

    // 'Catering: Egen meny'
    $value = 'Catering: Komponera en egen meny';
    $text = $text . '<option value="' . $value . '">' . $value . '</option>';    

    return $text . '</select></div>';
    }
    add_shortcode('catering-option-field', 'getCateringOptionField');      



// function debug_to_console( $data ) {
//     $output = $data;
//     if ( is_array( $output ) )
//         $output = implode( ',', $output);

//     echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
// }