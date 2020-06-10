<form class="form-inline index-form" method="get" action="search.php" data-toggle="validator">
    <div class="col-lg-3 col-sm-3 col-12">
        <label class="sr-only" for="state">State</label>
        <select class="form-control custom-select" id="state" name="state" data-current-value="<?php echo (isset($state)) ? $state : ''; ?>" required>
        </select>
    </div>

    <div class="col-lg-3 col-sm-3 col-12">
        <label class="sr-only" for="area">Area</label>
        <select class="form-control custom-select" id="area" name="area" data-current-value="<?php echo (isset($area)) ? $area : ''; ?>" required disabled>
            <option selected disabled>Select area</option>
        </select>
    </div>

    <div class="col-lg-3 col-sm-3 col-12">
        <label class="sr-only" for="type">Type</label>
        <select class="form-control custom-select" id="type" name="type" data-current-value="<?php echo (isset($type)) ? $type : ''; ?>" required disabled>
            <option selected disabled>Select house type</option>
        </select>
    </div>

    <div class="col-lg-3 col-sm-3 col-12">
        <button type="submit" class="btn btn-large index-form-search-btn" name="index-form-search">Search</button>
    </div>
</form>
