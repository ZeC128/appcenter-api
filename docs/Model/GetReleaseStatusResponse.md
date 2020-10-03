# GetReleaseStatusResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID for the upload. | 
**upload_status** | **string** | The current upload status. | 
**error_details** | **string** | Details describing what went wrong processing the upload. Will only be set if status &#x3D; &#39;error&#39;. | [optional] 
**release_distinct_id** | **float** | The distinct ID of the release. Will only be set when the status &#x3D; &#39;readyToBePublished&#39;. | [optional] 
**release_url** | **object** | The URL of the release. Will only be set when the status &#x3D; &#39;readyToBePublished&#39;. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


