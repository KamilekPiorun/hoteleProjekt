<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Hotelarstwo\HotelarstwoPlaceBundle\Entity;

/**
 * Description of Room
 *
 * @author Kamil
 */
class Room {
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
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $number;
    
    /**
     *
     * @ORM\Column(type="boolean")
     */
    private $bathroom;
    
     /**
     *
     * @ORM\Column(type="boolean")
     */
    private $busy;
    
    
}
