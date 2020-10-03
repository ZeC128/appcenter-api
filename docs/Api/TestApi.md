# Swagger\Client\TestApi

All URIs are relative to *https://api.appcenter.ms*

Method | HTTP request | Description
------------- | ------------- | -------------
[**testArchiveTestRun**](TestApi.md#testArchiveTestRun) | **DELETE** /v0.1/apps/{owner_name}/{app_name}/test_runs/{test_run_id} | 
[**testCreateDeviceSelection**](TestApi.md#testCreateDeviceSelection) | **POST** /v0.1/apps/{owner_name}/{app_name}/device_selection | 
[**testCreateDeviceSetOfOwner**](TestApi.md#testCreateDeviceSetOfOwner) | **POST** /v0.1/apps/{owner_name}/{app_name}/owner/device_sets | 
[**testCreateDeviceSetOfUser**](TestApi.md#testCreateDeviceSetOfUser) | **POST** /v0.1/apps/{owner_name}/{app_name}/user/device_sets | 
[**testCreateSubscription**](TestApi.md#testCreateSubscription) | **POST** /v0.1/apps/{owner_name}/{app_name}/subscriptions | 
[**testCreateTestRun**](TestApi.md#testCreateTestRun) | **POST** /v0.1/apps/{owner_name}/{app_name}/test_runs | 
[**testCreateTestSeries**](TestApi.md#testCreateTestSeries) | **POST** /v0.1/apps/{owner_name}/{app_name}/test_series | 
[**testDeleteDeviceSetOfOwner**](TestApi.md#testDeleteDeviceSetOfOwner) | **DELETE** /v0.1/apps/{owner_name}/{app_name}/owner/device_sets/{id} | 
[**testDeleteDeviceSetOfUser**](TestApi.md#testDeleteDeviceSetOfUser) | **DELETE** /v0.1/apps/{owner_name}/{app_name}/user/device_sets/{id} | 
[**testDeleteTestSeries**](TestApi.md#testDeleteTestSeries) | **DELETE** /v0.1/apps/{owner_name}/{app_name}/test_series/{test_series_slug} | 
[**testGdprExportAccount**](TestApi.md#testGdprExportAccount) | **GET** /v0.1/account/test/export/accounts | 
[**testGdprExportAccounts**](TestApi.md#testGdprExportAccounts) | **GET** /v0.1/account/test/export | 
[**testGdprExportApp**](TestApi.md#testGdprExportApp) | **GET** /v0.1/apps/{owner_name}/{app_name}/test/export/apps | 
[**testGdprExportApps**](TestApi.md#testGdprExportApps) | **GET** /v0.1/apps/{owner_name}/{app_name}/test/export | 
[**testGdprExportFeatureFlag**](TestApi.md#testGdprExportFeatureFlag) | **GET** /v0.1/account/test/export/featureFlags | 
[**testGdprExportFileSetFile**](TestApi.md#testGdprExportFileSetFile) | **GET** /v0.1/apps/{owner_name}/{app_name}/test/export/fileSetFiles | 
[**testGdprExportHashFile**](TestApi.md#testGdprExportHashFile) | **GET** /v0.1/apps/{owner_name}/{app_name}/test/export/hashFiles | 
[**testGdprExportPipelineTest**](TestApi.md#testGdprExportPipelineTest) | **GET** /v0.1/apps/{owner_name}/{app_name}/test/export/pipelineTests | 
[**testGdprExportTestRun**](TestApi.md#testGdprExportTestRun) | **GET** /v0.1/apps/{owner_name}/{app_name}/test/export/testRuns | 
[**testGetAllTestRunsForSeries**](TestApi.md#testGetAllTestRunsForSeries) | **GET** /v0.1/apps/{owner_name}/{app_name}/test_series/{test_series_slug}/test_runs | 
[**testGetAllTestSeries**](TestApi.md#testGetAllTestSeries) | **GET** /v0.1/apps/{owner_name}/{app_name}/test_series | 
[**testGetDeviceConfigurations**](TestApi.md#testGetDeviceConfigurations) | **GET** /v0.1/apps/{owner_name}/{app_name}/device_configurations | 
[**testGetDeviceSetOfOwner**](TestApi.md#testGetDeviceSetOfOwner) | **GET** /v0.1/apps/{owner_name}/{app_name}/owner/device_sets/{id} | 
[**testGetDeviceSetOfUser**](TestApi.md#testGetDeviceSetOfUser) | **GET** /v0.1/apps/{owner_name}/{app_name}/user/device_sets/{id} | 
[**testGetSubscriptions**](TestApi.md#testGetSubscriptions) | **GET** /v0.1/apps/{owner_name}/{app_name}/subscriptions | 
[**testGetTestReport**](TestApi.md#testGetTestReport) | **GET** /v0.1/apps/{owner_name}/{app_name}/test_runs/{test_run_id}/report | 
[**testGetTestRun**](TestApi.md#testGetTestRun) | **GET** /v0.1/apps/{owner_name}/{app_name}/test_runs/{test_run_id} | 
[**testGetTestRunState**](TestApi.md#testGetTestRunState) | **GET** /v0.1/apps/{owner_name}/{app_name}/test_runs/{test_run_id}/state | 
[**testGetTestRuns**](TestApi.md#testGetTestRuns) | **GET** /v0.1/apps/{owner_name}/{app_name}/test_runs | 
[**testListDeviceSetsOfOwner**](TestApi.md#testListDeviceSetsOfOwner) | **GET** /v0.1/apps/{owner_name}/{app_name}/owner/device_sets | 
[**testListDeviceSetsOfUser**](TestApi.md#testListDeviceSetsOfUser) | **GET** /v0.1/apps/{owner_name}/{app_name}/user/device_sets | 
[**testPatchTestSeries**](TestApi.md#testPatchTestSeries) | **PATCH** /v0.1/apps/{owner_name}/{app_name}/test_series/{test_series_slug} | 
[**testStartTestRun**](TestApi.md#testStartTestRun) | **POST** /v0.1/apps/{owner_name}/{app_name}/test_runs/{test_run_id}/start | 
[**testStartUploadingFile**](TestApi.md#testStartUploadingFile) | **POST** /v0.1/apps/{owner_name}/{app_name}/test_runs/{test_run_id}/files | 
[**testStopTestRun**](TestApi.md#testStopTestRun) | **PUT** /v0.1/apps/{owner_name}/{app_name}/test_runs/{test_run_id}/stop | 
[**testUpdateDeviceSetOfOwner**](TestApi.md#testUpdateDeviceSetOfOwner) | **PUT** /v0.1/apps/{owner_name}/{app_name}/owner/device_sets/{id} | 
[**testUpdateDeviceSetOfUser**](TestApi.md#testUpdateDeviceSetOfUser) | **PUT** /v0.1/apps/{owner_name}/{app_name}/user/device_sets/{id} | 
[**testUploadHash**](TestApi.md#testUploadHash) | **POST** /v0.1/apps/{owner_name}/{app_name}/test_runs/{test_run_id}/hashes | 
[**testUploadHashesBatch**](TestApi.md#testUploadHashesBatch) | **POST** /v0.1/apps/{owner_name}/{app_name}/test_runs/{test_run_id}/hashes/batch | 


# **testArchiveTestRun**
> \Swagger\Client\Model\TestRun testArchiveTestRun($test_run_id, $owner_name, $app_name)



Logically deletes a test run

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$test_run_id = "test_run_id_example"; // string | The ID of the test run
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->testArchiveTestRun($test_run_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testArchiveTestRun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **test_run_id** | [**string**](../Model/.md)| The ID of the test run |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\TestRun**](../Model/TestRun.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testCreateDeviceSelection**
> \Swagger\Client\Model\DeviceSelection testCreateDeviceSelection($device_list, $owner_name, $app_name)



Creates a short ID for a list of devices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$device_list = new \Swagger\Client\Model\DeviceList(); // \Swagger\Client\Model\DeviceList | 
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->testCreateDeviceSelection($device_list, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testCreateDeviceSelection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_list** | [**\Swagger\Client\Model\DeviceList**](../Model/DeviceList.md)|  |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\DeviceSelection**](../Model/DeviceSelection.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testCreateDeviceSetOfOwner**
> \Swagger\Client\Model\DeviceSet testCreateDeviceSetOfOwner($device_set, $owner_name, $app_name)



Creates a device set belonging to the owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$device_set = new \Swagger\Client\Model\DeviceSetUpdateInformation3(); // \Swagger\Client\Model\DeviceSetUpdateInformation3 | 
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->testCreateDeviceSetOfOwner($device_set, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testCreateDeviceSetOfOwner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_set** | [**\Swagger\Client\Model\DeviceSetUpdateInformation3**](../Model/DeviceSetUpdateInformation3.md)|  |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\DeviceSet**](../Model/DeviceSet.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testCreateDeviceSetOfUser**
> \Swagger\Client\Model\DeviceSet testCreateDeviceSetOfUser($device_set, $owner_name, $app_name)



Creates a device set belonging to the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$device_set = new \Swagger\Client\Model\DeviceSetUpdateInformation1(); // \Swagger\Client\Model\DeviceSetUpdateInformation1 | 
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->testCreateDeviceSetOfUser($device_set, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testCreateDeviceSetOfUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_set** | [**\Swagger\Client\Model\DeviceSetUpdateInformation1**](../Model/DeviceSetUpdateInformation1.md)|  |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\DeviceSet**](../Model/DeviceSet.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testCreateSubscription**
> \Swagger\Client\Model\Subscription1 testCreateSubscription($owner_name, $app_name)



Accept a free trial subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->testCreateSubscription($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testCreateSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\Subscription1**](../Model/Subscription1.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testCreateTestRun**
> testCreateTestRun($owner_name, $app_name)



Creates a new test run

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $apiInstance->testCreateTestRun($owner_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testCreateTestRun: ', $e->getMessage(), PHP_EOL;
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

# **testCreateTestSeries**
> \Swagger\Client\Model\TestSeries testCreateTestSeries($test_series_name, $owner_name, $app_name)



Creates new test series for an application

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$test_series_name = new \Swagger\Client\Model\NameOfTheTestSeries1(); // \Swagger\Client\Model\NameOfTheTestSeries1 | 
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->testCreateTestSeries($test_series_name, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testCreateTestSeries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **test_series_name** | [**\Swagger\Client\Model\NameOfTheTestSeries1**](../Model/NameOfTheTestSeries1.md)|  |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\TestSeries**](../Model/TestSeries.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testDeleteDeviceSetOfOwner**
> testDeleteDeviceSetOfOwner($id, $owner_name, $app_name)



Deletes a device set belonging to the owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The UUID of the device set
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $apiInstance->testDeleteDeviceSetOfOwner($id, $owner_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testDeleteDeviceSetOfOwner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The UUID of the device set |
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

# **testDeleteDeviceSetOfUser**
> testDeleteDeviceSetOfUser($id, $owner_name, $app_name)



Deletes a device set belonging to the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The UUID of the device set
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $apiInstance->testDeleteDeviceSetOfUser($id, $owner_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testDeleteDeviceSetOfUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The UUID of the device set |
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

# **testDeleteTestSeries**
> testDeleteTestSeries($test_series_slug, $owner_name, $app_name)



Deletes a single test series

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$test_series_slug = "test_series_slug_example"; // string | The slug of the test series
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $apiInstance->testDeleteTestSeries($test_series_slug, $owner_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testDeleteTestSeries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **test_series_slug** | **string**| The slug of the test series |
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

# **testGdprExportAccount**
> \Swagger\Client\Model\InlineResponse200101 testGdprExportAccount()



Lists account data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->testGdprExportAccount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testGdprExportAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse200101**](../Model/InlineResponse200101.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testGdprExportAccounts**
> \Swagger\Client\Model\InlineResponse20027 testGdprExportAccounts()



Lists all the endpoints available for Test accounts data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->testGdprExportAccounts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testGdprExportAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testGdprExportApp**
> \Swagger\Client\Model\InlineResponse20026 testGdprExportApp($owner_name, $app_name)



Lists app data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->testGdprExportApp($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testGdprExportApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\InlineResponse20026**](../Model/InlineResponse20026.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testGdprExportApps**
> \Swagger\Client\Model\InlineResponse20027 testGdprExportApps($owner_name, $app_name)



Lists all the endpoints available for Test apps data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->testGdprExportApps($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testGdprExportApps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testGdprExportFeatureFlag**
> \Swagger\Client\Model\InlineResponse200100 testGdprExportFeatureFlag()



Lists feature flag data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->testGdprExportFeatureFlag();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testGdprExportFeatureFlag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse200100**](../Model/InlineResponse200100.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testGdprExportFileSetFile**
> \Swagger\Client\Model\InlineResponse20025 testGdprExportFileSetFile($owner_name, $app_name)



Lists file set file data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->testGdprExportFileSetFile($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testGdprExportFileSetFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testGdprExportHashFile**
> \Swagger\Client\Model\InlineResponse20024 testGdprExportHashFile($owner_name, $app_name)



Lists hash file data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->testGdprExportHashFile($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testGdprExportHashFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testGdprExportPipelineTest**
> \Swagger\Client\Model\InlineResponse20023 testGdprExportPipelineTest($owner_name, $app_name)



Lists pipeline test data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->testGdprExportPipelineTest($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testGdprExportPipelineTest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testGdprExportTestRun**
> \Swagger\Client\Model\InlineResponse20022 testGdprExportTestRun($owner_name, $app_name)



Lists test run data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->testGdprExportTestRun($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testGdprExportTestRun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testGetAllTestRunsForSeries**
> \Swagger\Client\Model\TestRun[] testGetAllTestRunsForSeries($test_series_slug, $owner_name, $app_name)



Returns list of all test runs for a given test series

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$test_series_slug = "test_series_slug_example"; // string | The slug of the test series
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->testGetAllTestRunsForSeries($test_series_slug, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testGetAllTestRunsForSeries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **test_series_slug** | **string**| The slug of the test series |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\TestRun[]**](../Model/TestRun.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testGetAllTestSeries**
> \Swagger\Client\Model\TestSeries[] testGetAllTestSeries($owner_name, $app_name, $query)



Returns list of all test series for an application

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$query = "query_example"; // string | A query string to filter test series

try {
    $result = $apiInstance->testGetAllTestSeries($owner_name, $app_name, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testGetAllTestSeries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **query** | **string**| A query string to filter test series | [optional]

### Return type

[**\Swagger\Client\Model\TestSeries[]**](../Model/TestSeries.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testGetDeviceConfigurations**
> \Swagger\Client\Model\InlineResponse20064[] testGetDeviceConfigurations($owner_name, $app_name, $app_upload_id)



Returns a list of available devices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$app_upload_id = "app_upload_id_example"; // string | The ID of the test run

try {
    $result = $apiInstance->testGetDeviceConfigurations($owner_name, $app_name, $app_upload_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testGetDeviceConfigurations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **app_upload_id** | [**string**](../Model/.md)| The ID of the test run | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20064[]**](../Model/InlineResponse20064.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testGetDeviceSetOfOwner**
> \Swagger\Client\Model\DeviceSet testGetDeviceSetOfOwner($id, $owner_name, $app_name)



Gets a device set belonging to the owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The UUID of the device set
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->testGetDeviceSetOfOwner($id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testGetDeviceSetOfOwner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The UUID of the device set |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\DeviceSet**](../Model/DeviceSet.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testGetDeviceSetOfUser**
> \Swagger\Client\Model\DeviceSet testGetDeviceSetOfUser($id, $owner_name, $app_name)



Gets a device set belonging to the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The UUID of the device set
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->testGetDeviceSetOfUser($id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testGetDeviceSetOfUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The UUID of the device set |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\DeviceSet**](../Model/DeviceSet.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testGetSubscriptions**
> \Swagger\Client\Model\Subscription1 testGetSubscriptions($owner_name, $app_name)



Get information about the currently active subscriptions, if any

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->testGetSubscriptions($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testGetSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\Subscription1**](../Model/Subscription1.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testGetTestReport**
> object testGetTestReport($test_run_id, $owner_name, $app_name)



Returns a single test report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$test_run_id = "test_run_id_example"; // string | The ID of the test run
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->testGetTestReport($test_run_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testGetTestReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **test_run_id** | [**string**](../Model/.md)| The ID of the test run |
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

# **testGetTestRun**
> \Swagger\Client\Model\TestRun testGetTestRun($test_run_id, $owner_name, $app_name)



Returns a single test runs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$test_run_id = "test_run_id_example"; // string | The ID of the test run
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->testGetTestRun($test_run_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testGetTestRun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **test_run_id** | [**string**](../Model/.md)| The ID of the test run |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\TestRun**](../Model/TestRun.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testGetTestRunState**
> \Swagger\Client\Model\TestRunState testGetTestRunState($test_run_id, $owner_name, $app_name)



Gets state of the test run

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$test_run_id = "test_run_id_example"; // string | The ID of the test run
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->testGetTestRunState($test_run_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testGetTestRunState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **test_run_id** | **string**| The ID of the test run |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\TestRunState**](../Model/TestRunState.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testGetTestRuns**
> \Swagger\Client\Model\TestRun[] testGetTestRuns($owner_name, $app_name)



Returns a list of test runs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->testGetTestRuns($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testGetTestRuns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\TestRun[]**](../Model/TestRun.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testListDeviceSetsOfOwner**
> \Swagger\Client\Model\DeviceSet[] testListDeviceSetsOfOwner($owner_name, $app_name)



Lists device sets belonging to the owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->testListDeviceSetsOfOwner($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testListDeviceSetsOfOwner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\DeviceSet[]**](../Model/DeviceSet.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testListDeviceSetsOfUser**
> \Swagger\Client\Model\DeviceSet[] testListDeviceSetsOfUser($owner_name, $app_name)



Lists device sets belonging to the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->testListDeviceSetsOfUser($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testListDeviceSetsOfUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\DeviceSet[]**](../Model/DeviceSet.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testPatchTestSeries**
> \Swagger\Client\Model\TestSeries testPatchTestSeries($test_series_slug, $name, $owner_name, $app_name)



Updates name and slug of a test series

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$test_series_slug = "test_series_slug_example"; // string | The slug of the test series
$name = new \Swagger\Client\Model\NameOfTheTestSeries(); // \Swagger\Client\Model\NameOfTheTestSeries | 
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->testPatchTestSeries($test_series_slug, $name, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testPatchTestSeries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **test_series_slug** | **string**| The slug of the test series |
 **name** | [**\Swagger\Client\Model\NameOfTheTestSeries**](../Model/NameOfTheTestSeries.md)|  |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\TestSeries**](../Model/TestSeries.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testStartTestRun**
> \Swagger\Client\Model\TestCloudTestRunStartResult testStartTestRun($test_run_id, $start_options, $owner_name, $app_name)



Starts test run

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$test_run_id = "test_run_id_example"; // string | The ID of the test run
$start_options = new \Swagger\Client\Model\TestCloudStartTestRunOptions(); // \Swagger\Client\Model\TestCloudStartTestRunOptions | Option required to start the test run
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->testStartTestRun($test_run_id, $start_options, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testStartTestRun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **test_run_id** | **string**| The ID of the test run |
 **start_options** | [**\Swagger\Client\Model\TestCloudStartTestRunOptions**](../Model/TestCloudStartTestRunOptions.md)| Option required to start the test run |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\TestCloudTestRunStartResult**](../Model/TestCloudTestRunStartResult.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testStartUploadingFile**
> testStartUploadingFile($test_run_id, $owner_name, $app_name)



Uploads file for a test run

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$test_run_id = "test_run_id_example"; // string | The ID of the test run
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $apiInstance->testStartUploadingFile($test_run_id, $owner_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testStartUploadingFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **test_run_id** | **string**| The ID of the test run |
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

# **testStopTestRun**
> \Swagger\Client\Model\TestRun testStopTestRun($test_run_id, $owner_name, $app_name)



Stop a test run execution

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$test_run_id = "test_run_id_example"; // string | The ID of the test run to be stopped
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->testStopTestRun($test_run_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testStopTestRun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **test_run_id** | **string**| The ID of the test run to be stopped |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\TestRun**](../Model/TestRun.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testUpdateDeviceSetOfOwner**
> \Swagger\Client\Model\DeviceSet testUpdateDeviceSetOfOwner($id, $device_set, $owner_name, $app_name)



Updates a device set belonging to the owner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The UUID of the device set
$device_set = new \Swagger\Client\Model\DeviceSetUpdateInformation2(); // \Swagger\Client\Model\DeviceSetUpdateInformation2 | 
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->testUpdateDeviceSetOfOwner($id, $device_set, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testUpdateDeviceSetOfOwner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The UUID of the device set |
 **device_set** | [**\Swagger\Client\Model\DeviceSetUpdateInformation2**](../Model/DeviceSetUpdateInformation2.md)|  |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\DeviceSet**](../Model/DeviceSet.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testUpdateDeviceSetOfUser**
> \Swagger\Client\Model\DeviceSet testUpdateDeviceSetOfUser($id, $device_set, $owner_name, $app_name)



Updates a device set belonging to the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The UUID of the device set
$device_set = new \Swagger\Client\Model\DeviceSetUpdateInformation(); // \Swagger\Client\Model\DeviceSetUpdateInformation | 
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->testUpdateDeviceSetOfUser($id, $device_set, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testUpdateDeviceSetOfUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The UUID of the device set |
 **device_set** | [**\Swagger\Client\Model\DeviceSetUpdateInformation**](../Model/DeviceSetUpdateInformation.md)|  |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\DeviceSet**](../Model/DeviceSet.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testUploadHash**
> testUploadHash($test_run_id, $file_info, $owner_name, $app_name)



Adds file with the given hash to a test run

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$test_run_id = "test_run_id_example"; // string | The ID of the test run
$file_info = new \Swagger\Client\Model\TestCloudFileHash1(); // \Swagger\Client\Model\TestCloudFileHash1 | File hash information
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $apiInstance->testUploadHash($test_run_id, $file_info, $owner_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testUploadHash: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **test_run_id** | **string**| The ID of the test run |
 **file_info** | [**\Swagger\Client\Model\TestCloudFileHash1**](../Model/TestCloudFileHash1.md)| File hash information |
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

# **testUploadHashesBatch**
> \Swagger\Client\Model\TestCloudFileHashResponse[] testUploadHashesBatch($test_run_id, $file_info, $owner_name, $app_name)



Adds file with the given hash to a test run

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\TestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$test_run_id = "test_run_id_example"; // string | The ID of the test run
$file_info = array(new \Swagger\Client\Model\TestCloudFileHash()); // \Swagger\Client\Model\TestCloudFileHash[] | File hash information
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->testUploadHashesBatch($test_run_id, $file_info, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestApi->testUploadHashesBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **test_run_id** | **string**| The ID of the test run |
 **file_info** | [**\Swagger\Client\Model\TestCloudFileHash[]**](../Model/TestCloudFileHash.md)| File hash information |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\TestCloudFileHashResponse[]**](../Model/TestCloudFileHashResponse.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

