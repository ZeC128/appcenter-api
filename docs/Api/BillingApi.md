# Swagger\Client\BillingApi

All URIs are relative to *https://api.appcenter.ms*

Method | HTTP request | Description
------------- | ------------- | -------------
[**billingAggregatedInformationGetAll**](BillingApi.md#billingAggregatedInformationGetAll) | **GET** /v0.1/billing/allAccountsAggregated | 
[**billingAggregatedInformationGetByApp**](BillingApi.md#billingAggregatedInformationGetByApp) | **GET** /v0.1/apps/{owner_name}/{app_name}/billing/aggregated | 
[**billingAggregatedInformationGetForOrg**](BillingApi.md#billingAggregatedInformationGetForOrg) | **GET** /v0.1/orgs/{orgName}/billing/aggregated | 


# **billingAggregatedInformationGetAll**
> \Swagger\Client\Model\InlineResponse20016 billingAggregatedInformationGetAll($service, $period, $show_original_plans)



Aggregated Billing Information for the requesting user and the organizations in which the user is an admin.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service = "service_example"; // string | Type of service that should be included in the Billing Information
$period = "period_example"; // string | Type of period that should be included in the Billing Information
$show_original_plans = true; // bool | Controls whether the API should show the original plan when Azure Subscription is not enabled

try {
    $result = $apiInstance->billingAggregatedInformationGetAll($service, $period, $show_original_plans);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingAggregatedInformationGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service** | **string**| Type of service that should be included in the Billing Information | [optional]
 **period** | **string**| Type of period that should be included in the Billing Information | [optional]
 **show_original_plans** | **bool**| Controls whether the API should show the original plan when Azure Subscription is not enabled | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingAggregatedInformationGetByApp**
> \Swagger\Client\Model\InlineResponse20013 billingAggregatedInformationGetByApp($owner_name, $app_name, $service, $period, $show_original_plans)



Aggregated Billing Information for owner of a given app.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$service = "service_example"; // string | Type of service that should be included in the Billing Information
$period = "period_example"; // string | Type of period that should be included in the Billing Information
$show_original_plans = true; // bool | Controls whether the API should show the original plan when Azure Subscription is not enabled

try {
    $result = $apiInstance->billingAggregatedInformationGetByApp($owner_name, $app_name, $service, $period, $show_original_plans);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingAggregatedInformationGetByApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **service** | **string**| Type of service that should be included in the Billing Information | [optional]
 **period** | **string**| Type of period that should be included in the Billing Information | [optional]
 **show_original_plans** | **bool**| Controls whether the API should show the original plan when Azure Subscription is not enabled | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingAggregatedInformationGetForOrg**
> \Swagger\Client\Model\InlineResponse20013 billingAggregatedInformationGetForOrg($org_name, $service, $period, $show_original_plans)



Aggregated Billing Information for a given Organization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The name of the Organization
$service = "service_example"; // string | Type of service that should be included in the Billing Information
$period = "period_example"; // string | Type of period that should be included in the Billing Information
$show_original_plans = true; // bool | Controls whether the API should show the original plan when Azure Subscription is not enabled

try {
    $result = $apiInstance->billingAggregatedInformationGetForOrg($org_name, $service, $period, $show_original_plans);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingAggregatedInformationGetForOrg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The name of the Organization |
 **service** | **string**| Type of service that should be included in the Billing Information | [optional]
 **period** | **string**| Type of period that should be included in the Billing Information | [optional]
 **show_original_plans** | **bool**| Controls whether the API should show the original plan when Azure Subscription is not enabled | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

