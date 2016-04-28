<?php

namespace FilRougeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use FilRougeBundle\Entity\User;

/**
 * Serie
 *
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="FilRougeBundle\Repository\SerieRepository")
 * @Vich\Uploadable
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
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="product_image", fileNameProperty="imageName")
     *
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     * @var string
     */
    private $imageName;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     *
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="resume", type="string", length=255)
     */
    private $resume;

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
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return Product
     */
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        if ($image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }

    /**
     * @return File
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @param string $imageName
     *
     * @return Product
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;

        return $this;
    }

    /**
     * @return string
     */
    public function getImageName()
    {
        return 'pictures/'.$this->imageName;
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
}
