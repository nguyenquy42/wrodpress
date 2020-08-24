<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'learn-php-lpt' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ulP@pr;v8b%nz9yfVXvg[L3x(3m[NtUA[eC~Cw,]e_*Qm>hUdocW-K9QVuf#3X8m' );
define( 'SECURE_AUTH_KEY',  '[%,wsW>d@`$-bc[F56BE#6<WyQx3AfM>SJwiPqr>@maRy?#Fa <;||;mJ; JTtqZ' );
define( 'LOGGED_IN_KEY',    'rAgTyl&tEGpZGvi!iwa n_l~-%Z;a,%*WV:S4E(jol~<E{|PnYU0j!]ckIMT^o_7' );
define( 'NONCE_KEY',        ':m6.odv;Msg+h`Cb*h?kmwWIe;^E;SZN4D|!_+AMcht c))b>7 ]>-UtSi6+Xk0z' );
define( 'AUTH_SALT',        'D~IU(_,Y|N0Of)V~OxDZ>=>RB9WOZZ#y4Q+d{>aZ*rt~ywph#8~SWn!sEA0V*>7V' );
define( 'SECURE_AUTH_SALT', '2bg8Jr3JMTc+7SGIvHFjyH]M,FlLC@h,+n>VvI])Zx>-@cH(b(.{@BfH)D:W6 5}' );
define( 'LOGGED_IN_SALT',   'to4A>0yu5?SMr0:-LkhCDm:L^f`@GD^GkWn72r.?ioWZJW!e`^Y7=EPv+OSiceHe' );
define( 'NONCE_SALT',       '%exQHA,JkOA-:lN$16H~Abej;0IX_&r5#6dlTaJzHINCUL7dV n]$-A[nb`Y(v/F' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
