<x-layout>
  <div class="user-info">
    <div class="content-container">
      <h1>Hi, {{ auth()->user()->first_name }}</h1>
      <p>Mon, 29 March</p>
    </div>
  </div>

  <div class="content-container">
    <div class="grid-container">
      <div>
        <h4>ECG</h4>
        <p>{{ $predictions->last()->resting_ecg_result }} bPm</p>
        <p>
          {{ $predictions->last()->resting_ecg_result > $predictions->nth($predictions->count() - 2)->last()->resting_ecg_result ? 'Increased' :  'Decreased'}}
          {{ calculatePercentage($predictions, 'resting_ecg_result') }}%
        </p>
      </div>
      <div>
        <h4>Oxygen</h4>
        <p>166 mg/di</p>
        <p>
          {{ $predictions->last()->oxygen > $predictions->nth($predictions->count() - 2)->last()->oxygen ? 'Increased' :  'Decreased'}}
          {{ calculatePercentage($predictions, 'oxygen') }}%
        </p>
      </div>
      <div>
        <h4>Heart Rate</h4>
        <p>{{ $predictions->last()?->max_heart_rate }} bpm</p>
        <p>
          {{ $predictions->last()->max_heart_rate > $predictions->nth($predictions->count() - 2)->last()->max_heart_rate ? 'Increased' :  'Decreased'}}
          {{ calculatePercentage($predictions, 'max_heart_rate') }}%
        </p>
      </div>
    </div>

    <div class="charts-container">
      <div class="container">
        <h3>Report</h3>
        <div class="chart">
          <canvas id="myChart1"></canvas>
        </div>
      </div>

      <div class="container">
        <h3>Report</h3>
        <div class="chart">
          <canvas id="myChart2"></canvas>
        </div>
      </div>
    </div>
  </div>

  {{-- @php
    echo "<script>
      let predictions = $predictions;
    </script>";
  @endphp --}}
  <script>
    let predictions = @json($predictions);
  </script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="{{ asset('assets/chart.js') }}"></script>
</x-layout>
