<?php

namespace Jestrux\Blogger\View\Components;

use Illuminate\View\Component;

class Read extends Component
{
    public $id;
    public $publishedOnly;

    public function __construct($id, $publishedOnly = false)
    {
        $this->id = $id;
        $this->publishedOnly = $publishedOnly;
    }

    public function render()
    {
        return view('blogger::components.read');
    }
}
