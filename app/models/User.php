<?php

class User extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $cd_user;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    public $no_name;

    /**
     *
     * @var string
     * @Column(type="string", length=85, nullable=false)
     */
    public $dc_email;

    /**
     *
     * @var string
     * @Column(type="string", length=128, nullable=false)
     */
    public $dc_password;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=false)
     */
    public $id_status;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("phalcon");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'user';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return User[]|User
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return User
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
