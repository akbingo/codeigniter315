<?php echo validation_errors(); ?>

<?php echo form_open("users/register"); ?>

<h5>用户名</h5>
<input type="text" name="username" value="" size="48">

<h5>密码</h5>
<input type="password" name="password" value="" size="48">

<h5>确认密码</h5>
<input type="password" name="passconf" value="" size="48">

<h5>邮箱</h5>
<input type="text" name="email" value="" size="48">
<div><input type="submit" name="submit" value="确认"></div>
</form>
