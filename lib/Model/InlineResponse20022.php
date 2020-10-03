<?php
/**
 * InlineResponse20022
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
 * InlineResponse20022 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20022 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_22';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'app_hash_file_id' => 'string',
        'locale' => 'string',
        'dsym_hash_file_id' => 'string',
        'app_hash_file_url' => 'string',
        'dsym_hash_file_url' => 'string',
        'app_icon_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'app_hash_file_id' => 'uuid',
        'locale' => null,
        'dsym_hash_file_id' => 'uuid',
        'app_hash_file_url' => null,
        'dsym_hash_file_url' => null,
        'app_icon_url' => null
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
        'id' => 'id',
        'app_hash_file_id' => 'app_hash_file_id',
        'locale' => 'locale',
        'dsym_hash_file_id' => 'dsym_hash_file_id',
        'app_hash_file_url' => 'app_hash_file_url',
        'dsym_hash_file_url' => 'dsym_hash_file_url',
        'app_icon_url' => 'app_icon_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'app_hash_file_id' => 'setAppHashFileId',
        'locale' => 'setLocale',
        'dsym_hash_file_id' => 'setDsymHashFileId',
        'app_hash_file_url' => 'setAppHashFileUrl',
        'dsym_hash_file_url' => 'setDsymHashFileUrl',
        'app_icon_url' => 'setAppIconUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'app_hash_file_id' => 'getAppHashFileId',
        'locale' => 'getLocale',
        'dsym_hash_file_id' => 'getDsymHashFileId',
        'app_hash_file_url' => 'getAppHashFileUrl',
        'dsym_hash_file_url' => 'getDsymHashFileUrl',
        'app_icon_url' => 'getAppIconUrl'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['app_hash_file_id'] = isset($data['app_hash_file_id']) ? $data['app_hash_file_id'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['dsym_hash_file_id'] = isset($data['dsym_hash_file_id']) ? $data['dsym_hash_file_id'] : null;
        $this->container['app_hash_file_url'] = isset($data['app_hash_file_url']) ? $data['app_hash_file_url'] : null;
        $this->container['dsym_hash_file_url'] = isset($data['dsym_hash_file_url']) ? $data['dsym_hash_file_url'] : null;
        $this->container['app_icon_url'] = isset($data['app_icon_url']) ? $data['app_icon_url'] : null;
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets app_hash_file_id
     *
     * @return string
     */
    public function getAppHashFileId()
    {
        return $this->container['app_hash_file_id'];
    }

    /**
     * Sets app_hash_file_id
     *
     * @param string $app_hash_file_id app_hash_file_id
     *
     * @return $this
     */
    public function setAppHashFileId($app_hash_file_id)
    {
        $this->container['app_hash_file_id'] = $app_hash_file_id;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string $locale locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets dsym_hash_file_id
     *
     * @return string
     */
    public function getDsymHashFileId()
    {
        return $this->container['dsym_hash_file_id'];
    }

    /**
     * Sets dsym_hash_file_id
     *
     * @param string $dsym_hash_file_id dsym_hash_file_id
     *
     * @return $this
     */
    public function setDsymHashFileId($dsym_hash_file_id)
    {
        $this->container['dsym_hash_file_id'] = $dsym_hash_file_id;

        return $this;
    }

    /**
     * Gets app_hash_file_url
     *
     * @return string
     */
    public function getAppHashFileUrl()
    {
        return $this->container['app_hash_file_url'];
    }

    /**
     * Sets app_hash_file_url
     *
     * @param string $app_hash_file_url app_hash_file_url
     *
     * @return $this
     */
    public function setAppHashFileUrl($app_hash_file_url)
    {
        $this->container['app_hash_file_url'] = $app_hash_file_url;

        return $this;
    }

    /**
     * Gets dsym_hash_file_url
     *
     * @return string
     */
    public function getDsymHashFileUrl()
    {
        return $this->container['dsym_hash_file_url'];
    }

    /**
     * Sets dsym_hash_file_url
     *
     * @param string $dsym_hash_file_url dsym_hash_file_url
     *
     * @return $this
     */
    public function setDsymHashFileUrl($dsym_hash_file_url)
    {
        $this->container['dsym_hash_file_url'] = $dsym_hash_file_url;

        return $this;
    }

    /**
     * Gets app_icon_url
     *
     * @return string
     */
    public function getAppIconUrl()
    {
        return $this->container['app_icon_url'];
    }

    /**
     * Sets app_icon_url
     *
     * @param string $app_icon_url app_icon_url
     *
     * @return $this
     */
    public function setAppIconUrl($app_icon_url)
    {
        $this->container['app_icon_url'] = $app_icon_url;

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


