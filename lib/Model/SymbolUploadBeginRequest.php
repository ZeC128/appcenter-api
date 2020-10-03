<?php
/**
 * SymbolUploadBeginRequest
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
 * SymbolUploadBeginRequest Class Doc Comment
 *
 * @category Class
 * @description A request containing information pertaining to starting a symbol upload process
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SymbolUploadBeginRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SymbolUploadBeginRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'symbol_type' => 'string',
        'client_callback' => 'string',
        'file_name' => 'string',
        'build' => 'string',
        'version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'symbol_type' => null,
        'client_callback' => null,
        'file_name' => null,
        'build' => null,
        'version' => null
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
        'symbol_type' => 'symbol_type',
        'client_callback' => 'client_callback',
        'file_name' => 'file_name',
        'build' => 'build',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'symbol_type' => 'setSymbolType',
        'client_callback' => 'setClientCallback',
        'file_name' => 'setFileName',
        'build' => 'setBuild',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'symbol_type' => 'getSymbolType',
        'client_callback' => 'getClientCallback',
        'file_name' => 'getFileName',
        'build' => 'getBuild',
        'version' => 'getVersion'
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

    const SYMBOL_TYPE_APPLE = 'Apple';
    const SYMBOL_TYPE_JAVA_SCRIPT = 'JavaScript';
    const SYMBOL_TYPE_BREAKPAD = 'Breakpad';
    const SYMBOL_TYPE_ANDROID_PROGUARD = 'AndroidProguard';
    const SYMBOL_TYPE_UWP = 'UWP';
    

    
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
        $this->container['symbol_type'] = isset($data['symbol_type']) ? $data['symbol_type'] : null;
        $this->container['client_callback'] = isset($data['client_callback']) ? $data['client_callback'] : null;
        $this->container['file_name'] = isset($data['file_name']) ? $data['file_name'] : null;
        $this->container['build'] = isset($data['build']) ? $data['build'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets client_callback
     *
     * @return string
     */
    public function getClientCallback()
    {
        return $this->container['client_callback'];
    }

    /**
     * Sets client_callback
     *
     * @param string $client_callback The callback URL that the client can optionally provide to get status updates for the current symbol upload
     *
     * @return $this
     */
    public function setClientCallback($client_callback)
    {
        $this->container['client_callback'] = $client_callback;

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
     * Gets build
     *
     * @return string
     */
    public function getBuild()
    {
        return $this->container['build'];
    }

    /**
     * Sets build
     *
     * @param string $build The build number. Optional for Apple. Required for Android.
     *
     * @return $this
     */
    public function setBuild($build)
    {
        $this->container['build'] = $build;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version The version number. Optional for Apple. Required for Android.
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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


