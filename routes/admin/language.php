<?php
/* 多语言路由 */
$router->group( ['prefix' => 'language'], function ($router)
{
    $router->get( 'ajaxIndex', 'LanguageController@ajaxIndex' )->name( 'language.ajaxIndex' );
    $router->get( '{id}/status/{status}', 'LanguageController@status' );
    $router->get( '{id}/invite', 'LanguageController@invite' )->name( 'language.invite' );
    $router->post( '{id}/invite', 'LanguageController@storeInviteUser' );
    $router->get( '{id}/send', 'LanguageController@sendEmail' );

    /* 下载翻译 */
    $router->get( '{id}/download', 'LanguageController@download' )->name( 'language.download' );
    $router->get( '{id}/download/{method}', 'LanguageController@downloadOutput' )->name( 'language.output' );
});
$router->resource( 'language', 'LanguageController' );