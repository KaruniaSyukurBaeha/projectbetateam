<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width,initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .bg-kanan {
        background-image: url('https://images.unsplash.com/photo-1532012197267-da84d127e765?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&q=80');
        background-size: cover;
    }
    </style>
</head>

<body>
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="container mt-5">
                <?php foreach (session()->getFlashdata() as $key => $flash) : ?>
                <div class="alert alert-<?= $key ?>" role="alert">
                    <?= $flash ?>
                </div>
                <?php endforeach ?>
                <form action="/sessions" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="exampleFormControlInput1"
                            placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password"
                            placeholder="password">
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Masuk" class="btn btn-secondary">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6 d-none d-md-block bg-kanan" style="height: 100vh">
        </div>
    </div>

    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>