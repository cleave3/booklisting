<?php
function success($data, $code = 200, $message = 'success')
{
    $res['status'] = true;
    $res['code'] = $code;
    $res['message'] = $message;
    $res['data'] = $data;
    return $res;
}

function badRequest($code = 400, $message = 'error')
{
    $res['status'] = false;
    $res['code'] = $code;
    $res['message'] = $message;
    return $res;
}
