# MemberDevicesInfoResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique id (UUID) of the user | 
**avatar_url** | **string** | The avatar URL of the user | [optional] 
**can_change_password** | **bool** | User is required to send an old password in order to change the password. | [optional] 
**display_name** | **string** | The full name of the user. Might for example be first and last name | [optional] 
**email** | **string** | The email address of the user | 
**invite_pending** | **bool** | Whether the has accepted the invite. Available when an invite is pending, and the value will be \&quot;true\&quot;. | [optional] 
**name** | **string** | The unique name that is used to identify the user. | [optional] 
**udid** | **string** | The Unique Device IDentifier of the device | 
**model** | **string** | The model identifier of the device, in the format iDeviceM,N | 
**device_name** | **string** | The device description, in the format \&quot;iPhone 7 Plus (A1784)\&quot; | 
**full_device_name** | **string** | A combination of the device model name and the owner name. | [optional] 
**os_build** | **string** | The last known OS version running on the device | 
**os_version** | **string** | The last known OS version running on the device | 
**serial** | **string** | The device&#39;s serial number. Always empty or undefined at present. | [optional] 
**imei** | **string** | The device&#39;s International Mobile Equipment Identity number. Always empty or undefined at present. | [optional] 
**owner_id** | **string** | The user ID of the device owner. | [optional] 
**status** | **string** | The provisioning status of the device. | 
**registered_at** | **string** | Timestamp of when the device was registered in ISO format. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


