<?php
/**
 * XcodeSchemeContainer
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
 * XcodeSchemeContainer Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class XcodeSchemeContainer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'XcodeSchemeContainer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'path' => 'string',
        'shared_schemes' => '\Swagger\Client\Model\XcodeToolsetSharedSchemes[]',
        'podfile_path' => 'string',
        'cartfile_path' => 'string',
        'xcode_project_sha' => 'string',
        'workspace_project_paths' => 'string',
        'app_extension_targets' => '\Swagger\Client\Model\XcodeToolsetAppExtensionTargets[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'path' => null,
        'shared_schemes' => null,
        'podfile_path' => null,
        'cartfile_path' => null,
        'xcode_project_sha' => null,
        'workspace_project_paths' => null,
        'app_extension_targets' => null
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
        'path' => 'path',
        'shared_schemes' => 'sharedSchemes',
        'podfile_path' => 'podfilePath',
        'cartfile_path' => 'cartfilePath',
        'xcode_project_sha' => 'xcodeProjectSha',
        'workspace_project_paths' => 'workspaceProjectPaths',
        'app_extension_targets' => 'appExtensionTargets'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'path' => 'setPath',
        'shared_schemes' => 'setSharedSchemes',
        'podfile_path' => 'setPodfilePath',
        'cartfile_path' => 'setCartfilePath',
        'xcode_project_sha' => 'setXcodeProjectSha',
        'workspace_project_paths' => 'setWorkspaceProjectPaths',
        'app_extension_targets' => 'setAppExtensionTargets'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'path' => 'getPath',
        'shared_schemes' => 'getSharedSchemes',
        'podfile_path' => 'getPodfilePath',
        'cartfile_path' => 'getCartfilePath',
        'xcode_project_sha' => 'getXcodeProjectSha',
        'workspace_project_paths' => 'getWorkspaceProjectPaths',
        'app_extension_targets' => 'getAppExtensionTargets'
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
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['shared_schemes'] = isset($data['shared_schemes']) ? $data['shared_schemes'] : null;
        $this->container['podfile_path'] = isset($data['podfile_path']) ? $data['podfile_path'] : null;
        $this->container['cartfile_path'] = isset($data['cartfile_path']) ? $data['cartfile_path'] : null;
        $this->container['xcode_project_sha'] = isset($data['xcode_project_sha']) ? $data['xcode_project_sha'] : null;
        $this->container['workspace_project_paths'] = isset($data['workspace_project_paths']) ? $data['workspace_project_paths'] : null;
        $this->container['app_extension_targets'] = isset($data['app_extension_targets']) ? $data['app_extension_targets'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['path'] === null) {
            $invalidProperties[] = "'path' can't be null";
        }
        if ($this->container['shared_schemes'] === null) {
            $invalidProperties[] = "'shared_schemes' can't be null";
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
     * Gets path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string $path Path to project
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets shared_schemes
     *
     * @return \Swagger\Client\Model\XcodeToolsetSharedSchemes[]
     */
    public function getSharedSchemes()
    {
        return $this->container['shared_schemes'];
    }

    /**
     * Sets shared_schemes
     *
     * @param \Swagger\Client\Model\XcodeToolsetSharedSchemes[] $shared_schemes Project schemes
     *
     * @return $this
     */
    public function setSharedSchemes($shared_schemes)
    {
        $this->container['shared_schemes'] = $shared_schemes;

        return $this;
    }

    /**
     * Gets podfile_path
     *
     * @return string
     */
    public function getPodfilePath()
    {
        return $this->container['podfile_path'];
    }

    /**
     * Sets podfile_path
     *
     * @param string $podfile_path Path to CocoaPods file, if present
     *
     * @return $this
     */
    public function setPodfilePath($podfile_path)
    {
        $this->container['podfile_path'] = $podfile_path;

        return $this;
    }

    /**
     * Gets cartfile_path
     *
     * @return string
     */
    public function getCartfilePath()
    {
        return $this->container['cartfile_path'];
    }

    /**
     * Sets cartfile_path
     *
     * @param string $cartfile_path Path to Carthage file, if present
     *
     * @return $this
     */
    public function setCartfilePath($cartfile_path)
    {
        $this->container['cartfile_path'] = $cartfile_path;

        return $this;
    }

    /**
     * Gets xcode_project_sha
     *
     * @return string
     */
    public function getXcodeProjectSha()
    {
        return $this->container['xcode_project_sha'];
    }

    /**
     * Sets xcode_project_sha
     *
     * @param string $xcode_project_sha repo object Id of the pbxproject
     *
     * @return $this
     */
    public function setXcodeProjectSha($xcode_project_sha)
    {
        $this->container['xcode_project_sha'] = $xcode_project_sha;

        return $this;
    }

    /**
     * Gets workspace_project_paths
     *
     * @return string
     */
    public function getWorkspaceProjectPaths()
    {
        return $this->container['workspace_project_paths'];
    }

    /**
     * Sets workspace_project_paths
     *
     * @param string $workspace_project_paths Related projects paths for xcworkspace
     *
     * @return $this
     */
    public function setWorkspaceProjectPaths($workspace_project_paths)
    {
        $this->container['workspace_project_paths'] = $workspace_project_paths;

        return $this;
    }

    /**
     * Gets app_extension_targets
     *
     * @return \Swagger\Client\Model\XcodeToolsetAppExtensionTargets[]
     */
    public function getAppExtensionTargets()
    {
        return $this->container['app_extension_targets'];
    }

    /**
     * Sets app_extension_targets
     *
     * @param \Swagger\Client\Model\XcodeToolsetAppExtensionTargets[] $app_extension_targets Information regarding project app extensions, if present
     *
     * @return $this
     */
    public function setAppExtensionTargets($app_extension_targets)
    {
        $this->container['app_extension_targets'] = $app_extension_targets;

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


