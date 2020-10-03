<?php
/**
 * InlineResponse20050
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
 * InlineResponse20050 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20050 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_50';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'country' => 'string',
        'device_name' => 'string',
        'error_id' => 'string',
        'has_attachments' => 'bool',
        'has_breadcrumbs' => 'bool',
        'language' => 'string',
        'os_type' => 'string',
        'os_version' => 'string',
        'timestamp' => '\DateTime',
        'user_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'country' => null,
        'device_name' => null,
        'error_id' => null,
        'has_attachments' => null,
        'has_breadcrumbs' => null,
        'language' => null,
        'os_type' => null,
        'os_version' => null,
        'timestamp' => 'date-time',
        'user_id' => null
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
        'country' => 'country',
        'device_name' => 'deviceName',
        'error_id' => 'errorId',
        'has_attachments' => 'hasAttachments',
        'has_breadcrumbs' => 'hasBreadcrumbs',
        'language' => 'language',
        'os_type' => 'osType',
        'os_version' => 'osVersion',
        'timestamp' => 'timestamp',
        'user_id' => 'userId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country' => 'setCountry',
        'device_name' => 'setDeviceName',
        'error_id' => 'setErrorId',
        'has_attachments' => 'setHasAttachments',
        'has_breadcrumbs' => 'setHasBreadcrumbs',
        'language' => 'setLanguage',
        'os_type' => 'setOsType',
        'os_version' => 'setOsVersion',
        'timestamp' => 'setTimestamp',
        'user_id' => 'setUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country' => 'getCountry',
        'device_name' => 'getDeviceName',
        'error_id' => 'getErrorId',
        'has_attachments' => 'getHasAttachments',
        'has_breadcrumbs' => 'getHasBreadcrumbs',
        'language' => 'getLanguage',
        'os_type' => 'getOsType',
        'os_version' => 'getOsVersion',
        'timestamp' => 'getTimestamp',
        'user_id' => 'getUserId'
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
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['device_name'] = isset($data['device_name']) ? $data['device_name'] : null;
        $this->container['error_id'] = isset($data['error_id']) ? $data['error_id'] : null;
        $this->container['has_attachments'] = isset($data['has_attachments']) ? $data['has_attachments'] : null;
        $this->container['has_breadcrumbs'] = isset($data['has_breadcrumbs']) ? $data['has_breadcrumbs'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['os_type'] = isset($data['os_type']) ? $data['os_type'] : null;
        $this->container['os_version'] = isset($data['os_version']) ? $data['os_version'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
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
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets device_name
     *
     * @return string
     */
    public function getDeviceName()
    {
        return $this->container['device_name'];
    }

    /**
     * Sets device_name
     *
     * @param string $device_name device_name
     *
     * @return $this
     */
    public function setDeviceName($device_name)
    {
        $this->container['device_name'] = $device_name;

        return $this;
    }

    /**
     * Gets error_id
     *
     * @return string
     */
    public function getErrorId()
    {
        return $this->container['error_id'];
    }

    /**
     * Sets error_id
     *
     * @param string $error_id error_id
     *
     * @return $this
     */
    public function setErrorId($error_id)
    {
        $this->container['error_id'] = $error_id;

        return $this;
    }

    /**
     * Gets has_attachments
     *
     * @return bool
     */
    public function getHasAttachments()
    {
        return $this->container['has_attachments'];
    }

    /**
     * Sets has_attachments
     *
     * @param bool $has_attachments has_attachments
     *
     * @return $this
     */
    public function setHasAttachments($has_attachments)
    {
        $this->container['has_attachments'] = $has_attachments;

        return $this;
    }

    /**
     * Gets has_breadcrumbs
     *
     * @return bool
     */
    public function getHasBreadcrumbs()
    {
        return $this->container['has_breadcrumbs'];
    }

    /**
     * Sets has_breadcrumbs
     *
     * @param bool $has_breadcrumbs has_breadcrumbs
     *
     * @return $this
     */
    public function setHasBreadcrumbs($has_breadcrumbs)
    {
        $this->container['has_breadcrumbs'] = $has_breadcrumbs;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets os_type
     *
     * @return string
     */
    public function getOsType()
    {
        return $this->container['os_type'];
    }

    /**
     * Sets os_type
     *
     * @param string $os_type os_type
     *
     * @return $this
     */
    public function setOsType($os_type)
    {
        $this->container['os_type'] = $os_type;

        return $this;
    }

    /**
     * Gets os_version
     *
     * @return string
     */
    public function getOsVersion()
    {
        return $this->container['os_version'];
    }

    /**
     * Sets os_version
     *
     * @param string $os_version os_version
     *
     * @return $this
     */
    public function setOsVersion($os_version)
    {
        $this->container['os_version'] = $os_version;

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
     * @param \DateTime $timestamp timestamp
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string $user_id user_id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

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


