<?php

namespace App\Interfaces;

interface ServiceRepositoryInterface
{
    public function getAll();
    public function getById($id);
    public function delete($id);
    public function create(array $taskDetails);
    public function update($id, array $newDetails);
}
