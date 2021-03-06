<?php
/**
 * Riskv1authenticationresultsConsumerAuthenticationInformation
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * Riskv1authenticationresultsConsumerAuthenticationInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Riskv1authenticationresultsConsumerAuthenticationInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'riskv1authenticationresults_consumerAuthenticationInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'authenticationTransactionId' => 'string',
        'signedPares' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'authenticationTransactionId' => null,
        'signedPares' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'authenticationTransactionId' => 'authenticationTransactionId',
        'signedPares' => 'signedPares'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'authenticationTransactionId' => 'setAuthenticationTransactionId',
        'signedPares' => 'setSignedPares'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'authenticationTransactionId' => 'getAuthenticationTransactionId',
        'signedPares' => 'getSignedPares'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['authenticationTransactionId'] = isset($data['authenticationTransactionId']) ? $data['authenticationTransactionId'] : null;
        $this->container['signedPares'] = isset($data['signedPares']) ? $data['signedPares'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['authenticationTransactionId']) && (strlen($this->container['authenticationTransactionId']) > 20)) {
            $invalid_properties[] = "invalid value for 'authenticationTransactionId', the character length must be smaller than or equal to 20.";
        }

        if ($this->container['signedPares'] === null) {
            $invalid_properties[] = "'signedPares' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if (strlen($this->container['authenticationTransactionId']) > 20) {
            return false;
        }
        if ($this->container['signedPares'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets authenticationTransactionId
     * @return string
     */
    public function getAuthenticationTransactionId()
    {
        return $this->container['authenticationTransactionId'];
    }

    /**
     * Sets authenticationTransactionId
     * @param string $authenticationTransactionId Payer authentication transaction identifier passed to link the check enrollment and validate authentication messages. **Note**: Required for Standard integration for enroll service. Required for Hybrid integration for validate service.
     * @return $this
     */
    public function setAuthenticationTransactionId($authenticationTransactionId)
    {
        if (!is_null($authenticationTransactionId) && (strlen($authenticationTransactionId) > 20)) {
            throw new \InvalidArgumentException('invalid length for $authenticationTransactionId when calling Riskv1authenticationresultsConsumerAuthenticationInformation., must be smaller than or equal to 20.');
        }

        $this->container['authenticationTransactionId'] = $authenticationTransactionId;

        return $this;
    }

    /**
     * Gets signedPares
     * @return string
     */
    public function getSignedPares()
    {
        return $this->container['signedPares'];
    }

    /**
     * Sets signedPares
     * @param string $signedPares Payer authentication result (PARes) message returned by the card-issuing bank. If you need to show proof of enrollment checking, you may need to decrypt and parse the string for the information required by the payment card company. For more information, see \"Storing Payer Authentication Data,\" page 160. Important The value is in base64. You must remove all carriage returns and line feeds before adding the PARes to the request.
     * @return $this
     */
    public function setSignedPares($signedPares)
    {
        $this->container['signedPares'] = $signedPares;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


