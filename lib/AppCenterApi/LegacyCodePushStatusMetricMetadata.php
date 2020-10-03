<?php
/**
 * LegacyCodePushStatusMetricMetadata
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
 * LegacyCodePushStatusMetricMetadata Class Doc Comment
 *
 * @category Class
 * @package  ZeC128\AppCenter
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LegacyCodePushStatusMetricMetadata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LegacyCodePushStatusMetricMetadata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'deployment_key' => 'string',
        'label' => 'string',
        'app_version' => 'string',
        'previous_deployment_key' => 'string',
        'previous_label_or_app_version' => 'string',
        'status' => 'string',
        'client_unique_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'deployment_key' => null,
        'label' => null,
        'app_version' => null,
        'previous_deployment_key' => null,
        'previous_label_or_app_version' => null,
        'status' => null,
        'client_unique_id' => null
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
        'deployment_key' => 'deploymentKey',
        'label' => 'label',
        'app_version' => 'appVersion',
        'previous_deployment_key' => 'previousDeploymentKey',
        'previous_label_or_app_version' => 'previousLabelOrAppVersion',
        'status' => 'status',
        'client_unique_id' => 'clientUniqueId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'deployment_key' => 'setDeploymentKey',
        'label' => 'setLabel',
        'app_version' => 'setAppVersion',
        'previous_deployment_key' => 'setPreviousDeploymentKey',
        'previous_label_or_app_version' => 'setPreviousLabelOrAppVersion',
        'status' => 'setStatus',
        'client_unique_id' => 'setClientUniqueId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'deployment_key' => 'getDeploymentKey',
        'label' => 'getLabel',
        'app_version' => 'getAppVersion',
        'previous_deployment_key' => 'getPreviousDeploymentKey',
        'previous_label_or_app_version' => 'getPreviousLabelOrAppVersion',
        'status' => 'getStatus',
        'client_unique_id' => 'getClientUniqueId'
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
        $this->container['deployment_key'] = isset($data['deployment_key']) ? $data['deployment_key'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['app_version'] = isset($data['app_version']) ? $data['app_version'] : null;
        $this->container['previous_deployment_key'] = isset($data['previous_deployment_key']) ? $data['previous_deployment_key'] : null;
        $this->container['previous_label_or_app_version'] = isset($data['previous_label_or_app_version']) ? $data['previous_label_or_app_version'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['client_unique_id'] = isset($data['client_unique_id']) ? $data['client_unique_id'] : null;
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
     * Gets deployment_key
     *
     * @return string
     */
    public function getDeploymentKey()
    {
        return $this->container['deployment_key'];
    }

    /**
     * Sets deployment_key
     *
     * @param string $deployment_key deployment_key
     *
     * @return $this
     */
    public function setDeploymentKey($deployment_key)
    {
        $this->container['deployment_key'] = $deployment_key;

        return $this;
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
     * Gets app_version
     *
     * @return string
     */
    public function getAppVersion()
    {
        return $this->container['app_version'];
    }

    /**
     * Sets app_version
     *
     * @param string $app_version app_version
     *
     * @return $this
     */
    public function setAppVersion($app_version)
    {
        $this->container['app_version'] = $app_version;

        return $this;
    }

    /**
     * Gets previous_deployment_key
     *
     * @return string
     */
    public function getPreviousDeploymentKey()
    {
        return $this->container['previous_deployment_key'];
    }

    /**
     * Sets previous_deployment_key
     *
     * @param string $previous_deployment_key previous_deployment_key
     *
     * @return $this
     */
    public function setPreviousDeploymentKey($previous_deployment_key)
    {
        $this->container['previous_deployment_key'] = $previous_deployment_key;

        return $this;
    }

    /**
     * Gets previous_label_or_app_version
     *
     * @return string
     */
    public function getPreviousLabelOrAppVersion()
    {
        return $this->container['previous_label_or_app_version'];
    }

    /**
     * Sets previous_label_or_app_version
     *
     * @param string $previous_label_or_app_version previous_label_or_app_version
     *
     * @return $this
     */
    public function setPreviousLabelOrAppVersion($previous_label_or_app_version)
    {
        $this->container['previous_label_or_app_version'] = $previous_label_or_app_version;

        return $this;
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
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets client_unique_id
     *
     * @return string
     */
    public function getClientUniqueId()
    {
        return $this->container['client_unique_id'];
    }

    /**
     * Sets client_unique_id
     *
     * @param string $client_unique_id client_unique_id
     *
     * @return $this
     */
    public function setClientUniqueId($client_unique_id)
    {
        $this->container['client_unique_id'] = $client_unique_id;

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

