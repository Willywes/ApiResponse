<?php


namespace Willywes\ApiResponse;


class Format implements ICode
{
    public static function Response($status, $title = null, $message = null, $data = null)
    {
        return [
            'status' => $status,
            'title' => $title ?? self::SetDefaultTitle($status),
            'message' => $message,
            'data' => $data
        ];
    }

    private static function SetDefaultTitle($class)
    {
        if ($class == self::STATUS_INFO) {
            return 'Información.';
        }
        if ($class == self::STATUS_SUCCESS) {
            return 'Operación Exitosa.';
        }
        if ($class == self::STATUS_WARNING) {
            return 'Advertencia.';
        }
        if ($class == self::STATUS_ERROR) {
            return 'Ha ocurrido un error.';
        }
        if ($class == self::STATUS_FIELDS_VALIDATION) {
            return 'Error en campos.';
        }
    }

}
