<div class="container my-5">

    <form method="POST" action="{{ route('comics.store') }}">
        <div class="row row-cols-2 mb-3">
            <div class="col">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" required>
            </div>
            <div class="col">
                <label for="thumb" class="form-label">Thumbnail</label>
                <input type="text" class="form-control" name="thumb" id="thumb" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="5" required></textarea>
            </div>
        </div>
        <div class="row row-cols-4 mb-3">
            <div class="col">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="price" max="7">
            </div>
            <div class="col">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" name="series" id="series">
            </div>
            <div class="col">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" name="type" id="type">
            </div>
            <div class="col">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="date" class="form-control" name="sale_date" id="sale_date">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="artists">Artists, separated by a comma</label>
                <input type="text" class="form-control" name="artists" id="artists">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="writers">Writers, separated by a comma</label>
                <input type="text" class="form-control" name="writers" id="writers">
            </div>
        </div>

        <div class="d-flex justify-content-end mt-5">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
