<?php
namespace syships\logistic\yto;

/**
 * 圆通sdk,模仿中通
 *
 * @author xu <syships.cn@gmail.com>
 * @since 2024-08-13
 */
class YtoHttpUtil
{
    public function post($url, $headers, $querystring, $timeout)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);//设置链接
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//设置是否返回信息
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);//设置HTTP头
        curl_setopt($ch, CURLOPT_POST, 1);//设置为POST方式
        curl_setopt($ch, CURLOPT_TIMEOUT_MS, $timeout);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $querystring);
        $response = curl_exec($ch);
        return $response;
    }

}
