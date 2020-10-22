<?php

namespace Willywes\ApiResponse;

class ApiResponse implements ICode
{
    public static function JsonInfo($data = null, $message = null, $title = null)
    {
        return response()->json(Format::Response(self::STATUS_INFO, $title, $message, $data), 200);
    }

    public static function JsonWarning($data = null, $message = null, $title = null)
    {
        return response()->json(Format::Response(self::STATUS_WARNING, $title, $message, $data), 200);
    }

    public static function JsonSuccess($data = null, $message = null, $title = null)
    {
        return response()->json(Format::Response(self::STATUS_SUCCESS, $title, $message, $data), 200);
    }

    public static function JsonError($data = null, $message = null, $title = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, $title, $message, $data), 200);
    }

    public static function JsonFieldValidation($data = null, $message = null, $title = null)
    {
        return response()->json(Format::Response(self::STATUS_FIELDS_VALIDATION, $title, $message, $data), 200);
    }

    // HTTPS RESPONSE

    // ACCEPTS 20*
    public static function Ok($data = null, $message = null)
    {
        response()->json(Format::Response(self::STATUS_ERROR, self::CODE_200, $message, $data), 200);
    }

    // ERRORS 40*
    public static function BadRequest($data = null, $message = null)
    {
        response()->json(Format::Response(self::STATUS_ERROR, self::CODE_400, $message, $data), 400);
    }

    public static function Unauthorized($data = null, $message = null)
    {
        response()->json(Format::Response(self::STATUS_ERROR, self::CODE_401, $message, $data), 401);
    }

    public static function Forbidden($data = null, $message = null)
    {
        response()->json(Format::Response(self::STATUS_ERROR, self::CODE_403, $message, $data), 403);
    }

    public static function NotFound($data = null, $message = null)
    {
        response()->json(Format::Response(self::STATUS_ERROR, self::CODE_404, $message, $data), 404);
    }

    // ERRORS 50*
    public static function InternalServerError($data = null, $message = null)
    {
        response()->json(Format::Response(self::STATUS_ERROR, self::CODE_500, $message, $data), 500);
    }

    public static function NotImplemented($data = null, $message = null)
    {
        response()->json(Format::Response(self::STATUS_ERROR, self::CODE_501, $message, $data), 501);
    }

    public static function BadGateway($data = null, $message = null)
    {
        response()->json(Format::Response(self::STATUS_ERROR, self::CODE_502, $message, $data), 502);
    }

}
