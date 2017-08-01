<?php
namespace App\Http\Composers;
use App\Page;
use Illuminate\Contracts\View\View;
class PageComposer
{
    protected $page;
    public function __construct(Page $page) {
        $this->page = $page;
    }
    public function compose(View $view) {
        $view->with('page', $this->page->all());

    }
}