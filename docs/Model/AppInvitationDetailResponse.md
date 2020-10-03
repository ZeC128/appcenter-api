# AppInvitationDetailResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique ID (UUID) of the invitation | 
**app** | [**\Swagger\Client\Model\V01testerappsRelease**](V01testerappsRelease.md) |  | 
**email** | **string** | The email address of the invited user | 
**invite_type** | **string** | The invitation type | 
**invited_by** | [**\Swagger\Client\Model\InlineResponse20020**](InlineResponse20020.md) |  | 
**is_existing_user** | **bool** | Indicates whether the invited user already exists | 
**permissions** | **string[]** | The permissions the user has for the app | [optional] 
**app_count** | **float** | The number of apps in the group | [optional] 
**distribution_group** | [**\Swagger\Client\Model\AppInvitationDetailResponseDistributionGroup**](AppInvitationDetailResponseDistributionGroup.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


