<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use App\Http\Resources\PodcastResource;

class PodcastController extends Controller
{
    public function index()
    {
        $podcasts = Podcast::latest()->paginate(2);

        return PodcastResource::collection($podcasts);
    }

    public function show($id)
    {
        $podcast = Podcast::find($id);

        if ($podcast === null) {
            return response(null, 404);
        }

        return new PodcastResource($podcast);
    }
}
