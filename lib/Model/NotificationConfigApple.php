<?php
/**
 * NotificationConfigApple
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
 * NotificationConfigApple Class Doc Comment
 *
 * @category Class
 * @description Apple notification certificate configuration.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NotificationConfigApple implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = 'type';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NotificationConfigApple';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'endpoint_type' => 'string',
        'cert_encoded' => 'string',
        'cert_filename' => 'string',
        'cert_key' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'endpoint_type' => null,
        'cert_encoded' => null,
        'cert_filename' => null,
        'cert_key' => null
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
        'endpoint_type' => 'endpoint_type',
        'cert_encoded' => 'cert_encoded',
        'cert_filename' => 'cert_filename',
        'cert_key' => 'cert_key'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'endpoint_type' => 'setEndpointType',
        'cert_encoded' => 'setCertEncoded',
        'cert_filename' => 'setCertFilename',
        'cert_key' => 'setCertKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'endpoint_type' => 'getEndpointType',
        'cert_encoded' => 'getCertEncoded',
        'cert_filename' => 'getCertFilename',
        'cert_key' => 'getCertKey'
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

    const ENDPOINT_TYPE_PRODUCTION = 'production';
    const ENDPOINT_TYPE_SANDBOX = 'sandbox';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEndpointTypeAllowableValues()
    {
        return [
            self::ENDPOINT_TYPE_PRODUCTION,
            self::ENDPOINT_TYPE_SANDBOX,
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
        $this->container['endpoint_type'] = isset($data['endpoint_type']) ? $data['endpoint_type'] : null;
        $this->container['cert_encoded'] = isset($data['cert_encoded']) ? $data['cert_encoded'] : null;
        $this->container['cert_filename'] = isset($data['cert_filename']) ? $data['cert_filename'] : null;
        $this->container['cert_key'] = isset($data['cert_key']) ? $data['cert_key'] : null;

        // Initialize discriminator property with the model name.
        $discriminator = array_search('type', self::$attributeMap, true);
        $this->container[$discriminator] = static::$swaggerModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getEndpointTypeAllowableValues();
        if (!is_null($this->container['endpoint_type']) && !in_array($this->container['endpoint_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'endpoint_type', must be one of '%s'",
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
     * Gets endpoint_type
     *
     * @return string
     */
    public function getEndpointType()
    {
        return $this->container['endpoint_type'];
    }

    /**
     * Sets endpoint_type
     *
     * @param string $endpoint_type Type of endpoint the certificate or token are associated with
     *
     * @return $this
     */
    public function setEndpointType($endpoint_type)
    {
        $allowedValues = $this->getEndpointTypeAllowableValues();
        if (!is_null($endpoint_type) && !in_array($endpoint_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'endpoint_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['endpoint_type'] = $endpoint_type;

        return $this;
    }

    /**
     * Gets cert_encoded
     *
     * @return string
     */
    public function getCertEncoded()
    {
        return $this->container['cert_encoded'];
    }

    /**
     * Sets cert_encoded
     *
     * @param string $cert_encoded Base64 encoded certificate string.
     *
     * @return $this
     */
    public function setCertEncoded($cert_encoded)
    {
        $this->container['cert_encoded'] = $cert_encoded;

        return $this;
    }

    /**
     * Gets cert_filename
     *
     * @return string
     */
    public function getCertFilename()
    {
        return $this->container['cert_filename'];
    }

    /**
     * Sets cert_filename
     *
     * @param string $cert_filename Certificate file name
     *
     * @return $this
     */
    public function setCertFilename($cert_filename)
    {
        $this->container['cert_filename'] = $cert_filename;

        return $this;
    }

    /**
     * Gets cert_key
     *
     * @return string
     */
    public function getCertKey()
    {
        return $this->container['cert_key'];
    }

    /**
     * Sets cert_key
     *
     * @param string $cert_key Certificate password
     *
     * @return $this
     */
    public function setCertKey($cert_key)
    {
        $this->container['cert_key'] = $cert_key;

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

