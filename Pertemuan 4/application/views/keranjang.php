<div class="container-fluid">
    <br>
    <h4>Keranjang Belanja</h4>
    <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Product Name</th>
                <th scope="col">Qty</th>
                <th scope="col">Price</th>
                <th scope="col">Sub-Total</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($this->cart->contents() as $items) :
            ?>
                <tr>
                    <th scope="row"><?php echo $no++ ?></th>
                    <td><?php echo $items['name'] ?></td>
                    <td><?php echo $items['qty'] ?></td>
                    <td align="right">Rp.<?php echo number_format($items['price'], 0, ',', '.') ?></td>
                    <td align="right">Rp. <?php echo number_format($items['subtotal'], 0, ',', '.') ?></td>
                </tr>
            <?php endforeach; ?>
            <td colspan="4" align="right">Total</td>
            <td align="right">Rp. <?php echo number_format($this->cart->total(), 0, ',', '.') ?></td>
        <tbody>
    </table>
    <div align="right">
        <a href="<?php echo base_url('katalog_product/hapus_keranjang') ?>">
            <div class="btn btn-sm btn-danger">Hapus Keranjang</div>
        </a>
        <a href="<?php echo base_url('katalog_product/index') ?>">
            <div class="btn btn-sm btn-primary">Lanjutkan Belanja</div>
        </a>
        <a href="<?php echo base_url('katalog_product/pembayaran') ?>">
            <div class="btn btn-sm btn-success">Pembayaran</div>
        </a>
    </div>
</div>