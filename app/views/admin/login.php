<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Command Center | Crea8ve Cool</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Jost:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-dark: #030303;
            --accent: #C8A96A; /* Epic Momentos Champagne Gold */
            --accent-glow: rgba(200, 169, 106, 0.15);
        }
        body {
            background-color: var(--bg-dark);
            font-family: 'Montserrat', sans-serif;
            color: #ffffff;
            height: 100vh;
            width: 100vw;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
        }
        /* Glow elements exactly like Epic Momentos */
        .glow-sphere-1 {
            position: absolute;
            top: 20%;
            right: 20%;
            width: 400px;
            height: 400px;
            background: rgba(200, 169, 106, 0.04);
            border-radius: 50%;
            filter: blur(120px);
            pointer-events: none;
            z-index: 1;
        }
        .glow-sphere-2 {
            position: absolute;
            bottom: 20%;
            left: 20%;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.03);
            border-radius: 50%;
            filter: blur(100px);
            pointer-events: none;
            z-index: 1;
        }
        .login-container {
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 440px;
            padding: 20px;
        }
        .login-card {
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 32px;
            padding: 50px 40px;
            backdrop-filter: blur(20px);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.4);
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .login-card:hover {
            border-color: rgba(200, 169, 106, 0.2);
            box-shadow: 0 40px 80px rgba(200, 169, 106, 0.05);
        }
        .brand-text {
            font-family: 'Montserrat', sans-serif;
            font-weight: 900;
            font-size: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
            display: block;
            margin-bottom: 5px;
            color: #ffffff;
        }
        .brand-text span {
            color: var(--accent);
        }
        .subtitle-text {
            font-family: 'Jost', sans-serif;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 3px;
            color: rgba(255, 255, 255, 0.3);
            margin-bottom: 35px;
            display: block;
        }
        .form-label {
            font-weight: 700;
            color: rgba(255, 255, 255, 0.4);
            text-transform: uppercase;
            font-size: 10px;
            letter-spacing: 1.5px;
            margin-bottom: 10px;
        }
        .form-control {
            background: rgba(255, 255, 255, 0.03) !important;
            border: 1px solid rgba(255, 255, 255, 0.1) !important;
            color: #ffffff !important;
            border-radius: 16px !important;
            padding: 14px 20px !important;
            font-size: 14px !important;
            font-weight: 500 !important;
            transition: all 0.3s ease-in-out;
        }
        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.15) !important;
        }
        .form-control:focus {
            border-color: var(--accent) !important;
            box-shadow: 0 0 0 4px var(--accent-glow) !important;
            background: rgba(255, 255, 255, 0.05) !important;
            outline: none !important;
        }
        .btn-login {
            background: var(--accent) !important;
            color: #ffffff !important;
            border: none !important;
            border-radius: 16px !important;
            padding: 14px 20px !important;
            font-weight: 700 !important;
            font-size: 12px !important;
            text-transform: uppercase !important;
            letter-spacing: 2px !important;
            width: 100%;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1) !important;
            margin-top: 10px;
            box-shadow: 0 10px 20px rgba(200, 169, 106, 0.15);
        }
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 30px rgba(200, 169, 106, 0.3);
            background: #ffffff !important;
            color: #000000 !important;
        }
        .alert-premium {
            background: rgba(220, 53, 69, 0.1) !important;
            border: 1px solid rgba(220, 53, 69, 0.2) !important;
            color: #f8d7da !important;
            border-radius: 16px !important;
            padding: 15px 20px !important;
            font-size: 13px !important;
            font-weight: 600 !important;
            margin-bottom: 25px;
        }
    </style>
</head>
<body>
    <div class="glow-sphere-1"></div>
    <div class="glow-sphere-2"></div>

    <div class="login-container">
        <div class="login-card">
            <span class="brand-text">Crea8ve <span>Cool</span></span>
            <span class="subtitle-text">Creative Control Panel</span>
            
            <?php if (isset($error)): ?>
                <div class="alert alert-premium">
                    <i class="bi bi-shield-lock-fill me-2"></i> <?= $error ?>
                </div>
            <?php endif; ?>

            <form method="POST">
                <div class="mb-4">
                    <label class="form-label">Identification</label>
                    <input type="text" name="username" class="form-control" placeholder="USERNAME" required autocomplete="off">
                </div>
                <div class="mb-5">
                    <label class="form-label">Verification Code</label>
                    <input type="password" name="password" class="form-control" placeholder="••••••••" required autocomplete="off">
                </div>
                <button type="submit" class="btn btn-login">Access Console</button>
            </form>
        </div>
    </div>
</body>
</html>
