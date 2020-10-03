<?php
/**
 * EventDeviceCount
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
 * EventDeviceCount Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EventDeviceCount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EventDeviceCount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'total_devices' => 'int',
        'total_devices_with_event' => 'int',
        'previous_total_devices_with_event' => 'int',
        'devices_count' => '\Swagger\Client\Model\InlineResponse20081[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'total_devices' => 'int64',
        'total_devices_with_event' => 'int64',
        'previous_total_devices_with_event' => 'int64',
        'devices_count' => null
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
        'total_devices' => 'total_devices',
        'total_devices_with_event' => 'total_devices_with_event',
        'previous_total_devices_with_event' => 'previous_total_devices_with_event',
        'devices_count' => 'devices_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total_devices' => 'setTotalDevices',
        'total_devices_with_event' => 'setTotalDevicesWithEvent',
        'previous_total_devices_with_event' => 'setPreviousTotalDevicesWithEvent',
        'devices_count' => 'setDevicesCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total_devices' => 'getTotalDevices',
        'total_devices_with_event' => 'getTotalDevicesWithEvent',
        'previous_total_devices_with_event' => 'getPreviousTotalDevicesWithEvent',
        'devices_count' => 'getDevicesCount'
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
        $this->container['total_devices'] = isset($data['total_devices']) ? $data['total_devices'] : null;
        $this->container['total_devices_with_event'] = isset($data['total_devices_with_event']) ? $data['total_devices_with_event'] : null;
        $this->container['previous_total_devices_with_event'] = isset($data['previous_total_devices_with_event']) ? $data['previous_total_devices_with_event'] : null;
        $this->container['devices_count'] = isset($data['devices_count']) ? $data['devices_count'] : null;
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
     * Gets total_devices
     *
     * @return int
     */
    public function getTotalDevices()
    {
        return $this->container['total_devices'];
    }

    /**
     * Sets total_devices
     *
     * @param int $total_devices total_devices
     *
     * @return $this
     */
    public function setTotalDevices($total_devices)
    {
        $this->container['total_devices'] = $total_devices;

        return $this;
    }

    /**
     * Gets total_devices_with_event
     *
     * @return int
     */
    public function getTotalDevicesWithEvent()
    {
        return $this->container['total_devices_with_event'];
    }

    /**
     * Sets total_devices_with_event
     *
     * @param int $total_devices_with_event total_devices_with_event
     *
     * @return $this
     */
    public function setTotalDevicesWithEvent($total_devices_with_event)
    {
        $this->container['total_devices_with_event'] = $total_devices_with_event;

        return $this;
    }

    /**
     * Gets previous_total_devices_with_event
     *
     * @return int
     */
    public function getPreviousTotalDevicesWithEvent()
    {
        return $this->container['previous_total_devices_with_event'];
    }

    /**
     * Sets previous_total_devices_with_event
     *
     * @param int $previous_total_devices_with_event previous_total_devices_with_event
     *
     * @return $this
     */
    public function setPreviousTotalDevicesWithEvent($previous_total_devices_with_event)
    {
        $this->container['previous_total_devices_with_event'] = $previous_total_devices_with_event;

        return $this;
    }

    /**
     * Gets devices_count
     *
     * @return \Swagger\Client\Model\InlineResponse20081[]
     */
    public function getDevicesCount()
    {
        return $this->container['devices_count'];
    }

    /**
     * Sets devices_count
     *
     * @param \Swagger\Client\Model\InlineResponse20081[] $devices_count devices_count
     *
     * @return $this
     */
    public function setDevicesCount($devices_count)
    {
        $this->container['devices_count'] = $devices_count;

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


