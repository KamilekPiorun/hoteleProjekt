<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Hotelarstwo\HotelarstwoPlaceBundle\Entity;

/**
 * Description of Attraction
 *
 * @author Kamil
 */
class Attraction {
     /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $name;
    
     /**
     * @var string
     *
     * @ORM\Column(type="float", nullable=true)
     */
    private $price;
    
    /**
     *  @ORM\Column(type="boolean", nullable=true)
     */
    private $include;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateFrom;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateTo;
    
     /**
     *@ManyToMany(targetEntity="Hotel", mappedBy="attraction")
     *
     */
    private $hotel;
}
