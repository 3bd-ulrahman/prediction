<x-layout>
  <div class="form-container">
    <form action="{{ route('register') }}" method="POST">
      @csrf

      <h2>SignUp</h2>

      <div>
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" value="{{ old('first_name') }}" placeholder="first name" id="first-name" />
        <span>
          @error('first_name')
            {{ $message }}
          @enderror
        </span>
      </div>

      <div>
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" value="{{ old('last_name') }}" placeholder="last name" id="last-name" />
        <span>
          @error('last_name')
            {{ $message }}
          @enderror
        </span>
      </div>

      <div>
        <label for="last_name">Age</label>
        <input type="text" name="age" value="{{ old('age') }}" placeholder="Age" id="age" />
        <span>
          @error('age')
            {{ $message }}
          @enderror
        </span>
      </div>

      <div>
        <label for="gender">Enter Your Gender</label>
        <select name="gender" id="gender" value="{{ old('gender') }}">
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
      </div>
      <span style="color: red; font-size: 0.8rem;">
        @error('gender')
          {{ $message }}
        @enderror
      </span>

      <div>
        <label for="email">Email</label>
        <input type="text" name="email" value="{{ old('email') }}" placeholder="Email" id="email" />
        <span>
          @error('email')
            {{ $message }}
          @enderror
        </span>
      </div>
      <div>
        <label for="password">Password</label>
        <input type="password" name="password" value="{{ old('password') }}" placeholder="Password" id="password" />
        <span>
          @error('password')
            {{ $message }}
          @enderror
        </span>
      </div>

      <div>
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation"
          value="{{ old('password_confirmation') }}"
          placeholder="Confirm password" id="password"
        />
        <span>
          @error('password_confirmation')
            {{ $message }}
          @enderror
        </span>
      </div>

      <p class="sign-up-warning">
        By clicking the Signup button, you agree to join us
        <a>Team and condition</a>
        and
        <a>Policy and Privacy</a>
      </p>

      <button>Submit</button>
    </form>
    <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
  </div>
</x-layout>
