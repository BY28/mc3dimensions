<?php

namespace App\Repositories;

use App\Comment;

class CommentRepository extends ResourceRepository
{

	public function __construct(Comment $comment)
	{
		$this->model = $comment;
	}

	public function comments()
	{
		return $this->model->get();
	}
}