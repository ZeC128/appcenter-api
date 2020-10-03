<?php
/**
 * TestReportTests
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
 * TestReportTests Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TestReportTests implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TestReport_tests';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'test_name' => 'string',
        'runs' => '\Swagger\Client\Model\TestReportRuns[]',
        'peak_memory' => 'float',
        'peak_duration' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'test_name' => null,
        'runs' => null,
        'peak_memory' => null,
        'peak_duration' => null
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
        'test_name' => 'testName',
        'runs' => 'runs',
        'peak_memory' => 'peakMemory',
        'peak_duration' => 'peakDuration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'test_name' => 'setTestName',
        'runs' => 'setRuns',
        'peak_memory' => 'setPeakMemory',
        'peak_duration' => 'setPeakDuration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'test_name' => 'getTestName',
        'runs' => 'getRuns',
        'peak_memory' => 'getPeakMemory',
        'peak_duration' => 'getPeakDuration'
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
        $this->container['test_name'] = isset($data['test_name']) ? $data['test_name'] : null;
        $this->container['runs'] = isset($data['runs']) ? $data['runs'] : null;
        $this->container['peak_memory'] = isset($data['peak_memory']) ? $data['peak_memory'] : null;
        $this->container['peak_duration'] = isset($data['peak_duration']) ? $data['peak_duration'] : null;
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
     * Gets test_name
     *
     * @return string
     */
    public function getTestName()
    {
        return $this->container['test_name'];
    }

    /**
     * Sets test_name
     *
     * @param string $test_name test_name
     *
     * @return $this
     */
    public function setTestName($test_name)
    {
        $this->container['test_name'] = $test_name;

        return $this;
    }

    /**
     * Gets runs
     *
     * @return \Swagger\Client\Model\TestReportRuns[]
     */
    public function getRuns()
    {
        return $this->container['runs'];
    }

    /**
     * Sets runs
     *
     * @param \Swagger\Client\Model\TestReportRuns[] $runs runs
     *
     * @return $this
     */
    public function setRuns($runs)
    {
        $this->container['runs'] = $runs;

        return $this;
    }

    /**
     * Gets peak_memory
     *
     * @return float
     */
    public function getPeakMemory()
    {
        return $this->container['peak_memory'];
    }

    /**
     * Sets peak_memory
     *
     * @param float $peak_memory peak_memory
     *
     * @return $this
     */
    public function setPeakMemory($peak_memory)
    {
        $this->container['peak_memory'] = $peak_memory;

        return $this;
    }

    /**
     * Gets peak_duration
     *
     * @return float
     */
    public function getPeakDuration()
    {
        return $this->container['peak_duration'];
    }

    /**
     * Sets peak_duration
     *
     * @param float $peak_duration peak_duration
     *
     * @return $this
     */
    public function setPeakDuration($peak_duration)
    {
        $this->container['peak_duration'] = $peak_duration;

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


