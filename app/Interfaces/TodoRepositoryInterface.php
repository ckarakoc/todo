<?php

namespace App\Interfaces;

interface TodoRepositoryInterface
{
  public function getAllTodos();
  public function getTodoById($todoId);
  public function deleteTodo($todoId);
  public function createTodo(array $todoDetails);
  public function updateTodo($todoId, array $newDetails);
}
