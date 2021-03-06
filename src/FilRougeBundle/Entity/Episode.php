<?php

namespace FilRougeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use FilRougeBundle\Entity\Serie;

/**
 * Episode
 *
 * @ORM\Table(name="episode")
 * @ORM\Entity(repositoryClass="FilRougeBundle\Repository\EpisodeRepository")
 */
class Episode
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
    * @var integer
    *
    * @ORM\Column(name="season", type="integer")
    */
    private $season;

    /**
    * @var string
    *
    * @ORM\ManyToOne(targetEntity="Serie", inversedBy="episode")
    * @ORM\JoinColumn(name="serie_id", referencedColumnName="id", onDelete="CASCADE")
    */
    private $serie;

    /**
    * @var integer
    *
    * @ORM\Column(name="episode_number", type="integer")
    */
    private $episodeNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="resume_fr", type="string", length=1000, nullable=true)
     */
    private $resumeFr;

    /**
     * @var string
     *
     * @ORM\Column(name="resume_en", type="string", length=1000, nullable=true)
     */
    private $resumeEn;

    /**
    * @ORM\Column(type="boolean")
    * @var boolean
    */
    protected $moderated = false;

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
    * Set title
    *
    * @param string $title
    *
    * @return Episode
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
     * Set serie name
     *
     * @param string
     *
     * @return Episode
     */
    public function setSerie($serie)
    {
        $this->serie = $serie;

        return $this;
    }

    /**
     * Get serie
     *
     * @return string
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * Set season
     *
     * @param string $season
     *
     * @return Episode
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
     * Get episodeNumber
     *
     * @return string
     */
    public function getEpisodeNumber()
    {
        return $this->episodeNumber;
    }

    /**
     * Set season
     *
     * @param string $episodeNumber
     *
     * @return Episode
     */
    public function setEpisodeNumber($episodeNumber)
    {
        $this->episodeNumber = abs($episodeNumber);

        return $this;
    }

    /**
     * Set resumeFr
     *
     * @param string $resumeFr
     *
     * @return Episode
     */
    public function setResumeFr($resumeFr)
    {
        $this->resumeFr = $resumeFr;

        return $this;
    }

    /**
     * Get resumeFr
     *
     * @return string
     */
    public function getResumeFr()
    {
        return $this->resumeFr;
    }

    /**
    * Set resumeEn
    *
    * @param string $resumeEn
    *
    * @return Episode
    */
    public function setResumeEn($resumeEn)
    {
      $this->resumeEn = $resumeEn;

      return $this;
    }

    /**
    * Get resumeEn
    *
    * @return string
    */
    public function getResumeEn()
    {
      return $this->resumeEn;
    }

    /**
     * @param boolean $moderated
     *
     * @return Episode
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
}
