<?php
/**
 * XcodeToolsetSharedSchemes
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
 * XcodeToolsetSharedSchemes Class Doc Comment
 *
 * @category Class
 * @package  ZeC128\AppCenter
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class XcodeToolsetSharedSchemes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'XcodeToolset_sharedSchemes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'has_test_action' => 'bool',
        'archive_configuration' => 'string',
        'archive_project' => '\ZeC128\AppCenter\AppCenterApi\XcodeSchemeArchiveProject'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'has_test_action' => null,
        'archive_configuration' => null,
        'archive_project' => null
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
        'name' => 'name',
        'has_test_action' => 'hasTestAction',
        'archive_configuration' => 'archiveConfiguration',
        'archive_project' => 'archiveProject'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'has_test_action' => 'setHasTestAction',
        'archive_configuration' => 'setArchiveConfiguration',
        'archive_project' => 'setArchiveProject'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'has_test_action' => 'getHasTestAction',
        'archive_configuration' => 'getArchiveConfiguration',
        'archive_project' => 'getArchiveProject'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['has_test_action'] = isset($data['has_test_action']) ? $data['has_test_action'] : null;
        $this->container['archive_configuration'] = isset($data['archive_configuration']) ? $data['archive_configuration'] : null;
        $this->container['archive_project'] = isset($data['archive_project']) ? $data['archive_project'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['has_test_action'] === null) {
            $invalidProperties[] = "'has_test_action' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Scheme name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets has_test_action
     *
     * @return bool
     */
    public function getHasTestAction()
    {
        return $this->container['has_test_action'];
    }

    /**
     * Sets has_test_action
     *
     * @param bool $has_test_action Does scheme have a test action?
     *
     * @return $this
     */
    public function setHasTestAction($has_test_action)
    {
        $this->container['has_test_action'] = $has_test_action;

        return $this;
    }

    /**
     * Gets archive_configuration
     *
     * @return string
     */
    public function getArchiveConfiguration()
    {
        return $this->container['archive_configuration'];
    }

    /**
     * Sets archive_configuration
     *
     * @param string $archive_configuration Build configuration set in Archive action
     *
     * @return $this
     */
    public function setArchiveConfiguration($archive_configuration)
    {
        $this->container['archive_configuration'] = $archive_configuration;

        return $this;
    }

    /**
     * Gets archive_project
     *
     * @return \ZeC128\AppCenter\AppCenterApi\XcodeSchemeArchiveProject
     */
    public function getArchiveProject()
    {
        return $this->container['archive_project'];
    }

    /**
     * Sets archive_project
     *
     * @param \ZeC128\AppCenter\AppCenterApi\XcodeSchemeArchiveProject $archive_project archive_project
     *
     * @return $this
     */
    public function setArchiveProject($archive_project)
    {
        $this->container['archive_project'] = $archive_project;

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

