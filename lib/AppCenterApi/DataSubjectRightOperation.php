<?php
/**
 * DataSubjectRightOperation
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
 * DataSubjectRightOperation Class Doc Comment
 *
 * @category Class
 * @package  ZeC128\AppCenter
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DataSubjectRightOperation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DataSubjectRightOperation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'request_id' => 'string',
        'operation_id' => 'string',
        'request_type' => 'string',
        'status' => 'string',
        'participant' => 'string',
        'context' => 'string',
        'app_id' => 'string',
        'participant_data' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'request_id' => 'uuid',
        'operation_id' => 'uuid',
        'request_type' => null,
        'status' => null,
        'participant' => null,
        'context' => null,
        'app_id' => null,
        'participant_data' => null
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
        'request_id' => 'requestId',
        'operation_id' => 'operationId',
        'request_type' => 'requestType',
        'status' => 'status',
        'participant' => 'participant',
        'context' => 'context',
        'app_id' => 'appId',
        'participant_data' => 'participantData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'request_id' => 'setRequestId',
        'operation_id' => 'setOperationId',
        'request_type' => 'setRequestType',
        'status' => 'setStatus',
        'participant' => 'setParticipant',
        'context' => 'setContext',
        'app_id' => 'setAppId',
        'participant_data' => 'setParticipantData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'request_id' => 'getRequestId',
        'operation_id' => 'getOperationId',
        'request_type' => 'getRequestType',
        'status' => 'getStatus',
        'participant' => 'getParticipant',
        'context' => 'getContext',
        'app_id' => 'getAppId',
        'participant_data' => 'getParticipantData'
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

    const REQUEST_TYPE_UNSUPPORTED = 'Unsupported';
    const REQUEST_TYPE_DELETE = 'Delete';
    const REQUEST_TYPE_PURGE = 'Purge';
    const REQUEST_TYPE_UNDO_DELETE = 'UndoDelete';
    const REQUEST_TYPE_SCHEDULED = 'Scheduled';
    const REQUEST_TYPE_APP_DELETE = 'AppDelete';
    const REQUEST_TYPE_APP_PURGE = 'AppPurge';
    const REQUEST_TYPE_APP_UNDO_DELETE = 'AppUndoDelete';
    const REQUEST_TYPE_EXPORT = 'Export';
    const REQUEST_TYPE_CUSTOMER_ACCOUNT_DELETE = 'CustomerAccountDelete';
    const REQUEST_TYPE_CUSTOMER_ACCOUNT_EXPORT = 'CustomerAccountExport';
    const REQUEST_TYPE_CUSTOMER_USER_DELETE = 'CustomerUserDelete';
    const REQUEST_TYPE_CUSTOMER_USER_EXPORT = 'CustomerUserExport';
    const STATUS_NONE = 'None';
    const STATUS_CREATED = 'Created';
    const STATUS_QUEUED = 'Queued';
    const STATUS_IN_PROGRESS = 'InProgress';
    const STATUS_COMPLETED = 'Completed';
    const STATUS_FAILED = 'Failed';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRequestTypeAllowableValues()
    {
        return [
            self::REQUEST_TYPE_UNSUPPORTED,
            self::REQUEST_TYPE_DELETE,
            self::REQUEST_TYPE_PURGE,
            self::REQUEST_TYPE_UNDO_DELETE,
            self::REQUEST_TYPE_SCHEDULED,
            self::REQUEST_TYPE_APP_DELETE,
            self::REQUEST_TYPE_APP_PURGE,
            self::REQUEST_TYPE_APP_UNDO_DELETE,
            self::REQUEST_TYPE_EXPORT,
            self::REQUEST_TYPE_CUSTOMER_ACCOUNT_DELETE,
            self::REQUEST_TYPE_CUSTOMER_ACCOUNT_EXPORT,
            self::REQUEST_TYPE_CUSTOMER_USER_DELETE,
            self::REQUEST_TYPE_CUSTOMER_USER_EXPORT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_NONE,
            self::STATUS_CREATED,
            self::STATUS_QUEUED,
            self::STATUS_IN_PROGRESS,
            self::STATUS_COMPLETED,
            self::STATUS_FAILED,
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
        $this->container['request_id'] = isset($data['request_id']) ? $data['request_id'] : null;
        $this->container['operation_id'] = isset($data['operation_id']) ? $data['operation_id'] : null;
        $this->container['request_type'] = isset($data['request_type']) ? $data['request_type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['participant'] = isset($data['participant']) ? $data['participant'] : null;
        $this->container['context'] = isset($data['context']) ? $data['context'] : null;
        $this->container['app_id'] = isset($data['app_id']) ? $data['app_id'] : null;
        $this->container['participant_data'] = isset($data['participant_data']) ? $data['participant_data'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['request_id'] === null) {
            $invalidProperties[] = "'request_id' can't be null";
        }
        if ($this->container['operation_id'] === null) {
            $invalidProperties[] = "'operation_id' can't be null";
        }
        if ($this->container['request_type'] === null) {
            $invalidProperties[] = "'request_type' can't be null";
        }
        $allowedValues = $this->getRequestTypeAllowableValues();
        if (!is_null($this->container['request_type']) && !in_array($this->container['request_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'request_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['participant'] === null) {
            $invalidProperties[] = "'participant' can't be null";
        }
        if ($this->container['context'] === null) {
            $invalidProperties[] = "'context' can't be null";
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
     * Gets request_id
     *
     * @return string
     */
    public function getRequestId()
    {
        return $this->container['request_id'];
    }

    /**
     * Sets request_id
     *
     * @param string $request_id Unique request identifier
     *
     * @return $this
     */
    public function setRequestId($request_id)
    {
        $this->container['request_id'] = $request_id;

        return $this;
    }

    /**
     * Gets operation_id
     *
     * @return string
     */
    public function getOperationId()
    {
        return $this->container['operation_id'];
    }

    /**
     * Sets operation_id
     *
     * @param string $operation_id Unique operation identifier
     *
     * @return $this
     */
    public function setOperationId($operation_id)
    {
        $this->container['operation_id'] = $operation_id;

        return $this;
    }

    /**
     * Gets request_type
     *
     * @return string
     */
    public function getRequestType()
    {
        return $this->container['request_type'];
    }

    /**
     * Sets request_type
     *
     * @param string $request_type Request type
     *
     * @return $this
     */
    public function setRequestType($request_type)
    {
        $allowedValues = $this->getRequestTypeAllowableValues();
        if (!in_array($request_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'request_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['request_type'] = $request_type;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Operation status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets participant
     *
     * @return string
     */
    public function getParticipant()
    {
        return $this->container['participant'];
    }

    /**
     * Sets participant
     *
     * @param string $participant Participant to execute the response
     *
     * @return $this
     */
    public function setParticipant($participant)
    {
        $this->container['participant'] = $participant;

        return $this;
    }

    /**
     * Gets context
     *
     * @return string
     */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
     * Sets context
     *
     * @param string $context JSON object decribing what to delete (TODO - make separate definition?)
     *
     * @return $this
     */
    public function setContext($context)
    {
        $this->container['context'] = $context;

        return $this;
    }

    /**
     * Gets app_id
     *
     * @return string
     */
    public function getAppId()
    {
        return $this->container['app_id'];
    }

    /**
     * Sets app_id
     *
     * @param string $app_id Application identifier if applicable
     *
     * @return $this
     */
    public function setAppId($app_id)
    {
        $this->container['app_id'] = $app_id;

        return $this;
    }

    /**
     * Gets participant_data
     *
     * @return string
     */
    public function getParticipantData()
    {
        return $this->container['participant_data'];
    }

    /**
     * Sets participant_data
     *
     * @param string $participant_data String field to be used by participant for any intermediate statuses or data they need to save
     *
     * @return $this
     */
    public function setParticipantData($participant_data)
    {
        $this->container['participant_data'] = $participant_data;

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


