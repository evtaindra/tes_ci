<div class="row">
    <div class="col-md-6 col-sm-12 col-lg-6 col-md-offset-3">
        <div id="register_form_error" class="alert alert-danger"><!--Dynamic --></div>
        <div class="panel panel-primary">
            <div class="panel-heading">Enter Your Details Here </div>
            <div class="panel-body">
                <form id="register_form" method="post" action="<?=site_url('user/register')?>">
                    <div class="form-group">
                            <label for="myName">Login Name *</label>
                            <input id="myName" name="login" class="form-control" type="text" data-validation="required">
                    </div>
                    <div class="form-group">
                            <label for="lastname">Email *</label>
                            <input id="lastname" name="email" class="form-control" type="text" data-validation="email">
                    </div>
                    <div class="form-group">
                            <label for="age">Password *</label>
                            <input id="age" name="password"  class="form-control" type="password" min="1" >
                    </div>
                    <div class="form-group">
                            <label for="dob">Comfirm Password *</label>
                            <input type="password" name="comfirm_password" id="dob" class="form-control">
                    </div>
                  <!--  <button id="submit" type="submit" value="submit" class="btn btn-primary center">Register</button>
                  -->  
                  <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
                </form>
                <br>
                <a class="btn btn-warning btn-block" href="<?=site_url('/')?>">Back</a>
            </div>
        </div>
       </div>
</div>
<script type="text/javascript">
$(function(){
    $("#register_form_error").hide();
    $("#register_form").submit(function(evt){
        evt.preventDefault();
        var url = $(this).attr('action');
        var posData = $(this).serialize();
        
        $.post(url,posData,function(o){
            if(o.result == 1){
               // alert('Good Login');
               window.location.href = '<?=site_url('dashboard')?>';
            }
            else{
                $("#register_form_error").show();
                  var output = '<ul>';
                  for( var key in o.error){
                      var value = o.error[key];
                      output += '<li>'+ value +'</li>'; 
                  }
                  output += '</ul>';    
                  $("#register_form_error").html(output);
            }
        },'json');
    });
});
</script>
