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

    //INFO 10*
    public static function Continue($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_INFO, self::CODE_100, $message, $data), 100);
    }

    public static function SwitchProtocol($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_INFO, self::CODE_101, $message, $data), 101);
    }

    public static function Processing($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_INFO, self::CODE_102, $message, $data), 102);
    }

    public static function EarlyHint($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_INFO, self::CODE_103, $message, $data), 103);
    }

    // ACCEPTS 20*
    public static function Ok($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_SUCCESS, self::CODE_200, $message, $data), 200);
    }

    public static function Created($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_SUCCESS, self::CODE_201, $message, $data), 201);
    }

    public static function Accepted($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_SUCCESS, self::CODE_202, $message, $data), 202);
    }

    public static function NonAuthoritativeInformation($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_SUCCESS, self::CODE_203, $message, $data), 203);
    }

    public static function NoContent($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_SUCCESS, self::CODE_204, $message, $data), 204);
    }

    public static function ResetContent($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_SUCCESS, self::CODE_205, $message, $data), 205);
    }

    public static function PartialContent($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_SUCCESS, self::CODE_206, $message, $data), 206);
    }

    //REDIRECTION 30*
    public static function MultipleChoices($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_REDIRECTION, self::CODE_300, $message, $data), 300);
    }

    public static function MovedPermanently($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_REDIRECTION, self::CODE_301, $message, $data), 301);
    }

    public static function MovedTemporarily($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_REDIRECTION, self::CODE_302, $message, $data), 302);
    }

    public static function SeeOther($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_REDIRECTION, self::CODE_303, $message, $data), 303);
    }

    public static function NotModified($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_REDIRECTION, self::CODE_304, $message, $data), 304);
    }

    public static function UseProxy($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_REDIRECTION, self::CODE_305, $message, $data), 305);
    }

    public static function TemporaryRedirect($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_REDIRECTION, self::CODE_307, $message, $data), 307);
    }

    public static function PermanentRedirect($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_REDIRECTION, self::CODE_308, $message, $data), 308);
    }

    // ERRORS 40*
    public static function BadRequest($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, self::CODE_400, $message, $data), 400);
    }

    public static function Unauthorized($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, self::CODE_401, $message, $data), 401);
    }

    public static function Forbidden($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, self::CODE_403, $message, $data), 403);
    }

    public static function NotFound($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, self::CODE_404, $message, $data), 404);
    }

    public static function MethodNotAllowed($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, self::CODE_405, $message, $data), 405);
    }

    public static function NotAcceptable($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, self::CODE_406, $message, $data), 406);
    }

    public static function ProxyAuthenticationRequired($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, self::CODE_407, $message, $data), 407);
    }

    public static function RequestTimeout($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, self::CODE_408, $message, $data), 408);
    }

    public static function Conflict($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, self::CODE_409, $message, $data), 409);
    }

    public static function Gone($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, self::CODE_410, $message, $data), 410);
    }

    public static function LengthRequired($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, self::CODE_411, $message, $data), 411);
    }

    public static function PreconditionFailed($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, self::CODE_412, $message, $data), 412);
    }

    public static function EntityTooLarge($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, self::CODE_413, $message, $data), 413);
    }

    public static function UriTooLarge($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, self::CODE_414, $message, $data), 414);
    }

    public static function UnsupportedMediaType($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, self::CODE_415, $message, $data), 415);
    }

    public static function RangeNotSatisfiable($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, self::CODE_416, $message, $data), 416);
    }

    public static function ExpectationFailed($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, self::CODE_417, $message, $data), 417);
    }

    public static function MissDirectedRequest($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, self::CODE_421, $message, $data), 421);
    }

    public static function UnprocessableEntity($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, self::CODE_422, $message, $data), 422);
    }

    public static function Locked($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, self::CODE_423, $message, $data), 423);
    }

    public static function FailedDependency($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, self::CODE_424, $message, $data), 424);
    }

    public static function UpgradeRequired($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, self::CODE_426, $message, $data), 426);
    }

    public static function PreconditionRequired($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, self::CODE_428, $message, $data), 428);
    }

    public static function TooManyRequests($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, self::CODE_429, $message, $data), 429);
    }

    public static function HeaderFieldsTooLarge($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, self::CODE_431, $message, $data), 431);
    }

    public static function UnavailableForLegalReasons($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, self::CODE_451, $message, $data), 451);
    }

    // ERRORS SERVER 50*
    public static function InternalServerError($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, self::CODE_500, $message, $data), 500);
    }

    public static function NotImplemented($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, self::CODE_501, $message, $data), 501);
    }

    public static function BadGateway($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, self::CODE_502, $message, $data), 502);
    }

    public static function ServiceUnavailable($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, self::CODE_503, $message, $data), 503);
    }

    public static function GatewayTimeOut($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, self::CODE_504, $message, $data), 504);
    }

    public static function VersionNotSupported($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, self::CODE_505, $message, $data), 505);
    }

    public static function VariantAlsoNegotiates($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, self::CODE_506, $message, $data), 506);
    }

    public static function InsuficcientStorage($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, self::CODE_507, $message, $data), 507);
    }

    public static function LoopDetected($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, self::CODE_508, $message, $data), 508);
    }

    public static function NotExtended($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, self::CODE_510, $message, $data), 510);
    }

    public static function NetworkAuthenticationRequired($data = null, $message = null)
    {
        return response()->json(Format::Response(self::STATUS_ERROR, self::CODE_511, $message, $data), 511);
    }
}
