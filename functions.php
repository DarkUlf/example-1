<?php

function formatPhone($value)
{
    return preg_replace('/^\d(\d{3})(\d{3})(\d{2})(\d{2})$/', config('phoneFormat'), $value);
}

function validateRequired()
{
    $args = func_get_args();
    return array_filter(
            $args,
            function ($arg) {
                return trim($arg) !== '';
            }
        ) === $args;
}

function validateFile($name, $size, $type)
{
    return $size <= 10 * 1024 * 1024
        && in_array(strtolower($type), config('mimeTypes'))
        && in_array(strtolower(pathinfo($name, PATHINFO_EXTENSION)), config('extensions'));
}

function validatePhone()
{
    $args = func_get_args();
    return array_filter(
            $args,
            function ($arg) {
                return strlen(preg_replace('/[^\d]+/', '', $arg)) === 11;
            }
        ) === $args;
}

function config($name)
{
    global $_CONFIG;
    return $_CONFIG[$name];
}

function sendMail($from, $to, $subject, $content, $filePath = null, $fileName = null)
{
    if (!is_array($content)) {
        $content = array($content);
    }

    if ($filePath !== null) {
        if (!$fp = fopen($filePath, 'r')) {
            return false;
        }
        $file = fread($fp, filesize($filePath));
        fclose($fp);

        $boundary = '--' . md5(uniqid(time()));

        $content = array_merge(array(
            '--' . $boundary,
            'Content-Type: text/plain; charset=utf-8',
            'Content-Transfer-Encoding: Quot-Printed',
            '',
        ), $content, array(
            '--' . $boundary,
            'Content-Type: application/octet-stream',
            'Content-Transfer-Encoding: base64',
            'Content-Disposition: attachment; filename = "' . $fileName . '"',
            '',
            chunk_split(base64_encode($file)),
            '--' . $boundary . '--',
        ));

        $headers = array(
            'MIME-Version: 1.0',
            'Content-Type: multipart/mixed; boundary="' . $boundary . '"',
        );
    } else {
        $headers = array(
            'Content-type: text/plain; charset=utf-8'
        );
    }
    $headers[] = 'From: ' . $from;

    $content = implode("\r\n", $content);
    $headers = implode("\r\n", $headers);

    foreach ((array)$to as $email) {
        if (!mail($email, $subject, $content, $headers)) {
            return false;
        }
    }

    return true;
}

function response($message, $error = false)
{
    echo json_encode(array('error' => !!$error, 'message' => $message));
    exit;
}

function arrGet($array, $key, $default = null)
{
    return array_key_exists($key, $array) ? $array[$key] : $default;
}