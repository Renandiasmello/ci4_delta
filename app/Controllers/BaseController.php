<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Session\Session;
use Config\Services;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['form', 'url'];

    public Session $session;

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        $this->session = Services::session();
    }

    public function loadView(string $view = "", array $data = []): string
    {
        $viewFile = APPPATH . 'Views/' . $view . '.php';

        if (!is_file($viewFile))
            throw new PageNotFoundException('A página não' . $view . 'foi localizada');

        $data['title'] = $data['title'] ?? $view;

        return view('template/header', $data)
            . view($view, $data)
            . view('template/footer', $data);
    }

    public function showMessage(bool $success, string $message): void
    {
        $message = $success ? sprintf('Registo %s com sucesso.', $message) : sprintf('Não foi possível %s o registro.', $message);
        $class = $success ? 'success' : 'danger';
        $this->session->setFlashdata(['studentMessage' => ['message' => $message, 'class' => $class]]);
    }

}
