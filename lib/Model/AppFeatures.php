<?php
/**
 * AppFeatures
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
 * AppFeatures Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AppFeatures implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AppFeatures';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'crashgroup_modify_status' => 'bool',
        'crashgroup_modify_annotation' => 'bool',
        'search' => 'bool',
        'crashgroup_analytics_crashfreeusers' => 'bool',
        'crashgroup_analytics_impactedusers' => 'bool',
        'crash_download_raw' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'crashgroup_modify_status' => null,
        'crashgroup_modify_annotation' => null,
        'search' => null,
        'crashgroup_analytics_crashfreeusers' => null,
        'crashgroup_analytics_impactedusers' => null,
        'crash_download_raw' => null
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
        'crashgroup_modify_status' => 'crashgroup_modify_status',
        'crashgroup_modify_annotation' => 'crashgroup_modify_annotation',
        'search' => 'search',
        'crashgroup_analytics_crashfreeusers' => 'crashgroup_analytics_crashfreeusers',
        'crashgroup_analytics_impactedusers' => 'crashgroup_analytics_impactedusers',
        'crash_download_raw' => 'crash_download_raw'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'crashgroup_modify_status' => 'setCrashgroupModifyStatus',
        'crashgroup_modify_annotation' => 'setCrashgroupModifyAnnotation',
        'search' => 'setSearch',
        'crashgroup_analytics_crashfreeusers' => 'setCrashgroupAnalyticsCrashfreeusers',
        'crashgroup_analytics_impactedusers' => 'setCrashgroupAnalyticsImpactedusers',
        'crash_download_raw' => 'setCrashDownloadRaw'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'crashgroup_modify_status' => 'getCrashgroupModifyStatus',
        'crashgroup_modify_annotation' => 'getCrashgroupModifyAnnotation',
        'search' => 'getSearch',
        'crashgroup_analytics_crashfreeusers' => 'getCrashgroupAnalyticsCrashfreeusers',
        'crashgroup_analytics_impactedusers' => 'getCrashgroupAnalyticsImpactedusers',
        'crash_download_raw' => 'getCrashDownloadRaw'
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
        $this->container['crashgroup_modify_status'] = isset($data['crashgroup_modify_status']) ? $data['crashgroup_modify_status'] : null;
        $this->container['crashgroup_modify_annotation'] = isset($data['crashgroup_modify_annotation']) ? $data['crashgroup_modify_annotation'] : null;
        $this->container['search'] = isset($data['search']) ? $data['search'] : null;
        $this->container['crashgroup_analytics_crashfreeusers'] = isset($data['crashgroup_analytics_crashfreeusers']) ? $data['crashgroup_analytics_crashfreeusers'] : null;
        $this->container['crashgroup_analytics_impactedusers'] = isset($data['crashgroup_analytics_impactedusers']) ? $data['crashgroup_analytics_impactedusers'] : null;
        $this->container['crash_download_raw'] = isset($data['crash_download_raw']) ? $data['crash_download_raw'] : null;
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
     * Gets crashgroup_modify_status
     *
     * @return bool
     */
    public function getCrashgroupModifyStatus()
    {
        return $this->container['crashgroup_modify_status'];
    }

    /**
     * Sets crashgroup_modify_status
     *
     * @param bool $crashgroup_modify_status App supports modification of crashgroup status
     *
     * @return $this
     */
    public function setCrashgroupModifyStatus($crashgroup_modify_status)
    {
        $this->container['crashgroup_modify_status'] = $crashgroup_modify_status;

        return $this;
    }

    /**
     * Gets crashgroup_modify_annotation
     *
     * @return bool
     */
    public function getCrashgroupModifyAnnotation()
    {
        return $this->container['crashgroup_modify_annotation'];
    }

    /**
     * Sets crashgroup_modify_annotation
     *
     * @param bool $crashgroup_modify_annotation App supports modification of crashgroup annotation
     *
     * @return $this
     */
    public function setCrashgroupModifyAnnotation($crashgroup_modify_annotation)
    {
        $this->container['crashgroup_modify_annotation'] = $crashgroup_modify_annotation;

        return $this;
    }

    /**
     * Gets search
     *
     * @return bool
     */
    public function getSearch()
    {
        return $this->container['search'];
    }

    /**
     * Sets search
     *
     * @param bool $search App supports search API
     *
     * @return $this
     */
    public function setSearch($search)
    {
        $this->container['search'] = $search;

        return $this;
    }

    /**
     * Gets crashgroup_analytics_crashfreeusers
     *
     * @return bool
     */
    public function getCrashgroupAnalyticsCrashfreeusers()
    {
        return $this->container['crashgroup_analytics_crashfreeusers'];
    }

    /**
     * Sets crashgroup_analytics_crashfreeusers
     *
     * @param bool $crashgroup_analytics_crashfreeusers App supports the 'crash free user' metric
     *
     * @return $this
     */
    public function setCrashgroupAnalyticsCrashfreeusers($crashgroup_analytics_crashfreeusers)
    {
        $this->container['crashgroup_analytics_crashfreeusers'] = $crashgroup_analytics_crashfreeusers;

        return $this;
    }

    /**
     * Gets crashgroup_analytics_impactedusers
     *
     * @return bool
     */
    public function getCrashgroupAnalyticsImpactedusers()
    {
        return $this->container['crashgroup_analytics_impactedusers'];
    }

    /**
     * Sets crashgroup_analytics_impactedusers
     *
     * @param bool $crashgroup_analytics_impactedusers App supports the 'impacted users' metric
     *
     * @return $this
     */
    public function setCrashgroupAnalyticsImpactedusers($crashgroup_analytics_impactedusers)
    {
        $this->container['crashgroup_analytics_impactedusers'] = $crashgroup_analytics_impactedusers;

        return $this;
    }

    /**
     * Gets crash_download_raw
     *
     * @return bool
     */
    public function getCrashDownloadRaw()
    {
        return $this->container['crash_download_raw'];
    }

    /**
     * Sets crash_download_raw
     *
     * @param bool $crash_download_raw App supports download of raw crashes
     *
     * @return $this
     */
    public function setCrashDownloadRaw($crash_download_raw)
    {
        $this->container['crash_download_raw'] = $crash_download_raw;

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

