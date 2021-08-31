<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Email Sending | PHP</title>
</head>
<body>
  <?php if($success = $this->session->flashdata('success')){ echo $success; } ?>
  <form name="contactform" method="post" action="<?=base_url('home/send_email');?>">
    <table width="450px">
      <tr>
        <td valign="top">
          <label for="first_name">First Name *</label>
        </td>
        <td valign="top">
          <input  type="text" name="first_name" maxlength="50" size="30">
        </td>
      </tr>
      <tr>
        <td valign="top"">
          <label for="last_name">Last Name *</label>
        </td>
        <td valign="top">
          <input  type="text" name="last_name" maxlength="50" size="30">
        </td>
      </tr>
      <tr>
        <td valign="top">
          <label for="email">Email Address *</label>
        </td>
        <td valign="top">
          <input  type="text" name="email" maxlength="80" size="30">
        </td>
      </tr>
      <tr>
        <td valign="top">
          <label for="telephone">Telephone Number</label>
        </td>
        <td valign="top">
          <input  type="text" name="telephone" maxlength="30" size="30">
        </td>
      </tr>
      <tr>
        <td valign="top">
          <label for="comments">Comments *</label>
        </td>
        <td valign="top">
          <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
        </td>
      </tr>
      <tr>
        <td colspan="2" style="text-align:center">
          <input type="submit" value="Submit">  </a>
        </td>
      </tr>
    </table>
  </form>
</body>
</html>