<?php

namespace FilRougeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping\JoinColumn;
use FilRougeBundle\Entity\User;


/**
 * Serie
 *
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="FilRougeBundle\Repository\SerieRepository")
 */
class Serie
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="resume", type="string", length=255)
     */
    private $resume;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="nationality", type="string", length=255)
     */
    private $nationality;

    /**
     * @var string
     *
     * @ORM\Column(name="director", type="string", length=255)
     */
    private $director;

    /**
     * @var string
     *
     * @ORM\Column(name="actors", type="string", length=255)
     */
    private $actors;

    /**
     * @var integer
     *
     * @ORM\Column(name="season", type="integer")
     */
    private $season;

    /**
     * @ORM\OneToMany(targetEntity="Episode", mappedBy="serie", cascade={"remove", "persist"})
     */
    private $episode;

    /**
     * @Assert\File(
     *     maxSize="2M",
     *     mimeTypes={"image/png", "image/jpeg", "image/gif", "image/pjpeg"},
     *     mimeTypesMessage = "Please upload a valid Image"
     * )
     * @ORM\OneToOne(targetEntity="Picture", cascade={"remove", "persist"})
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
        $this->episode = new ArrayCollection();
    }

    /**
    * Get id
    * @param null
    * @return int
    */
    public function getId()
    {
      return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Serie
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set resume
     *
     * @param string $resume
     *
     * @return Serie
     */
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get resume
     *
     * @return string
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set season
     *
     * @param string $season
     *
     * @return Serie
     */
    public function setSeason($season)
    {
        $this->season = $season;

        return $this;
    }

    /**
     * Get season
     *
     * @return string
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * Set episode
     *
     * @param array $episode
     *
     * @return Serie
     */
    public function setEpisode($episode)
    {
        $this->episode[] = $episode;

        return $this;
    }

    /**
     * Get episode
     *
     * @return array
     */
    public function getEpisode()
    {
        return $this->episode;
    }

    /**
     * Set picture
     *
     * @param Picture
     *
     * @return Serie
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
     * @return Serie
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

    public function __toString()
    {
      return $this->getTitle();
    }

    /**
     * Add episode
     *
     * @param \FilRougeBundle\Entity\Episode $episode
     *
     * @return Serie
     */
    public function addEpisode(\FilRougeBundle\Entity\Episode $episode)
    {
        $this->episode[] = $episode;

        return $this;
    }

    /**
     * Remove episode
     *
     * @param \FilRougeBundle\Entity\Episode $episode
     */
    public function removeEpisode(\FilRougeBundle\Entity\Episode $episode)
    {
        $this->episode->removeElement($episode);
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Serie
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set nationality
     *
     * @param string $nationality
     *
     * @return Serie
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Get nationality
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set director
     *
     * @param string $director
     *
     * @return Serie
     */
    public function setDirector($director)
    {
        $this->director = $director;

        return $this;
    }

    /**
     * Get director
     *
     * @return string
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * Set actors
     *
     * @param string $actors
     *
     * @return Serie
     */
    public function setActors($actors)
    {
        $this->actors = $actors;

        return $this;
    }

    /**
     * Get actors
     *
     * @return string
     */
    public function getActors()
    {
        return $this->actors;
    }
}
