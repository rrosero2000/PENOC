<?php
/**
 * Esta clase describe la funcionalidad del objeto Archivo.
 *
 * @package PENOC
 * @subpackage Objeto
 * @author RR Soluciones IT SAS
 * @version  1.0.0
 * @copyright 2018
 */
Class Archivo{
  /**
   * Atributos de la clase
   */
  private $id_archivo=null;
  private $usuario=null;
  private $nombre_archivo=null;
  private $tipo_archivo=null;
  private $url_archivo=null;
  private $tamano_archivo=null;
  private $fecha_subida_archivo=null;
  private $ip_origen_archivo=null;
  /**
   * @name __construct
   * @atribute $id_archivo=null, $usuario=null, $nombre_archivo=null, $tipo_archivo=null, $url_archivo=nul, $tamano_archivo=null, $fecha_subida_archivo=null, $ip_origen_archivo=null
   */
  public function __construct($id_archivo=null, $usuario=null, $nombre_archivo=null, $tipo_archivo=null, $url_archivo=nul, $tamano_archivo=null, $fecha_subida_archivo=null, $ip_origen_archivo=null){
  	$this->id_archivo=$id_archivo;
  	if($usuario instanceof Usuario){
  		$this->usuario=$usuario;
  	}
  	else{
  		$this->usuario=null;
  	}
  	$this->nombre_archivo=$nombre_archivo;
  	$this->tipo_archivo=$tipo_archivo;
  	$this->url_archivo=$url_archivo;
  	$this->tamano_archivo=$tamano_archivo;
  	$this->fecha_subida_archivo=$fecha_subida_archivo;
  	$this->ip_origen_archivo=$ip_origen_archivo;
  }
  /**
   * @name __destruct
   * @atribute 
   */
  public function __destruct(){
  	$this->id_archivo=null;
  	$this->usuario=null;
  	$this->nombre_archivo=null;
  	$this->tipo_archivo=null;
  	$this->url_archivo=null;
  	$this->tamano_archivo=null;
  	$this->fecha_subida_archivo=null;
  	$this->ip_origen_archivo=null;
  }
  public function obtenerIdArchivo(){
  	return $this->id_archivo;
  }
  public function modificarIdArchivo($id_archivo=null){
  	$this->id_archivo=$id_archivo;
  }
  public function obtenerUsuarioArchivo(){
  	return $this->usuario;
  }
  public function modificarUsuarioArchivo($usuario=null){
  	if($usuario instanceof Usuario){
  		$this->usuario=$usuario;
  	}
  	else{
  		$this->usuario=null;
  	}
  }
  public function obtenerNombreArchivo(){
  	return $this->nombre_archivo;
  }
  public function modificarNombreArchivo($nombre_archivo=null){
  	$this->nombre_archivo=$nombre_archivo;
  }
  public function obtenerTipoArchivo(){
  	return $this->tipo_archivo;
  }
  public function modificarTipoArchivo($tipo_archivo=null){
  	$this->tipo_archivo=$tipo_archivo;
  }
  public function obtenerUrlArchivo(){
  	return $this->url_archivo;
  }
  public function modificarUrlArchivo($url_archivo=null){
  	$this->url_archivo=$url_archivo;
  }
  public function obtenerTamanoArchivo(){
  	return $this->tamano_archivo;
  }
  public function modificarTamanoArchivo($tamano_archivo=null){
  	$this->tamano_archivo=$tamano_archivo;
  }
  public function obtenerFechaSubidaArchivo(){
  	return $this->fecha_subida_archivo;
  }
  public function modificarFechaSubidaArchivo($fecha_subida_archivo=null){
  	$this->fecha_subida_archivo=$fecha_subida_archivo;
  }
  public function obtenerIpOrigenArchivo(){
  	return $this->ip_origen_archivo;
  }
  public function modificarIpOrigenArchivo($ip_origen_archivo=null){
  	$this->ip_origen_archivo=$ip_origen_archivo;
  }
}
?>
