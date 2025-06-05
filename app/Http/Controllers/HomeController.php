<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use Illuminate\Database\Eloquent\Collection;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return Response
     */
    public function __invoke(): Response
    {
        return Inertia::render('home', [
            'latestEntries' => $this->latestEntries(),
        ]);
    }

    /**
     * Get the latest entries.
     *
     * @return Collection
     */
    private function latestEntries(): Collection
    {
        return Entry::latest()->take(5)->get();
    }
}
