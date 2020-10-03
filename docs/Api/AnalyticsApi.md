# Swagger\Client\AnalyticsApi

All URIs are relative to *https://api.appcenter.ms*

Method | HTTP request | Description
------------- | ------------- | -------------
[**analyticsAudienceNameExists**](AnalyticsApi.md#analyticsAudienceNameExists) | **HEAD** /v0.1/apps/{owner_name}/{app_name}/analytics/audiences/{audience_name} | 
[**analyticsCrashCounts**](AnalyticsApi.md#analyticsCrashCounts) | **GET** /v0.1/apps/{owner_name}/{app_name}/analytics/crash_counts | Available for UWP apps only.
[**analyticsCrashFreeDevicePercentages**](AnalyticsApi.md#analyticsCrashFreeDevicePercentages) | **GET** /v0.1/apps/{owner_name}/{app_name}/analytics/crashfree_device_percentages | 
[**analyticsCrashGroupCounts**](AnalyticsApi.md#analyticsCrashGroupCounts) | **GET** /v0.1/apps/{owner_name}/{app_name}/analytics/crash_groups/{crash_group_id}/crash_counts | Available for UWP apps only.
[**analyticsCrashGroupModelCounts**](AnalyticsApi.md#analyticsCrashGroupModelCounts) | **GET** /v0.1/apps/{owner_name}/{app_name}/analytics/crash_groups/{crash_group_id}/models | Available for UWP apps only.
[**analyticsCrashGroupOperatingSystemCounts**](AnalyticsApi.md#analyticsCrashGroupOperatingSystemCounts) | **GET** /v0.1/apps/{owner_name}/{app_name}/analytics/crash_groups/{crash_group_id}/operating_systems | Available for UWP apps only.
[**analyticsCrashGroupTotals**](AnalyticsApi.md#analyticsCrashGroupTotals) | **GET** /v0.1/apps/{owner_name}/{app_name}/analytics/crash_groups/{crash_group_id}/overall | Available for UWP apps only.
[**analyticsCrashGroupsTotals**](AnalyticsApi.md#analyticsCrashGroupsTotals) | **POST** /v0.1/apps/{owner_name}/{app_name}/analytics/crash_groups | 
[**analyticsCreateOrUpdateAudience**](AnalyticsApi.md#analyticsCreateOrUpdateAudience) | **PUT** /v0.1/apps/{owner_name}/{app_name}/analytics/audiences/{audience_name} | 
[**analyticsDeleteAudience**](AnalyticsApi.md#analyticsDeleteAudience) | **DELETE** /v0.1/apps/{owner_name}/{app_name}/analytics/audiences/{audience_name} | 
[**analyticsDeviceCounts**](AnalyticsApi.md#analyticsDeviceCounts) | **GET** /v0.1/apps/{owner_name}/{app_name}/analytics/active_device_counts | 
[**analyticsDistributionReleaseCounts**](AnalyticsApi.md#analyticsDistributionReleaseCounts) | **POST** /v0.1/apps/{owner_name}/{app_name}/analytics/distribution/release_counts | 
[**analyticsEventCount**](AnalyticsApi.md#analyticsEventCount) | **GET** /v0.1/apps/{owner_name}/{app_name}/analytics/events/{event_name}/event_count | 
[**analyticsEventDeviceCount**](AnalyticsApi.md#analyticsEventDeviceCount) | **GET** /v0.1/apps/{owner_name}/{app_name}/analytics/events/{event_name}/device_count | 
[**analyticsEventPerDeviceCount**](AnalyticsApi.md#analyticsEventPerDeviceCount) | **GET** /v0.1/apps/{owner_name}/{app_name}/analytics/events/{event_name}/count_per_device | 
[**analyticsEventPerSessionCount**](AnalyticsApi.md#analyticsEventPerSessionCount) | **GET** /v0.1/apps/{owner_name}/{app_name}/analytics/events/{event_name}/count_per_session | 
[**analyticsEventProperties**](AnalyticsApi.md#analyticsEventProperties) | **GET** /v0.1/apps/{owner_name}/{app_name}/analytics/events/{event_name}/properties | 
[**analyticsEventPropertyCounts**](AnalyticsApi.md#analyticsEventPropertyCounts) | **GET** /v0.1/apps/{owner_name}/{app_name}/analytics/events/{event_name}/properties/{event_property_name}/counts | 
[**analyticsEvents**](AnalyticsApi.md#analyticsEvents) | **GET** /v0.1/apps/{owner_name}/{app_name}/analytics/events | 
[**analyticsEventsDelete**](AnalyticsApi.md#analyticsEventsDelete) | **DELETE** /v0.1/apps/{owner_name}/{app_name}/analytics/events/{event_name} | 
[**analyticsEventsDeleteLogs**](AnalyticsApi.md#analyticsEventsDeleteLogs) | **DELETE** /v0.1/apps/{owner_name}/{app_name}/analytics/event_logs/{event_name} | 
[**analyticsGenericLogFlow**](AnalyticsApi.md#analyticsGenericLogFlow) | **GET** /v0.1/apps/{owner_name}/{app_name}/analytics/generic_log_flow | 
[**analyticsGetAudience**](AnalyticsApi.md#analyticsGetAudience) | **GET** /v0.1/apps/{owner_name}/{app_name}/analytics/audiences/{audience_name} | 
[**analyticsLanguageCounts**](AnalyticsApi.md#analyticsLanguageCounts) | **GET** /v0.1/apps/{owner_name}/{app_name}/analytics/languages | 
[**analyticsListAudiences**](AnalyticsApi.md#analyticsListAudiences) | **GET** /v0.1/apps/{owner_name}/{app_name}/analytics/audiences | 
[**analyticsListCustomProperties**](AnalyticsApi.md#analyticsListCustomProperties) | **GET** /v0.1/apps/{owner_name}/{app_name}/analytics/audiences/metadata/custom_properties | 
[**analyticsListDeviceProperties**](AnalyticsApi.md#analyticsListDeviceProperties) | **GET** /v0.1/apps/{owner_name}/{app_name}/analytics/audiences/metadata/device_properties | 
[**analyticsListDevicePropertyValues**](AnalyticsApi.md#analyticsListDevicePropertyValues) | **GET** /v0.1/apps/{owner_name}/{app_name}/analytics/audiences/metadata/device_properties/{property_name}/values | 
[**analyticsLogFlow**](AnalyticsApi.md#analyticsLogFlow) | **GET** /v0.1/apps/{owner_name}/{app_name}/analytics/log_flow | 
[**analyticsModelCounts**](AnalyticsApi.md#analyticsModelCounts) | **GET** /v0.1/apps/{owner_name}/{app_name}/analytics/models | 
[**analyticsOperatingSystemCounts**](AnalyticsApi.md#analyticsOperatingSystemCounts) | **GET** /v0.1/apps/{owner_name}/{app_name}/analytics/oses | 
[**analyticsPerDeviceCounts**](AnalyticsApi.md#analyticsPerDeviceCounts) | **GET** /v0.1/apps/{owner_name}/{app_name}/analytics/sessions_per_device | 
[**analyticsPlaceCounts**](AnalyticsApi.md#analyticsPlaceCounts) | **GET** /v0.1/apps/{owner_name}/{app_name}/analytics/places | 
[**analyticsSessionCounts**](AnalyticsApi.md#analyticsSessionCounts) | **GET** /v0.1/apps/{owner_name}/{app_name}/analytics/session_counts | 
[**analyticsSessionDurationsDistribution**](AnalyticsApi.md#analyticsSessionDurationsDistribution) | **GET** /v0.1/apps/{owner_name}/{app_name}/analytics/session_durations_distribution | 
[**analyticsTestAudience**](AnalyticsApi.md#analyticsTestAudience) | **POST** /v0.1/apps/{owner_name}/{app_name}/analytics/audiences/definition/test | 
[**analyticsVersions**](AnalyticsApi.md#analyticsVersions) | **GET** /v0.1/apps/{owner_name}/{app_name}/analytics/versions | 
[**appBlockLogs**](AnalyticsApi.md#appBlockLogs) | **PUT** /v0.1/apps/{owner_name}/{app_name}/devices/block_logs | 
[**crashesListSessionLogs**](AnalyticsApi.md#crashesListSessionLogs) | **GET** /v0.1/apps/{owner_name}/{app_name}/crashes/{crash_id}/session_logs | 
[**devicesBlockLogs**](AnalyticsApi.md#devicesBlockLogs) | **PUT** /v0.1/apps/{owner_name}/{app_name}/devices/block_logs/{install_id} | 


# **analyticsAudienceNameExists**
> analyticsAudienceNameExists($audience_name, $owner_name, $app_name)



Returns whether audience definition exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_name = "audience_name_example"; // string | The name of the audience
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $apiInstance->analyticsAudienceNameExists($audience_name, $owner_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsAudienceNameExists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audience_name** | **string**| The name of the audience |
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

# **analyticsCrashCounts**
> \Swagger\Client\Model\InlineResponse20097 analyticsCrashCounts($start, $owner_name, $app_name, $end, $versions)

Available for UWP apps only.

Count of crashes by day in the time range based the selected versions. Available for UWP apps only.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date time in data in ISO 8601 date time format.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last date time in data in ISO 8601 date time format.
$versions = array("versions_example"); // string[] | 

try {
    $result = $apiInstance->analyticsCrashCounts($start, $owner_name, $app_name, $end, $versions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsCrashCounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start** | **\DateTime**| Start date time in data in ISO 8601 date time format. |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **end** | **\DateTime**| Last date time in data in ISO 8601 date time format. | [optional]
 **versions** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20097**](../Model/InlineResponse20097.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analyticsCrashFreeDevicePercentages**
> \Swagger\Client\Model\InlineResponse20093 analyticsCrashFreeDevicePercentages($start, $version, $owner_name, $app_name, $end)



Percentage of crash-free device by day in the time range based on the selected versions. Api will return -1 if crash devices is greater than active devices.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date time in data in ISO 8601 date time format.
$version = "version_example"; // string | 
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last date time in data in ISO 8601 date time format.

try {
    $result = $apiInstance->analyticsCrashFreeDevicePercentages($start, $version, $owner_name, $app_name, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsCrashFreeDevicePercentages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start** | **\DateTime**| Start date time in data in ISO 8601 date time format. |
 **version** | **string**|  |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **end** | **\DateTime**| Last date time in data in ISO 8601 date time format. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20093**](../Model/InlineResponse20093.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analyticsCrashGroupCounts**
> \Swagger\Client\Model\InlineResponse20097 analyticsCrashGroupCounts($crash_group_id, $version, $start, $owner_name, $app_name, $end)

Available for UWP apps only.

Count of crashes by day in the time range of the selected crash group with selected version. Available for UWP apps only.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crash_group_id = "crash_group_id_example"; // string | The id of the crash group.
$version = "version_example"; // string | 
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date time in data in ISO 8601 date time format.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last date time in data in ISO 8601 date time format.

try {
    $result = $apiInstance->analyticsCrashGroupCounts($crash_group_id, $version, $start, $owner_name, $app_name, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsCrashGroupCounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crash_group_id** | **string**| The id of the crash group. |
 **version** | **string**|  |
 **start** | **\DateTime**| Start date time in data in ISO 8601 date time format. |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **end** | **\DateTime**| Last date time in data in ISO 8601 date time format. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20097**](../Model/InlineResponse20097.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analyticsCrashGroupModelCounts**
> \Swagger\Client\Model\InlineResponse20096 analyticsCrashGroupModelCounts($crash_group_id, $version, $owner_name, $app_name, $top)

Available for UWP apps only.

Top models of the selected crash group with selected version. Available for UWP apps only.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crash_group_id = "crash_group_id_example"; // string | The id of the crash group.
$version = "version_example"; // string | 
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$top = 30; // int | The maximum number of results to return. (0 will fetch all results)

try {
    $result = $apiInstance->analyticsCrashGroupModelCounts($crash_group_id, $version, $owner_name, $app_name, $top);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsCrashGroupModelCounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crash_group_id** | **string**| The id of the crash group. |
 **version** | **string**|  |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **top** | **int**| The maximum number of results to return. (0 will fetch all results) | [optional] [default to 30]

### Return type

[**\Swagger\Client\Model\InlineResponse20096**](../Model/InlineResponse20096.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analyticsCrashGroupOperatingSystemCounts**
> \Swagger\Client\Model\InlineResponse20095 analyticsCrashGroupOperatingSystemCounts($crash_group_id, $version, $owner_name, $app_name, $top)

Available for UWP apps only.

Top OSes of the selected crash group with selected version. Available for UWP apps only.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crash_group_id = "crash_group_id_example"; // string | The id of the crash group.
$version = "version_example"; // string | 
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$top = 30; // int | The maximum number of results to return. (0 will fetch all results)

try {
    $result = $apiInstance->analyticsCrashGroupOperatingSystemCounts($crash_group_id, $version, $owner_name, $app_name, $top);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsCrashGroupOperatingSystemCounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crash_group_id** | **string**| The id of the crash group. |
 **version** | **string**|  |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **top** | **int**| The maximum number of results to return. (0 will fetch all results) | [optional] [default to 30]

### Return type

[**\Swagger\Client\Model\InlineResponse20095**](../Model/InlineResponse20095.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analyticsCrashGroupTotals**
> \Swagger\Client\Model\InlineResponse20094 analyticsCrashGroupTotals($crash_group_id, $version, $owner_name, $app_name)

Available for UWP apps only.

Overall crashes and affected users count of the selected crash group with selected version. Available for UWP apps only.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crash_group_id = "crash_group_id_example"; // string | The id of the crash group.
$version = "version_example"; // string | 
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->analyticsCrashGroupTotals($crash_group_id, $version, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsCrashGroupTotals: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crash_group_id** | **string**| The id of the crash group. |
 **version** | **string**|  |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\InlineResponse20094**](../Model/InlineResponse20094.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analyticsCrashGroupsTotals**
> \Swagger\Client\Model\InlineResponse20098[] analyticsCrashGroupsTotals($crash_groups, $owner_name, $app_name)



Overall crashes and affected users count of the selected crash groups with selected versions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crash_groups = new \Swagger\Client\Model\CrashGroups(); // \Swagger\Client\Model\CrashGroups | 
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->analyticsCrashGroupsTotals($crash_groups, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsCrashGroupsTotals: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crash_groups** | [**\Swagger\Client\Model\CrashGroups**](../Model/CrashGroups.md)|  |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\InlineResponse20098[]**](../Model/InlineResponse20098.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analyticsCreateOrUpdateAudience**
> object analyticsCreateOrUpdateAudience($audience_name, $audience, $owner_name, $app_name)



Creates or updates audience definition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_name = "audience_name_example"; // string | The name of the audience
$audience = new \Swagger\Client\Model\Audience(); // \Swagger\Client\Model\Audience | Audience definition
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->analyticsCreateOrUpdateAudience($audience_name, $audience, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsCreateOrUpdateAudience: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audience_name** | **string**| The name of the audience |
 **audience** | [**\Swagger\Client\Model\Audience**](../Model/Audience.md)| Audience definition |
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

# **analyticsDeleteAudience**
> analyticsDeleteAudience($audience_name, $owner_name, $app_name)



Deletes audience definition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_name = "audience_name_example"; // string | The name of the audience
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $apiInstance->analyticsDeleteAudience($audience_name, $owner_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsDeleteAudience: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audience_name** | **string**| The name of the audience |
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

# **analyticsDeviceCounts**
> object analyticsDeviceCounts($start, $app_build, $owner_name, $app_name, $end, $versions)



Count of active devices by interval in the time range.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date time in data in ISO 8601 date time format.
$app_build = "app_build_example"; // string | 
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last date time in data in ISO 8601 date time format.
$versions = array("versions_example"); // string[] | 

try {
    $result = $apiInstance->analyticsDeviceCounts($start, $app_build, $owner_name, $app_name, $end, $versions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsDeviceCounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start** | **\DateTime**| Start date time in data in ISO 8601 date time format. |
 **app_build** | **string**|  |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **end** | **\DateTime**| Last date time in data in ISO 8601 date time format. | [optional]
 **versions** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analyticsDistributionReleaseCounts**
> \Swagger\Client\Model\InlineResponse20092 analyticsDistributionReleaseCounts($releases, $owner_name, $app_name)



Count of total downloads for the provided distribution releases.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$releases = new \Swagger\Client\Model\Releases(); // \Swagger\Client\Model\Releases | The releases to retrieve.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->analyticsDistributionReleaseCounts($releases, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsDistributionReleaseCounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **releases** | [**\Swagger\Client\Model\Releases**](../Model/Releases.md)| The releases to retrieve. |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\InlineResponse20092**](../Model/InlineResponse20092.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analyticsEventCount**
> \Swagger\Client\Model\InlineResponse20088 analyticsEventCount($event_name, $start, $owner_name, $app_name, $end, $versions)



Count of events by interval in the time range.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_name = "event_name_example"; // string | The id of the event.
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date time in data in ISO 8601 date time format.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last date time in data in ISO 8601 date time format.
$versions = array("versions_example"); // string[] | 

try {
    $result = $apiInstance->analyticsEventCount($event_name, $start, $owner_name, $app_name, $end, $versions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsEventCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_name** | **string**| The id of the event. |
 **start** | **\DateTime**| Start date time in data in ISO 8601 date time format. |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **end** | **\DateTime**| Last date time in data in ISO 8601 date time format. | [optional]
 **versions** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20088**](../Model/InlineResponse20088.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analyticsEventDeviceCount**
> \Swagger\Client\Model\InlineResponse20089 analyticsEventDeviceCount($event_name, $start, $owner_name, $app_name, $end, $versions)



Count of devices for an event by interval in the time range.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_name = "event_name_example"; // string | The id of the event.
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date time in data in ISO 8601 date time format.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last date time in data in ISO 8601 date time format.
$versions = array("versions_example"); // string[] | 

try {
    $result = $apiInstance->analyticsEventDeviceCount($event_name, $start, $owner_name, $app_name, $end, $versions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsEventDeviceCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_name** | **string**| The id of the event. |
 **start** | **\DateTime**| Start date time in data in ISO 8601 date time format. |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **end** | **\DateTime**| Last date time in data in ISO 8601 date time format. | [optional]
 **versions** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20089**](../Model/InlineResponse20089.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analyticsEventPerDeviceCount**
> \Swagger\Client\Model\InlineResponse20091 analyticsEventPerDeviceCount($event_name, $start, $owner_name, $app_name, $end, $versions)



Count of events per device by interval in the time range.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_name = "event_name_example"; // string | The id of the event.
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date time in data in ISO 8601 date time format.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last date time in data in ISO 8601 date time format.
$versions = array("versions_example"); // string[] | 

try {
    $result = $apiInstance->analyticsEventPerDeviceCount($event_name, $start, $owner_name, $app_name, $end, $versions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsEventPerDeviceCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_name** | **string**| The id of the event. |
 **start** | **\DateTime**| Start date time in data in ISO 8601 date time format. |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **end** | **\DateTime**| Last date time in data in ISO 8601 date time format. | [optional]
 **versions** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20091**](../Model/InlineResponse20091.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analyticsEventPerSessionCount**
> \Swagger\Client\Model\InlineResponse20090 analyticsEventPerSessionCount($event_name, $start, $owner_name, $app_name, $end, $versions)



Count of events per session by interval in the time range.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_name = "event_name_example"; // string | The id of the event.
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date time in data in ISO 8601 date time format.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last date time in data in ISO 8601 date time format.
$versions = array("versions_example"); // string[] | 

try {
    $result = $apiInstance->analyticsEventPerSessionCount($event_name, $start, $owner_name, $app_name, $end, $versions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsEventPerSessionCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_name** | **string**| The id of the event. |
 **start** | **\DateTime**| Start date time in data in ISO 8601 date time format. |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **end** | **\DateTime**| Last date time in data in ISO 8601 date time format. | [optional]
 **versions** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20090**](../Model/InlineResponse20090.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analyticsEventProperties**
> \Swagger\Client\Model\InlineResponse20087 analyticsEventProperties($event_name, $owner_name, $app_name)



Event properties.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_name = "event_name_example"; // string | The id of the event.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->analyticsEventProperties($event_name, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsEventProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_name** | **string**| The id of the event. |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\InlineResponse20087**](../Model/InlineResponse20087.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analyticsEventPropertyCounts**
> \Swagger\Client\Model\InlineResponse20086 analyticsEventPropertyCounts($event_name, $event_property_name, $start, $owner_name, $app_name, $end, $versions, $top)



Event properties value counts during the time range in descending order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_name = "event_name_example"; // string | The id of the event.
$event_property_name = "event_property_name_example"; // string | The id of the event property.
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date time in data in ISO 8601 date time format.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last date time in data in ISO 8601 date time format.
$versions = array("versions_example"); // string[] | 
$top = 10; // int | The number of property values to return. Set to 0 in order to fetch all results available.

try {
    $result = $apiInstance->analyticsEventPropertyCounts($event_name, $event_property_name, $start, $owner_name, $app_name, $end, $versions, $top);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsEventPropertyCounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_name** | **string**| The id of the event. |
 **event_property_name** | **string**| The id of the event property. |
 **start** | **\DateTime**| Start date time in data in ISO 8601 date time format. |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **end** | **\DateTime**| Last date time in data in ISO 8601 date time format. | [optional]
 **versions** | [**string[]**](../Model/string.md)|  | [optional]
 **top** | **int**| The number of property values to return. Set to 0 in order to fetch all results available. | [optional] [default to 10]

### Return type

[**\Swagger\Client\Model\InlineResponse20086**](../Model/InlineResponse20086.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analyticsEvents**
> object analyticsEvents($start, $owner_name, $app_name, $end, $versions, $event_name, $top, $skip, $inlinecount, $orderby)



Count of active events in the time range ordered by event.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date time in data in ISO 8601 date time format.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last date time in data in ISO 8601 date time format.
$versions = array("versions_example"); // string[] | 
$event_name = array("event_name_example"); // string[] | To select the specific events.
$top = 30; // int | The maximum number of results to return. (0 will fetch all results)
$skip = 0; // int | The offset (starting at 0) of the first result to return. This parameter along with limit is used to perform pagination.
$inlinecount = "none"; // string | Controls whether or not to include a count of all the items across all pages.
$orderby = "count desc"; // string | controls the sorting order and sorting based on which column

try {
    $result = $apiInstance->analyticsEvents($start, $owner_name, $app_name, $end, $versions, $event_name, $top, $skip, $inlinecount, $orderby);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start** | **\DateTime**| Start date time in data in ISO 8601 date time format. |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **end** | **\DateTime**| Last date time in data in ISO 8601 date time format. | [optional]
 **versions** | [**string[]**](../Model/string.md)|  | [optional]
 **event_name** | [**string[]**](../Model/string.md)| To select the specific events. | [optional]
 **top** | **int**| The maximum number of results to return. (0 will fetch all results) | [optional] [default to 30]
 **skip** | **int**| The offset (starting at 0) of the first result to return. This parameter along with limit is used to perform pagination. | [optional] [default to 0]
 **inlinecount** | **string**| Controls whether or not to include a count of all the items across all pages. | [optional] [default to none]
 **orderby** | **string**| controls the sorting order and sorting based on which column | [optional] [default to count desc]

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analyticsEventsDelete**
> analyticsEventsDelete($event_name, $owner_name, $app_name)



Delete the set of Events with the specified event names.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_name = "event_name_example"; // string | The id of the event.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $apiInstance->analyticsEventsDelete($event_name, $owner_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsEventsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_name** | **string**| The id of the event. |
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

# **analyticsEventsDeleteLogs**
> analyticsEventsDeleteLogs($event_name, $owner_name, $app_name)



Delete the set of Events with the specified event names.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_name = "event_name_example"; // string | The id of the event.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $apiInstance->analyticsEventsDeleteLogs($event_name, $owner_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsEventsDeleteLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_name** | **string**| The id of the event. |
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

# **analyticsGenericLogFlow**
> \Swagger\Client\Model\InlineResponse20068 analyticsGenericLogFlow($owner_name, $app_name, $start)



Logs received between the specified start time and the current time. The API will return a maximum of 100 logs per call.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date time in data in ISO 8601 date time format. It must be within the current day in the UTC timezone. The default value is the start time of the current day in UTC timezone.

try {
    $result = $apiInstance->analyticsGenericLogFlow($owner_name, $app_name, $start);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsGenericLogFlow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **start** | **\DateTime**| Start date time in data in ISO 8601 date time format. It must be within the current day in the UTC timezone. The default value is the start time of the current day in UTC timezone. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20068**](../Model/InlineResponse20068.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analyticsGetAudience**
> object analyticsGetAudience($audience_name, $owner_name, $app_name)



Gets audience definition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_name = "audience_name_example"; // string | The name of the audience
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->analyticsGetAudience($audience_name, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsGetAudience: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audience_name** | **string**| The name of the audience |
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

# **analyticsLanguageCounts**
> \Swagger\Client\Model\InlineResponse20085 analyticsLanguageCounts($start, $owner_name, $app_name, $end, $top, $versions)



Languages in the time range.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date time in data in ISO 8601 date time format.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last date time in data in ISO 8601 date time format.
$top = 30; // int | The maximum number of results to return. (0 will fetch all results)
$versions = array("versions_example"); // string[] | 

try {
    $result = $apiInstance->analyticsLanguageCounts($start, $owner_name, $app_name, $end, $top, $versions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsLanguageCounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start** | **\DateTime**| Start date time in data in ISO 8601 date time format. |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **end** | **\DateTime**| Last date time in data in ISO 8601 date time format. | [optional]
 **top** | **int**| The maximum number of results to return. (0 will fetch all results) | [optional] [default to 30]
 **versions** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20085**](../Model/InlineResponse20085.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analyticsListAudiences**
> object analyticsListAudiences($owner_name, $app_name, $include_disabled)



Get list of audiences.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$include_disabled = true; // bool | Include disabled audience definitions

try {
    $result = $apiInstance->analyticsListAudiences($owner_name, $app_name, $include_disabled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsListAudiences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **include_disabled** | **bool**| Include disabled audience definitions | [optional]

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analyticsListCustomProperties**
> object analyticsListCustomProperties($owner_name, $app_name)



Get list of custom properties.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->analyticsListCustomProperties($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsListCustomProperties: ', $e->getMessage(), PHP_EOL;
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

# **analyticsListDeviceProperties**
> object analyticsListDeviceProperties($owner_name, $app_name)



Get list of device properties.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->analyticsListDeviceProperties($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsListDeviceProperties: ', $e->getMessage(), PHP_EOL;
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

# **analyticsListDevicePropertyValues**
> object analyticsListDevicePropertyValues($property_name, $owner_name, $app_name, $contains)



Get list of device property values.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_name = "property_name_example"; // string | Device property
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$contains = "contains_example"; // string | Contains string

try {
    $result = $apiInstance->analyticsListDevicePropertyValues($property_name, $owner_name, $app_name, $contains);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsListDevicePropertyValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **property_name** | **string**| Device property |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **contains** | **string**| Contains string | [optional]

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analyticsLogFlow**
> \Swagger\Client\Model\InlineResponse20084 analyticsLogFlow($owner_name, $app_name, $start)



Logs received between the specified start time and the current time. The API will return a maximum of 100 logs per call.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date time in data in ISO 8601 date time format. It must be within the current day in the UTC timezone. The default value is the start time of the current day in UTC timezone.

try {
    $result = $apiInstance->analyticsLogFlow($owner_name, $app_name, $start);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsLogFlow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **start** | **\DateTime**| Start date time in data in ISO 8601 date time format. It must be within the current day in the UTC timezone. The default value is the start time of the current day in UTC timezone. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20084**](../Model/InlineResponse20084.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analyticsModelCounts**
> \Swagger\Client\Model\InlineResponse20083 analyticsModelCounts($start, $owner_name, $app_name, $end, $top, $versions)



Models in the time range.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date time in data in ISO 8601 date time format.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last date time in data in ISO 8601 date time format.
$top = 30; // int | The maximum number of results to return. (0 will fetch all results)
$versions = array("versions_example"); // string[] | 

try {
    $result = $apiInstance->analyticsModelCounts($start, $owner_name, $app_name, $end, $top, $versions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsModelCounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start** | **\DateTime**| Start date time in data in ISO 8601 date time format. |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **end** | **\DateTime**| Last date time in data in ISO 8601 date time format. | [optional]
 **top** | **int**| The maximum number of results to return. (0 will fetch all results) | [optional] [default to 30]
 **versions** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20083**](../Model/InlineResponse20083.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analyticsOperatingSystemCounts**
> \Swagger\Client\Model\InlineResponse20082 analyticsOperatingSystemCounts($start, $owner_name, $app_name, $end, $top, $versions)



OSes in the time range.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date time in data in ISO 8601 date time format.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last date time in data in ISO 8601 date time format.
$top = 30; // int | The maximum number of results to return. (0 will fetch all results)
$versions = array("versions_example"); // string[] | 

try {
    $result = $apiInstance->analyticsOperatingSystemCounts($start, $owner_name, $app_name, $end, $top, $versions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsOperatingSystemCounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start** | **\DateTime**| Start date time in data in ISO 8601 date time format. |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **end** | **\DateTime**| Last date time in data in ISO 8601 date time format. | [optional]
 **top** | **int**| The maximum number of results to return. (0 will fetch all results) | [optional] [default to 30]
 **versions** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20082**](../Model/InlineResponse20082.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analyticsPerDeviceCounts**
> \Swagger\Client\Model\InlineResponse20079 analyticsPerDeviceCounts($start, $interval, $owner_name, $app_name, $end, $versions)



Count of sessions per device in the time range.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date time in data in ISO 8601 date time format.
$interval = "interval_example"; // string | Size of interval in ISO 8601 duration format. (PnYnMnDTnHnMnS|PnW|P<date>T<time>). The valid durations are 1 day (P1D), 1 week (P1W), and 30 days (P30D).
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last date time in data in ISO 8601 date time format.
$versions = array("versions_example"); // string[] | 

try {
    $result = $apiInstance->analyticsPerDeviceCounts($start, $interval, $owner_name, $app_name, $end, $versions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsPerDeviceCounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start** | **\DateTime**| Start date time in data in ISO 8601 date time format. |
 **interval** | **string**| Size of interval in ISO 8601 duration format. (PnYnMnDTnHnMnS|PnW|P&lt;date&gt;T&lt;time&gt;). The valid durations are 1 day (P1D), 1 week (P1W), and 30 days (P30D). |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **end** | **\DateTime**| Last date time in data in ISO 8601 date time format. | [optional]
 **versions** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20079**](../Model/InlineResponse20079.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analyticsPlaceCounts**
> object analyticsPlaceCounts($start, $owner_name, $app_name, $end, $top, $versions)



Places in the time range.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date time in data in ISO 8601 date time format.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last date time in data in ISO 8601 date time format.
$top = 30; // int | The maximum number of results to return. (0 will fetch all results)
$versions = array("versions_example"); // string[] | 

try {
    $result = $apiInstance->analyticsPlaceCounts($start, $owner_name, $app_name, $end, $top, $versions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsPlaceCounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start** | **\DateTime**| Start date time in data in ISO 8601 date time format. |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **end** | **\DateTime**| Last date time in data in ISO 8601 date time format. | [optional]
 **top** | **int**| The maximum number of results to return. (0 will fetch all results) | [optional] [default to 30]
 **versions** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analyticsSessionCounts**
> \Swagger\Client\Model\InlineResponse20081[] analyticsSessionCounts($start, $interval, $owner_name, $app_name, $end, $versions)



Count of sessions in the time range.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date time in data in ISO 8601 date time format.
$interval = "interval_example"; // string | Size of interval in ISO 8601 duration format. (PnYnMnDTnHnMnS|PnW|P<date>T<time>). The valid durations are 1 day (P1D), 1 week (P1W), and 30 days (P30D).
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last date time in data in ISO 8601 date time format.
$versions = array("versions_example"); // string[] | 

try {
    $result = $apiInstance->analyticsSessionCounts($start, $interval, $owner_name, $app_name, $end, $versions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsSessionCounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start** | **\DateTime**| Start date time in data in ISO 8601 date time format. |
 **interval** | **string**| Size of interval in ISO 8601 duration format. (PnYnMnDTnHnMnS|PnW|P&lt;date&gt;T&lt;time&gt;). The valid durations are 1 day (P1D), 1 week (P1W), and 30 days (P30D). |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **end** | **\DateTime**| Last date time in data in ISO 8601 date time format. | [optional]
 **versions** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20081[]**](../Model/InlineResponse20081.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analyticsSessionDurationsDistribution**
> \Swagger\Client\Model\InlineResponse20080 analyticsSessionDurationsDistribution($start, $owner_name, $app_name, $end, $versions)



Gets session duration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date time in data in ISO 8601 date time format.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last date time in data in ISO 8601 date time format.
$versions = array("versions_example"); // string[] | 

try {
    $result = $apiInstance->analyticsSessionDurationsDistribution($start, $owner_name, $app_name, $end, $versions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsSessionDurationsDistribution: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start** | **\DateTime**| Start date time in data in ISO 8601 date time format. |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **end** | **\DateTime**| Last date time in data in ISO 8601 date time format. | [optional]
 **versions** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20080**](../Model/InlineResponse20080.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analyticsTestAudience**
> object analyticsTestAudience($audience, $owner_name, $app_name)



Tests audience definition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience = new \Swagger\Client\Model\Audience1(); // \Swagger\Client\Model\Audience1 | Audience definition
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->analyticsTestAudience($audience, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsTestAudience: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audience** | [**\Swagger\Client\Model\Audience1**](../Model/Audience1.md)| Audience definition |
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

# **analyticsVersions**
> object analyticsVersions($start, $owner_name, $app_name, $end, $top, $versions)



Count of active versions in the time range ordered by version.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date time in data in ISO 8601 date time format.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last date time in data in ISO 8601 date time format.
$top = 30; // int | The maximum number of results to return. (0 will fetch all results)
$versions = array("versions_example"); // string[] | 

try {
    $result = $apiInstance->analyticsVersions($start, $owner_name, $app_name, $end, $top, $versions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsVersions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start** | **\DateTime**| Start date time in data in ISO 8601 date time format. |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **end** | **\DateTime**| Last date time in data in ISO 8601 date time format. | [optional]
 **top** | **int**| The maximum number of results to return. (0 will fetch all results) | [optional] [default to 30]
 **versions** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appBlockLogs**
> string appBlockLogs($owner_name, $app_name)



**Warning, this operation is not reversible.**   A successful call to this API will permanently stop ingesting any logs received via SDK by app_id, and cannot be restored. We advise caution when using this API, it is designed to permanently disable an app_id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->appBlockLogs($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->appBlockLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

**string**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crashesListSessionLogs**
> \Swagger\Client\Model\InlineResponse20068 crashesListSessionLogs($crash_id, $owner_name, $app_name, $date)



Get session logs by crash ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crash_id = "crash_id_example"; // string | The id of the a crash
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date of data requested

try {
    $result = $apiInstance->crashesListSessionLogs($crash_id, $owner_name, $app_name, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->crashesListSessionLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crash_id** | **string**| The id of the a crash |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **date** | **\DateTime**| Date of data requested | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20068**](../Model/InlineResponse20068.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicesBlockLogs**
> string devicesBlockLogs($install_id, $owner_name, $app_name)



**Warning, this operation is not reversible.**   A successful call to this API will permanently stop ingesting any logs received via SDK for the given installation ID, and cannot be restored. We advise caution when using this API, it is designed to permanently disable collection from a specific installation of the app on a device, usually following the request from a user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$install_id = "install_id_example"; // string | The id of the device
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->devicesBlockLogs($install_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->devicesBlockLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **install_id** | **string**| The id of the device |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

**string**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

