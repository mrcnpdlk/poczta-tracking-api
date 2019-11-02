<?php
/**
 * Created by Marcin.
 * Date: 02.11.2019
 * Time: 22:26
 */

namespace Mrcnpdlk\Api\PocztaTracking;

use Mrcnpdlk\Lib\ConfigurationOptionsAbstract;

class Config extends ConfigurationOptionsAbstract
{
    /**
     * @var string
     */
    protected $login = 'sledzeniepp';
    /**
     * @var string
     */
    protected $password = 'PPSA';

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     *
     * @return Config
     */
    public function setLogin(string $login): Config
    {
        $this->login = $login;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     *
     * @return Config
     */
    public function setPassword(string $password): Config
    {
        $this->password = $password;

        return $this;
    }
}
