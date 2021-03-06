<?php
/**
 * AlertingVstsBugtrackerSettings
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
 * AlertingVstsBugtrackerSettings Class Doc Comment
 *
 * @category Class
 * @description VSTS bugtracker specific settings
 * @package  ZeC128\AppCenter
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AlertingVstsBugtrackerSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = 'type';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AlertingVstsBugtrackerSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'vsts_project_id' => 'string',
        'vsts_project_uri' => 'string',
        'vsts_project_name' => 'string',
        'vsts_account_name' => 'string',
        'vsts_area_path' => 'string',
        'vsts_default_payload' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'vsts_project_id' => null,
        'vsts_project_uri' => null,
        'vsts_project_name' => null,
        'vsts_account_name' => null,
        'vsts_area_path' => null,
        'vsts_default_payload' => null
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
        'vsts_project_id' => 'vsts_project_id',
        'vsts_project_uri' => 'vsts_project_uri',
        'vsts_project_name' => 'vsts_project_name',
        'vsts_account_name' => 'vsts_account_name',
        'vsts_area_path' => 'vsts_area_path',
        'vsts_default_payload' => 'vsts_default_payload'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vsts_project_id' => 'setVstsProjectId',
        'vsts_project_uri' => 'setVstsProjectUri',
        'vsts_project_name' => 'setVstsProjectName',
        'vsts_account_name' => 'setVstsAccountName',
        'vsts_area_path' => 'setVstsAreaPath',
        'vsts_default_payload' => 'setVstsDefaultPayload'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vsts_project_id' => 'getVstsProjectId',
        'vsts_project_uri' => 'getVstsProjectUri',
        'vsts_project_name' => 'getVstsProjectName',
        'vsts_account_name' => 'getVstsAccountName',
        'vsts_area_path' => 'getVstsAreaPath',
        'vsts_default_payload' => 'getVstsDefaultPayload'
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
        $this->container['vsts_project_id'] = isset($data['vsts_project_id']) ? $data['vsts_project_id'] : null;
        $this->container['vsts_project_uri'] = isset($data['vsts_project_uri']) ? $data['vsts_project_uri'] : null;
        $this->container['vsts_project_name'] = isset($data['vsts_project_name']) ? $data['vsts_project_name'] : null;
        $this->container['vsts_account_name'] = isset($data['vsts_account_name']) ? $data['vsts_account_name'] : null;
        $this->container['vsts_area_path'] = isset($data['vsts_area_path']) ? $data['vsts_area_path'] : null;
        $this->container['vsts_default_payload'] = isset($data['vsts_default_payload']) ? $data['vsts_default_payload'] : null;

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
     * Gets vsts_project_id
     *
     * @return string
     */
    public function getVstsProjectId()
    {
        return $this->container['vsts_project_id'];
    }

    /**
     * Sets vsts_project_id
     *
     * @param string $vsts_project_id vsts_project_id
     *
     * @return $this
     */
    public function setVstsProjectId($vsts_project_id)
    {
        $this->container['vsts_project_id'] = $vsts_project_id;

        return $this;
    }

    /**
     * Gets vsts_project_uri
     *
     * @return string
     */
    public function getVstsProjectUri()
    {
        return $this->container['vsts_project_uri'];
    }

    /**
     * Sets vsts_project_uri
     *
     * @param string $vsts_project_uri vsts_project_uri
     *
     * @return $this
     */
    public function setVstsProjectUri($vsts_project_uri)
    {
        $this->container['vsts_project_uri'] = $vsts_project_uri;

        return $this;
    }

    /**
     * Gets vsts_project_name
     *
     * @return string
     */
    public function getVstsProjectName()
    {
        return $this->container['vsts_project_name'];
    }

    /**
     * Sets vsts_project_name
     *
     * @param string $vsts_project_name vsts_project_name
     *
     * @return $this
     */
    public function setVstsProjectName($vsts_project_name)
    {
        $this->container['vsts_project_name'] = $vsts_project_name;

        return $this;
    }

    /**
     * Gets vsts_account_name
     *
     * @return string
     */
    public function getVstsAccountName()
    {
        return $this->container['vsts_account_name'];
    }

    /**
     * Sets vsts_account_name
     *
     * @param string $vsts_account_name vsts_account_name
     *
     * @return $this
     */
    public function setVstsAccountName($vsts_account_name)
    {
        $this->container['vsts_account_name'] = $vsts_account_name;

        return $this;
    }

    /**
     * Gets vsts_area_path
     *
     * @return string
     */
    public function getVstsAreaPath()
    {
        return $this->container['vsts_area_path'];
    }

    /**
     * Sets vsts_area_path
     *
     * @param string $vsts_area_path vsts_area_path
     *
     * @return $this
     */
    public function setVstsAreaPath($vsts_area_path)
    {
        $this->container['vsts_area_path'] = $vsts_area_path;

        return $this;
    }

    /**
     * Gets vsts_default_payload
     *
     * @return object
     */
    public function getVstsDefaultPayload()
    {
        return $this->container['vsts_default_payload'];
    }

    /**
     * Sets vsts_default_payload
     *
     * @param object $vsts_default_payload vsts_default_payload
     *
     * @return $this
     */
    public function setVstsDefaultPayload($vsts_default_payload)
    {
        $this->container['vsts_default_payload'] = $vsts_default_payload;

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


