<?php

namespace App\Http\Controllers\keeper;

use App\Http\Resources\keeper\HealthCollection;
use App\Models\keeper\KeeperHealth;
use Illuminate\Http\Request;

class HealthController extends BaseController
{
    public function index(Request $request): HealthCollection
    {
        return new HealthCollection(KeeperHealth::where('name', $request?->name)->get());
    }
}
