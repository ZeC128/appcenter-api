<?php
/**
 * AppResponse
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
 * AppResponse Class Doc Comment
 *
 * @category Class
 * @package  ZeC128\AppCenter
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AppResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AppResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'app_secret' => 'string',
        'azure_subscription' => '\ZeC128\AppCenter\AppCenterApi\InlineResponse20012',
        'platform' => 'string',
        'origin' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string',
        'member_permissions' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'app_secret' => null,
        'azure_subscription' => null,
        'platform' => null,
        'origin' => null,
        'created_at' => null,
        'updated_at' => null,
        'member_permissions' => null
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
        'app_secret' => 'app_secret',
        'azure_subscription' => 'azure_subscription',
        'platform' => 'platform',
        'origin' => 'origin',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'member_permissions' => 'member_permissions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'app_secret' => 'setAppSecret',
        'azure_subscription' => 'setAzureSubscription',
        'platform' => 'setPlatform',
        'origin' => 'setOrigin',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'member_permissions' => 'setMemberPermissions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'app_secret' => 'getAppSecret',
        'azure_subscription' => 'getAzureSubscription',
        'platform' => 'getPlatform',
        'origin' => 'getOrigin',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'member_permissions' => 'getMemberPermissions'
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

    const PLATFORM_JAVA = 'Java';
    const PLATFORM_OBJECTIVE_C_SWIFT = 'Objective-C-Swift';
    const PLATFORM_UWP = 'UWP';
    const PLATFORM_CORDOVA = 'Cordova';
    const PLATFORM_REACT_NATIVE = 'React-Native';
    const PLATFORM_UNITY = 'Unity';
    const PLATFORM_ELECTRON = 'Electron';
    const PLATFORM_XAMARIN = 'Xamarin';
    const PLATFORM_WPF = 'WPF';
    const PLATFORM_WIN_FORMS = 'WinForms';
    const PLATFORM_UNKNOWN = 'Unknown';
    const PLATFORM_CUSTOM = 'Custom';
    const ORIGIN_APPCENTER = 'appcenter';
    const ORIGIN_HOCKEYAPP = 'hockeyapp';
    const ORIGIN_CODEPUSH = 'codepush';
    const MEMBER_PERMISSIONS_MANAGER = 'manager';
    const MEMBER_PERMISSIONS_DEVELOPER = 'developer';
    const MEMBER_PERMISSIONS_VIEWER = 'viewer';
    const MEMBER_PERMISSIONS_TESTER = 'tester';
    

    
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
            self::PLATFORM_UNITY,
            self::PLATFORM_ELECTRON,
            self::PLATFORM_XAMARIN,
            self::PLATFORM_WPF,
            self::PLATFORM_WIN_FORMS,
            self::PLATFORM_UNKNOWN,
            self::PLATFORM_CUSTOM,
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
            self::ORIGIN_APPCENTER,
            self::ORIGIN_HOCKEYAPP,
            self::ORIGIN_CODEPUSH,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMemberPermissionsAllowableValues()
    {
        return [
            self::MEMBER_PERMISSIONS_MANAGER,
            self::MEMBER_PERMISSIONS_DEVELOPER,
            self::MEMBER_PERMISSIONS_VIEWER,
            self::MEMBER_PERMISSIONS_TESTER,
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
        $this->container['app_secret'] = isset($data['app_secret']) ? $data['app_secret'] : null;
        $this->container['azure_subscription'] = isset($data['azure_subscription']) ? $data['azure_subscription'] : null;
        $this->container['platform'] = isset($data['platform']) ? $data['platform'] : null;
        $this->container['origin'] = isset($data['origin']) ? $data['origin'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['member_permissions'] = isset($data['member_permissions']) ? $data['member_permissions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPlatformAllowableValues();
        if (!is_null($this->container['platform']) && !in_array($this->container['platform'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'platform', must be one of '%s'",
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
     * Gets app_secret
     *
     * @return string
     */
    public function getAppSecret()
    {
        return $this->container['app_secret'];
    }

    /**
     * Sets app_secret
     *
     * @param string $app_secret A unique and secret key used to identify the app in communication with the ingestion endpoint for crash reporting and analytics
     *
     * @return $this
     */
    public function setAppSecret($app_secret)
    {
        $this->container['app_secret'] = $app_secret;

        return $this;
    }

    /**
     * Gets azure_subscription
     *
     * @return \ZeC128\AppCenter\AppCenterApi\InlineResponse20012
     */
    public function getAzureSubscription()
    {
        return $this->container['azure_subscription'];
    }

    /**
     * Sets azure_subscription
     *
     * @param \ZeC128\AppCenter\AppCenterApi\InlineResponse20012 $azure_subscription azure_subscription
     *
     * @return $this
     */
    public function setAzureSubscription($azure_subscription)
    {
        $this->container['azure_subscription'] = $azure_subscription;

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
     * @param string $origin The creation origin of this app
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
     * Gets created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string $created_at The created date of this app
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string $updated_at The last updated date of this app
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets member_permissions
     *
     * @return string[]
     */
    public function getMemberPermissions()
    {
        return $this->container['member_permissions'];
    }

    /**
     * Sets member_permissions
     *
     * @param string[] $member_permissions The permissions of the calling user
     *
     * @return $this
     */
    public function setMemberPermissions($member_permissions)
    {
        $allowedValues = $this->getMemberPermissionsAllowableValues();
        if (!is_null($member_permissions) && array_diff($member_permissions, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'member_permissions', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['member_permissions'] = $member_permissions;

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


