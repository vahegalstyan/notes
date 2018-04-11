<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNotes;
use App\Note;
use App\Services\NotesService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * @var NotesService
     */
    private $notesService;

    public function __construct(NotesService $notesService)
    {
        $this->notesService = $notesService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->notesService->getAllNotes();
        //todo in real life we should use paginator
       
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
            $data = $request->all();
            $this->notesService->createNote($request->user()->id, $data);
        } catch (\Exception $e) {
           return new JsonResponse($e->getMessage(), 500);
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
        return $this->notesService->getNode($id);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreNotes $request, $id)
    {
        try {
            $this->notesService->updateNote($id, $request->all());
        } catch (\Exception $e) {
            return new JsonResponse($e->getMessage(), 500);
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
            $this->notesService->deleteNote($id);

        } catch (\Exception $e) {
            return new JsonResponse($e->getMessage(), 500);
        }

        return new JsonResponse('Successfully deleted');
    }
}
