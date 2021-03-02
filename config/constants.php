<?php
$status = [
    'Không tìm thấy data',
    'Tìm thấy nội dung yêu cầu',
    'Lỗi trong quá trình xử lý',
    'Mã aff không hợp lệ / không có',
    'Mã token không hợp lệ',
    'Phương thức không hợp lệ',
    'Thiếu tham số truyền lên',
    'Tài khoản hoặc mật khẩu không hợp lệ',
    'Khóa học không tồn tại'
];

if (!defined('STATUS')) {
    define('STATUS', $status);
}
if (!defined('STATUS_NOT_FOUND')) {
    define('STATUS_NOT_FOUND', 0);
}
if (!defined('STATUS_OK')) {
    define('STATUS_OK', 1);
}
if (!defined('STATUS_ERROR')) {
    define('STATUS_ERROR', 2);
}
if (!defined('STATUS_INVALID_AFFID')) {
    define('STATUS_INVALID_AFFID', 3);
}
if (!defined('STATUS_INVALID_TOKEN')) {
    define('STATUS_INVALID_TOKEN', 4);
}
if (!defined('ERROR_NOT_MATH_METHOD')) {
    define('ERROR_NOT_MATH_METHOD', 5);
}
if (!defined('ERROR_NOT_ENOUGH_ARGUMENTS')) {
    define('ERROR_NOT_ENOUGH_ARGUMENTS', 6);
}
if (!defined('ERROR_NOT_LOGIN')) {
    define('ERROR_NOT_LOGIN', 7);
}
if (!defined('ERROR_NOT_COURSE')) {
    define('ERROR_NOT_COURSE', 8);
}

