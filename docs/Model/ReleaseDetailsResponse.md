# ReleaseDetailsResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID identifying this unique release. | 
**app_name** | **string** | The app&#39;s name (extracted from the uploaded release). | 
**app_display_name** | **string** | The app&#39;s display name. | 
**app_os** | **string** | The app&#39;s OS. | [optional] 
**version** | **string** | The release&#39;s version.&lt;br&gt; For iOS: CFBundleVersion from info.plist. For Android: android:versionCode from AppManifest.xml. | 
**origin** | **string** | The release&#39;s origin | [optional] 
**short_version** | **string** | The release&#39;s short version.&lt;br&gt; For iOS: CFBundleShortVersionString from info.plist. For Android: android:versionName from AppManifest.xml. | 
**release_notes** | **string** | The release&#39;s release notes. | [optional] 
**provisioning_profile_name** | **string** | The release&#39;s provisioning profile name. | [optional] 
**provisioning_profile_type** | **string** | The type of the provisioning profile for the requested app version. | [optional] 
**provisioning_profile_expiry_date** | **string** | expiration date of provisioning profile in UTC format. | [optional] 
**is_provisioning_profile_syncing** | **bool** | A flag that determines whether the release&#39;s provisioning profile is still extracted or not. | [optional] 
**size** | **int** | The release&#39;s size in bytes. | [optional] 
**min_os** | **string** | The release&#39;s minimum required operating system. | [optional] 
**device_family** | **string** | The release&#39;s device family. | [optional] 
**android_min_api_level** | **string** | The release&#39;s minimum required Android API level. | [optional] 
**bundle_identifier** | **string** | The identifier of the apps bundle. | [optional] 
**package_hashes** | **string[]** | Hashes for the packages. | [optional] 
**fingerprint** | **string** | MD5 checksum of the release binary. | [optional] 
**uploaded_at** | **string** | UTC time in ISO 8601 format of the uploaded time. | 
**download_url** | **string** | The URL that hosts the binary for this release. | [optional] 
**app_icon_url** | **string** | A URL to the app&#39;s icon. | 
**install_url** | **string** | The href required to install a release on a mobile device. On iOS devices will be prefixed with &#x60;itms-services://?action&#x3D;download-manifest&amp;url&#x3D;&#x60; | [optional] 
**destination_type** | **string** | OBSOLETE. Will be removed in next version. The destination type.&lt;br&gt; &lt;b&gt;group&lt;/b&gt;: The release distributed to internal groups and distribution_groups details will be returned.&lt;br&gt; &lt;b&gt;store&lt;/b&gt;: The release distributed to external stores and distribution_stores details will be returned.&lt;br&gt; &lt;b&gt;tester&lt;/b&gt;: The release distributed testers details will be returned.&lt;br&gt; | [optional] 
**distribution_groups** | [**\ZeC128\AppCenter\AppCenterApi\ReleaseDetailsResponseDistributionGroups[]**](ReleaseDetailsResponseDistributionGroups.md) | OBSOLETE. Will be removed in next version. A list of distribution groups that are associated with this release. | [optional] 
**distribution_stores** | [**\ZeC128\AppCenter\AppCenterApi\ReleaseDetailsResponseDistributionStores[]**](ReleaseDetailsResponseDistributionStores.md) | OBSOLETE. Will be removed in next version. A list of distribution stores that are associated with this release. | [optional] 
**destinations** | **object[]** | A list of distribution groups or stores. | [optional] 
**is_udid_provisioned** | **bool** | In calls that allow passing &#x60;udid&#x60; in the query string, this value will hold the provisioning status of that UDID in this release. Will be ignored for non-iOS platforms. | [optional] 
**can_resign** | **bool** | In calls that allow passing &#x60;udid&#x60; in the query string, this value determines if a release can be re-signed. When true, after a re-sign, the tester will be able to install the release from his registered devices. Will not be returned for non-iOS platforms. | [optional] 
**build** | [**\ZeC128\AppCenter\AppCenterApi\V01appsownerNameappNamereleasesreleaseIdBuild**](V01appsownerNameappNamereleasesreleaseIdBuild.md) |  | [optional] 
**enabled** | **bool** | This value determines the whether a release currently is enabled or disabled. | 
**status** | **string** | Status of the release. | [optional] 
**is_external_build** | **bool** | This value determines if a release is external or not. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


