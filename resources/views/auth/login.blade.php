<x-layout>
  <div class="form-container">
    <form action="{{ route('login') }}" method="POST">
      @csrf

      <h2>Login</h2>

      <div>
        <label for="email">Email</label>
        <input type="text" name="email" value="{{ old('email') }}" placeholder="Email" id="email" />
      </div>

      <div>
        <label for="password">Password</label>
        <input type="password" name="password" value="{{ old('password') }}" placeholder="Password" id="password" />
      </div>

      <span>{{ $errors->first() }}</span>

      <button>Submit</button>
    </form>
    <p>Not have an account? <a href="{{ route('register') }}">SignUp</a></p>
  </div>
</x-layout>
