<?php

namespace Memento;

class History
{
    private array $prevStates;
    private array $nextStates;

    public function __construct()
    {
        $this->prevStates = [];
        $this->nextStates = [];
    }

    public function saveHistoryState(TextEditorState $textEditorState): void
    {
        $this->prevStates[] = $textEditorState;
        // Clear redo stack when a new state is saved
        $this->nextStates = [];
    }

    public function undo(): ?TextEditorState
    {
        if (!empty($this->prevStates)) {
            $state = array_pop($this->prevStates);
            $this->nextStates[] = $state;
            return $state;
        }
        return null;
    }

    public function redo(): ?TextEditorState
    {
        if (!empty($this->nextStates)) {
            $state = array_pop($this->nextStates);
            $this->prevStates[] = $state;
            return $state;
        }
        return null;
    }
}

