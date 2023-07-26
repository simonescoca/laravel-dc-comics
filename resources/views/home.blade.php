<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home</title>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h1>
                            Comics
                        </h1>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    @foreach ($comics as $comic)
                        <div class="col-2">
                            <div class="card">
                                <img src="{{ $comic -> thumb }}" class="card-img-top" alt="{{ $comic -> title }}">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        {{ $comic -> title }}
                                    </h5>
                                    <a href="{{ route('show', $comic->id) }}" class="btn btn-primary">
                                        see more
                                    </a>
                                    <a href="{{ route("edit", $comic->id) }}" class="btn btn-warning">
                                        edit
                                    </a>
                                    <form action="{{ route("destroy", $comic -> id )}}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn btn-danger">
                                            delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="my_create-button-container">
                        <a href="{{ route("create") }}">
                            create a new comic
                        </a>
                    </div>
                </div>
                {{ $comics -> links() }}
            </div>
        </main>
        @vite("resources/js/app.js")
    </body>
</html>
