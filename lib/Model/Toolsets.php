<?php
/**
 * Toolsets
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
 * Toolsets Class Doc Comment
 *
 * @category Class
 * @description Set of toolsets available for app
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Toolsets implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Toolsets';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'xamarin' => '\Swagger\Client\Model\InlineResponse20018[]',
        'xcode' => '\Swagger\Client\Model\InlineResponse20017[]',
        'node' => '\Swagger\Client\Model\InlineResponse20021Node[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'xamarin' => null,
        'xcode' => null,
        'node' => null
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
        'xamarin' => 'xamarin',
        'xcode' => 'xcode',
        'node' => 'node'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'xamarin' => 'setXamarin',
        'xcode' => 'setXcode',
        'node' => 'setNode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'xamarin' => 'getXamarin',
        'xcode' => 'getXcode',
        'node' => 'getNode'
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
        $this->container['xamarin'] = isset($data['xamarin']) ? $data['xamarin'] : null;
        $this->container['xcode'] = isset($data['xcode']) ? $data['xcode'] : null;
        $this->container['node'] = isset($data['node']) ? $data['node'] : null;
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
     * Gets xamarin
     *
     * @return \Swagger\Client\Model\InlineResponse20018[]
     */
    public function getXamarin()
    {
        return $this->container['xamarin'];
    }

    /**
     * Sets xamarin
     *
     * @param \Swagger\Client\Model\InlineResponse20018[] $xamarin A list of Xamarin SDK bundles
     *
     * @return $this
     */
    public function setXamarin($xamarin)
    {
        $this->container['xamarin'] = $xamarin;

        return $this;
    }

    /**
     * Gets xcode
     *
     * @return \Swagger\Client\Model\InlineResponse20017[]
     */
    public function getXcode()
    {
        return $this->container['xcode'];
    }

    /**
     * Sets xcode
     *
     * @param \Swagger\Client\Model\InlineResponse20017[] $xcode A list of Xcode versions
     *
     * @return $this
     */
    public function setXcode($xcode)
    {
        $this->container['xcode'] = $xcode;

        return $this;
    }

    /**
     * Gets node
     *
     * @return \Swagger\Client\Model\InlineResponse20021Node[]
     */
    public function getNode()
    {
        return $this->container['node'];
    }

    /**
     * Sets node
     *
     * @param \Swagger\Client\Model\InlineResponse20021Node[] $node A list of Node versions
     *
     * @return $this
     */
    public function setNode($node)
    {
        $this->container['node'] = $node;

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


