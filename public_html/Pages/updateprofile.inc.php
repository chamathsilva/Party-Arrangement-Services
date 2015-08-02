<div class="container"
		  <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Update</strong>
                    </h2>
                    <hr>
                    <form  action='update_user.php' method="POST">
                    	
                    	<div class="row">
                            <div class="form-group col-lg-4 col-lg-offset-1">
                                <label>UserName</label>
                                <input type="text" name="username"  class="form-control" value="<?php echo $username; ?>">
                            </div>
                             <div class="form-group col-lg-7">
                                <label><br></label>
                                <p class="help-block">Username can contain any letters or numbers, without spaces</p>
                            </div>
                            
                		</div>
                		
                		<div class="row">
                            <div class="form-group col-lg-4 col-lg-offset-1">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" value="<?php echo $email; ?>" >
                            </div>
                             <div class="form-group col-lg-7">
                                <label><br></label>
                                <p class="help-block">Please provide your E-mail</p>
                            </div>
                		</div>
                		
                		<div class="row">
                            <div class="form-group col-lg-4 col-lg-offset-1">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                             <div class="form-group col-lg-7">
                                <label><br></label>
                                <p class="help-block">Password should be at least 4 characters</p>
                            </div>
                		</div>
                		
                		<div class="row">
                            <div class="form-group col-lg-4 col-lg-offset-1">
                                <label>Password(Confirm)</label>
                                <input type="password"  name="passwordconfirm" class="form-control">
                            </div>
                             <div class="form-group col-lg-7">
                                <label><br></label>
                                <p class="help-block">Please confirm password</p>
                            </div>
                		</div>
                		
                		<input type="hidden" name = "id" value=<?php echo $id;?> />
                		
                		
                		
                		<div class="row">
                			<div class="form-group col-lg-12 ">
                			</div>
	                		<div class="form-group col-lg-4 col-lg-offset-4 ">
	                          	<P align="center"><?php echo "<span style='color:#FF0000'>$massage" ?></P>
	                        </div>
	                    </div>
                		
                		
                		<div class="row">
                			<div class="form-group col-lg-12 ">
                			</div>
	                		<div class="form-group col-lg-4 col-lg-offset-4 ">
	                                <!--<input type="hidden" name="save" value="contact">-->
	                                <button type="submit" class="btn btn-primary btn-block">Update</button>
	                        </div>
	                    </div>
                    </form>
                    </div>
                </div>
            </div>
    	</div>