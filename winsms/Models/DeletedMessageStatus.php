<?php
/**
 * DeletedMessageStatus
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
 * DeletedMessageStatus Class Doc Comment
 *
 * @category Class
 * @package  winsms
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DeletedMessageStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'deletedMessageStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'apiMessageId' => 'int',
        'mobileNumber' => 'string',
        'deleted' => 'bool',
        'deleteError' => 'string',
        'creditCost' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'apiMessageId' => null,
        'mobileNumber' => null,
        'deleted' => null,
        'deleteError' => null,
        'creditCost' => 'double'
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
        'apiMessageId' => 'apiMessageId',
        'mobileNumber' => 'mobileNumber',
        'deleted' => 'deleted',
        'deleteError' => 'deleteError',
        'creditCost' => 'creditCost'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'apiMessageId' => 'setApiMessageId',
        'mobileNumber' => 'setMobileNumber',
        'deleted' => 'setDeleted',
        'deleteError' => 'setDeleteError',
        'creditCost' => 'setCreditCost'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'apiMessageId' => 'getApiMessageId',
        'mobileNumber' => 'getMobileNumber',
        'deleted' => 'getDeleted',
        'deleteError' => 'getDeleteError',
        'creditCost' => 'getCreditCost'
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
        $this->container['apiMessageId'] = isset($data['apiMessageId']) ? $data['apiMessageId'] : null;
        $this->container['mobileNumber'] = isset($data['mobileNumber']) ? $data['mobileNumber'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['deleteError'] = isset($data['deleteError']) ? $data['deleteError'] : null;
        $this->container['creditCost'] = isset($data['creditCost']) ? $data['creditCost'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['apiMessageId'] === null) {
            $invalidProperties[] = "'apiMessageId' can't be null";
        }
        if ($this->container['mobileNumber'] === null) {
            $invalidProperties[] = "'mobileNumber' can't be null";
        }
        if ($this->container['deleted'] === null) {
            $invalidProperties[] = "'deleted' can't be null";
        }
        if ($this->container['deleteError'] === null) {
            $invalidProperties[] = "'deleteError' can't be null";
        }
        if ($this->container['creditCost'] === null) {
            $invalidProperties[] = "'creditCost' can't be null";
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
     * Gets apiMessageId
     *
     * @return int
     */
    public function getApiMessageId()
    {
        return $this->container['apiMessageId'];
    }

    /**
     * Sets apiMessageId
     *
     * @param int $apiMessageId The WinSMS API Message Id identifying the SMS message.
     *
     * @return $this
     */
    public function setApiMessageId($apiMessageId)
    {
        $this->container['apiMessageId'] = $apiMessageId;

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
     * @param string $mobileNumber The mobile number of the recipient of the SMS message, using the international E164 (without the plus) format
     *
     * @return $this
     */
    public function setMobileNumber($mobileNumber)
    {
        $this->container['mobileNumber'] = $mobileNumber;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return bool
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool $deleted A boolean value indicating whether a scheduled SMS message was successfully deleted
     *
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets deleteError
     *
     * @return string
     */
    public function getDeleteError()
    {
        return $this->container['deleteError'];
    }

    /**
     * Sets deleteError
     *
     * @param string $deleteError If the ***deleted*** value is false, this will contain an error code indicating the reason for the failure. If the scheduled SMS message was successfully deleted, this value will be blank.
     *
     * @return $this
     */
    public function setDeleteError($deleteError)
    {
        $this->container['deleteError'] = $deleteError;

        return $this;
    }

    /**
     * Gets creditCost
     *
     * @return double
     */
    public function getCreditCost()
    {
        return $this->container['creditCost'];
    }

    /**
     * Sets creditCost
     *
     * @param double $creditCost The number of credits refunded to your account after deleting the scheduled message.  If the deletion was unsuccessful, this value will be 0.
     *
     * @return $this
     */
    public function setCreditCost($creditCost)
    {
        $this->container['creditCost'] = $creditCost;

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

