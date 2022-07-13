# Swagger\Client\ResourcesApi

All URIs are relative to *http://cp-akw-054.chili-publish.online*

Method | HTTP request | Description
------------- | ------------- | -------------
[**restApiAssetAddOrUpdateSubjectInfo**](ResourcesApi.md#restApiAssetAddOrUpdateSubjectInfo) | **POST** /rest-api/v1.2/resources/assets/{assetID}/subjectinfo | AssetAddOrUpdateSubjectInfo
[**restApiAssetDeleteSubjectInfo**](ResourcesApi.md#restApiAssetDeleteSubjectInfo) | **DELETE** /rest-api/v1.2/resources/assets/{assetID}/subjectinfo | AssetDeleteSubjectInfo
[**restApiAssetGetImageInfo**](ResourcesApi.md#restApiAssetGetImageInfo) | **GET** /rest-api/v1.2/resources/assets/{assetID}/imageinfo | AssetGetImageInfo
[**restApiAssetGetSubjectInfo**](ResourcesApi.md#restApiAssetGetSubjectInfo) | **GET** /rest-api/v1.2/resources/assets/{assetID}/subjectinfo | AssetGetSubjectInfo
[**restApiDocumentCopyAnnotations**](ResourcesApi.md#restApiDocumentCopyAnnotations) | **PUT** /rest-api/v1.2/resources/documents/{toItemID}/annotations/copy | DocumentCopyAnnotations
[**restApiDocumentCopyDocumentEventActions**](ResourcesApi.md#restApiDocumentCopyDocumentEventActions) | **PUT** /rest-api/v1.2/resources/documents/{toItemID}/documenteventactions/copy | DocumentCopyDocumentEventActions
[**restApiDocumentCopyVariableDefinitions**](ResourcesApi.md#restApiDocumentCopyVariableDefinitions) | **PUT** /rest-api/v1.2/resources/documents/{toItemID}/variabledefinitions/copy | DocumentCopyVariableDefinitions
[**restApiDocumentCreateFromBlankDocTemplate**](ResourcesApi.md#restApiDocumentCreateFromBlankDocTemplate) | **POST** /rest-api/v1.2/resources/documents/fromtemplate | DocumentCreateFromBlankDocTemplate
[**restApiDocumentCreateFromChiliPackage**](ResourcesApi.md#restApiDocumentCreateFromChiliPackage) | **POST** /rest-api/v1.2/resources/documents/frompackage | DocumentCreateFromChiliPackage
[**restApiDocumentCreateFromODT**](ResourcesApi.md#restApiDocumentCreateFromODT) | **POST** /rest-api/v1.2/resources/documents/fromodt | DocumentCreateFromODT
[**restApiDocumentCreateFromPDF**](ResourcesApi.md#restApiDocumentCreateFromPDF) | **POST** /rest-api/v1.2/resources/documents/frompdf | DocumentCreateFromPDF
[**restApiDocumentCreateHTML**](ResourcesApi.md#restApiDocumentCreateHTML) | **POST** /rest-api/v1.2/resources/documents/{itemID}/representations/html | DocumentCreateHTML
[**restApiDocumentCreateIDML**](ResourcesApi.md#restApiDocumentCreateIDML) | **POST** /rest-api/v1.2/resources/documents/{itemID}/representations/idml | DocumentCreateIDML
[**restApiDocumentCreateImages**](ResourcesApi.md#restApiDocumentCreateImages) | **POST** /rest-api/v1.2/resources/documents/{itemID}/representations/images | DocumentCreateImages
[**restApiDocumentCreateImagesAndPDF**](ResourcesApi.md#restApiDocumentCreateImagesAndPDF) | **POST** /rest-api/v1.2/resources/documents/{itemID}/representations/imagesandpdf | DocumentCreateImagesAndPDF
[**restApiDocumentCreateODF**](ResourcesApi.md#restApiDocumentCreateODF) | **POST** /rest-api/v1.2/resources/documents/{itemID}/representations/odf | DocumentCreateODF
[**restApiDocumentCreatePDF**](ResourcesApi.md#restApiDocumentCreatePDF) | **POST** /rest-api/v1.2/resources/documents/{itemID}/representations/pdf | DocumentCreatePDF
[**restApiDocumentCreatePackage**](ResourcesApi.md#restApiDocumentCreatePackage) | **POST** /rest-api/v1.2/resources/documents/{itemID}/representations/package | DocumentCreatePackage
[**restApiDocumentCreateTempFolding**](ResourcesApi.md#restApiDocumentCreateTempFolding) | **POST** /rest-api/v1.2/resources/documents/tempxml/folding | DocumentCreateTempFolding
[**restApiDocumentCreateTempHTML**](ResourcesApi.md#restApiDocumentCreateTempHTML) | **POST** /rest-api/v1.2/resources/documents/tempxml/html | DocumentCreateTempHTML
[**restApiDocumentCreateTempIDML**](ResourcesApi.md#restApiDocumentCreateTempIDML) | **POST** /rest-api/v1.2/resources/documents/tempxml/idml | DocumentCreateTempIDML
[**restApiDocumentCreateTempImages**](ResourcesApi.md#restApiDocumentCreateTempImages) | **POST** /rest-api/v1.2/resources/documents/tempxml/images | DocumentCreateTempImages
[**restApiDocumentCreateTempImagesAndPDF**](ResourcesApi.md#restApiDocumentCreateTempImagesAndPDF) | **POST** /rest-api/v1.2/resources/documents/tempxml/imagesandpdf | DocumentCreateTempImagesAndPDF
[**restApiDocumentCreateTempODF**](ResourcesApi.md#restApiDocumentCreateTempODF) | **POST** /rest-api/v1.2/resources/documents/tempxml/odf | DocumentCreateTempODF
[**restApiDocumentCreateTempPDF**](ResourcesApi.md#restApiDocumentCreateTempPDF) | **POST** /rest-api/v1.2/resources/documents/tempxml/pdf | DocumentCreateTempPDF
[**restApiDocumentCreateTempPackage**](ResourcesApi.md#restApiDocumentCreateTempPackage) | **POST** /rest-api/v1.2/resources/documents/tempxml/package | DocumentCreateTempPackage
[**restApiDocumentGetAnnotations**](ResourcesApi.md#restApiDocumentGetAnnotations) | **GET** /rest-api/v1.2/resources/documents/{itemID}/annotations | DocumentGetAnnotations
[**restApiDocumentGetDefaultSettings**](ResourcesApi.md#restApiDocumentGetDefaultSettings) | **GET** /rest-api/v1.2/resources/documents/defaultsettings | DocumentGetDefaultSettings
[**restApiDocumentGetDocumentEventActions**](ResourcesApi.md#restApiDocumentGetDocumentEventActions) | **GET** /rest-api/v1.2/resources/documents/{itemID}/eventactions | DocumentGetDocumentEventActions
[**restApiDocumentGetFoldingViewerURL**](ResourcesApi.md#restApiDocumentGetFoldingViewerURL) | **POST** /rest-api/v1.2/resources/documents/{itemID}/urls/foldingviewer | DocumentGetFoldingViewerURL
[**restApiDocumentGetHTMLEditorURL**](ResourcesApi.md#restApiDocumentGetHTMLEditorURL) | **GET** /rest-api/v1.2/resources/documents/{itemID}/urls/editor | DocumentGetHTMLEditorURL
[**restApiDocumentGetHTMLFoldingViewerURL**](ResourcesApi.md#restApiDocumentGetHTMLFoldingViewerURL) | **POST** /rest-api/v1.2/resources/documents/{itemID}/urls/htmlfoldingviewer | DocumentGetHTMLFoldingViewerURL
[**restApiDocumentGetHTMLPreload**](ResourcesApi.md#restApiDocumentGetHTMLPreload) | **GET** /rest-api/v1.2/resources/documents/{itemID}/htmlpreload | DocumentGetHTMLPreload
[**restApiDocumentGetHTMLPreloadURL**](ResourcesApi.md#restApiDocumentGetHTMLPreloadURL) | **GET** /rest-api/v1.2/resources/documents/{itemID}/urls/htmlpreload | DocumentGetHTMLPreloadURL
[**restApiDocumentGetHTMLThreeDModelViewerURL**](ResourcesApi.md#restApiDocumentGetHTMLThreeDModelViewerURL) | **POST** /rest-api/v1.2/resources/documents/{itemID}/urls/htmlthreedmodelviewer | DocumentGetHTMLThreeDModelViewerURL
[**restApiDocumentGetInfo**](ResourcesApi.md#restApiDocumentGetInfo) | **GET** /rest-api/v1.2/resources/documents/{itemID}/info | DocumentGetInfo
[**restApiDocumentGetPreflightResults**](ResourcesApi.md#restApiDocumentGetPreflightResults) | **GET** /rest-api/v1.2/resources/documents/{itemID}/preflightresults | DocumentGetPreflightResults
[**restApiDocumentGetThreeDModelViewerURL**](ResourcesApi.md#restApiDocumentGetThreeDModelViewerURL) | **POST** /rest-api/v1.2/resources/documents/{itemID}/urls/threedmodelviewer | DocumentGetThreeDModelViewerURL
[**restApiDocumentGetUsedAssets**](ResourcesApi.md#restApiDocumentGetUsedAssets) | **GET** /rest-api/v1.2/resources/documents/{itemID}/usedassets | DocumentGetUsedAssets
[**restApiDocumentGetVariableDefinitions**](ResourcesApi.md#restApiDocumentGetVariableDefinitions) | **GET** /rest-api/v1.2/resources/documents/{itemID}/variabledefinitions | DocumentGetVariableDefinitions
[**restApiDocumentGetVariableValues**](ResourcesApi.md#restApiDocumentGetVariableValues) | **GET** /rest-api/v1.2/resources/documents/{itemID}/variablevalues | DocumentGetVariableValues
[**restApiDocumentProcessServerSide**](ResourcesApi.md#restApiDocumentProcessServerSide) | **PUT** /rest-api/v1.2/resources/documents/documentprocessor | DocumentProcessServerSide
[**restApiDocumentSetAnnotations**](ResourcesApi.md#restApiDocumentSetAnnotations) | **POST** /rest-api/v1.2/resources/documents/{itemID}/annotations | DocumentSetAnnotations
[**restApiDocumentSetAssetDirectories**](ResourcesApi.md#restApiDocumentSetAssetDirectories) | **POST** /rest-api/v1.2/resources/documents/{documentID}/assetdirectories | DocumentSetAssetDirectories
[**restApiDocumentSetConstraints**](ResourcesApi.md#restApiDocumentSetConstraints) | **POST** /rest-api/v1.2/resources/documents/{itemID}/constraints | DocumentSetConstraints
[**restApiDocumentSetDataSource**](ResourcesApi.md#restApiDocumentSetDataSource) | **POST** /rest-api/v1.2/resources/documents/{itemID}/datasource | DocumentSetDataSource
[**restApiDocumentSetDocumentEventActions**](ResourcesApi.md#restApiDocumentSetDocumentEventActions) | **POST** /rest-api/v1.2/resources/documents/{itemID}/eventactions | DocumentSetDocumentEventActions
[**restApiDocumentSetVariableDefinitions**](ResourcesApi.md#restApiDocumentSetVariableDefinitions) | **POST** /rest-api/v1.2/resources/documents/{itemID}/variabledefinitions | DocumentSetVariableDefinitions
[**restApiDocumentSetVariableValues**](ResourcesApi.md#restApiDocumentSetVariableValues) | **POST** /rest-api/v1.2/resources/documents/{itemID}/variablevalues | DocumentSetVariableValues
[**restApiDownloadAssets**](ResourcesApi.md#restApiDownloadAssets) | **GET** /rest-api/v1.2/resources/{resourceType}/download | DownloadAssets
[**restApiDownloadDatasourceSample**](ResourcesApi.md#restApiDownloadDatasourceSample) | **GET** /rest-api/v1.2/resources/DatasourceSample/download | DownloadDatasourceSample
[**restApiDownloadExternal**](ResourcesApi.md#restApiDownloadExternal) | **GET** /rest-api/v1.2/resources/External/download | DownloadExternal
[**restApiDownloadFolding**](ResourcesApi.md#restApiDownloadFolding) | **GET** /rest-api/v1.2/resources/Folding/download | DownloadFolding
[**restApiDownloadFontPreview**](ResourcesApi.md#restApiDownloadFontPreview) | **GET** /rest-api/v1.2/resources/Fonts/download | DownloadFontPreview
[**restApiDownloadIcons**](ResourcesApi.md#restApiDownloadIcons) | **GET** /rest-api/v1.2/resources/Icons/download | DownloadIcons
[**restApiDownloadLoginBackground**](ResourcesApi.md#restApiDownloadLoginBackground) | **GET** /rest-api/v1.2/resources/Login/download | DownloadLoginBackground
[**restApiDownloadReflectionMap**](ResourcesApi.md#restApiDownloadReflectionMap) | **GET** /rest-api/v1.2/resources/ReflectionMap/download | DownloadReflectionMap
[**restApiDownloadTempFile**](ResourcesApi.md#restApiDownloadTempFile) | **GET** /rest-api/v1.2/resources/{assetType}/download/tempfile | DownloadTempFile
[**restApiFontGetIncludedGlyphs**](ResourcesApi.md#restApiFontGetIncludedGlyphs) | **GET** /rest-api/v1.2/resources/fonts/{fontID}/includedglyphs | FontGetIncludedGlyphs
[**restApiResourceFolderAdd**](ResourcesApi.md#restApiResourceFolderAdd) | **POST** /rest-api/v1.2/resources/{resourceName}/folders | ResourceFolderAdd
[**restApiResourceFolderCopy**](ResourcesApi.md#restApiResourceFolderCopy) | **POST** /rest-api/v1.2/resources/{resourceName}/folders/copy | ResourceFolderCopy
[**restApiResourceFolderDelete**](ResourcesApi.md#restApiResourceFolderDelete) | **DELETE** /rest-api/v1.2/resources/{resourceName}/folders | ResourceFolderDelete
[**restApiResourceFolderMove**](ResourcesApi.md#restApiResourceFolderMove) | **PUT** /rest-api/v1.2/resources/{resourceName}/folders/move | ResourceFolderMove
[**restApiResourceGetHistory**](ResourcesApi.md#restApiResourceGetHistory) | **GET** /rest-api/v1.2/resources/{resourceName}/history | ResourceGetHistory
[**restApiResourceGetTree**](ResourcesApi.md#restApiResourceGetTree) | **GET** /rest-api/v1.2/resources/{resourceName}/tree | ResourceGetTree
[**restApiResourceGetTreeLevel**](ResourcesApi.md#restApiResourceGetTreeLevel) | **GET** /rest-api/v1.2/resources/{resourceName}/treelevel | ResourceGetTreeLevel
[**restApiResourceItemAdd**](ResourcesApi.md#restApiResourceItemAdd) | **POST** /rest-api/v1.2/resources/{resourceName}/items | ResourceItemAdd
[**restApiResourceItemAddFromURL**](ResourcesApi.md#restApiResourceItemAddFromURL) | **POST** /rest-api/v1.2/resources/{resourceName}/items/fromurl | ResourceItemAddFromURL
[**restApiResourceItemAddFromURLWithModificationDate**](ResourcesApi.md#restApiResourceItemAddFromURLWithModificationDate) | **POST** /rest-api/v1.2/resources/{resourceName}/items/fromurlmod | ResourceItemAddFromURLWithModificationDate
[**restApiResourceItemAddPreviewOverride**](ResourcesApi.md#restApiResourceItemAddPreviewOverride) | **PUT** /rest-api/v1.2/resources/{resourceName}/items/{itemID}/previews | ResourceItemAddPreviewOverride
[**restApiResourceItemAddWithPreview**](ResourcesApi.md#restApiResourceItemAddWithPreview) | **POST** /rest-api/v1.2/resources/{resourceName}/items/preview | ResourceItemAddWithPreview
[**restApiResourceItemCopy**](ResourcesApi.md#restApiResourceItemCopy) | **POST** /rest-api/v1.2/resources/{resourceName}/items/{itemID}/copy | ResourceItemCopy
[**restApiResourceItemDelete**](ResourcesApi.md#restApiResourceItemDelete) | **DELETE** /rest-api/v1.2/resources/{resourceName}/items/{itemID} | ResourceItemDelete
[**restApiResourceItemGetByIdOrPath**](ResourcesApi.md#restApiResourceItemGetByIdOrPath) | **GET** /rest-api/v1.2/resources/{resourceName}/items | ResourceItemGetByIdOrPath
[**restApiResourceItemGetByName**](ResourcesApi.md#restApiResourceItemGetByName) | **GET** /rest-api/v1.2/resources/{resourceName}/items/byname | ResourceItemGetByName
[**restApiResourceItemGetByPath**](ResourcesApi.md#restApiResourceItemGetByPath) | **GET** /rest-api/v1.2/resources/{resourceName}/items/bypath | ResourceItemGetByPath
[**restApiResourceItemGetCacheInfo**](ResourcesApi.md#restApiResourceItemGetCacheInfo) | **GET** /rest-api/v1.2/resources/{resourceName}/items/{itemID}/cacheinfo | ResourceItemGetCacheInfo
[**restApiResourceItemGetCustomMetaData**](ResourcesApi.md#restApiResourceItemGetCustomMetaData) | **GET** /rest-api/v1.2/resources/{resourceName}/items/{id}/metadata | ResourceItemGetCustomMetaData
[**restApiResourceItemGetDefinitionXML**](ResourcesApi.md#restApiResourceItemGetDefinitionXML) | **GET** /rest-api/v1.2/resources/{resourceName}/items/{itemID}/definitionxml | ResourceItemGetDefinitionXML
[**restApiResourceItemGetHistory**](ResourcesApi.md#restApiResourceItemGetHistory) | **GET** /rest-api/v1.2/resources/{resourceName}/items/{itemID}/history | ResourceItemGetHistory
[**restApiResourceItemGetPrivateInfo**](ResourcesApi.md#restApiResourceItemGetPrivateInfo) | **GET** /rest-api/v1.2/resources/{resourceName}/items/{itemID}/privateinfo | ResourceItemGetPrivateInfo
[**restApiResourceItemGetTransformedURL**](ResourcesApi.md#restApiResourceItemGetTransformedURL) | **GET** /rest-api/v1.2/resources/{resourceName}/items/{itemID}/transformedurl | ResourceItemGetTransformedURL
[**restApiResourceItemGetTransformedURLWithDebugInfo**](ResourcesApi.md#restApiResourceItemGetTransformedURLWithDebugInfo) | **GET** /rest-api/v1.2/resources/{resourceName}/items/{itemID}/transformedurldebug | ResourceItemGetTransformedURLWithDebugInfo
[**restApiResourceItemGetURL**](ResourcesApi.md#restApiResourceItemGetURL) | **GET** /rest-api/v1.2/resources/{resourceName}/items/{itemID}/url | ResourceItemGetURL
[**restApiResourceItemGetURLForAnonymousUser**](ResourcesApi.md#restApiResourceItemGetURLForAnonymousUser) | **GET** /rest-api/v1.2/resources/{resourceName}/items/{itemID}/anonymousurl | ResourceItemGetURLForAnonymousUser
[**restApiResourceItemGetURLWithDebugInfo**](ResourcesApi.md#restApiResourceItemGetURLWithDebugInfo) | **GET** /rest-api/v1.2/resources/{resourceName}/items/{itemID}/debugurl | ResourceItemGetURLWithDebugInfo
[**restApiResourceItemGetXML**](ResourcesApi.md#restApiResourceItemGetXML) | **GET** /rest-api/v1.2/resources/{resourceName}/items/{itemID}/xml | ResourceItemGetXML
[**restApiResourceItemMove**](ResourcesApi.md#restApiResourceItemMove) | **PUT** /rest-api/v1.2/resources/{resourceName}/items/{itemID}/move | ResourceItemMove
[**restApiResourceItemRemovePreviewOverride**](ResourcesApi.md#restApiResourceItemRemovePreviewOverride) | **DELETE** /rest-api/v1.2/resources/{resourceName}/items/{itemID}/previewoverride | ResourceItemRemovePreviewOverride
[**restApiResourceItemReplaceFile**](ResourcesApi.md#restApiResourceItemReplaceFile) | **PUT** /rest-api/v1.2/resources/{resourceName}/items/{itemID}/file | ResourceItemReplaceFile
[**restApiResourceItemReplaceFileWithPreviewOverride**](ResourcesApi.md#restApiResourceItemReplaceFileWithPreviewOverride) | **PUT** /rest-api/v1.2/resources/{resourceName}/items/{itemID}/filewithpreview | ResourceItemReplaceFileWithPreviewOverride
[**restApiResourceItemResetPreviews**](ResourcesApi.md#restApiResourceItemResetPreviews) | **DELETE** /rest-api/v1.2/resources/{resourceName}/items/{itemID}/previews | ResourceItemResetPreviews
[**restApiResourceItemSave**](ResourcesApi.md#restApiResourceItemSave) | **PUT** /rest-api/v1.2/resources/{resourceName}/items/{itemID}/save | ResourceItemSave
[**restApiResourceItemSaveCustomMetaData**](ResourcesApi.md#restApiResourceItemSaveCustomMetaData) | **PUT** /rest-api/v1.2/resources/{resourceName}/items/{id}/metadata | ResourceItemSaveCustomMetaData
[**restApiResourceItemsAddFromZip**](ResourcesApi.md#restApiResourceItemsAddFromZip) | **POST** /rest-api/v1.2/resources/{resourceName}/items/fromzip | ResourceItemsAddFromZip
[**restApiResourceLibraryGetSettings**](ResourcesApi.md#restApiResourceLibraryGetSettings) | **GET** /rest-api/v1.2/resources/{resourceName}/folders/settings | ResourceLibraryGetSettings
[**restApiResourceLibrarySaveSettings**](ResourcesApi.md#restApiResourceLibrarySaveSettings) | **PUT** /rest-api/v1.2/resources/{resourceName}/folders/settings | ResourceLibrarySaveSettings
[**restApiResourceList**](ResourcesApi.md#restApiResourceList) | **GET** /rest-api/v1.2/resources | ResourceList
[**restApiResourceSearch**](ResourcesApi.md#restApiResourceSearch) | **GET** /rest-api/v1.2/resources/{resourceName} | ResourceSearch
[**restApiResourceSearchByIDs**](ResourcesApi.md#restApiResourceSearchByIDs) | **GET** /rest-api/v1.2/resources/{resourceName}/byid | ResourceSearchByIDs
[**restApiResourceSearchInFolder**](ResourcesApi.md#restApiResourceSearchInFolder) | **GET** /rest-api/v1.2/resources/{resourceName}/infolder | ResourceSearchInFolder
[**restApiResourceSearchPaged**](ResourcesApi.md#restApiResourceSearchPaged) | **GET** /rest-api/v1.2/resources/{resourceName}/paged | ResourceSearchPaged
[**restApiResourceSearchPagedWithSorting**](ResourcesApi.md#restApiResourceSearchPagedWithSorting) | **GET** /rest-api/v1.2/resources/{resourceName}/sorted | ResourceSearchPagedWithSorting
[**restApiSetNextResourceItemID**](ResourcesApi.md#restApiSetNextResourceItemID) | **POST** /rest-api/v1.2/resources/{resourceName}/nextitemid | SetNextResourceItemID
[**restApiThreeDModelCreatePackage**](ResourcesApi.md#restApiThreeDModelCreatePackage) | **GET** /rest-api/v1.2/resources/3dmodels/{threeDModelId}/package | ThreeDModelCreatePackage
[**restApiUploadExternalAsset**](ResourcesApi.md#restApiUploadExternalAsset) | **POST** /rest-api/v1.2/resources/assets/external | UploadExternalAsset


# **restApiAssetAddOrUpdateSubjectInfo**
> object restApiAssetAddOrUpdateSubjectInfo($asset_id, $body)

AssetAddOrUpdateSubjectInfo

Updates the subject info from the asset on the server  Soap API equivalent is 'AssetAddOrUpdateSubjectInfo'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset_id = "asset_id_example"; // string | The asset ID
$body = new \Swagger\Client\Model\AssetAddOrUpdateSubjectInfoBodyWrapper(); // \Swagger\Client\Model\AssetAddOrUpdateSubjectInfoBodyWrapper | 

try {
    $result = $apiInstance->restApiAssetAddOrUpdateSubjectInfo($asset_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiAssetAddOrUpdateSubjectInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_id** | **string**| The asset ID |
 **body** | [**\Swagger\Client\Model\AssetAddOrUpdateSubjectInfoBodyWrapper**](../Model/AssetAddOrUpdateSubjectInfoBodyWrapper.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiAssetDeleteSubjectInfo**
> object restApiAssetDeleteSubjectInfo($asset_id)

AssetDeleteSubjectInfo

Deletes the subject info from the asset on the server  Soap API equivalent is 'AssetDeleteSubjectInfo'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset_id = "asset_id_example"; // string | The asset ID

try {
    $result = $apiInstance->restApiAssetDeleteSubjectInfo($asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiAssetDeleteSubjectInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_id** | **string**| The asset ID |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiAssetGetImageInfo**
> object restApiAssetGetImageInfo($asset_id)

AssetGetImageInfo

Returns information about the underlying image  Soap API equivalent is 'AssetGetImageInfo'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset_id = "asset_id_example"; // string | The asset ID

try {
    $result = $apiInstance->restApiAssetGetImageInfo($asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiAssetGetImageInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_id** | **string**| The asset ID |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiAssetGetSubjectInfo**
> object restApiAssetGetSubjectInfo($asset_id)

AssetGetSubjectInfo

Returns the subject info from the asset on the server  Soap API equivalent is 'AssetGetSubjectInfo'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset_id = "asset_id_example"; // string | The asset ID

try {
    $result = $apiInstance->restApiAssetGetSubjectInfo($asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiAssetGetSubjectInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_id** | **string**| The asset ID |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentCopyAnnotations**
> object restApiDocumentCopyAnnotations($from_item_id, $to_item_id, $replace_existing_annotations)

DocumentCopyAnnotations

Duplicates annotations from one document to another  Soap API equivalent is 'DocumentCopyAnnotations'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$from_item_id = "from_item_id_example"; // string | The original document's ID
$to_item_id = "to_item_id_example"; // string | The new document's ID
$replace_existing_annotations = true; // bool | If true, all existing annotations are first removed from the target document

try {
    $result = $apiInstance->restApiDocumentCopyAnnotations($from_item_id, $to_item_id, $replace_existing_annotations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentCopyAnnotations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_item_id** | **string**| The original document&#39;s ID |
 **to_item_id** | **string**| The new document&#39;s ID |
 **replace_existing_annotations** | **bool**| If true, all existing annotations are first removed from the target document | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentCopyDocumentEventActions**
> object restApiDocumentCopyDocumentEventActions($from_item_id, $to_item_id, $replace_existing_actions)

DocumentCopyDocumentEventActions

Duplicates Document Event Actions from one document to another  Soap API equivalent is 'DocumentCopyDocumentEventActions'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$from_item_id = "from_item_id_example"; // string | The original document's ID
$to_item_id = "to_item_id_example"; // string | The new document's ID
$replace_existing_actions = true; // bool | If true, all existing actions are first removed from the target document

try {
    $result = $apiInstance->restApiDocumentCopyDocumentEventActions($from_item_id, $to_item_id, $replace_existing_actions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentCopyDocumentEventActions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_item_id** | **string**| The original document&#39;s ID |
 **to_item_id** | **string**| The new document&#39;s ID |
 **replace_existing_actions** | **bool**| If true, all existing actions are first removed from the target document | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentCopyVariableDefinitions**
> object restApiDocumentCopyVariableDefinitions($from_item_id, $to_item_id, $replace_existing_variables)

DocumentCopyVariableDefinitions

Duplicates variable definitions from one document to another  Soap API equivalent is 'DocumentCopyVariableDefinitions'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$from_item_id = "from_item_id_example"; // string | The ID of the document from which the variables will be copied
$to_item_id = "to_item_id_example"; // string | The id of the document to which the variables need to be copied
$replace_existing_variables = true; // bool | If true, all previously existing variables are first removed in the target document

try {
    $result = $apiInstance->restApiDocumentCopyVariableDefinitions($from_item_id, $to_item_id, $replace_existing_variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentCopyVariableDefinitions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_item_id** | **string**| The ID of the document from which the variables will be copied |
 **to_item_id** | **string**| The id of the document to which the variables need to be copied |
 **replace_existing_variables** | **bool**| If true, all previously existing variables are first removed in the target document | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentCreateFromBlankDocTemplate**
> object restApiDocumentCreateFromBlankDocTemplate($document_name, $folder_path, $blank_doc_template_id)

DocumentCreateFromBlankDocTemplate

Creates a new document based on the settings in the \"DocumentTemplates\" resource. This resource contains such settings as number of pages, dimensions, etc.  Soap API equivalent is 'DocumentCreateFromBlankDocTemplate'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_name = "document_name_example"; // string | The name of the new document
$folder_path = "folder_path_example"; // string | The path for the new document
$blank_doc_template_id = "blank_doc_template_id_example"; // string | The ID of the BlankDocumentTemplates resource item

try {
    $result = $apiInstance->restApiDocumentCreateFromBlankDocTemplate($document_name, $folder_path, $blank_doc_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentCreateFromBlankDocTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_name** | **string**| The name of the new document |
 **folder_path** | **string**| The path for the new document |
 **blank_doc_template_id** | **string**| The ID of the BlankDocumentTemplates resource item |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentCreateFromChiliPackage**
> object restApiDocumentCreateFromChiliPackage($document_name, $folder_path, $body, $new_asset_location, $new_font_location)

DocumentCreateFromChiliPackage

Creates a new document based on a zip file containing a CHILI package (usually generated by the InDesign Extension).  Soap API equivalent is 'DocumentCreateFromChiliPackage'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_name = "document_name_example"; // string | The name for the new document
$folder_path = "folder_path_example"; // string | The path for the new document
$body = new \Swagger\Client\Model\DocumentCreateFromChiliPackageBodyWrapper(); // \Swagger\Client\Model\DocumentCreateFromChiliPackageBodyWrapper | 
$new_asset_location = "new_asset_location_example"; // string | Optional new location for the assets in the package. When creating the package, the user can choose a location for the assets. If a newAssetLocation is provided, this location will be modified
$new_font_location = "new_font_location_example"; // string | Optional new location for the fonts in the package. When creating the package, the user can choose a location for the fonts. If a newFontLocation is provided, this location will be modified

try {
    $result = $apiInstance->restApiDocumentCreateFromChiliPackage($document_name, $folder_path, $body, $new_asset_location, $new_font_location);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentCreateFromChiliPackage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_name** | **string**| The name for the new document |
 **folder_path** | **string**| The path for the new document |
 **body** | [**\Swagger\Client\Model\DocumentCreateFromChiliPackageBodyWrapper**](../Model/DocumentCreateFromChiliPackageBodyWrapper.md)|  |
 **new_asset_location** | **string**| Optional new location for the assets in the package. When creating the package, the user can choose a location for the assets. If a newAssetLocation is provided, this location will be modified | [optional]
 **new_font_location** | **string**| Optional new location for the fonts in the package. When creating the package, the user can choose a location for the fonts. If a newFontLocation is provided, this location will be modified | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentCreateFromODT**
> object restApiDocumentCreateFromODT($document_name, $folder_path, $body)

DocumentCreateFromODT

Creates a new document based on a Open Document Text file.  Soap API equivalent is 'DocumentCreateFromODT'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_name = "document_name_example"; // string | The name for the new document
$folder_path = "folder_path_example"; // string | The path for the new document
$body = new \Swagger\Client\Model\DocumentCreateFromODTBodyWrapper(); // \Swagger\Client\Model\DocumentCreateFromODTBodyWrapper | 

try {
    $result = $apiInstance->restApiDocumentCreateFromODT($document_name, $folder_path, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentCreateFromODT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_name** | **string**| The name for the new document |
 **folder_path** | **string**| The path for the new document |
 **body** | [**\Swagger\Client\Model\DocumentCreateFromODTBodyWrapper**](../Model/DocumentCreateFromODTBodyWrapper.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentCreateFromPDF**
> object restApiDocumentCreateFromPDF($document_name, $folder_path, $background_asset_location, $body)

DocumentCreateFromPDF

Creates a new document based on a PDF file  Soap API equivalent is 'DocumentCreateFromPDF'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_name = "document_name_example"; // string | The name for the new document
$folder_path = "folder_path_example"; // string | The path for the new document
$background_asset_location = "background_asset_location_example"; // string | Location for the PDF pages used as backgrounds for the document
$body = new \Swagger\Client\Model\DocumentCreateFromPDFBodyWrapper(); // \Swagger\Client\Model\DocumentCreateFromPDFBodyWrapper | 

try {
    $result = $apiInstance->restApiDocumentCreateFromPDF($document_name, $folder_path, $background_asset_location, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentCreateFromPDF: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_name** | **string**| The name for the new document |
 **folder_path** | **string**| The path for the new document |
 **background_asset_location** | **string**| Location for the PDF pages used as backgrounds for the document |
 **body** | [**\Swagger\Client\Model\DocumentCreateFromPDFBodyWrapper**](../Model/DocumentCreateFromPDFBodyWrapper.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentCreateHTML**
> object restApiDocumentCreateHTML($item_id, $body, $task_priority)

DocumentCreateHTML

Generates the HTML package of the document.  Soap API equivalent is 'DocumentCreateHTML'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = "item_id_example"; // string | 
$body = new \Swagger\Client\Model\DocumentCreateHTMLBodyWrapper(); // \Swagger\Client\Model\DocumentCreateHTMLBodyWrapper | 
$task_priority = 56; // int | 

try {
    $result = $apiInstance->restApiDocumentCreateHTML($item_id, $body, $task_priority);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentCreateHTML: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\DocumentCreateHTMLBodyWrapper**](../Model/DocumentCreateHTMLBodyWrapper.md)|  |
 **task_priority** | **int**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentCreateIDML**
> object restApiDocumentCreateIDML($item_id, $body, $task_priority)

DocumentCreateIDML

Generates the IDML package of the document.  Soap API equivalent is 'DocumentCreateIDML'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = "item_id_example"; // string | 
$body = new \Swagger\Client\Model\DocumentCreateIDMLBodyWrapper(); // \Swagger\Client\Model\DocumentCreateIDMLBodyWrapper | 
$task_priority = 56; // int | 

try {
    $result = $apiInstance->restApiDocumentCreateIDML($item_id, $body, $task_priority);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentCreateIDML: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\DocumentCreateIDMLBodyWrapper**](../Model/DocumentCreateIDMLBodyWrapper.md)|  |
 **task_priority** | **int**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentCreateImages**
> object restApiDocumentCreateImages($item_id, $image_conversion_profile_id, $body, $task_priority)

DocumentCreateImages

Generates a zip containing images of all the pages in the document.  Soap API equivalent is 'DocumentCreateImages'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = "item_id_example"; // string | The ID of the document for which to create the PDF
$image_conversion_profile_id = "image_conversion_profile_id_example"; // string | The ID of the image conversion profile
$body = new \Swagger\Client\Model\DocumentCreateImagesBodyWrapper(); // \Swagger\Client\Model\DocumentCreateImagesBodyWrapper | 
$task_priority = 56; // int | The priority (1-10) of the task

try {
    $result = $apiInstance->restApiDocumentCreateImages($item_id, $image_conversion_profile_id, $body, $task_priority);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentCreateImages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **string**| The ID of the document for which to create the PDF |
 **image_conversion_profile_id** | **string**| The ID of the image conversion profile |
 **body** | [**\Swagger\Client\Model\DocumentCreateImagesBodyWrapper**](../Model/DocumentCreateImagesBodyWrapper.md)|  |
 **task_priority** | **int**| The priority (1-10) of the task | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentCreateImagesAndPDF**
> object restApiDocumentCreateImagesAndPDF($item_id, $image_conversion_profile_id, $body, $task_priority)

DocumentCreateImagesAndPDF

Generates a zip containing the PDF and images of all the pages in the document.  Soap API equivalent is 'DocumentCreateImagesAndPDF'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = "item_id_example"; // string | The ID of the document for which to create the PDF
$image_conversion_profile_id = "image_conversion_profile_id_example"; // string | The ID of the image conversion profile
$body = new \Swagger\Client\Model\DocumentCreateImagesAndPDFBodyWrapper(); // \Swagger\Client\Model\DocumentCreateImagesAndPDFBodyWrapper | 
$task_priority = 56; // int | The priority (1-10) of the task

try {
    $result = $apiInstance->restApiDocumentCreateImagesAndPDF($item_id, $image_conversion_profile_id, $body, $task_priority);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentCreateImagesAndPDF: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **string**| The ID of the document for which to create the PDF |
 **image_conversion_profile_id** | **string**| The ID of the image conversion profile |
 **body** | [**\Swagger\Client\Model\DocumentCreateImagesAndPDFBodyWrapper**](../Model/DocumentCreateImagesAndPDFBodyWrapper.md)|  |
 **task_priority** | **int**| The priority (1-10) of the task | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentCreateODF**
> object restApiDocumentCreateODF($item_id, $body, $task_priority)

DocumentCreateODF

Generates the ODF package of the document.  Soap API equivalent is 'DocumentCreateODF'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = "item_id_example"; // string | 
$body = new \Swagger\Client\Model\DocumentCreateODFBodyWrapper(); // \Swagger\Client\Model\DocumentCreateODFBodyWrapper | 
$task_priority = 56; // int | 

try {
    $result = $apiInstance->restApiDocumentCreateODF($item_id, $body, $task_priority);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentCreateODF: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\DocumentCreateODFBodyWrapper**](../Model/DocumentCreateODFBodyWrapper.md)|  |
 **task_priority** | **int**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentCreatePDF**
> object restApiDocumentCreatePDF($item_id, $body, $task_priority)

DocumentCreatePDF

Generates a PDF of the document.  Soap API equivalent is 'DocumentCreatePDF'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = "item_id_example"; // string | The ID of the document for which to create the PDF
$body = new \Swagger\Client\Model\DocumentCreatePDFBodyWrapper(); // \Swagger\Client\Model\DocumentCreatePDFBodyWrapper | 
$task_priority = 56; // int | The priority (1-10) of the task

try {
    $result = $apiInstance->restApiDocumentCreatePDF($item_id, $body, $task_priority);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentCreatePDF: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **string**| The ID of the document for which to create the PDF |
 **body** | [**\Swagger\Client\Model\DocumentCreatePDFBodyWrapper**](../Model/DocumentCreatePDFBodyWrapper.md)|  |
 **task_priority** | **int**| The priority (1-10) of the task | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentCreatePackage**
> object restApiDocumentCreatePackage($item_id, $task_priority)

DocumentCreatePackage

Generates a CHILI Package of the document.  Soap API equivalent is 'DocumentCreatePackage'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = "item_id_example"; // string | The ID of the document for which to create the Package
$task_priority = 56; // int | The priority (1-10) of the task

try {
    $result = $apiInstance->restApiDocumentCreatePackage($item_id, $task_priority);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentCreatePackage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **string**| The ID of the document for which to create the Package |
 **task_priority** | **int**| The priority (1-10) of the task | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentCreateTempFolding**
> object restApiDocumentCreateTempFolding($item_id, $body, $task_priority)

DocumentCreateTempFolding

Generates Temp Folding output XML  Soap API equivalent is 'DocumentCreateTempFolding'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = "item_id_example"; // string | 
$body = new \Swagger\Client\Model\DocumentCreateTempFoldingBodyWrapper(); // \Swagger\Client\Model\DocumentCreateTempFoldingBodyWrapper | 
$task_priority = 56; // int | 

try {
    $result = $apiInstance->restApiDocumentCreateTempFolding($item_id, $body, $task_priority);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentCreateTempFolding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\DocumentCreateTempFoldingBodyWrapper**](../Model/DocumentCreateTempFoldingBodyWrapper.md)|  |
 **task_priority** | **int**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentCreateTempHTML**
> object restApiDocumentCreateTempHTML($body, $item_id, $task_priority)

DocumentCreateTempHTML

Generates the HTML package of the document, based on document XML which hasn't been saved yet (but is being edited in the editor, for example)  Soap API equivalent is 'DocumentCreateTempHTML'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DocumentCreateTempHTMLBodyWrapper(); // \Swagger\Client\Model\DocumentCreateTempHTMLBodyWrapper | 
$item_id = "item_id_example"; // string | 
$task_priority = 56; // int | 

try {
    $result = $apiInstance->restApiDocumentCreateTempHTML($body, $item_id, $task_priority);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentCreateTempHTML: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DocumentCreateTempHTMLBodyWrapper**](../Model/DocumentCreateTempHTMLBodyWrapper.md)|  |
 **item_id** | **string**|  | [optional]
 **task_priority** | **int**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentCreateTempIDML**
> object restApiDocumentCreateTempIDML($body, $item_id, $task_priority)

DocumentCreateTempIDML

Generates the IDML package of the document, based on document XML which hasn't been saved yet (but is being edited in the editor, for example)  Soap API equivalent is 'DocumentCreateTempIDML'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DocumentCreateTempIDMLBodyWrapper(); // \Swagger\Client\Model\DocumentCreateTempIDMLBodyWrapper | 
$item_id = "item_id_example"; // string | 
$task_priority = 56; // int | 

try {
    $result = $apiInstance->restApiDocumentCreateTempIDML($body, $item_id, $task_priority);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentCreateTempIDML: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DocumentCreateTempIDMLBodyWrapper**](../Model/DocumentCreateTempIDMLBodyWrapper.md)|  |
 **item_id** | **string**|  | [optional]
 **task_priority** | **int**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentCreateTempImages**
> object restApiDocumentCreateTempImages($image_conversion_profile_id, $body, $item_id, $task_priority)

DocumentCreateTempImages

Generates Images of all the pages in the document, based on document XML which hasn't been saved yet (but is being edited in the editor, for example)  Soap API equivalent is 'DocumentCreateTempImages'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$image_conversion_profile_id = "image_conversion_profile_id_example"; // string | The ID of the image conversion profile
$body = new \Swagger\Client\Model\DocumentCreateTempImagesBodyWrapper(); // \Swagger\Client\Model\DocumentCreateTempImagesBodyWrapper | 
$item_id = "item_id_example"; // string | The ID of the document for which to create the PDF
$task_priority = 56; // int | The priority (1-10) of the task

try {
    $result = $apiInstance->restApiDocumentCreateTempImages($image_conversion_profile_id, $body, $item_id, $task_priority);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentCreateTempImages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_conversion_profile_id** | **string**| The ID of the image conversion profile |
 **body** | [**\Swagger\Client\Model\DocumentCreateTempImagesBodyWrapper**](../Model/DocumentCreateTempImagesBodyWrapper.md)|  |
 **item_id** | **string**| The ID of the document for which to create the PDF | [optional]
 **task_priority** | **int**| The priority (1-10) of the task | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentCreateTempImagesAndPDF**
> object restApiDocumentCreateTempImagesAndPDF($image_conversion_profile_id, $body, $item_id, $task_priority)

DocumentCreateTempImagesAndPDF

Generates a zip file with PDF and images of all the pages in the document, based on document XML which hasn't been saved yet (but is being edited in the editor, for example)  Soap API equivalent is 'DocumentCreateTempImagesAndPDF'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$image_conversion_profile_id = "image_conversion_profile_id_example"; // string | The ID of the image conversion profile
$body = new \Swagger\Client\Model\DocumentCreateTempImagesAndPDFBodyWrapper(); // \Swagger\Client\Model\DocumentCreateTempImagesAndPDFBodyWrapper | 
$item_id = "item_id_example"; // string | The ID of the document for which to create the PDF
$task_priority = 56; // int | The priority (1-10) of the task

try {
    $result = $apiInstance->restApiDocumentCreateTempImagesAndPDF($image_conversion_profile_id, $body, $item_id, $task_priority);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentCreateTempImagesAndPDF: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_conversion_profile_id** | **string**| The ID of the image conversion profile |
 **body** | [**\Swagger\Client\Model\DocumentCreateTempImagesAndPDFBodyWrapper**](../Model/DocumentCreateTempImagesAndPDFBodyWrapper.md)|  |
 **item_id** | **string**| The ID of the document for which to create the PDF | [optional]
 **task_priority** | **int**| The priority (1-10) of the task | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentCreateTempODF**
> object restApiDocumentCreateTempODF($body, $item_id, $task_priority)

DocumentCreateTempODF

Generates the ODF package of the document, based on document XML which hasn't been saved yet (but is being edited in the editor, for example)  Soap API equivalent is 'DocumentCreateTempODF'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DocumentCreateTempODFBodyWrapper(); // \Swagger\Client\Model\DocumentCreateTempODFBodyWrapper | 
$item_id = "item_id_example"; // string | 
$task_priority = 56; // int | 

try {
    $result = $apiInstance->restApiDocumentCreateTempODF($body, $item_id, $task_priority);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentCreateTempODF: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DocumentCreateTempODFBodyWrapper**](../Model/DocumentCreateTempODFBodyWrapper.md)|  |
 **item_id** | **string**|  | [optional]
 **task_priority** | **int**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentCreateTempPDF**
> object restApiDocumentCreateTempPDF($body, $item_id, $task_priority)

DocumentCreateTempPDF

Generates a PDF of the document, based on document XML which hasn't been saved yet (but is being edited in the editor, for example)  Soap API equivalent is 'DocumentCreateTempPDF'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DocumentCreateTempPDFBodyWrapper(); // \Swagger\Client\Model\DocumentCreateTempPDFBodyWrapper | 
$item_id = "item_id_example"; // string | The ID of the document for which to create the PDF
$task_priority = 56; // int | The priority (1-10) of the task

try {
    $result = $apiInstance->restApiDocumentCreateTempPDF($body, $item_id, $task_priority);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentCreateTempPDF: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DocumentCreateTempPDFBodyWrapper**](../Model/DocumentCreateTempPDFBodyWrapper.md)|  |
 **item_id** | **string**| The ID of the document for which to create the PDF | [optional]
 **task_priority** | **int**| The priority (1-10) of the task | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentCreateTempPackage**
> object restApiDocumentCreateTempPackage($body, $item_id, $task_priority)

DocumentCreateTempPackage

Generates a CHILI Package of the document, based on document XML which hasn't been saved yet (but is being edited in the editor, for example)  Soap API equivalent is 'DocumentCreateTempPackage'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DocumentCreateTempPackageBodyWrapper(); // \Swagger\Client\Model\DocumentCreateTempPackageBodyWrapper | 
$item_id = "item_id_example"; // string | The ID of the document for which to create the Package
$task_priority = 56; // int | The priority (1-10) of the task

try {
    $result = $apiInstance->restApiDocumentCreateTempPackage($body, $item_id, $task_priority);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentCreateTempPackage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DocumentCreateTempPackageBodyWrapper**](../Model/DocumentCreateTempPackageBodyWrapper.md)|  |
 **item_id** | **string**| The ID of the document for which to create the Package | [optional]
 **task_priority** | **int**| The priority (1-10) of the task | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentGetAnnotations**
> object restApiDocumentGetAnnotations($item_id)

DocumentGetAnnotations

Returns information on the annotations contained in a document  Soap API equivalent is 'DocumentGetAnnotations'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = "item_id_example"; // string | The ID of the document for which to return the placed annotations

try {
    $result = $apiInstance->restApiDocumentGetAnnotations($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentGetAnnotations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **string**| The ID of the document for which to return the placed annotations |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentGetDefaultSettings**
> object restApiDocumentGetDefaultSettings($item_id, $view_type, $view_prefs_id, $constraint_id)

DocumentGetDefaultSettings

Returns default settings for an editor session. This function is used by CHILI Editor to retrieve a series of informations in one call.  Soap API equivalent is 'DocumentGetDefaultSettings'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = "item_id_example"; // string | The document's ID
$view_type = "view_type_example"; // string | If 'view',  the settings required for a Viewer are returned
$view_prefs_id = "view_prefs_id_example"; // string | Optional ID for the viewpreferences to be loaded (if not present, the default will be used)
$constraint_id = "constraint_id_example"; // string | Optional ID for the constraints to apply to the document (if not provided, the default will be used)

try {
    $result = $apiInstance->restApiDocumentGetDefaultSettings($item_id, $view_type, $view_prefs_id, $constraint_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentGetDefaultSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **string**| The document&#39;s ID | [optional]
 **view_type** | **string**| If &#39;view&#39;,  the settings required for a Viewer are returned | [optional]
 **view_prefs_id** | **string**| Optional ID for the viewpreferences to be loaded (if not present, the default will be used) | [optional]
 **constraint_id** | **string**| Optional ID for the constraints to apply to the document (if not provided, the default will be used) | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentGetDocumentEventActions**
> object restApiDocumentGetDocumentEventActions($item_id)

DocumentGetDocumentEventActions

Returns the definitions of the Document Event Actions contained in a document  Soap API equivalent is 'DocumentGetDocumentEventActions'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = "item_id_example"; // string | The document's ID

try {
    $result = $apiInstance->restApiDocumentGetDocumentEventActions($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentGetDocumentEventActions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **string**| The document&#39;s ID |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentGetFoldingViewerURL**
> object restApiDocumentGetFoldingViewerURL($body, $item_id, $folding_settings_id)

DocumentGetFoldingViewerURL

Returns a URL for viewing of a document's Folding representation  Soap API equivalent is 'DocumentGetFoldingViewerURL'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DocumentGetFoldingViewerURLBodyWrapper(); // \Swagger\Client\Model\DocumentGetFoldingViewerURLBodyWrapper | 
$item_id = "item_id_example"; // string | 
$folding_settings_id = "folding_settings_id_example"; // string | 

try {
    $result = $apiInstance->restApiDocumentGetFoldingViewerURL($body, $item_id, $folding_settings_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentGetFoldingViewerURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DocumentGetFoldingViewerURLBodyWrapper**](../Model/DocumentGetFoldingViewerURLBodyWrapper.md)|  |
 **item_id** | **string**|  |
 **folding_settings_id** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentGetHTMLEditorURL**
> object restApiDocumentGetHTMLEditorURL($item_id, $work_space_id, $view_prefs_id, $constraints_id, $viewer_only, $for_anonymous_user)

DocumentGetHTMLEditorURL

Returns a URL for editing (or viewing) of the specified document, with arguments to determine how the interface will be constructed  Soap API equivalent is 'DocumentGetHTMLEditorURL'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = "item_id_example"; // string | The document's ID
$work_space_id = "work_space_id_example"; // string | The (optional) WorkSpace ID for the Editor (emtpy string to use the default)
$view_prefs_id = "view_prefs_id_example"; // string | The (optional) ViewPreferences ID for the Editor (emtpy string to use the default)
$constraints_id = "constraints_id_example"; // string | The (optional) Constraints ID for the Editor (emtpy string to use the default)
$viewer_only = true; // bool | The (optional) DocumentConstraints ID for the Editor (emtpy string to use the default)
$for_anonymous_user = true; // bool | If true, the anonymous user's apiKey will be appended. This does require the anonymous user to have view or edit privileges on the Documents resource

try {
    $result = $apiInstance->restApiDocumentGetHTMLEditorURL($item_id, $work_space_id, $view_prefs_id, $constraints_id, $viewer_only, $for_anonymous_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentGetHTMLEditorURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **string**| The document&#39;s ID |
 **work_space_id** | **string**| The (optional) WorkSpace ID for the Editor (emtpy string to use the default) | [optional]
 **view_prefs_id** | **string**| The (optional) ViewPreferences ID for the Editor (emtpy string to use the default) | [optional]
 **constraints_id** | **string**| The (optional) Constraints ID for the Editor (emtpy string to use the default) | [optional]
 **viewer_only** | **bool**| The (optional) DocumentConstraints ID for the Editor (emtpy string to use the default) | [optional]
 **for_anonymous_user** | **bool**| If true, the anonymous user&#39;s apiKey will be appended. This does require the anonymous user to have view or edit privileges on the Documents resource | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentGetHTMLFoldingViewerURL**
> object restApiDocumentGetHTMLFoldingViewerURL($body, $item_id, $folding_settings_id)

DocumentGetHTMLFoldingViewerURL

Returns a URL for viewing of a document's Folding representation  Soap API equivalent is 'DocumentGetHTMLFoldingViewerURL'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DocumentGetHTMLFoldingViewerURLBodyWrapper(); // \Swagger\Client\Model\DocumentGetHTMLFoldingViewerURLBodyWrapper | 
$item_id = "item_id_example"; // string | 
$folding_settings_id = "folding_settings_id_example"; // string | 

try {
    $result = $apiInstance->restApiDocumentGetHTMLFoldingViewerURL($body, $item_id, $folding_settings_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentGetHTMLFoldingViewerURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DocumentGetHTMLFoldingViewerURLBodyWrapper**](../Model/DocumentGetHTMLFoldingViewerURLBodyWrapper.md)|  |
 **item_id** | **string**|  |
 **folding_settings_id** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentGetHTMLPreload**
> object restApiDocumentGetHTMLPreload($item_id, $work_space_id, $view_prefs_id, $constraints_id)

DocumentGetHTMLPreload

Returns an XML representation of the resources that need to be preloaded  Soap API equivalent is 'DocumentGetHTMLPreload'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = "item_id_example"; // string | The (optional) document's ID use 'none' for REST API
$work_space_id = "work_space_id_example"; // string | The (optional) WorkSpace ID for the Editor (emtpy string to use the default)
$view_prefs_id = "view_prefs_id_example"; // string | The (optional) ViewPreferences ID for the Editor (emtpy string to use the default)
$constraints_id = "constraints_id_example"; // string | The (optional) Constraints ID for the Editor (emtpy string to use the default)

try {
    $result = $apiInstance->restApiDocumentGetHTMLPreload($item_id, $work_space_id, $view_prefs_id, $constraints_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentGetHTMLPreload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **string**| The (optional) document&#39;s ID use &#39;none&#39; for REST API |
 **work_space_id** | **string**| The (optional) WorkSpace ID for the Editor (emtpy string to use the default) | [optional]
 **view_prefs_id** | **string**| The (optional) ViewPreferences ID for the Editor (emtpy string to use the default) | [optional]
 **constraints_id** | **string**| The (optional) Constraints ID for the Editor (emtpy string to use the default) | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentGetHTMLPreloadURL**
> object restApiDocumentGetHTMLPreloadURL($item_id, $work_space_id, $view_prefs_id, $constraints_id)

DocumentGetHTMLPreloadURL

Returns a URL for preloading the specified document, with arguments to determine how the interface will be constructed  Soap API equivalent is 'DocumentGetHTMLPreloadURL'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = "item_id_example"; // string | The (optional) document's ID use 'none' in REST API
$work_space_id = "work_space_id_example"; // string | The (optional) WorkSpace ID for the Editor (emtpy string to use the default)
$view_prefs_id = "view_prefs_id_example"; // string | The (optional) ViewPreferences ID for the Editor (emtpy string to use the default)
$constraints_id = "constraints_id_example"; // string | The (optional) Constraints ID for the Editor (emtpy string to use the default)

try {
    $result = $apiInstance->restApiDocumentGetHTMLPreloadURL($item_id, $work_space_id, $view_prefs_id, $constraints_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentGetHTMLPreloadURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **string**| The (optional) document&#39;s ID use &#39;none&#39; in REST API |
 **work_space_id** | **string**| The (optional) WorkSpace ID for the Editor (emtpy string to use the default) | [optional]
 **view_prefs_id** | **string**| The (optional) ViewPreferences ID for the Editor (emtpy string to use the default) | [optional]
 **constraints_id** | **string**| The (optional) Constraints ID for the Editor (emtpy string to use the default) | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentGetHTMLThreeDModelViewerURL**
> object restApiDocumentGetHTMLThreeDModelViewerURL($body, $item_id, $three_d_model_id)

DocumentGetHTMLThreeDModelViewerURL

Returns a URL for viewing of a document's ThreeDModel representation  Soap API equivalent is 'DocumentGetHTMLThreeDModelViewerURL'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DocumentGetHTMLThreeDModelViewerURLBodyWrapper(); // \Swagger\Client\Model\DocumentGetHTMLThreeDModelViewerURLBodyWrapper | 
$item_id = "item_id_example"; // string | 
$three_d_model_id = "three_d_model_id_example"; // string | 

try {
    $result = $apiInstance->restApiDocumentGetHTMLThreeDModelViewerURL($body, $item_id, $three_d_model_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentGetHTMLThreeDModelViewerURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DocumentGetHTMLThreeDModelViewerURLBodyWrapper**](../Model/DocumentGetHTMLThreeDModelViewerURLBodyWrapper.md)|  |
 **item_id** | **string**|  |
 **three_d_model_id** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentGetInfo**
> object restApiDocumentGetInfo($item_id, $extended)

DocumentGetInfo

Returns general information on a document in an XML format which is easier to parse than the full document XML.  Soap API equivalent is 'DocumentGetInfo'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = "item_id_example"; // string | The document's ID
$extended = true; // bool | If true, additional information is returned

try {
    $result = $apiInstance->restApiDocumentGetInfo($item_id, $extended);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentGetInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **string**| The document&#39;s ID |
 **extended** | **bool**| If true, additional information is returned | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentGetPreflightResults**
> object restApiDocumentGetPreflightResults($item_id)

DocumentGetPreflightResults

Returns information on the preflight results which were present in the document on the last save  Soap API equivalent is 'DocumentGetPreflightResults'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = "item_id_example"; // string | The document's ID

try {
    $result = $apiInstance->restApiDocumentGetPreflightResults($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentGetPreflightResults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **string**| The document&#39;s ID |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentGetThreeDModelViewerURL**
> object restApiDocumentGetThreeDModelViewerURL($body, $item_id, $three_d_model_id)

DocumentGetThreeDModelViewerURL

Returns a URL for viewing of a document's ThreeDModel representation  Soap API equivalent is 'DocumentGetThreeDModelViewerURL'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DocumentGetThreeDModelViewerURLBodyWrapper(); // \Swagger\Client\Model\DocumentGetThreeDModelViewerURLBodyWrapper | 
$item_id = "item_id_example"; // string | 
$three_d_model_id = "three_d_model_id_example"; // string | 

try {
    $result = $apiInstance->restApiDocumentGetThreeDModelViewerURL($body, $item_id, $three_d_model_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentGetThreeDModelViewerURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DocumentGetThreeDModelViewerURLBodyWrapper**](../Model/DocumentGetThreeDModelViewerURLBodyWrapper.md)|  |
 **item_id** | **string**|  |
 **three_d_model_id** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentGetUsedAssets**
> object restApiDocumentGetUsedAssets($item_id)

DocumentGetUsedAssets

Returns information on the assets contained in a document  Soap API equivalent is 'DocumentGetUsedAssets'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = "item_id_example"; // string | The document's ID

try {
    $result = $apiInstance->restApiDocumentGetUsedAssets($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentGetUsedAssets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **string**| The document&#39;s ID |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentGetVariableDefinitions**
> object restApiDocumentGetVariableDefinitions($item_id)

DocumentGetVariableDefinitions

Returns the definitions of the variables contained in a document  Soap API equivalent is 'DocumentGetVariableDefinitions'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = "item_id_example"; // string | The document's ID

try {
    $result = $apiInstance->restApiDocumentGetVariableDefinitions($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentGetVariableDefinitions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **string**| The document&#39;s ID |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentGetVariableValues**
> object restApiDocumentGetVariableValues($item_id)

DocumentGetVariableValues

Returns the values of the variables contained in a document  Soap API equivalent is 'DocumentGetVariableValues'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = "item_id_example"; // string | The document's ID

try {
    $result = $apiInstance->restApiDocumentGetVariableValues($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentGetVariableValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **string**| The document&#39;s ID |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentProcessServerSide**
> object restApiDocumentProcessServerSide($body)

DocumentProcessServerSide

Processes the document server-side.  Either an itemID or resourceXML need to be provided. If an itemID (document ID) is provided, the CLI reads the document from the CHILI DAM and saves it to the CHILI DAM.  If a resourceXML is provided, the provided XML is loaded by the CLI. The result is saved to the temp folder.                Soap API equivalent is 'DocumentProcessServerSide'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DocumentProcessServerSideBodyWrapper(); // \Swagger\Client\Model\DocumentProcessServerSideBodyWrapper | 

try {
    $result = $apiInstance->restApiDocumentProcessServerSide($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentProcessServerSide: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DocumentProcessServerSideBodyWrapper**](../Model/DocumentProcessServerSideBodyWrapper.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentSetAnnotations**
> object restApiDocumentSetAnnotations($item_id, $body, $replace_existing_annotations)

DocumentSetAnnotations

Inserts annotations into a document  Soap API equivalent is 'DocumentSetAnnotations'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = "item_id_example"; // string | The document's ID
$body = new \Swagger\Client\Model\DocumentSetAnnotationsBodyWrapper(); // \Swagger\Client\Model\DocumentSetAnnotationsBodyWrapper | 
$replace_existing_annotations = true; // bool | If true, all existing annotations will be removed from the target document before the insertion

try {
    $result = $apiInstance->restApiDocumentSetAnnotations($item_id, $body, $replace_existing_annotations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentSetAnnotations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **string**| The document&#39;s ID |
 **body** | [**\Swagger\Client\Model\DocumentSetAnnotationsBodyWrapper**](../Model/DocumentSetAnnotationsBodyWrapper.md)|  |
 **replace_existing_annotations** | **bool**| If true, all existing annotations will be removed from the target document before the insertion | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentSetAssetDirectories**
> object restApiDocumentSetAssetDirectories($document_id, $user_asset_directory, $user_group_asset_directory, $document_asset_directory)

DocumentSetAssetDirectories

Save new Asset Directory locations (doc., user, user group) for the document. Empty strings will be ignored (so the existing value will be retained). To clear an asset directory, provide the string 'empty' as the argument  Soap API equivalent is 'DocumentSetAssetDirectories'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_id = "document_id_example"; // string | The ID of the document to modify
$user_asset_directory = "user_asset_directory_example"; // string | The user asset directory
$user_group_asset_directory = "user_group_asset_directory_example"; // string | The user group asset directory
$document_asset_directory = "document_asset_directory_example"; // string | The document asset directory

try {
    $result = $apiInstance->restApiDocumentSetAssetDirectories($document_id, $user_asset_directory, $user_group_asset_directory, $document_asset_directory);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentSetAssetDirectories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_id** | **string**| The ID of the document to modify |
 **user_asset_directory** | **string**| The user asset directory | [optional]
 **user_group_asset_directory** | **string**| The user group asset directory | [optional]
 **document_asset_directory** | **string**| The document asset directory | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentSetConstraints**
> object restApiDocumentSetConstraints($item_id, $constraints_id)

DocumentSetConstraints

Applies constraints to a document.  The constraints are configured in the \"DocumentConstraints\" Resource (usually through the backoffice). These contain settings to configure naming conventions (and general settings) for the application of constraints.  The naming conventions are used to update the document (you will see the constraints in the DocumentConstraints, Page Settings, Layer Settings and Frame Constraints panel items in CHILI Editor)  Soap API equivalent is 'DocumentSetConstraints'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = "item_id_example"; // string | The document's ID
$constraints_id = "constraints_id_example"; // string | The ID of the DocumentConstraints resource item

try {
    $result = $apiInstance->restApiDocumentSetConstraints($item_id, $constraints_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentSetConstraints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **string**| The document&#39;s ID |
 **constraints_id** | **string**| The ID of the DocumentConstraints resource item |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentSetDataSource**
> object restApiDocumentSetDataSource($item_id, $body)

DocumentSetDataSource

Sets a datasource on a document  Soap API equivalent is 'DocumentSetDataSource'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = "item_id_example"; // string | 
$body = new \Swagger\Client\Model\DocumentSetDataSourceBodyWrapper(); // \Swagger\Client\Model\DocumentSetDataSourceBodyWrapper | 

try {
    $result = $apiInstance->restApiDocumentSetDataSource($item_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentSetDataSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\DocumentSetDataSourceBodyWrapper**](../Model/DocumentSetDataSourceBodyWrapper.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentSetDocumentEventActions**
> object restApiDocumentSetDocumentEventActions($item_id, $body, $replace_existing_actions)

DocumentSetDocumentEventActions

Applies Document Event Action definitions to a document  Soap API equivalent is 'DocumentSetDocumentEventActions'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = "item_id_example"; // string | The document's ID
$body = new \Swagger\Client\Model\DocumentSetDocumentEventActionsBodyWrapper(); // \Swagger\Client\Model\DocumentSetDocumentEventActionsBodyWrapper | 
$replace_existing_actions = true; // bool | If true, all existing actions will be removed from the target document before insertion of the new ones

try {
    $result = $apiInstance->restApiDocumentSetDocumentEventActions($item_id, $body, $replace_existing_actions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentSetDocumentEventActions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **string**| The document&#39;s ID |
 **body** | [**\Swagger\Client\Model\DocumentSetDocumentEventActionsBodyWrapper**](../Model/DocumentSetDocumentEventActionsBodyWrapper.md)|  |
 **replace_existing_actions** | **bool**| If true, all existing actions will be removed from the target document before insertion of the new ones | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentSetVariableDefinitions**
> object restApiDocumentSetVariableDefinitions($item_id, $body, $replace_existing_variables)

DocumentSetVariableDefinitions

Applies variable definitions to a document  Soap API equivalent is 'DocumentSetVariableDefinitions'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = "item_id_example"; // string | The document's ID
$body = new \Swagger\Client\Model\DocumentSetVariableDefinitionsBodyWrapper(); // \Swagger\Client\Model\DocumentSetVariableDefinitionsBodyWrapper | 
$replace_existing_variables = true; // bool | If true, all existing variables will be removed from the target document before insertion of the new ones

try {
    $result = $apiInstance->restApiDocumentSetVariableDefinitions($item_id, $body, $replace_existing_variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentSetVariableDefinitions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **string**| The document&#39;s ID |
 **body** | [**\Swagger\Client\Model\DocumentSetVariableDefinitionsBodyWrapper**](../Model/DocumentSetVariableDefinitionsBodyWrapper.md)|  |
 **replace_existing_variables** | **bool**| If true, all existing variables will be removed from the target document before insertion of the new ones | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDocumentSetVariableValues**
> object restApiDocumentSetVariableValues($item_id, $body)

DocumentSetVariableValues

Sets the values of variables in a document  Soap API equivalent is 'DocumentSetVariableValues'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = "item_id_example"; // string | The document's ID
$body = new \Swagger\Client\Model\DocumentSetVariableValuesBodyWrapper(); // \Swagger\Client\Model\DocumentSetVariableValuesBodyWrapper | 

try {
    $result = $apiInstance->restApiDocumentSetVariableValues($item_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDocumentSetVariableValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **string**| The document&#39;s ID |
 **body** | [**\Swagger\Client\Model\DocumentSetVariableValuesBodyWrapper**](../Model/DocumentSetVariableValuesBodyWrapper.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDownloadAssets**
> object restApiDownloadAssets($resource_type, $id, $path, $name, $type, $page, $client_app, $color_type, $no_content_header, $task_id, $doc_id, $scale, $ipad_item_path, $transformation_id, $transformation_name, $async, $task_priority)

DownloadAssets

Download an Asset from the server  Soap API equivalent is 'DownloadAssets'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_type = "resource_type_example"; // string | 
$id = "id_example"; // string | 
$path = "path_example"; // string | 
$name = "name_example"; // string | 
$type = "type_example"; // string | 
$page = 56; // int | 
$client_app = "client_app_example"; // string | 
$color_type = "color_type_example"; // string | 
$no_content_header = true; // bool | 
$task_id = "task_id_example"; // string | 
$doc_id = "doc_id_example"; // string | 
$scale = 56; // int | 
$ipad_item_path = "ipad_item_path_example"; // string | 
$transformation_id = "transformation_id_example"; // string | 
$transformation_name = "transformation_name_example"; // string | 
$async = true; // bool | 
$task_priority = 56; // int | 

try {
    $result = $apiInstance->restApiDownloadAssets($resource_type, $id, $path, $name, $type, $page, $client_app, $color_type, $no_content_header, $task_id, $doc_id, $scale, $ipad_item_path, $transformation_id, $transformation_name, $async, $task_priority);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDownloadAssets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_type** | **string**|  |
 **id** | **string**|  | [optional]
 **path** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **type** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **client_app** | **string**|  | [optional]
 **color_type** | **string**|  | [optional]
 **no_content_header** | **bool**|  | [optional]
 **task_id** | **string**|  | [optional]
 **doc_id** | **string**|  | [optional]
 **scale** | **int**|  | [optional]
 **ipad_item_path** | **string**|  | [optional]
 **transformation_id** | **string**|  | [optional]
 **transformation_name** | **string**|  | [optional]
 **async** | **bool**|  | [optional]
 **task_priority** | **int**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDownloadDatasourceSample**
> object restApiDownloadDatasourceSample($name, $id)

DownloadDatasourceSample

Download a Datasource from the server  Soap API equivalent is 'DownloadDatasourceSample'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->restApiDownloadDatasourceSample($name, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDownloadDatasourceSample: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  | [optional]
 **id** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDownloadExternal**
> object restApiDownloadExternal($path)

DownloadExternal

Download an external resource  Soap API equivalent is 'DownloadExternal'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 

try {
    $result = $apiInstance->restApiDownloadExternal($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDownloadExternal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDownloadFolding**
> object restApiDownloadFolding($id, $type, $folding_id)

DownloadFolding

Download a Folding from the server  Soap API equivalent is 'DownloadFolding'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$type = "type_example"; // string | 
$folding_id = "folding_id_example"; // string | 

try {
    $result = $apiInstance->restApiDownloadFolding($id, $type, $folding_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDownloadFolding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | [optional]
 **type** | **string**|  | [optional]
 **folding_id** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDownloadFontPreview**
> object restApiDownloadFontPreview($type, $width, $height, $alphabet, $id, $name, $task_id, $task_priority, $async)

DownloadFontPreview

Download a Font Preview from the server  Soap API equivalent is 'DownloadFontPreview'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = "type_example"; // string | 
$width = 56; // int | 
$height = 56; // int | 
$alphabet = "alphabet_example"; // string | 
$id = "id_example"; // string | 
$name = "name_example"; // string | 
$task_id = "task_id_example"; // string | 
$task_priority = 56; // int | 
$async = true; // bool | 

try {
    $result = $apiInstance->restApiDownloadFontPreview($type, $width, $height, $alphabet, $id, $name, $task_id, $task_priority, $async);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDownloadFontPreview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**|  |
 **width** | **int**|  |
 **height** | **int**|  |
 **alphabet** | **string**|  | [optional]
 **id** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **task_id** | **string**|  | [optional]
 **task_priority** | **int**|  | [optional]
 **async** | **bool**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDownloadIcons**
> object restApiDownloadIcons($environment, $set, $icon, $prefer_svg, $is_cursor, $temp_path)

DownloadIcons

Download Icons from the server  Soap API equivalent is 'DownloadIcons'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment = "environment_example"; // string | 
$set = "set_example"; // string | 
$icon = "icon_example"; // string | 
$prefer_svg = true; // bool | 
$is_cursor = true; // bool | 
$temp_path = "temp_path_example"; // string | 

try {
    $result = $apiInstance->restApiDownloadIcons($environment, $set, $icon, $prefer_svg, $is_cursor, $temp_path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDownloadIcons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **environment** | **string**|  | [optional]
 **set** | **string**|  | [optional]
 **icon** | **string**|  | [optional]
 **prefer_svg** | **bool**|  | [optional]
 **is_cursor** | **bool**|  | [optional]
 **temp_path** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDownloadLoginBackground**
> object restApiDownloadLoginBackground($env, $type)

DownloadLoginBackground

Download a Login Background from the server  Soap API equivalent is 'DownloadLoginBackground'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$env = "env_example"; // string | 
$type = "type_example"; // string | 

try {
    $result = $apiInstance->restApiDownloadLoginBackground($env, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDownloadLoginBackground: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **env** | **string**|  | [optional]
 **type** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDownloadReflectionMap**
> object restApiDownloadReflectionMap($name, $side)

DownloadReflectionMap

Download a Reflection Map from the server  Soap API equivalent is 'DownloadReflectionMap'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$side = "side_example"; // string | 

try {
    $result = $apiInstance->restApiDownloadReflectionMap($name, $side);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDownloadReflectionMap: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  | [optional]
 **side** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiDownloadTempFile**
> object restApiDownloadTempFile($asset_type, $path, $data, $dynamic_asset_provider_id, $no_content_header)

DownloadTempFile

Download a temporary asset file from the server  Soap API equivalent is 'DownloadTempFile'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset_type = "asset_type_example"; // string | 
$path = "path_example"; // string | 
$data = "data_example"; // string | 
$dynamic_asset_provider_id = "dynamic_asset_provider_id_example"; // string | 
$no_content_header = true; // bool | 

try {
    $result = $apiInstance->restApiDownloadTempFile($asset_type, $path, $data, $dynamic_asset_provider_id, $no_content_header);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiDownloadTempFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_type** | **string**|  |
 **path** | **string**|  | [optional]
 **data** | **string**|  | [optional]
 **dynamic_asset_provider_id** | **string**|  | [optional]
 **no_content_header** | **bool**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiFontGetIncludedGlyphs**
> object restApiFontGetIncludedGlyphs($font_id)

FontGetIncludedGlyphs

Returns an XML document containing ranges of glyphs (and their availibility) in the font  Soap API equivalent is 'FontGetIncludedGlyphs'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$font_id = "font_id_example"; // string | The ID of the font

try {
    $result = $apiInstance->restApiFontGetIncludedGlyphs($font_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiFontGetIncludedGlyphs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **font_id** | **string**| The ID of the font |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceFolderAdd**
> object restApiResourceFolderAdd($resource_name, $new_name, $parent_path)

ResourceFolderAdd

Adds a folder to a Resource (if it is of type directory_object or directory_file  Soap API equivalent is 'ResourceFolderAdd'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the resource in which to add a folder
$new_name = "new_name_example"; // string | The name for the new folder
$parent_path = "parent_path_example"; // string | The location of the folder

try {
    $result = $apiInstance->restApiResourceFolderAdd($resource_name, $new_name, $parent_path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceFolderAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the resource in which to add a folder |
 **new_name** | **string**| The name for the new folder |
 **parent_path** | **string**| The location of the folder | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceFolderCopy**
> object restApiResourceFolderCopy($resource_name, $folder_path, $new_folder_path, $include_sub_folders)

ResourceFolderCopy

Copies a Resource folder to a new location in the Resource's tree  Soap API equivalent is 'ResourceFolderCopy'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | Name of the Resource in which to find the folder
$folder_path = "folder_path_example"; // string | The folder to move
$new_folder_path = "new_folder_path_example"; // string | The new folder location
$include_sub_folders = true; // bool | 

try {
    $result = $apiInstance->restApiResourceFolderCopy($resource_name, $folder_path, $new_folder_path, $include_sub_folders);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceFolderCopy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| Name of the Resource in which to find the folder |
 **folder_path** | **string**| The folder to move |
 **new_folder_path** | **string**| The new folder location |
 **include_sub_folders** | **bool**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceFolderDelete**
> object restApiResourceFolderDelete($resource_name, $relative_path)

ResourceFolderDelete

Removes a folder from a Resource tree (if it is of type directory_object or directory_file  Soap API equivalent is 'ResourceFolderDelete'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the resource in which to delete the folder
$relative_path = "relative_path_example"; // string | The relative path (in the resource's tree) of the folder to delete

try {
    $result = $apiInstance->restApiResourceFolderDelete($resource_name, $relative_path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceFolderDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the resource in which to delete the folder |
 **relative_path** | **string**| The relative path (in the resource&#39;s tree) of the folder to delete |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceFolderMove**
> object restApiResourceFolderMove($resource_name, $folder_path, $new_folder_path)

ResourceFolderMove

Moves a Resource folder to a new location in the Resource's tree  Soap API equivalent is 'ResourceFolderMove'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | Name of the Resource in which to find the folder
$folder_path = "folder_path_example"; // string | The folder to move
$new_folder_path = "new_folder_path_example"; // string | The new folder location

try {
    $result = $apiInstance->restApiResourceFolderMove($resource_name, $folder_path, $new_folder_path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceFolderMove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| Name of the Resource in which to find the folder |
 **folder_path** | **string**| The folder to move |
 **new_folder_path** | **string**| The new folder location |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceGetHistory**
> object restApiResourceGetHistory($resource_name)

ResourceGetHistory

Returns the history of a Resource  Soap API equivalent is 'ResourceGetHistory'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the resource

try {
    $result = $apiInstance->restApiResourceGetHistory($resource_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceGetHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the resource |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceGetTree**
> object restApiResourceGetTree($resource_name, $parent_folder, $include_sub_directories, $include_files)

ResourceGetTree

Returns the tree structure of the Resource (if the type of the resource is \"directory_file\" or \"directory_object\")  Soap API equivalent is 'ResourceGetTree'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the resource
$parent_folder = "parent_folder_example"; // string | The folder where to start listing contents
$include_sub_directories = true; // bool | If true, the tree also contains the directories under parentFolder
$include_files = true; // bool | If true, the tree structure is returned including files (ResourceItems)

try {
    $result = $apiInstance->restApiResourceGetTree($resource_name, $parent_folder, $include_sub_directories, $include_files);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceGetTree: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the resource |
 **parent_folder** | **string**| The folder where to start listing contents | [optional]
 **include_sub_directories** | **bool**| If true, the tree also contains the directories under parentFolder | [optional]
 **include_files** | **bool**| If true, the tree structure is returned including files (ResourceItems) | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceGetTreeLevel**
> object restApiResourceGetTreeLevel($resource_name, $parent_folder, $num_levels, $include_sub_directories, $include_files)

ResourceGetTreeLevel

Returns the tree structure of the Resource (if the type of the resource is \"directory_file\" or \"directory_object\"), with a maximum number of sub-folders included. Use '1' to get the files and folders without any files inside the folders  Soap API equivalent is 'ResourceGetTreeLevel'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the resource
$parent_folder = "parent_folder_example"; // string | The folder where to start listing contents
$num_levels = 56; // int | The amount of levels to return
$include_sub_directories = true; // bool | If true, the tree also contains the directories under parentFolder
$include_files = true; // bool | If true, the tree structure is returned including files (ResourceItems)

try {
    $result = $apiInstance->restApiResourceGetTreeLevel($resource_name, $parent_folder, $num_levels, $include_sub_directories, $include_files);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceGetTreeLevel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the resource |
 **parent_folder** | **string**| The folder where to start listing contents | [optional]
 **num_levels** | **int**| The amount of levels to return | [optional]
 **include_sub_directories** | **bool**| If true, the tree also contains the directories under parentFolder | [optional]
 **include_files** | **bool**| If true, the tree structure is returned including files (ResourceItems) | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceItemAdd**
> object restApiResourceItemAdd($resource_name, $new_name, $body, $folder_path)

ResourceItemAdd

Adds a ResourceItem to the specified Resource, and returns its definition XML  Soap API equivalent is 'ResourceItemAdd'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the resource
$new_name = "new_name_example"; // string | The name of the new resource item
$body = new \Swagger\Client\Model\ResourceItemAddBodyWrapper(); // \Swagger\Client\Model\ResourceItemAddBodyWrapper | 
$folder_path = "folder_path_example"; // string | The relative path of the resource item in the resource's tree (for resources of type directory_object or directory_file)

try {
    $result = $apiInstance->restApiResourceItemAdd($resource_name, $new_name, $body, $folder_path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceItemAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the resource |
 **new_name** | **string**| The name of the new resource item |
 **body** | [**\Swagger\Client\Model\ResourceItemAddBodyWrapper**](../Model/ResourceItemAddBodyWrapper.md)|  |
 **folder_path** | **string**| The relative path of the resource item in the resource&#39;s tree (for resources of type directory_object or directory_file) | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceItemAddFromURL**
> object restApiResourceItemAddFromURL($resource_name, $new_name, $folder_path, $url, $login, $pw, $reuse_existing, $preview_file_url, $preview_extension, $is_permanent_preview)

ResourceItemAddFromURL

Adds a ResourceItem by downloading the underlying file from an external URL  Soap API equivalent is 'ResourceItemAddFromURL'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the resource
$new_name = "new_name_example"; // string | The name for the new resource item
$folder_path = "folder_path_example"; // string | Location for the new ResourceItem.
$url = "url_example"; // string | URL to download (needs to be accessible from the CHILI server)
$login = "login_example"; // string | Optional user name for authentication into the URL (passed on using Basic Authentication)
$pw = "pw_example"; // string | Optional user password for authentication into the URL (passed on using Basic Authentication)
$reuse_existing = true; // bool | If true, the function will check if an item already exists in the Resource with the provided path/name. If it does, the existing ResourceItem is returned, and the URL is not downloaded.
$preview_file_url = "preview_file_url_example"; // string | Optional URL to a preview file. If provided, this is downloaded and used as a preview override file.
$preview_extension = "preview_extension_example"; // string | The extension of the downloaded preview file (if provided)
$is_permanent_preview = true; // bool | If true, the provided preview override file remains valid even after the ResourceItem is modified

try {
    $result = $apiInstance->restApiResourceItemAddFromURL($resource_name, $new_name, $folder_path, $url, $login, $pw, $reuse_existing, $preview_file_url, $preview_extension, $is_permanent_preview);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceItemAddFromURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the resource |
 **new_name** | **string**| The name for the new resource item |
 **folder_path** | **string**| Location for the new ResourceItem. |
 **url** | **string**| URL to download (needs to be accessible from the CHILI server) |
 **login** | **string**| Optional user name for authentication into the URL (passed on using Basic Authentication) | [optional]
 **pw** | **string**| Optional user password for authentication into the URL (passed on using Basic Authentication) | [optional]
 **reuse_existing** | **bool**| If true, the function will check if an item already exists in the Resource with the provided path/name. If it does, the existing ResourceItem is returned, and the URL is not downloaded. | [optional]
 **preview_file_url** | **string**| Optional URL to a preview file. If provided, this is downloaded and used as a preview override file. | [optional]
 **preview_extension** | **string**| The extension of the downloaded preview file (if provided) | [optional]
 **is_permanent_preview** | **bool**| If true, the provided preview override file remains valid even after the ResourceItem is modified | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceItemAddFromURLWithModificationDate**
> object restApiResourceItemAddFromURLWithModificationDate($resource_name, $new_name, $folder_path, $url, $body, $login, $pw, $reuse_existing, $preview_file_url, $preview_extension, $is_permanent_preview, $modification_date)

ResourceItemAddFromURLWithModificationDate

Adds a ResourceItem by downloading the underlying file from an external URL  Soap API equivalent is 'ResourceItemAddFromURLWithModificationDate'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the resource
$new_name = "new_name_example"; // string | The name for the new resource item
$folder_path = "folder_path_example"; // string | Location for the new ResourceItem.
$url = "url_example"; // string | URL to download (needs to be accessible from the CHILI server)
$body = new \Swagger\Client\Model\ResourceItemAddFromURLWithModificationDateBodyWrapper(); // \Swagger\Client\Model\ResourceItemAddFromURLWithModificationDateBodyWrapper | 
$login = "login_example"; // string | Optional user name for authentication into the URL (passed on using Basic Authentication)
$pw = "pw_example"; // string | Optional user password for authentication into the URL (passed on using Basic Authentication)
$reuse_existing = true; // bool | If true, the function will check if an item already exists in the Resource with the provided path/name. If it does, the existing ResourceItem is returned, and the URL is not downloaded.
$preview_file_url = "preview_file_url_example"; // string | Optional URL to a preview file. If provided, this is downloaded and used as a preview override file.
$preview_extension = "preview_extension_example"; // string | The extension of the downloaded preview file (if provided)
$is_permanent_preview = true; // bool | If true, the provided preview override file remains valid even after the ResourceItem is modified
$modification_date = "modification_date_example"; // string | Modification date (should be the same format and timezone as GetServerDate api call returns) of the external resource

try {
    $result = $apiInstance->restApiResourceItemAddFromURLWithModificationDate($resource_name, $new_name, $folder_path, $url, $body, $login, $pw, $reuse_existing, $preview_file_url, $preview_extension, $is_permanent_preview, $modification_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceItemAddFromURLWithModificationDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the resource |
 **new_name** | **string**| The name for the new resource item |
 **folder_path** | **string**| Location for the new ResourceItem. |
 **url** | **string**| URL to download (needs to be accessible from the CHILI server) |
 **body** | [**\Swagger\Client\Model\ResourceItemAddFromURLWithModificationDateBodyWrapper**](../Model/ResourceItemAddFromURLWithModificationDateBodyWrapper.md)|  |
 **login** | **string**| Optional user name for authentication into the URL (passed on using Basic Authentication) | [optional]
 **pw** | **string**| Optional user password for authentication into the URL (passed on using Basic Authentication) | [optional]
 **reuse_existing** | **bool**| If true, the function will check if an item already exists in the Resource with the provided path/name. If it does, the existing ResourceItem is returned, and the URL is not downloaded. | [optional]
 **preview_file_url** | **string**| Optional URL to a preview file. If provided, this is downloaded and used as a preview override file. | [optional]
 **preview_extension** | **string**| The extension of the downloaded preview file (if provided) | [optional]
 **is_permanent_preview** | **bool**| If true, the provided preview override file remains valid even after the ResourceItem is modified | [optional]
 **modification_date** | **string**| Modification date (should be the same format and timezone as GetServerDate api call returns) of the external resource | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceItemAddPreviewOverride**
> object restApiResourceItemAddPreviewOverride($resource_name, $item_id, $body, $preview_extension, $is_permanent_preview)

ResourceItemAddPreviewOverride

Adds an override file to the ResourceItem, which is used to generate previews  Soap API equivalent is 'ResourceItemAddPreviewOverride'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the resource
$item_id = "item_id_example"; // string | The ID of the item
$body = new \Swagger\Client\Model\ResourceItemAddPreviewOverrideBodyWrapper(); // \Swagger\Client\Model\ResourceItemAddPreviewOverrideBodyWrapper | 
$preview_extension = "preview_extension_example"; // string | Extension (\"jpg\", \"png\", ...) of the preview file
$is_permanent_preview = true; // bool | If true, the preview override remains valid even after the resource item is modified

try {
    $result = $apiInstance->restApiResourceItemAddPreviewOverride($resource_name, $item_id, $body, $preview_extension, $is_permanent_preview);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceItemAddPreviewOverride: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the resource |
 **item_id** | **string**| The ID of the item |
 **body** | [**\Swagger\Client\Model\ResourceItemAddPreviewOverrideBodyWrapper**](../Model/ResourceItemAddPreviewOverrideBodyWrapper.md)|  |
 **preview_extension** | **string**| Extension (\&quot;jpg\&quot;, \&quot;png\&quot;, ...) of the preview file | [optional]
 **is_permanent_preview** | **bool**| If true, the preview override remains valid even after the resource item is modified | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceItemAddWithPreview**
> object restApiResourceItemAddWithPreview($resource_name, $new_name, $folder_path, $body, $preview_extension, $is_permanent_preview)

ResourceItemAddWithPreview

Adds a ResourceItem to a Resource, and returns its definition XML.  To prevent previews from being generated automatically while you intend to supply an override file, this function allows you to pass both at the same time.  Soap API equivalent is 'ResourceItemAddWithPreview'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The resource name
$new_name = "new_name_example"; // string | The name of the new resource item
$folder_path = "folder_path_example"; // string | The relative path of the resource item in the resource's tree (for resources of type directory_object or directory_file)
$body = new \Swagger\Client\Model\ResourceItemAddWithPreviewBodyWrapper(); // \Swagger\Client\Model\ResourceItemAddWithPreviewBodyWrapper | 
$preview_extension = "preview_extension_example"; // string | The extension of the preview file. If previewFileData contains a path, the extension is optional
$is_permanent_preview = true; // bool | If true, the preview override remains valid even after the resource item is modified

try {
    $result = $apiInstance->restApiResourceItemAddWithPreview($resource_name, $new_name, $folder_path, $body, $preview_extension, $is_permanent_preview);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceItemAddWithPreview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The resource name |
 **new_name** | **string**| The name of the new resource item |
 **folder_path** | **string**| The relative path of the resource item in the resource&#39;s tree (for resources of type directory_object or directory_file) |
 **body** | [**\Swagger\Client\Model\ResourceItemAddWithPreviewBodyWrapper**](../Model/ResourceItemAddWithPreviewBodyWrapper.md)|  |
 **preview_extension** | **string**| The extension of the preview file. If previewFileData contains a path, the extension is optional | [optional]
 **is_permanent_preview** | **bool**| If true, the preview override remains valid even after the resource item is modified | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceItemCopy**
> object restApiResourceItemCopy($resource_name, $item_id, $new_name, $folder_path)

ResourceItemCopy

Copies a ResourceItem, and returns the definition XML of the new item.  Soap API equivalent is 'ResourceItemCopy'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the resource
$item_id = "item_id_example"; // string | The ID of the item to copy
$new_name = "new_name_example"; // string | The name for the new ResourceItem
$folder_path = "folder_path_example"; // string | The location (relative path within the Resource's tree) for the new ResourceItem

try {
    $result = $apiInstance->restApiResourceItemCopy($resource_name, $item_id, $new_name, $folder_path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceItemCopy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the resource |
 **item_id** | **string**| The ID of the item to copy |
 **new_name** | **string**| The name for the new ResourceItem |
 **folder_path** | **string**| The location (relative path within the Resource&#39;s tree) for the new ResourceItem | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceItemDelete**
> object restApiResourceItemDelete($resource_name, $item_id)

ResourceItemDelete

Deletes a ResourceItem  Soap API equivalent is 'ResourceItemDelete'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the resource
$item_id = "item_id_example"; // string | The ID of the ResourceItem to delete

try {
    $result = $apiInstance->restApiResourceItemDelete($resource_name, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceItemDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the resource |
 **item_id** | **string**| The ID of the ResourceItem to delete |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceItemGetByIdOrPath**
> object restApiResourceItemGetByIdOrPath($resource_name, $item_id_or_path, $include_sub_folders)

ResourceItemGetByIdOrPath

Returns a ResourceItem based on its ID (checked first) or path in the Resource's tree (or, if the resource is of type list, its name)  Soap API equivalent is 'ResourceItemGetByIdOrPath'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the resource
$item_id_or_path = "item_id_or_path_example"; // string | The id or relative path to the Resource Item to find
$include_sub_folders = true; // bool | If true, search will include subfolders

try {
    $result = $apiInstance->restApiResourceItemGetByIdOrPath($resource_name, $item_id_or_path, $include_sub_folders);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceItemGetByIdOrPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the resource |
 **item_id_or_path** | **string**| The id or relative path to the Resource Item to find |
 **include_sub_folders** | **bool**| If true, search will include subfolders | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceItemGetByName**
> object restApiResourceItemGetByName($resource_name, $item_name)

ResourceItemGetByName

Gets the definition XML of a ResourceItem based on its name. For Resources of type directory_object or directory_list, the first found item (being the oldest) is returned  Soap API equivalent is 'ResourceItemGetByName'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the resource
$item_name = "item_name_example"; // string | The name of the Resource Item to find

try {
    $result = $apiInstance->restApiResourceItemGetByName($resource_name, $item_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceItemGetByName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the resource |
 **item_name** | **string**| The name of the Resource Item to find |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceItemGetByPath**
> object restApiResourceItemGetByPath($resource_name, $item_path, $include_sub_folders)

ResourceItemGetByPath

Returns a ResourceItem based on its path in the Resource's tree  Soap API equivalent is 'ResourceItemGetByPath'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the resource
$item_path = "item_path_example"; // string | The relative path to the Resource Item to find
$include_sub_folders = true; // bool | If true, search will include subfolders

try {
    $result = $apiInstance->restApiResourceItemGetByPath($resource_name, $item_path, $include_sub_folders);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceItemGetByPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the resource |
 **item_path** | **string**| The relative path to the Resource Item to find |
 **include_sub_folders** | **bool**| If true, search will include subfolders | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceItemGetCacheInfo**
> object restApiResourceItemGetCacheInfo($resource_name, $item_id)

ResourceItemGetCacheInfo

Returns XML describing the state of the cache (previews, ...) of the ResourceItem  Soap API equivalent is 'ResourceItemGetCacheInfo'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the resource
$item_id = "item_id_example"; // string | The ID of the resource item

try {
    $result = $apiInstance->restApiResourceItemGetCacheInfo($resource_name, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceItemGetCacheInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the resource |
 **item_id** | **string**| The ID of the resource item |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceItemGetCustomMetaData**
> object restApiResourceItemGetCustomMetaData($resource_name, $id, $set_name)

ResourceItemGetCustomMetaData

Returns metadata of the object  Soap API equivalent is 'ResourceItemGetCustomMetaData'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | 
$id = "id_example"; // string | 
$set_name = "set_name_example"; // string | 

try {
    $result = $apiInstance->restApiResourceItemGetCustomMetaData($resource_name, $id, $set_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceItemGetCustomMetaData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**|  |
 **id** | **string**|  |
 **set_name** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceItemGetDefinitionXML**
> object restApiResourceItemGetDefinitionXML($resource_name, $item_id)

ResourceItemGetDefinitionXML

Returns the definition XML of a ResourceItem  Soap API equivalent is 'ResourceItemGetDefinitionXML'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the resource
$item_id = "item_id_example"; // string | The ID of the ResourceItem

try {
    $result = $apiInstance->restApiResourceItemGetDefinitionXML($resource_name, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceItemGetDefinitionXML: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the resource |
 **item_id** | **string**| The ID of the ResourceItem |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceItemGetHistory**
> object restApiResourceItemGetHistory($resource_name, $item_id)

ResourceItemGetHistory

Returns the history of a ResourceItem  Soap API equivalent is 'ResourceItemGetHistory'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the resource
$item_id = "item_id_example"; // string | The ID of the ResourceItem

try {
    $result = $apiInstance->restApiResourceItemGetHistory($resource_name, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceItemGetHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the resource |
 **item_id** | **string**| The ID of the ResourceItem |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceItemGetPrivateInfo**
> object restApiResourceItemGetPrivateInfo($resource_name, $item_id)

ResourceItemGetPrivateInfo

Returns XML describing the state of the private data (previewErrors, fileinfo, ...) of the ResourceItem  Soap API equivalent is 'ResourceItemGetPrivateInfo'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the resource
$item_id = "item_id_example"; // string | The ID of the resource item

try {
    $result = $apiInstance->restApiResourceItemGetPrivateInfo($resource_name, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceItemGetPrivateInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the resource |
 **item_id** | **string**| The ID of the resource item |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceItemGetTransformedURL**
> object restApiResourceItemGetTransformedURL($resource_name, $item_id, $type, $transformation_id, $page_num)

ResourceItemGetTransformedURL

Returns a url pointing to the preview (in the specified type and for the specified page, and with the provided Transformation effects) of the ResourceItem  Soap API equivalent is 'ResourceItemGetTransformedURL'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the Resource
$item_id = "item_id_example"; // string | The ID of the ResourceItem
$type = "type_example"; // string | The type of URL
$transformation_id = "transformation_id_example"; // string | 
$page_num = 56; // int | The page number (1-based)

try {
    $result = $apiInstance->restApiResourceItemGetTransformedURL($resource_name, $item_id, $type, $transformation_id, $page_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceItemGetTransformedURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the Resource |
 **item_id** | **string**| The ID of the ResourceItem |
 **type** | **string**| The type of URL |
 **transformation_id** | **string**|  | [optional]
 **page_num** | **int**| The page number (1-based) | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceItemGetTransformedURLWithDebugInfo**
> object restApiResourceItemGetTransformedURLWithDebugInfo($resource_name, $item_id, $type, $transformation_id, $page_num)

ResourceItemGetTransformedURLWithDebugInfo

Returns a url pointing to the preview (in the specified type and for the specified page, and with the provided Transformation effects) of the ResourceItem, similar to ResourceItemGetTransformedURL. But the current function also includes information which can be used to debug the generated preview (file size, dimensions, ...)  Soap API equivalent is 'ResourceItemGetTransformedURLWithDebugInfo'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the Resource
$item_id = "item_id_example"; // string | The ID of the ResourceItem
$type = "type_example"; // string | The type of URL
$transformation_id = "transformation_id_example"; // string | 
$page_num = 56; // int | The page number (1-based)

try {
    $result = $apiInstance->restApiResourceItemGetTransformedURLWithDebugInfo($resource_name, $item_id, $type, $transformation_id, $page_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceItemGetTransformedURLWithDebugInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the Resource |
 **item_id** | **string**| The ID of the ResourceItem |
 **type** | **string**| The type of URL |
 **transformation_id** | **string**|  | [optional]
 **page_num** | **int**| The page number (1-based) | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceItemGetURL**
> object restApiResourceItemGetURL($resource_name, $item_id, $type, $page_num)

ResourceItemGetURL

Returns a url pointing to the preview (in the specified type and for the specified page) of the ResourceItem  Soap API equivalent is 'ResourceItemGetURL'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the Resource
$item_id = "item_id_example"; // string | The ID of the ResourceItem
$type = "type_example"; // string | The type of URL
$page_num = 56; // int | The page number (1-based)

try {
    $result = $apiInstance->restApiResourceItemGetURL($resource_name, $item_id, $type, $page_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceItemGetURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the Resource |
 **item_id** | **string**| The ID of the ResourceItem |
 **type** | **string**| The type of URL |
 **page_num** | **int**| The page number (1-based) | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceItemGetURLForAnonymousUser**
> object restApiResourceItemGetURLForAnonymousUser($resource_name, $item_id, $type, $page_num)

ResourceItemGetURLForAnonymousUser

Returns a url pointing to the preview (in the specified type and for the specified page) of the ResourceItem.  The URL contains an apiKey for the Anonymous user (which does not expire, and has highly limited privileges).  Soap API equivalent is 'ResourceItemGetURLForAnonymousUser'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the Resource
$item_id = "item_id_example"; // string | The ID of the ResourceItem
$type = "type_example"; // string | The type of preview
$page_num = 56; // int | The page number (1-based)

try {
    $result = $apiInstance->restApiResourceItemGetURLForAnonymousUser($resource_name, $item_id, $type, $page_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceItemGetURLForAnonymousUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the Resource |
 **item_id** | **string**| The ID of the ResourceItem |
 **type** | **string**| The type of preview |
 **page_num** | **int**| The page number (1-based) | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceItemGetURLWithDebugInfo**
> object restApiResourceItemGetURLWithDebugInfo($resource_name, $item_id, $type, $page_num)

ResourceItemGetURLWithDebugInfo

Returns a url pointing to the preview (in the specified type and for the specified page) of the ResourceItem, similar to ResourceItemGetURL. But the current function also includes information which can be used to debug the generated preview (file size, dimensions, ...)  Soap API equivalent is 'ResourceItemGetURLWithDebugInfo'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the Resource
$item_id = "item_id_example"; // string | The ID of the ResourceItem
$type = "type_example"; // string | The type of URL
$page_num = 56; // int | The page number (1-based)

try {
    $result = $apiInstance->restApiResourceItemGetURLWithDebugInfo($resource_name, $item_id, $type, $page_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceItemGetURLWithDebugInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the Resource |
 **item_id** | **string**| The ID of the ResourceItem |
 **type** | **string**| The type of URL |
 **page_num** | **int**| The page number (1-based) | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceItemGetXML**
> object restApiResourceItemGetXML($resource_name, $item_id)

ResourceItemGetXML

Returns the underlying XML of the object (for a Resource of type directory_object), or the definition XML for other types  Soap API equivalent is 'ResourceItemGetXML'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the Resource
$item_id = "item_id_example"; // string | The ID of the ResourceItem

try {
    $result = $apiInstance->restApiResourceItemGetXML($resource_name, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceItemGetXML: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the Resource |
 **item_id** | **string**| The ID of the ResourceItem |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceItemMove**
> object restApiResourceItemMove($resource_name, $item_id, $new_name, $new_folder_path)

ResourceItemMove

Moves a Resource Item to a new location in the Resource's tree  Soap API equivalent is 'ResourceItemMove'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | Name of the Resource in which to find the item
$item_id = "item_id_example"; // string | The ID of the item to move
$new_name = "new_name_example"; // string | The new name for the Resource Item
$new_folder_path = "new_folder_path_example"; // string | The new folder for the resource item

try {
    $result = $apiInstance->restApiResourceItemMove($resource_name, $item_id, $new_name, $new_folder_path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceItemMove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| Name of the Resource in which to find the item |
 **item_id** | **string**| The ID of the item to move |
 **new_name** | **string**| The new name for the Resource Item |
 **new_folder_path** | **string**| The new folder for the resource item |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceItemRemovePreviewOverride**
> object restApiResourceItemRemovePreviewOverride($resource_name, $item_id)

ResourceItemRemovePreviewOverride

Deletes the preview override files for a ResourceItem  Soap API equivalent is 'ResourceItemRemovePreviewOverride'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the Resource
$item_id = "item_id_example"; // string | The ID of the ResourceItem

try {
    $result = $apiInstance->restApiResourceItemRemovePreviewOverride($resource_name, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceItemRemovePreviewOverride: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the Resource |
 **item_id** | **string**| The ID of the ResourceItem |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceItemReplaceFile**
> object restApiResourceItemReplaceFile($resource_name, $item_id, $body)

ResourceItemReplaceFile

Replaces the underlying file of a Resource Item of type directory_file, and returns its definition XML.  Soap API equivalent is 'ResourceItemReplaceFile'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the Resource
$item_id = "item_id_example"; // string | The ID of the ResourceItem
$body = new \Swagger\Client\Model\ResourceItemReplaceFileBodyWrapper(); // \Swagger\Client\Model\ResourceItemReplaceFileBodyWrapper | 

try {
    $result = $apiInstance->restApiResourceItemReplaceFile($resource_name, $item_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceItemReplaceFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the Resource |
 **item_id** | **string**| The ID of the ResourceItem |
 **body** | [**\Swagger\Client\Model\ResourceItemReplaceFileBodyWrapper**](../Model/ResourceItemReplaceFileBodyWrapper.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceItemReplaceFileWithPreviewOverride**
> object restApiResourceItemReplaceFileWithPreviewOverride($resource_name, $item_id, $body, $preview_extension, $is_permanent_preview)

ResourceItemReplaceFileWithPreviewOverride

Replaces the underlying file of a Resource Item of type directory_file, and returns its definition XML.  To prevent previews from being generated automatically while you intend to supply an override file, this function allows you to pass both at the same time.  Soap API equivalent is 'ResourceItemReplaceFileWithPreviewOverride'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the resource
$item_id = "item_id_example"; // string | The ID of the ResourceItem
$body = new \Swagger\Client\Model\ResourceItemReplaceFileWithPreviewOverrideBodyWrapper(); // \Swagger\Client\Model\ResourceItemReplaceFileWithPreviewOverrideBodyWrapper | 
$preview_extension = "preview_extension_example"; // string | The extension of the preview file
$is_permanent_preview = true; // bool | If true, the preview override remains valid after the ResourceItem is modified

try {
    $result = $apiInstance->restApiResourceItemReplaceFileWithPreviewOverride($resource_name, $item_id, $body, $preview_extension, $is_permanent_preview);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceItemReplaceFileWithPreviewOverride: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the resource |
 **item_id** | **string**| The ID of the ResourceItem |
 **body** | [**\Swagger\Client\Model\ResourceItemReplaceFileWithPreviewOverrideBodyWrapper**](../Model/ResourceItemReplaceFileWithPreviewOverrideBodyWrapper.md)|  |
 **preview_extension** | **string**| The extension of the preview file | [optional]
 **is_permanent_preview** | **bool**| If true, the preview override remains valid after the ResourceItem is modified | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceItemResetPreviews**
> object restApiResourceItemResetPreviews($resource_name, $item_id)

ResourceItemResetPreviews

Deletes all generated previews of the ResourceItem, and resets any \"error\" switches  Soap API equivalent is 'ResourceItemResetPreviews'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the resource
$item_id = "item_id_example"; // string | The ID of the ResourceItem

try {
    $result = $apiInstance->restApiResourceItemResetPreviews($resource_name, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceItemResetPreviews: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the resource |
 **item_id** | **string**| The ID of the ResourceItem |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceItemSave**
> object restApiResourceItemSave($resource_name, $item_id, $body)

ResourceItemSave

Saves the definition XML or the underlying object XML of a Resource Item (depending on the Resource's type)  Soap API equivalent is 'ResourceItemSave'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the Resource
$item_id = "item_id_example"; // string | The ID of the ResourceItem
$body = new \Swagger\Client\Model\ResourceItemSaveBodyWrapper(); // \Swagger\Client\Model\ResourceItemSaveBodyWrapper | 

try {
    $result = $apiInstance->restApiResourceItemSave($resource_name, $item_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceItemSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the Resource |
 **item_id** | **string**| The ID of the ResourceItem |
 **body** | [**\Swagger\Client\Model\ResourceItemSaveBodyWrapper**](../Model/ResourceItemSaveBodyWrapper.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceItemSaveCustomMetaData**
> object restApiResourceItemSaveCustomMetaData($resource_name, $id, $set_name, $body)

ResourceItemSaveCustomMetaData

Saves metadata of specified resource item  Soap API equivalent is 'ResourceItemSaveCustomMetaData'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | 
$id = "id_example"; // string | 
$set_name = "set_name_example"; // string | 
$body = new \Swagger\Client\Model\ResourceItemSaveCustomMetaDataBodyWrapper(); // \Swagger\Client\Model\ResourceItemSaveCustomMetaDataBodyWrapper | 

try {
    $result = $apiInstance->restApiResourceItemSaveCustomMetaData($resource_name, $id, $set_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceItemSaveCustomMetaData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**|  |
 **id** | **string**|  |
 **set_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\ResourceItemSaveCustomMetaDataBodyWrapper**](../Model/ResourceItemSaveCustomMetaDataBodyWrapper.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceItemsAddFromZip**
> object restApiResourceItemsAddFromZip($resource_name, $folder_path, $body)

ResourceItemsAddFromZip

Adds ResourceItems to the specified Resource, based on a ZIP file  Soap API equivalent is 'ResourceItemsAddFromZip'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the resource
$folder_path = "folder_path_example"; // string | The relative path of the resource items in the resource's tree
$body = new \Swagger\Client\Model\ResourceItemsAddFromZipBodyWrapper(); // \Swagger\Client\Model\ResourceItemsAddFromZipBodyWrapper | 

try {
    $result = $apiInstance->restApiResourceItemsAddFromZip($resource_name, $folder_path, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceItemsAddFromZip: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the resource |
 **folder_path** | **string**| The relative path of the resource items in the resource&#39;s tree |
 **body** | [**\Swagger\Client\Model\ResourceItemsAddFromZipBodyWrapper**](../Model/ResourceItemsAddFromZipBodyWrapper.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceLibraryGetSettings**
> object restApiResourceLibraryGetSettings($resource_name, $library_name)

ResourceLibraryGetSettings

Returns the settings of the specified Library (a top-level directory in the Resource's tree)  Soap API equivalent is 'ResourceLibraryGetSettings'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the Resource
$library_name = "library_name_example"; // string | The name of the library for which to return the settings

try {
    $result = $apiInstance->restApiResourceLibraryGetSettings($resource_name, $library_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceLibraryGetSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the Resource |
 **library_name** | **string**| The name of the library for which to return the settings |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceLibrarySaveSettings**
> object restApiResourceLibrarySaveSettings($resource_name, $folder_name, $body)

ResourceLibrarySaveSettings

Saves the settings of the specified Library (a top-level directory in the Resource's tree)  Soap API equivalent is 'ResourceLibrarySaveSettings'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the resource
$folder_name = "folder_name_example"; // string | The name of the library for which to save the settings
$body = new \Swagger\Client\Model\ResourceLibrarySaveSettingsBodyWrapper(); // \Swagger\Client\Model\ResourceLibrarySaveSettingsBodyWrapper | 

try {
    $result = $apiInstance->restApiResourceLibrarySaveSettings($resource_name, $folder_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceLibrarySaveSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the resource |
 **folder_name** | **string**| The name of the library for which to save the settings |
 **body** | [**\Swagger\Client\Model\ResourceLibrarySaveSettingsBodyWrapper**](../Model/ResourceLibrarySaveSettingsBodyWrapper.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceList**
> object restApiResourceList()

ResourceList

Returns a list of the available Resources.  Soap API equivalent is 'ResourceList'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->restApiResourceList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceList: ', $e->getMessage(), PHP_EOL;
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

# **restApiResourceSearch**
> object restApiResourceSearch($resource_name, $name)

ResourceSearch

Search for items in the resource  Soap API equivalent is 'ResourceSearch'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the resource
$name = "name_example"; // string | The name to search on

try {
    $result = $apiInstance->restApiResourceSearch($resource_name, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the resource |
 **name** | **string**| The name to search on | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceSearchByIDs**
> object restApiResourceSearchByIDs($resource_name, $i_ds)

ResourceSearchByIDs

Search for items in the resource, based on a list of IDs  Soap API equivalent is 'ResourceSearchByIDs'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the resource
$i_ds = "i_ds_example"; // string | A ';' separated list of IDs to search for

try {
    $result = $apiInstance->restApiResourceSearchByIDs($resource_name, $i_ds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceSearchByIDs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the resource |
 **i_ds** | **string**| A &#39;;&#39; separated list of IDs to search for | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceSearchInFolder**
> object restApiResourceSearchInFolder($resource_name, $parent_folder_path, $include_sub_directories, $name)

ResourceSearchInFolder

Search for items in the resource  Soap API equivalent is 'ResourceSearchInFolder'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the Resource in which to search
$parent_folder_path = "parent_folder_path_example"; // string | The folder path where the search will originate
$include_sub_directories = true; // bool | If true, the search will include files of sub-directories
$name = "name_example"; // string | The name to search on

try {
    $result = $apiInstance->restApiResourceSearchInFolder($resource_name, $parent_folder_path, $include_sub_directories, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceSearchInFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the Resource in which to search |
 **parent_folder_path** | **string**| The folder path where the search will originate |
 **include_sub_directories** | **bool**| If true, the search will include files of sub-directories | [optional]
 **name** | **string**| The name to search on | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceSearchPaged**
> object restApiResourceSearchPaged($resource_name, $name, $page_size, $page_num)

ResourceSearchPaged

Search for items in the resource, and returns a paged result list  Soap API equivalent is 'ResourceSearchPaged'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the resource
$name = "name_example"; // string | The name to search on
$page_size = 56; // int | Number of items per page
$page_num = 56; // int | 1-based index of the page to return

try {
    $result = $apiInstance->restApiResourceSearchPaged($resource_name, $name, $page_size, $page_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceSearchPaged: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the resource |
 **name** | **string**| The name to search on | [optional]
 **page_size** | **int**| Number of items per page | [optional]
 **page_num** | **int**| 1-based index of the page to return | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiResourceSearchPagedWithSorting**
> object restApiResourceSearchPagedWithSorting($resource_name, $parent_folder_path, $include_sub_directories, $name, $page_size, $page_num, $sort_on, $sort_order, $item_id)

ResourceSearchPagedWithSorting

Search for items in the resource, and returns a sorted paged result list.  When using paging, you can either specify a page number or a an item id.                Soap API equivalent is 'ResourceSearchPagedWithSorting'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the resource
$parent_folder_path = "parent_folder_path_example"; // string | 
$include_sub_directories = true; // bool | 
$name = "name_example"; // string | The name to search on
$page_size = 56; // int | Number of items per page
$page_num = 56; // int | 1-based index of the page to return
$sort_on = "sort_on_example"; // string | 
$sort_order = "sort_order_example"; // string | 
$item_id = "item_id_example"; // string | 

try {
    $result = $apiInstance->restApiResourceSearchPagedWithSorting($resource_name, $parent_folder_path, $include_sub_directories, $name, $page_size, $page_num, $sort_on, $sort_order, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiResourceSearchPagedWithSorting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the resource |
 **parent_folder_path** | **string**|  | [optional]
 **include_sub_directories** | **bool**|  | [optional]
 **name** | **string**| The name to search on | [optional]
 **page_size** | **int**| Number of items per page | [optional]
 **page_num** | **int**| 1-based index of the page to return | [optional]
 **sort_on** | **string**|  | [optional]
 **sort_order** | **string**|  | [optional]
 **item_id** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiSetNextResourceItemID**
> object restApiSetNextResourceItemID($resource_name, $item_id)

SetNextResourceItemID

Set the ID for the next item in the queue.  It will be used when adding items via \"ResourceItemAdd\" or equivalents  Soap API equivalent is 'SetNextResourceItemID'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resource_name = "resource_name_example"; // string | The name of the resource
$item_id = "item_id_example"; // string | The name to search on

try {
    $result = $apiInstance->restApiSetNextResourceItemID($resource_name, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiSetNextResourceItemID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resource_name** | **string**| The name of the resource |
 **item_id** | **string**| The name to search on |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiThreeDModelCreatePackage**
> object restApiThreeDModelCreatePackage($three_d_model_id)

ThreeDModelCreatePackage

Returns a ZIP with all the needed recources and the settings file with fixed references.  Soap API equivalent is 'ThreeDModelCreatePackage'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$three_d_model_id = "three_d_model_id_example"; // string | 

try {
    $result = $apiInstance->restApiThreeDModelCreatePackage($three_d_model_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiThreeDModelCreatePackage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **three_d_model_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restApiUploadExternalAsset**
> object restApiUploadExternalAsset($url, $file_name, $body)

UploadExternalAsset

Adds an asset to an External Asset Library  Soap API equivalent is 'UploadExternalAsset'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$url = "url_example"; // string | The URL to post the asset to
$file_name = "file_name_example"; // string | The name of the uploaded file
$body = new \Swagger\Client\Model\UploadExternalAssetBodyWrapper(); // \Swagger\Client\Model\UploadExternalAssetBodyWrapper | 

try {
    $result = $apiInstance->restApiUploadExternalAsset($url, $file_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->restApiUploadExternalAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **url** | **string**| The URL to post the asset to |
 **file_name** | **string**| The name of the uploaded file |
 **body** | [**\Swagger\Client\Model\UploadExternalAssetBodyWrapper**](../Model/UploadExternalAssetBodyWrapper.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

