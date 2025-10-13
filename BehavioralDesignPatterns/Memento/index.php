<?php

namespace BehavioralDesignPatterns\Memento;


// Usage example
$editor = new TextEditor();
$history = new History();

$editor->setContent("Hello");
$history->saveHistoryState($editor->save());
echo "Current content: {$editor->getContent()}\n";

$editor->setContent("Hello, World!");
$history->saveHistoryState($editor->save());
echo "Current content: {$editor->getContent()}\n";

$editor->restore($history->undo());
echo "After undo: {$editor->getContent()}\n";

$editor->restore($history->redo());
echo "After redo: {$editor->getContent()}\n";

$editor->setContent("New content");
$history->saveHistoryState($editor->save());
echo "Current content: {$editor->getContent()}\n";

$editor->restore($history->undo());
echo "After undo: {$editor->getContent()}\n";

$editor->restore($history->redo());
echo "After redo: {$editor->getContent()}\n";

// Output:
// Current content: Hello
// Current content: Hello, World!
// After undo: Hello
// After redo: Hello, World!
// Current content: New content
// After undo: Hello, World!
// After redo: New content
