<?php

namespace Epar\ServiceBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * EbayProfiles
 *
 * @ORM\Table(name="ebay_profiles")
 * @ORM\Entity(repositoryClass="Epar\ServiceBundle\Entity\EbayProfilesRepository")
 */
class EbayProfiles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(length=140)
     * @Assert\NotBlank
     * @Assert\Email
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @var int
     *
     * @ORM\OneToOne(targetEntity="User", inversedBy="information")
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     */
    private $user_id;

    /**
     * @var string
     *
     * @ORM\Column(type="datetime")
     */
    private $timestamp;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return EbayProfiles
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return EbayProfiles
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     *
     * @return EbayProfiles
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set userId
     *
     * @param \Epar\ServiceBundle\Entity\User $userId
     *
     * @return EbayProfiles
     */
    public function setUserId(\Epar\ServiceBundle\Entity\User $userId = null)
    {
        $this->user_id = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return \Epar\ServiceBundle\Entity\User
     */
    public function getUserId()
    {
        return $this->user_id;
    }
}
