<?php
// Routes

$app->get('/', function ($request, $response, $args) {
return $this->renderer->render($response, 'view.phtml', $args);
});

$app->get('/Cars', function ($request, $response, $args) {
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
            $table->integer('max_speed');
            $table->timestamps();
        }); 
    }
    return $this->renderer->render($response, 'Formulaire.phtml', $args);
});

$app->post('/Update', function ($request, $response, $args) {

        $this->db;
        $Car = new Car;
        $Car->name = $_POST['name'];
        $Car->color = $_POST['color'];
        $Car->price = $_POST['price'];
        $Car->weight = $_POST['weight'];
        $Car->length = $_POST['length'];
        $Car->max_speed = $_POST['max_speed'];
        //echo $_POST['max_speed'];
        $Car->save(); 
        //echo "Valide";
        //$Car	->name= Input::get('name');echo "Test";

        return $this->renderer->render($response, 'view.phtml', $args);
        //return Redirect:: back();
});

$app->get('/Delete', function ($request, $response, $args) {

    $this->db;
    $Car = Models\Car::find(1);
echo "supprimme1";
    $Car->delete();

    return $this->renderer->render($response, 'view.phtml', $args);
});


