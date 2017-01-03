<?php

namespace App\Http\Controllers;

use App\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function index()
    {
        $topics = Topic::orderBy('created_at', 'desc')->get();

        return view('topic.index', compact('topics'));
    }

    public function show(Topic $topic)
    {
        return view('topic.show', compact('topic'));
    }
}
