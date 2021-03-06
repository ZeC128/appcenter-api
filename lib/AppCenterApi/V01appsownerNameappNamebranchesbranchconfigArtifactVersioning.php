<?php
/**
 * V01appsownerNameappNamebranchesbranchconfigArtifactVersioning
 *
 * PHP version 5
 *
 * @category Class
 * @package  ZeC128\AppCenter
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * App Center Client
 *
 * Microsoft Visual Studio App Center API
 *
 * OpenAPI spec version: v0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.15
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ZeC128\AppCenter\AppCenterApi;

use \ArrayAccess;
use \ZeC128\AppCenter\ObjectSerializer;

/**
 * V01appsownerNameappNamebranchesbranchconfigArtifactVersioning Class Doc Comment
 *
 * @category Class
 * @description The versioning configuration for artifacts built for this branch
 * @package  ZeC128\AppCenter
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V01appsownerNameappNamebranchesbranchconfigArtifactVersioning implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'v0.1appsowner_nameapp_namebranchesbranchconfig_artifactVersioning';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'build_number_format' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'build_number_format' => null
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
        'build_number_format' => 'buildNumberFormat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'build_number_format' => 'setBuildNumberFormat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'build_number_format' => 'getBuildNumberFormat'
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

    const BUILD_NUMBER_FORMAT_BUILD_ID = 'buildId';
    const BUILD_NUMBER_FORMAT_TIMESTAMP = 'timestamp';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBuildNumberFormatAllowableValues()
    {
        return [
            self::BUILD_NUMBER_FORMAT_BUILD_ID,
            self::BUILD_NUMBER_FORMAT_TIMESTAMP,
        ];
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
        $this->container['build_number_format'] = isset($data['build_number_format']) ? $data['build_number_format'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getBuildNumberFormatAllowableValues();
        if (!is_null($this->container['build_number_format']) && !in_array($this->container['build_number_format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'build_number_format', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets build_number_format
     *
     * @return string
     */
    public function getBuildNumberFormat()
    {
        return $this->container['build_number_format'];
    }

    /**
     * Sets build_number_format
     *
     * @param string $build_number_format build_number_format
     *
     * @return $this
     */
    public function setBuildNumberFormat($build_number_format)
    {
        $allowedValues = $this->getBuildNumberFormatAllowableValues();
        if (!is_null($build_number_format) && !in_array($build_number_format, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'build_number_format', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['build_number_format'] = $build_number_format;

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


