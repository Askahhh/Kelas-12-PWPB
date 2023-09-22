<div class="container-fluid">
    <div class="row">

        <?php
        foreach ($product->result() as $row) :
        ?>

            <div class="card ml-3" style="width: 15rem;">
                <img src="<?php echo base_url() . '/upload/' . $row->product_picture; ?>" class="card-img-top" alt="...">
                <div class="card-body">

                    <h5 class="card-title"><?php echo $row->product_name; ?></h5>
                    <span class="badge badge-success">Rp. <?php echo number_format($row->product_price); ?></span><br>

                    <a href="#" class="btn btn-sm btn-primary">Keranjang</a>
                    <a href="#" class="btn btn-sm btn-success ml-1">Detail</a>
                </div>
            </div>
        <?php endforeach ?>
    </div>