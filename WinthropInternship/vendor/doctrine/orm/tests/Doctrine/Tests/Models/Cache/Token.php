<?php

namespace Doctrine\Tests\Models\Cache;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Cache("READ_ONLY")
 * @Table("cache_token")
 */
class Token
{
    const CLASSNAME = __CLASS__;

    /**
     * @Id
     * @Column(type="string")
     */
    public $token;

    /**
     * @Column(type="date")
     */
    public $expiresAt;

    /**
     * @OneToOne(targetEntity="Client")
     */
    public $client;

    /**
     * @OneToMany(targetEntity="Login", cascade={"persist", "remove"}, mappedBy="token")
     * @var array
     */
    public $logins;

    /**
     * @ManyToOne(targetEntity="Action", cascade={"persist", "remove"}, inversedBy="tokens")
     * @JoinColumn(name="action_id", referencedColumnName="id")
     * @var array
     */
    public $action;

    /**
     * @ManyToOne(targetEntity="ComplexAction", cascade={"persist", "remove"}, inversedBy="tokens")
     * @JoinColumns({
     *   @JoinColumn(name="complex_action1_id", referencedColumnName="action1_id"),
     *   @JoinColumn(name="complex_action2_id", referencedColumnName="action2_id")
     * })
     * @var ComplexAction
     */
    public $complexAction;

    public function __construct($token, Client $client = null)
    {
        $this->logins    = new ArrayCollection();
        $this->token     = $token;
        $this->client    = $client;
        $this->expiresAt = new \DateTime(date('Y-m-d H:i:s', strtotime("+7 day")));
    }

    /**
     * @param Login $login
     */
    public function addLogin(Login $login)
    {
        $this->logins[] = $login;
        $login->token = $this;
    }

    /**
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @return Action
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return ComplexAction
     */
    public function getComplexAction()
    {
        return $this->complexAction;
    }

}
