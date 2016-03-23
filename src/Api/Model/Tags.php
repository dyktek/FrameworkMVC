<?php

namespace Api\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tags
 *
 * @ORM\Table(name="tags")
 * @ORM\Entity
 */
class Tags
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tag_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tagId;

    /**
     * @var string
     *
     * @ORM\Column(name="tag_name", type="string", length=100, nullable=true)
     */
    private $tagName;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Api\Model\Articles", inversedBy="tagsTag")
     * @ORM\JoinTable(name="tags_has_articles",
     *   joinColumns={
     *     @ORM\JoinColumn(name="tags_tag_id", referencedColumnName="tag_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="articles_art_id", referencedColumnName="art_id")
     *   }
     * )
     */
    private $articlesArt;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->articlesArt = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

