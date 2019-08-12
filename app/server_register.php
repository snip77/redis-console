<!DOCTYPE html>
<html>
  <head>
  	<link rel="stylesheet" type="text/css" href="assets/css/server_register.css">
  	<link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
  	<title>Register a new server</title>
  </head>
  <body>
      <?php if (isset($_GET['error'])) { ?>
          <div class="alert alert-danger" role="alert">
                <?php echo $_GET['error']; ?>
          </div>
      <?php } ?>
      <?php if (isset($_GET['message'])) { ?>
          <div class="alert alert-success" role="alert">
                <?php echo $_GET['message']; ?>
          </div>
      <?php } ?>
      <div  id="app">
        <div v-if="errors.length" class="container partFive">
                  <div class="alert alert-warning" v-for="error in errors" v-text="error"></div>
        </div>
    		<div class="container partTwo">
            <div class=" container card text-white bg-dark mb-3" >
              <form method="post" action="save_new_server" @submit="checkForm">
                <h3 class="card-header">
                  Register a new server
                </h3>
                <div class="form-group row partFour">
                  <label for="host" class="col-sm-2 col-form-label">Host</label>
                  <div class="col-sm-10">
                    <input v-model="host" type="text"  width="100%" class="form-control" name="host">
                  </div>
                </div>
                  <div class="form-group row">
                  <label for="port" class="col-sm-2 col-form-label">Port</label>
                  <div class="col-sm-10">
                    <input v-model="port" type="text"  width="100%" class="form-control" name="port" placeholder="Default port is 6379">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="database" class="col-sm-2 col-form-label">database</label>
                  <div class="col-sm-10">
                    <input v-model="database" type="number"  width="100%" class="form-control" name="database" min="0" max="15" placeholder="Default database is 0">
                  </div>
                </div>
                <div class="form-group row" v-if="btn_password_text!='Use Password'">
                  <label for="password" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input v-model="password" type="password"  width="100%" class="form-control" name="password">
                  </div>
                </div>
                <div class="form-group row" v-if="btn_password_text!='Use Password'">
                  <label for="password_confirm" class="col-sm-2 col-form-label">confirm password</label>
                  <div class="col-sm-10">
                    <input v-model="password_confirm" type="password"  width="100%" class="form-control" name="password_confirm">
                  </div>
                </div>
                  <button type="submit" class="btn btn-success partOne partThree">Save</button> 
                  <a class="btn btn-warning partOne partThree partSix" v-text="btn_password_text" @click="change_password_status()"></a> 
              </form>
            </div>
          </div>
        </div>
  </body>
  <script src="assets/vue.js"></script>
  <script src="assets/vue/server_register.js"></script>
</html>