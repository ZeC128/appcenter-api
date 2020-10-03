# ExportConfigurationResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Export configuration id | 
**export_type** | **string** | Target resource type of export configuration | 
**creation_time** | **string** | Creation time in ISO 8601 format | 
**last_run_time** | **string** | Latest time in ISO 8601 format when export completed successfully | [optional] 
**export_entities** | **string[]** |  | [optional] 
**state** | **string** | State of the export job | 
**state_info** | **string** | Additional information about export configuration state | [optional] 
**resource_group** | **string** | resource group for the storage account/App Insights resource | [optional] 
**resource_name** | **string** | Storage accout or Appinsights resource name | [optional] 
**export_configuration** | [**\Swagger\Client\Model\InlineResponse20039ExportConfiguration**](InlineResponse20039ExportConfiguration.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


