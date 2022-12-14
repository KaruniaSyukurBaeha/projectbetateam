<h3>Tambah Barang</h3>

<a href="/items" class="btn btn-sm btn-primary mb-2">List Barang</a>

<form action="/items" method="post">
    <div class="mb-3">
        <label for="Name" class="form-label">Name</label>
        <input type="text" name="Name" id="Name" class="form control" value="<?= set_value('name') ?>">
        <?php if (isset($errors) and $errors->getError('unit')) { ?>
        <div class='text-danger mt-2'>
            <?= $error = $error->getError('name'); ?>
        </div>
        <?php } ?>
    </div>
    <div class="mb-3">
        <label for="unit" class="form-label">Unit</label>
        <input type="text" name="unit" id="unit" class="form control" value="<?= set_value('unit') ?>">
        <?php if (isset($errors) and $errors->getError('unit')) { ?>
        <div class='text-danger mt-2'>
            <?= $error = $error->getError('unit'); ?>
        </div>
        <?php } ?>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" name="price" id="price" class="form control" value="<?= set_value('price') ?>">
        <?php if (isset($errors) and $errors->getError('price')) { ?>
        <div class='text-danger mt-2'>
            <?= $error = $error->getError('price'); ?>
        </div>
        <?php } ?>
    </div>
    <div class="mb-3">
        <input type="submit" value="Simpan" class="btn btn-primary">
    </div>
</form>