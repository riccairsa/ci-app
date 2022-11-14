<div class="container"> 
    <h3 class="mt-3">List of Peoples</h3> 

    <div class="row">
        <div class="col-md-5">
            <form action="<?= base_url('peoples'); ?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search keyword.." name="keyword">
                    <div class="input-group-append" autocomplete="off" auto>
                        <input class="btn btn-primary" type="submit" name="submit">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row"> 
        <div class="col-md-10"> 
            <h5>Result : <?= $total_rows; ?></h5>
            <table class="table"> 
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($peoples)) : ?>
                    <tr>
                        <td colspan="4"> 
                            <div class="alert alert-danger" role="alert">
                                Data not found!
                        </td>
                    </tr>
                    <?php endif; ?>  
                    <?php foreach ($peoples as $peoples) : ?>
                        <tr>
                            <th><?= ++$start; ?></th>
                            <td><?= $peoples['name']; ?></td>
                            <td><?= $peoples['email']; ?></td>
                            <td>
                                <a href="" class="badge badge-warming">detail</a>
                                <a href="" class="badge badge-success">edit</a>
                                <a href="" class="badge badge-danger">detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table> 
                
            <?= $this->pagination->create_links(); ?>
        </div> 
    </div> 
</div>