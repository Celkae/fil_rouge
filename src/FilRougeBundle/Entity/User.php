<?php

namespace FilRougeBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\JoinColumn;
use FOS\MessageBundle\Model\ParticipantInterface;
use FilRougeBundle\Entity\Serie;
use FilRougeBundle\Entity\Episode;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser implements ParticipantInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToMany(targetEntity="Episode", cascade={"persist"})
     * @JoinTable(name="users_episodes",
     *      joinColumns={@JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="episode_id", referencedColumnName="id", unique=true)}
     *      )
     */
    private $episodes;

    /**
     * @ORM\ManyToMany(targetEntity="Episode", cascade={"persist"}, orphanRemoval=TRUE)
     * @JoinTable(name="users_voted_episodes",
     *      joinColumns={@JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="voted_episode_id", referencedColumnName="id", onDelete="CASCADE")}
     *      )
     */
    private $votedEpisodes;

    /**
     * @ORM\ManyToMany(targetEntity="Serie", cascade={"persist"})
     * @JoinTable(name="users_series",
     *      joinColumns={@JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="serie_id", referencedColumnName="id", unique=true)}
     *      )
     */
    private $series;

    /**
     * @ORM\ManyToMany(targetEntity="Serie", cascade={"persist"}, orphanRemoval=TRUE)
     * @JoinTable(name="users_voted_series",
     *      joinColumns={@JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="voted_serie_id", referencedColumnName="id", onDelete="CASCADE")}
     *      )
     */
    private $votedSeries;

    /**
     * @ORM\OneToOne(targetEntity="Picture", cascade={"remove"})
     * @JoinColumn(name="picture_id", referencedColumnName="id")
     */
    private $picture;

    /**
     * @ORM\Column(type="boolean")
     * @var boolean
     */
    protected $moderated = false;

    public function __construct()
    {
        parent::__construct();

        $this->series = new ArrayCollection();
        $this->episodes = new ArrayCollection();
        $this->votedSeries = new ArrayCollection();
    }

    /**
     * @param Serie $serie
     *
     * @return User
     */
    public function setSerie(Serie $serie)
    {
        $this->series[] = $serie;

        return $this;
    }

    /**
     * @return array
     */
    public function getSeries()
    {
        return $this->series;
    }

    public function removeSerie($serie)
    {
        return $this->series->removeElement($serie);
    }

    /**
     * @param Episode $episode
     *
     * @return User
     */
    public function setEpisode(Episode $episode)
    {
        $this->episodes[] = $episode;

        return $this;
    }

    /**
     * @return array
     */
    public function getEpisodes()
    {
        return $this->episodes;
    }

    public function removeEpisode($episode)
    {
        return $this->episodes->removeElement($episode);
    }

    /**
     * @param Serie $votedSeries
     *
     * @return User
     */
    public function setVotedSerie($votedSerie)
    {
        $this->votedSeries[] = $votedSerie;

        return $this;
    }

    /**
    * @return array
    */
    public function getVotedSeries()
    {
      return $this->votedSeries;
    }

    /**
     * @param Serie $votedEpisodes
     *
     * @return User
     */
    public function setVotedEpisode($votedEpisode)
    {
        $this->votedEpisodes[] = $votedEpisode;

        return $this;
    }

    /**
     * @return array
     */
    public function getVotedEpisodes()
    {
      return $this->votedEpisodes;
    }

    /**
     * Set picture
     *
     * @param Picture
     *
     * @return User
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return array
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param boolean $moderated
     *
     * @return User
     */
    public function setModerated($bool)
    {
        $this->moderated = $bool;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getModerated()
    {
      return $this->moderated;
    }

    /**
     * Add episode
     *
     * @param \FilRougeBundle\Entity\Episode $episode
     *
     * @return User
     */
    public function addEpisode(\FilRougeBundle\Entity\Episode $episode)
    {
        $this->episodes[] = $episode;

        return $this;
    }

    /**
     * Add votedEpisode
     *
     * @param \FilRougeBundle\Entity\Episode $votedEpisode
     *
     * @return User
     */
    public function addVotedEpisode(\FilRougeBundle\Entity\Episode $votedEpisode)
    {
        $this->votedEpisodes[] = $votedEpisode;

        return $this;
    }

    /**
     * Remove votedEpisode
     *
     * @param \FilRougeBundle\Entity\Episode $votedEpisode
     */
    public function removeVotedEpisode(\FilRougeBundle\Entity\Episode $votedEpisode)
    {
        $this->votedEpisodes->removeElement($votedEpisode);
    }

    /**
     * Add series
     *
     * @param \FilRougeBundle\Entity\Serie $series
     *
     * @return User
     */
    public function addSeries(\FilRougeBundle\Entity\Serie $series)
    {
        $this->series[] = $series;

        return $this;
    }

    /**
     * Remove series
     *
     * @param \FilRougeBundle\Entity\Serie $series
     */
    public function removeSeries(\FilRougeBundle\Entity\Serie $series)
    {
        $this->series->removeElement($series);
    }

    /**
     * Add votedSeries
     *
     * @param \FilRougeBundle\Entity\Serie $votedSeries
     *
     * @return User
     */
    public function addVotedSeries(\FilRougeBundle\Entity\Serie $votedSeries)
    {
        $this->votedSeries[] = $votedSeries;

        return $this;
    }

    /**
     * Remove votedSeries
     *
     * @param \FilRougeBundle\Entity\Serie $votedSeries
     */
    public function removeVotedSeries(\FilRougeBundle\Entity\Serie $votedSeries)
    {
        $this->votedSeries->removeElement($votedSeries);
    }
}
