<?php
/**
 * AlertingCrashGroup
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
 * AlertingCrashGroup Class Doc Comment
 *
 * @category Class
 * @package  ZeC128\AppCenter
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AlertingCrashGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AlertingCrashGroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'url' => 'string',
        'app_display_name' => 'string',
        'app_platform' => 'string',
        'app_version' => 'string',
        'id' => 'string',
        'name' => 'string',
        'reason' => 'string',
        'stack_trace' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'url' => null,
        'app_display_name' => null,
        'app_platform' => null,
        'app_version' => null,
        'id' => null,
        'name' => null,
        'reason' => null,
        'stack_trace' => null
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
        'url' => 'url',
        'app_display_name' => 'app_display_name',
        'app_platform' => 'app_platform',
        'app_version' => 'app_version',
        'id' => 'id',
        'name' => 'name',
        'reason' => 'reason',
        'stack_trace' => 'stack_trace'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
        'app_display_name' => 'setAppDisplayName',
        'app_platform' => 'setAppPlatform',
        'app_version' => 'setAppVersion',
        'id' => 'setId',
        'name' => 'setName',
        'reason' => 'setReason',
        'stack_trace' => 'setStackTrace'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
        'app_display_name' => 'getAppDisplayName',
        'app_platform' => 'getAppPlatform',
        'app_version' => 'getAppVersion',
        'id' => 'getId',
        'name' => 'getName',
        'reason' => 'getReason',
        'stack_trace' => 'getStackTrace'
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

    const APP_PLATFORM_IOS = 'ios';
    const APP_PLATFORM_ANDROID = 'android';
    const APP_PLATFORM_XAMARIN = 'xamarin';
    const APP_PLATFORM_REACT_NATIVE = 'react-native';
    const APP_PLATFORM_NDK = 'ndk';
    const APP_PLATFORM_UNITY = 'unity';
    const APP_PLATFORM_OTHER = 'other';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAppPlatformAllowableValues()
    {
        return [
            self::APP_PLATFORM_IOS,
            self::APP_PLATFORM_ANDROID,
            self::APP_PLATFORM_XAMARIN,
            self::APP_PLATFORM_REACT_NATIVE,
            self::APP_PLATFORM_NDK,
            self::APP_PLATFORM_UNITY,
            self::APP_PLATFORM_OTHER,
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['app_display_name'] = isset($data['app_display_name']) ? $data['app_display_name'] : null;
        $this->container['app_platform'] = isset($data['app_platform']) ? $data['app_platform'] : null;
        $this->container['app_version'] = isset($data['app_version']) ? $data['app_version'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['stack_trace'] = isset($data['stack_trace']) ? $data['stack_trace'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAppPlatformAllowableValues();
        if (!is_null($this->container['app_platform']) && !in_array($this->container['app_platform'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'app_platform', must be one of '%s'",
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
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets app_display_name
     *
     * @return string
     */
    public function getAppDisplayName()
    {
        return $this->container['app_display_name'];
    }

    /**
     * Sets app_display_name
     *
     * @param string $app_display_name app_display_name
     *
     * @return $this
     */
    public function setAppDisplayName($app_display_name)
    {
        $this->container['app_display_name'] = $app_display_name;

        return $this;
    }

    /**
     * Gets app_platform
     *
     * @return string
     */
    public function getAppPlatform()
    {
        return $this->container['app_platform'];
    }

    /**
     * Sets app_platform
     *
     * @param string $app_platform SDK/Platform this thread is beeing generated from
     *
     * @return $this
     */
    public function setAppPlatform($app_platform)
    {
        $allowedValues = $this->getAppPlatformAllowableValues();
        if (!is_null($app_platform) && !in_array($app_platform, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'app_platform', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['app_platform'] = $app_platform;

        return $this;
    }

    /**
     * Gets app_version
     *
     * @return string
     */
    public function getAppVersion()
    {
        return $this->container['app_version'];
    }

    /**
     * Sets app_version
     *
     * @param string $app_version app_version
     *
     * @return $this
     */
    public function setAppVersion($app_version)
    {
        $this->container['app_version'] = $app_version;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
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
     * @param string $reason reason
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets stack_trace
     *
     * @return string[]
     */
    public function getStackTrace()
    {
        return $this->container['stack_trace'];
    }

    /**
     * Sets stack_trace
     *
     * @param string[] $stack_trace stack_trace
     *
     * @return $this
     */
    public function setStackTrace($stack_trace)
    {
        $this->container['stack_trace'] = $stack_trace;

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


