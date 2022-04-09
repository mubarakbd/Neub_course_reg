<?php

namespace App\Interfaces;

interface IBaseRepository
{
    public function get();
    public function paginate();
    public function find($id);
    public function delete($id);
}
