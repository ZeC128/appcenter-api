# ApiTokensPostRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The description of the token | [optional] 
**encrypted_token** | **string** | An encrypted value of the token. | [optional] 
**scope** | **string[]** | The scope for this token. An array of supported roles. | [optional] 
**token_hash** | **string** | The hashed value of api token | [optional] 
**token_type** | **string** | The token&#39;s type. public:managed by the user; in_app_update:special token for in-app update scenario; buid:dedicated for CI usage for now; session:for CLI session management; tester_app: used for tester mobile app; default is \&quot;public\&quot;.&#39; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


