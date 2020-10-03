# InlineResponse20059

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **float** | ID identifying this unique release. | [optional] 
**status** | **string** | OBSOLETE. Will be removed in next version. The availability concept is now replaced with distributed. Any &#39;available&#39; release will be associated with the default distribution group of an app.&lt;/br&gt; The release state.&lt;br&gt; &lt;b&gt;available&lt;/b&gt;: The uploaded release has been distributed.&lt;br&gt; &lt;b&gt;unavailable&lt;/b&gt;: The uploaded release is not visible to the user. &lt;br&gt; | [optional] 
**app_name** | **string** | The app&#39;s name (extracted from the uploaded release). | [optional] 
**app_display_name** | **string** | The app&#39;s display name. | [optional] 
**version** | **string** | The release&#39;s version.&lt;br&gt; For iOS: CFBundleVersion from info.plist. For Android: android:versionCode from AppManifest.xml. | [optional] 
**short_version** | **string** | The release&#39;s short version.&lt;br&gt; For iOS: CFBundleShortVersionString from info.plist. For Android: android:versionName from AppManifest.xml. | [optional] 
**release_notes** | **string** | The release&#39;s release notes. | [optional] 
**size** | **float** | The release&#39;s size in bytes. | [optional] 
**min_os** | **string** | The release&#39;s minimum required operating system. | [optional] 
**android_min_api_level** | **string** | The release&#39;s minimum required Android API level. | [optional] 
**bundle_identifier** | **string** | The identifier of the apps bundle. | [optional] 
**fingerprint** | **string** | MD5 checksum of the release binary. | [optional] 
**uploaded_at** | **string** | UTC time in ISO 8601 format of the uploaded time. | [optional] 
**download_url** | **string** | The URL that hosts the binary for this release. | [optional] 
**install_url** | **string** | The href required to install a release on a mobile device. On iOS devices will be prefixed with &#x60;itms-services://?action&#x3D;download-manifest&amp;url&#x3D;&#x60; | [optional] 
**distribution_stores** | [**\ZeC128\AppCenter\AppCenterApi\V01appsownerNameappNamedistributionStoresstoreNamereleasesreleaseIdDistributionStores[]**](V01appsownerNameappNamedistributionStoresstoreNamereleasesreleaseIdDistributionStores.md) | a list of distribution stores that are associated with this release. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


