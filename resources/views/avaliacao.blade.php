<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação do Livro</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
        /* Estilo geral */
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f4e1d2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            background-image: url('https://img.freepik.com/fotos-premium/papel-de-tela-aquarela-de-textura-fina-cor-bege_1000823-44689.jpg?w=826');
        }

        /* Menu estilizado */
        nav {
            background-color: #8b5a3c;
            padding: 0.5rem 1rem;
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            position: fixed;
            top: 0;
            z-index: 1000;
        }

        .menu-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 2rem;
        }

        .menu-container a {
            text-decoration: none;
            color: #fff;
            font-weight: 600;
            font-size: 1.1rem;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .menu-container a:hover {
            background-color: #a66d4f;
            transform: scale(1.05);
        }

        /* Conteúdo principal */
        .container {
            max-width: 600px;
            width: 90%;
            background-color: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            margin-top: 5rem;
        }

        h1 {
            text-align: center;
            color: #8b5a3c;
            font-size: 2rem;
        }

        label {
            display: block;
            font-size: 1rem;
            margin-bottom: 0.5rem;
            color: #4a2d23;
        }

        input[type="number"], textarea {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-family: 'Open Sans', sans-serif;
        }

        button {
            background-color: #8b5a3c;
            color: #fff;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        button:hover {
            background-color: #a66d4f;
        }
    </style>
</head>
<body>
    <nav>
        <div class="menu-container">
            <a href="{{ route('index') }}">Home</a>
            <a href="{{ route('profile') }}">Perfil</a>
            <a href="{{ route('addbook') }}">Adicionar Livro</a>
            <a href="{{ route('estante') }}">Minha Estante</a>
        </div>
    </nav>

    <div class="container">
        <h1>Avaliação do Livro</h1>
        <form method="POST" action="{{ route('avaliacao.store') }}">
            @csrf
            <input type="hidden" name="leitura_id" value="{{ $leitura->id }}">
            <label for="rating">Avaliação (1 a 5):</label>
            <input type="number" id="rating" name="avaliacao" min="1" max="5" required>

            <label for="review">Comentário:</label>
            <textarea id="review" name="comentario" rows="4" required></textarea>

            <button type="submit">Enviar Avaliação</button>
        </form>
    </div>
</body>
</html>
