@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Insert New Borrower</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="{{ route('dashboard.store') }}" class="mb-5" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="borrower" class="form-label">Borrower</label>
                <select class="form-select" name="borrower_id">
                    @foreach ($borrowers as $borrower)
                        @if (old('category_id') === $borrower->id)
                            <option value="{{ $borrower->id }}" selected>{{ $borrower->name }}</option>
                        @else
                            <option value="{{ $borrower->id }}">{{ $borrower->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="post" class="form-label">Books</label>
                <select class="form-select" name="post_id">
                    @foreach ($posts as $book)


                        @if ($book->borrower_id === null)
                            <option value="{{ $book->id }}">{{ $book->title }}</option>
                        @else
                        @endif
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Confirm Borrower</button>
        </form>
    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/list-book/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault()
        })
    </script>
@endsection
