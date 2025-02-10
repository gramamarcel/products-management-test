<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionare Produse</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Lista Produse</h2>
        <a href="{{ route('products.create') }}" class="btn btn-primary"> <i class="fas fa-plus"></i> Adaugă produs
            nou</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nume</th>
                    <th>Descriere</th>
                    <th>Pret</th>
                    <th>Actiuni</th>
                </tr>
            </thead>
            <tbody>
                @foreach (\App\Models\Products::all() as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->nume }}</td>
                        <td>{{ $product->descriere }}</td>
                        <td>{{ $product->pret }}</td>
                        <td>
                            <a href="{{ route('products.edit', ['product' => $product->id]) }}"
                                class="btn btn-warning btn-sm">Editeaza</a>
                                <a href="{{ route('products.show', ['product' => $product->id]) }}"
                                    class="btn btn-success btn-sm">Vizualizeaza</a>
                            <form action="{{ route('products.destroy', ['product' => $product->id]) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Sterge</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>


        </table>

</body>

</html>
