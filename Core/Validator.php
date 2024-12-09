<?php

namespace Core;


class Validator
{
    protected $errors = [];

    public function validate($data = [], $rules = [])
    {
       print_arr($data);
       print_arr($rules);
    }
}