<?php

namespace Core;

class Validator
{
    protected $errors = [];
    protected $rules_list = ['required', 'min', 'max', 'email'];
    protected $messages = [
        'required' => 'The :fieldName: field is required',
        'min' => 'The :fieldName: field must be a minimum :ruleValue: characters',
        'max' => 'The :fieldName: field must be a maximum :ruleValue: characters',
        'email' => 'Not valid email'
    ];

    public function validate($data = [], $rules = [])
    {
        foreach ($data as $fieldname => $value) {

            if (isset($rules[$fieldname])) {
                $this->check([
                    'fieldname' => $fieldname,
                    'value' => $value,
                    'rules' => $rules[$fieldname]
                ]);
            }
        }
        return $this;
    }

    protected function check($field)
    {
        foreach ($field['rules'] as $rule => $rule_value) {
            if (in_array($rule, $this->rules_list)) {
                if (!call_user_func([$this, $rule], $field['value'], $rule_value)) {
                    $this->addErrors($field['fieldname'],
                        str_replace(
                            [':fieldName:', ':ruleValue:'],
                            [$field['fieldname'], $rule_value],
                            $this->messages[$rule]
                        )
                    );
                }
            }
        }
    }

    protected function addErrors($fieldname, $error)
    {
        $this->errors[$fieldname][] = $error;
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function hasErrors()
    {
        return !empty($this->errors);
    }


    public function listErrors($fieldname)
    {
        $outPut = '';
        if (isset($this->errors[$fieldname])) {
            $outPut .= "<div class='invalid-feedback d-block'><ul class='list-unstyled'>";
            foreach ($this->errors[$fieldname] as $error) {
                $outPut .= "<li>{$error}</li>";
            }
            $outPut .= "</ul></div>";
        }
        return $outPut;
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