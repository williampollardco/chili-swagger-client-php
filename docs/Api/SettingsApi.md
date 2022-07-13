# Swagger\Client\SettingsApi

All URIs are relative to *http://cp-akw-054.chili-publish.online*

Method | HTTP request | Description
------------- | ------------- | -------------
[**restApiDataSourceAddSampleFile**](SettingsApi.md#restApiDataSourceAddSampleFile) | **POST** /rest-api/v1.2/settings/datasources/{dataSourceID}/files | DataSourceAddSampleFile
[**restApiDataSourceDeleteSampleFile**](SettingsApi.md#restApiDataSourceDeleteSampleFile) | **DELETE** /rest-api/v1.2/settings/datasources/{dataSourceID}/samplefiles/{fileName} | DataSourceDeleteSampleFile
[**restApiDataSourceDownloadSpreadsheets**](SettingsApi.md#restApiDataSourceDownloadSpreadsheets) | **GET** /rest-api/v1.2/settings/datasources/{dataSourceID}/spreadsheets | DataSourceDownloadSpreadsheets
[**restApiDataSourceDownloadURL**](SettingsApi.md#restApiDataSourceDownloadURL) | **GET** /rest-api/v1.2/settings/datasources/{dataSourceID}/downloadurl | DataSourceDownloadURL
[**restApiDataSourceFileGetXML**](SettingsApi.md#restApiDataSourceFileGetXML) | **PUT** /rest-api/v1.2/settings/datasources/{dataSourceID}/xmlconverter | DataSourceFileGetXML
[**restApiDataSourceListSampleFiles**](SettingsApi.md#restApiDataSourceListSampleFiles) | **GET** /rest-api/v1.2/settings/datasources/{dataSourceID}/samplefiles | DataSourceListSampleFiles
[**restApiDataSourceSalesForceGetXML**](SettingsApi.md#restApiDataSourceSalesForceGetXML) | **GET** /rest-api/v1.2/settings/datasources/{dataSourceID}/salesforce | DataSourceSalesForceGetXML
[**restApiDataSourceSpreadsheetGetXML**](SettingsApi.md#restApiDataSourceSpreadsheetGetXML) | **POST** /rest-api/v1.2/settings/datasources/{dataSourceID}/spreadsheets/{spreadsheetID} | DataSourceSpreadsheetGetXML
[**restApiDynamicAssetProviderGetTempAsset**](SettingsApi.md#restApiDynamicAssetProviderGetTempAsset) | **POST** /rest-api/v1.2/settings/dynamicassetproviders/{dynamicAssetProviderID}/tempasset | DynamicAssetProviderGetTempAsset
[**restApiFoldingSettingCreatePackage**](SettingsApi.md#restApiFoldingSettingCreatePackage) | **GET** /rest-api/v1.2/settings/foldingsettings/{foldingSettingId}/package | FoldingSettingCreatePackage
[**restApiODTGetStyles**](SettingsApi.md#restApiODTGetStyles) | **POST** /rest-api/v1.2/settings/odt/styles | ODTGetStyles
[**restApiODTGetTextFlow**](SettingsApi.md#restApiODTGetTextFlow) | **POST** /rest-api/v1.2/settings/odt/textflow | ODTGetTextFlow
[**restApiSwitchServerFlowGetCheckPoints**](SettingsApi.md#restApiSwitchServerFlowGetCheckPoints) | **GET** /rest-api/v1.2/settings/switchservers/{switchServerID}/flows/{flowID}/checkpoints | SwitchServerFlowGetCheckPoints
[**restApiSwitchServerFlowGetElementsJobCount**](SettingsApi.md#restApiSwitchServerFlowGetElementsJobCount) | **GET** /rest-api/v1.2/settings/switchservers/{switchServerID}/flows/{flowID}/elementsjobcount | SwitchServerFlowGetElementsJobCount
[**restApiSwitchServerFlowGetFullConfig**](SettingsApi.md#restApiSwitchServerFlowGetFullConfig) | **GET** /rest-api/v1.2/settings/switchservers/{switchServerID}/flows/{flowID}/fullconfig | SwitchServerFlowGetFullConfig
[**restApiSwitchServerFlowGetJobs**](SettingsApi.md#restApiSwitchServerFlowGetJobs) | **GET** /rest-api/v1.2/settings/switchservers/{switchServerID}/flows/{flowID}/jobs | SwitchServerFlowGetJobs
[**restApiSwitchServerFlowGetSubmitPoints**](SettingsApi.md#restApiSwitchServerFlowGetSubmitPoints) | **GET** /rest-api/v1.2/settings/switchservers/{switchServerID}/flows/{flowID}/submitpoints | SwitchServerFlowGetSubmitPoints
[**restApiSwitchServerFlowSubmitFileToFolder**](SettingsApi.md#restApiSwitchServerFlowSubmitFileToFolder) | **POST** /rest-api/v1.2/settings/switchservers/{switchServerID}/flows/{flowID}/folder/{elementID} | SwitchServerFlowSubmitFileToFolder
[**restApiSwitchServerFlowSubmitFileToSubmitPoint**](SettingsApi.md#restApiSwitchServerFlowSubmitFileToSubmitPoint) | **POST** /rest-api/v1.2/settings/switchservers/{switchServerID}/flows/{flowID}/submitpoint/{elementID} | SwitchServerFlowSubmitFileToSubmitPoint
[**restApiSwitchServerGetFlowList**](SettingsApi.md#restApiSwitchServerGetFlowList) | **GET** /rest-api/v1.2/settings/switchservers/{switchServerID}/flows | SwitchServerGetFlowList
[**restApiSwitchServerTestConnection**](SettingsApi.md#restApiSwitchServerTestConnection) | **GET** /rest-api/v1.2/settings/switchservers/testconnection | SwitchServerTestConnection
[**restApiXinetExecutePortalDICall**](SettingsApi.md#restApiXinetExecutePortalDICall) | **PUT** /rest-api/v1.2/settings/xinetservers/{xinetServerID}/calls/{callID} | XinetExecutePortalDICall
[**restApiXinetSetCurrentCredentials**](SettingsApi.md#restApiXinetSetCurrentCredentials) | **PUT** /rest-api/v1.2/settings/xinetservers/currentcredentials | XinetSetCurrentCredentials
[**restApiXinetTestConnection**](SettingsApi.md#restApiXinetTestConnection) | **GET** /rest-api/v1.2/settings/xinetservers/testconnection | XinetTestConnection


# **restApiDataSourceAddSampleFile**
> object restApiDataSourceAddSampleFile($data_source_id, $file_name, $body)

DataSourceAddSampleFile

Adds a new sample file to a DataSource  Soap API equivalent is 'DataSourceAddSampleFile'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data_source_id = "data_source_id_example"; // string | The DataSource for which to return the sample files
$file_name = "file_name_example"; // string | The name of the new file
$body = new \Swagger\Client\Model\DataSourceAddSampleFileBodyWrapper(); // \Swagger\Client\Model\DataSourceAddSampleFileBodyWrapper | 

try {
    $result = $apiInstance->restApiDataSourceAddSampleFile($data_source_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->restApiDataSourceAddSampleFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_source_id** | **string**| The DataSource for which to return the sample files |
 **file_name** | **string**| The name of the new file |
 **body** | [**\Swagger\Client\Model\DataSourceAddSampleFileBodyWrapper**](../Model/DataSourceAddSampleFileBodyWrapper.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDataSourceDeleteSampleFile**
> object restApiDataSourceDeleteSampleFile($data_source_id, $file_name)

DataSourceDeleteSampleFile

Deletes a sample files assigned to a DataSource  Soap API equivalent is 'DataSourceDeleteSampleFile'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data_source_id = "data_source_id_example"; // string | The DataSource for which to return the sample files
$file_name = "file_name_example"; // string | The name of the file to delete

try {
    $result = $apiInstance->restApiDataSourceDeleteSampleFile($data_source_id, $file_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->restApiDataSourceDeleteSampleFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_source_id** | **string**| The DataSource for which to return the sample files |
 **file_name** | **string**| The name of the file to delete |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDataSourceDownloadSpreadsheets**
> object restApiDataSourceDownloadSpreadsheets($data_source_id)

DataSourceDownloadSpreadsheets

Downloads a list of spreadsheets for a datasource (if its type = 'google')  Soap API equivalent is 'DataSourceDownloadSpreadsheets'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data_source_id = "data_source_id_example"; // string | The ID for the datasource

try {
    $result = $apiInstance->restApiDataSourceDownloadSpreadsheets($data_source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->restApiDataSourceDownloadSpreadsheets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_source_id** | **string**| The ID for the datasource |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDataSourceDownloadURL**
> object restApiDataSourceDownloadURL($data_source_id, $url_type, $query, $for_document_id, $editor_query_string)

DataSourceDownloadURL

Returns the result of one of the external URLs for a DataSource  Soap API equivalent is 'DataSourceDownloadURL'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data_source_id = "data_source_id_example"; // string | ID of the DataSource ResourceItem
$url_type = "url_type_example"; // string | The type of url to download ('main' or 'query')
$query = "query_example"; // string | If urlType is 'main', the query will be replaced in the main URL (based on the pattern '%QUERY%')
$for_document_id = "for_document_id_example"; // string | Document ID for which the download takes place (used to replace the %doc_id% pattern in the URL)
$editor_query_string = "editor_query_string_example"; // string | The querystring for the Editor (used to replace variables in the external URL)

try {
    $result = $apiInstance->restApiDataSourceDownloadURL($data_source_id, $url_type, $query, $for_document_id, $editor_query_string);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->restApiDataSourceDownloadURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_source_id** | **string**| ID of the DataSource ResourceItem |
 **url_type** | **string**| The type of url to download (&#39;main&#39; or &#39;query&#39;) |
 **query** | **string**| If urlType is &#39;main&#39;, the query will be replaced in the main URL (based on the pattern &#39;%QUERY%&#39;) | [optional]
 **for_document_id** | **string**| Document ID for which the download takes place (used to replace the %doc_id% pattern in the URL) | [optional]
 **editor_query_string** | **string**| The querystring for the Editor (used to replace variables in the external URL) | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDataSourceFileGetXML**
> object restApiDataSourceFileGetXML($data_source_id, $body, $file_extension)

DataSourceFileGetXML

Converts an uploaded file to generic XML using the settings of a DataSource  Soap API equivalent is 'DataSourceFileGetXML'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data_source_id = "data_source_id_example"; // string | The DataSource for which the settings are used
$body = new \Swagger\Client\Model\DataSourceFileGetXMLBodyWrapper(); // \Swagger\Client\Model\DataSourceFileGetXMLBodyWrapper | 
$file_extension = "file_extension_example"; // string | The extension (csv, txt, ...) of the file to convert. If a file path is provided, this argument is optional

try {
    $result = $apiInstance->restApiDataSourceFileGetXML($data_source_id, $body, $file_extension);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->restApiDataSourceFileGetXML: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_source_id** | **string**| The DataSource for which the settings are used |
 **body** | [**\Swagger\Client\Model\DataSourceFileGetXMLBodyWrapper**](../Model/DataSourceFileGetXMLBodyWrapper.md)|  |
 **file_extension** | **string**| The extension (csv, txt, ...) of the file to convert. If a file path is provided, this argument is optional | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDataSourceListSampleFiles**
> object restApiDataSourceListSampleFiles($data_source_id)

DataSourceListSampleFiles

Get a list of the sample files assigned to a DataSource  Soap API equivalent is 'DataSourceListSampleFiles'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data_source_id = "data_source_id_example"; // string | The DataSource for which to return the sample files

try {
    $result = $apiInstance->restApiDataSourceListSampleFiles($data_source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->restApiDataSourceListSampleFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_source_id** | **string**| The DataSource for which to return the sample files |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDataSourceSalesForceGetXML**
> object restApiDataSourceSalesForceGetXML($data_source_id)

DataSourceSalesForceGetXML

Downloads an XML representation of the selected salesforce Query  Soap API equivalent is 'DataSourceSalesForceGetXML'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data_source_id = "data_source_id_example"; // string | The ID for the datasource

try {
    $result = $apiInstance->restApiDataSourceSalesForceGetXML($data_source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->restApiDataSourceSalesForceGetXML: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_source_id** | **string**| The ID for the datasource |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDataSourceSpreadsheetGetXML**
> object restApiDataSourceSpreadsheetGetXML($data_source_id, $body, $spreadsheet_id)

DataSourceSpreadsheetGetXML

Downloads an XML representation of the selected spreadsheet  Soap API equivalent is 'DataSourceSpreadsheetGetXML'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data_source_id = "data_source_id_example"; // string | The ID for the datasource
$body = new \Swagger\Client\Model\DataSourceSpreadsheetGetXMLBodyWrapper(); // \Swagger\Client\Model\DataSourceSpreadsheetGetXMLBodyWrapper | 
$spreadsheet_id = "spreadsheet_id_example"; // string | 

try {
    $result = $apiInstance->restApiDataSourceSpreadsheetGetXML($data_source_id, $body, $spreadsheet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->restApiDataSourceSpreadsheetGetXML: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_source_id** | **string**| The ID for the datasource |
 **body** | [**\Swagger\Client\Model\DataSourceSpreadsheetGetXMLBodyWrapper**](../Model/DataSourceSpreadsheetGetXMLBodyWrapper.md)|  |
 **spreadsheet_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDynamicAssetProviderGetTempAsset**
> object restApiDynamicAssetProviderGetTempAsset($dynamic_asset_provider_id, $body)

DynamicAssetProviderGetTempAsset

Soap API equivalent is 'DynamicAssetProviderGetTempAsset'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dynamic_asset_provider_id = "dynamic_asset_provider_id_example"; // string | 
$body = new \Swagger\Client\Model\DynamicAssetProviderGetTempAssetBodyWrapper(); // \Swagger\Client\Model\DynamicAssetProviderGetTempAssetBodyWrapper | 

try {
    $result = $apiInstance->restApiDynamicAssetProviderGetTempAsset($dynamic_asset_provider_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->restApiDynamicAssetProviderGetTempAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dynamic_asset_provider_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\DynamicAssetProviderGetTempAssetBodyWrapper**](../Model/DynamicAssetProviderGetTempAssetBodyWrapper.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiFoldingSettingCreatePackage**
> object restApiFoldingSettingCreatePackage($folding_setting_id)

FoldingSettingCreatePackage

Returns a ZIP with all the needed recources and the settings file with fixed references.  Soap API equivalent is 'FoldingSettingCreatePackage'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folding_setting_id = "folding_setting_id_example"; // string | 

try {
    $result = $apiInstance->restApiFoldingSettingCreatePackage($folding_setting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->restApiFoldingSettingCreatePackage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folding_setting_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiODTGetStyles**
> object restApiODTGetStyles($body)

ODTGetStyles

Returns an XML description of the styles contained in the ODT. Used for parsing an ODT document and create the style conversion table.  Soap API equivalent is 'ODTGetStyles'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ODTGetStylesBodyWrapper(); // \Swagger\Client\Model\ODTGetStylesBodyWrapper | 

try {
    $result = $apiInstance->restApiODTGetStyles($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->restApiODTGetStyles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ODTGetStylesBodyWrapper**](../Model/ODTGetStylesBodyWrapper.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiODTGetTextFlow**
> object restApiODTGetTextFlow($body)

ODTGetTextFlow

Returns an XML description of the styles contained in the ODT. Used for parsing an ODT document and create the style conversion table.  Soap API equivalent is 'ODTGetTextFlow'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ODTGetTextFlowBodyWrapper(); // \Swagger\Client\Model\ODTGetTextFlowBodyWrapper | 

try {
    $result = $apiInstance->restApiODTGetTextFlow($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->restApiODTGetTextFlow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ODTGetTextFlowBodyWrapper**](../Model/ODTGetTextFlowBodyWrapper.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiSwitchServerFlowGetCheckPoints**
> object restApiSwitchServerFlowGetCheckPoints($switch_server_id, $flow_id)

SwitchServerFlowGetCheckPoints

Returns a list of the submit points of a flow  Soap API equivalent is 'SwitchServerFlowGetCheckPoints'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$switch_server_id = "switch_server_id_example"; // string | 
$flow_id = "flow_id_example"; // string | 

try {
    $result = $apiInstance->restApiSwitchServerFlowGetCheckPoints($switch_server_id, $flow_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->restApiSwitchServerFlowGetCheckPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **switch_server_id** | **string**|  |
 **flow_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiSwitchServerFlowGetElementsJobCount**
> object restApiSwitchServerFlowGetElementsJobCount($switch_server_id, $flow_id)

SwitchServerFlowGetElementsJobCount

Returns a list of the jobs existing inside a Switch FLow  Soap API equivalent is 'SwitchServerFlowGetElementsJobCount'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$switch_server_id = "switch_server_id_example"; // string | 
$flow_id = "flow_id_example"; // string | 

try {
    $result = $apiInstance->restApiSwitchServerFlowGetElementsJobCount($switch_server_id, $flow_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->restApiSwitchServerFlowGetElementsJobCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **switch_server_id** | **string**|  |
 **flow_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiSwitchServerFlowGetFullConfig**
> object restApiSwitchServerFlowGetFullConfig($switch_server_id, $flow_id)

SwitchServerFlowGetFullConfig

Returns the full configuration of the Flow  Soap API equivalent is 'SwitchServerFlowGetFullConfig'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$switch_server_id = "switch_server_id_example"; // string | 
$flow_id = "flow_id_example"; // string | 

try {
    $result = $apiInstance->restApiSwitchServerFlowGetFullConfig($switch_server_id, $flow_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->restApiSwitchServerFlowGetFullConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **switch_server_id** | **string**|  |
 **flow_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiSwitchServerFlowGetJobs**
> object restApiSwitchServerFlowGetJobs($switch_server_id, $flow_id)

SwitchServerFlowGetJobs

Returns a list of the submit points of a flow  Soap API equivalent is 'SwitchServerFlowGetJobs'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$switch_server_id = "switch_server_id_example"; // string | 
$flow_id = "flow_id_example"; // string | 

try {
    $result = $apiInstance->restApiSwitchServerFlowGetJobs($switch_server_id, $flow_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->restApiSwitchServerFlowGetJobs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **switch_server_id** | **string**|  |
 **flow_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiSwitchServerFlowGetSubmitPoints**
> object restApiSwitchServerFlowGetSubmitPoints($switch_server_id, $flow_id)

SwitchServerFlowGetSubmitPoints

Returns a list of the submit points of a flow  Soap API equivalent is 'SwitchServerFlowGetSubmitPoints'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$switch_server_id = "switch_server_id_example"; // string | 
$flow_id = "flow_id_example"; // string | 

try {
    $result = $apiInstance->restApiSwitchServerFlowGetSubmitPoints($switch_server_id, $flow_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->restApiSwitchServerFlowGetSubmitPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **switch_server_id** | **string**|  |
 **flow_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiSwitchServerFlowSubmitFileToFolder**
> object restApiSwitchServerFlowSubmitFileToFolder($switch_server_id, $flow_id, $element_id, $file_name, $body)

SwitchServerFlowSubmitFileToFolder

Submit a file to an input folder of a Switch Flow  Soap API equivalent is 'SwitchServerFlowSubmitFileToFolder'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$switch_server_id = "switch_server_id_example"; // string | 
$flow_id = "flow_id_example"; // string | 
$element_id = "element_id_example"; // string | 
$file_name = "file_name_example"; // string | 
$body = new \Swagger\Client\Model\SwitchServerFlowSubmitFileToFolderBodyWrapper(); // \Swagger\Client\Model\SwitchServerFlowSubmitFileToFolderBodyWrapper | 

try {
    $result = $apiInstance->restApiSwitchServerFlowSubmitFileToFolder($switch_server_id, $flow_id, $element_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->restApiSwitchServerFlowSubmitFileToFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **switch_server_id** | **string**|  |
 **flow_id** | **string**|  |
 **element_id** | **string**|  |
 **file_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\SwitchServerFlowSubmitFileToFolderBodyWrapper**](../Model/SwitchServerFlowSubmitFileToFolderBodyWrapper.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiSwitchServerFlowSubmitFileToSubmitPoint**
> object restApiSwitchServerFlowSubmitFileToSubmitPoint($switch_server_id, $flow_id, $element_id, $file_name, $body)

SwitchServerFlowSubmitFileToSubmitPoint

Submit a file to a Submit Point in a Switch Flow  Soap API equivalent is 'SwitchServerFlowSubmitFileToSubmitPoint'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$switch_server_id = "switch_server_id_example"; // string | 
$flow_id = "flow_id_example"; // string | 
$element_id = "element_id_example"; // string | 
$file_name = "file_name_example"; // string | 
$body = new \Swagger\Client\Model\SwitchServerFlowSubmitFileToSubmitPointBodyWrapper(); // \Swagger\Client\Model\SwitchServerFlowSubmitFileToSubmitPointBodyWrapper | 

try {
    $result = $apiInstance->restApiSwitchServerFlowSubmitFileToSubmitPoint($switch_server_id, $flow_id, $element_id, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->restApiSwitchServerFlowSubmitFileToSubmitPoint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **switch_server_id** | **string**|  |
 **flow_id** | **string**|  |
 **element_id** | **string**|  |
 **file_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\SwitchServerFlowSubmitFileToSubmitPointBodyWrapper**](../Model/SwitchServerFlowSubmitFileToSubmitPointBodyWrapper.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiSwitchServerGetFlowList**
> object restApiSwitchServerGetFlowList($switch_server_id)

SwitchServerGetFlowList

Returns a list of the Flows available in a Switch Server  Soap API equivalent is 'SwitchServerGetFlowList'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$switch_server_id = "switch_server_id_example"; // string | 

try {
    $result = $apiInstance->restApiSwitchServerGetFlowList($switch_server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->restApiSwitchServerGetFlowList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **switch_server_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiSwitchServerTestConnection**
> object restApiSwitchServerTestConnection($url, $user_name, $user_pw, $oem_key)

SwitchServerTestConnection

Tests whether a connection can be made to the Switch application located at 'url'  Soap API equivalent is 'SwitchServerTestConnection'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$url = "url_example"; // string | URL to the Switch Server (eg: https://localhost:51008/ )
$user_name = "user_name_example"; // string | User name to log in with
$user_pw = "user_pw_example"; // string | user password to log in with
$oem_key = "oem_key_example"; // string | OEM key for SDK

try {
    $result = $apiInstance->restApiSwitchServerTestConnection($url, $user_name, $user_pw, $oem_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->restApiSwitchServerTestConnection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **url** | **string**| URL to the Switch Server (eg: https://localhost:51008/ ) |
 **user_name** | **string**| User name to log in with |
 **user_pw** | **string**| user password to log in with | [optional]
 **oem_key** | **string**| OEM key for SDK | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiXinetExecutePortalDICall**
> object restApiXinetExecutePortalDICall($xinet_server_id, $call_id, $arguments)

XinetExecutePortalDICall

Executes a command by calling the specified Xinet Server's portalDI application  Soap API equivalent is 'XinetExecutePortalDICall'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xinet_server_id = "xinet_server_id_example"; // string | The ID of the server settings
$call_id = "call_id_example"; // string | Multiple calls can be made at the same time in the Editor. The callID is returned in the result so the editor knows which Callback to call
$arguments = "arguments_example"; // string | The arguments to the portalDI application (eg: \"action=showkywdperms\")

try {
    $result = $apiInstance->restApiXinetExecutePortalDICall($xinet_server_id, $call_id, $arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->restApiXinetExecutePortalDICall: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xinet_server_id** | **string**| The ID of the server settings |
 **call_id** | **string**| Multiple calls can be made at the same time in the Editor. The callID is returned in the result so the editor knows which Callback to call |
 **arguments** | **string**| The arguments to the portalDI application (eg: \&quot;action&#x3D;showkywdperms\&quot;) | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiXinetSetCurrentCredentials**
> object restApiXinetSetCurrentCredentials($user_name, $user_pw)

XinetSetCurrentCredentials

All calls to Xinet WebNative are called from a XinetSetting object, which includes user credentials. If you want to simulate being another user, though, you can call the XinetSetCurrentCredentials function. This applies a new user/pw, and saves it in the apiKey. All subsequent calls to Xinet performed under this apiKey will run under this Xinet User Account. Set the userName to an empty string to re-use the global setting.  Soap API equivalent is 'XinetSetCurrentCredentials'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_name = "user_name_example"; // string | The name of the user to simulate
$user_pw = "user_pw_example"; // string | The password to log in with

try {
    $result = $apiInstance->restApiXinetSetCurrentCredentials($user_name, $user_pw);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->restApiXinetSetCurrentCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_name** | **string**| The name of the user to simulate |
 **user_pw** | **string**| The password to log in with |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiXinetTestConnection**
> object restApiXinetTestConnection($url, $user_name, $user_pw)

XinetTestConnection

Tests whether a connection can be made to the portalDI application located at 'url'  Soap API equivalent is 'XinetTestConnection'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$url = "url_example"; // string | URL to the Xinet server's portalDI application
$user_name = "user_name_example"; // string | User name to log in with
$user_pw = "user_pw_example"; // string | user password to log in with

try {
    $result = $apiInstance->restApiXinetTestConnection($url, $user_name, $user_pw);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->restApiXinetTestConnection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **url** | **string**| URL to the Xinet server&#39;s portalDI application |
 **user_name** | **string**| User name to log in with |
 **user_pw** | **string**| user password to log in with |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

