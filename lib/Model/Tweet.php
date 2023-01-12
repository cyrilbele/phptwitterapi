<?php
/**
 * Tweet
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
 * Tweet Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Tweet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Tweet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'attachments' => '\Swagger\Client\Model\TweetAttachments',
'author_id' => '\Swagger\Client\Model\UserId',
'context_annotations' => '\Swagger\Client\Model\ContextAnnotation[]',
'conversation_id' => '\Swagger\Client\Model\TweetId',
'created_at' => '\DateTime',
'edit_controls' => '\Swagger\Client\Model\TweetEditControls',
'edit_history_tweet_ids' => '\Swagger\Client\Model\TweetId[]',
'entities' => '\Swagger\Client\Model\FullTextEntities',
'geo' => '\Swagger\Client\Model\TweetGeo',
'id' => '\Swagger\Client\Model\TweetId',
'in_reply_to_user_id' => '\Swagger\Client\Model\UserId',
'lang' => 'string',
'non_public_metrics' => '\Swagger\Client\Model\TweetNonPublicMetrics',
'organic_metrics' => '\Swagger\Client\Model\TweetOrganicMetrics',
'possibly_sensitive' => 'bool',
'promoted_metrics' => '\Swagger\Client\Model\TweetPromotedMetrics',
'public_metrics' => '\Swagger\Client\Model\TweetPublicMetrics',
'referenced_tweets' => '\Swagger\Client\Model\TweetReferencedTweets[]',
'reply_settings' => '\Swagger\Client\Model\ReplySettings',
'source' => 'string',
'text' => '\Swagger\Client\Model\TweetText',
'withheld' => '\Swagger\Client\Model\TweetWithheld'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'attachments' => null,
'author_id' => null,
'context_annotations' => null,
'conversation_id' => null,
'created_at' => 'date-time',
'edit_controls' => null,
'edit_history_tweet_ids' => null,
'entities' => null,
'geo' => null,
'id' => null,
'in_reply_to_user_id' => null,
'lang' => null,
'non_public_metrics' => null,
'organic_metrics' => null,
'possibly_sensitive' => null,
'promoted_metrics' => null,
'public_metrics' => null,
'referenced_tweets' => null,
'reply_settings' => null,
'source' => null,
'text' => null,
'withheld' => null    ];

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
        'attachments' => 'attachments',
'author_id' => 'author_id',
'context_annotations' => 'context_annotations',
'conversation_id' => 'conversation_id',
'created_at' => 'created_at',
'edit_controls' => 'edit_controls',
'edit_history_tweet_ids' => 'edit_history_tweet_ids',
'entities' => 'entities',
'geo' => 'geo',
'id' => 'id',
'in_reply_to_user_id' => 'in_reply_to_user_id',
'lang' => 'lang',
'non_public_metrics' => 'non_public_metrics',
'organic_metrics' => 'organic_metrics',
'possibly_sensitive' => 'possibly_sensitive',
'promoted_metrics' => 'promoted_metrics',
'public_metrics' => 'public_metrics',
'referenced_tweets' => 'referenced_tweets',
'reply_settings' => 'reply_settings',
'source' => 'source',
'text' => 'text',
'withheld' => 'withheld'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attachments' => 'setAttachments',
'author_id' => 'setAuthorId',
'context_annotations' => 'setContextAnnotations',
'conversation_id' => 'setConversationId',
'created_at' => 'setCreatedAt',
'edit_controls' => 'setEditControls',
'edit_history_tweet_ids' => 'setEditHistoryTweetIds',
'entities' => 'setEntities',
'geo' => 'setGeo',
'id' => 'setId',
'in_reply_to_user_id' => 'setInReplyToUserId',
'lang' => 'setLang',
'non_public_metrics' => 'setNonPublicMetrics',
'organic_metrics' => 'setOrganicMetrics',
'possibly_sensitive' => 'setPossiblySensitive',
'promoted_metrics' => 'setPromotedMetrics',
'public_metrics' => 'setPublicMetrics',
'referenced_tweets' => 'setReferencedTweets',
'reply_settings' => 'setReplySettings',
'source' => 'setSource',
'text' => 'setText',
'withheld' => 'setWithheld'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attachments' => 'getAttachments',
'author_id' => 'getAuthorId',
'context_annotations' => 'getContextAnnotations',
'conversation_id' => 'getConversationId',
'created_at' => 'getCreatedAt',
'edit_controls' => 'getEditControls',
'edit_history_tweet_ids' => 'getEditHistoryTweetIds',
'entities' => 'getEntities',
'geo' => 'getGeo',
'id' => 'getId',
'in_reply_to_user_id' => 'getInReplyToUserId',
'lang' => 'getLang',
'non_public_metrics' => 'getNonPublicMetrics',
'organic_metrics' => 'getOrganicMetrics',
'possibly_sensitive' => 'getPossiblySensitive',
'promoted_metrics' => 'getPromotedMetrics',
'public_metrics' => 'getPublicMetrics',
'referenced_tweets' => 'getReferencedTweets',
'reply_settings' => 'getReplySettings',
'source' => 'getSource',
'text' => 'getText',
'withheld' => 'getWithheld'    ];

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
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
        $this->container['author_id'] = isset($data['author_id']) ? $data['author_id'] : null;
        $this->container['context_annotations'] = isset($data['context_annotations']) ? $data['context_annotations'] : null;
        $this->container['conversation_id'] = isset($data['conversation_id']) ? $data['conversation_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['edit_controls'] = isset($data['edit_controls']) ? $data['edit_controls'] : null;
        $this->container['edit_history_tweet_ids'] = isset($data['edit_history_tweet_ids']) ? $data['edit_history_tweet_ids'] : null;
        $this->container['entities'] = isset($data['entities']) ? $data['entities'] : null;
        $this->container['geo'] = isset($data['geo']) ? $data['geo'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['in_reply_to_user_id'] = isset($data['in_reply_to_user_id']) ? $data['in_reply_to_user_id'] : null;
        $this->container['lang'] = isset($data['lang']) ? $data['lang'] : null;
        $this->container['non_public_metrics'] = isset($data['non_public_metrics']) ? $data['non_public_metrics'] : null;
        $this->container['organic_metrics'] = isset($data['organic_metrics']) ? $data['organic_metrics'] : null;
        $this->container['possibly_sensitive'] = isset($data['possibly_sensitive']) ? $data['possibly_sensitive'] : null;
        $this->container['promoted_metrics'] = isset($data['promoted_metrics']) ? $data['promoted_metrics'] : null;
        $this->container['public_metrics'] = isset($data['public_metrics']) ? $data['public_metrics'] : null;
        $this->container['referenced_tweets'] = isset($data['referenced_tweets']) ? $data['referenced_tweets'] : null;
        $this->container['reply_settings'] = isset($data['reply_settings']) ? $data['reply_settings'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['withheld'] = isset($data['withheld']) ? $data['withheld'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['edit_history_tweet_ids'] === null) {
            $invalidProperties[] = "'edit_history_tweet_ids' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['text'] === null) {
            $invalidProperties[] = "'text' can't be null";
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
     * Gets attachments
     *
     * @return \Swagger\Client\Model\TweetAttachments
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \Swagger\Client\Model\TweetAttachments $attachments attachments
     *
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets author_id
     *
     * @return \Swagger\Client\Model\UserId
     */
    public function getAuthorId()
    {
        return $this->container['author_id'];
    }

    /**
     * Sets author_id
     *
     * @param \Swagger\Client\Model\UserId $author_id author_id
     *
     * @return $this
     */
    public function setAuthorId($author_id)
    {
        $this->container['author_id'] = $author_id;

        return $this;
    }

    /**
     * Gets context_annotations
     *
     * @return \Swagger\Client\Model\ContextAnnotation[]
     */
    public function getContextAnnotations()
    {
        return $this->container['context_annotations'];
    }

    /**
     * Sets context_annotations
     *
     * @param \Swagger\Client\Model\ContextAnnotation[] $context_annotations context_annotations
     *
     * @return $this
     */
    public function setContextAnnotations($context_annotations)
    {
        $this->container['context_annotations'] = $context_annotations;

        return $this;
    }

    /**
     * Gets conversation_id
     *
     * @return \Swagger\Client\Model\TweetId
     */
    public function getConversationId()
    {
        return $this->container['conversation_id'];
    }

    /**
     * Sets conversation_id
     *
     * @param \Swagger\Client\Model\TweetId $conversation_id conversation_id
     *
     * @return $this
     */
    public function setConversationId($conversation_id)
    {
        $this->container['conversation_id'] = $conversation_id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at Creation time of the Tweet.
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets edit_controls
     *
     * @return \Swagger\Client\Model\TweetEditControls
     */
    public function getEditControls()
    {
        return $this->container['edit_controls'];
    }

    /**
     * Sets edit_controls
     *
     * @param \Swagger\Client\Model\TweetEditControls $edit_controls edit_controls
     *
     * @return $this
     */
    public function setEditControls($edit_controls)
    {
        $this->container['edit_controls'] = $edit_controls;

        return $this;
    }

    /**
     * Gets edit_history_tweet_ids
     *
     * @return \Swagger\Client\Model\TweetId[]
     */
    public function getEditHistoryTweetIds()
    {
        return $this->container['edit_history_tweet_ids'];
    }

    /**
     * Sets edit_history_tweet_ids
     *
     * @param \Swagger\Client\Model\TweetId[] $edit_history_tweet_ids A list of Tweet Ids in this Tweet chain.
     *
     * @return $this
     */
    public function setEditHistoryTweetIds($edit_history_tweet_ids)
    {
        $this->container['edit_history_tweet_ids'] = $edit_history_tweet_ids;

        return $this;
    }

    /**
     * Gets entities
     *
     * @return \Swagger\Client\Model\FullTextEntities
     */
    public function getEntities()
    {
        return $this->container['entities'];
    }

    /**
     * Sets entities
     *
     * @param \Swagger\Client\Model\FullTextEntities $entities entities
     *
     * @return $this
     */
    public function setEntities($entities)
    {
        $this->container['entities'] = $entities;

        return $this;
    }

    /**
     * Gets geo
     *
     * @return \Swagger\Client\Model\TweetGeo
     */
    public function getGeo()
    {
        return $this->container['geo'];
    }

    /**
     * Sets geo
     *
     * @param \Swagger\Client\Model\TweetGeo $geo geo
     *
     * @return $this
     */
    public function setGeo($geo)
    {
        $this->container['geo'] = $geo;

        return $this;
    }

    /**
     * Gets id
     *
     * @return \Swagger\Client\Model\TweetId
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param \Swagger\Client\Model\TweetId $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets in_reply_to_user_id
     *
     * @return \Swagger\Client\Model\UserId
     */
    public function getInReplyToUserId()
    {
        return $this->container['in_reply_to_user_id'];
    }

    /**
     * Sets in_reply_to_user_id
     *
     * @param \Swagger\Client\Model\UserId $in_reply_to_user_id in_reply_to_user_id
     *
     * @return $this
     */
    public function setInReplyToUserId($in_reply_to_user_id)
    {
        $this->container['in_reply_to_user_id'] = $in_reply_to_user_id;

        return $this;
    }

    /**
     * Gets lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->container['lang'];
    }

    /**
     * Sets lang
     *
     * @param string $lang Language of the Tweet, if detected by Twitter. Returned as a BCP47 language tag.
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->container['lang'] = $lang;

        return $this;
    }

    /**
     * Gets non_public_metrics
     *
     * @return \Swagger\Client\Model\TweetNonPublicMetrics
     */
    public function getNonPublicMetrics()
    {
        return $this->container['non_public_metrics'];
    }

    /**
     * Sets non_public_metrics
     *
     * @param \Swagger\Client\Model\TweetNonPublicMetrics $non_public_metrics non_public_metrics
     *
     * @return $this
     */
    public function setNonPublicMetrics($non_public_metrics)
    {
        $this->container['non_public_metrics'] = $non_public_metrics;

        return $this;
    }

    /**
     * Gets organic_metrics
     *
     * @return \Swagger\Client\Model\TweetOrganicMetrics
     */
    public function getOrganicMetrics()
    {
        return $this->container['organic_metrics'];
    }

    /**
     * Sets organic_metrics
     *
     * @param \Swagger\Client\Model\TweetOrganicMetrics $organic_metrics organic_metrics
     *
     * @return $this
     */
    public function setOrganicMetrics($organic_metrics)
    {
        $this->container['organic_metrics'] = $organic_metrics;

        return $this;
    }

    /**
     * Gets possibly_sensitive
     *
     * @return bool
     */
    public function getPossiblySensitive()
    {
        return $this->container['possibly_sensitive'];
    }

    /**
     * Sets possibly_sensitive
     *
     * @param bool $possibly_sensitive Indicates if this Tweet contains URLs marked as sensitive, for example content suitable for mature audiences.
     *
     * @return $this
     */
    public function setPossiblySensitive($possibly_sensitive)
    {
        $this->container['possibly_sensitive'] = $possibly_sensitive;

        return $this;
    }

    /**
     * Gets promoted_metrics
     *
     * @return \Swagger\Client\Model\TweetPromotedMetrics
     */
    public function getPromotedMetrics()
    {
        return $this->container['promoted_metrics'];
    }

    /**
     * Sets promoted_metrics
     *
     * @param \Swagger\Client\Model\TweetPromotedMetrics $promoted_metrics promoted_metrics
     *
     * @return $this
     */
    public function setPromotedMetrics($promoted_metrics)
    {
        $this->container['promoted_metrics'] = $promoted_metrics;

        return $this;
    }

    /**
     * Gets public_metrics
     *
     * @return \Swagger\Client\Model\TweetPublicMetrics
     */
    public function getPublicMetrics()
    {
        return $this->container['public_metrics'];
    }

    /**
     * Sets public_metrics
     *
     * @param \Swagger\Client\Model\TweetPublicMetrics $public_metrics public_metrics
     *
     * @return $this
     */
    public function setPublicMetrics($public_metrics)
    {
        $this->container['public_metrics'] = $public_metrics;

        return $this;
    }

    /**
     * Gets referenced_tweets
     *
     * @return \Swagger\Client\Model\TweetReferencedTweets[]
     */
    public function getReferencedTweets()
    {
        return $this->container['referenced_tweets'];
    }

    /**
     * Sets referenced_tweets
     *
     * @param \Swagger\Client\Model\TweetReferencedTweets[] $referenced_tweets A list of Tweets this Tweet refers to. For example, if the parent Tweet is a Retweet, a Quoted Tweet or a Reply, it will include the related Tweet referenced to by its parent.
     *
     * @return $this
     */
    public function setReferencedTweets($referenced_tweets)
    {
        $this->container['referenced_tweets'] = $referenced_tweets;

        return $this;
    }

    /**
     * Gets reply_settings
     *
     * @return \Swagger\Client\Model\ReplySettings
     */
    public function getReplySettings()
    {
        return $this->container['reply_settings'];
    }

    /**
     * Sets reply_settings
     *
     * @param \Swagger\Client\Model\ReplySettings $reply_settings reply_settings
     *
     * @return $this
     */
    public function setReplySettings($reply_settings)
    {
        $this->container['reply_settings'] = $reply_settings;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source This is deprecated.
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets text
     *
     * @return \Swagger\Client\Model\TweetText
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param \Swagger\Client\Model\TweetText $text text
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets withheld
     *
     * @return \Swagger\Client\Model\TweetWithheld
     */
    public function getWithheld()
    {
        return $this->container['withheld'];
    }

    /**
     * Sets withheld
     *
     * @param \Swagger\Client\Model\TweetWithheld $withheld withheld
     *
     * @return $this
     */
    public function setWithheld($withheld)
    {
        $this->container['withheld'] = $withheld;

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