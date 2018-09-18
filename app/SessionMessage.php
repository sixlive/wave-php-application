<?php

namespace App;

class SessionMessage
{
    public $type = '';
    public $flash = false;
    public $message = '';
    public $style = '';

    public function info($message = '')
    {
        $this->type = __METHOD__;
        $this->style = 'bg-blue-lightest text-blue';
        $this->message = $message;

        return $this;
    }

    public function success($message = '')
    {
        $this->type = __METHOD__;
        $this->style = 'bg-green-lightest text-green';
        $this->message = $message;

        return $this;
    }

    public function flash()
    {
        $this->flash = true;

        return $this;
    }
}
