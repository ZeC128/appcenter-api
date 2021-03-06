<?php
/**
 * NewAppReleaseAlertingEventAppReleaseProperties
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
 * NewAppReleaseAlertingEventAppReleaseProperties Class Doc Comment
 *
 * @category Class
 * @description Properties of new application release
 * @package  ZeC128\AppCenter
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NewAppReleaseAlertingEventAppReleaseProperties implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NewAppReleaseAlertingEvent_app_release_properties';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'app_name' => 'string',
        'app_display_name' => 'string',
        'release_id' => 'string',
        'platform' => 'string',
        'uploaded_at' => 'string',
        'fingerprint' => 'string',
        'release_notes' => 'string',
        'version' => 'string',
        'short_version' => 'string',
        'min_os' => 'string',
        'mandatory_update' => 'bool',
        'size' => 'int',
        'provisioning_profile_name' => 'string',
        'provisioning_profile_type' => 'string',
        'bundle_identifier' => 'string',
        'install_link' => 'string',
        'icon_link' => 'string',
        'distribution_group_id' => 'string',
        'installable' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'app_name' => null,
        'app_display_name' => null,
        'release_id' => null,
        'platform' => null,
        'uploaded_at' => null,
        'fingerprint' => null,
        'release_notes' => null,
        'version' => null,
        'short_version' => null,
        'min_os' => null,
        'mandatory_update' => null,
        'size' => null,
        'provisioning_profile_name' => null,
        'provisioning_profile_type' => null,
        'bundle_identifier' => null,
        'install_link' => null,
        'icon_link' => null,
        'distribution_group_id' => null,
        'installable' => null
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
        'app_name' => 'app_name',
        'app_display_name' => 'app_display_name',
        'release_id' => 'release_id',
        'platform' => 'platform',
        'uploaded_at' => 'uploaded_at',
        'fingerprint' => 'fingerprint',
        'release_notes' => 'release_notes',
        'version' => 'version',
        'short_version' => 'short_version',
        'min_os' => 'min_os',
        'mandatory_update' => 'mandatory_update',
        'size' => 'size',
        'provisioning_profile_name' => 'provisioning_profile_name',
        'provisioning_profile_type' => 'provisioning_profile_type',
        'bundle_identifier' => 'bundle_identifier',
        'install_link' => 'install_link',
        'icon_link' => 'icon_link',
        'distribution_group_id' => 'distribution_group_id',
        'installable' => 'installable'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'app_name' => 'setAppName',
        'app_display_name' => 'setAppDisplayName',
        'release_id' => 'setReleaseId',
        'platform' => 'setPlatform',
        'uploaded_at' => 'setUploadedAt',
        'fingerprint' => 'setFingerprint',
        'release_notes' => 'setReleaseNotes',
        'version' => 'setVersion',
        'short_version' => 'setShortVersion',
        'min_os' => 'setMinOs',
        'mandatory_update' => 'setMandatoryUpdate',
        'size' => 'setSize',
        'provisioning_profile_name' => 'setProvisioningProfileName',
        'provisioning_profile_type' => 'setProvisioningProfileType',
        'bundle_identifier' => 'setBundleIdentifier',
        'install_link' => 'setInstallLink',
        'icon_link' => 'setIconLink',
        'distribution_group_id' => 'setDistributionGroupId',
        'installable' => 'setInstallable'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'app_name' => 'getAppName',
        'app_display_name' => 'getAppDisplayName',
        'release_id' => 'getReleaseId',
        'platform' => 'getPlatform',
        'uploaded_at' => 'getUploadedAt',
        'fingerprint' => 'getFingerprint',
        'release_notes' => 'getReleaseNotes',
        'version' => 'getVersion',
        'short_version' => 'getShortVersion',
        'min_os' => 'getMinOs',
        'mandatory_update' => 'getMandatoryUpdate',
        'size' => 'getSize',
        'provisioning_profile_name' => 'getProvisioningProfileName',
        'provisioning_profile_type' => 'getProvisioningProfileType',
        'bundle_identifier' => 'getBundleIdentifier',
        'install_link' => 'getInstallLink',
        'icon_link' => 'getIconLink',
        'distribution_group_id' => 'getDistributionGroupId',
        'installable' => 'getInstallable'
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
        $this->container['app_name'] = isset($data['app_name']) ? $data['app_name'] : null;
        $this->container['app_display_name'] = isset($data['app_display_name']) ? $data['app_display_name'] : null;
        $this->container['release_id'] = isset($data['release_id']) ? $data['release_id'] : null;
        $this->container['platform'] = isset($data['platform']) ? $data['platform'] : null;
        $this->container['uploaded_at'] = isset($data['uploaded_at']) ? $data['uploaded_at'] : null;
        $this->container['fingerprint'] = isset($data['fingerprint']) ? $data['fingerprint'] : null;
        $this->container['release_notes'] = isset($data['release_notes']) ? $data['release_notes'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['short_version'] = isset($data['short_version']) ? $data['short_version'] : null;
        $this->container['min_os'] = isset($data['min_os']) ? $data['min_os'] : null;
        $this->container['mandatory_update'] = isset($data['mandatory_update']) ? $data['mandatory_update'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['provisioning_profile_name'] = isset($data['provisioning_profile_name']) ? $data['provisioning_profile_name'] : null;
        $this->container['provisioning_profile_type'] = isset($data['provisioning_profile_type']) ? $data['provisioning_profile_type'] : null;
        $this->container['bundle_identifier'] = isset($data['bundle_identifier']) ? $data['bundle_identifier'] : null;
        $this->container['install_link'] = isset($data['install_link']) ? $data['install_link'] : null;
        $this->container['icon_link'] = isset($data['icon_link']) ? $data['icon_link'] : null;
        $this->container['distribution_group_id'] = isset($data['distribution_group_id']) ? $data['distribution_group_id'] : null;
        $this->container['installable'] = isset($data['installable']) ? $data['installable'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['app_name'] === null) {
            $invalidProperties[] = "'app_name' can't be null";
        }
        if ($this->container['app_display_name'] === null) {
            $invalidProperties[] = "'app_display_name' can't be null";
        }
        if ($this->container['release_id'] === null) {
            $invalidProperties[] = "'release_id' can't be null";
        }
        if ($this->container['platform'] === null) {
            $invalidProperties[] = "'platform' can't be null";
        }
        if ($this->container['uploaded_at'] === null) {
            $invalidProperties[] = "'uploaded_at' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['short_version'] === null) {
            $invalidProperties[] = "'short_version' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if ($this->container['bundle_identifier'] === null) {
            $invalidProperties[] = "'bundle_identifier' can't be null";
        }
        if ($this->container['install_link'] === null) {
            $invalidProperties[] = "'install_link' can't be null";
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
     * Gets app_name
     *
     * @return string
     */
    public function getAppName()
    {
        return $this->container['app_name'];
    }

    /**
     * Sets app_name
     *
     * @param string $app_name app_name
     *
     * @return $this
     */
    public function setAppName($app_name)
    {
        $this->container['app_name'] = $app_name;

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
     * Gets release_id
     *
     * @return string
     */
    public function getReleaseId()
    {
        return $this->container['release_id'];
    }

    /**
     * Sets release_id
     *
     * @param string $release_id release_id
     *
     * @return $this
     */
    public function setReleaseId($release_id)
    {
        $this->container['release_id'] = $release_id;

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
     * @param string $platform platform
     *
     * @return $this
     */
    public function setPlatform($platform)
    {
        $this->container['platform'] = $platform;

        return $this;
    }

    /**
     * Gets uploaded_at
     *
     * @return string
     */
    public function getUploadedAt()
    {
        return $this->container['uploaded_at'];
    }

    /**
     * Sets uploaded_at
     *
     * @param string $uploaded_at Date and time in ISO 8601 format
     *
     * @return $this
     */
    public function setUploadedAt($uploaded_at)
    {
        $this->container['uploaded_at'] = $uploaded_at;

        return $this;
    }

    /**
     * Gets fingerprint
     *
     * @return string
     */
    public function getFingerprint()
    {
        return $this->container['fingerprint'];
    }

    /**
     * Sets fingerprint
     *
     * @param string $fingerprint fingerprint
     *
     * @return $this
     */
    public function setFingerprint($fingerprint)
    {
        $this->container['fingerprint'] = $fingerprint;

        return $this;
    }

    /**
     * Gets release_notes
     *
     * @return string
     */
    public function getReleaseNotes()
    {
        return $this->container['release_notes'];
    }

    /**
     * Sets release_notes
     *
     * @param string $release_notes release_notes
     *
     * @return $this
     */
    public function setReleaseNotes($release_notes)
    {
        $this->container['release_notes'] = $release_notes;

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
     * @param string $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets short_version
     *
     * @return string
     */
    public function getShortVersion()
    {
        return $this->container['short_version'];
    }

    /**
     * Sets short_version
     *
     * @param string $short_version short_version
     *
     * @return $this
     */
    public function setShortVersion($short_version)
    {
        $this->container['short_version'] = $short_version;

        return $this;
    }

    /**
     * Gets min_os
     *
     * @return string
     */
    public function getMinOs()
    {
        return $this->container['min_os'];
    }

    /**
     * Sets min_os
     *
     * @param string $min_os min_os
     *
     * @return $this
     */
    public function setMinOs($min_os)
    {
        $this->container['min_os'] = $min_os;

        return $this;
    }

    /**
     * Gets mandatory_update
     *
     * @return bool
     */
    public function getMandatoryUpdate()
    {
        return $this->container['mandatory_update'];
    }

    /**
     * Sets mandatory_update
     *
     * @param bool $mandatory_update mandatory_update
     *
     * @return $this
     */
    public function setMandatoryUpdate($mandatory_update)
    {
        $this->container['mandatory_update'] = $mandatory_update;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int $size size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets provisioning_profile_name
     *
     * @return string
     */
    public function getProvisioningProfileName()
    {
        return $this->container['provisioning_profile_name'];
    }

    /**
     * Sets provisioning_profile_name
     *
     * @param string $provisioning_profile_name provisioning_profile_name
     *
     * @return $this
     */
    public function setProvisioningProfileName($provisioning_profile_name)
    {
        $this->container['provisioning_profile_name'] = $provisioning_profile_name;

        return $this;
    }

    /**
     * Gets provisioning_profile_type
     *
     * @return string
     */
    public function getProvisioningProfileType()
    {
        return $this->container['provisioning_profile_type'];
    }

    /**
     * Sets provisioning_profile_type
     *
     * @param string $provisioning_profile_type provisioning_profile_type
     *
     * @return $this
     */
    public function setProvisioningProfileType($provisioning_profile_type)
    {
        $this->container['provisioning_profile_type'] = $provisioning_profile_type;

        return $this;
    }

    /**
     * Gets bundle_identifier
     *
     * @return string
     */
    public function getBundleIdentifier()
    {
        return $this->container['bundle_identifier'];
    }

    /**
     * Sets bundle_identifier
     *
     * @param string $bundle_identifier bundle_identifier
     *
     * @return $this
     */
    public function setBundleIdentifier($bundle_identifier)
    {
        $this->container['bundle_identifier'] = $bundle_identifier;

        return $this;
    }

    /**
     * Gets install_link
     *
     * @return string
     */
    public function getInstallLink()
    {
        return $this->container['install_link'];
    }

    /**
     * Sets install_link
     *
     * @param string $install_link install_link
     *
     * @return $this
     */
    public function setInstallLink($install_link)
    {
        $this->container['install_link'] = $install_link;

        return $this;
    }

    /**
     * Gets icon_link
     *
     * @return string
     */
    public function getIconLink()
    {
        return $this->container['icon_link'];
    }

    /**
     * Sets icon_link
     *
     * @param string $icon_link icon_link
     *
     * @return $this
     */
    public function setIconLink($icon_link)
    {
        $this->container['icon_link'] = $icon_link;

        return $this;
    }

    /**
     * Gets distribution_group_id
     *
     * @return string
     */
    public function getDistributionGroupId()
    {
        return $this->container['distribution_group_id'];
    }

    /**
     * Sets distribution_group_id
     *
     * @param string $distribution_group_id distribution_group_id
     *
     * @return $this
     */
    public function setDistributionGroupId($distribution_group_id)
    {
        $this->container['distribution_group_id'] = $distribution_group_id;

        return $this;
    }

    /**
     * Gets installable
     *
     * @return bool
     */
    public function getInstallable()
    {
        return $this->container['installable'];
    }

    /**
     * Sets installable
     *
     * @param bool $installable installable
     *
     * @return $this
     */
    public function setInstallable($installable)
    {
        $this->container['installable'] = $installable;

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


