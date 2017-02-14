<link rel="stylesheet" href="assets/components/pikaday/css/pikaday.css">
<form action="" method="post" role="form">

    <div class="form-group">
        <input type="text" class="form-control" name="" id="" placeholder="<?= __('Destination') ?>">
        <input type="text" id="datepicker">
    </div>



    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script src="assets/components/pikaday/pikaday.js"></script>lllllllll
<script>
    var picker = new Pikaday({ field: document.getElementById('datepicker') });
</script>