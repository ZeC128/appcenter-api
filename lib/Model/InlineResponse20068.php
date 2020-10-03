<?php
/**
 * InlineResponse20068
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
 * InlineResponse20068 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20068 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_68';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'exceeded_max_limit' => 'bool',
        'last_received_log_timestamp' => '\DateTime',
        'logs' => '\Swagger\Client\Model\InlineResponse20068Logs[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'exceeded_max_limit' => null,
        'last_received_log_timestamp' => 'date-time',
        'logs' => null
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
        'exceeded_max_limit' => 'exceeded_max_limit',
        'last_received_log_timestamp' => 'last_received_log_timestamp',
        'logs' => 'logs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'exceeded_max_limit' => 'setExceededMaxLimit',
        'last_received_log_timestamp' => 'setLastReceivedLogTimestamp',
        'logs' => 'setLogs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'exceeded_max_limit' => 'getExceededMaxLimit',
        'last_received_log_timestamp' => 'getLastReceivedLogTimestamp',
        'logs' => 'getLogs'
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
        $this->container['exceeded_max_limit'] = isset($data['exceeded_max_limit']) ? $data['exceeded_max_limit'] : null;
        $this->container['last_received_log_timestamp'] = isset($data['last_received_log_timestamp']) ? $data['last_received_log_timestamp'] : null;
        $this->container['logs'] = isset($data['logs']) ? $data['logs'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['logs'] === null) {
            $invalidProperties[] = "'logs' can't be null";
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
     * Gets exceeded_max_limit
     *
     * @return bool
     */
    public function getExceededMaxLimit()
    {
        return $this->container['exceeded_max_limit'];
    }

    /**
     * Sets exceeded_max_limit
     *
     * @param bool $exceeded_max_limit indicates if the number of available logs are more than the max allowed return limit(100).
     *
     * @return $this
     */
    public function setExceededMaxLimit($exceeded_max_limit)
    {
        $this->container['exceeded_max_limit'] = $exceeded_max_limit;

        return $this;
    }

    /**
     * Gets last_received_log_timestamp
     *
     * @return \DateTime
     */
    public function getLastReceivedLogTimestamp()
    {
        return $this->container['last_received_log_timestamp'];
    }

    /**
     * Sets last_received_log_timestamp
     *
     * @param \DateTime $last_received_log_timestamp the timestamp of the last log received. This value can be used as the start time parameter in the consecutive API call.
     *
     * @return $this
     */
    public function setLastReceivedLogTimestamp($last_received_log_timestamp)
    {
        $this->container['last_received_log_timestamp'] = $last_received_log_timestamp;

        return $this;
    }

    /**
     * Gets logs
     *
     * @return \Swagger\Client\Model\InlineResponse20068Logs[]
     */
    public function getLogs()
    {
        return $this->container['logs'];
    }

    /**
     * Sets logs
     *
     * @param \Swagger\Client\Model\InlineResponse20068Logs[] $logs the list of logs
     *
     * @return $this
     */
    public function setLogs($logs)
    {
        $this->container['logs'] = $logs;

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


