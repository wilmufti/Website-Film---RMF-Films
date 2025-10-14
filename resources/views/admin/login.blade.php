<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login Admin</title>
  <style>
    :root { --primary: #1e1e2f; --secondary: #3498db; --light: #ffffff; --dark: #151521; --text: #ecf0f1; --highlight: #2980b9; }
    body { margin: 0; padding: 0; background-color: var(--dark); color: var(--text); font-family: 'Segoe UI', sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; }
    .login-container { background-color: var(--primary); padding: 40px; border-radius: 10px; width: 320px; box-shadow: 0 4px 12px rgba(0,0,0,0.3); }
    h2 { margin-bottom: 25px; text-align: center; color: var(--secondary); }
    label { display: block; margin-bottom: 6px; font-weight: bold; }
    input[type="text"], input[type="password"] { width: 100%; padding: 10px; margin-bottom: 20px; border: none; border-radius: 6px; background-color: #2c2c3e; color: var(--text); box-sizing: border-box; }
    input[type="submit"] { width: 100%; padding: 12px; background-color: var(--highlight); border: none; color: var(--light); font-weight: bold; border-radius: 6px; cursor: pointer; transition: background-color 0.2s; }
    input[type="submit"]:hover { background-color: #2573a6; }
    .error { color: #e74c3c; margin-bottom: 15px; text-align: center; }
    .footer { margin-top: 20px; font-size: 12px; color: #888; text-align: center; }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login Admin</h2>
    @if ($errors->any())
      <div class="error">{{ $errors->first('username') }}</div>
    @endif
    <form method="post" action="{{ route('admin.login') }}">
      @csrf
      <label for="username">Username</label>
      <input type="text" id="username" name="username" value="{{ old('username') }}" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>

      <input type="submit" value="Masuk">
    </form>
    <div class="footer">RMF Admin Panel</div>
  </div>
</body>
</html>