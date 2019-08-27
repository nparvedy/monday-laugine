<?php

/**
 * Class User
 */
class User
{
    /**
     * @string
     */
    private $_id;

    /**
     * @string sha1 Encrypted
     */
    private $_password;

    /**
     * Constructor by id & password 
     */
    function __construct($id, $password)
    {
        $this->_password = $password;
        $this->_id = $id;
    }

    /**
     * Getter for _password
     *
     * @return [string]
     */
    public function get_password()
    {
        return $this->_password;
    }

    /**
     * Setter for _password
     * @var [string] _password
     *
     * @return self
     */
    public function set_password($_password)
    {
        $this->_password = $_password;
        return $this;
    }

    /**
     * Getter for _id
     *
     * @return [string]
     */
    public function get_id()
    {
        return $this->_id;
    }

    /**
     * Setter for _id
     * @var [string] _id
     *
     * @return self
     */
    public function set_id($_id)
    {
        $this->_id = $_id;
        return $this;
    }
}

/**
 * Un jeu de donnée d'utilisateurs que vous pouvez completer :) 
 * en commentaire après le mot de passe encrypté : le mot de passe en clair
 * @type Array(User)
 */
$userDatabase = 
[
    new User("yannis", "cdcac09f99748621db9db81b819399f401d7837b" /*gofckurself*/),
    new User("miak", "dd1752d19ec808faa1f604d1d72f72b693f8b8eb" /*bigpussy*/),
    new User("teamOM", "7b68f7b599e5d53beaa22e9de55519bc9fcf5e92" /*fckParis*/),
];