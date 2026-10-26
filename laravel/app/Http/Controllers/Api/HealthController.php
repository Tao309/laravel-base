<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class HealthController extends ApiController
{
    public function healthCheck(): JsonResponse
    {
        $success = true;
        $redisStatus = false;
        $dbStatus = false;

        try {
            $redisStatus = Redis::connection()->ping();
        } catch (\Throwable) {
            $success = false;
        }

        try {
            $dbStatus = (bool) DB::connection()->getDatabaseName();
        } catch (\Throwable) {
            $success = false;
        }

        return $this->json([
            'success' => $success,
            'db_status' => $dbStatus,
            'redis_status' => $redisStatus,
        ]);
    }
}
