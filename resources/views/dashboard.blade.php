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
        <h4>Cholesterol</h4>
        <p>166 mg/di</p>
        <p>Dropped 53%</p>
      </div>
      <div>
        <h4>Heart Rate</h4>
        <p>98 bpm</p>
        <p>Increased 53%</p>
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
