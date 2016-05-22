<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VdmPost
 *
 * @ORM\Table(name="vdm_post")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VdmPostRepository")
 */
class VdmPost
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=255)
     */
    private $content;

    /**
     * @var int
     *
     * @ORM\Column(name="isLiked", type="integer", nullable=true)
     */
    private $isLiked;

    /**
     * @var int
     *
     * @ORM\Column(name="isUnliked", type="integer")
     */
    private $isUnliked;


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
     * Set name
     *
     * @param string $name
     *
     * @return VdmPost
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return VdmPost
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
     * Set content
     *
     * @param string $content
     *
     * @return VdmPost
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set isLiked
     *
     * @param integer $isLiked
     *
     * @return VdmPost
     */
    public function setIsLiked($isLiked)
    {
        $this->isLiked = $isLiked;

        return $this;
    }

    /**
     * Get isLiked
     *
     * @return int
     */
    public function getIsLiked()
    {
        return $this->isLiked;
    }

    /**
     * Set isUnliked
     *
     * @param integer $isUnliked
     *
     * @return VdmPost
     */
    public function setIsUnliked($isUnliked)
    {
        $this->isUnliked = $isUnliked;

        return $this;
    }

    /**
     * Get isUnliked
     *
     * @return int
     */
    public function getIsUnliked()
    {
        return $this->isUnliked;
    }
}

