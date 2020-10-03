# ManagementReleaseDetailsResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**distinct_id** | **int** | ID identifying this unique release. | [optional] 
**origin** | **string** | The release&#39;s origin | [optional] 
**version** | **string** | The release&#39;s short version.&lt;br&gt; For iOS: CFBundleShortVersionString from info.plist.&lt;br&gt; For Android: android:versionName from AppManifest.xml. | [optional] 
**build_version** | **string** | The release&#39;s buildVersion.&lt;br&gt; For iOS: CFBundleVersion from info.plist.&lt;br&gt; For Android: android:versionCode from AppManifest.xml. | [optional] 
**sort_version** | **string** | The release&#39;s sortVersion. | [optional] 
**created_at** | **string** | UTC time the release was created in ISO 8601 format. | [optional] 
**enabled** | **bool** | This value determines the whether a release currently is enabled or disabled. | [optional] 
**deleted_at** | **string** | UTC time the release was created in ISO 8601 format. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


