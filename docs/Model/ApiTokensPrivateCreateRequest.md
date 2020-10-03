# ApiTokensPrivateCreateRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**principal_id** | **string** | The principal ID assigned to the API token | 
**principal_type** | **string** | The principal type assigned to the API token | 
**description** | **string** | The description of the token | [optional] 
**scope** | **string[]** | The scope for this token (default \&quot;all\&quot;). | [optional] 
**token_type** | **string** | The token&#39;s type (default \&quot;public\&quot;)   public: managed by the user   in_app_update: special token for in-app update scenario   buid: dedicated for CI usage for now   session: for CLI session management   tester_app: used for tester mobile app | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


