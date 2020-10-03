# ZeC128\AppCenter\AccountApi

All URIs are relative to *https://api.appcenter.ms*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appApiTokensDelete**](AccountApi.md#appApiTokensDelete) | **DELETE** /v0.1/apps/{owner_name}/{app_name}/api_tokens/{api_token_id} | 
[**appApiTokensList**](AccountApi.md#appApiTokensList) | **GET** /v0.1/apps/{owner_name}/{app_name}/api_tokens | 
[**appApiTokensNew**](AccountApi.md#appApiTokensNew) | **POST** /v0.1/apps/{owner_name}/{app_name}/api_tokens | 
[**appInvitationsAccept**](AccountApi.md#appInvitationsAccept) | **POST** /v0.1/user/invitations/apps/{invitation_token}/accept | 
[**appInvitationsCreate**](AccountApi.md#appInvitationsCreate) | **POST** /v0.1/apps/{owner_name}/{app_name}/invitations | 
[**appInvitationsCreateByEmail**](AccountApi.md#appInvitationsCreateByEmail) | **POST** /v0.1/apps/{owner_name}/{app_name}/invitations/{user_email} | 
[**appInvitationsDelete**](AccountApi.md#appInvitationsDelete) | **DELETE** /v0.1/apps/{owner_name}/{app_name}/invitations/{user_email} | 
[**appInvitationsList**](AccountApi.md#appInvitationsList) | **GET** /v0.1/apps/{owner_name}/{app_name}/invitations | 
[**appInvitationsReject**](AccountApi.md#appInvitationsReject) | **POST** /v0.1/user/invitations/apps/{invitation_token}/reject | 
[**appInvitationsUpdatePermissions**](AccountApi.md#appInvitationsUpdatePermissions) | **PATCH** /v0.1/apps/{owner_name}/{app_name}/invitations/{user_email} | 
[**appsCreate**](AccountApi.md#appsCreate) | **POST** /v0.1/apps | 
[**appsCreateForOrg**](AccountApi.md#appsCreateForOrg) | **POST** /v0.1/orgs/{org_name}/apps | 
[**appsDelete**](AccountApi.md#appsDelete) | **DELETE** /v0.1/apps/{owner_name}/{app_name} | 
[**appsDeleteAvatar**](AccountApi.md#appsDeleteAvatar) | **DELETE** /v0.1/apps/{owner_name}/{app_name}/avatar | 
[**appsGet**](AccountApi.md#appsGet) | **GET** /v0.1/apps/{owner_name}/{app_name} | 
[**appsGetForOrgUser**](AccountApi.md#appsGetForOrgUser) | **GET** /v0.1/orgs/{org_name}/users/{user_name}/apps | 
[**appsGetTeams**](AccountApi.md#appsGetTeams) | **GET** /v0.1/apps/{owner_name}/{app_name}/teams | 
[**appsList**](AccountApi.md#appsList) | **GET** /v0.1/apps | 
[**appsListForOrg**](AccountApi.md#appsListForOrg) | **GET** /v0.1/orgs/{org_name}/apps | 
[**appsListTesters**](AccountApi.md#appsListTesters) | **GET** /v0.1/apps/{owner_name}/{app_name}/testers | 
[**appsRemoveUser**](AccountApi.md#appsRemoveUser) | **DELETE** /v0.1/apps/{owner_name}/{app_name}/users/{user_email} | 
[**appsTransferOwnership**](AccountApi.md#appsTransferOwnership) | **POST** /v0.1/apps/{owner_name}/{app_name}/transfer/{destination_owner_name} | 
[**appsTransferToOrg**](AccountApi.md#appsTransferToOrg) | **POST** /v0.1/apps/{owner_name}/{app_name}/transfer_to_org | 
[**appsUpdate**](AccountApi.md#appsUpdate) | **PATCH** /v0.1/apps/{owner_name}/{app_name} | 
[**appsUpdateAvatar**](AccountApi.md#appsUpdateAvatar) | **POST** /v0.1/apps/{owner_name}/{app_name}/avatar | 
[**appsUpdateUserPermissions**](AccountApi.md#appsUpdateUserPermissions) | **PATCH** /v0.1/apps/{owner_name}/{app_name}/users/{user_email} | 
[**azureSubscriptionDeleteForApp**](AccountApi.md#azureSubscriptionDeleteForApp) | **DELETE** /v0.1/apps/{owner_name}/{app_name}/azure_subscriptions/{azure_subscription_id} | 
[**azureSubscriptionLinkForApp**](AccountApi.md#azureSubscriptionLinkForApp) | **POST** /v0.1/apps/{owner_name}/{app_name}/azure_subscriptions | 
[**azureSubscriptionListForApp**](AccountApi.md#azureSubscriptionListForApp) | **GET** /v0.1/apps/{owner_name}/{app_name}/azure_subscriptions | 
[**azureSubscriptionListForOrg**](AccountApi.md#azureSubscriptionListForOrg) | **GET** /v0.1/orgs/{org_name}/azure_subscriptions | 
[**azureSubscriptionListForUser**](AccountApi.md#azureSubscriptionListForUser) | **GET** /v0.1/azure_subscriptions | 
[**distributionGroupInvitationsAcceptAll**](AccountApi.md#distributionGroupInvitationsAcceptAll) | **POST** /v0.1/user/invitations/distribution_groups/accept | 
[**distributionGroupsAddApps**](AccountApi.md#distributionGroupsAddApps) | **POST** /v0.1/orgs/{org_name}/distribution_groups/{distribution_group_name}/apps | 
[**distributionGroupsAddUser**](AccountApi.md#distributionGroupsAddUser) | **POST** /v0.1/apps/{owner_name}/{app_name}/distribution_groups/{distribution_group_name}/members | 
[**distributionGroupsAddUsersForOrg**](AccountApi.md#distributionGroupsAddUsersForOrg) | **POST** /v0.1/orgs/{org_name}/distribution_groups/{distribution_group_name}/members | 
[**distributionGroupsBulkDeleteApps**](AccountApi.md#distributionGroupsBulkDeleteApps) | **POST** /v0.1/orgs/{org_name}/distribution_groups/{distribution_group_name}/apps/bulk_delete | 
[**distributionGroupsBulkDeleteUsers**](AccountApi.md#distributionGroupsBulkDeleteUsers) | **POST** /v0.1/orgs/{org_name}/distribution_groups/{distribution_group_name}/members/bulk_delete | 
[**distributionGroupsCreate**](AccountApi.md#distributionGroupsCreate) | **POST** /v0.1/apps/{owner_name}/{app_name}/distribution_groups | 
[**distributionGroupsCreateForOrg**](AccountApi.md#distributionGroupsCreateForOrg) | **POST** /v0.1/orgs/{org_name}/distribution_groups | 
[**distributionGroupsDelete**](AccountApi.md#distributionGroupsDelete) | **DELETE** /v0.1/apps/{owner_name}/{app_name}/distribution_groups/{distribution_group_name} | 
[**distributionGroupsDeleteForOrg**](AccountApi.md#distributionGroupsDeleteForOrg) | **DELETE** /v0.1/orgs/{org_name}/distribution_groups/{distribution_group_name} | 
[**distributionGroupsDetailsForOrg**](AccountApi.md#distributionGroupsDetailsForOrg) | **GET** /v0.1/orgs/{org_name}/distribution_groups_details | 
[**distributionGroupsGet**](AccountApi.md#distributionGroupsGet) | **GET** /v0.1/apps/{owner_name}/{app_name}/distribution_groups/{distribution_group_name} | 
[**distributionGroupsGetApps**](AccountApi.md#distributionGroupsGetApps) | **GET** /v0.1/orgs/{org_name}/distribution_groups/{distribution_group_name}/apps | 
[**distributionGroupsGetForOrg**](AccountApi.md#distributionGroupsGetForOrg) | **GET** /v0.1/orgs/{org_name}/distribution_groups/{distribution_group_name} | 
[**distributionGroupsList**](AccountApi.md#distributionGroupsList) | **GET** /v0.1/apps/{owner_name}/{app_name}/distribution_groups | 
[**distributionGroupsListAllTestersForOrg**](AccountApi.md#distributionGroupsListAllTestersForOrg) | **GET** /v0.1/orgs/{org_name}/testers | 
[**distributionGroupsListForOrg**](AccountApi.md#distributionGroupsListForOrg) | **GET** /v0.1/orgs/{org_name}/distribution_groups | 
[**distributionGroupsListUsers**](AccountApi.md#distributionGroupsListUsers) | **GET** /v0.1/apps/{owner_name}/{app_name}/distribution_groups/{distribution_group_name}/members | 
[**distributionGroupsListUsersForOrg**](AccountApi.md#distributionGroupsListUsersForOrg) | **GET** /v0.1/orgs/{org_name}/distribution_groups/{distribution_group_name}/members | 
[**distributionGroupsPatchForOrg**](AccountApi.md#distributionGroupsPatchForOrg) | **PATCH** /v0.1/orgs/{org_name}/distribution_groups/{distribution_group_name} | 
[**distributionGroupsRemoveUser**](AccountApi.md#distributionGroupsRemoveUser) | **POST** /v0.1/apps/{owner_name}/{app_name}/distribution_groups/{distribution_group_name}/members/bulk_delete | 
[**distributionGroupsResendInvite**](AccountApi.md#distributionGroupsResendInvite) | **POST** /v0.1/apps/{owner_name}/{app_name}/distribution_groups/{distribution_group_name}/resend_invite | 
[**distributionGroupsResendSharedInvite**](AccountApi.md#distributionGroupsResendSharedInvite) | **POST** /v0.1/orgs/{org_name}/distribution_groups/{distribution_group_name}/resend_invite | 
[**distributionGroupsUpdate**](AccountApi.md#distributionGroupsUpdate) | **PATCH** /v0.1/apps/{owner_name}/{app_name}/distribution_groups/{distribution_group_name} | 
[**invitationsSent**](AccountApi.md#invitationsSent) | **GET** /v0.1/invitations/sent | 
[**orgInvitations**](AccountApi.md#orgInvitations) | **POST** /v0.1/orgs/{org_name}/invitations/{email}/revoke | 
[**orgInvitationsAccept**](AccountApi.md#orgInvitationsAccept) | **POST** /v0.1/user/invitations/orgs/{invitation_token}/accept | 
[**orgInvitationsCreate**](AccountApi.md#orgInvitationsCreate) | **POST** /v0.1/orgs/{org_name}/invitations | 
[**orgInvitationsDelete**](AccountApi.md#orgInvitationsDelete) | **DELETE** /v0.1/orgs/{org_name}/invitations | 
[**orgInvitationsListPending**](AccountApi.md#orgInvitationsListPending) | **GET** /v0.1/orgs/{org_name}/invitations | 
[**orgInvitationsReject**](AccountApi.md#orgInvitationsReject) | **POST** /v0.1/user/invitations/orgs/{invitation_token}/reject | 
[**orgInvitationsSendNewInvitation**](AccountApi.md#orgInvitationsSendNewInvitation) | **POST** /v0.1/orgs/{org_name}/invitations/{email}/resend | 
[**orgInvitationsUpdate**](AccountApi.md#orgInvitationsUpdate) | **PATCH** /v0.1/orgs/{org_name}/invitations/{email} | 
[**organizationDeleteAvatar**](AccountApi.md#organizationDeleteAvatar) | **DELETE** /v0.1/orgs/{org_name}/avatar | 
[**organizationUpdateAvatar**](AccountApi.md#organizationUpdateAvatar) | **POST** /v0.1/orgs/{org_name}/avatar | 
[**organizationsCreateOrUpdate**](AccountApi.md#organizationsCreateOrUpdate) | **POST** /v0.1/orgs | 
[**organizationsDelete**](AccountApi.md#organizationsDelete) | **DELETE** /v0.1/orgs/{org_name} | 
[**organizationsGet**](AccountApi.md#organizationsGet) | **GET** /v0.1/orgs/{org_name} | 
[**organizationsList**](AccountApi.md#organizationsList) | **GET** /v0.1/orgs | 
[**organizationsListAdministered**](AccountApi.md#organizationsListAdministered) | **GET** /v0.1/administeredOrgs | 
[**organizationsUpdate**](AccountApi.md#organizationsUpdate) | **PATCH** /v0.1/orgs/{org_name} | 
[**sharedconnectionConnections**](AccountApi.md#sharedconnectionConnections) | **GET** /v0.1/user/export/serviceConnections | 
[**teamsAddApp**](AccountApi.md#teamsAddApp) | **POST** /v0.1/orgs/{org_name}/teams/{team_name}/apps | 
[**teamsAddUser**](AccountApi.md#teamsAddUser) | **POST** /v0.1/orgs/{org_name}/teams/{team_name}/users | 
[**teamsCreateTeam**](AccountApi.md#teamsCreateTeam) | **POST** /v0.1/orgs/{org_name}/teams | 
[**teamsDelete**](AccountApi.md#teamsDelete) | **DELETE** /v0.1/orgs/{org_name}/teams/{team_name} | 
[**teamsGetTeam**](AccountApi.md#teamsGetTeam) | **GET** /v0.1/orgs/{org_name}/teams/{team_name} | 
[**teamsGetUsers**](AccountApi.md#teamsGetUsers) | **GET** /v0.1/orgs/{org_name}/teams/{team_name}/users | 
[**teamsListAll**](AccountApi.md#teamsListAll) | **GET** /v0.1/orgs/{org_name}/teams | 
[**teamsListApps**](AccountApi.md#teamsListApps) | **GET** /v0.1/orgs/{org_name}/teams/{team_name}/apps | 
[**teamsRemoveApp**](AccountApi.md#teamsRemoveApp) | **DELETE** /v0.1/orgs/{org_name}/teams/{team_name}/apps/{app_name} | 
[**teamsRemoveUser**](AccountApi.md#teamsRemoveUser) | **DELETE** /v0.1/orgs/{org_name}/teams/{team_name}/users/{user_name} | 
[**teamsUpdate**](AccountApi.md#teamsUpdate) | **PATCH** /v0.1/orgs/{org_name}/teams/{team_name} | 
[**teamsUpdatePermissions**](AccountApi.md#teamsUpdatePermissions) | **PATCH** /v0.1/orgs/{org_name}/teams/{team_name}/apps/{app_name} | 
[**userApiTokensDelete**](AccountApi.md#userApiTokensDelete) | **DELETE** /v0.1/api_tokens/{api_token_id} | 
[**userApiTokensList**](AccountApi.md#userApiTokensList) | **GET** /v0.1/api_tokens | 
[**userApiTokensNew**](AccountApi.md#userApiTokensNew) | **POST** /v0.1/api_tokens | 
[**usersGet**](AccountApi.md#usersGet) | **GET** /v0.1/user | 
[**usersGetForOrg**](AccountApi.md#usersGetForOrg) | **GET** /v0.1/orgs/{org_name}/users/{user_name} | 
[**usersGetUserMetadata**](AccountApi.md#usersGetUserMetadata) | **GET** /v0.1/user/metadata/optimizely | 
[**usersList**](AccountApi.md#usersList) | **GET** /v0.1/apps/{owner_name}/{app_name}/users | 
[**usersListForOrg**](AccountApi.md#usersListForOrg) | **GET** /v0.1/orgs/{org_name}/users | 
[**usersRemoveFromOrg**](AccountApi.md#usersRemoveFromOrg) | **DELETE** /v0.1/orgs/{org_name}/users/{user_name} | 
[**usersUpdate**](AccountApi.md#usersUpdate) | **PATCH** /v0.1/user | 
[**usersUpdateOrgRole**](AccountApi.md#usersUpdateOrgRole) | **PATCH** /v0.1/orgs/{org_name}/users/{user_name} | 


# **appApiTokensDelete**
> appApiTokensDelete($owner_name, $app_name, $api_token_id)



Delete the App Api Token object with the specific ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$api_token_id = "api_token_id_example"; // string | The unique ID (UUID) of the api token

try {
    $apiInstance->appApiTokensDelete($owner_name, $app_name, $api_token_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->appApiTokensDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **api_token_id** | **string**| The unique ID (UUID) of the api token |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appApiTokensList**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20078[] appApiTokensList($owner_name, $app_name)



Returns App API tokens for the app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->appApiTokensList($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->appApiTokensList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20078[]**](../Model/InlineResponse20078.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appApiTokensNew**
> object appApiTokensNew($owner_name, $app_name, $description)



Creates a new App API token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$description = new \ZeC128\AppCenter\AppCenterApi\Description(); // \ZeC128\AppCenter\AppCenterApi\Description | Description of the token

try {
    $result = $apiInstance->appApiTokensNew($owner_name, $app_name, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->appApiTokensNew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **description** | [**\ZeC128\AppCenter\AppCenterApi\Description**](../Model/Description.md)| Description of the token | [optional]

### Return type

**object**

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appInvitationsAccept**
> appInvitationsAccept($invitation_token)



Accepts a pending invitation for the specified user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invitation_token = "invitation_token_example"; // string | The app invitation token that was sent to the user

try {
    $apiInstance->appInvitationsAccept($invitation_token);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->appInvitationsAccept: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invitation_token** | **string**| The app invitation token that was sent to the user |

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appInvitationsCreate**
> appInvitationsCreate($owner_name, $app_name, $user_email)



Invites a new or existing user to an app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$user_email = new \ZeC128\AppCenter\AppCenterApi\UserEmail3(); // \ZeC128\AppCenter\AppCenterApi\UserEmail3 | The email of the user to invite

try {
    $apiInstance->appInvitationsCreate($owner_name, $app_name, $user_email);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->appInvitationsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **user_email** | [**\ZeC128\AppCenter\AppCenterApi\UserEmail3**](../Model/UserEmail3.md)| The email of the user to invite | [optional]

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appInvitationsCreateByEmail**
> appInvitationsCreateByEmail($owner_name, $app_name, $user_email)



Invites a new or existing user to an app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$user_email = "user_email_example"; // string | The email of the user to invite

try {
    $apiInstance->appInvitationsCreateByEmail($owner_name, $app_name, $user_email);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->appInvitationsCreateByEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **user_email** | **string**| The email of the user to invite |

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appInvitationsDelete**
> appInvitationsDelete($owner_name, $app_name, $user_email)



Removes a user's invitation to an app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$user_email = "user_email_example"; // string | The email of the user to invite

try {
    $apiInstance->appInvitationsDelete($owner_name, $app_name, $user_email);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->appInvitationsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **user_email** | **string**| The email of the user to invite |

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appInvitationsList**
> object appInvitationsList($owner_name, $app_name)



Gets the pending invitations for the app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->appInvitationsList($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->appInvitationsList: ', $e->getMessage(), PHP_EOL;
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

# **appInvitationsReject**
> appInvitationsReject($invitation_token)



Rejects a pending invitation for the specified user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invitation_token = "invitation_token_example"; // string | The app invitation token that was sent to the user

try {
    $apiInstance->appInvitationsReject($invitation_token);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->appInvitationsReject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invitation_token** | **string**| The app invitation token that was sent to the user |

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appInvitationsUpdatePermissions**
> appInvitationsUpdatePermissions($owner_name, $app_name, $user_email, $user_invitation_permissions_data)



Update pending invitation permission

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$user_email = "user_email_example"; // string | The email of the user to invite
$user_invitation_permissions_data = new \ZeC128\AppCenter\AppCenterApi\UserInvitationPermissionsData(); // \ZeC128\AppCenter\AppCenterApi\UserInvitationPermissionsData | The value to update the user permission in the invite.

try {
    $apiInstance->appInvitationsUpdatePermissions($owner_name, $app_name, $user_email, $user_invitation_permissions_data);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->appInvitationsUpdatePermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **user_email** | **string**| The email of the user to invite |
 **user_invitation_permissions_data** | [**\ZeC128\AppCenter\AppCenterApi\UserInvitationPermissionsData**](../Model/UserInvitationPermissionsData.md)| The value to update the user permission in the invite. | [optional]

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appsCreate**
> object appsCreate($app)



Creates a new app and returns it to the caller

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app = new \ZeC128\AppCenter\AppCenterApi\App3(); // \ZeC128\AppCenter\AppCenterApi\App3 | The data for the app

try {
    $result = $apiInstance->appsCreate($app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->appsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app** | [**\ZeC128\AppCenter\AppCenterApi\App3**](../Model/App3.md)| The data for the app |

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appsCreateForOrg**
> object appsCreateForOrg($org_name, $app)



Creates a new app for the organization and returns it to the caller

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name
$app = new \ZeC128\AppCenter\AppCenterApi\App1(); // \ZeC128\AppCenter\AppCenterApi\App1 | The data for the app

try {
    $result = $apiInstance->appsCreateForOrg($org_name, $app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->appsCreateForOrg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |
 **app** | [**\ZeC128\AppCenter\AppCenterApi\App1**](../Model/App1.md)| The data for the app |

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appsDelete**
> appsDelete($app_name, $owner_name)



Delete an app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_name = "app_name_example"; // string | The name of the application
$owner_name = "owner_name_example"; // string | The name of the owner

try {
    $apiInstance->appsDelete($app_name, $owner_name);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->appsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_name** | **string**| The name of the application |
 **owner_name** | **string**| The name of the owner |

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appsDeleteAvatar**
> object appsDeleteAvatar($owner_name, $app_name)



Deletes the uploaded app avatar

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->appsDeleteAvatar($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->appsDeleteAvatar: ', $e->getMessage(), PHP_EOL;
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

# **appsGet**
> object appsGet($owner_name, $app_name)



Return a specific app with the given app name which belongs to the given owner.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->appsGet($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->appsGet: ', $e->getMessage(), PHP_EOL;
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

# **appsGetForOrgUser**
> object[] appsGetForOrgUser($org_name, $user_name)



Get a user apps information from an organization by name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name
$user_name = "user_name_example"; // string | The slug name of the user

try {
    $result = $apiInstance->appsGetForOrgUser($org_name, $user_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->appsGetForOrgUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |
 **user_name** | **string**| The slug name of the user |

### Return type

**object[]**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appsGetTeams**
> object[] appsGetTeams($app_name, $owner_name)



Returns the details of all teams that have access to the app.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_name = "app_name_example"; // string | The name of the application
$owner_name = "owner_name_example"; // string | The name of the owner

try {
    $result = $apiInstance->appsGetTeams($app_name, $owner_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->appsGetTeams: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_name** | **string**| The name of the application |
 **owner_name** | **string**| The name of the owner |

### Return type

**object[]**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appsList**
> object[] appsList($order_by)



Returns a list of apps

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_by = "order_by_example"; // string | The name of the attribute by which to order the response by. By default, apps are in order of creation. All results are ordered in ascending order.

try {
    $result = $apiInstance->appsList($order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->appsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_by** | **string**| The name of the attribute by which to order the response by. By default, apps are in order of creation. All results are ordered in ascending order. | [optional]

### Return type

**object[]**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appsListForOrg**
> object[] appsListForOrg($org_name)



Returns a list of apps for the organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name

try {
    $result = $apiInstance->appsListForOrg($org_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->appsListForOrg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |

### Return type

**object[]**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appsListTesters**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20020[] appsListTesters($owner_name, $app_name)



Returns the testers associated with the app specified with the given app name which belongs to the given owner.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->appsListTesters($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->appsListTesters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20020[]**](../Model/InlineResponse20020.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appsRemoveUser**
> appsRemoveUser($owner_name, $app_name, $user_email)



Removes the user from the app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$user_email = "user_email_example"; // string | The user email of the user to delete

try {
    $apiInstance->appsRemoveUser($owner_name, $app_name, $user_email);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->appsRemoveUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **user_email** | **string**| The user email of the user to delete |

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appsTransferOwnership**
> object appsTransferOwnership($owner_name, $app_name, $destination_owner_name)



Transfers ownership of an app to a different user or organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$destination_owner_name = "destination_owner_name_example"; // string | The name of the owner (user or organization) to which the app is being transferred

try {
    $result = $apiInstance->appsTransferOwnership($owner_name, $app_name, $destination_owner_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->appsTransferOwnership: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **destination_owner_name** | **string**| The name of the owner (user or organization) to which the app is being transferred |

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json, application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appsTransferToOrg**
> object appsTransferToOrg($owner_name, $app_name)



Transfers ownership of an app to a new organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->appsTransferToOrg($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->appsTransferToOrg: ', $e->getMessage(), PHP_EOL;
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

# **appsUpdate**
> object appsUpdate($app_name, $owner_name, $app)



Partially updates a single app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_name = "app_name_example"; // string | The name of the application
$owner_name = "owner_name_example"; // string | The name of the owner
$app = new \ZeC128\AppCenter\AppCenterApi\App2(); // \ZeC128\AppCenter\AppCenterApi\App2 | The partial data for the app

try {
    $result = $apiInstance->appsUpdate($app_name, $owner_name, $app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->appsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_name** | **string**| The name of the application |
 **owner_name** | **string**| The name of the owner |
 **app** | [**\ZeC128\AppCenter\AppCenterApi\App2**](../Model/App2.md)| The partial data for the app | [optional]

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appsUpdateAvatar**
> object appsUpdateAvatar($owner_name, $app_name, $avatar)



Sets the app avatar

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$avatar = "/path/to/file.txt"; // \SplFileObject | The image for an app avatar to upload.

try {
    $result = $apiInstance->appsUpdateAvatar($owner_name, $app_name, $avatar);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->appsUpdateAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **avatar** | **\SplFileObject**| The image for an app avatar to upload. | [optional]

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appsUpdateUserPermissions**
> appsUpdateUserPermissions($owner_name, $app_name, $user_email, $user_app_permissions_data)



Update user permission for the app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$user_email = "user_email_example"; // string | The user email of the user to patch
$user_app_permissions_data = new \ZeC128\AppCenter\AppCenterApi\UserAppPermissionsData(); // \ZeC128\AppCenter\AppCenterApi\UserAppPermissionsData | The value to update the user permission for the app.

try {
    $apiInstance->appsUpdateUserPermissions($owner_name, $app_name, $user_email, $user_app_permissions_data);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->appsUpdateUserPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **user_email** | **string**| The user email of the user to patch |
 **user_app_permissions_data** | [**\ZeC128\AppCenter\AppCenterApi\UserAppPermissionsData**](../Model/UserAppPermissionsData.md)| The value to update the user permission for the app. | [optional]

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **azureSubscriptionDeleteForApp**
> azureSubscriptionDeleteForApp($azure_subscription_id, $owner_name, $app_name)



Delete the azure subscriptions for the app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$azure_subscription_id = "azure_subscription_id_example"; // string | The unique ID (UUID) of the azure subscription
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $apiInstance->azureSubscriptionDeleteForApp($azure_subscription_id, $owner_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->azureSubscriptionDeleteForApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **azure_subscription_id** | [**string**](../Model/.md)| The unique ID (UUID) of the azure subscription |
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

# **azureSubscriptionLinkForApp**
> azureSubscriptionLinkForApp($owner_name, $app_name, $azure_subscription_to_app_data)



Link azure subscription to an app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$azure_subscription_to_app_data = new \ZeC128\AppCenter\AppCenterApi\AzureSubscriptionToAppData(); // \ZeC128\AppCenter\AppCenterApi\AzureSubscriptionToAppData | The azure subscription data needed to be link to the app.

try {
    $apiInstance->azureSubscriptionLinkForApp($owner_name, $app_name, $azure_subscription_to_app_data);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->azureSubscriptionLinkForApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **azure_subscription_to_app_data** | [**\ZeC128\AppCenter\AppCenterApi\AzureSubscriptionToAppData**](../Model/AzureSubscriptionToAppData.md)| The azure subscription data needed to be link to the app. |

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **azureSubscriptionListForApp**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20012[] azureSubscriptionListForApp($owner_name, $app_name)



Returns a list of azure subscriptions for the app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->azureSubscriptionListForApp($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->azureSubscriptionListForApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20012[]**](../Model/InlineResponse20012.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **azureSubscriptionListForOrg**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20012[] azureSubscriptionListForOrg($org_name)



Returns a list of azure subscriptions for the organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name

try {
    $result = $apiInstance->azureSubscriptionListForOrg($org_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->azureSubscriptionListForOrg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20012[]**](../Model/InlineResponse20012.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **azureSubscriptionListForUser**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20012[] azureSubscriptionListForUser()



Returns a list of azure subscriptions for the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->azureSubscriptionListForUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->azureSubscriptionListForUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20012[]**](../Model/InlineResponse20012.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **distributionGroupInvitationsAcceptAll**
> distributionGroupInvitationsAcceptAll()



Accepts all pending invitations to distribution groups for the specified user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->distributionGroupInvitationsAcceptAll();
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->distributionGroupInvitationsAcceptAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **distributionGroupsAddApps**
> distributionGroupsAddApps($org_name, $distribution_group_name, $apps)



Add apps to distribution group in an org

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name
$distribution_group_name = "distribution_group_name_example"; // string | The name of the distribution group
$apps = new \ZeC128\AppCenter\AppCenterApi\Apps1(); // \ZeC128\AppCenter\AppCenterApi\Apps1 | The name of the apps to be added to the distribution group. The apps have to be owned by the organization.

try {
    $apiInstance->distributionGroupsAddApps($org_name, $distribution_group_name, $apps);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->distributionGroupsAddApps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |
 **distribution_group_name** | **string**| The name of the distribution group |
 **apps** | [**\ZeC128\AppCenter\AppCenterApi\Apps1**](../Model/Apps1.md)| The name of the apps to be added to the distribution group. The apps have to be owned by the organization. |

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **distributionGroupsAddUser**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20011[] distributionGroupsAddUser($owner_name, $app_name, $distribution_group_name, $members)



Adds the members to the specified distribution group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$distribution_group_name = "distribution_group_name_example"; // string | The name of the distribution group
$members = new \ZeC128\AppCenter\AppCenterApi\Members4(); // \ZeC128\AppCenter\AppCenterApi\Members4 | The list of members to add

try {
    $result = $apiInstance->distributionGroupsAddUser($owner_name, $app_name, $distribution_group_name, $members);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->distributionGroupsAddUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **distribution_group_name** | **string**| The name of the distribution group |
 **members** | [**\ZeC128\AppCenter\AppCenterApi\Members4**](../Model/Members4.md)| The list of members to add |

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20011[]**](../Model/InlineResponse20011.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **distributionGroupsAddUsersForOrg**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20011[] distributionGroupsAddUsersForOrg($org_name, $distribution_group_name, $member_emails)



Accepts an array of user email addresses to get added to the specified group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name
$distribution_group_name = "distribution_group_name_example"; // string | The name of the distribution group
$member_emails = new \ZeC128\AppCenter\AppCenterApi\MemberEmails(); // \ZeC128\AppCenter\AppCenterApi\MemberEmails | list of user email addresses that should get added as members to the specified group

try {
    $result = $apiInstance->distributionGroupsAddUsersForOrg($org_name, $distribution_group_name, $member_emails);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->distributionGroupsAddUsersForOrg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |
 **distribution_group_name** | **string**| The name of the distribution group |
 **member_emails** | [**\ZeC128\AppCenter\AppCenterApi\MemberEmails**](../Model/MemberEmails.md)| list of user email addresses that should get added as members to the specified group |

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20011[]**](../Model/InlineResponse20011.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **distributionGroupsBulkDeleteApps**
> distributionGroupsBulkDeleteApps($org_name, $distribution_group_name, $apps)



Delete apps from distribution group in an org

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name
$distribution_group_name = "distribution_group_name_example"; // string | The name of the distribution group
$apps = new \ZeC128\AppCenter\AppCenterApi\Apps(); // \ZeC128\AppCenter\AppCenterApi\Apps | The name of the apps to be deleted from the distribution group. The apps have to be owned by the organization.

try {
    $apiInstance->distributionGroupsBulkDeleteApps($org_name, $distribution_group_name, $apps);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->distributionGroupsBulkDeleteApps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |
 **distribution_group_name** | **string**| The name of the distribution group |
 **apps** | [**\ZeC128\AppCenter\AppCenterApi\Apps**](../Model/Apps.md)| The name of the apps to be deleted from the distribution group. The apps have to be owned by the organization. |

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **distributionGroupsBulkDeleteUsers**
> distributionGroupsBulkDeleteUsers($org_name, $distribution_group_name, $members)



Delete testers from distribution group in an org

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name
$distribution_group_name = "distribution_group_name_example"; // string | The name of the distribution group
$members = new \ZeC128\AppCenter\AppCenterApi\Members1(); // \ZeC128\AppCenter\AppCenterApi\Members1 | The list of members to add

try {
    $apiInstance->distributionGroupsBulkDeleteUsers($org_name, $distribution_group_name, $members);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->distributionGroupsBulkDeleteUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |
 **distribution_group_name** | **string**| The name of the distribution group |
 **members** | [**\ZeC128\AppCenter\AppCenterApi\Members1**](../Model/Members1.md)| The list of members to add |

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **distributionGroupsCreate**
> object distributionGroupsCreate($owner_name, $app_name, $distribution_group)



Creates a new distribution group and returns it to the caller

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$distribution_group = new \ZeC128\AppCenter\AppCenterApi\DistributionGroup3(); // \ZeC128\AppCenter\AppCenterApi\DistributionGroup3 | The attributes to update for the distribution group

try {
    $result = $apiInstance->distributionGroupsCreate($owner_name, $app_name, $distribution_group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->distributionGroupsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **distribution_group** | [**\ZeC128\AppCenter\AppCenterApi\DistributionGroup3**](../Model/DistributionGroup3.md)| The attributes to update for the distribution group |

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **distributionGroupsCreateForOrg**
> object distributionGroupsCreateForOrg($org_name, $distribution_group)



Creates a disribution goup which can be shared across apps under an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name
$distribution_group = new \ZeC128\AppCenter\AppCenterApi\DistributionGroup1(); // \ZeC128\AppCenter\AppCenterApi\DistributionGroup1 | The attributes to update for the distribution group

try {
    $result = $apiInstance->distributionGroupsCreateForOrg($org_name, $distribution_group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->distributionGroupsCreateForOrg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |
 **distribution_group** | [**\ZeC128\AppCenter\AppCenterApi\DistributionGroup1**](../Model/DistributionGroup1.md)| The attributes to update for the distribution group |

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **distributionGroupsDelete**
> distributionGroupsDelete($app_name, $owner_name, $distribution_group_name)



Deletes a distribution group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_name = "app_name_example"; // string | The name of the application
$owner_name = "owner_name_example"; // string | The name of the owner
$distribution_group_name = "distribution_group_name_example"; // string | The name of the distribution group

try {
    $apiInstance->distributionGroupsDelete($app_name, $owner_name, $distribution_group_name);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->distributionGroupsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_name** | **string**| The name of the application |
 **owner_name** | **string**| The name of the owner |
 **distribution_group_name** | **string**| The name of the distribution group |

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **distributionGroupsDeleteForOrg**
> distributionGroupsDeleteForOrg($org_name, $distribution_group_name)



Deletes a single distribution group from an org with a given distribution group name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name
$distribution_group_name = "distribution_group_name_example"; // string | The name of the distribution group

try {
    $apiInstance->distributionGroupsDeleteForOrg($org_name, $distribution_group_name);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->distributionGroupsDeleteForOrg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |
 **distribution_group_name** | **string**| The name of the distribution group |

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **distributionGroupsDetailsForOrg**
> object[] distributionGroupsDetailsForOrg($org_name, $apps_limit)



Returns a list of distribution groups with details for an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name
$apps_limit = 8.14; // float | The max number of apps to include in the response

try {
    $result = $apiInstance->distributionGroupsDetailsForOrg($org_name, $apps_limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->distributionGroupsDetailsForOrg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |
 **apps_limit** | **float**| The max number of apps to include in the response | [optional]

### Return type

**object[]**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **distributionGroupsGet**
> object distributionGroupsGet($owner_name, $app_name, $distribution_group_name)



Returns a single distribution group for a given distribution group name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$distribution_group_name = "distribution_group_name_example"; // string | The name of the distribution group

try {
    $result = $apiInstance->distributionGroupsGet($owner_name, $app_name, $distribution_group_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->distributionGroupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **distribution_group_name** | **string**| The name of the distribution group |

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **distributionGroupsGetApps**
> object[] distributionGroupsGetApps($org_name, $distribution_group_name)



Get apps from a distribution group in an org

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name
$distribution_group_name = "distribution_group_name_example"; // string | The name of the distribution group

try {
    $result = $apiInstance->distributionGroupsGetApps($org_name, $distribution_group_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->distributionGroupsGetApps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |
 **distribution_group_name** | **string**| The name of the distribution group |

### Return type

**object[]**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **distributionGroupsGetForOrg**
> object distributionGroupsGetForOrg($org_name, $distribution_group_name)



Returns a single distribution group in org for a given distribution group name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name
$distribution_group_name = "distribution_group_name_example"; // string | The name of the distribution group

try {
    $result = $apiInstance->distributionGroupsGetForOrg($org_name, $distribution_group_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->distributionGroupsGetForOrg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |
 **distribution_group_name** | **string**| The name of the distribution group |

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **distributionGroupsList**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse201[] distributionGroupsList($owner_name, $app_name)



Returns a list of distribution groups in the app specified

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->distributionGroupsList($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->distributionGroupsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse201[]**](../Model/InlineResponse201.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **distributionGroupsListAllTestersForOrg**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse2007[] distributionGroupsListAllTestersForOrg($org_name)



Returns a unique list of users including the whole organization members plus testers in any shared group of that org

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name

try {
    $result = $apiInstance->distributionGroupsListAllTestersForOrg($org_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->distributionGroupsListAllTestersForOrg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse2007[]**](../Model/InlineResponse2007.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **distributionGroupsListForOrg**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse201[] distributionGroupsListForOrg($org_name)



Returns a list of distribution groups in the org specified

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name

try {
    $result = $apiInstance->distributionGroupsListForOrg($org_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->distributionGroupsListForOrg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse201[]**](../Model/InlineResponse201.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **distributionGroupsListUsers**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20010[] distributionGroupsListUsers($owner_name, $app_name, $distribution_group_name, $exclude_pending_invitations)



Returns a list of member details in the distribution group specified

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$distribution_group_name = "distribution_group_name_example"; // string | The name of the distribution group
$exclude_pending_invitations = true; // bool | Whether to exclude pending invitations in the response

try {
    $result = $apiInstance->distributionGroupsListUsers($owner_name, $app_name, $distribution_group_name, $exclude_pending_invitations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->distributionGroupsListUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **distribution_group_name** | **string**| The name of the distribution group |
 **exclude_pending_invitations** | **bool**| Whether to exclude pending invitations in the response | [optional]

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20010[]**](../Model/InlineResponse20010.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **distributionGroupsListUsersForOrg**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20010[] distributionGroupsListUsersForOrg($org_name, $distribution_group_name)



Returns a list of member in the distribution group specified

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name
$distribution_group_name = "distribution_group_name_example"; // string | The name of the distribution group

try {
    $result = $apiInstance->distributionGroupsListUsersForOrg($org_name, $distribution_group_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->distributionGroupsListUsersForOrg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |
 **distribution_group_name** | **string**| The name of the distribution group |

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20010[]**](../Model/InlineResponse20010.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **distributionGroupsPatchForOrg**
> object distributionGroupsPatchForOrg($org_name, $distribution_group_name, $distribution_group)



Update one given distribution group name in an org

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name
$distribution_group_name = "distribution_group_name_example"; // string | The name of the distribution group
$distribution_group = new \ZeC128\AppCenter\AppCenterApi\DistributionGroup(); // \ZeC128\AppCenter\AppCenterApi\DistributionGroup | The attributes to update for the distribution group

try {
    $result = $apiInstance->distributionGroupsPatchForOrg($org_name, $distribution_group_name, $distribution_group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->distributionGroupsPatchForOrg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |
 **distribution_group_name** | **string**| The name of the distribution group |
 **distribution_group** | [**\ZeC128\AppCenter\AppCenterApi\DistributionGroup**](../Model/DistributionGroup.md)| The attributes to update for the distribution group |

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **distributionGroupsRemoveUser**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20063[] distributionGroupsRemoveUser($owner_name, $app_name, $distribution_group_name, $members)



Remove the users from the distribution group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$distribution_group_name = "distribution_group_name_example"; // string | The name of the distribution group
$members = new \ZeC128\AppCenter\AppCenterApi\Members3(); // \ZeC128\AppCenter\AppCenterApi\Members3 | The list of members to add

try {
    $result = $apiInstance->distributionGroupsRemoveUser($owner_name, $app_name, $distribution_group_name, $members);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->distributionGroupsRemoveUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **distribution_group_name** | **string**| The name of the distribution group |
 **members** | [**\ZeC128\AppCenter\AppCenterApi\Members3**](../Model/Members3.md)| The list of members to add |

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20063[]**](../Model/InlineResponse20063.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **distributionGroupsResendInvite**
> distributionGroupsResendInvite($owner_name, $app_name, $distribution_group_name, $members)



Resend distribution group app invite notification to previously invited testers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$distribution_group_name = "distribution_group_name_example"; // string | The name of the distribution group
$members = new \ZeC128\AppCenter\AppCenterApi\Members2(); // \ZeC128\AppCenter\AppCenterApi\Members2 | The list of members to add

try {
    $apiInstance->distributionGroupsResendInvite($owner_name, $app_name, $distribution_group_name, $members);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->distributionGroupsResendInvite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **distribution_group_name** | **string**| The name of the distribution group |
 **members** | [**\ZeC128\AppCenter\AppCenterApi\Members2**](../Model/Members2.md)| The list of members to add |

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **distributionGroupsResendSharedInvite**
> distributionGroupsResendSharedInvite($org_name, $distribution_group_name, $members)



Resend shared distribution group invite notification to previously invited testers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name
$distribution_group_name = "distribution_group_name_example"; // string | The name of the distribution group
$members = new \ZeC128\AppCenter\AppCenterApi\Members(); // \ZeC128\AppCenter\AppCenterApi\Members | The list of members to add

try {
    $apiInstance->distributionGroupsResendSharedInvite($org_name, $distribution_group_name, $members);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->distributionGroupsResendSharedInvite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |
 **distribution_group_name** | **string**| The name of the distribution group |
 **members** | [**\ZeC128\AppCenter\AppCenterApi\Members**](../Model/Members.md)| The list of members to add |

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **distributionGroupsUpdate**
> object distributionGroupsUpdate($owner_name, $app_name, $distribution_group_name, $distribution_group)



Updates the attributes of distribution group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application
$distribution_group_name = "distribution_group_name_example"; // string | The name of the distribution group
$distribution_group = new \ZeC128\AppCenter\AppCenterApi\DistributionGroup2(); // \ZeC128\AppCenter\AppCenterApi\DistributionGroup2 | The attributes to update for the distribution group

try {
    $result = $apiInstance->distributionGroupsUpdate($owner_name, $app_name, $distribution_group_name, $distribution_group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->distributionGroupsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |
 **distribution_group_name** | **string**| The name of the distribution group |
 **distribution_group** | [**\ZeC128\AppCenter\AppCenterApi\DistributionGroup2**](../Model/DistributionGroup2.md)| The attributes to update for the distribution group |

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invitationsSent**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20015[] invitationsSent()



Returns all invitations sent by the caller

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->invitationsSent();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->invitationsSent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20015[]**](../Model/InlineResponse20015.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orgInvitations**
> orgInvitations($org_name, $email)



Removes a user's invitation to an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name
$email = "email_example"; // string | The email address of the user to send the password reset mail to.

try {
    $apiInstance->orgInvitations($org_name, $email);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->orgInvitations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |
 **email** | **string**| The email address of the user to send the password reset mail to. |

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orgInvitationsAccept**
> orgInvitationsAccept($invitation_token)



Accepts a pending organization invitation for the specified user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invitation_token = "invitation_token_example"; // string | The app invitation token that was sent to the user

try {
    $apiInstance->orgInvitationsAccept($invitation_token);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->orgInvitationsAccept: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invitation_token** | **string**| The app invitation token that was sent to the user |

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orgInvitationsCreate**
> orgInvitationsCreate($org_name, $user_email)



Invites a new or existing user to an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name
$user_email = new \ZeC128\AppCenter\AppCenterApi\UserEmail1(); // \ZeC128\AppCenter\AppCenterApi\UserEmail1 | The email of the user to invite

try {
    $apiInstance->orgInvitationsCreate($org_name, $user_email);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->orgInvitationsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |
 **user_email** | [**\ZeC128\AppCenter\AppCenterApi\UserEmail1**](../Model/UserEmail1.md)| The email of the user to invite | [optional]

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orgInvitationsDelete**
> orgInvitationsDelete($org_name, $user_email)



Removes a user's invitation to an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name
$user_email = new \ZeC128\AppCenter\AppCenterApi\UserEmail2(); // \ZeC128\AppCenter\AppCenterApi\UserEmail2 | The email of the user whose invitation should be removed

try {
    $apiInstance->orgInvitationsDelete($org_name, $user_email);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->orgInvitationsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |
 **user_email** | [**\ZeC128\AppCenter\AppCenterApi\UserEmail2**](../Model/UserEmail2.md)| The email of the user whose invitation should be removed | [optional]

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orgInvitationsListPending**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse2009[] orgInvitationsListPending($org_name)



Gets the pending invitations for the organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name

try {
    $result = $apiInstance->orgInvitationsListPending($org_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->orgInvitationsListPending: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse2009[]**](../Model/InlineResponse2009.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orgInvitationsReject**
> orgInvitationsReject($invitation_token)



Rejects a pending organization invitation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invitation_token = "invitation_token_example"; // string | The app invitation token that was sent to the user

try {
    $apiInstance->orgInvitationsReject($invitation_token);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->orgInvitationsReject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invitation_token** | **string**| The app invitation token that was sent to the user |

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orgInvitationsSendNewInvitation**
> orgInvitationsSendNewInvitation($org_name, $email, $role)



Cancels an existing organization invitation for the user and sends a new one

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name
$email = "email_example"; // string | The email address of the user to send the password reset mail to.
$role = new \ZeC128\AppCenter\AppCenterApi\Role(); // \ZeC128\AppCenter\AppCenterApi\Role | The role of the user to be added

try {
    $apiInstance->orgInvitationsSendNewInvitation($org_name, $email, $role);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->orgInvitationsSendNewInvitation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |
 **email** | **string**| The email address of the user to send the password reset mail to. |
 **role** | [**\ZeC128\AppCenter\AppCenterApi\Role**](../Model/Role.md)| The role of the user to be added | [optional]

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orgInvitationsUpdate**
> orgInvitationsUpdate($org_name, $email, $user_role)



Allows the role of an invited user to be changed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name
$email = "email_example"; // string | The email address of the user to send the password reset mail to.
$user_role = new \ZeC128\AppCenter\AppCenterApi\UserRole(); // \ZeC128\AppCenter\AppCenterApi\UserRole | The new role of the user

try {
    $apiInstance->orgInvitationsUpdate($org_name, $email, $user_role);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->orgInvitationsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |
 **email** | **string**| The email address of the user to send the password reset mail to. |
 **user_role** | [**\ZeC128\AppCenter\AppCenterApi\UserRole**](../Model/UserRole.md)| The new role of the user |

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **organizationDeleteAvatar**
> object organizationDeleteAvatar($org_name)



Deletes the uploaded organization avatar

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name

try {
    $result = $apiInstance->organizationDeleteAvatar($org_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->organizationDeleteAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **organizationUpdateAvatar**
> object organizationUpdateAvatar($org_name, $avatar)



Sets the organization avatar

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name
$avatar = "/path/to/file.txt"; // \SplFileObject | The image for an Organization avatar to upload.

try {
    $result = $apiInstance->organizationUpdateAvatar($org_name, $avatar);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->organizationUpdateAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |
 **avatar** | **\SplFileObject**| The image for an Organization avatar to upload. | [optional]

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **organizationsCreateOrUpdate**
> object organizationsCreateOrUpdate($organization)



Creates a new organization and returns it to the caller

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = new \ZeC128\AppCenter\AppCenterApi\Organization(); // \ZeC128\AppCenter\AppCenterApi\Organization | The organization data

try {
    $result = $apiInstance->organizationsCreateOrUpdate($organization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->organizationsCreateOrUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | [**\ZeC128\AppCenter\AppCenterApi\Organization**](../Model/Organization.md)| The organization data |

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **organizationsDelete**
> organizationsDelete($org_name)



Deletes a single organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name

try {
    $apiInstance->organizationsDelete($org_name);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->organizationsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **organizationsGet**
> object organizationsGet($org_name)



Returns the details of a single organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name

try {
    $result = $apiInstance->organizationsGet($org_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->organizationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **organizationsList**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20014[] organizationsList()



Returns a list of organizations the requesting user has access to

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->organizationsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->organizationsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20014[]**](../Model/InlineResponse20014.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **organizationsListAdministered**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20099 organizationsListAdministered()



Returns a list organizations in which the requesting user is an admin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->organizationsListAdministered();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->organizationsListAdministered: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20099**](../Model/InlineResponse20099.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **organizationsUpdate**
> object organizationsUpdate($org_name, $org)



Returns a list of organizations the requesting user has access to

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name
$org = new \ZeC128\AppCenter\AppCenterApi\Org(); // \ZeC128\AppCenter\AppCenterApi\Org | The data for the org

try {
    $result = $apiInstance->organizationsUpdate($org_name, $org);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->organizationsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |
 **org** | [**\ZeC128\AppCenter\AppCenterApi\Org**](../Model/Org.md)| The data for the org |

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sharedconnectionConnections**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse2001[] sharedconnectionConnections()



Gets all service connections of the service type for GDPR export.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->sharedconnectionConnections();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->sharedconnectionConnections: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse2001[]**](../Model/InlineResponse2001.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsAddApp**
> object teamsAddApp($org_name, $team_name, $app)



Adds an app to a team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name
$team_name = "team_name_example"; // string | The team's name
$app = new \ZeC128\AppCenter\AppCenterApi\App(); // \ZeC128\AppCenter\AppCenterApi\App | The name of the app to be added to the team. The app has to be owned by the organization.

try {
    $result = $apiInstance->teamsAddApp($org_name, $team_name, $app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->teamsAddApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |
 **team_name** | **string**| The team&#39;s name |
 **app** | [**\ZeC128\AppCenter\AppCenterApi\App**](../Model/App.md)| The name of the app to be added to the team. The app has to be owned by the organization. |

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsAddUser**
> object teamsAddUser($org_name, $team_name, $user_email)



Adds a new user to a team that is owned by an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name
$team_name = "team_name_example"; // string | The team's name
$user_email = new \ZeC128\AppCenter\AppCenterApi\UserEmail(); // \ZeC128\AppCenter\AppCenterApi\UserEmail | The email of the user to add to the team

try {
    $result = $apiInstance->teamsAddUser($org_name, $team_name, $user_email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->teamsAddUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |
 **team_name** | **string**| The team&#39;s name |
 **user_email** | [**\ZeC128\AppCenter\AppCenterApi\UserEmail**](../Model/UserEmail.md)| The email of the user to add to the team | [optional]

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsCreateTeam**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse2008[] teamsCreateTeam($org_name, $team)



Creates a team and returns it

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name
$team = new \ZeC128\AppCenter\AppCenterApi\Team2(); // \ZeC128\AppCenter\AppCenterApi\Team2 | The information used to create the team

try {
    $result = $apiInstance->teamsCreateTeam($org_name, $team);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->teamsCreateTeam: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |
 **team** | [**\ZeC128\AppCenter\AppCenterApi\Team2**](../Model/Team2.md)| The information used to create the team | [optional]

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse2008[]**](../Model/InlineResponse2008.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsDelete**
> teamsDelete($org_name, $team_name)



Deletes a single team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name
$team_name = "team_name_example"; // string | The team's name

try {
    $apiInstance->teamsDelete($org_name, $team_name);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->teamsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |
 **team_name** | **string**| The team&#39;s name |

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsGetTeam**
> object teamsGetTeam($org_name, $team_name)



Returns the details of a single team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name
$team_name = "team_name_example"; // string | The team's name

try {
    $result = $apiInstance->teamsGetTeam($org_name, $team_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->teamsGetTeam: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |
 **team_name** | **string**| The team&#39;s name |

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsGetUsers**
> object teamsGetUsers($org_name, $team_name)



Returns the users of a team which is owned by an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name
$team_name = "team_name_example"; // string | The team's name

try {
    $result = $apiInstance->teamsGetUsers($org_name, $team_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->teamsGetUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |
 **team_name** | **string**| The team&#39;s name |

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsListAll**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse2008[] teamsListAll($org_name)



Returns the list of all teams in this org

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name

try {
    $result = $apiInstance->teamsListAll($org_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->teamsListAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse2008[]**](../Model/InlineResponse2008.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsListApps**
> object[] teamsListApps($org_name, $team_name)



Returns the apps a team has access to

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name
$team_name = "team_name_example"; // string | The team's name

try {
    $result = $apiInstance->teamsListApps($org_name, $team_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->teamsListApps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |
 **team_name** | **string**| The team&#39;s name |

### Return type

**object[]**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsRemoveApp**
> teamsRemoveApp($org_name, $team_name, $app_name)



Removes an app from a team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name
$team_name = "team_name_example"; // string | The team's name
$app_name = "app_name_example"; // string | The name of the application

try {
    $apiInstance->teamsRemoveApp($org_name, $team_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->teamsRemoveApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |
 **team_name** | **string**| The team&#39;s name |
 **app_name** | **string**| The name of the application |

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsRemoveUser**
> teamsRemoveUser($org_name, $team_name, $user_name)



Removes a user from a team that is owned by an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name
$team_name = "team_name_example"; // string | The team's name
$user_name = "user_name_example"; // string | The slug name of the user

try {
    $apiInstance->teamsRemoveUser($org_name, $team_name, $user_name);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->teamsRemoveUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |
 **team_name** | **string**| The team&#39;s name |
 **user_name** | **string**| The slug name of the user |

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsUpdate**
> object teamsUpdate($org_name, $team_name, $team)



Updates a single team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name
$team_name = "team_name_example"; // string | The team's name
$team = new \ZeC128\AppCenter\AppCenterApi\Team1(); // \ZeC128\AppCenter\AppCenterApi\Team1 | The information used to update the team

try {
    $result = $apiInstance->teamsUpdate($org_name, $team_name, $team);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->teamsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |
 **team_name** | **string**| The team&#39;s name |
 **team** | [**\ZeC128\AppCenter\AppCenterApi\Team1**](../Model/Team1.md)| The information used to update the team | [optional]

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsUpdatePermissions**
> object teamsUpdatePermissions($org_name, $team_name, $app_name, $team)



Updates the permissions the team has to the app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name
$team_name = "team_name_example"; // string | The team's name
$app_name = "app_name_example"; // string | The name of the application
$team = new \ZeC128\AppCenter\AppCenterApi\Team(); // \ZeC128\AppCenter\AppCenterApi\Team | 

try {
    $result = $apiInstance->teamsUpdatePermissions($org_name, $team_name, $app_name, $team);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->teamsUpdatePermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |
 **team_name** | **string**| The team&#39;s name |
 **app_name** | **string**| The name of the application |
 **team** | [**\ZeC128\AppCenter\AppCenterApi\Team**](../Model/Team.md)|  | [optional]

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userApiTokensDelete**
> userApiTokensDelete($api_token_id)



Delete the user api_token object with the specific id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_token_id = "api_token_id_example"; // string | The unique ID (UUID) of the api token

try {
    $apiInstance->userApiTokensDelete($api_token_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->userApiTokensDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token_id** | **string**| The unique ID (UUID) of the api token |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userApiTokensList**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20078[] userApiTokensList()



Returns api tokens for the authenticated user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->userApiTokensList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->userApiTokensList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20078[]**](../Model/InlineResponse20078.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userApiTokensNew**
> object userApiTokensNew($description)



Creates a new User API token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Basic
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$description = new \ZeC128\AppCenter\AppCenterApi\Description1(); // \ZeC128\AppCenter\AppCenterApi\Description1 | Description of the token

try {
    $result = $apiInstance->userApiTokensNew($description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->userApiTokensNew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **description** | [**\ZeC128\AppCenter\AppCenterApi\Description1**](../Model/Description1.md)| Description of the token | [optional]

### Return type

**object**

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersGet**
> object usersGet()



Returns the user profile data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->usersGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->usersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersGetForOrg**
> object usersGetForOrg($org_name, $user_name)



Get a user information from an organization by name - if there is explicit permission return it, if not if not return highest implicit permission

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name
$user_name = "user_name_example"; // string | The slug name of the user

try {
    $result = $apiInstance->usersGetForOrg($org_name, $user_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->usersGetForOrg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |
 **user_name** | **string**| The slug name of the user |

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersGetUserMetadata**
> object usersGetUserMetadata()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->usersGetUserMetadata();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->usersGetUserMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersList**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse20020[] usersList($owner_name, $app_name)



Returns the users associated with the app specified with the given app name which belongs to the given owner.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_name = "owner_name_example"; // string | The name of the owner
$app_name = "app_name_example"; // string | The name of the application

try {
    $result = $apiInstance->usersList($owner_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->usersList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_name** | **string**| The name of the owner |
 **app_name** | **string**| The name of the application |

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse20020[]**](../Model/InlineResponse20020.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersListForOrg**
> \ZeC128\AppCenter\AppCenterApi\InlineResponse2006[] usersListForOrg($org_name)



Returns a list of users that belong to an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name

try {
    $result = $apiInstance->usersListForOrg($org_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->usersListForOrg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |

### Return type

[**\ZeC128\AppCenter\AppCenterApi\InlineResponse2006[]**](../Model/InlineResponse2006.md)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersRemoveFromOrg**
> usersRemoveFromOrg($org_name, $user_name)



Removes a user from an organization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name
$user_name = "user_name_example"; // string | The slug name of the user

try {
    $apiInstance->usersRemoveFromOrg($org_name, $user_name);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->usersRemoveFromOrg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |
 **user_name** | **string**| The slug name of the user |

### Return type

void (empty response body)

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersUpdate**
> object usersUpdate($user)



Updates the user profile and returns the updated user data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = new \ZeC128\AppCenter\AppCenterApi\User(); // \ZeC128\AppCenter\AppCenterApi\User | The data for the created user

try {
    $result = $apiInstance->usersUpdate($user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->usersUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | [**\ZeC128\AppCenter\AppCenterApi\User**](../Model/User.md)| The data for the created user |

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersUpdateOrgRole**
> object usersUpdateOrgRole($org_name, $user_name, $organization_user)



Updates the given organization user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIToken
$config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKey('X-API-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ZeC128\AppCenter\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Token', 'Bearer');

$apiInstance = new ZeC128\AppCenter\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = "org_name_example"; // string | The organization's name
$user_name = "user_name_example"; // string | The slug name of the user
$organization_user = new \ZeC128\AppCenter\AppCenterApi\OrganizationUser(); // \ZeC128\AppCenter\AppCenterApi\OrganizationUser | 

try {
    $result = $apiInstance->usersUpdateOrgRole($org_name, $user_name, $organization_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->usersUpdateOrgRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| The organization&#39;s name |
 **user_name** | **string**| The slug name of the user |
 **organization_user** | [**\ZeC128\AppCenter\AppCenterApi\OrganizationUser**](../Model/OrganizationUser.md)|  |

### Return type

**object**

### Authorization

[APIToken](../../README.md#APIToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

