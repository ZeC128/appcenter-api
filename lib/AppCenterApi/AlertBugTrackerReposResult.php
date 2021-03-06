<?php
/**
 * AlertBugTrackerReposResult
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
 * AlertBugTrackerReposResult Class Doc Comment
 *
 * @category Class
 * @description List of bug tracker repositories
 * @package  ZeC128\AppCenter
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AlertBugTrackerReposResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AlertBugTrackerReposResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'repo_type' => 'string',
        'repositories' => '\ZeC128\AppCenter\AppCenterApi\AlertBugTrackerReposResultRepositories[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'repo_type' => null,
        'repositories' => null
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
        'repo_type' => 'repo_type',
        'repositories' => 'repositories'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'repo_type' => 'setRepoType',
        'repositories' => 'setRepositories'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'repo_type' => 'getRepoType',
        'repositories' => 'getRepositories'
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

    const REPO_TYPE_GITHUB = 'github';
    const REPO_TYPE_VSTS = 'vsts';
    const REPO_TYPE_JIRA = 'jira';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRepoTypeAllowableValues()
    {
        return [
            self::REPO_TYPE_GITHUB,
            self::REPO_TYPE_VSTS,
            self::REPO_TYPE_JIRA,
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
        $this->container['repo_type'] = isset($data['repo_type']) ? $data['repo_type'] : null;
        $this->container['repositories'] = isset($data['repositories']) ? $data['repositories'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRepoTypeAllowableValues();
        if (!is_null($this->container['repo_type']) && !in_array($this->container['repo_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'repo_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['repositories'] === null) {
            $invalidProperties[] = "'repositories' can't be null";
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
     * Gets repo_type
     *
     * @return string
     */
    public function getRepoType()
    {
        return $this->container['repo_type'];
    }

    /**
     * Sets repo_type
     *
     * @param string $repo_type repo_type
     *
     * @return $this
     */
    public function setRepoType($repo_type)
    {
        $allowedValues = $this->getRepoTypeAllowableValues();
        if (!is_null($repo_type) && !in_array($repo_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'repo_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['repo_type'] = $repo_type;

        return $this;
    }

    /**
     * Gets repositories
     *
     * @return \ZeC128\AppCenter\AppCenterApi\AlertBugTrackerReposResultRepositories[]
     */
    public function getRepositories()
    {
        return $this->container['repositories'];
    }

    /**
     * Sets repositories
     *
     * @param \ZeC128\AppCenter\AppCenterApi\AlertBugTrackerReposResultRepositories[] $repositories repositories
     *
     * @return $this
     */
    public function setRepositories($repositories)
    {
        $this->container['repositories'] = $repositories;

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


