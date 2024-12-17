<?php

namespace s1kopath\ArtisanTerminal\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ArtisanTerminalController extends Controller
{
    public function execute(Request $request)
    {
        $command = $request->input('command');
        try {
            Artisan::call($command);
            $output = Artisan::output();

            return response()->json([
                'status' => 'success',
                'output' => $output,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'output' => $e->getMessage(),
            ]);
        }
    }
}
