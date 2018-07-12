<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {

        if($this->isHttpException($exception)){
            switch ($exception->getStatusCode()) {
                // PAGINA NO ENCONTRADA
                case 404:
                    return response()->view('adminlte::errors.404',[],404);
                break;
                // ERROR INTERNO DEL SERVIDOR
                case '500':
                    return response()->view('adminlte::errors.500',[],500);    
                break;

                case '503':
                    return response()->view('adminlte::errors.503',[],503);    
                break;    

                default:
                    return $this->renderHttpException($exception);
                break;
            }
        }
        return parent::render($request, $exception);
    }
}
