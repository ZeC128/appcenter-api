<?php
/**
 * InlineResponse20041Logs
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
 * InlineResponse20041Logs Class Doc Comment
 *
 * @category Class
 * @description Generic log.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20041Logs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_41_logs';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'timestamp' => '\DateTime',
        'install_id' => 'string',
        'session_id' => 'string',
        'event_id' => 'string',
        'event_name' => 'string',
        'message_id' => 'string',
        'properties' => 'map[string,string]',
        'device' => '\Swagger\Client\Model\InlineResponse20041Device'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'timestamp' => 'date-time',
        'install_id' => 'uuid',
        'session_id' => 'uuid',
        'event_id' => null,
        'event_name' => null,
        'message_id' => null,
        'properties' => null,
        'device' => null
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
        'timestamp' => 'timestamp',
        'install_id' => 'install_id',
        'session_id' => 'session_id',
        'event_id' => 'event_id',
        'event_name' => 'event_name',
        'message_id' => 'message_id',
        'properties' => 'properties',
        'device' => 'device'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'timestamp' => 'setTimestamp',
        'install_id' => 'setInstallId',
        'session_id' => 'setSessionId',
        'event_id' => 'setEventId',
        'event_name' => 'setEventName',
        'message_id' => 'setMessageId',
        'properties' => 'setProperties',
        'device' => 'setDevice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'timestamp' => 'getTimestamp',
        'install_id' => 'getInstallId',
        'session_id' => 'getSessionId',
        'event_id' => 'getEventId',
        'event_name' => 'getEventName',
        'message_id' => 'getMessageId',
        'properties' => 'getProperties',
        'device' => 'getDevice'
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

    const TYPE_EVENT = 'event';
    const TYPE_PAGE = 'page';
    const TYPE_START_SESSION = 'start_session';
    const TYPE_ERROR = 'error';
    const TYPE_PUSH_INSTALLATION = 'push_installation';
    const TYPE_START_SERVICE = 'start_service';
    const TYPE_CUSTOM_PROPERTIES = 'custom_properties';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_EVENT,
            self::TYPE_PAGE,
            self::TYPE_START_SESSION,
            self::TYPE_ERROR,
            self::TYPE_PUSH_INSTALLATION,
            self::TYPE_START_SERVICE,
            self::TYPE_CUSTOM_PROPERTIES,
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
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['install_id'] = isset($data['install_id']) ? $data['install_id'] : null;
        $this->container['session_id'] = isset($data['session_id']) ? $data['session_id'] : null;
        $this->container['event_id'] = isset($data['event_id']) ? $data['event_id'] : null;
        $this->container['event_name'] = isset($data['event_name']) ? $data['event_name'] : null;
        $this->container['message_id'] = isset($data['message_id']) ? $data['message_id'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['device'] = isset($data['device']) ? $data['device'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
        }
        if ($this->container['install_id'] === null) {
            $invalidProperties[] = "'install_id' can't be null";
        }
        if ($this->container['device'] === null) {
            $invalidProperties[] = "'device' can't be null";
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
     * @param string $type Log type.
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
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
     * Gets timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param \DateTime $timestamp Log creation timestamp.
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets install_id
     *
     * @return string
     */
    public function getInstallId()
    {
        return $this->container['install_id'];
    }

    /**
     * Sets install_id
     *
     * @param string $install_id Install ID.
     *
     * @return $this
     */
    public function setInstallId($install_id)
    {
        $this->container['install_id'] = $install_id;

        return $this;
    }

    /**
     * Gets session_id
     *
     * @return string
     */
    public function getSessionId()
    {
        return $this->container['session_id'];
    }

    /**
     * Sets session_id
     *
     * @param string $session_id Session ID.
     *
     * @return $this
     */
    public function setSessionId($session_id)
    {
        $this->container['session_id'] = $session_id;

        return $this;
    }

    /**
     * Gets event_id
     *
     * @return string
     */
    public function getEventId()
    {
        return $this->container['event_id'];
    }

    /**
     * Sets event_id
     *
     * @param string $event_id Event ID.
     *
     * @return $this
     */
    public function setEventId($event_id)
    {
        $this->container['event_id'] = $event_id;

        return $this;
    }

    /**
     * Gets event_name
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->container['event_name'];
    }

    /**
     * Sets event_name
     *
     * @param string $event_name Event name.
     *
     * @return $this
     */
    public function setEventName($event_name)
    {
        $this->container['event_name'] = $event_name;

        return $this;
    }

    /**
     * Gets message_id
     *
     * @return string
     */
    public function getMessageId()
    {
        return $this->container['message_id'];
    }

    /**
     * Sets message_id
     *
     * @param string $message_id Message ID.
     *
     * @return $this
     */
    public function setMessageId($message_id)
    {
        $this->container['message_id'] = $message_id;

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
     * @param map[string,string] $properties event specific properties.
     *
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets device
     *
     * @return \Swagger\Client\Model\InlineResponse20041Device
     */
    public function getDevice()
    {
        return $this->container['device'];
    }

    /**
     * Sets device
     *
     * @param \Swagger\Client\Model\InlineResponse20041Device $device device
     *
     * @return $this
     */
    public function setDevice($device)
    {
        $this->container['device'] = $device;

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


