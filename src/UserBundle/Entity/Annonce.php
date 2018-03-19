<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonce
 *
 * @ORM\Table(name="annonce", indexes={@ORM\Index(name="annonce_ibfk_1", columns={"idUser"})})
 * @ORM\Entity
 */
class Annonce
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
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="annonceText", type="text", length=65535, nullable=true)
     */
    private $annoncetext;

    /**
     * @var string
     *
     * @ORM\Column(name="Type", type="string", length=20, nullable=true)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDePartage", type="datetime", nullable=false)
     */
    private $datedepartage = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="idUser", type="integer", nullable=true)
     */
    private $iduser;

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
     * @ORM\Column(name="signalercount", type="integer", nullable=true)
     */
    private $signalercount;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="blob", length=65535, nullable=true)
     */
    private $image;


}

