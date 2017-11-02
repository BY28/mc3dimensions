<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CommentRepository;

class CommentsController extends Controller
{
    protected $commentRepository;

    public function __construct(CommentRepository $commentRepository)
    {
    	$this->commentRepository = $commentRepository;
    }

    public function index(Request $request, $pass)
    {
        if($pass == "mc3dimensions-comments")
        {
            $comments = $this->commentRepository->comments();

            return view('comments.index', compact('comments'));
        }
        else
        {
            return view('comments.create');
        }
    }

    public function show()
    {
        return view('comments.create');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'message' => 'required|min:4|max:1024',
        ]);
        
        $inputs['content'] = $request->input('message');
    	$this->commentRepository->store($inputs);

    	return view('comments.thanks');
    }

}
