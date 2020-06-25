<?php

require_once( 'database.php' );

class Media {

  protected $id;
  protected $genre_id;
  protected $title;
  protected $type;
  protected $status;
  protected $release_date;
  protected $summary;
  protected $trailer_url;

  public function __construct( $media ) {

    $this->setId( isset( $media->id ) ? $media->id : null );
    $this->setGenreId( $media->genre_id );
    $this->setTitle( $media->title );
  }

  /***************************
  * -------- SETTERS ---------
  ***************************/

  public function setId( $id ) {
    $this->id = $id;
  }

  public function setGenreId( $genre_id ) {
    $this->genre_id = $genre_id;
  }

  public function setTitle( $title ) {
    $this->title = $title;
  }

  public function setType( $type ) {
    $this->type = $type;
  }

  public function setStatus( $status ) {
    $this->status = $status;
  }

  public function setReleaseDate( $release_date ) {
    $this->release_date = $release_date;
  }

  /***************************
  * -------- GETTERS ---------
  ***************************/

  public function getId() {
    return $this->id;
  }

  public function getGenreId() {
    return $this->genre_id;
  }

  public function getTitle() {
    return $this->title;
  }

  public function getType() {
    return $this->type;
  }

  public function getStatus() {
    return $this->status;
  }

  public function getReleaseDate() {
    return $this->release_date;
  }

  public function getSummary() {
    return $this->summary;
  }

  public function getTrailerUrl() {
    return $this->trailer_url;
  }

  /***************************
  * -------- GET LIST --------
  ***************************/

  public static function filterMedias( $title ) {

    // Open database connection
    $db   = init_db();

    $req  = $db->prepare( "SELECT *, type.name as tname, genre.name as gname FROM media JOIN type ON media.type_id = type.id JOIN genre ON media.genre_id = genre.id WHERE title LIKE ? ORDER BY release_date DESC" );
    $req->execute( array( '%' . $title . '%' ));

    // Close databse connection
    $db   = null;

    return $req->fetchAll();

  }

  public static function getFilmMedias() {

    // Open database connection
    $db   = init_db();

    $req  = $db->prepare( "SELECT *, type.name as tname, genre.name as gname FROM media JOIN type ON media.type_id = type.id JOIN genre ON media.genre_id = genre.id WHERE type_id = 1 ORDER BY release_date DESC" );
    $req->execute();

    // Close databse connection
    $db   = null;

    return $req->fetchAll();

  }

  public static function getSerieMedias() {

    // Open database connection
    $db   = init_db();

    $req  = $db->prepare( "SELECT *, type.name as tname, genre.name as gname FROM media JOIN type ON media.type_id = type.id JOIN genre ON media.genre_id = genre.id WHERE type_id = 2 ORDER BY release_date DESC" );
    $req->execute();

    // Close databse connection
    $db   = null;

    return $req->fetchAll();

  }

  public static function getOneMedia($id) {

    // Open database connection
    $db   = init_db();

    $req  = $db->prepare( "SELECT *, type.name as tname, genre.name as gname FROM media JOIN type ON media.type_id = type.id JOIN genre ON media.genre_id = genre.id WHERE media.id = ? ");
    $req->execute(array( $id ));

    // Close databse connection
    $db   = null;

    return $req->fetch();

  }

  public static function getFavoriteMedias($id) {

    // Open database connection
    $db   = init_db();

    $req  = $db->prepare( "SELECT *, type.name as tname, genre.name as gname FROM media JOIN type ON media.type_id = type.id JOIN genre ON media.genre_id = genre.id JOIN user_media ON media.id = user_media.media_id  WHERE user_media.user_id = ? ");
    $req->execute(array( $id ));

    // Close databse connection
    $db   = null;

    return $req->fetchAll();

  }


  /***************************
  * ------ ADD FUNCTIONS -----
  ***************************/

  public static function favoriteMedia( $user_id, $media_id ) {

    // Open database connection
    $db   = init_db();

    $req  = $db->prepare( "SELECT * FROM user_media WHERE user_id = $user_id AND media_id = $media_id" );
    $req->execute();
    if( $req->rowCount() > 0 ) throw new Exception( "Ce media est déjà dans vos favoris" );

    $req  = $db->prepare("INSERT INTO user_media ( user_id, media_id ) VALUES ( :user_id, :media_id )");
    $req->execute( array(
      'user_id' => $user_id,
      'media_id' => $media_id
    ));

    // Close databse connection
    $db   = null;
  }

}
