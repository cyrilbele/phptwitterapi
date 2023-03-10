<?php
/**
 * TweetEditControls
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
 * TweetEditControls Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TweetEditControls implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Tweet_edit_controls';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'editable_until' => '\DateTime',
'edits_remaining' => 'int',
'is_edit_eligible' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'editable_until' => 'date-time',
'edits_remaining' => null,
'is_edit_eligible' => null    ];

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
        'editable_until' => 'editable_until',
'edits_remaining' => 'edits_remaining',
'is_edit_eligible' => 'is_edit_eligible'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'editable_until' => 'setEditableUntil',
'edits_remaining' => 'setEditsRemaining',
'is_edit_eligible' => 'setIsEditEligible'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'editable_until' => 'getEditableUntil',
'edits_remaining' => 'getEditsRemaining',
'is_edit_eligible' => 'getIsEditEligible'    ];

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
        $this->container['editable_until'] = isset($data['editable_until']) ? $data['editable_until'] : null;
        $this->container['edits_remaining'] = isset($data['edits_remaining']) ? $data['edits_remaining'] : null;
        $this->container['is_edit_eligible'] = isset($data['is_edit_eligible']) ? $data['is_edit_eligible'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['editable_until'] === null) {
            $invalidProperties[] = "'editable_until' can't be null";
        }
        if ($this->container['edits_remaining'] === null) {
            $invalidProperties[] = "'edits_remaining' can't be null";
        }
        if ($this->container['is_edit_eligible'] === null) {
            $invalidProperties[] = "'is_edit_eligible' can't be null";
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
     * Gets editable_until
     *
     * @return \DateTime
     */
    public function getEditableUntil()
    {
        return $this->container['editable_until'];
    }

    /**
     * Sets editable_until
     *
     * @param \DateTime $editable_until Time when Tweet is no longer editable.
     *
     * @return $this
     */
    public function setEditableUntil($editable_until)
    {
        $this->container['editable_until'] = $editable_until;

        return $this;
    }

    /**
     * Gets edits_remaining
     *
     * @return int
     */
    public function getEditsRemaining()
    {
        return $this->container['edits_remaining'];
    }

    /**
     * Sets edits_remaining
     *
     * @param int $edits_remaining Number of times this Tweet can be edited.
     *
     * @return $this
     */
    public function setEditsRemaining($edits_remaining)
    {
        $this->container['edits_remaining'] = $edits_remaining;

        return $this;
    }

    /**
     * Gets is_edit_eligible
     *
     * @return bool
     */
    public function getIsEditEligible()
    {
        return $this->container['is_edit_eligible'];
    }

    /**
     * Sets is_edit_eligible
     *
     * @param bool $is_edit_eligible Indicates if this Tweet is eligible to be edited.
     *
     * @return $this
     */
    public function setIsEditEligible($is_edit_eligible)
    {
        $this->container['is_edit_eligible'] = $is_edit_eligible;

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
