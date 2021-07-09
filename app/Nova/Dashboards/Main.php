<?php

namespace App\Nova\Dashboards;

use Laravel\Nova\Dashboard;

class Main extends Dashboard
{
    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        return [
            Metrics\PostCountOverTime::make(),
            Metrics\PostCountByUser::make(),
            Metrics\PostCount::make(),
        ];
    }

    /**
     * Get the displayable name of the dashboard.
     *
     * @return string
     */
    public static function label()
    {
        return 'Main Stats';
    }

    /**
     * Get the URI key for the dashboard.
     *
     * @return string
     */
    public static function uriKey()
    {
        return 'main-dashboard';
    }
}
