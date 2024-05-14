<x-layout>
  <div class="form-container">
    <form action="{{ route('Predictions.store') }}" method="POST">
      @csrf
      <h2>User Information</h2>

      <div>
        <label for="bloodPressure">Resting blood Pressure (in mm Hg on admission to the hospital)
        </label>
        <input type="number" name="resting_blood_pressure" value="{{ old('resting_blood_pressure') }}" placeholder="Your blood Pressure" id="bloodPressure" />
      </div>
      <span style="color: red; font-size: 0.8rem;">
        @error('resting_blood_pressure')
          {{ $message }}
        @enderror
      </span>

      <div>
        <label for="cholesterol">Serum Cholesterol in mg/dl</label>
        <input name="serum_cholestoral" type="number" value="{{ old('serum_cholestoral') }}" placeholder="Cholesterol" id="cholesterol" />
      </div>
      <span style="color: red; font-size: 0.8rem;">
        @error('serum_cholestoral')
          {{ $message }}
        @enderror
      </span>

      <div>
        <label for="sugar">Fasting blood sugar> 120mg/id</label>
        <select name="fasting_blood_sugar" value="{{ old('fasting_blood_sugar') }}" id="sugar">
          <option value="0">Yes</option>
          <option value="1">No</option>
        </select>
      </div>
      <span style="color: red; font-size: 0.8rem;">
        @error('fasting_blood_sugar')
          {{ $message }}
        @enderror
      </span>

      <div>
        <label for="ECG">Rest ECG result</label>
        <select name="resting_ecg_result" value="{{ old('resting_ecg_result') }}" id="ECG">
          <option value="1">Normal</option>
          <option value="0">Not Normal</option>
        </select>
      </div>
      <span style="color: red; font-size: 0.8rem;">
        @error('resting_ecg_result')
          {{ $message }}
        @enderror
      </span>

      <div>
        <label for="hearRate">Maximum hear rate achieved during ECG</label>
        <input type="number" name="max_heart_rate" value="{{ old('max_heart_rate') }}" placeholder="Max hear rate" id="hearRate" />
      </div>
      <span style="color: red; font-size: 0.8rem;">
        @error('max_heart_rate')
          {{ $message }}
        @enderror
      </span>

      <div>
        <label for="chestPain">Chest pain during exercise</label>
        <select name="exercise_induced_angina" value="{{ old('exercise_induced_angina') }}" id="chestPain">
          <option value="1">Yes</option>
          <option value="0">No</option>
        </select>
      </div>
      <span style="color: red; font-size: 0.8rem;">
        @error('exercise_induced_angina')
          {{ $message }}
        @enderror
      </span>

      <div>
        <label for="chestPainType">Chest pain Type</label>
        <select name="chest_pain_type" value="{{ old('chest_pain_type') }}" id="chestPainType">
          <option value="0">Not chest pain</option>
          <option value="1">Type Here</option>
        </select>
      </div>
      <span style="color: red; font-size: 0.8rem;">
        @error('chest_pain_type')
          {{ $message }}
        @enderror
      </span>

      <button type="submit">Submit</button>
    </form>
  </div>
</x-layout>
