<form class="form-inline index-form" method="get" action="search.php" data-toggle="validator">            
    <div class="col-lg-3 col-sm-3 col-12">
        <label class="sr-only" for="state">State</label>
        <select class="form-control custom-select" id="state" name="state" required></select>
    </div>

    <div class="col-lg-3 col-sm-3 col-12">
        <label class="sr-only" for="area">Area</label>
        <select class="form-control custom-select" id="area" name="area" required disabled>
            <option selected disabled>Select state</option>
        </select>
    </div>

    <div class="col-lg-3 col-sm-3 col-12">
        <label class="sr-only" for="type">Type</label>
        <select class="form-control custom-select" id="type" name="type" required disabled>
            <option selected disabled>Select state</option>
        </select>
    </div>

    <div class="col-lg-3 col-sm-3 col-12">
        <button type="submit" class="btn btn-large index-form-search-btn" name="index-form-search">Search</button>
    </div>
</form>
