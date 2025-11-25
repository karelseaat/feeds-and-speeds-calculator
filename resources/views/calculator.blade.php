<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feeds and Speeds Calculator</title>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; background-color: #f4f4f4; }
        .container { background: #fff; padding: 2rem; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); width: 100%; max-width: 400px; }
        h1 { text-align: center; color: #333; }
        .form-group { margin-bottom: 1rem; }
        label { display: block; margin-bottom: 0.5rem; color: #555; }
        input, select { width: 100%; padding: 0.5rem; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        button { width: 100%; padding: 0.75rem; background-color: #007bff; color: #fff; border: none; border-radius: 4px; cursor: pointer; font-size: 1rem; }
        button:hover { background-color: #0056b3; }
        .results { margin-top: 2rem; }
        .results h2 { text-align: center; color: #333; }
        .results p { background: #e9e9e9; padding: 1rem; border-radius: 4px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Feeds and Speeds Calculator</h1>
        <form action="/calculator" method="POST">
            @csrf
            <div class="form-group">
                <label for="units">Units</label>
                <select id="units" name="units">
                    <option value="imperial" {{ (isset($units) && $units == 'imperial') || !isset($units) ? 'selected' : '' }}>Imperial</option>
                    <option value="metric" {{ (isset($units) && $units == 'metric') ? 'selected' : '' }}>Metric</option>
                </select>
            </div>
            <div class="form-group">
                <label for="cutting_speed" id="cutting_speed_label">Cutting Speed (SFM)</label>
                <input type="number" id="cutting_speed" name="cutting_speed" value="{{ $cutting_speed ?? '' }}" required>
            </div>
            <div class="form-group">
                <label for="tool_diameter" id="tool_diameter_label">Tool Diameter (inches)</label>
                <input type="number" step="0.001" id="tool_diameter" name="tool_diameter" value="{{ $tool_diameter ?? '' }}" required>
            </div>
            <div class="form-group">
                <label for="flutes">Number of Flutes</label>
                <input type="number" id="flutes" name="flutes" value="{{ $flutes ?? '' }}" required>
            </div>
            <div class="form-group">
                <label for="feed_per_tooth" id="feed_per_tooth_label">Feed per Tooth (inches)</label>
                <input type="number" step="0.0001" id="feed_per_tooth" name="feed_per_tooth" value="{{ $feed_per_tooth ?? '' }}" required>
            </div>
            <button type="submit">Calculate</button>
        </form>
        @if(isset($rpm) && isset($feed_rate))
        <div class="results">
            <h2>Results</h2>
            <p><strong>Spindle Speed (RPM):</strong> {{ $rpm }}</p>
            <p><strong>Feed Rate (<span id="feed_rate_unit">{{ $units == 'metric' ? 'mm/min' : 'IPM' }}</span>):</strong> {{ $feed_rate }}</p>
        </div>
        @endif
    </div>

    <script>
        document.getElementById('units').addEventListener('change', function() {
            var units = this.value;
            if (units === 'metric') {
                document.getElementById('cutting_speed_label').textContent = 'Cutting Speed (m/min)';
                document.getElementById('tool_diameter_label').textContent = 'Tool Diameter (mm)';
                document.getElementById('feed_per_tooth_label').textContent = 'Feed per Tooth (mm)';
            } else {
                document.getElementById('cutting_speed_label').textContent = 'Cutting Speed (SFM)';
                document.getElementById('tool_diameter_label').textContent = 'Tool Diameter (inches)';
                document.getElementById('feed_per_tooth_label').textContent = 'Feed per Tooth (inches)';
            }
        });
        // Trigger change event on page load to set initial labels
        document.getElementById('units').dispatchEvent(new Event('change'));
    </script>
</body>
</html>
