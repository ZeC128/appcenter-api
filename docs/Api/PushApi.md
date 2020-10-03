# ZeC128\AppCenter\PushApi

All URIs are relative to *https://api.appcenter.ms*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pushConfigExists**](PushApi.md#pushConfigExists) | **HEAD** /v0.1/apps/{owner_name}/{app_name}/push/notifications_config | 
[**pushDelete**](PushApi.md#pushDelete) | **DELETE** /v0.1/apps/{owner_name}/{app_name}/push/notifications | 
[**pushDeleteConfig**](PushApi.md#pushDeleteConfig) | **DELETE** /v0.1/apps/{owner_name}/{app_name}/push/notifications_config | 
[**pushDeleteInstallId**](PushApi.md#pushDeleteInstallId) | **DELETE** /v0.1/apps/{owner_name}/{app_name}/push/devices/{install_id} | 
[**pushExportDevices**](PushApi.md#pushExportDevices) | **POST** /v0.1/apps/{owner_name}/{app_name}/push/device_exports | 
[**pushExportDevicesStatus**](PushApi.md#pushExportDevicesStatus) | **GET** /v0.1/apps/{owner_name}/{app_name}/push/device_exports/{export_id} | 
[**pushGet**](PushApi.md#pushGet) | **GET** /v0.1/apps/{owner_name}/{app_name}/push/notifications/{notification_id} | 
[**pushGetConfig**](PushApi.md#pushGetConfig) | **GET** /v0.1/apps/{owner_name}/{app_name}/push/notifications_config | 
[**pushList**](PushApi.md#pushList) | **GET** /v0.1/apps/{owner_name}/{app_name}/push/notifications | 
[**pushSend**](PushApi.md#pushSend) | **POST** /v0.1/apps/{owner_name}/{app_name}/push/notifications | 
[**pushSetConfig**](PushApi.md#pushSetConfig) | **PUT** /v0.1/apps/{owner_name}/{app_name}/push/notifications_config | 


# **pushConfigExists**
> pushConfigExists($owner_name, $app_name)



Returns whether a push configuration exists for the selected app.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\PushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $apiInstance->pushConfigExists($owner_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling PushApi->pushConfigExists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pushDelete**
> pushDelete($notification_ids, $owner_name, $app_name)



Delete a notification.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\PushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$notification_ids = new \ZeC128\AppCenter\AppCenterApi\NotificationIds(); // \ZeC128\AppCenter\AppCenterApi\NotificationIds | List of notification ids
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $apiInstance->pushDelete($notification_ids, $owner_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling PushApi->pushDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_ids** | [**\ZeC128\AppCenter\AppCenterApi\NotificationIds**](../Model/NotificationIds.md)| List of notification ids |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pushDeleteConfig**
> pushDeleteConfig($owner_name, $app_name)



Delete the push configuration for the selected app.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\PushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $apiInstance->pushDeleteConfig($owner_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling PushApi->pushDeleteConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pushDeleteInstallId**
> pushDeleteInstallId($install_id, $owner_name, $app_name)



Delete a device with the selected installId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\PushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$install_id = "install_id_example"; // string | device install id
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $apiInstance->pushDeleteInstallId($install_id, $owner_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling PushApi->pushDeleteInstallId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **install_id** | **string**| device install id |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pushExportDevices**
> object pushExportDevices($properties, $owner_name, $app_name)



Exports information for all devices using Push to Azure Blob Storage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\PushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$properties = new \ZeC128\AppCenter\AppCenterApi\Properties2(); // \ZeC128\AppCenter\AppCenterApi\Properties2 | Export configurations.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->pushExportDevices($properties, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushApi->pushExportDevices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **properties** | [**\ZeC128\AppCenter\AppCenterApi\Properties2**](../Model/Properties2.md)| Export configurations. |
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

# **pushExportDevicesStatus**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20037 pushExportDevicesStatus($export_id, $owner_name, $app_name)



Get the status of an export operation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\PushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$export_id = "export_id_example"; // string | The id of the export.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->pushExportDevicesStatus($export_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushApi->pushExportDevicesStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **export_id** | **string**| The id of the export. |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20037**](../Model/InlineResponse20037.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pushGet**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20035 pushGet($notification_id, $owner_name, $app_name)



Get details about a specific notification.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\PushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$notification_id = "notification_id_example"; // string | The id of the notification.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->pushGet($notification_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushApi->pushGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_id** | **string**| The id of the notification. |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20035**](../Model/InlineResponse20035.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pushGetConfig**
> object pushGetConfig($owner_name, $app_name)



Get the push configuration for the selected app.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\PushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->pushGetConfig($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushApi->pushGetConfig: ', $e->getMessage(), PHP_EOL;
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

# **pushList**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20036 pushList($owner_name, $app_name, $top, $skiptoken, $orderby, $inlinecount, $include_archived)



Get a list of notifications from the service.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\PushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$top = 30; // int | The maximum number of results to return. (0 will fetch all results)
$skiptoken = "skiptoken_example"; // string | The value identifies a starting point in the collection of entities. This parameter along with limit is used to perform pagination.
$orderby = "count desc"; // string | controls the sorting order and sorting based on which column
$inlinecount = "none"; // string | Controls whether or not to include a count of all the items across all pages.
$include_archived = true; // bool | Include arhived push notifications

try {
    $result = $apiInstance->pushList($owner_name, $app_name, $top, $skiptoken, $orderby, $inlinecount, $include_archived);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushApi->pushList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **top** | **int**| The maximum number of results to return. (0 will fetch all results) | [optional] [default to 30]
 **skiptoken** | **string**| The value identifies a starting point in the collection of entities. This parameter along with limit is used to perform pagination. | [optional]
 **orderby** | **string**| controls the sorting order and sorting based on which column | [optional] [default to count desc]
 **inlinecount** | **string**| Controls whether or not to include a count of all the items across all pages. | [optional] [default to none]
 **include_archived** | **bool**| Include arhived push notifications | [optional]

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20036**](../Model/InlineResponse20036.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pushSend**
> object pushSend($properties, $owner_name, $app_name)



Send a notification to one or more devices.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\PushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$properties = new \ZeC128\AppCenter\AppCenterApi\Properties1(); // \ZeC128\AppCenter\AppCenterApi\Properties1 | Notification specifications.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->pushSend($properties, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushApi->pushSend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **properties** | [**\ZeC128\AppCenter\AppCenterApi\Properties1**](../Model/Properties1.md)| Notification specifications. |
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

# **pushSetConfig**
> object pushSetConfig($properties, $owner_name, $app_name)



Set the push configuration for the selected app.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\PushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$properties = new \ZeC128\AppCenter\AppCenterApi\Properties(); // \ZeC128\AppCenter\AppCenterApi\Properties | Notification configurations.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->pushSetConfig($properties, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushApi->pushSetConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **properties** | [**\ZeC128\AppCenter\AppCenterApi\Properties**](../Model/Properties.md)| Notification configurations. |
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

