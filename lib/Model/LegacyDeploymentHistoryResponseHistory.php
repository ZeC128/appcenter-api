<?php
/**
 * LegacyDeploymentHistoryResponseHistory
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
 * LegacyDeploymentHistoryResponseHistory Class Doc Comment
 *
 * @category Class
 * @description Information about a specific release.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LegacyDeploymentHistoryResponseHistory implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LegacyDeploymentHistoryResponse_history';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'all_of' => '\Swagger\Client\Model\LegacyDeploymentsResponsePackage',
        'description' => 'string',
        'original_deployment' => 'string',
        'original_label' => 'string',
        'package_hash' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'all_of' => null,
        'description' => null,
        'original_deployment' => null,
        'original_label' => null,
        'package_hash' => null
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
        'all_of' => 'allOf',
        'description' => 'description',
        'original_deployment' => 'originalDeployment',
        'original_label' => 'originalLabel',
        'package_hash' => 'packageHash'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'all_of' => 'setAllOf',
        'description' => 'setDescription',
        'original_deployment' => 'setOriginalDeployment',
        'original_label' => 'setOriginalLabel',
        'package_hash' => 'setPackageHash'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'all_of' => 'getAllOf',
        'description' => 'getDescription',
        'original_deployment' => 'getOriginalDeployment',
        'original_label' => 'getOriginalLabel',
        'package_hash' => 'getPackageHash'
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
        $this->container['all_of'] = isset($data['all_of']) ? $data['all_of'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['original_deployment'] = isset($data['original_deployment']) ? $data['original_deployment'] : null;
        $this->container['original_label'] = isset($data['original_label']) ? $data['original_label'] : null;
        $this->container['package_hash'] = isset($data['package_hash']) ? $data['package_hash'] : null;
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
     * Gets all_of
     *
     * @return \Swagger\Client\Model\LegacyDeploymentsResponsePackage
     */
    public function getAllOf()
    {
        return $this->container['all_of'];
    }

    /**
     * Sets all_of
     *
     * @param \Swagger\Client\Model\LegacyDeploymentsResponsePackage $all_of all_of
     *
     * @return $this
     */
    public function setAllOf($all_of)
    {
        $this->container['all_of'] = $all_of;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description The description of the release.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets original_deployment
     *
     * @return string
     */
    public function getOriginalDeployment()
    {
        return $this->container['original_deployment'];
    }

    /**
     * Sets original_deployment
     *
     * @param string $original_deployment The original deployment of the release, if it's ever been promoted.
     *
     * @return $this
     */
    public function setOriginalDeployment($original_deployment)
    {
        $this->container['original_deployment'] = $original_deployment;

        return $this;
    }

    /**
     * Gets original_label
     *
     * @return string
     */
    public function getOriginalLabel()
    {
        return $this->container['original_label'];
    }

    /**
     * Sets original_label
     *
     * @param string $original_label The original label of the release, if it's ever been updated.
     *
     * @return $this
     */
    public function setOriginalLabel($original_label)
    {
        $this->container['original_label'] = $original_label;

        return $this;
    }

    /**
     * Gets package_hash
     *
     * @return string
     */
    public function getPackageHash()
    {
        return $this->container['package_hash'];
    }

    /**
     * Sets package_hash
     *
     * @param string $package_hash The package's hash value (internal use).
     *
     * @return $this
     */
    public function setPackageHash($package_hash)
    {
        $this->container['package_hash'] = $package_hash;

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


