<?php

namespace App\Services\Interfaces;

interface NoteServiceInterface
{
    public function deleteNote(int $id);
    
    public function updateNote(int $id, array $data);
    
    public function getNode(int $id);
    
    public function createNote(int $creatorId, array $data);
    
    public function getAllNotes();
}
