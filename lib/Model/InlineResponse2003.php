<?php
/**
 * InlineResponse2003
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
 * InlineResponse2003 Class Doc Comment
 *
 * @category Class
 * @description The information for a single iOS device
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2003 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_3';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'udid' => 'string',
        'model' => 'string',
        'device_name' => 'string',
        'full_device_name' => 'string',
        'os_build' => 'string',
        'os_version' => 'string',
        'serial' => 'string',
        'imei' => 'string',
        'owner_id' => 'string',
        'status' => 'string',
        'registered_at' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'udid' => null,
        'model' => null,
        'device_name' => null,
        'full_device_name' => null,
        'os_build' => null,
        'os_version' => null,
        'serial' => null,
        'imei' => null,
        'owner_id' => null,
        'status' => null,
        'registered_at' => null
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
        'udid' => 'udid',
        'model' => 'model',
        'device_name' => 'device_name',
        'full_device_name' => 'full_device_name',
        'os_build' => 'os_build',
        'os_version' => 'os_version',
        'serial' => 'serial',
        'imei' => 'imei',
        'owner_id' => 'owner_id',
        'status' => 'status',
        'registered_at' => 'registered_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'udid' => 'setUdid',
        'model' => 'setModel',
        'device_name' => 'setDeviceName',
        'full_device_name' => 'setFullDeviceName',
        'os_build' => 'setOsBuild',
        'os_version' => 'setOsVersion',
        'serial' => 'setSerial',
        'imei' => 'setImei',
        'owner_id' => 'setOwnerId',
        'status' => 'setStatus',
        'registered_at' => 'setRegisteredAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'udid' => 'getUdid',
        'model' => 'getModel',
        'device_name' => 'getDeviceName',
        'full_device_name' => 'getFullDeviceName',
        'os_build' => 'getOsBuild',
        'os_version' => 'getOsVersion',
        'serial' => 'getSerial',
        'imei' => 'getImei',
        'owner_id' => 'getOwnerId',
        'status' => 'getStatus',
        'registered_at' => 'getRegisteredAt'
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
        $this->container['udid'] = isset($data['udid']) ? $data['udid'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['device_name'] = isset($data['device_name']) ? $data['device_name'] : null;
        $this->container['full_device_name'] = isset($data['full_device_name']) ? $data['full_device_name'] : null;
        $this->container['os_build'] = isset($data['os_build']) ? $data['os_build'] : null;
        $this->container['os_version'] = isset($data['os_version']) ? $data['os_version'] : null;
        $this->container['serial'] = isset($data['serial']) ? $data['serial'] : null;
        $this->container['imei'] = isset($data['imei']) ? $data['imei'] : null;
        $this->container['owner_id'] = isset($data['owner_id']) ? $data['owner_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['registered_at'] = isset($data['registered_at']) ? $data['registered_at'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['udid'] === null) {
            $invalidProperties[] = "'udid' can't be null";
        }
        if ($this->container['model'] === null) {
            $invalidProperties[] = "'model' can't be null";
        }
        if ($this->container['device_name'] === null) {
            $invalidProperties[] = "'device_name' can't be null";
        }
        if ($this->container['os_build'] === null) {
            $invalidProperties[] = "'os_build' can't be null";
        }
        if ($this->container['os_version'] === null) {
            $invalidProperties[] = "'os_version' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
     * Gets udid
     *
     * @return string
     */
    public function getUdid()
    {
        return $this->container['udid'];
    }

    /**
     * Sets udid
     *
     * @param string $udid The Unique Device IDentifier of the device
     *
     * @return $this
     */
    public function setUdid($udid)
    {
        $this->container['udid'] = $udid;

        return $this;
    }

    /**
     * Gets model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string $model The model identifier of the device, in the format iDeviceM,N
     *
     * @return $this
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets device_name
     *
     * @return string
     */
    public function getDeviceName()
    {
        return $this->container['device_name'];
    }

    /**
     * Sets device_name
     *
     * @param string $device_name The device description, in the format \"iPhone 7 Plus (A1784)\"
     *
     * @return $this
     */
    public function setDeviceName($device_name)
    {
        $this->container['device_name'] = $device_name;

        return $this;
    }

    /**
     * Gets full_device_name
     *
     * @return string
     */
    public function getFullDeviceName()
    {
        return $this->container['full_device_name'];
    }

    /**
     * Sets full_device_name
     *
     * @param string $full_device_name A combination of the device model name and the owner name.
     *
     * @return $this
     */
    public function setFullDeviceName($full_device_name)
    {
        $this->container['full_device_name'] = $full_device_name;

        return $this;
    }

    /**
     * Gets os_build
     *
     * @return string
     */
    public function getOsBuild()
    {
        return $this->container['os_build'];
    }

    /**
     * Sets os_build
     *
     * @param string $os_build The last known OS version running on the device
     *
     * @return $this
     */
    public function setOsBuild($os_build)
    {
        $this->container['os_build'] = $os_build;

        return $this;
    }

    /**
     * Gets os_version
     *
     * @return string
     */
    public function getOsVersion()
    {
        return $this->container['os_version'];
    }

    /**
     * Sets os_version
     *
     * @param string $os_version The last known OS version running on the device
     *
     * @return $this
     */
    public function setOsVersion($os_version)
    {
        $this->container['os_version'] = $os_version;

        return $this;
    }

    /**
     * Gets serial
     *
     * @return string
     */
    public function getSerial()
    {
        return $this->container['serial'];
    }

    /**
     * Sets serial
     *
     * @param string $serial The device's serial number. Always empty or undefined at present.
     *
     * @return $this
     */
    public function setSerial($serial)
    {
        $this->container['serial'] = $serial;

        return $this;
    }

    /**
     * Gets imei
     *
     * @return string
     */
    public function getImei()
    {
        return $this->container['imei'];
    }

    /**
     * Sets imei
     *
     * @param string $imei The device's International Mobile Equipment Identity number. Always empty or undefined at present.
     *
     * @return $this
     */
    public function setImei($imei)
    {
        $this->container['imei'] = $imei;

        return $this;
    }

    /**
     * Gets owner_id
     *
     * @return string
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     *
     * @param string $owner_id The user ID of the device owner.
     *
     * @return $this
     */
    public function setOwnerId($owner_id)
    {
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The provisioning status of the device.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets registered_at
     *
     * @return string
     */
    public function getRegisteredAt()
    {
        return $this->container['registered_at'];
    }

    /**
     * Sets registered_at
     *
     * @param string $registered_at Timestamp of when the device was registered in ISO format.
     *
     * @return $this
     */
    public function setRegisteredAt($registered_at)
    {
        $this->container['registered_at'] = $registered_at;

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


