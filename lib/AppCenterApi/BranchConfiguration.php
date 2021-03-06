<?php
/**
 * BranchConfiguration
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
 * BranchConfiguration Class Doc Comment
 *
 * @category Class
 * @description The branch build configuration
 * @package  ZeC128\AppCenter
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BranchConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BranchConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'trigger' => 'string',
        'tests_enabled' => 'bool',
        'badge_is_enabled' => 'bool',
        'signed' => 'bool',
        'clone_from_branch' => 'string',
        'toolsets' => '\ZeC128\AppCenter\AppCenterApi\V01appsownerNameappNamebranchesbranchconfigToolsets',
        'artifact_versioning' => '\ZeC128\AppCenter\AppCenterApi\V01appsownerNameappNamebranchesbranchconfigArtifactVersioning'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'trigger' => null,
        'tests_enabled' => null,
        'badge_is_enabled' => null,
        'signed' => null,
        'clone_from_branch' => null,
        'toolsets' => null,
        'artifact_versioning' => null
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
        'trigger' => 'trigger',
        'tests_enabled' => 'testsEnabled',
        'badge_is_enabled' => 'badgeIsEnabled',
        'signed' => 'signed',
        'clone_from_branch' => 'cloneFromBranch',
        'toolsets' => 'toolsets',
        'artifact_versioning' => 'artifactVersioning'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'trigger' => 'setTrigger',
        'tests_enabled' => 'setTestsEnabled',
        'badge_is_enabled' => 'setBadgeIsEnabled',
        'signed' => 'setSigned',
        'clone_from_branch' => 'setCloneFromBranch',
        'toolsets' => 'setToolsets',
        'artifact_versioning' => 'setArtifactVersioning'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'trigger' => 'getTrigger',
        'tests_enabled' => 'getTestsEnabled',
        'badge_is_enabled' => 'getBadgeIsEnabled',
        'signed' => 'getSigned',
        'clone_from_branch' => 'getCloneFromBranch',
        'toolsets' => 'getToolsets',
        'artifact_versioning' => 'getArtifactVersioning'
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

    const TRIGGER_CONTINOUS = 'continous';
    const TRIGGER_CONTINUOUS = 'continuous';
    const TRIGGER_MANUAL = 'manual';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTriggerAllowableValues()
    {
        return [
            self::TRIGGER_CONTINOUS,
            self::TRIGGER_CONTINUOUS,
            self::TRIGGER_MANUAL,
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
        $this->container['trigger'] = isset($data['trigger']) ? $data['trigger'] : null;
        $this->container['tests_enabled'] = isset($data['tests_enabled']) ? $data['tests_enabled'] : null;
        $this->container['badge_is_enabled'] = isset($data['badge_is_enabled']) ? $data['badge_is_enabled'] : null;
        $this->container['signed'] = isset($data['signed']) ? $data['signed'] : null;
        $this->container['clone_from_branch'] = isset($data['clone_from_branch']) ? $data['clone_from_branch'] : null;
        $this->container['toolsets'] = isset($data['toolsets']) ? $data['toolsets'] : null;
        $this->container['artifact_versioning'] = isset($data['artifact_versioning']) ? $data['artifact_versioning'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getTriggerAllowableValues();
        if (!is_null($this->container['trigger']) && !in_array($this->container['trigger'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'trigger', must be one of '%s'",
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
     * Gets trigger
     *
     * @return string
     */
    public function getTrigger()
    {
        return $this->container['trigger'];
    }

    /**
     * Sets trigger
     *
     * @param string $trigger trigger
     *
     * @return $this
     */
    public function setTrigger($trigger)
    {
        $allowedValues = $this->getTriggerAllowableValues();
        if (!is_null($trigger) && !in_array($trigger, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'trigger', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['trigger'] = $trigger;

        return $this;
    }

    /**
     * Gets tests_enabled
     *
     * @return bool
     */
    public function getTestsEnabled()
    {
        return $this->container['tests_enabled'];
    }

    /**
     * Sets tests_enabled
     *
     * @param bool $tests_enabled tests_enabled
     *
     * @return $this
     */
    public function setTestsEnabled($tests_enabled)
    {
        $this->container['tests_enabled'] = $tests_enabled;

        return $this;
    }

    /**
     * Gets badge_is_enabled
     *
     * @return bool
     */
    public function getBadgeIsEnabled()
    {
        return $this->container['badge_is_enabled'];
    }

    /**
     * Sets badge_is_enabled
     *
     * @param bool $badge_is_enabled badge_is_enabled
     *
     * @return $this
     */
    public function setBadgeIsEnabled($badge_is_enabled)
    {
        $this->container['badge_is_enabled'] = $badge_is_enabled;

        return $this;
    }

    /**
     * Gets signed
     *
     * @return bool
     */
    public function getSigned()
    {
        return $this->container['signed'];
    }

    /**
     * Sets signed
     *
     * @param bool $signed signed
     *
     * @return $this
     */
    public function setSigned($signed)
    {
        $this->container['signed'] = $signed;

        return $this;
    }

    /**
     * Gets clone_from_branch
     *
     * @return string
     */
    public function getCloneFromBranch()
    {
        return $this->container['clone_from_branch'];
    }

    /**
     * Sets clone_from_branch
     *
     * @param string $clone_from_branch A configured branch name to clone from. If provided, all other parameters will be ignored. Only supported in POST requests.
     *
     * @return $this
     */
    public function setCloneFromBranch($clone_from_branch)
    {
        $this->container['clone_from_branch'] = $clone_from_branch;

        return $this;
    }

    /**
     * Gets toolsets
     *
     * @return \ZeC128\AppCenter\AppCenterApi\V01appsownerNameappNamebranchesbranchconfigToolsets
     */
    public function getToolsets()
    {
        return $this->container['toolsets'];
    }

    /**
     * Sets toolsets
     *
     * @param \ZeC128\AppCenter\AppCenterApi\V01appsownerNameappNamebranchesbranchconfigToolsets $toolsets toolsets
     *
     * @return $this
     */
    public function setToolsets($toolsets)
    {
        $this->container['toolsets'] = $toolsets;

        return $this;
    }

    /**
     * Gets artifact_versioning
     *
     * @return \ZeC128\AppCenter\AppCenterApi\V01appsownerNameappNamebranchesbranchconfigArtifactVersioning
     */
    public function getArtifactVersioning()
    {
        return $this->container['artifact_versioning'];
    }

    /**
     * Sets artifact_versioning
     *
     * @param \ZeC128\AppCenter\AppCenterApi\V01appsownerNameappNamebranchesbranchconfigArtifactVersioning $artifact_versioning artifact_versioning
     *
     * @return $this
     */
    public function setArtifactVersioning($artifact_versioning)
    {
        $this->container['artifact_versioning'] = $artifact_versioning;

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


