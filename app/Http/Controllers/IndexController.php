<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function index()
    {
        $badges = [
            'engit' => ['Laravel 8', 'Php 7.4', 'PhpUnit', 'Elastic search', 'Percona', 'Docker', 'Linux', 'Git'],
            'micromania' => ['Php 5/Php 7', 'PhpUnit', 'Elastic search', 'Kibana', 'MySQL', 'Docker', 'Linux', 'Git'],
            'airbus' => ['Google Cloud', 'Bash', 'Python', 'Linux', 'Git'],
            'orange' => ['Php', 'PhpUnit', 'MySQL', 'Linux', 'Svn / Git', 'Apache'],
        ];

        return view('index', compact('badges'));
    }
}
