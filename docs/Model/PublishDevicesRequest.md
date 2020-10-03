# PublishDevicesRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**username** | **string** | The username for the Apple Developer account to publish the devices to. | [optional] 
**password** | **string** | The password for the Apple Developer account to publish the devices to. | [optional] 
**account_service_connection_id** | **string** | The service_connection_id of the stored Apple credentials instead of username, password. | [optional] 
**publish_all_devices** | **bool** | When set to true, all unprovisioned devices will be published to the Apple Developer account.  When false, only the provided devices will be published to the Apple Developer account. | [optional] 
**devices** | **string[]** | Array of device UDID&#39;s to be published to the Apple Developer account. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


