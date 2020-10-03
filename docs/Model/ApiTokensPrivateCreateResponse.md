# ApiTokensPrivateCreateResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique id (UUID) of the api token | 
**created_at** | **string** | The creation time | 
**scope** | **string[]** | The scope for this token. | [optional] 
**encrypted_token** | **string** | The encrypted value of a token. This value will only be returned for token of type in_app_update. | [optional] 
**description** | **string** | The description of the token | [optional] 
**api_token** | **string** | The api token generated will not be accessible again | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


