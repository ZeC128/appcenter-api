# SymbolUpload

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol_upload_id** | **string** | The id for the current symbol upload | 
**app_id** | **string** | The application that this symbol upload belongs to | 
**user** | [**\Swagger\Client\Model\V01appsownerNameappNamesymbolUploadsUser**](V01appsownerNameappNamesymbolUploadsUser.md) |  | [optional] 
**status** | **string** | The current status for the symbol upload | 
**symbol_type** | **string** | The type of the symbol for the current symbol upload | 
**symbols_uploaded** | [**\Swagger\Client\Model\V01appsownerNameappNamesymbolUploadsSymbolsUploaded[]**](V01appsownerNameappNamesymbolUploadsSymbolsUploaded.md) | The symbols found in the upload. This may be empty until the status is indexed | [optional] 
**origin** | **string** | The origin of the symbol upload | [optional] 
**file_name** | **string** | The file name for the symbol upload | [optional] 
**file_size** | **float** | The size of the file in Mebibytes. This may be 0 until the status is indexed | [optional] 
**timestamp** | [**\DateTime**](\DateTime.md) | When the symbol upload was committed, or last transaction time if not committed | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


