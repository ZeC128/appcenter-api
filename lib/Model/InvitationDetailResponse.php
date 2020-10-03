<?php
/**
 * InvitationDetailResponse
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
 * InvitationDetailResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InvitationDetailResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InvitationDetailResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'invitation_id' => 'string',
        'invited_by' => '\Swagger\Client\Model\InlineResponse20020',
        'organization' => '\Swagger\Client\Model\V01invitationssentOrganization',
        'app' => '\Swagger\Client\Model\V01testerappsRelease'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'invitation_id' => 'uuid',
        'invited_by' => null,
        'organization' => null,
        'app' => null
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
        'invitation_id' => 'invitation_id',
        'invited_by' => 'invited_by',
        'organization' => 'organization',
        'app' => 'app'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'invitation_id' => 'setInvitationId',
        'invited_by' => 'setInvitedBy',
        'organization' => 'setOrganization',
        'app' => 'setApp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'invitation_id' => 'getInvitationId',
        'invited_by' => 'getInvitedBy',
        'organization' => 'getOrganization',
        'app' => 'getApp'
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
        $this->container['invitation_id'] = isset($data['invitation_id']) ? $data['invitation_id'] : null;
        $this->container['invited_by'] = isset($data['invited_by']) ? $data['invited_by'] : null;
        $this->container['organization'] = isset($data['organization']) ? $data['organization'] : null;
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['invitation_id'] === null) {
            $invalidProperties[] = "'invitation_id' can't be null";
        }
        if ($this->container['invited_by'] === null) {
            $invalidProperties[] = "'invited_by' can't be null";
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
     * Gets invitation_id
     *
     * @return string
     */
    public function getInvitationId()
    {
        return $this->container['invitation_id'];
    }

    /**
     * Sets invitation_id
     *
     * @param string $invitation_id The id of the invitation
     *
     * @return $this
     */
    public function setInvitationId($invitation_id)
    {
        $this->container['invitation_id'] = $invitation_id;

        return $this;
    }

    /**
     * Gets invited_by
     *
     * @return \Swagger\Client\Model\InlineResponse20020
     */
    public function getInvitedBy()
    {
        return $this->container['invited_by'];
    }

    /**
     * Sets invited_by
     *
     * @param \Swagger\Client\Model\InlineResponse20020 $invited_by invited_by
     *
     * @return $this
     */
    public function setInvitedBy($invited_by)
    {
        $this->container['invited_by'] = $invited_by;

        return $this;
    }

    /**
     * Gets organization
     *
     * @return \Swagger\Client\Model\V01invitationssentOrganization
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param \Swagger\Client\Model\V01invitationssentOrganization $organization organization
     *
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;

        return $this;
    }

    /**
     * Gets app
     *
     * @return \Swagger\Client\Model\V01testerappsRelease
     */
    public function getApp()
    {
        return $this->container['app'];
    }

    /**
     * Sets app
     *
     * @param \Swagger\Client\Model\V01testerappsRelease $app app
     *
     * @return $this
     */
    public function setApp($app)
    {
        $this->container['app'] = $app;

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


