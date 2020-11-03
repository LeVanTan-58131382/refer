Viết một tập lệnh PHP để lấy địa chỉ IP của máy khách: 

<?php
    //whether ip is from share internet - ip có phải từ chia sẻ internet không
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   
    {
        $ip_address = $_SERVER['HTTP_CLIENT_IP'];
        echo "HTTP_CLIENT_IP";
    }
    //whether ip is from proxy - ip có phải từ proxy không
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
    {
        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
        echo "HTTP_X_FORWARDED_FOR";
    }
    //whether ip is from remote address - ip có phải từ địa chỉ từ xa không
    else
    {
        $ip_address = $_SERVER['REMOTE_ADDR'];
        echo "REMOTE_ADDR";
    }
    echo $ip_address;
?>