<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - Sistem Kentang</title>
    <style>
        body { font-family: 'Arial', sans-serif; background: #e0f2f1; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .login-card { background: white; padding: 40px; border-radius: 15px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); width: 100%; max-width: 350px; text-align: center; }
        h2 { color: #2e7d32; margin-bottom: 25px; }
        .input-group { margin-bottom: 20px; text-align: left; }
        label { display: block; margin-bottom: 5px; color: #555; font-weight: bold; }
        input { width: 100%; padding: 10px; border: 2px solid #a5d6a7; border-radius: 8px; box-sizing: border-box; font-size: 14px; }
        input:focus { border-color: #2e7d32; outline: none; }
        button { width: 100%; padding: 12px; background: #2e7d32; color: white; border: none; border-radius: 8px; font-size: 16px; font-weight: bold; cursor: pointer; transition: 0.3s; }
        button:hover { background: #1b5e20; }
    </style>
</head>
<body>

    <div class="login-card">
        <h2>Login Mandor Kentang</h2>
        <form>
            <div class="input-group">
                <label>Username / Email</label>
                <input type="text" placeholder="Masukkan username..." required>
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" placeholder="Masukkan password..." required>
            </div>
            <button type="submit">MASUK SYSTEM</button>
        </form>
    </div>

</body>
</html>