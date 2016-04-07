<?php

namespace Api\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articles
 *
 * @ORM\Table(name="articles", uniqueConstraints={@ORM\UniqueConstraint(name="art_slug_UNIQUE", columns={"art_slug"})}, indexes={@ORM\Index(name="fk_articles_categories_idx", columns={"art_cat_id"}), @ORM\Index(name="fk_articles_users1_idx", columns={"art_usr_id"}), @ORM\Index(name="fk_articles_galleries1_idx", columns={"art_gal_id"})})
 * @ORM\Entity
 */
class Articles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="art_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $artId;

    /**
     * @var string
     *
     * @ORM\Column(name="art_title", type="string", length=255, nullable=true)
     */
    private $artTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="art_slug", type="string", length=255, nullable=true)
     */
    private $artSlug;

    /**
     * @var integer
     *
     * @ORM\Column(name="art_status", type="integer", nullable=true)
     */
    private $artStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="art_body", type="text", length=65535, nullable=true)
     */
    private $artBody;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="art_date", type="datetime", nullable=true)
     */
    private $artDate;

    /**
     * @var \Api\Model\Categories
     *
     * @ORM\ManyToOne(targetEntity="Api\Model\Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="art_cat_id", referencedColumnName="cat_id")
     * })
     */
    private $artCat;

    /**
     * @var \Api\Model\Users
     *
     * @ORM\ManyToOne(targetEntity="Api\Model\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="art_usr_id", referencedColumnName="usr_id")
     * })
     */
    private $artUsr;

    /**
     * @var \Api\Model\Galleries
     *
     * @ORM\ManyToOne(targetEntity="Api\Model\Galleries")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="art_gal_id", referencedColumnName="gal_id")
     * })
     */
    private $artGal;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Api\Model\Tags", mappedBy="articlesArt")
     */
    private $tagsTag;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tagsTag = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

