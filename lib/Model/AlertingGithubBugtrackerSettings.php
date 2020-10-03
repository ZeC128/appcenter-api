<?php
/**
 * AlertingGithubBugtrackerSettings
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
 * AlertingGithubBugtrackerSettings Class Doc Comment
 *
 * @category Class
 * @description Github bugtracker specific settings
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AlertingGithubBugtrackerSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = 'type';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AlertingGithubBugtrackerSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'github_repo_id' => 'int',
        'github_repo_name' => 'string',
        'github_label' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'github_repo_id' => null,
        'github_repo_name' => null,
        'github_label' => null
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
        'github_repo_id' => 'github_repo_id',
        'github_repo_name' => 'github_repo_name',
        'github_label' => 'github_label'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'github_repo_id' => 'setGithubRepoId',
        'github_repo_name' => 'setGithubRepoName',
        'github_label' => 'setGithubLabel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'github_repo_id' => 'getGithubRepoId',
        'github_repo_name' => 'getGithubRepoName',
        'github_label' => 'getGithubLabel'
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
        $this->container['github_repo_id'] = isset($data['github_repo_id']) ? $data['github_repo_id'] : null;
        $this->container['github_repo_name'] = isset($data['github_repo_name']) ? $data['github_repo_name'] : null;
        $this->container['github_label'] = isset($data['github_label']) ? $data['github_label'] : null;

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
     * Gets github_repo_id
     *
     * @return int
     */
    public function getGithubRepoId()
    {
        return $this->container['github_repo_id'];
    }

    /**
     * Sets github_repo_id
     *
     * @param int $github_repo_id github_repo_id
     *
     * @return $this
     */
    public function setGithubRepoId($github_repo_id)
    {
        $this->container['github_repo_id'] = $github_repo_id;

        return $this;
    }

    /**
     * Gets github_repo_name
     *
     * @return string
     */
    public function getGithubRepoName()
    {
        return $this->container['github_repo_name'];
    }

    /**
     * Sets github_repo_name
     *
     * @param string $github_repo_name github_repo_name
     *
     * @return $this
     */
    public function setGithubRepoName($github_repo_name)
    {
        $this->container['github_repo_name'] = $github_repo_name;

        return $this;
    }

    /**
     * Gets github_label
     *
     * @return string
     */
    public function getGithubLabel()
    {
        return $this->container['github_label'];
    }

    /**
     * Sets github_label
     *
     * @param string $github_label github_label
     *
     * @return $this
     */
    public function setGithubLabel($github_label)
    {
        $this->container['github_label'] = $github_label;

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

