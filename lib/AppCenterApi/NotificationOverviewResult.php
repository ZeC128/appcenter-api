<?php
/**
 * NotificationOverviewResult
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
 * NotificationOverviewResult Class Doc Comment
 *
 * @category Class
 * @description Notification statistics
 * @package  ZeC128\AppCenter
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NotificationOverviewResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NotificationOverviewResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'notification_id' => 'string',
        'name' => 'string',
        'notification_target' => '\ZeC128\AppCenter\AppCenterApi\InlineResponse20035NotificationTarget',
        'send_time' => '\DateTime',
        'pns_send_failure' => 'int',
        'pns_send_success' => 'int',
        'state' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'notification_id' => null,
        'name' => null,
        'notification_target' => null,
        'send_time' => 'date-time',
        'pns_send_failure' => 'long',
        'pns_send_success' => 'long',
        'state' => null
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
        'notification_id' => 'notification_id',
        'name' => 'name',
        'notification_target' => 'notification_target',
        'send_time' => 'send_time',
        'pns_send_failure' => 'pns_send_failure',
        'pns_send_success' => 'pns_send_success',
        'state' => 'state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'notification_id' => 'setNotificationId',
        'name' => 'setName',
        'notification_target' => 'setNotificationTarget',
        'send_time' => 'setSendTime',
        'pns_send_failure' => 'setPnsSendFailure',
        'pns_send_success' => 'setPnsSendSuccess',
        'state' => 'setState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'notification_id' => 'getNotificationId',
        'name' => 'getName',
        'notification_target' => 'getNotificationTarget',
        'send_time' => 'getSendTime',
        'pns_send_failure' => 'getPnsSendFailure',
        'pns_send_success' => 'getPnsSendSuccess',
        'state' => 'getState'
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

    const STATE_QUEUED = 'Queued';
    const STATE_SENDING = 'Sending';
    const STATE_COMPLETED = 'Completed';
    const STATE_FAILED = 'Failed';
    const STATE_NO_TARGET_FOUND = 'NoTargetFound';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_QUEUED,
            self::STATE_SENDING,
            self::STATE_COMPLETED,
            self::STATE_FAILED,
            self::STATE_NO_TARGET_FOUND,
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
        $this->container['notification_id'] = isset($data['notification_id']) ? $data['notification_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['notification_target'] = isset($data['notification_target']) ? $data['notification_target'] : null;
        $this->container['send_time'] = isset($data['send_time']) ? $data['send_time'] : null;
        $this->container['pns_send_failure'] = isset($data['pns_send_failure']) ? $data['pns_send_failure'] : null;
        $this->container['pns_send_success'] = isset($data['pns_send_success']) ? $data['pns_send_success'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['notification_id'] === null) {
            $invalidProperties[] = "'notification_id' can't be null";
        }
        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
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
     * Gets notification_id
     *
     * @return string
     */
    public function getNotificationId()
    {
        return $this->container['notification_id'];
    }

    /**
     * Sets notification_id
     *
     * @param string $notification_id Notification id.
     *
     * @return $this
     */
    public function setNotificationId($notification_id)
    {
        $this->container['notification_id'] = $notification_id;

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
     * @param string $name Notification name
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 64)) {
            throw new \InvalidArgumentException('invalid length for $name when calling NotificationOverviewResult., must be smaller than or equal to 64.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets notification_target
     *
     * @return \ZeC128\AppCenter\AppCenterApi\InlineResponse20035NotificationTarget
     */
    public function getNotificationTarget()
    {
        return $this->container['notification_target'];
    }

    /**
     * Sets notification_target
     *
     * @param \ZeC128\AppCenter\AppCenterApi\InlineResponse20035NotificationTarget $notification_target notification_target
     *
     * @return $this
     */
    public function setNotificationTarget($notification_target)
    {
        $this->container['notification_target'] = $notification_target;

        return $this;
    }

    /**
     * Gets send_time
     *
     * @return \DateTime
     */
    public function getSendTime()
    {
        return $this->container['send_time'];
    }

    /**
     * Sets send_time
     *
     * @param \DateTime $send_time Notification send time
     *
     * @return $this
     */
    public function setSendTime($send_time)
    {
        $this->container['send_time'] = $send_time;

        return $this;
    }

    /**
     * Gets pns_send_failure
     *
     * @return int
     */
    public function getPnsSendFailure()
    {
        return $this->container['pns_send_failure'];
    }

    /**
     * Sets pns_send_failure
     *
     * @param int $pns_send_failure Number of the notifications failed to send to the push provider.
     *
     * @return $this
     */
    public function setPnsSendFailure($pns_send_failure)
    {
        $this->container['pns_send_failure'] = $pns_send_failure;

        return $this;
    }

    /**
     * Gets pns_send_success
     *
     * @return int
     */
    public function getPnsSendSuccess()
    {
        return $this->container['pns_send_success'];
    }

    /**
     * Sets pns_send_success
     *
     * @param int $pns_send_success Number of the notifications successfully sent to push the provider.
     *
     * @return $this
     */
    public function setPnsSendSuccess($pns_send_success)
    {
        $this->container['pns_send_success'] = $pns_send_success;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state State of the notification.
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

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


