<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Librairie</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
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

    /* Styles pour le bouton Ajouter un Livre */
    .btn-library {
        background-color: #8b4513;
        color: #fff;
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 1rem;
        text-transform: uppercase;
        font-weight: bold;
        transition: background-color 0.3s;
    }

    .btn-library:hover {
        background-color: #6f4f28;
    }

    /* Styles pour le tableau */
    .table {
        background-color: #f9f9f9;
        border-radius: 8px;
        overflow: hidden;
        border: none;
        /* Supprimer la bordure par défaut du tableau */
    }

    .table thead th {
        background-color: #2c3e50;
        color: #fff;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #ecf0f1;
    }

    .table-bordered {
        border-collapse: separate;
        /* Assurer que la bordure arrondie est visible */
        border-spacing: 0;
        /* Réduire l'espacement des cellules */
    }

    .table-hover tbody tr:hover {
        background-color: #d5dbdb;
    }

    /* Styles pour les boutons d'action */
    .actions .btn {
        font-size: 0.9rem;
        padding: 5px 10px;
        border-radius: 4px;
        margin-right: 5px;
    }

    .btn-view {
        background-color: #17a2b8;
        color: #fff;
    }

    .btn-view:hover {
        background-color: #138496;
    }

    .btn-edit {
        background-color: #ffc107;
        color: #333;
    }

    .btn-edit:hover {
        background-color: #e0a800;
    }

    .btn-delete {
        background-color: #dc3545;
        color: #fff;
    }

    .btn-delete:hover {
        background-color: #c82333;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="/">Ma Librairie</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item {{ Route::currentRouteName() == 'books.index' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('books.index') }}">Livres</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'categories.index' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('categories.index') }}">Catégories</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'clients.index' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('clients.index') }}">Clients</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>