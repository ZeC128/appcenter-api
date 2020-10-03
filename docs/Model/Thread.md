# Thread

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | name of the thread | 
**frames** | [**\Swagger\Client\Model\ExceptionFrames[]**](ExceptionFrames.md) | frames of that thread | 
**exception** | [**\Swagger\Client\Model\Exception**](Exception.md) | potential additional exception happened in that thread (Last Exception Backtrace) | [optional] 
**relevant** | **bool** | Shows if a thread is relevant or not. Is false if all frames are non relevant, otherwise true | [optional] 
**platform** | **string** | SDK/Platform this thread is beeing generated from | [optional] 
**crashed** | **bool** | True if this thread crashed | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


