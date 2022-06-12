<?php

namespace Chmyr\Core;

use Chmyr\Logger\Logger;

class Application
{
	public static string $ROOT_DIR;
	public static Application $app;
	public Request $request;
	public Response $response;
	public Config $config;
	public string $defaultLayout = 'main';

	public function __construct(string $rootDir)
	{
		self::$ROOT_DIR = $rootDir;
		self::$app = $this;

		$this->request = new Request();
		$this->response = new Response();
		$this->config = Config::getInstance();


		// TODO реализовать сессию
		// Session::start();
		//TODO реализовать авторизацию
		// Auth::tryLoginFromSession();
	}

	private function handleCallback($callback): Response
	{
		if ($callback === null)
		{
			return $this->response->error(404);
		}

		// If callback is a string, it's supposed to be a name of static page
		if (is_string($callback))
		{
			return $this->response->text(
				View::renderView($this->defaultLayout,$callback)
			);
		}
		return $this->response;
	}

	public function run(): void
	{
		['callback' => $callback, 'params' => $params] = Router::route(
			$this->request->getMethod(),
			$this->request->getPath()
		);

		try
		{
			$this->handleCallback($callback, $params)
				 ->flush();
		}
		catch (\Exception $e)
		{
			Logger::error($e->getMessage());
			$this->response
				->error(500)
				->flush();
		}
	}
}