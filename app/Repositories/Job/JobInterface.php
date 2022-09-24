<?php

namespace App\Repositories\Job;;

interface JobInterface
{
    public function getAll($request);
    public function get(int $id);
    public function update(array $data, int $id);
}
