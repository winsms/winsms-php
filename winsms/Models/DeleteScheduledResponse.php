<?php
/**
 * DeleteScheduledResponse
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
 * DeleteScheduledResponse Class Doc Comment
 *
 * @category Class
 * @package  winsms
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DeleteScheduledResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'deleteScheduledResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'timeStamp' => 'string',
        'version' => 'string',
        'statusCode' => 'int',
        'deletedMessageStatuses' => '\winsms\Models\DeletedMessageStatus[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'timeStamp' => null,
        'version' => null,
        'statusCode' => null,
        'deletedMessageStatuses' => null
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
        'timeStamp' => 'timeStamp',
        'version' => 'version',
        'statusCode' => 'statusCode',
        'deletedMessageStatuses' => 'deletedMessageStatuses'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'timeStamp' => 'setTimeStamp',
        'version' => 'setVersion',
        'statusCode' => 'setStatusCode',
        'deletedMessageStatuses' => 'setDeletedMessageStatuses'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'timeStamp' => 'getTimeStamp',
        'version' => 'getVersion',
        'statusCode' => 'getStatusCode',
        'deletedMessageStatuses' => 'getDeletedMessageStatuses'
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
        $this->container['timeStamp'] = isset($data['timeStamp']) ? $data['timeStamp'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['statusCode'] = isset($data['statusCode']) ? $data['statusCode'] : null;
        $this->container['deletedMessageStatuses'] = isset($data['deletedMessageStatuses']) ? $data['deletedMessageStatuses'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['timeStamp'] === null) {
            $invalidProperties[] = "'timeStamp' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['statusCode'] === null) {
            $invalidProperties[] = "'statusCode' can't be null";
        }
        if ($this->container['deletedMessageStatuses'] === null) {
            $invalidProperties[] = "'deletedMessageStatuses' can't be null";
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
     * Gets timeStamp
     *
     * @return string
     */
    public function getTimeStamp()
    {
        return $this->container['timeStamp'];
    }

    /**
     * Sets timeStamp
     *
     * @param string $timeStamp The date/time the request was processed, in the format YYYYMMDDhhmmssSSS
     *
     * @return $this
     */
    public function setTimeStamp($timeStamp)
    {
        $this->container['timeStamp'] = $timeStamp;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version The current version of the API of the endpoint that was called
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets statusCode
     *
     * @return int
     */
    public function getStatusCode()
    {
        return $this->container['statusCode'];
    }

    /**
     * Sets statusCode
     *
     * @param int $statusCode The http status code returned - reflected in the body for convenience
     *
     * @return $this
     */
    public function setStatusCode($statusCode)
    {
        $this->container['statusCode'] = $statusCode;

        return $this;
    }

    /**
     * Gets deletedMessageStatuses
     *
     * @return \winsms\Models\DeletedMessageStatus[]
     */
    public function getDeletedMessageStatuses()
    {
        return $this->container['deletedMessageStatuses'];
    }

    /**
     * Sets deletedMessageStatuses
     *
     * @param \winsms\Models\DeletedMessageStatus[] $deletedMessageStatuses An array of ***deletedMessageStatus*** objects detailing the deleted status of each message requested for deletion.
     *
     * @return $this
     */
    public function setDeletedMessageStatuses($deletedMessageStatuses)
    {
        $this->container['deletedMessageStatuses'] = $deletedMessageStatuses;

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

