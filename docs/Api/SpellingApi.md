# Swagger\Client\SpellingApi

All URIs are relative to *http://cp-akw-054.chili-publish.online*

Method | HTTP request | Description
------------- | ------------- | -------------
[**restApiSpellingCheck**](SpellingApi.md#restApiSpellingCheck) | **POST** /rest-api/v1.2/spelling/check/{language} | SpellingCheck
[**restApiSpellingGetSupportedLanguages**](SpellingApi.md#restApiSpellingGetSupportedLanguages) | **GET** /rest-api/v1.2/spelling/langs | SpellingGetSupportedLanguages
[**restApiSpellingSuggest**](SpellingApi.md#restApiSpellingSuggest) | **POST** /rest-api/v1.2/spelling/suggest/{language} | SpellingSuggest


# **restApiSpellingCheck**
> object restApiSpellingCheck($language, $body)

SpellingCheck

Request a check on the provided text for spelling errors, and returns a list of the tokens if such error found.  Soap API equivalent is 'SpellingCheck'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SpellingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = "language_example"; // string | The language localization (IETF)
$body = new \Swagger\Client\Model\SpellingCheckBodyWrapper(); // \Swagger\Client\Model\SpellingCheckBodyWrapper | 

try {
    $result = $apiInstance->restApiSpellingCheck($language, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpellingApi->restApiSpellingCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**| The language localization (IETF) |
 **body** | [**\Swagger\Client\Model\SpellingCheckBodyWrapper**](../Model/SpellingCheckBodyWrapper.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiSpellingGetSupportedLanguages**
> object restApiSpellingGetSupportedLanguages()

SpellingGetSupportedLanguages

Soap API equivalent is 'SpellingGetSupportedLanguages'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SpellingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->restApiSpellingGetSupportedLanguages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpellingApi->restApiSpellingGetSupportedLanguages: ', $e->getMessage(), PHP_EOL;
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

# **restApiSpellingSuggest**
> object restApiSpellingSuggest($language, $body)

SpellingSuggest

Request a suggestions for the provided word, and returns a list of the suggestions if such.  Soap API equivalent is 'SpellingSuggest'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SpellingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = "language_example"; // string | The language localization (IETF)
$body = new \Swagger\Client\Model\SpellingSuggestBodyWrapper(); // \Swagger\Client\Model\SpellingSuggestBodyWrapper | 

try {
    $result = $apiInstance->restApiSpellingSuggest($language, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpellingApi->restApiSpellingSuggest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**| The language localization (IETF) |
 **body** | [**\Swagger\Client\Model\SpellingSuggestBodyWrapper**](../Model/SpellingSuggestBodyWrapper.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

