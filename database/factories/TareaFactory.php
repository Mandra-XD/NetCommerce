<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tarea;
use App\Models\User;
use App\Models\Empresa;
class TareaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tarea::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::inRandomOrder()->first();
        $empresa = Empresa::inRandomOrder()->first();
        return [
            'nombre' => $this->faker->sentence(),
            'descripcion' => $this->faker->paragraph(),
            'fecha_inicio' => $this->faker->dateTimeBetween('-7 days', '+7 days'),
            'fecha_fin' => $this->faker->dateTimeBetween('fecha_inicio', '+3 days'),
            'estatus' => $this->faker->boolean,
            'user_id' => $user->id,
            'empresa_id' =>  $empresa->id
        ];
    }
}
