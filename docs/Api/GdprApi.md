# Swagger\Client\GdprApi

All URIs are relative to *https://api.appcenter.ms*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dataSubjectRightCancelDeleteRequest**](GdprApi.md#dataSubjectRightCancelDeleteRequest) | **POST** /v0.1/user/dsr/delete/{token}/cancel | 
[**dataSubjectRightCancelExportRequest**](GdprApi.md#dataSubjectRightCancelExportRequest) | **POST** /v0.1/user/dsr/export/{token}/cancel | 
[**dataSubjectRightDeleteRequest**](GdprApi.md#dataSubjectRightDeleteRequest) | **POST** /v0.1/user/dsr/delete | 
[**dataSubjectRightDeleteStatusRequest**](GdprApi.md#dataSubjectRightDeleteStatusRequest) | **GET** /v0.1/user/dsr/delete/{token} | 
[**dataSubjectRightExportRequest**](GdprApi.md#dataSubjectRightExportRequest) | **POST** /v0.1/user/dsr/export | 
[**dataSubjectRightExportStatusRequest**](GdprApi.md#dataSubjectRightExportStatusRequest) | **GET** /v0.1/user/dsr/export/{token} | 


# **dataSubjectRightCancelDeleteRequest**
> \Swagger\Client\Model\InlineResponse202 dataSubjectRightCancelDeleteRequest($token, $email)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\GdprApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = "token_example"; // string | Unique request ID (GUID)
$email = new \Swagger\Client\Model\Email(); // \Swagger\Client\Model\Email | 

try {
    $result = $apiInstance->dataSubjectRightCancelDeleteRequest($token, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GdprApi->dataSubjectRightCancelDeleteRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | [**string**](../Model/.md)| Unique request ID (GUID) |
 **email** | [**\Swagger\Client\Model\Email**](../Model/Email.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse202**](../Model/InlineResponse202.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSubjectRightCancelExportRequest**
> \Swagger\Client\Model\InlineResponse202 dataSubjectRightCancelExportRequest($token)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\GdprApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = "token_example"; // string | Unique request ID (GUID)

try {
    $result = $apiInstance->dataSubjectRightCancelExportRequest($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GdprApi->dataSubjectRightCancelExportRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | [**string**](../Model/.md)| Unique request ID (GUID) |

### Return type

[**\Swagger\Client\Model\InlineResponse202**](../Model/InlineResponse202.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSubjectRightDeleteRequest**
> \Swagger\Client\Model\InlineResponse202 dataSubjectRightDeleteRequest()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\GdprApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->dataSubjectRightDeleteRequest();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GdprApi->dataSubjectRightDeleteRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse202**](../Model/InlineResponse202.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSubjectRightDeleteStatusRequest**
> \Swagger\Client\Model\InlineResponse2002 dataSubjectRightDeleteStatusRequest($token, $email)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\GdprApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = "token_example"; // string | Unique request ID (GUID)
$email = "email_example"; // string | Email used for delete with x-authz-bypass headers

try {
    $result = $apiInstance->dataSubjectRightDeleteStatusRequest($token, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GdprApi->dataSubjectRightDeleteStatusRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | [**string**](../Model/.md)| Unique request ID (GUID) |
 **email** | **string**| Email used for delete with x-authz-bypass headers |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSubjectRightExportRequest**
> \Swagger\Client\Model\InlineResponse202 dataSubjectRightExportRequest()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\GdprApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->dataSubjectRightExportRequest();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GdprApi->dataSubjectRightExportRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse202**](../Model/InlineResponse202.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSubjectRightExportStatusRequest**
> \Swagger\Client\Model\InlineResponse2002 dataSubjectRightExportStatusRequest($token)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\GdprApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = "token_example"; // string | Unique request ID (GUID)

try {
    $result = $apiInstance->dataSubjectRightExportStatusRequest($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GdprApi->dataSubjectRightExportStatusRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | [**string**](../Model/.md)| Unique request ID (GUID) |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

