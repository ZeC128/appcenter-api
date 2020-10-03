<?php
/**
 * SymbolUpload
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
 * SymbolUpload Class Doc Comment
 *
 * @category Class
 * @description A single symbol upload entity
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SymbolUpload implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SymbolUpload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'symbol_upload_id' => 'string',
        'app_id' => 'string',
        'user' => '\Swagger\Client\Model\V01appsownerNameappNamesymbolUploadsUser',
        'status' => 'string',
        'symbol_type' => 'string',
        'symbols_uploaded' => '\Swagger\Client\Model\V01appsownerNameappNamesymbolUploadsSymbolsUploaded[]',
        'origin' => 'string',
        'file_name' => 'string',
        'file_size' => 'float',
        'timestamp' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'symbol_upload_id' => null,
        'app_id' => null,
        'user' => null,
        'status' => null,
        'symbol_type' => null,
        'symbols_uploaded' => null,
        'origin' => null,
        'file_name' => null,
        'file_size' => null,
        'timestamp' => 'date-time'
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
        'symbol_upload_id' => 'symbol_upload_id',
        'app_id' => 'app_id',
        'user' => 'user',
        'status' => 'status',
        'symbol_type' => 'symbol_type',
        'symbols_uploaded' => 'symbols_uploaded',
        'origin' => 'origin',
        'file_name' => 'file_name',
        'file_size' => 'file_size',
        'timestamp' => 'timestamp'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'symbol_upload_id' => 'setSymbolUploadId',
        'app_id' => 'setAppId',
        'user' => 'setUser',
        'status' => 'setStatus',
        'symbol_type' => 'setSymbolType',
        'symbols_uploaded' => 'setSymbolsUploaded',
        'origin' => 'setOrigin',
        'file_name' => 'setFileName',
        'file_size' => 'setFileSize',
        'timestamp' => 'setTimestamp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'symbol_upload_id' => 'getSymbolUploadId',
        'app_id' => 'getAppId',
        'user' => 'getUser',
        'status' => 'getStatus',
        'symbol_type' => 'getSymbolType',
        'symbols_uploaded' => 'getSymbolsUploaded',
        'origin' => 'getOrigin',
        'file_name' => 'getFileName',
        'file_size' => 'getFileSize',
        'timestamp' => 'getTimestamp'
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

    const STATUS_CREATED = 'created';
    const STATUS_COMMITTED = 'committed';
    const STATUS_ABORTED = 'aborted';
    const STATUS_PROCESSING = 'processing';
    const STATUS_INDEXED = 'indexed';
    const STATUS_FAILED = 'failed';
    const SYMBOL_TYPE_APPLE = 'Apple';
    const SYMBOL_TYPE_JAVA_SCRIPT = 'JavaScript';
    const SYMBOL_TYPE_BREAKPAD = 'Breakpad';
    const SYMBOL_TYPE_ANDROID_PROGUARD = 'AndroidProguard';
    const SYMBOL_TYPE_UWP = 'UWP';
    const ORIGIN_USER = 'User';
    const ORIGIN_SYSTEM = 'System';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATED,
            self::STATUS_COMMITTED,
            self::STATUS_ABORTED,
            self::STATUS_PROCESSING,
            self::STATUS_INDEXED,
            self::STATUS_FAILED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSymbolTypeAllowableValues()
    {
        return [
            self::SYMBOL_TYPE_APPLE,
            self::SYMBOL_TYPE_JAVA_SCRIPT,
            self::SYMBOL_TYPE_BREAKPAD,
            self::SYMBOL_TYPE_ANDROID_PROGUARD,
            self::SYMBOL_TYPE_UWP,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOriginAllowableValues()
    {
        return [
            self::ORIGIN_USER,
            self::ORIGIN_SYSTEM,
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
        $this->container['symbol_upload_id'] = isset($data['symbol_upload_id']) ? $data['symbol_upload_id'] : null;
        $this->container['app_id'] = isset($data['app_id']) ? $data['app_id'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['symbol_type'] = isset($data['symbol_type']) ? $data['symbol_type'] : null;
        $this->container['symbols_uploaded'] = isset($data['symbols_uploaded']) ? $data['symbols_uploaded'] : null;
        $this->container['origin'] = isset($data['origin']) ? $data['origin'] : null;
        $this->container['file_name'] = isset($data['file_name']) ? $data['file_name'] : null;
        $this->container['file_size'] = isset($data['file_size']) ? $data['file_size'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['symbol_upload_id'] === null) {
            $invalidProperties[] = "'symbol_upload_id' can't be null";
        }
        if ($this->container['app_id'] === null) {
            $invalidProperties[] = "'app_id' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['symbol_type'] === null) {
            $invalidProperties[] = "'symbol_type' can't be null";
        }
        $allowedValues = $this->getSymbolTypeAllowableValues();
        if (!is_null($this->container['symbol_type']) && !in_array($this->container['symbol_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'symbol_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getOriginAllowableValues();
        if (!is_null($this->container['origin']) && !in_array($this->container['origin'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'origin', must be one of '%s'",
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
     * Gets symbol_upload_id
     *
     * @return string
     */
    public function getSymbolUploadId()
    {
        return $this->container['symbol_upload_id'];
    }

    /**
     * Sets symbol_upload_id
     *
     * @param string $symbol_upload_id The id for the current symbol upload
     *
     * @return $this
     */
    public function setSymbolUploadId($symbol_upload_id)
    {
        $this->container['symbol_upload_id'] = $symbol_upload_id;

        return $this;
    }

    /**
     * Gets app_id
     *
     * @return string
     */
    public function getAppId()
    {
        return $this->container['app_id'];
    }

    /**
     * Sets app_id
     *
     * @param string $app_id The application that this symbol upload belongs to
     *
     * @return $this
     */
    public function setAppId($app_id)
    {
        $this->container['app_id'] = $app_id;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \Swagger\Client\Model\V01appsownerNameappNamesymbolUploadsUser
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \Swagger\Client\Model\V01appsownerNameappNamesymbolUploadsUser $user user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

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
     * @param string $status The current status for the symbol upload
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets symbol_type
     *
     * @return string
     */
    public function getSymbolType()
    {
        return $this->container['symbol_type'];
    }

    /**
     * Sets symbol_type
     *
     * @param string $symbol_type The type of the symbol for the current symbol upload
     *
     * @return $this
     */
    public function setSymbolType($symbol_type)
    {
        $allowedValues = $this->getSymbolTypeAllowableValues();
        if (!in_array($symbol_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'symbol_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['symbol_type'] = $symbol_type;

        return $this;
    }

    /**
     * Gets symbols_uploaded
     *
     * @return \Swagger\Client\Model\V01appsownerNameappNamesymbolUploadsSymbolsUploaded[]
     */
    public function getSymbolsUploaded()
    {
        return $this->container['symbols_uploaded'];
    }

    /**
     * Sets symbols_uploaded
     *
     * @param \Swagger\Client\Model\V01appsownerNameappNamesymbolUploadsSymbolsUploaded[] $symbols_uploaded The symbols found in the upload. This may be empty until the status is indexed
     *
     * @return $this
     */
    public function setSymbolsUploaded($symbols_uploaded)
    {
        $this->container['symbols_uploaded'] = $symbols_uploaded;

        return $this;
    }

    /**
     * Gets origin
     *
     * @return string
     */
    public function getOrigin()
    {
        return $this->container['origin'];
    }

    /**
     * Sets origin
     *
     * @param string $origin The origin of the symbol upload
     *
     * @return $this
     */
    public function setOrigin($origin)
    {
        $allowedValues = $this->getOriginAllowableValues();
        if (!is_null($origin) && !in_array($origin, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'origin', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['origin'] = $origin;

        return $this;
    }

    /**
     * Gets file_name
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->container['file_name'];
    }

    /**
     * Sets file_name
     *
     * @param string $file_name The file name for the symbol upload
     *
     * @return $this
     */
    public function setFileName($file_name)
    {
        $this->container['file_name'] = $file_name;

        return $this;
    }

    /**
     * Gets file_size
     *
     * @return float
     */
    public function getFileSize()
    {
        return $this->container['file_size'];
    }

    /**
     * Sets file_size
     *
     * @param float $file_size The size of the file in Mebibytes. This may be 0 until the status is indexed
     *
     * @return $this
     */
    public function setFileSize($file_size)
    {
        $this->container['file_size'] = $file_size;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param \DateTime $timestamp When the symbol upload was committed, or last transaction time if not committed
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

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


