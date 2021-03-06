<?php
/**
 * AppleMappingRequest
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
 * AppleMappingRequest Class Doc Comment
 *
 * @category Class
 * @description Apple Mapping Request Type
 * @package  ZeC128\AppCenter
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AppleMappingRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AppleMappingRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'service_connection_id' => 'string',
        'apple_id' => 'string',
        'bundle_identifier' => 'string',
        'team_identifier' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'service_connection_id' => null,
        'apple_id' => null,
        'bundle_identifier' => null,
        'team_identifier' => null
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
        'service_connection_id' => 'service_connection_id',
        'apple_id' => 'apple_id',
        'bundle_identifier' => 'bundle_identifier',
        'team_identifier' => 'team_identifier'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'service_connection_id' => 'setServiceConnectionId',
        'apple_id' => 'setAppleId',
        'bundle_identifier' => 'setBundleIdentifier',
        'team_identifier' => 'setTeamIdentifier'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'service_connection_id' => 'getServiceConnectionId',
        'apple_id' => 'getAppleId',
        'bundle_identifier' => 'getBundleIdentifier',
        'team_identifier' => 'getTeamIdentifier'
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
        $this->container['service_connection_id'] = isset($data['service_connection_id']) ? $data['service_connection_id'] : null;
        $this->container['apple_id'] = isset($data['apple_id']) ? $data['apple_id'] : null;
        $this->container['bundle_identifier'] = isset($data['bundle_identifier']) ? $data['bundle_identifier'] : null;
        $this->container['team_identifier'] = isset($data['team_identifier']) ? $data['team_identifier'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['service_connection_id'] === null) {
            $invalidProperties[] = "'service_connection_id' can't be null";
        }
        if ($this->container['team_identifier'] === null) {
            $invalidProperties[] = "'team_identifier' can't be null";
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
     * Gets apple_id
     *
     * @return string
     */
    public function getAppleId()
    {
        return $this->container['apple_id'];
    }

    /**
     * Sets apple_id
     *
     * @param string $apple_id ID of the apple application in apple store, takes precedence over bundle_identifier when both are provided
     *
     * @return $this
     */
    public function setAppleId($apple_id)
    {
        $this->container['apple_id'] = $apple_id;

        return $this;
    }

    /**
     * Gets bundle_identifier
     *
     * @return string
     */
    public function getBundleIdentifier()
    {
        return $this->container['bundle_identifier'];
    }

    /**
     * Sets bundle_identifier
     *
     * @param string $bundle_identifier Bundle Identifier of the apple package
     *
     * @return $this
     */
    public function setBundleIdentifier($bundle_identifier)
    {
        $this->container['bundle_identifier'] = $bundle_identifier;

        return $this;
    }

    /**
     * Gets team_identifier
     *
     * @return string
     */
    public function getTeamIdentifier()
    {
        return $this->container['team_identifier'];
    }

    /**
     * Sets team_identifier
     *
     * @param string $team_identifier ID of the Team associated with the app in apple store
     *
     * @return $this
     */
    public function setTeamIdentifier($team_identifier)
    {
        $this->container['team_identifier'] = $team_identifier;

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


