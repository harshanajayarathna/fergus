<?php

namespace App\Repositories\Note;;

interface NoteInterface
{
    public function store($request);
    public function update(array $data, int $id);
}
