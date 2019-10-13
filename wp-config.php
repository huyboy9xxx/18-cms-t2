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
define( 'DB_NAME', 'cms1' );

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
define( 'AUTH_KEY',         '=3,/W*Fl~wC,S_Dx<F1;J!+ia?9|k&1xuH7Yacs@rDIw*$5{E!6,^&(!;`=}_:}`' );
define( 'SECURE_AUTH_KEY',  '3c,+v6e}z|ZxHf,OgM3a>9gMNESJ @2eFJI3e_hoH^PIwQnSd*q8d|=GYp~*&pTD' );
define( 'LOGGED_IN_KEY',    'A[!h5-[;^rM.V[z>JM3T=^H0K,ia <AUrcht<4d0wpG/&sah0vE!{OJ4UDb,8M|<' );
define( 'NONCE_KEY',        'aru8!1nHX&jn58!dVSOA+i`|1O^BrX!b{o$7W^U-T*(/^MO*uV=)C`z0EC?y9 LV' );
define( 'AUTH_SALT',        'e{0tW+}=+*r#FdE6af6O#zO/8)i[xI-B}A+c}v?~_oq7;B>zc`^&c&}BG5a0%$q1' );
define( 'SECURE_AUTH_SALT', '8A/m2k]u>5 rA:/2Fo5UlE*>fH2Nxon&Lf;i}%QEMkd#L|cQTa:7Ewu|d}=c58jc' );
define( 'LOGGED_IN_SALT',   '{cgLCgDx%p;l}G7y*tDyk5BdsrG+jQ9Qx?.&4.8wue~VmzwW*=+{)YoZ}]R{UReu' );
define( 'NONCE_SALT',       'n7G(k%.,=[sdO*=J:7Sai2}=G#@e!7!IUs$,uV|GgHUt;C!<I?V}eTiJQ^pq>n$x' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
