<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\Note\StoreRequest;
use App\Http\Requests\Note\UpdateRequest;
use App\Repositories\Note\NoteRepository;

class NoteController extends Controller
{    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $NoteRepository = new NoteRepository();
        return response()->json($NoteRepository->store($request->safe()->only(['job_id', 'subject', 'description'])));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $NoteRepository = new NoteRepository();
        
        return response()->json($NoteRepository->update($request->safe()->only(['job_id', 'subject', 'description']), $id));
    }
    
}
