<div class="row">

  <div class="col-md-6" style="margin:auto !important; float:none">
  <h5><i class="icon ion-key"></i>Login to Admin Interface</h5>
<form class="ui form segment stacked" id="login">
  <div class="field">
    <label>Username</label>
    <div class="ui left labeled icon input">
      <input placeholder="Username" type="text" name="username">
      <i class="user icon"></i>
      <div class="ui corner label">
        <i class="icon asterisk"></i>
      </div>
    </div>
  </div>
  <div class="field">
    <label>Password</label>
    <div class="ui left labeled icon input">
      <input type="password" name="password">
      <i class="lock icon"></i>
      <div class="ui corner label">
        <i class="icon asterisk"></i>
      </div>
    </div>
  </div>
  <div class="ui error message">
    <div class="header">We noticed some issues</div>
  </div>
  <div class="ui tiny buttons" id="form_actions">
  <div class="ui positive submit button" #>Login</div>
  <div class="or"></div>
  <div class="ui negative button" data-href="<?php echo base_url();?>">Cancel</div>
</div>
  
</form>
</div>
</div>

<script>
$('#form_actions > .button').click(function(){
   var formData = $('#login').serializeArray();
   $.ajax({
      url: base_url+'auth/admin',
      type: 'POST',
      data: formData,
      beforeSend: function(data) {
        $("#result").append(
          '<center><div class="ui small blue message" style = "margin-bottom: 5px;"><h4><span class = "fa fa-spinner fa-spin"></span> Please wait...</h4></div></center>'
        );
      },
      success: function(data) {
        if(data=='error'){
          $('form').addClass('error');
        }
        
      },
      fail: function() {
        console.log("error");
      }
    });


});


</script>