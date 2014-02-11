<!DOCTYPE html>
<html lang="en">
  <head>
    <title>JavDap Builder</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="./bootstrap.css" media="screen">
    <link rel="stylesheet" href="./assets/css/bootswatch.min.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="./dist/js/html5shiv.js"></script>
      <script src="./dist/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="./" title="Go to JavDap Builder Home" class="navbar-brand">JavDap Builder</a>
        </div>
	  </div>
	</div>

      <!-- Forms
      ================================================== -->
      <div class="bs-docs-section">
        <div class="row">
          <div class="col-lg-10 col-lg-offset-1">
            <div class="well">
              <h3>Copy this line for no SSL: </h3>
			  <textarea class="form-control" rows="2">java -jar JavDap.jar -vf -p <?php echo $_POST["ldapPort"]; ?> -b <?php echo $_POST["baseDN"]; ?> -a "<?php echo $_POST["bindDN"]; ?>" -A <?php echo $_POST["ldapPort"]; ?> -n <?php echo $_POST["userName"]; ?> -P <?php echo $_POST["userPass"]; ?> -u <?php echo $_POST["userIDTag"]; ?> <?php echo $_POST["ldapAddr"]; ?>
			  </textarea>
			  
			  <h3>Copy this line for SSL: </h3>
			  <textarea class="form-control" rows="2">java -jar JavDap.jar -svf -p <?php echo $_POST["ldapPort"]; ?> -b <?php echo $_POST["baseDN"]; ?> -a "<?php echo $_POST["bindDN"]; ?>" -A <?php echo $_POST["ldapPort"]; ?> -n <?php echo $_POST["userName"]; ?> -P <?php echo $_POST["userPass"]; ?> -u <?php echo $_POST["userIDTag"]; ?> <?php echo $_POST["ldapAddr"]; ?>
			  </textarea>
			  
			  <!--<form class="bs-example form-horizontal" action="javdap.php" method="post">
                <fieldset>
					<div class="form-group">
						<label class="control-label" for="inputDefault">LDAP_ADDR</label>
						<input type="text" class="form-control" name ="ldapAddr">
					</div>
					<div class="form-group">
						<label class="control-label" for="inputDefault">LDAP_PORT</label>
						<input type="text" class="form-control" name="ldapPort">
					</div>
					<div class="form-group">
						<label class="control-label" for="inputDefault">BASE_DN</label>
						<input type="text" class="form-control" name="baseDN">
					</div>
					<div class="form-group">
						<label class="control-label" for="inputDefault">BIND_DN</label>
						<input type="text" class="form-control" name="bindDN">
					</div>
					<div class="form-group">
						<label class="control-label" for="inputDefault">BIND_PASSWORD</label>
						<input type="text" class="form-control" name="bindPass">
					</div>
					<div class="form-group">
						<label class="control-label" for="inputDefault">USER_ID_TAG</label>
						<input type="text" class="form-control" name="userIDTag">
					</div>
					<div class="form-group">
						<label class="control-label" for="inputDefault">Test User Name</label>
						<input type="text" class="form-control" name="userName">
					</div>
					<div class="form-group">
						<label class="control-label" for="inputDefault">Test User Password</label>
						<input type="text" class="form-control" name="userPass">
					</div>
					
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-5">
                      <button type="submit" class="btn btn-primary" id="btn-submit">Submit</button> 
                    </div>
                  </div>
                </fieldset>
              </form>-->
            </div>
          </div>
		</div>  
		<div class="row">
		  <div class="col-lg-10 col-lg-offset-1">
            <div class="well">
				<div class="start-over-btn">
					<a type="button" href="./" class="btn btn-primary btn-lg">Start Over!</a>
				</div>
				<div class="bs-example">
					<h2>What do these do again?</h2>
					<p><strong>LDAP_ADDR||</strong></p>
					<p>This is the URL or IP address of the LDAP server. (Get this information from the LDAP administrator)</p>
					<span class="help-block"><strong>Example:</strong> LDAP_ADDR|10.1.40.294|</span>
					<p><strong>LDAP_PORT||</strong></p>
					<p>This is the port on the LDAP server that e-Library will be communicating with.</p>
					<p>Port 389 is the default non-SSL port. Port 636 is the default SSL port</p>
					<span class="help-block"><strong>Example:</strong> LDAP_PORT|389|</span>
					<p><strong>BASE_DN||</strong></p>
					<p>The Base Distinguished name (Get this information from your LDAP administrator)</p>
					<span class="help-block"><strong>Example:</strong> BASE_DN|OU=Staff,DC=pbs,DC=edu|</span>
					<p><strong>BIND_DN||</strong></p>
					<p>This is the Distinguished name that LDAP is looking for to bind to it and get permission to search for the user in LDAP. (Get this information from the LDAP administrator)</p>
					<span class="help-block"><strong>Example:</strong> BIND_DN|CN=Sirsi LDAP Account,OU=Accounts,OU=Student Accounts,DC=pbs,DC=edu|</span>
					<p><strong>BIND_PASSWORD||</strong></p>
					<p>This is the password needed to authenticate the bind user to search the LDAP (Get this information from the LDAP administrator)</p>
					<span class="help-block"><strong>Example:</strong> BIND_PASSWORD|qtpassword|</span>
					<p><strong>USER_ID_TAG||</strong></p>
					<p>This defines what kind of variable in LDAP your LDAP user is.</p>
					<span class="help-block"><strong>Example:</strong> USER_ID_TAG|sAMAccountName|</span>
				</div>
            </div>  
          </div>
        </div>
      </div>
	  
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/bootswatch.js"></script>
  </body>
</html>
