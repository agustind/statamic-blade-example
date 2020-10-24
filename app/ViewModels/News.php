<?php

namespace App\ViewModels;

use Statamic\View\ViewModel;

class News extends ViewModel
{
    public function data(): array
    {
        // Combine content blocks
        $html = collect($this->cascade->get('content'))
                ->implode('text', " ");

        // Remove HTML tags
        $content = strip_tags($html);

        // Calculate stats
        $character_count = strlen($content);
        $word_count      = str_word_count($content);
        $read_time       = ceil($word_count / 200);

        return [
            'character_count' => $character_count,
            'word_count'      => $word_count,
            'read_time'       => $read_time
        ];
    }
}