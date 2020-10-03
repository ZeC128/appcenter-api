<?php
/**
 * TestReportStats
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
 * TestReportStats Class Doc Comment
 *
 * @category Class
 * @package  ZeC128\AppCenter
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TestReportStats implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TestReport_stats';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'os' => 'float',
        'devices' => 'float',
        'filesize' => 'float',
        'total_device_minutes' => 'float',
        'devices_not_runned' => 'float',
        'failed' => 'float',
        'skipped' => 'float',
        'passed' => 'float',
        'total' => 'float',
        'devices_finished' => 'float',
        'devices_failed' => 'float',
        'devices_skipped' => 'float',
        'step_count' => 'float',
        'artifacts' => 'map[string,string]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'os' => null,
        'devices' => null,
        'filesize' => null,
        'total_device_minutes' => null,
        'devices_not_runned' => null,
        'failed' => null,
        'skipped' => null,
        'passed' => null,
        'total' => null,
        'devices_finished' => null,
        'devices_failed' => null,
        'devices_skipped' => null,
        'step_count' => null,
        'artifacts' => null
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
        'os' => 'os',
        'devices' => 'devices',
        'filesize' => 'filesize',
        'total_device_minutes' => 'totalDeviceMinutes',
        'devices_not_runned' => 'devices_not_runned',
        'failed' => 'failed',
        'skipped' => 'skipped',
        'passed' => 'passed',
        'total' => 'total',
        'devices_finished' => 'devices_finished',
        'devices_failed' => 'devices_failed',
        'devices_skipped' => 'devices_skipped',
        'step_count' => 'step_count',
        'artifacts' => 'artifacts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'os' => 'setOs',
        'devices' => 'setDevices',
        'filesize' => 'setFilesize',
        'total_device_minutes' => 'setTotalDeviceMinutes',
        'devices_not_runned' => 'setDevicesNotRunned',
        'failed' => 'setFailed',
        'skipped' => 'setSkipped',
        'passed' => 'setPassed',
        'total' => 'setTotal',
        'devices_finished' => 'setDevicesFinished',
        'devices_failed' => 'setDevicesFailed',
        'devices_skipped' => 'setDevicesSkipped',
        'step_count' => 'setStepCount',
        'artifacts' => 'setArtifacts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'os' => 'getOs',
        'devices' => 'getDevices',
        'filesize' => 'getFilesize',
        'total_device_minutes' => 'getTotalDeviceMinutes',
        'devices_not_runned' => 'getDevicesNotRunned',
        'failed' => 'getFailed',
        'skipped' => 'getSkipped',
        'passed' => 'getPassed',
        'total' => 'getTotal',
        'devices_finished' => 'getDevicesFinished',
        'devices_failed' => 'getDevicesFailed',
        'devices_skipped' => 'getDevicesSkipped',
        'step_count' => 'getStepCount',
        'artifacts' => 'getArtifacts'
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
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['devices'] = isset($data['devices']) ? $data['devices'] : null;
        $this->container['filesize'] = isset($data['filesize']) ? $data['filesize'] : null;
        $this->container['total_device_minutes'] = isset($data['total_device_minutes']) ? $data['total_device_minutes'] : null;
        $this->container['devices_not_runned'] = isset($data['devices_not_runned']) ? $data['devices_not_runned'] : null;
        $this->container['failed'] = isset($data['failed']) ? $data['failed'] : null;
        $this->container['skipped'] = isset($data['skipped']) ? $data['skipped'] : null;
        $this->container['passed'] = isset($data['passed']) ? $data['passed'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['devices_finished'] = isset($data['devices_finished']) ? $data['devices_finished'] : null;
        $this->container['devices_failed'] = isset($data['devices_failed']) ? $data['devices_failed'] : null;
        $this->container['devices_skipped'] = isset($data['devices_skipped']) ? $data['devices_skipped'] : null;
        $this->container['step_count'] = isset($data['step_count']) ? $data['step_count'] : null;
        $this->container['artifacts'] = isset($data['artifacts']) ? $data['artifacts'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['os'] === null) {
            $invalidProperties[] = "'os' can't be null";
        }
        if ($this->container['devices'] === null) {
            $invalidProperties[] = "'devices' can't be null";
        }
        if ($this->container['filesize'] === null) {
            $invalidProperties[] = "'filesize' can't be null";
        }
        if ($this->container['total_device_minutes'] === null) {
            $invalidProperties[] = "'total_device_minutes' can't be null";
        }
        if ($this->container['devices_not_runned'] === null) {
            $invalidProperties[] = "'devices_not_runned' can't be null";
        }
        if ($this->container['failed'] === null) {
            $invalidProperties[] = "'failed' can't be null";
        }
        if ($this->container['skipped'] === null) {
            $invalidProperties[] = "'skipped' can't be null";
        }
        if ($this->container['passed'] === null) {
            $invalidProperties[] = "'passed' can't be null";
        }
        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
        }
        if ($this->container['devices_finished'] === null) {
            $invalidProperties[] = "'devices_finished' can't be null";
        }
        if ($this->container['devices_failed'] === null) {
            $invalidProperties[] = "'devices_failed' can't be null";
        }
        if ($this->container['devices_skipped'] === null) {
            $invalidProperties[] = "'devices_skipped' can't be null";
        }
        if ($this->container['step_count'] === null) {
            $invalidProperties[] = "'step_count' can't be null";
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
     * Gets os
     *
     * @return float
     */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
     * Sets os
     *
     * @param float $os os
     *
     * @return $this
     */
    public function setOs($os)
    {
        $this->container['os'] = $os;

        return $this;
    }

    /**
     * Gets devices
     *
     * @return float
     */
    public function getDevices()
    {
        return $this->container['devices'];
    }

    /**
     * Sets devices
     *
     * @param float $devices devices
     *
     * @return $this
     */
    public function setDevices($devices)
    {
        $this->container['devices'] = $devices;

        return $this;
    }

    /**
     * Gets filesize
     *
     * @return float
     */
    public function getFilesize()
    {
        return $this->container['filesize'];
    }

    /**
     * Sets filesize
     *
     * @param float $filesize filesize
     *
     * @return $this
     */
    public function setFilesize($filesize)
    {
        $this->container['filesize'] = $filesize;

        return $this;
    }

    /**
     * Gets total_device_minutes
     *
     * @return float
     */
    public function getTotalDeviceMinutes()
    {
        return $this->container['total_device_minutes'];
    }

    /**
     * Sets total_device_minutes
     *
     * @param float $total_device_minutes total_device_minutes
     *
     * @return $this
     */
    public function setTotalDeviceMinutes($total_device_minutes)
    {
        $this->container['total_device_minutes'] = $total_device_minutes;

        return $this;
    }

    /**
     * Gets devices_not_runned
     *
     * @return float
     */
    public function getDevicesNotRunned()
    {
        return $this->container['devices_not_runned'];
    }

    /**
     * Sets devices_not_runned
     *
     * @param float $devices_not_runned devices_not_runned
     *
     * @return $this
     */
    public function setDevicesNotRunned($devices_not_runned)
    {
        $this->container['devices_not_runned'] = $devices_not_runned;

        return $this;
    }

    /**
     * Gets failed
     *
     * @return float
     */
    public function getFailed()
    {
        return $this->container['failed'];
    }

    /**
     * Sets failed
     *
     * @param float $failed failed
     *
     * @return $this
     */
    public function setFailed($failed)
    {
        $this->container['failed'] = $failed;

        return $this;
    }

    /**
     * Gets skipped
     *
     * @return float
     */
    public function getSkipped()
    {
        return $this->container['skipped'];
    }

    /**
     * Sets skipped
     *
     * @param float $skipped skipped
     *
     * @return $this
     */
    public function setSkipped($skipped)
    {
        $this->container['skipped'] = $skipped;

        return $this;
    }

    /**
     * Gets passed
     *
     * @return float
     */
    public function getPassed()
    {
        return $this->container['passed'];
    }

    /**
     * Sets passed
     *
     * @param float $passed passed
     *
     * @return $this
     */
    public function setPassed($passed)
    {
        $this->container['passed'] = $passed;

        return $this;
    }

    /**
     * Gets total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param float $total total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets devices_finished
     *
     * @return float
     */
    public function getDevicesFinished()
    {
        return $this->container['devices_finished'];
    }

    /**
     * Sets devices_finished
     *
     * @param float $devices_finished devices_finished
     *
     * @return $this
     */
    public function setDevicesFinished($devices_finished)
    {
        $this->container['devices_finished'] = $devices_finished;

        return $this;
    }

    /**
     * Gets devices_failed
     *
     * @return float
     */
    public function getDevicesFailed()
    {
        return $this->container['devices_failed'];
    }

    /**
     * Sets devices_failed
     *
     * @param float $devices_failed devices_failed
     *
     * @return $this
     */
    public function setDevicesFailed($devices_failed)
    {
        $this->container['devices_failed'] = $devices_failed;

        return $this;
    }

    /**
     * Gets devices_skipped
     *
     * @return float
     */
    public function getDevicesSkipped()
    {
        return $this->container['devices_skipped'];
    }

    /**
     * Sets devices_skipped
     *
     * @param float $devices_skipped devices_skipped
     *
     * @return $this
     */
    public function setDevicesSkipped($devices_skipped)
    {
        $this->container['devices_skipped'] = $devices_skipped;

        return $this;
    }

    /**
     * Gets step_count
     *
     * @return float
     */
    public function getStepCount()
    {
        return $this->container['step_count'];
    }

    /**
     * Sets step_count
     *
     * @param float $step_count step_count
     *
     * @return $this
     */
    public function setStepCount($step_count)
    {
        $this->container['step_count'] = $step_count;

        return $this;
    }

    /**
     * Gets artifacts
     *
     * @return map[string,string]
     */
    public function getArtifacts()
    {
        return $this->container['artifacts'];
    }

    /**
     * Sets artifacts
     *
     * @param map[string,string] $artifacts artifacts
     *
     * @return $this
     */
    public function setArtifacts($artifacts)
    {
        $this->container['artifacts'] = $artifacts;

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

