# ReleaseCreateRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**version** | **string** | The release&#39;s version.&lt;br&gt; For iOS: CFBundleVersion from info.plist.&lt;br&gt; For Android: android:versionCode from AppManifest.xml. | [optional] 
**build_version** | **string** | The release&#39;s short version.&lt;br&gt; For iOS: CFBundleShortVersionString from info.plist.&lt;br&gt; For Android: android:versionName from AppManifest.xml. | [optional] 
**unique_identifier** | **string** | The identifier of the app&#39;s bundle. | [optional] 
**minimum_os_version** | **string** | The release&#39;s minimum required operating system. | [optional] 
**device_family** | **string** | The release&#39;s device family. | [optional] 
**languages** | **string[]** | The languages supported by the release. Limited to 510 characters in a serialized array. | [optional] 
**fingerprint** | **string** | MD5 checksum of the release binary. | 
**size** | **int** | The release&#39;s size in bytes. | 
**package_url** | **string** | The URL to the release&#39;s binary. | [optional] 
**file_extension** | **string** | The file extension of the asset. Does not include the initial period. | [optional] 
**upload_id** | **string** | The upload id associated with the release, to map to the releases upload table. | 
**icon_asset_id** | **string** | The assetId associated with the icon uploaded to app center file upload service. | [optional] 
**ipa_uuids** | [**\ZeC128\AppCenter\AppCenterApi\ReleaseCreateRequestIpaUuids[]**](ReleaseCreateRequestIpaUuids.md) | A list of UUIDs for architectures for an iOS app. | [optional] 
**provision** | [**\ZeC128\AppCenter\AppCenterApi\ReleaseCreateRequestProvision**](ReleaseCreateRequestProvision.md) |  | [optional] 
**appex_provisioning_profiles** | [**\ZeC128\AppCenter\AppCenterApi\ReleaseCreateRequestProvision[]**](ReleaseCreateRequestProvision.md) | iOS app extension provisioning profiles included in the release. | [optional] 
**proxy_flow** | **bool** | If true this release was uploaded to the AKS upload proxy | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


