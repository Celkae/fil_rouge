<?php
// src/FilRougeBundle/Entity/Comment.php

namespace FilRougeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\CommentBundle\Entity\Comment as BaseComment;
use Symfony\Component\Security\Core\User\UserInterface;
use FOS\CommentBundle\Model\SignedCommentInterface;
use FOS\CommentBundle\Model\VotableCommentInterface;

/**
 * @ORM\Entity
 * @ORM\ChangeTrackingPolicy("DEFERRED_EXPLICIT")
 * @ORM\Entity(repositoryClass="FilRougeBundle\Repository\CommentRepository")
 */
class Comment extends BaseComment implements SignedCommentInterface, VotableCommentInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * ThreadComment of this comment
     *
     * @var ThreadComment
     * @ORM\ManyToOne(targetEntity="FilRougeBundle\Entity\ThreadComment")
     */
    protected $thread;

    /**
     * Author of the comment
     *
     * @ORM\ManyToOne(targetEntity="FilRougeBundle\Entity\User")
     * @var User
     */
    protected $author;

    /**
    * @ORM\Column(type="integer")
    * @var int
    */
    protected $score = 0;

    /**
    * @ORM\Column(type="boolean")
    * @var boolean
    */
    protected $moderated = false;

    public function setAuthor(UserInterface $author)
    {
        $this->author = $author;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getAuthorName()
    {
        if (null === $this->getAuthor()) {
            return 'Anonymous';
        }

        return $this->getAuthor()->getUsername();
    }

    /**
     * Sets the score of the comment.
     *
     * @param integer $score
     */
    public function setScore($score)
    {
        $this->score = $score;
    }

    /**
     * Returns the current score of the comment.
     *
     * @return integer
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Increments the comment score by the provided
     * value.
     *
     * @param integer value
     *
     * @return integer The new comment score
     */
    public function incrementScore($by = 1)
    {
        $this->score += $by;
    }

    /**
     * @param boolean $moderated
     *
     * @return Comment
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
}
