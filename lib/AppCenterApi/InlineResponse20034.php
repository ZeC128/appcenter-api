<?php
/**
 * InlineResponse20034
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
 * InlineResponse20034 Class Doc Comment
 *
 * @category Class
 * @description Basic information on a release
 * @package  ZeC128\AppCenter
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20034 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_34';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'version' => 'string',
        'origin' => 'string',
        'short_version' => 'string',
        'enabled' => 'bool',
        'uploaded_at' => 'string',
        'destination_type' => 'string',
        'distribution_groups' => 'object[]',
        'distribution_stores' => 'object[]',
        'destinations' => 'object[]',
        'build' => '\ZeC128\AppCenter\AppCenterApi\V01appsownerNameappNamereleasesfilterByTesterBuild',
        'is_external_build' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'version' => null,
        'origin' => null,
        'short_version' => null,
        'enabled' => null,
        'uploaded_at' => null,
        'destination_type' => null,
        'distribution_groups' => null,
        'distribution_stores' => null,
        'destinations' => null,
        'build' => null,
        'is_external_build' => null
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
        'version' => 'version',
        'origin' => 'origin',
        'short_version' => 'short_version',
        'enabled' => 'enabled',
        'uploaded_at' => 'uploaded_at',
        'destination_type' => 'destination_type',
        'distribution_groups' => 'distribution_groups',
        'distribution_stores' => 'distribution_stores',
        'destinations' => 'destinations',
        'build' => 'build',
        'is_external_build' => 'is_external_build'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'version' => 'setVersion',
        'origin' => 'setOrigin',
        'short_version' => 'setShortVersion',
        'enabled' => 'setEnabled',
        'uploaded_at' => 'setUploadedAt',
        'destination_type' => 'setDestinationType',
        'distribution_groups' => 'setDistributionGroups',
        'distribution_stores' => 'setDistributionStores',
        'destinations' => 'setDestinations',
        'build' => 'setBuild',
        'is_external_build' => 'setIsExternalBuild'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'version' => 'getVersion',
        'origin' => 'getOrigin',
        'short_version' => 'getShortVersion',
        'enabled' => 'getEnabled',
        'uploaded_at' => 'getUploadedAt',
        'destination_type' => 'getDestinationType',
        'distribution_groups' => 'getDistributionGroups',
        'distribution_stores' => 'getDistributionStores',
        'destinations' => 'getDestinations',
        'build' => 'getBuild',
        'is_external_build' => 'getIsExternalBuild'
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

    const ORIGIN_HOCKEYAPP = 'hockeyapp';
    const ORIGIN_APPCENTER = 'appcenter';
    const DESTINATION_TYPE_GROUP = 'group';
    const DESTINATION_TYPE_STORE = 'store';
    const DESTINATION_TYPE_TESTER = 'tester';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOriginAllowableValues()
    {
        return [
            self::ORIGIN_HOCKEYAPP,
            self::ORIGIN_APPCENTER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDestinationTypeAllowableValues()
    {
        return [
            self::DESTINATION_TYPE_GROUP,
            self::DESTINATION_TYPE_STORE,
            self::DESTINATION_TYPE_TESTER,
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['origin'] = isset($data['origin']) ? $data['origin'] : null;
        $this->container['short_version'] = isset($data['short_version']) ? $data['short_version'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['uploaded_at'] = isset($data['uploaded_at']) ? $data['uploaded_at'] : null;
        $this->container['destination_type'] = isset($data['destination_type']) ? $data['destination_type'] : null;
        $this->container['distribution_groups'] = isset($data['distribution_groups']) ? $data['distribution_groups'] : null;
        $this->container['distribution_stores'] = isset($data['distribution_stores']) ? $data['distribution_stores'] : null;
        $this->container['destinations'] = isset($data['destinations']) ? $data['destinations'] : null;
        $this->container['build'] = isset($data['build']) ? $data['build'] : null;
        $this->container['is_external_build'] = isset($data['is_external_build']) ? $data['is_external_build'] : null;
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
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        $allowedValues = $this->getOriginAllowableValues();
        if (!is_null($this->container['origin']) && !in_array($this->container['origin'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'origin', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['short_version'] === null) {
            $invalidProperties[] = "'short_version' can't be null";
        }
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
        if ($this->container['uploaded_at'] === null) {
            $invalidProperties[] = "'uploaded_at' can't be null";
        }
        $allowedValues = $this->getDestinationTypeAllowableValues();
        if (!is_null($this->container['destination_type']) && !in_array($this->container['destination_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'destination_type', must be one of '%s'",
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
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id ID identifying this unique release.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $version The release's version.<br> For iOS: CFBundleVersion from info.plist.<br> For Android: android:versionCode from AppManifest.xml.
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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
     * @param string $origin The release's origin
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
     * @param string $short_version The release's short version.<br> For iOS: CFBundleShortVersionString from info.plist.<br> For Android: android:versionName from AppManifest.xml.
     *
     * @return $this
     */
    public function setShortVersion($short_version)
    {
        $this->container['short_version'] = $short_version;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled This value determines the whether a release currently is enabled or disabled.
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

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
     * @param string $uploaded_at UTC time in ISO 8601 format of the uploaded time.
     *
     * @return $this
     */
    public function setUploadedAt($uploaded_at)
    {
        $this->container['uploaded_at'] = $uploaded_at;

        return $this;
    }

    /**
     * Gets destination_type
     *
     * @return string
     */
    public function getDestinationType()
    {
        return $this->container['destination_type'];
    }

    /**
     * Sets destination_type
     *
     * @param string $destination_type OBSOLETE. Will be removed in next version. The destination type.<br> <b>group</b>: The release distributed to internal groups and distribution_groups details will be returned.<br> <b>store</b>: The release distributed to external stores and distribution_stores details will be returned. <br>
     *
     * @return $this
     */
    public function setDestinationType($destination_type)
    {
        $allowedValues = $this->getDestinationTypeAllowableValues();
        if (!is_null($destination_type) && !in_array($destination_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'destination_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['destination_type'] = $destination_type;

        return $this;
    }

    /**
     * Gets distribution_groups
     *
     * @return object[]
     */
    public function getDistributionGroups()
    {
        return $this->container['distribution_groups'];
    }

    /**
     * Sets distribution_groups
     *
     * @param object[] $distribution_groups OBSOLETE. Will be removed in next version. A list of distribution groups that are associated with this release.
     *
     * @return $this
     */
    public function setDistributionGroups($distribution_groups)
    {
        $this->container['distribution_groups'] = $distribution_groups;

        return $this;
    }

    /**
     * Gets distribution_stores
     *
     * @return object[]
     */
    public function getDistributionStores()
    {
        return $this->container['distribution_stores'];
    }

    /**
     * Sets distribution_stores
     *
     * @param object[] $distribution_stores OBSOLETE. Will be removed in next version. A list of distribution stores that are associated with this release.
     *
     * @return $this
     */
    public function setDistributionStores($distribution_stores)
    {
        $this->container['distribution_stores'] = $distribution_stores;

        return $this;
    }

    /**
     * Gets destinations
     *
     * @return object[]
     */
    public function getDestinations()
    {
        return $this->container['destinations'];
    }

    /**
     * Sets destinations
     *
     * @param object[] $destinations A list of distribution groups or stores.
     *
     * @return $this
     */
    public function setDestinations($destinations)
    {
        $this->container['destinations'] = $destinations;

        return $this;
    }

    /**
     * Gets build
     *
     * @return \ZeC128\AppCenter\AppCenterApi\V01appsownerNameappNamereleasesfilterByTesterBuild
     */
    public function getBuild()
    {
        return $this->container['build'];
    }

    /**
     * Sets build
     *
     * @param \ZeC128\AppCenter\AppCenterApi\V01appsownerNameappNamereleasesfilterByTesterBuild $build build
     *
     * @return $this
     */
    public function setBuild($build)
    {
        $this->container['build'] = $build;

        return $this;
    }

    /**
     * Gets is_external_build
     *
     * @return bool
     */
    public function getIsExternalBuild()
    {
        return $this->container['is_external_build'];
    }

    /**
     * Sets is_external_build
     *
     * @param bool $is_external_build This value determines if a release is external or not.
     *
     * @return $this
     */
    public function setIsExternalBuild($is_external_build)
    {
        $this->container['is_external_build'] = $is_external_build;

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


