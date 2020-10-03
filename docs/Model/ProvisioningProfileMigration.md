# ProvisioningProfileMigration

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the provisioning profile. | 
**bundle_id** | **string** | The bundle/application identifier. | 
**team_identifier** | **string** | The team identifier. | 
**type** | **int** | The type of provisoning profile. | 
**is_appex** | **bool** | A boolean value that indicates whether the provisioning profile represents an app extension. | 
**expired_at** | [**\DateTime**](\DateTime.md) | The provisioning profile&#39;s expiration date in RFC 3339 format, i.e. 2017-07-21T17:32:28Z. | [optional] 
**udids** | **string[]** | A list of UDIDs of provisioned devices. | [optional] 
**url** | **string** | A provisioning profile URL that indicates where to download it from. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


