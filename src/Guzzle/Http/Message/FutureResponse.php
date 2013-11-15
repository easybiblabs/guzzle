<?php

namespace Guzzle\Http\Message;

/**
 * Represents a response yet to be completed
 */
class FutureResponse extends Response
{
    /** @var Request The request this response corresponds to */
    protected $request;

    /**
     * Instantiate a FutureResponse for the supplied request
     */
    public function __construct(RequestInterface $request)
    {
        $this->request = $request;
    }

    /**
     * Waits for the response to be read completely
     *
     * @return Response
     */
    public function receive()
    {
        // wait here
        $this->request->getClient()->getCurlMulti()->receive($this->request);
        return $this->request->getResponse();
    }

    /**
     * {@inheritdoc}
     */
    public static function fromMessage($message)
    {
        $this->receive();
        return parent::fromMessage($message);
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        $this->receive();
        return parent::__toString();
    }

    /**
     * {@inheritdoc}
     */
    public function serialize()
    {
        $this->receive();
        return parent::serialize();
    }

    /**
     * {@inheritdoc}
     */
    public function unserialize($serialize)
    {
        $this->receive();
        return parent::unserialize($serialize);
    }

    /**
     * {@inheritdoc}
     */
    public function getBody($asString = false)
    {
        $this->receive();
        return parent::getBody($asString);
    }

    /**
     * {@inheritdoc}
     */
    public function setBody($body)
    {
        $this->receive();
        return parent::setBody($body);
    }

    /**
     * {@inheritdoc}
     */
    public function setProtocol($protocol, $version)
    {
        $this->receive();
        return parent::setProtocol($protocol, $version);
    }

    /**
     * {@inheritdoc}
     */
    public function getProtocol()
    {
        $this->receive();
        return parent::getProtocol();
    }

    /**
     * {@inheritdoc}
     */
    public function getProtocolVersion()
    {
        $this->receive();
        return parent::getProtocolVersion();
    }

    /**
     * {@inheritdoc}
     */
    public function getInfo($key = null)
    {
        $this->receive();
        return parent::getInfo($key);
    }

    /**
     * {@inheritdoc}
     */
    public function setInfo(array $info)
    {
        $this->receive();
        return parent::setInfo($info);
    }

    /**
     * {@inheritdoc}
     */
    public function setStatus($statusCode, $reasonPhrase = '')
    {
        $this->receive();
        return parent::setStatus($statusCode, $reasonPhrase);
    }

    /**
     * {@inheritdoc}
     */
    public function getStatusCode()
    {
        $this->receive();
        return parent::getStatusCode();
    }

    /**
     * {@inheritdoc}
     */
    public function getMessage()
    {
        $this->receive();
        return parent::getMessage();
    }

    /**
     * {@inheritdoc}
     */
    public function getRawHeaders()
    {
        $this->receive();
        return parent::getRawHeaders();
    }

    /**
     * {@inheritdoc}
     */
    public function getReasonPhrase()
    {
        $this->receive();
        return parent::getReasonPhrase();
    }

    /**
     * {@inheritdoc}
     */
    public function getAcceptRanges()
    {
        $this->receive();
        return parent::getAcceptRanges();
    }

    /**
     * {@inheritdoc}
     */
    public function calculateAge()
    {
        $this->receive();
        return parent::calculateAge();
    }

    /**
     * {@inheritdoc}
     */
    public function getAge()
    {
        $this->receive();
        return parent::getAge();
    }

    /**
     * {@inheritdoc}
     */
    public function getAllow()
    {
        $this->receive();
        return parent::getAllow();
    }

