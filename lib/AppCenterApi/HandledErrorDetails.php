<?php
/**
 * HandledErrorDetails
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
 * HandledErrorDetails Class Doc Comment
 *
 * @category Class
 * @package  ZeC128\AppCenter
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HandledErrorDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HandledErrorDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'reason_frames' => 'object[]',
        'app_launch_timestamp' => '\DateTime',
        'carrier_name' => 'string',
        'jailbreak' => 'bool',
        'properties' => 'map[string,string]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'reason_frames' => null,
        'app_launch_timestamp' => 'date-time',
        'carrier_name' => null,
        'jailbreak' => null,
        'properties' => null
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
        'name' => 'name',
        'reason_frames' => 'reasonFrames',
        'app_launch_timestamp' => 'appLaunchTimestamp',
        'carrier_name' => 'carrierName',
        'jailbreak' => 'jailbreak',
        'properties' => 'properties'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'reason_frames' => 'setReasonFrames',
        'app_launch_timestamp' => 'setAppLaunchTimestamp',
        'carrier_name' => 'setCarrierName',
        'jailbreak' => 'setJailbreak',
        'properties' => 'setProperties'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'reason_frames' => 'getReasonFrames',
        'app_launch_timestamp' => 'getAppLaunchTimestamp',
        'carrier_name' => 'getCarrierName',
        'jailbreak' => 'getJailbreak',
        'properties' => 'getProperties'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['reason_frames'] = isset($data['reason_frames']) ? $data['reason_frames'] : null;
        $this->container['app_launch_timestamp'] = isset($data['app_launch_timestamp']) ? $data['app_launch_timestamp'] : null;
        $this->container['carrier_name'] = isset($data['carrier_name']) ? $data['carrier_name'] : null;
        $this->container['jailbreak'] = isset($data['jailbreak']) ? $data['jailbreak'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets reason_frames
     *
     * @return object[]
     */
    public function getReasonFrames()
    {
        return $this->container['reason_frames'];
    }

    /**
     * Sets reason_frames
     *
     * @param object[] $reason_frames reason_frames
     *
     * @return $this
     */
    public function setReasonFrames($reason_frames)
    {
        $this->container['reason_frames'] = $reason_frames;

        return $this;
    }

    /**
     * Gets app_launch_timestamp
     *
     * @return \DateTime
     */
    public function getAppLaunchTimestamp()
    {
        return $this->container['app_launch_timestamp'];
    }

    /**
     * Sets app_launch_timestamp
     *
     * @param \DateTime $app_launch_timestamp Timestamp when the app was launched, example: '2017-03-13T18:05:42Z'.
     *
     * @return $this
     */
    public function setAppLaunchTimestamp($app_launch_timestamp)
    {
        $this->container['app_launch_timestamp'] = $app_launch_timestamp;

        return $this;
    }

    /**
     * Gets carrier_name
     *
     * @return string
     */
    public function getCarrierName()
    {
        return $this->container['carrier_name'];
    }

    /**
     * Sets carrier_name
     *
     * @param string $carrier_name Carrier name (for mobile devices).
     *
     * @return $this
     */
    public function setCarrierName($carrier_name)
    {
        $this->container['carrier_name'] = $carrier_name;

        return $this;
    }

    /**
     * Gets jailbreak
     *
     * @return bool
     */
    public function getJailbreak()
    {
        return $this->container['jailbreak'];
    }

    /**
     * Sets jailbreak
     *
     * @param bool $jailbreak Flag indicating if device is jailbroken
     *
     * @return $this
     */
    public function setJailbreak($jailbreak)
    {
        $this->container['jailbreak'] = $jailbreak;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return map[string,string]
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param map[string,string] $properties properties
     *
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

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


