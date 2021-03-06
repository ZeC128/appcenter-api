<?php
/**
 * Exception
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
 * Exception Class Doc Comment
 *
 * @category Class
 * @description a exception
 * @package  ZeC128\AppCenter
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Exception implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Exception';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'reason' => 'string',
        'type' => 'string',
        'frames' => '\ZeC128\AppCenter\AppCenterApi\ExceptionFrames[]',
        'relevant' => 'bool',
        'inner_exceptions' => '\ZeC128\AppCenter\AppCenterApi\Exception[]',
        'platform' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'reason' => null,
        'type' => null,
        'frames' => null,
        'relevant' => null,
        'inner_exceptions' => null,
        'platform' => null
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
        'reason' => 'reason',
        'type' => 'type',
        'frames' => 'frames',
        'relevant' => 'relevant',
        'inner_exceptions' => 'inner_exceptions',
        'platform' => 'platform'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reason' => 'setReason',
        'type' => 'setType',
        'frames' => 'setFrames',
        'relevant' => 'setRelevant',
        'inner_exceptions' => 'setInnerExceptions',
        'platform' => 'setPlatform'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reason' => 'getReason',
        'type' => 'getType',
        'frames' => 'getFrames',
        'relevant' => 'getRelevant',
        'inner_exceptions' => 'getInnerExceptions',
        'platform' => 'getPlatform'
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

    const PLATFORM_IOS = 'ios';
    const PLATFORM_ANDROID = 'android';
    const PLATFORM_XAMARIN = 'xamarin';
    const PLATFORM_REACT_NATIVE = 'react-native';
    const PLATFORM_NDK = 'ndk';
    const PLATFORM_UNITY = 'unity';
    const PLATFORM_OTHER = 'other';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPlatformAllowableValues()
    {
        return [
            self::PLATFORM_IOS,
            self::PLATFORM_ANDROID,
            self::PLATFORM_XAMARIN,
            self::PLATFORM_REACT_NATIVE,
            self::PLATFORM_NDK,
            self::PLATFORM_UNITY,
            self::PLATFORM_OTHER,
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
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['frames'] = isset($data['frames']) ? $data['frames'] : null;
        $this->container['relevant'] = isset($data['relevant']) ? $data['relevant'] : null;
        $this->container['inner_exceptions'] = isset($data['inner_exceptions']) ? $data['inner_exceptions'] : null;
        $this->container['platform'] = isset($data['platform']) ? $data['platform'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['frames'] === null) {
            $invalidProperties[] = "'frames' can't be null";
        }
        $allowedValues = $this->getPlatformAllowableValues();
        if (!is_null($this->container['platform']) && !in_array($this->container['platform'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'platform', must be one of '%s'",
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
     * Gets reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string $reason Reason of the exception
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of the exception (NSSomethingException, NullPointerException)
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets frames
     *
     * @return \ZeC128\AppCenter\AppCenterApi\ExceptionFrames[]
     */
    public function getFrames()
    {
        return $this->container['frames'];
    }

    /**
     * Sets frames
     *
     * @param \ZeC128\AppCenter\AppCenterApi\ExceptionFrames[] $frames frames of the excetpion
     *
     * @return $this
     */
    public function setFrames($frames)
    {
        $this->container['frames'] = $frames;

        return $this;
    }

    /**
     * Gets relevant
     *
     * @return bool
     */
    public function getRelevant()
    {
        return $this->container['relevant'];
    }

    /**
     * Sets relevant
     *
     * @param bool $relevant relevant exception (crashed)
     *
     * @return $this
     */
    public function setRelevant($relevant)
    {
        $this->container['relevant'] = $relevant;

        return $this;
    }

    /**
     * Gets inner_exceptions
     *
     * @return \ZeC128\AppCenter\AppCenterApi\Exception[]
     */
    public function getInnerExceptions()
    {
        return $this->container['inner_exceptions'];
    }

    /**
     * Sets inner_exceptions
     *
     * @param \ZeC128\AppCenter\AppCenterApi\Exception[] $inner_exceptions inner_exceptions
     *
     * @return $this
     */
    public function setInnerExceptions($inner_exceptions)
    {
        $this->container['inner_exceptions'] = $inner_exceptions;

        return $this;
    }

    /**
     * Gets platform
     *
     * @return string
     */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
     * Sets platform
     *
     * @param string $platform SDK/Platform this thread is beeing generated from
     *
     * @return $this
     */
    public function setPlatform($platform)
    {
        $allowedValues = $this->getPlatformAllowableValues();
        if (!is_null($platform) && !in_array($platform, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'platform', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['platform'] = $platform;

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


