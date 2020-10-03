# V01appsownerNameappNamebranchesbranchconfigToolsetsXamarin

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sln_path** | **string** |  | [optional] 
**is_sim_build** | **bool** |  | [optional] 
**args** | **string** |  | [optional] 
**configuration** | **string** |  | [optional] 
**p12_file** | **string** |  | [optional] 
**p12_pwd** | **string** |  | [optional] 
**prov_profile** | **string** |  | [optional] 
**mono_version** | **string** |  | [optional] 
**sdk_bundle** | **string** |  | [optional] 
**symlink** | **string** | Symlink of the SDK Bundle and Mono installation. The build will use the associated Mono bundled with related Xamarin SDK. If both symlink and monoVersion or sdkBundle are passed, the symlink is taking precedence. If non-existing symlink is passed, the current stable Mono version will be configured for building. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


