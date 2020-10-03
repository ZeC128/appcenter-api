<?php
/**
 * AppRepoPostRequest
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
 * AppRepoPostRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AppRepoPostRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AppRepoPostRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'repo_url' => 'string',
        'repo_provider' => 'string',
        'user_id' => 'string',
        'installation_id' => 'string',
        'repo_id' => 'string',
        'external_user_id' => 'string',
        'service_connection_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'repo_url' => null,
        'repo_provider' => null,
        'user_id' => 'uuid',
        'installation_id' => null,
        'repo_id' => null,
        'external_user_id' => null,
        'service_connection_id' => 'uuid'
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
        'repo_url' => 'repo_url',
        'repo_provider' => 'repo_provider',
        'user_id' => 'user_id',
        'installation_id' => 'installation_id',
        'repo_id' => 'repo_id',
        'external_user_id' => 'external_user_id',
        'service_connection_id' => 'service_connection_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'repo_url' => 'setRepoUrl',
        'repo_provider' => 'setRepoProvider',
        'user_id' => 'setUserId',
        'installation_id' => 'setInstallationId',
        'repo_id' => 'setRepoId',
        'external_user_id' => 'setExternalUserId',
        'service_connection_id' => 'setServiceConnectionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'repo_url' => 'getRepoUrl',
        'repo_provider' => 'getRepoProvider',
        'user_id' => 'getUserId',
        'installation_id' => 'getInstallationId',
        'repo_id' => 'getRepoId',
        'external_user_id' => 'getExternalUserId',
        'service_connection_id' => 'getServiceConnectionId'
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

    const REPO_PROVIDER_GITHUB = 'github';
    const REPO_PROVIDER_BITBUCKET = 'bitbucket';
    const REPO_PROVIDER_VSTS = 'vsts';
    const REPO_PROVIDER_GITLAB = 'gitlab';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRepoProviderAllowableValues()
    {
        return [
            self::REPO_PROVIDER_GITHUB,
            self::REPO_PROVIDER_BITBUCKET,
            self::REPO_PROVIDER_VSTS,
            self::REPO_PROVIDER_GITLAB,
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
        $this->container['repo_url'] = isset($data['repo_url']) ? $data['repo_url'] : null;
        $this->container['repo_provider'] = isset($data['repo_provider']) ? $data['repo_provider'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['installation_id'] = isset($data['installation_id']) ? $data['installation_id'] : null;
        $this->container['repo_id'] = isset($data['repo_id']) ? $data['repo_id'] : null;
        $this->container['external_user_id'] = isset($data['external_user_id']) ? $data['external_user_id'] : null;
        $this->container['service_connection_id'] = isset($data['service_connection_id']) ? $data['service_connection_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['repo_url'] === null) {
            $invalidProperties[] = "'repo_url' can't be null";
        }
        $allowedValues = $this->getRepoProviderAllowableValues();
        if (!is_null($this->container['repo_provider']) && !in_array($this->container['repo_provider'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'repo_provider', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['user_id'] === null) {
            $invalidProperties[] = "'user_id' can't be null";
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
     * Gets repo_url
     *
     * @return string
     */
    public function getRepoUrl()
    {
        return $this->container['repo_url'];
    }

    /**
     * Sets repo_url
     *
     * @param string $repo_url The absolute URL of the repository
     *
     * @return $this
     */
    public function setRepoUrl($repo_url)
    {
        $this->container['repo_url'] = $repo_url;

        return $this;
    }

    /**
     * Gets repo_provider
     *
     * @return string
     */
    public function getRepoProvider()
    {
        return $this->container['repo_provider'];
    }

    /**
     * Sets repo_provider
     *
     * @param string $repo_provider The provider of the repository
     *
     * @return $this
     */
    public function setRepoProvider($repo_provider)
    {
        $allowedValues = $this->getRepoProviderAllowableValues();
        if (!is_null($repo_provider) && !in_array($repo_provider, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'repo_provider', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['repo_provider'] = $repo_provider;

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
     * @param string $user_id The unique id (UUID) of the user who configured the repository
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets installation_id
     *
     * @return string
     */
    public function getInstallationId()
    {
        return $this->container['installation_id'];
    }

    /**
     * Sets installation_id
     *
     * @param string $installation_id Installation id from the provider
     *
     * @return $this
     */
    public function setInstallationId($installation_id)
    {
        $this->container['installation_id'] = $installation_id;

        return $this;
    }

    /**
     * Gets repo_id
     *
     * @return string
     */
    public function getRepoId()
    {
        return $this->container['repo_id'];
    }

    /**
     * Sets repo_id
     *
     * @param string $repo_id Repository id from the provider
     *
     * @return $this
     */
    public function setRepoId($repo_id)
    {
        $this->container['repo_id'] = $repo_id;

        return $this;
    }

    /**
     * Gets external_user_id
     *
     * @return string
     */
    public function getExternalUserId()
    {
        return $this->container['external_user_id'];
    }

    /**
     * Sets external_user_id
     *
     * @param string $external_user_id The external user id from the provider
     *
     * @return $this
     */
    public function setExternalUserId($external_user_id)
    {
        $this->container['external_user_id'] = $external_user_id;

        return $this;
    }

    /**
     * Gets service_connection_id
     *
     * @return string
     */
    public function getServiceConnectionId()
    {
        return $this->container['service_connection_id'];
    }

    /**
     * Sets service_connection_id
     *
     * @param string $service_connection_id The id of the service connection stored in customer credential store
     *
     * @return $this
     */
    public function setServiceConnectionId($service_connection_id)
    {
        $this->container['service_connection_id'] = $service_connection_id;

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


