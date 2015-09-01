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
     * @return string
     */
    public function getEmail()
    {
        return $this->response['email'];
    }

    /**
     * Get graduation date.in year-month-day format.
     *
     * @return string
     */
    public function getGraduation()
    {
        return $this->response['graduation'];
    }

    /**
     * Get major.
     *
     * @return string
     */
    public function getMajor()
    {
        return $this->response['major'];
    }

    /**
     * Get T-shirt size
     *
     * @return string
     */
    public function getShirtSize()
    {
        return $this->response['shirt_size'];
    }

    /**
     * Get any dietary restriction
     *
     * @return string
     */
    public function getDietaryRestriction()
    {
        return $this->response['dietary_restrictions'];
    }

    /**
     * Get any special needs
     *
     * @return string
     */
    public function getSpecialNeeds()
    {
        return $this->response['special_needs'];
    }

    /**
     * Get birthday in year-month-day format
     *
     * @return string
     */
    public function getBirthday()
    {
        return $this->response['date_of_birth'];
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->response['gender'];
    }

    /**
     * Get phone number
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->response['phone_number'];
    }

    /**
     * Get school
     *
     * @return string
     */
    public function getSchool()
    {
        return $this->response['school']['name'];
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
