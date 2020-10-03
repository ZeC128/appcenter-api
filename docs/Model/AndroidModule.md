# AndroidModule

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the Android module | 
**has_bundle** | **bool** | Module contains bundle settings | [optional] 
**product_flavors** | **string[]** | The product flavors of the Android module | [optional] 
**build_variants** | **string[]** | The detected build variants of the Android module (matrix of product flavor + build type (debug|release)) | [optional] 
**build_types** | **string[]** | The detected build types of the Android module | [optional] 
**build_configurations** | [**\Swagger\Client\Model\AndroidProjectBuildConfigurations[]**](AndroidProjectBuildConfigurations.md) | The detected build configurations of the Android module | [optional] 
**is_root** | **bool** | Whether the module is at the root level of the project | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


