<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Hotel
 *
 * @author Kamil
 */

namespace Hotelarstwo\HotelarstwoPlaceBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

class Hotel {
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
     * @ORM\Column(type="integer",nullable=true)
     */
    private $star;
    
     /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $category;
    
      /**
     * @var string
     *
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $description;
    
    /**
     *@ManyToMany(targetEntity="Attraction", inversedBy="hotels")
     *
     */
    private $attraction;
}
