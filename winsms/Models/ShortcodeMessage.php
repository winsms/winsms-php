<?php
/**
 * ShortcodeMessage
 *
 * PHP version 5
 *
 * @category Class
 * @package  winsms
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * WinSMS
 *
 * WinSMS RESTful API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: support@winsms.co.za
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace winsms\Models;

use \ArrayAccess;
use \winsms\ObjectSerializer;

/**
 * ShortcodeMessage Class Doc Comment
 *
 * @category Class
 * @package  winsms
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShortcodeMessage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'shortcodeMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'incomingApiMessageId' => 'float',
        'mobileNumber' => 'string',
        'receiveTime' => 'int',
        'messageText' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'incomingApiMessageId' => null,
        'mobileNumber' => null,
        'receiveTime' => null,
        'messageText' => null
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
        'incomingApiMessageId' => 'incomingApiMessageId',
        'mobileNumber' => 'mobileNumber',
        'receiveTime' => 'receiveTime',
        'messageText' => 'messageText'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'incomingApiMessageId' => 'setIncomingApiMessageId',
        'mobileNumber' => 'setMobileNumber',
        'receiveTime' => 'setReceiveTime',
        'messageText' => 'setMessageText'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'incomingApiMessageId' => 'getIncomingApiMessageId',
        'mobileNumber' => 'getMobileNumber',
        'receiveTime' => 'getReceiveTime',
        'messageText' => 'getMessageText'
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
        $this->container['incomingApiMessageId'] = isset($data['incomingApiMessageId']) ? $data['incomingApiMessageId'] : null;
        $this->container['mobileNumber'] = isset($data['mobileNumber']) ? $data['mobileNumber'] : null;
        $this->container['receiveTime'] = isset($data['receiveTime']) ? $data['receiveTime'] : null;
        $this->container['messageText'] = isset($data['messageText']) ? $data['messageText'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['incomingApiMessageId'] === null) {
            $invalidProperties[] = "'incomingApiMessageId' can't be null";
        }
        if ($this->container['mobileNumber'] === null) {
            $invalidProperties[] = "'mobileNumber' can't be null";
        }
        if ($this->container['receiveTime'] === null) {
            $invalidProperties[] = "'receiveTime' can't be null";
        }
        if ($this->container['messageText'] === null) {
            $invalidProperties[] = "'messageText' can't be null";
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
     * Gets incomingApiMessageId
     *
     * @return float
     */
    public function getIncomingApiMessageId()
    {
        return $this->container['incomingApiMessageId'];
    }

    /**
     * Sets incomingApiMessageId
     *
     * @param float $incomingApiMessageId The unique API message id assigned to this incoming message.
     *
     * @return $this
     */
    public function setIncomingApiMessageId($incomingApiMessageId)
    {
        $this->container['incomingApiMessageId'] = $incomingApiMessageId;

        return $this;
    }

    /**
     * Gets mobileNumber
     *
     * @return string
     */
    public function getMobileNumber()
    {
        return $this->container['mobileNumber'];
    }

    /**
     * Sets mobileNumber
     *
     * @param string $mobileNumber The mobile number that sent the SMS message, displayed using the international E164 (without the plus) format
     *
     * @return $this
     */
    public function setMobileNumber($mobileNumber)
    {
        $this->container['mobileNumber'] = $mobileNumber;

        return $this;
    }

    /**
     * Gets receiveTime
     *
     * @return int
     */
    public function getReceiveTime()
    {
        return $this->container['receiveTime'];
    }

    /**
     * Sets receiveTime
     *
     * @param int $receiveTime The date and time the message was received by WinSMS, in the format YYYYMMDDHHmm.
     *
     * @return $this
     */
    public function setReceiveTime($receiveTime)
    {
        $this->container['receiveTime'] = $receiveTime;

        return $this;
    }

    /**
     * Gets messageText
     *
     * @return string
     */
    public function getMessageText()
    {
        return $this->container['messageText'];
    }

    /**
     * Sets messageText
     *
     * @param string $messageText The text of the incoming SMS message.
     *
     * @return $this
     */
    public function setMessageText($messageText)
    {
        $this->container['messageText'] = $messageText;

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


