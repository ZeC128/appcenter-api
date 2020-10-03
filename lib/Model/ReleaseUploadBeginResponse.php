<?php
/**
 * ReleaseUploadBeginResponse
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
 * ReleaseUploadBeginResponse Class Doc Comment
 *
 * @category Class
 * @description A response containing information pertaining to starting a release upload process
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReleaseUploadBeginResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReleaseUploadBeginResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'upload_id' => 'string',
        'upload_url' => 'string',
        'asset_id' => 'string',
        'asset_domain' => 'string',
        'asset_token' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'upload_id' => null,
        'upload_url' => null,
        'asset_id' => null,
        'asset_domain' => null,
        'asset_token' => null
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
        'upload_id' => 'upload_id',
        'upload_url' => 'upload_url',
        'asset_id' => 'asset_id',
        'asset_domain' => 'asset_domain',
        'asset_token' => 'asset_token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'upload_id' => 'setUploadId',
        'upload_url' => 'setUploadUrl',
        'asset_id' => 'setAssetId',
        'asset_domain' => 'setAssetDomain',
        'asset_token' => 'setAssetToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'upload_id' => 'getUploadId',
        'upload_url' => 'getUploadUrl',
        'asset_id' => 'getAssetId',
        'asset_domain' => 'getAssetDomain',
        'asset_token' => 'getAssetToken'
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
        $this->container['upload_id'] = isset($data['upload_id']) ? $data['upload_id'] : null;
        $this->container['upload_url'] = isset($data['upload_url']) ? $data['upload_url'] : null;
        $this->container['asset_id'] = isset($data['asset_id']) ? $data['asset_id'] : null;
        $this->container['asset_domain'] = isset($data['asset_domain']) ? $data['asset_domain'] : null;
        $this->container['asset_token'] = isset($data['asset_token']) ? $data['asset_token'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['upload_id'] === null) {
            $invalidProperties[] = "'upload_id' can't be null";
        }
        if ($this->container['upload_url'] === null) {
            $invalidProperties[] = "'upload_url' can't be null";
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
     * Gets upload_id
     *
     * @return string
     */
    public function getUploadId()
    {
        return $this->container['upload_id'];
    }

    /**
     * Sets upload_id
     *
     * @param string $upload_id The ID for the current upload
     *
     * @return $this
     */
    public function setUploadId($upload_id)
    {
        $this->container['upload_id'] = $upload_id;

        return $this;
    }

    /**
     * Gets upload_url
     *
     * @return string
     */
    public function getUploadUrl()
    {
        return $this->container['upload_url'];
    }

    /**
     * Sets upload_url
     *
     * @param string $upload_url The URL where the client needs to upload the release to
     *
     * @return $this
     */
    public function setUploadUrl($upload_url)
    {
        $this->container['upload_url'] = $upload_url;

        return $this;
    }

    /**
     * Gets asset_id
     *
     * @return string
     */
    public function getAssetId()
    {
        return $this->container['asset_id'];
    }

    /**
     * Sets asset_id
     *
     * @param string $asset_id The ID for the current upload, reserved for future use
     *
     * @return $this
     */
    public function setAssetId($asset_id)
    {
        $this->container['asset_id'] = $asset_id;

        return $this;
    }

    /**
     * Gets asset_domain
     *
     * @return string
     */
    public function getAssetDomain()
    {
        return $this->container['asset_domain'];
    }

    /**
     * Sets asset_domain
     *
     * @param string $asset_domain The URL for the current upload, reserved for future use
     *
     * @return $this
     */
    public function setAssetDomain($asset_domain)
    {
        $this->container['asset_domain'] = $asset_domain;

        return $this;
    }

    /**
     * Gets asset_token
     *
     * @return string
     */
    public function getAssetToken()
    {
        return $this->container['asset_token'];
    }

    /**
     * Sets asset_token
     *
     * @param string $asset_token The token for the current upload, reserved for future use
     *
     * @return $this
     */
    public function setAssetToken($asset_token)
    {
        $this->container['asset_token'] = $asset_token;

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


