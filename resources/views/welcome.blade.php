<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Component Hub</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    /* Reset some default styles */
    body,
    h1,
    h2,
    p,
    ul,
    li,
    a {
        margin: 0;
        padding: 0;
    }

    /* Apply a gradient background to the banner */
    #banner {
        background: linear-gradient(45deg, #4e54c8, #8f94fb);
        color: #fff;
        text-align: center;
        padding: 100px 0;
    }

    /* Style the banner text and call-to-action button */
    #banner h1 {
        font-size: 36px;
        margin-bottom: 20px;
    }

    #banner p {
        font-size: 18px;
        margin-bottom: 40px;
    }

    .cta-button {
        display: inline-block;
        padding: 10px 20px;
        background: #fff;
        color: #333;
        font-weight: bold;
        text-decoration: none;
        border-radius: 5px;
        transition: background 0.3s ease;
    }

    .cta-button:hover {
        background: #333;
        color: #fff;
    }
</style>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">htmlcomponents</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Welcome</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Components</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section id="banner">
        <div class="container">
            <h1>Make Design Less Headache and Use Inbuilt Components</h1>
            <p>Your one-stop destination for ready-made web components.</p>
            <a href="#components" class="cta-button">Get Started</a>
        </div>
    </section>
</body>

</html>
