<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
    <title>HGIC CHATPLAT4M Sign_Up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/form.css">
    <style>
        body {
            min-height: 100vh;
            background: #f5f6fa;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Roboto', sans-serif;
        }
        .card {
            background: rgba(255,255,255,0.7);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.18);
            backdrop-filter: blur(8px);
            border-radius: 1.5rem;
            border: 1px solid rgba(255,255,255,0.3);
            font-family: 'Roboto', sans-serif;
            transition: box-shadow 0.3s;
            width: 100%;
            max-width: 35rem;
            margin: 0 auto;
        }
        .card:hover {
            box-shadow: 0 16px 40px 0 rgba(31, 38, 135, 0.25);
        }
        .form-floating-label {
            position: relative;
            margin-bottom: 1.5rem;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }
        .form-floating-label input,
        .form-floating-label select {
            width: 100%;
            padding: 1.2rem 1rem 0.5rem 1rem;
            border: 1px solid #ccc;
            border-radius: 0.5rem;
            background: transparent;
            outline: none;
            font-size: 1rem;
            transition: border-color 0.2s;
            position: relative;
            z-index: 1;
        }
        .form-floating-label input:focus,
        .form-floating-label select:focus {
            border-color: #6c63ff;
        }
        .form-floating-label label {
            position: absolute;
            top: 1.1rem;
            left: 1rem;
            color: #888;
            font-size: 1rem;
            pointer-events: none;
            background: transparent;
            transition: all 0.2s;
            z-index: 3;
            padding: 0 0.3rem;
        }
        .form-floating-label input:not(:placeholder-shown):not([type="password"]),
        .form-floating-label input:focus,
        .form-floating-label select:focus,
        .form-floating-label select:not([value="None"]) {
            background: transparent;
        }
        .form-floating-label input:focus + label,
        .form-floating-label input:not(:placeholder-shown) + label,
        .form-floating-label select:focus + label,
        .form-floating-label select:not([value="None"]) + label {
            top: -0.70rem;
            left: 1.2rem;
            font-size: 0.95rem;
            color: #6c63ff;
            background: white;
            padding: 0 0.2rem;
            border-radius: 0.3rem;
            z-index: 5;
            line-height: 1;
            box-shadow: 0 0 0 0.15rem white;
        }
        .btn-primary {
            background: #6c63ff;
            border: none;
            border-radius: 2rem;
            font-weight: 600;
            font-size: 1.1rem;
            transition: background 0.3s, transform 0.2s;
            box-shadow: 0 2px 8px rgba(76, 110, 245, 0.12);
            color: #fff;
            width: 20rem;
        }
        .btn-primary:hover {
            background: #554ee2;
            transform: translateY(-2px) scale(1.03);
        }
        .form-control, .form-select {
            box-shadow: none !important;
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .card {
            animation: fadeInUp 0.8s cubic-bezier(.39,.575,.565,1) both;
        }
        p{
            margin-bottom: 1rem;
            color: #555;
            font-size: 0.9rem;
            text-align: center;
        }
        a {
            color: #6c63ff;
            text-decoration: none;
            font-size: 0.9rem;
        }
        @media (max-width: 768px) {
            .card {
                max-width: 95vw;
                padding: 1.5rem 0.5rem;
            }
            .form-floating-label input,
            .form-floating-label select {
                font-size: 0.98rem;
                padding: 1rem 0.7rem 0.5rem 0.7rem;
            }
        }
        @media (max-width: 480px) {
            body {
                padding: 0.5rem;
            }
            .card {
                max-width: 100vw;
                border-radius: 0.7rem;
                padding: 1rem 0.2rem;
            }
            h2 {
                font-size: 1.3rem;
            }
            .btn-primary {
                font-size: 1rem;
                padding: 0.7rem 0.5rem;
            }
        }
    </style>
</head>
<body>
<section class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="form-processor.php" method="POST" class="card p-4 shadow">
                <h2 class="mb-4 text-center">Sign Up</h2>
                <p>Please fill in this form to create an account.</p>
                <div class="form-floating-label">
                    <input type="text" class="form-control" id="FirstName" name="firstname" placeholder=" " required>
                    <label for="FirstName">First Name</label>
                </div>
                <div class="form-floating-label">
                    <input type="text" class="form-control" id="LastName" name="lastname" placeholder=" " required>
                    <label for="LastName">Last Name</label>
                </div>
                <div class="form-floating-label">
                    <input type="email" class="form-control" id="email" name="email" placeholder=" " required>
                    <label for="email">Email</label>
                </div>
                <div class="form-floating-label">
                    <select id="role" name="role" class="form-select" required>
                        <option value="None">None</option>
                        <option value="Comportment Prefect">Comportment Prefect</option>
                        <option value="Comportment Monitor">Comportment Monitor</option>
                        <option value="Compound Prefect">Compound Prefect</option>
                        <option value="Compound Monitor">Compound Monitor</option>
                        <option value="Dinning-Hall Prefect">Dinning-Hall Prefect</option>
                        <option value="Dinning Monitor">Dinning-Hall Monitor</option>
                        <option value="Prep & Library Prefect">Prep & Library Prefect</option>
                        <option value="Prep & Library Monitor">Prep & Library Monitor</option>
                        <option value="CAS Prefect">CAS Prefect</option>
                        <option value="CAS Monitor">CAS Monitor</option>
                        <option value="Hostel Prefect">Hostel Prefect</option>
                        <option value="Hostel Monitor">Hostel Monitor</option>
                    </select>
                    <label for="role">Role</label>
                </div>
                <div class="form-floating-label">
                    <input type="password" class="form-control" id="Password" name="password" placeholder=" " required>
                    <label for="Password">Password</label>
                </div>
                <div class="form-floating-label">
                    <input type="password" class="form-control" id="repeat-Password" name="password_repeat" placeholder=" " required>
                    <label for="repeat-Password">Repeat Password</label>
                </div>
                <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                <div class="text-center mt-2">
                    <a href="./auth/register.php">Already have an account? Login</a>
                </div>
            </form>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
