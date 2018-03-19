<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit", indexes={@ORM\Index(name="fk_produit", columns={"idUser"}), @ORM\Index(name="cat_fk", columns={"idCategorie"})})
 * @ORM\Entity
 */
class Produit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idProduit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idproduit;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleProduit", type="string", length=45, nullable=true)
     */
    private $libelleproduit;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionProduit", type="string", length=45, nullable=true)
     */
    private $descriptionproduit;

    /**
     * @var string
     *
     * @ORM\Column(name="etatProduit", type="string", length=45, nullable=true)
     */
    private $etatproduit;

    /**
     * @var float
     *
     * @ORM\Column(name="prixProduit", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixproduit;

    /**
     * @var integer
     *
     * @ORM\Column(name="idUser", type="integer", nullable=true)
     */
    private $iduser;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCategorie", type="integer", nullable=true)
     */
    private $idcategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="imageProduit", type="string", length=100, nullable=true)
     */
    private $imageproduit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateajout", type="datetime", nullable=false)
     */
    private $dateajout = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="stock", type="integer", nullable=true)
     */
    private $stock = '1';


}

