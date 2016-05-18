<?php

namespace FilRougeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Admin
 *
 * @ORM\Table(name="admin")
 * @ORM\Entity(repositoryClass="FilRougeBundle\Repository\AdminRepository")
 */
class Admin
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="users", type="string", length=255)
     */
    private $users;

    /**
     * @var string
     *
     * @ORM\Column(name="series", type="string", length=255, nullable=true)
     */
    private $series;

    /**
     * @var string
     *
     * @ORM\Column(name="episodes", type="string", length=255, nullable=true)
     */
    private $episodes;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="string", length=255, nullable=true)
     */
    private $comments;


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
     * Set users
     *
     * @param string $users
     *
     * @return Admin
     */
    public function setUsers($users)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return string
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set series
     *
     * @param string $series
     *
     * @return Admin
     */
    public function setSeries($series)
    {
        $this->series = $series;

        return $this;
    }

    /**
     * Get series
     *
     * @return string
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * Set episodes
     *
     * @param string $episodes
     *
     * @return Admin
     */
    public function setEpisodes($episodes)
    {
        $this->episodes = $episodes;

        return $this;
    }

    /**
     * Get episodes
     *
     * @return string
     */
    public function getEpisodes()
    {
        return $this->episodes;
    }

    /**
     * Set comments
     *
     * @param string $comments
     *
     * @return Admin
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }
}
