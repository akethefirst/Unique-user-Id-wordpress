
<?php 
//CREATION OF FIELDS

add_action( 'user_new_form', 'add_customer_id' );
add_action( 'edit_user_profile', 'add_customer_id' );
add_action( 'show_user_profile', 'add_customer_id' );


function add_customer_id( $user ) {
    ?>
    <h3><?php _e("Unique Customer ID", "blank"); ?></h3>
    <table class="form-table">
        <tr>
            <th><label for="unique_customer_id"><?php _e("Unique Customer ID"); ?></label></th>
            <td>
                <?php if (is_object($user)) { ?>
                    <input type="text" name="unique_customer_id" id="unique_customer_id" value="<?php echo esc_attr( get_the_author_meta( 'unique_customer_id', $user->ID )); ?>" class="regular-text" readonly disabled="disabled"/><br />
                <?php } else { ?>
                    <input type="text" name="unique_customer_id" id="unique_customer_id" class="regular-text" /><br />
                    <span class="description"><?php _e("Please nter Unique Customer ID."); ?></span>
                <?php } ?>
            </td>
        </tr>
    </table>
    
<?php 
//THE FIELD IS ONLY ENABLED WHEN A NEW USER IS CREATED. AN ALREADY REGISTERED USER WILL HAVE THEIRS DISPLAYED ON THEIR DASHBOARD
 }

