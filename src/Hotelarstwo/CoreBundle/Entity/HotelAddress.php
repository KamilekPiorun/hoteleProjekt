<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Hotelarstwo\HotelarstwoCoreBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Description of HotelAddress
 *
 * @author Kamil
 */
class HotelAddress {
   /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=20, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=20, nullable=true)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="possesion_number", type="string", length=5, nullable=true)
     */
    private $possesionNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var \Hotelarstwo\CoreBundle\Entity\Country
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Hotelarstwo\CoreBundle\Entity\Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Country_id", referencedColumnName="id")
     * })
     */
    private $country;

    /**
     * @var \Hotelarstwo\CoreBundle\Entity\Hotellist
     *
     * @ORM\ManyToOne(targetEntity="Hotelarstwo\CoreBundle\Entity\HotelList")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="HotelList_id", referencedColumnName="id")
     * })
     */
    private $hotelList;
}
