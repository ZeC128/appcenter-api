# UploadedRelease

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**release_upload** | [**\ZeC128\AppCenter\AppCenterApi\V01appsownerNameappNamedeploymentsdeploymentNamereleasesReleaseUpload**](V01appsownerNameappNamedeploymentsdeploymentNamereleasesReleaseUpload.md) |  | 
**target_binary_version** | **string** | the binary version of the application | 
**deployment_name** | **string** | This specifies which deployment you want to release the update to. Default is Staging. | [optional] 
**description** | **string** | This provides an optional \&quot;change log\&quot; for the deployment. | [optional] 
**disabled** | **bool** | This specifies whether an update should be downloadable by end users or not. | [optional] 
**mandatory** | **bool** | This specifies whether the update should be considered mandatory or not (e.g. it includes a critical security fix). | [optional] 
**no_duplicate_release_error** | **bool** | This specifies that if the update is identical to the latest release on the deployment, the CLI should generate a warning instead of an error. | [optional] 
**rollout** | **int** | This specifies the percentage of users (as an integer between 1 and 100) that should be eligible to receive this update. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


