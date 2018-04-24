<?php echo $this->Html->css('summernote.css');?>
<style type='text/css'>
	.header
	{
		display	: none;
	}
</style>
<?php $this->end(); ?>

<script>
	$(document).ready(function()
	{
		var mode = '<?php echo $mode?>';
		var file_url = '<?php echo $file_url?>';

		if(mode=='complete')
		{
			$('#btnUpload').hide();
			opener.setURL(file_url);
			window.close();
		}
	});
</script>
<div class="panel panel-default">
	<div class="panel-heading">
		ファイルのアップロード
	</div>
	<div class="panel-body">
		<div class="alert alert-warning">アップロードするファイルを指定して、アップロードボタンをクリックしてください。</div>
		<div class="form-group">
			<h4>アップロード可能拡張子</h4>
			<?php echo $upload_extensions;?>
		</div>

		<div class="form-group">
			<h4>アップロード可能ファイルサイズ</h4>
			最大 : <?php echo $this->Number->toReadableSize($upload_maxsize) ;?>バイト
		</div>

		<div class="form-group">
			<?php echo $this->Form->create('Content', array('type'=>'file', 'enctype' => 'multipart/form-data')); ?>
				<input type="file" name="data[Content][file]" multiple="multiple" id="ContentFile" class="form-control">
				<br>
				<input type="submit" id="btnUpload"  class="btn btn-primary" value="アップロード">　
				<input type="button"  class="btn"  value=" 閉じる " onclick="window.close();">
			<?php echo $this->Form->end(); ?>
		</div>
	</div>
</div>
