<?php
/**
 * Body13
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
 * Body13 Class Doc Comment
 *
 * @category Class
 * @description ExternalStoreRequest
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Body13 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'body_13';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'name' => 'string',
        'track' => 'string',
        'intune_details' => '\Swagger\Client\Model\V01appsownerNameappNamedistributionStoresIntuneDetails1',
        'service_connection_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'name' => null,
        'track' => null,
        'intune_details' => null,
        'service_connection_id' => null
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
        'type' => 'type',
        'name' => 'name',
        'track' => 'track',
        'intune_details' => 'intune_details',
        'service_connection_id' => 'service_connection_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'name' => 'setName',
        'track' => 'setTrack',
        'intune_details' => 'setIntuneDetails',
        'service_connection_id' => 'setServiceConnectionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'name' => 'getName',
        'track' => 'getTrack',
        'intune_details' => 'getIntuneDetails',
        'service_connection_id' => 'getServiceConnectionId'
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

    const TYPE_GOOGLEPLAY = 'googleplay';
    const TYPE_APPLE = 'apple';
    const TRACK_PRODUCTION = 'production';
    const TRACK_ALPHA = 'alpha';
    const TRACK_BETA = 'beta';
    const TRACK_TESTFLIGHT_INTERNAL = 'testflight-internal';
    const TRACK_TESTFLIGHT_EXTERNAL = 'testflight-external';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_GOOGLEPLAY,
            self::TYPE_APPLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTrackAllowableValues()
    {
        return [
            self::TRACK_PRODUCTION,
            self::TRACK_ALPHA,
            self::TRACK_BETA,
            self::TRACK_TESTFLIGHT_INTERNAL,
            self::TRACK_TESTFLIGHT_EXTERNAL,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['track'] = isset($data['track']) ? $data['track'] : null;
        $this->container['intune_details'] = isset($data['intune_details']) ? $data['intune_details'] : null;
        $this->container['service_connection_id'] = isset($data['service_connection_id']) ? $data['service_connection_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTrackAllowableValues();
        if (!is_null($this->container['track']) && !in_array($this->container['track'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'track', must be one of '%s'",
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type store Type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
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
     * @param string $name name of the store. In case of googleplay, and Apple store this is fixed to Production.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets track
     *
     * @return string
     */
    public function getTrack()
    {
        return $this->container['track'];
    }

    /**
     * Sets track
     *
     * @param string $track track of the store. Can be production, alpha & beta for googleplay. Can be production, testflight-internal & testflight-external for Apple Store.
     *
     * @return $this
     */
    public function setTrack($track)
    {
        $allowedValues = $this->getTrackAllowableValues();
        if (!is_null($track) && !in_array($track, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'track', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['track'] = $track;

        return $this;
    }

    /**
     * Gets intune_details
     *
     * @return \Swagger\Client\Model\V01appsownerNameappNamedistributionStoresIntuneDetails1
     */
    public function getIntuneDetails()
    {
        return $this->container['intune_details'];
    }

    /**
     * Sets intune_details
     *
     * @param \Swagger\Client\Model\V01appsownerNameappNamedistributionStoresIntuneDetails1 $intune_details intune_details
     *
     * @return $this
     */
    public function setIntuneDetails($intune_details)
    {
        $this->container['intune_details'] = $intune_details;

        return $this;
    }

    /**
     * Gets service_connection_id
     *
     * @return string
     */
    public function getServiceConnectionId()
    {
        return $this->container['service_connection_id'];
    }

    /**
     * Sets service_connection_id
     *
     * @param string $service_connection_id Id for the shared service connection. In case of Apple AppStore, this connection will be used to create and connect to the Apple AppStore in Mobile Center.
     *
     * @return $this
     */
    public function setServiceConnectionId($service_connection_id)
    {
        $this->container['service_connection_id'] = $service_connection_id;

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


