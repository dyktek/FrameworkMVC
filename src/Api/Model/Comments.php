<?php

namespace Api\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 *
 * @ORM\Table(name="comments", indexes={@ORM\Index(name="fk_comments_users1_idx", columns={"cmt_usr_id"})})
 * @ORM\Entity
 */
class Comments
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cmt_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cmtId;

    /**
     * @var string
     *
     * @ORM\Column(name="cmt_body", type="string", length=45, nullable=true)
     */
    private $cmtBody;

    /**
     * @var integer
     *
     * @ORM\Column(name="cmt_status", type="integer", nullable=true)
     */
    private $cmtStatus;

    /**
     * @var \Api\Model\Users
     *
     * @ORM\ManyToOne(targetEntity="Api\Model\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cmt_usr_id", referencedColumnName="usr_id")
     * })
     */
    private $cmtUsr;


}

