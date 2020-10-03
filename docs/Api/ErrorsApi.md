# Swagger\Client\ErrorsApi

All URIs are relative to *https://api.appcenter.ms*

Method | HTTP request | Description
------------- | ------------- | -------------
[**errorsAppBuildsList**](ErrorsApi.md#errorsAppBuildsList) | **GET** /v0.1/apps/{owner_name}/{app_name}/errors/availableAppBuilds | 
[**errorsAvailableVersions**](ErrorsApi.md#errorsAvailableVersions) | **GET** /v0.1/apps/{owner_name}/{app_name}/errors/available_versions | 
[**errorsCountsPerDay**](ErrorsApi.md#errorsCountsPerDay) | **GET** /v0.1/apps/{owner_name}/{app_name}/errors/errorCountsPerDay | 
[**errorsDeleteError**](ErrorsApi.md#errorsDeleteError) | **DELETE** /v0.1/apps/{owner_name}/{app_name}/errors/errorGroups/{errorGroupId}/errors/{errorId} | 
[**errorsErrorAttachmentLocation**](ErrorsApi.md#errorsErrorAttachmentLocation) | **GET** /v0.1/apps/{owner_name}/{app_name}/errors/{errorId}/attachments/{attachmentId}/location | 
[**errorsErrorAttachmentText**](ErrorsApi.md#errorsErrorAttachmentText) | **GET** /v0.1/apps/{owner_name}/{app_name}/errors/{errorId}/attachments/{attachmentId}/text | 
[**errorsErrorAttachments**](ErrorsApi.md#errorsErrorAttachments) | **GET** /v0.1/apps/{owner_name}/{app_name}/errors/{errorId}/attachments | 
[**errorsErrorDownload**](ErrorsApi.md#errorsErrorDownload) | **GET** /v0.1/apps/{owner_name}/{app_name}/errors/errorGroups/{errorGroupId}/errors/{errorId}/download | 
[**errorsErrorFreeDevicePercentages**](ErrorsApi.md#errorsErrorFreeDevicePercentages) | **GET** /v0.1/apps/{owner_name}/{app_name}/errors/errorfreeDevicePercentages | 
[**errorsErrorGroupsSearch**](ErrorsApi.md#errorsErrorGroupsSearch) | **GET** /v0.1/apps/{owner_name}/{app_name}/errors/errorGroups/search | 
[**errorsErrorLocation**](ErrorsApi.md#errorsErrorLocation) | **GET** /v0.1/apps/{owner_name}/{app_name}/errors/errorGroups/{errorGroupId}/errors/{errorId}/location | 
[**errorsErrorSearch**](ErrorsApi.md#errorsErrorSearch) | **GET** /v0.1/apps/{owner_name}/{app_name}/errors/search | 
[**errorsErrorStackTrace**](ErrorsApi.md#errorsErrorStackTrace) | **GET** /v0.1/apps/{owner_name}/{app_name}/errors/errorGroups/{errorGroupId}/errors/{errorId}/stacktrace | 
[**errorsGetErrorDetails**](ErrorsApi.md#errorsGetErrorDetails) | **GET** /v0.1/apps/{owner_name}/{app_name}/errors/errorGroups/{errorGroupId}/errors/{errorId} | 
[**errorsGetRetentionSettings**](ErrorsApi.md#errorsGetRetentionSettings) | **GET** /v0.1/apps/{owner_name}/{app_name}/errors/retention_settings | gets the retention settings in days
[**errorsGroupCountsPerDay**](ErrorsApi.md#errorsGroupCountsPerDay) | **GET** /v0.1/apps/{owner_name}/{app_name}/errors/errorGroups/{errorGroupId}/errorCountsPerDay | 
[**errorsGroupDetails**](ErrorsApi.md#errorsGroupDetails) | **GET** /v0.1/apps/{owner_name}/{app_name}/errors/errorGroups/{errorGroupId} | 
[**errorsGroupErrorFreeDevicePercentages**](ErrorsApi.md#errorsGroupErrorFreeDevicePercentages) | **GET** /v0.1/apps/{owner_name}/{app_name}/errors/errorGroups/{errorGroupId}/errorfreeDevicePercentages | 
[**errorsGroupErrorStackTrace**](ErrorsApi.md#errorsGroupErrorStackTrace) | **GET** /v0.1/apps/{owner_name}/{app_name}/errors/errorGroups/{errorGroupId}/stacktrace | 
[**errorsGroupList**](ErrorsApi.md#errorsGroupList) | **GET** /v0.1/apps/{owner_name}/{app_name}/errors/errorGroups | 
[**errorsGroupModelCounts**](ErrorsApi.md#errorsGroupModelCounts) | **GET** /v0.1/apps/{owner_name}/{app_name}/errors/errorGroups/{errorGroupId}/models | 
[**errorsGroupOperatingSystemCounts**](ErrorsApi.md#errorsGroupOperatingSystemCounts) | **GET** /v0.1/apps/{owner_name}/{app_name}/errors/errorGroups/{errorGroupId}/operatingSystems | 
[**errorsLatestErrorDetails**](ErrorsApi.md#errorsLatestErrorDetails) | **GET** /v0.1/apps/{owner_name}/{app_name}/errors/errorGroups/{errorGroupId}/errors/latest | 
[**errorsListForGroup**](ErrorsApi.md#errorsListForGroup) | **GET** /v0.1/apps/{owner_name}/{app_name}/errors/errorGroups/{errorGroupId}/errors | 
[**errorsListSessionLogs**](ErrorsApi.md#errorsListSessionLogs) | **GET** /v0.1/apps/{owner_name}/{app_name}/errors/{errorId}/sessionLogs | 
[**errorsPutRetentionSettings**](ErrorsApi.md#errorsPutRetentionSettings) | **PUT** /v0.1/apps/{owner_name}/{app_name}/errors/retention_settings | Creates and updates the retention settings in days
[**errorsUpdateState**](ErrorsApi.md#errorsUpdateState) | **PATCH** /v0.1/apps/{owner_name}/{app_name}/errors/errorGroups/{errorGroupId} | 


# **errorsAppBuildsList**
> \Swagger\Client\Model\InlineResponse20058 errorsAppBuildsList($version, $start, $owner_name, $app_name, $end, $top, $error_type)



List of app builds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ErrorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = "version_example"; // string | 
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date time in data in ISO 8601 date time format
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last date time in data in ISO 8601 date time format
$top = 30; // int | The maximum number of results to return. (0 will fetch all results till the max number.)
$error_type = "error_type_example"; // string | Type of error (handled vs unhandled), including All

try {
    $result = $apiInstance->errorsAppBuildsList($version, $start, $owner_name, $app_name, $end, $top, $error_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ErrorsApi->errorsAppBuildsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **start** | **\DateTime**| Start date time in data in ISO 8601 date time format |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **end** | **\DateTime**| Last date time in data in ISO 8601 date time format | [optional]
 **top** | **int**| The maximum number of results to return. (0 will fetch all results till the max number.) | [optional] [default to 30]
 **error_type** | **string**| Type of error (handled vs unhandled), including All | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20058**](../Model/InlineResponse20058.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **errorsAvailableVersions**
> \Swagger\Client\Model\InlineResponse20057 errorsAvailableVersions($start, $owner_name, $app_name, $end, $top, $skip, $filter, $inlinecount, $error_type)



Get all available versions in the time range.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ErrorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date time in data in ISO 8601 date time format
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last date time in data in ISO 8601 date time format
$top = 30; // int | The maximum number of results to return. (0 will fetch all results till the max number.)
$skip = 0; // int | The offset (starting at 0) of the first result to return. This parameter along with limit is used to perform pagination.
$filter = "filter_example"; // string | A filter as specified in https://github.com/Microsoft/api-guidelines/blob/master/Guidelines.md#97-filtering.
$inlinecount = "none"; // string | Controls whether or not to include a count of all the items across all pages.
$error_type = "error_type_example"; // string | Type of error (handled vs unhandled), including All

try {
    $result = $apiInstance->errorsAvailableVersions($start, $owner_name, $app_name, $end, $top, $skip, $filter, $inlinecount, $error_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ErrorsApi->errorsAvailableVersions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start** | **\DateTime**| Start date time in data in ISO 8601 date time format |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **end** | **\DateTime**| Last date time in data in ISO 8601 date time format | [optional]
 **top** | **int**| The maximum number of results to return. (0 will fetch all results till the max number.) | [optional] [default to 30]
 **skip** | **int**| The offset (starting at 0) of the first result to return. This parameter along with limit is used to perform pagination. | [optional] [default to 0]
 **filter** | **string**| A filter as specified in https://github.com/Microsoft/api-guidelines/blob/master/Guidelines.md#97-filtering. | [optional]
 **inlinecount** | **string**| Controls whether or not to include a count of all the items across all pages. | [optional] [default to none]
 **error_type** | **string**| Type of error (handled vs unhandled), including All | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20057**](../Model/InlineResponse20057.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **errorsCountsPerDay**
> \Swagger\Client\Model\InlineResponse20053 errorsCountsPerDay($start, $owner_name, $app_name, $version, $end, $app_build, $error_type)



Count of crashes or errors by day in the time range based the selected versions. If SingleErrorTypeParameter is not provided, defaults to handlederror.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ErrorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date time in data in ISO 8601 date time format
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$version = "version_example"; // string | 
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last date time in data in ISO 8601 date time format
$app_build = "app_build_example"; // string | app build
$error_type = "error_type_example"; // string | Type of error (handled vs unhandled), excluding All

try {
    $result = $apiInstance->errorsCountsPerDay($start, $owner_name, $app_name, $version, $end, $app_build, $error_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ErrorsApi->errorsCountsPerDay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start** | **\DateTime**| Start date time in data in ISO 8601 date time format |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **version** | **string**|  | [optional]
 **end** | **\DateTime**| Last date time in data in ISO 8601 date time format | [optional]
 **app_build** | **string**| app build | [optional]
 **error_type** | **string**| Type of error (handled vs unhandled), excluding All | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20053**](../Model/InlineResponse20053.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **errorsDeleteError**
> \Swagger\Client\Model\InlineResponse20051 errorsDeleteError($error_group_id, $error_id, $owner_name, $app_name)



Delete a specific error and related attachments and blobs for an app. Searchable data will not be deleted immediately and may take up to 30 days.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ErrorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$error_group_id = "error_group_id_example"; // string | The id of the error group
$error_id = "error_id_example"; // string | The id of the error
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->errorsDeleteError($error_group_id, $error_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ErrorsApi->errorsDeleteError: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **error_group_id** | **string**| The id of the error group |
 **error_id** | **string**| The id of the error |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\InlineResponse20051**](../Model/InlineResponse20051.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **errorsErrorAttachmentLocation**
> \Swagger\Client\Model\InlineResponse20043 errorsErrorAttachmentLocation($error_id, $attachment_id, $owner_name, $app_name)



Error attachment location.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ErrorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$error_id = "error_id_example"; // string | The id of the error
$attachment_id = "attachment_id_example"; // string | Error attachment id.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->errorsErrorAttachmentLocation($error_id, $attachment_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ErrorsApi->errorsErrorAttachmentLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **error_id** | **string**| The id of the error |
 **attachment_id** | **string**| Error attachment id. |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\InlineResponse20043**](../Model/InlineResponse20043.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **errorsErrorAttachmentText**
> \Swagger\Client\Model\InlineResponse20042 errorsErrorAttachmentText($error_id, $attachment_id, $owner_name, $app_name)



Error attachment text.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ErrorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$error_id = "error_id_example"; // string | The id of the error
$attachment_id = "attachment_id_example"; // string | Error attachment id.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->errorsErrorAttachmentText($error_id, $attachment_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ErrorsApi->errorsErrorAttachmentText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **error_id** | **string**| The id of the error |
 **attachment_id** | **string**| Error attachment id. |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\InlineResponse20042**](../Model/InlineResponse20042.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **errorsErrorAttachments**
> \Swagger\Client\Model\InlineResponse20044[] errorsErrorAttachments($error_id, $owner_name, $app_name)



List error attachments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ErrorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$error_id = "error_id_example"; // string | The id of the error
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->errorsErrorAttachments($error_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ErrorsApi->errorsErrorAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **error_id** | **string**| The id of the error |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\InlineResponse20044[]**](../Model/InlineResponse20044.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **errorsErrorDownload**
> object errorsErrorDownload($error_group_id, $error_id, $owner_name, $app_name, $format)



Download details for a specific error.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ErrorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$error_group_id = "error_group_id_example"; // string | The id of the error group
$error_id = "error_id_example"; // string | The id of the error
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$format = "format_example"; // string | the format of the crash log

try {
    $result = $apiInstance->errorsErrorDownload($error_group_id, $error_id, $owner_name, $app_name, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ErrorsApi->errorsErrorDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **error_group_id** | **string**| The id of the error group |
 **error_id** | **string**| The id of the error |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **format** | **string**| the format of the crash log | [optional]

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **errorsErrorFreeDevicePercentages**
> \Swagger\Client\Model\InlineResponse20047 errorsErrorFreeDevicePercentages($start, $owner_name, $app_name, $end, $versions, $app_build, $error_type)



Percentage of error-free devices by day in the time range based on the selected versions. If SingleErrorTypeParameter is not provided, defaults to handlederror. API will return -1 if crash devices is greater than active devices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ErrorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date time in data in ISO 8601 date time format
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last date time in data in ISO 8601 date time format
$versions = array("versions_example"); // string[] | 
$app_build = "app_build_example"; // string | app build
$error_type = "error_type_example"; // string | Type of error (handled vs unhandled), excluding All

try {
    $result = $apiInstance->errorsErrorFreeDevicePercentages($start, $owner_name, $app_name, $end, $versions, $app_build, $error_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ErrorsApi->errorsErrorFreeDevicePercentages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start** | **\DateTime**| Start date time in data in ISO 8601 date time format |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **end** | **\DateTime**| Last date time in data in ISO 8601 date time format | [optional]
 **versions** | [**string[]**](../Model/string.md)|  | [optional]
 **app_build** | **string**| app build | [optional]
 **error_type** | **string**| Type of error (handled vs unhandled), excluding All | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20047**](../Model/InlineResponse20047.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **errorsErrorGroupsSearch**
> \Swagger\Client\Model\InlineResponse20055 errorsErrorGroupsSearch($owner_name, $app_name, $filter, $q, $order, $sort, $top, $skip)



Error groups list based on search parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ErrorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$filter = "filter_example"; // string | A filter as specified in OData notation
$q = "q_example"; // string | A query string
$order = "desc"; // string | It controls the order of sorting
$sort = "matchingReportsCount"; // string | It controls the sort based on specified field
$top = 100; // int | The maximum number of results to return
$skip = 0; // int | The offset (starting at 0) of the first result to return. This parameter along with limit is used to perform pagination.

try {
    $result = $apiInstance->errorsErrorGroupsSearch($owner_name, $app_name, $filter, $q, $order, $sort, $top, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ErrorsApi->errorsErrorGroupsSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **filter** | **string**| A filter as specified in OData notation | [optional]
 **q** | **string**| A query string | [optional]
 **order** | **string**| It controls the order of sorting | [optional] [default to desc]
 **sort** | **string**| It controls the sort based on specified field | [optional] [default to matchingReportsCount]
 **top** | **int**| The maximum number of results to return | [optional] [default to 100]
 **skip** | **int**| The offset (starting at 0) of the first result to return. This parameter along with limit is used to perform pagination. | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\InlineResponse20055**](../Model/InlineResponse20055.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **errorsErrorLocation**
> \Swagger\Client\Model\InlineResponse20043 errorsErrorLocation($error_group_id, $error_id, $owner_name, $app_name)



Error location.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ErrorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$error_group_id = "error_group_id_example"; // string | The id of the error group
$error_id = "error_id_example"; // string | The id of the error
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->errorsErrorLocation($error_group_id, $error_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ErrorsApi->errorsErrorLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **error_group_id** | **string**| The id of the error group |
 **error_id** | **string**| The id of the error |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\InlineResponse20043**](../Model/InlineResponse20043.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **errorsErrorSearch**
> \Swagger\Client\Model\InlineResponse20045 errorsErrorSearch($owner_name, $app_name, $filter, $q, $order, $sort, $top, $skip)



Errors list based on search parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ErrorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$filter = "filter_example"; // string | A filter as specified in OData notation
$q = "q_example"; // string | A query string
$order = "desc"; // string | It controls the order of sorting
$sort = "timestamp"; // string | It controls the sort based on specified field
$top = 100; // int | The maximum number of results to return
$skip = 0; // int | The offset (starting at 0) of the first result to return. This parameter along with limit is used to perform pagination.

try {
    $result = $apiInstance->errorsErrorSearch($owner_name, $app_name, $filter, $q, $order, $sort, $top, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ErrorsApi->errorsErrorSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **filter** | **string**| A filter as specified in OData notation | [optional]
 **q** | **string**| A query string | [optional]
 **order** | **string**| It controls the order of sorting | [optional] [default to desc]
 **sort** | **string**| It controls the sort based on specified field | [optional] [default to timestamp]
 **top** | **int**| The maximum number of results to return | [optional] [default to 100]
 **skip** | **int**| The offset (starting at 0) of the first result to return. This parameter along with limit is used to perform pagination. | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\InlineResponse20045**](../Model/InlineResponse20045.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **errorsErrorStackTrace**
> \Swagger\Client\Model\DiagnosticsStackTrace errorsErrorStackTrace($error_group_id, $error_id, $owner_name, $app_name)



Error Stacktrace details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ErrorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$error_group_id = "error_group_id_example"; // string | The id of the error group
$error_id = "error_id_example"; // string | The id of the error
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->errorsErrorStackTrace($error_group_id, $error_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ErrorsApi->errorsErrorStackTrace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **error_group_id** | **string**| The id of the error group |
 **error_id** | **string**| The id of the error |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\DiagnosticsStackTrace**](../Model/DiagnosticsStackTrace.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **errorsGetErrorDetails**
> \Swagger\Client\Model\InlineResponse20050 errorsGetErrorDetails($error_group_id, $error_id, $owner_name, $app_name)



Error details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ErrorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$error_group_id = "error_group_id_example"; // string | The id of the error group
$error_id = "error_id_example"; // string | The id of the error
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->errorsGetErrorDetails($error_group_id, $error_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ErrorsApi->errorsGetErrorDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **error_group_id** | **string**| The id of the error group |
 **error_id** | **string**| The id of the error |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\InlineResponse20050**](../Model/InlineResponse20050.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **errorsGetRetentionSettings**
> \Swagger\Client\Model\InlineResponse20046 errorsGetRetentionSettings($owner_name, $app_name)

gets the retention settings in days

gets the retention settings in days

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ErrorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->errorsGetRetentionSettings($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ErrorsApi->errorsGetRetentionSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\InlineResponse20046**](../Model/InlineResponse20046.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **errorsGroupCountsPerDay**
> \Swagger\Client\Model\InlineResponse20053 errorsGroupCountsPerDay($error_group_id, $start, $owner_name, $app_name, $version, $end)



Count of errors by day in the time range of the selected error group with selected version

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ErrorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$error_group_id = "error_group_id_example"; // string | The id of the error group
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date time in data in ISO 8601 date time format
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$version = "version_example"; // string | 
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last date time in data in ISO 8601 date time format

try {
    $result = $apiInstance->errorsGroupCountsPerDay($error_group_id, $start, $owner_name, $app_name, $version, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ErrorsApi->errorsGroupCountsPerDay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **error_group_id** | **string**| The id of the error group |
 **start** | **\DateTime**| Start date time in data in ISO 8601 date time format |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **version** | **string**|  | [optional]
 **end** | **\DateTime**| Last date time in data in ISO 8601 date time format | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20053**](../Model/InlineResponse20053.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **errorsGroupDetails**
> \Swagger\Client\Model\InlineResponse20054 errorsGroupDetails($error_group_id, $owner_name, $app_name)



Error group details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ErrorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$error_group_id = "error_group_id_example"; // string | The id of the error group
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->errorsGroupDetails($error_group_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ErrorsApi->errorsGroupDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **error_group_id** | **string**| The id of the error group |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\InlineResponse20054**](../Model/InlineResponse20054.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **errorsGroupErrorFreeDevicePercentages**
> \Swagger\Client\Model\InlineResponse20047 errorsGroupErrorFreeDevicePercentages($error_group_id, $start, $owner_name, $app_name, $end)



Percentage of error-free devices by day in the time range. Api will return -1 if crash devices is greater than active devices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ErrorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$error_group_id = "error_group_id_example"; // string | The id of the error group
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date time in data in ISO 8601 date time format
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last date time in data in ISO 8601 date time format

try {
    $result = $apiInstance->errorsGroupErrorFreeDevicePercentages($error_group_id, $start, $owner_name, $app_name, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ErrorsApi->errorsGroupErrorFreeDevicePercentages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **error_group_id** | **string**| The id of the error group |
 **start** | **\DateTime**| Start date time in data in ISO 8601 date time format |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **end** | **\DateTime**| Last date time in data in ISO 8601 date time format | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20047**](../Model/InlineResponse20047.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **errorsGroupErrorStackTrace**
> \Swagger\Client\Model\DiagnosticsStackTrace errorsGroupErrorStackTrace($error_group_id, $owner_name, $app_name)



Gets the stack trace for the error group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ErrorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$error_group_id = "error_group_id_example"; // string | The id of the error group
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->errorsGroupErrorStackTrace($error_group_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ErrorsApi->errorsGroupErrorStackTrace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **error_group_id** | **string**| The id of the error group |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\DiagnosticsStackTrace**](../Model/DiagnosticsStackTrace.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **errorsGroupList**
> \Swagger\Client\Model\InlineResponse20056 errorsGroupList($start, $owner_name, $app_name, $version, $app_build, $group_state, $end, $orderby, $top, $error_type)



List of error groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ErrorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date time in data in ISO 8601 date time format
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$version = "version_example"; // string | 
$app_build = "app_build_example"; // string | app build
$group_state = "group_state_example"; // string | 
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last date time in data in ISO 8601 date time format
$orderby = "count desc"; // string | controls the sorting order and sorting based on which column
$top = 30; // int | The maximum number of results to return. (0 will fetch all results till the max number.)
$error_type = "error_type_example"; // string | Type of error (handled vs unhandled), including All

try {
    $result = $apiInstance->errorsGroupList($start, $owner_name, $app_name, $version, $app_build, $group_state, $end, $orderby, $top, $error_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ErrorsApi->errorsGroupList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start** | **\DateTime**| Start date time in data in ISO 8601 date time format |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **version** | **string**|  | [optional]
 **app_build** | **string**| app build | [optional]
 **group_state** | **string**|  | [optional]
 **end** | **\DateTime**| Last date time in data in ISO 8601 date time format | [optional]
 **orderby** | **string**| controls the sorting order and sorting based on which column | [optional] [default to count desc]
 **top** | **int**| The maximum number of results to return. (0 will fetch all results till the max number.) | [optional] [default to 30]
 **error_type** | **string**| Type of error (handled vs unhandled), including All | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20056**](../Model/InlineResponse20056.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **errorsGroupModelCounts**
> \Swagger\Client\Model\InlineResponse20049 errorsGroupModelCounts($error_group_id, $owner_name, $app_name, $top)



Top models of the selected error group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ErrorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$error_group_id = "error_group_id_example"; // string | The id of the error group
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$top = 30; // int | The maximum number of results to return. (0 will fetch all results till the max number.)

try {
    $result = $apiInstance->errorsGroupModelCounts($error_group_id, $owner_name, $app_name, $top);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ErrorsApi->errorsGroupModelCounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **error_group_id** | **string**| The id of the error group |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **top** | **int**| The maximum number of results to return. (0 will fetch all results till the max number.) | [optional] [default to 30]

### Return type

[**\Swagger\Client\Model\InlineResponse20049**](../Model/InlineResponse20049.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **errorsGroupOperatingSystemCounts**
> \Swagger\Client\Model\InlineResponse20048 errorsGroupOperatingSystemCounts($error_group_id, $owner_name, $app_name, $top)



Top OSes of the selected error group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ErrorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$error_group_id = "error_group_id_example"; // string | The id of the error group
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$top = 30; // int | The maximum number of results to return. (0 will fetch all results till the max number.)

try {
    $result = $apiInstance->errorsGroupOperatingSystemCounts($error_group_id, $owner_name, $app_name, $top);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ErrorsApi->errorsGroupOperatingSystemCounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **error_group_id** | **string**| The id of the error group |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **top** | **int**| The maximum number of results to return. (0 will fetch all results till the max number.) | [optional] [default to 30]

### Return type

[**\Swagger\Client\Model\InlineResponse20048**](../Model/InlineResponse20048.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **errorsLatestErrorDetails**
> \Swagger\Client\Model\InlineResponse20050 errorsLatestErrorDetails($error_group_id, $owner_name, $app_name)



Latest error details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ErrorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$error_group_id = "error_group_id_example"; // string | The id of the error group
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->errorsLatestErrorDetails($error_group_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ErrorsApi->errorsLatestErrorDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **error_group_id** | **string**| The id of the error group |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\InlineResponse20050**](../Model/InlineResponse20050.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **errorsListForGroup**
> \Swagger\Client\Model\InlineResponse20052 errorsListForGroup($error_group_id, $start, $owner_name, $app_name, $end, $top, $model, $os)



Get all errors for group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ErrorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$error_group_id = "error_group_id_example"; // string | The id of the error group
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date time in data in ISO 8601 date time format
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last date time in data in ISO 8601 date time format
$top = 30; // int | The maximum number of results to return. (0 will fetch all results till the max number.)
$model = "model_example"; // string | 
$os = "os_example"; // string | 

try {
    $result = $apiInstance->errorsListForGroup($error_group_id, $start, $owner_name, $app_name, $end, $top, $model, $os);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ErrorsApi->errorsListForGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **error_group_id** | **string**| The id of the error group |
 **start** | **\DateTime**| Start date time in data in ISO 8601 date time format |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **end** | **\DateTime**| Last date time in data in ISO 8601 date time format | [optional]
 **top** | **int**| The maximum number of results to return. (0 will fetch all results till the max number.) | [optional] [default to 30]
 **model** | **string**|  | [optional]
 **os** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20052**](../Model/InlineResponse20052.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **errorsListSessionLogs**
> \Swagger\Client\Model\InlineResponse20041 errorsListSessionLogs($error_id, $owner_name, $app_name, $date)



Get session logs by error ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ErrorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$error_id = "error_id_example"; // string | The id of the error
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date of data requested

try {
    $result = $apiInstance->errorsListSessionLogs($error_id, $owner_name, $app_name, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ErrorsApi->errorsListSessionLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **error_id** | **string**| The id of the error |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **date** | **\DateTime**| Date of data requested | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20041**](../Model/InlineResponse20041.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **errorsPutRetentionSettings**
> \Swagger\Client\Model\ErrorRetentionInDays errorsPutRetentionSettings($error_retention_in_days, $owner_name, $app_name)

Creates and updates the retention settings in days

Creates and updates the retention settings in days

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ErrorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$error_retention_in_days = new \Swagger\Client\Model\ErrorRetentionInDays(); // \Swagger\Client\Model\ErrorRetentionInDays | The amount of days to keep the crashes for this application. retention_in_days is an enum value, can only be 28 or 90.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->errorsPutRetentionSettings($error_retention_in_days, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ErrorsApi->errorsPutRetentionSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **error_retention_in_days** | [**\Swagger\Client\Model\ErrorRetentionInDays**](../Model/ErrorRetentionInDays.md)| The amount of days to keep the crashes for this application. retention_in_days is an enum value, can only be 28 or 90. |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\ErrorRetentionInDays**](../Model/ErrorRetentionInDays.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **errorsUpdateState**
> \Swagger\Client\Model\InlineResponse20054 errorsUpdateState($error_group_id, $error_group_state, $owner_name, $app_name)



Update error group state

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ErrorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$error_group_id = "error_group_id_example"; // string | The id of the error group
$error_group_state = new \Swagger\Client\Model\ErrorGroupState(); // \Swagger\Client\Model\ErrorGroupState | The state of the error group
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->errorsUpdateState($error_group_id, $error_group_state, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ErrorsApi->errorsUpdateState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **error_group_id** | **string**| The id of the error group |
 **error_group_state** | [**\Swagger\Client\Model\ErrorGroupState**](../Model/ErrorGroupState.md)| The state of the error group |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\InlineResponse20054**](../Model/InlineResponse20054.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

