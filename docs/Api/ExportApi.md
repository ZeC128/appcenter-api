# Swagger\Client\ExportApi

All URIs are relative to *https://api.appcenter.ms*

Method | HTTP request | Description
------------- | ------------- | -------------
[**exportConfigurationsCreate**](ExportApi.md#exportConfigurationsCreate) | **POST** /v0.1/apps/{owner_name}/{app_name}/export_configurations | 
[**exportConfigurationsDelete**](ExportApi.md#exportConfigurationsDelete) | **DELETE** /v0.1/apps/{owner_name}/{app_name}/export_configurations/{export_configuration_id} | 
[**exportConfigurationsDisable**](ExportApi.md#exportConfigurationsDisable) | **POST** /v0.1/apps/{owner_name}/{app_name}/export_configurations/{export_configuration_id}/disable | 
[**exportConfigurationsEnable**](ExportApi.md#exportConfigurationsEnable) | **POST** /v0.1/apps/{owner_name}/{app_name}/export_configurations/{export_configuration_id}/enable | 
[**exportConfigurationsGet**](ExportApi.md#exportConfigurationsGet) | **GET** /v0.1/apps/{owner_name}/{app_name}/export_configurations/{export_configuration_id} | 
[**exportConfigurationsList**](ExportApi.md#exportConfigurationsList) | **GET** /v0.1/apps/{owner_name}/{app_name}/export_configurations | 
[**exportConfigurationsPartialUpdate**](ExportApi.md#exportConfigurationsPartialUpdate) | **PATCH** /v0.1/apps/{owner_name}/{app_name}/export_configurations/{export_configuration_id} | 


# **exportConfigurationsCreate**
> \Swagger\Client\Model\InlineResponse20039 exportConfigurationsCreate($properties, $owner_name, $app_name)



Create new export configuration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$properties = new \Swagger\Client\Model\Properties4(); // \Swagger\Client\Model\Properties4 | Export configurations.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->exportConfigurationsCreate($properties, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->exportConfigurationsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **properties** | [**\Swagger\Client\Model\Properties4**](../Model/Properties4.md)| Export configurations. |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\InlineResponse20039**](../Model/InlineResponse20039.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportConfigurationsDelete**
> exportConfigurationsDelete($export_configuration_id, $owner_name, $app_name)



Delete export configuration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$export_configuration_id = "export_configuration_id_example"; // string | The id of the export configuration.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $apiInstance->exportConfigurationsDelete($export_configuration_id, $owner_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->exportConfigurationsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **export_configuration_id** | **string**| The id of the export configuration. |
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

# **exportConfigurationsDisable**
> exportConfigurationsDisable($export_configuration_id, $owner_name, $app_name)



Disable export configuration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$export_configuration_id = "export_configuration_id_example"; // string | The id of the export configuration.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $apiInstance->exportConfigurationsDisable($export_configuration_id, $owner_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->exportConfigurationsDisable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **export_configuration_id** | **string**| The id of the export configuration. |
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

# **exportConfigurationsEnable**
> exportConfigurationsEnable($export_configuration_id, $owner_name, $app_name)



Enable export configuration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$export_configuration_id = "export_configuration_id_example"; // string | The id of the export configuration.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $apiInstance->exportConfigurationsEnable($export_configuration_id, $owner_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->exportConfigurationsEnable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **export_configuration_id** | **string**| The id of the export configuration. |
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

# **exportConfigurationsGet**
> \Swagger\Client\Model\InlineResponse20039 exportConfigurationsGet($export_configuration_id, $owner_name, $app_name)



Get export configuration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$export_configuration_id = "export_configuration_id_example"; // string | The id of the export configuration.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->exportConfigurationsGet($export_configuration_id, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->exportConfigurationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **export_configuration_id** | **string**| The id of the export configuration. |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\InlineResponse20039**](../Model/InlineResponse20039.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportConfigurationsList**
> \Swagger\Client\Model\InlineResponse20040 exportConfigurationsList($owner_name, $app_name)



List export configurations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->exportConfigurationsList($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->exportConfigurationsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\InlineResponse20040**](../Model/InlineResponse20040.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportConfigurationsPartialUpdate**
> \Swagger\Client\Model\InlineResponse20039 exportConfigurationsPartialUpdate($export_configuration_id, $properties, $owner_name, $app_name)



Partially update export configuration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$export_configuration_id = "export_configuration_id_example"; // string | The id of the export configuration.
$properties = new \Swagger\Client\Model\Properties3(); // \Swagger\Client\Model\Properties3 | Export configurations.
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->exportConfigurationsPartialUpdate($export_configuration_id, $properties, $owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->exportConfigurationsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **export_configuration_id** | **string**| The id of the export configuration. |
 **properties** | [**\Swagger\Client\Model\Properties3**](../Model/Properties3.md)| Export configurations. |
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\Swagger\Client\Model\InlineResponse20039**](../Model/InlineResponse20039.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

