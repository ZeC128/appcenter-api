<?php
/**
 * ApiTokenGetUserResponse
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
 * ApiTokenGetUserResponse Class Doc Comment
 *
 * @category Class
 * @package  ZeC128\AppCenter
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApiTokenGetUserResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ApiTokenGetUserResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'token_id' => 'string',
        'token_scope' => 'string[]',
        'user_email' => 'string',
        'user_id' => 'string',
        'user_origin' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'token_id' => 'uuid',
        'token_scope' => null,
        'user_email' => null,
        'user_id' => 'uuid',
        'user_origin' => null
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
        'token_id' => 'token_id',
        'token_scope' => 'token_scope',
        'user_email' => 'user_email',
        'user_id' => 'user_id',
        'user_origin' => 'user_origin'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'token_id' => 'setTokenId',
        'token_scope' => 'setTokenScope',
        'user_email' => 'setUserEmail',
        'user_id' => 'setUserId',
        'user_origin' => 'setUserOrigin'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'token_id' => 'getTokenId',
        'token_scope' => 'getTokenScope',
        'user_email' => 'getUserEmail',
        'user_id' => 'getUserId',
        'user_origin' => 'getUserOrigin'
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

    const TOKEN_SCOPE_ALL = 'all';
    const TOKEN_SCOPE_IN_APP_UPDATE = 'in_app_update';
    const TOKEN_SCOPE_VIEWER = 'viewer';
    const USER_ORIGIN_APPCENTER = 'appcenter';
    const USER_ORIGIN_HOCKEYAPP = 'hockeyapp';
    const USER_ORIGIN_CODEPUSH = 'codepush';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTokenScopeAllowableValues()
    {
        return [
            self::TOKEN_SCOPE_ALL,
            self::TOKEN_SCOPE_IN_APP_UPDATE,
            self::TOKEN_SCOPE_VIEWER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUserOriginAllowableValues()
    {
        return [
            self::USER_ORIGIN_APPCENTER,
            self::USER_ORIGIN_HOCKEYAPP,
            self::USER_ORIGIN_CODEPUSH,
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
        $this->container['token_id'] = isset($data['token_id']) ? $data['token_id'] : null;
        $this->container['token_scope'] = isset($data['token_scope']) ? $data['token_scope'] : null;
        $this->container['user_email'] = isset($data['user_email']) ? $data['user_email'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['user_origin'] = isset($data['user_origin']) ? $data['user_origin'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['token_id'] === null) {
            $invalidProperties[] = "'token_id' can't be null";
        }
        if ($this->container['token_scope'] === null) {
            $invalidProperties[] = "'token_scope' can't be null";
        }
        if ($this->container['user_email'] === null) {
            $invalidProperties[] = "'user_email' can't be null";
        }
        if ($this->container['user_id'] === null) {
            $invalidProperties[] = "'user_id' can't be null";
        }
        if ($this->container['user_origin'] === null) {
            $invalidProperties[] = "'user_origin' can't be null";
        }
        $allowedValues = $this->getUserOriginAllowableValues();
        if (!is_null($this->container['user_origin']) && !in_array($this->container['user_origin'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'user_origin', must be one of '%s'",
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
     * Gets token_id
     *
     * @return string
     */
    public function getTokenId()
    {
        return $this->container['token_id'];
    }

    /**
     * Sets token_id
     *
     * @param string $token_id The token's unique id (UUID)
     *
     * @return $this
     */
    public function setTokenId($token_id)
    {
        $this->container['token_id'] = $token_id;

        return $this;
    }

    /**
     * Gets token_scope
     *
     * @return string[]
     */
    public function getTokenScope()
    {
        return $this->container['token_scope'];
    }

    /**
     * Sets token_scope
     *
     * @param string[] $token_scope The token's scope. A list of allowed roles.
     *
     * @return $this
     */
    public function setTokenScope($token_scope)
    {
        $allowedValues = $this->getTokenScopeAllowableValues();
        if (array_diff($token_scope, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'token_scope', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['token_scope'] = $token_scope;

        return $this;
    }

    /**
     * Gets user_email
     *
     * @return string
     */
    public function getUserEmail()
    {
        return $this->container['user_email'];
    }

    /**
     * Sets user_email
     *
     * @param string $user_email The user email
     *
     * @return $this
     */
    public function setUserEmail($user_email)
    {
        $this->container['user_email'] = $user_email;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string $user_id The unique id (UUID) of the user
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets user_origin
     *
     * @return string
     */
    public function getUserOrigin()
    {
        return $this->container['user_origin'];
    }

    /**
     * Sets user_origin
     *
     * @param string $user_origin The creation origin of the user who created this api token
     *
     * @return $this
     */
    public function setUserOrigin($user_origin)
    {
        $allowedValues = $this->getUserOriginAllowableValues();
        if (!in_array($user_origin, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'user_origin', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['user_origin'] = $user_origin;

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


