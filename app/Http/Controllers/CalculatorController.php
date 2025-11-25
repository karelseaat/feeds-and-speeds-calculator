<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator');
    }

    public function calculate(Request $request)
    {
        $validated = $request->validate([
            'units' => 'required|in:imperial,metric',
            'cutting_speed' => 'required|numeric|min:0',
            'tool_diameter' => 'required|numeric|min:0',
            'flutes' => 'required|integer|min:1',
            'feed_per_tooth' => 'required|numeric|min:0',
        ]);

        $units = $validated['units'];
        $cuttingSpeed = $validated['cutting_speed'];
        $toolDiameter = $validated['tool_diameter'];
        $flutes = $validated['flutes'];
        $feedPerTooth = $validated['feed_per_tooth'];

        if ($units == 'imperial') {
            // Imperial calculation: SFM, inches
            // RPM = (Cutting Speed * 12) / (PI * Tool Diameter)
            $rpm = ($cuttingSpeed * 12) / (pi() * $toolDiameter);
            // Feed Rate (IPM) = RPM * Number of Flutes * Feed per Tooth
            $feed_rate = $rpm * $flutes * $feedPerTooth;
        } else {
            // Metric calculation: m/min, mm
            // RPM = (Cutting Speed * 1000) / (PI * Tool Diameter)
            $rpm = ($cuttingSpeed * 1000) / (pi() * $toolDiameter);
            // Feed Rate (mm/min) = RPM * Number of Flutes * Feed per Tooth
            $feed_rate = $rpm * $flutes * $feedPerTooth;
        }

        return view('calculator', [
            'rpm' => round($rpm),
            'feed_rate' => round($feed_rate, 2),
            'units' => $units,
            'cutting_speed' => $cuttingSpeed,
            'tool_diameter' => $toolDiameter,
            'flutes' => $flutes,
            'feed_per_tooth' => $feedPerTooth,
        ]);
    }
}
