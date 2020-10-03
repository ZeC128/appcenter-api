<?php
/**
 * V01appsownerNameappNamebranchesbranchconfigToolsetsAndroid
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
 * V01appsownerNameappNamebranchesbranchconfigToolsetsAndroid Class Doc Comment
 *
 * @category Class
 * @description Build configuration for Android projects
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V01appsownerNameappNamebranchesbranchconfigToolsetsAndroid implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'v0.1appsowner_nameapp_namebranchesbranchconfig_toolsets_android';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'gradle_wrapper_path' => 'string',
        'module' => 'string',
        'build_variant' => 'string',
        'run_tests' => 'bool',
        'run_lint' => 'bool',
        'is_root' => 'bool',
        'automatic_signing' => 'bool',
        'keystore_password' => 'string',
        'key_alias' => 'string',
        'key_password' => 'string',
        'keystore_filename' => 'string',
        'keystore_encoded' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'gradle_wrapper_path' => null,
        'module' => null,
        'build_variant' => null,
        'run_tests' => null,
        'run_lint' => null,
        'is_root' => null,
        'automatic_signing' => null,
        'keystore_password' => null,
        'key_alias' => null,
        'key_password' => null,
        'keystore_filename' => null,
        'keystore_encoded' => null
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
        'gradle_wrapper_path' => 'gradleWrapperPath',
        'module' => 'module',
        'build_variant' => 'buildVariant',
        'run_tests' => 'runTests',
        'run_lint' => 'runLint',
        'is_root' => 'isRoot',
        'automatic_signing' => 'automaticSigning',
        'keystore_password' => 'keystorePassword',
        'key_alias' => 'keyAlias',
        'key_password' => 'keyPassword',
        'keystore_filename' => 'keystoreFilename',
        'keystore_encoded' => 'keystoreEncoded'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'gradle_wrapper_path' => 'setGradleWrapperPath',
        'module' => 'setModule',
        'build_variant' => 'setBuildVariant',
        'run_tests' => 'setRunTests',
        'run_lint' => 'setRunLint',
        'is_root' => 'setIsRoot',
        'automatic_signing' => 'setAutomaticSigning',
        'keystore_password' => 'setKeystorePassword',
        'key_alias' => 'setKeyAlias',
        'key_password' => 'setKeyPassword',
        'keystore_filename' => 'setKeystoreFilename',
        'keystore_encoded' => 'setKeystoreEncoded'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'gradle_wrapper_path' => 'getGradleWrapperPath',
        'module' => 'getModule',
        'build_variant' => 'getBuildVariant',
        'run_tests' => 'getRunTests',
        'run_lint' => 'getRunLint',
        'is_root' => 'getIsRoot',
        'automatic_signing' => 'getAutomaticSigning',
        'keystore_password' => 'getKeystorePassword',
        'key_alias' => 'getKeyAlias',
        'key_password' => 'getKeyPassword',
        'keystore_filename' => 'getKeystoreFilename',
        'keystore_encoded' => 'getKeystoreEncoded'
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
        $this->container['gradle_wrapper_path'] = isset($data['gradle_wrapper_path']) ? $data['gradle_wrapper_path'] : null;
        $this->container['module'] = isset($data['module']) ? $data['module'] : null;
        $this->container['build_variant'] = isset($data['build_variant']) ? $data['build_variant'] : null;
        $this->container['run_tests'] = isset($data['run_tests']) ? $data['run_tests'] : true;
        $this->container['run_lint'] = isset($data['run_lint']) ? $data['run_lint'] : null;
        $this->container['is_root'] = isset($data['is_root']) ? $data['is_root'] : null;
        $this->container['automatic_signing'] = isset($data['automatic_signing']) ? $data['automatic_signing'] : null;
        $this->container['keystore_password'] = isset($data['keystore_password']) ? $data['keystore_password'] : null;
        $this->container['key_alias'] = isset($data['key_alias']) ? $data['key_alias'] : null;
        $this->container['key_password'] = isset($data['key_password']) ? $data['key_password'] : null;
        $this->container['keystore_filename'] = isset($data['keystore_filename']) ? $data['keystore_filename'] : null;
        $this->container['keystore_encoded'] = isset($data['keystore_encoded']) ? $data['keystore_encoded'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets gradle_wrapper_path
     *
     * @return string
     */
    public function getGradleWrapperPath()
    {
        return $this->container['gradle_wrapper_path'];
    }

    /**
     * Sets gradle_wrapper_path
     *
     * @param string $gradle_wrapper_path Path to the Gradle wrapper script
     *
     * @return $this
     */
    public function setGradleWrapperPath($gradle_wrapper_path)
    {
        $this->container['gradle_wrapper_path'] = $gradle_wrapper_path;

        return $this;
    }

    /**
     * Gets module
     *
     * @return string
     */
    public function getModule()
    {
        return $this->container['module'];
    }

    /**
     * Sets module
     *
     * @param string $module The Gradle module to build
     *
     * @return $this
     */
    public function setModule($module)
    {
        $this->container['module'] = $module;

        return $this;
    }

    /**
     * Gets build_variant
     *
     * @return string
     */
    public function getBuildVariant()
    {
        return $this->container['build_variant'];
    }

    /**
     * Sets build_variant
     *
     * @param string $build_variant The Android build variant to build
     *
     * @return $this
     */
    public function setBuildVariant($build_variant)
    {
        $this->container['build_variant'] = $build_variant;

        return $this;
    }

    /**
     * Gets run_tests
     *
     * @return bool
     */
    public function getRunTests()
    {
        return $this->container['run_tests'];
    }

    /**
     * Sets run_tests
     *
     * @param bool $run_tests Whether to run unit tests during the build (default)
     *
     * @return $this
     */
    public function setRunTests($run_tests)
    {
        $this->container['run_tests'] = $run_tests;

        return $this;
    }

    /**
     * Gets run_lint
     *
     * @return bool
     */
    public function getRunLint()
    {
        return $this->container['run_lint'];
    }

    /**
     * Sets run_lint
     *
     * @param bool $run_lint Whether to run lint checks during the build (default)
     *
     * @return $this
     */
    public function setRunLint($run_lint)
    {
        $this->container['run_lint'] = $run_lint;

        return $this;
    }

    /**
     * Gets is_root
     *
     * @return bool
     */
    public function getIsRoot()
    {
        return $this->container['is_root'];
    }

    /**
     * Sets is_root
     *
     * @param bool $is_root Whether it is the root module or not
     *
     * @return $this
     */
    public function setIsRoot($is_root)
    {
        $this->container['is_root'] = $is_root;

        return $this;
    }

    /**
     * Gets automatic_signing
     *
     * @return bool
     */
    public function getAutomaticSigning()
    {
        return $this->container['automatic_signing'];
    }

    /**
     * Sets automatic_signing
     *
     * @param bool $automatic_signing Whether to apply automatic signing or not
     *
     * @return $this
     */
    public function setAutomaticSigning($automatic_signing)
    {
        $this->container['automatic_signing'] = $automatic_signing;

        return $this;
    }

    /**
     * Gets keystore_password
     *
     * @return string
     */
    public function getKeystorePassword()
    {
        return $this->container['keystore_password'];
    }

    /**
     * Sets keystore_password
     *
     * @param string $keystore_password The password of the keystore
     *
     * @return $this
     */
    public function setKeystorePassword($keystore_password)
    {
        $this->container['keystore_password'] = $keystore_password;

        return $this;
    }

    /**
     * Gets key_alias
     *
     * @return string
     */
    public function getKeyAlias()
    {
        return $this->container['key_alias'];
    }

    /**
     * Sets key_alias
     *
     * @param string $key_alias The key alias
     *
     * @return $this
     */
    public function setKeyAlias($key_alias)
    {
        $this->container['key_alias'] = $key_alias;

        return $this;
    }

    /**
     * Gets key_password
     *
     * @return string
     */
    public function getKeyPassword()
    {
        return $this->container['key_password'];
    }

    /**
     * Sets key_password
     *
     * @param string $key_password The key password
     *
     * @return $this
     */
    public function setKeyPassword($key_password)
    {
        $this->container['key_password'] = $key_password;

        return $this;
    }

    /**
     * Gets keystore_filename
     *
     * @return string
     */
    public function getKeystoreFilename()
    {
        return $this->container['keystore_filename'];
    }

    /**
     * Sets keystore_filename
     *
     * @param string $keystore_filename The name of the keystore file
     *
     * @return $this
     */
    public function setKeystoreFilename($keystore_filename)
    {
        $this->container['keystore_filename'] = $keystore_filename;

        return $this;
    }

    /**
     * Gets keystore_encoded
     *
     * @return string
     */
    public function getKeystoreEncoded()
    {
        return $this->container['keystore_encoded'];
    }

    /**
     * Sets keystore_encoded
     *
     * @param string $keystore_encoded The keystore encoded value
     *
     * @return $this
     */
    public function setKeystoreEncoded($keystore_encoded)
    {
        $this->container['keystore_encoded'] = $keystore_encoded;

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


