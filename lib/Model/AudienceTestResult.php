<?php
/**
 * AudienceTestResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
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

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * AudienceTestResult Class Doc Comment
 *
 * @category Class
 * @description Audience test result.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AudienceTestResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AudienceTestResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'definition' => 'string',
        'custom_properties' => 'map[string,string]',
        'estimated_count' => 'int',
        'estimated_total_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'definition' => null,
        'custom_properties' => null,
        'estimated_count' => 'int64',
        'estimated_total_count' => 'int64'
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
        'definition' => 'definition',
        'custom_properties' => 'custom_properties',
        'estimated_count' => 'estimated_count',
        'estimated_total_count' => 'estimated_total_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'definition' => 'setDefinition',
        'custom_properties' => 'setCustomProperties',
        'estimated_count' => 'setEstimatedCount',
        'estimated_total_count' => 'setEstimatedTotalCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'definition' => 'getDefinition',
        'custom_properties' => 'getCustomProperties',
        'estimated_count' => 'getEstimatedCount',
        'estimated_total_count' => 'getEstimatedTotalCount'
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

    const CUSTOM_PROPERTIES_STRING = 'string';
    const CUSTOM_PROPERTIES_NUMBER = 'number';
    const CUSTOM_PROPERTIES_BOOLEAN = 'boolean';
    const CUSTOM_PROPERTIES_DATE_TIME = 'date_time';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCustomPropertiesAllowableValues()
    {
        return [
            self::CUSTOM_PROPERTIES_STRING,
            self::CUSTOM_PROPERTIES_NUMBER,
            self::CUSTOM_PROPERTIES_BOOLEAN,
            self::CUSTOM_PROPERTIES_DATE_TIME,
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
        $this->container['definition'] = isset($data['definition']) ? $data['definition'] : null;
        $this->container['custom_properties'] = isset($data['custom_properties']) ? $data['custom_properties'] : null;
        $this->container['estimated_count'] = isset($data['estimated_count']) ? $data['estimated_count'] : null;
        $this->container['estimated_total_count'] = isset($data['estimated_total_count']) ? $data['estimated_total_count'] : null;
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
     * Gets definition
     *
     * @return string
     */
    public function getDefinition()
    {
        return $this->container['definition'];
    }

    /**
     * Sets definition
     *
     * @param string $definition Audience definition in OData format.
     *
     * @return $this
     */
    public function setDefinition($definition)
    {
        $this->container['definition'] = $definition;

        return $this;
    }

    /**
     * Gets custom_properties
     *
     * @return map[string,string]
     */
    public function getCustomProperties()
    {
        return $this->container['custom_properties'];
    }

    /**
     * Sets custom_properties
     *
     * @param map[string,string] $custom_properties Custom properties used in the definition.
     *
     * @return $this
     */
    public function setCustomProperties($custom_properties)
    {
        $allowedValues = $this->getCustomPropertiesAllowableValues();
        if (!is_null($custom_properties) && array_diff($custom_properties, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'custom_properties', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['custom_properties'] = $custom_properties;

        return $this;
    }

    /**
     * Gets estimated_count
     *
     * @return int
     */
    public function getEstimatedCount()
    {
        return $this->container['estimated_count'];
    }

    /**
     * Sets estimated_count
     *
     * @param int $estimated_count Estimated audience size.
     *
     * @return $this
     */
    public function setEstimatedCount($estimated_count)
    {
        $this->container['estimated_count'] = $estimated_count;

        return $this;
    }

    /**
     * Gets estimated_total_count
     *
     * @return int
     */
    public function getEstimatedTotalCount()
    {
        return $this->container['estimated_total_count'];
    }

    /**
     * Sets estimated_total_count
     *
     * @param int $estimated_total_count Estimated total audience size.
     *
     * @return $this
     */
    public function setEstimatedTotalCount($estimated_total_count)
    {
        $this->container['estimated_total_count'] = $estimated_total_count;

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


