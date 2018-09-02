<!DOCTYPE html>
<html>
<head>
    <title>insert - redis console</title>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/insertForm.css">
</head>
<body>
    <div class="container PartSeven" id="app">
      <div class=" container card text-white bg-dark mb-3" >
        <form method="post" action="../insert.php">
          <div class="card-header">
            Insert
            <a href="../" class="btn btn-warning PartOne">Main Page</a>
          </div>
          <div class="form-group PartTwo">
            <label for="exampleFormControlSelect1">Type</label>
            <select name="type" class="form-control" id="Type" v-model="type" @change="typeChange()">
              <option>String</option>
              <option>Hashe</option>
              <option>List</option>
              <option>Set</option>
            </select>
          </div>
          <div class="form-group row PartThree" v-if="type != '' && addedExpire == true">
            <label for="key" class="col-sm-2 col-form-label">Expire in (second)</label>
            <div class="col-sm-10">
              <input v-model="expireIn" type="number"  width="100%" class="form-control" name="expire">
            </div>
          </div>
          <div class="form-group row PartThree" v-if="type != ''">
            <label for="key" class="col-sm-2 col-form-label">Key</label>
            <div class="col-sm-10">
              <input v-model="key" type="text"  width="100%" class="form-control" name="key">
            </div>
          </div>
            <div class="form-group row PartThree" v-if="type != ''" v-for="index in valuecount">
            <label for="key" class="col-sm-2 col-form-label">value</label>
            <div class="col-sm-10">
              <input type="text"  width="100%" class="form-control" name="value[]">
            </div>
          </div>
            <button v-if="type!=''" type="submit" class="btn btn-success PartFour">Insert</button> 
            <a v-if="type != ''" v-if="type!='String'" @click="addValue()" class="btn btn-light PartFive" style="color: gray;">Add</a>
            <a v-if="type != ''" @click="addExpire()" class="btn btn-warning PartSix">
              {{ expireKeyText }}
            </a>
        </form>
      </div>
    </div>
    <script src="assets/vue.js"></script>
    <script>
      var app = new Vue({
        el: '#app',
        data: {
          key : "",
          valuecount:1,
          addedExpire:0,
          expireIn:null,
          type: "",
          expireKeyText:"Add Expire Time",
        },
        methods:{
            addValue(){
               this.valuecount++;
            },
            addExpire(){
              if(this.addedExpire){
                this.addedExpire=false;
                this.expireKeyText="Add Expire Time";
                return;
              }
              this.addedExpire=true;
              this.expireKeyText="Remove Expire Time";    
            },
            typeChange(){
              if(this.type == 'String')
                this.valuecount=1;
            }
        }
      })
    </script>
</body>
</html>