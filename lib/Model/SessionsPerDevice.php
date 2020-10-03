<?php
/**
 * SessionsPerDevice
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
 * SessionsPerDevice Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SessionsPerDevice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SessionsPerDevice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'average_sessions_per_user' => 'double',
        'previous_average_sessions_per_user' => 'double',
        'total_count' => 'int',
        'previous_total_count' => 'int',
        'sessions_per_user' => '\Swagger\Client\Model\InlineResponse20079SessionsPerUser[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'average_sessions_per_user' => 'double',
        'previous_average_sessions_per_user' => 'double',
        'total_count' => 'int64',
        'previous_total_count' => 'int64',
        'sessions_per_user' => null
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
        'average_sessions_per_user' => 'average_sessions_per_user',
        'previous_average_sessions_per_user' => 'previous_average_sessions_per_user',
        'total_count' => 'total_count',
        'previous_total_count' => 'previous_total_count',
        'sessions_per_user' => 'sessions_per_user'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'average_sessions_per_user' => 'setAverageSessionsPerUser',
        'previous_average_sessions_per_user' => 'setPreviousAverageSessionsPerUser',
        'total_count' => 'setTotalCount',
        'previous_total_count' => 'setPreviousTotalCount',
        'sessions_per_user' => 'setSessionsPerUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'average_sessions_per_user' => 'getAverageSessionsPerUser',
        'previous_average_sessions_per_user' => 'getPreviousAverageSessionsPerUser',
        'total_count' => 'getTotalCount',
        'previous_total_count' => 'getPreviousTotalCount',
        'sessions_per_user' => 'getSessionsPerUser'
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
        $this->container['average_sessions_per_user'] = isset($data['average_sessions_per_user']) ? $data['average_sessions_per_user'] : null;
        $this->container['previous_average_sessions_per_user'] = isset($data['previous_average_sessions_per_user']) ? $data['previous_average_sessions_per_user'] : null;
        $this->container['total_count'] = isset($data['total_count']) ? $data['total_count'] : null;
        $this->container['previous_total_count'] = isset($data['previous_total_count']) ? $data['previous_total_count'] : null;
        $this->container['sessions_per_user'] = isset($data['sessions_per_user']) ? $data['sessions_per_user'] : null;
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
     * Gets average_sessions_per_user
     *
     * @return double
     */
    public function getAverageSessionsPerUser()
    {
        return $this->container['average_sessions_per_user'];
    }

    /**
     * Sets average_sessions_per_user
     *
     * @param double $average_sessions_per_user Average seesion per user.
     *
     * @return $this
     */
    public function setAverageSessionsPerUser($average_sessions_per_user)
    {
        $this->container['average_sessions_per_user'] = $average_sessions_per_user;

        return $this;
    }

    /**
     * Gets previous_average_sessions_per_user
     *
     * @return double
     */
    public function getPreviousAverageSessionsPerUser()
    {
        return $this->container['previous_average_sessions_per_user'];
    }

    /**
     * Sets previous_average_sessions_per_user
     *
     * @param double $previous_average_sessions_per_user Previous average session per user.
     *
     * @return $this
     */
    public function setPreviousAverageSessionsPerUser($previous_average_sessions_per_user)
    {
        $this->container['previous_average_sessions_per_user'] = $previous_average_sessions_per_user;

        return $this;
    }

    /**
     * Gets total_count
     *
     * @return int
     */
    public function getTotalCount()
    {
        return $this->container['total_count'];
    }

    /**
     * Sets total_count
     *
     * @param int $total_count Total session per device count.
     *
     * @return $this
     */
    public function setTotalCount($total_count)
    {
        $this->container['total_count'] = $total_count;

        return $this;
    }

    /**
     * Gets previous_total_count
     *
     * @return int
     */
    public function getPreviousTotalCount()
    {
        return $this->container['previous_total_count'];
    }

    /**
     * Sets previous_total_count
     *
     * @param int $previous_total_count Previous total count.
     *
     * @return $this
     */
    public function setPreviousTotalCount($previous_total_count)
    {
        $this->container['previous_total_count'] = $previous_total_count;

        return $this;
    }

    /**
     * Gets sessions_per_user
     *
     * @return \Swagger\Client\Model\InlineResponse20079SessionsPerUser[]
     */
    public function getSessionsPerUser()
    {
        return $this->container['sessions_per_user'];
    }

    /**
     * Sets sessions_per_user
     *
     * @param \Swagger\Client\Model\InlineResponse20079SessionsPerUser[] $sessions_per_user The session count for each interval per device.
     *
     * @return $this
     */
    public function setSessionsPerUser($sessions_per_user)
    {
        $this->container['sessions_per_user'] = $sessions_per_user;

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


