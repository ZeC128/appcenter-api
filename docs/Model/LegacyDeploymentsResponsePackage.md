# LegacyDeploymentsResponsePackage

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**app_version** | **string** | The version of the release | [optional] 
**is_disabled** | **bool** | Flag used to determine if release is disabled | [optional] 
**is_mandatory** | **bool** | Flag used to determine if release is mandatory | [optional] 
**rollout** | **int** | Percentage (out of 100) that release is deployed to | [optional] 
**blob_url** | **string** | Location (URL) of release package | [optional] 
**size** | **int** | Size of release package | [optional] 
**release_method** | **string** | Method used to deploy release | [optional] 
**upload_time** | **int** | Release upload time as epoch Unix timestamp | [optional] 
**label** | **string** | Release label (aka release name) | [optional] 
**released_by_user_id** | **string** | User ID that triggered most recent release | [optional] 
**manifest_blob_url** | **string** | The URL location of the package&#39;s manifest file. | [optional] 
**diff_package_map** | **object** | Object containing URL and size of changed package hashes contained in the release | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


