# PrivateBasicReleaseDetailsResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID identifying this unique release. | [optional] 
**version** | **string** | The release&#39;s version.&lt;br&gt; For iOS: CFBundleVersion from info.plist.&lt;br&gt; For Android: android:versionCode from AppManifest.xml. | [optional] 
**origin** | **string** | The release&#39;s origin | [optional] 
**short_version** | **string** | The release&#39;s short version.&lt;br&gt; For iOS: CFBundleShortVersionString from info.plist.&lt;br&gt; For Android: android:versionName from AppManifest.xml. | [optional] 
**uploaded_at** | **string** | UTC time in ISO 8601 format of the uploaded time. | [optional] 
**distribution_group_id** | **string** | the destination id of release where it is distributed. | [optional] 
**destination_type** | **string** | The destination type.&lt;br&gt; &lt;b&gt;group&lt;/b&gt;: The release distributed to internal groups and distribution_groups details will be returned.&lt;br&gt; &lt;b&gt;store&lt;/b&gt;: The release distributed to external stores and distribution_stores details will be returned. &lt;br&gt; | [optional] 
**is_latest** | **bool** | Indicates if this is the latest release in the group. | [optional] 
**mandatory_update** | **bool** | A boolean which determines whether the release is a mandatory update or not. | [optional] 
**publishing_status** | **string** | the publishing status of the distributed release | [optional] 
**is_external_build** | **bool** | This value determines if a release is external or not. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


