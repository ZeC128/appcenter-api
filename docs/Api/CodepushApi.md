# ZeC128\AppCenter\CodepushApi

All URIs are relative to *https://api.appcenter.ms*

Method | HTTP request | Description
------------- | ------------- | -------------
[**codePushAcquisitionGetAcquisitionStatus**](CodepushApi.md#codePushAcquisitionGetAcquisitionStatus) | **GET** /v0.1/public/codepush/status | 
[**codePushAcquisitionUpdateCheck**](CodepushApi.md#codePushAcquisitionUpdateCheck) | **GET** /v0.1/public/codepush/update_check | 
[**codePushAcquisitionUpdateDeployStatus**](CodepushApi.md#codePushAcquisitionUpdateDeployStatus) | **POST** /v0.1/public/codepush/report_status/deploy | 
[**codePushAcquisitionUpdateDownloadStatus**](CodepushApi.md#codePushAcquisitionUpdateDownloadStatus) | **POST** /v0.1/public/codepush/report_status/download | 
[**codePushDeploymentMetricsGet**](CodepushApi.md#codePushDeploymentMetricsGet) | **GET** /v0.1/apps/{owner_name}/{app_name}/deployments/{deployment_name}/metrics | 
[**codePushDeploymentReleaseRollback**](CodepushApi.md#codePushDeploymentReleaseRollback) | **POST** /v0.1/apps/{owner_name}/{app_name}/deployments/{deployment_name}/rollback_release | 
[**codePushDeploymentReleasesCreate**](CodepushApi.md#codePushDeploymentReleasesCreate) | **POST** /v0.1/apps/{owner_name}/{app_name}/deployments/{deployment_name}/releases | 
[**codePushDeploymentReleasesDelete**](CodepushApi.md#codePushDeploymentReleasesDelete) | **DELETE** /v0.1/apps/{owner_name}/{app_name}/deployments/{deployment_name}/releases | 
[**codePushDeploymentReleasesGet**](CodepushApi.md#codePushDeploymentReleasesGet) | **GET** /v0.1/apps/{owner_name}/{app_name}/deployments/{deployment_name}/releases | 
[**codePushDeploymentUploadCreate**](CodepushApi.md#codePushDeploymentUploadCreate) | **POST** /v0.1/apps/{owner_name}/{app_name}/deployments/{deployment_name}/uploads | 
[**codePushDeploymentsCreate**](CodepushApi.md#codePushDeploymentsCreate) | **POST** /v0.1/apps/{owner_name}/{app_name}/deployments | 
[**codePushDeploymentsDelete**](CodepushApi.md#codePushDeploymentsDelete) | **DELETE** /v0.1/apps/{owner_name}/{app_name}/deployments/{deployment_name} | 
[**codePushDeploymentsGet**](CodepushApi.md#codePushDeploymentsGet) | **GET** /v0.1/apps/{owner_name}/{app_name}/deployments/{deployment_name} | 
[**codePushDeploymentsList**](CodepushApi.md#codePushDeploymentsList) | **GET** /v0.1/apps/{owner_name}/{app_name}/deployments | 
[**codePushDeploymentsPromote**](CodepushApi.md#codePushDeploymentsPromote) | **POST** /v0.1/apps/{owner_name}/{app_name}/deployments/{deployment_name}/promote_release/{promote_deployment_name} | 
[**codePushDeploymentsUpdate**](CodepushApi.md#codePushDeploymentsUpdate) | **PATCH** /v0.1/apps/{owner_name}/{app_name}/deployments/{deployment_name} | 
[**deploymentReleasesUpdate**](CodepushApi.md#deploymentReleasesUpdate) | **PATCH** /v0.1/apps/{owner_name}/{app_name}/deployments/{deployment_name}/releases/{release_label} | 
[**legacyCodePushAcquisitionUpdateCheck**](CodepushApi.md#legacyCodePushAcquisitionUpdateCheck) | **GET** /v0.1/legacy/updateCheck | 
[**legacyCodePushAcquisitionUpdateDownloadStatus**](CodepushApi.md#legacyCodePushAcquisitionUpdateDownloadStatus) | **POST** /v0.1/legacy/reportStatus/download | 
[**legacyCodePushAcquisitionUpdateInstallsStatus**](CodepushApi.md#legacyCodePushAcquisitionUpdateInstallsStatus) | **POST** /v0.1/legacy/reportStatus/deploy | 


# **codePushAcquisitionGetAcquisitionStatus**
> object codePushAcquisitionGetAcquisitionStatus()



Returns the acquisition service status to the caller

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ZeC128\AppCenter\Api\CodepushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->codePushAcquisitionGetAcquisitionStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodepushApi->codePushAcquisitionGetAcquisitionStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **codePushAcquisitionUpdateCheck**
> object codePushAcquisitionUpdateCheck($deployment_key, $app_version, $package_hash, $label, $client_unique_id, $is_companion, $previous_label_or_app_version, $previous_deployment_key)



Check for updates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ZeC128\AppCenter\Api\CodepushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$deployment_key = "deployment_key_example"; // string | 
$app_version = "app_version_example"; // string | 
$package_hash = "package_hash_example"; // string | 
$label = "label_example"; // string | 
$client_unique_id = "client_unique_id_example"; // string | 
$is_companion = true; // bool | 
$previous_label_or_app_version = "previous_label_or_app_version_example"; // string | 
$previous_deployment_key = "previous_deployment_key_example"; // string | 

try {
    $result = $apiInstance->codePushAcquisitionUpdateCheck($deployment_key, $app_version, $package_hash, $label, $client_unique_id, $is_companion, $previous_label_or_app_version, $previous_deployment_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodepushApi->codePushAcquisitionUpdateCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deployment_key** | **string**|  |
 **app_version** | **string**|  |
 **package_hash** | **string**|  | [optional]
 **label** | **string**|  | [optional]
 **client_unique_id** | **string**|  | [optional]
 **is_companion** | **bool**|  | [optional]
 **previous_label_or_app_version** | **string**|  | [optional]
 **previous_deployment_key** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **codePushAcquisitionUpdateDeployStatus**
> codePushAcquisitionUpdateDeployStatus($release_metadata)



Report Deployment status metric

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ZeC128\AppCenter\Api\CodepushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$release_metadata = new \ZeC128\AppCenter\AppCenterApi\ReleaseMetadata1(); // \ZeC128\AppCenter\AppCenterApi\ReleaseMetadata1 | Deployment status metric properties

try {
    $apiInstance->codePushAcquisitionUpdateDeployStatus($release_metadata);
} catch (Exception $e) {
    echo 'Exception when calling CodepushApi->codePushAcquisitionUpdateDeployStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **release_metadata** | [**\ZeC128\AppCenter\AppCenterApi\ReleaseMetadata1**](../Model/ReleaseMetadata1.md)| Deployment status metric properties |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **codePushAcquisitionUpdateDownloadStatus**
> codePushAcquisitionUpdateDownloadStatus($release_metadata)



Report download of specified release

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ZeC128\AppCenter\Api\CodepushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$release_metadata = new \ZeC128\AppCenter\AppCenterApi\ReleaseMetadata(); // \ZeC128\AppCenter\AppCenterApi\ReleaseMetadata | Deployment status metric properties

try {
    $apiInstance->codePushAcquisitionUpdateDownloadStatus($release_metadata);
} catch (Exception $e) {
    echo 'Exception when calling CodepushApi->codePushAcquisitionUpdateDownloadStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **release_metadata** | [**\ZeC128\AppCenter\AppCenterApi\ReleaseMetadata**](../Model/ReleaseMetadata.md)| Deployment status metric properties |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **codePushDeploymentMetricsGet**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20065[] codePushDeploymentMetricsGet($deployment_name, $owner_name, $app_name)



Gets all releases metrics for specified Deployment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CodepushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deployment_name = "deployment_name_example"; // string | deployment name
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->codePushDeploymentMetricsGet($deployment_name, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodepushApi->codePushDeploymentMetricsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deployment_name** | **string**| deployment name |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20065[]**](../Model/InlineResponse20065.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **codePushDeploymentReleaseRollback**
> object codePushDeploymentReleaseRollback($deployment_name, $owner_name, $app_name, $release_label)



Rollback the latest or a specific release for an app deployment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CodepushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deployment_name = "deployment_name_example"; // string | deployment name
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$release_label = new \ZeC128\AppCenter\AppCenterApi\ReleaseLabel(); // \ZeC128\AppCenter\AppCenterApi\ReleaseLabel | The specific release label that you want to rollback to

try {
    $result = $apiInstance->codePushDeploymentReleaseRollback($deployment_name, $owner_name, $app_name, $release_label);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodepushApi->codePushDeploymentReleaseRollback: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deployment_name** | **string**| deployment name |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **release_label** | [**\ZeC128\AppCenter\AppCenterApi\ReleaseLabel**](../Model/ReleaseLabel.md)| The specific release label that you want to rollback to | [optional]

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **codePushDeploymentReleasesCreate**
> object codePushDeploymentReleasesCreate($deployment_name, $uploaded_release, $owner_name, $app_name)



Create a new CodePush release for the specified deployment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CodepushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deployment_name = "deployment_name_example"; // string | deployment name
$uploaded_release = new \ZeC128\AppCenter\AppCenterApi\UploadedRelease(); // \ZeC128\AppCenter\AppCenterApi\UploadedRelease | The necessary information required to download the bundle and being the release process.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->codePushDeploymentReleasesCreate($deployment_name, $uploaded_release, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodepushApi->codePushDeploymentReleasesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deployment_name** | **string**| deployment name |
 **uploaded_release** | [**\ZeC128\AppCenter\AppCenterApi\UploadedRelease**](../Model/UploadedRelease.md)| The necessary information required to download the bundle and being the release process. |
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

# **codePushDeploymentReleasesDelete**
> codePushDeploymentReleasesDelete($deployment_name, $owner_name, $app_name)



Clears a Deployment of releases

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CodepushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deployment_name = "deployment_name_example"; // string | deployment name
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $apiInstance->codePushDeploymentReleasesDelete($deployment_name, $owner_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling CodepushApi->codePushDeploymentReleasesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deployment_name** | **string**| deployment name |
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

# **codePushDeploymentReleasesGet**
> object[] codePushDeploymentReleasesGet($deployment_name, $owner_name, $app_name)



Gets the history of releases on a Deployment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CodepushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deployment_name = "deployment_name_example"; // string | deployment name
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->codePushDeploymentReleasesGet($deployment_name, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodepushApi->codePushDeploymentReleasesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deployment_name** | **string**| deployment name |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

**object[]**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **codePushDeploymentUploadCreate**
> object codePushDeploymentUploadCreate($deployment_name, $owner_name, $app_name)



Create a new CodePush release upload for the specified deployment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CodepushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deployment_name = "deployment_name_example"; // string | deployment name
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->codePushDeploymentUploadCreate($deployment_name, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodepushApi->codePushDeploymentUploadCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deployment_name** | **string**| deployment name |
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

# **codePushDeploymentsCreate**
> \ZeC128\AppCenter\AppCenterApi\Deployment1 codePushDeploymentsCreate($deployment, $owner_name, $app_name)



Creates a CodePush Deployment for the given app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CodepushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deployment = new \ZeC128\AppCenter\AppCenterApi\Deployment1(); // \ZeC128\AppCenter\AppCenterApi\Deployment1 | Deployment to be created
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->codePushDeploymentsCreate($deployment, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodepushApi->codePushDeploymentsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deployment** | [**\ZeC128\AppCenter\AppCenterApi\Deployment1**](../Model/Deployment1.md)| Deployment to be created |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\ZeC128\AppCenter\AppCenterApi\Deployment1**](../Model/Deployment1.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **codePushDeploymentsDelete**
> codePushDeploymentsDelete($deployment_name, $owner_name, $app_name, $body)



Deletes a CodePush Deployment for the given app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CodepushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deployment_name = "deployment_name_example"; // string | deployment name
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$body = new \stdClass; // object | 

try {
    $apiInstance->codePushDeploymentsDelete($deployment_name, $owner_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling CodepushApi->codePushDeploymentsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deployment_name** | **string**| deployment name |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **body** | **object**|  | [optional]

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **codePushDeploymentsGet**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20066 codePushDeploymentsGet($deployment_name, $owner_name, $app_name)



Gets a CodePush Deployment for the given app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CodepushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deployment_name = "deployment_name_example"; // string | deployment name
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->codePushDeploymentsGet($deployment_name, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodepushApi->codePushDeploymentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deployment_name** | **string**| deployment name |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20066**](../Model/InlineResponse20066.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **codePushDeploymentsList**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20066[] codePushDeploymentsList($owner_name, $app_name)



Gets a list of CodePush deployments for the given app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CodepushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->codePushDeploymentsList($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodepushApi->codePushDeploymentsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20066[]**](../Model/InlineResponse20066.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **codePushDeploymentsPromote**
> object codePushDeploymentsPromote($deployment_name, $promote_deployment_name, $owner_name, $app_name, $release)



Promote one release (default latest one) from one deployment to another

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CodepushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deployment_name = "deployment_name_example"; // string | deployment name
$promote_deployment_name = "promote_deployment_name_example"; // string | deployment name
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$release = new \stdClass; // object | Release to be promoted, only needs to provide optional fields, description, label, disabled, mandatory, rollout, targetBinaryVersion

try {
    $result = $apiInstance->codePushDeploymentsPromote($deployment_name, $promote_deployment_name, $owner_name, $app_name, $release);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodepushApi->codePushDeploymentsPromote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deployment_name** | **string**| deployment name |
 **promote_deployment_name** | **string**| deployment name |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **release** | [**object**](../Model/.md)| Release to be promoted, only needs to provide optional fields, description, label, disabled, mandatory, rollout, targetBinaryVersion | [optional]

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **codePushDeploymentsUpdate**
> codePushDeploymentsUpdate($deployment_name, $deployment, $owner_name, $app_name)



Modifies a CodePush Deployment for the given app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CodepushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deployment_name = "deployment_name_example"; // string | deployment name
$deployment = new \ZeC128\AppCenter\AppCenterApi\Deployment(); // \ZeC128\AppCenter\AppCenterApi\Deployment | Deployment modification. All fields are optional and only provided fields will get updated.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $apiInstance->codePushDeploymentsUpdate($deployment_name, $deployment, $owner_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling CodepushApi->codePushDeploymentsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deployment_name** | **string**| deployment name |
 **deployment** | [**\ZeC128\AppCenter\AppCenterApi\Deployment**](../Model/Deployment.md)| Deployment modification. All fields are optional and only provided fields will get updated. |
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

# **deploymentReleasesUpdate**
> object deploymentReleasesUpdate($deployment_name, $release_label, $release, $owner_name, $app_name)



Modifies a CodePush release metadata under the given Deployment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CodepushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deployment_name = "deployment_name_example"; // string | deployment name
$release_label = "release_label_example"; // string | release label
$release = new \stdClass; // object | Release modification. All fields are optional and only provided fields will get updated.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->deploymentReleasesUpdate($deployment_name, $release_label, $release, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodepushApi->deploymentReleasesUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deployment_name** | **string**| deployment name |
 **release_label** | **string**| release label |
 **release** | [**object**](../Model/.md)| Release modification. All fields are optional and only provided fields will get updated. |
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

# **legacyCodePushAcquisitionUpdateCheck**
> object legacyCodePushAcquisitionUpdateCheck($deployment_key, $app_version, $package_hash, $label, $client_unique_id, $is_companion)



Check for updates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CodepushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deployment_key = "deployment_key_example"; // string | 
$app_version = "app_version_example"; // string | 
$package_hash = "package_hash_example"; // string | 
$label = "label_example"; // string | 
$client_unique_id = "client_unique_id_example"; // string | 
$is_companion = "is_companion_example"; // string | 

try {
    $result = $apiInstance->legacyCodePushAcquisitionUpdateCheck($deployment_key, $app_version, $package_hash, $label, $client_unique_id, $is_companion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodepushApi->legacyCodePushAcquisitionUpdateCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deployment_key** | **string**|  | [optional]
 **app_version** | **string**|  | [optional]
 **package_hash** | **string**|  | [optional]
 **label** | **string**|  | [optional]
 **client_unique_id** | **string**|  | [optional]
 **is_companion** | **string**|  | [optional]

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **legacyCodePushAcquisitionUpdateDownloadStatus**
> legacyCodePushAcquisitionUpdateDownloadStatus($release_metadata)



Report download of specified release

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CodepushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$release_metadata = new \ZeC128\AppCenter\AppCenterApi\ReleaseMetadata(); // \ZeC128\AppCenter\AppCenterApi\ReleaseMetadata | Deployment status metric properties

try {
    $apiInstance->legacyCodePushAcquisitionUpdateDownloadStatus($release_metadata);
} catch (Exception $e) {
    echo 'Exception when calling CodepushApi->legacyCodePushAcquisitionUpdateDownloadStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **release_metadata** | [**\ZeC128\AppCenter\AppCenterApi\ReleaseMetadata**](../Model/ReleaseMetadata.md)| Deployment status metric properties |

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **legacyCodePushAcquisitionUpdateInstallsStatus**
> legacyCodePushAcquisitionUpdateInstallsStatus($release_metadata)



Report deploy of specified release

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\CodepushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$release_metadata = new \ZeC128\AppCenter\AppCenterApi\ReleaseMetadata1(); // \ZeC128\AppCenter\AppCenterApi\ReleaseMetadata1 | Deployment status metric properties

try {
    $apiInstance->legacyCodePushAcquisitionUpdateInstallsStatus($release_metadata);
} catch (Exception $e) {
    echo 'Exception when calling CodepushApi->legacyCodePushAcquisitionUpdateInstallsStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **release_metadata** | [**\ZeC128\AppCenter\AppCenterApi\ReleaseMetadata1**](../Model/ReleaseMetadata1.md)| Deployment status metric properties |

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

