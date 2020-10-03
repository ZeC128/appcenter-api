<?php
/**
 * App1
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
 * App1 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class App1 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'app_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'description' => 'string',
        'release_type' => 'string',
        'display_name' => 'string',
        'name' => 'string',
        'os' => 'string',
        'platform' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'description' => null,
        'release_type' => null,
        'display_name' => null,
        'name' => null,
        'os' => null,
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
        'description' => 'description',
        'release_type' => 'release_type',
        'display_name' => 'display_name',
        'name' => 'name',
        'os' => 'os',
        'platform' => 'platform'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'release_type' => 'setReleaseType',
        'display_name' => 'setDisplayName',
        'name' => 'setName',
        'os' => 'setOs',
        'platform' => 'setPlatform'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'release_type' => 'getReleaseType',
        'display_name' => 'getDisplayName',
        'name' => 'getName',
        'os' => 'getOs',
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

    const OS_ANDROID = 'Android';
    const OS_I_OS = 'iOS';
    const OS_MAC_OS = 'macOS';
    const OS_TIZEN = 'Tizen';
    const OS_TV_OS = 'tvOS';
    const OS_WINDOWS = 'Windows';
    const OS_LINUX = 'Linux';
    const OS_CUSTOM = 'Custom';
    const PLATFORM_JAVA = 'Java';
    const PLATFORM_OBJECTIVE_C_SWIFT = 'Objective-C-Swift';
    const PLATFORM_UWP = 'UWP';
    const PLATFORM_CORDOVA = 'Cordova';
    const PLATFORM_REACT_NATIVE = 'React-Native';
    const PLATFORM_XAMARIN = 'Xamarin';
    const PLATFORM_UNITY = 'Unity';
    const PLATFORM_ELECTRON = 'Electron';
    const PLATFORM_WPF = 'WPF';
    const PLATFORM_WIN_FORMS = 'WinForms';
    const PLATFORM_CUSTOM = 'Custom';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOsAllowableValues()
    {
        return [
            self::OS_ANDROID,
            self::OS_I_OS,
            self::OS_MAC_OS,
            self::OS_TIZEN,
            self::OS_TV_OS,
            self::OS_WINDOWS,
            self::OS_LINUX,
            self::OS_CUSTOM,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPlatformAllowableValues()
    {
        return [
            self::PLATFORM_JAVA,
            self::PLATFORM_OBJECTIVE_C_SWIFT,
            self::PLATFORM_UWP,
            self::PLATFORM_CORDOVA,
            self::PLATFORM_REACT_NATIVE,
            self::PLATFORM_XAMARIN,
            self::PLATFORM_UNITY,
            self::PLATFORM_ELECTRON,
            self::PLATFORM_WPF,
            self::PLATFORM_WIN_FORMS,
            self::PLATFORM_CUSTOM,
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['release_type'] = isset($data['release_type']) ? $data['release_type'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
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

        if ($this->container['display_name'] === null) {
            $invalidProperties[] = "'display_name' can't be null";
        }
        if ($this->container['os'] === null) {
            $invalidProperties[] = "'os' can't be null";
        }
        $allowedValues = $this->getOsAllowableValues();
        if (!is_null($this->container['os']) && !in_array($this->container['os'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'os', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['platform'] === null) {
            $invalidProperties[] = "'platform' can't be null";
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
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description A short text describing the app
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets release_type
     *
     * @return string
     */
    public function getReleaseType()
    {
        return $this->container['release_type'];
    }

    /**
     * Sets release_type
     *
     * @param string $release_type A one-word descriptive release-type value that starts with a capital letter but is otherwise lowercase
     *
     * @return $this
     */
    public function setReleaseType($release_type)
    {
        $this->container['release_type'] = $release_type;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name The descriptive name of the app. This can contain any characters
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

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
     * @param string $name The name of the app used in URLs
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets os
     *
     * @return string
     */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
     * Sets os
     *
     * @param string $os The OS the app will be running on
     *
     * @return $this
     */
    public function setOs($os)
    {
        $allowedValues = $this->getOsAllowableValues();
        if (!in_array($os, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'os', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['os'] = $os;

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
     * @param string $platform The platform of the app
     *
     * @return $this
     */
    public function setPlatform($platform)
    {
        $allowedValues = $this->getPlatformAllowableValues();
        if (!in_array($platform, $allowedValues, true)) {
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


