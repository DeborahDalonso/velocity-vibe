<?php

namespace Utils;

class Session
{
    public static function status($code, $message)
    {
        $_SESSION['code'] = $code;
        $_SESSION['message'] = $message;
    }

    public static function clearSession()
    {
        session_unset();
        session_destroy();
    }

    public static function retrieveAndClear()
    {
        if (isset($_SESSION['code'])) {
            $data = [
                'code' => $_SESSION['code'],
                'message' => $_SESSION['message'],
            ];

            self::clearSession();

            return $data;
        }

        return false;
    }
}
