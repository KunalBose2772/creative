<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Crea8ve Cool</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://api.fontshare.com/v2/css?f[]=clash-display@400,700,800&display=swap" rel="stylesheet">
    <link href="<?= BASE_URL ?>public/assets/css/main.css" rel="stylesheet">
    <style>
        body {
            background: #fff;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
        .login-card {
            width: 100%;
            max-width: 450px;
            background: #fff;
            border: 4px solid #000;
            box-shadow: 20px 20px 0px #000;
            padding: 50px;
            position: relative;
        }
        .login-card::before {
            content: "SECURE_ZONE";
            position: absolute;
            top: -15px;
            left: 20px;
            background: #000;
            color: #fff;
            padding: 2px 10px;
            font-size: 10px;
            font-weight: 900;
            letter-spacing: 2px;
        }
        .form-control {
            border: 3px solid #000;
            border-radius: 0;
            padding: 15px;
            font-weight: 700;
        }
        .form-control:focus {
            box-shadow: 6px 6px 0px #000;
            border-color: #000;
        }
        .btn-login {
            background: #000;
            color: #fff;
            border: none;
            border-radius: 0;
            padding: 15px;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 2px;
            width: 100%;
            transition: all 0.2s;
        }
        .btn-login:hover {
            transform: translate(-4px, -4px);
            box-shadow: 8px 8px 0px #6A5AE0;
            background: #000;
            color: #fff;
        }
        .brand-text {
            font-family: 'Clash Display';
            font-weight: 800;
            font-size: 24px;
            text-transform: uppercase;
            margin-bottom: 30px;
            display: block;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <span class="brand-text">Crea8ve <span style="color: #6A5AE0;">Cool</span></span>
        <h2 class="fw-900 mb-4 h4">COMMAND CENTER</h2>
        
        <?php if (isset($error)): ?>
            <div class="alert alert-danger border-2 border-dark rounded-0 fw-bold small">
                <?= $error ?>
            </div>
        <?php endif; ?>

        <form method="POST">
            <div class="mb-4">
                <label class="form-label small fw-900 opacity-50 text-uppercase">Identification</label>
                <input type="text" name="username" class="form-control" placeholder="USERNAME" required>
            </div>
            <div class="mb-5">
                <label class="form-label small fw-900 opacity-50 text-uppercase">Verification Code</label>
                <input type="password" name="password" class="form-control" placeholder="••••••••" required>
            </div>
            <button type="submit" class="btn btn-login">Initialize Session</button>
        </form>
    </div>
</body>
</html>
