<?php

namespace Api\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Galleries
 *
 * @ORM\Table(name="galleries")
 * @ORM\Entity
 */
class Galleries
{
    /**
     * @var integer
     *
     * @ORM\Column(name="gal_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $galId;

    /**
     * @var string
     *
     * @ORM\Column(name="gal_name", type="string", length=255, nullable=true)
     */
    private $galName;


}

