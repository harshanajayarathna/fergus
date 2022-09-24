<?php

namespace App\Repositories\Note;

use App\Repositories\Note\NoteInterface;
use App\Models\note;


class NoteRepository implements NoteInterface
{
    /**
     * This function save the note in database
     *
     * @param [type] $data
     * @return void
     */
    public function store(array $data)
    {
        return Note::create($data);
    }


    /**
     * This function save the note in database
     *
     * @param [type] $data
     * @param [type] $id
     * @return void
     */
    public function update(array $data, int $id)
    {
        Note::whereId($id)->update($data);
        return Note::find($id);
    }
}
