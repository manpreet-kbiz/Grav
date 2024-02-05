<?php
namespace Grav\Plugin\ApiBlog\Jobs;

use Grav\Common\Grav;
use Grav\Common\Job\Job;

class CrmatsJob extends Job
{
    public function execute()
    {
        // Fetch content from the API and create the blog post here.
        // Example:
        // $apiContent = your_api_request_function();
        // create_blog_post_function($apiContent);

        // For demonstration purposes, let's log a message.
        Grav::instance()['log']->info('Crmats blog post created.');
    }
}
