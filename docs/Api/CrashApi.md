# ZeC128\AppCenter\CrashApi

All URIs are relative to *https://api.appcenter.ms*

Method | HTTP request | Description
------------- | ------------- | -------------
[**crashGroupsGet**](CrashApi.md#crashGroupsGet) | **GET** /v0.1/apps/{owner_name}/{app_name}/crash_groups/{crash_group_id} | 
[**crashGroupsGetStacktrace**](CrashApi.md#crashGroupsGetStacktrace) | **GET** /v0.1/apps/{owner_name}/{app_name}/crash_groups/{crash_group_id}/stacktrace | 
[**crashGroupsList**](CrashApi.md#crashGroupsList) | **GET** /v0.1/apps/{owner_name}/{app_name}/crash_groups | 
[**crashGroupsUpdate**](CrashApi.md#crashGroupsUpdate) | **PATCH** /v0.1/apps/{owner_name}/{app_name}/crash_groups/{crash_group_id} | 
[**crashesDelete**](CrashApi.md#crashesDelete) | **DELETE** /v0.1/apps/{owner_name}/{app_name}/crash_groups/{crash_group_id}/crashes/{crash_id} | 
[**crashesGet**](CrashApi.md#crashesGet) | **GET** /v0.1/apps/{owner_name}/{app_name}/crash_groups/{crash_group_id}/crashes/{crash_id} | 
[**crashesGetAppCrashesInfo**](CrashApi.md#crashesGetAppCrashesInfo) | **GET** /v0.1/apps/{owner_name}/{app_name}/crashes_info | 
[**crashesGetAppVersions**](CrashApi.md#crashesGetAppVersions) | **GET** /v0.1/apps/{owner_name}/{app_name}/versions | 
[**crashesGetCrashAttachmentLocation**](CrashApi.md#crashesGetCrashAttachmentLocation) | **GET** /v0.1/apps/{owner_name}/{app_name}/crashes/{crash_id}/attachments/{attachment_id}/location | 
[**crashesGetCrashTextAttachmentContent**](CrashApi.md#crashesGetCrashTextAttachmentContent) | **GET** /v0.1/apps/{owner_name}/{app_name}/crashes/{crash_id}/attachments/{attachment_id}/text | 
[**crashesGetNativeCrash**](CrashApi.md#crashesGetNativeCrash) | **GET** /v0.1/apps/{owner_name}/{app_name}/crash_groups/{crash_group_id}/crashes/{crash_id}/native | 
[**crashesGetNativeCrashDownload**](CrashApi.md#crashesGetNativeCrashDownload) | **GET** /v0.1/apps/{owner_name}/{app_name}/crash_groups/{crash_group_id}/crashes/{crash_id}/native/download | 
[**crashesGetRawCrashLocation**](CrashApi.md#crashesGetRawCrashLocation) | **GET** /v0.1/apps/{owner_name}/{app_name}/crash_groups/{crash_group_id}/crashes/{crash_id}/raw/location | 
[**crashesGetStacktrace**](CrashApi.md#crashesGetStacktrace) | **GET** /v0.1/apps/{owner_name}/{app_name}/crash_groups/{crash_group_id}/crashes/{crash_id}/stacktrace | 
[**crashesList**](CrashApi.md#crashesList) | **GET** /v0.1/apps/{owner_name}/{app_name}/crash_groups/{crash_group_id}/crashes | 
[**crashesListAttachments**](CrashApi.md#crashesListAttachments) | **GET** /v0.1/apps/{owner_name}/{app_name}/crashes/{crash_id}/attachments | 
[**missingSymbolGroupsGet**](CrashApi.md#missingSymbolGroupsGet) | **GET** /v0.1/apps/{owner_name}/{app_name}/diagnostics/symbol_groups/{symbol_group_id} | Gets missing symbol crash group by its id
[**missingSymbolGroupsInfo**](CrashApi.md#missingSymbolGroupsInfo) | **GET** /v0.1/apps/{owner_name}/{app_name}/diagnostics/symbol_groups_info | Gets application level statistics for all missing symbol groups
[**missingSymbolGroupsList**](CrashApi.md#missingSymbolGroupsList) | **GET** /v0.1/apps/{owner_name}/{app_name}/diagnostics/symbol_groups | Gets top N (ordered by crash count) of crash groups by missing symbol
[**symbolUploadsComplete**](CrashApi.md#symbolUploadsComplete) | **PATCH** /v0.1/apps/{owner_name}/{app_name}/symbol_uploads/{symbol_upload_id} | 
[**symbolUploadsCreate**](CrashApi.md#symbolUploadsCreate) | **POST** /v0.1/apps/{owner_name}/{app_name}/symbol_uploads | 
[**symbolUploadsDelete**](CrashApi.md#symbolUploadsDelete) | **DELETE** /v0.1/apps/{owner_name}/{app_name}/symbol_uploads/{symbol_upload_id} | 
[**symbolUploadsGet**](CrashApi.md#symbolUploadsGet) | **GET** /v0.1/apps/{owner_name}/{app_name}/symbol_uploads/{symbol_upload_id} | 
[**symbolUploadsGetLocation**](CrashApi.md#symbolUploadsGetLocation) | **GET** /v0.1/apps/{owner_name}/{app_name}/symbol_uploads/{symbol_upload_id}/location | 
[**symbolUploadsList**](CrashApi.md#symbolUploadsList) | **GET** /v0.1/apps/{owner_name}/{app_name}/symbol_uploads | 
[**symbolsGet**](CrashApi.md#symbolsGet) | **GET** /v0.1/apps/{owner_name}/{app_name}/symbols/{symbol_id} | 
[**symbolsGetLocation**](CrashApi.md#symbolsGetLocation) | **GET** /v0.1/apps/{owner_name}/{app_name}/symbols/{symbol_id}/location | 
[**symbolsGetStatus**](CrashApi.md#symbolsGetStatus) | **GET** /v0.1/apps/{owner_name}/{app_name}/symbols/{symbol_id}/status | 
[**symbolsIgnore**](CrashApi.md#symbolsIgnore) | **POST** /v0.1/apps/{owner_name}/{app_name}/symbols/{symbol_id}/ignore | 
[**symbolsList**](CrashApi.md#symbolsList) | **GET** /v0.1/apps/{owner_name}/{app_name}/symbols | 


# **crashGroupsGet**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20073 crashGroupsGet($crash_group_id, $owner_name, $app_name)



Gets a specific group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CrashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crash_group_id = "crash_group_id_example"; // string | id of a specific group
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->crashGroupsGet($crash_group_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrashApi->crashGroupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crash_group_id** | **string**| id of a specific group |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20073**](../Model/InlineResponse20073.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crashGroupsGetStacktrace**
> \ZeC128\AppCenter\AppCenterApi\Stacktrace crashGroupsGetStacktrace($crash_group_id, $owner_name, $app_name, $grouping_only)



Gets a stacktrace for a specific crash.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CrashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crash_group_id = "crash_group_id_example"; // string | id of a specific group
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$grouping_only = false; // bool | true if the stacktrace should be only the relevant thread / exception. Default is false

try {
    $result = $apiInstance->crashGroupsGetStacktrace($crash_group_id, $owner_name, $app_name, $grouping_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrashApi->crashGroupsGetStacktrace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crash_group_id** | **string**| id of a specific group |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **grouping_only** | **bool**| true if the stacktrace should be only the relevant thread / exception. Default is false | [optional] [default to false]

### Return type

[**\ZeC128\AppCenter\AppCenterApi\Stacktrace**](../Model/Stacktrace.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crashGroupsList**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20074 crashGroupsList($owner_name, $app_name, $last_occurrence_from, $last_occurrence_to, $app_version, $group_type, $group_status, $group_text_search, $orderby, $continuation_token)



Gets a list of crash groups and whether the list contains all available groups.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CrashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$last_occurrence_from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Earliest date when the last time a crash occured in a crash group
$last_occurrence_to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Latest date when the last time a crash occured in a crash group
$app_version = "app_version_example"; // string | version
$group_type = "group_type_example"; // string | 
$group_status = "group_status_example"; // string | 
$group_text_search = "group_text_search_example"; // string | A freetext search that matches in crash, crash types, crash stack_traces and crash user
$orderby = "last_occurrence desc"; // string | the OData-like $orderby argument
$continuation_token = "continuation_token_example"; // string | Cassandra request continuation token. The token is used for pagination.

try {
    $result = $apiInstance->crashGroupsList($owner_name, $app_name, $last_occurrence_from, $last_occurrence_to, $app_version, $group_type, $group_status, $group_text_search, $orderby, $continuation_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrashApi->crashGroupsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **last_occurrence_from** | **\DateTime**| Earliest date when the last time a crash occured in a crash group | [optional]
 **last_occurrence_to** | **\DateTime**| Latest date when the last time a crash occured in a crash group | [optional]
 **app_version** | **string**| version | [optional]
 **group_type** | **string**|  | [optional]
 **group_status** | **string**|  | [optional]
 **group_text_search** | **string**| A freetext search that matches in crash, crash types, crash stack_traces and crash user | [optional]
 **orderby** | **string**| the OData-like $orderby argument | [optional] [default to last_occurrence desc]
 **continuation_token** | **string**| Cassandra request continuation token. The token is used for pagination. | [optional]

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20074**](../Model/InlineResponse20074.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crashGroupsUpdate**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20073 crashGroupsUpdate($crash_group_id, $group, $owner_name, $app_name)



Updates a group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CrashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crash_group_id = "crash_group_id_example"; // string | id of a specific group
$group = new \ZeC128\AppCenter\AppCenterApi\Group(); // \ZeC128\AppCenter\AppCenterApi\Group | Group change object. All fields are optional and only provided fields will get updated.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->crashGroupsUpdate($crash_group_id, $group, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrashApi->crashGroupsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crash_group_id** | **string**| id of a specific group |
 **group** | [**\ZeC128\AppCenter\AppCenterApi\Group**](../Model/Group.md)| Group change object. All fields are optional and only provided fields will get updated. |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20073**](../Model/InlineResponse20073.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crashesDelete**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20072 crashesDelete($crash_group_id, $crash_id, $owner_name, $app_name, $retention_delete)



Delete a specific crash and related attachments and blobs for an app.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CrashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crash_group_id = "crash_group_id_example"; // string | id of a specific group
$crash_id = "crash_id_example"; // string | id of a specific crash
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$retention_delete = false; // bool | true in that case if the method should skip update counts

try {
    $result = $apiInstance->crashesDelete($crash_group_id, $crash_id, $owner_name, $app_name, $retention_delete);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrashApi->crashesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crash_group_id** | **string**| id of a specific group |
 **crash_id** | **string**| id of a specific crash |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **retention_delete** | **bool**| true in that case if the method should skip update counts | [optional] [default to false]

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20072**](../Model/InlineResponse20072.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crashesGet**
> \ZeC128\AppCenter\AppCenterApi\Crash crashesGet($crash_group_id, $crash_id, $owner_name, $app_name, $include_report, $include_log, $include_details, $include_stacktrace, $grouping_only)



Gets a specific crash for an app.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CrashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crash_group_id = "crash_group_id_example"; // string | id of a specific group
$crash_id = "crash_id_example"; // string | id of a specific crash
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$include_report = false; // bool | true if the crash should include the raw crash report. Default is false
$include_log = false; // bool | true if the crash should include the custom log report. Default is false
$include_details = false; // bool | true if the crash should include in depth crash details
$include_stacktrace = false; // bool | true if the crash should include the stacktrace information
$grouping_only = false; // bool | true if the stacktrace should be only the relevant thread / exception. Default is false

try {
    $result = $apiInstance->crashesGet($crash_group_id, $crash_id, $owner_name, $app_name, $include_report, $include_log, $include_details, $include_stacktrace, $grouping_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrashApi->crashesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crash_group_id** | **string**| id of a specific group |
 **crash_id** | **string**| id of a specific crash |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **include_report** | **bool**| true if the crash should include the raw crash report. Default is false | [optional] [default to false]
 **include_log** | **bool**| true if the crash should include the custom log report. Default is false | [optional] [default to false]
 **include_details** | **bool**| true if the crash should include in depth crash details | [optional] [default to false]
 **include_stacktrace** | **bool**| true if the crash should include the stacktrace information | [optional] [default to false]
 **grouping_only** | **bool**| true if the stacktrace should be only the relevant thread / exception. Default is false | [optional] [default to false]

### Return type

[**\ZeC128\AppCenter\AppCenterApi\Crash**](../Model/Crash.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crashesGetAppCrashesInfo**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20067 crashesGetAppCrashesInfo($owner_name, $app_name)



Gets whether the application has any crashes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CrashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->crashesGetAppCrashesInfo($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrashApi->crashesGetAppCrashesInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20067**](../Model/InlineResponse20067.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crashesGetAppVersions**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20019[] crashesGetAppVersions($owner_name, $app_name)



Gets a list of application versions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CrashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->crashesGetAppVersions($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrashApi->crashesGetAppVersions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20019[]**](../Model/InlineResponse20019.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crashesGetCrashAttachmentLocation**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20069 crashesGetCrashAttachmentLocation($crash_id, $attachment_id, $owner_name, $app_name)



Gets the URI location to download crash attachment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CrashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crash_id = "crash_id_example"; // string | id of a specific crash
$attachment_id = "attachment_id_example"; // string | attachment id
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->crashesGetCrashAttachmentLocation($crash_id, $attachment_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrashApi->crashesGetCrashAttachmentLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crash_id** | **string**| id of a specific crash |
 **attachment_id** | **string**| attachment id |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20069**](../Model/InlineResponse20069.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crashesGetCrashTextAttachmentContent**
> string crashesGetCrashTextAttachmentContent($crash_id, $attachment_id, $owner_name, $app_name)



Gets content of the text attachment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CrashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crash_id = "crash_id_example"; // string | id of a specific crash
$attachment_id = "attachment_id_example"; // string | attachment id
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->crashesGetCrashTextAttachmentContent($crash_id, $attachment_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrashApi->crashesGetCrashTextAttachmentContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crash_id** | **string**| id of a specific crash |
 **attachment_id** | **string**| attachment id |
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

# **crashesGetNativeCrash**
> string crashesGetNativeCrash($crash_group_id, $crash_id, $owner_name, $app_name)



Gets the native log of a specific crash.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CrashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crash_group_id = "crash_group_id_example"; // string | id of a specific group
$crash_id = "crash_id_example"; // string | id of a specific crash
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->crashesGetNativeCrash($crash_group_id, $crash_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrashApi->crashesGetNativeCrash: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crash_group_id** | **string**| id of a specific group |
 **crash_id** | **string**| id of a specific crash |
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

# **crashesGetNativeCrashDownload**
> string crashesGetNativeCrashDownload($crash_group_id, $crash_id, $owner_name, $app_name)



Gets the native log of a specific crash as a text attachment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CrashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crash_group_id = "crash_group_id_example"; // string | id of a specific group
$crash_id = "crash_id_example"; // string | id of a specific crash
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->crashesGetNativeCrashDownload($crash_group_id, $crash_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrashApi->crashesGetNativeCrashDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crash_group_id** | **string**| id of a specific group |
 **crash_id** | **string**| id of a specific crash |
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

# **crashesGetRawCrashLocation**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20071 crashesGetRawCrashLocation($crash_group_id, $crash_id, $owner_name, $app_name)



Gets the URI location to download json of a specific crash.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CrashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crash_group_id = "crash_group_id_example"; // string | id of a specific group
$crash_id = "crash_id_example"; // string | id of a specific crash
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->crashesGetRawCrashLocation($crash_group_id, $crash_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrashApi->crashesGetRawCrashLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crash_group_id** | **string**| id of a specific group |
 **crash_id** | **string**| id of a specific crash |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20071**](../Model/InlineResponse20071.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crashesGetStacktrace**
> \ZeC128\AppCenter\AppCenterApi\Stacktrace crashesGetStacktrace($crash_group_id, $crash_id, $owner_name, $app_name, $grouping_only)



Gets a stacktrace for a specific crash.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CrashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crash_group_id = "crash_group_id_example"; // string | id of a specific group
$crash_id = "crash_id_example"; // string | id of a specific crash
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$grouping_only = false; // bool | true if the stacktrace should be only the relevant thread / exception. Default is false

try {
    $result = $apiInstance->crashesGetStacktrace($crash_group_id, $crash_id, $owner_name, $app_name, $grouping_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrashApi->crashesGetStacktrace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crash_group_id** | **string**| id of a specific group |
 **crash_id** | **string**| id of a specific crash |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **grouping_only** | **bool**| true if the stacktrace should be only the relevant thread / exception. Default is false | [optional] [default to false]

### Return type

[**\ZeC128\AppCenter\AppCenterApi\Stacktrace**](../Model/Stacktrace.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crashesList**
> \ZeC128\AppCenter\AppCenterApi\Crash[] crashesList($crash_group_id, $owner_name, $app_name, $include_report, $include_log, $date_from, $date_to, $app_version, $error_type)



Gets all crashes of a group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CrashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crash_group_id = "crash_group_id_example"; // string | id of a specific group
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$include_report = false; // bool | true if the crash should include the raw crash report. Default is false
$include_log = false; // bool | true if the crash should include the custom log report. Default is false
$date_from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$date_to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$app_version = "app_version_example"; // string | version
$error_type = "error_type_example"; // string | 

try {
    $result = $apiInstance->crashesList($crash_group_id, $owner_name, $app_name, $include_report, $include_log, $date_from, $date_to, $app_version, $error_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrashApi->crashesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crash_group_id** | **string**| id of a specific group |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **include_report** | **bool**| true if the crash should include the raw crash report. Default is false | [optional] [default to false]
 **include_log** | **bool**| true if the crash should include the custom log report. Default is false | [optional] [default to false]
 **date_from** | **\DateTime**|  | [optional]
 **date_to** | **\DateTime**|  | [optional]
 **app_version** | **string**| version | [optional]
 **error_type** | **string**|  | [optional]

### Return type

[**\ZeC128\AppCenter\AppCenterApi\Crash[]**](../Model/Crash.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crashesListAttachments**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20070[] crashesListAttachments($crash_id, $owner_name, $app_name)



Gets all attachments for a specific crash.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CrashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crash_id = "crash_id_example"; // string | id of a specific crash
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->crashesListAttachments($crash_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrashApi->crashesListAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crash_id** | **string**| id of a specific crash |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20070[]**](../Model/InlineResponse20070.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **missingSymbolGroupsGet**
> object missingSymbolGroupsGet($symbol_group_id, $owner_name, $app_name)

Gets missing symbol crash group by its id

Gets missing symbol crash group by its id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CrashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol_group_id = "symbol_group_id_example"; // string | missing symbol crash group id
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->missingSymbolGroupsGet($symbol_group_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrashApi->missingSymbolGroupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol_group_id** | **string**| missing symbol crash group id |
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

# **missingSymbolGroupsInfo**
> object missingSymbolGroupsInfo($owner_name, $app_name)

Gets application level statistics for all missing symbol groups

Gets application level statistics for all missing symbol groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CrashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->missingSymbolGroupsInfo($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrashApi->missingSymbolGroupsInfo: ', $e->getMessage(), PHP_EOL;
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

# **missingSymbolGroupsList**
> object missingSymbolGroupsList($top, $owner_name, $app_name, $filter)

Gets top N (ordered by crash count) of crash groups by missing symbol

Gets top N (ordered by crash count) of crash groups by missing symbol

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CrashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$top = 56; // int | top N elements
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$filter = "filter_example"; // string | query filter

try {
    $result = $apiInstance->missingSymbolGroupsList($top, $owner_name, $app_name, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrashApi->missingSymbolGroupsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **top** | **int**| top N elements |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **filter** | **string**| query filter | [optional]

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **symbolUploadsComplete**
> object symbolUploadsComplete($symbol_upload_id, $body, $owner_name, $app_name)



Commits or aborts the symbol upload process for a new set of symbols for the specified application

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CrashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol_upload_id = "symbol_upload_id_example"; // string | The ID of the symbol upload
$body = new \ZeC128\AppCenter\AppCenterApi\Body4(); // \ZeC128\AppCenter\AppCenterApi\Body4 | The symbol information
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->symbolUploadsComplete($symbol_upload_id, $body, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrashApi->symbolUploadsComplete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol_upload_id** | **string**| The ID of the symbol upload |
 **body** | [**\ZeC128\AppCenter\AppCenterApi\Body4**](../Model/Body4.md)| The symbol information |
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

# **symbolUploadsCreate**
> object symbolUploadsCreate($body, $owner_name, $app_name)



Begins the symbol upload process for a new set of symbols for the specified application

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CrashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ZeC128\AppCenter\AppCenterApi\Body5(); // \ZeC128\AppCenter\AppCenterApi\Body5 | The symbol information
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->symbolUploadsCreate($body, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrashApi->symbolUploadsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ZeC128\AppCenter\AppCenterApi\Body5**](../Model/Body5.md)| The symbol information |
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

# **symbolUploadsDelete**
> object symbolUploadsDelete($symbol_upload_id, $owner_name, $app_name)



Deletes a symbol upload by id for the specified application

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CrashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol_upload_id = "symbol_upload_id_example"; // string | The ID of the symbol upload
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->symbolUploadsDelete($symbol_upload_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrashApi->symbolUploadsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol_upload_id** | **string**| The ID of the symbol upload |
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

# **symbolUploadsGet**
> object symbolUploadsGet($symbol_upload_id, $owner_name, $app_name)



Gets a symbol upload by id for the specified application

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CrashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol_upload_id = "symbol_upload_id_example"; // string | The ID of the symbol upload
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->symbolUploadsGet($symbol_upload_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrashApi->symbolUploadsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol_upload_id** | **string**| The ID of the symbol upload |
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

# **symbolUploadsGetLocation**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20030 symbolUploadsGetLocation($symbol_upload_id, $owner_name, $app_name)



Gets the URL to download the symbol upload

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CrashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol_upload_id = "symbol_upload_id_example"; // string | The ID of the symbol upload
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->symbolUploadsGetLocation($symbol_upload_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrashApi->symbolUploadsGetLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol_upload_id** | **string**| The ID of the symbol upload |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **symbolUploadsList**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20031[] symbolUploadsList($owner_name, $app_name, $top, $status, $symbol_type)



Gets a list of all uploads for the specified application

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CrashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$top = 30; // int | The maximum number of results to return.
$status = "status_example"; // string | Filter results by the current status of a symbol upload: * all: all states in the symbol upload process. Includes created, aborted, committed, processing, indexed and failed states * uploaded: all states after package is uploaded. Includes committed, processing, indexed and failed states * processed: symbol upload processing is completed. Includes indexed and failed states.
$symbol_type = "symbol_type_example"; // string | The type of symbols

try {
    $result = $apiInstance->symbolUploadsList($owner_name, $app_name, $top, $status, $symbol_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrashApi->symbolUploadsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **top** | **int**| The maximum number of results to return. | [optional] [default to 30]
 **status** | **string**| Filter results by the current status of a symbol upload: * all: all states in the symbol upload process. Includes created, aborted, committed, processing, indexed and failed states * uploaded: all states after package is uploaded. Includes committed, processing, indexed and failed states * processed: symbol upload processing is completed. Includes indexed and failed states. | [optional]
 **symbol_type** | **string**| The type of symbols | [optional]

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20031[]**](../Model/InlineResponse20031.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **symbolsGet**
> object symbolsGet($symbol_id, $owner_name, $app_name)



Returns a particular symbol by id (uuid) for the provided application

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CrashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol_id = "symbol_id_example"; // string | The ID of the symbol (uuid of the symbol)
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->symbolsGet($symbol_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrashApi->symbolsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol_id** | **string**| The ID of the symbol (uuid of the symbol) |
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

# **symbolsGetLocation**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20028 symbolsGetLocation($symbol_id, $owner_name, $app_name)



Gets the URL to download the symbol

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CrashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol_id = "symbol_id_example"; // string | The ID of the symbol (uuid of the symbol)
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->symbolsGetLocation($symbol_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrashApi->symbolsGetLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol_id** | **string**| The ID of the symbol (uuid of the symbol) |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **symbolsGetStatus**
> object symbolsGetStatus($symbol_id, $owner_name, $app_name)



Returns a particular symbol by id (uuid) for the provided application

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CrashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol_id = "symbol_id_example"; // string | The ID of the symbol (uuid of the symbol)
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->symbolsGetStatus($symbol_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrashApi->symbolsGetStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol_id** | **string**| The ID of the symbol (uuid of the symbol) |
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

# **symbolsIgnore**
> object symbolsIgnore($symbol_id, $owner_name, $app_name)



Marks a symbol by id (uuid) as ignored

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CrashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol_id = "symbol_id_example"; // string | The ID of the symbol (uuid of the symbol)
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->symbolsIgnore($symbol_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrashApi->symbolsIgnore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol_id** | **string**| The ID of the symbol (uuid of the symbol) |
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

# **symbolsList**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20029[] symbolsList($owner_name, $app_name)



Returns the list of all symbols for the provided application

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CrashApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->symbolsList($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrashApi->symbolsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20029[]**](../Model/InlineResponse20029.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

