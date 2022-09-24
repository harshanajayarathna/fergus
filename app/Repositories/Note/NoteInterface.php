<?php

namespace App\Repositories\Note;;

interface NoteInterface
{
    public function store(array $data);
    public function update(array $data, int $id);
}
