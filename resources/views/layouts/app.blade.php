<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Centre de Formation')</title>
    <style>
        :root {
            --primary: #4f46e5;
            --primary-hover: #4338ca;
            --success: #16a34a;
            --danger: #dc2626;
            --bg-color: #f8fafc;
            --card-bg: #ffffff;
            --text-color: #1e293b;
            --border-color: #e2e8f0;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: var(--bg-color);
            color: var(--text-color);
            line-height: 1.6;
        }

        /* Navbar Style Moderne */
        nav {
            background: var(--card-bg);
            padding: 15px 40px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            align-items: center;
            border-bottom: 1px solid var(--border-color);
        }

        nav a {
            color: #475569;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 600;
            transition: all 0.2s ease;
        }

        nav a:hover {
            background: #eef2ff;
            color: var(--primary);
        }

        /* Main Container */
        main {
            max-width: 1000px;
            margin: 40px auto;
            padding: 30px;
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02);
        }

        h1, h2 {
            color: #0f172a;
            margin-top: 0;
            font-weight: 700;
        }

        /* Tables Modernes */
        .table-container {
            overflow-x: auto;
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            background: white;
        }

        th, td {
            padding: 12px 16px;
            border-bottom: 1px solid var(--border-color);
        }

        th {
            background: #f1f5f9;
            color: #475569;
            font-weight: 600;
            font-size: 13px;
            text-transform: uppercase;
        }

        tr:hover {
            background: #f8fafc;
        }

        /* Forms Styling */
        .mb-3 {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            font-size: 14px;
            color: #334155;
        }

        .form-control {
            width: 100%;
            padding: 10px 14px;
            border: 1px solid var(--border-color);
            border-radius: 6px;
            font-size: 14px;
            transition: border-color 0.2s;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
        }

        .is-invalid {
            border-color: var(--danger) !important;
        }

        .invalid-feedback {
            color: var(--danger);
            font-size: 13px;
            margin-top: 5px;
        }

        /* Buttons Styling */
        .btn {
            display: inline-block;
            padding: 10px 18px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            border: none;
            transition: background 0.2s;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background: var(--primary-hover);
        }

        .btn-success {
            background: var(--success);
            color: white;
        }

        .btn-danger {
            background: var(--danger);
            color: white;
            padding: 6px 12px;
            font-size: 13px;
        }

        .btn-secondary {
            background: #64748b;
            color: white;
        }

        /* Alerts */
        .alert {
            padding: 12px 16px;
            border-radius: 6px;
            margin-bottom: 20px;
            background: #dcfce7;
            color: #166534;
            border: 1px solid #bbf7d0;
            font-weight: 500;
        }

        /* Responsive */
        @media (max-width: 600px) {
            nav {
                flex-direction: column;
                padding: 15px;
                gap: 8px;
            }

            nav a {
                text-align: center;
                width: 100%;
            }

            main {
                margin: 15px 10px;
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('filieres.index') }}">Liste des filières</a>
        <a href="{{ route('stagiaires.index') }}"> Liste des stagiaires</a>
         <a href="{{ route('inscriptions.index') }}">Liste d'inscriptions</a>
        <a href="{{ route('filieres.create') }}"> Ajouter une filière</a>
        <a href="{{ route('stagiaires.create') }}"> Ajouter un stagiaire</a>
        <a href="{{ route('inscriptions.create') }}"> Ajouter inscription</a>

    </nav>

    <main>
        @yield('content')
    </main>
</body>
</html>
