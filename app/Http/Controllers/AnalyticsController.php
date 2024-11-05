<?php

namespace App\Http\Controllers;

use Spatie\Analytics\Facades\Analytics;
use Spatie\Analytics\Period;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class AnalyticsController extends Controller
{
    public function showUserStats()
    {
        try {
            // Fetch today's users
            $todayUsers = Analytics::getAnalyticsService()
                ->runReport([
                    'metrics' => ['activeUsers'],
                    'dateRanges' => [
                        [
                            'startDate' => Carbon::today()->toDateString(),
                            'endDate' => Carbon::today()->toDateString(),
                        ],
                    ],
                ]);

            $todayUserCount = $this->getMetricValue($todayUsers, 'activeUsers');

            // Fetch total users
            $totalUsers = Analytics::getAnalyticsService()
                ->runReport([
                    'metrics' => ['activeUsers'],
                    'dateRanges' => [
                        [
                            'startDate' => '2000-01-01', // set to earliest date
                            'endDate' => Carbon::today()->toDateString(),
                        ],
                    ],
                ]);

            $totalUserCount = $this->getMetricValue($totalUsers, 'activeUsers');

            return view('analytics.stats', compact('todayUserCount', 'totalUserCount'));

        } catch (\Exception $e) {
            // Log the error message
            Log::error('Error fetching analytics data: ' . $e->getMessage());
            return view('analytics.stats', [
                'todayUserCount' => 0,
                'totalUserCount' => 0,
                'error' => 'Unable to fetch analytics data.',
            ]);
        }
    }

    private function getMetricValue($report, $metricName)
    {
        return $report->rows[0]->metricValues[0]->value ?? 0;
    }
}
