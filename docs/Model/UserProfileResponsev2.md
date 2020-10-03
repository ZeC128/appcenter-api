# UserProfileResponsev2

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique id (UUID) of the user | 
**avatar_url** | **string** | The avatar URL of the user | [optional] 
**can_change_password** | **bool** | User is required to send an old password in order to change the password. | [optional] 
**display_name** | **string** | The full name of the user. Might for example be first and last name | 
**email** | **string** | The email address of the user | 
**name** | **string** | The unique name that is used to identify the user. | 
**created_at** | **string** | The created date of the user | [optional] 
**next_nps_survey_date** | **string** | The date in the future when the user should be checked again for NPS eligibility | [optional] 
**origin** | **string** | The creation origin of this user | 
**feature_flags** | **string[]** | The feature flags that are enabled for this user | [optional] 
**admin_role** | **string** | The new admin_role | [optional] 
**settings** | **object** | The user&#39;s settings | [optional] 
**session_hash** | **string** | The session hash of the user | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


