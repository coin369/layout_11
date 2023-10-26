<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use SEO\Seo;
use App\Model\News as DTNews;
use App\Model\News_Cate as DTNewsCate;
class News implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $post;

    /**
     * Create a new job instance.
     *
     * @param Post $post
     */
    public function __construct(DTNews $post)
    {
        $this->post = $post;
    }


    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Seo::save($this->post, route('news.cate',['alias'=> $this->post->alias]), [
            'title' => $this->post->name,
        ]);
        //
    }
}




