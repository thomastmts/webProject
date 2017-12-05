<?php
// Routes

$app->get("/car/acc", function ($request, $response, $args) {
    $this->db;
    $Cars = Car::all();
    return $this->renderer->render($response, 'accueil.phtml',["Cars"=>$Cars]);
});

$app->get("/car/list", function ($request, $response, $args) {
   /*    $Car = new Car;
    $Car->id = $_POST['id'];
    $Car->name = $_POST['name'];
    $Car->color = $_POST['color'];
    $Car->price = $_POST['price'];
    $Car->weight = $_POST['weight'];
    $Car->length = $_POST['length'];
    $Car->horsepower = $_POST['horsepower'];
    $Car->max_speed = $_POST['max_speed'];
    $Car->save(); */
    $this->db;
    $Cars = Car::all();
    return $this->renderer->render($response, 'showall.phtml',["Cars"=>$Cars]);
});

$app->get("/car/details/[{id}]", function ($request, $response, $args) {
    $id = $args['id'];
    $this->db;
    $Car = Car::find($id); 
    return $this->renderer->render($response, 'car_details.phtml',["Car"=>$Car]);
});


//Add route
$app->get('/car/add', function ($request, $response, $args) {
    $this->db;
    $capsule = new \Illuminate\Database\Capsule\Manager;
    //$capsule::schema()->dropIfExists('cars');
    if (!$capsule::schema()->hasTable('cars')) {
        $capsule::schema()->create('cars', function (\Illuminate\Database\Schema\Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('');
            $table->string('color')->default('');
            $table->integer('price');
            $table->integer('weight');
            $table->integer('length');
            $table->integer('horsepower');
            $table->integer('max_speed');
            $table->integer('option');
            $table->integer('img');
            $table->timestamps();
        }); 
    }
    return $this->renderer->render($response, 'Formulaire.phtml', $args);
});

$app->post('/car/addpost', function ($request, $response, $args) {
        $this->db;
        $Car = new Car;
        $Car->name = $_POST['name'];
        $Car->color = $_POST['color'];
        $Car->price = $_POST['price'];
        $Car->weight = $_POST['weight'];
        $Car->length = $_POST['length'];
        $Car->horsepower = $_POST['horsepower'];
        $Car->max_speed = $_POST['max_speed'];				    
		foreach($_POST['option'] as $Car) echo $_POST['option'];
        $Car->img = $_POST['img'];
        $Car->save(); 
        //echo $_POST['max_speed'];
        //$Car	->name= Input::get('name');echo "Test";
    return $response->withRedirect('/car/list');
});


//Delete 
$app->post("/car/delete/[{id}]", function ($request, $response, $args) {
    $this->db;
    $id = $args['id'];
    $Car = Car::find($id); 
    $Car->delete(); 
    $Cars = Car::all();
    return $this->renderer->render($response, 'showall.phtml', ["Cars"=>$Cars]);
});

//Edit
$app->get("/car/edit/[{id}]", function  ($request, $response, $args) use($app) {
    $this->db;
    $id = $args['id'];
    $Car = Car::find($id);
    return $this->renderer->render($response, 'editview.phtml', ["Car"=>$Car]);
});

$app->post("/car/editpost/[{id}]", function ($request, $response, $args) {
	$this->db;
	$id = $args['id'];
    $Car = Car::find($id);
    $Car->name = $_POST['name'];
    $Car->color = $_POST['color'];
    $Car->price = $_POST['price'];
    $Car->weight = $_POST['weight'];
    $Car->length = $_POST['length'];
    $Car->horsepower = $_POST['horsepower'];
    $Car->max_speed = $_POST['max_speed'];
    $Car->option = $_POST['option'];
    $Car->img = $_POST['img'];
    $Car->save();
   	return $response->withRedirect('/car/list');
   	//return redirect('car/list');
});

