<?php

namespace Willywes\ApiResponse;


interface ICode
{

    // HTML CODES
    CONST CODE_100 = 'Continue';
    CONST CODE_101 = 'Switching Protocols';
    CONST CODE_200 = 'OK';
    CONST CODE_201 = 'Created';
    CONST CODE_202 = 'Accepted';
    CONST CODE_203 = 'Non-Authoritative Information';
    CONST CODE_204 = 'No Content';
    CONST CODE_205 = 'Reset Content';
    CONST CODE_206 = 'Partial Content';
    CONST CODE_300 = 'Multiple Choices';
    CONST CODE_301 = 'Moved Permanently';
    CONST CODE_302 = 'Moved Temporarily';
    CONST CODE_303 = 'See Other';
    CONST CODE_304 = 'Not Modified';
    CONST CODE_305 = 'Use Proxy';
    CONST CODE_400 = 'Bad Request';
    CONST CODE_401 = 'Unauthorized';
    CONST CODE_402 = 'Payment Required';
    CONST CODE_403 = 'Forbidden';
    CONST CODE_404 = 'Not Found';
    CONST CODE_405 = 'Method Not Allowed';
    CONST CODE_406 = 'Not Acceptable';
    CONST CODE_407 = 'Proxy Authentication Required';
    CONST CODE_408 = 'Request Time-out';
    CONST CODE_409 = 'Conflict';
    CONST CODE_410 = 'Gone';
    CONST CODE_411 = 'Length Required';
    CONST CODE_412 = 'Precondition Failed';
    CONST CODE_413 = 'Request Entity Too Large';
    CONST CODE_414 = 'Request-URI Too Large';
    CONST CODE_415 = 'Unsupported Media Type';
    CONST CODE_500 = 'Internal Server Error';
    CONST CODE_501 = 'Not Implemented';
    CONST CODE_502 = 'Bad Gateway';
    CONST CODE_503 = 'Service Unavailable';
    CONST CODE_504 = 'Gateway Time-out';
    CONST CODE_505 = 'HTTP Version not supported';

    // DEFAULT STATUS

    CONST STATUS_INFO = 'info';
    CONST STATUS_SUCCESS = 'success';
    CONST STATUS_WARNING = 'warning';
    CONST STATUS_ERROR = 'error';
    CONST STATUS_FIELDS_VALIDATION = 'fields_validation';

    // AUTH CODES

    CONST AUTH_NOT_ALLOW = 'Su cuenta no se encuentra activa, por favor comuniquese con un administrador.';
    CONST AUTH_NOT_FOUND = 'Su cuenta no se encuentra activa, por favor comuniquese con un administrador.';
    CONST AUTH_DISABLED = 'Su cuenta no se encuentra activa, por favor comuniquese con un administrador.';




}
