<?php
/**
 * CodePushRelease
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
 * CodePushRelease Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CodePushRelease implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CodePushRelease';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'label' => 'string',
        'package_hash' => 'string',
        'blob_url' => 'string',
        'diff_package_map' => 'map[string,\Swagger\Client\Model\CodePushReleaseDiffPackageMap]',
        'original_deployment' => 'string',
        'original_label' => 'string',
        'released_by' => 'string',
        'release_method' => 'string',
        'size' => 'float',
        'upload_time' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'label' => null,
        'package_hash' => null,
        'blob_url' => null,
        'diff_package_map' => null,
        'original_deployment' => null,
        'original_label' => null,
        'released_by' => null,
        'release_method' => null,
        'size' => null,
        'upload_time' => null
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
        'label' => 'label',
        'package_hash' => 'package_hash',
        'blob_url' => 'blob_url',
        'diff_package_map' => 'diff_package_map',
        'original_deployment' => 'original_deployment',
        'original_label' => 'original_label',
        'released_by' => 'released_by',
        'release_method' => 'release_method',
        'size' => 'size',
        'upload_time' => 'upload_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'label' => 'setLabel',
        'package_hash' => 'setPackageHash',
        'blob_url' => 'setBlobUrl',
        'diff_package_map' => 'setDiffPackageMap',
        'original_deployment' => 'setOriginalDeployment',
        'original_label' => 'setOriginalLabel',
        'released_by' => 'setReleasedBy',
        'release_method' => 'setReleaseMethod',
        'size' => 'setSize',
        'upload_time' => 'setUploadTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'label' => 'getLabel',
        'package_hash' => 'getPackageHash',
        'blob_url' => 'getBlobUrl',
        'diff_package_map' => 'getDiffPackageMap',
        'original_deployment' => 'getOriginalDeployment',
        'original_label' => 'getOriginalLabel',
        'released_by' => 'getReleasedBy',
        'release_method' => 'getReleaseMethod',
        'size' => 'getSize',
        'upload_time' => 'getUploadTime'
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

    const RELEASE_METHOD_UPLOAD = 'Upload';
    const RELEASE_METHOD_PROMOTE = 'Promote';
    const RELEASE_METHOD_ROLLBACK = 'Rollback';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReleaseMethodAllowableValues()
    {
        return [
            self::RELEASE_METHOD_UPLOAD,
            self::RELEASE_METHOD_PROMOTE,
            self::RELEASE_METHOD_ROLLBACK,
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
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['package_hash'] = isset($data['package_hash']) ? $data['package_hash'] : null;
        $this->container['blob_url'] = isset($data['blob_url']) ? $data['blob_url'] : null;
        $this->container['diff_package_map'] = isset($data['diff_package_map']) ? $data['diff_package_map'] : null;
        $this->container['original_deployment'] = isset($data['original_deployment']) ? $data['original_deployment'] : null;
        $this->container['original_label'] = isset($data['original_label']) ? $data['original_label'] : null;
        $this->container['released_by'] = isset($data['released_by']) ? $data['released_by'] : null;
        $this->container['release_method'] = isset($data['release_method']) ? $data['release_method'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['upload_time'] = isset($data['upload_time']) ? $data['upload_time'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getReleaseMethodAllowableValues();
        if (!is_null($this->container['release_method']) && !in_array($this->container['release_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'release_method', must be one of '%s'",
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
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

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
     * @param string $package_hash package_hash
     *
     * @return $this
     */
    public function setPackageHash($package_hash)
    {
        $this->container['package_hash'] = $package_hash;

        return $this;
    }

    /**
     * Gets blob_url
     *
     * @return string
     */
    public function getBlobUrl()
    {
        return $this->container['blob_url'];
    }

    /**
     * Sets blob_url
     *
     * @param string $blob_url blob_url
     *
     * @return $this
     */
    public function setBlobUrl($blob_url)
    {
        $this->container['blob_url'] = $blob_url;

        return $this;
    }

    /**
     * Gets diff_package_map
     *
     * @return map[string,\Swagger\Client\Model\CodePushReleaseDiffPackageMap]
     */
    public function getDiffPackageMap()
    {
        return $this->container['diff_package_map'];
    }

    /**
     * Sets diff_package_map
     *
     * @param map[string,\Swagger\Client\Model\CodePushReleaseDiffPackageMap] $diff_package_map diff_package_map
     *
     * @return $this
     */
    public function setDiffPackageMap($diff_package_map)
    {
        $this->container['diff_package_map'] = $diff_package_map;

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
     * @param string $original_deployment Set on 'Promote'
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
     * @param string $original_label Set on 'Promote' and 'Rollback'
     *
     * @return $this
     */
    public function setOriginalLabel($original_label)
    {
        $this->container['original_label'] = $original_label;

        return $this;
    }

    /**
     * Gets released_by
     *
     * @return string
     */
    public function getReleasedBy()
    {
        return $this->container['released_by'];
    }

    /**
     * Sets released_by
     *
     * @param string $released_by released_by
     *
     * @return $this
     */
    public function setReleasedBy($released_by)
    {
        $this->container['released_by'] = $released_by;

        return $this;
    }

    /**
     * Gets release_method
     *
     * @return string
     */
    public function getReleaseMethod()
    {
        return $this->container['release_method'];
    }

    /**
     * Sets release_method
     *
     * @param string $release_method The release method is unknown if unspecified
     *
     * @return $this
     */
    public function setReleaseMethod($release_method)
    {
        $allowedValues = $this->getReleaseMethodAllowableValues();
        if (!is_null($release_method) && !in_array($release_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'release_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['release_method'] = $release_method;

        return $this;
    }

    /**
     * Gets size
     *
     * @return float
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param float $size size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets upload_time
     *
     * @return int
     */
    public function getUploadTime()
    {
        return $this->container['upload_time'];
    }

    /**
     * Sets upload_time
     *
     * @param int $upload_time upload_time
     *
     * @return $this
     */
    public function setUploadTime($upload_time)
    {
        $this->container['upload_time'] = $upload_time;

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


