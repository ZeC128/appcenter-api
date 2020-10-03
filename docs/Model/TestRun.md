# TestRun

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique id of the test upload | [optional] 
**date** | **string** | The date and time the test was uploaded | [optional] 
**app_version** | **string** | The compiled version of the app binary | [optional] 
**test_series** | **string** | The name of the test series with which this test upload is associated | [optional] 
**platform** | **string** | The device platform targeted by the test. Possible values are &#39;ios&#39; or &#39;android&#39; | [optional] 
**run_status** | **string** | The current status of the test run, in relation to the various phases | [optional] 
**result_status** | **string** | The passed/failed state | [optional] 
**state** | **string** | Deprecated. Use runStatus instead. | [optional] 
**status** | **string** | Deprecated. Use resultStatus instead. | [optional] 
**description** | **string** | Human readable explanation of the current test status | [optional] 
**stats** | [**\Swagger\Client\Model\TestRunStatistics**](TestRunStatistics.md) |  | [optional] 
**test_type** | **string** | The name of the test framework used to run this test | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


