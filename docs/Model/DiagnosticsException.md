# DiagnosticsException

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reason** | **string** | Reason of the exception | [optional] 
**type** | **string** | Type of the exception (NSSomethingException, NullPointerException) | [optional] 
**frames** | [**\Swagger\Client\Model\ExceptionFrames[]**](ExceptionFrames.md) | frames of the excetpion | 
**relevant** | **bool** | relevant exception (crashed) | [optional] 
**inner_exceptions** | [**\Swagger\Client\Model\DiagnosticsException[]**](DiagnosticsException.md) |  | [optional] 
**platform** | **string** | SDK/Platform this thread is beeing generated from | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


