<?php



class Libro extends Eloquent  {

	

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'libros';
	public function user(){
		return $this->belongsTo('User','user_id');
	}
	public function autor(){
		return $this->belongsTo('Autor','autor_id');
	}

}
