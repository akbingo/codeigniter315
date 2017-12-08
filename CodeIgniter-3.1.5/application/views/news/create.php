<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

    <label for="title">Title</label>
    <input type="input" name="title" /><br />

    <label for="text">Text</label>
    <textarea name="text" style="height:70%;width:50%"></textarea><br />

    <input type="submit" name="submit" value="提交" />

</form>
