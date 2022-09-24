<?php

namespace App\Repositories\Job;;

interface JobInterface
{
    public function getAll($request);
    public function get($id);
    public function update($data, $id);
}
