<?php

namespace Core;


class Validator
{
    protected $errors = [];

    public function validate($data = [], $rules = [])
    {
        foreach ($data as $fieldName => $value) {
            if (isset($rules[$fieldName])) {
                $this->check([
                    'fieldName' => $fieldName,
                    'value' => $value,
                    'rules' => $rules[$fieldName]
                ]);
            }
        }
        return $this;
    }

    protected function check($field)
    {
        print_arr($field);
    }

    protected function required($value, $rule_value)
    {
        return !empty(trim($value));
    }

    protected function min($value, $rule_value)
    {
        return mb_strlen($value, 'UTF-8') >= $rule_value;
    }

    protected function max($value, $rule_value)
    {
        return mb_strlen($value, 'UTF-8') <= $rule_value;
    }

    protected function email($value, $rule_value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}