<?php

namespace League\OAuth2\Client\Provider;

class MLHUser implements ResourceOwnerInterface
{
    /**
     * @var array
     */
    protected $response;

    /**
     * @param array $response
     */
    public function __construct(array $response)
    {
        $this->response = $response['data'];
    }

    public function getId()
    {
        return $this->response['id'];
    }

    /**
     * Get perferred display name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->response['first_name'] . ' ' . $this->response['last_name'];
    }

    /**
     * Get perferred first name.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->response['first_name'];
    }

    /**
     * Get perferred last name.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->response['last_name'];
    }

    /**
     * Get email address.
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->response['email'];
    }

    /**
     * Get user data as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return $this->response;
    }
}
