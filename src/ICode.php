<?php

namespace Willywes\ApiResponse;

interface ICode
{
    // HTML CODES
    const CODE_100 = 'Continue';
    const CODE_101 = 'Switching Protocols';
    const CODE_200 = 'OK';
    const CODE_201 = 'Created';
    const CODE_202 = 'Accepted';
    const CODE_203 = 'Non-Authoritative Information';
    const CODE_204 = 'No Content';
    const CODE_205 = 'Reset Content';
    const CODE_206 = 'Partial Content';
    const CODE_300 = 'Multiple Choices';
    const CODE_301 = 'Moved Permanently';
    const CODE_302 = 'Moved Temporarily';
    const CODE_303 = 'See Other';
    const CODE_304 = 'Not Modified';
    const CODE_305 = 'Use Proxy';
    const CODE_400 = 'Bad Request';
    const CODE_401 = 'Unauthorized';
    const CODE_402 = 'Payment Required';
    const CODE_403 = 'Forbidden';
    const CODE_404 = 'Not Found';
    const CODE_405 = 'Method Not Allowed';
    const CODE_406 = 'Not Acceptable';
    const CODE_407 = 'Proxy Authentication Required';
    const CODE_408 = 'Request Time-out';
    const CODE_409 = 'Conflict';
    const CODE_410 = 'Gone';
    const CODE_411 = 'Length Required';
    const CODE_412 = 'Precondition Failed';
    const CODE_413 = 'Request Entity Too Large';
    const CODE_414 = 'Request-URI Too Large';
    const CODE_415 = 'Unsupported Media Type';
    const CODE_500 = 'Internal Server Error';
    const CODE_501 = 'Not Implemented';
    const CODE_502 = 'Bad Gateway';
    const CODE_503 = 'Service Unavailable';
    const CODE_504 = 'Gateway Time-out';
    const CODE_505 = 'HTTP Version not supported';

    // DEFAULT STATUS

    const STATUS_INFO = 'info';
    const STATUS_SUCCESS = 'success';
    const STATUS_WARNING = 'warning';
    const STATUS_ERROR = 'error';
    const STATUS_FIELDS_VALIDATION = 'fields_validation';


}
