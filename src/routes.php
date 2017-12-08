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
    $capsule::schema()->dropIfExists('cars');
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
            $table->boolean('gps');
            $table->boolean('sunroof');
            $table->boolean('fridge');
            $table->boolean('sport_line');
            $table->boolean('lv');
            $table->boolean('headed_seat');
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
        
        $gps = $_POST['gps'];
        if($gps == NULL)$gps = false;
        $Car->gps = $gps;
        $sunroof = $_POST['sunroof'];
        if($sunroof == NULL)$sunroof = false;
        $Car->sunroof = $sunroof;
        $fridge = $_POST['fridge'];
        if($fridge == NULL)$fridge = false;
        $Car->fridge = $fridge;
        $sport_line = $_POST['sport_line'];
        if($sport_line == NULL)$sport_line = false;
        $Car->sport_line = $sport_line;
        $lv = $_POST['lv'];
        if($lv == NULL)$lv = false;
        $Car->lv = $lv;
        $headed_seat = $_POST['headed_seat'];
        if($headed_seat == NULL)$headed_seat = false;
        $Car->headed_seat = $headed_seat;	
		//foreach($_POST['option'] as $Car) echo $_POST['option'];
        $Car->img = $_POST['img'];
        
        $Car->save(); 
		
        echo $color= $args['color'];

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
    
   //  $options = CarOtpion::where('carId', '=', $id);
    
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
    $Car->gps = $_POST['gps'];
    $Car->gps = $_POST['sunroof'];	
    $Car->gps = $_POST['fridge'];					    
    $Car->gps = $_POST['sport_line'];	
    $Car->gps = $_POST['lv'];	
    $Car->gps = $_POST['headed_seat'];	
    $Car->img = $_POST['img'];
    $Car->save();
   	return $response->withRedirect('/car/list');
   	//return redirect('car/list');
});

