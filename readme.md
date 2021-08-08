# ApiResponse

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![StyleCI][ico-styleci]][link-styleci]
[![Build Status][ico-travis]][link-travis]


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

### Functions with specific HTTP Code
Default functions that returns a specific http code, but in the same way the body responds

#### Params

|Param          |Description                            |
|---------------|---------------------------------------|
|**data**      |array of data for response (allow null)|
|**message**   |custom message to response (optional)  |


#### Functions Code HTTP 2XX
|Code|Name|Description|
|---|---|---|
|**200**|**Ok**|Response status "success" with HTTP 200|
|**201**|**Created**|Response status "success" with HTTP 201|
|**202**|**Accepted**|Response status "success" with HTTP 202|
|**203**|**NonAuthoritativeInformation**|Response status "success" with HTTP 203|
|**204**|**NoContent**|Response status "success" with HTTP 204|
|**205**|**ResetContent**|Response status "success" with HTTP 205|
|**206**|**PartialContent**|Response status "success" with HTTP 206|

#### Functions Code HTTP 3XX
|Code|Name|Description|
|---|---|---|
|**300**|**MultipleChoices**|Response status "redirection" with HTTP 300|
|**301**|**MovedPermanently**|Response status "redirection" with HTTP 301|
|**302**|**MovedTemporarily**|Response status "redirection" with HTTP 302|
|**303**|**SeeOther**|Response status "redirection" with HTTP 303|
|**304**|**NotModified**|Response status "redirection" with HTTP 304|
|**305**|**UseProxy**|Response status "redirection" with HTTP 305|
|**307**|**TemporaryRedirect**|Response status "redirection" with HTTP 307|
|**308**|**PermanentRedirect**|Response status "redirection" with HTTP 308|



#### Functions Code HTTP 4XX
|Code|Name|Description|
|---|---|---|
|**400**|**BadRequest**|Response status "error" with HTTP 400|
|**401**|**Unauthorized**|Response status "error" with HTTP 401|
|**403**|**Forbidden**|Response status "error" with HTTP 403|
|**404**|**NotFound**|Response status "error" with HTTP 404|
|**405**|**MethodNotAllowed**|Response status "error" with HTTP 405|
|**406**|**NotAcceptable**|Response status "error" with HTTP 406|
|**407**|**ProxyAuthenticationRequired**|Response status "error" with HTTP 407|
|**408**|**RequestTimeout**|Response status "error" with HTTP 408|
|**409**|**Conflict**|Response status "error" with HTTP 409|
|**410**|**Gone**|Response status "error" with HTTP 410|
|**411**|**LengthRequired**|Response status "error" with HTTP 411|
|**412**|**PreconditionFailed**|Response status "error" with HTTP 412|
|**413**|**EntityTooLarge**|Response status "error" with HTTP 413|
|**414**|**UriTooLarge**|Response status "error" with HTTP 414|
|**415**|**UnsupportedMediaType**|Response status "error" with HTTP 415|
|**416**|**RangeNotSatisfiable**|Response status "error" with HTTP 416|
|**417**|**ExpectationFailed**|Response status "error" with HTTP 417|
|**421**|**MissDirectedRequest**|Response status "error" with HTTP 421|
|**422**|**UnprocessableEntity**|Response status "error" with HTTP 422|
|**423**|**Locked**|Response status "error" with HTTP 423|
|**424**|**FailedDependency**|Response status "error" with HTTP 424|
|**426**|**UpgradeRequired**|Response status "error" with HTTP 426|
|**428**|**PreconditionRequired**|Response status "error" with HTTP 428|
|**429**|**TooManyRequests**|Response status "error" with HTTP 429|
|**431**|**HeaderFieldsTooLarge**|Response status "error" with HTTP 431|
|**451**|**UnavailableForLegalReasons**|Response status "error" with HTTP 451|


#### Functions Code HTTP 5XX
|Code|Name|Description|
|---|---|---|
|**500**|**InternalServerError**|Response status "error" with HTTP 500|
|**501**|**NotImplemented**|Response status "error" with HTTP 501|
|**502**|**BadGateway**|Response status "error" with HTTP 502|
|**503**|**ServiceUnavailable**|Response status "error" with HTTP 503|
|**504**|**GatewayTimeOut**|Response status "error" with HTTP 504|
|**505**|**VersionNotSupported**|Response status "error" with HTTP 505|
|**506**|**VariantAlsoNegotiates**|Response status "error" with HTTP 506|
|**507**|**InsuficcientStorage**|Response status "error" with HTTP 507|
|**508**|**LoopDetected**|Response status "error" with HTTP 508|
|**510**|**NotExtended**|Response status "error" with HTTP 510|
|**511**|**NetworkAuthenticationRequired**|Response status "error" with HTTP 511|

#### Examples

##### 404 Error example
``` php
//Execution in php
return ApiResponse::NotFound(null, 'object not found!');
// or
//Execution in php without params
return ApiResponse::NotFound();
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
return ApiResponse::Unauthorized();
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

##### 403 Error example
``` php
//Execution in php
return ApiResponse::Forbidden();
```

``` json
//Response
{
   "status": "error",
   "message": "Forbidden",
   "data": null
}
```

``` json5
//HTTP Response 
Status Code: 403 Forbidden
```

## Credits

- [Alejandro Isla][link-author]

## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/willywes/apiresponse.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/willywes/apiresponse.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/willywes/apiresponse/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/306464936/shield

[link-packagist]: https://packagist.org/packages/willywes/apiresponse
[link-downloads]: https://packagist.org/packages/willywes/apiresponse
[link-travis]: https://travis-ci.org/willywes/apiresponse
[link-styleci]: https://styleci.io/repos/306464936
[link-author]: https://github.com/willywes
