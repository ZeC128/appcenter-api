<?php
/**
 * UserProfileResponsev2
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
 * UserProfileResponsev2 Class Doc Comment
 *
 * @category Class
 * @package  ZeC128\AppCenter
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserProfileResponsev2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UserProfileResponsev2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'avatar_url' => 'string',
        'can_change_password' => 'bool',
        'display_name' => 'string',
        'email' => 'string',
        'name' => 'string',
        'created_at' => 'string',
        'next_nps_survey_date' => 'string',
        'origin' => 'string',
        'feature_flags' => 'string[]',
        'admin_role' => 'string',
        'settings' => 'object',
        'session_hash' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'avatar_url' => null,
        'can_change_password' => null,
        'display_name' => null,
        'email' => null,
        'name' => null,
        'created_at' => null,
        'next_nps_survey_date' => null,
        'origin' => null,
        'feature_flags' => null,
        'admin_role' => null,
        'settings' => null,
        'session_hash' => null
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
        'id' => 'id',
        'avatar_url' => 'avatar_url',
        'can_change_password' => 'can_change_password',
        'display_name' => 'display_name',
        'email' => 'email',
        'name' => 'name',
        'created_at' => 'created_at',
        'next_nps_survey_date' => 'next_nps_survey_date',
        'origin' => 'origin',
        'feature_flags' => 'feature_flags',
        'admin_role' => 'admin_role',
        'settings' => 'settings',
        'session_hash' => 'session_hash'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'avatar_url' => 'setAvatarUrl',
        'can_change_password' => 'setCanChangePassword',
        'display_name' => 'setDisplayName',
        'email' => 'setEmail',
        'name' => 'setName',
        'created_at' => 'setCreatedAt',
        'next_nps_survey_date' => 'setNextNpsSurveyDate',
        'origin' => 'setOrigin',
        'feature_flags' => 'setFeatureFlags',
        'admin_role' => 'setAdminRole',
        'settings' => 'setSettings',
        'session_hash' => 'setSessionHash'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'avatar_url' => 'getAvatarUrl',
        'can_change_password' => 'getCanChangePassword',
        'display_name' => 'getDisplayName',
        'email' => 'getEmail',
        'name' => 'getName',
        'created_at' => 'getCreatedAt',
        'next_nps_survey_date' => 'getNextNpsSurveyDate',
        'origin' => 'getOrigin',
        'feature_flags' => 'getFeatureFlags',
        'admin_role' => 'getAdminRole',
        'settings' => 'getSettings',
        'session_hash' => 'getSessionHash'
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

    const ORIGIN_APPCENTER = 'appcenter';
    const ORIGIN_HOCKEYAPP = 'hockeyapp';
    const ORIGIN_CODEPUSH = 'codepush';
    const ADMIN_ROLE_SUPER_ADMIN = 'superAdmin';
    const ADMIN_ROLE_ADMIN = 'admin';
    const ADMIN_ROLE_DEV_OPS = 'devOps';
    const ADMIN_ROLE_CUSTOMER_SUPPORT = 'customerSupport';
    const ADMIN_ROLE_NOT_ADMIN = 'notAdmin';
    

    
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
    public function getAdminRoleAllowableValues()
    {
        return [
            self::ADMIN_ROLE_SUPER_ADMIN,
            self::ADMIN_ROLE_ADMIN,
            self::ADMIN_ROLE_DEV_OPS,
            self::ADMIN_ROLE_CUSTOMER_SUPPORT,
            self::ADMIN_ROLE_NOT_ADMIN,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['avatar_url'] = isset($data['avatar_url']) ? $data['avatar_url'] : null;
        $this->container['can_change_password'] = isset($data['can_change_password']) ? $data['can_change_password'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['next_nps_survey_date'] = isset($data['next_nps_survey_date']) ? $data['next_nps_survey_date'] : null;
        $this->container['origin'] = isset($data['origin']) ? $data['origin'] : null;
        $this->container['feature_flags'] = isset($data['feature_flags']) ? $data['feature_flags'] : null;
        $this->container['admin_role'] = isset($data['admin_role']) ? $data['admin_role'] : null;
        $this->container['settings'] = isset($data['settings']) ? $data['settings'] : null;
        $this->container['session_hash'] = isset($data['session_hash']) ? $data['session_hash'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['display_name'] === null) {
            $invalidProperties[] = "'display_name' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['origin'] === null) {
            $invalidProperties[] = "'origin' can't be null";
        }
        $allowedValues = $this->getOriginAllowableValues();
        if (!is_null($this->container['origin']) && !in_array($this->container['origin'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'origin', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAdminRoleAllowableValues();
        if (!is_null($this->container['admin_role']) && !in_array($this->container['admin_role'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'admin_role', must be one of '%s'",
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
     * @param string $id The unique id (UUID) of the user
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets avatar_url
     *
     * @return string
     */
    public function getAvatarUrl()
    {
        return $this->container['avatar_url'];
    }

    /**
     * Sets avatar_url
     *
     * @param string $avatar_url The avatar URL of the user
     *
     * @return $this
     */
    public function setAvatarUrl($avatar_url)
    {
        $this->container['avatar_url'] = $avatar_url;

        return $this;
    }

    /**
     * Gets can_change_password
     *
     * @return bool
     */
    public function getCanChangePassword()
    {
        return $this->container['can_change_password'];
    }

    /**
     * Sets can_change_password
     *
     * @param bool $can_change_password User is required to send an old password in order to change the password.
     *
     * @return $this
     */
    public function setCanChangePassword($can_change_password)
    {
        $this->container['can_change_password'] = $can_change_password;

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
     * @param string $display_name The full name of the user. Might for example be first and last name
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email The email address of the user
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

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
     * @param string $name The unique name that is used to identify the user.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string $created_at The created date of the user
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets next_nps_survey_date
     *
     * @return string
     */
    public function getNextNpsSurveyDate()
    {
        return $this->container['next_nps_survey_date'];
    }

    /**
     * Sets next_nps_survey_date
     *
     * @param string $next_nps_survey_date The date in the future when the user should be checked again for NPS eligibility
     *
     * @return $this
     */
    public function setNextNpsSurveyDate($next_nps_survey_date)
    {
        $this->container['next_nps_survey_date'] = $next_nps_survey_date;

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
     * @param string $origin The creation origin of this user
     *
     * @return $this
     */
    public function setOrigin($origin)
    {
        $allowedValues = $this->getOriginAllowableValues();
        if (!in_array($origin, $allowedValues, true)) {
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
     * Gets feature_flags
     *
     * @return string[]
     */
    public function getFeatureFlags()
    {
        return $this->container['feature_flags'];
    }

    /**
     * Sets feature_flags
     *
     * @param string[] $feature_flags The feature flags that are enabled for this user
     *
     * @return $this
     */
    public function setFeatureFlags($feature_flags)
    {
        $this->container['feature_flags'] = $feature_flags;

        return $this;
    }

    /**
     * Gets admin_role
     *
     * @return string
     */
    public function getAdminRole()
    {
        return $this->container['admin_role'];
    }

    /**
     * Sets admin_role
     *
     * @param string $admin_role The new admin_role
     *
     * @return $this
     */
    public function setAdminRole($admin_role)
    {
        $allowedValues = $this->getAdminRoleAllowableValues();
        if (!is_null($admin_role) && !in_array($admin_role, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'admin_role', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['admin_role'] = $admin_role;

        return $this;
    }

    /**
     * Gets settings
     *
     * @return object
     */
    public function getSettings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings
     *
     * @param object $settings The user's settings
     *
     * @return $this
     */
    public function setSettings($settings)
    {
        $this->container['settings'] = $settings;

        return $this;
    }

    /**
     * Gets session_hash
     *
     * @return string
     */
    public function getSessionHash()
    {
        return $this->container['session_hash'];
    }

    /**
     * Sets session_hash
     *
     * @param string $session_hash The session hash of the user
     *
     * @return $this
     */
    public function setSessionHash($session_hash)
    {
        $this->container['session_hash'] = $session_hash;

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


