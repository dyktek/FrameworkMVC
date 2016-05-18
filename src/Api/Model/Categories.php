<?php

namespace Api\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 *
 * @ORM\Table(name="categories", uniqueConstraints={@ORM\UniqueConstraint(name="cat_slug_UNIQUE", columns={"cat_slug"})})
 * @ORM\Entity
 */
class Categories
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cat_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $catId;

    /**
     * @var string
     *
     * @ORM\Column(name="cat_name", type="string", length=255, nullable=true)
     */
    private $catName;

    /**
     * @var string
     *
     * @ORM\Column(name="cat_slug", type="string", length=255, nullable=true)
     */
    private $catSlug;

    /**
     * @var integer
     *
     * @ORM\Column(name="cat_status", type="integer", nullable=true)
     */
    private $catStatus;

    /**
     * @param int $catId
     */
    public function setCatId($catId)
    {
        $this->catId = $catId;
    }

    /**
     * @param string $catName
     */
    public function setCatName($catName)
    {
        $this->catName = $catName;
    }

    /**
     * @param string $catSlug
     */
    public function setCatSlug($catSlug)
    {
        $this->catSlug = $catSlug;
    }

    /**
     * @param int $catStatus
     */
    public function setCatStatus($catStatus)
    {
        $this->catStatus = $catStatus;
    }
}

