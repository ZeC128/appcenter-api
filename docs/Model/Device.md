# Device

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sdk_name** | **string** | Name of the SDK. Consists of the name of the SDK and the platform, e.g. \&quot;appcenter.ios\&quot;, \&quot;hockeysdk.android\&quot;. | 
**sdk_version** | **string** | Version of the SDK in semver format, e.g. \&quot;1.2.0\&quot; or \&quot;0.12.3-alpha.1\&quot;. | 
**wrapper_sdk_version** | **string** | Version of the wrapper SDK in semver format. When the SDK is embedding another base SDK (for example Xamarin.Android wraps Android), the Xamarin specific version is populated into this field while sdkVersion refers to the original Android SDK. | [optional] 
**wrapper_sdk_name** | **string** | Name of the wrapper SDK. Consists of the name of the SDK and the wrapper platform, e.g. \&quot;appcenter.xamarin\&quot;, \&quot;hockeysdk.cordova\&quot;. | [optional] 
**model** | **string** | Device model (example: iPad2,3). | [optional] 
**oem_name** | **string** | Device manufacturer (example: HTC). | [optional] 
**os_name** | **string** | OS name (example: iOS). The following OS names are standardized (non-exclusive): Android, iOS, macOS, tvOS, Windows. | 
**os_version** | **string** | OS version (example: 9.3.0). | 
**os_build** | **string** | OS build code (example: LMY47X). | [optional] 
**os_api_level** | **int** | API level when applicable like in Android (example: 15). | [optional] 
**locale** | **string** | Language code (example: en_US). | 
**time_zone_offset** | **int** | The offset in minutes from UTC for the device time zone, including daylight savings time. | 
**screen_size** | **string** | Screen size of the device in pixels (example: 640x480). | [optional] 
**app_version** | **string** | Application version name, e.g. 1.1.0 | 
**carrier_name** | **string** | Carrier name (for mobile devices). | [optional] 
**carrier_code** | **string** | Carrier country code (for mobile devices). | [optional] 
**carrier_country** | **string** | Carrier country. | [optional] 
**app_build** | **string** | The app&#39;s build number, e.g. 42. | 
**app_namespace** | **string** | The bundle identifier, package identifier, or namespace, depending on what the individual plattforms use,  .e.g com.microsoft.example. | [optional] 
**live_update_release_label** | **string** | Label that is used to identify application code &#39;version&#39; released via Live Update beacon running on device | [optional] 
**live_update_deployment_key** | **string** | Identifier of environment that current application release belongs to, deployment key then maps to environment like Production, Staging. | [optional] 
**live_update_package_hash** | **string** | Hash of all files (ReactNative or Cordova) deployed to device via LiveUpdate beacon. Helps identify the Release version on device or need to download updates in future. | [optional] 
**wrapper_runtime_version** | **string** | Version of the wrapper technology framework (Xamarin runtime version or ReactNative or Cordova etc...). See wrapper_sdk_name to see if this version refers to Xamarin or ReactNative or other. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


