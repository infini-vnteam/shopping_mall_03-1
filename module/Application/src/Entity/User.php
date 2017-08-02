<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use Application\Entity\Notification;
use Application\Entity\Comment;
use Application\Entity\Order;
use Application\Entity\Rate;
use Application\Entity\Message;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User
{

    /**
     * @ORM\OneToMany(targetEntity="\Application\Entity\Notification", mappedBy="users")
     * @ORM\JoinColumn(name="id", referencedColumnName="user_id")
     */
    protected $notifications;
    /**
     * @ORM\OneToMany(targetEntity="\Application\Entity\Comment", mappedBy="users")
     * @ORM\JoinColumn(name="id", referencedColumnName="user_id")
     */
    protected $comments;
    /**
     * @ORM\OneToMany(targetEntity="\Application\Entity\Order", mappedBy="users")
     * @ORM\JoinColumn(name="id", referencedColumnName="user_id")
     */
    protected $orders;
    /**
     * @ORM\OneToMany(targetEntity="\Application\Entity\Rate", mappedBy="users")
     * @ORM\JoinColumn(name="id", referencedColumnName="user_id")
     */
    protected $rates;
    /**
     * @ORM\OneToMany(targetEntity="\Application\Entity\Message", mappedBy="users")
     * @ORM\JoinColumn(name="id", referencedColumnName="user_id")
     */
    protected $messages;

    /**
     * Constructor.
     */
    public function __construct() 
    {
        $this->notifications = new ArrayCollection();
        $this->comments = new ArrayCollection();
        $this->orders = new ArrayCollection();  
        $this->rates = new ArrayCollection();
        $this->messages = new ArrayCollection();                  
    }

    /**
     * Returns comments for this user.
     * @return array
     */
    public function getComments() 
    {
        return $this->comments;
    }
      
    /**
     * Adds a new comment to this user.
     * @param $comment
     */
    public function addComment($comment) 
    {
        $this->comments[] = $comment;
    }

    /**
     * Returns notifications for this user.
     * @return array
     */
    public function getNotifications() 
    {
        return $this->notifications;
    }
      
    /**
     * Adds a new notification to this user.
     * @param $notification
     */
    public function addComment($notification) 
    {
        $this->notifications[] = $notification;
    }

    /**
     * Returns orders for this user.
     * @return array
     */
    public function getOrders() 
    {
        return $this->orders;
    }
      
    /**
     * Adds a new order to this user.
     * @param $order
     */
    public function addOrder($order) 
    {
        $this->orders[] = $order;
    }

    /**
     * Returns rates for this user.
     * @return array
     */
    public function getRates() 
    {
        return $this->rates;
    }
      
    /**
     * Adds a new rate to this user.
     * @param $rate
     */
    public function addComment($rate) 
    {
        $this->rates[] = $rate;
    }

    /**
     * Returns messages for this user.
     * @return array
     */
    public function getMessages() 
    {
        return $this->messages;
    }
      
    /**
     * Adds a new message to this user.
     * @param $message
     */
    public function addComment($message) 
    {
        $this->messages[] = $message;
    }


    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="id")
     */
    protected $id;

    /**
     * @ORM\Column(name="email")
     */
    protected $email;

    /**
     * @ORM\Column(name="password")
     */
    protected $password;

    /**
     * @ORM\Column(name="level")
     */
    protected $level;

    /**
     * @ORM\Column(name="phone")
     */
    protected $phone;

    /**
     * @ORM\Column(name="name")
     */
    protected $name;

    /**
     * @ORM\Column(name="address")
     */
    protected $address;

    /**
     * @ORM\Column(name="status")
     */
    protected $status;

    /**
     * @ORM\Column(name="token")
     */
    protected $token;

    // Returns ID of this post.
    public function getId() 
    {
        return $this->id;
    }

    // Sets ID of this post.
    public function setId($id) 
    {
        $this->id = $id;
    }

    public function getEmail() 
    {
        return $this->email;
    }

    public function setEmail($email) 
    {
        $this->email = $email;
    }

    public function getPassword() 
    {
        return $this->password;
    }

    public function setPassword($password) 
    {
        $this->password = $password;
    }

    public function getLevel() 
    {
        return $this->level;
    }

    public function setLevel($level) 
    {
        $this->level = $level;
    }

    public function getPhone() 
    {
        return $this->phone;
    }

    public function setPhone($phone) 
    {
        $this->phone = $phone;
    }

    public function getName() 
    {
        return $this->name;
    }

    public function setName($name) 
    {
        $this->name = $name;
    }

    public function getAddress() 
    {
        return $this->address;
    }

    public function setAddress($address) 
    {
        $this->address = $address;
    }

    public function getStatus() 
    {
        return $this->status;
    }

    public function setStatus($status) 
    {
        $this->status = $status;
    }

    public function getToken() 
    {
        return $this->token;
    }

    public function setToken($token) 
    {
        $this->token = $token;
    }
}
