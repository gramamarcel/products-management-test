<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adauga Produs</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">

        <h2 class="mb-4">Adauga Produs Nou</h2>
    <a href="{{ route('products.index') }}">Înapoi la listă</a>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nume" class="form-label">Nume</label>
                <input type="text" class="form-control" id="nume" name="nume" required>
            </div>
            <div class="mb-3">
                <label for="descriere" class="form-label">Descriere</label>
                <textarea class="form-control" id="descriere" name="descriere"></textarea>
            </div>
            <div class="mb-3">
                <label for="pret" class="form-label">Pret</label>
                <input type="number" step="0.01" class="form-control" id="pret" name="pret" required>
            </div>
            <button type="submit" class="btn btn-success">Salveaza</button>

        </form>
    </div>
</body>
</html>