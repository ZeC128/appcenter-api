# Swagger\Client\DistributeApi

All URIs are relative to *https://api.appcenter.ms*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appleMappingCreate**](DistributeApi.md#appleMappingCreate) | **POST** /v0.1/apps/{owner_name}/{app_name}/apple_mapping | 
[**appleMappingDelete**](DistributeApi.md#appleMappingDelete) | **DELETE** /v0.1/apps/{owner_name}/{app_name}/apple_mapping | 
[**appleMappingGet**](DistributeApi.md#appleMappingGet) | **GET** /v0.1/apps/{owner_name}/{app_name}/apple_mapping | 
[**appleMappingTestFlightGroups**](DistributeApi.md#appleMappingTestFlightGroups) | **GET** /v0.1/apps/{owner_name}/{app_name}/apple_test_flight_groups | 
[**devicesDeviceDetails**](DistributeApi.md#devicesDeviceDetails) | **GET** /v0.1/user/devices/{device_udid} | 
[**devicesGetReleaseUpdateDevicesStatus**](DistributeApi.md#devicesGetReleaseUpdateDevicesStatus) | **GET** /v0.1/apps/{owner_name}/{app_name}/releases/{release_id}/update_devices/{resign_id} | 
[**devicesList**](DistributeApi.md#devicesList) | **GET** /v0.1/apps/{owner_name}/{app_name}/distribution_groups/{distribution_group_name}/devices | 
[**devicesListCsvFormat**](DistributeApi.md#devicesListCsvFormat) | **GET** /v0.1/apps/{owner_name}/{app_name}/distribution_groups/{distribution_group_name}/devices/download_devices_list | 
[**devicesRegisterUserForDevice**](DistributeApi.md#devicesRegisterUserForDevice) | **POST** /v0.1/users/{user_id}/devices/register | 
[**devicesRemoveUserDevice**](DistributeApi.md#devicesRemoveUserDevice) | **DELETE** /v0.1/user/devices/{device_udid} | 
[**devicesUserDevicesList**](DistributeApi.md#devicesUserDevicesList) | **GET** /v0.1/user/devices | 
[**distibutionReleasesInstallAnalytics**](DistributeApi.md#distibutionReleasesInstallAnalytics) | **POST** /v0.1/public/apps/{owner_name}/{app_name}/install_analytics | 
[**provisioningProfile**](DistributeApi.md#provisioningProfile) | **GET** /v0.1/apps/{owner_name}/{app_name}/releases/{release_id}/provisioning_profile | 
[**releaseUploadsComplete**](DistributeApi.md#releaseUploadsComplete) | **PATCH** /v0.1/apps/{owner_name}/{app_name}/release_uploads/{upload_id} | 
[**releaseUploadsCreate**](DistributeApi.md#releaseUploadsCreate) | **POST** /v0.1/apps/{owner_name}/{app_name}/release_uploads | 
[**releasesAddDistributionGroup**](DistributeApi.md#releasesAddDistributionGroup) | **POST** /v0.1/apps/{owner_name}/{app_name}/releases/{release_id}/groups | 
[**releasesAddStore**](DistributeApi.md#releasesAddStore) | **POST** /v0.1/apps/{owner_name}/{app_name}/releases/{release_id}/stores | 
[**releasesAddTesters**](DistributeApi.md#releasesAddTesters) | **POST** /v0.1/apps/{owner_name}/{app_name}/releases/{release_id}/testers | 
[**releasesAvailableToTester**](DistributeApi.md#releasesAvailableToTester) | **GET** /v0.1/apps/{owner_name}/{app_name}/releases/filter_by_tester | 
[**releasesCreateReleaseUpload**](DistributeApi.md#releasesCreateReleaseUpload) | **POST** /v0.1/apps/{owner_name}/{app_name}/uploads/releases | 
[**releasesDelete**](DistributeApi.md#releasesDelete) | **DELETE** /v0.1/apps/{owner_name}/{app_name}/releases/{release_id} | 
[**releasesDeleteDistributionGroup**](DistributeApi.md#releasesDeleteDistributionGroup) | **DELETE** /v0.1/apps/{owner_name}/{app_name}/releases/{release_id}/groups/{group_id} | 
[**releasesDeleteDistributionStore**](DistributeApi.md#releasesDeleteDistributionStore) | **DELETE** /v0.1/apps/{owner_name}/{app_name}/releases/{release_id}/stores/{store_id} | 
[**releasesDeleteDistributionTester**](DistributeApi.md#releasesDeleteDistributionTester) | **DELETE** /v0.1/apps/{owner_name}/{app_name}/releases/{release_id}/testers/{tester_id} | 
[**releasesDeleteTesterFromDestinations**](DistributeApi.md#releasesDeleteTesterFromDestinations) | **DELETE** /v0.1/apps/{owner_name}/{app_name}/testers/{tester_id} | 
[**releasesDeleteWithDistributionGroupId**](DistributeApi.md#releasesDeleteWithDistributionGroupId) | **DELETE** /v0.1/apps/{owner_name}/{app_name}/distribution_groups/{distribution_group_name}/releases/{release_id} | 
[**releasesGetIosManifest**](DistributeApi.md#releasesGetIosManifest) | **GET** /v0.1/public/apps/{app_id}/releases/{release_id}/ios_manifest | 
[**releasesGetLatestByDistributionGroup**](DistributeApi.md#releasesGetLatestByDistributionGroup) | **GET** /v0.1/apps/{owner_name}/{app_name}/distribution_groups/{distribution_group_name}/releases/{release_id} | 
[**releasesGetLatestByHash**](DistributeApi.md#releasesGetLatestByHash) | **GET** /v0.1/sdk/apps/{app_secret}/releases/{release_hash} | 
[**releasesGetLatestByPublicDistributionGroup**](DistributeApi.md#releasesGetLatestByPublicDistributionGroup) | **GET** /v0.1/public/sdk/apps/{app_secret}/distribution_groups/{distribution_group_id}/releases/latest | 
[**releasesGetLatestByUser**](DistributeApi.md#releasesGetLatestByUser) | **GET** /v0.1/apps/{owner_name}/{app_name}/releases/{release_id} | 
[**releasesGetLatestPrivateRelease**](DistributeApi.md#releasesGetLatestPrivateRelease) | **GET** /v0.1/sdk/apps/{app_secret}/releases/private/latest | 
[**releasesGetLatestPublicRelease**](DistributeApi.md#releasesGetLatestPublicRelease) | **GET** /v0.1/public/sdk/apps/{app_secret}/releases/latest | 
[**releasesGetPublicGroupsForReleaseByHash**](DistributeApi.md#releasesGetPublicGroupsForReleaseByHash) | **GET** /v0.1/public/sdk/apps/{app_secret}/releases/{release_hash}/public_distribution_groups | 
[**releasesGetReleaseUploadStatus**](DistributeApi.md#releasesGetReleaseUploadStatus) | **GET** /v0.1/apps/{owner_name}/{app_name}/uploads/releases/{upload_id} | 
[**releasesGetSparkleFeed**](DistributeApi.md#releasesGetSparkleFeed) | **GET** /v0.1/public/sparkle/apps/{app_secret} | 
[**releasesList**](DistributeApi.md#releasesList) | **GET** /v0.1/apps/{owner_name}/{app_name}/releases | 
[**releasesListByDistributionGroup**](DistributeApi.md#releasesListByDistributionGroup) | **GET** /v0.1/apps/{owner_name}/{app_name}/distribution_groups/{distribution_group_name}/releases | 
[**releasesListLatest**](DistributeApi.md#releasesListLatest) | **GET** /v0.1/apps/{owner_name}/{app_name}/recent_releases | 
[**releasesListTesterApps**](DistributeApi.md#releasesListTesterApps) | **GET** /v0.1/tester/apps | 
[**releasesPutDistributionGroup**](DistributeApi.md#releasesPutDistributionGroup) | **PUT** /v0.1/apps/{owner_name}/{app_name}/releases/{release_id}/groups/{group_id} | 
[**releasesPutDistributionTester**](DistributeApi.md#releasesPutDistributionTester) | **PUT** /v0.1/apps/{owner_name}/{app_name}/releases/{release_id}/testers/{tester_id} | 
[**releasesUpdate**](DistributeApi.md#releasesUpdate) | **PATCH** /v0.1/apps/{owner_name}/{app_name}/releases/{release_id} | 
[**releasesUpdateDetails**](DistributeApi.md#releasesUpdateDetails) | **PUT** /v0.1/apps/{owner_name}/{app_name}/releases/{release_id} | 
[**releasesUpdateReleaseUploadStatus**](DistributeApi.md#releasesUpdateReleaseUploadStatus) | **PATCH** /v0.1/apps/{owner_name}/{app_name}/uploads/releases/{upload_id} | 
[**storeNotificationsGetNotificationByAppId**](DistributeApi.md#storeNotificationsGetNotificationByAppId) | **GET** /v0.1/apps/{owner_name}/{app_name}/store_service_status | 
[**storeReleasePublishLogsGet**](DistributeApi.md#storeReleasePublishLogsGet) | **GET** /v0.1/apps/{owner_name}/{app_name}/distribution_stores/{store_name}/releases/{release_id}/publish_logs | 
[**storeReleasesDelete**](DistributeApi.md#storeReleasesDelete) | **DELETE** /v0.1/apps/{owner_name}/{app_name}/distribution_stores/{store_name}/releases/{release_id} | 
[**storeReleasesGet**](DistributeApi.md#storeReleasesGet) | **GET** /v0.1/apps/{owner_name}/{app_name}/distribution_stores/{store_name}/releases/{release_id} | 
[**storeReleasesGetLatest**](DistributeApi.md#storeReleasesGetLatest) | **GET** /v0.1/apps/{owner_name}/{app_name}/distribution_stores/{store_name}/latest_release | 
[**storeReleasesGetPublishError**](DistributeApi.md#storeReleasesGetPublishError) | **GET** /v0.1/apps/{owner_name}/{app_name}/distribution_stores/{store_name}/releases/{release_id}/publish_error_details | 
[**storeReleasesGetRealTimeStatusByReleaseId**](DistributeApi.md#storeReleasesGetRealTimeStatusByReleaseId) | **GET** /v0.1/apps/{owner_name}/{app_name}/distribution_stores/{store_name}/releases/{release_id}/realtimestatus | 
[**storeReleasesList**](DistributeApi.md#storeReleasesList) | **GET** /v0.1/apps/{owner_name}/{app_name}/distribution_stores/{store_name}/releases | 
[**storesCreate**](DistributeApi.md#storesCreate) | **POST** /v0.1/apps/{owner_name}/{app_name}/distribution_stores | 
[**storesDelete**](DistributeApi.md#storesDelete) | **DELETE** /v0.1/apps/{owner_name}/{app_name}/distribution_stores/{store_name} | 
[**storesGet**](DistributeApi.md#storesGet) | **GET** /v0.1/apps/{owner_name}/{app_name}/distribution_stores/{store_name} | 
[**storesList**](DistributeApi.md#storesList) | **GET** /v0.1/apps/{owner_name}/{app_name}/distribution_stores | 
[**storesPatch**](DistributeApi.md#storesPatch) | **PATCH** /v0.1/apps/{owner_name}/{app_name}/distribution_stores/{store_name} | 


# **appleMappingCreate**
> object appleMappingCreate($body, $owner_name, $app_name)



Create a mapping for an existing app in apple store for the specified application.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body14(); // \Swagger\Client\Model\Body14 | The apple app mapping object
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->appleMappingCreate($body, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->appleMappingCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body14**](../Model/Body14.md)| The apple app mapping object |
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

# **appleMappingDelete**
> appleMappingDelete($owner_name, $app_name, $body)



Delete mapping of apple app to an existing app in apple store.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$body = "body_example"; // string | 

try {
    $apiInstance->appleMappingDelete($owner_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->appleMappingDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **body** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appleMappingGet**
> object appleMappingGet($owner_name, $app_name)



Get mapping of apple app to an existing app in apple store.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->appleMappingGet($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->appleMappingGet: ', $e->getMessage(), PHP_EOL;
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

# **appleMappingTestFlightGroups**
> \Swagger\Client\Model\InlineResponse20077[] appleMappingTestFlightGroups($owner_name, $app_name)



Fetch all apple test flight groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->appleMappingTestFlightGroups($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->appleMappingTestFlightGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\InlineResponse20077[]**](../Model/InlineResponse20077.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicesDeviceDetails**
> object devicesDeviceDetails($device_udid)



Returns the device details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$device_udid = "device_udid_example"; // string | The UDID of the device

try {
    $result = $apiInstance->devicesDeviceDetails($device_udid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->devicesDeviceDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_udid** | **string**| The UDID of the device |

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicesGetReleaseUpdateDevicesStatus**
> object devicesGetReleaseUpdateDevicesStatus($release_id, $resign_id, $owner_name, $app_name, $include_provisioning_profile)



Returns the resign status to the caller

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$release_id = "release_id_example"; // string | The ID of the release.
$resign_id = "resign_id_example"; // string | The ID of the resign operation.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$include_provisioning_profile = true; // bool | A boolean value that indicates if the provisioning profile should be return in addition to the status. When set to true, the provisioning profile will be returned only when status is 'complete' or 'preparing_for_testers'.

try {
    $result = $apiInstance->devicesGetReleaseUpdateDevicesStatus($release_id, $resign_id, $owner_name, $app_name, $include_provisioning_profile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->devicesGetReleaseUpdateDevicesStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **release_id** | **string**| The ID of the release. |
 **resign_id** | **string**| The ID of the resign operation. |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **include_provisioning_profile** | **bool**| A boolean value that indicates if the provisioning profile should be return in addition to the status. When set to true, the provisioning profile will be returned only when status is &#39;complete&#39; or &#39;preparing_for_testers&#39;. | [optional]

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicesList**
> \Swagger\Client\Model\InlineResponse2003[] devicesList($distribution_group_name, $owner_name, $app_name, $release_id)



Returns all devices associated with the given distribution group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$distribution_group_name = "distribution_group_name_example"; // string | The name of the distribution group.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$release_id = 8.14; // float | when provided, gets the provisioning state of the devices owned by users of this distribution group when compared to the provided release.

try {
    $result = $apiInstance->devicesList($distribution_group_name, $owner_name, $app_name, $release_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->devicesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distribution_group_name** | **string**| The name of the distribution group. |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **release_id** | **float**| when provided, gets the provisioning state of the devices owned by users of this distribution group when compared to the provided release. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003[]**](../Model/InlineResponse2003.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicesListCsvFormat**
> devicesListCsvFormat($distribution_group_name, $owner_name, $app_name, $unprovisioned_only, $udids)



Returns all devices associated with the given distribution group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$distribution_group_name = "distribution_group_name_example"; // string | The name of the distribution group.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$unprovisioned_only = false; // bool | when true, filters out provisioned devices
$udids = array("udids_example"); // string[] | multiple UDIDs which should be part of the resulting CSV.

try {
    $apiInstance->devicesListCsvFormat($distribution_group_name, $owner_name, $app_name, $unprovisioned_only, $udids);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->devicesListCsvFormat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distribution_group_name** | **string**| The name of the distribution group. |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **unprovisioned_only** | **bool**| when true, filters out provisioned devices | [optional] [default to false]
 **udids** | [**string[]**](../Model/string.md)| multiple UDIDs which should be part of the resulting CSV. | [optional]

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicesRegisterUserForDevice**
> object devicesRegisterUserForDevice($user_id, $body)



Registers a user for an existing device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The ID of the user
$body = new \Swagger\Client\Model\Body(); // \Swagger\Client\Model\Body | The device info.

try {
    $result = $apiInstance->devicesRegisterUserForDevice($user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->devicesRegisterUserForDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The ID of the user |
 **body** | [**\Swagger\Client\Model\Body**](../Model/Body.md)| The device info. |

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicesRemoveUserDevice**
> devicesRemoveUserDevice($device_udid)



Removes an existing device from a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$device_udid = "device_udid_example"; // string | The UDID of the device

try {
    $apiInstance->devicesRemoveUserDevice($device_udid);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->devicesRemoveUserDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_udid** | **string**| The UDID of the device |

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicesUserDevicesList**
> \Swagger\Client\Model\InlineResponse2003[] devicesUserDevicesList()



Returns all devices associated with the given user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->devicesUserDevicesList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->devicesUserDevicesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse2003[]**](../Model/InlineResponse2003.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **distibutionReleasesInstallAnalytics**
> distibutionReleasesInstallAnalytics($owner_name, $app_name, $body)



Notify download(s) for the provided distribution release(s).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner_name = "owner_name_example"; // string | The name of the app owner
$app_name = "app_name_example"; // string | The name of the app
$body = new \Swagger\Client\Model\Body1(); // \Swagger\Client\Model\Body1 | The install analytics request payload

try {
    $apiInstance->distibutionReleasesInstallAnalytics($owner_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->distibutionReleasesInstallAnalytics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the app owner |
 **app_name** | **string**| The name of the app |
 **body** | [**\Swagger\Client\Model\Body1**](../Model/Body1.md)| The install analytics request payload |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **provisioningProfile**
> \Swagger\Client\Model\ProvisioningProfileResponse provisioningProfile($release_id, $owner_name, $app_name)



Return information about the provisioning profile. Only available for iOS.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$release_id = 56; // int | The release_id
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->provisioningProfile($release_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->provisioningProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **release_id** | **int**| The release_id |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\ProvisioningProfileResponse**](../Model/ProvisioningProfileResponse.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **releaseUploadsComplete**
> object releaseUploadsComplete($upload_id, $body, $owner_name, $app_name)



Commits or aborts the upload process for a release for the specified application

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upload_id = "upload_id_example"; // string | The ID of the upload
$body = new \Swagger\Client\Model\Body10(); // \Swagger\Client\Model\Body10 | The release information
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->releaseUploadsComplete($upload_id, $body, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->releaseUploadsComplete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **upload_id** | **string**| The ID of the upload |
 **body** | [**\Swagger\Client\Model\Body10**](../Model/Body10.md)| The release information |
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

# **releaseUploadsCreate**
> object releaseUploadsCreate($body, $owner_name, $app_name)



Begins the upload process for a new release for the specified application.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body11(); // \Swagger\Client\Model\Body11 | The release information
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->releaseUploadsCreate($body, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->releaseUploadsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body11**](../Model/Body11.md)| The release information |
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

# **releasesAddDistributionGroup**
> \Swagger\Client\Model\InlineResponse2011 releasesAddDistributionGroup($release_id, $body, $owner_name, $app_name)



Distributes a release to a group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$release_id = 56; // int | The ID of the release
$body = new \stdClass; // object | The release information.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->releasesAddDistributionGroup($release_id, $body, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->releasesAddDistributionGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **release_id** | **int**| The ID of the release |
 **body** | [**object**](../Model/.md)| The release information. |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\InlineResponse2011**](../Model/InlineResponse2011.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **releasesAddStore**
> \Swagger\Client\Model\InlineResponse2012 releasesAddStore($release_id, $body, $owner_name, $app_name)



Distributes a release to a store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$release_id = 56; // int | The ID of the release
$body = new \Swagger\Client\Model\Body7(); // \Swagger\Client\Model\Body7 | The release information.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->releasesAddStore($release_id, $body, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->releasesAddStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **release_id** | **int**| The ID of the release |
 **body** | [**\Swagger\Client\Model\Body7**](../Model/Body7.md)| The release information. |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\InlineResponse2012**](../Model/InlineResponse2012.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **releasesAddTesters**
> \Swagger\Client\Model\InlineResponse2011 releasesAddTesters($release_id, $body, $owner_name, $app_name)



Distributes a release to a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$release_id = 56; // int | The ID of the release
$body = new \Swagger\Client\Model\Body6(); // \Swagger\Client\Model\Body6 | The release information.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->releasesAddTesters($release_id, $body, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->releasesAddTesters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **release_id** | **int**| The ID of the release |
 **body** | [**\Swagger\Client\Model\Body6**](../Model/Body6.md)| The release information. |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\InlineResponse2011**](../Model/InlineResponse2011.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **releasesAvailableToTester**
> \Swagger\Client\Model\InlineResponse20034[] releasesAvailableToTester($owner_name, $app_name, $published_only)



Return detailed information about releases avaiable to a tester.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$published_only = true; // bool | when *true*, filters out releases that were uploaded but were never distributed. Releases that under deleted distribution groups will not be filtered out.

try {
    $result = $apiInstance->releasesAvailableToTester($owner_name, $app_name, $published_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->releasesAvailableToTester: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **published_only** | **bool**| when *true*, filters out releases that were uploaded but were never distributed. Releases that under deleted distribution groups will not be filtered out. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20034[]**](../Model/InlineResponse20034.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **releasesCreateReleaseUpload**
> object releasesCreateReleaseUpload($owner_name, $app_name, $body)



Initiate a new release upload. This API is part of multi-step upload process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$body = new \Swagger\Client\Model\Body3(); // \Swagger\Client\Model\Body3 | Optional parameters to create releases with user defined metadata

try {
    $result = $apiInstance->releasesCreateReleaseUpload($owner_name, $app_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->releasesCreateReleaseUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **body** | [**\Swagger\Client\Model\Body3**](../Model/Body3.md)| Optional parameters to create releases with user defined metadata | [optional]

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **releasesDelete**
> releasesDelete($release_id, $owner_name, $app_name)



Deletes a release.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$release_id = 56; // int | The ID of the release
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $apiInstance->releasesDelete($release_id, $owner_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->releasesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **release_id** | **int**| The ID of the release |
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

# **releasesDeleteDistributionGroup**
> releasesDeleteDistributionGroup($release_id, $group_id, $owner_name, $app_name)



Delete the given distribution group from the release

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$release_id = 56; // int | The ID of the release
$group_id = "group_id_example"; // string | The id of the distribution group
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $apiInstance->releasesDeleteDistributionGroup($release_id, $group_id, $owner_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->releasesDeleteDistributionGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **release_id** | **int**| The ID of the release |
 **group_id** | **string**| The id of the distribution group |
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

# **releasesDeleteDistributionStore**
> releasesDeleteDistributionStore($release_id, $store_id, $owner_name, $app_name)



Delete the given distribution store from the release

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$release_id = 56; // int | The ID of the release
$store_id = "store_id_example"; // string | The id of the distribution store
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $apiInstance->releasesDeleteDistributionStore($release_id, $store_id, $owner_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->releasesDeleteDistributionStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **release_id** | **int**| The ID of the release |
 **store_id** | **string**| The id of the distribution store |
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

# **releasesDeleteDistributionTester**
> releasesDeleteDistributionTester($release_id, $tester_id, $owner_name, $app_name)



Delete the given tester from the release

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$release_id = 56; // int | The ID of the release
$tester_id = "tester_id_example"; // string | The id of the tester
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $apiInstance->releasesDeleteDistributionTester($release_id, $tester_id, $owner_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->releasesDeleteDistributionTester: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **release_id** | **int**| The ID of the release |
 **tester_id** | **string**| The id of the tester |
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

# **releasesDeleteTesterFromDestinations**
> releasesDeleteTesterFromDestinations($tester_id, $owner_name, $app_name)



Delete the given tester from the all releases

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tester_id = "tester_id_example"; // string | The id of the tester
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $apiInstance->releasesDeleteTesterFromDestinations($tester_id, $owner_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->releasesDeleteTesterFromDestinations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tester_id** | **string**| The id of the tester |
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

# **releasesDeleteWithDistributionGroupId**
> releasesDeleteWithDistributionGroupId($owner_name, $app_name, $distribution_group_name, $release_id)



Deletes a release with id 'release_id' in a given distribution group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the app owner
$app_name = "app_name_example"; // string | The name of the app
$distribution_group_name = "distribution_group_name_example"; // string | The name of the distribution group.
$release_id = 56; // int | The ID identifying the unique release.

try {
    $apiInstance->releasesDeleteWithDistributionGroupId($owner_name, $app_name, $distribution_group_name, $release_id);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->releasesDeleteWithDistributionGroupId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the app owner |
 **app_name** | **string**| The name of the app |
 **distribution_group_name** | **string**| The name of the distribution group. |
 **release_id** | **int**| The ID identifying the unique release. |

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **releasesGetIosManifest**
> releasesGetIosManifest($app_id, $release_id, $token)



Returns the manifest.plist in XML format for installing the release on a device. Only available for iOS.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$app_id = "app_id_example"; // string | The ID of the application
$release_id = 56; // int | The release_id
$token = "token_example"; // string | A hash that authorizes the download if it matches the release info.

try {
    $apiInstance->releasesGetIosManifest($app_id, $release_id, $token);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->releasesGetIosManifest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The ID of the application |
 **release_id** | **int**| The release_id |
 **token** | **string**| A hash that authorizes the download if it matches the release info. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **releasesGetLatestByDistributionGroup**
> object releasesGetLatestByDistributionGroup($owner_name, $app_name, $distribution_group_name, $release_id)



Return detailed information about a distributed release in a given distribution group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the app owner
$app_name = "app_name_example"; // string | The name of the app
$distribution_group_name = "distribution_group_name_example"; // string | The name of the distribution group.
$release_id = "release_id_example"; // string | Also supports the constant `latest`, which will return the latest release in the distribution group.

try {
    $result = $apiInstance->releasesGetLatestByDistributionGroup($owner_name, $app_name, $distribution_group_name, $release_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->releasesGetLatestByDistributionGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the app owner |
 **app_name** | **string**| The name of the app |
 **distribution_group_name** | **string**| The name of the distribution group. |
 **release_id** | **string**| Also supports the constant &#x60;latest&#x60;, which will return the latest release in the distribution group. |

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **releasesGetLatestByHash**
> object releasesGetLatestByHash($app_secret, $release_hash, $udid)



If 'latest' is not specified then it will return the specified release if it's enabled. If 'latest' is specified, regardless of whether a release hash is provided, the latest enabled release is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_secret = "app_secret_example"; // string | The secret of the target application
$release_hash = "release_hash_example"; // string | The hash of the release or 'latest' to get the latest release from all the distribution groups assigned to the current user.
$udid = "udid_example"; // string | When passing `udid` in the query string, a provisioning check for the given device ID will be done. Will be ignored for non-iOS platforms.

try {
    $result = $apiInstance->releasesGetLatestByHash($app_secret, $release_hash, $udid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->releasesGetLatestByHash: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_secret** | **string**| The secret of the target application |
 **release_hash** | **string**| The hash of the release or &#39;latest&#39; to get the latest release from all the distribution groups assigned to the current user. |
 **udid** | **string**| When passing &#x60;udid&#x60; in the query string, a provisioning check for the given device ID will be done. Will be ignored for non-iOS platforms. | [optional]

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **releasesGetLatestByPublicDistributionGroup**
> object releasesGetLatestByPublicDistributionGroup($app_secret, $distribution_group_id)



Get a release with 'latest' for the given public group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$app_secret = "app_secret_example"; // string | The secret of the target application
$distribution_group_id = "distribution_group_id_example"; // string | the id for destination

try {
    $result = $apiInstance->releasesGetLatestByPublicDistributionGroup($app_secret, $distribution_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->releasesGetLatestByPublicDistributionGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_secret** | **string**| The secret of the target application |
 **distribution_group_id** | **string**| the id for destination |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **releasesGetLatestByUser**
> object releasesGetLatestByUser($release_id, $owner_name, $app_name, $udid)



Get a release with id `release_id`. If `release_id` is `latest`, return the latest release that was distributed to the current user (from all the distribution groups).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$release_id = "release_id_example"; // string | The ID of the release, or `latest` to get the latest release from all the distribution groups assigned to the current user.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$udid = "udid_example"; // string | when supplied, this call will also check if the given UDID is provisioned. Will be ignored for non-iOS platforms. The value will be returned in the property is_udid_provisioned.

try {
    $result = $apiInstance->releasesGetLatestByUser($release_id, $owner_name, $app_name, $udid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->releasesGetLatestByUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **release_id** | **string**| The ID of the release, or &#x60;latest&#x60; to get the latest release from all the distribution groups assigned to the current user. |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **udid** | **string**| when supplied, this call will also check if the given UDID is provisioned. Will be ignored for non-iOS platforms. The value will be returned in the property is_udid_provisioned. | [optional]

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **releasesGetLatestPrivateRelease**
> object releasesGetLatestPrivateRelease($app_secret, $udid)



Get the latest release distributed to a private group the given user is a member of for the given app.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_secret = "app_secret_example"; // string | The secret of the target application
$udid = "udid_example"; // string | When passing `udid` in the query string, a provisioning check for the given device ID will be done. Will be ignored for non-iOS platforms.

try {
    $result = $apiInstance->releasesGetLatestPrivateRelease($app_secret, $udid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->releasesGetLatestPrivateRelease: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_secret** | **string**| The secret of the target application |
 **udid** | **string**| When passing &#x60;udid&#x60; in the query string, a provisioning check for the given device ID will be done. Will be ignored for non-iOS platforms. | [optional]

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **releasesGetLatestPublicRelease**
> object releasesGetLatestPublicRelease($app_secret)



Get the latest public release for the given app.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$app_secret = "app_secret_example"; // string | The secret of the target application

try {
    $result = $apiInstance->releasesGetLatestPublicRelease($app_secret);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->releasesGetLatestPublicRelease: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_secret** | **string**| The secret of the target application |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **releasesGetPublicGroupsForReleaseByHash**
> \Swagger\Client\Model\InlineResponse2005[] releasesGetPublicGroupsForReleaseByHash($app_secret, $release_hash)



Get all public distribution groups that a given release has been distributed to

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$app_secret = "app_secret_example"; // string | The secret of the target application
$release_hash = "release_hash_example"; // string | The hash of the release

try {
    $result = $apiInstance->releasesGetPublicGroupsForReleaseByHash($app_secret, $release_hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->releasesGetPublicGroupsForReleaseByHash: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_secret** | **string**| The secret of the target application |
 **release_hash** | **string**| The hash of the release |

### Return type

[**\Swagger\Client\Model\InlineResponse2005[]**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **releasesGetReleaseUploadStatus**
> object releasesGetReleaseUploadStatus($upload_id, $owner_name, $app_name)



Get the current status of the release upload.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upload_id = "upload_id_example"; // string | The ID of the release upload
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->releasesGetReleaseUploadStatus($upload_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->releasesGetReleaseUploadStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **upload_id** | [**string**](../Model/.md)| The ID of the release upload |
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

# **releasesGetSparkleFeed**
> releasesGetSparkleFeed($app_secret)



Gets the sparkle feed of the releases that are distributed to all the public distribution groups.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$app_secret = "app_secret_example"; // string | The secret of the application.

try {
    $apiInstance->releasesGetSparkleFeed($app_secret);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->releasesGetSparkleFeed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_secret** | **string**| The secret of the application. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **releasesList**
> \Swagger\Client\Model\InlineResponse20034[] releasesList($owner_name, $app_name, $published_only, $scope)



Return basic information about releases.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$published_only = true; // bool | When *true*, filters out releases that were uploaded but were never distributed. Releases that under deleted distribution groups will not be filtered out.
$scope = "scope_example"; // string | When the scope is 'tester', only includes releases that have been distributed to groups that the user belongs to.

try {
    $result = $apiInstance->releasesList($owner_name, $app_name, $published_only, $scope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->releasesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **published_only** | **bool**| When *true*, filters out releases that were uploaded but were never distributed. Releases that under deleted distribution groups will not be filtered out. | [optional]
 **scope** | **string**| When the scope is &#39;tester&#39;, only includes releases that have been distributed to groups that the user belongs to. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20034[]**](../Model/InlineResponse20034.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **releasesListByDistributionGroup**
> \Swagger\Client\Model\InlineResponse20062[] releasesListByDistributionGroup($distribution_group_name, $owner_name, $app_name)



Return basic information about distributed releases in a given distribution group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$distribution_group_name = "distribution_group_name_example"; // string | The name of the distribution group.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->releasesListByDistributionGroup($distribution_group_name, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->releasesListByDistributionGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distribution_group_name** | **string**| The name of the distribution group. |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\InlineResponse20062[]**](../Model/InlineResponse20062.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **releasesListLatest**
> \Swagger\Client\Model\InlineResponse20034[] releasesListLatest($owner_name, $app_name)



Get the latest release from every distribution group associated with an application.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->releasesListLatest($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->releasesListLatest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\InlineResponse20034[]**](../Model/InlineResponse20034.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **releasesListTesterApps**
> \Swagger\Client\Model\InlineResponse2004[] releasesListTesterApps()



Return a list of applications that the user has tester permission to with the latest release for each.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->releasesListTesterApps();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->releasesListTesterApps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse2004[]**](../Model/InlineResponse2004.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **releasesPutDistributionGroup**
> releasesPutDistributionGroup($release_id, $group_id, $owner_name, $app_name, $destination_group_update_details)



Update details about the specified distribution group associated with the release

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$release_id = 56; // int | The ID of the release
$group_id = "group_id_example"; // string | The id of the releases destination
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$destination_group_update_details = new \Swagger\Client\Model\DestinationGroupUpdateDetails(); // \Swagger\Client\Model\DestinationGroupUpdateDetails | 

try {
    $apiInstance->releasesPutDistributionGroup($release_id, $group_id, $owner_name, $app_name, $destination_group_update_details);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->releasesPutDistributionGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **release_id** | **int**| The ID of the release |
 **group_id** | [**string**](../Model/.md)| The id of the releases destination |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **destination_group_update_details** | [**\Swagger\Client\Model\DestinationGroupUpdateDetails**](../Model/DestinationGroupUpdateDetails.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **releasesPutDistributionTester**
> releasesPutDistributionTester($release_id, $tester_id, $owner_name, $app_name, $destination_tester_update_details)



Update details about the specified tester associated with the release

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$release_id = 56; // int | The ID of the release
$tester_id = "tester_id_example"; // string | The id of the tester
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$destination_tester_update_details = new \Swagger\Client\Model\DestinationTesterUpdateDetails(); // \Swagger\Client\Model\DestinationTesterUpdateDetails | 

try {
    $apiInstance->releasesPutDistributionTester($release_id, $tester_id, $owner_name, $app_name, $destination_tester_update_details);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->releasesPutDistributionTester: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **release_id** | **int**| The ID of the release |
 **tester_id** | [**string**](../Model/.md)| The id of the tester |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **destination_tester_update_details** | [**\Swagger\Client\Model\DestinationTesterUpdateDetails**](../Model/DestinationTesterUpdateDetails.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **releasesUpdate**
> object releasesUpdate($release_id, $body, $owner_name, $app_name)



Updates a release.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$release_id = 56; // int | The ID of the release
$body = new \Swagger\Client\Model\Body9(); // \Swagger\Client\Model\Body9 | The release information.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->releasesUpdate($release_id, $body, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->releasesUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **release_id** | **int**| The ID of the release |
 **body** | [**\Swagger\Client\Model\Body9**](../Model/Body9.md)| The release information. |
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

# **releasesUpdateDetails**
> object releasesUpdateDetails($release_id, $body, $owner_name, $app_name)



Update details of a release.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$release_id = 56; // int | The ID of the release
$body = new \Swagger\Client\Model\Body8(); // \Swagger\Client\Model\Body8 | The release information.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->releasesUpdateDetails($release_id, $body, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->releasesUpdateDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **release_id** | **int**| The ID of the release |
 **body** | [**\Swagger\Client\Model\Body8**](../Model/Body8.md)| The release information. |
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

# **releasesUpdateReleaseUploadStatus**
> object releasesUpdateReleaseUploadStatus($upload_id, $body, $owner_name, $app_name, $extract)



Update the current status of the release upload.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upload_id = "upload_id_example"; // string | The ID of the release upload
$body = new \Swagger\Client\Model\Body2(); // \Swagger\Client\Model\Body2 | The release upload status information.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$extract = true; // bool | A flag that indicates to extract release or not, true by default

try {
    $result = $apiInstance->releasesUpdateReleaseUploadStatus($upload_id, $body, $owner_name, $app_name, $extract);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->releasesUpdateReleaseUploadStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **upload_id** | [**string**](../Model/.md)| The ID of the release upload |
 **body** | [**\Swagger\Client\Model\Body2**](../Model/Body2.md)| The release upload status information. |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **extract** | **bool**| A flag that indicates to extract release or not, true by default | [optional]

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeNotificationsGetNotificationByAppId**
> object storeNotificationsGetNotificationByAppId($owner_name, $app_name)



Application specific store service status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->storeNotificationsGetNotificationByAppId($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->storeNotificationsGetNotificationByAppId: ', $e->getMessage(), PHP_EOL;
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

# **storeReleasePublishLogsGet**
> storeReleasePublishLogsGet($store_name, $release_id, $owner_name, $app_name)



Returns publish logs for a particular release published to a particular store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_name = "store_name_example"; // string | The name of the store
$release_id = "release_id_example"; // string | The ID of the realease
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $apiInstance->storeReleasePublishLogsGet($store_name, $release_id, $owner_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->storeReleasePublishLogsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_name** | **string**| The name of the store |
 **release_id** | **string**| The ID of the realease |
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

# **storeReleasesDelete**
> storeReleasesDelete($store_name, $release_id, $owner_name, $app_name, $body)



delete the release with release Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_name = "store_name_example"; // string | The name of the store
$release_id = "release_id_example"; // string | The id of the release
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$body = "body_example"; // string | 

try {
    $apiInstance->storeReleasesDelete($store_name, $release_id, $owner_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->storeReleasesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_name** | **string**| The name of the store |
 **release_id** | **string**| The id of the release |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **body** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeReleasesGet**
> \Swagger\Client\Model\InlineResponse20059[] storeReleasesGet($store_name, $release_id, $owner_name, $app_name)



Return releases published in a store for releaseId and storeId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_name = "store_name_example"; // string | The name of the store
$release_id = "release_id_example"; // string | The name of the store
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->storeReleasesGet($store_name, $release_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->storeReleasesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_name** | **string**| The name of the store |
 **release_id** | **string**| The name of the store |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\InlineResponse20059[]**](../Model/InlineResponse20059.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeReleasesGetLatest**
> \Swagger\Client\Model\InlineResponse20059[] storeReleasesGetLatest($store_name, $owner_name, $app_name)



Returns the latest release published in a store.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_name = "store_name_example"; // string | The name of the store
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->storeReleasesGetLatest($store_name, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->storeReleasesGetLatest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_name** | **string**| The name of the store |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\InlineResponse20059[]**](../Model/InlineResponse20059.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeReleasesGetPublishError**
> object storeReleasesGetPublishError($store_name, $release_id, $owner_name, $app_name)



Return the Error Details of release which failed in publishing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_name = "store_name_example"; // string | The name of the store
$release_id = 8.14; // float | The id of the release
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->storeReleasesGetPublishError($store_name, $release_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->storeReleasesGetPublishError: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_name** | **string**| The name of the store |
 **release_id** | **float**| The id of the release |
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

# **storeReleasesGetRealTimeStatusByReleaseId**
> object storeReleasesGetRealTimeStatusByReleaseId($store_name, $release_id, $owner_name, $app_name)



Return the Real time Status publishing of release from store.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_name = "store_name_example"; // string | The name of the store
$release_id = 8.14; // float | The id of the release
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->storeReleasesGetRealTimeStatusByReleaseId($store_name, $release_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->storeReleasesGetRealTimeStatusByReleaseId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_name** | **string**| The name of the store |
 **release_id** | **float**| The id of the release |
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

# **storeReleasesList**
> \Swagger\Client\Model\InlineResponse20060[] storeReleasesList($store_name, $owner_name, $app_name)



Return all releases published  in a store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_name = "store_name_example"; // string | The name of the store
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->storeReleasesList($store_name, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->storeReleasesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_name** | **string**| The name of the store |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\InlineResponse20060[]**](../Model/InlineResponse20060.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storesCreate**
> object storesCreate($body, $owner_name, $app_name)



Create a new external store for the specified application.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body13(); // \Swagger\Client\Model\Body13 | The store request
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->storesCreate($body, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->storesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body13**](../Model/Body13.md)| The store request |
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

# **storesDelete**
> storesDelete($store_name, $owner_name, $app_name, $body)



delete the store based on specific store name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_name = "store_name_example"; // string | The name of the store
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$body = "body_example"; // string | 

try {
    $apiInstance->storesDelete($store_name, $owner_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->storesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_name** | **string**| The name of the store |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **body** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storesGet**
> object storesGet($store_name, $owner_name, $app_name)



Return the store details for specified store name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_name = "store_name_example"; // string | The name of the store
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->storesGet($store_name, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->storesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_name** | **string**| The name of the store |
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

# **storesList**
> \Swagger\Client\Model\InlineResponse20061[] storesList($owner_name, $app_name)



Get all the store details from Storage store table for a particular application.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->storesList($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->storesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\InlineResponse20061[]**](../Model/InlineResponse20061.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storesPatch**
> storesPatch($store_name, $body, $owner_name, $app_name)



Update the store.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_name = "store_name_example"; // string | The name of the store
$body = new \Swagger\Client\Model\Body12(); // \Swagger\Client\Model\Body12 | Store update request
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $apiInstance->storesPatch($store_name, $body, $owner_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling DistributeApi->storesPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_name** | **string**| The name of the store |
 **body** | [**\Swagger\Client\Model\Body12**](../Model/Body12.md)| Store update request |
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

