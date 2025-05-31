<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login | Coffee</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/fav.png') }}">
    <meta name="author" content="codepixer">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Playfair+Display:wght@600&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        h3 {
            font-family: 'Playfair Display', serif;
        }

        .error-message {
            color: #dc3545;
            font-size: 0.875rem;
            margin-top: 0.25rem;
            display: none;
        }

        .form-card {
            width: 100%;
            max-width: 400px;
        }

        .poppins-style {
            font-family: 'Open Sans', sans-serif;
            font-size: 16px;
            line-height: 1.6;
            color: #000000;
        }
    </style>

    <!-- Bootstrap & Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    @vite([
    'resources/css/app.css',
    'resources/js/app.js',
    'resources/css/linearicons.css',
    'resources/css/bootstrap.css',
    'resources/css/magnific-popup.css',
    'resources/css/nice-select.css',
    'resources/css/main.css',
    'resources/js/hoverIntent.js',
    'resources/js/main.js'
    ])
</head>

<body class="bg-light">

    <div class="card p-4 shadow-sm form-card mx-auto mt-5">

        <!-- Login Form -->
        <form id="loginForm">
            <h3 class="text-center mb-4 poppins-style">Welcome Back</h3>
            <div class="mb-3">
                <label for="loginEmail" class="form-label fw-medium poppins-style">Email</label>
                <input type="text" class="form-control rounded-1 poppins-style" id="loginEmail" name="email" required />
            </div>
            <div class="mb-3">
                <label for="loginPassword" class="form-label fw-medium poppins-style">Password</label>
                <input type="password" class="form-control rounded-1 poppins-style" id="loginPassword" name="password"
                    required />
            </div>
            <div class="mb-3">
                <label for="loginRole" class="form-label fw-medium poppins-style">Login as</label>
                <select class="form-select rounded-1 poppins-style" id="loginRole" name="role" required>
                    <option value="user" selected>User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <div id="loginError" class="error-message mb-2"></div>
            <button type="submit" class="btn btn-dark w-100 rounded-1 py-2 fw-medium poppins-style">Login</button>
            <div class="text-center mt-3 text-muted poppins-style">
                Don't have an account? <a href="#" id="showRegister"
                    class="text-decoration-none fw-medium poppins-style">Register here</a>
            </div>
        </form>

        <!-- Register Form (Hidden by default) -->
        <form id="registerForm" style="display: none;">
            <h3 class="text-center mb-4 poppins-style">Join Us</h3>
            <div class="mb-3">
                <label for="regUsername" class="form-label fw-medium poppins-style">Full Name</label>
                <input type="text" class="form-control poppins-style" id="regUsername" name="username" required />
            </div>
            <div class="mb-3">
                <label for="regEmail" class="form-label fw-medium poppins-style">Email</label>
                <input type="email" class="form-control rounded-1 poppins-style" id="regEmail" name="email" required />
            </div>
            <div class="mb-3">
                <label for="regPassword" class="form-label fw-medium poppins-style">Password</label>
                <input type="password" class="form-control rounded-1 poppins-style" id="regPassword" name="password"
                    minlength="6" required />
                <small class="text-muted poppins-style">Minimum 6 characters</small>
            </div>
            <div class="mb-3">
                <label for="regRole" class="form-label fw-medium poppins-style">Register as</label>
                <select class="form-select rounded-1 poppins-style" id="regRole" name="role_id" required>
                    <option value="2" selected>User</option>
                    <option value="1">Admin</option>
                </select>
            </div>
            <div id="registerError" class="error-message mb-2"></div>
            <button type="submit" class="btn btn-dark w-100 rounded-1 py-2 fw-medium poppins-style">Register</button>
            <div class="text-center mt-3">
                <a href="#" id="showLogin" class="text-decoration-none poppins-style">Back to Login</a>
            </div>
        </form>

    </div>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Form toggling
            document.getElementById('showRegister').addEventListener('click', function (e) {
                e.preventDefault();
                document.getElementById('loginForm').style.display = 'none';
                document.getElementById('registerForm').style.display = 'block';
                clearErrors();
            });

            document.getElementById('showLogin').addEventListener('click', function (e) {
                e.preventDefault();
                document.getElementById('registerForm').style.display = 'none';
                document.getElementById('loginForm').style.display = 'block';
                clearErrors();
            });

            // Login form submission
            document.getElementById('loginForm').addEventListener('submit', async function (e) {
                e.preventDefault();
                clearErrors();

                const email = document.getElementById('loginEmail').value;
                const password = document.getElementById('loginPassword').value;
                const role = document.getElementById('loginRole').value;
                const errorElement = document.getElementById('loginError');

                try {
                    const response = await fetch('/login', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                            'Accept': 'application/json'
                        },
                        body: JSON.stringify({
                            email: email,
                            password: password,
                            role: role
                        })
                    });

                    const data = await response.json();

                    if (response.ok) {
                        window.location.href = '/dashboard';
                    } else {
                        showError(errorElement, data.message || 'Invalid credentials');
                    }
                } catch (error) {
                    showError(errorElement, 'An error occurred during login');
                    console.error('Login error:', error);
                }
            });

            // Register form submission
            document.getElementById('registerForm').addEventListener('submit', async function (e) {
                e.preventDefault();
                clearErrors();

                const username = document.getElementById('regUsername').value;
                const email = document.getElementById('regEmail').value;
                const password = document.getElementById('regPassword').value;
                const role_id = document.getElementById('regRole').value;
                const errorElement = document.getElementById('registerError');

                try {
                    const response = await fetch('/register', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                            'Accept': 'application/json'
                        },
                        body: JSON.stringify({
                            username: username,
                            email: email,
                            password: password,
                            password_confirmation: password,
                            role_id: role_id
                        })
                    });

                    const data = await response.json();

                    if (response.ok) {
                        alert('Registration successful! Please login.');
                        document.getElementById('registerForm').reset();
                        document.getElementById('registerForm').style.display = 'none';
                        document.getElementById('loginForm').style.display = 'block';
                    } else {
                        if (data.errors) {
                            let errorMessages = [];
                            for (const [key, messages] of Object.entries(data.errors)) {
                                errorMessages.push(...messages);
                            }
                            showError(errorElement, errorMessages.join('<br>'));
                        } else {
                            showError(errorElement, data.message || 'Registration failed');
                        }
                    }
                } catch (error) {
                    showError(errorElement, 'An error occurred during registration');
                    console.error('Registration error:', error);
                }
            });

            function showError(element, message) {
                element.innerHTML = message;
                element.style.display = 'block';
            }

            function clearErrors() {
                document.querySelectorAll('.error-message').forEach(el => {
                    el.style.display = 'none';
                    el.textContent = '';
                });
            }
        });
    </script>
</body>

</html>