# Swagger\Client\AlertingApi

All URIs are relative to *https://api.appcenter.ms*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bugTrackerGetRepoIssueFromCrash**](AlertingApi.md#bugTrackerGetRepoIssueFromCrash) | **GET** /v0.1/apps/{owner_name}/{app_name}/bugtracker/crashGroup/{crash_group_id} | 
[**bugtrackerGetSettings**](AlertingApi.md#bugtrackerGetSettings) | **GET** /v0.1/apps/{owner_name}/{app_name}/bugtracker | 
[**notificationsGetAppEmailSettings**](AlertingApi.md#notificationsGetAppEmailSettings) | **GET** /v0.1/apps/{owner_name}/{app_name}/notifications/emailSettings | 
[**notificationsGetUserEmailSettings**](AlertingApi.md#notificationsGetUserEmailSettings) | **GET** /v0.1/user/notifications/emailSettings | 
[**webhooksList**](AlertingApi.md#webhooksList) | **GET** /v0.1/apps/{owner_name}/{app_name}/webhooks | 


# **bugTrackerGetRepoIssueFromCrash**
> object bugTrackerGetRepoIssueFromCrash($crash_group_id, $owner_name, $app_name)



Get project issue related to a crash group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AlertingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crash_group_id = "crash_group_id_example"; // string | CrashGroup Id
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->bugTrackerGetRepoIssueFromCrash($crash_group_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertingApi->bugTrackerGetRepoIssueFromCrash: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crash_group_id** | **string**| CrashGroup Id |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bugtrackerGetSettings**
> object bugtrackerGetSettings($owner_name, $app_name)



Get bug tracker settings for a particular app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AlertingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->bugtrackerGetSettings($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertingApi->bugtrackerGetSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notificationsGetAppEmailSettings**
> \Swagger\Client\Model\InlineResponse20038 notificationsGetAppEmailSettings($owner_name, $app_name)



Get Email notification settings of user for a particular app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AlertingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->notificationsGetAppEmailSettings($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertingApi->notificationsGetAppEmailSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\InlineResponse20038**](../Model/InlineResponse20038.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notificationsGetUserEmailSettings**
> \Swagger\Client\Model\InlineResponse200 notificationsGetUserEmailSettings()



Get Default email notification settings for the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AlertingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->notificationsGetUserEmailSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertingApi->notificationsGetUserEmailSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhooksList**
> object webhooksList($owner_name, $app_name)



Get web hooks configured for a particular app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AlertingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->webhooksList($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertingApi->webhooksList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

