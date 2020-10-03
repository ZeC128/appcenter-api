<?php
/**
 * ValidatedApiTokenResponse
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
 * ValidatedApiTokenResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ValidatedApiTokenResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ValidatedApiTokenResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'token_id' => 'string',
        'token_scope' => 'string[]',
        'principal_id' => 'string',
        'principal_type' => 'string',
        'claims' => '\Swagger\Client\Model\ValidatedApiTokenResponseClaims[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'token_id' => 'uuid',
        'token_scope' => null,
        'principal_id' => 'uuid',
        'principal_type' => null,
        'claims' => null
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
        'principal_id' => 'principal_id',
        'principal_type' => 'principal_type',
        'claims' => 'claims'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'token_id' => 'setTokenId',
        'token_scope' => 'setTokenScope',
        'principal_id' => 'setPrincipalId',
        'principal_type' => 'setPrincipalType',
        'claims' => 'setClaims'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'token_id' => 'getTokenId',
        'token_scope' => 'getTokenScope',
        'principal_id' => 'getPrincipalId',
        'principal_type' => 'getPrincipalType',
        'claims' => 'getClaims'
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
    const PRINCIPAL_TYPE_APP = 'app';
    const PRINCIPAL_TYPE_USER = 'user';
    

    
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
    public function getPrincipalTypeAllowableValues()
    {
        return [
            self::PRINCIPAL_TYPE_APP,
            self::PRINCIPAL_TYPE_USER,
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
        $this->container['principal_id'] = isset($data['principal_id']) ? $data['principal_id'] : null;
        $this->container['principal_type'] = isset($data['principal_type']) ? $data['principal_type'] : null;
        $this->container['claims'] = isset($data['claims']) ? $data['claims'] : null;
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
        if ($this->container['principal_id'] === null) {
            $invalidProperties[] = "'principal_id' can't be null";
        }
        if ($this->container['principal_type'] === null) {
            $invalidProperties[] = "'principal_type' can't be null";
        }
        $allowedValues = $this->getPrincipalTypeAllowableValues();
        if (!is_null($this->container['principal_type']) && !in_array($this->container['principal_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'principal_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['claims'] === null) {
            $invalidProperties[] = "'claims' can't be null";
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
     * Gets principal_id
     *
     * @return string
     */
    public function getPrincipalId()
    {
        return $this->container['principal_id'];
    }

    /**
     * Sets principal_id
     *
     * @param string $principal_id The ID of the owner of the API Token (user_id or app_id)
     *
     * @return $this
     */
    public function setPrincipalId($principal_id)
    {
        $this->container['principal_id'] = $principal_id;

        return $this;
    }

    /**
     * Gets principal_type
     *
     * @return string
     */
    public function getPrincipalType()
    {
        return $this->container['principal_type'];
    }

    /**
     * Sets principal_type
     *
     * @param string $principal_type Indicates the type of the principal (app or user)
     *
     * @return $this
     */
    public function setPrincipalType($principal_type)
    {
        $allowedValues = $this->getPrincipalTypeAllowableValues();
        if (!in_array($principal_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'principal_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['principal_type'] = $principal_type;

        return $this;
    }

    /**
     * Gets claims
     *
     * @return \Swagger\Client\Model\ValidatedApiTokenResponseClaims[]
     */
    public function getClaims()
    {
        return $this->container['claims'];
    }

    /**
     * Sets claims
     *
     * @param \Swagger\Client\Model\ValidatedApiTokenResponseClaims[] $claims Collection of attributes that describe the principal of the specified API Token
     *
     * @return $this
     */
    public function setClaims($claims)
    {
        $this->container['claims'] = $claims;

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


