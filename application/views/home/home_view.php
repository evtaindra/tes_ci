<div class="row">
    <div class="col-md-6 col-sm-12 col-lg-6 col-md-offset-3">
        <div class="panel panel-primary">
            <div class="panel-heading">  
                <h2 class="form-signin-heading">Please sign in</h2>
            </div>
            <div class="panel-body">
                <form id="login_form" method="post" action="<?=site_url('user/login')?>">
                    <div class="form-group">
                            <label for="myName">*</label>
                            <input type="text" name="login" id="inputName" class="form-control" placeholder="User Name" >
                            <span id="error_name" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                            <label for="lastname">*</label>
                            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" >
                            <span id="error_lastname" class="text-danger"></span>
                    </div>   
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</div>
<a href="<?=site_url('home/register')?>">Register</a>
<script type="text/javascript">
$(function(){
    $("#login_form").submit(function(evt){
        evt.preventDefault();
        var url = $(this).attr('action');
        var posData = $(this).serialize();
        
        $.post(url,posData,function(o){
            if(o.result == 1){
               // alert('Good Login');
               window.location.href = '<?=site_url('dashboard')?>';
            }
            else{
                alert('Invalid');
            }
        },'json');
    });
});
</script>