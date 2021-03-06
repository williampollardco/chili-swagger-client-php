<?php
/**
 * AssetAddOrUpdateSubjectInfoBodyWrapper
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Rest API v1.2
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.27
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * AssetAddOrUpdateSubjectInfoBodyWrapper Class Doc Comment
 *
 * @category Class
 * @description Body parameter class for API method AssetAddOrUpdateSubjectInfo
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AssetAddOrUpdateSubjectInfoBodyWrapper implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AssetAddOrUpdateSubjectInfoBodyWrapper';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'asa_x' => 'double',
        'asa_y' => 'double',
        'asa_width' => 'double',
        'asa_height' => 'double',
        'poi_x' => 'double',
        'poi_y' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'asa_x' => 'double',
        'asa_y' => 'double',
        'asa_width' => 'double',
        'asa_height' => 'double',
        'poi_x' => 'double',
        'poi_y' => 'double'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'asa_x' => 'asaX',
        'asa_y' => 'asaY',
        'asa_width' => 'asaWidth',
        'asa_height' => 'asaHeight',
        'poi_x' => 'poiX',
        'poi_y' => 'poiY'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asa_x' => 'setAsaX',
        'asa_y' => 'setAsaY',
        'asa_width' => 'setAsaWidth',
        'asa_height' => 'setAsaHeight',
        'poi_x' => 'setPoiX',
        'poi_y' => 'setPoiY'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asa_x' => 'getAsaX',
        'asa_y' => 'getAsaY',
        'asa_width' => 'getAsaWidth',
        'asa_height' => 'getAsaHeight',
        'poi_x' => 'getPoiX',
        'poi_y' => 'getPoiY'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['asa_x'] = isset($data['asa_x']) ? $data['asa_x'] : null;
        $this->container['asa_y'] = isset($data['asa_y']) ? $data['asa_y'] : null;
        $this->container['asa_width'] = isset($data['asa_width']) ? $data['asa_width'] : null;
        $this->container['asa_height'] = isset($data['asa_height']) ? $data['asa_height'] : null;
        $this->container['poi_x'] = isset($data['poi_x']) ? $data['poi_x'] : null;
        $this->container['poi_y'] = isset($data['poi_y']) ? $data['poi_y'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets asa_x
     *
     * @return double
     */
    public function getAsaX()
    {
        return $this->container['asa_x'];
    }

    /**
     * Sets asa_x
     *
     * @param double $asa_x asa_x
     *
     * @return $this
     */
    public function setAsaX($asa_x)
    {
        $this->container['asa_x'] = $asa_x;

        return $this;
    }

    /**
     * Gets asa_y
     *
     * @return double
     */
    public function getAsaY()
    {
        return $this->container['asa_y'];
    }

    /**
     * Sets asa_y
     *
     * @param double $asa_y asa_y
     *
     * @return $this
     */
    public function setAsaY($asa_y)
    {
        $this->container['asa_y'] = $asa_y;

        return $this;
    }

    /**
     * Gets asa_width
     *
     * @return double
     */
    public function getAsaWidth()
    {
        return $this->container['asa_width'];
    }

    /**
     * Sets asa_width
     *
     * @param double $asa_width asa_width
     *
     * @return $this
     */
    public function setAsaWidth($asa_width)
    {
        $this->container['asa_width'] = $asa_width;

        return $this;
    }

    /**
     * Gets asa_height
     *
     * @return double
     */
    public function getAsaHeight()
    {
        return $this->container['asa_height'];
    }

    /**
     * Sets asa_height
     *
     * @param double $asa_height asa_height
     *
     * @return $this
     */
    public function setAsaHeight($asa_height)
    {
        $this->container['asa_height'] = $asa_height;

        return $this;
    }

    /**
     * Gets poi_x
     *
     * @return double
     */
    public function getPoiX()
    {
        return $this->container['poi_x'];
    }

    /**
     * Sets poi_x
     *
     * @param double $poi_x poi_x
     *
     * @return $this
     */
    public function setPoiX($poi_x)
    {
        $this->container['poi_x'] = $poi_x;

        return $this;
    }

    /**
     * Gets poi_y
     *
     * @return double
     */
    public function getPoiY()
    {
        return $this->container['poi_y'];
    }

    /**
     * Sets poi_y
     *
     * @param double $poi_y poi_y
     *
     * @return $this
     */
    public function setPoiY($poi_y)
    {
        $this->container['poi_y'] = $poi_y;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


