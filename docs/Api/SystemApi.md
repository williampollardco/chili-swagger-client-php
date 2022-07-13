# Swagger\Client\SystemApi

All URIs are relative to *http://cp-akw-054.chili-publish.online*

Method | HTTP request | Description
------------- | ------------- | -------------
[**restApiApiKeyClearHeaderFieldsForServerDownloads**](SystemApi.md#restApiApiKeyClearHeaderFieldsForServerDownloads) | **DELETE** /rest-api/v1.2/system/apikey/headerfields | ApiKeyClearHeaderFieldsForServerDownloads
[**restApiApiKeyGetCurrentSettings**](SystemApi.md#restApiApiKeyGetCurrentSettings) | **GET** /rest-api/v1.2/system/apikey/withsettings | ApiKeyGetCurrentSettings
[**restApiApiKeyKeepAlive**](SystemApi.md#restApiApiKeyKeepAlive) | **PUT** /rest-api/v1.2/system/apikey/keepalive | ApiKeyKeepAlive
[**restApiApiKeySetHeaderFieldForServerDownloads**](SystemApi.md#restApiApiKeySetHeaderFieldForServerDownloads) | **PUT** /rest-api/v1.2/system/apikey/headerfields | ApiKeySetHeaderFieldForServerDownloads
[**restApiApiKeySetRequestHeaderForDomain**](SystemApi.md#restApiApiKeySetRequestHeaderForDomain) | **PUT** /rest-api/v1.2/system/apikey/requestheaders | ApiKeySetRequestHeaderForDomain
[**restApiApiKeySetRequestWithCredentialsForDomain**](SystemApi.md#restApiApiKeySetRequestWithCredentialsForDomain) | **PUT** /rest-api/v1.2/system/apikey/requestheaderswithcred | ApiKeySetRequestWithCredentialsForDomain
[**restApiApiKeyVerify**](SystemApi.md#restApiApiKeyVerify) | **PUT** /rest-api/v1.2/system/apikey/verify | ApiKeyVerify
[**restApiCsvFileCreate**](SystemApi.md#restApiCsvFileCreate) | **POST** /rest-api/v1.2/system/xmlcsvconverter | CsvFileCreate
[**restApiDownloadURL**](SystemApi.md#restApiDownloadURL) | **GET** /rest-api/v1.2/system/urldownload | DownloadURL
[**restApiEnvironmentAdd**](SystemApi.md#restApiEnvironmentAdd) | **POST** /rest-api/v1.2/system/environments | EnvironmentAdd
[**restApiEnvironmentCopy**](SystemApi.md#restApiEnvironmentCopy) | **POST** /rest-api/v1.2/system/environments/{environmentName}/copy | EnvironmentCopy
[**restApiEnvironmentDelete**](SystemApi.md#restApiEnvironmentDelete) | **DELETE** /rest-api/v1.2/system/environments/{environmentName} | EnvironmentDelete
[**restApiEnvironmentGetColorProfiles**](SystemApi.md#restApiEnvironmentGetColorProfiles) | **GET** /rest-api/v1.2/system/environments/colorprofiles | EnvironmentGetColorProfiles
[**restApiEnvironmentGetCurrent**](SystemApi.md#restApiEnvironmentGetCurrent) | **GET** /rest-api/v1.2/system/environments/current | EnvironmentGetCurrent
[**restApiEnvironmentGetLoginSettings**](SystemApi.md#restApiEnvironmentGetLoginSettings) | **GET** /rest-api/v1.2/system/environments/{environmentNameOrURL}/loginsettings | EnvironmentGetLoginSettings
[**restApiEnvironmentGetReflectionMaps**](SystemApi.md#restApiEnvironmentGetReflectionMaps) | **GET** /rest-api/v1.2/system/environments/reflectionmaps | EnvironmentGetReflectionMaps
[**restApiEnvironmentGetSettings**](SystemApi.md#restApiEnvironmentGetSettings) | **GET** /rest-api/v1.2/system/environments/{environmentName}/settings | EnvironmentGetSettings
[**restApiEnvironmentList**](SystemApi.md#restApiEnvironmentList) | **GET** /rest-api/v1.2/system/environments | EnvironmentList
[**restApiEnvironmentSaveSettings**](SystemApi.md#restApiEnvironmentSaveSettings) | **PUT** /rest-api/v1.2/system/environments/{environmentName} | EnvironmentSaveSettings
[**restApiGenerateApiKey**](SystemApi.md#restApiGenerateApiKey) | **POST** /rest-api/v1.2/system/apikey | GenerateApiKey
[**restApiGenerateApiKeyWithSettings**](SystemApi.md#restApiGenerateApiKeyWithSettings) | **POST** /rest-api/v1.2/system/apikey/withsetting | GenerateApiKeyWithSettings
[**restApiGetFontURL**](SystemApi.md#restApiGetFontURL) | **GET** /rest-api/v1.2/system/font/{language} | GetFontURL
[**restApiGetServerDate**](SystemApi.md#restApiGetServerDate) | **GET** /rest-api/v1.2/system/server/date | GetServerDate
[**restApiGoogleCreateAuthorizationUrl**](SystemApi.md#restApiGoogleCreateAuthorizationUrl) | **GET** /rest-api/v1.2/system/server/googleauthurl | GoogleCreateAuthorizationUrl
[**restApiInterfaceGetInitialSettings**](SystemApi.md#restApiInterfaceGetInitialSettings) | **GET** /rest-api/v1.2/system/environments/interfaceinitialsettings | InterfaceGetInitialSettings
[**restApiLanguageGetCombinedStrings**](SystemApi.md#restApiLanguageGetCombinedStrings) | **GET** /rest-api/v1.2/system/languages/{languageID}/combinedstrings | LanguageGetCombinedStrings
[**restApiLanguageGetCsvURL**](SystemApi.md#restApiLanguageGetCsvURL) | **GET** /rest-api/v1.2/system/languages/{languageID}/urls/csv | LanguageGetCsvURL
[**restApiLanguageGetUnicodeTextURL**](SystemApi.md#restApiLanguageGetUnicodeTextURL) | **GET** /rest-api/v1.2/system/languages/{languageID}/urls/unicodetext | LanguageGetUnicodeTextURL
[**restApiLanguageImportCsv**](SystemApi.md#restApiLanguageImportCsv) | **POST** /rest-api/v1.2/system/languages/{languageID}/csv | LanguageImportCsv
[**restApiLanguageImportUnicodeText**](SystemApi.md#restApiLanguageImportUnicodeText) | **POST** /rest-api/v1.2/system/languages/{languageID}/unicodetext | LanguageImportUnicodeText
[**restApiLanguageSaveStrings**](SystemApi.md#restApiLanguageSaveStrings) | **PUT** /rest-api/v1.2/system/languages/{languageID} | LanguageSaveStrings
[**restApiLanguagesGetList**](SystemApi.md#restApiLanguagesGetList) | **GET** /rest-api/v1.2/system/languages | LanguagesGetList
[**restApiLockApiKey**](SystemApi.md#restApiLockApiKey) | **PUT** /rest-api/v1.2/system/apikey/lock/{apiKeyToLock} | LockApiKey
[**restApiServerGetLicenseInfo**](SystemApi.md#restApiServerGetLicenseInfo) | **GET** /rest-api/v1.2/system/server/licenseinfo | ServerGetLicenseInfo
[**restApiServerGetLoggingSettings**](SystemApi.md#restApiServerGetLoggingSettings) | **GET** /rest-api/v1.2/system/server/loggingsettings | ServerGetLoggingSettings
[**restApiServerGetSettings**](SystemApi.md#restApiServerGetSettings) | **GET** /rest-api/v1.2/system/server/settings | ServerGetSettings
[**restApiServerLicenseRequest**](SystemApi.md#restApiServerLicenseRequest) | **POST** /rest-api/v1.2/system/server/licenserequest | ServerLicenseRequest
[**restApiServerLogClear**](SystemApi.md#restApiServerLogClear) | **DELETE** /rest-api/v1.2/system/server/logs | ServerLogClear
[**restApiServerSaveLoggingSettings**](SystemApi.md#restApiServerSaveLoggingSettings) | **PUT** /rest-api/v1.2/system/server/loggingsettings | ServerSaveLoggingSettings
[**restApiServerSaveSettings**](SystemApi.md#restApiServerSaveSettings) | **PUT** /rest-api/v1.2/system/server/settings | ServerSaveSettings
[**restApiSetAssetDirectories**](SystemApi.md#restApiSetAssetDirectories) | **PUT** /rest-api/v1.2/system/apikey/assetdirectories | SetAssetDirectories
[**restApiSetAutomaticPreviewGeneration**](SystemApi.md#restApiSetAutomaticPreviewGeneration) | **PUT** /rest-api/v1.2/system/apikey/autopreviewgeneration | SetAutomaticPreviewGeneration
[**restApiSetContentAdministration**](SystemApi.md#restApiSetContentAdministration) | **PUT** /rest-api/v1.2/system/apikey/contentadministration | SetContentAdministration
[**restApiSetUserLanguage**](SystemApi.md#restApiSetUserLanguage) | **PUT** /rest-api/v1.2/system/apikey/userlanguage | SetUserLanguage
[**restApiSetWorkingEnvironment**](SystemApi.md#restApiSetWorkingEnvironment) | **PUT** /rest-api/v1.2/system/apikey/workingenvironment | SetWorkingEnvironment
[**restApiSetWorkspaceAdministration**](SystemApi.md#restApiSetWorkspaceAdministration) | **PUT** /rest-api/v1.2/system/apikey/workspaceadministration | SetWorkspaceAdministration
[**restApiTaskGetEditorCliLog**](SystemApi.md#restApiTaskGetEditorCliLog) | **GET** /rest-api/v1.2/system/tasks/{taskID}/editorclilog | TaskGetEditorCliLog
[**restApiTaskGetStatus**](SystemApi.md#restApiTaskGetStatus) | **GET** /rest-api/v1.2/system/tasks/{taskID}/status | TaskGetStatus
[**restApiTaskGetStatusAndRemoveIfCompleted**](SystemApi.md#restApiTaskGetStatusAndRemoveIfCompleted) | **PUT** /rest-api/v1.2/system/tasks/{taskID}/status | TaskGetStatusAndRemoveIfCompleted
[**restApiTaskRemoveFromLog**](SystemApi.md#restApiTaskRemoveFromLog) | **DELETE** /rest-api/v1.2/system/tasks/{taskID} | TaskRemoveFromLog
[**restApiTasksGetList**](SystemApi.md#restApiTasksGetList) | **GET** /rest-api/v1.2/system/tasks | TasksGetList
[**restApiTasksGetQueueOverview**](SystemApi.md#restApiTasksGetQueueOverview) | **GET** /rest-api/v1.2/system/tasks/queue | TasksGetQueueOverview
[**restApiTasksGetStatusses**](SystemApi.md#restApiTasksGetStatusses) | **GET** /rest-api/v1.2/system/tasks/statuses | TasksGetStatusses


# **restApiApiKeyClearHeaderFieldsForServerDownloads**
> object restApiApiKeyClearHeaderFieldsForServerDownloads()

ApiKeyClearHeaderFieldsForServerDownloads

Clear HTTP header key/value pairs for apiKey.  Soap API equivalent is 'ApiKeyClearHeaderFieldsForServerDownloads'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->restApiApiKeyClearHeaderFieldsForServerDownloads();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiApiKeyClearHeaderFieldsForServerDownloads: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiApiKeyGetCurrentSettings**
> object restApiApiKeyGetCurrentSettings()

ApiKeyGetCurrentSettings

Return the current XML representation of the apiKey  Soap API equivalent is 'ApiKeyGetCurrentSettings'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->restApiApiKeyGetCurrentSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiApiKeyGetCurrentSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiApiKeyKeepAlive**
> object restApiApiKeyKeepAlive()

ApiKeyKeepAlive

Call to keep the current apiKey alive (slide expiration back)  Soap API equivalent is 'ApiKeyKeepAlive'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->restApiApiKeyKeepAlive();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiApiKeyKeepAlive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiApiKeySetHeaderFieldForServerDownloads**
> object restApiApiKeySetHeaderFieldForServerDownloads($header_field_key, $header_field_value)

ApiKeySetHeaderFieldForServerDownloads

Add HTTP header key/value pairs for apiKey. When that API key is used to generate a PDF of a document that contains external assets, those key/value pairs are sent along in the header of the http request to download the high res assets.  Soap API equivalent is 'ApiKeySetHeaderFieldForServerDownloads'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$header_field_key = "header_field_key_example"; // string | 
$header_field_value = "header_field_value_example"; // string | 

try {
    $result = $apiInstance->restApiApiKeySetHeaderFieldForServerDownloads($header_field_key, $header_field_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiApiKeySetHeaderFieldForServerDownloads: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **header_field_key** | **string**|  |
 **header_field_value** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiApiKeySetRequestHeaderForDomain**
> object restApiApiKeySetRequestHeaderForDomain($header_field_key, $header_field_value, $domain)

ApiKeySetRequestHeaderForDomain

Add HTTP header key/value pairs for a domain on the apiKey. When that API key is used to generate a PDF of a document that contains external assets, those key/value pairs are sent along in the header of the http request to download the high res assets.  You can use wildcards for the domain. Be sure to first add the wildcards, adn then the specific ones.  Soap API equivalent is 'ApiKeySetRequestHeaderForDomain'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$header_field_key = "header_field_key_example"; // string | 
$header_field_value = "header_field_value_example"; // string | 
$domain = "domain_example"; // string | 

try {
    $result = $apiInstance->restApiApiKeySetRequestHeaderForDomain($header_field_key, $header_field_value, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiApiKeySetRequestHeaderForDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **header_field_key** | **string**|  |
 **header_field_value** | **string**|  |
 **domain** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiApiKeySetRequestWithCredentialsForDomain**
> object restApiApiKeySetRequestWithCredentialsForDomain($domain, $request_with_credentials)

ApiKeySetRequestWithCredentialsForDomain

Specify if client side requests to a domain needs to use the available credentials or not.  You can use wildcards for the domain. Be sure to first add the wildcards, adn then the specific ones.  Soap API equivalent is 'ApiKeySetRequestWithCredentialsForDomain'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$domain = "domain_example"; // string | 
$request_with_credentials = "request_with_credentials_example"; // string | 

try {
    $result = $apiInstance->restApiApiKeySetRequestWithCredentialsForDomain($domain, $request_with_credentials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiApiKeySetRequestWithCredentialsForDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**|  |
 **request_with_credentials** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiApiKeyVerify**
> object restApiApiKeyVerify($body)

ApiKeyVerify

Soap API equivalent is 'ApiKeyVerify'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ApiKeyVerifyBodyWrapper(); // \Swagger\Client\Model\ApiKeyVerifyBodyWrapper | 

try {
    $result = $apiInstance->restApiApiKeyVerify($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiApiKeyVerify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ApiKeyVerifyBodyWrapper**](../Model/ApiKeyVerifyBodyWrapper.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiCsvFileCreate**
> object restApiCsvFileCreate($file_name, $body)

CsvFileCreate

Converts an XML to CSV format, and returns a download link  Soap API equivalent is 'CsvFileCreate'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_name = "file_name_example"; // string | Name of the CSV file to create
$body = new \Swagger\Client\Model\CsvFileCreateBodyWrapper(); // \Swagger\Client\Model\CsvFileCreateBodyWrapper | 

try {
    $result = $apiInstance->restApiCsvFileCreate($file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiCsvFileCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_name** | **string**| Name of the CSV file to create |
 **body** | [**\Swagger\Client\Model\CsvFileCreateBodyWrapper**](../Model/CsvFileCreateBodyWrapper.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDownloadURL**
> object restApiDownloadURL($url)

DownloadURL

Download a URL from the server. This function is used by CHILI Editor to prevent security issues (eg: crossdomain.xml files which aren't present on the target server)  Soap API equivalent is 'DownloadURL'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$url = "url_example"; // string | URL to download, which needs to be accessible from the CHILI server

try {
    $result = $apiInstance->restApiDownloadURL($url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiDownloadURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **url** | **string**| URL to download, which needs to be accessible from the CHILI server |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiEnvironmentAdd**
> object restApiEnvironmentAdd($new_name)

EnvironmentAdd

Creates a new environment, with the specified name  Soap API equivalent is 'EnvironmentAdd'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$new_name = "new_name_example"; // string | The name for the new environment.

try {
    $result = $apiInstance->restApiEnvironmentAdd($new_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiEnvironmentAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_name** | **string**| The name for the new environment. |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiEnvironmentCopy**
> object restApiEnvironmentCopy($environment_name, $new_name)

EnvironmentCopy

Copies an existing environment. A new environment is created and all files are copied  Soap API equivalent is 'EnvironmentCopy'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_name = "environment_name_example"; // string | The name of the the environment to copy
$new_name = "new_name_example"; // string | The name of the new environment. The new environment cannot exist when copying

try {
    $result = $apiInstance->restApiEnvironmentCopy($environment_name, $new_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiEnvironmentCopy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **environment_name** | **string**| The name of the the environment to copy |
 **new_name** | **string**| The name of the new environment. The new environment cannot exist when copying |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiEnvironmentDelete**
> object restApiEnvironmentDelete($environment_name)

EnvironmentDelete

Deletes a complete environment, including it's files on disk  Soap API equivalent is 'EnvironmentDelete'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_name = "environment_name_example"; // string | The name of the environment to delete

try {
    $result = $apiInstance->restApiEnvironmentDelete($environment_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiEnvironmentDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **environment_name** | **string**| The name of the environment to delete |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiEnvironmentGetColorProfiles**
> object restApiEnvironmentGetColorProfiles()

EnvironmentGetColorProfiles

Returns a list of the Color Profiles available for the environment.  Soap API equivalent is 'EnvironmentGetColorProfiles'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->restApiEnvironmentGetColorProfiles();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiEnvironmentGetColorProfiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiEnvironmentGetCurrent**
> object restApiEnvironmentGetCurrent()

EnvironmentGetCurrent

Returns a description of the current environment  Soap API equivalent is 'EnvironmentGetCurrent'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->restApiEnvironmentGetCurrent();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiEnvironmentGetCurrent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiEnvironmentGetLoginSettings**
> object restApiEnvironmentGetLoginSettings($environment_name_or_url)

EnvironmentGetLoginSettings

Gets initial settings for the specified environment. This function is called before the user has logged in, so it does not require an API Key (and therefore also only returns the most basic information required for a login screen)  Soap API equivalent is 'EnvironmentGetLoginSettings'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_name_or_url = "environment_name_or_url_example"; // string | The name or URL (eg: http://www.domain.com/CHILI/ENVIRONMENT_NAME/interface.aspx) by which CHILI can identify the environment

try {
    $result = $apiInstance->restApiEnvironmentGetLoginSettings($environment_name_or_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiEnvironmentGetLoginSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **environment_name_or_url** | **string**| The name or URL (eg: http://www.domain.com/CHILI/ENVIRONMENT_NAME/interface.aspx) by which CHILI can identify the environment |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiEnvironmentGetReflectionMaps**
> object restApiEnvironmentGetReflectionMaps()

EnvironmentGetReflectionMaps

Returns a list of the Reflection Masks in the enviroment  Soap API equivalent is 'EnvironmentGetReflectionMaps'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->restApiEnvironmentGetReflectionMaps();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiEnvironmentGetReflectionMaps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiEnvironmentGetSettings**
> object restApiEnvironmentGetSettings($environment_name)

EnvironmentGetSettings

Returns the settings of the specified environment  Soap API equivalent is 'EnvironmentGetSettings'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_name = "environment_name_example"; // string | The name of the environment

try {
    $result = $apiInstance->restApiEnvironmentGetSettings($environment_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiEnvironmentGetSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **environment_name** | **string**| The name of the environment |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiEnvironmentList**
> object restApiEnvironmentList()

EnvironmentList

Returns a list of available environments for the current user  Soap API equivalent is 'EnvironmentList'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->restApiEnvironmentList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiEnvironmentList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiEnvironmentSaveSettings**
> object restApiEnvironmentSaveSettings($environment_name, $body)

EnvironmentSaveSettings

Saves the settings of an environment  Soap API equivalent is 'EnvironmentSaveSettings'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_name = "environment_name_example"; // string | The name of the environment
$body = new \Swagger\Client\Model\EnvironmentSaveSettingsBodyWrapper(); // \Swagger\Client\Model\EnvironmentSaveSettingsBodyWrapper | 

try {
    $result = $apiInstance->restApiEnvironmentSaveSettings($environment_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiEnvironmentSaveSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **environment_name** | **string**| The name of the environment |
 **body** | [**\Swagger\Client\Model\EnvironmentSaveSettingsBodyWrapper**](../Model/EnvironmentSaveSettingsBodyWrapper.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiGenerateApiKey**
> object restApiGenerateApiKey($environment_name_or_url, $body)

GenerateApiKey

Generates an apiKey for subsequent calls to the other webservice functions. Use SetWorkingEnvironment to use your user account (if it is an administrator) to access different environments. Date formatting was changed from version 1.2. The timezone can be checked by calling GetServerDate api method.  Soap API equivalent is 'GenerateApiKey'  Soap API equivalent is 'GenerateApiKey'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_name_or_url = "environment_name_or_url_example"; // string | The identifier for the environment in which to log in                             This can be:               - the name of the environment               - one of the values entered in the URLs setting of the environment               - the full URL to the backoffice (eg: http://www.domain.com/CHILI/ENVIRONMENT_NAME/interface.aspx)
$body = new \Swagger\Client\Model\GenerateApiKeyBodyWrapper(); // \Swagger\Client\Model\GenerateApiKeyBodyWrapper | 

try {
    $result = $apiInstance->restApiGenerateApiKey($environment_name_or_url, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiGenerateApiKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **environment_name_or_url** | **string**| The identifier for the environment in which to log in                             This can be:               - the name of the environment               - one of the values entered in the URLs setting of the environment               - the full URL to the backoffice (eg: http://www.domain.com/CHILI/ENVIRONMENT_NAME/interface.aspx) |
 **body** | [**\Swagger\Client\Model\GenerateApiKeyBodyWrapper**](../Model/GenerateApiKeyBodyWrapper.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiGenerateApiKeyWithSettings**
> object restApiGenerateApiKeyWithSettings($environment_name_or_url, $body)

GenerateApiKeyWithSettings

Generates an apiKey for subsequent calls to the other webservice functions. Use SetWorkingEnvironment to use your user account (if it is an administrator) to access different environments. Date formatting was changed from version 1.2. The timezone can be checked by calling GetServerDate api method.  Soap API equivalent is 'GenerateApiKeyWithSettings'  Soap API equivalent is 'GenerateApiKeyWithSettings'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_name_or_url = "environment_name_or_url_example"; // string | The identifier for the environment in which to log in                             This can be:               - the name of the environment               - one of the values entered in the URLs setting of the environment               - the full URL to the backoffice (eg: http://www.domain.com/CHILI/ENVIRONMENT_NAME/interface.aspx)
$body = new \Swagger\Client\Model\GenerateApiKeyWithSettingsBodyWrapper(); // \Swagger\Client\Model\GenerateApiKeyWithSettingsBodyWrapper | 

try {
    $result = $apiInstance->restApiGenerateApiKeyWithSettings($environment_name_or_url, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiGenerateApiKeyWithSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **environment_name_or_url** | **string**| The identifier for the environment in which to log in                             This can be:               - the name of the environment               - one of the values entered in the URLs setting of the environment               - the full URL to the backoffice (eg: http://www.domain.com/CHILI/ENVIRONMENT_NAME/interface.aspx) |
 **body** | [**\Swagger\Client\Model\GenerateApiKeyWithSettingsBodyWrapper**](../Model/GenerateApiKeyWithSettingsBodyWrapper.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiGetFontURL**
> object restApiGetFontURL($language)

GetFontURL

Request an URL to download font for specific language's character set.  Soap API equivalent is 'GetFontURL'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = "language_example"; // string | The language localization (IETF)

try {
    $result = $apiInstance->restApiGetFontURL($language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiGetFontURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**| The language localization (IETF) |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiGetServerDate**
> object restApiGetServerDate()

GetServerDate

Returns the date of the server. The formatting was changed from version 1.2  Soap API equivalent is 'GetServerDate'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->restApiGetServerDate();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiGetServerDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiGoogleCreateAuthorizationUrl**
> object restApiGoogleCreateAuthorizationUrl($client_id, $client_secret)

GoogleCreateAuthorizationUrl

Returns an URL so Google OAuth 2.0 can be performed.  Soap API equivalent is 'GoogleCreateAuthorizationUrl'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = "client_id_example"; // string | 
$client_secret = "client_secret_example"; // string | 

try {
    $result = $apiInstance->restApiGoogleCreateAuthorizationUrl($client_id, $client_secret);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiGoogleCreateAuthorizationUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**|  |
 **client_secret** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiInterfaceGetInitialSettings**
> object restApiInterfaceGetInitialSettings($for_editor)

InterfaceGetInitialSettings

Function used by CHILI Editor to retrieve a number of settings of the current Environment in one call.  Soap API equivalent is 'InterfaceGetInitialSettings'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$for_editor = true; // bool | 

try {
    $result = $apiInstance->restApiInterfaceGetInitialSettings($for_editor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiInterfaceGetInitialSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **for_editor** | **bool**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiLanguageGetCombinedStrings**
> object restApiLanguageGetCombinedStrings($language_id, $override_based_on)

LanguageGetCombinedStrings

Get the (combined) strings for a Language. This includes the values of the parent language for non-translated strings.  Soap API equivalent is 'LanguageGetCombinedStrings'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language_id = "language_id_example"; // string | The ID of the Language
$override_based_on = "override_based_on_example"; // string | if provided (not an empty string), the returned list contains a list merged with an alternate parent language

try {
    $result = $apiInstance->restApiLanguageGetCombinedStrings($language_id, $override_based_on);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiLanguageGetCombinedStrings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language_id** | **string**| The ID of the Language |
 **override_based_on** | **string**| if provided (not an empty string), the returned list contains a list merged with an alternate parent language | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiLanguageGetCsvURL**
> object restApiLanguageGetCsvURL($language_id)

LanguageGetCsvURL

Returns a urlInfo XML for the CSV file of the language (which is created on the fly)  Soap API equivalent is 'LanguageGetCsvURL'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language_id = "language_id_example"; // string | The ID of the Language

try {
    $result = $apiInstance->restApiLanguageGetCsvURL($language_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiLanguageGetCsvURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language_id** | **string**| The ID of the Language |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiLanguageGetUnicodeTextURL**
> object restApiLanguageGetUnicodeTextURL($language_id)

LanguageGetUnicodeTextURL

Returns a urlInfo XML for the txt file (tab-delimited) of the language (which is created on the fly)  Soap API equivalent is 'LanguageGetUnicodeTextURL'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language_id = "language_id_example"; // string | The ID of the Language

try {
    $result = $apiInstance->restApiLanguageGetUnicodeTextURL($language_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiLanguageGetUnicodeTextURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language_id** | **string**| The ID of the Language |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiLanguageImportCsv**
> object restApiLanguageImportCsv($language_id, $body)

LanguageImportCsv

Uploads a CSV file (of the same format as exported using LanguageGetCsvURL) and imports it into a language.  Strings outside of the 'Custom' section are not created, only updated.  Soap API equivalent is 'LanguageImportCsv'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language_id = "language_id_example"; // string | The ID of the language
$body = new \Swagger\Client\Model\LanguageImportCsvBodyWrapper(); // \Swagger\Client\Model\LanguageImportCsvBodyWrapper | 

try {
    $result = $apiInstance->restApiLanguageImportCsv($language_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiLanguageImportCsv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language_id** | **string**| The ID of the language |
 **body** | [**\Swagger\Client\Model\LanguageImportCsvBodyWrapper**](../Model/LanguageImportCsvBodyWrapper.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiLanguageImportUnicodeText**
> object restApiLanguageImportUnicodeText($language_id, $body)

LanguageImportUnicodeText

Uploads a txt file (tab-delimited, of the same format as exported using LanguageGetUnicodeTextURL) and imports it into a language.  Strings outside of the 'Custom' section are not created, only updated.  Soap API equivalent is 'LanguageImportUnicodeText'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language_id = "language_id_example"; // string | The ID of the language
$body = new \Swagger\Client\Model\LanguageImportUnicodeTextBodyWrapper(); // \Swagger\Client\Model\LanguageImportUnicodeTextBodyWrapper | 

try {
    $result = $apiInstance->restApiLanguageImportUnicodeText($language_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiLanguageImportUnicodeText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language_id** | **string**| The ID of the language |
 **body** | [**\Swagger\Client\Model\LanguageImportUnicodeTextBodyWrapper**](../Model/LanguageImportUnicodeTextBodyWrapper.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiLanguageSaveStrings**
> object restApiLanguageSaveStrings($language_id, $body)

LanguageSaveStrings

Saves the string library for a language  Soap API equivalent is 'LanguageSaveStrings'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language_id = "language_id_example"; // string | The ID of the language
$body = new \Swagger\Client\Model\LanguageSaveStringsBodyWrapper(); // \Swagger\Client\Model\LanguageSaveStringsBodyWrapper | 

try {
    $result = $apiInstance->restApiLanguageSaveStrings($language_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiLanguageSaveStrings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language_id** | **string**| The ID of the language |
 **body** | [**\Swagger\Client\Model\LanguageSaveStringsBodyWrapper**](../Model/LanguageSaveStringsBodyWrapper.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiLanguagesGetList**
> object restApiLanguagesGetList($include_system_languages)

LanguagesGetList

Returns a list of the available languages in the environment (optionally including system languages, on which environment languages can be based)  Soap API equivalent is 'LanguagesGetList'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$include_system_languages = true; // bool | If true, system languages (such as \"[EN]\") are included in the result

try {
    $result = $apiInstance->restApiLanguagesGetList($include_system_languages);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiLanguagesGetList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include_system_languages** | **bool**| If true, system languages (such as \&quot;[EN]\&quot;) are included in the result | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiLockApiKey**
> object restApiLockApiKey($api_key_to_lock)

LockApiKey

Locks an API key  (this can be checked by other web service functions)  Soap API equivalent is 'LockApiKey'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key_to_lock = "api_key_to_lock_example"; // string | 

try {
    $result = $apiInstance->restApiLockApiKey($api_key_to_lock);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiLockApiKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key_to_lock** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiServerGetLicenseInfo**
> object restApiServerGetLicenseInfo()

ServerGetLicenseInfo

Soap API equivalent is 'ServerGetLicenseInfo'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->restApiServerGetLicenseInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiServerGetLicenseInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiServerGetLoggingSettings**
> object restApiServerGetLoggingSettings()

ServerGetLoggingSettings

Returns the server logging settings  Soap API equivalent is 'ServerGetLoggingSettings'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->restApiServerGetLoggingSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiServerGetLoggingSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiServerGetSettings**
> object restApiServerGetSettings()

ServerGetSettings

Returns the server settings  Soap API equivalent is 'ServerGetSettings'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->restApiServerGetSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiServerGetSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiServerLicenseRequest**
> object restApiServerLicenseRequest($remote_function, $body)

ServerLicenseRequest

Handles server licensing requests  Soap API equivalent is 'ServerLicenseRequest'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$remote_function = "remote_function_example"; // string | 
$body = new \Swagger\Client\Model\ServerLicenseRequestBodyWrapper(); // \Swagger\Client\Model\ServerLicenseRequestBodyWrapper | 

try {
    $result = $apiInstance->restApiServerLicenseRequest($remote_function, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiServerLicenseRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **remote_function** | **string**|  |
 **body** | [**\Swagger\Client\Model\ServerLicenseRequestBodyWrapper**](../Model/ServerLicenseRequestBodyWrapper.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiServerLogClear**
> object restApiServerLogClear()

ServerLogClear

Removes all current log files  Soap API equivalent is 'ServerLogClear'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->restApiServerLogClear();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiServerLogClear: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiServerSaveLoggingSettings**
> object restApiServerSaveLoggingSettings($body)

ServerSaveLoggingSettings

Saves the server logging settings  Soap API equivalent is 'ServerSaveLoggingSettings'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ServerSaveLoggingSettingsBodyWrapper(); // \Swagger\Client\Model\ServerSaveLoggingSettingsBodyWrapper | 

try {
    $result = $apiInstance->restApiServerSaveLoggingSettings($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiServerSaveLoggingSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ServerSaveLoggingSettingsBodyWrapper**](../Model/ServerSaveLoggingSettingsBodyWrapper.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiServerSaveSettings**
> object restApiServerSaveSettings($body)

ServerSaveSettings

Saves the server settings  Soap API equivalent is 'ServerSaveSettings'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ServerSaveSettingsBodyWrapper(); // \Swagger\Client\Model\ServerSaveSettingsBodyWrapper | 

try {
    $result = $apiInstance->restApiServerSaveSettings($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiServerSaveSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ServerSaveSettingsBodyWrapper**](../Model/ServerSaveSettingsBodyWrapper.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiSetAssetDirectories**
> object restApiSetAssetDirectories($user_asset_directory, $user_group_asset_directory, $document_asset_directory)

SetAssetDirectories

Applies values to the Asset Directories which can be entered also per document in the Document Settings panel. These values are applied to the apiKey, and override any values entered manually inside a document.  To clear an existing value, provide the string 'empty'. An empty string ('') indicates that nothing changes for that argument.  Soap API equivalent is 'SetAssetDirectories'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_asset_directory = "user_asset_directory_example"; // string | The new value for userAssetDirectory
$user_group_asset_directory = "user_group_asset_directory_example"; // string | The new value for userGroupAssetDirectory
$document_asset_directory = "document_asset_directory_example"; // string | The new value for documentAssetDirectory

try {
    $result = $apiInstance->restApiSetAssetDirectories($user_asset_directory, $user_group_asset_directory, $document_asset_directory);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiSetAssetDirectories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_asset_directory** | **string**| The new value for userAssetDirectory | [optional]
 **user_group_asset_directory** | **string**| The new value for userGroupAssetDirectory | [optional]
 **document_asset_directory** | **string**| The new value for documentAssetDirectory | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiSetAutomaticPreviewGeneration**
> object restApiSetAutomaticPreviewGeneration($create_previews)

SetAutomaticPreviewGeneration

If set to false, previews for new items are not automatically generated all at once (to prevent file locks while you still plan on working on the new item, for example)  Soap API equivalent is 'SetAutomaticPreviewGeneration'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_previews = true; // bool | Set automatic preview generation to true (default) or false

try {
    $result = $apiInstance->restApiSetAutomaticPreviewGeneration($create_previews);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiSetAutomaticPreviewGeneration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_previews** | **bool**| Set automatic preview generation to true (default) or false | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiSetContentAdministration**
> object restApiSetContentAdministration($allow_content_administration)

SetContentAdministration

Toggles content administration privileges for the current apiKey.  This privilege influences the possibility to manage the content of a document in the CHILI Editor including more advanced settings (eg Constraints). Inside the editor, various items have settings referencing \"Administrators\". This means a user which has workspace or content administration privileges, depending on the context.  Soap API equivalent is 'SetContentAdministration'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$allow_content_administration = true; // bool | Set content administration to true or false

try {
    $result = $apiInstance->restApiSetContentAdministration($allow_content_administration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiSetContentAdministration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **allow_content_administration** | **bool**| Set content administration to true or false | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiSetUserLanguage**
> object restApiSetUserLanguage($language_id_or_name, $ignore_work_space_language)

SetUserLanguage

Applies a language for the editor to the current apiKey session  Soap API equivalent is 'SetUserLanguage'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language_id_or_name = "language_id_or_name_example"; // string | Either the ID of the language, or the name (EN, NL, ...)
$ignore_work_space_language = true; // bool | If true, the configured language of a workspace is ignored, and the current language is used always. If false, the configured user language is used before the language configured on the Environment level

try {
    $result = $apiInstance->restApiSetUserLanguage($language_id_or_name, $ignore_work_space_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiSetUserLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language_id_or_name** | **string**| Either the ID of the language, or the name (EN, NL, ...) |
 **ignore_work_space_language** | **bool**| If true, the configured language of a workspace is ignored, and the current language is used always. If false, the configured user language is used before the language configured on the Environment level | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiSetWorkingEnvironment**
> object restApiSetWorkingEnvironment($environment_name)

SetWorkingEnvironment

Sets the working environment as a property of the generated apiKey.  All subsequent calls to the WebServices will operate inside that environment.  This function can only be called if the user you have logged in with (using GenerateApiKey) is part of the top-level \"Admin\" environment.  Soap API equivalent is 'SetWorkingEnvironment'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_name = "environment_name_example"; // string | The name of the new environment in which to operate for all subsequent calls.

try {
    $result = $apiInstance->restApiSetWorkingEnvironment($environment_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiSetWorkingEnvironment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **environment_name** | **string**| The name of the new environment in which to operate for all subsequent calls. |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiSetWorkspaceAdministration**
> object restApiSetWorkspaceAdministration($allow_workspace_administration)

SetWorkspaceAdministration

Toggles workspace administration privileges for the current apiKey.  This privilege influences the possibility to manage the workspace in the CHILI Editor. Inside the editor, various items have settings referencing \"Administrators\". This means a user which has workspace administration privileges.  By toggling the privilege, you can have a single CHILI user (potentially with \"Environment Administrator\" privileges) to log in the webservices (using GenerateApiKey) for all of your own users.  NOTE: for backward compatibility, setting workspace administration to false also sets content administration to false. This can be switched on again using the SetContentAdministration function if applicable.  Soap API equivalent is 'SetWorkspaceAdministration'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$allow_workspace_administration = true; // bool | Set workspace administration to true or false

try {
    $result = $apiInstance->restApiSetWorkspaceAdministration($allow_workspace_administration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiSetWorkspaceAdministration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **allow_workspace_administration** | **bool**| Set workspace administration to true or false | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiTaskGetEditorCliLog**
> object restApiTaskGetEditorCliLog($task_id)

TaskGetEditorCliLog

Returns the current log of Editor_CLI (for tasks of type documentSaveXml)  Soap API equivalent is 'TaskGetEditorCliLog'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$task_id = "task_id_example"; // string | The ID of the task

try {
    $result = $apiInstance->restApiTaskGetEditorCliLog($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiTaskGetEditorCliLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| The ID of the task |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiTaskGetStatus**
> object restApiTaskGetStatus($task_id)

TaskGetStatus

Returns an XML description of the status of a task  Soap API equivalent is 'TaskGetStatus'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$task_id = "task_id_example"; // string | The ID of the task

try {
    $result = $apiInstance->restApiTaskGetStatus($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiTaskGetStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| The ID of the task |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiTaskGetStatusAndRemoveIfCompleted**
> object restApiTaskGetStatusAndRemoveIfCompleted($task_id)

TaskGetStatusAndRemoveIfCompleted

Returns an XML description of the status of a task. If the task has completed, it will be removed from the Log directory of the Queue  Soap API equivalent is 'TaskGetStatusAndRemoveIfCompleted'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$task_id = "task_id_example"; // string | The ID of the task

try {
    $result = $apiInstance->restApiTaskGetStatusAndRemoveIfCompleted($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiTaskGetStatusAndRemoveIfCompleted: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| The ID of the task |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiTaskRemoveFromLog**
> object restApiTaskRemoveFromLog($task_id)

TaskRemoveFromLog

Removes (deletes) a Task file from the Log directory  Soap API equivalent is 'TaskRemoveFromLog'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$task_id = "task_id_example"; // string | 

try {
    $result = $apiInstance->restApiTaskRemoveFromLog($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiTaskRemoveFromLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiTasksGetList**
> object restApiTasksGetList($include_running_tasks, $include_waiting_tasks, $include_finished_tasks)

TasksGetList

Returns a list of tasks  Soap API equivalent is 'TasksGetList'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$include_running_tasks = true; // bool | If true, running tasks are included
$include_waiting_tasks = true; // bool | If true, waiting tasks are included
$include_finished_tasks = true; // bool | If true, finished tasks are included (older tasks are cleaned out after a few hours, though)

try {
    $result = $apiInstance->restApiTasksGetList($include_running_tasks, $include_waiting_tasks, $include_finished_tasks);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiTasksGetList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include_running_tasks** | **bool**| If true, running tasks are included | [optional]
 **include_waiting_tasks** | **bool**| If true, waiting tasks are included | [optional]
 **include_finished_tasks** | **bool**| If true, finished tasks are included (older tasks are cleaned out after a few hours, though) | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiTasksGetQueueOverview**
> object restApiTasksGetQueueOverview()

TasksGetQueueOverview

Returns an overview of the status of the various Windows Services which are monitoring the Queue  Soap API equivalent is 'TasksGetQueueOverview'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->restApiTasksGetQueueOverview();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiTasksGetQueueOverview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiTasksGetStatusses**
> object restApiTasksGetStatusses($body_task_xml)

TasksGetStatusses

Returns the status of multiple tasks simultaneously  Soap API equivalent is 'TasksGetStatusses'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body_task_xml = "body_task_xml_example"; // string | 

try {
    $result = $apiInstance->restApiTasksGetStatusses($body_task_xml);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->restApiTasksGetStatusses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body_task_xml** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