    /**
     * {@inheritdoc}
     */
    public function isMethodAllowed($method)
    {
        $this->receive();
        return parent::isMethodAllowed($method);
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheControl()
    {
        $this->receive();
        return parent::getCacheControl();
    }

    /**
     * {@inheritdoc}
     */
    public function getConnection()
    {
        $this->receive();
        return parent::getConnection();
    }

    /**
     * {@inheritdoc}
     */
    public function getContentEncoding()
    {
        $this->receive();
        return parent::getContentEncoding();
    }

    /**
     * {@inheritdoc}
     */
    public function getContentLanguage()
    {
        $this->receive();
        return parent::getContentLanguage();
    }

    /**
     * {@inheritdoc}
     */
    public function getContentLength()
    {
        $this->receive();
        return parent::getContentLength();
    }

    /**
     * {@inheritdoc}
     */
    public function getContentLocation()
    {
        $this->receive();
        return parent::getContentLocation();
    }

    /**
     * {@inheritdoc}
     */
    public function getContentDisposition()
    {
        $this->receive();
        return parent::getContentDisposition();
    }

    /**
     * {@inheritdoc}
     */
    public function getContentMd5()
    {
        $this->receive();
        return parent::getContentMd5();
    }

    /**
     * {@inheritdoc}
     */
    public function getContentRange()
    {
        $this->receive();
        return parent::getContentRange();
    }

    /**
     * {@inheritdoc}
     */
    public function getContentType()
    {
        $this->receive();
        return parent::getContentType();
    }

    /**
     * {@inheritdoc}
     */
    public function isContentType($type)
    {
        $this->receive();
        return parent::isContentType($type);
    }

    /**
     * {@inheritdoc}
     */
    public function getDate()
    {
        $this->receive();
        return parent::getDate();
    }

    /**
     * {@inheritdoc}
     */
    public function getEtag()
    {
        $this->receive();
        return parent::getEtag();
    }

    /**
     * {@inheritdoc}
     */
    public function getExpires()
    {
        $this->receive();
        return parent::getExpires();
    }

    /**
     * {@inheritdoc}
     */
    public function getLastModified()
    {
        $this->receive();
        return parent::getLastModified();
    }

    /**
     * {@inheritdoc}
     */
    public function getLocation()
    {
        $this->receive();
        return parent::getLocation();
    }

    /**
     * {@inheritdoc}
     */
    public function getPragma()
    {
        $this->receive();
        return parent::getPragma();
    }

    /**
     * {@inheritdoc}
     */
    public function getProxyAuthenticate()
    {
        $this->receive();
        return parent::getProxyAuthenticate();
    }

    /**
     * {@inheritdoc}
     */
    public function getRetryAfter()
    {
        $this->receive();
        return parent::getRetryAfter();
    }

    /**
     * {@inheritdoc}
     */
    public function getServer()
    {
        $this->receive();
        return parent::getServer();
    }

    /**
     * {@inheritdoc}
     */
    public function getSetCookie()
    {
        $this->receive();
        return parent::getSetCookie();
    }

    /**
     * {@inheritdoc}
     */
    public function getTrailer()
    {
        $this->receive();
        return parent::getTrailer();
    }

    /**
     * {@inheritdoc}
     */
    public function getTransferEncoding()
    {
        $this->receive();
        return parent::getTransferEncoding();
    }

    /**
     * {@inheritdoc}
     */
    public function getVary()
    {
        $this->receive();
        return parent::getVary();
    }

    /**
     * {@inheritdoc}
     */
    public function getVia()
    {
        $this->receive();
        return parent::getVia();
    }

    /**
     * {@inheritdoc}
     */
    public function getWarning()
    {
        $this->receive();
        return parent::getWarning();
    }

    /**
     * {@inheritdoc}
     */
    public function getWwwAuthenticate()
    {
        $this->receive();
        return parent::getWwwAuthenticate();
    }

    /**
     * {@inheritdoc}
     */
    public function isClientError()
    {
        $this->receive();
        return parent::isClientError();
    }

    /**
     * {@inheritdoc}
     */
    public function isError()
    {
        $this->receive();
        return parent::isError();
    }

    /**
     * {@inheritdoc}
     */
    public function isInformational()
    {
        $this->receive();
        return parent::isInformational();
    }

    /**
     * {@inheritdoc}
     */
    public function isRedirect()
    {
        $this->receive();
        return parent::isRedirect();
    }

    /**
     * {@inheritdoc}
     */
    public function isServerError()
    {
        $this->receive();
        return parent::isServerError();
    }

    /**
     * {@inheritdoc}
     */
    public function isSuccessful()
    {
        $this->receive();
        return parent::isSuccessful();
    }

    /**
     * {@inheritdoc}
     */
    public function canCache()
    {
        $this->receive();
        return parent::canCache();
    }

    /**
     * {@inheritdoc}
     */
    public function getMaxAge()
    {
        $this->receive();
        return parent::getMaxAge();
    }

    /**
     * {@inheritdoc}
     */
    public function isFresh()
    {
        $this->receive();
        return parent::isFresh();
    }

    /**
     * {@inheritdoc}
     */
    public function canValidate()
    {
        $this->receive();
        return parent::canValidate();
    }

    /**
     * {@inheritdoc}
     */
    public function getFreshness()
    {
        $this->receive();
        return parent::getFreshness();
    }

    /**
     * {@inheritdoc}
     */
    public function json()
    {
        $this->receive();
        return parent::json();
    }

    /**
     * {@inheritdoc}
     */
    public function xml()
    {
        $this->receive();
        return parent::xml();
    }

    /**
     * {@inheritdoc}
     */
    public function getRedirectCount()
    {
        $this->receive();
        return parent::getRedirectCount();
    }

    /**
     * {@inheritdoc}
     */
    public function setEffectiveUrl($url)
    {
        $this->receive();
        return parent::setEffectiveUrl($url);
    }

    /**
     * {@inheritdoc}
     */
    public function getEffectiveUrl()
    {
        $this->receive();
        return parent::getEffectiveUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getPreviousResponse()
    {
        $this->receive();
        return parent::getPreviousResponse();
    }

    /**
     * {@inheritdoc}
     */
    public function setRequest($request)
    {
        $this->receive();
        return parent::setRequest($request);
    }

    /**
     * {@inheritdoc}
     */
    public function getRequest()
    {
        $this->receive();
        return parent::getRequest();
    }
}
