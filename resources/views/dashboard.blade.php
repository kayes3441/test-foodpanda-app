<!DOCTYPE html>
<html>
<head>
    <title>{{ config('app.name') }} - Dashboard Foodpanda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
        <div class="navbar-nav ms-auto">
                <span class="navbar-text text-white me-3">
                    Welcome, {{ Auth::user()->name }}!
                </span>
            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-light btn-sm">Logout</button>
            </form>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success">
                <h4>✅ You are logged in to {{ config('app.name') }}!</h4>
                <p>Try opening the other app - you'll be automatically logged in there too!</p>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5>Quick Links</h5>
                </div>
                <div class="card-body">
                    <a href="http://ecommerce.local/dashboard" class="btn btn-primary" target="_blank">
                        Open Ecommerce App
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
