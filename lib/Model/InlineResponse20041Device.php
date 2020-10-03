<?php
/**
 * InlineResponse20041Device
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
 * InlineResponse20041Device Class Doc Comment
 *
 * @category Class
 * @description Device characteristics.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20041Device implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_41_device';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sdk_name' => 'string',
        'sdk_version' => 'string',
        'wrapper_sdk_version' => 'string',
        'wrapper_sdk_name' => 'string',
        'model' => 'string',
        'oem_name' => 'string',
        'os_name' => 'string',
        'os_version' => 'string',
        'os_build' => 'string',
        'os_api_level' => 'int',
        'locale' => 'string',
        'time_zone_offset' => 'int',
        'screen_size' => 'string',
        'app_version' => 'string',
        'carrier_name' => 'string',
        'carrier_code' => 'string',
        'carrier_country' => 'string',
        'app_build' => 'string',
        'app_namespace' => 'string',
        'live_update_release_label' => 'string',
        'live_update_deployment_key' => 'string',
        'live_update_package_hash' => 'string',
        'wrapper_runtime_version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sdk_name' => null,
        'sdk_version' => null,
        'wrapper_sdk_version' => null,
        'wrapper_sdk_name' => null,
        'model' => null,
        'oem_name' => null,
        'os_name' => null,
        'os_version' => null,
        'os_build' => null,
        'os_api_level' => null,
        'locale' => null,
        'time_zone_offset' => null,
        'screen_size' => null,
        'app_version' => null,
        'carrier_name' => null,
        'carrier_code' => null,
        'carrier_country' => null,
        'app_build' => null,
        'app_namespace' => null,
        'live_update_release_label' => null,
        'live_update_deployment_key' => null,
        'live_update_package_hash' => null,
        'wrapper_runtime_version' => null
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
        'sdk_name' => 'sdk_name',
        'sdk_version' => 'sdk_version',
        'wrapper_sdk_version' => 'wrapper_sdk_version',
        'wrapper_sdk_name' => 'wrapper_sdk_name',
        'model' => 'model',
        'oem_name' => 'oem_name',
        'os_name' => 'os_name',
        'os_version' => 'os_version',
        'os_build' => 'os_build',
        'os_api_level' => 'os_api_level',
        'locale' => 'locale',
        'time_zone_offset' => 'time_zone_offset',
        'screen_size' => 'screen_size',
        'app_version' => 'app_version',
        'carrier_name' => 'carrier_name',
        'carrier_code' => 'carrier_code',
        'carrier_country' => 'carrier_country',
        'app_build' => 'app_build',
        'app_namespace' => 'app_namespace',
        'live_update_release_label' => 'live_update_release_label',
        'live_update_deployment_key' => 'live_update_deployment_key',
        'live_update_package_hash' => 'live_update_package_hash',
        'wrapper_runtime_version' => 'wrapper_runtime_version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sdk_name' => 'setSdkName',
        'sdk_version' => 'setSdkVersion',
        'wrapper_sdk_version' => 'setWrapperSdkVersion',
        'wrapper_sdk_name' => 'setWrapperSdkName',
        'model' => 'setModel',
        'oem_name' => 'setOemName',
        'os_name' => 'setOsName',
        'os_version' => 'setOsVersion',
        'os_build' => 'setOsBuild',
        'os_api_level' => 'setOsApiLevel',
        'locale' => 'setLocale',
        'time_zone_offset' => 'setTimeZoneOffset',
        'screen_size' => 'setScreenSize',
        'app_version' => 'setAppVersion',
        'carrier_name' => 'setCarrierName',
        'carrier_code' => 'setCarrierCode',
        'carrier_country' => 'setCarrierCountry',
        'app_build' => 'setAppBuild',
        'app_namespace' => 'setAppNamespace',
        'live_update_release_label' => 'setLiveUpdateReleaseLabel',
        'live_update_deployment_key' => 'setLiveUpdateDeploymentKey',
        'live_update_package_hash' => 'setLiveUpdatePackageHash',
        'wrapper_runtime_version' => 'setWrapperRuntimeVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sdk_name' => 'getSdkName',
        'sdk_version' => 'getSdkVersion',
        'wrapper_sdk_version' => 'getWrapperSdkVersion',
        'wrapper_sdk_name' => 'getWrapperSdkName',
        'model' => 'getModel',
        'oem_name' => 'getOemName',
        'os_name' => 'getOsName',
        'os_version' => 'getOsVersion',
        'os_build' => 'getOsBuild',
        'os_api_level' => 'getOsApiLevel',
        'locale' => 'getLocale',
        'time_zone_offset' => 'getTimeZoneOffset',
        'screen_size' => 'getScreenSize',
        'app_version' => 'getAppVersion',
        'carrier_name' => 'getCarrierName',
        'carrier_code' => 'getCarrierCode',
        'carrier_country' => 'getCarrierCountry',
        'app_build' => 'getAppBuild',
        'app_namespace' => 'getAppNamespace',
        'live_update_release_label' => 'getLiveUpdateReleaseLabel',
        'live_update_deployment_key' => 'getLiveUpdateDeploymentKey',
        'live_update_package_hash' => 'getLiveUpdatePackageHash',
        'wrapper_runtime_version' => 'getWrapperRuntimeVersion'
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
        $this->container['sdk_name'] = isset($data['sdk_name']) ? $data['sdk_name'] : null;
        $this->container['sdk_version'] = isset($data['sdk_version']) ? $data['sdk_version'] : null;
        $this->container['wrapper_sdk_version'] = isset($data['wrapper_sdk_version']) ? $data['wrapper_sdk_version'] : null;
        $this->container['wrapper_sdk_name'] = isset($data['wrapper_sdk_name']) ? $data['wrapper_sdk_name'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['oem_name'] = isset($data['oem_name']) ? $data['oem_name'] : null;
        $this->container['os_name'] = isset($data['os_name']) ? $data['os_name'] : null;
        $this->container['os_version'] = isset($data['os_version']) ? $data['os_version'] : null;
        $this->container['os_build'] = isset($data['os_build']) ? $data['os_build'] : null;
        $this->container['os_api_level'] = isset($data['os_api_level']) ? $data['os_api_level'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['time_zone_offset'] = isset($data['time_zone_offset']) ? $data['time_zone_offset'] : null;
        $this->container['screen_size'] = isset($data['screen_size']) ? $data['screen_size'] : null;
        $this->container['app_version'] = isset($data['app_version']) ? $data['app_version'] : null;
        $this->container['carrier_name'] = isset($data['carrier_name']) ? $data['carrier_name'] : null;
        $this->container['carrier_code'] = isset($data['carrier_code']) ? $data['carrier_code'] : null;
        $this->container['carrier_country'] = isset($data['carrier_country']) ? $data['carrier_country'] : null;
        $this->container['app_build'] = isset($data['app_build']) ? $data['app_build'] : null;
        $this->container['app_namespace'] = isset($data['app_namespace']) ? $data['app_namespace'] : null;
        $this->container['live_update_release_label'] = isset($data['live_update_release_label']) ? $data['live_update_release_label'] : null;
        $this->container['live_update_deployment_key'] = isset($data['live_update_deployment_key']) ? $data['live_update_deployment_key'] : null;
        $this->container['live_update_package_hash'] = isset($data['live_update_package_hash']) ? $data['live_update_package_hash'] : null;
        $this->container['wrapper_runtime_version'] = isset($data['wrapper_runtime_version']) ? $data['wrapper_runtime_version'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sdk_name'] === null) {
            $invalidProperties[] = "'sdk_name' can't be null";
        }
        if ($this->container['sdk_version'] === null) {
            $invalidProperties[] = "'sdk_version' can't be null";
        }
        if ($this->container['os_name'] === null) {
            $invalidProperties[] = "'os_name' can't be null";
        }
        if ($this->container['os_version'] === null) {
            $invalidProperties[] = "'os_version' can't be null";
        }
        if ($this->container['locale'] === null) {
            $invalidProperties[] = "'locale' can't be null";
        }
        if ($this->container['time_zone_offset'] === null) {
            $invalidProperties[] = "'time_zone_offset' can't be null";
        }
        if (($this->container['time_zone_offset'] > 840)) {
            $invalidProperties[] = "invalid value for 'time_zone_offset', must be smaller than or equal to 840.";
        }

        if (($this->container['time_zone_offset'] < -840)) {
            $invalidProperties[] = "invalid value for 'time_zone_offset', must be bigger than or equal to -840.";
        }

        if ($this->container['app_version'] === null) {
            $invalidProperties[] = "'app_version' can't be null";
        }
        if ($this->container['app_build'] === null) {
            $invalidProperties[] = "'app_build' can't be null";
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
     * Gets sdk_name
     *
     * @return string
     */
    public function getSdkName()
    {
        return $this->container['sdk_name'];
    }

    /**
     * Sets sdk_name
     *
     * @param string $sdk_name Name of the SDK. Consists of the name of the SDK and the platform, e.g. \"appcenter.ios\", \"hockeysdk.android\".
     *
     * @return $this
     */
    public function setSdkName($sdk_name)
    {
        $this->container['sdk_name'] = $sdk_name;

        return $this;
    }

    /**
     * Gets sdk_version
     *
     * @return string
     */
    public function getSdkVersion()
    {
        return $this->container['sdk_version'];
    }

    /**
     * Sets sdk_version
     *
     * @param string $sdk_version Version of the SDK in semver format, e.g. \"1.2.0\" or \"0.12.3-alpha.1\".
     *
     * @return $this
     */
    public function setSdkVersion($sdk_version)
    {
        $this->container['sdk_version'] = $sdk_version;

        return $this;
    }

    /**
     * Gets wrapper_sdk_version
     *
     * @return string
     */
    public function getWrapperSdkVersion()
    {
        return $this->container['wrapper_sdk_version'];
    }

    /**
     * Sets wrapper_sdk_version
     *
     * @param string $wrapper_sdk_version Version of the wrapper SDK in semver format. When the SDK is embedding another base SDK (for example Xamarin.Android wraps Android), the Xamarin specific version is populated into this field while sdkVersion refers to the original Android SDK.
     *
     * @return $this
     */
    public function setWrapperSdkVersion($wrapper_sdk_version)
    {
        $this->container['wrapper_sdk_version'] = $wrapper_sdk_version;

        return $this;
    }

    /**
     * Gets wrapper_sdk_name
     *
     * @return string
     */
    public function getWrapperSdkName()
    {
        return $this->container['wrapper_sdk_name'];
    }

    /**
     * Sets wrapper_sdk_name
     *
     * @param string $wrapper_sdk_name Name of the wrapper SDK. Consists of the name of the SDK and the wrapper platform, e.g. \"appcenter.xamarin\", \"hockeysdk.cordova\".
     *
     * @return $this
     */
    public function setWrapperSdkName($wrapper_sdk_name)
    {
        $this->container['wrapper_sdk_name'] = $wrapper_sdk_name;

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
     * @param string $model Device model (example: iPad2,3).
     *
     * @return $this
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets oem_name
     *
     * @return string
     */
    public function getOemName()
    {
        return $this->container['oem_name'];
    }

    /**
     * Sets oem_name
     *
     * @param string $oem_name Device manufacturer (example: HTC).
     *
     * @return $this
     */
    public function setOemName($oem_name)
    {
        $this->container['oem_name'] = $oem_name;

        return $this;
    }

    /**
     * Gets os_name
     *
     * @return string
     */
    public function getOsName()
    {
        return $this->container['os_name'];
    }

    /**
     * Sets os_name
     *
     * @param string $os_name OS name (example: iOS). The following OS names are standardized (non-exclusive): Android, iOS, macOS, tvOS, Windows.
     *
     * @return $this
     */
    public function setOsName($os_name)
    {
        $this->container['os_name'] = $os_name;

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
     * @param string $os_version OS version (example: 9.3.0).
     *
     * @return $this
     */
    public function setOsVersion($os_version)
    {
        $this->container['os_version'] = $os_version;

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
     * @param string $os_build OS build code (example: LMY47X).
     *
     * @return $this
     */
    public function setOsBuild($os_build)
    {
        $this->container['os_build'] = $os_build;

        return $this;
    }

    /**
     * Gets os_api_level
     *
     * @return int
     */
    public function getOsApiLevel()
    {
        return $this->container['os_api_level'];
    }

    /**
     * Sets os_api_level
     *
     * @param int $os_api_level API level when applicable like in Android (example: 15).
     *
     * @return $this
     */
    public function setOsApiLevel($os_api_level)
    {
        $this->container['os_api_level'] = $os_api_level;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string $locale Language code (example: en_US).
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets time_zone_offset
     *
     * @return int
     */
    public function getTimeZoneOffset()
    {
        return $this->container['time_zone_offset'];
    }

    /**
     * Sets time_zone_offset
     *
     * @param int $time_zone_offset The offset in minutes from UTC for the device time zone, including daylight savings time.
     *
     * @return $this
     */
    public function setTimeZoneOffset($time_zone_offset)
    {

        if (($time_zone_offset > 840)) {
            throw new \InvalidArgumentException('invalid value for $time_zone_offset when calling InlineResponse20041Device., must be smaller than or equal to 840.');
        }
        if (($time_zone_offset < -840)) {
            throw new \InvalidArgumentException('invalid value for $time_zone_offset when calling InlineResponse20041Device., must be bigger than or equal to -840.');
        }

        $this->container['time_zone_offset'] = $time_zone_offset;

        return $this;
    }

    /**
     * Gets screen_size
     *
     * @return string
     */
    public function getScreenSize()
    {
        return $this->container['screen_size'];
    }

    /**
     * Sets screen_size
     *
     * @param string $screen_size Screen size of the device in pixels (example: 640x480).
     *
     * @return $this
     */
    public function setScreenSize($screen_size)
    {
        $this->container['screen_size'] = $screen_size;

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
     * @param string $app_version Application version name, e.g. 1.1.0
     *
     * @return $this
     */
    public function setAppVersion($app_version)
    {
        $this->container['app_version'] = $app_version;

        return $this;
    }

    /**
     * Gets carrier_name
     *
     * @return string
     */
    public function getCarrierName()
    {
        return $this->container['carrier_name'];
    }

    /**
     * Sets carrier_name
     *
     * @param string $carrier_name Carrier name (for mobile devices).
     *
     * @return $this
     */
    public function setCarrierName($carrier_name)
    {
        $this->container['carrier_name'] = $carrier_name;

        return $this;
    }

    /**
     * Gets carrier_code
     *
     * @return string
     */
    public function getCarrierCode()
    {
        return $this->container['carrier_code'];
    }

    /**
     * Sets carrier_code
     *
     * @param string $carrier_code Carrier country code (for mobile devices).
     *
     * @return $this
     */
    public function setCarrierCode($carrier_code)
    {
        $this->container['carrier_code'] = $carrier_code;

        return $this;
    }

    /**
     * Gets carrier_country
     *
     * @return string
     */
    public function getCarrierCountry()
    {
        return $this->container['carrier_country'];
    }

    /**
     * Sets carrier_country
     *
     * @param string $carrier_country Carrier country.
     *
     * @return $this
     */
    public function setCarrierCountry($carrier_country)
    {
        $this->container['carrier_country'] = $carrier_country;

        return $this;
    }

    /**
     * Gets app_build
     *
     * @return string
     */
    public function getAppBuild()
    {
        return $this->container['app_build'];
    }

    /**
     * Sets app_build
     *
     * @param string $app_build The app's build number, e.g. 42.
     *
     * @return $this
     */
    public function setAppBuild($app_build)
    {
        $this->container['app_build'] = $app_build;

        return $this;
    }

    /**
     * Gets app_namespace
     *
     * @return string
     */
    public function getAppNamespace()
    {
        return $this->container['app_namespace'];
    }

    /**
     * Sets app_namespace
     *
     * @param string $app_namespace The bundle identifier, package identifier, or namespace, depending on what the individual plattforms use,  .e.g com.microsoft.example.
     *
     * @return $this
     */
    public function setAppNamespace($app_namespace)
    {
        $this->container['app_namespace'] = $app_namespace;

        return $this;
    }

    /**
     * Gets live_update_release_label
     *
     * @return string
     */
    public function getLiveUpdateReleaseLabel()
    {
        return $this->container['live_update_release_label'];
    }

    /**
     * Sets live_update_release_label
     *
     * @param string $live_update_release_label Label that is used to identify application code 'version' released via Live Update beacon running on device
     *
     * @return $this
     */
    public function setLiveUpdateReleaseLabel($live_update_release_label)
    {
        $this->container['live_update_release_label'] = $live_update_release_label;

        return $this;
    }

    /**
     * Gets live_update_deployment_key
     *
     * @return string
     */
    public function getLiveUpdateDeploymentKey()
    {
        return $this->container['live_update_deployment_key'];
    }

    /**
     * Sets live_update_deployment_key
     *
     * @param string $live_update_deployment_key Identifier of environment that current application release belongs to, deployment key then maps to environment like Production, Staging.
     *
     * @return $this
     */
    public function setLiveUpdateDeploymentKey($live_update_deployment_key)
    {
        $this->container['live_update_deployment_key'] = $live_update_deployment_key;

        return $this;
    }

    /**
     * Gets live_update_package_hash
     *
     * @return string
     */
    public function getLiveUpdatePackageHash()
    {
        return $this->container['live_update_package_hash'];
    }

    /**
     * Sets live_update_package_hash
     *
     * @param string $live_update_package_hash Hash of all files (ReactNative or Cordova) deployed to device via LiveUpdate beacon. Helps identify the Release version on device or need to download updates in future.
     *
     * @return $this
     */
    public function setLiveUpdatePackageHash($live_update_package_hash)
    {
        $this->container['live_update_package_hash'] = $live_update_package_hash;

        return $this;
    }

    /**
     * Gets wrapper_runtime_version
     *
     * @return string
     */
    public function getWrapperRuntimeVersion()
    {
        return $this->container['wrapper_runtime_version'];
    }

    /**
     * Sets wrapper_runtime_version
     *
     * @param string $wrapper_runtime_version Version of the wrapper technology framework (Xamarin runtime version or ReactNative or Cordova etc...). See wrapper_sdk_name to see if this version refers to Xamarin or ReactNative or other.
     *
     * @return $this
     */
    public function setWrapperRuntimeVersion($wrapper_runtime_version)
    {
        $this->container['wrapper_runtime_version'] = $wrapper_runtime_version;

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


