<?php

namespace App\Services;

use App\Note;
use App\Services\Interfaces\NoteServiceInterface;

class NotesService implements NoteServiceInterface
{

    public function deleteNote(int $id)
    {
        $note = Note::findOrFail($id);
        if(!$note->delete()) {
            throw new \Exception('Something went wrong');
        }
    }

    public function updateNote(int $id, array $data)
    {
        $note = Note::findOrFail($id);

        if (!is_null($data['title'])) {
            $note->title = $data['title'];
        }

        if (!is_null($data['note'])) {
            $note->title = $data['note'];
        }
        if(!$note->save()) {
            throw new \Exception('Something went wrong');
        }

        return $note->id;
    }

    public function getNode(int $id)
    {
        return Note::findOrFail($id);
    }

    public function createNote(int $creatorId, array $data) : int
    {
        $note = new Note();
        $note->title   = $data['title'] ?? null;
        $note->note    = $data['note'] ?? null;
        $note->user_id = $creatorId;
        
        if (!$note->save()) {
            throw new \Exception("Something went wrong");
        }
        
        return $note->id;
    }


    public function getAllNotes()
    {
        return Note::get();
    }
}