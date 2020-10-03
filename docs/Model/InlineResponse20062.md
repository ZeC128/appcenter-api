# InlineResponse20062

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID identifying this unique release. | 
**version** | **string** | The release&#39;s version.&lt;br&gt; For iOS: CFBundleVersion from info.plist.&lt;br&gt; For Android: android:versionCode from AppManifest.xml. | 
**origin** | **string** | The release&#39;s origin | [optional] 
**short_version** | **string** | The release&#39;s short version.&lt;br&gt; For iOS: CFBundleShortVersionString from info.plist.&lt;br&gt; For Android: android:versionName from AppManifest.xml. | 
**mandatory_update** | **bool** | A boolean which determines whether the release is a mandatory update or not. | 
**uploaded_at** | **string** | UTC time in ISO 8601 format of the uploaded time. | 
**enabled** | **bool** | This value determines the whether a release currently is enabled or disabled. | 
**is_external_build** | **bool** | This value determines if a release is external or not. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


