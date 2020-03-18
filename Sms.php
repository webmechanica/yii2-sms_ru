<?php
/**
 * @copyright Aleksandr Zelenin <aleksandr@zelenin.me>
 */
namespace webmechanica\yii\extensions;

use yii\base\Component;
use webmechanica\smsru;

class Sms extends Component
{
    private $sms;
    public $api_id;
    public $login;
    public $password;

    public function init()
    {
        $this->sms = (!empty($this->login) && !empty($this->password))
            ? new smsru($this->api_id, $this->login, $this->password)
            : new smsru($this->api_id);
        parent::init();
    }

    /**
     * @param string $name
     * @param array $parameters
     *
     * @return mixed
     */
    public function __call($name, $parameters)
    {
        return method_exists($this->sms, $name)
            ? call_user_func_array([$this->sms, $name], $parameters)
            : call_user_func_array([$this, $name], $parameters);
    }
}
