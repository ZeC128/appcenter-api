# ValidatedApiTokenResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**token_id** | **string** | The token&#39;s unique id (UUID) | 
**token_scope** | **string[]** | The token&#39;s scope. A list of allowed roles. | 
**principal_id** | **string** | The ID of the owner of the API Token (user_id or app_id) | 
**principal_type** | **string** | Indicates the type of the principal (app or user) | 
**claims** | [**\Swagger\Client\Model\ValidatedApiTokenResponseClaims[]**](ValidatedApiTokenResponseClaims.md) | Collection of attributes that describe the principal of the specified API Token | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


