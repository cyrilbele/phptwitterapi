<?php
/**
 * CreateDmConversationRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Twitter API v2
 *
 * Twitter API v2 available endpoints
 *
 * OpenAPI spec version: 2.60
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.36
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
 * CreateDmConversationRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateDmConversationRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateDmConversationRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'conversation_type' => 'string',
'message' => '\Swagger\Client\Model\CreateMessageRequest',
'participant_ids' => '\Swagger\Client\Model\DmParticipants'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'conversation_type' => null,
'message' => null,
'participant_ids' => null    ];

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
        'conversation_type' => 'conversation_type',
'message' => 'message',
'participant_ids' => 'participant_ids'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'conversation_type' => 'setConversationType',
'message' => 'setMessage',
'participant_ids' => 'setParticipantIds'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'conversation_type' => 'getConversationType',
'message' => 'getMessage',
'participant_ids' => 'getParticipantIds'    ];

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

    const CONVERSATION_TYPE_GROUP = 'Group';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConversationTypeAllowableValues()
    {
        return [
            self::CONVERSATION_TYPE_GROUP,        ];
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
        $this->container['conversation_type'] = isset($data['conversation_type']) ? $data['conversation_type'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['participant_ids'] = isset($data['participant_ids']) ? $data['participant_ids'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['conversation_type'] === null) {
            $invalidProperties[] = "'conversation_type' can't be null";
        }
        $allowedValues = $this->getConversationTypeAllowableValues();
        if (!is_null($this->container['conversation_type']) && !in_array($this->container['conversation_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'conversation_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
        }
        if ($this->container['participant_ids'] === null) {
            $invalidProperties[] = "'participant_ids' can't be null";
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
     * Gets conversation_type
     *
     * @return string
     */
    public function getConversationType()
    {
        return $this->container['conversation_type'];
    }

    /**
     * Sets conversation_type
     *
     * @param string $conversation_type The conversation type that is being created.
     *
     * @return $this
     */
    public function setConversationType($conversation_type)
    {
        $allowedValues = $this->getConversationTypeAllowableValues();
        if (!in_array($conversation_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'conversation_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['conversation_type'] = $conversation_type;

        return $this;
    }

    /**
     * Gets message
     *
     * @return \Swagger\Client\Model\CreateMessageRequest
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param \Swagger\Client\Model\CreateMessageRequest $message message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets participant_ids
     *
     * @return \Swagger\Client\Model\DmParticipants
     */
    public function getParticipantIds()
    {
        return $this->container['participant_ids'];
    }

    /**
     * Sets participant_ids
     *
     * @param \Swagger\Client\Model\DmParticipants $participant_ids participant_ids
     *
     * @return $this
     */
    public function setParticipantIds($participant_ids)
    {
        $this->container['participant_ids'] = $participant_ids;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
