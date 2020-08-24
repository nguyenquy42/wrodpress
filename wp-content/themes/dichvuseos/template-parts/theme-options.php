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
        <tr>
        <th scope="row">add Số Dự Án Hoàn Thành</th>
            <td><input type="text" name="option_DAHT" value="<?=esc_attr( get_option('option_DAHT') ); ?>" /></td>
        </tr>
        <th scope="row">add Số Dự Án Hoạt Động</th>
            <td><input type="text" name="option_DAHD" value="<?=esc_attr( get_option('option_DAHD') ); ?>" /></td>
        </tr>
        <th scope="row">add Số Khách Hàng Hày Lòng</th>
            <td><input type="text" name="option_KHHL" value="<?=esc_attr( get_option('option_KHHL') ); ?>" /></td>
        </tr>
        <th scope="row">add Số Năm Kinh Nghiệm</th>
            <td><input type="text" name="option_NKN" value="<?=esc_attr( get_option('option_NKN') ); ?>" /></td>
        </tr>
   
    </table>
    <?php submit_button(); ?>
</form>
</div>