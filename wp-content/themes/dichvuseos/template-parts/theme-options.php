<div class="wrap">
<h1>Cấu hình Giao diện trang chủ LPTech</h1>
<form method="post" action="options.php">
    <?php settings_fields( 'lptech-themes-settings-group' ); ?>
    <?php do_settings_sections( 'lptech-themes-settings-group' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Limit Post Block 1</th>
        <td><input type="text" name="new_option_name" value="<?=esc_attr( get_option('new_option_name') ); ?>" /></td>
        </tr>
   
    </table>
    <?php submit_button(); ?>
</form>
</div>