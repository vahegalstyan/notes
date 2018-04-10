<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNotes;
use App\Note;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //todo in real life we should use paginator
        return Note::get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNotes $request)
    {
        try {
            $note = new Note();
            $note->title = $request->input('title');
            $note->note = $request->input('note');
            $note->user_id = $request->user()->id;

            if (!$note->save()) {
                throw new \Exception('Something went wrong');
            }

        } catch (\Exception $e) {
            var_dump($e->getMessage());die;
        }

        return new JsonResponse("Successfully Created", 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Note::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        try {
            $note = Note::findOrFail($id);

            if (!is_null($request->input('title'))) {
                $note->title = $request->input('title');
            }

            if (!is_null($request->input('note'))) {
                $note->title = $request->input('note');
            }

            if(!$note->save()) {
                throw new \Exception('Something went wrong');
            }
        } catch (\Exception $e) {
            var_dump($e->getMessage());die;
        }


        return new JsonResponse('Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, StoreNotes $request)
    {
        try {
            $note = Note::findOrFail($id);
            if(!$note->delete()) {
                throw new \Exception('Something went wrong');
            }

            return new JsonResponse('Successflly deleted');
        } catch (\Exception $e) {
            //todo in real life we should implement error response in all error cases which we show to end user
            var_dump($e->getMessage());die;
        }


    }
}
