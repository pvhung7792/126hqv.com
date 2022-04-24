<script src="<?php echo base_url() . 'assets/js/jquery-3.2.1.min.js'; ?>"></script>
<script src="<?php echo base_url() . 'assets/js/popper.min.js'; ?>"></script>
<script src="<?php echo base_url() . 'assets/js/bootstrap.min.js'; ?>"></script>
<script src="<?php echo base_url('assets/js/ckeditor/build/ckeditor.js'); ?>"></script>

<script src="<?php echo base_url() . 'assets/js/main.js'; ?>"></script>
<script src="<?php echo base_url() . 'assets/js/custom.js'; ?>"></script>
<script src="<?php echo base_url() . 'assets/js/toastr.min.js'; ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js" integrity="sha384-FzT3vTVGXqf7wRfy8k4BiyzvbNfeYjK+frTVqZeNDFl8woCbF0CYG6g2fMEFFo/i" crossorigin="anonymous"></script>
<?php if ($this->session->flashdata('flash_message') != "") : ?>

<script type="text/javascript">
	toastr.success('<?php echo $this->session->flashdata("flash_message"); ?>');
</script>

<?php endif; ?>

<?php if ($this->session->flashdata('error_message') != "") : ?>

<script type="text/javascript">
	console.log('asdasd');
	toastr.error('<?php echo $this->session->flashdata("error_message"); ?>');
</script>

<?php endif; ?>
