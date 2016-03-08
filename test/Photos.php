<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Photos
 *
 * @ORM\Table(name="photos", indexes={@ORM\Index(name="fk_photos_galleries1_idx", columns={"pht_gal_id"})})
 * @ORM\Entity
 */
class Photos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pht_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $phtId;

    /**
     * @var string
     *
     * @ORM\Column(name="pht_src", type="string", length=255, nullable=true)
     */
    private $phtSrc;

    /**
     * @var string
     *
     * @ORM\Column(name="pht_storage", type="string", length=45, nullable=true)
     */
    private $phtStorage;

    /**
     * @var array
     *
     * @ORM\Column(name="pht_main", type="simple_array", nullable=true)
     */
    private $phtMain;

    /**
     * @var \Galleries
     *
     * @ORM\ManyToOne(targetEntity="Galleries")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pht_gal_id", referencedColumnName="gal_id")
     * })
     */
    private $phtGal;


}

