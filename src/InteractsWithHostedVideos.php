<?php

namespace Artificertech\LaravelHostedVideos;

use Artificertech\LaravelHostedVideos\Models\HostedVideo;
use Artificertech\LaravelHostedVideos\Models\Video;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait InteractsWithHostedVideos
{
    /**
     * @return mixed
     */
    public function hostedVideos(): MorphMany
    {
        return $this->morphMany(config('hosted-videos.video_model'), 'model');
    }
}