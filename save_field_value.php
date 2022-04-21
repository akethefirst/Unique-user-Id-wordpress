<?php 
//SAVE FIELD VALUE
add_action( 'user_register', 'customer_id' );

function customer_id($user_id) {
    // You can maybe add checks here whch would determine if the users role is customer
    // or not or maybe validate the number.

    if(!current_user_can('manage_options'))
        return false;

    $reg_value = get_user_meta($user_id, 'unique_customer_id', true);
    if (isset( $_POST['unique_customer_id']) &&  $_POST['unique_customer_id'] !== $reg_value) {
        update_user_meta($user_id, 'unique_customer_id', $_POST['unique_customer_id'].'-'.$user_id);
    }
}
