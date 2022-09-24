<?php

namespace App\Repositories\Note;

use App\Repositories\Note\NoteInterface;
use App\Models\note;


class NoteRepository implements NoteInterface
{

    public function store($data)
    {
        
        // $request->safe()->only(['job_id', 'subject', 'description']);
        /*$Note = new Note();

        $Note->job_id = $request->job_id;
        $Note->subject = $request->subject;
        $Note->description = $request->description;
        $Note->created_at = now();

        $Note->save();
        return $Note; */
        // $data['created_at'] = now();

        // return $data;
        return Note::create($data);

    }

    
    /**
     * update the note
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
