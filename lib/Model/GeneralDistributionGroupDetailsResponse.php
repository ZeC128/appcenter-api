<?php
/**
 * GeneralDistributionGroupDetailsResponse
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
 * GeneralDistributionGroupDetailsResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GeneralDistributionGroupDetailsResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GeneralDistributionGroupDetailsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_shared' => 'bool',
        'owner_app_id' => 'string',
        'owner_org_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_shared' => null,
        'owner_app_id' => 'uuid',
        'owner_org_id' => 'uuid'
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
        'is_shared' => 'is_shared',
        'owner_app_id' => 'owner_app_id',
        'owner_org_id' => 'owner_org_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_shared' => 'setIsShared',
        'owner_app_id' => 'setOwnerAppId',
        'owner_org_id' => 'setOwnerOrgId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_shared' => 'getIsShared',
        'owner_app_id' => 'getOwnerAppId',
        'owner_org_id' => 'getOwnerOrgId'
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
        $this->container['is_shared'] = isset($data['is_shared']) ? $data['is_shared'] : null;
        $this->container['owner_app_id'] = isset($data['owner_app_id']) ? $data['owner_app_id'] : null;
        $this->container['owner_org_id'] = isset($data['owner_org_id']) ? $data['owner_org_id'] : null;
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
     * Gets is_shared
     *
     * @return bool
     */
    public function getIsShared()
    {
        return $this->container['is_shared'];
    }

    /**
     * Sets is_shared
     *
     * @param bool $is_shared Whether the distribution group is shared group or not
     *
     * @return $this
     */
    public function setIsShared($is_shared)
    {
        $this->container['is_shared'] = $is_shared;

        return $this;
    }

    /**
     * Gets owner_app_id
     *
     * @return string
     */
    public function getOwnerAppId()
    {
        return $this->container['owner_app_id'];
    }

    /**
     * Sets owner_app_id
     *
     * @param string $owner_app_id If distribution group is owned by an app, this is the unique app ID
     *
     * @return $this
     */
    public function setOwnerAppId($owner_app_id)
    {
        $this->container['owner_app_id'] = $owner_app_id;

        return $this;
    }

    /**
     * Gets owner_org_id
     *
     * @return string
     */
    public function getOwnerOrgId()
    {
        return $this->container['owner_org_id'];
    }

    /**
     * Sets owner_org_id
     *
     * @param string $owner_org_id If distribution group is owned by an org, this is the unique org ID
     *
     * @return $this
     */
    public function setOwnerOrgId($owner_org_id)
    {
        $this->container['owner_org_id'] = $owner_org_id;

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

