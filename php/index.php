<?php
    require_once('AES_Encryption.php');
    define('key', 'ddeqrgknlq48mjik'); //Secret_key Unica cung cấp cho bạn.
    define('aff_id', '1234'); // Aff_id của bạn trên Unica
    define('orders', 'https://unica.vn/api/getorders'); //URL lấy danh sách order
    define('order', 'https://unica.vn/api/orderdetail'); //URL lấy thông tin chi tiết order

    // lấy dữ liệu 30 đơn hàng gần nhất
    function getOrders()
    {
        $token = encryption(key, aff_id); //tạo token bảo mật
        $url = orders . '?aff_id='.aff_id.'&token=' . $token; //gán token vào url
        return callAPI($url); //Gọi API
    }

    // lấy dữ liệu chi tiết 1 đơn hàng có id 133
    function getOrder()
    {
        $token = encryption(key, aff_id); //tạo token bảo mật
        $url = order . '?aff_id='.aff_id.'&orderid=133&token=' . $token;  //gán token vào url
        return callAPI($url); //Gọi API
    }

    function encryption($key, $data)
    {
        $encryption = new AES_Encryption($key, $key);
        return base64url_encode($encryption->encrypt($data));
    }

    function base64url_encode($data)
{
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
}

    //Hàm gọi API
    function callAPI($url, $params = null, $type = null)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
        if ($type && !empty($type)) {
            curl_setopt($ch, CURLOPT_POST, true);
        }
        if ($params != null) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
        }
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        curl_close($ch);
        return json_decode($result);
    }

    $orders = getOrders();
    print_r($orders);
?>
