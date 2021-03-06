<?php
/**
 * ActiveDeviceCounts
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
 * ActiveDeviceCounts Class Doc Comment
 *
 * @category Class
 * @package  ZeC128\AppCenter
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ActiveDeviceCounts implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ActiveDeviceCounts';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'daily' => '\ZeC128\AppCenter\AppCenterApi\InlineResponse20081[]',
        'weekly' => '\ZeC128\AppCenter\AppCenterApi\InlineResponse20081[]',
        'monthly' => '\ZeC128\AppCenter\AppCenterApi\InlineResponse20081[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'daily' => null,
        'weekly' => null,
        'monthly' => null
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
        'daily' => 'daily',
        'weekly' => 'weekly',
        'monthly' => 'monthly'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'daily' => 'setDaily',
        'weekly' => 'setWeekly',
        'monthly' => 'setMonthly'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'daily' => 'getDaily',
        'weekly' => 'getWeekly',
        'monthly' => 'getMonthly'
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
        $this->container['daily'] = isset($data['daily']) ? $data['daily'] : null;
        $this->container['weekly'] = isset($data['weekly']) ? $data['weekly'] : null;
        $this->container['monthly'] = isset($data['monthly']) ? $data['monthly'] : null;
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
     * Gets daily
     *
     * @return \ZeC128\AppCenter\AppCenterApi\InlineResponse20081[]
     */
    public function getDaily()
    {
        return $this->container['daily'];
    }

    /**
     * Sets daily
     *
     * @param \ZeC128\AppCenter\AppCenterApi\InlineResponse20081[] $daily The active device count for each interval.
     *
     * @return $this
     */
    public function setDaily($daily)
    {
        $this->container['daily'] = $daily;

        return $this;
    }

    /**
     * Gets weekly
     *
     * @return \ZeC128\AppCenter\AppCenterApi\InlineResponse20081[]
     */
    public function getWeekly()
    {
        return $this->container['weekly'];
    }

    /**
     * Sets weekly
     *
     * @param \ZeC128\AppCenter\AppCenterApi\InlineResponse20081[] $weekly The active device count for each interval with a week's retention.
     *
     * @return $this
     */
    public function setWeekly($weekly)
    {
        $this->container['weekly'] = $weekly;

        return $this;
    }

    /**
     * Gets monthly
     *
     * @return \ZeC128\AppCenter\AppCenterApi\InlineResponse20081[]
     */
    public function getMonthly()
    {
        return $this->container['monthly'];
    }

    /**
     * Sets monthly
     *
     * @param \ZeC128\AppCenter\AppCenterApi\InlineResponse20081[] $monthly The active device count for each interval with a month's retention.
     *
     * @return $this
     */
    public function setMonthly($monthly)
    {
        $this->container['monthly'] = $monthly;

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


