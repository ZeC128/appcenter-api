<?php
/**
 * IntuneStoreRequest
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
 * IntuneStoreRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IntuneStoreRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IntuneStoreRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'secret_json' => '\Swagger\Client\Model\V01appsownerNameappNamedistributionStoresIntuneDetails1SecretJson',
        'target_audience' => '\Swagger\Client\Model\V01appsownerNameappNamedistributionStoresIntuneDetails1TargetAudience',
        'app_category' => '\Swagger\Client\Model\V01appsownerNameappNamedistributionStoresIntuneDetails1AppCategory',
        'tenant_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'secret_json' => null,
        'target_audience' => null,
        'app_category' => null,
        'tenant_id' => null
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
        'secret_json' => 'secret_json',
        'target_audience' => 'target_audience',
        'app_category' => 'app_category',
        'tenant_id' => 'tenant_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'secret_json' => 'setSecretJson',
        'target_audience' => 'setTargetAudience',
        'app_category' => 'setAppCategory',
        'tenant_id' => 'setTenantId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'secret_json' => 'getSecretJson',
        'target_audience' => 'getTargetAudience',
        'app_category' => 'getAppCategory',
        'tenant_id' => 'getTenantId'
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
        $this->container['secret_json'] = isset($data['secret_json']) ? $data['secret_json'] : null;
        $this->container['target_audience'] = isset($data['target_audience']) ? $data['target_audience'] : null;
        $this->container['app_category'] = isset($data['app_category']) ? $data['app_category'] : null;
        $this->container['tenant_id'] = isset($data['tenant_id']) ? $data['tenant_id'] : null;
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
     * Gets secret_json
     *
     * @return \Swagger\Client\Model\V01appsownerNameappNamedistributionStoresIntuneDetails1SecretJson
     */
    public function getSecretJson()
    {
        return $this->container['secret_json'];
    }

    /**
     * Sets secret_json
     *
     * @param \Swagger\Client\Model\V01appsownerNameappNamedistributionStoresIntuneDetails1SecretJson $secret_json secret_json
     *
     * @return $this
     */
    public function setSecretJson($secret_json)
    {
        $this->container['secret_json'] = $secret_json;

        return $this;
    }

    /**
     * Gets target_audience
     *
     * @return \Swagger\Client\Model\V01appsownerNameappNamedistributionStoresIntuneDetails1TargetAudience
     */
    public function getTargetAudience()
    {
        return $this->container['target_audience'];
    }

    /**
     * Sets target_audience
     *
     * @param \Swagger\Client\Model\V01appsownerNameappNamedistributionStoresIntuneDetails1TargetAudience $target_audience target_audience
     *
     * @return $this
     */
    public function setTargetAudience($target_audience)
    {
        $this->container['target_audience'] = $target_audience;

        return $this;
    }

    /**
     * Gets app_category
     *
     * @return \Swagger\Client\Model\V01appsownerNameappNamedistributionStoresIntuneDetails1AppCategory
     */
    public function getAppCategory()
    {
        return $this->container['app_category'];
    }

    /**
     * Sets app_category
     *
     * @param \Swagger\Client\Model\V01appsownerNameappNamedistributionStoresIntuneDetails1AppCategory $app_category app_category
     *
     * @return $this
     */
    public function setAppCategory($app_category)
    {
        $this->container['app_category'] = $app_category;

        return $this;
    }

    /**
     * Gets tenant_id
     *
     * @return string
     */
    public function getTenantId()
    {
        return $this->container['tenant_id'];
    }

    /**
     * Sets tenant_id
     *
     * @param string $tenant_id tenant id of the intune store
     *
     * @return $this
     */
    public function setTenantId($tenant_id)
    {
        $this->container['tenant_id'] = $tenant_id;

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


