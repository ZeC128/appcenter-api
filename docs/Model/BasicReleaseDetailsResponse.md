# BasicReleaseDetailsResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID identifying this unique release. | 
**version** | **string** | The release&#39;s version.&lt;br&gt; For iOS: CFBundleVersion from info.plist.&lt;br&gt; For Android: android:versionCode from AppManifest.xml. | 
**origin** | **string** | The release&#39;s origin | [optional] 
**short_version** | **string** | The release&#39;s short version.&lt;br&gt; For iOS: CFBundleShortVersionString from info.plist.&lt;br&gt; For Android: android:versionName from AppManifest.xml. | 
**enabled** | **bool** | This value determines the whether a release currently is enabled or disabled. | 
**uploaded_at** | **string** | UTC time in ISO 8601 format of the uploaded time. | 
**destination_type** | **string** | OBSOLETE. Will be removed in next version. The destination type.&lt;br&gt; &lt;b&gt;group&lt;/b&gt;: The release distributed to internal groups and distribution_groups details will be returned.&lt;br&gt; &lt;b&gt;store&lt;/b&gt;: The release distributed to external stores and distribution_stores details will be returned. &lt;br&gt; | [optional] 
**distribution_groups** | **object[]** | OBSOLETE. Will be removed in next version. A list of distribution groups that are associated with this release. | [optional] 
**distribution_stores** | **object[]** | OBSOLETE. Will be removed in next version. A list of distribution stores that are associated with this release. | [optional] 
**destinations** | **object[]** | A list of distribution groups or stores. | [optional] 
**build** | [**\Swagger\Client\Model\V01appsownerNameappNamereleasesfilterByTesterBuild**](V01appsownerNameappNamereleasesfilterByTesterBuild.md) |  | [optional] 
**is_external_build** | **bool** | This value determines if a release is external or not. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


