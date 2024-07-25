<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de Bibliothèque</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    .card-img-top {
        height: 200px;
        object-fit: cover;
    }

    .container-custom-margin {
        margin-bottom: 100px;
        /* Ajustez la valeur selon vos besoins */
    }

    /* Custom Button Colors */
    .btn-books {
        background-color: #6f4f28;
        /* Marron pour les livres */
        color: #fff;
        /* Texte blanc pour le contraste */
    }

    .btn-books:hover {
        background-color: #5b3a1e;
        color: #fff;
    }

    .btn-categories {
        background-color: #004d40;
        /* Bleu foncé pour les catégories */
        color: #fff;
        /* Texte blanc pour le contraste */
    }

    .btn-categories:hover {
        background-color: #00332b;
        color: #fff;
    }

    .btn-clients {
        background-color: #2c6e49;
        /* Vert foncé pour les clients */
        color: #fff;
        /* Texte blanc pour le contraste */
    }

    .btn-clients:hover {
        background-color: #1e4d34;
        color: #fff;
    }

    /* Styles pour la Navbar */
    .navbar {
        background-color: #ffffff;
        border-bottom: 1px solid #e0e0e0;
    }

    .navbar-brand {
        font-size: 1.8rem;
        font-weight: bold;
        color: #333;
        font-family: 'Georgia', serif;
    }

    .navbar-nav .nav-link {
        color: #333;
        font-size: 1.1rem;
        font-family: 'Georgia', serif;
        padding: 10px 15px;
        border-radius: 5px;
        transition: background-color 0.3s, color 0.3s;
    }

    .navbar-nav .nav-link:hover {
        background-color: #f0e6d6;
        color: #5d3f2a;
        text-decoration: none;
    }

    .navbar-nav .nav-item.active .nav-link,
    .navbar-nav .nav-link.active {
        background-color: #d4af37;
        color: #fff;
        font-weight: bold;
    }
    </style>

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Ma Librairie</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('books.index') }}">Livres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('categories.index') }}">Catégories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('clients.index') }}">Clients</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4 container-custom-margin">
        <!-- Page d'accueil -->
        <div class="jumbotron">
            <h1 class="display-4">Bienvenue dans le Système de Gestion de Bibliothèque</h1>
            <p class="lead">Ce système vous aide à gérer efficacement les livres, les catégories, et les informations
                sur les clients de votre bibliothèque.</p>
            <hr class="my-4">
            <p>Utilisez les liens ci-dessous pour accéder aux fonctionnalités principales :</p>
            <a class="btn btn-books btn-lg" href="{{ route('books.index') }}" role="button">Gérer les Livres</a>
            <a class="btn btn-categories btn-lg" href="{{ route('categories.index') }}" role="button">Gérer les
                Catégories</a>
            <a class="btn btn-clients btn-lg" href="{{ route('clients.index') }}" role="button">Gérer les Clients</a>
        </div>

        <!-- Section Informations -->
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://images.pexels.com/photos/23914630/pexels-photo-23914630/free-photo-of-livres-afficher-bibliotheque-etageres.jpeg"
                        class="card-img-top" alt="Gestion des Livres">
                    <div class="card-body">
                        <h5 class="card-title">Gestion des Livres</h5>
                        <p class="card-text">Ajoutez, modifiez et consultez les livres disponibles dans votre
                            bibliothèque. Gérez les informations comme les titres, les auteurs et les descriptions.</p>
                        <a href="{{ route('books.index') }}" class="btn btn-books">Accéder à la Gestion des Livres</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://media.istockphoto.com/id/1310128920/photo/audience-segmentation-or-customer-segregation-marketing-concept.webp?s=2048x2048&w=is&k=20&c=XQ49DE5V_81XG13_9gUoaBNfXNZ0R843xd7GZsoccS8="
                        class="card-img-top" alt="Gestion des Catégories">
                    <div class="card-body">
                        <h5 class="card-title">Gestion des Catégories</h5>
                        <p class="card-text">Organisez les livres en catégories pour faciliter leur recherche et leur
                            gestion. Ajoutez ou modifiez des catégories selon vos besoins.</p>
                        <a href="{{ route('categories.index') }}" class="btn btn-categories">Accéder à la Gestion des
                            Catégories</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://img.freepik.com/photos-gratuite/etudiants-plan-moyen-lisant-ensemble_23-2148950546.jpg?t=st=1721769857~exp=1721773457~hmac=bee91423c95e779fc6b7c32640c34b41ac8371cbb58d60fd4518a2bd26970c76&w=826"
                        class="card-img-top" alt="Gestion des Clients">
                    <div class="card-body">
                        <h5 class="card-title">Gestion des Clients</h5>
                        <p class="card-text">Maintenez une base de données des clients de votre bibliothèque. Gérez
                            leurs informations personnelles et leurs emprunts.</p>
                        <a href="{{ route('clients.index') }}" class="btn btn-clients">Accéder à la Gestion des
                            Clients</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center py-4 mt-4">
        <div class="container">
            <p class="mb-0">&copy; {{ date('Y') }} Gestion de Bibliothèque. Tous droits réservés.</p>
            <p>
                Contactez-nous : <a href="mailto:contact@bibliotheque.com">contact@bibliotheque.com</a>
            </p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>