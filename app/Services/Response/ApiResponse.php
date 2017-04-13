<?php

namespace App\Services\Response;

class ApiResponse
{
    protected $success          = true;
    protected $is_error         = false;
    protected $response_message = '';
    protected $content          = array();

    public static function create()
    {
        return new self();
    }

    public function setIsError($is_error)
    {
        $this->is_error = (bool) $is_error;
        $this->success = !$this->is_error;
        return $this;
    }

    public function setResponseMessage($response_message)
    {
        $this->response_message = $response_message;
        return $this;
    }

    public function addContent(array $content)
    {
        foreach ($content as $key => $value) {
            if (!in_array($key, ['success', 'is_error', 'response_message'])) {
                $this->content[$key] = $value;
            }
        }
        return $this;
    }

    public function get()
    {
        $response = array(
            'success'           => $this->success,
            'is_error'          => $this->is_error,
            'response_message'  => $this->response_message
        );
        if ($this->content) {
            $response['data']   = $this->content;
        }
        return $response;
    }
}
