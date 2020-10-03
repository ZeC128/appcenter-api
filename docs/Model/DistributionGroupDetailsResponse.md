# DistributionGroupDetailsResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_shared** | **bool** | Whether the distribution group is shared group or not | [optional] 
**total_apps_count** | **float** | The count of apps associated with this distribution group | [optional] 
**total_user_count** | **float** | The count of users in the distribution group | [optional] 
**notified_user_count** | **float** | The count of non-pending users in the distribution group who will be notified by new releases | [optional] 
**group_type** | **string** | Type of group (Default, HockeyAppDefault or MicrosoftDogfooding) | [optional] 
**users** | [**\Swagger\Client\Model\InlineResponse20010[]**](InlineResponse20010.md) | The distribution group users | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


