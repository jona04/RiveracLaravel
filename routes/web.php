<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/',['uses'=>'PrincipalController@index','as'=>'principal.index']);

Auth::routes();

Route::get('/admin', ['uses'=>'AdminController@index','as'=>'admin.index']);


Route::get('/times', ['uses'=>'TimeControler@index','as'=>'time.index']);
Route::get('/time_add', ['uses'=>'TimeControler@adicionar','as'=>'time.adicionar']);
Route::post('/time_salvar', ['uses'=>'TimeControler@salvar','as'=>'time.salvar']);
Route::get('/times/editar/{id}', ['uses'=>'TimeControler@editar','as'=>'time.editar']);
Route::put('/times/atualizar/{id}', ['uses'=>'TimeControler@atualizar','as'=>'time.atualizar']);


Route::get('/jogadores', ['uses'=>'JogadorController@index','as'=>'jogador.index']);
Route::get('/jogadores_add', ['uses'=>'JogadorController@adicionar','as'=>'jogador.adicionar']);
Route::post('/jogadores_salvar', ['uses'=>'JogadorController@salvar','as'=>'jogador.salvar']);
Route::get('/jogadores/editar/{id}', ['uses'=>'JogadorController@editar','as'=>'jogador.editar']);
Route::put('/jogadores/atualizar/{id}', ['uses'=>'JogadorController@atualizar','as'=>'jogador.atualizar']);
Route::get('/jogadores/deletar/{id}', ['uses'=>'JogadorController@deletar','as'=>'jogador.deletar']);

Route::get('/meu_times', ['uses'=>'MeuTimeController@index','as'=>'meu_time.index']);
Route::get('/meu_time_add', ['uses'=>'MeuTimeController@adicionar','as'=>'meu_time.adicionar']);
Route::post('/meu_time_salvar', ['uses'=>'MeuTimeController@salvar','as'=>'meu_time.salvar']);
Route::get('/meu_times/editar/{id}', ['uses'=>'MeuTimeController@editar','as'=>'meu_time.editar']);
Route::put('/meu_times/atualizar/{id}', ['uses'=>'MeuTimeController@atualizar','as'=>'meu_time.atualizar']);

Route::get('/estadios', ['uses'=>'EstadioController@index','as'=>'estadio.index']);
Route::get('/estadio_add', ['uses'=>'EstadioController@adicionar','as'=>'estadio.adicionar']);
Route::post('/estadio_salvar', ['uses'=>'EstadioController@salvar','as'=>'estadio.salvar']);
Route::get('/estadios/editar/{id}', ['uses'=>'EstadioController@editar','as'=>'estadio.editar']);
Route::put('/estadios/atualizar/{id}', ['uses'=>'EstadioController@atualizar','as'=>'estadio.atualizar']);

Route::get('/campeonatos', ['uses'=>'CampeonatoController@index','as'=>'campeonato.index']);
Route::get('/campeonato_add', ['uses'=>'CampeonatoController@adicionar','as'=>'campeonato.adicionar']);
Route::post('/campeonato_salvar', ['uses'=>'CampeonatoController@salvar','as'=>'campeonato.salvar']);
Route::get('/campeonatos/editar/{id}', ['uses'=>'CampeonatoController@editar','as'=>'campeonato.editar']);
Route::put('/campeonatos/atualizar/{id}', ['uses'=>'CampeonatoController@atualizar','as'=>'campeonato.atualizar']);

Route::get('/partidas', ['uses'=>'PartidaController@index','as'=>'partida.index']);
Route::get('/partida_add', ['uses'=>'PartidaController@adicionar','as'=>'partida.adicionar']);
Route::post('/partida_salvar', ['uses'=>'PartidaController@salvar','as'=>'partida.salvar']);
Route::get('/partidas/editar/{id}', ['uses'=>'PartidaController@editar','as'=>'partida.editar']);
Route::put('/partidas/atualizar/{id}', ['uses'=>'PartidaController@atualizar','as'=>'partida.atualizar']);

Route::get('/videos', ['uses'=>'VideoController@index','as'=>'video.index']);
Route::get('/videos_add', ['uses'=>'VideoController@adicionar','as'=>'video.adicionar']);
Route::post('/videos_salvar', ['uses'=>'VideoController@salvar','as'=>'video.salvar']);
Route::get('/videos/editar/{id}', ['uses'=>'VideoController@editar','as'=>'video.editar']);
Route::put('/videos/atualizar/{id}', ['uses'=>'VideoController@atualizar','as'=>'video.atualizar']);
Route::get('/videos/deletar/{id}', ['uses'=>'VideoController@deletar','as'=>'video.deletar']);

Route::get('/noticias', ['uses'=>'NoticiaController@index','as'=>'noticia.index']);
Route::get('/noticia_add', ['uses'=>'NoticiaController@adicionar','as'=>'noticia.adicionar']);
Route::post('/noticia_salvar', ['uses'=>'NoticiaController@salvar','as'=>'noticia.salvar']);
Route::get('/noticias/editar/{id}', ['uses'=>'NoticiaController@editar','as'=>'noticia.editar']);
Route::put('/noticias/atualizar/{id}', ['uses'=>'NoticiaController@atualizar','as'=>'noticia.atualizar']);
Route::get('/noticias/deletar/{id}', ['uses'=>'NoticiaController@deletar','as'=>'noticia.deletar']);
Route::get('/noticias/detalhe/{id}', ['uses'=>'NoticiaController@detalhe','as'=>'noticia.detalhe']);

Route::get('/noticia/{titulo}/{id}', ['uses'=>'NoticiaPaginaController@pagina','as'=>'noticia.pagina']);

Route::get('/diretoria', ['uses'=>'DiretoriaController@pagina','as'=>'diretoria.pagina']);

Route::post('/enviar-contato', ['uses'=>'ContatoController@enviar','as'=>'contato.enviar']);