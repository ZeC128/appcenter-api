<?php
/**
 * UserProfileResponseInternal
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
 * UserProfileResponseInternal Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserProfileResponseInternal implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UserProfileResponseInternal';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'feature_flags' => 'string[]',
        'admin_role' => 'string',
        'settings' => '\Swagger\Client\Model\UserProfileResponseInternalSettings'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'feature_flags' => null,
        'admin_role' => null,
        'settings' => null
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
        'feature_flags' => 'feature_flags',
        'admin_role' => 'admin_role',
        'settings' => 'settings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'feature_flags' => 'setFeatureFlags',
        'admin_role' => 'setAdminRole',
        'settings' => 'setSettings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'feature_flags' => 'getFeatureFlags',
        'admin_role' => 'getAdminRole',
        'settings' => 'getSettings'
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

    const ADMIN_ROLE_SUPER_ADMIN = 'superAdmin';
    const ADMIN_ROLE_ADMIN = 'admin';
    const ADMIN_ROLE_DEV_OPS = 'devOps';
    const ADMIN_ROLE_CUSTOMER_SUPPORT = 'customerSupport';
    const ADMIN_ROLE_NOT_ADMIN = 'notAdmin';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAdminRoleAllowableValues()
    {
        return [
            self::ADMIN_ROLE_SUPER_ADMIN,
            self::ADMIN_ROLE_ADMIN,
            self::ADMIN_ROLE_DEV_OPS,
            self::ADMIN_ROLE_CUSTOMER_SUPPORT,
            self::ADMIN_ROLE_NOT_ADMIN,
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
        $this->container['feature_flags'] = isset($data['feature_flags']) ? $data['feature_flags'] : null;
        $this->container['admin_role'] = isset($data['admin_role']) ? $data['admin_role'] : null;
        $this->container['settings'] = isset($data['settings']) ? $data['settings'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAdminRoleAllowableValues();
        if (!is_null($this->container['admin_role']) && !in_array($this->container['admin_role'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'admin_role', must be one of '%s'",
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
     * Gets feature_flags
     *
     * @return string[]
     */
    public function getFeatureFlags()
    {
        return $this->container['feature_flags'];
    }

    /**
     * Sets feature_flags
     *
     * @param string[] $feature_flags The feature flags that are enabled for this app
     *
     * @return $this
     */
    public function setFeatureFlags($feature_flags)
    {
        $this->container['feature_flags'] = $feature_flags;

        return $this;
    }

    /**
     * Gets admin_role
     *
     * @return string
     */
    public function getAdminRole()
    {
        return $this->container['admin_role'];
    }

    /**
     * Sets admin_role
     *
     * @param string $admin_role The new admin_role
     *
     * @return $this
     */
    public function setAdminRole($admin_role)
    {
        $allowedValues = $this->getAdminRoleAllowableValues();
        if (!is_null($admin_role) && !in_array($admin_role, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'admin_role', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['admin_role'] = $admin_role;

        return $this;
    }

    /**
     * Gets settings
     *
     * @return \Swagger\Client\Model\UserProfileResponseInternalSettings
     */
    public function getSettings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings
     *
     * @param \Swagger\Client\Model\UserProfileResponseInternalSettings $settings settings
     *
     * @return $this
     */
    public function setSettings($settings)
    {
        $this->container['settings'] = $settings;

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

