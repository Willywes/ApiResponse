# ApiResponse

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

Class to generate a standard structure for api json responses.
## Installation

Via Composer

``` bash
$ composer require willywes/apiresponse
```

## Usage

#### Imports

``` php
use Willywes\ApiResponse\ApiResponse;
```

### Functions of Control (HTTP/200 OK)
Default functions that always return a http 200 code, but have a control state.

#### Params

|Param          |Description                            |
|---------------|---------------------------------------|
|**data**      |array of data for response (allow null)|
|**message**   |custom message to response (optional)  |
|**title**     |custom title to response (optional)    |

#### Functions

|Function                        |Description                                      |
|--------------------------------|-------------------------------------------------|
|**JsonSuccess**               | Response status "success" with HTTP 200          |
|**JsonError**                 | Response status "error" with HTTP 200            |
|**JsonWarning**               | Response status "warning" with HTTP 200          |
|**JsonInfo**                  | Response status "info" with HTTP 200             |
|**JsonFieldValidation**      | Response status "field_validation" with HTTP 200|

#### Examples

##### Success example
``` php
//Execution in php
return ApiResponse::JsonSuccess([
        'user' => User::first(),
        'roles' => Role::all(),
    ]);
```

``` json
//Response
{
    "status":"success",
    "title":"Operación Exitosa.",
    "message": null,
    "data":{
        "user":{
            "id":1,
            "full_name":"John Smith",
            "email":"jsmith@test.cl",
            "role_id":1
        },
        "roles":[
            {
                "id":1,
                "name":"God Admin"
            },
            {
                "id":2,
                "name":"Administrator"
            }
        ]
    }
}
```

``` json5
//HTTP Response 
Status Code: 200 OK
```

##### Error example
``` php
//Execution in php
return ApiResponse::JsonError(null, 'something has gone wrong!', 'oops');
```

``` json
//Response
{
    "status":"error",
    "title":"oops",
    "message":"something has gone wrong!",
    "data": null
}
```

``` json5
//HTTP Response 
Status Code: 200 OK
```

### Functions with specific http code
Default functions that returns a specific http code, but in the same way the body responds

#### Params

|Param          |Description                            |
|---------------|---------------------------------------|
|**data**      |array of data for response (allow null)|
|**message**   |custom message to response (optional)  |


#### Functions

|Function                        |Description                                      |
|--------------------------------|-------------------------------------------------|
|**Ok**                         | Response status "error" with HTTP 200           |
|**BadRequest**                | Response status "error" with HTTP 400           |
|**Unauthorized**              | Response status "error" with HTTP 401           |
|**Forbidden**                 | Response status "error" with HTTP 403           |
|**NotFound**                  | Response status "error" with HTTP 404           |
|**InternalServerError**      | Response status "error" with HTTP 500           |
|**NotImplemented**            | Response status "error" with HTTP 501           |
|**BadGateway**                | Response status "error" with HTTP 502           |

#### Examples

##### 404 Error example
``` php
//Execution in php
return ApiResponse::NotFound(null, 'object not found!');
```

``` json
//Response
{
   "status": "error",
   "message": "Not Found",
   "data": null
}
```

``` json5
//HTTP Response 
Status Code: 404 Not Found
```

##### 401 Error example
``` php
//Execution in php
return ApiResponse::Unauthorized(null);
```

``` json
//Response
{
   "status": "error",
   "message": "Unauthorized",
   "data": null
}
```

``` json5
//HTTP Response 
Status Code: 401 Unauthorized
```

## Credits

- [author name][link-author]

## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/willywes/apiresponse.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/willywes/apiresponse.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/willywes/apiresponse/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/willywes/apiresponse
[link-downloads]: https://packagist.org/packages/willywes/apiresponse
[link-travis]: https://travis-ci.org/willywes/apiresponse
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/willywes
[link-contributors]: ../../contributors
