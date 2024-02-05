<?php

use Grav\Common\Grav;
use Grav\Common\Twig\TwigExtension;

class DaysAgoExtension extends \Twig\Extension\AbstractExtension
{
    public function getFilters()
    {
        return [
            new \Twig\TwigFilter('days_ago', [$this, 'daysAgoFilter']),
        ];
    }

    public function daysAgoFilter($dateTime)
    {
        // Convert the date string to a DateTime object
        $date = new \DateTime($dateTime);

        // Get the current date and time
        $now = new \DateTime();

        // Calculate the difference in days
        $interval = $now->diff($date);
        $daysAgo = $interval->days;

        return $daysAgo . ' days ago';
    }
}
$grav = Grav::instance();
/* $grav['twig']->twig->addExtension(new DaysAgoExtension());
$grav = Grav::instance(); */

if ($grav['twig'] !== null) {
	
    $grav['twig']->twig->addExtension(new DaysAgoExtension());
}




?>
