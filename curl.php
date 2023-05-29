<?php
// create a new cURL resource
$ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, "http://www.example.com/");
curl_setopt($ch, CURLOPT_HEADER, 0);

// 一起设置多配置项
curl_setopt_array($ch, [
    CURLOPT_URL => 'http://www.example.com/',
    CURLOPT_HEADER => false
]);

// 允许 curl 函数执行的最长时间为 1s
curl_setopt($ch, CURLOPT_TIMEOUT, 1);

// PHP 正式版本 v > 7.16.2， PHP 5.2.3 可以使用
// 设置cURL允许执行的最长毫秒数
// 如果 libcurl 编译时使用系统标准的名称解析器（ standard system name resolver），那部分的连接仍旧使用以秒计的超时解决方案，最小超时时间还是一秒钟。
curl_setopt($ch, CURLOPT_TIMEOUT_MS, 1000);

// grab URL and pass it to the browser
curl_exec($ch);

if (curl_errno($ch)) {
    
}

// close cURL resource, and free up system resources
curl_close($ch);