<?php


namespace Cms;


use Cms\Model\Listuser;

class Cms
{
    public function index()
    {
        return ["reza","Ahmad"];
    }

    public function listUsers()
    {
        return Listuser::all();
    }
}
