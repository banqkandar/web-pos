<section class="content-header">
    <h1>
        Items
        <small>Data Barang</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Items</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Barcode Generator <i class="fa fa-barcode"></i></h3>
                <div class="pull-right">
                    <a href="<?= site_url('item') ?>" class="btn btn-warning btn-flat btn-sm"><i class="fa fa-undo"></i> Back</a>
                </div>
            </div>
            <div class="box-body">
                <?php
                $generator = new \Picqer\Barcode\BarcodeGeneratorPNG();
                echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($row->barcode, $generator::TYPE_CODE_128)) . '" style="width:200px">';
                ?>
                <br>
				<?= $row->barcode; ?>
				<br>
				<a href="<?= site_url('item/barcode_print/'.$row->item_id) ?>" target="_blank" class="btn btn-primary btn-flat mt-3"><i class="fa fa-print"></i> Print</a>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">QR-Code Generator <i class="fa fa-qrcode"></i></h3>
            </div>
            <div class="box-body">
                <?php $qrCode = new Endroid\QrCode\QrCode('123456');
                // Save it to a file
                $qrCode->writeFile('uploads/qr-code/item-'.$row->item_id.'.png'); ?>
                <img src="<?=base_url('uploads/qr-code/item-'.$row->item_id.'.png')?>" style="width:200px">
            </div>
            <?= $row->barcode; ?>
        </div>
    </div>
</section>
