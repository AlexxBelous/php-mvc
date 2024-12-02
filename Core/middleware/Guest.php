<?php

namespace Core\middleware;

class Guest
{
    public function handle()
    {
        if (check_auth()) {
            redirect('/');
        }
    }
}