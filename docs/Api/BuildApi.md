# ZeC128\AppCenter\BuildApi

All URIs are relative to *https://api.appcenter.ms*

Method | HTTP request | Description
------------- | ------------- | -------------
[**branchConfigurationsCreate**](BuildApi.md#branchConfigurationsCreate) | **POST** /v0.1/apps/{owner_name}/{app_name}/branches/{branch}/config | 
[**branchConfigurationsDelete**](BuildApi.md#branchConfigurationsDelete) | **DELETE** /v0.1/apps/{owner_name}/{app_name}/branches/{branch}/config | 
[**branchConfigurationsGet**](BuildApi.md#branchConfigurationsGet) | **GET** /v0.1/apps/{owner_name}/{app_name}/branches/{branch}/config | 
[**branchConfigurationsUpdate**](BuildApi.md#branchConfigurationsUpdate) | **PUT** /v0.1/apps/{owner_name}/{app_name}/branches/{branch}/config | 
[**buildsCreate**](BuildApi.md#buildsCreate) | **POST** /v0.1/apps/{owner_name}/{app_name}/branches/{branch}/builds | 
[**buildsDistribute**](BuildApi.md#buildsDistribute) | **POST** /v0.1/apps/{owner_name}/{app_name}/builds/{build_id}/distribute | 
[**buildsGet**](BuildApi.md#buildsGet) | **GET** /v0.1/apps/{owner_name}/{app_name}/builds/{build_id} | 
[**buildsGetDownloadUri**](BuildApi.md#buildsGetDownloadUri) | **GET** /v0.1/apps/{owner_name}/{app_name}/builds/{build_id}/downloads/{download_type} | 
[**buildsGetLog**](BuildApi.md#buildsGetLog) | **GET** /v0.1/apps/{owner_name}/{app_name}/builds/{build_id}/logs | 
[**buildsGetStatusByAppId**](BuildApi.md#buildsGetStatusByAppId) | **GET** /v0.1/apps/{owner_name}/{app_name}/build_service_status | 
[**buildsListBranches**](BuildApi.md#buildsListBranches) | **GET** /v0.1/apps/{owner_name}/{app_name}/branches | 
[**buildsListByBranch**](BuildApi.md#buildsListByBranch) | **GET** /v0.1/apps/{owner_name}/{app_name}/branches/{branch}/builds | 
[**buildsListToolsetProjects**](BuildApi.md#buildsListToolsetProjects) | **GET** /v0.1/apps/{owner_name}/{app_name}/branches/{branch}/toolset_projects | 
[**buildsListToolsets**](BuildApi.md#buildsListToolsets) | **GET** /v0.1/apps/{owner_name}/{app_name}/toolsets | 
[**buildsListXamarinSDKBundles**](BuildApi.md#buildsListXamarinSDKBundles) | **GET** /v0.1/apps/{owner_name}/{app_name}/xamarin_sdk_bundles | 
[**buildsListXcodeVersions**](BuildApi.md#buildsListXcodeVersions) | **GET** /v0.1/apps/{owner_name}/{app_name}/xcode_versions | 
[**buildsUpdate**](BuildApi.md#buildsUpdate) | **PATCH** /v0.1/apps/{owner_name}/{app_name}/builds/{build_id} | 
[**buildsWebhook**](BuildApi.md#buildsWebhook) | **POST** /v0.1/public/hooks | 
[**commitsListByShaList**](BuildApi.md#commitsListByShaList) | **GET** /v0.1/apps/{owner_name}/{app_name}/commits/batch | 
[**fileAssetsCreate**](BuildApi.md#fileAssetsCreate) | **POST** /v0.1/apps/{owner_name}/{app_name}/file_asset | 
[**repositoriesList**](BuildApi.md#repositoriesList) | **GET** /v0.1/apps/{owner_name}/{app_name}/source_hosts/{source_host}/repositories | 
[**repositoryConfigurationsCreateOrUpdate**](BuildApi.md#repositoryConfigurationsCreateOrUpdate) | **POST** /v0.1/apps/{owner_name}/{app_name}/repo_config | 
[**repositoryConfigurationsDelete**](BuildApi.md#repositoryConfigurationsDelete) | **DELETE** /v0.1/apps/{owner_name}/{app_name}/repo_config | 
[**repositoryConfigurationsList**](BuildApi.md#repositoryConfigurationsList) | **GET** /v0.1/apps/{owner_name}/{app_name}/repo_config | 


# **branchConfigurationsCreate**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20075 branchConfigurationsCreate($branch, $params, $owner_name, $app_name)



Configures the branch for build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$branch = "branch_example"; // string | The branch name
$params = new \ZeC128\AppCenter\AppCenterApi\Params1(); // \ZeC128\AppCenter\AppCenterApi\Params1 | Parameters of the configuration
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->branchConfigurationsCreate($branch, $params, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->branchConfigurationsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **branch** | **string**| The branch name |
 **params** | [**\ZeC128\AppCenter\AppCenterApi\Params1**](../Model/Params1.md)| Parameters of the configuration |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20075**](../Model/InlineResponse20075.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **branchConfigurationsDelete**
> object branchConfigurationsDelete($branch, $owner_name, $app_name, $payload)



Deletes the branch build configuration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$branch = "branch_example"; // string | The branch name
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$payload = new \stdClass; // object | 

try {
    $result = $apiInstance->branchConfigurationsDelete($branch, $owner_name, $app_name, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->branchConfigurationsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **branch** | **string**| The branch name |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **payload** | **object**|  | [optional]

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **branchConfigurationsGet**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20075 branchConfigurationsGet($branch, $owner_name, $app_name)



Gets the branch configuration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$branch = "branch_example"; // string | The branch name
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->branchConfigurationsGet($branch, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->branchConfigurationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **branch** | **string**| The branch name |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20075**](../Model/InlineResponse20075.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **branchConfigurationsUpdate**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20075 branchConfigurationsUpdate($branch, $params, $owner_name, $app_name)



Reconfigures the branch for build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$branch = "branch_example"; // string | The branch name
$params = new \ZeC128\AppCenter\AppCenterApi\Params(); // \ZeC128\AppCenter\AppCenterApi\Params | Parameters of the configuration
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->branchConfigurationsUpdate($branch, $params, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->branchConfigurationsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **branch** | **string**| The branch name |
 **params** | [**\ZeC128\AppCenter\AppCenterApi\Params**](../Model/Params.md)| Parameters of the configuration |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20075**](../Model/InlineResponse20075.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **buildsCreate**
> object buildsCreate($branch, $owner_name, $app_name, $params)



Create a build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$branch = "branch_example"; // string | The branch name
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$params = new \ZeC128\AppCenter\AppCenterApi\Params2(); // \ZeC128\AppCenter\AppCenterApi\Params2 | Parameters of the build

try {
    $result = $apiInstance->buildsCreate($branch, $owner_name, $app_name, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->buildsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **branch** | **string**| The branch name |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **params** | [**\ZeC128\AppCenter\AppCenterApi\Params2**](../Model/Params2.md)| Parameters of the build | [optional]

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **buildsDistribute**
> object buildsDistribute($build_id, $distribute_info, $owner_name, $app_name)



Distribute a build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$build_id = 56; // int | The build ID
$distribute_info = new \ZeC128\AppCenter\AppCenterApi\DistributeInfo(); // \ZeC128\AppCenter\AppCenterApi\DistributeInfo | The distribution details
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->buildsDistribute($build_id, $distribute_info, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->buildsDistribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_id** | **int**| The build ID |
 **distribute_info** | [**\ZeC128\AppCenter\AppCenterApi\DistributeInfo**](../Model/DistributeInfo.md)| The distribution details |
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

# **buildsGet**
> object buildsGet($build_id, $owner_name, $app_name)



Returns the build detail for the given build ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$build_id = 56; // int | The build ID
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->buildsGet($build_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->buildsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_id** | **int**| The build ID |
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

# **buildsGetDownloadUri**
> object buildsGetDownloadUri($build_id, $download_type, $owner_name, $app_name)



Gets the download URI

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$build_id = 56; // int | The build ID
$download_type = "download_type_example"; // string | The download type
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->buildsGetDownloadUri($build_id, $download_type, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->buildsGetDownloadUri: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_id** | **int**| The build ID |
 **download_type** | **string**| The download type |
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

# **buildsGetLog**
> object buildsGetLog($build_id, $owner_name, $app_name)



Get the build log

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$build_id = 56; // int | The build ID
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->buildsGetLog($build_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->buildsGetLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_id** | **int**| The build ID |
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

# **buildsGetStatusByAppId**
> object buildsGetStatusByAppId($owner_name, $app_name)



Application specific build service status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->buildsGetStatusByAppId($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->buildsGetStatusByAppId: ', $e->getMessage(), PHP_EOL;
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

# **buildsListBranches**
> map[string,object][] buildsListBranches($owner_name, $app_name)



Returns the list of Git branches for this application

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->buildsListBranches($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->buildsListBranches: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**map[string,object][]**](../Model/map.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **buildsListByBranch**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20076[] buildsListByBranch($branch, $owner_name, $app_name)



Returns the list of builds for the branch

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$branch = "branch_example"; // string | The branch name
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->buildsListByBranch($branch, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->buildsListByBranch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **branch** | **string**| The branch name |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20076[]**](../Model/InlineResponse20076.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **buildsListToolsetProjects**
> object buildsListToolsetProjects($branch, $os, $platform, $owner_name, $app_name, $max_search_depth)



Returns the projects in the repository for the branch, for all toolsets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$branch = "branch_example"; // string | The branch name
$os = "os_example"; // string | The desired OS for the project scan; normally the same as the app OS
$platform = "platform_example"; // string | The desired platform for the project scan
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$max_search_depth = 56; // int | The depth of the repository to search for project files

try {
    $result = $apiInstance->buildsListToolsetProjects($branch, $os, $platform, $owner_name, $app_name, $max_search_depth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->buildsListToolsetProjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **branch** | **string**| The branch name |
 **os** | **string**| The desired OS for the project scan; normally the same as the app OS |
 **platform** | **string**| The desired platform for the project scan |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **max_search_depth** | **int**| The depth of the repository to search for project files | [optional]

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **buildsListToolsets**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20021 buildsListToolsets($owner_name, $app_name, $tools)



Returns available toolsets for application

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$tools = "tools_example"; // string | Toolset name

try {
    $result = $apiInstance->buildsListToolsets($owner_name, $app_name, $tools);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->buildsListToolsets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **tools** | **string**| Toolset name | [optional]

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **buildsListXamarinSDKBundles**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20018[] buildsListXamarinSDKBundles($owner_name, $app_name)



Gets the Xamarin SDK bundles available to this app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->buildsListXamarinSDKBundles($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->buildsListXamarinSDKBundles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20018[]**](../Model/InlineResponse20018.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **buildsListXcodeVersions**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20017[] buildsListXcodeVersions($owner_name, $app_name)



Gets the Xcode versions available to this app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->buildsListXcodeVersions($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->buildsListXcodeVersions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20017[]**](../Model/InlineResponse20017.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **buildsUpdate**
> object buildsUpdate($build_id, $properties, $owner_name, $app_name)



Cancels a build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$build_id = 56; // int | The build ID
$properties = new \ZeC128\AppCenter\AppCenterApi\Properties5(); // \ZeC128\AppCenter\AppCenterApi\Properties5 | 
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->buildsUpdate($build_id, $properties, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->buildsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_id** | **int**| The build ID |
 **properties** | [**\ZeC128\AppCenter\AppCenterApi\Properties5**](../Model/Properties5.md)|  |
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

# **buildsWebhook**
> buildsWebhook($payload)



Public webhook sink

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ZeC128\AppCenter\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payload = new \stdClass; // object | 

try {
    $apiInstance->buildsWebhook($payload);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->buildsWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | **object**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **commitsListByShaList**
> object[] commitsListByShaList($hashes, $owner_name, $app_name)



Returns commit information for a batch of shas

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hashes = array("hashes_example"); // string[] | A collection of commit SHAs comma-delimited
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->commitsListByShaList($hashes, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->commitsListByShaList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hashes** | [**string[]**](../Model/string.md)| A collection of commit SHAs comma-delimited |
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

# **fileAssetsCreate**
> object fileAssetsCreate($owner_name, $app_name, $payload)



Create a new asset to upload a file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$payload = new \stdClass; // object | 

try {
    $result = $apiInstance->fileAssetsCreate($owner_name, $app_name, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->fileAssetsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **payload** | **object**|  | [optional]

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **repositoriesList**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20032[] repositoriesList($source_host, $owner_name, $app_name, $vsts_account_name, $vsts_project_id, $service_connection_id, $form)



Gets the repositories available from the source code host

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_host = "source_host_example"; // string | The source host
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$vsts_account_name = "vsts_account_name_example"; // string | Filter repositories only for specified account and project, \"vstsProjectId\" is required
$vsts_project_id = "vsts_project_id_example"; // string | Filter repositories only for specified account and project, \"vstsAccountName\" is required
$service_connection_id = "service_connection_id_example"; // string | The id of the service connection (private). Required for GitLab self-hosted repositories
$form = "form_example"; // string | The selected form of the object

try {
    $result = $apiInstance->repositoriesList($source_host, $owner_name, $app_name, $vsts_account_name, $vsts_project_id, $service_connection_id, $form);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->repositoriesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_host** | **string**| The source host |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **vsts_account_name** | **string**| Filter repositories only for specified account and project, \&quot;vstsProjectId\&quot; is required | [optional]
 **vsts_project_id** | **string**| Filter repositories only for specified account and project, \&quot;vstsAccountName\&quot; is required | [optional]
 **service_connection_id** | **string**| The id of the service connection (private). Required for GitLab self-hosted repositories | [optional]
 **form** | **string**| The selected form of the object | [optional]

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20032[]**](../Model/InlineResponse20032.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **repositoryConfigurationsCreateOrUpdate**
> object repositoryConfigurationsCreateOrUpdate($repo, $owner_name, $app_name)



Configures the repository for build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$repo = new \stdClass; // object | The repository information
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->repositoryConfigurationsCreateOrUpdate($repo, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->repositoryConfigurationsCreateOrUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repo** | [**object**](../Model/.md)| The repository information |
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

# **repositoryConfigurationsDelete**
> object repositoryConfigurationsDelete($owner_name, $app_name)



Removes the configuration for the repository

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->repositoryConfigurationsDelete($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->repositoryConfigurationsDelete: ', $e->getMessage(), PHP_EOL;
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

# **repositoryConfigurationsList**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20033[] repositoryConfigurationsList($owner_name, $app_name, $include_inactive)



Returns the repository build configuration status of the app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$include_inactive = true; // bool | Include inactive configurations if none are active

try {
    $result = $apiInstance->repositoryConfigurationsList($owner_name, $app_name, $include_inactive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->repositoryConfigurationsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **include_inactive** | **bool**| Include inactive configurations if none are active | [optional]

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20033[]**](../Model/InlineResponse20033.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

