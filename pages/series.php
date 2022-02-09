<?php include 'header.php'; ?>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-center ">
                            Sum Of Series
                        </div>
                        <div class="card-body">
                            <form action="action.php" method="post">

                                <div class="form-group row">
                                    <label for="" class="col-md-3">Starting Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="starting_number" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3">Ending Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="ending_number" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3">Starting Number</label>
                                    <div class="col-md-9">
                                        <textarea name="" class="form-control" id="" cols="" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success btn-block" name="series_btn" value="Submit" />
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
