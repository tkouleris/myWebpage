<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateBlogFiles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blog:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $blog_path = storage_path('data\\blog');
        $page_path = storage_path('data\\blog\\page');
        $tags_path = storage_path('data\\blog\\tags');
        $year_path = storage_path('data\\blog\\year');
        $posts = json_decode(file_get_contents($blog_path."\\blog.json"), true);

        $page_data = [];
        $tag_data = [];
        $year_data = [];
        foreach ($posts as $post){
            $page_data[$post['page']] = $post;
            $tag_data[$post['category']][] = $post;
            $year_data[$post['year']][] = $post;
        }

        file_put_contents($page_path."\\data.json", json_encode($page_data));
        file_put_contents($tags_path."\\data.json", json_encode($tag_data));
        file_put_contents($year_path."\\data.json", json_encode($year_data));

    }
}
