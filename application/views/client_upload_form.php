    <?php echo $this->session->flashdata('upload_msg'); ?>

    <?php echo form_open_multipart('clients/upload/'.$client_id); ?>

    <label for="exampleInputFile">Add new file</label>
    <input type="file" name="userfile" size="20"/>
    <p class="help-block">TODO: Explain this</p>
    <input class="btn btn-primary" type="submit" value="UPLOAD"/>
</form>
