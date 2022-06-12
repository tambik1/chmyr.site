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
	public function setController(Controller $controller): void
	{
		$this->controller = $controller;
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

	private function handleCallbackResult($result): void
	{
		if (is_string($result))
		{
			$this->response->text($result);
		}
		elseif (is_array($result))
		{
			$this->response->json($result);
		}
	}

	private function formCallbackArguments($reflected, $params): array
	{
		$args = [];

		foreach ($reflected->getParameters() as $parameter)
		{
			if (isset($params[$parameter->getName()]))
			{
				$args[] = $params[$parameter->getName()];
			}
			elseif (!$parameter->isDefaultValueAvailable())
			{
				throw new \RuntimeException("No value for parameter $" . $parameter->getName());
			}
			else
			{
				$args[] = $parameter->getDefaultValue();
			}
		}

		return $args;
	}
}