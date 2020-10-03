# V01appsownerNameappNamebranchesbranchconfigToolsetsXcode

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**project_or_workspace_path** | **string** | Xcode project/workspace path | [optional] 
**podfile_path** | **string** | Path to CococaPods file, if present | [optional] 
**cartfile_path** | **string** | Path to Carthage file, if present | [optional] 
**provisioning_profile_encoded** | **string** |  | [optional] 
**certificate_encoded** | **string** |  | [optional] 
**provisioning_profile_file_id** | **string** |  | [optional] 
**certificate_file_id** | **string** |  | [optional] 
**provisioning_profile_upload_id** | **string** |  | [optional] 
**app_extension_provisioning_profile_files** | [**\ZeC128\AppCenter\AppCenterApi\V01appsownerNameappNamebranchesbranchconfigToolsetsXcodeAppExtensionProvisioningProfileFiles[]**](V01appsownerNameappNamebranchesbranchconfigToolsetsXcodeAppExtensionProvisioningProfileFiles.md) |  | [optional] 
**certificate_upload_id** | **string** |  | [optional] 
**certificate_password** | **string** |  | [optional] 
**scheme** | **string** |  | [optional] 
**xcode_version** | **string** | Xcode version used to build. Available versions can be found in \&quot;/xcode_versions\&quot; API. Default is latest stable version, at the time when the configuration is set. | [optional] 
**provisioning_profile_filename** | **string** |  | [optional] 
**certificate_filename** | **string** |  | [optional] 
**team_id** | **string** |  | [optional] 
**automatic_signing** | **bool** |  | [optional] 
**xcode_project_sha** | **string** | The selected pbxproject hash to the repositroy | [optional] 
**archive_configuration** | **string** | The build configuration of the target to archive | [optional] 
**target_to_archive** | **string** | The target id of the selected scheme to archive | [optional] 
**force_legacy_build_system** | **bool** | Setting this to true forces the build to use Xcode legacy build system. Otherwise, the setting from workspace settings is used. By default new build system is used if workspace setting is not committed to the repository. Only used for iOS React Native app, with Xcode 10. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


