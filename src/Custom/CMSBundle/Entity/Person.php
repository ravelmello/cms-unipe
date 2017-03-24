<?php

namespace Custom\CMSBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Person
 */
class Person implements UserInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $personName;

    /**
     * @var int
     */
    private $personId;

    /**
     * @var \DateTime
     */
    private $personBirthDate;

    /**
     * @var string
     */
    private $personUsername;

    /**
     * @var string
     */
    private $personPassword;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set personName
     *
     * @param string $personName
     *
     * @return Person
     */
    public function setPersonName($personName)
    {
        $this->personName = $personName;

        return $this;
    }

    /**
     * Get personName
     *
     * @return string
     */
    public function getPersonName()
    {
        return $this->personName;
    }

    /**
     * Set personId
     *
     * @param integer $personId
     *
     * @return Person
     */
    public function setPersonId($personId)
    {
        $this->personId = $personId;

        return $this;
    }

    /**
     * Get personId
     *
     * @return int
     */
    public function getPersonId()
    {
        return $this->personId;
    }

    /**
     * Set personBirthDate
     *
     * @param \DateTime $personBirthDate
     *
     * @return Person
     */
    public function setPersonBirthDate($personBirthDate)
    {
        $this->personBirthDate = $personBirthDate;

        return $this;
    }

    /**
     * Get personBirthDate
     *
     * @return \DateTime
     */
    public function getPersonBirthDate()
    {
        return $this->personBirthDate;
    }

    /**
     * Set personUsername
     *
     * @param string $personUsername
     *
     * @return Person
     */
    public function setPersonUsername($personUsername)
    {
        $this->personUsername = $personUsername;

        return $this;
    }

    /**
     * Get personUsername
     *
     * @return string
     */
    public function getPersonUsername()
    {
        return $this->personUsername;
    }

    /**
     * Set personPassword
     *
     * @param string $personPassword
     *
     * @return Person
     */
    public function setPersonPassword($personPassword)
    {
        $this->personPassword = password_hash($personPassword, PASSWORD_BCRYPT);

        return $this;
    }

    /**
     * Get personPassword
     *
     * @return string
     */
    public function getPersonPassword()
    {
        return $this->personPassword;
    }

    /**
     * Returns the roles granted to the user.
     *
     * <code>
     * public function getRoles()
     * {
     *     return array('ROLE_USER');
     * }
     * </code>
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return (Role|string)[] The user roles
     */
    public function getRoles()
    {
        return array('ROLE_USER');
    }

    /**
     * Returns the password used to authenticate the user.
     *
     * This should be the encoded password. On authentication, a plain-text
     * password will be salted, encoded, and then compared to this value.
     *
     * @return string The password
     */
    public function getPassword()
    {
        return $this->personPassword;
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        return null;
    }

    /**
     * Returns the username used to authenticate the user.
     *
     * @return string The username
     */
    public function getUsername()
    {

    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {

    }
}

