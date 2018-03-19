<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table(name="reponse", indexes={@ORM\Index(name="reponse_ibfk_1", columns={"idCommentaire"})})
 * @ORM\Entity
 */
class Reponse
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="textreponse", type="text", length=65535, nullable=true)
     */
    private $textreponse;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datereponse", type="datetime", nullable=false)
     */
    private $datereponse = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="likecount", type="integer", nullable=true)
     */
    private $likecount;

    /**
     * @var integer
     *
     * @ORM\Column(name="dislikecount", type="integer", nullable=true)
     */
    private $dislikecount;

    /**
     * @var integer
     *
     * @ORM\Column(name="signaler", type="integer", nullable=true)
     */
    private $signaler;

    /**
     * @var \Commentaire
     *
     * @ORM\ManyToOne(targetEntity="Commentaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCommentaire", referencedColumnName="id")
     * })
     */
    private $idcommentaire;


}

