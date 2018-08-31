<?php

function createAuthDataHeader()
{
    $client_key = 'A7AE8C040947C417F5F2B0B05EB5B292';
    $client_secret = 'E0744D90487801C0C70AB2671CA1A79D';

    $user_key = 'AF0C3838717EA6AB65AF893AFD8C83A3';
    $user_secret = '7F79709C2F37BB7AADC3FC6D2AB08245';
    $timestamp = time();
    $nonce = md5(microtime() . mt_rand());

    return 'Authorization: c_key=' . urlencode($client_key)
        . ',c_secret=' . urlencode(md5($client_secret . $nonce))
        . ',u_key=' . urlencode($user_key)
        . ',u_secret=' . urlencode(md5($user_secret . $nonce))
        . ',nonce=' . urlencode($nonce)
        . ',timestamp=' . urlencode($timestamp);
}

function send_post_request($url, $data, $headers)
{
    $ci = curl_init();

    if (!empty($data)) {
        $headers[] = 'Content-Length: ' . strlen($data);
        $headers[] = 'Expect:';
    }

    curl_setopt($ci, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($ci, CURLOPT_TIMEOUT, 30);
    curl_setopt($ci, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ci, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ci, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ci, CURLOPT_HEADER, FALSE);

    curl_setopt($ci, CURLOPT_POST, TRUE);
    if (!empty($data)) {
        curl_setopt($ci, CURLOPT_POSTFIELDS, $data);
    }

    curl_setopt($ci, CURLOPT_URL, $url);
    $response = curl_exec($ci);
    curl_close ($ci);
    return $response;
}

//POST - Create a message in list
$listId = 0;
$messageId = 123456;
$http_messages_url = "http://api.responder.co.il/main/lists/$listId/messages/$messageId/test";

$headers = array(createAuthDataHeader());

$post_data =
    "data=" . json_encode(
        array(
            "name" => "tester name",
            "email" => "emailForTesting@gmail.com"
        ));

$response = send_post_request($http_messages_url, $post_data, $headers);
echo $response;



