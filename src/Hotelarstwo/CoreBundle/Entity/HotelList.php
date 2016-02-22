<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Hotelarstwo\HotelarstwoCoreBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Description of HotelList
 *
 * @author Kamil
 */
class HotelList {
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    /**
     *
     * @ORM\Column(name="name", type="integer")
     */
    
    protected $name;
    
    /**
     *
     * @ORM\Column(name="stars", type="integer")
     */
    
    protected $stars;
}
