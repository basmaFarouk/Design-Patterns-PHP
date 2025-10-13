<?php

namespace BehavioralDesignPatterns\Memento;


class TextEditor //Originator
{
    private string $content;

    public function __construct()
    {
        $this->content = "";
    }

    public function save(): TextEditorState
    {
        return new TextEditorState($this->content);
    }

    public function restore(?TextEditorState $textEditorState): void
    {
        if ($textEditorState !== null) {
            $this->content = $textEditorState->getContent();
        }
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }
}
