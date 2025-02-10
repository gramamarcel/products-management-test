<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vizualizare Produs</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Detalii Produs</h2>
        <a href="{{ route('products.index') }}" class="btn btn-primary">Înapoi la listă</a>

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title"><strong>Nume:</strong> {{ $products->nume }}</h5>
                <p class="card-text"><strong>Descriere:</strong> {{ $products->descriere }}</p>
                <p class="card-text"><strong>Pret:</strong> {{ number_format($products->pret, 2) }}</p>
            </div>
        </div>
        
    </div>
</body>

</html>
