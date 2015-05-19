<?php

namespace Clay\BladePagination;

use Illuminate\Contracts\Pagination\Paginator as PaginatorContract;
use Illuminate\Contracts\Pagination\Presenter as PresenterContract;
use Illuminate\Pagination\UrlWindow;

class Presenter implements PresenterContract {

    use PreviousNextTrait, LinksTrait;

    /**
     * @param PaginatorContract $paginator
     * @param UrlWindow $window
     */
    public function __construct(PaginatorContract $paginator, UrlWindow $window = null)
    {
        $this->paginator = $paginator;
        $this->window = is_null($window) ? UrlWindow::make($paginator) : $window->get();
    }

    /**
     * Render the given paginator.
     *
     * @return string
     */
    public function render()
    {
        $data = [
            'current'  => $this->paginator->currentPage(),
            'previous' => $this->getPrevious(),
            'links'    => $this->getLinks(),
            'next'     => $this->getNext()
        ];

        $theme = config('pagination.theme', 'bootstrap');

		if ($this->paginator->hasPages())
		{
			return view('pagination::' . $theme, $data)->render();
		}

		return null;
    }

    /**
     * Determine if the underlying paginator being presented has pages to show.
     *
     * @return bool
     */
    public function hasPages()
    {
        return $this->paginator->hasPages();
    }

}