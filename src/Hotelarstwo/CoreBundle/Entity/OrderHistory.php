<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Hotelarstwo\HotelarstwoCoreBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Description of OrderHistory
 *
 * @author Kamil
 */
class OrderHistory {
    /**
     * @var float
     *
     * @ORM\Column(name="order_price_summary", type="float", precision=10, scale=0, nullable=true)
     */
    private $orderPriceSummary;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="order_date", type="datetime", nullable=true)
     */
    private $orderDate;

    /**
     * @var string
     *
     * @ORM\Column(name="hotel_name", type="string", length=50, nullable=true)
     */
    private $hotelName;

    /**
     * @var integer
     *
     * @ORM\Column(name="room_type", type="integer", nullable=true)
     */
    private $roomType;

    
  
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
}
