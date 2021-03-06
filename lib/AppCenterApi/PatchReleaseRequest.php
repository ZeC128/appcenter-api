<?php
/**
 * PatchReleaseRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  ZeC128\AppCenter
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

namespace ZeC128\AppCenter\AppCenterApi;

use \ArrayAccess;
use \ZeC128\AppCenter\ObjectSerializer;

/**
 * PatchReleaseRequest Class Doc Comment
 *
 * @category Class
 * @package  ZeC128\AppCenter
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PatchReleaseRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PatchReleaseRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'status' => 'string',
        'dest_publish_id' => 'string',
        'error_details' => 'string',
        'error_context_id' => 'string',
        'wrap_package_url' => 'string',
        'is_wrapper_request' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'status' => null,
        'dest_publish_id' => null,
        'error_details' => null,
        'error_context_id' => null,
        'wrap_package_url' => null,
        'is_wrapper_request' => null
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
        'status' => 'status',
        'dest_publish_id' => 'dest_publish_id',
        'error_details' => 'error_details',
        'error_context_id' => 'error_contextId',
        'wrap_package_url' => 'wrap_package_url',
        'is_wrapper_request' => 'is_wrapper_request'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'dest_publish_id' => 'setDestPublishId',
        'error_details' => 'setErrorDetails',
        'error_context_id' => 'setErrorContextId',
        'wrap_package_url' => 'setWrapPackageUrl',
        'is_wrapper_request' => 'setIsWrapperRequest'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'dest_publish_id' => 'getDestPublishId',
        'error_details' => 'getErrorDetails',
        'error_context_id' => 'getErrorContextId',
        'wrap_package_url' => 'getWrapPackageUrl',
        'is_wrapper_request' => 'getIsWrapperRequest'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['dest_publish_id'] = isset($data['dest_publish_id']) ? $data['dest_publish_id'] : null;
        $this->container['error_details'] = isset($data['error_details']) ? $data['error_details'] : null;
        $this->container['error_context_id'] = isset($data['error_context_id']) ? $data['error_context_id'] : null;
        $this->container['wrap_package_url'] = isset($data['wrap_package_url']) ? $data['wrap_package_url'] : null;
        $this->container['is_wrapper_request'] = isset($data['is_wrapper_request']) ? $data['is_wrapper_request'] : null;
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
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status updated status of release
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets dest_publish_id
     *
     * @return string
     */
    public function getDestPublishId()
    {
        return $this->container['dest_publish_id'];
    }

    /**
     * Sets dest_publish_id
     *
     * @param string $dest_publish_id Destination Publish Id
     *
     * @return $this
     */
    public function setDestPublishId($dest_publish_id)
    {
        $this->container['dest_publish_id'] = $dest_publish_id;

        return $this;
    }

    /**
     * Gets error_details
     *
     * @return string
     */
    public function getErrorDetails()
    {
        return $this->container['error_details'];
    }

    /**
     * Sets error_details
     *
     * @param string $error_details failure error details from store
     *
     * @return $this
     */
    public function setErrorDetails($error_details)
    {
        $this->container['error_details'] = $error_details;

        return $this;
    }

    /**
     * Gets error_context_id
     *
     * @return string
     */
    public function getErrorContextId()
    {
        return $this->container['error_context_id'];
    }

    /**
     * Sets error_context_id
     *
     * @param string $error_context_id contextId for failed error message
     *
     * @return $this
     */
    public function setErrorContextId($error_context_id)
    {
        $this->container['error_context_id'] = $error_context_id;

        return $this;
    }

    /**
     * Gets wrap_package_url
     *
     * @return string
     */
    public function getWrapPackageUrl()
    {
        return $this->container['wrap_package_url'];
    }

    /**
     * Sets wrap_package_url
     *
     * @param string $wrap_package_url package url for wrapping request
     *
     * @return $this
     */
    public function setWrapPackageUrl($wrap_package_url)
    {
        $this->container['wrap_package_url'] = $wrap_package_url;

        return $this;
    }

    /**
     * Gets is_wrapper_request
     *
     * @return bool
     */
    public function getIsWrapperRequest()
    {
        return $this->container['is_wrapper_request'];
    }

    /**
     * Sets is_wrapper_request
     *
     * @param bool $is_wrapper_request request is for wrapping or not
     *
     * @return $this
     */
    public function setIsWrapperRequest($is_wrapper_request)
    {
        $this->container['is_wrapper_request'] = $is_wrapper_request;

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


