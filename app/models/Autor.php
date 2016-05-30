<?php



class Autor extends Eloquent   {

	

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'autores';

	public function libros(){
		return $this->hasMany('Libro','autor_id');
	}

	

}
